<!DOCTYPE html>
<html lang="hr">

<?php

/* Potential native paths */
//$native_path = get_stylesheet_directory_uri() . '/templates/native/client/landing/';
$native_path = 'https://www.telegram.hr/wp-content/themes/telegram2-desktop/templates/native/kavatip-by-franck/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/kavatip-by-franck/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/client/landing/';
//$native_path = 'http://localhost/kavatip-by-franck/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="<?php echo $native_path ?>assets/jquery.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- Animate on scroll -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/aos/aos.css?v=1.00" type="text/css" />
    <script src="<?php echo $native_path ?>assets/aos/aos.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/operon.css?v=1.30" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/style.css?v=1.30" type="text/css" />
    <!-- Slick slider -->
    <script src="<?php echo $native_path ?>assets/slick/slick.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/slick/slick.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/slick/slick-theme.css" type="text/css" />
    <!-- Functions -->
    <script src="<?php echo $native_path ?>assets/functions.js?v=1.30></script>
</head>
<body>
    <div class="main-container flex relative">
        <!-- Top Sticky Nav -->
        <!-- <div class="half top-nav center relative flex-responsive">
            <div class="container full column-horizontal-pad relative">
                <div class="center relative text-logo"><img src="<?php echo $native_path ?>assets/logos/tg_studio_vertical_black.svg" alt="TG Studio logo"><span>Lorem Ipsum</span></div>
            </div>
        </div> -->
        <!-- Hero -->
        <header class="full center relative">
            <div class="full flex relateive">
                <div class="flex half relative flex-responsive">
                    <div class="full flex relative top-logos">
                        <img src="<?php echo $native_path ?>assets/logos/franck-logo.png" alt="TG Studio logo">
                        <span>x</span>
                        <img src="<?php echo $native_path ?>assets/logos/tg_studio_vertical_black.svg" alt="TG Studio logo">
                    </div>
                    <div class="full center wrap relative column-full-pad more-space" data-aos="fade-left" data-aos-delay="250">
                        <h2 class="full">Svaka kava ima svoj karakter. Koja je tvoja?</h2>
                        <p class="full">Jesi li više za klasičnu Jubilarnu, mirisna zrna ili moderne kapsule? Riješi naš kviz i otkrij koja kava najbolje odgovara tvojoj osobnosti, energiji i dnevnom ritmu.</p>
                    </div>
                </div>
                <div class="half flex relative flex-responsive stretch-height" data-aos="fade-right" data-aos-delay="250">
                    <!-- <img src="<?php echo $native_path ?>assets/placeholders/franck-ljudi.webp" aria-hidden="true"> -->
                    <picture>
                        <source srcset = "<?php echo $native_path ?>assets/placeholders/franck-ljudi.webp" type="image/webp">
                        <img src="<?php echo $native_path ?>assets/placeholders/franck-ljudi.jpg" 
                            alt="ljudi piju kavu">
                    </picture>
                </div>
            </div>
        </header>
