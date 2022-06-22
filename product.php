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
                    <div class="color">color : <span> <?php echo $product_imp_color?></span>
                    </div>
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
            <h1>bo<span>A</span>t Rockerz 330 - Bluetooth Earphones</h1>
            Let's drench in music and experience every beat differently. Powered with boAt Signature Sound, Rockerz 330
            is here to get you grooving to a thumping bass designed only for audiophiles! Keep your charging worries at
            bay; Rockerz 330 bluetooth earphones offer a dynamic playtime of 30 hours. That's not it! All is takes is 10
            minutes of ASAP charge for 10 hours of playtime. This ergonomically designed neckband promises the best of
            comfort and style. IPX5 protects the Rockerz from sweat and water; so go ahead and make a run to freshen up
            your mind for these Rockerz don't let anything hold you back. Seamlessly pair two devices at the same time
            with the dual pairing Bluetooth v5.0. Type C Charging, Single Press Voice Assistant make your audio
            experience even more enthralling! It's time, LET'S SETTLE for nothing but the best!
        </div>
        <div class="specification">
            <div class="ul-big">
                <ul>
                    <li>specification </li>
                    <li>specification </li>
                    <li>specification </li>
                    <li>specification </li>
                    <li>specification </li>
                    <li>specification </li>
                    <li>specification </li>
                    <li>specification </li>
                    <li>specification </li>

                </ul>
                <ul>
                    <li>item </li>
                    <li>item </li>
                    <li>item </li>
                    <li>item </li>
                    <li>item </li>
                    <li>item </li>
                    <li>item </li>
                    <li>item </li>
                    <li>item </li>
                </ul>
            </div>
            <div class="img">
                <img src="<?php echo $product_imp_img?>" alt="">
            </div>
        </div>
        <div class="reviews">
            <h1>Reviews</h1>
            <div class="review-l-r">
                <button><img src="website-icons/arrow.webp" alt=""></button>
            <div class="review-small">
                <div class="review1">
             
                    <div class="head">
                        <img src="<?php  echo $product_imp_img?>" alt="">
                    </div>

                    <div class="tail">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est rerum laborum repudiandae iusto.
                        </p>
                    </div>
                </div>
                <div class="review2">
                 
                    <div class="head">
                        <img src="<?php  echo $product_imp_img?>" alt="">
                    </div>

                    <div class="tail">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est rerum laborum repudiandae iusto.
                        </p>
                    </div>
                </div>
                <div class="review3">
                  
                    <div class="head">
                        <img src="<?php  echo $product_imp_img?>" alt="">
                    </div>

                    <div class="tail">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est rerum laborum repudiandae iusto.
                        </p>
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
    <script src="jQuery_files/my-cart.js"></script>
    <script src="jQuery_files/add-to-cart.js"></script>
    <script src="jQuery_files/product.js"></script>
    <script src="jQuery_files/index.js"></script>

</body>

</html>