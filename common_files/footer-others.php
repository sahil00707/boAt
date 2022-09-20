<?php  
if(isset($_POST['subscribe'])){
    require_once("db_connect.php");
$email=$_POST['e'];
$e="INSERT INTO emails(email) VALUES('$email')";
mysqli_query($conn,$e);
}

?>
<div class="brand-promise">
            <h1>Brand <span>P</span>romise</h1>
            <div class="promise-grid">
                <div class="promise-1">
                    <div class="img"><img src="website-images/promise-1.webp" alt=""></div>
                    <h3>Free Shipping</h3>
                </div>
                <div class="promise-2">
                    <div class="img"><img src="website-images/promise-2.webp" alt=""></div>
                    <h3>Exclusive Deals</h3>
                </div>
                <div class="promise-3">
                    <div class="img"><img src="website-images/promise-3.webp" alt=""></div>
                    <h3>Secure Checkout</h5>
                </div>
            </div>
        </div>
        <div class="fg">
        <div class="fastest-growing">
            <p>India's fastest growing audio & wearables brand. The most incredible range of wireless earphones,
                earbuds, headphones, smart watches, and home audio. From workouts to adventures, boAt will get you
                sailing!
            </p>
        </div>
        </div>
        <div class="footer">
            <div class="footer-small">
                <div class="f-1">
                    <h1>bo<span>A</span>t</h1>
                    <p>Subscribe for email alerts</p>
                    <div class="form-subscribe">
                
                        <form action="#" method="POST" class="sub">
                        
                            <input type="email" placeholder="Email Address" class="iii" >
                 <button class="subscribe">Subscribe</button>
                    
                        </form>
                    </div>
                </div>
                <div class="f-2">
                    <h3>Contact Us</h3>
                    <div class="social-icons">
                        <a class="icons-1" href="https://www.facebook.com/sahil.ajmeri.3950" target="_blank">
                            <div class="img">
                                <img src="website-icons/facebook-white.svg" alt="" class="socal-media-icons">
                                <div class="white-back-hover"></div>

                            </div>
</a>
                    
                        <a class="icons-1" href="https://instagram.com/god.ajazzz?igshid=YmMyMTA2M2Y=" target="_blank">
                            <div class="img">
                                <img src="website-icons/instagram-white.svg" alt="" class="socal-media-icons">
                                <div class="white-back-hover"></div>

                            </div>
                        </a>
                        <a class="icons-1" href="https://www.linkedin.com/in/mahmadsahil-ajmeri-6911521b4" target="_blank">
                            <div class="img">
                                <img src="website-icons/linkedin-white.svg" alt="" class="socal-media-icons">
                                <div class="white-back-hover"></div>
                            </div>
                        </a>
                        <a class="icons-1" href="https://twitter.com/SahilAj28414652?t=SIJUgFsPHmGwghT9Tqh1vA&s=08" target="_blank">
                            <div class="img">
                                <img src="website-icons/twitter-white.svg" alt="" class="socal-media-icons">
                                <div class="white-back-hover"></div>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="f-3">
                    <h3>Company</h3>
                    <ul>
                        <li><a  target="_blank" href="about_us.php">About Us</a></li>
                        <li><a  target="_blank" href="privacy_policy.php">Privacy Policy</a></li>
                        <li><a  target="_blank" href="terms&conditions.php">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
            <p></p>
        </div>