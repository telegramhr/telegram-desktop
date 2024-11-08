// Load main functions...
function hideEverything() {
    $('#header-form-success').removeClass('hide');
    $('.hide-later').addClass('hide');
    $('.header-form').addClass('hide-before');
  }

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
    

    $('.mobile-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<div class="arrow arrow-left"></div>',
        nextArrow: '<div class="arrow arrow-right"></div>',
        arrows: true,
        autoplay: false,
        autoplaySpeed: 5000,
        responsive: [
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

    $('.video-center').slick({
        speed: 750,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        infinite: true,
        dots: false,
        prevArrow: '<div class="arrow arrow-left"></div>',
        nextArrow: '<div class="arrow arrow-right"></div>',
        arrows: true,
        centerMode: true,
        draggable: true,
        centerPadding: '24px',
        responsive: [
          {
            breakpoint: 1025,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 786,
            settings: {
              slidesToShow: 1,
            }
          },
        ]
      });

    var $form = $('form#pitanje-strucnjacima'),
    url = 'https://script.google.com/macros/s/AKfycbw5UMTk2_4IMikXgHUcJ9nasjRDNgJRTb-07oQ14VAZZCK9MfeDHgBeZz1zDy17Ay8_gw/exec'


    $('#submit-form').on('click', function (e) {
        let submit_data = {pitanje: $('form#pitanje-strucnjacima textarea').val()};
          e.preventDefault();
          var jqxhr = $.ajax({
            url: url,
            method: "GET",
            dataType: "json",
            data: submit_data
          }).done(
            hideEverything()
          );
      })
});



