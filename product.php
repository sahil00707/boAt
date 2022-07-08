<?php  
session_start();
require_once("db_connect.php");
$product_imp_name="boAt Immortal 1000d";
$product_imp_img="website-images/headphones/wired/boat-bassheads-102-1.webp";
$product_imp_img2="website-images/headphones/wired/boat-bassheads-102-1.webp";
$product_imp_price="2499";
$product_imp_category="HeadPhones";
$product_imp_color="black";
$product_imp_dashed_price="4999";

//------
if(isset($_POST['order-btn-original'])){
$product_imp_name=$_POST['product-hidden-name'];
}
///-----
$getProductDetails=mysqli_query($conn,"SELECT * FROM allProductInformation");


while($row=mysqli_fetch_assoc($getProductDetails)){
    if($row['product-name']==$product_imp_name){
$product_imp_price=$row['product-price'];
$product_imp_category=$row['product-category'];
$product_imp_color=$row['product-color'];
$product_imp_dashed_price=$row['product-dashed-price'];
$product_imp_img=$row['product-image'];
$description_imp=$row['product-description'];
if($row['product-other-image']!="")
$product_imp_img2=$row['product-other-image'];
break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="css_files/product.css">
    <link rel="stylesheet" href="css_files/style.css">
    <link rel="stylesheet" href="css_files/my-cart.css">
    <link rel="stylesheet" href="css_files/common.css">
    <link rel="stylesheet" href="css_files/medium-devices-cart.css">
    <link rel="stylesheet" href="css_files/medium-devices-product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
            <div class="thumbnails">
                <button class="thumbnail-1" id="thumbnail-1">
                    <img src="<?php echo $product_imp_img?>" alt="" id="thumbnail-1-img">
                </button>
                <button class="thumbnail-2" id="thumbnail-2">
                    <img src="<?php echo $product_imp_img2?>" alt=""  id="thumbnail-2-img">

                </button>
            </div>
        </div>


   
        <div class="product-section-3">
            <div class="cart">
                <h1>Rs.<span id="product-price-cart"><?php echo $product_imp_price?></span> <span id="product-price-cart-dashed">Rs. <?php echo $product_imp_dashed_price?></span></h1>
                <h2>You save Rs. <?php echo $product_imp_dashed_price-$product_imp_price?>(64%)</h2>

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
            <div class="btn2"><button>Specification</button></div>
            <div class="btn3"><button>Reviews</button></div>
        </div>
        <div class="description">
            <h1><?php echo $product_imp_name?></h1>
      <?php echo $description_imp?>
        </div>
 


    <div class="wireless_earphones_common">
        <div class="part1">
            <div class="info1">
                <img src="<?php echo $product_imp_img?>" alt="">
                <h2>BOAT Signature Sound with Super Extra Bass</h2>
                <p>Powered by 10mm drivers, stay ready with Rockerz 255 Pro+ as premium sound is just a pair of wireless earbuds away. Gear up to be transported to a whole new world of music!</p>
            </div>
        </div>
        <div class="part2">
            <div class="info2">
                <h2>Up to 40H Nonstop Playback</h2>
             <p>Keep yourself plugged all day like never before! Moreover, the ASAP Fast Charge Technology can yield 10H of playback within 10 minutes and a full charge within an hour.</p>
     <div class="wireless_circle">
         <img src="<?php echo $product_imp_img2?>" alt="">
</div>
            </div>
        </div>
    </div>

    <div class="powered_by">
        <div class="img">
            <div class="i">
        <img src="<?php echo $product_imp_img2?>" alt="">
</div>
        </div>
        <div class="content">
            <div class="c">
            <h1>Powered By Qualcomm aptX Technology</h1>
<p>Qualcomm aptX Technology offers extensive voice and music capabilities. <?php echo $product_imp_name?> also supports cVc call noise cancellation technology and aptX codec technology to deliver premium sound and music capabilities.</p>
        </div>
        </div>
    </div>

    <div class="water_resistance">
     
     <div class="content">
        <h2>IPX7 Water & Sweat Resistance</h2>
        <p>These <?php echo $product_imp_name?> are perfect for your workouts and outdoors! Made from premium materials which makes them sturdy and strong.</p>
     </div>
     <div class="ib">
        <div class="ii">
     <img src="<?php echo $product_imp_img?>" alt="">
     </div>
     </div>
    </div>
    <div class="one-click">
        <div class="hey_siri">
            <img src="website-images/amazon.png" alt="">
            <p>Hey Siri</p>
        </div>
        <div class="hey_siri">
            <img src="website-images/google.png" alt="">
            <p>Ok Google</p>
        </div>

        <div class="one-click-text">
            <h1>Activate Voice Assistant With Just One Click</h1>
        </div>
    </div>
    <div class="reviews">
            <h1>Reviews</h1>
            <div class="review-l-r">
                <button><img src="website-icons/arrow.webp" alt=""></button>
            <div class="review-small">
                <div class="review1">
             
                    <div class="head">
                        <img src="website-icons/avatar1.png" alt="">
                    </div>

                    <div class="tail">
                    
                        <h4>JUST AWESOME</h4>
                        <p>I love boAt products with closing my eyes.Thier product is their commitment.
                        </p>
                        <h5> - Sahil Ajmeri</h5>
                    </div>
                </div>
                <div class="review2">
                 
                    <div class="head">
                        <img src="website-icons/avatar2.png" alt="">
                    </div>

                    <div class="tail">
                        <h4>OUTSTANDING</h4>
                        <p>BoAt give outstanding and satisfactory result without  any failure.
                        </p>
                        <h5> - Rinku Patel</h5>
                    </div>
                </div>
                <div class="review3">
                  
                    <div class="head">
                        <img src="website-icons/avatar3.png" alt="">
                    </div>

                    <div class="tail">
                        <h4>Comfortable</h4>
                        <p>Boat products are very comfortable  and its very good as per i am using.
                        </p>
                        <h5> - Bhavin Padhiyar</h5>
                    </div>
                </div>
            
      
            </div>
            <button><img src="website-icons/arrow.webp" alt=""></button>

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