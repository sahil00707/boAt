<?php 
session_start();
//session_destroy();

//session start

$product_name=$_POST['product_name'];
$product_current_price=$_POST['product_current_price'];
$product_dashed_price=$_POST['product_dashed_price'];
$product_quantity=$_POST['product_quantity'];
$product_image=$_POST['product_image'];

if(isset($_SESSION['my_cart'])){ 
    $ItemArray = array_column($_SESSION["my_cart"], "product_name");
    if(in_array($product_name, $ItemArray)){
      echo "0";
    }
else{
$count=count($_SESSION['my_cart']);
$_SESSION['my_cart'][$count]=
array (
    "cart_index"=>$count,
    "product_name"=>$product_name,
"product_current_price"=>$product_current_price,
"product_dashed_price"=>$product_dashed_price,
"product_modified_price"=>$product_current_price,
"product_quantity"=>$product_quantity,
"product_image"=>$product_image);
}
}
else{ 
    $_SESSION['my_cart'][0]=
    array 
    ("cart_index"=>"0",
    "product_name"=>$product_name,
    "product_current_price"=>$product_current_price,
    "product_dashed_price"=>$product_dashed_price,
    "product_modified_price"=>$product_current_price,
    "product_quantity"=>$product_quantity,
    "product_image"=>$product_image);
}


?>