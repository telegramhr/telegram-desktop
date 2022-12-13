<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/vichy/ljeto/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Slick -->
    <script src="<?php echo $native_path ?>slick/slick.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>slick/slick.css"/>
    <link rel="stylesheet" href="<?php echo $native_path ?>slick/slick-theme.css"/>
    <script src="<?php echo $native_path ?>functions.js"></script>
    <script src="<?php echo $native_path ?>slider.js?ver=2.0"></script>
    <link href="https://fonts.googleapis.com/css?family=Barlow:400,700|Lora:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>
<div class="main-container flex">
    <div class="native-hero full flex relative">
        <a href="https://super1.telegram.hr/" class="header-logos center full">
            <img src="<?php echo $native_path ?>img/super1_logo_white.svg" alt="Super1 Logo">
        </a>
        <img src="<?php echo $native_path ?>img/vichy_header_alt.jpg" class="native-hero-background">
        <img class="native-hero-logo" src="<?php echo $native_path ?>img/vichy_ljeto_logo.svg" alt="Moje najbolje ljeto u Hrvatskoj">
        <h1 class="full hide">Moje najbolje ljeto u Hrvatskoj</h1>
        <h2 class="full hide">Izazovi sebe, uživaj kao nikada do sada</h2>
        <div class="scroll-down-prompt shadow-me"><i class="fa animate fa-angle-down"></i></div>
        <div class="header-partner-logos center full">
            <img src="<?php echo $native_path ?>img/vichy.svg?ver=1.2" alt="Vichy logo" />
            <img src="<?php echo $native_path ?>img/lrp.svg" alt="La Roche-Posay logo" />
        </div>
    </div>
    <div class="full white-slider-girl slider-girls">
        <article class="whiteText container whiteSpace2x">
            <div class="full center"><h3 class="overtitle">Ljetni raspored</h3></div>
            <h2 class="center-text">Tri influencerice, tri regije, tri genijalna ljetna plana</h2>
            <div class="full story-day center"><div class="story-day-line"></div><h4><b>Alex Milinković:</b> Moj savršen ljetni dan u <b>Zagrebu</b></h4></div>
            <div class="flex zg-alex stretch">
                <div class="half">
                    <div class="drawingContainer">
                        <img src="<?php echo $native_path ?>img/sunce.svg" alt="Sunce" class="normal sunce">
                        <img src="<?php echo $native_path ?>img/gradic_zg_alex_m.png" alt="Gradić" class="normal gradic">
                    </div>
                    <div class="center">
                        <div class="sliderInput fillCircle circle-1" circle-id="1"></div>
                        <div class="sliderInput circle-2" circle-id="2"></div>
                        <div class="sliderInput circle-3" circle-id="3"></div>
                        <div class="sliderInput circle-4" circle-id="4"></div>
                        <div class="sliderInput circle-5" circle-id="5"></div>
                        <div class="sliderInput circle-6" circle-id="6"></div>
                        <div class="sliderInput circle-7" circle-id="7"></div>
                        <div class="sliderInput circle-8" circle-id="8"></div>
                    </div>
                </div>
                <div class="half sliderText center center-text">
                    <div class="0700">
                        <h4>08:00</h4>
                        <p>Probudim se i doručkujem.</p>
                    </div>
                    <div class="0710 hide">
                        <h4>08:15</h4>
                        <p>Surfam po portalima i Instagramu.</p>
                    </div>
                    <div class="0711 hide">
                        <h4>08:30</h4>
                        <p>Pripremam laganu salatu za ručak.</p>
                    </div>
                    <div class="0730 hide">
                        <h4>08:50</h4>
                        <p>Vrijeme je za <a class="bold" href="https://www.laroche-posay.com.hr/proizvodi-tretmani/Anthelios/ANTHELIOS-PIGMENTATION-Obojena-krema-za-lice-za-zastitu-od-pigmentacija-nastalih-izlaganjem-suncu-p24469.aspx?utm_source=&utm_medium=website_partnership&utm_content=lrp_sksu_anthelios_nativedisplay_aw&utm_campaign=lrp_sksu_anthelios_promotion_super1-lrp-and-vichy" target="_blank">La Roche-Posay Anthelios Pigmentation Obojenu kremu</a> za lice za zaštitu od pigmentacijskih mrlja koje zadaju muke već s prvim zrakama sunca.</p>
                    </div>
                    <div class="1238 hide">
                        <h4>09:00</h4>
                        <p>Krećem na posao.</p>
                    </div>
                    <div class="1700 hide">
                        <h4>17:00</h4>
                        <p>Vrijeme je za <a class="bold" href="https://www.vichy.hr/sunce/dry-touch-finish-za-lice-spf-50-capital-soleil/p3015.aspx?utm_source=&utm_medium=website_partnership&utm_content=vic_sksu_capital-soleil_nativedisplay_aw&utm_campaign=vic_sksu_capital%20soleil_promotion_super1-lrp-and-vichy" target="_blank">Vichy CAPITAL SOLEIL Dry touch finish</a> za lice SPF 50+</p>
                    </div>
                    <div class="1830 hide">
                        <h4>17:15</h4>
                        <p>Kavica s prijateljicama u gradu.</p>
                    </div>
                    <div class="2000 hide">
                        <h4>20:30</h4>
                        <p>Kad malo zahladi odradim trening.</p>
                    </div>
                </div>
                <div class="full flex center"><div class="mini-articles flex"><img src="<?php echo $native_path ?>img/rezultat3_2.jpg" aria-hidden="true"><img src="<?php echo $native_path ?>img/extra_1.jpg" aria-hidden="true"></div></div>
                <div class="full flex center"><a target="_blank" href="https://super1.telegram.hr/relax/radijska-voditeljica-alex-yutuberica-lorin-i-trenerica-marijana-o-planovima-za-ljeto-mogle-bi-vas-inspirirati/" class="cta animate"><i class="fa animate fa-angle-right"></i>Pročitaj više</a></div>
            </div>
        <div class="story-day center"><div class="story-day-line"></div><h4><b>Lorin Nukić:</b> Moj savršen ljetni dan u <b>Osijeku</b></h4></div>
            <div class="flex os-lorin stretch">
                <div class="half sliderText center center-text">
                    <div class="0700">
                        <h4>07:00</h4>
                        <p>Buđenje.</p>
                    </div>
                    <div class="0710 hide">
                        <h4>11:45</h4>
                        <p>Vrijeme je za <a class="bold" href="https://www.vichy.hr/sunce/barsunasta-krema-za-ljepsi-izgled-koze-spf-50-capital-soleil/p8698.aspx?utm_source=&utm_medium=website_partnership&utm_content=vic_sksu_capital-soleil_nativedisplay_aw&utm_campaign=vic_sksu_capital%20soleil_promotion_super1-lrp-and-vichy" target="_blank">VICHY CAPITAL SOLEIL baršunastu kremu</a> za ljepši izgled kože SPF 50.</p>
                    </div>
                    <div class="0711 hide">
                        <h4>12:00</h4>
                        <p>Kava na Promenadi.</p>
                    </div>
                    <div class="0730 hide">
                        <h4>16:00</h4>
                        <p>Vrijeme je za <a class="bold" href="https://www.laroche-posay.com.hr/proizvodi-tretmani/Anthelios/ANTHELIOS-NEVIDLJIVI-SPREJ-SPF50-p27026.aspx?utm_source=&utm_medium=website_partnership&utm_content=lrp_sksu_anthelios_nativedisplay_aw&utm_campaign=lrp_sksu_anthelios_promotion_super1-lrp-and-vichy" target="_blank">La Roche-Posay Anthelios Shaka nevidljivi sprej za tijelo</a> SPF 50 koji ne ostavlja tragove, a otporan je na vodu</p>
                    </div>
                    <div class="1238 hide">
                        <h4>16:15</h4>
                        <p>Kupanje na Dravi.</p>
                    </div>

                    <div class="1700 hide">
                        <h4>18:30</h4>
                        <p>Rana večera kod prijateljice.</p>
                    </div>
                    <div class="1830 hide">
                        <h4>20:30</h4>
                        <p>Piće s curama u Tvrđi</p>
                    </div>
                </div>
                <div class="half">
                    <div class="drawingContainer">
                        
                        <img src="<?php echo $native_path ?>img/sunce.svg" alt="Sunce" class="normal sunce">
                        <img src="<?php echo $native_path ?>img/gradic_os_lorin.png" alt="Gradić" class="normal gradic">
                    </div>
                    <div class="center">
                        <div class="sliderInput fillCircle circle-1" circle-id="1"></div>
                        <div class="sliderInput circle-2" circle-id="2"></div>
                        <div class="sliderInput circle-3" circle-id="3"></div>
                        <div class="sliderInput circle-4" circle-id="4"></div>
                        <div class="sliderInput circle-5" circle-id="5"></div>
                        <div class="sliderInput circle-6" circle-id="6"></div>
                        <div class="sliderInput circle-7" circle-id="7"></div>
                    </div>
                </div>
                <div class="full flex center"><div class="mini-articles flex"><img src="<?php echo $native_path ?>img/extra_5.jpg" aria-hidden="true"><img src="<?php echo $native_path ?>img/extra_1.jpg" aria-hidden="true"></div></div>
                <div class="full flex center"><a target="_blank" href="https://super1.telegram.hr/relax/radijska-voditeljica-alex-yutuberica-lorin-i-trenerica-marijana-o-planovima-za-ljeto-mogle-bi-vas-inspirirati/" class="cta animate"><i class="fa animate fa-angle-right"></i>Pročitaj više</a></div>
            </div>
        <div class="story-day center"><div class="story-day-line"></div><h4><b>Marijana Pašalić:</b> Moj savršen ljetni dan u <b>Splitu</b></h4></div>
            <div class="flex st-pasalic stretch">
                <div class="half">
                    <div class="drawingContainer">
                        
                        <img src="<?php echo $native_path ?>img/sunce.svg" alt="Sunce" class="normal sunce">
                        <img src="<?php echo $native_path ?>img/gradic_st_pasalic.png" alt="Gradić" class="normal gradic">
                    </div>
                    <div class="center">
                        <div class="sliderInput fillCircle circle-1" circle-id="1"></div>
                        <div class="sliderInput circle-2" circle-id="2"></div>
                        <div class="sliderInput circle-3" circle-id="3"></div>
                        <div class="sliderInput circle-4" circle-id="4"></div>
                        <div class="sliderInput circle-5" circle-id="5"></div>
                        <div class="sliderInput circle-6" circle-id="6"></div>
                        <div class="sliderInput circle-7" circle-id="7"></div>
                    </div>
                </div>
                <div class="half sliderText center-text center">
                    <div class="0700">
                        <h4>07:30</h4>
                        <p>Omiljeni doručak: omlet i kavica.</p>
                    </div>
                    <div class="0710 hide">
                        <h4>08:15</h4>
                        <p>Vrijeme je za zaštitu na plaži i za <a class="bold" href="https://www.vichy.hr/sunce/vodica-za-zastitu-od-sunca-spf-30-s-antioksidacijskim-djelovanjem-capital-soleil/p27644.aspx?utm_source=&utm_medium=website_partnership&utm_content=vic_sksu_capital-soleil_nativedisplay_aw&utm_campaign=vic_sksu_capital%20soleil_promotion_super1-lrp-and-vichy" target="_blank">Vichy Capital Soleil Vodicu za zaštitu od sunca</a> SPF 30 s antioksidacijskim djelovanjem.</p>
                    </div>
                    <div class="0711 hide">
                        <h4>08:30</h4>
                        <p>Omiljena plaža, osama, bistro more i kupanje.</p>
                    </div>
                    <div class="0730 hide">
                        <h4>13:00</h4>
                        <p>Odmor u hladovini.</p>
                    </div>
                    <div class="1238 hide">
                        <h4>15:15</h4>
                        <p>Vrijeme je za <a class="bold" href="https://www.laroche-posay.com.hr/proizvodi-tretmani/Anthelios/Anthelios-Shaka-fluid-SPF50-p25684.aspx?utm_source=&utm_medium=website_partnership&utm_content=lrp_sksu_anthelios_nativedisplay_aw&utm_campaign=lrp_sksu_anthelios_promotion_super1-lrp-and-vichy" target="_blank">La Roche-Posay Anthelios Shaka Fluid</a>, laganu teksturu i vrlo visoku zaštitu za lice</p>
                    </div>
                    <div class="1700 hide">
                        <h4>15:30</h4>
                        <p>Supom po kavicu i nastavak uživancije na moru.</p>
                    </div>
                    <div class="1830 hide">
                        <h4>22:00</h4>
                        <p>Glazba uživo i ples do ponoći</p>
                    </div>
                </div>
                <div class="full flex center"><div class="mini-articles flex"><img src="<?php echo $native_path ?>img/rezultat1.jpg" aria-hidden="true"><img src="<?php echo $native_path ?>img/extra_6.jpg" aria-hidden="true"></div></div>
                <div class="full flex center"><a target="_blank" href="https://super1.telegram.hr/relax/radijska-voditeljica-alex-yutuberica-lorin-i-trenerica-marijana-o-planovima-za-ljeto-mogle-bi-vas-inspirirati/" class="cta animate"><i class="fa animate fa-angle-right"></i>Pročitaj više</a></div>
            </div>
        </article>
    </div>
    <?php include(get_stylesheet_directory() . '/templates/native/vichy/ljeto/test.php'); ?>
    <div class="full">
        <div class="container">
            <div class="full center"><h3 class="overtitle">Ideje</h3></div>
            <h2 class="center-text">7 aktivnosti za savršeno ljeto u Hrvatskoj</h2>
            <div class="slick">
                <div>
                    <a class="center" href="https://super1.telegram.hr/relax/napravile-smo-vodic-ljetne-zabave-za-cijelu-obitelj-sedam-dana-u-tjednu-sedam-super-aktivnosti/" target="_blank"><img src="<?php echo $native_path ?>img/slide1.jpg"><span>Na valu surfanja</span></a>
                </div>
                <div>
                    <a class="center" href="https://super1.telegram.hr/relax/napravile-smo-vodic-ljetne-zabave-za-cijelu-obitelj-sedam-dana-u-tjednu-sedam-super-aktivnosti/" target="_blank"><img src="<?php echo $native_path ?>img/slide2.jpg"><span>Dobar plan trčanja</span></a>
                </div>
                <div>
                    <a class="center" href="https://super1.telegram.hr/relax/napravile-smo-vodic-ljetne-zabave-za-cijelu-obitelj-sedam-dana-u-tjednu-sedam-super-aktivnosti/" target="_blank"><img src="<?php echo $native_path ?>img/slide3.jpg"><span>Naučite jedriti</span></a>
                </div>
                <div>
                    <a class="center" href="https://super1.telegram.hr/relax/napravile-smo-vodic-ljetne-zabave-za-cijelu-obitelj-sedam-dana-u-tjednu-sedam-super-aktivnosti/" target="_blank"><img src="<?php echo $native_path ?>img/slide4.jpg"><span>Pogled s visina</span></a>
                </div>
                <div>
                    <a class="center" href="https://super1.telegram.hr/relax/napravile-smo-vodic-ljetne-zabave-za-cijelu-obitelj-sedam-dana-u-tjednu-sedam-super-aktivnosti/" target="_blank"><img src="<?php echo $native_path ?>img/slide5.jpg"><span>Adrenalinski provod s klincima</span></a>
                </div>
                <div>
                    <a class="center" href="https://super1.telegram.hr/relax/napravile-smo-vodic-ljetne-zabave-za-cijelu-obitelj-sedam-dana-u-tjednu-sedam-super-aktivnosti/" target="_blank"><img src="<?php echo $native_path ?>img/slide6.jpg"><span>Hedonizam na najjače</span></a>
                </div>
                <div>
                    <a class="center" href="https://super1.telegram.hr/relax/napravile-smo-vodic-ljetne-zabave-za-cijelu-obitelj-sedam-dana-u-tjednu-sedam-super-aktivnosti/" target="_blank"><img src="<?php echo $native_path ?>img/slide7.jpg"><span>Festivali i događanja</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="full mainColor">
        <div class="whiteText container whiteSpace2x">
            <div class="full center"><h3 class="overtitle">Infografika</h3></div>
            <h2 class="center-text">5 dobrih načina za uživanje na suncu</h2>
            <video preload="auto" autoplay="" muted="" loop="" class="infografika" src="<?php echo $native_path ?>img/vichy_ljeto_infografika.mp4?ver=1.4" type="video/mp4" aria-hidden="true" ></video>
        </div>
    </div>
    <div class="full">
        <a class="container flex stretch" href="https://super1.telegram.hr/relax/ljetovanje-s-djecom-moze-biti-poprilicno-uzbudljivo-pitale-smo-poznate-mame-kamo-ce-na-godisnji-sa-svojim-malisanima/" target="_blank">
            <div class="half">
                <img src="<?php echo $native_path ?>img/zene_koje_putuju.jpg" aria-hidden="true">
            </div>
            <div class="half desktop-pad-left center">
                <div class="full flex">
                    <div class="full flex"><h3 class="overtitle">Zvijezde</h3></div>
                    <h3 class="article-title">A kamo će poznati na odmor? Pitali smo tri poznate mame kakav odmor planiraju s djecom</h3>
                    <p>Ana Maras Harmander, Sandra Bagarić i Bojana Gregorić Vejzović otkrivaju nam gdje će na ljetovanje</p>
                    <div class="full flex"><div class="cta animate"><i class="fa animate fa-angle-right"></i>Pročitaj više</div></div>
                </div>
            </div>
        </a>
    </div>
    <section class="full native-signature">
        <div class="container flex">
            <div class="full center">
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
                <img class="partner" src="<?php echo $native_path ?>img/vichy.svg?ver=1.2" alt="Vichy logo" />
                <img class="partner" src="<?php echo $native_path ?>img/lrp.svg" alt="La Roche-Posay logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerima Vichy i La Roche-Posay i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </section>
</div>

<?php wp_footer(); ?>
</body>

</html>