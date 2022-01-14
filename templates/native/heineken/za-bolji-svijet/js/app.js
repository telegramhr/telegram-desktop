jQuery(document).ready(function ($) {
    $('.poruke-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        autoplay: true,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});

var windowWidth = window.innerWidth ||
    document.documentElement.clientWidth ||
    document.body.clientWidth;

var yPercent1 = -500;
var yPercent2 = 220;

if (windowWidth > 992) {
    yPercent1 = -600;
    yPercent2 = 600;
}

gsap.fromTo(".kap", {
    opacity: 0,
    yPercent: yPercent1
}, {
    opacity: 1,
    yPercent: yPercent2,
    duration: 2.5,
    ease: "power2.in",
    repeat: -1,
    repeatDelay: 1
});

gsap.fromTo(".kap2", {
    opacity: 0,
    yPercent: yPercent1
}, {
    opacity: 1,
    yPercent: yPercent2,
    duration: 2.5,
    ease: "power2.in",
    repeat: -1,
    repeatDelay: 1.5,
    delay: 0.5
});

var controller = new ScrollMagic.Controller();

new ScrollMagic.Scene({
        triggerElement: "#trigger1",
        triggerHook: 0.9, // show, when scrolled 10% into view
        duration: "90%", // hide 10% before exiting view (80% + 10% from bottom)
        offset: 50, // move trigger to center of element

    })
    .setClassToggle("#reveal1", "visible") // add class to reveal

    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: "#trigger1",
        triggerHook: 0.9, // show, when scrolled 10% into view
        duration: "90%", // hide 10% before exiting view (80% + 10% from bottom)
        offset: 50, // move trigger to center of element

    })
    .setClassToggle("#reveal2", "visible") // add class to reveal

    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: "#trigger3",
        triggerHook: 0.9, // show, when scrolled 10% into view
        duration: "90%", // hide 10% before exiting view (80% + 10% from bottom)
        offset: 50, // move trigger to center of element

    })
    .setClassToggle("#reveal3", "visible") // add class to reveal

    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: "#trigger4",
        triggerHook: 0.9, // show, when scrolled 10% into view
        duration: "90%", // hide 10% before exiting view (80% + 10% from bottom)
        offset: 50, // move trigger to center of element

    })
    .setClassToggle("#reveal4", "visible") // add class to reveal

    .addTo(controller);

new ScrollMagic.Scene({
        triggerElement: "#trigger5",
        triggerHook: 0.2, // show, when scrolled 10% into view
        duration: "100%", // hide 10% before exiting view (80% + 10% from bottom)
        offset: 50, // move trigger to center of element

    })
    .setClassToggle("#reveal5", "visible") // add class to reveal

    .addTo(controller);