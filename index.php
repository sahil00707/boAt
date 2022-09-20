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
            <form action="product.php" id="order-form" method="POST">
                <button class="card-1" type="submit" name="order-btn-original" >
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
                   
    <input type="submit" value="Order Now" id="order-btn-original"  name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Airdopes 411 ANC">
    
    <input type="hidden" name="product-hidden-image" value="website-images/headphones/ANC/boat-airdopes-411-anc-1.webp">
    <input type="hidden" name="product-hidden-price" value="1999">
    <input type="hidden" name="product-hidden-category" value="ANC">
    <input type="hidden" name="product-hidden-dashed-price" value="4999">
    <input type="hidden" name="product-hidden-image-2" value="website-images/headphones/ANC/boat-airdopes-411-anc-2.webp">
    <input type="hidden" name="product-hidden-description" value="Choose music, not noise with Airdopes 411 ANC by suppressing noise up to 25dB with Active Noise Cancellation. Experience a smooth calling experience like no other with ENx™ Technology. Indulge in the immersive sound from boAt powered by its 10mm Drivers. Groove for as long as you want with a massive 17.5 hours of total playback time. Never run out of juice as you enjoy your playlist with its ASAPTM Charge that gets you 60 minutes of performance with just 10 minutes of charge. Just plug in and listen to the #SoundThatMatters!">
    

                        </div>
                    </div>
</button>
</form>
<form action="product.php" id="order-form" method="POST">

                <button class="card-1"  name="order-btn-original">
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
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Rockers 235 Pro">
    
    <input type="hidden" name="product-hidden-image" value="website-images/headphones/wireless/boAt-rockers-235-pro-1.webp">
    <input type="hidden" name="product-hidden-price" value="1299">
    <input type="hidden" name="product-hidden-category" value="Wireless Earphones">
    <input type="hidden" name="product-hidden-dashed-price" value="1999">
    <input type="hidden" name="product-hidden-image-2" value="website-images/headphones/wireless/boAt-rockers-235-pro-2.webp">
    <input type="hidden" name="product-hidden-description" value="Let Rockerz 235 Pro fuel your passion like a pro. Take your hustle up a notch as its up to 20 HRS playback will keep you pumped up throughout. The BEAST™ Mode and its low latency will make you experience the best of both worlds. #UnravelYourFlow as you get maximum call clarity with ENx™ Technology equipped mics. Work hard & play harder with Rockerz 235 Pro empowering both your worlds.">
    
                        </div>
                    </div>
</button>
                </form>
                <form action="product.php" id="order-form" method="POST">

                <button class="card-1"  name="order-btn-original" type="submit">
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
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt BassHeads 102">
    
    <input type="hidden" name="product-hidden-image" value="website-images/headphones/wired/boat-bassheads-102-1.webp">
    <input type="hidden" name="product-hidden-price" value="349">
    <input type="hidden" name="product-hidden-category" value="Wired Earphones">
    <input type="hidden" name="product-hidden-dashed-price" value="1299">
    <input type="hidden" name="product-hidden-image-2" value="website-images/headphones/wired/boat-bassheads-102-2.webp">
    <input type="hidden" name="product-hidden-description" value="Set the vibes going with the boAt TRebel Bassheads 102’s immersive audio. Styled with 8mm inbuilt drivers, get ready to sink into your surroundings. Emphatic bass keeps the beat apace as your favourite tracks bring you to life. Plug into Nirvana and get going. Carry your style comfortably with tangle free wires keeping it simple, and sail to the shores of good fashion. Set with a 120cm cable and 3.5 mm jack, connect into your music and movies anytime and anyplace. Stay in the good grace of perfect sound, go gaga with the TRebel Bassheads 102 wired earphones.">
    
                        </div>
                    </div>
</button>
                </form>
                <form action="product.php" id="order-form" method="POST">

                <button class="card-1"  name="order-btn-original" type="submit">
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
    
    <input type="hidden" name="product-hidden-image" value="website-images/headphones/wireless/boAt-rockers-333-1.webp">
    <input type="hidden" name="product-hidden-price" value="1499">
    <input type="hidden" name="product-hidden-category" value="Wireless Earphones">
    <input type="hidden" name="product-hidden-dashed-price" value="4999">

    <input type="hidden" name="product-hidden-description" value="This is for the unapologetically rebellious Queens who stop at nothing. Speak your unique style with Rockerz 333 - a bold and powerful wireless earphones for the part of you that wants more. More of sound, more of style, and more of power. Immerse into your jam with boAt Signature Sound and 30 HRS of non stop playback. Let nothing limit your hustle with Dual Pairing that lets you connect two devices at once. Don’t hold back, choose your vibe with Rockerz 333.">
    
                        </div>
                    </div>
</button>
</form>


            </div>
            <div class="watches">
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












        
        <div class="top-seller">
            <h1>Deals <span  style="color:yellow">O</span>f The Day</h1>
     
            <div class="trending-wireless">
            <?php 
            $getSmartWatches=mysqli_query($conn, "SELECT * FROM allproductinformation WHERE `product-category`='Dod'");
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













        <div class="top-seller">
            <h1><span>G</span>aming</h1>
     
            <div class="gaming">
            <?php 
            $getSmartWatches=mysqli_query($conn, "SELECT * FROM allproductinformation WHERE `product-category`='gaming'");
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

















        <div class="top-seller">
            <h1>Smart <span>W</span>atches</h1>
     
            <div class="smart-watches">
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












        <div class="top-seller">
            <h1>Trending <span>W</span>ired</h1>
     
            <div class="trending-wired">
            <?php 
            $getSmartWatches=mysqli_query($conn, "SELECT * FROM allproductinformation WHERE `product-category`='Wired'");
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



        <!--     New Launches   -->
      








        <div class="top-seller">
            <h1>Trending <span>W</span>ireless</h1>
     
            <div class="trending-wireless">
            <?php 
            $getSmartWatches=mysqli_query($conn, "SELECT * FROM allproductinformation WHERE `product-category`='Wireless'");
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
    
    <input type="hidden" name="product-hidden-image" value="website-images/gaming/boat-immortal-1000d-1.webp">
    <input type="hidden" name="product-hidden-price" value="2299">
    <input type="hidden" name="product-hidden-category" value="Gaming">
    <input type="hidden" name="product-hidden-dashed-price" value="5999">

    <input type="hidden" name="product-hidden-description" value="The game begins here. With Immortal 1000D gaming headphones, don’t just play the game - feel it, live it, and own it. Level up your audio game with 7.1 Channel Surround Sound and Dolby Atmos that unleashes the winning beast inside you. Equipped with 50mm drivers, get a powerful 360° gaming experience like no other. Now, you can conquer every game with a sound that provides position accuracy and abstracts. Your everyday gaming is now double the fun with its RGB LED lights. Its lightweight and ergonomic build ensure you have a comfortable bender with your friends. Don’t look further, level up with Immortal 1000D headphones.">
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
    
    <input type="hidden" name="product-hidden-image" value="website-images/headphones/ANC/boat-airdopes-500-anc-1.webp">
    <input type="hidden" name="product-hidden-price" value="4990">
    <input type="hidden" name="product-hidden-category" value="ANC">
    <input type="hidden" name="product-hidden-dashed-price" value="9990">
   
    <input type="hidden" name="product-hidden-description" value="Tap out of chaos & listen to the #SoundThatMatters with Airdopes 500 ANC. The erratic chatter while commuting, the swoosh of the strong winds, and the deafening traffic – tune out of everything and focus on what matters with Hybrid Active Noise Cancellation up to 35dB. Don’t let your words fail you – its Quad Mics & ENx™ Technology ensure your voice is heard as good as in person. And when you’re ready to game, BEAST™ Mode offers seamless gaming with minimal lag. Plug in. Switch on. Tap out.">
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
    
    <input type="hidden" name="product-hidden-image" value="website-images/headphones/wireless/boAt-rockers-235-pro-1.webp">
    <input type="hidden" name="product-hidden-price" value="1299">
    <input type="hidden" name="product-hidden-category" value="Wireless Earphones">
    <input type="hidden" name="product-hidden-dashed-price" value="1999">

    <input type="hidden" name="product-hidden-description" value="Let Rockerz 235 Pro fuel your passion like a pro. Take your hustle up a notch as its up to 20 HRS playback will keep you pumped up throughout. The BEAST™ Mode and its low latency will make you experience the best of both worlds. #UnravelYourFlow as you get maximum call clarity with ENx™ Technology equipped mics. Work hard & play harder with Rockerz 235 Pro empowering both your worlds.">
    

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
        <a href="right-earphone.php"><button>Explore More</button></a>
    </div>
</div>



<div class="blog">
    <div class="head">
        <img src="website-images/blog-2.webp" alt="">
    </div>
    <div class="tail">
        <p>The Ultimate Smartwatch Guide - Get The World On Your Wrist</p>
        <a href="smart-watch-guide.php"><button>Explore More</button></a>

    </div>
</div>

<div class="blog">
    <div class="head">
        <img src="website-images/blog-3.webp" alt="">
    </div>
    <div class="tail">
        <p>The Best Calling Smartwatch: boAt Primia or boAt Wave Connect</p>
        <a href="primia.php"><button>Explore More</button></a>

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