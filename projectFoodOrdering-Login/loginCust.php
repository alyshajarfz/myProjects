<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taste Haven Cafe | Login</title>
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
    <link rel="stylesheet" href="loginCust.css">

</head>

<body class="body-fixed">
    <!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="loginStaff.php">
                            <img src="Images/logoTHC.png" width="200" height="70" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-navigation">
                            <div class="nav-button">
                                <button class="btn white-btn" id="loginBtn" onclick="login()">Login</button>
                                <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
                            </div>
                            <div class="nav-menu-btn">
                                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header ends  -->

    <!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        <!------------------- login form -------------------------->

        <form class="login-container" id="login" method="post" action="loginC.php">

            <div class="top">
                <h1>Login</h1>
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
            </div>

            <div class="input-box">
                <input type="text" name="useremail" class="input-field" placeholder="Enter Your Email">
                <i class="bx bx-user"></i>
            </div>

            <div class="input-box">
                <input type="password" name="userpass" id="password" class="input-field" placeholder="Enter Your Password" required>
                <i class="bx bx-lock-alt"></i>
                <a class="fa fa-eye" aria-hidden="true" id="show-password"></a>
            </div>
            
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>

            <div class="input-login">
                <button type="button" class="submit" id="guest-btn">Continue As Guest</button>
                <button type="submit" id="submitLogin" class="submit">Login</button>
            </div>

        </form>

         <!------------------- registration form -------------------------->
        <form class="register-container" id="register" method="post" action="regC.php">
            <div class="top">
                <h1>Sign Up</h1>
                <span>Have an account? <a href="#" onclick="login()">Login</a></span>
            </div>

            <div class="input-box" id="user-id-box">
                <input type="text" class="input-field" name="user-id" id="user-id" placeholder="User ID" required>
                <i class="bx bx-user"></i>
            </div>

            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" name="userfname" placeholder="Firstname" required>
                    <i class="bx bx-user"></i>
                </div>

                <div class="input-box">
                    <input type="text" class="input-field" name="userlname" placeholder="Lastname" required>
                    <i class="bx bx-user"></i>
                </div>
            </div>

            <div class="input-box">
                <input type="text" class="input-field" name="useremail" placeholder="Email" required>
                <i class="bx bx-envelope"></i>
            </div>

            <div class="input-box">
                <input type="number" class="input-field" name="userphone"  placeholder="Phone Number" required>
                <i class='bx bxs-phone'></i>
            </div>

            <div class="input-boxpass">
                <input type="password" class="input-field" id="password1" name="userpass" placeholder="Password" required>
                <i class="bx bx-lock-alt"></i>
                <a class="fa fa-eye" aria-hidden="true" id="show-password1"></a>
            </div>

            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Remember Me</label>
                </div>

                <div class="two">
                    <input type="checkbox" id="terms-check">
                    <label><a href="#">I Agree with Privacy and Policy.</a></label>
                </div>
            </div>

            <div class="input-box">
                <input type="submit" class="submit" value="Register">
            </div>
        </form>
    </div>
</div>

<script>
// JavaScript to handle "Continue as Guest" button click
document.getElementById('guest-btn').onclick = function() {
    // Clear session using a fetch request to clearSession.php
    fetch('clearSession.php', { method: 'POST' })
        .then(response => response.text())  // If you need to process the server response
        .then(data => {
            // Redirect to indexMain.php after clearing the session
            window.location.href = 'indexMain.php';
        })
        .catch(error => {
            console.error('Error:', error);
        });
};
</script>

<script>

    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }

</script>

<script src="login.js"></script>

</body>
</html>