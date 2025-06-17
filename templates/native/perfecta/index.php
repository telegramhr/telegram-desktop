
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/perfecta';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</style>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <style>
            #map {
                height: 500px;
                width: 100%;
                position: relative;
                overflow: hidden;
            }

                .puls { -webkit-animation: puls 2s ease-out 0s infinite; animation: puls 2s ease-out 0s infinite; }
                .pulsjedan { -webkit-animation: puls 2s ease-out 1s infinite; animation: puls 2s ease-out 1s infinite; }

                @-webkit-keyframes puls { 0% { -webkit-transform:scale(1) } 50% {-webkit-transform:scale(1.2)} 100% { -webkit-transform:scale(1) } }
                 @keyframes puls { 0% { transform:scale(1) } 50% {transform:scale(1.2)} 100% { transform:scale(1) } }
        </style>
<head>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css?v=09052024">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">


</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="15" class="pozadina">
<?php do_action('telegram_body_start'); ?>
  <!-- ***** Preloader Start ***** -->



<div class="main-banner" id="top" style="position: relative; overflow: hidden; height: 100vh; background: url('<?php echo $native_path ?>/assets/images/fallback-prvi.jpg') no-repeat; background-size: cover;">
  <!-- YouTube Video Background -->


  <!-- Main Content -->
  <div class="container" style="position: relative; z-index: 2;">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 align-self-center">
            <div class="fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <div class="row">
                <div class="col-lg-10 offset-lg-1">
                  <img src="<?php echo $native_path ?>/assets/images/claim.svg">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="blog" style="background: #f6f3eb; padding-top: 60px;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 text-left crtadesna wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s">
            <a href="https://perfecta.hr" target="_blank"><img src="<?php echo $native_path ?>/assets/images/tekst.png"/></a>
          </div>
          <div class="col-lg-6 text-left crtalijeva wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s">
            <a href="https://perfecta.hr/proizvod/krevet-baza-22/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/krevet.webp"/></a>
          </div>
        </div>

    </div>
</div>

<div class="blog" style="background: #f6f3eb; padding-top: 60px;">
  <div class="container">
      <div class="row">
          <div class="col-lg-3">
            <img src="<?php echo $native_path ?>/assets/images/mm.webp" class="puls"/>
          </div>
          <div class="col-lg-6 text-center wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s">
            <p>Bilo da ste ljubitelj <span>minimalizma</span> s notom luksuza ili volite toplinu prirodnih materijala, <span>savršena spavaća soba</span> spaja dizajn, funkcionalnost i ugodu na način koji vam svakodnevicu <span>čini ljepšom</span> te osigurava kvalitetan i ugodan san.</p>
            <p>Zamislite <span>spavaću</span> sobu u kojoj svaka nijansa, tekstura i detalj <span>priča vašu priču</span>. Prostor u koji se vraćate na kraju dana ne bi trebao biti samo <span>mjesto za spavanje</span>. On treba biti vaša osobna oaza, odraz vašeg stila, <span>estetike<span> i životnog ritma.</p>
          </div>
          <div class="col-lg-3">
            <img src="<?php echo $native_path ?>/assets/images/sd.webp" class="pulsjedan"/>
          </div>
        </div>

    </div>
</div>


<div class="blog p-0" style="background: #f6f3eb; padding-top: 0px; padding-bottom: 0; border-bottom:1px solid #b84e00">
  <div class="container-fluid">
      <div class="row wow fadeInDown" data-wow-duration="3s" data-wow-delay="0s">
          <div class="col-lg-12">
            <img src="<?php echo $native_path ?>/assets/images/pokrivac.webp" style="z-index:10000" />
          </div>
        </div>

    </div>
</div>


<div id="mapa" class="blog" style="background: #f6f3eb;">
  <div class="container">
    <div class="row p-0">

      <div class="col-lg-8 offset-lg-2 text-center p-0">

        <div id="quiz" class="text-center p-4">
            <h1 class="mb-3" style="color:#b84e00 !important; font-weight:300 !important; font-family: Playfair Display; font-style: italic !important;">Riješi kviz i složi savršenu spavaću sobu baš po mjeri!</h1>
            <br/><br/>
            <div id="question-container" class="question-container mb-3"></div>

            <div id="result" class="mt-4"></div>
        </div>

      </div>
    </div>
  </div>
</div>


 <div class="blog text-center" style="background: #f6f3eb; padding-top: 0px; ">
  <div class="container">
        <div class="row">
          <div class="col-lg-4 offset-lg-4">
            <img src="<?php echo $native_path ?>/assets/images/mm.webp" class="puls"/>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <img src="<?php echo $native_path ?>/assets/images/perf.webp"/>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <br/><br/>
            <img src="<?php echo $native_path ?>/assets/images/mis.webp" style="position: relative; bottom:-100px; right: -350px; width: 30px; height: auto;" />
            <h2 style="font-style: italic !important; font-weight: 100 !important;"><a href="https://www.telegram.hr/preview/2575912" target="_blank">Trebate pomoć pri uređenju spavaće sobe?  <br/>Mi znamo kako ćete ju napraviti baš po svojoj mjeri</a></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 offset-lg-4">
            <br/><br/>
            <img src="<?php echo $native_path ?>/assets/images/mis.webp" style="position: relative; bottom:-200px; right: -100px; width: 30px; height: auto;" />
            <a href="https://perfecta.hr" target="_blank"><img src="<?php echo $native_path ?>/assets/images/logo.webp"/></a>
          </div>
        </div>
    </div>
</div>













  <div id="clanci" class="blog" style="z-index: 100; position: relative; padding-top: 100px; padding-bottom: 120px; overflow: hidden; background: #f6f3eb;">


    <div class="container-fluid wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">

              <p style="color:#000">Autorica: Lucija Vogrinc<br/>
Kreativno vodstvo: TMG Studio<br/>
Razvoj: Reset<br/><br/>
Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/telegram.png" style="max-width: 186px;"  />
          </div>
        </div>
      </div>
  </div>

  <script type="text/javascript">
          window.addEventListener('scroll', function() {
              var slika2 = document.querySelector('.slika2');
              var rect = slika2.getBoundingClientRect();

              if (rect.top <= 0) {
                  slika2.style.zIndex = 3;
              } else {
                  slika2.style.zIndex = 2;
              }
          });

  </script>
          <script>
            // Inicijalizacija mape
            const map = L.map('map').setView([35.9350, 14.2135], 10); // Malta

            // Dodavanje OpenStreetMap sloja
            L.tileLayer('https://a.tile.openstreetmap.de/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);
            // Dodavanje pinova
            const locations = [
                { lat: 35.845, lng: 14.455, title: "Mqabba" },
                { lat: 35.830, lng: 14.439, title: "Qrendi" },
                { lat: 35.884, lng: 14.351, title: "Rabat" },
                { lat: 35.918, lng: 14.347, title: "Mġarr" },
                { lat: 35.964, lng: 14.317, title: "Melleha" },
                { lat: 36.067, lng: 14.190, title: "Għarb" },
                { lat: 36.049, lng: 14.276, title: "Nadur" },
                { lat: 36.055, lng: 14.247, title: "Xaghra" },
                { lat: 35.839, lng: 14.543, title: "Marsaxlokk" },
            ];

            locations.forEach(location => {
                L.marker([location.lat, location.lng]).addTo(map)
                    .bindPopup(`<b>${location.title}</b>`);
            });

        </script>
        <script type="text/javascript">

const scrollSection = document.querySelector('.scroll-section');
const scrollContainer = document.querySelector('.scroll-container');

let startScroll = false;
let initialScrollY = 0;

// Kreiramo Intersection Observer da detektuje kada je container u vidnom polju
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      startScroll = true;
      initialScrollY = window.scrollY; // Pamti početnu vrednost skrola
    } else {
      startScroll = false;
    }
  });
}, { threshold: 0.001 });

observer.observe(scrollSection);

// Maksimalna udaljenost za skrolovanje
const maxScrollDistance = scrollContainer.scrollWidth - window.innerWidth;

// Dodajemo event listener za skrolovanje
window.addEventListener('scroll', () => {
  if (startScroll) {
    // Izračunaj koliko smo skrolovali unutar sekcije
    let scrolledDistance = window.scrollY - initialScrollY;

    // Ograniči pomak na maksimalnu širinu kako bi se elementi vraćali nazad
    scrolledDistance = Math.max(0, Math.min(scrolledDistance, maxScrollDistance));

    // Primeni horizontalni pomak pomoću translateX
    scrollContainer.style.transform = `translateX(-${scrolledDistance}px)`;
  }
});


</script>
<script>



const questions = [
    { text: "Kako najčešće spavaš?", options: ["na leđima", "na boku", "na trbuhu", "u svim pozicijama"] },
    { text: "Što ti je najvažnije u spavaćoj sobi?", options: ["minimalistički dizajn", "toplina i udobnost", "praktičnost i funkcionalnost", "elegancija i stil"] },
    { text: "Kakav madrac preferiraš?", options: ["mekani", "srednje tvrd", "tvrdi", "kombinacija mekanog i tvrdog"] },
    { text: "Koliko ti je važna dodatna pohrana u krevetu?", options: ["nije mi potrebna", "korisna je, ali nije presudna", "vrlo mi je važna", "ovisi o dizajnu kreveta"] },
    { text: "Koje boje preferiraš u interijeru?", options: ["neutralne tonove (bijela, siva, bež)", "pastelne boje (svijetloplava, ružičasta)", "tamne boje (tamnosiva, tamnoplava)", "žive boje (crvena, žuta)"] },
];



const resultData = {
    A: {
        image: "<?php echo $native_path ?>/assets/images/kviz01.jpg",
        link: "https://perfecta.hr/proizvod/krevet-baza-13/?size=200x160&base_material=raiden-9611&headboard_material=raiden-9611&legs=5916&headboard=29764&mattress=781&topper=866",
        text: "<h3>Minimalistički spavač</h3><br/><p style='font-weight:400 !important'>Ti si osoba koja voli red, jasnoću i umirujuću atmosferu. Spavaća soba za tebe je prostor za mentalni reset, a svaki element u njoj ima svoju svrhu. Ne voliš nered, voliš neutralne tonove, prirodne materijale i čiste linije.</p><p style='font-weight:400 !important'><span>Savršen odabir za tebe</span></p><p style='font-weight:400 !important'><span>Krevet:</span> <a href='https://perfecta.hr/proizvod/krevet-baza-13/?size=200x160&base_material=raiden-9611&headboard_material=raiden-9611&legs=5916&headboard=29764&mattress=781&topper=866' target='_blank'><strong>Baza 13 s uzglavljem Lisabon (Raiden 9611) <svg class='MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1phnduy ikona' focusable='false' aria-hidden='true' viewBox='0 0 24 24'><path d='M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3z'></path></svg></strong></a> jednostavne linije i suptilna elegancija</p><p style='font-weight:400 !important'><span>Madrac:</span> <a href='https://perfecta.hr/proizvod/krevet-baza-13/?size=200x160&base_material=raiden-9611&headboard_material=raiden-9611&legs=5916&headboard=29764&mattress=781&topper=866' target='_blank'><strong>Stella New <svg class='MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1phnduy ikona' focusable='false' aria-hidden='true' viewBox='0 0 24 24'><path d='M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3z'></path></svg></strong></a> – srednje tvrd madrac za aktivne osobe</p><p style='font-weight:400 !important'><span>Jastuk:</span> <a href='https://perfecta.hr/proizvod/technogel-anatomic/' target='_blank'><strong>Anatomski jastuk Technogel Anatomic <svg class='MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1phnduy ikona' focusable='false' aria-hidden='true' viewBox='0 0 24 24'><path d='M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3z'></path></svg></strong></a> za optimalnu potporu</p><p style='font-weight:400 !important'><span><a href='https://perfecta.hr/proizvod/technogel-anatomic/' target='_blank'>Dodatni asortiman:</a></span> Jednostavne noćne lampe i dekoracije u neutralnim tonovima</p>"
    },
    B: {
        image: "<?php echo $native_path ?>/assets/images/kviz02.jpg",
        link: "https://perfecta.hr/proizvod/krevet-baza-ladica/?size=200x160&base_material=amsterdam-144&headboard_material=amsterdam-144&legs=5930&headboard=5795&mattress=781&topper=866",
        text: "<h3>Topli i udobni spavač</h3><br/><p style='font-weight:400 !important'>Tvoja soba je tvoje utočište. Voliš se sklupčati uz knjigu i stvaraš prostor u kojem se svi osjećaju dobrodošlo. Preferiraš meke materijale, toplu rasvjetu i mekan, udoban madrac.</p><p style='font-weight:400 !important'><span>Savršen odabir za tebe</span></p><p style='font-weight:400 !important'><span>Krevet:</span> <a href='https://perfecta.hr/proizvod/krevet-baza-ladica/?size=200x160&base_material=amsterdam-144&headboard_material=amsterdam-144&legs=5930&headboard=5795&mattress=781&topper=866' target='_blank'><strong>Baza s ladicama i uzglavljem Paris u plišanoj tkanini <svg class='MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1phnduy ikona' focusable='false' aria-hidden='true' viewBox='0 0 24 24'><path d='M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3z'></path></svg></strong></a> ( Amsterdam 144) - mekano, zaobljeno i poziva na odmor</p><p style='font-weight:400 !important'><span>Madrac:</span> <a href='https://perfecta.hr/proizvod/anatom-soft-soft/' target='_blank'><strong>Anatom Soft/Soft <svg class='MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1phnduy ikona' focusable='false' aria-hidden='true' viewBox='0 0 24 24'><path d='M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3z'></path></svg></strong></a> – maksimalna udobnost i osjećaj oblaka</p><p style='font-weight:400 !important'><span><a href='https://perfecta.hr/kategorija-proizvoda/dodatni-asortiman/' target='_blank'>Dodaci:</a></span> Jastuk od memorijske pjene, deke, udobne fotelje i rasvjeta sa sjenilima za toplinu prostora</p>"
    },
    C: {
        image: "<?php echo $native_path ?>/assets/images/kviz03.jpg",
        link: "https://perfecta.hr/proizvod/krevet-baza-ladica/?size=200x160&base_material=cruz-9573&headboard_material=cruz-9573&legs=5930&headboard=5765&mattress=781&topper=866",
        text: "<h3>Praktični spavač</h3><br/><p style='font-weight:400 !important'>Ti tražiš rješenja. Tvoja soba je promišljeno organizirana, a krevet mora biti više od mjesta za spavanje – on je prostor za pohranu, igraonica, radna zona. Estetika ti je važna, ali funkcionalnost ti je prioritet.</p><p style='font-weight:400 !important'><span>Savršen odabir za tebe</span></p><p style='font-weight:400 !important'><span>Krevet:</span> <a href='https://perfecta.hr/proizvod/krevet-baza-ladica/?size=200x160&base_material=cruz-9573&headboard_material=cruz-9573&legs=5930&headboard=5765&mattress=781&topper=866' target='_blank'><strong>Baza s ladicama i uzglavljem Madrid (Cruz 9573) <svg class='MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1phnduy ikona' focusable='false' aria-hidden='true' viewBox='0 0 24 24'><path d='M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3z'></path></svg></strong></a> – čisto, strukturirano i vizualno kompaktno</p><p style='font-weight:400 !important'><span>Madrac:</span> <a href='https://perfecta.hr/proizvod/anatom-firm-firm/' target='_blank'><strong>Anatom Firm/Firm <svg class='MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1phnduy ikona' focusable='false' aria-hidden='true' viewBox='0 0 24 24'><path d='M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3z'></path></svg></strong></a> – tvrdi madrac za čvrstu potporu</p><p style='font-weight:400 !important'><span>Jastuk:</span> <a href='https://perfecta.hr/proizvod/morpheus/' target='_blank'><strong>Morpheus <svg class='MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1phnduy ikona' focusable='false' aria-hidden='true' viewBox='0 0 24 24'><path d='M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3z'></path></svg></strong></a> - jastuk sa džepićastom jezgrom</p><p style='font-weight:400 !important'><span><a href='https://perfecta.hr/kategorija-proizvoda/dodatni-asortiman/' target='_blank'>Dodatni asortiman:</a> </span>Praktične noćne lampe i organizatori, noćni ormarići s ladicama</p>"
    },
    D: {
        image: "<?php echo $native_path ?>/assets/images/kviz04.jpg",
        link: "https://perfecta.hr/proizvod/krevet-baza-22/?size=200x160&base_material=seattle-67&headboard_material=seattle-67&legs=5988&headboard=5753&mattress=781&topper=866",
        text: "<h3>Elegantni spavač</h3><br/><p style='font-weight:400 !important'>Tvoja soba je tvoj osobni boutique hotel. Voliš klasiku s dozom luksuza, boje poput tamnoplave, maslinaste ili bordo, te uzglavlja s karakterom. Tvoje spavanje je ritual, a krevet centar prostora.</span></p><p style='font-weight:400 !important'><span>Krevet:</span> <a href='https://perfecta.hr/proizvod/krevet-baza-22/?size=200x160&base_material=seattle-67&headboard_material=seattle-67&legs=5988&headboard=5753&mattress=781&topper=866' target='_blank'><strong>Baza 22 s uzglavljem Bristol Line <svg class='MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1phnduy ikona' focusable='false' aria-hidden='true' viewBox='0 0 24 24'><path d='M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3z'></path></svg></strong></a> (seattle-67) – profinjeno, s dizajnerskim šavovima i glamuroznim dojmom</p><p style='font-weight:400 !important'><span>Madrac:</span> <a href='https://perfecta.hr/proizvod/premium-titan/' target='_blank'><strong>Premium Titan <svg class='MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1phnduy ikona' focusable='false' aria-hidden='true' viewBox='0 0 24 24'><path d='M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3z'></path></svg></strong></a> – izdržljiv, luksuzan i ergonomski</p><p style='font-weight:400 !important'><span><a href='https://perfecta.hr/kategorija-proizvoda/dodatni-asortiman/' target='_blank'>Dodaci:</a> </span>Luksuzni jastuci od prirodnih materijala, stilske noćne lampe, dekorativne vaze i satenske zavjese</p>"
    },
};



let currentQuestion = 0;
const answers = [];

function renderQuestion() {
    const question = questions[currentQuestion];
    document.getElementById('question-container').innerHTML = `
        <h4>${question.text}</h4>
        <div class="option-container">
            ${question.options.map((opt, index) => `<button onclick="selectAnswer('${String.fromCharCode(65 + index)}')" class="btn btn-outline-primary m-1">${opt}</button>`).join('')}
        </div>
    `;
}

function selectAnswer(answer) {
    answers.push(answer);
    currentQuestion++;
    if (currentQuestion < questions.length) {
        renderQuestion();
    } else {
        showResult();
    }
}

function showResult() {
    const counts = answers.reduce((acc, ans) => {
        acc[ans] = (acc[ans] || 0) + 1;
        return acc;
    }, {});
    const result = Object.keys(counts).reduce((a, b) =>
        counts[a] > counts[b] ? a : b
    );

    const { image, link, text } = resultData[result];

    document.getElementById('result').innerHTML = `
        <div class="card result-card">
            <a href="${link}" target="_blank">
                <img src="${image}" alt="Rezultat" style="cursor: pointer;" />
            </a>
            <div class="card-body">
                ${text}
            </div>
        </div>
    `;

    document.getElementById('question-container').style.display = 'none';
}

renderQuestion();
</script>
  <script src="<?php echo $native_path ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $native_path ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/owl-carousel.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/animation.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/imagesloaded.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/custom.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/script.js"></script>

    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
