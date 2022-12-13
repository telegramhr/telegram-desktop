// Load main functions...

// Initialize WOW.js animations
jQuery(document).ready( function() {
    new WOW().init();
    $('.slick').slick({
        slidesToShow: 3,
        arrows: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3400,
        prevArrow: '<i class="fa animate arrow arrow-prev fa-angle-left"></i>',
        nextArrow: '<i class="fa animate arrow arrow-next fa-angle-right"></i>',
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});