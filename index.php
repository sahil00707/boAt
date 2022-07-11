<?php 
session_start();
require_once("db_connect.php");
//$_SESSION["my_cart"] = array_values($_SESSION["my_cart"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="icon" href="website-icons/website-logo-icons/musical-note.png">
     <?php
     include "common-links.php";
     ?>
</head>
<body > 
<?php 
require_once("common_files/my-cart.php");
require_once("common_files/navbar.php");
?>
    <div class="carousel-image">
        <div class="flex">
            <div class="text">
                <h1>Every Call <span>M</span>atters</h1>
                <div class="border-red"></div>
                <h2>Dropping the beats and prices</h2>
                <a href="gaming.php">
                <button>Shop Now</button>
</a>
            </div>
      
        </div>
    </div>
    <div class="website-content">
        <div class="landing-line">
            <div class="img">
                <img src="website-images/klrahul.webp" alt="">
            </div>
            <div class="content">
                <div class="content-small">
                    <h3>Meet the bo<span>A</span>theads</h3>
                    <div class="red-border"></div>
                    <h4 class="klrahul">K L Rahul</h4>
                    <div class="fff">
                        <h4>Fierce .</h4>
                        <h4>Fearless .</h4>
                        <h4>Flawless .</h4>
                    </div>
                    <p>When you hear the crowd roar, be assured that it’s KL Rahul making his way to the field. Our
                        hardcore boAthead, KL Rahul, hits it with his performance as well as his fashion statement. On
                        or off field, Rahul always makes #MoveOfTheChampions.</p>
                        <a href="headphones.php">
                    <button>Shop Now</button>
</a>
                </div>
            </div>
        </div>














        <div class="top-seller">
            <h1>Best <span>S</span>eller</h1>
            <div class="tab-btns">
                <div class="btn1"><button class="tab-btn-1">HeadPhones</button></div>
                <div class="btn2"><button class="tab-btn-2">Smart Watches</button></div>
            </div>
            <div class="top-picks">
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red-light">You Save 60%</div>
                        <img src="website-images/headphones/ANC/boat-airdopes-411-anc-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Airdopes 411 ANC</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 1999/- <span>Rs.4999</span></h4>
                            <p>save : 3000/-</p>

                        </div>
                        <div class="order-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Airdopes 411 ANC">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                    <div class="offer-red-light">You Save 35%</div>
                        <img src="website-images/headphones/wireless/boAt-rockers-235-pro-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Rockers 235 Pro</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 1299/- <span>Rs.1999</span></h4>
                            <p>save : 700/-</p>

                        </div>
                        <div class="order-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Rockers 235 Pro">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                    <div class="offer-red-light">You Save 65%</div>
                        <img src="website-images/headphones/wired/boat-bassheads-102-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Bassheads 102</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 349/- <span>Rs.1299</span></h4>
                            <p>save : 850/-</p>

                        </div>
                        <div class="order-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt BassHeads 102">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                    <div class="offer-red-light">You Save 70%</div>
                    <img src="website-images/headphones/wireless/boAt-rockers-333-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Rockers 333</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 1499/- <span>Rs.4999</span></h4>
                            <p>save : 3500/-</p>

                        </div>
                        <div class="order-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Rockers 333">
</form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="watches">
            <?php 
            $getSmartWatches=mysqli_query($conn, "SELECT * FROM allproductinformation WHERE `product-category`='Smart Watch'");
            while($smart_watch=mysqli_fetch_assoc($getSmartWatches)){  
            ?>
                <div class="card-1">
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
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="<?php  echo $smart_watch['product-name']?>">
</form>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>












        
        <div class="top-seller">
            <h1>Deals <span  style="color:yellow">O</span>f The Day</h1>
     
            <div class="trending-wireless">
            <?php 
            $getSmartWatches=mysqli_query($conn, "SELECT * FROM allproductinformation WHERE `product-category`='Dod'");
            while($smart_watch=mysqli_fetch_assoc($getSmartWatches)){  
            ?>
                <div class="card-1">
                    <div class="head">
                    <div class="offer-red-light">You Save  <?php echo  round(100*( $smart_watch['product-dashed-price']-$smart_watch['product-price'])/$smart_watch['product-dashed-price'])?>%</div>
                        <img src="<?php  echo $smart_watch['product-image']?>" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4><?php  echo $smart_watch['product-name']?></h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. <?php  echo $smart_watch['product-price']?>/- <span>Rs.<?php  echo $smart_watch['product-dashed-price']?></span></h4>
                            <p>save : <?php  echo $smart_watch['product-dashed-price']-$smart_watch['product-price']?>/-</p>

                        </div>
                        <div class="order-btn yellow-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="<?php  echo $smart_watch['product-name']?>">
</form>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
     
        </div>













        <div class="top-seller">
            <h1><span>G</span>aming</h1>
     
            <div class="gaming">
            <?php 
            $getSmartWatches=mysqli_query($conn, "SELECT * FROM allproductinformation WHERE `product-category`='gaming'");
            while($smart_watch=mysqli_fetch_assoc($getSmartWatches)){  
            ?>
                <div class="card-1">
                    <div class="head">
                    <div class="offer-red-light">You Save  <?php echo  round(100*( $smart_watch['product-dashed-price']-$smart_watch['product-price'])/$smart_watch['product-dashed-price'])?>%</div>
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
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="<?php  echo $smart_watch['product-name']?>">
</form>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
     
        </div>

















        <div class="top-seller">
            <h1>Smart <span>W</span>atches</h1>
     
            <div class="smart-watches">
            <?php 
            $getSmartWatches=mysqli_query($conn, "SELECT * FROM allproductinformation WHERE `product-category`='Smart Watch'");
            while($smart_watch=mysqli_fetch_assoc($getSmartWatches)){  
            ?>
                <div class="card-1">
                    <div class="head">
                    <div class="offer-red-light">You Save  <?php echo  round(100*( $smart_watch['product-dashed-price']-$smart_watch['product-price'])/$smart_watch['product-dashed-price'])?>%</div>
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
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="<?php  echo $smart_watch['product-name']?>">
</form>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
     
        </div>













        <div class="top-seller">
            <h1>Trending <span>W</span>ired</h1>
     
            <div class="trending-wired">
            <?php 
            $getSmartWatches=mysqli_query($conn, "SELECT * FROM allproductinformation WHERE `product-category`='Wired'");
            while($smart_watch=mysqli_fetch_assoc($getSmartWatches)){  
            ?>
                <div class="card-1">
                    <div class="head">
                    <div class="offer-red-light">You Save  <?php echo  round(100*( $smart_watch['product-dashed-price']-$smart_watch['product-price'])/$smart_watch['product-dashed-price'])?>%</div>
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
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="<?php  echo $smart_watch['product-name']?>">
</form>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
     
        </div>



        <!--     New Launches   -->
      








        <div class="top-seller">
            <h1>Trending <span>W</span>ireless</h1>
     
            <div class="trending-wireless">
            <?php 
            $getSmartWatches=mysqli_query($conn, "SELECT * FROM allproductinformation WHERE `product-category`='Wireless'");
            while($smart_watch=mysqli_fetch_assoc($getSmartWatches)){  
            ?>
                <div class="card-1">
                    <div class="head">
                    <div class="offer-red-light">You Save  <?php echo  round(100*( $smart_watch['product-dashed-price']-$smart_watch['product-price'])/$smart_watch['product-dashed-price'])?>%</div>
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
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="<?php  echo $smart_watch['product-name']?>">
</form>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
     
        </div>













        <div class="what-people-says">
            <h1>What they say <span>A</span>bout us</h1>
            <div class="reviews-x">
                <div class="review">
                    <div class="round-red"></div>
                    <div class="head">
                        <img src="website-images/gaming/boat-immortal-1000d-2.webp" alt="" class="">
                    </div>

                    <div class="tail">

                        <div class="tt">

                            <h5>"It's value for money,best sound quality"</h5>
                            <button>
                                
                        <div class="order-btn">
<form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Buy Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Immortal 1000d">
</form>
                            </button>
                            
                        </div>
                    </div>
                </div>

                <div class="review">
                    <div class="round-red"></div>
                    <div class="head">
                        <img src="website-images/headphones/ANC/boat-airdopes-500-anc-2.webp" alt="" class="">
                    </div>

                    <div class="tail">
                        <div class="tt">
                            <h5>"The battery backup is something unbelievable"</h5>
                            <button>
                        <div class="order-btn">
<form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Buy Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Airdopes 500 ANC">
</form></button>
                        </div>
                    </div>
                </div>
                <div class="review">
                    <div class="round-red"></div>
                    <div class="head">
                        <img src="website-images/headphones/wireless/boAt-rockers-235-pro-1.webp" alt="" class="">
                    </div>

                    <div class="tail">
                        <div class="tt">
                            <h5>"Amazing product,great sound quality"</h5>
                            <button>
                        <div class="order-btn">
<form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Buy Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Rockers 235 Pro">
</form></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>














        <div class="top-seller">
            <h1>Trending <span>A</span>irdopes</h1>
     
            <div class="trending-wireless">
            <?php 
            $getSmartWatches=mysqli_query($conn, "SELECT * FROM allproductinformation WHERE `product-category`='ANC'");
            while($smart_watch=mysqli_fetch_assoc($getSmartWatches)){  
            ?>
                <div class="card-1">
                    <div class="head">
                    <div class="offer-red-light">You Save  <?php echo  round(100*( $smart_watch['product-dashed-price']-$smart_watch['product-price'])/$smart_watch['product-dashed-price'])?>%</div>
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
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="<?php  echo $smart_watch['product-name']?>">
</form>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
     
        </div>


<!--boat Blogs-->
<div class="boat_blogs">
<h1>Our <span>B</span>logs</h1>
<div class="blogss">


<div class="blog">
    <div class="head">
        <img src="website-images/blog-1.webp" alt="">
    </div>
    <div class="tail">
        <p>Earphones Buying Guide - Everything You Need To Know</p>
        <a href="#"><button>Explore More</button></a>
    </div>
</div>



<div class="blog">
    <div class="head">
        <img src="website-images/blog-2.webp" alt="">
    </div>
    <div class="tail">
        <p>The Ultimate Smartwatch Guide - Get The World On Your Wrist</p>
        <a href="#"><button>Explore More</button></a>

    </div>
</div>

<div class="blog">
    <div class="head">
        <img src="website-images/blog-3.webp" alt="">
    </div>
    <div class="tail">
        <p>The Best Calling Smartwatch: boAt Primia or boAt Wave Connect</p>
        <a href="#"><button>Explore More</button></a>

    </div>
</div>
</div>
</div>



<!--boat Blogs-->








        <div class="in-press">
            <h1>In the <span>P</span>ress</h1>
            <div class="quote">
             <div class="press-text-div">
             <p class="press-text">Warburg invests $100 mn in boAt</p>
             </div>
                
             
            </div>
            <div class="press-list">
                <button class="img press-list-img" value="Warburg invests $100 mn in boAt">
                    <img src="website-images/press-1.webp" alt="">
                </button>
                <button class="img press-list-img"
                    value="How India's boAt became the fifth largest wearable brand in the world"> <img
                        src="website-images/press-2.webp" alt="">
                </button>
                <button class="img press-list-img"
                    value="The Airdopes 441 is sweat proof and packs in crisp audio. Great for fitness enthusiasts.">
                    <img src="website-images/press-3.webp" alt="">
                </button>
                <button class="img press-list-img"
                    value="IPL 2020: boAt becomes the official audio partner for six teams"> <img
                        src="website-images/press-4.webp" alt="">
                </button>
                <button class="img press-list-img"
                    value="TWS Earbuds Shipments in India Up 723 Percent YoY in Q3, Boat Emerged as Leading Player: Counterpoint">
                    <img src="website-images/press-5.webp" alt="">
                </button>
            </div>

        </div>






        <div class="scroll-top">
            <button class="scroll-top-btn"><img src="website-icons/arrow.webp" alt=""></button>
        </div>
      <?php 
      require_once("common_files/footer-others.php");
      ?>
        <!--     New Launches   -->
    </div>






    
<?php 
include "common-jquery.php";
?>
</body>

</html>