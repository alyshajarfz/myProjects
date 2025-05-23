<div id="ordersBtn" >
  <h2>Order Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Customer</th>
        <th>Contact</th>
        <th>Order Type</th>
        <th>Order Date</th>
        <th>Order Status</th>
        <th>Payment Status</th>
        <th colspan="2">More Details</th>
     </tr>
    </thead>
     <?php

     // Joined Table
      include_once "../config/dbconnect.php";
      $sql="SELECT o.order_id, c.cust_num, o.order_type, o.order_date,
               o.order_status, o.pay_status, 
               CONCAT(c.cust_fname, ' ', c.cust_lname) AS username 
        FROM orders o
        JOIN customer c ON o.cust_id = c.cust_id";
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$row["order_id"]?></td>
          <td><?=$row["username"]?></td>
          <td><?=$row["cust_num"]?></td>
          <td><?=$row["order_type"]?></td>
          <td><?=$row["order_date"]?></td>
           <?php 
                if($row["order_status"]==0){
                            
            ?>
                <td><button class="btn btn-danger" onclick="ChangeOrderStatus('<?=$row['order_id']?>')">Pending </button></td>
            <?php
                        
                }else{
            ?>
                <td><button class="btn btn-success" onclick="ChangeOrderStatus('<?=$row['order_id']?>')">Delivered</button></td>
        
            <?php
            }
                if($row["pay_status"]==0){
            ?>
                <td><button class="btn btn-danger"  onclick="ChangePay('<?=$row['order_id']?>')">Unpaid</button></td>
            <?php
                        
            }else if($row["pay_status"]==1){
            ?>
                <td><button class="btn btn-success" onclick="ChangePay('<?=$row['order_id']?>')">Paid </button></td>
            <?php
                }
            ?>
              
        <td><a class="btn btn-primary openPopup" data-href="./adminView/viewEachOrder.php?orderID=<?=$row['order_id']?>" href="javascript:void(0);">View</a></td>
        </tr>
    <?php
            
        }
      }
    ?>
     
  </table>
   
</div>
<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="order-view-modal modal-body">
        
        </div>
      </div><!--/ Modal content-->
    </div><!-- /Modal dialog-->
  </div>
<script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.order-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script>