<?php 
require_once("db_connect.php");
$delete_btn_id=$_POST['delete_btn_id'];

$delete="DELETE FROM allproductinformation where `product-id`='$delete_btn_id'";
$d=mysqli_query($conn,$delete);
echo $d;
?>