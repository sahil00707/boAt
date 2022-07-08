<?php 
session_start();
//session_destroy();


//dispplay the cart items if any otherwise  will show Else part
if(isset($_SESSION['my_cart'])){
    foreach($_SESSION['my_cart'] as $row){
      ?>
        <div class="cart-item">
                    <div class="cart-item-image">
                        <img src="<?php echo $row['product_image']?>" alt="">
                    </div>
                    <div class="cart-item-info">
                        <h4><?php  echo $row['product_name']?></h4>
                        <h5 class="cart-price">Rs. <?php echo $row['product_modified_price']?></h5>
                        <div class="quantity-remove">
                            <div class="quantity">
                                <div class="select-quantity">
                                    <button class="img cart-increase-decrease-btns" id="cart-decrease-btn" value="<?php echo $row['cart_index']?>"><img src="website-icons/minus-sign.png" alt=""></button>
                                    <div class="quantity-text">
                                        <h4 id="product-quantity-cart-x"><?php echo $row['product_quantity']?></h4>
                                    </div>
                                    <button class="img  cart-increase-decrease-btns" id="cart-increase-btn" value="<?php echo $row['cart_index']?>"><img src="website-icons/plus.png" alt=""></button>
                                </div>
    
                            </div>
                            <div class="remove">
                                <button  class="remove-btns" id="<?php echo $row['cart_index']?>" >Remove</button>
                            </div>
                        </div>
    
                    </div>
                </div>
      <?php 
    }
}
else 
echo "The cart is empty";
?>