
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/bavaria';
    // use this for versioning, to avoid cache problems
    $version = 2;
?>

<head>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

    <style>


        .rotacija { -webkit-animation: rotiranje 7s linear 0s infinite; animation: rotiranje 7s linear 0s infinite; }

        @-webkit-keyframes rotiranje { 0% { -webkit-transform: rotate(0deg) } 100% { -webkit-transform:rotate(360deg); } }
        @keyframes rotiranje { 0% { transform: rotate(0deg) } 100% { transform:rotate(360deg); } }


        .pumpanje { -webkit-animation: pump 2s ease-in-out 0s infinite; animation: pump 2s ease-in-out 0s infinite; }

        @-webkit-keyframes pump { 0% { margin-tpp:0px } 50% {margin-top: 5px} 100% { margin-top:0px; } }
        @keyframes pump { 0% { margin-tpp:0px } 50% {margin-top: 5px} 100% { margin-top:0px; } }

    </style>

    <link rel="stylesheet" href="https://use.typekit.net/ntk0fcy.css">
    <style>
        /* Definiraj osnovni container */
        #myContainer {
            width: 100%;
            background-image: url('<?php echo $native_path ?>/assets/images/back01.jpg');
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out; /* Glatki prijelaz */
        }
    </style>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css?v=<?php echo $version; ?>">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="15" class="pozadina">
<?php do_action('telegram_body_start'); ?>
  <!-- ***** Preloader Start ***** -->

<div class="nagradna"><a href="#nagradna"><img src="<?php echo $native_path ?>/assets/images/gumb.png"/></a></div>


<div class="skrolanje"><img src="<?php echo $native_path ?>/assets/images/scroll.png" class="rotacija" /></div>
<div class="skrolanje"><img src="<?php echo $native_path ?>/assets/images/strelica.png" class="pumpanje" /></div>

  <div class="blog" style="padding-top:0; padding-bottom: 0;">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 mobilnipading">
               <img src="<?php echo $native_path ?>/assets/images/h1.png" class="wow fadeInDownBig" data-wow-duration="2s" data-wow-delay="0.5s" />
               <img src="<?php echo $native_path ?>/assets/images/h2.png" class="wow fadeInDownBig" data-wow-duration="2s" data-wow-delay="0.25s" />
               <img src="<?php echo $native_path ?>/assets/images/h3.png" class="wow fadeInDownBig" data-wow-duration="2s" data-wow-delay="0s" />
               <img src="<?php echo $native_path ?>/assets/images/bavaria-logo.png" class="wow fadeIn" data-wow-duration="2s" data-wow-delay="1s" />
        </div>
    </div>
  </div>
</div>

<div class="blog" style="padding-top: 30px !important; padding-bottom:30px !important;">
    <div class="container-fluid p-0">
      <div class="row p-0">
        <img src="<?php echo $native_path ?>/assets/images/cijev.png"/>
      </div>
    </div>
  </div>


<div class="blog manjipadding">
  <div class="container text-center">
      <div class="row">
          <div class="col-lg-10 offset-lg-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
             <p class="text-center" style="color:#fff;">Puno je trenutaka u životu koje ga čine slatkim, ali najbolji su oni koje podijelimo s prijateljima. Bez obzira na veličinu izazova, briga ili uspjeha, podijeliti ih s frendom na piću sve vraća na svoje mjesto. Bavaria i Telegram donose vam priče pojedinaca čije su gorko-slatke avanture uistinu inspirativne, ali ono što ih čini ozbiljno dobrom pričom upravo je uloga njihovih prijatelja.<br/><br/>Ozbiljno dobre priče već sedam generacija nastaju uz Bavariu koja nas poziva da značajne trenutke podijelimo sa svojim prijateljima uz čašu hladnog piva.
              </p>
              <h3 style="font-weight:600; color:#fff; padding-top:50px">RAZGOVARAJ S FRENDOM DOK PIJETE BAVARIU</h3>
          </div>
        </div>
        <div class="row" style="margin-top: 100px;">
             <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                <h1><a href="#dominik"><span style="font-weight: 100;">01</span> DOMINIK</a></h1>
                <h1><a href="#marko"><span style="font-weight: 100;">02</span> MARKO</a></h1>
                <h1><a href="#tomislav"><span style="font-weight: 100;">03</span> TOMISLAV</a></h1>
            </div>
        </div>
      </div>
</div>

<div style="padding-top: 30px !important; padding-bottom:30px !important;">
    <div class="container-fluid p-0">
      <div class="row p-0">
        <img src="<?php echo $native_path ?>/assets/images/cijev2.png"/>
      </div>
    </div>
  </div>


<div class="blog" id="dominik">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/clanak.jpg" style="z-index:1 !important" />
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
            <div class="sticky-top">
             <h1 class="headlineclanka">Dominik Bečvardi, barmen</h1>
             <p>U prvoj epizodi serijala Ozbiljno dobra priča sjeli smo na Bavariu s poznatim hrvatskim barmenom koji je usred korone nazvao frenda i rekao da je došao taj trenutak – da pokrenu svoj biznis koji će u tek par godina poznati najpoznatijim koktel barom u Zagrebu</p>
             <a href="https://www.telegram.hr/partneri/radio-je-u-michelin-restoranima-dozivio-burnout-pa-s-frendom-sve-ulozio-u-genijalni-koktel-bar-na-tresnjevci/" target="_blank"><button class="border-first-button">Pročitaj više</button></a>
            </div>
          </div>
          <div class="col-lg-1">
          </div>
        </div>
      </div>
</div>


<div class="blog" id="marko">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-6 order-lg-3 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/clanak01.jpg" style="z-index:1 !important" />
          </div>
          <div class="col-lg-1 order-lg-1">
          </div>
          <div class="col-lg-4 order-lg-2 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
            <div class="sticky-top">
             <h1 class="headlineclanka">Marko Ćaćić, barber</h1>
             <p>U drugoj epizodi serijala Ozbiljno dobra priča sjeli smo na Bavariu s genijalnim barberom koji je od djetinjstva znao da želi biti frizer unatoč predrasudama, a danas vodi najpoznatiji brend barber shopova u Hrvatskoj</p>
             <a href="#"><button class="border-first-button">Uskoro dolazi</button></a>
            </div>
          </div>
          <div class="col-lg-1 order-lg-4">
          </div>
        </div>
      </div>
</div>


<div class="blog" id="tomislav" style="display: none;">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/clanak.jpg" style="z-index:1 !important" />
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
            <div class="sticky-top">
             <h1 class="headlineclanka">Lorem ipsum dolores mit</h1>
             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
             <a href="#"><button class="border-first-button">Uskoro dolazi</button></a>
            </div>
          </div>
          <div class="col-lg-1">
          </div>
        </div>
      </div>
</div>


<div class="blog" style="padding-top: 30px !important; padding-bottom:30px !important;">
    <div class="container-fluid p-0">
      <div class="row p-0">
        <img src="<?php echo $native_path ?>/assets/images/cijev.png"/>
      </div>
    </div>
  </div>


<div class="blog manjipadding" id="nagradna">
  <div class="container text-center">
      <div class="row">
          <div class="col-lg-10 offset-lg-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">

              <h2 style="font-weight:600; color:#fff; padding-top:50px">Podijeli s nama svoju Ozbiljno dobru priču i osvoji Bavaria paket</h2>
              <p>U potrazi za ozbiljno dobrim pričama pozivamo te da svoju podijeliš s nama i osvojiš veliki poklon paket od 24 x 0,25 boce Bavaria piva. Natječaj traje do 10. prosinca, a šest autora najkreativnijih priča i dobitnika poklon paketa objavit ćemo ovdje 12. prosinca.</p>
          </div>
        </div>
        <div class="row" style="margin-top: 100px;">
             <div class="col-lg-6 offset-lg-3  text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                <form action="#" method="post" id="test-form">
                    <label for="ime-prezime">Ime i prezime:</label>
                    <input type="text" id="ime-prezime" name="ime" required>

                    <label for="mobitel">Mobitel:</label>
                    <input type="tel" id="mobitel" name="mobitel" placeholder="+385123456789" required>

                    <label for="mail">E-mail:</label>
                    <input type="tel" id="mail" name="mail" required>

                    <label for="adresa">Adresa (ulica i broj):</label>
                    <input type="text" id="adresa" name="adresa" required>

                    <label for="grad">Grad:</label>
                    <input type="text" id="grad" name="grad" required>

                    <label for="prica">Tvoja ozbiljno dobra priča:</label>
                    <textarea id="prica" name="prica" rows="5" placeholder="Koji si veliki izazov ili uspjeh podijelio sa svojim frendom na pivi? Što te mučilo i kako ti je pomogao? Imate li neki genijalni projekt za koji bi svijet trebao znati? Ispričaj nam ..." required></textarea>

                    <div class="checkbox-container">
                        <input type="checkbox" id="pravila" name="pravila" required>
                        <label for="pravila">Upoznat/a sam i prihvaćam <a href="https://www.telegram.hr/promo/pravila-nagradnog-natjecaja-ozbiljno-dobra-prica/" target="_blank" style="color:#64c0eb; font-weight: 600;">pravila nagradnog natječaja</a></label>
                    </div>

                    <button class="border-first-button"  type="submit" id="submit-form">Pošalji</button>
                </form>
                 <div id="submitted" style="display: none;">
                     <h2>Hvala na prijavi</h2>
                 </div>
                 <script src="<?php echo $native_path ?>/jquery.serialize-object.min.js"></script>
                 <script>
                     var $form = jQuery('form#test-form'),
                         url = 'https://script.google.com/macros/s/AKfycbxrTuenn3mxBmpB7hTFRgrv8PdOx1Z4ABPwHFr163Pk-_uIYWaU12oGToxLbWXcexCW/exec'

                     jQuery('#submit-form').on('click', function(e) {
                         e.preventDefault();
                         var jqxhr = jQuery.ajax({
                             url: url,
                             method: "GET",
                             dataType: "json",
                             data: $form.serializeObject()
                         }).done(
                             function(){
                                 $('#test-form').hide();
                                 $('#submitted').show();
                             }
                         );
                     })
                 </script>
            </div>
        </div>
      </div>
</div>


  <div id="clanci" class="blog" style="z-index: 100; position: relative; padding-top: 0px; padding-bottom: 120px; overflow: hidden;">


    <div class="container-fluid wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
              <p>Kreativno vodstvo: Kristina Livaja<br/>
                Autorica serijala: Monika Bončina<br/>
                Fotograf: Marko Miščević</p>
              <p>Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/telegram.png" style="max-width: 186px;"  />
          </div>
        </div>
      </div>
  </div>
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
    let currentBackground = 1;

    function changeBackgroundImage() {
        const container = document.getElementById("myContainer");

        // Provjera koja slika je trenutno postavljena, te se mijenja u drugu
        if (currentBackground === 1) {
            container.style.backgroundImage = "url('<?php echo $native_path ?>/assets/images/back02.jpg')";
            currentBackground = 2;
        } else {
            container.style.backgroundImage = "url('<?php echo $native_path ?>/assets/images/back01.jpg')";
            currentBackground = 1;
        }
    }

    // Postavi interval za mijenjanje svake 3 sekunde
    setInterval(changeBackgroundImage, 3000);
</script>

<script type="text/javascript">
      const images = ["<?php echo $native_path ?>/assets/images/ana-carevic.jpg", "<?php echo $native_path ?>/assets/images/ana-carevic-cb.jpg"];
      let currentImageIndex = 0;
      const imageElement = document.querySelector(".image-gallery img");


      function updateImage() {
        const imageUrl = images[currentImageIndex];
        imageElement.style.opacity = 0; // Postavite opacity na 0 prije promjene slike
        setTimeout(() => {
          imageElement.src = imageUrl;
          imageElement.alt = `Slika ${currentImageIndex + 1}`;
          imageElement.style.opacity = 1; // Postavite opacity na 1 nakon promjene slike
        }, 1); // Promijenite 1000 ms na željeni vremenski interval za tranziciju
      }

      function showNextImage() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        updateImage();
      }

      // Postavite interval za automatsko klizanje svakih 3 sekunde (3000 ms)
      setInterval(showNextImage, 700);

      // Inicijalno postavljanje slike
      updateImage();


      const images2 = ["<?php echo $native_path ?>/assets/images/mateja-sucevic.jpg","<?php echo $native_path ?>/assets/images/mateja-sucevic-cb.jpg"];
      let currentImageIndex2 = 0;
      const imageElement2 = document.querySelector(".image-gallery2 img");

      function updateImage2() {
          const imageUrl = images2[currentImageIndex2];
        imageElement2.style.opacity = 0; // Postavite opacity na 0 prije promjene slike
        setTimeout(() => {
          imageElement2.src = imageUrl;
          imageElement2.alt = `Slika ${currentImageIndex + 1}`;
          imageElement2.style.opacity = 1; // Postavite opacity na 1 nakon promjene slike
        }, 1); // Promijenite 1000 ms na željeni vremenski interval za tranziciju
      }
      function showNextImage2() {
          currentImageIndex2 = (currentImageIndex2 + 1) % images2.length;
          updateImage2();
      }

      // Postavite interval za automatsko klizanje druge galerije svakih 4 sekunde (4000 ms)
      setInterval(showNextImage2, 700);

      // Inicijalno postavljanje slike
      updateImage2();


      const images3 = ["<?php echo $native_path ?>/assets/images/ivana-vukusic.jpg","<?php echo $native_path ?>/assets/images/ivana-vukusic-cb.jpg"];
      let currentImageIndex3 = 0;
      const imageElement3 = document.querySelector(".image-gallery3 img");

      function updateImage3() {
          const imageUrl = images3[currentImageIndex3];
        imageElement3.style.opacity = 0; // Postavite opacity na 0 prije promjene slike
        setTimeout(() => {
          imageElement3.src = imageUrl;
          imageElement3.alt = `Slika ${currentImageIndex + 1}`;
          imageElement3.style.opacity = 1; // Postavite opacity na 1 nakon promjene slike
        }, 1); // Promijenite 1000 ms na željeni vremenski interval za tranziciju
      }
      function showNextImage3() {
          currentImageIndex3 = (currentImageIndex3 + 1) % images3.length;
          updateImage3();
      }

      // Postavite interval za automatsko klizanje druge galerije svakih 4 sekunde (4000 ms)
      setInterval(showNextImage3, 700);

      // Inicijalno postavljanje slike
      updateImage3();


</script>
  <!-- Scripts -->
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
