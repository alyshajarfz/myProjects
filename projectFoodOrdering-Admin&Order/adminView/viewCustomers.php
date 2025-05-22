<div >
  <h2>All Customers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">ID</th>
        <th class="text-center">Username </th>
        <th class="text-center">Email</th>
        <th class="text-center">Contact Number</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from customer where isAdmin=0";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["cust_id"]?></td>
      <td><?=$row["cust_fname"]?> <?=$row["cust_lname"]?></td>
      <td><?=$row["cust_email"]?></td>
      <td><?=$row["cust_num"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>