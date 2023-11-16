<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/goodfood';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>

<head>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo $native_path ?>/assets/images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">
    <style>
          @-webkit-keyframes puls { 0% { -webkit-transform:scale(1) } 50% {-webkit-transform: scale(1.4);} 100% { -webkit-transform:scale(1) } }
           @keyframes puls { 0% { transform:scale(1) } 50% {transform: scale(1.4);} 100% { transform:scale(1) } }

          @-webkit-keyframes pulsbubblea { 0% { margin-top:0; } 50% {margin-top: 10px;} 100% { margin-top:0; } }
           @keyframes pulsbubblea { 0% { margin-top:0 } 50% {margin-top: 10px;} 100% { margin-top:0 } }
    </style>
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

  <div id="clanci" class="blog" style=" padding:0; padding-top:0px; padding-bottom:0px; margin: 0;">
    <div class="container-fluid" style="padding:0">
      <div class="row">
        <div class="col-lg-6 text-center">
          <div class="sticky-top">
            <div class="tekst-gornji">
                <img src="<?php echo $native_path ?>/assets/images/salata.png" style="-webkit-animation: pulse 2s ease-in-out 0s infinite; animation: pulse 2s ease-in-out 0s infinite; z-index: 9; position: relatives;"/>
            </div>
          </div>
        </div>
        <div class="col-lg-6 kontent">
            <img src="<?php echo $native_path ?>/assets/images/logos.png" class="slikahero" />
            <h1>Hvala <span style="color:#e5d6a2">na sudjelovanju!</span></h1>
            <h3>Osmislio/la si svoju superzdravu i superukusnu salatu, idealnu za jesenski radni dan.</h3>
            <div class="border-first-button scroll-to-section">
               <a href="index.php">PRIJAVI SE PONOVNO</a>
            </div>

        </div>
      </div>
    </div>
  </div>


<img src="<?php echo $native_path ?>/assets/images/bubble.png" class="bubble"/>
<img src="<?php echo $native_path ?>/assets/images/bite.png" class="bite"/>
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
