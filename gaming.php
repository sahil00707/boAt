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
      ?>
    <?php 
      require_once("common_files/navbar.php");
      ?>
      <div class="page-head" style=" 
    background: url(website-images/gamingg.jpg);
    background-size: cover;
    background-attachment: fixed;">
        <div class="text"><h1>Gaming</h1></div>
     
      </div>
      <div class="gaming-section-all">
        <h1><span>G</span>aming</h1>
        <div class="top-picks">
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
      <?php 
      include "common_files/footer-others.php";
      ?>
<?php 
include "common-jquery.php";
?>
</body>
</html>