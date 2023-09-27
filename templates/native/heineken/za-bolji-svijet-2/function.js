// Load main functions...

jQuery(document).ready(function () {

    $('.gallery').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<div class="arrow arrow-left"></div>',
        nextArrow: '<div class="arrow arrow-right"></div>',
        arrows: true,
        autoplay: false,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1000,
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
    


    $('.info-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<div class="arrow arrow-left"></div>',
        nextArrow: '<div class="arrow arrow-right"></div>',
        arrows: true,
        autoplay: false,
        autoplaySpeed: 5000
    });
});



