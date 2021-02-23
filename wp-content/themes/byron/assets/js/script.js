jQuery.noConflict();

jQuery(function ($) {
    $(document).ready(function () {
        $('.sidenav').sidenav();
        $('.parallax').parallax();
        $('.materialboxed').materialbox();
        $('.modal').modal();
        $('.modal').modal({
            'onOpenEnd': initCarousel
        });
        function initCarousel() {
            $('.carousel.carousel-slider').carousel({
                fullWidth: true,
                indicators: true,
                noWrap: true,    
              });
              $('.carousel').carousel('set', 1);
              console.log("Init");
         }
        $('.next').click(function(){
            $('.carousel').carousel('next');
        });
        $('.prev').click(function(){
            $('.carousel').carousel('prev'); 
        });
        $('.modal-servicos-init').click(function(){
            $('.carousel').carousel('set');
        });
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

