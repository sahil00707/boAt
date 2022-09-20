<?php 
require_once("../db_connect.php");

$update_id_hidden=$_POST['update_id_hidden'];
$name_product=$_POST['name_product'];
$price_product=$_POST['price_product'];
$category_product=$_POST['category_product'];
$image_product=$_POST['image_product'];
$des_product=$_POST['des_product'];

$update="UPDATE allproductinformation SET `product-name`='$name_product',`product-price`='$price_product',`product-category`='$category_product',`product-description`='$des_product' WHERE `product-id`='$update_id_hidden'";
$u=mysqli_query($conn,$update);
if($u){
    echo "
    <script>
    alert('Data Updated Successfully')
    window.location.href='all_products.php';
    </script>
    ";
}
?>