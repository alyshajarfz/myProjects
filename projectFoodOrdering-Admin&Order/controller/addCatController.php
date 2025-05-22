<?php
include_once "../config/dbconnect.php";

if (isset($_POST['upload'])) {
    $catname = $_POST['c_name'];

    // Insert the category into the database
    $insert = mysqli_query($conn, "INSERT INTO category (category_name) VALUES ('$catname')");

    if (!$insert) {
        // If there is an error, display the error message
        echo mysqli_error($conn);
    } else {
        
        echo '<script>
                alert("Records added successfully.");
                window.location.href = window.location.href; // Reload the current page
              </script>';
        exit(); // To ensure the script stops after the redirect
    }
}
?>
