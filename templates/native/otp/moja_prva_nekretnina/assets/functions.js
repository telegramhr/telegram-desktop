// Load main functions...

jQuery(document).ready(function () {
    AOS.init({
        duration: 1000,
        delay: 250
    });
    $('.mini-facts-bar').slick({
        dots: true,
        infinite: true,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 4000,
        fade: true,
        cssEase: 'linear',
        prevArrow: '<div class="arrow arrow-left"></div>',
        nextArrow: '<div class="arrow arrow-right"></div>',
        arrows: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
});