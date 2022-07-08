<?php 
session_start();
//$_SESSION["my_cart"] = array_values($_SESSION["my_cart"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="icon" href="website-icons/headphone.png">
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
                <button>Shop Now</button>
            </div>
            <img src="website-images/landing-image-1.webp" alt="">
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
                    <button>Shop Now</button>
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
                        <div class="offer-red">New Arrival</div>
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
                        <div class="offer-red">New Arrival</div>
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
                        <div class="offer-red">New Arrival</div>
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
                        <div class="offer-red">New Arrival</div>
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
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival </div>
                        <img src="website-images/smart-watches/boat-storm.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Storm</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 2499/- <span>Rs.5999</span></h4>
                            <p>save : 3500/-</p>

                        </div>
                        <div class="order-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt  Storm">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/smart-watches/boat-watch-flash.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Watch Flash</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 2290/- <span>Rs.6990</span></h4>
                            <p>save : 4700/-</p>

                        </div>
                        <div class="order-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt  Watch Flash">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/smart-watches/boat-watch-iris.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Watch Iris</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 4399/- <span>Rs.11249</span></h4>
                            <p>save : 6860/-</p>

                        </div>
                        <div class="order-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Watch Iris">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/smart-watches/boat-watch-wave-pro.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Watch Wave Pro</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 3299/- <span>Rs.5999</span></h4>
                            <p>save : 2700/-</p>

                        </div>
                        <div class="order-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt  Watch Wave Pro">
</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
        <div class="top-seller">
            <h1>Deals <span>O</span>f The Day</h1>
     
            <div class="trending-wireless">
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/deals-of-the-day/boAt-bassheads-100-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt BassHeads 100</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 299/- <span>Rs.999</span></h4>
                            <p>save : 600/-</p>

                        </div>
                        <div class="order-btn yellow-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt BassHeads 100">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/deals-of-the-day/boAt-rockers-518-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Rockers 518</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 999/- <span>Rs.3990</span></h4>
                            <p>save : 2990/-</p>

                        </div>
                        <div class="order-btn yellow-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Rockers 518">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/deals-of-the-day/boAt-rockers-400-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Rockers 400</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 899/- <span>Rs.2990</span></h4>
                            <p>save : 2091/-</p>

                        </div>
                        <div class="order-btn yellow-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Rockers 400">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/deals-of-the-day/boAt-stone-granade-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Stone Granade</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 999/- <span>Rs.3990</span></h4>
                            <p>save : 2991/-</p>

                        </div>
                        <div class="order-btn yellow-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Stone Granade">
</form>
                        </div>
                    </div>
                </div>
            </div>
     
        </div>


        <div class="top-seller">
            <h1><span>G</span>aming</h1>
     
            <div class="gaming">
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/gaming/boat-immortal-1000d-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Immortal 1000d</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 2299/- <span>Rs.5999</span></h4>
                            <p>save : 3700/-</p>

                        </div>
                        <div class="order-btn">
<form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Immortal 1000d">
</form>
                    </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/gaming/boat-immortal-1300-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Immortal 1300</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 3499/- <span>Rs.9990</span></h4>
                            <p>save : 6491/-</p>

                        </div>
                        <div class="order-btn">

                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Immortal 1300">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/gaming/boat-immortal-400-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Immortal 400</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 1999/- <span>Rs.6999</span></h4>
                            <p>save : 5000/-</p>

                        </div>
                        <div class="order-btn">

                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Immortal 400">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/gaming/boat-immortal-700-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Immortal 700</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 2499/- <span>Rs.6990</span></h4>
                            <p>save : 1999/-</p>

                        </div>
                        <div class="order-btn">

                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Immortal 700">
</form>
                        </div>
                    </div>
                </div>
            </div>
     
        </div>

        <div class="top-seller">
            <h1>Smart <span>W</span>atches</h1>
     
            <div class="smart-watches">
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/smart-watches/boat-storm.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Storm</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 2499/- <span>Rs.5999</span></h4>
                            <p>save : 2500/-</p>

                        </div>
                        <div class="order-btn">
                       
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original" >
    <input type="hidden" name="product-hidden-name" value="boAt Storm">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/smart-watches/boat-watch-flash.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Watch Flash</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 2290/- <span>Rs.6990</span></h4>
                            <p>save : 4900/-</p>

                        </div>
                        <div class="order-btn">      
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Watch Flash">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/smart-watches/boat-watch-iris.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Watch Iris</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 4399/- <span>Rs.11249</span></h4>
                            <p>save : 6461/-</p>

                        </div>
                        <div class="order-btn">
                     
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Watch Iris">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/smart-watches/boat-watch-wave-pro.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Watch Wave Pro</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 3299/- <span>Rs.6999</span></h4>
                            <p>save : 3700/-</p>

                        </div>
                        <div class="order-btn">
                      
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Watch Wave Pro">
</form>
                        </div>
                    </div>
                </div>
            </div>
     
        </div>


        <div class="top-seller">
            <h1>Trending <span>W</span>ired</h1>
     
            <div class="trending-wired">
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/headphones/wired/boat-bassheads-102-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt BassHeads 102</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 349/- <span>Rs.1299</span></h4>
                            <p>save : 950/-</p>

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
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/headphones/wired/boat-bassheads-103-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt BassHeads 103</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 499/- <span>Rs.1299</span></h4>
                            <p>save : 800/-</p>

                        </div>
                        <div class="order-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt BassHeads 103">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/headphones/wired/boat-bassheads-104-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt BassHeads 104</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 399/- <span>Rs.999</span></h4>
                            <p>save : 600/-</p>

                        </div>
                        <div class="order-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Bassheads 104">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/headphones/wired/boat-bassheads-242-2.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt BassHeads 242</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 499/- <span>Rs.1499</span></h4>
                            <p>save : 1000/-</p>

                        </div>
                        <div class="order-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Bassheads 242">
</form>
                        </div>
                    </div>
                </div>
            </div>
     
        </div>



        <!--     New Launches   -->
      

        <div class="top-seller">
            <h1>Trending <span>W</span>ireless</h1>
     
            <div class="trending-wireless">
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/headphones/wireless/boAt-rockers-235-pro-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Rockers 235 Pro</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 1299/- <span>Rs.1999</span></h4>
                            <p>save : 600/-</p>

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
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/headphones/wireless/boAt-rockers-255-pro-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Rockers 255 Pro</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 1499/- <span>Rs.3499</span></h4>
                            <p>save : 2000/-</p>

                        </div>
                        <div class="order-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Rockers 255 Pro">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/headphones/wireless/boAt-rockers-333-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Rockers 333 </h4>
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
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/headphones/wireless/boAt-rockers-333-pro-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Rockers 333 Pro</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 1799/- <span>Rs.2999</span></h4>
                            <p>save : 1200/-</p>

                        </div>
                        <div class="order-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Rockers 333 Pro">
</form>
                        </div>
                    </div>
                </div>
            </div>
     
        </div>

        <div class="what-people-says">
            <h1>What they say <span>A</span>bout us</h1>
            <div class="reviews">
                <div class="review">
                    <div class="round-red"></div>
                    <div class="head">
                        <img src="website-images/gaming/boat-immortal-1000d-2.webp" alt="" class="p-imgg">
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
                        <img src="website-images/headphones/ANC/boat-airdopes-500-anc-2.webp" alt="" class="p-imgg">
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
                        <img src="website-images/headphones/wireless/boAt-rockers-235-pro-1.webp" alt="" class="p-imgg">
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
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/headphones/ANC/boAt-airdopes-411-anc-1.webp" alt="" class="p-imgg">
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
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/headphones/ANC/boAt-airdopes-500-anc-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Airdopes 500 ANC</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 4990/- <span>Rs.9990</span></h4>
                            <p>save : 5000/-</p>

                        </div>
                        <div class="order-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Airdopes 500 ANC">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/headphones/ANC/boAt-airdopes-501-anc-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Airdopes 501 ANC</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 3999/- <span>Rs.9999</span></h4>
                            <p>save : 5990/-</p>

                        </div>
                        <div class="order-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Airdopes 501 ANC">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/headphones/ANC/boAt-airdopes-601-anc-1.webp" alt="" class="p-imgg">
                    </div>
                    <div class="tail">
                        <h4>boAt Airdopes 601 ANC</h4>
                        <div class="border"></div>
                        <div class="price">
                            <h5>Rs. 3999/- <span>Rs.9990</span></h4>
                            <p>save : 5990/-</p>

                        </div>
                        <div class="order-btn">
                        <form action="product.php" id="order-form" method="POST">
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Airdopes 601 ANC">
</form>
                        </div>
                    </div>
                </div>
            </div>
     
        </div>

        <div class="in-press">
            <h1>In the <span>P</span>ress</h1>
            <div class="quote">
                <div class="img img1">
                    <img src="website-icons/quote.png" alt="">
                </div>
                <p class="press-text">Warburg invests $100 mn in boAt</p>
                <div class="img">
                    <img src="website-icons/quote.png" alt="">
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