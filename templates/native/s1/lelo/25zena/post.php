<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/lelo/25zena/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=2.0" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $native_path ?>slick/slick.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>slick/slick.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=2.0" type="text/css" />
    <script src="<?php echo $native_path ?>functions.js"></script>
</head>
<div class="main-container flex">
    <div class="full native-hero smaller-native-hero relative center flex stretch">
        <div class="native-creative half center relative flex-responsive flex">
            <div>
                <div class="full circle">
                    <div>
                        <div class="full circle">
                            <div class="anon-lady relative">
                                <img src="<?php echo $native_path . 'img/avatar_' . rand(1, 6) . '.jpg'; ?>" alt="Čitateljica">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <video preload="auto" autoplay="" muted="" loop="" playsinline src="<?php echo $native_path ?>img/lelo_bg.mp4" type="video/mp4"></video>
    </div>
    <?php while(have_posts()) {
        the_post();
        ?>
        <h2 class="full big-title center-text">Odgovori čitateljice</h2>
        <div class="container flex relative">
            <p class="full bold">Seks….tvoja prva asocijacija?</p>
            <p class="full"><?php echo get_post_meta( get_the_ID(), 'seks_tvoja_prva_asocijacija', true ) ; ?></p>
            <p class="full bold">Kakav je tvoj stav prema seks igračkama?</p>
            <p class="full"><?php echo get_post_meta( get_the_ID(), 'kakav_je_tvoj_stav_prema_seks_igrackama', true ) ; ?></p>
            <p class="full bold">Najseksi filmska scena?</p>
            <p class="full"><?php echo get_post_meta( get_the_ID(), 'najseksi_filmska_scena', true ) ; ?></p>
            <p class="full bold">Najbolje vrijeme za seks?</p>
            <p class="full"><?php echo get_post_meta( get_the_ID(), 'najbolje_vrijeme_za_seks', true ) ; ?></p>
            <p class="full bold">Solo play ili u paru?</p>
            <p class="full"><?php echo get_post_meta( get_the_ID(), 'solo_play_ili_u_paru', true ) ; ?></p>
            <p class="full bold">Orgazam… tvoja prva asocijacija?</p>
            <p class="full"><?php echo get_post_meta( get_the_ID(), 'orgazam_-_tvoja_prva_asocijacija', true ) ; ?></p>
        </div>
        <?php
    } ?>

    <section class="full native-signature">
        <div class="container flex">
            <div class="full center">
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio_negative.png" alt="TG Studio logo" />
                <img class="partner" src="<?php echo $native_path ?>img/lelo.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom LELO i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </section>
</div>

<?php wp_footer(); ?>
</body>

</html>