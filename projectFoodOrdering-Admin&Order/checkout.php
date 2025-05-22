<?php
@include './config/dbconnect.php';

// Initialize variables for user details
$user_name = '';
$user_phone = '';
$user_email = '';

session_start();

if (isset($_SESSION['useremail'])) {
    // Fetch user data from the database using the email stored in the session
    $user_email = $_SESSION['useremail'];
    $query = "SELECT * FROM `customer` WHERE `cust_email` = '$user_email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Fetch user details from the database
        $user_data = mysqli_fetch_assoc($result);
        $user_name = $user_data['cust_fname'] . ' ' . $user_data['cust_lname'];  // Assuming 'cust_name' stores the user's name
        $user_phone = $user_data['cust_num'];  // Assuming 'cust_phone' stores the user's phone number
    }
}

if (isset($_POST['order_btn'])) {
   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $type = $_POST['type'];
   
   // Start by getting cart details
   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   $dish_name = [];

   // If cart has items, calculate total and prepare order details
   if(mysqli_num_rows($cart_query) > 0){
      while($dish_item = mysqli_fetch_assoc($cart_query)){
         $dish_name[] = $dish_item['cart_name'] .' ('. $dish_item['cart_quantity'] .') ';
         $dish_price = number_format($dish_item['cart_price'] * $dish_item['cart_quantity']);
         $price_total += $dish_price;
         
         // This will be used later for order details
         $dish_id = $dish_item['cart_id'];
         $quantity = $dish_item['cart_quantity'];
         $price = $dish_item['cart_price'];

         // Avoid inserting into order_details just yet; we need order_id first
      }
   }

   $total_product = implode(',', $dish_name);

   // Insert the order into myorders table and get the order_id
   $detail_query = mysqli_query($conn, "INSERT INTO `myorders`(my_name, my_phone, my_email, my_otype, my_total, my_price)
   VALUES('$name','$number','$email','$type','$total_product','$price_total')") or die('query failed');
   
   // Now we can get the order_id since the insert was successful
   $order_id = mysqli_insert_id($conn);

   // Insert into orders table
   $cust_query = mysqli_query($conn, "SELECT cust_id FROM `customer` WHERE cust_email = '$email'");
   $cust_data = mysqli_fetch_assoc($cust_query);
   $cust_id = $cust_data['cust_id'];

   $order_query = "INSERT INTO `orders` (cust_id, order_type, pay_status, order_status, order_date)
                   VALUES ('$cust_id', '$type', 0, 0, NOW())";
   mysqli_query($conn, $order_query) or die('Order insertion failed');

   // Now insert each item into order_details with the correct order_id
   if($order_id) {
      
      while($dish_item = mysqli_fetch_assoc($cart_query)){
         $dish_id = $dish_item['cart_id'];
         $quantity = $dish_item['cart_quantity'];
         $price = $dish_item['cart_price'];

         // Insert into order_details now that we have order_id
         $orderdet_query = "INSERT INTO `order_details` (detail_id, order_id, dish_id, quantity, price) 
                         VALUES ('$order_id', '$dish_id', '$quantity', '$price')";
         mysqli_query($conn, $orderdet_query);
      }

      // Empty the cart after the order is placed
      mysqli_query($conn, "DELETE FROM `cart`");
   }

   // Now display the confirmation message
   if($detail_query) {
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : RM".$price_total."  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your number : <span>".$number."</span> </p>
            <p> your email : <span>".$email."</span> </p>
            <p> your order type : <span>".$type."</span> </p>
         </div>
            <a href='product.php' class='btn'>continue shopping</a>
         </div>
      </div>
      ";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./assets/cssA/style.css">

</head>
<body>

<?php include 'headerCart.php'; ?>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">Complete your order</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['cart_price'] * $fetch_cart['cart_quantity'], 2);
            $grand_total = $total += $total_price;
      ?>
      <span><?= $fetch_cart['cart_name']; ?>(<?= $fetch_cart['cart_quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>Your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> Grand Total: RM<?= number_format($total, 2); ?></span>
   </div>

      <div class="flex">
         <div class="inputBox">
            <span>Your Name</span>
            <!-- Auto-fill name if logged in -->
            <input type="text" placeholder="Enter your name" name="name" value="<?= $user_name; ?>" required>
         </div>
         <div class="inputBox">
            <span>Your Number</span>
            <!-- Auto-fill phone number if logged in -->
            <input type="number" placeholder="Enter your number" name="number" value="<?= $user_phone; ?>" required>
         </div>
         <div class="inputBox">
            <span>Your Email</span>
            <!-- Auto-fill email if logged in -->
            <input type="email" placeholder="Enter your email" name="email" value="<?= $user_email; ?>" required>
         </div>
         <div class="inputBox">
            <span>Order Type</span>
            <select name="type">
               <option value="Dine-In">Dine-In</option>
               <option value="Take-Away">Take-Away</option>
            </select>
         </div>
      
      <input type="submit" value="order now" name="order_btn" class="btn">
   </form>

</section>
</div>

<!-- custom js file link  -->
<script src="./assets/jsA/script.js"></script>
   
</body>
</html>
