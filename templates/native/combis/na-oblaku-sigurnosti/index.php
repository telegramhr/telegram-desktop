<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/combis/na-oblaku-sigurnosti';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>

<head>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;700&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">

</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="15">
<?php do_action('telegram_body_start'); ?>
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->




  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 text-center">
            <div class="sticky-top">
               <img src="<?php echo $native_path ?>/assets/images/cloud.png" class="oblakslika" /><br/>
               <div class="border-first-button" style="padding-top: 0px;">
                    <a href="#cloud-strucnjaci">Cloud stručnjaci</a>
                </div>
               <div class="border-second-button" style="padding-top: 0px;">
                    <a href="#procitaj-vise">Pročitajte više</a>
                </div>
          </div>
        </div>
        <div class="col-lg-7 text-left naoblakuefikasnosti">

          <h1>NA OBLAKU<br/><span style="font-weight:700">EFIKASNOSTI</span></h1>
          <p style="font-size: 22px; color:#fff !important">Sve o cloudu kao temelju digitalne transformacije</p>

          <div class="row" style="padding-top:100px;">
            <div class="col-lg-6">
              <h2 style="color:#b7bf10; font-weight:700">76.6%</h2>
              <p style="font-size: 22px; color:#fff !important">Organizacija će uvesti cloud infrastrukturu u svoje poslovanje u narednih 5 godina.)</p>
              <p style="color:#465b70; font-size:14px;"> (World Economic Forum, Future of Jobs, 2023</p>
            </div>
            <div class="col-lg-6">
               <h2 style="color:#ffee00; font-weight:700">21.6%</h2>
              <p style="font-size: 22px; color:#fff !important">Iznosi godišnja stopa rasta tržišta za hibridna cloud rješenja. </p>
              <p style="color:#465b70; font-size:14px;">(MIT Technology, 2022)</p>
            </div>
          </div>
          <div class="row" id="cloud-strucnjaci" style="padding-top:80px;">
            <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:150px;" />
            <h2 style="color:#fff; margin-top: 20px;">Cloud stručnjaci</h2>

            <div class="row">
              <div class="col-lg-12" style="padding-top:30px; padding-bottom: 30px;">
                <img src="<?php echo $native_path ?>/assets/images/sasa-buric.jpg" style="margin-top: 10px; margin-bottom: 40px;" />
                <h4 style="color:#ffee00; font-size:16px;">VODITELJ ODJELA ZA PROIZVODE ZA KRAJNJE KORISNIKE</h4>
                <h3 style="font-weight:700; color: #fff; margin-top:10px; margin-bottom: 20px;">SAŠA BURIĆ</h3>
                <p style="color:#fff; margin-bottom: 10px;">EMA sustav odterećuje IT odjel koji je nekoć sve stvari morao raditi ručno ili sa skriptama, a korisnici dobivaju fleksibilnost da se lako i brzo mogu preseliti s jednog laptopa ili računala na drugo. Dobiva se sigurnost, no bez narušavanja fleksibilnosti.</p>
               <div class="border-third-button" style="padding-top: 0px;">
                    <a href="https://www.telegram.hr/biznis-tech/prvo-je-popravljao-printere-a-danas-radi-na-inovativnom-it-projektu-za-tvrtke-mi-smo-pioniri-ovog-sustava/" target="_blank">Pročitaj više</a>
                </div>
              </div>

          </div>

      </div>
  </div>



  <div id="procitaj-vise" class="blog" style="padding-top:20px; padding-bottom: 50px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
            <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:150px;" />
            <h2 style="color:#fff; margin-top: 20px;">Pročitaj više</h2>
        </div>
      </div>
            <div class="row">
              <div class="col-lg-4" style="padding-top:30px; padding-bottom: 30px;">
                <img src="<?php echo $native_path ?>/assets/images/sasa0377xw.jpeg" style="margin-top: 10px; margin-bottom: 40px;" />
                <h4 style="color:#ffee00; font-size:16px;">DIREKTOR SEKTORA ZA CLOUD I PODATKOVNE USLUGE<br/>&nbsp;</h4>
                <h3 style="font-weight:700; color: #fff; margin-top:10px; margin-bottom: 20px;">IGOR DUŽEVIĆ</h3>
                <p style="color:#fff; margin-bottom: 10px;">Količina novca i resursa koju je jedan cloud provider spreman uložiti u sigurnosni aspekt svog poslovanja ne može se mjeriti s investicijama običnih korisnika, budući da njemu cijeli imidž ovisi o sigurnosti</p>
               <div class="border-third-button" style="padding-top: 0px;">
                    <a href="https://www.telegram.hr/biznis-tech/potpredsjednik-combisa-o-svojoj-karijeri-i-top-tehnologiji-zelimo-da-investirate-u-nas-ne-amazon/" target="_blank">Pročitaj više</a>
                </div>
              </div>
              <div class="col-lg-4" style="padding-top:30px; padding-bottom: 30px;">
                <img src="<?php echo $native_path ?>/assets/images/sasa2069xw.webp" style="margin-top: 10px; margin-bottom: 40px;" />
                <h4 style="color:#ffee00; font-size:16px;">PROGRAM MENADŽER IZ SEKTORA ZA CLOUD I PODATKOVNE USLUGE</h4>
                <h3 style="font-weight:700; color: #fff; margin-top:10px; margin-bottom: 20px;">HRVOJE DUNKIĆ</h3>
                <p style="color:#fff; margin-bottom: 10px;">Cloud donosi brže i efikasnije rješavanje zahtijeva poslovanja, bez investicija u vlastitu IT infrastrukturu i svih troškova koji idu uz održavanje iste, uz uštede koje je moguće ostvariti direktno</p>
               <div class="border-third-button" style="padding-top: 0px;">
                    <a href="https://www.telegram.hr/openspace/jos-jedno-vazno-priznanje-za-combis-treci-put-su-proglaseni-microsoftovim-partnerom-godine-u-hrvatskoj/" target="_blank">Pročitaj više</a>
                </div>
              </div>
              <div class="col-lg-4" style="padding-top:30px; padding-bottom: 30px;">

                </div>
              </div>
      </div>
    </div>

  <div class="blog" style="padding-top:20px; padding-bottom: 50px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
            <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:150px;" />
            <h2 style="color:#fff; margin-top: 20px;">Sigurnost je preduvjet kada je riječ o IT sustavima.<br/><span style="color:#b7bf10">Zanima te više?</span></h2>
                <div class="border-third-button" style="padding-top: 30px;">
                    <a href="https://www.telegram.hr/native/klik-za-sigurnost/" target="_blank">Klikni za sigurnost</a>
                </div>
        </div>
      </div>
      </div>
    </div>


   <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center wow fadeIn">
              <p style="text-align: center; color: #fff !important">
                  Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Combisom<br/> po najvišim uredničkim standardima Telegram Media Grupe.<br/><br/>
              <img style="width:160px; height: auto; padding: 10px" src="<?php echo $native_path ?>/assets/images/zalando-logo.png" /><img style="width:160px; height: auto; padding: 10px" src="<?php echo $native_path ?>/assets/images/telegram-studio.png" />
              </p>
        </div>
      </div>
  </div>

  <!-- Scripts -->
  <script src="<?php echo $native_path ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $native_path ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/owl-carousel.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/animation.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/imagesloaded.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/custom.js"></script>


    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
