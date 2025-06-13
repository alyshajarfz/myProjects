<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taste Haven Cafe | Home</title>
    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- for swiper slider  -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- w3schools  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- fancy box  -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="indexStyle.css">
</head>

<body class="body-fixed">
    <!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="indexMain.php">
                            <img src="Images/logoTHC.png" width="200" height="70" alt="Logo">
                        </a>
                    </div>
                </div>
                <form class="col-lg-10">
                    <div class="main-navigation">
                        <button class="menu-toggle"><span></span><span></span></button>
                        <nav class="header-menu">
                            <ul class="menu food-nav-menu">
                                <li><a href="#home">HOME</a></li>
                                <li><a href="#menu">MENU</a></li>
                                <li><a href="#about">ABOUT US</a></li>
                                <li><a href="#contact">CONTACT</a></li>
                                <li><a href="#review">REVIEWS</a></li>
                            </ul>
                        </nav>

                            <a href="javascript:void(0)" class="header-btn header-cart">
                                <i class="fa fa-shopping-cart" style="font-size:16px; color: #513d25;" onclick="window.location.href='./adminCafe/product.php';"></i>
                            </a>
                            
                            <a href="javascript:void(0)" class="header-btn">
                                <i class='fas fa-user-circle' style='font-size:20px; color:#513d25' onclick="window.location.href='profileCust.php';"></i>
                            </a>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <!-- header ends  -->

    <div id="viewport">
        <div id="js-scroll-content">
            <section class="main-banner" id="home">
                <div class="js-parallax-scene">
                    <div class="banner-shape-1 w-100" data-depth="0.30">
                        <img src="Images/shape-1.png" alt="">
                    </div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
                        <img src="Images/shape-4.png" alt="">
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="brand-title mb-5">
                                    <h5 class="h5-title">Our Business Partner</h5>
                                </div>
                                <div class="brands-row">
                                    <div class="brands-box">
                                        <img src="assets/images/brands/br2.png" alt="">
                                    </div>
                                    <div class="brands-box">
                                        <img src="assets/images/brands/br5.png" alt="" style="width: 70%; height: 70%; object-fit: contain;">
                                    </div>
                                    <div class="brands-box">
                                        <img src="assets/images/brands/br1.png" alt="" style="width: 90%; height: 90%; object-fit: contain;">
                                    </div>
                                    <div class="brands-box">
                                        <img src="assets/images/brands/br4.png" alt="" style="width: 140%; height: 140%; object-fit: contain;">
                                    </div>
                                    <div class="brands-box">
                                        <img src="assets/images/brands/b2.png" alt="" style="width: 120%; height: 120%; object-fit: contain;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-text">
                                    <h1 class="h1-title">
                                        SATISFY YOUR
                                        <span>CRAVING</span>
                                        <br>JUST ONE CLICK!</br>
                                    </h1>

                                    <p>Delicious food</p>
                                        <p>is waiting for you!</p>

                                    <div class="banner-btn mt-4">
                                        <a href="./adminCafe/product.php" class="sec-btn">ORDER NOW!</a>

                                        <section class="categ">
                                            <div class="l-items">
                                                <h3>Malaysian Favourite!</h3>
                                                <div class="card-list">
                                                    <div class="card">
                                                        <img src="Images/menu-3.png" alt="">
                                                        <div class="foodtit">
                                                            <h1>Nasi Goreng Kampung</h1>
                                                        </div>
                                                        <div class="desc-food">
                                                            <p>5.0 <i class="uil uil-star" style="font-size:16px; color: #513d25; margin-bottom: 18px;" ></i></p>
                                                        </div>
                                                        <div class="price">
                                                            <span>RM8.80  eta 10-15mins</span><span><i class= ></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-img-wp">
                                    <div class="banner-img" style="background-image: url(Images/food.jpg);">
                                    </div>
                                </div>
                                <div class="banner-img-text mt-4 m-auto">
                                    <h5 class="h5-title" align="center">Malaysian Food is Your Right Decision!</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section style="background-image: url(assets/images/menu-bg.png);"
                class="our-menu section bg-light repeat-img" id="menu">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">VIEW MENU</p>
                                    <h2 class="h2-title">wake up early, <span>eat fresh & healthy</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Category -->
                        <div class="menu-tab-wp"> 
                            <div class="row">
                                <div class="col-lg-12 m-auto">
                                    <div class="menu-tab text-center">
                                        <ul class="filters">
                                            <div class="filter-active"></div>
                                            <li class="filter" data-filter=".all, .main-meal, .dessert, .drink">
                                                <img src="assets/images/menu-4.png" alt="">
                                                ALL
                                            </li>
                                            <li class="filter" data-filter=".main-meal">
                                                <img src="assets/images/menu-3.png" alt="">
                                                MAIN MEALS
                                            </li>
                                            <li class="filter" data-filter=".dessert">
                                                <img src="Images/dessert.png" width="60" alt="">
                                                DESSERT
                                            </li>
                                            <li class="filter" data-filter=".drink">
                                                <img src="Images/drink.png" width="28" alt="">
                                                DRINK
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dishes Section -->
                        <div class="menu-list-row">
                            <div class="row g-xxl-5 bydefault_show" id="menu-dish">
                                <!-- 1 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp main-meal" data-cat="main-meal">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="Images/rice-5.png" width="280" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5.0
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">White Rice</h3>
                                            <p>Soft & delicate texture</p>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>RM2.50</b>
                                                </li>

                                                <li>
                                                    <a href="./adminCafe/product.php" class="dish-add-btn">
                                                        <i class="uil uil-plus" style="margin: 10px; position: relative; top: 3px;"></i>
                                                    </a>
                                                </li>
                                            </ul>  
                                        </div>
                                    </div>
                                </div>

                                <!-- 2 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp dessert" data-cat="dessert">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="Images/dessert-6.png" width="280" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5.0
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Chocolate Indulgence</h3>
                                            <p>Sweetness & richness</p>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>RM12.50</b>
                                                </li>
                                                <li>
                                                    <a href="./adminCafe/product.php" class="dish-add-btn">
                                                        <i class="uil uil-plus" style="margin: 10px; position: relative; top: 3px;"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 3 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp main-meal" data-cat="main-meal">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="Images/crab.png" width="280" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5.0
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Salted Egg Crab</h3>
                                            <p>Savory & salty richness</p>
                                        </div>
                            
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>RM18.00</b>
                                                </li>
                                                <li>
                                                    <a href="./adminCart/product.php" class="dish-add-btn">
                                                        <i class="uil uil-plus" style="margin: 10px; position: relative; top: 3px;"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp drink" data-cat="drink">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="Images/mango.png" width="270" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.8
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Mango Float</h3>
                                            <p>Creamy & tropical sweetness</p>
                                        </div>
                                       
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>RM8.00</b>
                                                </li>
                                                <li>
                                                    <a href="./adminCafe/product.php" class="dish-add-btn">
                                                        <i class="uil uil-plus" style="margin: 10px; position: relative; top: 3px;"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 5 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp main-meal" data-cat="main-meal">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="Images/rice-1.png" width="280" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.7
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Nasi Goreng Kampung</h3>
                                            <p>Savory spicy & aroma </p>
                                        </div>
                                       
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>RM8.50</b>
                                                </li>
                                                <li>
                                                    <a href="./adminCafe/product.php" class="dish-add-btn">
                                                        <i class="uil uil-plus" style="margin: 10px; position: relative; top: 3px;"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 6 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp dessert" data-cat="dessert">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="Images/dessert-7.png" width="280" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.6
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Vanilla Velvet</h3>
                                            <p>Cool smooth & creamy </p>
                                        </div>
                                       
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>RM5.00</b>
                                                </li>
                                                <li>
                                                    <a href="./adminCafe/product.php" class="dish-add-btn">
                                                        <i class="uil uil-plus" style="margin: 10px; position: relative; top: 3px;"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 7 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp main-meal" data-cat="main-meal">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="Images/sotong.png" width="265" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Golden Spice Squid</h3>
                                            <p>Spicy & slightly sweet </p>
                                        </div>
                                        
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>RM10.50</b>
                                                </li>
                                                <li>
                                                    <a href="./adminCafe/product.php" class="dish-add-btn">
                                                        <i class="uil uil-plus" style="margin: 10px; position: relative; top: 3px;"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 8 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp drink" data-cat="drink">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="Images/melon.png" width="275" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Watermelon Breeze</h3>
                                            <p>Light sweet & juicy</p>
                                        </div>
                                       
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>RM6.00</b>
                                                </li>
                                                <li>
                                                    <a href="./adminCafe/product.php" class="dish-add-btn">
                                                        <i class="uil uil-plus" style="margin: 10px; position: relative; top: 3px;"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 9 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp main-meal" data-cat="main-meal">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="Images/shrimp.png" width="275" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Shrimp Buttermilk</h3>
                                            <p>Creamy aromatic spices</p>
                                        </div>
                                        
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>RM13.00</b>
                                                </li>
                                                <li>
                                                    <a href="./adminCafe/product.php" class="dish-add-btn">
                                                        <i class="uil uil-plus" style="margin: 10px; position: relative; top: 3px;"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 10 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp dessert" data-cat="dessert">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="Images/dessert-2.png" width="275" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Tiramisu Haven</h3>
                                            <p>Aromatic coffee bitterness</p>
                                        </div>
                                        
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>RM14.50</b>
                                                </li>
                                                <li>
                                                    <a href="./adminCafe/product.php" class="dish-add-btn">
                                                        <i class="uil uil-plus" style="margin: 10px; position: relative; top: 3px;"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 11 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp main-meal" data-cat="main-meal">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="Images/daging.png" width="285" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.3
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">Black Pepper Beef</h3>
                                            <p>Savory & pepper aromatic</p>
                                        </div>
                                        
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>RM13.50</b>
                                                </li>
                                                <li>
                                                    <a href="./adminCafe/product.php" class="dish-add-btn">
                                                        <i class="uil uil-plus" style="margin: 10px; position: relative; top: 3px;"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- 12 -->
                                <div class="col-lg-4 col-sm-6 dish-box-wp drink" data-cat="drink">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="Images/coklat.png" width="275" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            4.8
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">ChocoCrave Shake</h3>
                                            <p>Sweet & velvety texture</p>
                                        </div>
                                        
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>RM7.00</b>
                                                </li>
                                                <li>
                                                    <a href="./adminCafe/product.php" class="dish-add-btn">
                                                        <i class="uil uil-plus" style="margin: 10px; position: relative; top: 3px;"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about-sec section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">About Us</p>
                                    <h2 class="h2-title">Discover our <span>restaurant story</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                    <div class="form">
                                        <p class="par">
                                            Welcome to Food Haven Cafe, where culinary<br />artistry meets the
                                            warmth of hospitality.<br />
                                            Located in the heart of Crystal Bay, Melaka our<br />restaurant is a
                                            celebration of flavors, fresh <br />ingredients, and unforgettable
                                            dining<br />experiences.
                                        </p>
                                    </div>
                          
                                    <div class="gallery">
                                        <a target="_blank" href="Images/aboutUs1.png">
                                            <img src="Images/aboutUs1.png" width="400" >
                                        </a>
                                    </div>
                          
                                    <div class="gallery2">
                                        <a target="blank" href="Images/aboutUs2.png">
                                            <img src="Images/aboutUs2.png" width="400" height="200">
                                        </a>
                                    </div>

                                    <div class="story">
                                        <h2>OUR STORY</h2>
                                        Food Haven Cafe was founded in 2023 with <br/>a simple yet ambitious
                                        vision: to create a<br/>
                                        dining destination where food, family, and<br/>
                                        friends come together. Inspired by the rich<br/>
                                        south east asian cuisine, our restaurant<br/>
                                        reflects our passion for authentic flavours <br/>
                                        and exceptional service.
                                    </div>
                </div>
            </section>

            <section class="book-table section bg-light">
                <div class="book-table-shape">
                    <img src="assets/images/table-leaves-shape.png" alt="">
                </div>

                <div class="book-table-shape book-table-shape2">
                    <img src="assets/images/table-leaves-shape.png" alt="">
                </div>

                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">CONTACT</p>
                                    <h2 class="h2-title">Need help? Get in touch with us!</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="book-table-info">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="table-title text-center">
                                        <h3>Monday to Sunday</h3>
                                        <p>9:00 am - 9:00 pm</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="call-now text-center">
                                        <i class="uil uil-phone"></i>
                                        <a href="tel:012-345 6895">+012-345 6895</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="table-title text-center" >
                                        <!-- Map container with adjusted position and size -->
                                        <div class="map" style="position: absolute; width: 18%; top: 150px; left: 1100px;">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4648.088189733524!2d102.30765834846508!3d2.167077821403415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1ec2ebaa1a12b%3A0xdb369cfa140cd029!2sCrystal%20Bay%20Beach!5e1!3m2!1sen!2smy!4v1737094276983!5m2!1sen!2smy"
                                                width="100%" 
                                                height="200px"  
                                                loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade"
                                            >
                                            </iframe>
                                        </div>

                                        <!-- Location text, adjusted to fit below the map -->
                                        <div class="location" style="position: absolute; top: 450px; right: 180px; text-align: center;">
                                            Our Shop<br />Crystal Bay, Melaka
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="gallery">
                            <div class="col-lg-10 m-auto">
                                <div class="book-table-img-slider" id="icon">
                                    <div class="swiper-wrapper">
                                        <a href="assets/images/bt1.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/b1.jpg)"></a>
                                        <a href="assets/images/bt2.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/b3.jpg)"></a>
                                        <a href="assets/images/bt3.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/b6.jpg)"></a>
                                        <a href="assets/images/bt4.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/b7.jpg)"></a>
                                        <a href="assets/images/bt1.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/b4.jpg)"></a>
                                        <a href="assets/images/bt2.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/b2.jpeg)"></a>
                                        <a href="assets/images/bt3.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/b5.jpg)"></a>
                                        <a href="assets/images/bt4.jpg" data-fancybox="table-slider"
                                            class="book-table-img back-img swiper-slide"
                                            style="background-image: url(assets/images/b8.jpg)"></a>
                                    </div>

                                    <div class="swiper-button-wp">
                                        <div class="swiper-button-prev swiper-button">
                                            <i class="uil uil-angle-left"></i>
                                        </div>
                                        <div class="swiper-button-next swiper-button">
                                            <i class="uil uil-angle-right"></i>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="our-team section" id="contact">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">Our Team</p>
                                    <h2 class="h2-title">Meet our Chefs</h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row team-slider">
                            <div class="swiper-wrapper">
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/chef/cf1.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Belle</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/chef/cf5.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Hilton</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/chef/cf3.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Justin</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/chef/cf2.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Ava</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 swiper-slide">
                                    <div class="team-box text-center">
                                        <div style="background-image: url(assets/images/chef/cf4.jpg);"
                                            class="team-img back-img">

                                        </div>
                                        <h3 class="h3-title">Charlie</h3>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-wp">
                                <div class="swiper-button-prev swiper-button">
                                    <i class="uil uil-angle-left"></i>
                                </div>
                                <div class="swiper-button-next swiper-button">
                                    <i class="uil uil-angle-right"></i>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Reviews  -->
            <section class="testimonials section bg-light" id="review">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">What they say</p>
                                    <h2 class="h2-title">What our customers <span>say about us</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="testimonials-img">
                                    <img src="assets/images/customers.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/p1.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:85%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Olivia
                                                </h3>
                                                <p>Lovely, Love the serene! Good Food
                                                    I love it</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/p2.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:80%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Sofea
                                                </h3>
                                                <p>Fantastic, Love the serene!
                                                    Beach Atmosphere...<p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/p3.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:89%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    John
                                                </h3>
                                                <p>Great, Love the serene! can repeat to eat here!
                                                    Im from oversea!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/p4.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:100%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Kim
                                                </h3>
                                                <p>Delicious, Lets repeat to eat here!
                                                    Im from korea!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- footer starts  -->
            <footer class="site-footer" id="home">
                <div class="top-footer section">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="footer-info">
                                        <div class="footer-logo">
                                            <a href="indexMain.php">
                                                <img src="Images/logoTHC.png" alt="" style="width:80%">
                                            </a>
                                        </div>
                                        <p>Follow Us
                                        </p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-github-alt"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uil uil-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="footer-flex-box">
                                        <div class="footer-table-info">
                                            <h3 class="h3-title">open hours</h3>
                                            <ul>
                                                <li><i class="uil uil-clock"></i> Mon-Sun : 9am - 9pm</li>
                                            </ul>
                                        </div>
                                        <div class="footer-menu food-nav-menu">
                                            <h3 class="h3-title">Links</h3>
                                            <ul class="column-2">
                                                <li><a href="#" class="footer-active-menu">Home</a></li>
                                                <li><a href="#menu">Menu</a></li>
                                                <li><a href="#about">About</a></li>
                                                <li><a href="#contact">Contact</a></li>
                                                <li><a href="#review">Reviews</a></li>
                                            </ul>
                                        </div>
                                        <div class="footer-menu">
                                            <h3 class="h3-title">Company</h3>
                                            <ul>
                                                <li><a href="#">Terms & Conditions</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Cookie Policy</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- jquery  -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!-- fontawesome  -->
    <script src="assets/js/font-awesome.min.js"></script>

    <!-- swiper slider  -->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!-- mixitup -- filter  -->
    <script src="assets/js/jquery.mixitup.min.js"></script>

    <!-- fancy box  -->
    <script src="assets/js/jquery.fancybox.min.js"></script>

    <!-- parallax  -->
    <script src="assets/js/parallax.min.js"></script>

    <!-- gsap  -->
    <script src="assets/js/gsap.min.js"></script>

    <!-- scroll trigger  -->
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- scroll to plugin  -->
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <!-- rellax  -->
    <!-- <script src="assets/js/rellax.min.js"></script> -->
    <!-- <script src="assets/js/rellax-custom.js"></script> -->
    <!-- smooth scroll  -->
    <script src="assets/js/smooth-scroll.js"></script>
    <!-- custom js  -->
    <script src="assets/js/indexMain.js"></script>

</body>
</html>