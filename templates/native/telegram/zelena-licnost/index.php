<!DOCTYPE html>
<html lang="hr">

<?php

/* Potential native paths */
//$native_path = get_stylesheet_directory_uri() . '/templates/native/telegram/zelena-licnost/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/telegram/zelena-licnost/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/telegram/zelena-licnost/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/telegram/zelena-licnost/';
//$native_path = 'http://localhost/zelena-licnost/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); 
    ?>
    <script src="<?php echo $native_path ?>assets/jquery.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Animate on scroll -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/aos/aos.css?v=1.00" type="text/css" />
    <script src="<?php echo $native_path ?>assets/aos/aos.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/operon.css?v=1.00" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/style.css?v=1.00" type="text/css" />
    <!-- Slick slider -->
    <script src="<?php echo $native_path ?>assets/slick/slick.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/slick/slick.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/slick/slick-theme.css" type="text/css" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Functions -->
    <script src="<?php echo $native_path ?>assets/functions.js"></script>
</head>

<body>
    <div class="main-container flex relative">
        <!-- Mobile Bottom Sticky Nav -->
        <!-- <nav class="full bottom-nav mobile-only flex relative">
            <a href="#" class="fourth center relative">
                <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); 
                ?>
                <div class="full center-text">Unos</div>
            </a>
            <a href="#" class="fourth center relative">
                <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); 
                ?>
                <div class="full center-text">Dos</div>
            </a>
            <a href="#" class="fourth center relative">
                <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); 
                ?>
                <div class="full center-text">Tres</div>
            </a>
            <a href="#" class="fourth center relative">
                <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); 
                ?>
                <div class="full center-text">Quatro</div>
            </a>
        </nav> -->
        <!-- Top Sticky Nav 
        <nav class="full top-nav flex relative">
            <div class="container column-horizontal-pad flex relative">
                <div class=" full center relative text-logo"><img src="<?php echo $native_path ?>assets/logos/tg_studio_vertical_white.svg" alt="TG Studio logo"><span>Zelena Ličnost</span></div>
                <div class="center relative desktop-only">
                    <a href="#" class="center relative animate">
                        <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); 
                        ?>
                        <div class="full center-text">Unos</div>
                    </a>
                    <a href="#" class="center relative animate">
                        <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); 
                        ?>
                        <div class="full center-text">Dos</div>
                    </a>
                    <a href="#" class="center relative animate">
                        <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); 
                        ?>
                        <div class="full center-text">Tres</div>
                    </a>
                    <a href="#" class="center relative animate">
                        <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); 
                        ?>
                        <div class="full center-text">Quatro</div>
                    </a>
                </div>
            </div>
        </nav> -->
        <header class="full flex relative bg-color">
            <div class="container column-horizontal-pad flex relative">
                <h1 class="full center-text info-title">Zelena ličnost</h1>
            </div>
        </header>
        <!-- 6 Article Header -->
        <section class="full flex relative">
            <div class="container center relative article article-slider">
            <a class="fourth flex some-padding" href="https://www.telegram.hr/zivot/ako-nastavimo-ovim-tempom-do-2035-ce-s-debljinom-zivjeti-polovica-hrvata-vrijeme-je-za-promjene/" target="_blank">
                    <img class="column-bottom-margin long-img full" src="https://images.telegram.hr/hDmiyOaW-FFh4cXwppB1izqyzSaV_K0UUDB0A35iFus/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDUvc2h1dHRlcnN0b2NrLTEzNzI1ODE3NjcuanBn.jpg">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata. Vrijeme je za promjene</h3>
                        <p class="small-p">Jedna od stvari koju možemo poduzeti jest da djecu od malih nogu učimo o važnosti zdrave i uravnotežene prehrane</p>
                        <div class="full flex article-author">
                            <span class="bold">Piše</span><span>Doris Bučela</span>
                            <p class="date"> 31. 05. 2023</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/zivot/hrvatska-bi-ove-godine-mogla-postaviti-novi-rekord-po-broju-instaliranih-solarnih-elektrana-ustede-su-neupitne/" target="_blank">
                    <img class="column-bottom-margin long-img full" src="https://images.telegram.hr/tc2ZTjDgkLKGVlbk_Ipu-Wd6N0CuicRVOZGhUNU59yc/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDUvcHhsLTI2MDgyMi05NTMwNDE4NC5qcGc.jpg">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Hrvatska bi ove godine mogla postaviti novi rekord po broju instaliranih solarnih elektrana. Uštede su neupitne</h3>
                        <p class="small-p">Zelenom tranzicijom je smanjenje ugljičnog otiska zagarantirano</p>
                        <div class="full flex article-author">
                            <span class="bold">Piše</span><span>Ana Martinić</span>
                            <p class="date"> 02. 06. 2023</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/super1/look/mango-ima-novu-kolekciju-odrzivog-trapera-kombinezoni-izgledaju-odlicno/" target="_blank">
                    <img class="column-bottom-margin long-img full" src="https://images.telegram.hr/LV0Hyl1brrJDJbBF433QAxrMresVBREGmv1DSnwbicw/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzL3NpdGVzLzMvMjAyMi8wMi84Nzg3ODcuanBn.jpg">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Mango ima novu kolekciju održivog trapera. Kombinezoni izgledaju odlično</h3>
                        <p class="small-p">Traper ima održiva svojstva kao što su reciklirani pamuk i konoplja</p>
                        <div class="full flex article-author">
                            <span class="bold">Piše</span><span>Veronika Švob</span>
                            <p class="date"> 20. 02. 2022</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/super1/look/ekoloski-flasteri-od-bambusa-njeguju-rane-i-izgledaju-super-znamo-gdje-ih-kupiti/" target="_blank">
                    <img class="column-bottom-margin long-img full" src="https://images.telegram.hr/cIulPGIYumXxxyt4jd5BYtFVGoBbTUHnAU79-NOQIZc/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzL3NpdGVzLzMvMjAxOS8xMC9kaXZoYW92YXYuanBn.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Ekološki flasteri od bambusa njeguju rane i izgledaju super. Znamo gdje ih kupiti </h3>
                        <p class="small-p">Brend Patch u svojoj ponudi ima ekološke flastere za žuljeve, rane i porezotine</p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Veronika Švob</span>
                            <p class="date"> 14. 04. 2023</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/zivot/znanstvenici-otkrili-kako-reciklirano-zlato-iz-starih-sim-kartica-mogu-koristiti-u-farmaciji/" target="_blank">
                    <img class="column-bottom-margin long-img full" src="https://images.telegram.hr/EDOfW_Owm_Tucl4N-3kiFTbX7vdVwQ1vcV1qh6nyHc0/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMTkvMTAvR2V0dHlJbWFnZXMtMTE2NDg4NTQ5Ni5qcGc.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Znanstvenici otkrili kako reciklirano zlato iz starih SIM kartica mogu koristiti u farmaciji </h3>
                        <p class="small-p">Zlato reciklirano iz odbačene elektronike može djelovati kao katalizator </p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Eva Benedik</span>
                            <p class="date"> 14. 12. 2022</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/super1/power/pricu-oko-otpada-i-ekologije-ucinila-je-razumljivom-svima-vise-od-11-tisuca-ljudi-su-zbog-nje-bolji-gradani/" target="_blank">
                    <img class="column-bottom-margin long-img full" src="https://www.telegram.hr/wp-content/uploads/2023/04/super1-marinamatijevic-4.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Priču oko otpada i ekologije učinila je razumljivom svima. Više od 11 tisuća ljudi su zbog nje bolji građani </h3>
                        <p class="small-p">Na Instagram profilu @jaboljigradjanin prati je tek nešto manje od 12 tisuća ljudi</p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Ema Glavina</span>
                            <p class="date"> 26. 04. 2023</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <!-- Featured article -->
        <section class="full flex relative big-article-parent">
            <div class="container flex relative column-full-pad">
                <a class="full flex article featured-article stretch" href="https://www.telegram.hr/biznis-tech/apple-tvrdi-da-ce-do-2025-godine-u-baterijama-svih-svojih-uredaja-koristiti-reciklirani-kobalt/" target="_blank">
                    <div class="half flex flex-responsive">
                        <img class="full" src="https://images.telegram.hr/6LfeM61j3MybWWyh818l7a8FRoQzG-dX0clNInRwcoI/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDkvMDAwLTMyaHczNmwuanBn.jpg">
                    </div>
                    <div class="half center flex-responsive column-full-pad">
                        <div class="full flex relative">
                            <h2 class="full">Apple tvrdi da će do 2025. godine u baterijama svih svojih uređaja koristiti reciklirani kobalt</h2>
                            <p class="full">Uskoro će i drugi elementi, poput magneta, biti dobiveni reciklažom</p>
                            <div class="full flex article-author">
                                <!-- <img id = "plus-img" src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                                <span class="bold plus-font">Piše</span><span class="plus-font">Eva Benedik</span>
                                <p class="date plus-font"> 14. 04. 2023</p>
                            </div>
                            <div class="full flex stretch">
                                <div class="animate flex relative button-24">Vidi više</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <section class="full flex relative">
            <div class="container center relative article article-slider">
                <a class="fourth flex some-padding" href="https://www.telegram.hr/super1/life/drveno-posude-je-ekoloski-prihvatljivo-i-nevjerojatno-elegantno-znamo-gdje-nabaviti-najljepse/" target="_blank">
                    <img class="column-bottom-margin long-img full" src="https://images.telegram.hr/2j8sjrylINwBynxaxOLCI_adNuwM3MNre_SGSWAAbVw/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzL3NpdGVzLzMvMjAyMC8wMS8yMDE5XzFfN19uYXNsb3ZuYTIuanBn.jpg">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Drveno posuđe je ekološki prihvatljivo i nevjerojatno elegantno. Znamo gdje nabaviti najljepše</h3>
                        <p class="small-p"> Istražile smo ponudu internetskih trgovina</p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Ema Glavina</span>
                            <p class="date"> 08. 01. 2020</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/super1/look/ekoloska-osvijestenost-glavna-je-karakteristika-nove-amarie-kolekcije-izgleda-divno/" target="_blank">
                    <img class="column-bottom-margin long-img full" src="https://images.telegram.hr/ZdTJVJtnGar6yiUqZ1zbuF8Fezh0wyCDGRWlUaS7rbE/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzL3NpdGVzLzMvMjAyMC8wMy9BbWFyaWVTUzIwLjktc2NhbGVkLmpwZw.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Ekološka osviještenost glavna je karakteristika nove A'marie kolekcije. Izgleda divno</h3>
                        <p class="small-p">Anamarija Brkić predstavila je novu kolekciju za svoj brend A’Marie</p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Super1</span>
                            <p class="date"> 02. 03. 2020</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/super1/design/ovaj-bar-u-svicarskoj-ureden-je-reciklazom-starih-komada-namjestaja-ali-i-hrvatskim-dizajnom/" target="_blank">
                    <img class="column-bottom-margin long-img full" src="https://www.telegram.hr/wp-content/uploads/2023/01/image-1.png" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Ovaj bar u Švicarskoj uređen je hrvatskim dizajnom i reciklažom starih komada namještaja </h3>
                        <p class="small-p">Veliki dio namještaja potpisuje slavonski brend, a lampe su nastale u suradnji sa studijom iz Rijeke </p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Veronika Švob</span>
                            <p class="date"> 17. 01. 2023</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/biznis-tech/sto-kad-eu-naredi-da-kupujemo-nove-elektricne-aute-kina-ce-postati-lider-na-cestama-bismo-svi-mogli-imati-isti-problem/" target="_blank">
                    <img class="column-bottom-margin long-img" src="https://images.telegram.hr/x2QD5p9ME94Lpw5pH1s6xpMZnJWI1kujOq-vqq3TyqA/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDIvdGctbmFzbG92bmEtMjAyMy0wMi0xNi0wNC5qcGc.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Što kad EU naredi da kupujemo samo nove, električne aute? Kina će postati lider, na cestama ćemo svi imati isti problem</h3>
                        <p class="small-p">Europski parlament dao je proizvođačima još 12 godina da se preorijentiraju na proizvodnju električnih vozila</p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Marko Repecki</span>
                            <p class="date"> 17. 02. 2023</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <!-- Brojke -->
        <section class="full flex relative bg-color brojke">
            <div class="container flex relative column-vertical-pad">
                <div class="full column-horizontal-pad">
                    <h2 class="full center-text info-title">Brojke koje moraš znati</h2>
                </div>
                <div class="full flex sixths-parent gallery">
                    <div class="sixth flex">
                        <div class="full">
                            <h2 class = "smaller-font">2,12 tona</h2>
                            <p class = "column-bottom-margin">otpada proizvede se u svijetu svake godine</p>
                            <p class = "izvor italic">Izvor: The World Counts, <a class = "izvor" href="http://theworldcounts.com" target="_blank">http://theworldcounts.com</a></p>
                        </div>
                    </div>
                    <div class="sixth flex">
                        <div class="full">
                            <h2>553</h2>
                            <p class = "column-bottom-margin">čestice plastike unesemo u prosjeku u svoje tijelo svakog dana</p>
                            <p class = "izvor italic">Izvor: Mohamed et al. (2021). Environmental science & technology, 55(8), 5084-5096</p>
                        </div>
                    </div>
                    <div class="sixth flex">
                        <div class="full">
                            <h2>x35</h2>
                            <p class = "column-bottom-margin">bržu apsorpciju CO2 vrši morska trava nego tropske šume</p>
                            <p class = "izvor italic">Izvor: World Wildlife Foundation</p>
                        </div>
                    </div>
                    <div class="sixth flex">
                        <div class="full">
                            <h2>46%</h2>
                            <p class = "column-bottom-margin">šumske vegetacije uništeno je od početka ljudske civilizacije</p>
                            <p class = "izvor italic">Izvor: Crowther et al. (2015). Nature, 525(7568), 201–205.</p>
                        </div>
                    </div>
                    <div class="sixth flex">
                        <div class="full">
                            <h2>60%</h2>
                            <p class = "column-bottom-margin">mladih zabrinuto je zbog posljedica klimatskih promjena</p>
                            <p class = "izvor italic">Izvor: Hickman et al. (2021). The Lancet Planetary Health, 5(12), e863-e873.</p>
                        </div>
                    </div>
                    <div class="sixth flex">
                        <div class="full">
                            <h2>x2</h2>
                            <p class = "column-bottom-margin">više emisija CO2 uzrokuje modna industrija nego sav zračni i morski promet</p>
                            <p class = "izvor italic">Izvor: Fast fashion statistics, <a class = "izvor" href="http://Earth.org" target="_blank">http://Earth.org</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="full flex relative">
            <div class="container center relative article article-slider">
                <a class="fourth flex some-padding" href="https://www.telegram.hr/zivot/nova-studija-tvrdi-da-cemo-zbog-klimatskih-promjena-sve-manje-spavati/" target="_blank">
                    <img class="column-bottom-margin long-img" src="https://images.telegram.hr/4K47GsJxIk11yDWJQQH277Mkn23O391JO925yqttqQg/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjAvMTEvZ2V0dHlpbWFnZXMtOTc3NzYyODMwLmpwZw.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Nova studija tvrdi da ćemo zbog klimatskih promjena sve manje spavati</h3>
                        <p class="small-p">Znanstvenici procjenjuju da bi do 2099. godine više temperature mogle narušiti 50 do 58 sati sna po osobi, godišnje</p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Eva Benedik</span>
                            <p class="date"> 07. 06. 2022</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/politika-kriminal/kako-ce-klimatske-promjene-utjecati-na-jadransku-obalu-pa-hitno-bi-trebalo-zaustaviti-gradnju-u-prvom-redu-do-mora/" target="_blank">
                    <img class="column-bottom-margin long-img" src="https://images.telegram.hr/CrSkDEtwVRQbwcUkO24IrCIxt_KnaP-HhTxUinEUHig/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTAvcHhsLTE2MDYxNi0xMzE4NDI3Ny5qcGc.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Kako će klimatske promjene utjecati na jadransku obalu? Pa, hitno bi trebalo zaustaviti gradnju u prvom redu do mora</h3>
                        <p class="small-p">Ne bi trebalo graditi objekte tik uz more jer su oni prvi na udaru, rečeno je na konferenciji u Splitu</p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Hana Ivković Šimičić</span>
                            <p class="date"> 20. 10. 2022</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/zivot/uocena-jos-jedna-mucna-posljedica-klimatskih-promjena-turbulencije-na-letovima-postaju-sve-cesce-i-snaznije/" target="_blank">
                    <img class="column-bottom-margin long-img" src="https://images.telegram.hr/v3qeBxegWfXW4RMhfHskhYfqJiteqr-qR_4zZn54_1U/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDQvMS0xLnBuZw.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Uočena još jedna mučna posljedica klimatskih promjena: turbulencije na letovima postaju sve češće i snažnije</h3>
                        <p class="small-p">Profesor atmosferskih znanosti Paul T. Williams kaže da bi se one na srednjoj sjevernoj hemisferi mogle udvostručiti </p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Eva Benedik</span>
                            <p class="date"> 19. 04. 2023</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/zivot/zbog-otkrica-da-nas-pesticidi-truju-bila-je-na-udaru-mocnog-lobija-pa-natjerala-nixona-da-ih-zabrani-i-tako-inspirirala-modernu-ekologiju/" target="_blank">
                    <img class="column-bottom-margin long-img" src="https://images.telegram.hr/n9Dr879nmMhETE79sZQsuVDpMxoGtl3txpAX46oTeLA/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDcvcHJvZmltZWRpYS0wMzgzOTA4OTQ4LmpwZw.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Žena koja je inspirirala modernu ekologiju: otkrila da nas pesticidi truju, borila se protiv moćnih lobija, na kraju je poslušao i Nixon</h3>
                        <p class="small-p">Spisateljica i znanstvenica Rachel Carson objavila je pivotalno djelo o sintentičkim pesticidima koje je promijenilo svijet </p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Dino Staničić</span>
                            <p class="date"> 24. 07. 2022</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <!-- Solo article -->
        <section class="full flex relative big-article-parent">
            <div class="container flex relative column-full-pad">
                <a class="full flex relative article featured-article stretch" href="https://www.telegram.hr/politika-kriminal/sef-europske-sluzbe-za-klimatske-promjene-na-telegramu-da-ceka-nas-jos-ekstremnije-vrijeme/" target="_blank">
                    <div class="half flex flex-responsive">
                        <img class="full" src="https://images.telegram.hr/P5nPysThE6OQTZzUDibnJ_6p5yw2bFcosFzy1QgE03I/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDEvY2FybG8tc2ltb24tam9uZXMtZm9yLWVjbXdmLWNvcGVybmljdXMucG5n.jpg">
                    </div>
                    <div class="half center flex-responsive column-full-pad">
                        <div class="full flex relative">
                            <h2 class="full">Šef europske službe za klimatske promjene na Telegramu: 'Da, čeka nas još ekstremnije vrijeme'</h2>
                            <p class="full">Carlo Buontempo je direktor Copernicusa koji je upravo objavio alarmantne podatke. S njim razgovara Telegramova Irena Frlan Gašparović </p>
                            <div class="full flex article-author">
                                <!-- <img id = "plus-img" src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                                <!-- <span class="bold plus-font">Piše</span> -->
                                <span class="plus-font">Irena Frlan Gašparović</span>
                                <p class="date plus-font"> 16. 01. 2022</p>
                            </div>
                            <div class="full flex stretch">
                                <div class="animate flex relative button-24">Vidi više</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <section class="full flex relative">
            <div class="container center relative article article-slider">
                <a class="fourth flex some-padding" href="https://www.telegram.hr/super1/look/gdje-pronaci-savrsen-par-odrzivih-traperica-ovi-brendovi-rade-najbolje-na-svijetu/" target="_blank">
                    <img class="column-bottom-margin long-img full" src="https://images.telegram.hr/Uz7askqta5gznvCR5PF4nj1M9ErL8gLiwjNtbZxBd60/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDQvc2V6YW5lLnBuZw.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Gdje pronaći savršen par održivih traperica? Ovi brendovi rade najbolje na svijetu</h3>
                        <p class="small-p">Za ove brendove možda još niste čuli, ali rade neke od najboljih traperica na svijetu i održivi su</p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Nives Bošnjak</span>
                            <p class="date"> 22. 04. 2023</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/super1/u-zagrebu-za-vikend-mozete-po-odlicne-rabljene-dizajnerske-komade-evo-gdje-u-drugaciji-shopping/" target="_blank">
                    <img class="column-bottom-margin long-img full" src="https://images.telegram.hr/kN_OBkRgsydwE24xa_f1d6viM5mRVzs-AzbCmgK1LOg/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDMvODgucG5n.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">U Zagrebu za vikend možete po odlične rabljene dizajnerske komade. Evo gdje u drugačiji shopping</h3>
                        <p class="small-p">Ovaj vikend nas u gradu čeka i jedan dizajnerski second hand pop-u</p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Nives Bošnjak</span>
                            <p class="date"> 30. 03. 2023</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/zivot/u-puli-koze-rade-na-recikliranju-bozicnih-drvaca-pravi-su-hit-brste-ih-kao-sumanute/" target="_blank">
                    <img class="column-bottom-margin long-img" src="https://images.telegram.hr/GcPrOezEa3rTdbMJckmQ_i1pg4KYLyvQV3sSw6RQve8/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDEvcHhsLTE0MDUyMi05MzQ1MTg4NC5qcGc.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">U Puli koze rade na recikliranju božićnih drvaca. Pravi su hit, brste ih kao sumanute </h3>
                        <p class="small-p">Iz gradske komunalne tvrtke kažu da koze uživaju u aromatičnom okusu zelenih iglica</p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Telegram i Hina</span>
                            <p class="date"> 12. 01. 2023</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/super1/life/ona-je-marketingasica-koja-se-zaljubila-u-macrame-tehniku-danas-ima-svoj-brend-rucno-radenih-proizvoda/" target="_blank">
                    <img class="column-bottom-margin long-img" src="https://images.telegram.hr/IX7wSABNsG13jmMVqujRcaHtxiyOFFRD0nA5L8tKnL4/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzL3NpdGVzLzMvMjAyMi8wNy9iZXotaW1lbmEyLmpwZw.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Ovaj hrvatski brend ima krasne ručno rađene proizvode izvedene u macrame tehnici. Baš su posebni</h3>
                        <p class="small-p"> Iza hrvatskog brenda Bohica stoji Jelena Tenčić koja se svakim novim čvorom iznova zaljubi u macrame</p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Latica Martinis Filković</span>
                            <p class="date"> 11. 07. 2022</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <!-- KVIZ -->
        <section class="full flex relative bg-color column-full-pad quiz-section">
            <div class="full flex">
                <div class="container flex relative">
                    <h2 class="full center-text info-title">Testiraj svoje znanje</h2>
                </div>
            </div>
            <div class="full center flex-responsive">
                <div class="half center flex-responsive">
                    <div class="quiz-container relative">
                        <!-- Slide 1 -->
                        <div data-slide="1" class="slide flex slide-1 active">
                            <h3 class="question">
                            Potražnja za solarnom energijom u Hrvatskoj je unatrag godinu dana porasla za 300 posto. Na distribucijsku mrežu su priključene:
                            </h3>
                            <div class="answers flex">
                                <div class="answer animate" data-track="1">
                                    <h4 class="answer-text">
                                    9.053 sunčane elektrane
                                    </h4>
                                </div>
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    8.632 sunčane elektrane
                                    </h4>
                                </div>
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    10.693 sunčane elektrane
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div data-slide="2" class="slide flex slide-2">
                            <h3 class="question">
                                Jedna europska država ima plan do 2025. postati ugljično neutralna u pogledu automobila. Lani je imala udio novokupljenih električnih automobila od gotovo 90 posto. Riječ je o:
                            </h3>
                            <div class="answers flex">
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    Španjolskoj
                                    </h4>
                                </div>
                                <div class="answer animate" data-track="1">
                                    <h4 class="answer-text">
                                    Norveškoj
                                    </h4>
                                </div>
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    Švicarskoj
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div data-slide="3" class="slide flex slide-3">
                            <h3 class="question">
                            U Europi prosječno se proizvede 486 kilograma komunalnog otpada po glavi stanovnika u godini dana. Najmanje otpada reciklira Srbija – tek jedan posto, a najvišu stopu recikliranja od skoro 70 posto ima:
                            </h3>
                            <div class="answers flex">
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    Slovenija
                                    </h4>
                                </div>
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    Estonija
                                    </h4>
                                </div>
                                <div class="answer animate" data-track="1">
                                    <h4 class="answer-text">
                                    Njemačka
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div data-slide="4" class="slide flex slide-4">
                            <h3 class="question">
                            Hrvati čuvaju pet milijuna starih mobitela po ladicama, a mogli bi ih reciklirati jer sadrže vrijedne sirovine. Koliko posto materijala u mobilnim telefonima se može reciklirati?
                            </h3>
                            <div class="answers flex">
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    100 %
                                    </h4>
                                </div>
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    90 %
                                    </h4>
                                </div>
                                <div class="answer animate" data-track="1">
                                    <h4 class="answer-text">
                                    80 %
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div data-slide="5" class="slide flex slide-5">
                            <h3 class="question">
                            Ulaganje u održivost u sportskoj industriji jedna je od tema o kojoj se često raspravlja u javnom prostoru. Naime, brojke pokazuju da su Olimpijske igre u Riju 2016. godine proizvele 4,5 milijuna tona CO2, dok je Svjetsko prvenstvo u nogometu u Kataru 2022. godine proizvelo:
                            </h3>
                            <div class="answers flex">
                                <div class="answer animate" data-track="1">
                                    <h4 class="answer-text">
                                    3,6 milijuna tona
                                    </h4>
                                </div>
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    5,5 milijuna tona
                                    </h4>
                                </div>
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    6,2 milijuna tona
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div data-slide="6" class="slide flex slide-6">
                            <h3 class="question">
                            Modna industrija je jedan od najvećih zagađivača okoliša. Proizvodnja tekstila odgovorna je za oko 20% globalnog onečišćenja čiste vode i 10% emisija ugljika godišnje. Zato se potražnja za održivim komadima u Hrvatskoj lani u odnosnu na godinu prije povećala za:
                            </h3>
                            <div class="answers flex">
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    37 %
                                    </h4>
                                </div>
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    50 %
                                    </h4>
                                </div>
                                <div class="answer animate" data-track="1">
                                    <h4 class="answer-text">
                                    94 %
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div data-slide="7" class="slide flex slide-7">
                            <h3 class="question">
                            Europska unija se Pariškim sporazumom do 2030. godine obvezala smanjiti emisije stakleničkih plinova za najmanje 55 % i da se globalno zagrijavanje ograniči na 1,5 stupnjeva. Među državama koje provode najkorisnije mjere za ostvarivanje ciljeva su:
                            </h3>
                            <div class="answers flex">
                                <div class="answer animate" data-track="1">
                                    <h4 class="answer-text">
                                    Hrvatska i Cipar
                                    </h4>
                                </div>
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    Estonija i Latvija
                                    </h4>
                                </div>
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    Luksemburg i Belgija
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div data-slide="8" class="slide flex slide-8">
                            <h3 class="question">
                            Osam zemalja svijeta je dosad postiglo nultu emisiju stakleničkih plinova. To su Butan, Madagaskar, Komori, Gabon, Gvajana, Niue, Surinam i:
                            </h3>
                            <div class="answers flex">
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    Monako
                                    </h4>
                                </div>
                                <div class="answer animate" data-track="1">
                                    <h4 class="answer-text">
                                    Panama
                                    </h4>
                                </div>
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    Tuvalu
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div data-slide="9" class="slide flex slide-9">
                            <h3 class="question">
                            Učenje o održivosti se pokušava sve više implementirati u sustav obrazovanja. Prva zemlja u Europi koja je u klimatsku krizu uključila u školski kurikulum 2019. godine bila je:
                            </h3>
                            <div class="answers flex">
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    Njemačka
                                    </h4>
                                </div>
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    Francuska
                                    </h4>
                                </div>
                                <div class="answer animate" data-track="1">
                                    <h4 class="answer-text">
                                    Italija 
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div data-slide="10" class="slide flex slide-10">
                            <h3 class="question">
                            Dan planeta Zemlje se u svijetu obilježava 22. travnja, službeno od 1992. godine. Mi smo ga počeli organizirano obilježavati:
                            </h3>
                            <div class="answers flex">
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    2000. godine
                                    </h4>
                                </div>
                                <div class="answer animate">
                                    <h4 class="answer-text">
                                    1995. godine
                                    </h4>
                                </div>
                                <div class="answer animate" data-track="1">
                                    <h4 class="answer-text">
                                    1990. godine
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div data-slide="11" class="slide flex slide-11 result">
                            <h3 class="question">
                                <span>Rezultat</span>
                            </h3>
                            <p class="description">
                                Ovaj tekst trebao bi zamijeniti tvoj rezultat. Ako vidiš ovu poruku, naša stranica ne radi kako treba. :(
                            </p>
                            <div class="answers column-top-pad flex">
                                <div class="animate animate answer-yes restart">
                                    <h4 class="answer-text">
                                        Restart
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar flex">
                            <div class="animate progress-indicator"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- LAST 4 -->
        <section class="full flex relative">
            <div class="container center relative article article-slider">
                <a class="fourth flex some-padding" href="https://www.telegram.hr/super1/look/umjetnica-andrea-resner-upustila-se-u-novi-projekt-i-pokrenula-modni-brend-ispricala-nam-je-sve-o-tome/" target="_blank">
                    <img class="column-bottom-margin long-img full" src="https://images.telegram.hr/jcWKlJ2h1fzJAFOYSCIW2LVJbqvu7gPsxZEff1EU7oc/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDMvczEtbmFzbG92bmEtMjAyMy0wMy0yNC0wMS5qcGc.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Umjetnica Andrea Resner upustila se u novi projekt i pokrenula modni brend. Ispričala nam je sve o tome</h3>
                        <p class="small-p">Resner znamo kao multimedijalnu umjetnicu, a iako već dugo samostalno šiva i izrađuje odjeću, ovo joj je prvi eksperiment s modnim brendom </p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Nives Bošnjak</span>
                            <p class="date"> 24. 03. 2023</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/super1/look/nova-kolekcija-odrzivih-tenisica-miret-podsjeca-na-vaznost-bioraznolikosti/" target="_blank">
                    <img class="column-bottom-margin long-img full" src="https://images.telegram.hr/VwHOsQEtXjW7SqIF0Co5KHyLPQVpDS0YmtiIwbzSo4Q/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzL3NpdGVzLzMvMjAyMi8wNS9taXJldC1hZ2F2ZS1iYWNrLXVwMDMuanBn.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Nova kolekcija održivih tenisica Miret podsjeća na važnost bioraznolikosti</h3>
                        <p class="small-p">Hrvatski brend u ponudi ima dva nova modela koji su stalni podsjetnici na to da prirodu treba čuvati </p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Nives Bošnjak</span>
                            <p class="date"> 20. 05. 2022</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/super1/life/vegetarijanci-i-vegani-koje-su-glavne-razlike-i-slicnosti-u-stilu-prehrane/" target="_blank">
                    <img class="column-bottom-margin long-img full" src="https://images.telegram.hr/n9jVAr0Fzybzg_zxHPo-rQsumgPQsCKQJfSxdMQKLcU/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTIvcmF6bGlrYS1pem1lZHUtdmVnYW5za2UtaS12ZWdldGFyaWphbnNrZS1wcmVocmFuZS5qcGc.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Vegetarijanci i vegani: Koje su glavne razlike i sličnosti u stilu prehrane?</h3>
                        <p class="small-p">Razmišljate o promjeni stila prehrane? Pročitajte koje su glavne razlike između vegetarijanske i veganske prehrane, i na koji način pozitivno mogu utjecati na ukupno zdravlje </p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Super1</span>
                            <p class="date"> 10. 12. 2022</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
                <a class="fourth flex some-padding" href="https://www.telegram.hr/super1/look/odjeca-postaje-ozbiljan-ekoloski-problem-imamo-nekoliko-savjeta-kako-joj-produljiti-vijek/" target="_blank">
                    <img class="column-bottom-margin long-img full" src="https://images.telegram.hr/jplFEz1ukKXWAkYfmBjMJJQ6LDMAHUbZ73ktkW125vo/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzL3NpdGVzLzMvMjAyMS8wNi9qdW5rby1uYWthc2UtcS03MndhOS03ZGctdW5zcGxhc2gtc2NhbGVkLWUxNjIzNDE0MTc0MzY3LmpwZw.jpg" aria-hidden="true">
                    <div class="full column-horizontal-pad">
                        <h3 class="full">Odjeća postaje ozbiljan ekološki problem. Imamo nekoliko savjeta kako joj produljiti vijek </h3>
                        <p class="small-p">Mnogo je načina na koje čuvamo okoliš, a briga o odjeći samo je jedan od njih </p>
                        <div class="full flex article-author">
                            <!-- <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"> -->
                            <span class="bold">Piše</span><span>Super1</span>
                            <p class="date"> 16. 07. 2021</p>
                        </div>
                        <div class="full flex stretch column-bottom-pad">
                            <div class="animate flex relative button-24">Vidi više</div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <!-- Footer -->
        <footer class="full flex relative">
            <div class="container text-container flex relative column-full-pad">
                <div class="full center logo-line">
                    <img src="<?php echo $native_path ?>assets/logos/K-Logo_CSR_MMDU_rot_HR.svg" alt="Kaufland logo" />
                    <img src="<?php echo $native_path ?>assets/logos/enna_energija_naturalis-logo.svg" alt="ENNA Energija Naturalis logo" />
                    <img src="<?php echo $native_path ?>assets/logos/Hrvatska_posta_paket_24-logo.svg" alt="Hrvatska Pošta Paket 24logo" />
                    <img src="<?php echo $native_path ?>assets/logos/HGK_plavi-logo.svg" alt="Hrvatska Gospodarska Komora logo" />
                    <img src="<?php echo $native_path ?>assets/logos/answear.png" alt="Answear logo" />
                    <img src="<?php echo $native_path ?>assets/logos/tg_studio_horizontal_color.png" alt="TG Studio logo" />
                </div>
                <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerima i po najvišim uredničkim standardima Telegram Media Grupe.</p>
            </div>
        </footer>
        <?php wp_footer(); 
        ?>
    </div>
</body>

</html>