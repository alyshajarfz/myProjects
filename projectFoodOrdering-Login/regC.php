<?php
    include "dbconnect.php";

    $cid=mysqli_real_escape_string($conn,$_POST['user-id']);
    $cfname=mysqli_real_escape_string($conn,$_POST['userfname']);
    $clname=mysqli_real_escape_string($conn,$_POST['userlname']);
    $cemail=mysqli_real_escape_string($conn,$_POST['useremail']);
    $cphone=mysqli_real_escape_string($conn,$_POST['userphone']);
    $cpass=mysqli_real_escape_string($conn,$_POST['userpass']);
    
    
     $sqlcount="Select * from `customer` where `cust_id`='$cid';";
     $sqlchk=mysqli_query($conn,$sqlcount);
     $reccount=mysqli_num_rows($sqlchk);				
    
     if ($reccount > 0) {
        // User exists, check if membership is already assigned
        $user = mysqli_fetch_assoc($sqlchk);
        if ($user['cust_members'] != '1') {
            // If not a member, update their membership status to 'Yes'
            $update_membership = "UPDATE `customer` SET `cust_members` = '1' WHERE `cust_id` = '$cid';";
            mysqli_query($dbc, $update_membership);
            echo "<script>alert('Customer already exists. Membership has been auto-assigned.');</script>";
        } else {
            echo "<script>alert('Customer already exists and is a member.');</script>";
        }
        Print '<script>window.location.assign("indexMain.php");</script>';
    } else {
        // Insert new user with membership assigned
        $sqlins = "INSERT INTO `customer`(`cust_id`, `cust_fname`, `cust_lname`, `cust_pass`, `cust_num`, `cust_email`, `cust_members`) 
                   VALUES ('$cid', '$cfname', '$clname', '$cpass', '$cphone', '$cemail', '1')";
        
        $sqlchk = mysqli_query($conn, $sqlins);
        
        if ($sqlchk) {
            echo "<script>alert('New record added. Congratulations Now You Have Membership! Please Login..');</script>";
            Print '<script>window.location.assign("loginCust.php");</script>';
        } else {
            echo "<script>alert('No record added. Try Again');</script>";
            Print '<script>window.location.assign("regC.php");</script>';
        }
    }

    mysqli_close($conn);
?>