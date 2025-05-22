<?php
session_start();
include "dbconnect.php";

// Check if the form is submitted and data is available
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['useremail']) && isset($_POST['userpass'])) {
        $id = mysqli_real_escape_string($conn, $_POST['useremail']);
        $pass = mysqli_real_escape_string($conn, $_POST['userpass']);

        $chkpass = "SELECT * FROM `customer` WHERE `cust_email`='$id' and `cust_pass`='$pass';";
        $chkok = mysqli_query($conn, $chkpass);

        $countrec = mysqli_num_rows($chkok);
        if ($countrec > 0) {
            // Fetch the user details from the database
            $user_data = mysqli_fetch_assoc($chkok);

            // Store user details in session
            $_SESSION['useremail'] = $id;
            $_SESSION['username'] = $user_data['cust_fname'] . ' ' . $user_data['cust_lname']; // Assuming the user's name is in cust_name
            $_SESSION['userphone'] = $user_data['cust_num'];

            // Assuming customer is logged in and you have customer details
            $_SESSION['cust_id'] = $user_data['cust_id']; // Customer ID
            $_SESSION['cust_fname'] = $user_data['cust_fname']; // Customer First Name
            $_SESSION['cust_lname'] = $user_data['cust_lname']; // Customer Last Name
            $_SESSION['cust_email'] = $user_data['cust_email']; // Customer Email
            $_SESSION['cust_num'] = $user_data['cust_num']; // Customer Mobile Number

            // Redirect to the main page after successful login
            echo '<script type="text/javascript">alert("You are a Valid User"); window.location.href = "indexMain.php";</script>';
            exit();
        } else {
            echo '<script type="text/javascript">alert("Invalid email or password! Please try again!"); window.location.href = "loginCust.php";</script>';
            exit();
        }
    }
}
?>
