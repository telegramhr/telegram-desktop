jQuery(document).ready( function() {
   // Load functions
    stickyNav();
    scrollTop();
    stickyElements();
    leftMenu();
    search();
    gallerySlide();

    jQuery('.the-content img').not('.the-content .banner img').each(function(i, o) {
        if (jQuery(o).attr('src') === 'https://www.telegram.hr/wp-content/uploads/2017/10/Screen-Shot-2017-10-18-at-23.07.30.png') {
            return;
        }
        if (Number(o.getAttribute('width')) < Number(o.getAttribute('height'))){
            jQuery(o).addClass('img-portrait');
            jQuery(o).siblings('figcaption').addClass('img-portrait'); // without figure
            jQuery(o).parent().siblings('figcaption').addClass('img-portrait'); //with figure
        }
    });

    whiteLogo();
    comments();
});

function stickyNav() {
    jQuery(document).scroll( function() {
        var scrollTop = jQuery(window).scrollTop();
        if( scrollTop >= 250 ) {
            jQuery('.home .nav-small, .nav-single').addClass('sticky');
        } else {
            jQuery('.home .nav-small, .nav-single').removeClass('sticky');
        }
    });
}

function scrollTop() {
    jQuery('nav.nav-single .tg a').click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
}

function stickyElements() {
    jQuery('.sticky-widget').stick_in_parent({
        offset_top: 100
    });
    jQuery('.wallpapers').stick_in_parent({
        parent: '.main-container',
        spacer: false
    });
}

function leftMenu() {
    jQuery('.burger').click( function() {
       jQuery('body').toggleClass('menu-active');
    });
}

function search() {
    jQuery('.right-action').click( function() {
       jQuery('.global-search').slideDown(200);
    });

    jQuery('.close').click( function() {
        jQuery('.global-search').slideUp(200);
    });

    jQuery(document).keyup(function(e) {
        if (e.keyCode == 27) { // escape key maps to keycode `27`
            jQuery('.global-search').slideUp(200);
        }
    });

    // Show results AFTER loading bar has loaded
    var feild = jQuery('#search-feild');

    feild.on("change paste keyup", function() {
        function loopBar() {
            jQuery('.loader .bar').animate({left: '100%'}, 2000).animate({left: '-100%'}, 0, loopBar);
        }
        loopBar();
    });
}

function gallerySlide() {
    if (jQuery('.gallery-slider').length) {
        jQuery('.gallery-slider').slick({
            prevArrow: '.prev-img',
            nextArrow: '.next-img',
            slide: '.gallery-image'
        }).on('afterChange', function (event, slick, currentSlide) {
            jQuery('.gallery-page  .slide-num span').text((currentSlide + 1) + '/' + (gallery_captions.length));
        });
        jQuery('.gallery-page  .slide-num span').text('1/' + (gallery_captions.length));
    }
}

function whiteLogo() {
    if (typeof(window.white_logo) !== 'undefined' && window.white_logo) {
        //TODO better solution
        var target = '.single-price .single-head .thumb img';
        if ( jQuery(target).length ) {
            jQuery(target).colourBrightness();
            if ( jQuery(target).hasClass('light') ) {
                jQuery('body').addClass('light');
            }
        }
        if( jQuery('.single-head').hasClass('no-img') ) {
            jQuery('body').addClass('light');
        }
    }
}

function comments() {
    jQuery('.comments-activate').click( function() {
        jQuery(this).hide();
        jQuery('.comments-hide').show();
    });
}