jQuery(document).ready( function() {
   // Load functions
    stickyNav();
    scrollTop();
    stickyElements();
    leftMenu();
    search();
    gallerySlide();
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
    jQuery('.sticky-widget').stick_in_parent();
    jQuery('.wallpapers').stick_in_parent({
        parent: '.main-container'
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