
import "./style.css";
import Aos from "aos";
import "aos/dist/aos.css";



document.addEventListener("DOMContentLoaded", () => {
const poppinsRegular = new FontFace(
  "Poppins",
  "url('/src/assets/fonts/Poppins-Regular.ttf') format('truetype')",
  {
    weight: "400",
    style: "normal",
    display: "swap",
  }
);
const poppinsMedium = new FontFace(
  "Poppins",
  "url('/src/assets/fonts/Poppins-Medium.ttf') format('truetype')",
  {
    weight: "500",
    style: "normal",
    display: "swap",
  }
);
const poppinsSemibold = new FontFace(
  "Poppins",
  "url('/src/assets/fonts/Poppins-SemiBold.ttf') format('truetype')",
  {
    weight: "600",
    style: "normal",
    display: "swap",
  }
);

const christmas = new FontFace(
  "Christmas",
  "url('/src/assets/fonts/LastChristmas_PERSONAL_USE_ONLY.otf') format('opentype')",
  {
    weight: "400",
    style: "normal",
    display: "swap",
  }
);
const latoBold = new FontFace(
  "Lato",
  "url('/src/assets/fonts/Lato-Bold.ttf') format('truetype')",
  {
    weight: "700",
    style: "normal",
    display: "swap",
  }
);
const interBold = new FontFace(
  "Inter",
  "url('/src/assets/fonts/Inter-Bold.ttf') format('truetype')",
  {
    weight: "700",
    style: "normal",
    display: "swap",
  }
);

Promise.all([poppinsRegular.load(),poppinsMedium.load(),poppinsSemibold.load(), christmas.load(),latoBold.load(),interBold.load()])
  .then((loadedFonts) => {
    loadedFonts.forEach((font) => document.fonts.add(font));

    document.body.style.fontFamily = '"Poppins", sans-serif';

  })
  .catch((err) => {
    console.error("Greška pri učitavanju fontova:", err);
  });


const snowContainer = document.querySelector('.snow');

    function createFlake() {
      const flake = document.createElement('div');
      flake.classList.add('flake');

      // nasumična veličina i pozicija
      const size = Math.random() * 4 + 2; // 2–6 px
      flake.style.width = `${size}px`;
      flake.style.height = `${size}px`;
      flake.style.left = Math.random() * 100 + 'vw';
      flake.style.animationDuration = Math.random() * 5 + 5 + 's';
      flake.style.opacity = Math.random() * 0.8 + 0.2;

      snowContainer.appendChild(flake);

      // ukloni nakon što padne
      setTimeout(() => flake.remove(), 10000);
    }

    // stalni pad snijega
    setInterval(createFlake, 100);
const loadFonts = async () => {
  const christmas = new FontFace(
    'Christmas',
    'url(/assets/fonts/LastChristmas_PERSONAL_USE_ONLY.otf)'
  );

  const poppins = new FontFace(
    'Poppins',
    'url(/assets/fonts/Poppins-Regular.ttf)',
    { weight: '400' } // možeš definirati stilove ako želiš
  );



  // Učitaj sve paralelno
  await Promise.all([
    christmas.load(),
    poppins.load(),
    //candyItalic.load(),
  ]);

  // Dodaj u dokument
  document.fonts.add(christmas);
  document.fonts.add(poppins);
  //document.fonts.add(candyItalic);
};

loadFonts();
});