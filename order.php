<?php 
session_start();
require_once("db_connect.php");
if(!isset($_SESSION['my_cart'])){
echo "
<script>
window.location.href='index.php';
</script>
";
}
//$_SESSION["my_cart"] = array_values($_SESSION["my_cart"]);

$number_of_items=count($_SESSION['my_cart']);
$totall=0;
foreach($_SESSION['my_cart'] as $r){
$totall+=$r['product_modified_price'];
}

if(isset($_POST['pay_btn'])){
$username=$_POST['username'];
$email=$_POST['email'];
$number=$_POST['number'];
$address=$_POST['address'];
//$hidden_number_of_items=$_POST['hidden_number_of_items'];
//$hidden_total=$_POST['hidden_total'];

$insertData="INSERT INTO user_details(Username,emailid,mobile_number,address,number_of_items,total) VALUES('$username','$email','$number','$address','$number_of_items','$totall')";
mysqli_query($conn,$insertData);

foreach($_SESSION['my_cart'] as $k){

  $product_name=$k['product_name'];
  $product_current_price=$k['product_current_price'];
  $product_quantity=$k['product_quantity'];
  $sub_total=$product_current_price*$product_quantity;

  $insertOrder="INSERT INTO order_details(User_mobile_number,product_name,product_price,product_quantity,product_sub_total) VALUES('$number','$product_name','$product_current_price','$product_quantity','$sub_total')";
  $sql=mysqli_query($conn,$insertOrder);
  if($sql){

  unset($_SESSION['my_cart']);
echo "
<script>
window.location.href='index.php';
</script>
";
  }
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_files/order.css">
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <link rel="preconnect" href="
   https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
   
    <title>Checkout</title>
</head>
<body>
  <div class="center">
<form action="#" method="POST">
    <h3>Checkout</h3>
    <input type="text" placeholder="Enter Your Name" name="username" required >
    <input type="Email" placeholder="Enter Your Email Id" name="email" required>
    <input type="number" placeholder="Enter Your Mobile Number" name="number" required>
    <input type="text" placeholder="Enter Your Address" name="address" required>
    <span><h4>Number of Items : </h4><p><?php echo  $number_of_items?></p></span>
    <span><h4>Total : </h4><p><?php  echo $totall?>/-</p></span>
    <input type="submit" value="Pay" name="pay_btn">
    <input type="hidden" name="hidden_number_of_items" value="<?php  $number_of_items?>">
    <input type="hidden" name="hidden_total" value="<?php  $totall?>">
  
</form>
<a href="index.php"><Button>Buy More</Button></a>
  </div>
</body>
</html>