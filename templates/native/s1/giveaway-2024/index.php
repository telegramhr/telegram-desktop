
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/s1/giveaway-2024';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    #wheel-container {
      position: relative;
      width: 300px;
      height: 300px;
      margin: auto;
    }

    #wheel {
      width: 100%;
      height: 100%;
      transform-origin: center;
      transition: transform 5s ease-in-out;
    }

    #arrow {
      position: absolute;
      top: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 50px;
      height: 50px;
      z-index: 10;
    }

    #arrow img {
      width: 100%;
    }

        /* Definiraj osnovni container */
        #myContainer {
            width: 100%;
            background-image: url('<?php echo $native_path ?>/assets/images/back01.jpg');
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out; /* Glatki prijelaz */


        }

            .snow {
    z-index: 10;
    width: 100%;
    height: 100%;
    display: block;
    mix-blend-mode: screen;
    position: fixed;
    top: 0%;
    bottom: 0%;
    left: 0%;
    right: 0%;
    pointer-events: none;
    opacity: 0.5;
  }

  .w-background-video > video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -100;
    background-position: 50%;
    background-size: cover;
    margin: auto;
    position: absolute;
    top: -100%;
    bottom: -100%;
    left: -100%;
    right: -100%;
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




<div class="snow">

  <div data-video-urls="https://telegram.reset.hr/advent-2024/video.mp4?=new" data-autoplay="true" data-loop="true" data-wf-ignore="true" style="opacity: 1; display: block;" class="snow w-background-video w-background-video-atom">
    <video id="video" autoplay loop muted playsinline data-wf-ignore="true" data-object-fit="cover" data-cmp-info="9">
      <source src="https://telegram.reset.hr/advent-2024/video-advent.mp4?=new" data-wf-ignore="true" data-cmp-ab="2">
    </video>
  </div>
</div>


  <div class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-5 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
               <img src="<?php echo $native_path ?>/assets/images/claim.png" style="padding: 0px" />
               <p>Zavrti kolo sreće i otkrij aktualnu nagradu. Kao i svake sezone, Super1 te zajedno s brojnim partnerima nagrađuje i ovih blagdana. Svakih par dana otkrivamo nove nagrade, a osvojiti ih možeš na Instagramu Super1. Svaki nagradni natječaj traje tri dana, a pravila pronađi ovdje.<br/><br/>

                Sretno i uživaj u blagdanima!</p>
        </div>
        <div class="col-lg-6 text-center">

                  <div class="container text-center mt-0">
                    <button id="spinButton" class="border-first-button">Zavrti Kolo</button>
                    <div id="wheel-container">
                      <img id="arrow" src="<?php echo $native_path ?>/assets/images/arrow.png" alt="Arrow">
                      <canvas id="wheel"></canvas>
                    </div>

                  </div>

                  <!-- Modal -->
                  <div class="modal te fade" id="resultModal" tabindex="-1" aria-labelledby="resultModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="resultModalLabel"></h5>

                        </div>
                        <div class="modal-body text-center">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          <img id="resultImage" src="" alt="Result" class="img-fluid mb-0">
                          <p id="resultText"></p>
                        </div>
                        <div class="modal-footer">
                          <button id="resultButton" type="button" class="border-first-button"></button>
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
  <script src="<?php echo $native_path ?>/assets/js/script.js?=new2"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>


</body>
</html>
