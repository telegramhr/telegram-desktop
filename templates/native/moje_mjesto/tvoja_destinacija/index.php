<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = get_stylesheet_directory_uri() . '/templates/native/moje_mjesto/tvoja_destinacija/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/moje_mjesto/tvoja_destinacija/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/moje_mjesto/tvoja_destinacija/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/moje_mjesto/tvoja_destinacija/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>img/aos.css?ver=1.0" type="text/css" />
    <link rel="stylesheet" href="https://use.typekit.net/yjw4lwh.css">
    <script src="<?php echo $native_path ?>img/aos.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=2.0" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=5.7" type="text/css" />
    <script src="<?php echo $native_path ?>jquery.serialize-object.min.js"></script>
    <script src="<?php echo $native_path ?>functions.js"></script>
</head>
<div class="main-container flex relative">
    <header class="native-hero episode-overlay full flex relative center">
        <video src="<?php echo $native_path ?>img/tg_videobg_dubrovnik.mp4" autoplay loop muted playsinline class="background-video"></video>
        <a href="https://telegram.hr/" class="hero-logo mobile-only center full">
                <img src="<?php echo $native_path ?>img/telegram_logo_white.svg" alt="Telegram Logo">
        </a>
        <div class="full native-title center">
            <h1>
                <div class="flex" data-aos="fade-left">Moje mjesto, </div>
                <div class="flex" data-aos="fade-right" data-aos-delay="1000">tvoja destinacija</div>
            </h1>
        </div>
        <a href="#o-projektu" class="mobile-only header-btn insite-btn">O projektu</a>
        <div class="flex hero-left center">
            <a href="https://telegram.hr/" class="hero-logo center full">
                <img src="<?php echo $native_path ?>img/telegram_logo_white.svg" alt="Telegram Logo">
            </a>
            <nav class="full flex">
                <a class="full flex" href="#o-projektu">O projektu</a>
                <a class="full flex" href="#buzet">Buzet</a>
                <a class="full flex" href="#vodnjan">Vodnjan</a>
                <a class="full flex" href="#losinj">Mali Lošinj</a>
                <a class="full flex" href="#brtonigla">Brtonigla</a>
                <a class="full flex" href="#pula">Pula</a>
                <a class="full flex" href="#varazdin">Varaždin</a>
                <a class="full flex" href="#avanture">Avanture</a>
                <a class="full flex" href="#dubrovnik">Dubrovnik</a>
                <a class="full flex" href="#sibenik">Šibenik</a>
                <a class="full flex" href="#zadar">Zadar</a>
                <a class="full flex" href="#korcula">Korčula</a>
                <a class="full flex" href="#procitajte-vise">Pročitaj više</a>
                <a class="full flex" href="#pozovi-nas">Pozovi nas</a>
            </nav>
        </div>
        <div class="flex hero-right center">
            <img src="<?php echo $native_path ?>img/mastercard_white_square.png" alt="Mastercard Logo">
            <img src="<?php echo $native_path ?>img/toyota_white_square.png" alt="Toyota Logo">
            <img src="<?php echo $native_path ?>img/vegetanatur_white_square.png" alt="Vegeta Logo">
            <img src="<?php echo $native_path ?>img/vegetamaestro_white_square.png" alt="Vegeta Maestro Logo">
            <img src="<?php echo $native_path ?>img/benussi_white_square.png" alt="Benussi Logo">
            <img src="<?php echo $native_path ?>img/addiko_white_square.png" alt="Addiko Bank Logo">
            <img src="<?php echo $native_path ?>img/jaguar_white_squre2.png" alt="Jaguar Logo">
            <img src="<?php echo $native_path ?>img/enterprise_white_square.png" alt="Enterprise Logo">
            <img src="<?php echo $native_path ?>img/huawei_square_white.png" alt="Huawei Logo">
            <img src="<?php echo $native_path ?>img/hep_white_square.gif" alt="HEP Logo">
            <img src="<?php echo $native_path ?>img/slavonija_white_square.png" alt="Srijem i Slavonija Logo">
            <img src="<?php echo $native_path ?>img/tzbpz_white_square.png" alt="TZ Brodsko-Posavske Logo">
            <img src="<?php echo $native_path ?>img/podravina_white_square.png" alt="Slavonija Podravina Logo">
            <img src="<?php echo $native_path ?>img/gklogo.svg" alt="Gorski kotar - neodoljiv logo">
            <img src="<?php echo $native_path ?>img/kvarner_white.png" alt="Kvarner logo">
            <img src="<?php echo $native_path ?>img/losinj_white.png" alt="Lošinj logo">
            <img src="<?php echo $native_path ?>img/losinj_hotel_white.png" alt="Lošinj hotels & villas logo">
            <img src="<?php echo $native_path ?>img/hac_white.png" alt="Hrvatske autoceste logo">
            <img src="<?php echo $native_path ?>img/zapresic_white.png" alt="Zaprešić logo">
            <img src="<?php echo $native_path ?>img/tzzz_white_square.png" alt="Turistička zajednica Zagrebačke županije logo">
        </div>
        <div class="flex hero-top">
            <h2 data-aos="fade-down" data-aos-delay="1500">Odat ću ti zašto živim ovdje</h2>
        </div>
    </header>
    <nav class="full flex mobile-nav stretch">
    <a class="fifth center" href="#buzet"><img src="<?php echo $native_path ?>img/icon_buzet.png" aria-hidden="true"><span>Buzet</span></a>
        <a class="fifth center" href="#vodnjan"><img src="<?php echo $native_path ?>img/icon_vodnjan.png" aria-hidden="true"><span>Vodnjan</span></a>
        <a class="fifth center" href="#losinj"><img src="<?php echo $native_path ?>img/icon_losinj.png" aria-hidden="true"><span>Lošinj</span></a>
        <a class="fifth center" href="#brtonigla"><img src="<?php echo $native_path ?>img/icon_brtonigla.png" aria-hidden="true"><span>Brtonigla</span></a>
        <a class="fifth center" href="#pula"><img src="<?php echo $native_path ?>img/icon_pula.png" aria-hidden="true"><span>Pula</span></a>
        <a class="fifth center" href="#varazdin"><img src="<?php echo $native_path ?>img/icon_varazdin.png" aria-hidden="true"><span>Varaždin</span></a>

        <a class="fifth center" href="#dubrovnik"><img src="<?php echo $native_path ?>img/icon_dubrovnik.png" aria-hidden="true"><span>Dubrovnik</span></a>
        <a class="fifth center" href="#sibenik"><img src="<?php echo $native_path ?>img/icon_sibenik.png" aria-hidden="true"><span>Šibenik</span></a>
        <a class="fifth center" href="#zadar"><img src="<?php echo $native_path ?>img/icon_zadar.png" aria-hidden="true"><span>Zadar</span></a>
        <a class="fifth center" href="#korcula"><img src="<?php echo $native_path ?>img/icon_korcula.png" aria-hidden="true"><span>Korčula</span></a>
    </nav>
    <section class="full episode relative" id="o-projektu">
        <div class="full flex">
            <h2 class="full relative episode-title" data-aos="fade-left">O projektu</h2>
            <p class="full project-intro" data-aos="fade-left" data-aos-delay="750">U dokumentarnom serijalu "Moje mjesto, tvoja destinacija" vodimo vas na ulice prekrasnih hrvatskih gradova uz lokalne vodiče - pojedince koji su odlučili ostati u svojim mjestima i graditi njihovu kulturu.</p>
            <div class="full sugovornici flex stretch">
            <div class="fourth flex-responsive flex" data-aos="fade-right" data-aos-delay="200">
                <img src="<?php echo $native_path ?>img/sugovornik_zdenka.jpg" aria-hidden="true">
                <div class="full sugovornik-episode">01</div>
                <h3 class="full">Zdenka iz Buzeta</h3>
                <p>Zdenka je rad na recepciji zamijenila lovom na tartufe i oslikavanjem freski. Odvela je i nas u pustolovinu</p>
                <a href="#buzet" class="insite-btn">Pogledaj epizodu</a>
              </div>
            <div class="fourth flex-responsive flex" data-aos="fade-right" data-aos-delay="400">
                <img src="<?php echo $native_path ?>img/sugovornik_sandi.jpg" aria-hidden="true">
                <div class="full sugovornik-episode">02</div>
                <h3 class="full">Sandi i Tedi iz Vodnjana</h3>
                <p>Sandi je agronom i brine se za proizvodnju, a Tedi je ekonomist koji vodi marketing i prodaju. Pokazali su nam svoju uljaru, maslinik, kušaonicu i Vodnjan</p>
                <a href="#vodnjan" class="insite-btn">Pogledaj epizodu</a>
              </div>
            <div class="fourth flex-responsive flex" data-aos="fade-right" data-aos-delay="600">
                <img src="<?php echo $native_path ?>img/sugovornik_sarah.jpg" aria-hidden="true">
                <div class="full sugovornik-episode">03</div>
                <h3 class="full">Sarah iz Lošinja</h3>
                <p>Sarah je obišla 30 zemalja svijeta, radila u Kanadi i na Novom Zelandu. Naposljetku ju je na Lošinj vratila ljubav prema otoku</p>
                <a href="#losinj" class="insite-btn">Pogledaj epizodu</a>
              </div>

            <div class="fourth flex-responsive flex" data-aos="fade-right" data-aos-delay="800">
                <img src="<?php echo $native_path ?>img/sugovornik_luana.jpg" aria-hidden="true">
                <div class="full sugovornik-episode">04</div>
                <h3 class="full">Luana iz Brtonigle</h3>
                <p>Luana Fernetich Ladavac, koja je s braćom odlučila nastaviti uspješan obiteljski biznis i stvoriti vrhunsku turističku destinaciju</p>
                <a href="#brtonigla" class="insite-btn">Pogledaj epizodu</a>
              </div>

            <div class="fourth flex-responsive flex" data-aos="fade-right" data-aos-delay="1000">
                <img src="<?php echo $native_path ?>img/sugovornik_nikola2.jpg" aria-hidden="true">
                <div class="full sugovornik-episode">05</div>
                <h3 class="full">Nikola iz Pule</h3>
                <p>Nikola Pezić, koji stoji iza projekta Eat Istria, odveo nas je u pulsku galeriju u kojoj lokalci preko dana ispijaju kavu</p>
                <a href="#pula" class="insite-btn">Pogledaj epizodu</a>
              </div>

              <div class="fourth flex-responsive flex" data-aos="fade-right" data-aos-delay="1250">
                <img src="<?php echo $native_path ?>img/sugovornik_nikola.jpg" aria-hidden="true">
                <div class="full sugovornik-episode">06</div>
                <h3 class="full">Nikola iz Varaždina</h3>
                <p>Uspješni ugostitelj Nikola Božić proveo nas je rodnim Varaždinom. Odveo nas je i u dvorište o kojem je pisao New York Times</p>
                <a href="#varazdin" class="insite-btn">Pogledaj epizodu</a>
              </div>

              <div class="fourth flex-responsive flex" data-aos="fade-right" data-aos-delay="1250">
                <img src="<?php echo $native_path ?>img/sugovornik_ivan.jpg" aria-hidden="true">
                <div class="full sugovornik-episode">07</div>
                <h3 class="full">Ivan iz Dubrovnika</h3>
                <p>Ivan svojim IT rješenjima osvaja svijet. Nedavno je ušao na tržište Japana. Posjetili smo ga u Dubrovniku.</p>
                <a href="#dubrovnik" class="insite-btn">Pogledaj epizodu</a>
              </div>
                <div class="fourth flex-responsive flex" data-aos="fade-right" data-aos-delay="1500">
                    <img src="<?php echo $native_path ?>img/sugovornik_danijel.jpg" aria-hidden="true">
                    <div class="full sugovornik-episode">08</div>
                    <h3 class="full">Danijel iz Šibenika</h3>
                    <p>Danijel svojim umjetničkim instalacijama obogaćuje kulturnu ponudu grada i šire. Posjetili smo ga u Šibeniku.</p>
                    <a href="#sibenik" class="insite-btn">Pogledaj epizodu</a>
                </div>
                <div class="fourth flex-responsive flex" data-aos="fade-right" data-aos-delay="1750">
                    <img src="<?php echo $native_path ?>img/sugovornik_vinko.jpg" aria-hidden="true">
                    <div class="full sugovornik-episode">09</div>
                    <h3 class="full">Vinko iz Zadra</h3>
                    <p>Vinkovu Lektiru na sceni pogledalo je više od 6000 srednjoškolaca. Mladog redatelja posjetili smo u Zadru.</p>
                    <a href="#zadar" class="insite-btn">Pogledaj epizodu</a>
                </div>
                <div class="fourth flex-responsive flex" data-aos="fade-right" data-aos-delay="2000">
                    <img src="<?php echo $native_path ?>img/sugovornik_marijana.jpg" aria-hidden="true">
                    <div class="full sugovornik-episode">10</div>
                    <h3 class="full">Marijana iz Korčule</h3>
                    <p>Dok su se druga djeca igrala ona je konobarila i prodavala sladoled. Sad na Korčuli vodi obiteljski restoran.</p>
                    <a href="#korcula" class="insite-btn">Pogledaj epizodu</a>
                </div>
            </div>
        </div>
    </section>
    <section class="full episode episode-overlay flex relative stretch" id="buzet">
        <video src="<?php echo $native_path ?>img/tg_videobg_buzet.mp4?ver=1.0" autoplay loop muted playsinline class="background-video"></video>
        <div class="half flex-responsive flex">
        <h2 class="full episode-title" data-aos="fade-left">Moje mjesto Buzet</h2>
        </div>
        <div class="half flex-responsive flex">
        <p class="full episode-description" data-aos="fade-right">Unutrašnjost našeg najvećeg poluotoka i svoj rodni kraj pokazala nam je Zdenka Majcan, vlasnica turističke agencije Istriana Travel</p>
        <a href="https://www.telegram.hr/zivot/zdenka-je-rad-na-recepciji-zamijenila-lovom-na-tartufe-i-oslikavanjem-freski-odvela-je-i-nas-u-pustolovinu/" class="insite-btn" data-aos="fade-right" target="_blank" data-aos-delay="1000">Pogledaj video</a>
        </div>
    </section>
    <section class="full episode episode-overlay flex relative stretch" id="vodnjan">
        <video src="<?php echo $native_path ?>img/tg_videobg_vodnjan.mp4?ver=1.0" autoplay loop muted playsinline class="background-video"></video>
        <div class="half flex-responsive flex">
        <h2 class="full episode-title" data-aos="fade-left">Moje mjesto Vodnjan</h2>
        </div>
        <div class="half flex-responsive flex">
        <p class="full episode-description" data-aos="fade-right">Nakon smrti oca i djeda posvetili su se poljoprivredi. Sandi i Tedi krenuli su s 30, a danas imaju 11.000 maslina i svjetske nagrade</p>
        <a href="https://www.telegram.hr/zivot/nakon-smrti-oca-i-djeda-posvetili-su-se-poljoprivredi-sandi-i-tedi-krenuli-su-s-30-a-danas-imaju-11-000-maslina-i-svjetske-nagrade/" class="insite-btn" data-aos="fade-right" target="_blank" data-aos-delay="1000">Pogledaj video</a>
        </div>
    </section>
    <section class="full episode episode-overlay flex relative stretch" id="losinj">
        <video src="<?php echo $native_path ?>img/tg_videobg_losinj.mp4?ver=1.0" autoplay loop muted playsinline class="background-video"></video>
        <div class="half flex-responsive flex">
        <h2 class="full episode-title" data-aos="fade-left">Moje mjesto Mali Lošinj</h2>
        </div>
        <div class="half flex-responsive flex">
        <p class="full episode-description" data-aos="fade-right">Sarah nam je pokazala pet zanosnih i jedinstvenih lokacija, od kojih su nas najviše oduševili Miomirisni vrt i vidikovac Providenca</p>
        <a href="https://www.telegram.hr/zivot/sarah-je-obisla-30-zemalja-svijeta-radila-u-kanadi-i-na-novom-zelandu-naposljetku-ju-je-na-losinj-vratila-ljubav-prema-otoku/" class="insite-btn" data-aos="fade-right" target="_blank" data-aos-delay="1000">Pogledaj video</a>
        </div>
    </section>
    <section class="full episode episode-overlay flex relative stretch" id="brtonigla">
        <video src="<?php echo $native_path ?>img/tg_videobg_brtonigla.mp4?ver=1.0" autoplay loop muted playsinline class="background-video"></video>
        <div class="half flex-responsive flex">
        <h2 class="full episode-title" data-aos="fade-left">Moje mjesto Brtonigla</h2>
        </div>
        <div class="half flex-responsive flex">
        <p class="full episode-description" data-aos="fade-right">Kći vlasnika i voditeljica nagrađivanog San Rocco heritage hotela otkrila nam je svoje omiljene susjede i prepoznate proizvođače lokalnih delicija</p>
        <a href="https://www.telegram.hr/zivot/nasem-su-ocu-govorili-da-je-lud-sto-ovdje-otvara-hotel-a-danas-je-jedan-od-najboljih-na-jadranu/" class="insite-btn" data-aos="fade-right" target="_blank" data-aos-delay="1000">Pogledaj video</a>
        </div>
    </section>
    <section class="full episode episode-overlay flex relative stretch" id="pula">
        <video src="<?php echo $native_path ?>img/tg_videobg_pula.mp4?ver=2.0" autoplay loop muted playsinline class="background-video"></video>
        <div class="half flex-responsive flex">
        <h2 class="full episode-title" data-aos="fade-left">Moje mjesto Pula</h2>
        </div>
        <div class="half flex-responsive flex">
        <p class="full episode-description" data-aos="fade-right">Čarobni jug Istre: radili smo fuže, kušali aceto koji nastaje po recepturi iz 13. stoljeća i najbolje polpete u Puli</p>
        <a href="https://www.telegram.hr/velike-price/carobni-jug-istre-radili-smo-fuze-kusali-aceto-koji-nastaje-po-recepturi-iz-13-stoljeca-i-najbolje-polpete-u-puli/" class="insite-btn" data-aos="fade-right" target="_blank" data-aos-delay="1000">Pogledaj video</a>
        </div>
    </section>
    <section class="full episode episode-overlay flex relative stretch" id="varazdin">
        <video src="<?php echo $native_path ?>img/tg_videobg_varazdin.mp4?ver=2.0" autoplay loop muted playsinline class="background-video"></video>
        <div class="half flex-responsive flex">
        <h2 class="full episode-title" data-aos="fade-left">Moje mjesto Varaždin</h2>
        </div>
        <div class="half flex-responsive flex">
        <p class="full episode-description" data-aos="fade-right">U prvom nastavku druge sezone video serijala "Moje mjesto, tvoja destinacija" posjetili smo Varaždin. Naš domaćin je Nikola Božić koji stoji iza jedne od najboljih gastro destinacija u regiji</p>
        <a href="https://www.telegram.hr/velike-price/vodic-varazdin-kobasice-kafic-zvijezde/" class="insite-btn" data-aos="fade-right" target="_blank" data-aos-delay="1000">Pogledaj video</a>
        </div>
    </section>
    <section class="full episode relative" id="avanture">
        <div class="full flex">
            <h2 class="full relative episode-title" data-aos="fade-left">Nezaboravne avanture</h2>
            <p class="full project-intro" data-aos="fade-left" data-aos-delay="750">Donosi <a href="https://www.priceless.com/" target="_blank">Priceless.com</a></p>
            <div class="full sugovornici extra-content flex stretch">
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="200">
                    <img src="<?php echo $native_path ?>/img/eatistria.jpg" aria-hidden="true">
                    <h3 class="full">Iskustvo u suradnji s EatIstriom</h3>
                    <a href="https://www.priceless.com/culinary/product/175489/enjoy-the-beauties-of-istria-with-a-unique-cooking-class/0/4007/options/location/5767//options/sortBy/popularity/location/5767/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="400">
                    <img src="<?php echo $native_path ?>/img/san_rocco.jpg" aria-hidden="true">
                    <h3 class="full">Iskustvo u suradnji sa San Roccom</h3>
                    <a href="https://www.priceless.com/travel/product/175558/stories-san-rocco-luxury-hotel/0/4007/options/location/5767//options/sortBy/popularity/location/5767/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="600">
                    <img src="<?php echo $native_path ?>/img/thrillseeker.jpg" aria-hidden="true">
                    <h3 class="full">Iskustvo uz Thrillseeker Croatia</h3>
                    <a href="https://www.priceless.com/travel/product/168622/experience-slavonia-with-thrillseeker" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="800">
                    <img src="<?php echo $native_path ?>/img/olympia_sky.jpg" aria-hidden="true">
                    <h3 class="full">Iskustvo u suradnji s hotelom Olympia Sky</h3>
                    <a href="https://www.priceless.com/travel/product/168836/gastro-experience-in-vodice-olympia-sky/0/4007/options/location/5767//options/sortBy/popularity/location/5767/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="1000">
                    <img src="<?php echo $native_path ?>/img/liburnia.jpg" aria-hidden="true">
                    <h3 class="full">Iskustvo u suradnji s lancem Liburnia Hotels and Villas</h3>
                    <a href="https://www.priceless.com/travel/product/166620/experience-the-heart-of-kvarner-and-join-local-family-farms/0/4007/options/location/5767//options/sortBy/popularity/location/5767/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
            </div>
        </div>
    </section>
    <section class="full episode episode-overlay flex relative stretch" id="dubrovnik">
        <video src="<?php echo $native_path ?>img/tg_videobg_dubrovnik.mp4" autoplay loop muted playsinline class="background-video"></video>
        <div class="half flex-responsive flex">
            <h2 class="full episode-title" data-aos="fade-left">Moje mjesto Dubrovnik</h2>
        </div>
        <div class="half flex-responsive flex">
            <p class="full episode-description" data-aos="fade-right">Na šetnju Dubrovnikom poveo nas je mladi IT-ijevac Ivan Ivušić. Nakon osam godina u Zagrebu odlučio se vratiti u svoj kraj, gdje je osnovao IT firmu koja se bavi digitalnim recenzijama. Njegovi klijenti primarno su ugostitelji iz Hrvatske pa sve do Japana. Kroz šetnju svojim gradom pokazao nam je tko su ljudi i mjesta zbog kojih voli Dubrovnik. Pokazao nam je djelić bogate gastronomske ponude i odao tajnu zašto je ostao vjeran Dubrovniku.</p>
            <a href="https://www.telegram.hr/zivot/svojim-it-rjesenjima-vec-je-na-trzistu-japana-ali-ivan-je-vjeran-dubrovniku-posjetili-smo-ga-i-saznali-zasto/" class="insite-btn" data-aos="fade-right" target="_blank" data-aos-delay="1000">Pogledaj video</a>
        </div>
    </section>
    <section class="full episode episode-overlay flex relative stretch" id="sibenik">
        <video src="<?php echo $native_path ?>img/tg_videobg_sibenik.mp4" autoplay loop muted playsinline class="background-video"></video>
        <div class="half flex-responsive flex">
            <h2 class="full episode-title" data-aos="fade-left">Moje mjesto Šibenik</h2>
        </div>
        <div class="half flex-responsive flex">
            <p class="full episode-description" data-aos="fade-right">Ulicama Šibenika proveo nas je dizajner Danijel Hrg, čiji je dućan s unikatnim nakitom smješten u samom centru grada. Osim nakita, Danijel je autor impresivnih umjetničkih instalacija koje krase grad i kultni klub Azimut. S Danijelom smo posjetili Azimut i prekrasnu Tvrđavu sv. Mihovila, upoznali smo gastronomsku i kulturnu ponudu grada te na vlastitoj koži osjetili veliko gostoprimstvo Šibenčana.</p>
            <a href="https://www.telegram.hr/zivot/prvu-ogrlicu-izradio-je-za-djevojku-ona-mu-je-danas-supruga-a-on-poznati-sibenski-dizajner-posjetili-smo-ga/" class="insite-btn" data-aos="fade-right" target="_blank" data-aos-delay="1000">Pogledaj video</a>
        </div>
    </section>
    <section class="full episode episode-overlay flex relative stretch" id="zadar">
        <video src="<?php echo $native_path ?>img/tg_videobg_zadar.mp4" autoplay loop muted playsinline class="background-video"></video>
        <div class="half flex-responsive flex">
            <h2 class="full episode-title" data-aos="fade-left">Moje mjesto Zadar</h2>
        </div>
        <div class="half flex-responsive flex">
            <p class="full episode-description" data-aos="fade-right">Pronašli smo prekrasne ljude u prekrasnim mjestima. Kroz šetnju svojim mjestom ispričali su nam zašto su ostali vjerni svom kraju. U trećem nastavku video serijala "Moje mjesto, tvoja destinacija" posjetili smo Zadar. Naš domaćin je kazališni redatelj Vinko Radovčić. Ovo je njegova priča.</p>
            <a href="https://www.telegram.hr/zivot/vinkovu-lektiru-na-sceni-pogledalo-je-vise-od-6000-srednjoskolaca-mladog-redatelja-posjetili-smo-u-zadru/" class="insite-btn" data-aos="fade-right" target="_blank" data-aos-delay="1000">Pogledaj video</a>
        </div>
    </section>
    <section class="full episode episode-overlay flex relative stretch" id="korcula">
        <video src="<?php echo $native_path ?>img/tg_videobg_korcula.mp4" autoplay loop muted playsinline class="background-video"></video>
        <div class="half flex-responsive flex">
            <h2 class="full episode-title" data-aos="fade-left">Moje mjesto Korčula</h2>
        </div>
        <div class="half flex-responsive flex">
            <p class="full episode-description" data-aos="fade-right">U Zagrebu je studirala odnose s javnošću. Na praksi je shvatila da to nije posao kojem želi posvetiti život. Vratila se doma. I isplatilo se. Na Korčuli ugostila nas je PR stručnjakinja Marijana Kapor. Ovo je njezina priča.</p>
            <a href="https://www.telegram.hr/zivot/dok-su-se-druga-djeca-igrala-ona-je-konobarila-i-prodavala-sladoled-sad-na-korculi-vodi-obiteljski-restoran/" class="insite-btn" data-aos="fade-right" target="_blank" data-aos-delay="1000">Pogledaj video</a>
        </div>
    </section>
    <section class="full episode relative" id="procitajte-vise">
        <div class="full flex">
            <h2 class="full relative episode-title" data-aos="fade-left">Pročitaj više</h2>
            <div class="full sugovornici extra-content flex stretch">
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="0">
                    <img src="https://images.telegram.hr/Ug2PDDTUnlVxMjkK2FQ6RKO0rXyyKQb3zMailJnjHjY/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDcvcHhsLTE0MDgyMi05NTEyNzIyOS5qcGc.webp" aria-hidden="true">
                    <h3 class="full">Najviše prometnih nesreća u Hrvatskoj dogodi se tijekom ljeta. Pratite ove savjete za sigurniji put na more</h3>
                    <p> Sigurnosni pojas spriječi 50 posto ozbiljnijih ozljeda i smrti prilikom prometnih nesreća</p>
                    <a href="https://www.telegram.hr/zivot/najvise-prometnih-nesreca-u-hrvatskoj-dogodi-se-tijekom-ljeta-pratite-ove-savjete-za-sigurniji-put-na-more/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="50">
                    <img src="https://images.telegram.hr/1fofpmJGk172e13qVHaVNvMtzQsuSDEX2VUR2NxyouE/preset:s1single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDYvYW50ZS1oYW1lcnNtaXQtcXNkMWhjcjR4c20tdW5zcGxhc2guanBn.webp" aria-hidden="true">
                    <h3 class="full">Dan dupina, Osorske večeri i Festival balkona pravi su povod za posjetiti cresko-lošinjski arhipelag</h3>
                    <p> Ove sezone uživajte u posebnim manifestacijama popularnih jadranskih otoka</p>
                    <a href="https://www.telegram.hr/super1/life/dan-dupina-osorske-veceri-i-festival-balkona-pravi-su-povod-za-posjetiti-cresko-losinjski-arhipelag/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="75">
                    <img src="https://images.telegram.hr/TMtuHmvjGCaP1t7tt09-mrh3A4Qx3nDbCDy0H-5gMvo/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDUvZHZvcmFjLXN0YXJhLXN1c2ljYS1yYXZuYS1nb3JhLWxqZXRvLW1hcmlvLWp1cmluYS0yLmpwZw.webp" aria-hidden="true">
                    <h3 class="full">Kaubojski gradić, ostaci pračovjeka i dvorci kao iz svijeta Harryja Pottera na samo sat i pol vožnje od Zagreba</h3>
                    <p>Ondje vas čekaju i panoramsko letenje, tirkizno jezero i najdublja špilja u Hrvatskoj </p>
                    <a href="https://www.telegram.hr/zivot/kaubojski-gradic-ostaci-pracovjeka-i-dvorci-kao-iz-svijeta-harryja-pottera-na-samo-sat-i-pol-voznje-od-zagreba/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="100">
                    <img src="https://images.telegram.hr/-AOOEs5cnswmUtqYhqvS64TFmhJu4kYxzxD7w9j2PmA/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTAvdGctbmFzbG92bmEtMjAyMi0xMC0xMi01LmpwZw.webp" aria-hidden="true">
                    <h3 class="full">Na Zelenoj ruti možete spavati u dvorcu i slikati uz čašu finog vina. Imamo još super ideja za ovaj vikend</h3>
                    <p>Znamo i gdje kušati jedan od prvih hrvatskih pjenušaca po recepturi iz 19. stoljeća</p>
                    <a href="https://www.telegram.hr/partneri/na-zelenoj-ruti-mozete-spavati-u-dvorcu-i-slikati-uz-casu-finog-vina-imamo-jos-super-ideja-za-ovaj-vikend/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="150">
                    <img src="https://images.telegram.hr/Uzxp_A5GrjLqhlJ1xO1WyEf6aVvbKdMWn_nDkrQa6As/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTAvcmFtYXJpbi02LmpwZw.jpg" aria-hidden="true">
                    <h3 class="full">Jezero u obliku konja, kućice kao iz Hobita i besplatni avanturistički park do kraja godine. Znamo detalje</h3>
                    <p>Nagradite se već ovog vikenda i stvorite nezaboravna iskustva na samo dva sata vremena vožnje od Zagreba </p>
                    <a href="https://www.telegram.hr/partneri/jezero-u-obliku-konja-kucice-kao-iz-hobita-i-besplatni-avanturisticki-park-do-kraja-godine-znamo-detalje/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="200">
                    <img src="https://images.telegram.hr/nLUdbbDampfteuoxZBFInrzWI0XuGwr5JjsJkxdDmv0/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTAvYXV0b3ItbGp1ZGV2aXQtZ2FjaWMtaXp2b3ItdHotdnN6LmpwZw.jpg" aria-hidden="true">
                    <h3 class="full">Istok Hrvatske posjećuje sve više stranih gostiju. Istražili smo u čemu je fora, evo par zanimljivosti</h3>
                    <p>Nezaobilazni dio ponude ovog kraja su i suveniri koji u sebi kriju tradiciju i povijest</p>
                    <a href="https://www.telegram.hr/partneri/istok-hrvatske-posjecuje-sve-vise-stranih-gostiju-istrazili-smo-u-cemu-je-fora-evo-par-zanimljivosti/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="250">
                    <img src="https://images.telegram.hr/r0bXjv94V-g1db9npmFAFHC5ju9mM9Fis0Vhv1wPVrU/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDkvYXV0b3ItZGF2b3Jpbi1rcmVzaWMtaXp2b3ItdnN6LmpwZw.jpg" aria-hidden="true">
                    <h3 class="full">Pronašli smo sedam stvari radi kojih znamo da Slavonci uživaju u životu. Jedna nam je svima draga</h3>
                    <p>Budite spremni otkriti neotkriveno - muzeje, kulturu, nematerijalna zaštićena dobra i bogatu gastronomsku ponudu </p>
                    <a href="https://www.telegram.hr/partneri/pronasli-smo-sedam-stvari-radi-kojih-znamo-da-slavonci-uzivaju-u-zivotu-jedna-nam-je-svima-draga/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="300">
                    <img src="https://images.telegram.hr/HjC2PmBOu6_rtlUENjOZRRh1yPd9QQdi-Vz-Ea1Gisg/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDgvaWR6MjUwMC5qcGc.jpg" aria-hidden="true">
                    <h3 class="full">Podno Papuka proizvode gin koji osvaja ozbiljne svjetske nagrade. U planu je i slavonski viski </h3>
                    <p> S prijateljima su pokrenuli Ideš i piješ, 12 kilometara dugu eno-gastro šetnju koja počinje 27. kolovoza</p>
                    <a href="https://www.telegram.hr/partneri/podno-papuka-proizvode-gin-koji-osvaja-ozbiljne-svjetske-nagrade-u-planu-je-i-slavonski-viski/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="400">
                    <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2022/07/2022-7-19-naslovna2.jpg" aria-hidden="true">
                    <h3 class="full">Istok Lijepe naše ima toliko toga za ponuditi. Evo što je oduševilo poznatog blogera </h3>
                    <p>Kontinentalni turizam treba dobiti svoje zasluženo mjesto na karti Hrvatske</p>
                    <a href="https://super1.telegram.hr/relax/istok-lijepe-nase-ima-toliko-toga-za-ponuditi-evo-sto-je-odusevilo-poznatog-blogera/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="600">
                    <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2021/08/d7fa4f22-72c5-4264-8f5c-28644d2eb84b-880x520.jpg" aria-hidden="true">
                    <h3 class="full">Pronašli smo još jedan prekrasan svjetionik u Istri koji možete iznajmiti za boravak </h3>
                    <p>U ovaj svjetionik u Istri koji može primiti osam gostiju zaljubili smo se na prvi pogled</p>
                    <a href="https://super1.telegram.hr/relax/pronasli-smo-jos-jedan-prekrasan-svjetionik-u-istri-koji-mozete-iznajmiti-za-boravak/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="800">
                    <img src="https://images.telegram.hr/Ikp0Al1HkYEtSmVpXdU4ETf0YRPglp17jpmwN4m59Rc/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjEvMTAvdHp6ei1va3VzaS1wcmlqZS1zdmVnYS1zdGlsbC0xMTEucG5n.jpg" aria-hidden="true">
                    <h3 class="full">Pitoreskne vinske ceste u okolici Zagreba imaju top ponude za vikend izlete. Saznali smo što sve nude</h3>
                    <p>Ponuda ovog kraja pokriva sve, od vina iz amfora do pjenušaca i famoznih autohtonih sorti</p>
                    <a href="https://www.telegram.hr/partneri/pitoreskne-vinske-ceste-u-okolici-zagreba-imaju-top-ponude-za-vikend-izlete-saznali-smo-sto-sve-nude/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="1000">
                    <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2021/09/wellness-spa8-880x520.jpg" aria-hidden="true">
                    <h3 class="full">Vrijeme je za jesenski wellness. Ovaj hotel u Istri ima sve, pa i bazen s grijanom morskom vodom </h3>
                    <p>Želite li se razmaziti, Hotel Aminess Maestral u Novigradu ima posebnu ponudu</p>
                    <a href="https://super1.telegram.hr/relax/vrijeme-je-za-jesenski-wellness-ovaj-hotel-u-istri-ima-sve-pa-i-bazen-s-grijanom-morskom-vodom/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="1250">
                    <img src="https://images.telegram.hr/l6ujBbUQwcEF-sGJQ-SHNM6hjXYb1sA01xPc0TJQ4eg/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjEvMDkvdW5uYW1lZDIyLXNjYWxlZC5qcGc.jpg" aria-hidden="true">
                    <h3 class="full">Fitness trener nam je objasnio zašto se ne trebamo osjećati loše ako nismo vježbali tijekom ljeta</h3>
                    <p>Tomislav Skoko objasnio nam je važnost odmora u fitness rutini</p>
                    <a href="https://www.telegram.hr/partneri/fitness-trener-nam-je-objasnio-zasto-se-ne-trebamo-osjecati-lose-ako-nismo-vjezbali-tijekom-ljeta/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="1500">
                    <img src="https://images.telegram.hr/A0bTk2contU-bMAE_iUm4IrAa_xw2NXRFOTQt9A_H8E/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjEvMDkvcGV4ZWxzLWluY2hzLTc5ODg5NzEtODgweDUyMC0xLmpwZw.jpg" aria-hidden="true">
                    <h3 class="full">Ove smo sezone proputovali obalu. Odabrali smo top destinacije za sve koji vole aktivni odmor</h3>
                    <p>Mnogo je prilika za aktivni odmor u Hrvatskoj. Donosimo nekoliko prijedloga</p>
                    <a href="https://www.telegram.hr/partneri/ove-smo-sezone-proputovali-obalu-odabrali-smo-top-destinacije-za-sve-koji-vole-aktivni-odmor/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="1750">
                    <img src="https://images.telegram.hr/e2IAQHoUfZY5icMBm80_ttR7D3_AMD9v4ZnEbQ7tywc/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjEvMDkvNDAwYTUwMTctc2NhbGVkLmpwZw.jpg" aria-hidden="true">
                    <h3 class="full">Testirali smo novi Huawei Watch 3 Pro tijekom šetnje Zadrom. Evo zašto nam se sviđa</h3>
                    <p>Novi Huawei Watch 3 Pro s nama je prešao na tisuće koraka</p>
                    <a href="https://www.telegram.hr/partneri/testirali-smo-novi-huawei-watch-3-pro-tijekom-setnje-zadrom-evo-zasto-nam-se-svida/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="2000">
                    <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2021/08/vegeta-01-880x520.jpg" aria-hidden="true">
                    <h3 class="full">Donosimo vam recept za brudet s lignjama koji smo probali u Dubrovniku</h3>
                    <p>Rješenje za dane kada vam se jede brudet, ali ne čisti riba</p>
                    <a href="https://super1.telegram.hr/relax/donosimo-vam-recept-za-brudet-s-lignjama-koji-smo-probali-u-dubrovniku/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
                <div class="third flex-responsive flex" data-aos="fade-right" data-aos-delay="2250">
                    <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2021/08/dubrovnik-5-2-1-880x520.jpg" aria-hidden="true">
                    <h3 class="full">U Dubrovniku smo probali zelenu paštu s plodovima mora. Donosimo vam brzi recept</h3>
                    <p>Ovo je naša inačica zelene pašte koju smo degustirali u Dubrovniku</p>
                    <a href="https://super1.telegram.hr/relax/u-dubrovniku-smo-probali-zelenu-pastu-s-plodovima-mora-donosimo-vam-brzi-recept/" target="_blank" class="insite-btn">Pročitaj više</a>
                </div>
            </div>
        </div>
    </section>
    <section class="full episode flex relative stretch" id="pozovi-nas">
        <div class="half flex-responsive flex relative form-parent">
            <h2 class="full episode-title" data-aos="fade-left">Pozovi nas u svoje mjesto</h2>
            <form id="applications" class="full flex" data-aos="fade-left" data-aos-delay="500">
                <p class="full article-description">
                Želimo čuti i tvoju priču. Pozovi nas u svoje mjesto, ispričaj nam sve što te veže uz tvoje mjesto, odaj nam zašto živiš tu.
                </p>
                <label class="full">Tvoje ime:</label>
                <input type="text" class="full" id="ime" name="ime">
                <label class="full">Tvoj e-mail:</label>
                <input type="email" class="full" id="email" name="email">
                <label class="full">Što nam u svom mjestu želite pokazati i zašto:</label>
                <textarea type="text" class="full" id="poruka" name="poruka"></textarea>
                <div class="full flex">
                    <input type="checkbox" required id="pravila-privatnosti" name="pravila-privatnosti">
                    <label class="clickable" for="pravila-privatnosti">Prihvaćam <a href="https://www.telegram.hr/stranica/pravila-privatnosti/" target="_blank">pravila privatnosti Telegrama.</a></label>
                </div>
                <div class="full flex">
                <div id="submit-application" class="insite-btn">Pošalji prijavu</div>
                </div>
                <div class="full flex">
                <p id="error-msg" class="bold hide">Morate prihvatiti pravila privatnosti!</p>
                </div>
                <div class="full flex hide" id="loading-indicator">
                <div class="lds-facebook"><div></div><div></div><div></div></div>
                </div>
                <div class="full flex">
                <p id="response-msg" class="bold hide">Vaša prijava je spremljena. Hvala na sudjelovanju!</p>
                </div>
            </form>
        </div>
        <div class="half flex-responsive flex desktop-only hide" data-aos="fade-right">
            <img src="<?php echo $native_path ?>img/grey_placeholder.png" aria-hidden="true">
        </div>
    </section>
    <footer class="full native-signature">
        <div class="container flex">
            <div class="full center">
                <img src="<?php echo $native_path ?>img/mastercard_square.png" alt="Mastercard Logo" data-aos="fade-up" data-aos-delay="0">
                <img src="<?php echo $native_path ?>img/toyota_white_square.png" alt="Toyota Logo" data-aos="fade-up" data-aos-delay="100">
                <img src="<?php echo $native_path ?>img/vegetanatur_square.png" alt="Vegeta Logo" data-aos="fade-up" data-aos-delay="200">
                <img src="<?php echo $native_path ?>img/vegetamaestro_square.png?ver=4.0" alt="Vegeta Logo" data-aos="fade-up" data-aos-delay="300">
                <img src="<?php echo $native_path ?>img/benussi_white_square.png" alt="Benussi Logo" data-aos="fade-up" data-aos-delay="400">
                <img src="<?php echo $native_path ?>img/addiko_square.png?ver=2.0" alt="Addiko Bank Logo" data-aos="fade-up" data-aos-delay="500">
                <img src="<?php echo $native_path ?>img/jaguar_white_squre2.png" alt="Jaguar Logo" data-aos="fade-up" data-aos-delay="600">
                <img src="<?php echo $native_path ?>img/enterprise_square.png" alt="Enterprise Logo" data-aos="fade-up" data-aos-delay="700">
                <img src="<?php echo $native_path ?>img/huawei_square.png" alt="Huawei Logo" data-aos="fade-up" data-aos-delay="800">
                <img src="<?php echo $native_path ?>img/hep_white_square.gif" alt="HEP Logo" data-aos="fade-up" data-aos-delay="900">
                <img src="<?php echo $native_path ?>img/slavonija_white_square.png" alt="Srijem i Slavonija Logo" data-aos="fade-up" data-aos-delay="1000">
                <img src="<?php echo $native_path ?>img/tzbpz_white_square.png" alt="TZ Brodsko-Posavske Logo" data-aos="fade-up" data-aos-delay="1100">
                <img src="<?php echo $native_path ?>img/podravina_white_square.png" alt="Slavonija Podravina Logo" data-aos="fade-up" data-aos-delay="1200">
                <img src="<?php echo $native_path ?>img/gklogo.svg" alt="Gorski kotar - neodoljiv logo" data-aos="fade-up" data-aos-delay="1300">
                <img src="<?php echo $native_path ?>img/kvarner.png" alt="Kvarner logo" data-aos="fade-up" data-aos-delay="1400">
                <img src="<?php echo $native_path ?>img/losinj.png" alt="Lošinj logo" data-aos="fade-up" data-aos-delay="1500">
                <img src="<?php echo $native_path ?>img/losinj_hotel_logo.png" alt="Lošinj hotels & villas logo" data-aos="fade-up" data-aos-delay="1600">
                <img src="<?php echo $native_path ?>img/hac_white.png" alt="Hrvatske autoceste logo" data-aos="fade-up" data-aos-delay="1700">
                <img src="<?php echo $native_path ?>img/zapresic_white.png" alt="Zaprešić logo" data-aos="fade-up" data-aos-delay="1800">
                <img src="<?php echo $native_path ?>img/tzzz_white_square.png" alt="Turistička zajednica Zagrebačke županije logo" data-aos="fade-up" data-aos-delay="1900">
            </div>
            <div class="full center">
                
            </div>
            <div class="full center">
            <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio_white.svg" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerima i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
        <script>
        var $form = jQuery('form#applications'),
            url = 'https://script.google.com/macros/s/AKfycbwRXtkq9CyRS2emXaxpgxiWCGwepukRS3cX_rIr9rc4wqDXFaAP/exec'

        jQuery('#submit-application').on('click', function(e) {
            e.preventDefault();
            if(document.getElementById('pravila-privatnosti').checked) {
                $('#submit-application').hide();
                $('#error-msg').hide();
                $('#loading-indicator').removeClass('hide');
                var jqxhr = jQuery.ajax({
                    url: url,
                    method: "GET",
                    dataType: "json",
                    data: $form.serializeObject()
                }).done(
                    function(){
                        $('#loading-indicator').hide();
                        $('#response-msg').removeClass('hide');
                    }
                );
            }
            else {
                $('#error-msg').removeClass('hide');
            }
        })
    </script>
    </footer>
</div>

<?php wp_footer(); ?>
</body>

</html>
