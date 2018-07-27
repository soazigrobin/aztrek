$(document).ready(function () {

    //    MENU BURGER   //

    $(document).ready(function () {
        $(".burger").sidr({
            name:"respNav",
            source: ".main--nav",
            displace: false,
        });
    });
    
    // * pour refermer le menu quand on clic alleurs que sur le menu burger et indiquer  name:"respNav" dans $("#nav-toggle").sidr *//
    $(document).on("click", function () {
        $.sidr('close', 'respNav');
    });



//   CAROUSEL   //

$(".owl-carousel").owlCarousel ({
    items:1,
    loop: true,
    dots: true,
    autoplay: true,
    autoplaySpeed:700,
    autoplayHoverPause: true,
});


});