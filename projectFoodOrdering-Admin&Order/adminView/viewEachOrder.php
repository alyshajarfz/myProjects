<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Dish Image</th>
                <th>Dish Name</th>
                <th>Dish Quantity</th>
                <th>Dish Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once "../config/dbconnect.php";
            // Get the order ID from the URL
            $orderID = $_GET['orderID'];
            
           // Joined Table
            $sql = "SELECT od.dish_id, od.quantity, od.price, d.dish_name, d.dish_image
                    FROM order_details od
                    JOIN dish d ON od.dish_id = d.dish_id
                    WHERE od.order_id = $orderID";
            $result = $conn->query($sql);
            $count = 1;

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td><?=$count?></td> <!-- Display the row number -->

                        <!-- Display the dish image -->
                        <td><img height="80px" src="<?=$row["dish_image"]?>" alt="Dish Image"></td>

                        <!-- Display the dish name -->
                        <td><?=$row["dish_name"]?></td>

                        <!-- Display the dish quantity -->
                        <td><?=$row["quantity"]?></td>

                        <!-- Display the dish price -->
                        <td><?=$row["price"]?></td>
                    </tr>
            <?php
                    $count++;  // Increment row number for each dish
                }
            } else {
                echo "<tr><td colspan='5'>No items found for this order.</td></tr>";  // Message if no items found
            }
            ?>
        </tbody>
    </table>
</div>
