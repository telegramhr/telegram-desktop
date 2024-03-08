window.addEventListener('scroll', function() {
  var scrollTransform = document.querySelector('.scroll-transform');
  var scrollPosition = window.scrollY;

  // Primena transformacije na osnovu vrednosti skrolovanja
  scrollTransform.style.transform = 'translateX(' + scrollPosition / 1 + 'px)'; 
});


window.addEventListener('scroll', function() {
  var scrollTransform = document.querySelector('.scroll-transform-kontra');
  var scrollPosition = window.scrollY;

  // Primena transformacije na osnovu vrednosti skrolovanja
  scrollTransform.style.transform = 'translateX(' + (-scrollPosition / 1) + 'px)';
});


document.addEventListener('DOMContentLoaded', function () {
  const marqueeContent = document.querySelector('.marquee-content');
  const originalText = marqueeContent.textContent;
  let newText = '';

  for (let i = 0; i < 50; i++) { // U ovom slučaju 50 je proizvoljan broj ponavljanja teksta
    newText += originalText + ' ';
  }

  marqueeContent.textContent = newText;
});
