<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/arena/anketa_bts_rezultat/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $native_path ?>jquery.serialize-object.min.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/omn3ltq.css">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@700&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/4878256e09.js" crossorigin="anonymous"></script>
</head>
<div class="main-container flex">
    <div class="full flex colored">
        <div class="container flex">
            <a href="https://super1.telegram.hr/" class="header-logos center full">
                <img src="<?php echo $native_path ?>img/super1_logo.svg" alt="Super1 Logo">
                <img src="<?php echo $native_path ?>img/arena_centar.svg" alt="Super1 Logo">
            </a>
            <h3 class="full overtitle center-text">Veliko istraživanje o novoj školskoj godini</h3>
            <h1 class="full center-text">50 % Hrvata kaže kako je za kupnju najvažnije da se sve može pronaći na jednom mjestu</h1>

            <h2 class="full relative intro"><div class="line"></div><div class="line"></div>Na temelju istraživanja koje je Super1 proveo u suradnji s Arena Centrom, saznali smo što Hrvati očekuju od nove školske godine, čega se pribojavaju, što im je za back to school shopping bilo najvažnije te gdje su ga i kako obavili.</h2>
            <img class="infographic" src="<?php echo $native_path ?>img/tg_infographic_arena_istrazivanje.png" alt="Infografika" />
        </div>
    </div>
    <section class="full native-signature">
        <div class="container flex">
            <div class="full center">
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Arena Centar i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </section>
</div>

<?php wp_footer(); ?>
</body>

</html>