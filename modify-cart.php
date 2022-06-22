<?php 
session_start();
require_once("db_connect.php");
if(isset($_SESSION['my_cart'])){
$modify_btn_value=$_POST['modify_btn_value'];

$product_price_original=$_SESSION['my_cart'][$modify_btn_value]['product_current_price'];
$i=$_POST['i'];
$sessionArrayIndex=array_column($_SESSION['my_cart'],'product_quantity');
$cartQuantity=$sessionArrayIndex[$modify_btn_value];
if($i==0){
$cartQuantity--;
if($cartQuantity<1)$cartQuantity=1;
}
else{
$cartQuantity++;
if($cartQuantity>10)$cartQuantity=10;
}
$_SESSION['my_cart'][$modify_btn_value]['product_quantity']=$cartQuantity;
$_SESSION['my_cart'][$modify_btn_value]['product_modified_price']=$cartQuantity*$product_price_original;

//echo $cartQuantity;
}

?>