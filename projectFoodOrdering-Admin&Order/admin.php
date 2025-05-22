<?php

@include './config/dbconnect.php';

//Insert Dish
if(isset($_POST['add_dish'])){
   $d_name = $_POST['d_name'];
   $d_price = $_POST['d_price'];
   $d_desc = $_POST['d_desc'];
   $category = $_POST['category'];
   $d_image = $_FILES['d_image']['name'];
   $d_image_tmp_name = $_FILES['d_image']['tmp_name'];
   $d_image_folder = './assets/imagesA/'.$d_image;

   $insert_query = mysqli_query($conn, "INSERT INTO `dish`(dish_name, dish_price, dish_desc, dish_image, category_id) 
   VALUES('$d_name', '$d_price', '$d_desc', '$d_image','$category')") or die('query failed');

   if($insert_query){
      move_uploaded_file($d_image_tmp_name, $d_image_folder);
      $message[] = 'Dish add succesfully';
   }else{
      $message[] = 'Dish could not be add';
   }
};

//Delete Dish
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `dish` WHERE dish_id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:admin.php');
      $message[] = 'Dish has been deleted';
   }else{
      header('location:admin.php');
      $message[] = 'Dish could not be deleted';
   };
};

//Update Dish
if(isset($_POST['update_dish'])){
   $update_d_id = $_POST['update_d_id'];
   $update_d_name = $_POST['update_d_name'];
   $update_d_price = $_POST['update_d_price'];
   $update_d_desc = $_POST['update_d_desc'];
   $update_category = $_POST['category'];
   $update_d_image = $_FILES['update_d_image']['name'];
   $update_d_image_tmp_name = $_FILES['update_d_image']['tmp_name'];
   $update_d_image_folder = 'uploaded_img/'.$update_d_image;

   $update_query = mysqli_query($conn, "UPDATE `dish` SET dish_name = '$update_d_name', category_id = '$update_category', 
   dish_price = '$update_d_price', dish_image = '$update_d_image' WHERE dish_id = '$update_d_id'");

   if($update_query){
      move_uploaded_file($update_d_image_tmp_name, $update_d_image_folder);
      $message[] = 'Dish updated succesfully';
      header('location:admin.php');
   }else{
      $message[] = 'Dish could not be updated';
      header('location:admin.php');
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Panel</title>

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

<?php include 'header.php'; ?>

<div class="container">

<section>

<!-- Select dish-->

<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
   <h3>Add a new dish</h3>
   <input type="text" name="d_name" placeholder="Enter the dish name" class="box" required>
   <input type="number" name="d_price" min="0" step="0.01" placeholder="Enter the dish price" class="box" required>

   <select name="category" id="category" class="box" required>
      <option disabled selected>Select category</option>
      <?php
         $sql = "SELECT * FROM category";
         $result = mysqli_query($conn, $sql);
         while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='".$row['category_id']."'>".$row['category_name']."</option>";
         }
      ?>
   </select>

   <input type="text" name="d_desc" placeholder="Enter the dish description" class="box" required>
   <input type="file" name="d_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
   <input type="submit" value="add dish" name="add_dish" class="btn">
</form>

</section>

<section class="display-product-table">
   <table>
      <thead>
         <th>Dish image</th>
         <th>Dish name</th>
         <th>Dish category</th>
         <th>Dish description</th>
         <th>Dish price</th>
         <th>action</th>
      </thead>

      <tbody>
         <?php
         
            $select_products = mysqli_query($conn, "SELECT * FROM `dish` INNER JOIN category ON dish.category_id = category.category_id");
            if(mysqli_num_rows($select_products) > 0){
               while($row = mysqli_fetch_assoc($select_products)){
         ?>

         <tr>
            <td><img src="./assets/imagesA/<?php echo $row['dish_image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['dish_name']; ?></td>
            <td><?php echo $row['dish_desc']; ?></td>
            <td>RM<?php echo number_format($row['dish_price'], 2); ?></td>
            <td><?php echo $row['category_name']; ?></td>
            <td>
               <a href="admin.php?delete=<?php echo $row['dish_id']; ?>" class="delete-btn" onclick="return confirm('Are your sure you want to delete this?');">
               <i class="fas fa-trash"></i> delete </a>
               <a href="admin.php?edit=<?php echo $row['dish_id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> update </a>
            </td>
         </tr>

         <?php
            };    
            }else{
               echo "<div class='empty'>No dish added</div>";
            };
         ?>
      </tbody>
   </table>

</section>

<section class="edit-form-container">
   <?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($conn, "SELECT * FROM `dish` WHERE dish_id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="./assets/imagesA/<?php echo $fetch_edit['dish_image']; ?>" height="200" alt="">
      <input type="hidden" name="update_d_id" value="<?php echo $fetch_edit['dish_id']; ?>">
      <input type="text" class="box" required name="update_d_name" value="<?php echo $fetch_edit['dish_name']; ?>">
      <input type="text" class="box" required name="update_d_desc" value="<?php echo $fetch_edit['dish_desc']; ?>">
      <input type="number" min="0" step="0.01" class="box" required name="update_d_price" value="<?php echo $fetch_edit['dish_price']; ?>">

         <select name="category" id="category" class="box" required>
            <option disabled>Select category</option>
            <?php
               $sql_categories = "SELECT * FROM category";
               $result_categories = mysqli_query($conn, $sql_categories);
               while ($category = mysqli_fetch_assoc($result_categories)) {
                  $selected = ($fetch_edit['category_id'] == $category['category_id']) ? 'selected' : '';
                  echo "<option value='".$category['category_id']."' $selected>".$category['category_name']."</option>";
               }
            ?>
         </select>

      <input type="file" class="box" required name="update_d_image" accept="image/png, image/jpg, image/jpeg">
      <input type="submit" value="update the dish" name="update_dish" class="btn">
      <input type="reset" value="cancel" id="close-edit" class="option-btn">
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>
</section>
</div>

<script>
    // JavaScript to hide the form when cancel button is clicked
    document.getElementById('close-edit').addEventListener('click', function() {
        document.querySelector('.edit-form-container').style.display = 'none';
    });
</script>

<!-- custom js file link  -->
<script src="./assets/jsA/script.js"></script>

</body>
</html>