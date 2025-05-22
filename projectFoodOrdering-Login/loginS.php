<?php

    session_start();

    include "dbconnect.php";
    
    $id=mysqli_real_escape_string($conn,$_POST['staffid']);
    $pass=mysqli_real_escape_string($conn,$_POST['staffpass']);

    $chkpass = "SELECT * FROM `admin` WHERE `admin_id`='$id' AND `admin_pass`='$pass';";
    $chkok=mysqli_query($conn,$chkpass);

    $countrec=mysqli_num_rows($chkok);
    if ($countrec>0)
        {
            $_SESSION['admin_id']=$id;
            echo '<script type="text/javascript">alert("You are Valid User"); window.location.href = "./adminCafe/index.php";</script>';
            exit();
        }
        else
        {
            echo '<script type="text/javascript">alert("Invalid ID or password!"); window.location.href = "loginStaff.php";</script>';
            exit();
        }
?>