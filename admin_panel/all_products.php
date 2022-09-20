<?php 
require_once("../db_connect.php");
$getAllProducts=mysqli_query($conn,"SELECT * FROM allproductinformation");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products Admin</title>
    <link rel="stylesheet" href="../css_files/all_product_admin.css">
    <?php
     include "../common-links.php";
     ?>
</head>
<body>
<div class="all_product">
 
    <div class="title">
    <a href="index_admin.php"><button>Back</button></a>
        <h1>All Pruducts</h1>
        <div class="red_border"></div>
    </div>
  
    <div class="all_items">
        <?php 
        while($item=mysqli_fetch_assoc($getAllProducts)){
            $img_src="";
            if($item['product-id']>24){
                $img_src="../website-images/".$item['product-image'];
            }
            else{
                $img_src="../".$item['product-image']; 
            }
        ?>
        <div class="item">
        <div class="head">
                      
                        <img src="<?php echo $img_src?>" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4><?php  echo $item['product-name']?></h4>
                       
                      
                        <div class="order-btn">
                      <form action="modify_item.php" method="POST">
                   
    <input type="submit" value="Modify" id="order-btn-original"   class="modify_btn">
    <input type="hidden" name="modify_hidden" value="<?php echo $item['product-id']?>">
    </form>   
    <form action="#" method="POST" onsubmit="return false">
    <button class="delete_btn" value="<?php echo $item['product-id']?>" type="submit">Delete Item</button>
    
    </form>
                        </div>
                    </div>
        </div>
        <?php } ?>
     

    </div>

</div>
<script src="../jQuery_files/admin_panel.js"></script>
</body>
</html>