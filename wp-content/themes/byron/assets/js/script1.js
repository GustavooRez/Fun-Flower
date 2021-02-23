jQuery.noConflict();

jQuery(function ($) {
    $(document).ready(function () {
        $('.sidenav').sidenav();
        $('.parallax').parallax();
        $('.modal').modal({
            'onOpenEnd': initCarousel
        });
        function initCarousel() {
            $('.carousel.carousel-slider').carousel({
                fullWidth: true,
                indicators: true,
                noWrap: true
              });
              console.log("Init");
         }
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
function destroyCarousel() {
    var elems = document.querySelector('.carousel.carousel-slider');
    var destroyC = M.Carousel.getInstance(elems);
    destroyC.destroy();
    console.log("Destroy");
}
