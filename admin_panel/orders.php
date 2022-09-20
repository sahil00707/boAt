<?php 
require_once("../db_connect.php");

if(isset($_POST['delete_btn'])){
    $user_id=$_POST['user_id'];
    $del=mysqli_query($conn,"DELETE FROM user_details WHERE `User_id`=$user_id");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="../css_files/orders_admin.css">
    <?php
     include "../common-links.php";
     ?>
</head>
<body>
    <div class="orders">
        <div class="head">
            <a href="index_admin.php"><button>Back</button></a>
            <h1>All Orders</h1>
            <div class="border"></div>
        </div>
        <div class="all_orders">
        <div class="head_table">
            <h4>Order No.</h4>
            <h4>User Name</h4>
            <h4>Mobile Number</h4>
            <h4></h4>
            <h4></h4>
        </div>
        <?php  
        $get_Orders=mysqli_query($conn,"SELECT * FROM user_details");
        $count=1;
        while($r=mysqli_fetch_assoc($get_Orders)){
        ?>
        <div class="body_table">
            <p><?php  echo $count;
            $count++;
            ?></p>
            <p><?php echo $r['Username']?></p>
            <p><?php echo $r['mobile_number']?></p>
            <div class="details">
           <form action="user_order.php" method="POST">
           <button type="submit" name="details_btn">Details</button>
           <input type="hidden" name="user_id" value="<?php echo $r['User_id']?>">
           </form> 
        </div>
        
           <div class="delete">
           <form action="#" method="POST">
           <button type="submit" name="delete_btn">Delete</button>
           <input type="hidden" name="user_id" value="<?php echo $r['User_id']?>">
           </form> 
        </div>
          
        </div>
        <?php  } ?>
    </div>
    </div>
   
</body>
</html>