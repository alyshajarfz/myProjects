<?php
@include './config/dbconnect.php';

// Ensure the search term is safe and valid
$search_query = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';

// Construct the SQL query to search dishes based on the search term
if ($search_query) {
    $select_dish = mysqli_query($conn, "SELECT * FROM `dish` WHERE `dish_name` LIKE '%$search_query%' OR `dish_desc` LIKE '%$search_query%'");
} else {
    $select_dish = mysqli_query($conn, "SELECT * FROM `dish`");
}

if(isset($_POST['add_to_cart'])){
   $dish_name = $_POST['dish_name'];
   $dish_price = $_POST['dish_price'];
   $dish_image = $_POST['dish_image'];
   $dish_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE cart_name = '$dish_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'Dish already added to cart';
   }else{
      $insert_dish = mysqli_query($conn, "INSERT INTO `cart`(cart_name, cart_price, cart_image, cart_quantity) 
      VALUES('$dish_name', '$dish_price', '$dish_image', '$dish_quantity')");
      $message[] = 'Dish added to cart successfully';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dish</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./assets/cssA/style.css">
</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};
?>

<?php include 'headerCart.php'; ?>

<div class="container">

<section class="products">

   <h1 class="heading">Latest Dish</h1>

   <div class="box-container">

      <?php
      if(mysqli_num_rows($select_dish) > 0){
         while($fetch_dish = mysqli_fetch_assoc($select_dish)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="./assets/uploaded_img/<?php echo $fetch_dish['dish_image']; ?>" alt="">
            <h3><?php echo $fetch_dish['dish_name']; ?></h3>
            <div class="price">RM<?php echo number_format($fetch_dish['dish_price'], 2); ?></div>
            <input type="hidden" name="dish_name" value="<?php echo $fetch_dish['dish_name']; ?>">
            <div class="desc" style="text-align: center; margin: 10px 0;"><?php echo $fetch_dish['dish_desc']; ?></div>
            <input type="hidden" name="dish_price" value="<?php echo $fetch_dish['dish_price']; ?>">
            <input type="hidden" name="dish_image" value="<?php echo $fetch_dish['dish_image']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         }
      } else {
         echo "<p>No dishes found matching your search.</p>";
      }
      ?>

   </div>

</section>

</div>

<!-- custom js file link  -->
<script src="./assets/jsA/script.js"></script>

</body>
</html>
