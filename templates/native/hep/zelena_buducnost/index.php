<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = get_stylesheet_directory_uri() . '/templates/native/hep/zelena_buducnost/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/hep/zelena_buducnost/';
$native_path = 'https://www.telegram.hr/wp-content/themes/telegram2-desktop/templates/native/hep/zelena_buducnost/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css" type="text/css" />
    <!--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:500,700,900&display=swap&subset=latin-ext" rel="stylesheet">
</head>
<div class="main-container flex">
    <div class="native-hero full flex relative center container">
        <h1 class="full">Zelena energija, zelena budućnost</h1>
        <video preload="auto" autoplay="" muted="" loop="">
            <source src="<?php echo $native_path ?>img/tg_header_hep_zelen.mp4?ver=1.1" type="video/mp4">
        </video>
        <p class="intro">Korištenjem zelene energije tvrtke doprinose promicanju društvene odgovornosti i ekološke osviještenosti. Velike tvrtke, ili pak manje tvrtke koje koriste veću količinu električne energije, trebale bi biti odgovorne prema prirodi, odnosno, odgovorno trošiti zalihe električne energije. HEP je vodeća tvrtka u regiji na području elektromobilnosti u  zgradnji infrastrukture za punjenje el. vozila te sudjeluje u stvaranju energetski neutralnog kontinenta do 2050. godine.</p>
    </div>
    <div class="full container flex relative">
        <a class="full flex relative article" target="_blank" href="https://www.telegram.hr/partneri/o-buducnosti-elektricnih-automobila-i-mreze-punionica-u-hrvatskoj-pricali-smo-s-covjekom-zaduzenim-za-hep-ovu-mrezu/">
            <img src="https://www.telegram.hr/wp-content/uploads/2020/10/hep-elen-01-840x530@2x.jpg" aria-hidden="true">
            <h2 class="full center-text">O budućnosti električnih automobila i mreže punionica u Hrvatskoj pričali smo s čovjekom zaduženim za HEP-ovu mrežu</h2>
            <p class="full center-text">O budućnosti ELEN mreže i električnih automobila porazgovarali smo s Domagojem Puzakom iz HEP-a</p>
            <div class="cta animate">Pročitaj više</div>
        </a>
        <img src="<?php echo $native_path ?>img/hep_1.png" aria-hidden="true" class="infographic">
        <a class="full flex relative article" target="_blank" href="https://www.telegram.hr/partneri/zelena-energija-zelena-buducnost-kako-su-se-domace-tvrtke-odlucile-na-zeleni-pogon/">
            <img src="https://www.telegram.hr/wp-content/uploads/2020/11/he-peruca-840x530.jpg" aria-hidden="true">
            <h2 class="full center-text">Zelena energija, zelena budućnost – kako su se domaće tvrtke odlučile na zeleni pogon</h2>
            <p class="full center-text">Korištenjem zelene energije tvrtke doprinose promicanju društvene odgovornosti i ekološke osviještenosti </p>
            <div class="cta animate">Pročitaj više</div>
        </a>
        <img src="<?php echo $native_path ?>img/hep_2.png" aria-hidden="true" class="infographic">
        <a class="full flex relative article" target="_blank" href="https://www.telegram.hr/partneri/hep-sudjeluje-u-stvaranju-energetski-neutralnog-kontinenta-do-2050-godine/">
            <img src="https://www.telegram.hr/wp-content/uploads/2020/10/he-ozalj-840x530.jpg" aria-hidden="true">
            <h2 class="full center-text">HEP sudjeluje u stvaranju energetski neutralnog kontinenta do 2050. godine </h2>
            <p class="full center-text">HEP-ov plan sastoji se od četiri bitna i ambiciozna segmenta </p>
            <div class="cta animate">Pročitaj više</div>
        </a>
        <img src="<?php echo $native_path ?>img/hep_3.png" aria-hidden="true" class="infographic">
        <a class="full flex relative article hide" target="_blank" href="#">
            <img src="https://www.telegram.hr/wp-content/uploads/2020/11/hep-oie-banner-800x480-1.jpg" aria-hidden="true">
            <h2 class="full center-text">Zahvaljujući nikad većim ulaganjima, HEP potiče razvoj domaće industrije te gradi zeleno, tehnološki napredno gospodarstvo 21. stoljeća. </h2>
            <p class="full center-text">Cres, Marici kod Žminja, Obrovac, Stankovci, Vrlika i Kaštelir 2 danas su gradilišta HEP-ovih sunčanih elektrana</p>
            <div class="cta animate">Pročitaj više</div>
        </a>
    </div>
    <section class="full native-signature">
        <div class="container flex">
            <div class="full center">
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom HEP i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </section>
</div>

<?php wp_footer(); ?>
</body>

</html>