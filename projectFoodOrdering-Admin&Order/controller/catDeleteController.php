<?php
    include_once "../config/dbconnect.php";

    $c_id = $_POST['record'];

    // First delete all dishes belonging to the category
    $delete_dishes_query = "DELETE FROM dish WHERE category_id = '$c_id'";
    $delete_dishes_data = mysqli_query($conn, $delete_dishes_query);

    // Then delete the category
    $query = "DELETE FROM category WHERE category_id = '$c_id'";
    $data = mysqli_query($conn, $query);

    if ($data && $delete_dishes_data) {
        echo "Category and related dishes have been deleted.";
    } else {
        echo "Failed to delete category or related dishes.";
    }
?>
