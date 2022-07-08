var form = $(".not-submit-form");


form.submit(function (e) {
    e.preventDefault();
});

$(document).ready(function () {

    //Add to Cart Button 
    $(".add-to-cart-btn").on("click",
        function () {
            var product_name = $("#product-name").val();
            var product_current_price = $("#product-current-price").val();
            var product_dashed_price = $("#product-dashed-price").val();
            var product_quantity = $("#product-quantity").val();
            var product_image = $("#product-image").val();
            $.ajax({
                url: "manage-cart.php",
                type: "POST",
                data: {
                    product_name: product_name,
                    product_current_price: product_current_price,
                    product_dashed_price: product_dashed_price,
                    product_quantity: product_quantity,
                    product_image: product_image
                },
                success: function (data) {
                    if (data == "0") {
                        alert("Item Already Exists");
                    }
                    displayCart();
                    cart_number_of_items();
                    totalCart();
                }
            });
        }
    );

    //display the cart items
    function displayCart() {
        $.ajax({
            url: "display-cart.php",
            type: "POST",
            success: function (data) {
                $(".all-cart-items").html(data);
            }
        })
    }
    displayCart(); //calling the function

    //remove item from cart
    $(document).on("click", ".remove-btns",
        function  removeItem() {
            var remove_btn_id = $(this).attr("id");
            $.ajax({
                url: "remove-item-cart.php",
                type: "POST",
                data: {
                    remove_btn_id: remove_btn_id,
                },
                success: function () {
                    displayCart();
                    totalCart();
                    cart_number_of_items();
                }
            });
        }
    );

    //to count number of items in cart
    function cart_number_of_items() {
        $.ajax({
            url: "number-of-cart-items.php",
            type: "POST",
            success: function (data) {
                $("#cart-number-of-items").html("My Cart (" + data + " Items)");
                $("#number-of-cart-items-navbar").html(data);
                $("#no-of-items-bottom-cart").html(data);
            }
        });
    }

    //to find total of cart
    function totalCart() {
        $.ajax({
            url: "total-cart.php",
            type: "POST",
            success: function (data) {
                $("#total-cart").text(data);
            }
        });
    }
    cart_number_of_items();
    totalCart();


    //cart variables
    // var product_quantity_cart = $("#product-quantity-cart-x");
    //-------------
    $(document).on("click", ".cart-increase-decrease-btns",
        function () {
            var cart_increase_decrease_btn_id = $(this).attr("id");
            if (cart_increase_decrease_btn_id == "cart-decrease-btn") {
                var modify_btn_value = $(this).val();
            //    var product_price_original = $("#product-price-original").text();
                var i = 0;
                $.ajax({
                    url: "modify-cart.php",
                    type: "POST",
                    data: {
                        modify_btn_value: modify_btn_value,
                 //       product_price_original: product_price_original,
                        i: i
                    },
                    success: function (data) {
                        displayCart();
                        totalCart();
                  //      removeItem();
                    }
                });
            }
            else {
                var modify_btn_value = $(this).val();
           //     var product_price_original = $("#product-price-original").text();
                var i = 1;
                $.ajax({
                    url: "modify-cart.php",
                    type: "POST",
                    data: {
                        modify_btn_value: modify_btn_value,
                   //     product_price_original: product_price_original,
                        i: i
                    },
                    success: function (data) {
                        displayCart();
                        totalCart();
                  //      removeItem();
                    }
                });
            }
        }
    );
});