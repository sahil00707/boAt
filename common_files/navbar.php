<?php  

//session_start();
?>
  
  <div class="n-big">
<div class="navbar">
        <div class="logo">
            <h1>bo<span>A</span>t</h1>
        </div>
        <ul>
     
          <button><a href="index.php">Home</a></button>
      <select name="select_category" onchange="location = this.value;">
        <option value="">Categories</option>
        <option value="gaming.php">Gaming</option>
        <option value="Headphones.php">HeadPhones</option>
        <option value="smart-watches.php">Smart Watches</option>
      </select>
          
      <select name="select_policy" onchange="location = this.value;">
        <option value="">About Us</option>
        <option value="gaming.php">Gaming</option>
        <option value="Headphones.php">HeadPhones</option>
        <option value="smart-watches.php">Smart Watches</option>
      </select>
        
       
        </ul>
        <div class="cart-others">
            <button class="cart-hide-show-btn">
            
            <div class="img">
                <img src="website-icons/shopping-cart.webp" alt="">
            </div>
            <div class="cart-items" id="number-of-cart-items-navbar">
         0
            </div>
            </button>
        </div>
    </div>

</div>