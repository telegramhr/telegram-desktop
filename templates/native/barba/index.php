
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/barba';
    // use this for versioning, to avoid cache problems
    $version = 1;
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
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style type="text/css">

        @-webkit-keyframes vrtnja { 0% { -webkit-transform:rotate(0deg) } 100% { -webkit-transform: rotate(360deg);} }
        @keyframes vrtnja { 0% { transform:rotate(0deg) } 100% { transform: rotate(360deg);} }


    </style>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css?v=09052024">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="15" class="pozadina">
<?php do_action('telegram_body_start'); ?>
  <!-- ***** Preloader Start ***** -->


<div class="blog hero" style="padding-bottom: 0px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-5 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
               <img src="<?php echo $native_path ?>/assets/images/claim.svg" style="padding: 30px" /><br/>
        </div>
         <div class="col-lg-6"></div>
    </div>
  </div>
  <div class="container-fluid" style="padding-top: 120px; padding-bottom: 0px;">
      <div class="row p-0">
          <img src="<?php echo $native_path ?>/assets/images/break.svg" style="padding:0" />
      </div>
</div>
</div>

<div class="blog" style="background: #46b2f0;">
  <div style="position: absolute; width:300px; height: 300px; right: 20px; top:150px;"><img src="<?php echo $native_path ?>/assets/images/oblak.png" class="oblak" /></div>
  <div class="container">
      <div class="row">
          <div class="col-lg-6 offset-lg-3 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s"><h3 style="padding-bottom: 80px; color: #fff; font-family: Archivo; font-weight: 200;" >Proveli smo <a href="https://www.telegram.hr/partneri/ultimativni-vodic-za-rostilj-majstore-izdvojili-smo-10-kljucnih-dilema-reci-nam-sto-ti-mislis-i-osvoji-nagradu/" target="_blank">veliku anketu</a> o roštiljanju među našim čitateljima. Sudjelovalo je njih više od 400. Evo što smo saznali.</h3></div>
          <div class="col-lg-4 text-right wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
            <img class="pedesetposto" src="<?php echo $native_path ?>/assets/images/80.svg" style="padding:0" />

          </div>
          <div class="col-lg-7 text-left wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
            <h2 style="color:#fff">najviše voli roštilj upravo - u njihovom dvorištu. </h2>
             <p style="color:#fff" class="sticky-top" style=" font-weight: 500;">Upravo zbog toga vam Barba Q - najveći roštilj majstor u Hrvatskoj - donosi sve savjete na jednom mjestu. </p>
          </div>
          <div class="col-lg-1">
          </div>
        </div>
      </div>
</div>

<div class="blog" style="background: linear-gradient(180deg, rgba(70,178,240,1) 0%, rgba(120,204,252,1) 100%);">
  <div style="position: absolute; width:300px; height: 200px; border-radius: 100px; left: -50px; top:400px; "><img src="<?php echo $native_path ?>/assets/images/oblak.png" class="oblak" /></div>
  <div class="container">
      <div class="row">
          <div class="col-lg-6 order-lg-2">
             <p style="color:#fff;" class="sticky-top">
              <img src="<?php echo $native_path ?>/assets/images/marinada.svg"  class="wow fadeInRightBig" data-wow-duration="0.5s" data-wow-delay="0.5s" /><br/><br/>
              <span class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Kiselina, ulje i začini - tri najvažnije komponente tijekom pripreme marinade. Zajedno omekšavaju samo meso, sprječavaju isušivanje te daju dodatan okus. <a href="https://www.telegram.hr/partneri/savjeti-za-svakog-rostilj-majstora-ovo-su-najbolji-trikovi-za-savrseno-pecenu-piletinu/" target="_blank">Još savjeta o savršenoj marinadi.</a></span>
              </p>
          </div>
          <div class="col-lg-6 order-lg-1 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/marinada.png" style="z-index:1 !important" />
          </div>
        </div>
      </div>
</div>



<div class="blog" style="background: rgba(120,204,252,1);">
  <div style="position: absolute; width:300px; height: 200px; border-radius: 100px; left: -50px; top:400px; "><img src="<?php echo $native_path ?>/assets/images/oblak.png" class="oblak" /></div>
  <div class="container">
      <div class="row">
          <div class="col-lg-4 order-lg-3 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/tikvice.png" style="z-index:1 !important" />
          </div>
          <div class="col-lg-4 order-lg-2 text-center">
             <h2 style="color:#fff;">
              Tikvice su Hrvatima omiljeno povrće na roštilju
              </h2>
              <p style="color:#fff"> Od mesa, na rešetkama im je omiljena vratina. </p>
          </div>
          <div class="col-lg-4 order-lg-1 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/vratina.png" style="z-index:1 !important" />
          </div>
        </div>
      </div>
</div>


<div class="blog" style="background:rgba(120,204,252,1);">
  <div style="position: absolute; width:300px; height: 300px; right: 20px; top:150px;"><img src="<?php echo $native_path ?>/assets/images/oblak.png" class="oblak" /></div>
  <div class="container">
      <div class="row">

          <div class="col-lg-4 text-right wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img class="pedesetposto" src="<?php echo $native_path ?>/assets/images/50.svg" style="padding:0" />

          </div>
          <div class="col-lg-7 text-left wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <h2 style="color:#fff">peče meso na roštilju na drveni ugljen.</h2>
             <p style="color:#fff" class="sticky-top" style=" font-weight: 500;">Jedna od najvećih prednosti takvog roštilja jest što hrana dobiva upravo onaj prepoznatiljivi okus dima tijekom pripreme. <a href="https://www.telegram.hr/partneri/veliki-vodic-kroz-rostilje-donosimo-sve-slicnosti-i-razlike-izmedu-plinskog-elektricnog-i-onog-na-ugljen/" target="_blank">Saznaj više o vrstama roštilja.</a></p>
          </div>
          <div class="col-lg-1">
          </div>
        </div>

      <div class="row" style="padding-top:50px !important">

          <div class="col-lg-4 text-right wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img  src="<?php echo $native_path ?>/assets/images/r1.png" style="padding:0" />

          </div>
          <div class="col-lg-4 text-right wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img  src="<?php echo $native_path ?>/assets/images/r2.png" style="padding:0" />

          </div>
          <div class="col-lg-4 text-right wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img  src="<?php echo $native_path ?>/assets/images/r3.png" style="padding:0" />

          </div>

      </div>
  </div>
</div>


<div class="blog" style="background: rgba(120,204,252,1) ;">
  <div style="position: absolute; width:300px; height: 200px; border-radius: 100px; left: -50px; top:400px; "><img src="<?php echo $native_path ?>/assets/images/oblak.png" class="oblak" /></div>
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
             <p style="color:#fff;" class="sticky-top">
              <img src="<?php echo $native_path ?>/assets/images/stolni.svg"  class="wow fadeInLeftBig" data-wow-duration="0.5s" data-wow-delay="0.5s" /><br/><br/>
              </p>
          </div>
          <div class="col-lg-6 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/stolni.png" style="z-index:1 !important" />
          </div>
        </div>
      </div>
</div>

<div class="blog" style="background: rgba(120,204,252,1);">
  <div style="position: absolute; width:300px; height: 200px; border-radius: 100px; left: -50px; top:400px; "><img src="<?php echo $native_path ?>/assets/images/oblak.png" class="oblak" /></div>
  <div class="container">
      <div class="row">
          <div class="col-lg-6 offset-lg-3 text-center">
             <h2 style="color:#fff;">
               A kako svaki dobar roštilj ne može proći bez glazbe,
              </h2>
              <p style="color:#fff">s legendom zagrebačke DJ scene pripremili smo i Spotify listu</p>

              <p><iframe title="Spotify Embed: Barba Q x Bauhaus playlista za najbolji roštilj" style="border-radius: 12px" width="100%" height="352" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy" src="https://open.spotify.com/embed/playlist/1xbk2m219wg6WOwSTtvxjP?si=a331add5dc274d8b&amp;utm_source=oembed" data-gtm-yt-inspected-16="true"></iframe></p>
          </div>
        </div>
      </div>
</div>


  <div class="blog" style="z-index: 100; position: relative; padding-top: 120px; padding-bottom: 120px; margin-bottom: 0 !important; overflow: hidden; background: rgba(7,24,71,1);">


    <div class="container-fluid wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
              <p style="color:#fff">Kreativno vodstvo: TG Studio<br/>
                Grafičko oblikovanje: Reset</p>
              <p style="color:#fff">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
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
