$(document).ready(function(){
    $(".cart-hide-show-btn").on("click",
    function(){
        $(".my-cart").css(
            "right","0"
        );
    }
    );
    $(".remove-cart").on("click",function(){
        $(".my-cart").css(
            "right","-100vw"
        );
    });
    $(".scroll-top-btn").on("click",
    function(){
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    }
    );
});