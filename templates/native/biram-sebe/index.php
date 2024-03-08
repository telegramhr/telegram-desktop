
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/biram-sebe/';
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
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo $native_path ?>/assets/images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css?=23022024v2">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">
<style type="text/css">

      @-webkit-keyframes micanje { 0% { margin-left:0px; } 50% {margin-left:10px;} 100% { margin-left:0px;} }
    @keyframes micanje { 0% { margin-left:0px; } 50% {margin-left:10px;} 100% { margin-left:0px;} }
</style>
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="15">
<?php do_action('telegram_body_start'); ?>
  <!-- ***** Preloader Start ***** -->

<div style="top:20px; right:20px; position: absolute; z-index: 10;"><img src="<?php echo $native_path ?>/assets/images/super1.png" ></div>

<div class="video-background" >
<iframe class="video-background" src="https://www.youtube.com/embed/f3uVW1znWN0?autoplay=1&loop=1&controls=0&mute=1&playlist=f3uVW1znWN0"  frameborder="0" allow="autoplay;" allowfullscreen></iframe>
</div>

<div style="top:0; left:0; width: 100%; height: 100%; position: absolute; z-index: 1;"><img src="<?php echo $native_path ?>/assets/images/ferlauf.png" style="height: 100%;"></div>

  <div class="blog">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center wow" data-wow-duration="1s" data-wow-delay="1s">
            <div class="sticky-top">
               <img src="<?php echo $native_path ?>/assets/images/biram-sebe.svg" class="oblakslika" /><br/>

              <p class="saznajvise"><a href="#vise" style="font-family: 'Poppins', sans-serif; color: #7B19C8; font-size: 16px; text-decoration: none; letter-spacing: 1px; font-weight: 500;">SAZNAJ VIŠE <span style="-webkit-animation: micanje 1s ease-in-out 0s infinite; animation: micanje 1s ease-in-out 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/strelica.svg" style="width: 50px;" /></span></a></p>


        </div>


      </div>
  </div>
</div>
<div id="vise" class="blog" style="padding-bottom: 0px !important;">
  <div class="container-fluid" style="background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%); z-index: 100; position: relative; padding-top: 30px; padding-bottom: 120px; overflow: hidden;">

    <div class="row">
      <div class="col-lg-12 text-center" style="padding-bottom:150px">


        <div class="marquee">
          <div class="marquee-content">USKORO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        </div>



        </div>
      <div class="col-lg-12 text-right scroll-transform">
          <h1>Više rezultata i priča</h1>
        </div>
      <div class="col-lg-12 text-right scroll-transform-kontra">
          <h1>dolazi uskoro...</h1>
        </div>
    </div>
  </div>
</div>


  <div id="clanci" class="blog" style="z-index: 100; position: relative; padding-top: 0px; padding-bottom: 120px; overflow: hidden;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
                <img src="<?php echo $native_path ?>/assets/images/partneri.png" class="partneri" />

                <br/><br/>
              <p>Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/telegram.png" style="max-width: 186px;"  />
          </div>
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
  <script src="<?php echo $native_path ?>/assets/js/script.js"></script>

    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
