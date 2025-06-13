<?php
session_start(); // Start the session

// Check if the customer is logged in by checking the session
if (!isset($_SESSION['cust_id'])) {
    // Redirect to login page if the user is not logged in
    echo '<script type="text/javascript">alert("Please Register or Login!"); window.location.href = "loginCust.php";</script>';
    exit();
}

// Fetch the customer details from the session variables
$cust_id = $_SESSION['cust_id'];
$cust_fname = $_SESSION['cust_fname'];
$cust_lname = $_SESSION['cust_lname'];
$cust_email = $_SESSION['cust_email'];
$cust_num = $_SESSION['cust_num'];

include 'dbconnect.php'; // Include the database connection file

// Check if the form is submitted and the update button is pressed
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    // Get the updated customer data from the form
    $cust_fname = $_POST['cust_fname'];
    $cust_lname = $_POST['cust_lname'];
    $cust_email = $_POST['cust_email'];
    $cust_num = $_POST['cust_num'];

    // Prepare an SQL query to update the customer record in the database
    $sql = "UPDATE customer SET cust_fname=?, cust_lname=?, cust_email=?, cust_num=? WHERE cust_id=?";
    $stmt = $conn->prepare($sql);
    
    // Bind the customer data and customer ID to the prepared statement
    $stmt->bind_param("ssssi", $cust_fname, $cust_lname, $cust_email, $cust_num, $cust_id); 

    // Execute the query
    if ($stmt->execute()) {
      // Show JavaScript alert upon success
      echo '<script type="text/javascript">alert("Profile updated successfully!");</script>';
    } else {
      echo "Error updating profile: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer Profile</title>
  <link rel="stylesheet" href="profileC.css" />
</head>
<body>

<div class="dashboard">
  <div class="greeting">
    <span>Greetings, <?php echo $cust_fname . ' ' . $cust_lname; ?></span>
    <span class="edit">✎</span>
  </div>

  <div class="icon"></div>

  <div class="account-details">
    <form method="POST">
      <h3 for="full-name">Full Name</h3>
      <input type="text" name="cust_fname" id="cust-fname" value="<?php echo $cust_fname; ?>"/>
      <input type="text" name="cust_lname" id="cust-lname" value="<?php echo $cust_lname; ?>"/>

      <label for="email">Email Address</label>
      <input type="email" name="cust_email" id="cust-email" value="<?php echo $cust_email; ?>"/>

      <label for="phone">Mobile Number</label>
      <input type="text" name="cust_num" id="cust-num" value="<?php echo $cust_num; ?>"/>

      <button type="submit" name="update">Save Changes</button>
    </form>
  </div>

  <div class="buttons">
    <button>Coupons</button>
    <button>Recent Payments</button>
  </div>

  <button class="review-button">Start Giving Reviews ★</button>
</div>

</body>
</html>
