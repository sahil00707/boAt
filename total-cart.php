<?php 
session_start();

$total_price=0;
if(isset($_SESSION['my_cart'])){
    $mmm = array_column($_SESSION["my_cart"], "product_modified_price");
    foreach ($mmm as $key=> $productPrice) {
    $total_price+=$productPrice;
    }
 
}
echo $total_price;
?>