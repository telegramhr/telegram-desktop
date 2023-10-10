<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/minuta-za-mene';
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">

  </head>

<body>


  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-10 offset-lg-1 align-self-center">
                <div class="row">
                  <div class="col-lg-12 text-center">
                    <img src="<?php echo $native_path ?>/assets/images/logo.png" alt="" class="keyvizual">
                    <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Hvala ti što se aktivno pridružila u podizanju svijesti o važnosti zdravlja dojki i samopregleda.</h2>
                    <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" style="font-size: 24px !important;">Korak prema zdravijoj verziji tebe, najbolji je korak kojeg si mogla poduzeti. </p>
                    <div class="border-first-button">
                        <a href="https://www.telegram.hr/native/minuta-za-mene/"><button class="border-first-button" id="startButton">Minuta za mene</button></a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
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

        <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
