jQuery.noConflict();

jQuery(function ($) {
    $(document).ready(function () {
        $('.sidenav').sidenav();
        $('.parallax').parallax();
        $('.modal').modal();
        $(window).on("scroll", function() {
          AOS.refresh();
          if($(window).scrollTop() == 0) {
            $("nav").addClass("nav_transparente");
            $("nav").removeClass("nav_black");

        } else {
            $("nav").addClass("nav_black");
            $("nav").removeClass("nav_transparente");
        }
        });
    });
 
});
document.addEventListener('DOMContentLoaded', function () {
    var carouselElems = document.querySelector('.carousel.carousel-slider');
        var carouselInstance = M.Carousel.init(carouselElems, {
            fullWidth: true,
            indicators: true
        });
    });
    function moveNextCarousel() {
        var elems = document.querySelector('.carousel.carousel-slider');
        var moveRight = M.Carousel.getInstance(elems);
        moveRight.next();
    }
    function movePrevCarousel() {
        var elems = document.querySelector('.carousel.carousel-slider');
        var moveLeft = M.Carousel.getInstance(elems);
        moveLeft.prev();
    }
    function destroyCarousel() {
        var elems = document.querySelector('.carousel.carousel-slider');
        var destroyC = M.Carousel.getInstance(elems);
        destroyC.destroy();
        console.log("Destroy");
    }
