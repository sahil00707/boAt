<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Watches</title>
    <link rel="icon" href="website-icons/website-logo-icons/smart-watch.png">
  
     <?php
     include "common-links.php";
     ?>
</head>
<body>
    
<?php 
      require_once("common_files/my-cart.php");
      require_once("common_files/navbar.php");
      ?>
    
      <div class="page-head" style=" 
    background: url(website-images/smart-watchess.jpg);
    background-size: cover;
    background-attachment: fixed;">
        <div class="text"><h1>Smart Watches</h1></div>
      </div>
      <div class="gaming-section-all">
        <h1><span>S</span>mart Watches</h1>
        <div class="top-picks">
        <?php 
            $getSmartWatches=mysqli_query($conn, "SELECT * FROM allproductinformation WHERE `product-category`='Smart Watch'");
            while($smart_watch=mysqli_fetch_assoc($getSmartWatches)){  
            ?>
            <form action="product.php" id="order-form" method="POST">
                <button class="card-1" name="order-btn-original" type="submit">
                    <div class="head">
                    <div class="offer-red-light">You Save <?php echo  round(100*( $smart_watch['product-dashed-price']-$smart_watch['product-price'])/$smart_watch['product-dashed-price'])?>%</div>
                        <img src="<?php  echo $smart_watch['product-image']?>" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4><?php  echo $smart_watch['product-name']?></h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. <?php  echo $smart_watch['product-price']?>/- <span>Rs.<?php  echo $smart_watch['product-dashed-price']?></span></h4>
                            <p>save : <?php  echo $smart_watch['product-dashed-price']-$smart_watch['product-price']?>/-</p>

                        </div>
                        <div class="order-btn">
                      
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="<?php  echo $smart_watch['product-name']?>">
    
    <input type="hidden" name="product-hidden-image" value="<?php  echo $smart_watch['product-image']?>">
    <input type="hidden" name="product-hidden-price" value="<?php  echo $smart_watch['product-price']?>">
    <input type="hidden" name="product-hidden-category" value="<?php  echo $smart_watch['product-category']?>">
    <input type="hidden" name="product-hidden-dashed-price" value="<?php  echo $smart_watch['product-dashed-price']?>">

    <input type="hidden" name="product-hidden-description" value="<?php  echo $smart_watch['product-description']?>">

                        </div>
                    </div>
            </button>
            </form>
                <?php } ?>
            </div>
      </div>
      <?php 
      include "common_files/footer-others.php";
      ?>
<?php 
include "common-jquery.php";
?>
</body>
</html>