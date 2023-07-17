<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = get_stylesheet_directory_uri() . '/templates/native/solgar/ljetni_faktor/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/solgar/ljetni_faktor/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/solgar/ljetni_faktor/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/solgar/ljetni_faktor/';
//$native_path = 'http://localhost/solgar/ljetni_faktor/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=3.01" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=3.69" type="text/css" />
</head>

<body>
    <nav class="side-nav center">
        <div class="full flex">
            <a class="full" href="#uvod">
                <div class="text-logo full">Tvoj ljetni faktor</div>
            </a>
            <a class="full" href="#priprema">Priprema za ljeto</a>
            <a class="full" href="#savjeti">Savjet stručnjaka</a>
            <a class="full" href="#kviz">Otkrij svoj fototip</a>
            <a class="full" href="#vitamini">Ključni vitamini</a>
            <a class="full" href="#dnevnik">Dnevnik novinarke</a>
            <a class="full" href="#znakove">Spriječi znakove starenja</a>
            <a class="full" href="#hiperpigmentacija">Izbjegni hiperpigmentaciju</a>
            <a class="full" href="#izbor">Tvoj izbor za zdravu kožu</a>
        </div>
        <div class="full flex">
            <a href="https://www.solgar.hr/?utm_source=microsite&utm_medium=landing_page&utm_campaign=solgar" target="_blank" class = "clickable">
                <img src="<?php echo $native_path ?>img/solgar.svg" alt="Solgar logo" />
            </a>
        </div>
    </nav>
    <div class="main-container flex relative">
        <header class="full center relative slide" id="uvod">
            <video autoplay muted playsinline loop class="video-bg">
                <source src="<?php echo $native_path ?>img/tg_videobg_seaside_woman.mp4" type="video/webm">
                <source src="<?php echo $native_path ?>img/tg_videobg_seaside_woman.webm" type="video/mp4">
            </video>
            <div class="half flex-responsive"></div>
            <div class="half flex flex-responsive relative header-text">
                <p class="full overtitle">Super1 x Solgar</p>
                <h1 class="full">Tvoj <span class="outlined">ljetni faktor</span></h1>
                <div class="full article-cta uppercase">Pripremi svoju kožu za ljeto i uživaj u prekrasnom tenu</div>
                <div class="full article-cta uppercase"><span class="yellow">Scrollaj</span> i saznaj kako</div>
            </div>
        </header>
        <!-- Priprema za ljeto -->
        <div class="full center relative slide slide-article" id="priprema">
            <img class = "full-img" src="<?php echo $native_path ?>img/solgar-giveaway.jpeg" aria-hidden="true" />
            <a class="full flex relative stretch article upzindex" href = "https://www.telegram.hr/super1/life/pitali-smo-kolegice-kako-se-pripremaju-za-ljeto-njihove-navike-i-vama-mogu-biti-vrlo-korisne/" target = "_blank">
                <h2 class="full"> Pitali smo kolegice kako se pripremaju za ljeto. Njihove navike i vama mogu biti vrlo korisne</h2>
                <!-- <div class="full article-cta"><img src="<?php //echo $native_path ?>img/longarrow.png" alt="Dugačka strelica prema desno">Pročitaj više</div> -->
                <div class = "full flex relative article-cta">
                    <div class = "animate flex relative aricle-cta button-59 center">Pročitaj Više</div>
                </div>
            </a>
        </div>
        <!-- Savjeti -->
        <div class="full center relative slide slide-article" id="savjeti">
            <img class = "full-img" src="<?php echo $native_path ?>img/stock-photo-5.jpg" aria-hidden="true" />
            <a href="https://www.telegram.hr/super1/life/dermatologica-nam-je-savjetovala-na-sto-pripaziti-ovog-ljeta-i-kada-izbjegavati-izlazak-na-sunce/" target="_blank" class="full flex relative stretch article upzindex">
                <h2 class="full">Dermatologica nam je savjetovala na što pripaziti ovog ljeta i kada izbjegavati izlazak na sunce</h2>
                <div class = "full flex relative article-cta">
                    <div class = "animate flex relative aricle-cta button-59 center">Pročitaj Više</div>
                </div>
            </a>
        </div>
        <!-- Kviz -->
        <div class="full center relative slide slide-article special-slide" id="kviz">
            <img class = "full-img" src="<?php echo $native_path ?>img/slogar-tekst.jpeg" aria-hidden="true" />
            <a href="https://mysun.expert/?utm_source=microsite&utm_medium=landing_page&utm_campaign=solgar#upitnik" target="_blank" class="full flex relative stretch article upzindex">
                <h2 class="full">Odgovori na par pitanja u upitniku i doznaj svoj fototip kože i kako je najbolje zaštititi</h2>
                <!-- <div class="full article-cta"><img src="<?php //echo $native_path ?>img/longarrow.png" alt="Dugačka strelica prema desno">Vodi me na upitnik</div> -->
                <div class = "full flex relative article-cta">
                    <div class = "animate flex relative aricle-cta button-59 center">Vodi me na upitnik</div>
                </div>
            </a>
        </div>
        <!-- Vitamini -->
        <div class="full center relative slide slide-article" id="vitamini">
            <img class = "full-img" src="https://images.telegram.hr/jFg9Lu0oIeuH9knGtJReBoJsGEkcB5y1DY5zpfHwakM/preset:s1single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDYvcm9iZXJ0by1uaWNrc29uLWFzdm91aHg4NG84LXVuc3BsYXNoLmpwZw.webp" aria-hidden="true" />
            <a class="full flex relative stretch article upzindex" href = "https://www.telegram.hr/super1/life/sacuvajte-kozu-od-sunca-i-krenite-s-pripremom-vec-danas-ovih-cemo-se-savjeta-i-vitamina-definitivno-drzati/" target = "_blank">
                <h2 class="full">Sačuvajte kožu od sunca i krenite s pripremom već danas. Ovih ćemo se savjeta i vitamina definitivno držati</h2>
                <!-- <div class="full article-cta"><img src="<?php //echo $native_path ?>img/longarrow.png" alt="Dugačka strelica prema desno">Pročitaj više</div> -->
                <div class = "full flex relative article-cta">
                    <div class = "animate flex relative aricle-cta button-59 center">Pročitaj Više</div>
                </div>
            </a>
        </div>        
        <!-- Dnevnik -->
        <div class="full center relative slide slide-article" id="dnevnik">
            <img class = "full-img" src="https://www.telegram.hr/wp-content/uploads/2023/06/super1-ljekarnesvaljek-solgar-14.jpg" aria-hidden="true" />
            <a class="full flex relative stretch article upzindex" target = "_blank" href = "https://www.telegram.hr/super1/bez-obzira-na-zastitni-faktor-redovito-izgorim-na-suncu-otisla-sam-kod-strucnjaka-po-savjet-i-plan-za-ljeto/">
                <h2 class="full">Bez obzira na zaštitni faktor, redovito izgorim na suncu. Otišla sam kod stručnjaka po savjet i plan za ljeto</h2>
                <!-- <div class="full article-cta"><img src="<?php //echo $native_path ?>img/longarrow.png" alt="Dugačka strelica prema desno">Pročitaj više</div> -->
                <div class = "full flex relative article-cta">
                    <div class = "animate flex relative aricle-cta button-59 center">Pročitaj Više</div>
                </div>
            </a>
        </div>
        <!-- Znakove -->
        <div class="full center relative slide slide-article" id="znakove">
            <img class = "full-img" src="https://images.telegram.hr/4RPjxLHjGXc8V4_0XPosLIf59P8IqxKAPCAJuv0LV-M/preset:s1single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDYvYWRyeWFuLXJhLWxtZG93Z2djamI0LXVuc3BsYXNoLmpwZw.webp" aria-hidden="true" />
            <a class="full flex relative stretch article upzindex" href = "https://www.telegram.hr/super1/beauty/fotostarenje-najcesce-je-uzrokovano-nekontroliranim-izlaganjem-suncu-evo-kako-ga-sprijeciti/" target = "_blank">
                <h2 class="full">Fotostarenje najčešće je uzrokovano nekontroliranim izlaganjem suncu. Evo kako ga spriječiti</h2>
                <!-- <div class="full article-cta"><img src="<?php //echo $native_path ?>img/longarrow.png" alt="Dugačka strelica prema desno">Pročitaj više</div> -->
                <div class = "full flex relative article-cta">
                    <div class = "animate flex relative aricle-cta button-59 center">Pročitaj Više</div>
                </div>
            </a>
        </div> 
        <!-- Hiperpigmentacija -->
        <div class="full center relative slide slide-article" id="hiperpigmentacija">
            <img class = "full-img" src="https://images.telegram.hr/nClrCcm5amRiZ6T3xDZc_rKm_Uu4gIWich6lkSUmDoI/preset:s1single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDYvY29zbWljLXRpbWV0cmF2ZWxlci1xMzVudGdqcGNqdy11bnNwbGFzaC5qcGc.webp" aria-hidden="true" />
            <a class="full flex relative stretch article upzindex" href = "https://www.telegram.hr/super1/life/sprijecite-hiperpigmentaciju-i-ljetna-ostecenja-koze-za-djelovanje-nikada-nije-kasno/" target = "_blank">
                <h2 class="full">Spriječite hiperpigmentaciju i ljetna oštećenja kože. Za djelovanje nikada nije kasno</h2>
                <!-- <div class="full article-cta"><img src="<?php //echo $native_path ?>img/longarrow.png" alt="Dugačka strelica prema desno">Pročitaj više</div> -->
                <div class = "full flex relative article-cta">
                    <div class = "animate flex relative aricle-cta button-59 center">Pročitaj Više</div>
                </div>
            </a>
        </div>        
        <!-- Izbor -->
        <div class="full center relative slide slide-article-top " id="izbor">
            <img class = "full-img" src="<?php echo $native_path ?>img/stock-photo-4.jpeg" aria-hidden="true" />
            <a href = "https://www.solgar.hr/?utm_source=microsite&utm_medium=landing_page&utm_campaign=solgar" target="_blank" class="full flex relative stretch article upzindex">
                <h2 class="full">Tvoj izbor za zdravu kožu</h2>
                <!-- <div class="full article-cta button-34"><img src="<?php //echo $native_path ?>img/longarrow.png" alt="Dugačka strelica prema desno">Pročitaj više</div> -->
                <div class = "full flex relative article-cta">
                    <div class = "animate flex relative aricle-cta button-59 center">Pročitaj Više</div>
                </div>
            </a>
        </div>
        <!-- Partneri -->
        <footer class="full center relative slide" id="partneri">
            <a href="https://www.solgar.hr/?utm_source=microsite&utm_medium=landing_page&utm_campaign=solgar" target="_blank" class="full center logo-line">
                <img src="<?php echo $native_path ?>img/solgar.svg" alt="Solgar logo" />
            </a>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Solgar i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </footer>
    </div>
    <?php wp_footer(); 
    ?>
</body>

</html>