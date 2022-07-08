<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming</title>  
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
        <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/smart-watches/boat-storm.webp" alt="">
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
    <input type="submit" value="Order Now" id="order-btn-original" name="order-btn-original">
    <input type="hidden" name="product-hidden-name" value="boAt Storm">
</form>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="head">
                        <div class="offer-red">New Arrival</div>
                        <img src="website-images/smart-watches/boat-watch-flash.webp" alt="">
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
                        <img src="website-images/smart-watches/boat-watch-iris.webp" alt="">
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
                        <img src="website-images/smart-watches/boat-watch-wave-pro.webp" alt="">
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

<?php 
include "common-jquery.php";
?>
</body>
</html>