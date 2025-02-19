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
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=1.16" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>styles.css?ver=1.3" type="text/css" />
    <script src="<?php echo $native_path ?>slick/slick.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>slick/slick.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>slick/slick-theme.css" type="text/css" />
    <script src="<?php echo $native_path ?>function.js?ver=1.2"></script>
    <!-- Fonts -------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;500;700&family=Maven+Pro&family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main-container flex relative">
        <!-- Mobile Bottom Sticky Nav -->
        <nav class="full bottom-nav mobile-only flex relative">
            <a href="#odrastanje" class="fourth center relative">
                <?php echo file_get_contents($native_path . 'img/hands-holding-child.svg'); ?>
                <div class="full center-text">Odgovorno <br>odrastanje</div>
            </a>
            <a href="#drustvo" class="fourth center relative">
                <?php echo file_get_contents($native_path . 'img/people-group-solid.svg'); ?>
                <div class="full center-text">Pomozi <br>društvu</div>
            </a>
            <a href="#umjerenost" class="fourth center relative">
                <?php echo file_get_contents($native_path . 'img/shield-heart-solid.svg'); ?>
                <div class="full center-text">Umjerenost <br>je cool</div>
            </a>
            <a href="#okolis" class="fourth center relative">
                <?php echo file_get_contents($native_path . 'img/leaf-solid.svg'); ?>
                <div class="full center-text">Zaštita <br>okoliša</div>
            </a>
        </nav>
        <!-- Top Sticky Nav -->
        <nav class="full top-nav flex relative">
            <div class="container horizontal-pad flex relative">
                <div class="center relative text-logo"><img src="<?php echo $native_path ?>img/za-bolji-svijet-logo.svg" alt="Za bolji svijet logo"></div>
                <div class="center relative desktop-only">
                <a href="#odrastanje" class="center relative animate">
                        <?php echo file_get_contents($native_path . 'img/hands-holding-child.svg'); ?>
                        <div class="full center-text">Za odgovorno odrastanje</div>
                    </a>
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
        <!-- Kviz -->
        <section class="full flex relative" id="kviz">
        <div class="full flex relative">
            <div class="full center relative horizontal-pad no-mobile-pad bg-odstrastanje">
                <!-- Slide 1 (Active at Start) -->
                <div class="full slide slide-1 active center center-wrap" data-slide="1">
                    <div class="half flex relative horizontal-pad flex-responsive">
                        <div class="full flex">
                            <h3 class="full caps question-chat-bg bold question">Kako pristupiti djetetu ako primijetite da konzumira alkohol?</h3>
                        </div>
                        <div class="answer full flex" data-label="A" data-correct="false">
                            <span>A</span>
                            <div class="bold fira-font">Zabraniti izlaske i oduzeti mu mobitel</div>
                        </div>
                        <div class="answer full flex" data-label="B" data-correct="false">
                            <span>B</span>
                            <div class="bold fira-font">Odmah razgovarati i postaviti nova pravila</div>
                        </div>
                        <div class="answer full flex" data-label="C" data-correct="true">
                            <span>C</span>
                            <div class="bold fira-font">Zbrinuti dijete i razgovarati kad se situacija smiri</div>
                        </div>
                    </div>
                    <div class="half flex-responsive center center-wrap horizontal-pad ">
                        <div class="full chat-bg full-margin center center-wrap">
                            <p class="full center-text response bold"></p>
                            <p class="feedback full"></p> 
                            <a href="https://www.telegram.hr/partneri/ako-ste-roditelj-i-ne-znate-kako-biste-razgovarali-sa-svojim-tinejdzerom-ovo-bi-vas-moglo-zanimati/" target="_blank" class="link-button full" style="display: none;">Pročitaj Više</a>
                            <button class="next-question full" style="display: none;">Sljedeće pitanje</button>
                        </div>
                    </div>
                    <img class="absolute-half-img desktop-only" src="img/chat.png" aria-hidden="true">
                </div>

                <!-- Slide 2 -->
                <div class="full slide slide-2 center center-wrap" data-slide="2" style="display: none;">
                    <div class="half flex relative horizontal-pad flex-responsive">
                        <div class="full flex">
                            <h3 class="full caps question-chat-bg bold question"> Što je dodatan rizičan faktor za razvoj ovisnosti kod maloljetnika?</h3>
                        </div>
                        <div class="answer full flex" data-label="A" data-correct="true">
                            <span>A</span>
                            <div class="bold fira-font">Transgeneracijski aspekt</div>
                        </div>
                        <div class="answer full flex" data-label="B" data-correct="false">
                            <span>B</span>
                            <div class="bold fira-font">Izražena empatija </div>
                        </div>
                        <div class="answer full flex" data-label="C" data-correct="false">
                            <span>C</span>
                            <div class="bold fira-font">Utjecaj društva </div>
                        </div>
                    </div>
                    <div class="half flex-responsive center center-wrap horizontal-pad ">
                            <div class="full chat-bg full-margin center center-wrap">
                                <p class="full center-text response bold"></p>
                                <p class="feedback full"></p> 
                                <a href="https://www.telegram.hr/partneri/ako-ste-roditelj-i-ne-znate-kako-biste-razgovarali-sa-svojim-tinejdzerom-ovo-bi-vas-moglo-zanimati/" target="_blank" class="link-button full" style="display: none;">Pročitaj Više</a>
                                <button class="next-question full" style="display: none;">Sljedeće pitanje</button>
                            </div>
                    </div>
                    <img class="absolute-half-img desktop-only" src="img/guys.png" aria-hidden="true">
                </div>
                <!-- Slide 3 -->
                <div class="full slide slide-3 center center-wrap" data-slide="3" style="display: none;">
                    <div class="half flex relative horizontal-pad flex-responsive">
                        <div class="full flex">
                            <h3 class="full caps question-chat-bg bold">Kako postupiti ako se dijete nađe u društvu koje ga potiče na konzumaciju alkohola? </h3>
                        </div>
                        <div class="answer full flex" data-label="A" data-correct="false">
                            <span>A</span>
                            <div class="bold fira-font">Zabraniti djetetu viđanje s prijateljima</div>
                        </div>
                        <div class="answer full flex" data-label="B" data-correct="false">
                            <span>B</span>
                            <div class="bold fira-font">Pričekati da dijete samo uvidi problem</div>
                        </div>
                        <div class="answer full flex" data-label="C" data-correct="true">
                            <span>C</span>
                            <div class="bold fira-font">Razgovarati s djetetom i ponuditi savjet </div>
                        </div>
                    </div>
                    <div class="half flex-responsive center center-wrap horizontal-pad ">
                                <div class="full chat-bg full-margin center center-wrap">
                                    <p class="full center-text response bold"></p>
                                    <p class="feedback full"></p> 
                                    <a href="https://www.telegram.hr/partneri/ako-ste-roditelj-i-ne-znate-kako-biste-razgovarali-sa-svojim-tinejdzerom-ovo-bi-vas-moglo-zanimati/" target="_blank" class="link-button full" style="display: none;">Pročitaj Više</a>
                                    <button class="next-question full" style="display: none;">Sljedeće pitanje</button>
                                </div>
                    </div>
                    <img class="absolute-half-img desktop-only" src="img/red-chat.png" aria-hidden="true">
                </div>
                <!-- Slide 4 -->
                <div class="full slide slide-4 center center-wrap" data-slide="4" style="display: none;">
                    <div class="half flex relative horizontal-pad flex-responsive">
                        <div class="full flex">
                            <h3 class="full caps question-chat-bg bold question">Koja je prednost toga da u razgovoru s djetetom izrazimo svoje osjećaje?</h3>
                        </div>
                        <div class="answer full flex" data-label="A" data-correct="false">
                            <span>A</span>
                            <div class="bold fira-font">Potičemo djecu da preuzmu odgovornost za svoje postupke</div>
                        </div>
                        <div class="answer full flex" data-label="B" data-correct="true">
                            <span>B</span>
                            <div class="bold fira-font">Olakšavamo izražavanje osjećaja roditelja, potičemo dijalog </div>
                        </div>
                        <div class="answer full flex" data-label="C" data-correct="false">
                            <span>C</span>
                            <div class="bold fira-font">Jasno pokazujemo koliko smo ljuti na njih </div>
                        </div>
                    </div>
                    <div class="half flex-responsive center center-wrap horizontal-pad ">
                            <div class="full chat-bg full-margin center center-wrap">
                                <p class="full center-text response bold"></p>
                                <p class="feedback full"></p> 
                                <a href="https://www.telegram.hr/partneri/ako-ste-roditelj-i-ne-znate-kako-biste-razgovarali-sa-svojim-tinejdzerom-ovo-bi-vas-moglo-zanimati/" target="_blank" class="link-button full" style="display: none;">Pročitaj Više</a>
                                <button class="next-question full" style="display: none;">Sljedeće pitanje</button>
                            </div>
                    </div>
                    <img class="absolute-half-img desktop-only" src="img/chat.png" aria-hidden="true">
                </div>
                <!-- Slide 5 -->
                <div class="full slide slide-5 center center-wrap" data-slide="5" style="display: none;">
                    <div class="half flex relative horizontal-pad flex-responsive">
                        <div class="full flex">
                            <h3 class="full caps question-chat-bg bold">Koji je glavni razlog zašto konzumacija alkohola kod maloljetnika može biti opasna?</h3>
                        </div>
                        <div class="answer full flex" data-label="A" data-correct="false">
                            <span>A</span>
                            <div class="bold fira-font">Maloljetnici ne znaju kontrolirati količinu unesenog alkohola</div>
                        </div>
                        <div class="answer full flex" data-label="B" data-correct="true">
                            <span>B</span>
                            <div class="bold fira-font">Njihovi mozgovi nisu u potpunosti razvijeni, osjetljiviji su na posljedice</div>
                        </div>
                        <div class="answer full flex" data-label="C" data-correct="false">
                            <span>C</span>
                            <div class="bold fira-font">Alkohol ima jači učinak na odrasle nego na maloljetnike</div>
                        </div>
                    </div>
                    <div class="half flex-responsive center center-wrap horizontal-pad ">
                            <div class="full chat-bg full-margin center center-wrap">
                                <p class="full center-text response bold"></p>
                                <p class="feedback full"></p> 
                                <a href="https://www.telegram.hr/partneri/o-izazovima-s-tinejdzerima-s-poznatom-psihologinjom-roditelji-cesto-zadaju-pravila-i-onda-naprave-kljucnu-gresku/" target="_blank" class="link-button full" style="display: none;">Pročitaj Više</a>
                                <button class="next-question full" style="display: none;">Sljedeće pitanje</button>
                            </div>
                    </div>
                    <img class="absolute-half-img desktop-only" src="img/guys.png" aria-hidden="true">
                </div>
                <!-- Slide 6 -->
                <div class="full slide slide-6 center center-wrap" data-slide="6" style="display: none;">
                    <div class="half flex relative horizontal-pad flex-responsive">
                        <div class="full flex">
                            <h3 class="full caps question-chat-bg bold">Kako roditeljski primjer utječe na djetetovo shvaćanje umjerene konzumacije alkohola?</h3>
                        </div>
                        <div class="answer full flex" data-label="A" data-correct="false">
                            <span>A</span>
                            <div class="bold fira-font">Dijete može procijeniti umjerenost i bez roditeljskog primjera</div>
                        </div>
                        <div class="answer full flex" data-label="B" data-correct="false">
                            <span>B</span>
                            <div class="bold fira-font">Roditeljski primjer nema konkretan utjecaj na dijete</div>
                        </div>
                        <div class="answer full flex" data-label="C" data-correct="true">
                            <span>C</span>
                            <div class="bold fira-font">Ako se ne pokaže umjerenost, veća je vjerojatnost da dijete to neće znati kada odraste</div>
                        </div>
                    </div>
                    <div class="half flex-responsive center center-wrap horizontal-pad ">
                            <div class="full chat-bg full-margin center center-wrap">
                                <p class="full center-text response bold"></p>
                                <p class="feedback full"></p> 
                                <a href="https://www.telegram.hr/partneri/konzumacija-alkohola-u-mladoj-dobi-ostavlja-trajne-posljedice-razgovarajte-sa-svojom-djecom/" target="_blank" class="link-button full" style="display: none;">Pročitaj Više</a>
                                <button class="next-question full" style="display: none;">Sljedeće pitanje</button>
                            </div>
                    </div>
                    <img class="absolute-half-img desktop-only" src="img/red-chat.png" aria-hidden="true">
                </div>
                <!-- Slide 7 -->
                <div class="full slide slide-7 center center-wrap" data-slide="7" style="display: none;">
                    <div class="half flex relative horizontal-pad flex-responsive">
                        <div class="full flex">
                            <h3 class="full caps question-chat-bg bold">Koja je važnost korištenja rječnika i primjera koje dijete razumije prilikom razgovora s njim?</h3>
                        </div>
                        <div class="answer full flex" data-label="A" data-correct="flase">
                            <span>A</span>
                            <div class="bold fira-font">Bolje povezivanje i izgradnja  povjerenja </div>
                        </div>
                        <div class="answer full flex" data-label="B" data-correct="false">
                            <span>B</span>
                            <div class="bold fira-font">Olakšava objašnjavanje na način koji dijete može razumjeti</div>
                        </div>
                        <div class="answer full flex" data-label="C" data-correct="true">
                            <span>C</span>
                            <div class="bold fira-font">Sve navedeno</div>
                        </div>
                    </div>
                    <div class="half flex-responsive center center-wrap horizontal-pad ">
                            <div class="full chat-bg full-margin center center-wrap">
                                <p class="full center-text response bold"></p>
                                <p class="feedback full"></p> 
                                <a href="https://www.telegram.hr/partneri/konzumacija-alkohola-u-mladoj-dobi-ostavlja-trajne-posljedice-razgovarajte-sa-svojom-djecom/" target="_blank" class="link-button full" style="display: none;">Pročitaj Više</a>
                                <button class="next-question full" style="display: none;">Sljedeće pitanje</button>
                            </div>
                    </div>
                    <img class="absolute-half-img desktop-only" src="img/chat.png" aria-hidden="true">
                </div>
                <!-- Slide 8 -->
                <div class="full slide slide-7 center center-wrap" data-slide="7" style="display: none;">
                    <div class="half flex relative horizontal-pad flex-responsive">
                        <div class="full flex">
                            <h3 class="full caps question-chat-bg bold">Koji je prvi način prevencije nepoželjnih ponašanja kod djece i mladih?</h3>
                        </div>
                        <div class="answer full flex" data-label="A" data-correct="false">
                            <span>A</span>
                            <div class="bold fira-font">Primjena stroge discipline</div>
                        </div>
                        <div class="answer full flex" data-label="B" data-correct="true">
                            <span>B</span>
                            <div class="bold fira-font">Postavljanje jasnih granica koje su primjerene za dijete</div>
                        </div>
                        <div class="answer full flex" data-label="C" data-correct="false">
                            <span>C</span>
                            <div class="bold fira-font">Odluka o zabrani izlazaka</div>
                        </div>
                    </div>
                    <div class="half flex-responsive center center-wrap horizontal-pad ">
                            <div class="full chat-bg full-margin center center-wrap">
                                <p class="full center-text response bold"></p>
                                <p class="feedback full"></p> 
                                <a href="https://www.telegram.hr/partneri/pitali-smo-dvije-vodece-psihologinje-kako-roditelji-trebaju-razgovarati-s-djecom-o-alkoholu/" target="_blank" class="link-button full" style="display: none;">Pročitaj Više</a>
                                <button class="last-question full">Kraj kviza</button>
                            </div>
                    </div>
                    <img class="absolute-half-img desktop-only" src="img/red-chat.png" aria-hidden="true">
                </div>
            </div>
        </div>
    </section>
        <!-- odrastanje -->
        <section class="full flex relative nega-pad" id="odrastanje">
            <div class="full flex relative">
                <div class="full center relative horizontal-pad bg-odstrastanje">
                    <div class="half center relative horizontal-pad flex-responsive">
                        <h1 class="full"><strong>Za odgovorno</strong> <br>odrastanje</h1>
                    </div>
                    <div class="half flex-responsive flex-end center desktop-only">
                        <img class = "third " src="<?php echo $native_path . 'img/guys.png'; ?>" alt="Grey Placeholder">
                        <img class = "third " src="<?php echo $native_path . 'img/chat.png'; ?>" alt="Grey Placeholder">
                        <img class = "third " src="<?php echo $native_path . 'img/red-chat.png'; ?>" alt="Grey Placeholder">
                    </div>
                </div>
                <section class="full center relative intro no-pad-top margin-bot">
                    <div class="container relative center horizontal-pad">
                        <div class="two-thirds flex-responsive flex green-corners">
                            <p class="full header-text-container center-text">
                                U suradnji s HEINEKENOM Hrvatska prikupili smo pitanja čitatelja-roditelja te osmislili sadržaj koji odgovara na neke od velikih izazova roditeljstva. Kroz serijal podcasta i članaka, dotaknuli smo se najčešćih briga i problema roditelja adolescenata koje su podijelili s nama, a sav smo sadržaj napravili u suradnji s psihologinjama i psihoterapeutkinjama Tanjom Dejanović Šagadin i Marijom Berzati. 
                            </p>
                            <p class="full header-text-container margin-top center-text">
                                U nastavku saznajte kako voditi otvorene razgovore s tinejdžerima o važnim temama poput pritiska vršnjaka, prvih izlazaka i važnosti nulte tolerancije prema alkoholu!
                            </p>
                        </div>
                    </div>
                </section>
                <div class="full center relative">
                    <!-- <div class="prev slick-arrow clickable center relative">
                        <img src="<?php echo $native_path ?>/img/prev.svg" aria-hidden="true" class="img-fluid">
                    </div> -->
                    <div class="full flex stretch mobile-slider">
                        <div class="flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/pitali-smo-dvije-vodece-psihologinje-kako-roditelji-trebaju-razgovarati-s-djecom-o-alkoholu/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/LjInEvKAYSfu7mQsZy-rqem0eRqXSeHcgbeEBGwYKBo/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjQvMDgvc2h1dHRlcnN0b2NrLTI0NDM4Mzc2MjkuanBn.webp">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Pitali smo dvije vodeće psihologinje kako roditelji trebaju razgovarati s djecom o alkoholu</h2>
                                    <div class=" flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/sa-psihologinjom-smo-sastavili-kviz-za-roditelje-o-maloljetnickoj-konzumaciji-alkohola-koliko-tocnih-odgovora-imate/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/__t3ecna58nZfls0g1JwblnoQXhN30LKFNH9skTYShI/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjQvMDQvMTIzLmpwZw.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Sa psihologinjom smo sastavili kviz za roditelje o maloljetničkoj konzumaciji alkohola. Koliko točnih odgovora imate? </h2>
                                    <div class=" flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/roditelji-su-nam-otkrili-kako-se-brinu-o-mentalnom-zdravlju-djece-neki-su-nas-odgovori-bas-iznenadili/" target="_blank">
                                <img class="shoo-bottom full" src="https://images.telegram.hr/QBcUXf-oGY6NQ6i284QlH6mWWoUIpU5Yb8Yffhz2qds/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjQvMDUvc29tZS10YWxlLWVpYW5sdzVuZWFtLXVuc3BsYXNoLmpwZw.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">Roditelji su nam otkrili kako brinu o mentalnom zdravlju djece. Neki su nas odgovori baš iznenadili</h2>
                                    <div class=" flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="" target="_blank">
                                <img class="shoo-bottom full" src="">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text">36. Dani piva u znaku odlične zabave, ali i odgovorne konzumacije</h2>
                                    <div class=" flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div> -->
                    </div>
                    <!-- <div class="next slick-arrow clickable center relative">
                        <img src="<?php echo $native_path ?>/img/next.svg" aria-hidden="true" class="img-fluid">
                    </div> -->
                </div>
            </div>
        </section>
        <!-- podcast info-->
        <section class="full flex relative podcast-info shoo-bottom">
            <div class="full relative center gray-bg little-pad-me">
                <a class="fifth flex-responsive center shoo-left-right" href = "https://www.youtube.com/@TelegramhrVideo/videos" target = "_blank">
                    <img class = "full"src="<?php echo $native_path . 'img/podcast.png'; ?>" alt="">
                </a>
                <div class="half flex-responsive flex">
                    <h1 class="full"><strong>Poslušajte podcast </strong></h1>
                    <h1 class="full">Za odgovorno odrastanje</h1>
                    <p class="full podcast-text-container">
                    Pritisak vršnjaka, prvi izlasci, brojne su stvari o kojima roditelji trebaju razmišljati kada je riječ o adolescenciji njihova djeteta. Upravo zbog toga, kako bismo podigli svijest o važnosti nulte tolerancije alkohola kod maloljetnika, ali i odgovorne konzumacije kod punoljetnih adolescenata, uz podršku HEINEKENA Hrvatska, kreirali smo podcast i okupili stručnjake iz područja adolescentske psihologije.
                    </p>
                </div>
                <a class="thirty flex-responsive flex flex-end" href = "https://www.youtube.com/@TelegramhrVideo/videos" target = "_blank" >
                    <img class = "full" src="<?php echo $native_path . 'img/swing.png'; ?>" alt="Grey Placeholder">
                </a>
            </div>
        </section>
        <!-- Youtube / Odgovore -->
        <section class="full flex relative shoo-bottom" id="">
            <div class="full center relative center-wrap">
                <div class="full center relative horizontal-pad">
                    <div class="full center-text teaser-element"><strong>Pogledajte odgovore</strong> na vaša pitanja</div>
                </div>
                <div class="full flex relative stretch video-center">
                    <div class="full center flex-responsive horizontal-pad yt-embed">
                        <iframe class = "yt-embed" src="https://www.youtube-nocookie.com/embed/CfwmTSGRXmg" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="full flex relative flex-responsive horizontal-pad">
                        <iframe class = "yt-embed" src="https://www.youtube.com/embed/vlW4J5ke2Tk" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="full flex relative flex-responsive horizontal-pad">
                        <iframe class = "yt-embed" src="https://www.youtube.com/embed/EUs6HKtlmYA" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="full center flex-responsive horizontal-pad">
                        <iframe class = "yt-embed" src="https://www.youtube-nocookie.com/embed/CfwmTSGRXmg" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="full flex relative flex-responsive horizontal-pad">
                        <iframe class = "yt-embed" src="https://www.youtube.com/embed/vlW4J5ke2Tk" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="full flex relative flex-responsive horizontal-pad">
                        <iframe class = "yt-embed" src="https://www.youtube.com/embed/EUs6HKtlmYA" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- articles / odgovore -->
        <section class="full flex relative shoo-top" id="">
            <div class="full flex relative">
                <div class="full center relative horizontal-pad">
                    <div class="full center-text teaser-element"><strong>Pročitajte odgovore stručnjaka</strong> na aktualne teme</div>
                </div>
                <div class="full center relative">
                    <!-- <div class="prev slick-arrow clickable center relative">
                        <img src="<?php echo $native_path ?>/img/prev.svg" aria-hidden="true" class="img-fluid">
                    </div> -->
                    <div class="full flex stretch mobile-slider">
                        <div class="flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/ako-ste-roditelj-i-ne-znate-kako-biste-razgovarali-sa-svojim-tinejdzerom-ovo-bi-vas-moglo-zanimati/" target="_blank">
                                <img class="full" src="https://images.telegram.hr/17F6biuQkRcDAUqU18UtZ3kR6BhP6sPRKQbkcVugaCk/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjQvMDYvdGctcG9kY2FzdC0xLTEucG5n.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text green-square no-bord">Ako ste roditelj i ne znate kako biste razgovarali sa svojim tinejdžerom, ovo bi vas moglo zanimati</h2>
                                    <div class="negative-margin flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/o-izazovima-s-tinejdzerima-s-poznatom-psihologinjom-roditelji-cesto-zadaju-pravila-i-onda-naprave-kljucnu-gresku/" target="_blank">
                                <img class="full" src="https://images.telegram.hr/w8rsFMQJtiviRqk9iRBpyzoeGHEfWaeF0lkuwMIbOS4/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjQvMDkvdGctcG9kY2FzdC1zdG8tYWtvLWRpamV0ZS1wcmVrcnNpLWRvZ292b3IucG5n.jpg">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text green-square no-bord">O izazovima s tinejdžerima s poznatom psihologinjom: Roditelji često zadaju pravila i onda naprave ključnu grešku</h2>
                                    <div class="negative-margin flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <div class="flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="https://www.telegram.hr/partneri/konzumacija-alkohola-u-mladoj-dobi-ostavlja-trajne-posljedice-razgovarajte-sa-svojom-djecom/" target="_blank">
                                <img class="full" src="https://images.telegram.hr/CMUrmZxlsAN7Er-wflT-iMLq1F6kqaJJYvIWGDy_y5U/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjQvMTEvMi5wbmc.webp">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text green-square no-bord">'Konzumacija alkohola u mlađoj dobi ostavlja trajne posljedice. Razgovarajte sa svojom djecom' </h2>
                                    <div class="negative-margin flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="flex flex-responsive horizontal-pad">
                            <a class="full flex relative" href="" target="_blank">
                                <img class="full" src="">
                                <div class="full center center-wrap">
                                    <h2 class="full center-text green-square no-bord">36. Dani piva u znaku odlične zabave, ali i odgovorne konzumacije</h2>
                                    <div class="negative-margin flex button-52">Pročitaj više...</div>
                                </div>
                            </a>
                        </div> -->
                    </div>
                    <!-- <div class="next slick-arrow clickable center relative">
                        <img src="<?php echo $native_path ?>/img/next.svg" aria-hidden="true" class="img-fluid">
                    </div> -->
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
