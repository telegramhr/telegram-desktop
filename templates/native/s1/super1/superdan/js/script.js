jQuery('.slick').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
        {
        breakpoint: 1221,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
        }
        },
        {
        breakpoint: 1220,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
        },
        {
        breakpoint: 921,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});