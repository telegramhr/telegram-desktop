// Load main functions...

jQuery(document).ready(function () {
    $('.gallery').slick({
        speed: 1000,
        slidesToScroll: 1,
        autoplay: true,
        prevArrow: '<div class="arrow angle-left"></i>',
        nextArrow: '<div class="arrow angle-right"></i>',
        arrows: true,
        autoplaySpeed: 3000
    });
});