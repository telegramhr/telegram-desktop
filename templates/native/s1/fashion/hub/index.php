<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/fashion/hub/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=1.3" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="<?php echo $native_path ?>isInViewport.js.map"></script>
    <script src="<?php echo $native_path ?>isInViewport.js"></script>
    <script src="<?php echo $native_path ?>functions.js?ver=1.2"></script>
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One&display=swap&subset=latin-ext" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap&subset=latin-ext" rel="stylesheet"> 
</head>
<div class="main-container flex">
    <div class="native-hero full flex relative center">
        <a href="https://super1.telegram.hr/" class="header-logos center full">
            <img src="<?php echo $native_path ?>img/super1_logo_white.svg" alt="Super1 Logo">
        </a>
        <video preload="auto" autoplay="" muted="" loop="" playsinline class="wow fadeIn" src="<?php echo $native_path ?>img/s1_backtofashion_header.mp4" type="video/mp4" alt="Super1Party" ></video>
        <div class="native-title container flex">
            <h1 class="full hide">Back to Fashion</h1>
            <img src="<?php echo $native_path ?>img/s1_backtofashion_logo.gif?ver=1.1"/>
            <h2 class="full center wow fadeInUp" data-wow-duration="1s" data-wow-delay="3s">Restartaj modne navike. Saznaj kako </h2>
        </div>
    </div>
    <div class="full flex">
        <div class="container flex">
        <p class="center-text wow fadeInUp intro horizontal-pad" data-wow-duration="1s">Super1 snažno podržava modnu industriju te postaje ultimativna platforma na kojoj modni dizajneri i modni brendovi prikazuju novitete i trendove te na jednom mjestu okuplja istinske zaljubljenice u dobar stil: shopping vodiči, intervjui s relevantnim stručnjacima, modne recenzije, pravila sigurne kupovine, modni editorijali...</p>
        <h2 class="full custom-title center-text wow fadeInUp horizontal-pad" data-wow-duration="1s" data-wow-delay="3s">Možda nema modnih revija i modnih događanja, ali zato ima mode:<br> dobrodošli u #S1fashionhub</h2>
        </div>
    </div>
    <div class="full flex">
        <div class="container flex">
            <div class="two-thirds flex flex-responsive">
                <?php
                    $articles = new WP_Query([
                        'posts_per_page' => 18,
                        'tag' => '#s1fashionhub',
                        'orderby' => 'date',
                        'order' => 'desc',
                        'ignore_sticky_posts' => true,
                        'no_found_rows'       => true,
                    ]);
                    $count = $articles->post_count;
                    // start block loop
                    if ($articles->have_posts()) {
                        for ($i=0; $i < 2; $i++) {
                            $articles->the_post();
                            get_template_part('templates/native/fashion/hub/article-1');
                        }
                        /*while ($articles->have_posts()) {
                            $articles->the_post();
                            get_template_part('templates/articles/article-4');
                        }*/
                    }
                ?>
            </div>
            <div class="third relative flex-responsive">
                <img class="girl_colored wow fadeIn" src="<?php echo $native_path ?>img/girl_colored.svg" data-wow-duration="2s" data-wow-delay="10s">
                <?php echo file_get_contents($native_path.'img/girl_1.svg'); ?>
            </div>
        </div>
        <div class="container flex">
            <div class="full flex">
                <?php
                    if ($articles->have_posts()) {
                        for ($i=0; $i < 4; $i++) {
                            echo '<div class="fourth flex-responsive">'; 
                            $articles->the_post();
                            get_template_part('templates/native/fashion/hub/article-4');
                            echo '</div>';
                        }
                    }
                ?>
            </div>
        </div>
        <div class="container flex">
            <div class="third relative">
                <img class="girl_colored wow fadeIn" src="<?php echo $native_path ?>img/girl_2_colored.svg" data-wow-duration="2s" data-wow-delay="7s">
                <?php echo file_get_contents($native_path.'img/girl_2.svg'); ?>
            </div>
            <div class="two-thirds flex flex-responsive">
                <?php
                    $count = $articles->post_count;
                    // start block loop
                    if ($articles->have_posts()) {
                        for ($i=0; $i < 2; $i++) {
                            $articles->the_post();
                            get_template_part('templates/native/fashion/hub/article-1');
                        }
                        /*while ($articles->have_posts()) {
                            $articles->the_post();
                            get_template_part('templates/articles/article-4');
                        }*/
                    }
                ?>
            </div>
        </div>
        <div class="container flex">
            <div class="full flex">
                <?php
                    if ($articles->have_posts()) {
                        for ($i=0; $i < 4; $i++) {
                            echo '<div class="fourth flex-responsive">'; 
                            $articles->the_post();
                            get_template_part('templates/native/fashion/hub/article-4');
                            echo '</div>';
                        }
                    }
                ?>
            </div>
        </div>
        <div class="container flex">
            <div class="two-thirds flex flex-responsive">
                <?php
                    $count = $articles->post_count;
                    // start block loop
                    if ($articles->have_posts()) {
                        for ($i=0; $i < 2; $i++) {
                            $articles->the_post();
                            get_template_part('templates/native/fashion/hub/article-1');
                        }
                        /*while ($articles->have_posts()) {
                            $articles->the_post();
                            get_template_part('templates/articles/article-4');
                        }*/
                    }
                ?>
            </div>
            <div class="third relative">
                <img class="girl_colored wow fadeIn" src="<?php echo $native_path ?>img/girl_3_colored.svg" data-wow-duration="2s" data-wow-delay="7s">
                <?php echo file_get_contents($native_path.'img/girl_3.svg'); ?>
            </div>
        </div>
        <div class="container flex">
            <div class="full flex">
                <?php
                    if ($articles->have_posts()) {
                        for ($i=0; $i < 4; $i++) {
                            echo '<div class="fourth flex-responsive">'; 
                            $articles->the_post();
                            get_template_part('templates/native/fashion/hub/article-4');
                            echo '</div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    
    <section class="full native-signature hide">
        <div class="container flex">
            <div class="full center">
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </section>
</div>

<?php wp_footer(); ?>
</body>

</html>