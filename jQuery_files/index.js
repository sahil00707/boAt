$(document).ready(
    function () {
        //   $(".tab-btn-1").click();
        var top_picks = $(".top-picks");
        var watches = $(".watches");
        watches.hide();
        $(".features").hide();

        $(".tab-btn-1").on("click",
            function () {
                top_picks.show();
                watches.hide();
                $(".btn1").css(
                    "border-bottom", " 3px solid red",
                );
                $(".btn2").css(
                    "border-bottom", " 3px solid rgb(44, 43, 43)"
                );
                $(".tab-btn-1").css(
                    "color", "red"
                );
                $(".tab-btn-2").css(
                    "color", "white"
                );


            }
        );
        $(".tab-btn-2").on("click",
            function () {
                watches.show();
                top_picks.hide();
                $(".btn1").css(
                    "border-bottom", " 3px solid rgb(44, 43, 43)",

                );
                $(".btn2").css(
                    "border-bottom", " 3px solid red",

                );
                $(".tab-btn-2").css(
                    "color", "red"
                );
                $(".tab-btn-1").css(
                    "color", "white"
                );

            }
        );
        $(".des-button").on("click",
            function () {
                $(".description").show();
                $(".features").hide();

            }
        );
        $(".feature-button").on("click",
            function () {
                $(".description").hide();
                $(".features").show();


            }
        );
        $(".press-list-img").hover(
            function () {
                $(".press-text").text($(this).val());
                $(this).css(
                    "filter", "grayscale(50%)",

                );
            }
        );

        setInterval(carousel,5000);
        var carousel_index=0;
        function carousel(){
            var src_carousel=$(".carousel-image ");
      carousel_index++;
      if(carousel_index>3)carousel_index=1;
            $(".carousel-image ").css("background-image", ` linear-gradient(
                rgba(0, 0, 0, 0.7), 
                rgba(0, 0, 0, 0.7)
              ),  url(website-images/landing-${carousel_index}.jpg)`);
        }
        $(".p-imgg").mouseenter(function () {
            var imgg = $(this).attr("src");
            var x = imgg.replace("-1.", "-2.");
            $(this).attr("src", x);
        })
        $(".p-imgg").mouseleave(function () {
            var imgg = $(this).attr("src");
            var x = imgg.replace("-2.", "-1.");
            $(this).attr("src", x);
        });
        $(".icons-1").mouseenter(function () {
            var x = $(this).children("div").children("img").attr("src");
            var p = x.replace("white", "black");
            $(this).children("div").children("img").attr("src", p);
        });
        $(".icons-1").mouseleave(function () {
            var x = $(this).children("div").children("img").attr("src");
            var p = x.replace("black", "white");
            $(this).children("div").children("img").attr("src", p);
        });


    }
);