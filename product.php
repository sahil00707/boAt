<?php  
session_start();
require_once("db_connect.php");
$product_imp_name="boAt Immortal 1000d";
$product_imp_img="website-images/headphones/wired/boat-bassheads-102-1.webp";
//$product_imp_img2="website-images/headphones/wired/boat-bassheads-102-1.webp";
$product_imp_price="2499";
$product_imp_category="HeadPhones";
$product_imp_color="black";
$product_imp_dashed_price="4999";

//------
if(isset($_POST['order-btn-original'])){
$product_imp_name=$_POST['product-hidden-name'];
$product_imp_img=$_POST['product-hidden-image'];
//$product_imp_img2=$_POST['product-hidden-image-2'];
$product_imp_price=$_POST['product-hidden-price'];
$product_imp_category=$_POST['product-hidden-category'];
//$product_imp_color=$_POST['product-hidden-name'];
$product_imp_dashed_price=$_POST['product-hidden-dashed-price'];
$description_imp=$_POST['product-hidden-description'];

}
// ///-----
// $getProductDetails=mysqli_query($conn,"SELECT * FROM allProductInformation");


// while($row=mysqli_fetch_assoc($getProductDetails)){
//     if($row['product-name']==$product_imp_name){
// $product_imp_price=$row['product-price'];
// $product_imp_category=$row['product-category'];
// $product_imp_color=$row['product-color'];
// $product_imp_dashed_price=$row['product-dashed-price'];
// $product_imp_img=$row['product-image'];
// $description_imp=$row['product-description'];
// if($row['product-other-image']!="")
// $product_imp_img2=$row['product-other-image'];
// break;
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="icon" href="website-icons/website-logo-icons/speaker.png">

    <?php
     include "common-links.php";
     ?>
</head>

<body>
    <?php 

    require_once("common_files/my-cart.php");
    require_once("common_files/navbar.php");
    ?>
    <div class="product-all">
        <div class="product-section-1">
        <div class="product-img">
                <img src="<?php echo $product_imp_img?>" alt="" id="product-imp-img">
            </div>
        
        </div>
        <div class="product-section-2">
         
 
            <div class="product-info">
                <div class="product-name">
                    <h1 id="product-name-imp"><?php echo $product_imp_name?></h1>
                    <div class="border"></div>
               
                    <div class="price">
                        <h2>Price : <span>Rs.</span> <span  id="product-price-original"><?php echo $product_imp_price?></span></h2>
                    </div>
                    <div class="category">
                        <h3>Category : <span><?php echo $product_imp_category?></span></h3>
                    </div>
                    <div class="in-stock">
                        <p>In Stock</p>
                    </div>
                </div>
            </div>
          
        </div>


   
        <div class="product-section-3">
            <div class="cart">
                <h1>Rs.<span id="product-price-cart"><?php echo $product_imp_price?> </span> <span class="offf">(<?php  echo  round(100*($product_imp_dashed_price-$product_imp_price)/$product_imp_dashed_price) ?>% OFF)</span></h1>
            

                <div class="quantity">
                    <div class="select-quantity">
                        <button class="img" id="decrease-btn"><img src="website-icons/minus-sign.png" alt=""></button>
                        <div class="quantity-text">
                            <h4 id="quantity-text-h4">1</h4>
                        </div>
                        <button class="img" id="increase-btn"><img src="website-icons/plus.png" alt=""></button>
                    </div>
                    <p>Quantity</p>
                </div>
                <div class="add-to-cart">
                    <form action="#" method="POST" class="not-submit-form">
                 <input type="submit" value="Add to Cart" name=""add-to-cart-btn" class="add-to-cart-btn">
                 <input type="hidden"  name="product-name" id="product-name" value="<?php echo $product_imp_name?>">
                 <input type="hidden"  name="product-current-price" id="product-current-price" value="<?php echo $product_imp_price?>">
                 <input type="hidden"  name="product-dashed-price" id="product-dashed-price" value="<?php echo $product_imp_dashed_price?>">
                 <input type="hidden"  name="product-quantity" id="product-quantity" value="1">
                 <input type="hidden"  name="product-image" id="product-image" value="<?php echo $product_imp_img?>">
</form>
                </div>
            </div>
        </div>
    </div>
    <div class="description-specification-reviews">
        <div class="btns-3">
            <div class="btn1"><button>Description</button></div>
        </div>
        <div class="description">
            <h1><?php echo $product_imp_name?></h1>
           <?php echo $description_imp?>
        </div>
 



    <div class="powered_by">
   
        <div class="content">
            <div class="c">
            <h1>Powered By Qualcomm aptX Technology</h1>
<p>Qualcomm aptX Technology offers extensive voice and music capabilities. <?php echo $product_imp_name?> also supports cVc call noise cancellation technology and aptX codec technology to deliver premium sound and music capabilities.</p>
        </div>
        </div>
    </div>

    <div class="water_resistance">
     
     <div class="content">
        <h1>IPX7 Water & Sweat Resistance</h1>
        <p>These <?php echo $product_imp_name?> are perfect for your workouts and outdoors! Made from premium materials which makes them sturdy and strong.</p>
     </div>
    </div>
    <div class="one-click">
        <div class="one-click-text">
            <h1>Activate Voice Assistant With Just One Click</h1>
        </div>
    </div>
   
    </div>


    
    <div class="gaming-section-all">
        <h1> You May Also <span>L</span>ike</h1>
        <div class="top-picks">
      
             
          
        <?php 
            $getSmartWatches=mysqli_query($conn, "SELECT * FROM allproductinformation
            ORDER BY RAND()
            LIMIT 4;");
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
      </div>
    <?php 
      require_once("common_files/footer-others.php");
      ?>
    <div class="scroll-top">
        <button  class="scroll-top-btn"><img src="website-icons/arrow.webp" alt=""></button>
    </div>
    
<?php 
include "common-jquery.php";
?>

</body>

</html>