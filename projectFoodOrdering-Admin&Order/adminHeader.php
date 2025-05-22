<?php
session_start();

include_once "./config/dbconnect.php";

// Handle logout if requested
if (isset($_POST['logout'])) {
    // Destroy the session
    session_unset();
    session_destroy();
    
    // Redirect with a message
    echo '<script type="text/javascript">alert("Logout successful!"); window.location.href = "../loginStaff.php";</script>';
    exit();
}
?>
<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #a08462;">
    <a class="navbar-brand ml-5" href="./index.php">
        <img src="./assetsmin/images/logoTHC.png" width="200" height="80" alt="Taste Haven Cafe">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    <div class="user-cart">  
        <?php           
        if (isset($_SESSION['admin_id'])) {
            // If user is logged in, show logout form
            ?>
            <form method="POST" style="display:inline;">
                <button type="submit" name="logout" style="background:none; border:none; cursor:pointer;">
                    <i class="fa fa-sign-out mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
                </button>
            </form>
            <?php
        } else {
            // If user is not logged in, show login icon
            ?>
            <a href="login.php" style="text-decoration:none;">
                <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
            </a>
            <?php
        }
        ?>
    </div>  
</nav>
