// Load main functions...

jQuery(document).ready(function () {

  $('.gallery').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    prevArrow: '<div class="arrow arrow-left"></div>',
    nextArrow: '<div class="arrow arrow-right"></div>',
    arrows: true,
    autoplay: false,
    autoplaySpeed: 5000,
    dots: true,
    responsive: [ {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    }]
});
  $('.article-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<div class="arrow arrow-left"></div>',
    nextArrow: '<div class="arrow arrow-right"></div>',
    arrows: true,
    autoplay: false,
    autoplaySpeed: 5000,
    responsive: [ {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });
  var track_score = 0;
    var result = 1;
    $('.answer').click(function() {
        var active = $('.slide.active').data('slide');
        if ($(this).data('track')) {
            track_score++;
        }
        //advance
        $('.slide.slide-' + active).removeClass('active');
        active++;
        intermediary = Math.round((active / 10) * 10000) / 100;
        $('.progress-indicator').css("width", intermediary + "%");
        if (active !== 11) {
            $('.slide.slide-' + active).addClass('active');
        } else {
            $('.result .question span').html("Rezultat: "+track_score + "/10");
            if (track_score > 7) {
                result = 1;
                $('.result .description').text("Odlično! Imaš zavidno znanje o održivosti.");
            } else if (track_score > 4) {
                result = 2;
                $('.result .description').text("Nije loše, bravo. Nadamo se da si naučio/la nešto novo.");
            } else {
                result = 3;
                $('.result .description').text("Znamo da možeš bolje! Pročitaj naše tekstove pa probaj ponovno.");
            }
            
            //$('.result .description').text(descriptions[result].description);
            //$('.result .share').attr('href', descriptions[result].url);
            $('.slide.slide-' + active).addClass('active');

        }
        return false;
    });
    $('.restart').click(function() {
        var active = $('.slide.active').data('slide');
        $('.slide.slide-' + active).removeClass('active');
        active = 1;
        $('.progress-indicator').css("width", "1%");
        $('.slide.slide-' + active).addClass('active');
        track_score = 0;
        return false;
    });
});