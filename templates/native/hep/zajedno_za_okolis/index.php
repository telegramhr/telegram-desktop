<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = get_stylesheet_directory_uri() . '/templates/native/hep/zajedno_za_okolis/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/hep/zajedno_za_okolis/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/hep/zajedno_za_okolis/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/hep/zajedno_za_okolis/';
//$native_path = 'http://localhost/zajedno_za_okolis/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); 
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@200;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=1.00" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=1.11" type="text/css" />
</head>

<body>
    <div class="main-container flex relative">
        <nav class="full topnav flex relative">
            <div class="container center relative">
                <div class="center relative textlogo"><img src="<?php echo $native_path ?>img/hep_logo.svg" alt="HEP logo">Zajedno za okoliš</div>
                <div class="center relative desktop-only">
                    <a href="#zivotinje" class="center relative animate">
                        <?php echo file_get_contents($native_path . 'img/paw-simple-solid.svg'); ?>
                        <div class="full">Životinje</div>
                    </a>
                    <a href="#voda" class="center relative animate">
                        <?php echo file_get_contents($native_path . 'img/droplet-solid.svg'); ?>
                        <div class="full">Voda</div>
                    </a>
                    <a href="#tlo" class="center relative animate">
                        <?php echo file_get_contents($native_path . 'img/campground-solid.svg'); ?>
                        <div class="full">Tlo</div>
                    </a>
                    <a href="#zrak" class="center relative animate">
                        <?php echo file_get_contents($native_path . 'img/wind-solid.svg'); ?>
                        <div class="full">Zrak</div>
                    </a>
                    <a href="#ljudi" class="center relative animate">
                        <?php echo file_get_contents($native_path . 'img/people-group-solid.svg'); ?>
                        <div class="full">Ljudi</div>
                    </a>
                </div>
            </div>
        </nav>
        <nav class="full inpage-nav mobile-only center relative">
            <a href="#zivotinje" class="fifth center relative animate">
                <?php echo file_get_contents($native_path . 'img/paw-simple-solid.svg'); ?>
                <div class="full center-text">Životinje</div>
            </a>
            <a href="#voda" class="fifth center relative animate">
                <?php echo file_get_contents($native_path . 'img/droplet-solid.svg'); ?>
                <div class="full center-text">Voda</div>
            </a>
            <a href="#tlo" class="fifth center relative animate">
                <?php echo file_get_contents($native_path . 'img/campground-solid.svg'); ?>
                <div class="full center-text">Tlo</div>
            </a>
            <a href="#zrak" class="fifth center relative animate">
                <?php echo file_get_contents($native_path . 'img/wind-solid.svg'); ?>
                <div class="full center-text">Zrak</div>
            </a>
            <a href="#ljudi" class="fifth center relative animate">
                <?php echo file_get_contents($native_path . 'img/people-group-solid.svg'); ?>
                <div class="full center-text">Ljudi</div>
            </a>
        </nav>
        <header class="full center relative slide">
            <video class="bg-video" autoplay muted loop playsinline src="<?php echo $native_path; ?>img/tg_videobg_hep_header.mp4"></video>
            <div class="full intro flex center-text relative">
                <h3 class="full relative article-title">Zajedno za okoliš</h3>
                <p class="full">Naš svijet pun je jedinstvenih pojava i bića od kojih svaka pojedina ima važnu ulogu u održavanju cijelog sistema.</p>
                <p class="full">No, suvremenost je dovela u pitanje njegovu održivost. Svakodnevne navike pojedinaca i organizacija diljem svijeta imaju višestruki učinak u lokalnoj, ali i globalnoj zajednici.</p>
                <p class="full">Samo zajedničkim snagama i osvještavanjem pravih problema možemo očuvati Zemlju onakvom kakvom je poznajemo.</p>
                <p class="full">Stoga vam Telegram i HEP donose serijal članaka o ekološkim izazovima s kojima se suočavamo kao hrvatski građani i jasnim preporukama kako im doskočiti.</p>
            </div>
        </header>
        <div class="full center relative slide slide-2" id="zivotinje">
            <video class="bg-video" autoplay muted loop playsinline src="<?php echo $native_path; ?>img/tg_videobg_ptice.mp4"></video>
            <h2 class="full center-text">Životinje</h2>
            <a class="full flex relative article-teaser" href="https://www.telegram.hr/zivot/gotovo-300-vrsta-ptica-u-hrvatskoj-je-pred-izumiranjem-razgovarali-smo-sa-zoologinjom-o-tome-sto-bi-se-dogodilo-kad-bi-nestale/" target="_blank">
                <div class="flex relative article-author">
                    <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png">
                </div>
                <span>Mateja Ježovita</span>
                <h3 class="full relative article-title">Gotovo 300 vrsta ptica u Hrvatskoj je pred izumiranjem. Razgovarali smo sa zoologinjom o tome što bi se dogodilo kad bi nestale</h3>
                <div class="cta animate">Pročitaj više</div>
            </a>
        </div>
        <div class="full center relative slide slide-3" id="voda">
            <video class="bg-video" autoplay muted loop playsinline src="<?php echo $native_path; ?>img/tg_videobg_voda.mp4"></video>
            <h2 class="full center-text">Voda</h2>
            <a class="full flex relative article-teaser" href="https://www.telegram.hr/zivot/svaka-cetvrta-osoba-u-eu-nema-dovoljno-vode-a-proslog-je-ljeta-bila-najveca-susa-desetljeca-istrazili-smo-zasto/" target="_blank">
                <div class="flex relative article-author">
                    <img src="https://images.telegram.hr/VnaOoKiKzlsb2ZZ8Moh9Gueft-YPMmYhdZ8RC1W3g9Q/preset:author/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDkvYW5hbWFydGluaWMucG5n.webp">
                </div>
                <span>Ana Martinić</span>
                <h3 class="full relative article-title">Svaka četvrta osoba u EU nema dovoljno vode, a prošlog je ljeta bila najveća suša desetljeća. Istražili smo zašto</h3>
                <div class="cta animate">Pročitaj više</div>
            </a>
        </div>
        <div class="full center relative slide slide-4" id="tlo">
            <video class="bg-video" autoplay muted loop playsinline src="<?php echo $native_path; ?>img/tg_videobg_tlo.mp4"></video>
            <h2 class="full center-text">Tlo</h2>
            <a class="full flex relative article-teaser" href="https://www.telegram.hr/zivot/zelene-tehnologije-u-poljoprivredi-bi-drasticno-smanjile-upotrebu-pesticida-profesor-s-agronomskog-objasnjava-kako/" target="_blank">
                <div class="flex relative article-author">
                    <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png">
                </div>
                <span>Mateja Ježovita</span>
                <h3 class="full relative article-title">Zelene tehnologije u poljoprivredi bi drastično smanjile upotrebu pesticida. Profesor s Agronomskog objašnjava kako</h3>
                <div class="cta animate">Pročitaj više</div>
            </a>
        </div>
        <div class="full center relative slide slide-5" id="zrak">
            <video class="bg-video" autoplay muted loop playsinline src="<?php echo $native_path; ?>img/tg_videobg_zrak.mp4"></video>
            <h2 class="full center-text">Zrak</h2>
            <h3 class="full relative center-text article-title">Dolazi uskoro...</h3>
        </div>
        <div class="full center relative slide slide-1" id="ljudi">
            <video class="bg-video" autoplay muted loop playsinline src="<?php echo $native_path; ?>img/tg_videobg_ljudi.mp4"></video>
            <h2 class="full center-text">Ljudi</h2>
            <a class="full flex relative article-teaser" href="https://www.telegram.hr/zivot/pitanja-oko-elektricnih-vozila-vise-je-nego-ikada-no-njihov-se-broj-na-ulicama-vec-godinama-udvostrucava/" target="_blank">
                <div class="flex relative article-author">
                    <img src="https://images.telegram.hr/VnaOoKiKzlsb2ZZ8Moh9Gueft-YPMmYhdZ8RC1W3g9Q/preset:author/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDkvYW5hbWFydGluaWMucG5n.webp">
                </div>
                <span>Ana Martinić</span>
                <h3 class="full relative article-title">Pitanja oko električnih vozila više je nego ikada, no njihov se broj na ulicama već godinama udvostručava</h3>
                <div class="cta animate">Pročitaj više</div>
            </a>
        </div>
        <footer class="full flex relative native-signature">
            <div class="container text-container flex relative stretch">
                <div class="full center logo-line">
                    <img src="<?php echo $native_path ?>img/hep_logo.svg" alt="HEP logo">
                    <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
                </div>
                <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom HEP i po najvišim uredničkim standardima Telegram Media Grupe.</p>
            </div>
        </footer>
    </div>
    <?php wp_footer(); 
    ?>
</body>

</html>