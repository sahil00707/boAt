<?php 
require_once("../db_connect.php");
$my_id=1;
$m=0;
if(isset($_POST['details_btn'])){
$my_id=$_POST['user_id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Order</title>
    <link rel="stylesheet" href="../css_files/user_orders_admin.css">
    <?php
     include "../common-links.php";
     ?>
</head>
<body>
    <div class="head">
        <a href="orders.php"> <button>Back</button></a>
    <h1>Details</h1>
    <div class="border"></div>
</div>
<div class="body">
    <?php  
    $info=mysqli_query($conn,"SELECT * FROM user_details WHERE `User_id`=$my_id");
    while($i=mysqli_fetch_assoc($info)){
    $m=$i['mobile_number'];
    ?>
    <h3>Name : <?php echo $i['Username']?></h3>
    <h3>Mobile Number : <?php echo $i['mobile_number']?></h3>
    <h3>Address : <?php echo $i['address']?></h3>
    <h3>Total : <?php echo $i['total']?></h3>
    <h3>Time : <?php echo $i['time']?></h3>
    <?php  }?>
    <div class="order">
        <div class="head_order">
        <div><h4>No.</h4></div>
        <div><h4>Product Name</h4></div>
        <div><h4>Product Quantity</h4></div>
        <div><h4>Product Sub Total</h4></div>
    </div>
    <?php  
    $c=1;
    $o=mysqli_query($conn,"SELECT * FROM order_details WHERE `User_mobile_number`=$m");
    while($order=mysqli_fetch_assoc($o)){
    ?>

    <div class="body_order">
        <div><p><?php  echo $c; 
        
        $c++;
        ?></p></div>
        <div><p><?php  echo $order['product_name']?></p></div>
        <div><p><?php  echo $order['product_quantity']?></p></div>
        <div><p><?php  echo $order['product_sub_total']?></p></div>
    </div>
    <?php }?>
    </div>
</div>
</body>
</html>