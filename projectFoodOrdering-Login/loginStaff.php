<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taste Haven Cafe | Staff</title>
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
    <link rel="stylesheet" href="loginStaff.css">
</head>

<body class="body-fixed">
    <!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="loginCust.php">
                            <img src="Images/logoTHC.png" width="200" height="70" alt="Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header ends  -->

    <!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
            
        <!------------------- login staff form -------------------------->

        <form class="login-container" id="login" method="post" action="loginS.php">

            <div class="top">
                <h1>Staff Login</h1>
                <span>Greetings To Our Staff!</span>
            </div>

            <div class="input-box">
                <input type="text" name="staffid" class="input-field" placeholder="Enter Your Staff ID">
                <i class="bx bx-user"></i>
            </div>

            <div class="input-box">
                <input type="password" class="input-field" name="staffpass" id="password2" placeholder="Enter Your Password">
                <i class="bx bx-lock-alt"></i>
                <a class="fa fa-eye" aria-hidden="true" id="show-password2"></a>
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
                <button type="submit" id="submitStaff" class="submit">Staff Login</button>
            </div>

        </form>
    </div>
</div>   

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
    </script>

    <script>

        const showPassword2 = document.querySelector("#show-password2");
        const passwordField2 = document.querySelector("#password2");

        //Add an event listener to toggle the password visibility
        showPassword2.addEventListener("click", function() {
            // Toggle the eye icon class to change the icon
            this.classList.toggle("fa-eye-slash");
            
            // Toggle the type attribute between 'password' and 'text'
            const type = passwordField2.getAttribute("type") === "password" ? "text" : "password";
            passwordField2.setAttribute("type", type);
        });

    </script>
</body>
</html>