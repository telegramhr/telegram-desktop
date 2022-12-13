// Load main functions...

// Initialize WOW.js animations
jQuery(document).ready( function() {
    new WOW().init();
});

/*$('.tilt-card').tilt({
    maxTilt: 18,
    perspective: 2000
})*/

const elems = document.querySelectorAll('.tilt-card');

const universalTilt = UniversalTilt.init({
  elements: elems,
  settings: {
    max: 18,
    perspective: 2000
  },
  callbacks: {
    // callbacks...
  }
});