function dodajSkrolListener(klasaZaAnimaciju, horizontalniElement) {
  var elem = document.querySelector(klasaZaAnimaciju);
  var horizontalniElem = document.querySelector(horizontalniElement);
  var originalnaPozicija = horizontalniElem.getBoundingClientRect().left - window.pageXOffset;
  var posljednjaPozicija = originalnaPozicija;
  var viewportWidth = window.innerWidth;

  window.addEventListener('scroll', function() {
    var scrollPozicija = window.scrollY;
    var trenutnaPozicija = horizontalniElem.getBoundingClientRect().left - window.pageXOffset;
    var translateX = trenutnaPozicija - originalnaPozicija;

    // Provjeri je li element u trenutno vidljivom dijelu ekrana
    var elementInView = trenutnaPozicija >= 0 && trenutnaPozicija + horizontalniElem.offsetWidth <= viewportWidth;

    if (elementInView) {
      // Ako se pozicija promijenila od zadnje poznate pozicije, pokreni animaciju ponovno
      if (trenutnaPozicija !== posljednjaPozicija) {
        elem.classList.add('animiraj');
        posljednjaPozicija = trenutnaPozicija;
      }

      // Primijeni transformaciju samo ako je element u vidljivom dijelu ekrana
      horizontalniElem.style.transform = 'translateX(' + translateX + 'px)';
    }
  });
}

// Funkcija za pokretanje animacije kada je element u pregledniku
function pokreniAnimacijuKadaVidljiv(element, klasaZaDodati, horizontalniElement) {
  var promatrac = new IntersectionObserver(function(zapisi) {
    zapisi.forEach(function(zapis) {
      if (zapis.isIntersecting) {
        element.classList.add(klasaZaDodati);
        dodajSkrolListener('.' + klasaZaDodati, horizontalniElement);
        promatrac.unobserve(zapis.target);
      }
    });
  });

  promatrac.observe(element);
}

// Poziv funkcije za svaki element koji želite animirati kada je vidljiv
pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-1'), 'animiraj', '.scroll-transform-1');
pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-kontra-1'), 'animiraj', '.scroll-transform-1');

pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-2'), 'animiraj', '.scroll-transform-kontra-2');
pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-kontra-2'), 'animiraj', '.scroll-transform-kontra-2');

pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-3'), 'animiraj', '.scroll-transform-kontra-3');
pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-kontra-3'), 'animiraj', '.scroll-transform-kontra-3');

pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-4'), 'animiraj', '.scroll-transform-4');
pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-kontra-4'), 'animiraj', '.scroll-transform-4');

pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-5'), 'animiraj', '.scroll-transform-kontra-5');
pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-kontra-5'), 'animiraj', '.scroll-transform-kontra-5');

pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-6'), 'animiraj', '.scroll-transform-kontra-6');
pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-kontra-6'), 'animiraj', '.scroll-transform-kontra-6');

pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-7'), 'animiraj', '.scroll-transform-7');
pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-kontra-7'), 'animiraj', '.scroll-transform-7');

pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-8'), 'animiraj', '.scroll-transform-kontra-8');
pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-kontra-8'), 'animiraj', '.scroll-transform-kontra-8');

pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-9'), 'animiraj', '.scroll-transform-kontra-9');
pokreniAnimacijuKadaVidljiv(document.querySelector('.scroll-transform-kontra-9'), 'animiraj', '.scroll-transform-kontra-9');


document.addEventListener('DOMContentLoaded', function () {
  const marqueeContents = document.querySelectorAll('.marquee-content');

  marqueeContents.forEach(function(marqueeContent) {
    const originalText = marqueeContent.textContent;
    let newText = '';

    for (let i = 0; i < 50; i++) { // Ovdje možete promijeniti broj ponavljanja teksta
      newText += originalText + ' ';
    }

    marqueeContent.textContent = newText;
  });
});

document.addEventListener('DOMContentLoaded', function () {
  const marqueeContent = document.querySelector('.marquee-content-2');
  const originalText = marqueeContent.textContent;
  let newText = '';

  for (let i = 0; i < 50; i++) { // U ovom slučaju 50 je proizvoljan broj ponavljanja teksta
    newText += originalText + ' ';
  }

  marqueeContent.textContent = newText;
});

document.addEventListener('DOMContentLoaded', function () {
  const marqueeContent = document.querySelector('.marquee-content-3');
  const originalText = marqueeContent.textContent;
  let newText = '';

  for (let i = 0; i < 50; i++) { // U ovom slučaju 50 je proizvoljan broj ponavljanja teksta
    newText += originalText + ' ';
  }

  marqueeContent.textContent = newText;
});

document.addEventListener('DOMContentLoaded', function () {
  const marqueeContent = document.querySelector('.marquee-content-4');
  const originalText = marqueeContent.textContent;
  let newText = '';

  for (let i = 0; i < 50; i++) { // U ovom slučaju 50 je proizvoljan broj ponavljanja teksta
    newText += originalText + ' ';
  }

  marqueeContent.textContent = newText;
});



document.addEventListener('DOMContentLoaded', function () {
  const marqueeContent = document.querySelector('.marquee-content-5');
  const originalText = marqueeContent.textContent;
  let newText = '';

  for (let i = 0; i < 50; i++) { // U ovom slučaju 50 je proizvoljan broj ponavljanja teksta
    newText += originalText + ' ';
  }

  marqueeContent.textContent = newText;
});


document.addEventListener('DOMContentLoaded', function () {
  const marqueeContent = document.querySelector('.marquee-content-6');
  const originalText = marqueeContent.textContent;
  let newText = '';

  for (let i = 0; i < 50; i++) { // U ovom slučaju 50 je proizvoljan broj ponavljanja teksta
    newText += originalText + ' ';
  }

  marqueeContent.textContent = newText;
});


document.addEventListener('DOMContentLoaded', function () {
  const marqueeContent = document.querySelector('.marquee-content-7');
  const originalText = marqueeContent.textContent;
  let newText = '';

  for (let i = 0; i < 50; i++) { // U ovom slučaju 50 je proizvoljan broj ponavljanja teksta
    newText += originalText + ' ';
  }

  marqueeContent.textContent = newText;
});

document.addEventListener('DOMContentLoaded', function () {
  const marqueeContent = document.querySelector('.marquee-content-8');
  const originalText = marqueeContent.textContent;
  let newText = '';

  for (let i = 0; i < 50; i++) { // U ovom slučaju 50 je proizvoljan broj ponavljanja teksta
    newText += originalText + ' ';
  }

  marqueeContent.textContent = newText;
});


document.addEventListener('DOMContentLoaded', function () {
  const marqueeContent = document.querySelector('.marquee-content-9');
  const originalText = marqueeContent.textContent;
  let newText = '';

  for (let i = 0; i < 50; i++) { // U ovom slučaju 50 je proizvoljan broj ponavljanja teksta
    newText += originalText + ' ';
  }

  marqueeContent.textContent = newText;
});

