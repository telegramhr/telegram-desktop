<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = get_stylesheet_directory_uri() . '/templates/native/eon/promjena/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/eon/promjena/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/eon/promjena/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/eon/promjena/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>img/aos.css?ver=1.00" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet"> 
    <script src="<?php echo $native_path ?>img/aos.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=1.20" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=1.22" type="text/css" />
    <script src="<?php echo $native_path ?>functions.js?ver=1.10"></script>
</head>
<body>
    <div class="main-container flex relative">
        <nav class="full topnav desktop-only flex relative">
            <div class="container flex relative">
                <div class="center relative textlogo">Postani dio promjene</div>
                <div class="center relative">
                    <a href="#zasto" class="center relative animate">
                        <?php echo file_get_contents($native_path.'img/seal-question-solid.svg'); ?>
                        <div class="full">Evo zašto</div>
                    </a>
                    <a href="#tko" class="center relative animate">
                        <?php echo file_get_contents($native_path.'img/handshake-angle-solid.svg'); ?>
                        <div class="full">Evo tko</div>
                    </a>
                    <a href="#kako" class="center relative animate">
                        <?php echo file_get_contents($native_path.'img/lightbulb-on-solid.svg'); ?>
                        <div class="full">Evo kako</div>
                    </a>
                    <a href="https://www.eon.hr/hr/kucanstva/solarni-kalkulator.html?utm_source=telegram&utm_medium=native&utm_campaign=Publicis_Eon_Solari_May_June_2023&utm_content=native_kalkulator3" target="_blank" class="center relative animate">
                        <?php echo file_get_contents($native_path.'img/calculator-simple-solid.svg'); ?>
                        <div class="full">Evo izračuna</div>
                    </a>
                </div>
            </div>
        </nav>
        <nav class="full inpage-nav mobile-only flex relative">
            <a href="#zasto" class="fourth center relative">
                <?php echo file_get_contents($native_path.'img/seal-question-solid.svg'); ?>
                <div class="full center-text">Zašto</div>
            </a>
            <a href="#tko" class="fourth center relative">
                <?php echo file_get_contents($native_path.'img/handshake-angle-solid.svg'); ?>
                <div class="full center-text">Tko</div>
            </a>
            <a href="#kako" class="fourth center relative">
                <?php echo file_get_contents($native_path.'img/lightbulb-on-solid.svg'); ?>
                <div class="full center-text">Kako</div>
            </a>
            <a href="https://www.eon.hr/hr/kucanstva/solarni-kalkulator.html?utm_source=telegram&utm_medium=native&utm_campaign=Publicis_Eon_Solari_May_June_2023&utm_content=native_kalkulator3" target="_blank" class="fourth center relative">
                <?php echo file_get_contents($native_path.'img/calculator-simple-solid.svg'); ?>
                <div class="full center-text">Izračun</div>
            </a>
        </nav>
        <header class="full flex relative">
            <div class="header-fade"></div>
            <video autoplay loop muted playsinline class="background-video">
                <source src="<?php echo $native_path ?>img/tg_videobg_nature.webm?v=2.00" type="video/webm">
                <source src="<?php echo $native_path ?>img/tg_videobg_nature.mp4?v=2.00" type="video/mp4">
            </video>
            <div class="container flex relative horizontal-pad">
                <h1 class="full" data-aos="fade-up" data-aos-delay="750">Zajedno za budućnost</h1>
                <h1 class="full bigger-h1"  data-aos="fade-up" data-aos-delay="1500">Postani dio promjene</h1>
            </div>
        </header>
        <section class="full flex relative black-bg" id="zasto">
            <div class="container flex relative">
                <div class="full flex horizontal-pad">
                    <h2 class="full subsection-title relative" data-aos="fade-left" data-aos-delay="2000">Evo zašto.</h2>
                </div>
                <div class="half desktop-only flex relative pad-me">
                    <p data-aos="fade-left" data-aos-delay="500">Čovječanstvo je postavilo rok trajanja na ledene kape svjetskih mora, permafrost sjevernih krajeva i tropske koraljne grebene. Točku bez povratka prijeći ćemo svakog trenutka.</p>
                    <p data-aos="fade-left" data-aos-delay="750">Još 11 prekretnica stignemo spriječiti, upozoravaju znanstvenici. No, isključivo ako ostvarimo međunarodno postavljene ciljeve za smanjenje emisija ugljikovog dioksida. To možemo ostvariti jedino zajedničkim snagama.</p>
                    <a data-aos="fade-left" data-aos-delay="1000" href="https://www.telegram.hr/partneri/zagrijavanjem-od-1-1-c-stupnja-vec-smo-otpisali-neke-krajeve-zemlje-ima-nade-ako-ucinimo-sljedece/" target="_blank" class="cta-btn animate">Saznaj više</a>
                    <p data-aos="fade-left" data-aos-delay="1250"><b>Postani dio promjene!</b> Instaliraj solarnu elektranu u svom domu i osiguraj si bolju sadašnjost i budućnost. Solarna energija već dvije godine prednjači kao najisplativiji izvor energije koji ti garantira vidljive uštede od prvog dana i potpunu energetsku neovisnost.</p>
                    <p data-aos="fade-left" data-aos-delay="1500">U pričama koje slijede saznaj kako se pridružiti Hrvatima koji su svoje elektrane već stavili u pogon – provjeri koliko su investirali, koliko dugo su čekali, što su sve trebali napraviti, koliko su zadovoljni, kolike su im uštede te koliko brzo će im se početna investicija isplatiti.</p>
                    <a data-aos="fade-left" data-aos-delay="1750" href="https://www.eon.hr/hr/kucanstva/solarni-kalkulator.html?utm_source=telegram&utm_medium=native&utm_campaign=Publicis_Eon_Solari_May_June_2023&utm_content=native_kalkulator3" target="_blank" class="cta-btn animate">Izračunaj svoj solarni potencijal</a>
                </div>
                <div class="full mobile-only flex relative pad-me">
                    <p>Čovječanstvo je postavilo rok trajanja na ledene kape svjetskih mora, permafrost sjevernih krajeva i tropske koraljne grebene. Točku bez povratka prijeći ćemo svakog trenutka.</p>
                    <p>Još 11 prekretnica stignemo spriječiti, upozoravaju znanstvenici. No, isključivo ako ostvarimo međunarodno postavljene ciljeve za smanjenje emisija ugljikovog dioksida. To možemo ostvariti jedino zajedničkim snagama.</p>
                </div>
                <div class="half flex-responsive flex relative shoo-bottom pad-me noho-padme">
                    <?php echo do_shortcode('[wpdatachart id=4]'); ?>
                </div>
                <div class="full mobile-only flex relative pad-me">
                    <a href="https://www.telegram.hr/partneri/zagrijavanjem-od-1-1-c-stupnja-vec-smo-otpisali-neke-krajeve-zemlje-ima-nade-ako-ucinimo-sljedece/" target="_blank" class="cta-btn animate">Saznaj više</a>
                    <p>Postani dio promjene! Instaliraj solarnu elektranu u svom domu i osiguraj si bolju sadašnjost i budućnost. Solarna energija već dvije godine prednjači kao najisplativiji izvor energije koji ti garantira vidljive uštede od prvog dana i potpunu energetsku neovisnost.</p>
                    <p>U pričama koje slijede saznaj kako se pridružiti Hrvatima koji su svoje elektrane već stavili u pogon – provjeri koliko su investirali, koliko dugo su čekali, što su sve trebali napraviti, koliko su zadovoljni, kolike su im uštede te koliko brzo će im se početna investicija isplatiti.</p>
                    <a href="https://www.eon.hr/hr/kucanstva/solarni-kalkulator.html?utm_source=telegram&utm_medium=native&utm_campaign=Publicis_Eon_Solari_May_June_2023&utm_content=native_kalkulator3" target="_blank" class="cta-btn animate">Izračunaj svoj solarni potencijal</a>
                </div>
            </div>
        </section>
        <section class="full flex relative" id="tko">
            <div class="container flex relative">
                <div class="full flex horizontal-pad">
                    <h2 class="full subsection-title relative" data-aos="fade-left" data-aos-delay="1000">Evo tko.</h2>
                </div>
                <a class="full flex relative article-embed stretch" target="_blank" href="https://www.telegram.hr/partneri/ivan-iz-jaske-na-stoljetnom-imanju-ugradio-je-solare-ljetos-su-mi-stizali-racuni-od-nula-kuna/">
                    <div class="half pad-me flex-responsive flex desktop-order-2" data-aos="fade-left" data-aos-delay="1000">
                        <img src="https://www.telegram.hr/wp-content/uploads/2022/10/eon-prhoc7.jpg">
                    </div>
                    <div class="half pad-me flex-responsive center desktop-order-1" data-aos="fade-right" data-aos-delay="1000">
                        <div class="full flex">
                            <h2 class="full">Ivan iz Jaske</h2>
                            <p class="full"><span>Ljetos su mi stizali računi od nula kuna</span></p>
                            <div class="cta animate">Pročitaj više...</div>
                        </div>
                    </div>
                </a>
                <a class="full flex relative article-embed stretch" target="_blank" href="https://www.telegram.hr/partneri/ivica-iz-metkovica-ugradio-sam-solare-i-poceo-dobivati-nevjerojatne-racune-godisnje-stedim-30-000-kuna/">
                    <div class="half pad-me flex-responsive flex desktop-order-1" data-aos="fade-left" data-aos-delay="1000">
                        <img src="https://www.telegram.hr/wp-content/uploads/2022/09/bunoza-ivica5.jpg">
                    </div>
                    <div class="half pad-me flex-responsive center desktop-order-2" data-aos="fade-right" data-aos-delay="1000">
                        <div class="full flex">
                            <h2 class="full">Ivica iz Metkovića</h2>
                            <p class="full"><span>Ugradio sam solare i počeo dobivati nevjerojatne račune, godišnje štedim 30.000 kuna</span></p>
                            <div class="cta animate">Pročitaj više...</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="full flex relative gray-bg">
                <div class="container flex relative stretch">
                    <div class="half flex-responsive pad-me center" data-aos="fade-left" data-aos-delay="1000">
                        <h2 class="full bold">Promjena cijena različitih energenata od 2010. do 2021.</h2>
                    </div>
                    <div class="half flex-responsive pad-me noho-padme" data-aos="fade-right" data-aos-delay="1000">
                        <?php echo do_shortcode('[wpdatachart id=1]'); ?>
                    </div>
                </div>
            </div>
            <div class="container flex relative">
                <a class="full flex relative article-embed stretch" target="_blank" href="https://www.telegram.hr/partneri/dragan-iz-sibenika-sa-solarnom-elektranom-snizio-sam-racune-za-400-kuna-prebacit-cu-i-grijanje-na-struju/">
                    <div class="half pad-me flex-responsive flex desktop-order-1" data-aos="fade-left" data-aos-delay="1000">
                        <img src="https://www.telegram.hr/wp-content/uploads/2022/09/vukorepa-dragan2.jpg">
                    </div>
                    <div class="half pad-me flex-responsive center desktop-order-2" data-aos="fade-right" data-aos-delay="1000">
                        <div class="full flex">
                            <h2 class="full">Dragan iz Šibenika</h2>
                            <p class="full"><span>Sa solarnom elektranom snizio sam račune za 400 kuna. Prebacit ću i grijanje na struju</span></p>
                            <div class="cta animate">Pročitaj više...</div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <section class="full flex relative" id="kako">
            <div class="container flex relative">
                <div class="full flex horizontal-pad">
                    <h2 class="full subsection-title relative" data-aos="fade-left" data-aos-delay="750">Evo kako.</h2>
                </div>
                <a class="third flex flex-responsive relative article-embed stretch pad-me" data-aos="fade-up" data-aos-delay="750" href="https://www.telegram.hr/biznis-tech/energetski-strucnjak-postoji-model-kojim-se-mogu-zastititi-ranjive-skupine-ali-i-potaknuti-ulaganja-u-sektor/" target="_blank">
                    <img class="shoo-bottom" src="https://www.telegram.hr/wp-content/uploads/2023/10/sasa3941xw.jpg">
                    <div class="full flex">
                        <h2 class="full">Energetski stručnjak: 'Postoji model kojim se mogu zaštititi ranjive skupine, ali i potaknuti ulaganja u sektor' </h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a class="third flex flex-responsive relative article-embed stretch pad-me" data-aos="fade-up" data-aos-delay="1000" href="https://www.telegram.hr/biznis-tech/solari-su-sve-isplativiji-donose-energetsku-neovisnost-manje-racune-i-pozitivno-utjecu-na-okolis/" target="_blank">
                    <img class="shoo-bottom" src="https://www.telegram.hr/wp-content/uploads/2023/06/sasa8117xw.jpg">
                    <div class="full flex">
                        <h2 class="full">Solari su sve isplativiji: Donose energetsku neovisnost, manje račune i pozitivno utječu na okoliš</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a class="third flex flex-responsive relative article-embed stretch pad-me" data-aos="fade-up" data-aos-delay="1250" href="https://www.telegram.hr/biznis-tech/u-prva-cetiri-mjeseca-vise-od-2-000-novih-solarnih-elektrana-ovim-tempom-udvostrucit-cemo-ukupni-broj-do-kraja-godine/" target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/e1drL4s_TzL9n_gaKA55rWl6OWXGVBubxMbozgJQrh4/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDUvZW9uLXNvbGFybmktcGFuZWxpLXNpYmVuaWsucG5n.webp">
                    <div class="full flex">
                        <h2 class="full">Od početka godine postavljeno je više od 2000 novih solarnih elektrana. Ovim tempom, udvostručit će se ukupni broj do kraja 2023.</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>

                <a class="third flex flex-responsive relative article-embed stretch pad-me" data-aos="fade-up" data-aos-delay="1500" href="https://www.telegram.hr/promo/nikad-veci-porast-broja-instaliranih-solarnih-elektrana-ali-gradani-jos-uvijek-imaju-pitanja-i-brige-odgovorili-smo-na-njih/" target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/RVrXAyLoa91aiSgPVN1CGesd460S3wxukJ-F0JiEbN0/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDUvcHhsLTA3MDcyMy0xMDEzNTMwMjEuanBn.webp">
                    <div class="full flex">
                        <h2 class="full">Nikad veći porast broja instaliranih solarnih elektrana, ali građani još uvijek imaju pitanja i brige. Odgovorili smo na njih </h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a class="third flex flex-responsive relative article-embed stretch pad-me" data-aos="fade-up" data-aos-delay="1750" href="https://www.telegram.hr/partneri/razgovarali-smo-sa-strucnjakom-solari-mogu-zbog-bure-biti-ucinkovitiji-zimi-nego-ljeti-evo-sto-jos-imati-na-umu/" target="_blank">
                    <img class="shoo-bottom" src="https://www.telegram.hr/wp-content/uploads/2022/11/eon-karabatic2.jpg">
                    <div class="full flex">
                        <h2 class="full">Razgovarali smo sa stručnjakom: 'Solari mogu zbog bure biti učinkovitiji zimi nego ljeti. Evo što još imati na umu'</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a class="third flex flex-responsive relative article-embed stretch pad-me" data-aos="fade-up" data-aos-delay="2000" href="https://www.telegram.hr/partneri/ucinite-svoj-dom-isplativijim-smanjite-racune-za-struju-do-75-a-one-za-vodu-do-50-posto-otkrivamo-kako/" target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/EMr9GXJ2_E--MmTQr9F_5PGlcy4wbOV2muaMKkGXHwM/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTAvdGctbmFzbG92bmEtc2h1dHRlcmZhbWlsaWphLmpwZw.webp">
                    <div class="full flex">
                        <h2 class="full">Učinite svoj dom isplativijim. Smanjite račune za struju do 75, a one za vodu do 50 posto. Otkrivamo kako</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a class="third flex flex-responsive relative article-embed stretch pad-me" data-aos="fade-up" data-aos-delay="2250" href="https://www.telegram.hr/partneri/do-vece-energetske-neovisnosti-u-pet-koraka-i-tek-par-mjeseci-razgovarali-smo-sa-strucnjakom-o-detaljima/" target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/nVsi-k8Ndp202Lcw4GbSsI3gzys16HrQOm0K38m5nbg/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTAvdGctbmFzbG92bmEtMjAyMi0xMC0xMi0zLTIuanBn.webp">
                    <div class="full flex">
                        <h2 class="full">Do veće energetske neovisnosti u pet koraka i tek par mjeseci: Razgovarali smo sa stručnjakom o detaljima</h2>

                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a class="third flex flex-responsive relative article-embed stretch pad-me" data-aos="fade-up" data-aos-delay="2500" href="https://www.telegram.hr/partneri/strucnjak-odgovara-na-11-najcescih-pitanja-o-solarnim-elektranama-treba-paziti-na-cetiri-vazne-stavke/" target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/dcN1VDnroKaFXMo2EdduYeEobNvJBmOnejFxwyVcvcw/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTAvc2h1dHRlcnN0b2NrLTE3MjYyNTIyNzMuanBn.webp">
                    <div class="full flex">
                        <h2 class="full">Stručnjak odgovara na 11 najčešćih pitanja o solarnim elektranama: 'Treba paziti na četiri važne stavke'</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
            </div>
        </section>
        <footer class="full flex relative native-signature">
            <div class="container text-container flex relative stretch">
                <div class="full center logo-line">
                    <img src="<?php echo $native_path ?>img/eon_logo.svg" alt="E.ON logo">
                    <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
                </div>
                <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom E.ON i po najvišim uredničkim standardima Telegram Media Grupe.</p>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>

</html>