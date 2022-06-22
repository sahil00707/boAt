

$(document).ready(
    function () {

        //all variables
        //-------------
        var decrease_btn = $("#decrease-btn");
        var increase_btn = $("#increase-btn");
        var quantity_text_h4 = $("#quantity-text-h4");
        var product_current_price = $("#product-current-price");
        var product_quantity = $("#product-quantity");
        var product_price_cart = $("#product-price-cart");
        var product_price_original = $("#product-price-original").text();
        var quantity = 1;
        var MIN = 1;
        var MAX = 10;
        //--------------

        //decrease quantity of product
        decrease_btn.on("click",
            function () {
                quantity--;
                if (quantity < MIN) quantity = 01
                quantity_text_h4.text(quantity);
                product_quantity.val(quantity);
                product_current_price.val(product_price_original * quantity);

                product_price_cart.text(product_price_original * quantity);
            }
        );


        //increase quantity of product
        increase_btn.on("click",
            function () {
                quantity++;
                if (quantity > MAX) quantity = MAX;
                quantity_text_h4.text(quantity);
                product_quantity.val(quantity);
                product_current_price.val(product_price_original * quantity);
                product_price_cart.text(product_price_original * quantity);
            }
        );
        $("#thumbnail-1").on("click",
            function () {
                $("#product-imp-img").attr("src", $("#thumbnail-1-img").attr("src"));
                $("#product-image").attr("value", $("#thumbnail-1-img").attr("src"));
                $(this).css(
                    "background", 'rgb(245, 156, 149)'
                );
                $("#thumbnail-2").css(
                    "background", 'transparent'
                );
            }
        );
        $("#thumbnail-2").on("click",
            function () {
                $("#product-imp-img").attr("src", $("#thumbnail-2-img").attr("src"));
                $("#product-image").attr("value", $("#thumbnail-2-img").attr("src"));
                $(this).css(
                    "background", 'rgb(245, 156, 149)'
                );
                $("#thumbnail-1").css(
                    "background", 'transparent'
                );
                //      $("#product-imp-img").src($("#thumbnail-2-img").attr("id"));
                //alert("click")
            }
        );
    }
);