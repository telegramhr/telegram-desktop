
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/stella/';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<style type="text/css">

        @-webkit-keyframes vrtnja { 0% { -webkit-transform:rotate(0deg) } 100% { -webkit-transform: rotate(360deg);} }
        @keyframes vrtnja { 0% { transform:rotate(0deg) } 100% { transform: rotate(360deg);} }


</style>
<style>
    .slide-wrapper {
      position: relative;
      overflow: hidden;
      width: 100%;
      height: 100vh;
    }

    .slide {
      position: absolute;
      top: 0;
      width: 100%;
      height: 100%;
      transition: transform 0.6s ease;
      background: #f6f0e7 !important;
    }

    .offscreen-left {
      transform: translateX(-100%);
    }

    .onscreen {
      transform: translateX(0);
    }

    .offscreen-right {
      transform: translateX(100%);
    }
  </style>
<head>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>


    <meta charset="UTF-8">
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


  <div class="blog hero" style="padding-top: 50px; padding-bottom: 50px;">
    <a href="#pitanje">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
               <img src="<?php echo $native_path ?>/assets/images/claim.svg" style="padding: 30px" /><br/>
        </div>
    </div>
    <div class="row">
      <div class="col-lg-2 offset-lg-5 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
               <img class="logo" src="<?php echo $native_path ?>/assets/images/logo.png" /><br/>
        </div>
    </div>
  </div>
</a>
</div>


<div class="blog" style="background: #f6f0e7;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 offset-lg-3 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

             <p class="sticky-top" style=" font-weight: 300;">Jedan potez. Jedan reket i jedna loptica nevjerojatne brzine. Milimetri odlučuju, a sekunde pišu povijest.<br/><br/><span style="font-weight:600 !important">Telegram i Stella Artois</span> traže baš takve trenutke. Prisjetite se onog
savršenog servisa koji vam je ostao u sjećanju i podijelite ga s nama.</p>
          </div>
        </div>
      </div>
</div>


<div class="blog" style="background: #f6f0e7; padding-bottom: 80px; padding-top: 0;">

  <div class="container">
      <div class="row">
          <div class="col-lg-4 offset-lg-4 text-center">
             <img class="smanjinamob" src="<?php echo $native_path ?>/assets/images/pivo.png" style="z-index:1 !important" />
          </div>
        </div>
      </div>
</div>



<div class="blog" id="pitanje" style="background: #f6f0e7; padding-bottom: 30px; padding-top: 0;">

  <div class="container-fluid p-0">
      <div class="row">
        <div class="col-lg-4">
        </div>
          <div class="col-lg-5 text-left">
             <h2>Koji je, po tebi, najvažniji servis u povijesti hrvatskog tenisa – i zašto?</h2>
          </div>
        </div>
      </div>
</div>



<div class="slide-wrapper sakrijnamob">
  <!-- Prvi ekran -->
  <div id="screen1" class="slide onscreen">
    <div class="container-fluid p-0">
      <div class="row">
          <div class="col-lg-3 text-left">
             <img src="<?php echo $native_path ?>/assets/images/reketa1.png" style="z-index:1 !important" />
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-5 marginagornja">
              <p>Pozivamo čitatelje i ljubitelje tenisa da s nama podijele svoj osvrt na najvažnije servise u povijesti hrvatskog tenisa – kao da ste pravi sportski komentatori! Odgovori na nagradno pitanje i osvoji <span style="font-weight:600 !important">potpisani Yonex reket Donne Vekić, sportski ruksak i paket Stella Artois piva (24x0,5l limenke).</span><br/><br/>Pravila nagradnog natječaja možeš pročitati <a style="font-weight:600 !important" href="https://www.telegram.hr/partneri/pravila-nagradnog-natjecaja-stella-artois/">ovdje</a>.</p>
              <br/><br/>
              <a onclick="goToNext()"><img src="<?php echo $native_path ?>/assets/images/gumb.png"/></a>
              <p>Nagradni natječaj odvija se od 12.6.2025. do 26.6.2025. na portalu Telegram.<br/><br/>Nagradu osigurava Zagrebačka pivovara, a uručuje ju Telegram.<br/><br/>Unutar ovog nagradnog natječaja, dijelimo šest nagrada. </p>
          </div>
          <div class="col-lg-3"></div>
        </div>
      </div>
  </div>



  <!-- Drugi ekran -->
  <div id="screen2" class="slide offscreen-left">
    <div class="container-fluid p-0">
      <div class="row">
                  <div class="col-lg-3"></div>

          <div class="col-lg-6 marginagornja text-center">
              <form id="form" action="" method="post">
                  <!-- Odgovor na pitanje -->
                  <label for="odgovor">Odgovor na pitanje:</label><br>
                  <textarea id="odgovor" name="odgovor" rows="4" cols="50" required></textarea><br><br>

                  <!-- Ime i prezime -->
                  <label for="imePrezime">Ime i prezime:</label><br>
                  <input type="text" id="imePrezime" name="imePrezime" required><br><br>

                  <!-- Email adresa -->
                  <label for="email">Email adresa:</label><br>
                  <input type="email" id="email" name="email" required><br><br>

                  <!-- Gumb za slanje -->
                  <input type="submit" id="submit-form" style="background:#c32939; color: #fff; font-size: 20px; font-weight: 800;" value="Pošalji">
                </form>
              <div id="submitted" style="display:none;">
                  <h2>Hvala na prijavi!</h2>
                  <p>Vaš odgovor je uspješno poslan. Sretno!</p>
              </div>
          </div>
          <div class="col-lg-3 text-left">
             <img src="<?php echo $native_path ?>/assets/images/reketa2.png" style="z-index:1 !important" />
          </div>
        </div>
      </div>
  </div>
</div>



<div class="blog namobitelu" style="background: #f6f0e7; padding-top: 0;">

  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <p>Pozivamo čitatelje i ljubitelje tenisa da s nama podijele svoj osvrt na najvažnije servise u povijesti hrvatskog tenisa – kao da ste pravi sportski komentatori! Odgovori na nagradno pitanje i osvoji <span style="font-weight:600 !important">potpisani Yonex reket Donne Vekić, sportski ruksak i paket Stella Artois piva (24x0,5l limenke).</span><br/><br/>Pravila nagradnog natječaja možeš pročitati <a href="https://www.telegram.hr/partneri/pravila-nagradnog-natjecaja-stella-artois/">ovdje</a>.</p>
              <p>Nagradni natječaj odvija se od 12.6.2025. do 26.6.2025. na portalu Telegram.<br/><br/>Nagradu osigurava Zagrebačka pivovara, a uručuje ju Telegram.<br/><br/>Unutar ovog nagradnog natječaja, dijelimo šest nagrada. </p>

              <form id="form2" action="" method="post">
                  <!-- Odgovor na pitanje -->
                  <label for="odgovor">Odgovor na pitanje:</label><br>
                  <textarea id="odgovor" name="odgovor" rows="4" cols="50" required></textarea><br><br>

                  <!-- Ime i prezime -->
                  <label for="imePrezime">Ime i prezime:</label><br>
                  <input type="text" id="imePrezime" name="imePrezime" required><br><br>

                  <!-- Email adresa -->
                  <label for="email">Email adresa:</label><br>
                  <input type="email" id="email" name="email" required><br><br>

                  <!-- Gumb za slanje -->
                  <input type="submit" id="submit-form2" style="background:#c32939; color: #fff; font-size: 20px; font-weight: 800;" value="Pošalji">
                </form>
              <div id="submitted2" style="display:none;">
                  <h2>Hvala na prijavi!</h2>
                  <p>Vaš odgovor je uspješno poslan. Sretno!</p>
              </div>
          </div>
        </div>
      </div>
</div>



<div class="blog" style="background: #f6f0e7; padding-bottom: 0; padding-top: 0;">

  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <img src="<?php echo $native_path ?>/assets/images/nagrada.jpg" style="z-index:1 !important" />
          </div>
        </div>
      </div>
</div>


<div class="blog" style="background: #f6f0e7;">

  <div class="container-fluid p-0">
      <div class="row">
          <div class="col-lg-12">
             <a href="https://www.telegram.hr/partneri/donna-vekic-simbol-uspjeha-hrvatski-tenis/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/donna.jpg" style="z-index:1 !important" /></a>
          </div>
        </div>
      </div>
</div>

<div class="blog" style="background: #f6f0e7; padding-top: 0; padding-bottom: 0;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 offset-lg-3 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <h2>Wimbledon je moj san i moj cilj</h2>
             <p class="sticky-top" style=" font-weight: 300;">"Tajna je da nema tajne. To je posljedica napornih treninga. Sigurna sam zapravo da je disciplina najvažniji alat, ne samo u sportu, nego i u životu općenito. Na dane kada vam motivacija okrene leđa, disciplina je ono što vas definira."</p>
             <p><a href="https://www.telegram.hr/partneri/donna-vekic-simbol-uspjeha-hrvatski-tenis/" target="_blank">Cijeli članak pročitajte ovdje</a>.</p>
          </div>
        </div>
      </div>
</div>



<div class="blog sakrijnamob" style="background: #f6f0e7;">

  <div class="container-fluid p-0">
      <div class="row">
          <div class="col-lg-12">
             <a href="#pitanje"><img src="<?php echo $native_path ?>/assets/images/slika.jpg" style="z-index:1 !important" /></a>
          </div>
        </div>
      </div>
</div>




<div class="blog namobitelu" style="background: #f6f0e7;">

  <div class="container-fluid p-0">
      <div class="row">
          <div class="col-lg-12">
             <a href="#pitanje"><img src="<?php echo $native_path ?>/assets/images/slika-mobilna.jpg" style="z-index:1 !important" /></a>
          </div>
        </div>
      </div>
</div>


  <div id="clanci" class="blog" style="z-index: 100; position: relative; padding-top: 0px; padding-bottom: 120px; overflow: hidden; background: #f6f0e7;">


    <div class="container-fluid wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
              <p style="color:#000">Autor teksta: Monika Tomljanović<br/>
              Kreativno vodstvo: TG Studio<br/>
                Grafičko oblikovanje: Reset</p>
              <p style="color:#000">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/telegram.png" style="max-width: 186px;"  />
          </div>
        </div>
      </div>
  </div>
  <script type="text/javascript">
      const images = ["<?php echo $native_path ?>/assets/images/osamdesete-01.jpg", "<?php echo $native_path ?>/assets/images/osamdesete-02.jpg"];
      let currentImageIndex = 0;
      const imageElement = document.querySelector(".image-gallery img");


      function updateImage() {
        const imageUrl = images[currentImageIndex];
        imageElement.style.opacity = 0; // Postavite opacity na 0 prije promjene slike
        setTimeout(() => {
          imageElement.src = imageUrl;
          imageElement.alt = `Slika ${currentImageIndex + 1}`;
          imageElement.style.opacity = 1; // Postavite opacity na 1 nakon promjene slike
        }, 500); // Promijenite 1000 ms na željeni vremenski interval za tranziciju
      }

      function showNextImage() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        updateImage();
      }

      // Postavite interval za automatsko klizanje svakih 3 sekunde (3000 ms)
      setInterval(showNextImage, 5000);

      // Inicijalno postavljanje slike
      updateImage();
</script>
<script>
  const video = document.getElementById('myVideo');

  // Kada se video završi, ostavi ga na zadnjem frameu
  video.addEventListener('ended', () => {
    video.pause();
    video.currentTime = video.duration; // osiguraj da ostane na zadnjem frameu
  });
</script>
<script>
  function goToNext() {
    const screen1 = document.getElementById('screen1');
    const screen2 = document.getElementById('screen2');

    screen1.classList.remove('onscreen');
    screen1.classList.add('offscreen-right');

    screen2.classList.remove('offscreen-left');
    screen2.classList.add('onscreen');
  }

  function goToPrev() {
    const screen1 = document.getElementById('screen1');
    const screen2 = document.getElementById('screen2');

    screen2.classList.remove('onscreen');
    screen2.classList.add('offscreen-left');

    screen1.classList.remove('offscreen-right');
    screen1.classList.add('onscreen');
  }
</script>
  <!-- Scripts -->
  <script src="<?php echo $native_path ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $native_path ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/owl-carousel.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/animation.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/imagesloaded.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/custom.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/script.js"></script>

<script src="https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/super1/superdan/jquery.serialize-object.min.js"></script>
<script>
    var $form = jQuery('form#form'), $form2 = jQuery('form#form2'),
        url = 'https://script.google.com/macros/s/AKfycbxsSE9IVIUmPyA3W-jHIObwIad_RqNPWCWxR_ZlTTmcx5-T6f8mow9twvfxQa-NKJGQ7A/exec'

    $form.on('submit', function(e) {
        e.preventDefault();
        jQuery('#submit-form').attr('disable', true);
        var jqxhr = jQuery.ajax({
            url: url,
            method: "GET",
            dataType: "json",
            data: $form.serializeObject()
        }).done(
            function(){
                jQuery('#form').hide();
                jQuery('#submitted').show();
            }
        );
    })
    $form2.on('submit', function(e) {
        e.preventDefault();
        jQuery('#submit-form2').attr('disable', true);
        var jqxhr = jQuery.ajax({
            url: url,
            method: "GET",
            dataType: "json",
            data: $form2.serializeObject()
        }).done(
            function(){
                jQuery('#form2').hide();
                jQuery('#submitted2').show();
            }
        );
    })
</script>

    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
