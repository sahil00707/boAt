<?php 
session_start();

$remove_btn_id=$_POST['remove_btn_id'];

$mmm = array_column($_SESSION["my_cart"], "cart_index");
foreach ($mmm as $key => $index) {
    if ($index == $remove_btn_id) {
        unset($_SESSION["my_cart"][$key]);
        $_SESSION["my_cart"] = array_values($_SESSION["my_cart"]);
    }
}
?>