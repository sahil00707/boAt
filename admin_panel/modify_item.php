<?php 
require_once("../db_connect.php");
$btn_id=$_POST['modify_hidden'];
$getItemData="SELECT * FROM allproductinformation WHERE `product-id`=$btn_id";
$data=mysqli_query($conn,$getItemData);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Item</title>
    <link rel="stylesheet" href="../css_files/modify_admin.css">
    <?php
     include "../common-links.php";
     ?>
</head>
<body>
  
    <div class="modify">
        <div class="head">
            <h1>Modify Data</h1>
            <div class="border"></div>
        </div>
        <?php 
    while($d=mysqli_fetch_assoc($data))
{    
    ?>
        <form action="update_item.php" class="form" method="POST">
          <div class="iDiv">
            <p>Product Id</p>
            <input type="text"  value=<?php  echo $d['product-id']?> readonly>
          </div>
          <div class="iDiv">
            <p>Product  Name</p>
            <input type="text" name="name_product" value=<?php  echo $d['product-name']?>>
          </div>
          <div class="iDiv">
            <p>Product  Price</p>
            <input type="number" name="price_product"  value=<?php  echo $d['product-price']?>>
          </div>
          <div class="iDiv">
            <p>Product  Category</p>
            <input type="text"  name="category_product"  value=<?php  echo $d['product-category']?>>
          </div>
          <div class="iDiv">
            <p>Product  Image</p>
            <input type="text" name="image_product"  value=<?php  echo $d['product-image']?> readonly>
          </div>
          <div class="iDiv">
            <p>Product  Description</p>
            <textarea name="des_product" id="" cols="30" rows="10"><?php  echo $d['product-description']?></textarea>
          </div>
          <input type="submit" value="Update" class="update">
          <input type="hidden" name="update_id_hidden" value=<?php echo $d['product-id'] ?>>
        
        </form>
        <a href="all_products.php"><button>Back</button></a>
        <?php  }?>
    </div>
</body>
</html>