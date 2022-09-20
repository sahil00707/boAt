<?php

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
<body>
    
<?php 
require_once("common_files/my-cart.php");
require_once("common_files/navbar.php");
?>
    <div class="img">
        <img src="website-images/blog-2.webp" alt="">
    </div>
<div class="guide">
    <h1>Smart Watch Buying Guide - Everything You Need To Know</h1>
    <p>The only guide you'll ever need for picking out the right Smart Watch!</p>
</div>
<div class="route">
    <h1>Finding the right design for your Hands</h1>
    <ol>
        <li> Your Fitness Coach On Your Wrist</li>
    <p>A healthy life starts with a healthy routine! And smart fitness watches are quite beneficial in maintaining a healthy routine and lifestyle. They track your steps, distance covered and give you details about your calories burnt.</p>
  <p>Not only this, but many fitness tracker watches also come with activity modes for various physical activities like running, treadmill, hiking, and so on - this is useful for the ones who are always trying to break their own records or someone who is finally going to answer their long lost call of maintaining a fitness routine. The activity trackers continuously measure your performance and motivate you to do better, every time!</p>
    <li>SpO2</li>
<p>It’s common knowledge that blood transports oxygen to the organs by filtering it through the lungs and oxygen is very much essential for your body to function.</p>
<p>Some of the best fitness trackers come with a feature where they continuously measure your blood oxygen saturation levels. This has become all the more important in current times where dropping oxygen levels have become a grave sign of worsening of the Covid-19 infection.</p>   
<li>Keeps A Tab On Your Heart</li>
<p>A healthy heart is critical for the overall well-being of the human body! And with a smartwatch on your wrist, you can monitor your heart-rate 24*7! This helps you ensure that you don’t overdo your exercise and stay safe while you work out. Secondly, they help you find your workout sweet spot; this is the pace you need to go at that keeps you moving while also keeping your heart rate balanced.</p>


</ol>
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