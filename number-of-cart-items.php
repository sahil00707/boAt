<?php 
session_start();
$c=0;
if(isset($_SESSION['my_cart'])){
$c=count($_SESSION['my_cart']);
}
echo $c;

?>