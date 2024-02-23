<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/biram-sebe';
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
<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Cormorant:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo $native_path ?>/assets/images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css?v=2">
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

<div class="video-background" >
<iframe class="video-background" src="https://www.youtube.com/embed/lSqjNNuZc9Y?autoplay=1&loop=1&controls=0&mute=1&playlist=lSqjNNuZc9Y"  frameborder="0" allow="autoplay;" allowfullscreen></iframe>
</div>

<div style="top:0; left:0; width: 100%; height: 100%; position: absolute; z-index: 1;"><img src="<?php echo $native_path ?>/assets/images/ferlauf.png" style="height: 100%;"></div>

  <div id="clanci" class="blog">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
            <div class="sticky-top">
               <img src="<?php echo $native_path ?>/assets/images/biram-sebe.png" class="oblakslika" /><br/>

                <p style="padding: 0px 50px; color: #fff; text-align"><span style="font-weight: 700;">Provodimo prvu anketu o samopouzdanju žena u Hrvatskoj.</span> Pridruži nam se i doznaj kako žene diljem zemlje razmišljaju o sebi, gdje pronalaze inspiraciju, koje savjete cijene i u kome pronalaze najveću potporu.</p>
               <div class="buttoni">
                    <a class="border-first-button" style="padding-top: 0px; " href="https://www.telegram.hr/super1/prvi-provodimo-upitnik-o-zenskom-samopouzdanju-u-hrvatskoj-rijesi-anketu-i-osvoji-surprise-box/" target="_blank">Riješi anketu</a>

                    <a class="border-second-button" style="padding-top: -10px; " href="https://www.facebook.com/groups/imamcelulit" target="_blank">Pridruži se FB grupi</a>
                </div>

                <img src="<?php echo $native_path ?>/assets/images/partneri.png" class="partneri" />
          </div>
        </div>


      </div>
  </div>
</div>

<div class="container-fluid">

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
