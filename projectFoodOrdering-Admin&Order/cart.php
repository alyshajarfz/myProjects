<?php

@include './config/dbconnect.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET cart_quantity = '$update_value' WHERE cart_id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE cart_id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shopping cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./assets/cssA/style.css">
</head>
<body>

<?php include 'headerCart.php'; ?>

<div class="container">
<section class="shopping-cart">

   <h1 class="heading">Shopping cart</h1>

   <table>

      <thead>
         <th>image</th>
         <th>name</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
               $subtotal = $fetch_cart['cart_price'] * $fetch_cart['cart_quantity'];
        
               // Add the subtotal of the current item to $grand_total
               $grand_total += $subtotal;
         ?>

         <tr>
            <td><img src="./assets/uploaded_img/<?php echo $fetch_cart['cart_image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['cart_name']; ?></td>
            <td>RM<?php echo number_format($fetch_cart['cart_price'], 2); ?></td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['cart_id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['cart_quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn">
               </form>   
            </td>
            <td>RM<?php echo number_format($subtotal, 2); ?></td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['cart_id']; ?>" onclick="return confirm('Remove item from cart?')" 
            class="delete-btn"> <i class="fas fa-trash"></i> Remove</a></td>
         </tr>
         <?php
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="product.php" class="option-btn" style="margin-top: 0;">Continue Shopping</a></td>
            <td colspan="3">Grand Total</td>
            <td>RM<?php echo number_format($grand_total, 2); ?></td>
            <td><a href="cart.php?delete_all" onclick="return confirm('Are you sure you want to remove all?');" class="delete-btn"> <i class="fas fa-trash"></i>Remove all</a></td>
         </tr>
      </tbody>
   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">Procced to checkout</a>
   </div>

</section>
</div>
   
<!-- custom js file link  -->
<script src="./assets/jsA/script.js"></script>

</body>
</html>