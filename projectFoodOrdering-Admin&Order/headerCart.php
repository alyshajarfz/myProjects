<header class="header">
   <div class="flex">

      <a href="#">
         <img src="logoTHC.png" width="200" height="70" alt="Logo">
      </a>

      <nav class="navbar">
         <a href="product.php">View Dish</a>
      </nav>

      <!-- Add Search Form -->
      <form action="product.php" method="get" class="search-form">
         <input type="text" name="search" placeholder="Search for dishes..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
         <button type="submit"><i class="fas fa-search"></i></button>
      </form>

      <?php
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);
      ?>

      <a href="cart.php" class="cart">Cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>
   </div>

   <style>

   /* Style for header */
.header .flex {
   display: flex;
   justify-content: space-between;
   align-items: center;
}

.header .search-form {
   display: flex;
   align-items: center;
   position: relative;
}

.header .search-form input {
   padding: 8px 12px;
   border: 2px solid #a08462; /* Customize border color */
   border-radius: 20px; /* Rounded corners */
   font-size: 16px;
   outline: none;
   width: 200px; /* Set width for the input */
   transition: width 0.3s ease; /* Smooth transition when focused */
}

.header .search-form input:focus {
   width: 250px; /* Expand input field when focused */
   border-color: #f9a602; /* Change border color on focus */
}

.header .search-form button {
   background-color: #a08462; /* Match your navbar background */
   color: white;
   border: none;
   border-radius: 50%;
   padding: 10px;
   margin-left: 10px;
   cursor: pointer;
   font-size: 16px;
}

.header .search-form button:hover {
   background-color: #f9a602; /* Highlight button on hover */
   transition: background-color 0.3s ease;
}

.header .navbar a {
   padding: 0 10px;
   color: #333;
   text-decoration: none;
}

/* Style for the cart icon and count */
.header .cart {
   position: relative;
   font-size: 18px;
   color: #333;
   text-decoration: none;
   padding: 10px 15px;
}

.header .cart .fa-shopping-cart {
   font-size: 24px; /* Adjust size of the cart icon */
   color: #333; /* Icon color */
}

.header .cart .cart-count {
   position: absolute;
   top: -5px;
   right: -5px;
   background-color: #f9a602; /* Cart item count background color */
   color: white;
   border-radius: 50%;
   padding: 2px 7px;
   font-size: 14px;
   font-weight: bold;
}

@media (max-width: 768px) {
   /* Adjustments for mobile responsiveness */
   .header .cart {
      padding: 8px;
   }

   .header .cart .fa-shopping-cart {
      font-size: 22px;
   }

   .header .cart .cart-count {
      top: -5px;
      right: -5px;
      font-size: 12px;
      padding: 2px 6px;
   }
}
</style>
</header>
