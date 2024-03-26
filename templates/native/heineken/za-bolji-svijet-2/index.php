<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = get_stylesheet_directory_uri() . '/templates/native/heineken/za-bolji-svijet-2/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/heineken/za-bolji-svijet-2/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/heineken/za-bolji-svijet-2/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/heineken/za-bolji-svijet-2/';
//$native_path = 'http://localhost/za-bolji-svijet-2/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo $native_path ?>img/aos.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=1.13" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>styles.css?ver=1.13" type="text/css" />
    <script src="<?php echo $native_path ?>slick/slick.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>slick/slick.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>slick/slick-theme.css" type="text/css" />
    <script src="<?php echo $native_path ?>function.js?ver=1.13"></script>
    <!-- Fonts -------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;700&family=Maven+Pro&family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main-container flex relative">
        <!-- Mobile Bottom Sticky Nav -->
        <nav class="full bottom-nav mobile-only flex relative">
            <a href="#drustvo" class="third center relative">
                <?php echo file_get_contents($native_path . 'img/people-group-solid.svg'); ?>
                <div class="full center-text">Pomozi <br>društvu</div>
            </a>
            <a href="#umjerenost" class="third center relative">
                <?php echo file_get_contents($native_path . 'img/shield-heart-solid.svg'); ?>
                <div class="full center-text">Umjerenost <br>je cool</div>
            </a>
            <a href="#okolis" class="third center relative">
                <?php echo file_get_contents($native_path . 'img/leaf-solid.svg'); ?>
                <div class="full center-text">Zaštita <br>okoliša</div>
            </a>
        </nav>
        <!-- Top Sticky Nav -->
        <nav class="full top-nav flex relative">
            <div class="container horizontal-pad flex relative">
                <div class="center relative text-logo"><img src="<?php echo $native_path ?>img/za-bolji-svijet-logo.svg" alt="Za bolji svijet logo"></div>
                <div class="center relative desktop-only">
                    <a href="#drustvo" class="center relative animate">
                        <?php echo file_get_contents($native_path . 'img/people-group-solid.svg'); ?>
                        <div class="full center-text">Pomozi društvu</div>
                    </a>
                    <a href="#umjerenost" class="center relative animate">
                        <?php echo file_get_contents($native_path . 'img/shield-heart-solid.svg'); ?>
                        <div class="full center-text">Umjerenost je cool</div>
                    </a>
                    <a href="#okolis" class="center relative animate">
                        <?php echo file_get_contents($native_path . 'img/leaf-solid.svg'); ?>
                        <div class="full center-text">Zaštita okoliša</div>
                    </a>
                </div>
            </div>
        </nav>
        <!-- Hero Video -->
        <header class="full center relative hero-video green-bg">
            <video autoplay loop muted playsinline class="background-video bg-transparent">
                <source src="<?php echo $native_path ?>img/tg_videobg_gentle_flowers.webm?v=2.00" type="video/webm">
                <source src="<?php echo $native_path ?>img/tg_videobg_gentle_flowers.mp4?v=2.00" type="video/mp4">
            </video>
            <div class="container flex relative horizontal-pad stretch">
                <div class="half flex-responsive flex relative">
                    <h1 class="full">Postavite pitanje stručnjacima</h1>
                    <p class="full header-text-container">
                    Pozivamo roditelje maloljetnika da potpuno anonimno postave pitanja o mentalnom zdravlju i konzumaciji alkohola kod mlađih od 18. Vaša pitanja omogućit će nam stvaranje informativnog i relevantnog sadržaja usmjerenog upravo prema rješavanju vaših briga. 
                    </p>
                    <p class="full header-text-container margin-top">
                    Želimo potaknuti dijalog o ključnim temama unutar zajednice u isto vrijeme pružajući podršku i razumijevanje. Sudjelujte u anonimnoj anketi jer vaše mišljenje igra ključnu ulogu u oblikovanju informacija koje dijelimo. Sav sadržaj pripremamo u suradnji sa stručnjacima. 
                    </p>
                </div>
                <div class="half flex-responsive center flex-end relative header-form-parent">
                    <form class="header-form relative" id="pitanje-strucnjacima">
                        <img src="<?php echo $native_path ?>/img/text_bubble.png" aria-hidden="true" class="form-text-bubble hide-later">
                        <img src="<?php echo $native_path ?>/img/cross.png" aria-hidden="true" class="form-cross hide-later">
                        <textarea placeholder="Upišite svoje pitanje" class="hide-later" id="pitanje"></textarea>
                        <div class="full center hide-later"><div class="flex new-btn relative" id="submit-form"><div>Postavite pitanje</div></div></div>
                        <div class="full center-text hide" id="header-form-success">Hvala, vaše pitanje smo spremili.</div>
                    </form>
                </div>
            </div>
        </header>
        <section class="full flex relative" id="okolis">
            <div class="full flex relative">
                <div class="full center relative horizontal-pad">
                    <div class="full center teaser-element">Uskoro za odgovorno odrastanje donosimo savjete i odgovore stručnjaka...</div>
                </div>
            </div>
        </section>
        <!-- Hero Video -->
        <section class="full center relative green-bg intro">
            <div class="container relative center horizontal-pad">
                <div class="two-thirds flex-responsive flex">
                    <h1 class="full center-text">Moja kap za bolji svijet</h1>
                    <p class="full header-text-container center-text">
                        Čini ti se da postoji more problema koje kao društvo trebamo riješiti? Nemoj se osjećati preplavljeno. Za nas je čaša ipak napola puna, mi vidimo more rješenja. Možda ne možeš riješiti sve probleme, ali možeš biti kap u moru rjesenja.
                    </p>
                    <p class="full header-text-container margin-top center-text">
                        Istraži naš specijal o pojedincima, timovima i kompaniji koje iz dana u dan teže zelenijoj budućnosti i rade na rješenjima. Evo kako.
                    </p>
                </div>
            </div>
        </section>
        <!-- DRUSTVO--------- -->
        <section class="full flex relative" id="drustvo">
            <div class="full flex relative">
                <div class="full flex relative horizontal-pad">
                    <h1 class="full caps"><strong>Pomozi</strong> društvu</h1>
                </div>
                <div class="full center relative">
                    <!-- <div class="prev slick-arrow clickable center relative">
                        <img src="<?php echo $native_path ?>/img/prev.svg" aria-hidden="true" class="img-fluid">
                    </div> -->
                    <div class="full flex stretch gallery">
                        <div class="flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/hr-direktorica-o-trendovima-na-trzistu-i-projektima-koje-provode-interno-ima-super-primjera/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/Zfq7Sn6bF6kG2UjNx5IDS3s2sJqvXjrUi7owNMRXi6M/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMTIvc2FzYTE5MTV4dy5qcGc.webp">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">HR direktorica o trendovima na tržištu i projektima koje provode interno. Ima super primjera</h2>
                                    <div class=" flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/biznis-tech/odrzive-kompanije-lakse-privlace-nove-radnike-i-imaju-bolje-poslovne-rezultate-strucnjakinje-nam-objasnile-zasto/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/nefhvbV5Tp54eR8-yOUhWt381BRPiEtPLi0YhLxZXfs/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDkvc2FzYTMwMzl4dy5qcGc.webp">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Održive kompanije lakše privlače nove radnike i imaju bolje poslovne rezultate. Stručnjakinje nam objasnile zašto</h2>
                                    <div class=" flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/36-dani-piva-u-znaku-odlicne-zabave-ali-i-odgovorne-konzumacije/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/6kmg3RxzEAGkZnTFd2RTJXEXZSbROFKTM3WVyT57vNE/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDgvZGFuaS1waXZhLTMuanBn.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">36. Dani piva u znaku odlične zabave, ali i odgovorne konzumacije</h2>
                                    <div class=" flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/zivot/od-vodenja-skladista-i-proizvodnje-do-prodaje-sara-tatjana-i-maja-ruse-predrasude-u-pivarskoj-industriji/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/B0GPYauXsx5mAvGbHaUOwYJ4QXe11P_22jkKmIL8KAA/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDUvdGctbmFzbG92bmEta29sYXo1LTI2LmpwZw.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Od vođenja skladišta i proizvodnje do prodaje: Sara, Tatjana i Maja ruše predrasude u pivarskoj industriji</h2>
                                    <div class=" flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/genijalna-platforma-roditelje-savjetuje-u-odgoju-tinejdzera-vec-10-godina-u-programu-je-sudjelovalo-vise-od-70-skola/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/EU9fwQ9HptL7Mk5dbCH-IXQLj5tVryWgS49_6KgQF0s/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDYvZGl6YWpuLWJlei1uYXNsb3ZhLTEyLmpwZw.webp">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Genijalna platforma roditelje savjetuje u odgoju tinejdžera već 10 godina. U programu je sudjelovalo više od 70 škola</h2>
                                    <div class=" flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/heineken-hrvatska-ce-stipendirati-troje-studenata-karlovackog-veleucilista/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/HMbkMFVnLnWNGARRVPpTL2H7YZfEzsd3kM0B2v8SRpk/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDYvaW1nLTU5MDkuanBn.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">HEINEKEN Hrvatska će stipendirati troje studenata karlovačkog Veleučilišta</h2>
                                    <div class=" flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive slides horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/karlovac-nastavlja-s-projektom-kakvart-otvaraju-nove-runde-prijava-za-gradske-cetvrti-i-mjesne-odbore/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/n0V9IRMbVDluO925shuGMq-WO-CU_ZZlRLcQrIjx88c/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDYvMjY5NzM3NjAzLTE4MzgzMTA1NTk2ODk1NTMtNzM1Nzc4NjQzMjU2NTgyNzQ0NS1uLmpwZw.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Karlovac nastavlja s projektom KAkvart. Otvaraju nove runde prijava za gradske četvrti i mjesne odbore</h2>
                                    <div class="flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive slides horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/obitelj-ima-vaznu-ulogu-u-prevenciji-psihologinja-otkriva-kako-s-djecom-razgovarati-o-alkoholu/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/gywNwPbZLZpfjk6y50q7mik-pnn82TnR7pQwrtg1gSY/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDIvM2E1YTY1ODQuanBn.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Obitelj ima važnu ulogu u prevenciji. Psihologinja otkriva kako s djecom razgovarati o alkoholu</h2>
                                    <div class="flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive slides horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/najnovija-sigurnosna-rjesenja-stite-zdravlje-zaposlenika-te-doprinose-konkurentnosti-kompanija/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/8SAnOl3BlwXhEOI8O0tg3GTUShZC1aRPKeOEkcj_xWQ/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDQvZm90a2EtMS5qcGc.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Najnovija sigurnosna rješenja štite zdravlje zaposlenika te doprinose konkurentnosti kompanija</h2>
                                    <div class="flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive slides horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/od-prvih-proizvodacica-piva-preko-tabu-teme-do-razdoblja-kad-u-njemu-zene-uzivaju-jednako-kao-i-muskarci/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/pCOcJ-NqYrtg3xAKGDQw6PTPd_Mo-JsGPCFPOrB6PDI/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDMvc2h1dHRlcnN0b2NrLTEwNzYwOTY1MjUuanBn.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Od prvih proizvođačica piva, preko tabu teme do razdoblja kad u njemu žene uživaju jednako kao i muškarci</h2>
                                    <div class="flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive slides horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/nase-top-menadzerice-o-liderskim-vjestinama-buducnosti-dobar-voda-vise-slusa-i-manje-govori/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/eQ8yf6gMfZc6iVsZoybP5JqaSLgEXM77uTcMk6YSUPc/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDMvM2E1YTgxMDIuanBn.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Naše top menadžerice o liderskim vještinama budućnosti. 'Dobar vođa više sluša i manje govori'</h2>
                                    <div class="flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive slides horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/u-sijecnju-je-260-citatelja-dalo-svoju-kap-za-bolji-svijet-otkrili-su-sto-ce-ciniti-za-bolje-sutra/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/Heo3qsJL2ib6Fklw-PMReHpODcJZgL04M2sFglznFyw/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDIvc2h1dHRlcnN0b2NrLTE5MTIwMTE5NTguanBn.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">U siječnju je 260 čitatelja dalo svoju kap za bolji svijet. Otkrili su što će činiti za bolje sutra</h2>
                                    <div class="flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive slides horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/ovi-ljudi-svijet-su-ucinili-boljim-mjestom-mozete-i-vi-ukljucite-se-u-nasu-akciju-moja-kap-za-bolji-svijet/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/qtAd-FGcatqpAkTp7VgrimeaNOdf0fFbB8WN6lur_tE/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjEvMTIvc2h1dHRlcnN0b2NrLTEwMTAwMTkwOTQuanBn.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Ovi ljudi svijet su učinili boljim mjestom. Možete i vi, uključite se u našu akciju Moja kap za bolji svijet</h2>
                                    <div class="flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive slides horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/velike-price/ovi-hrvatski-znanstvenici-spasavaju-risove-od-izumiranja-nakon-dvije-godine-borbe-imaju-par-senzacionalnih-vijesti/" target="_blank">
                                <img class="shoo-bottom full" src="https://www.telegram.hr/wp-content/uploads/2021/04/ris-zajednicka-2.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Ovi hrvatski znanstvenici spašavaju risove od izumiranja. Nakon dvije godine borbe imaju par senzacionalnih vijesti</h2>
                                    <div class="flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive slides horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/velike-price/ovi-mladi-ljudi-izvukli-su-se-iz-romskih-naselja-studiraju-idu-u-super-skole-rade-donosimo-njihove-price/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/Gnyp_2NxGR_DH0mGU2uAPPqSNJM7xUcAZyeSTgkQxdg/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjEvMTEvcm9taS16YWplZG5pY2thMS0xLmpwZw.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Ovi mladi ljudi izvukli su se iz romskih naselja, studiraju, idu u super škole, rade. Donosimo njihove priče</h2>
                                    <div class="flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="next slick-arrow clickable center relative">
                        <img src="<?php echo $native_path ?>/img/next.svg" aria-hidden="true" class="img-fluid">
                    </div> -->
                </div>
            </div>
        </section>
        <div class="full flex infographic-element">
            <img src="<?php echo $native_path ?>/img/tg_visual_team.jpg" class="background-img">
            <div class="container flex relative">
                <div class="full flex stretch info-slider">
                    <div>
                        <div class="full center relative">
                            <div class="half center center-wrap horizontal-pad flex-responsive desktop-order-1">
                                <h4 class="full center-text mini-overtitle">Savjet za zajednicu kakvu trebamo 1</h4>
                                <h3 class="full bord center-text">Svakog dana pitaj barem jednu osobu kako se osjeća. Jedno kratko pitanje koje tebe ništa ne košta, nekome može sasvim popraviti raspoloženje.</h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="full center relative">
                            <div class="half center center-wrap horizontal-pad flex-responsive desktop-order-1">
                                <h4 class="full center-text mini-overtitle">Savjet za zajednicu kakvu trebamo 2</h4>
                                <h3 class="full bord center-text">Koja te društvena akcija najviše dotakla u posljednjih godinu dana? Istraži njihove ciljeve, potraži udruge koje se njima bave i kontaktiraj ih. Pronađi način kako možeš doprinijeti i pronađi novu svrhu u svojoj svakodnevici.</h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="full center relative">
                            <div class="half center center-wrap horizontal-pad flex-responsive desktop-order-1">
                                <h4 class="full center-text mini-overtitle">Savjet za zajednicu kakvu trebamo 3</h4>
                                <h3 class="full bord center-text">Postavljaj pitanja i potakni razgovor. Imamo toliko toga za naučiti jedni od drugih. Zašto ne bismo započeli odmah?</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- UMJERENOST--------- -->
        <section class="full flex relative" id="umjerenost">
            <div class="full flex relative">
                <div class="full flex relative horizontal-pad">
                    <h1 class="full caps"><strong>Umjerenost</strong> je cool</h1>
                </div>
                <div class="full flex">
                    <div class="full flex stretch gallery">
                        <div class="third flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/zivot/psihologinja-iz-zagreba-djeca-od-10-do-14-godina-najpodloznija-su-ovim-utjecajima/" target="_blank">
                                <img class="shoo-bottom full" src="https://www.telegram.hr/wp-content/uploads/2023/01/sasa3710xw.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Psihologinja iz Zagreba: 'Djeca od 10 do 14 godina najpodložnija su ovim utjecajima' </h2>
                                    <div class="flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/projekt-za-odgovorno-odrastanje-mladih-ulazi-u-desetu-godinu-djelovanja-s-ciljem-prevencije-problema-maloljetnicke-konzumacije-alkohola/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/L3jrTQWaGBxIWTxP8BPCAqvqnHSCpwb3bA5DQ_GonmY/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDIvY292ZXItZm90a2EuanBn.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Projekt „Za odgovorno odrastanje mladih“ ulazi u desetu godinu djelovanja s ciljem prevencije problema maloljetničke konzumacije alkohola</h2>
                                    <div class="flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/projekt-za-odgovorno-odrastanje-mladih-ulazi-u-svoje-deseto-izdanje-i-u-ovogodisnje-aktivnosti-ukljucuje-cak-58-skola-iz-citave-hrvatske/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/TTlMn4uGeICz_rumwSksY91faPK1liRIDOylTmJbI9c/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDMvemEtb2Rnb3Zvcm5vLW9kcmFzdGFuamUtbWxhZGloLTEuanBn.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Projekt „Za odgovorno odrastanje mladih“ ulazi u svoje deseto izdanje i u ovogodišnje aktivnosti uključuje čak 58 škola iz čitave Hrvatske</h2>
                                    <div class="flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/treneri-i-strucnjaci-za-samodisciplinu-otkrivaju-ovo-su-kljucni-trenuci-u-kojima-99-posto-ljudi-poklekne/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/yCUq7QNnIXCJNNwmitkiUJFqjFWw4b1rLrvDaFtAkig/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDEva292YTI3OTYuanBn.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Treneri i stručnjaci za samodisciplinu otkrivaju: 'Ovo su ključni trenuci u kojima 99 posto ljudi poklekne'</h2>
                                    <div class="flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="full flex infographic-element">
        <img src="<?php echo $native_path ?>/img/tg_visual_selfreflection.jpg" class="background-img">
            <div class="container flex relative">
                <div class="full flex stretch info-slider">
                    <div>
                        <div class="full center relative">
                            <div class="half center center-wrap horizontal-pad flex-responsive desktop-order-1">
                                <h4 class="full center-text mini-overtitle">Savjet za odgovorniji život 1</h4>
                                <h3 class="full bord center-text">Vi uvijek imate kontrolu i ne trebate se ispričavati ni žaliti zbog svojih odluka.</h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="full center relative">
                            <div class="half center center-wrap horizontal-pad flex-responsive desktop-order-1">
                                <h4 class="full center-text mini-overtitle">Savjet za odgovorniji život 2</h4>
                                <h3 class="full bord center-text">Podržite svoju djecu da se odupru vršnjačkom pritisku i budite potpora onima koji se nađu u manjini. S njima komunicirajte otvoreno iskreno i nenasilno. </h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="full center relative">
                            <div class="half center center-wrap horizontal-pad flex-responsive desktop-order-1">
                                <h4 class="full center-text mini-overtitle">Savjet za odgovorniji život 3</h4>
                                <h3 class="full bord center-text">Najvažnije je odluku donijeti sam i jasno komunicirati vlastite granice u svakom društvu.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ZASTITA--------- -->
        <section class="full flex relative" id="okolis">
            <div class="full flex relative">
                <div class="full flex relative horizontal-pad">
                    <h1 class="full caps"><strong>Zaštita</strong> okoliša</h1>
                </div>
                <div class="full flex">
                    <div class="full flex stretch gallery">
                        <div class="third flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/heineken-hrvatska-objavio-svoja-postignuca-u-podrucjima-odrzivosti-u-2022-godini/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/vnZzi_uc64oJDm70-lm7IVtfzkeNc5nQ9L6odw6QQnQ/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMTIvMS01LTEuanBn.webp">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">HEINEKEN Hrvatska objavio svoja postignuća u područjima održivosti u 2022. godini</h2>
                                    <div class=" flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/odgovorno-gospodarenje-otpadom-i-kruznost-danas-odlikuju-uspjesne-kompanije-heineken-hrvatska-u-tom-podrucju-provodi-niz-vaznih-projekata/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/Ixoela5WyHzHvYT0stRSQBfb3QyYmVPq2KUjW_RWeNw/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDgva2FybG92YWNrYS1waXZvdmFyYTEtMzAxMDE4LmpwZw.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Odgovorno gospodarenje otpadom i kružnost danas odlikuju uspješne kompanije. HEINEKEN Hrvatska u tom području provodi niz važnih projekata</h2>
                                    <div class=" flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/promo/u-heinekenu-hrvatska-za-proizvodnju-jedne-litre-piva-danas-je-potrebno-43-manje-vode-nego-prije-15-godina/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/9JIm_vvxTJH22dmg_ply4rmElSumjrfehEHt4Kie-Zg/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDQvemEtdGVsZWdyYW0uanBn.webp">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">U HEINEKENU Hrvatska za proizvodnju jedne litre piva danas je potrebno 43% manje vode nego prije 15 godina</h2>
                                    <div class=" flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/europa-zeli-biti-prvi-klimatski-neutralan-kontinent-ako-ne-ucinimo-nista-cekaju-nas-skupa-hrana-poplave/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/InAw1kCAk-4064HNvVM_ErjZ9IL-JwvbDJ9S7I2tHis/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMDQvc2h1dHRlcnN0b2NrLTEzMTU2MTU0OTAuanBn.webp">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Europa želi biti prvi klimatski neutralan kontinent. Ako ne učinimo ništa čekaju nas skupa hrana, poplave...</h2>
                                    <div class=" flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/biznis-tech/eu-postavlja-ambicioznije-ekoloske-ciljeve-ugljicna-neutralnost-do-2050-godine/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/p4yi9Q4yMV_DJPE1TbCeZzvBOsYkd76mqcGHZcoAY0o/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjEvMDcvdHlsZXItY2FzZXktZmljYml3Zm9wc28tdW5zcGxhc2gtc2NhbGVkLmpwZw.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">EU postavlja ambicioznije ekološke ciljeve: ugljična neutralnost do 2050. godine</h2>
                                    <div class="flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="full flex infographic-element">
        <img src="<?php echo $native_path ?>/img/tg_visual_forestcycling.jpg" class="background-img">
            <div class="container flex relative">
                <div class="full flex stretch info-slider">
                    <div>
                        <div class="full center relative">
                            <div class="half center center-wrap horizontal-pad flex-responsive desktop-order-1">
                                <h4 class="full center-text mini-overtitle">Savjet za zeleniji život 1</h4>
                                <h3 class="full bord center-text">Više šetajte, biciklirajte, trčite, koristite javni prijevoz. Manje vozite i smanjite emisije plinova iz automobila.</h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="full center relative">
                            <div class="half center center-wrap horizontal-pad flex-responsive desktop-order-1">
                                <h4 class="full center-text mini-overtitle">Savjet za zeleniji život 2</h4>
                                <h3 class="full bord center-text">Posadite drvo, uzgajajte bilje, potičite održavanje bioraznolikosti. Time ćete utjecati na povećanje apsorpcije ugljikova dioksida i otpornost našeg okoliša.</h3>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="full center relative">
                            <div class="half center center-wrap horizontal-pad flex-responsive desktop-order-1">
                                <h4 class="full center-text mini-overtitle">Savjet za zeleniji život 3</h4>
                                <h3 class="full bord center-text">Razvrstavajte otpad, reciklirajte što se može reciklirati, darujte ili prenamijenite stvari koje ne koristite.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TIMELINE ----->
        <section class="full flex relative marg-bottom">
            <div class="full flex relative">
                <div class="full flex relative horizontal-pad">
                    <h1 class="full"><strong>Vremenska</strong> crta</h1>
                </div>
                <div class="flex full">
                    <div class="full gallery center stretch">
                        <div class="third center center-wrap flex-responsive center-text">
                            <div class="full center timeline-indicator">
                                <div></div>
                            </div>
                            <h4 class="smaller-title">2010.</h4>
                            <p>Završetak izgradnje pročistača otpadnih voda.</p>
                        </div>
                        <div class="third flex flex-responsive center-text">
                            <div class="full center timeline-indicator">
                                <div></div>
                            </div>
                            <h4 class="smaller-title">2011.</h4>
                            <p>Po prvi put svi hladnjaci koje je kompanija nabavila su „zeleni“, odnosno ekološki prihvatljivi.</p>
                        </div>
                        <div class="third flex flex-responsive center-text">
                            <div class="full center timeline-indicator">
                                <div></div>
                            </div>
                            <h4 class="smaller-title">2012.</h4>
                            <p>Postaju prvo veće industrijsko postrojenje, ali i prva pivovara u Hrvatskoj koja je dobila okolišnu dozvolu Ministarstva zaštite okoliša i prirode.</p>
                        </div>
                        <div class="third flex flex-responsive center-text">
                            <div class="full center timeline-indicator">
                                <div></div>
                            </div>
                            <h4 class="smaller-title">2013.</h4>
                            <p>Kompanija pokreće Dan V – volonterski program za zaposlenike koji su te godine očistili obale rijeke Kupe u središtu Karlovca.</p>
                        </div>
                        <div class="third flex flex-responsive center-text">
                            <div class="full center timeline-indicator">
                                <div></div>
                            </div>
                            <h4 class="smaller-title">2014.</h4>
                            <p>HEINEKEN je globalno prvi put uvršten u Indeks vodećih kompanija po performansama vezanim uz klimatske promjene.</p>
                        </div>
                        <div class="third flex flex-responsive center-text">
                            <div class="full center timeline-indicator">
                                <div></div>
                            </div>
                            <h4 class="smaller-title">2015.</h4>
                            <p>U sklopu Dana piva u Karlovcu kompanija, putem tzv. zelenih patrola, prvi put organizira ekološku akciju skupljanja i razvrstavanja otpada pod sloganom „Recikliraj i nazdravi“.</p>
                        </div>
                        <div class="third flex flex-responsive center-text">
                            <div class="full center timeline-indicator">
                                <div></div>
                            </div>
                            <h4 class="smaller-title">2016.</h4>
                            <p>Smanjena količina specifičnog nerecikliranog industrijskog otpada za čak 39% u odnosu na prethodnu godinu.</p>
                        </div>
                        <div class="third flex flex-responsive center-text">
                            <div class="full center timeline-indicator">
                                <div></div>
                            </div>
                            <h4 class="smaller-title">2017.</h4>
                            <p>Izgradnja zelenog skladišta gotovih proizvoda vrijednog 2,5 milijuna eura koje je svrstano u energetski razred A+.</p>
                        </div>
                        <div class="third flex flex-responsive center-text">
                            <div class="full center timeline-indicator">
                                <div></div>
                            </div>
                            <h4 class="smaller-title">2018.</h4>
                            <p>Na krovu zelenog skladišta postavljeno 1.380 solarnih panela čime je smanjena emisija CO2 za otprilike 118,5 tona godišnje.</p>
                        </div>
                        <div class="third flex flex-responsive center-text">
                            <div class="full center timeline-indicator">
                                <div></div>
                            </div>
                            <h4 class="smaller-title">2019.</h4>
                            <p>Korištenje bioplina za dobivanje toplinske energije za proizvodnju i grijanje, čime se štedi potrošnja zemnog plina te smanjuje emisija CO2 u visini 110 tona godišnje.</p>
                        </div>
                        <div class="third flex flex-responsive center-text">
                            <div class="full center timeline-indicator">
                                <div></div>
                            </div>
                            <h4 class="smaller-title">2020.</h4>
                            <p>U proizvodnji korišteno 100% električne energije dobivene iz obnovljivih izvora.</p>
                        </div>
                        <div class="third flex flex-responsive center-text">
                            <div class="full center timeline-indicator">
                                <div></div>
                            </div>
                            <h4 class="smaller-title">2021.</h4>
                            <p>Smanjena emisija CO2 za 11% po hektolitru proizvedenog piva u odnosu na 2020.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php /*
        <!-- MREZA KAPI -->
        <section class="full flex relative">
            <div class="container flex relative">
                <div class="full flex relative horizontal-pad">
                    <h1 class="full"><strong>Mreža kapi</strong> za bolji svijet</h1>
                </div>
                <div class="full flex">
                    <div class="full flex stretch">
                        <div class="third flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="#" target="_blank">
                                <img class="shoo-bottom" src="<?php echo $native_path ?>/img/grey_placeholder.png">
                                <div class="full flex">
                                    <h2 class="full">MIRKO MIRKIC</h2>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="#" target="_blank">
                                <img class="shoo-bottom" src="<?php echo $native_path ?>/img/grey_placeholder.png">
                                <div class="full flex">
                                    <h2 class="full">PERO PERIC</h2>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="#" target="_blank">
                                <img class="shoo-bottom" src="<?php echo $native_path ?>/img/grey_placeholder.png">
                                <div class="full flex">
                                    <h2 class="full">IVO IVIC</h2>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="#" target="_blank">
                                <img class="shoo-bottom" src="<?php echo $native_path ?>/img/grey_placeholder.png">
                                <div class="full flex">
                                    <h2 class="full">JAKOV JAKIC</h2>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="#" target="_blank">
                                <img class="shoo-bottom" src="<?php echo $native_path ?>/img/grey_placeholder.png">
                                <div class="full flex">
                                    <h2 class="full">DARKO DARKIC</h2>
                                </div>
                            </a>
                        </div>
                        <div class="third flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="#" target="_blank">
                                <img class="shoo-bottom" src="<?php echo $native_path ?>/img/grey_placeholder.png">
                                <div class="full flex">
                                    <h2 class="full">LIKO LIKIC</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- <div class="full flex relative flex-responsive horizontal-pad margin-top">
                    <div class="flex cta-kap fira-font cta-kap-css">PRIJAVI SVOJU KAP</div>
                </div> -->
            </div>
        </section>
        */ ?>
        <!--Footer-->
        <footer class="full flex relative">
            <div class="container flex relative">
                <div class="full flex-responsive relative flex">
                    <div class="full flex relative horizontal-pad pad-bot center">
                        <img class="footer-logo" src="<?php echo $native_path ?>/img/hein_logob.png" alt="Heineken logo">
                        <img class="footer-logo" src="<?php echo $native_path ?>/img/tg_studio.png" alt="Telegram Studio logo">
                    </div>
                </div>
                <div class="full flex-responsive relative flex">
                    <div class="full center relative horizontal-pad">
                        <p class="full footer-text center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom HEINEKEN Hrvatska i po najvišim uredničkim standardima Telegram Media Grupe.</p>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <?php wp_footer(); ?>

</body>

</html>