<!DOCTYPE html>
<html lang="hr">
<?php
    $native_path = 'http://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/erste/tgneue/';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=3.2" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=4.0" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/4878256e09.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/yjw4lwh.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,600;0,700;1,400&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <script src="<?php echo $native_path ?>slick/slick.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>slick/slick.css" type="text/css" />
    <script src="<?php echo $native_path ?>functions.js"></script>
</head>
<body>
    <div class="main-container flex">
        <header class="full flex relative">
            <div class="full center subheader relative">
                <a href="https://pwa.telegram.hr/" class="logo" target="_blank"><img src="<?php echo $native_path ?>img/telegram_logo_white.svg" alt="Telegram logo"></a>
            </div>
            <div class="full hero-element center relative">
                <video preload="auto" autoplay="" muted="">
                    <source src="<?php echo $native_path; ?>img/tg_header_countdown.mp4" type="video/mp4">
                </video>
                <div class="full hero-content">
                    <h1 class="full center-text">Stigao je novi Telegram.</h1>
                    <div class="full center clock">
                        <div class="clock-square">
                            <div class="clock-figure">
                                2
                            </div>
                        </div>
                        <div class="clock-square">
                            <div class="clock-figure">
                                0
                            </div>
                        </div>
                        <div class="clock-square">
                            <div class="clock-figure third-clock-figure">
                                1
                            </div>
                            <div class="clock-figure">
                                2
                            </div>
                        </div>
                        <div class="clock-square">
                            <div class="clock-figure fourth-clock-figure">
                                5
                            </div>
                            <div class="clock-figure">
                                6
                            </div>
                            <div class="clock-figure">
                                7
                            </div>
                            <div class="clock-figure">
                                8
                            </div>
                            <div class="clock-figure">
                                9
                            </div>
                            <div class="clock-figure">
                                0
                            </div>
                        </div>
                    </div>
                </div>
                <div class="arrow-indicator center"><div></div></div>
                <a href="https://www.erstebank.hr/hr/george" class="full center george-2 desktop-only" target="_blank">
                    <h3 class="full center-text powered-by">Powered by</h3>
                    <img src="<?php echo $native_path; ?>img/george_full_logo.svg" aria-hidden="true">
                </a>
            </div>
        </header>
        <a href="https://www.erstebank.hr/hr/george" class="full center george-2 mobile-only-flex" target="_blank">
            <h3 class="full center-text powered-by">Powered by</h3>
            <img src="<?php echo $native_path; ?>img/george_full_logo.svg" aria-hidden="true">
        </a>
        <section class="full flex">
            <div class="container flex relative">
                <div class="full native-subtitle center-text relative">
                    <div class="line-decoration-box animate"><div class="line-1 animate"></div><div class="line-2 animate"></div><div class="line-3 animate"></div></div>
                    <h2>Nakon 5 godina beskompromisnog novinarstva, autorskih tekstova i velikih priča, stigla je nova verzija našeg portala. Još bogatija, brža i preglednija.</h2>
                    <div class="line-decoration-box animate"><div class="line-1 animate"></div><div class="line-2 animate"></div><div class="line-3 animate"></div></div>
                </div>
            </div>
            <div class="full quotes center wrap">
                <h2 class="full section-title center-text">O nama pričaju...</h2>
                <div class="half flex-responsive pad-me">
                    <div class="quote sprajc relative">
                        <div class="quotation-marks">„</div>
                        <img class="quote-author-image" src="<?php echo $native_path ?>img/sprajc.png?ver=2.0" alt="Zoran Šprajc" />
                        <h2 class="full">Telegram je učinio internetsko novinarstvo zanimljivijim. Pokazao da ne mora biti nižeg reda i niže razine, da može biti ozbiljno, ako ne i ozbiljnije od takozvanih tradicionalnih medija. Letvicu istraživačkog novinarstva podignuli ste dosta visoko. Telegram čitam dva puta dnevno, najčešće kolumne o politici i kriminalu. Drugo što čitam su tekstovi kolege Andreja Dimitrijevića, jer ga znam i kao novinara Direkta, pa znam kada napiše nešto na Telegramu, nekom će se stolica zatresti.</h2>
                        <h3 class="quote-author">Zoran Šprajc, voditelj RTL Direkta</h3>
                        <div class="quotation-marks">“</div>
                    </div>
                </div>
                <div class="half vizek flex-responsive pad-me">
                    <div class="quote relative">
                        <div class="quotation-marks">„</div>
                        <img class="quote-author-image" src="<?php echo $native_path ?>img/maruska-vizek.png?ver=2.0" alt="Maruška Vižek" />
                        <h2 class="full">Telegram je definitivno drugačiji. Kontinuirano je liberalan i ne odstupa od svog vrijednosnog sustava, a istovremeno je u medijskom mainstreamu. Kod Telegrama je jasna politika promoviranja liberalnog svjetonazora. Čitam ga svaki dan. Volim vaše istraživačke ekskluzive, primjerice Andreja Dimitrijevića, posebno kada su u pitanju nekretninski skandali. Super mi je i Dora Kršul koja prati znanost i obrazovanje, što mi je zanimljivo za moju struku.</h2>
                        <h3 class="quote-author">Maruška Vižek, ekonomistica</h3>
                        <div class="quotation-marks">“</div>
                    </div>
                </div>
                <div class="half abrus flex-responsive pad-me">
                    <div class="quote relative">
                        <div class="quotation-marks">„</div>
                        <img class="quote-author-image" src="<?php echo $native_path ?>img/luka-abrus.png?ver=2.0" alt="Luka Abrus" />
                        <h2 class="full">Telegram čitam zbog longread tekstova u kojima obrađujete priče o ljudima, najviše iz poslovnog svijeta, jer to radite, bar za domaći prostor, na iznimno dubok, detaljan, i pametan način. Volim taj stil pisanja koji potpuno odudara od površnosti i žutila drugih medija. S obzirom na tematiku koja me zanima, najviše to nalazim u tekstovima Mirana Pavića i Ivana Luzara. Telegram u mojoj glavi drži primat kad je riječ o analitičkim pričama. Zanimljive tekstove o ljudima i karijerama ne moram tražiti samo po stranim medijima.</h2>
                        <h3 class="quote-author">Luka Abrus, suosnivač agencije Five</h3>
                        <div class="quotation-marks">“</div>
                    </div>
                </div>
                <div class="half grlic flex-responsive pad-me">
                    <div class="quote relative">
                        <div class="quotation-marks">„</div>
                        <img class="quote-author-image" src="<?php echo $native_path ?>img/grlic1-1.png?ver=2.0" alt="Rajko Grlić" />
                        <h2 class="full">Telegram je jedan od rijetkih portala koji pogledam, svakodnevno, zato što mi odgovara cijeli koncept. Kroz članke izbija i političko opredjeljenje koje mi se čini prihvatljivo. Najupečatljivije je bilo kada ste počeli skidati ministre, jednog po jednog. To je bilo uzbudljivo i dokaz da možda ima neka iluzija nade u ovoj zemlji. Mislim da je to bila jedna ozbiljna novinarska rabota koju ste radili. Najviše čitam tekstove vezane uz kulturu, a najčešće Mladena Plešea i Dragu Hedla. Mislim da ste totalno drugačiji od ostalih portala, jednostavniji i politički nekako, što bi se reklo u socijalizmu, napredniji. Jako je zdravo da postoji Telegram.</h2>
                        <h3 class="quote-author">Rajko Grlić, redatelj</h3>
                        <div class="quotation-marks">“</div>
                    </div>
                </div>
            </div>
            <div class="container flex relative">
                <a class="full article center relative" href="#">
                    <div class="line-decoration-box animate"><div class="line-1 animate"></div><div class="line-2 animate"></div><div class="line-3 animate"></div></div>
                    <img src="https://www.telegram.hr/wp-content/uploads/2020/12/tg-background-840x530.jpg" aria-hidden="true">
                    <div class="article-content relative flex">
                        <h2 class="full">Stigao je novi Telegram. Dizajn smo osvježili, no istraživačko-autorska suština ostaje ista</h2>
                        <p class="full">Telegram je narastao. I zato nam je trebao novi dizajn</p>
                        <div class="full flex">
                            <div class="btn">Pročitaj više</div>
                        </div>
                        <div class="line-decoration-box animate"><div class="line-1 animate"></div><div class="line-2 animate"></div><div class="line-3 animate"></div></div>
                    </div>
                </a>
                <a class="full article center relative" href="#">
                    <img src="https://www.telegram.hr/wp-content/uploads/2020/12/kujundzic-kuscevic-tolusic-840x530-1.jpeg" aria-hidden="true">
                    <div class="article-content relative flex">
                        <h2 class="full">U ovih pet godina Telegram je otkrio niz afera. Donosimo 11 najznačajnijih</h2>
                        <p class="full">Podsjetnik na važna otkrića naših reportera</p>
                        <div class="full flex">
                            <div class="btn">Pročitaj više</div>
                        </div>
                        <div class="line-decoration-box animate"><div class="line-1 animate"></div><div class="line-2 animate"></div><div class="line-3 animate"></div></div>
                    </div>
                    <div class="line-decoration-box animate"><div class="line-1 animate"></div><div class="line-2 animate"></div><div class="line-3 animate"></div></div>
                </a>
            </div>
            <a href="https://www.erstebank.hr/hr/george" class="full flex george hide" target="_blank">
                <h3 class="full center-text powered-by">Powered by</h3>
                <img src="<?php echo $native_path; ?>img/george_square.png?ver=2.0" aria-hidden="true">
            </a>
            <div class="full quotes center wrap">
                <h2 class="full section-title center-text">O nama pričaju...</h2>
                    <div class="third mavric flex-responsive pad-me">
                        <div class="quote relative">
                            <div class="quotation-marks">„</div>
                            <img class="quote-author-image" src="<?php echo $native_path ?>img/mavric.png?ver=2.0" alt="Dražen Mavrić, predsjednik Uprave Nove TV" />
                            <h2 class="full">Kao dio medijske industrije, redovito čitam i pratim različite medije, a portal Telegram je među onima koje svakodnevno pogledam. Čestitke na pet godina uspješnog rada, na velikom broju dobrih priča, i doprinosu hrvatskoj medijskoj sceni - posebno u domeni istraživačkog novinarstva. Želim vam još puno uspjeha!</h2>
                            <h3 class="quote-author">Dražen Mavrić, predsjednik Uprave Nove TV</h3>
                            <div class="quotation-marks">“</div>
                        </div>
                    </div>
                    <div class="third janjic flex-responsive pad-me">
                        <div class="quote relative">
                            <div class="quotation-marks">„</div>
                            <img class="quote-author-image" src="<?php echo $native_path ?>img/natasa-janjic.png?ver=2.0" alt="Nataša Janjić, glumica" />
                            <h2 class="full">Postoje rubrike koje ciljano tražim baš u Telegramu. To su kultura i velike priče. Važan mi je svaki ugao analiza kulturnih događanja, a volim i sve inspirativne, društveno goruće i informativne teme. Svakako je obogatio medijsku scenu, kao relevantna i vrlo zanimljiva društveno-politička platforma. </h2>
                            <h3 class="quote-author">Nataša Janjić, glumica</h3>
                            <div class="quotation-marks">“</div>
                        </div>
                    </div>
                    <div class="third sakota flex-responsive pad-me">
                        <div class="quote relative">
                            <div class="quotation-marks">„</div>
                            <img class="quote-author-image" src="<?php echo $native_path ?>img/sakota.png?ver=2.0" alt="Tvrtko Šakota, chef" />
                            <h2 class="full">Telegram čitam jednom do dvaput tjedno, a najviše pamtim serijale Drage Hedla o slavonskim šerifima. Telegram je promijenio medijsku scenu, u smislu dinamičnosti i pristupa temama, a osim Hedla, najdraži autori su mi dečki s Telesporta.</h2>
                            <h3 class="quote-author">Tvrtko Šakota, chef</h3>
                            <div class="quotation-marks">“</div>
                        </div>
                    </div>
                    <div class="half balen flex-responsive pad-me">
                        <div class="quote relative">
                            <div class="quotation-marks">„</div>
                            <img class="quote-author-image" src="<?php echo $native_path ?>img/hrvoje-balen.png?ver=2.0" alt="Hrvoje Balen, suosnivač Algebre" />
                            <h2 class="full">Ono što na Telegramu najviše volim, kad imam vremena, su dugi formati, komentari, kolumne, velike priče. Upravo po tim formama, koje su bile uglavnom vezane za tisak, Telegram je donio nešto drugačije. Također, krenuli ste s logikom dizajna portala prilagođenog za mobilne uređaje, što se osjeti u preglednosti i jasnoći vizualne komunikacije. Veseli me što je jedan od glavnih autora novog dizajna upravo naš diplomant multimedijskog računarstva. S obzirom na to da sam ponajviše vezan za tehnologiju, obrazovanje i biznis, najčešće čitam tekstove Marka Repeckog i Dore Kršul.</h2>
                            <h3 class="quote-author">Hrvoje Balen, suosnivač Algebre</h3>
                            <div class="quotation-marks">“</div>
                        </div>
                    </div>
                    <div class="half trupcevic flex-responsive pad-me">
                        <div class="quote relative">
                            <div class="quotation-marks">„</div>
                            <img class="quote-author-image" src="<?php echo $native_path ?>img/trupcevic.png?ver=2.0" alt="Boris Trupčević, CEO 24 sata uskoro globalni CEO Forea" />
                            <h2 class="full">Telegram je ono što je stari Globus nekad bio, samo na ekranu, dnevno, a ne na papiru i tjedno. Telegram dobro radi velike priče, a važan je i visoki smisao za estetiku, najviše kroz fotografiju, jer na webu nema dizajna stranica. Svaki dan čitam, najčešće autorske tekstove, ali često i dnevne događaje kojima pronađete neku drugačiju perspektivu. Rado pročitam Hedla, Sanju Modrić, Dimitrijevićeva otkrića, Doru Kršul, Repeckog, Anu Raić-Knežević...</h2>
                            <h3 class="quote-author">Boris Trupčević, CEO 24 sata uskoro globalni CEO Forea</h3>
                            <div class="quotation-marks">“</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container flex relative">
                <a class="full article center relative" href="#">
                    <div class="line-decoration-box animate"><div class="line-1 animate"></div><div class="line-2 animate"></div><div class="line-3 animate"></div></div>
                    <img src="https://www.telegram.hr/wp-content/uploads/2020/12/srednja1-840x530.jpg" aria-hidden="true">
                    <div class="article-content relative flex">
                        <h2 class="full">Kroz ovih pet godina Telegram je pedantno pratio priče o poslovnim uspjesima. Donosimo 12 najinspirativnijih</h2>
                        <p class="full">Pokušavamo afirmirati i predstavljati ljude koji stvaraju nove vrijednosti u Hrvatskoj</p>
                        <div class="full flex">
                            <div class="btn">Pročitaj više</div>
                        </div>
                        <div class="line-decoration-box animate"><div class="line-1 animate"></div><div class="line-2 animate"></div><div class="line-3 animate"></div></div>
                    </div>
                </a>
                <a class="full article center relative" href="#">
                    <img src="https://www.telegram.hr/wp-content/uploads/2020/12/grid-1-840x530.jpg" aria-hidden="true">
                    <div class="article-content relative flex">
                        <h2 class="full">Pitali smo nekoliko redovnih čitatelja koje autore i teme najviše vole na Telegramu</h2>
                        <p class="full">Ekonomisti, režiseri, dizajneri, glumci i znanstvenici o tome zašto čitaju Telegram</p>
                        <div class="full flex">
                            <div class="btn">Pročitaj više</div>
                        </div>
                        <div class="line-decoration-box animate"><div class="line-1 animate"></div><div class="line-2 animate"></div><div class="line-3 animate"></div></div>
                    </div>
                    <div class="line-decoration-box animate"><div class="line-1 animate"></div><div class="line-2 animate"></div><div class="line-3 animate"></div></div>
                </a>
            </div>
            <div class="full quotes center wrap">
                <h2 class="full section-title center-text">O nama pričaju...</h2>
                    <div class="half vukovic flex-responsive pad-me">
                        <div class="quote relative">
                            <div class="quotation-marks">„</div>
                            <img class="quote-author-image" src="<?php echo $native_path ?>img/vukovic-vuk.png?ver=2.0" alt="Vuk Vuković, ekonomist" />
                            <h2 class="full">Kada me netko pita o slobodi medija, uvijek spomenem Telegram kao jedan od slobodnijih medija u Hrvatskoj. Brzo ste se pozicionirali u nekoga tko ima pouzdane informacije. Sjećam se i kada je Telegram  počinjao; bili ste me zvali da vam budem kolumnist, ali nažalost nisam imao vremena. Kada ste mi sada spomenuli da vam je pet godina, mislio sam je od tada prošlo više vremena, da postojite puno dulje. Efekt je postignut i imate kredibilitet. Postali ste relevantni izvor informacija i to je najbitnije. Ako je nešto objavljeno na Telegramu, smatrat ću to relevantnim, ako je objavljeno negdje drugdje, o tome ću onda razmisliti.</h2>
                            <h3 class="quote-author">Vuk Vuković, ekonomist</h3>
                            <div class="quotation-marks">“</div>
                        </div>
                    </div>
                    <div class="half vukovic flex-responsive pad-me">
                        <div class="quote relative">
                            <div class="quotation-marks">„</div>
                            <img class="quote-author-image" src="<?php echo $native_path ?>img/silvana-mendusic.png?ver=2.0" alt="Silvana Menđušić, urednica i novinarka" />
                            <h2 class="full">Telegram je svakako promijenio medijsku scenu, počevši od naslova koje su svi krenuli kopirati. Najvažnija mi se čini odluka da postoji portal koji može objaviti tekst od nekoliko kartica, pa čak sedam, osam, devet, deset kartica, a to bude nevjerojatno pitko. Čitam sve, od Hedla, Jasmina Klarića, Sanje Modrić, Mirana Pavića, Jelene Valentić, Ivana Luzara, gledam te fantastične fotografije Vjekoslava Skledara. Pratim, naravno, i članke Ane Raić Knežević, za koju ne znam kako izvuče sve te fantastične priče. Dijelila sam s njom klupu, pa sam vidjela da radi od jutra do sutra, i da stalno kopa. Moram spomenuti i da sam vidjela kako sjajno rade i urednice na desku, Vanja Došen i Ines Lukić, njih se nikad spominje, a njihov doprinos vidjela sam iznutra. </h2>
                            <h3 class="quote-author">Silvana Menđušić, urednica i novinarka</h3>
                            <div class="quotation-marks">“</div>
                        </div>
                    </div>
                    <div class="third bruketa flex-responsive pad-me">
                        <div class="quote relative">
                            <div class="quotation-marks">„</div>
                            <img class="quote-author-image" src="<?php echo $native_path ?>img/bruketa.png?ver=2.0" alt="Davor Bruketa, dizajner i kreativni direktor" />
                            <h2 class="full">Telegram je modernizirao način na koji se prezentiraju priče. Čitam ga skoro svaki dan, uglavnom Biznis & Tech, te Super1. Omiljena autorica mi je Latica Martinis Filković, a Super1 je dao svjež i zanimljiv pristup toj vrsti tema.</h2>
                            <h3 class="quote-author">Davor Bruketa, dizajner i kreativni direktor</h3>
                            <div class="quotation-marks">“</div>
                        </div>
                    </div>
                    <div class="two-thirds volaric flex-responsive pad-me">
                        <div class="quote relative">
                            <div class="quotation-marks">„</div>
                            <img class="quote-author-image" src="<?php echo $native_path ?>img/janko-popovic-volaric.png?ver=2.0" alt="Janko Popović Volarić, glumac" />
                            <h2 class="full">Telegram je dio tihe borbe za civilizirano u našem dobrano neciviliziranom društvu. Imali ste baš krasnih otkrića u ovih pet godina. Kujundžić, Tolušić i Kuščević feljtoni u nastavcima posebno su mi se svidjeli. Malo je istraživačkog novinarstva u našem medijskom prostoru, a i nema baš prostora za duže tekstove, koji ipak izlažu priču od početka do kraja. Svako jutro uz kavu prvo otvorim Telegram. Volim tekstove Hedla, Plešea, Đive, Dežulovića, Špišića…  Pasionirano pratim Telesport, gdje obožavam duge tekstove, prije svega o NBA-u, ali i tekstove o sportovima koji me ne zanimaju toliko, zbog analitike i pristupa temi.</h2>
                            <h3 class="quote-author">Janko Popović Volarić, glumac</h3>
                            <div class="quotation-marks">“</div>
                        </div>
                    </div>
                    <div class="half medak flex-responsive pad-me">
                        <div class="quote relative">
                            <div class="quotation-marks">„</div>
                            <img class="quote-author-image" src="<?php echo $native_path ?>img/medak.png?ver=2.0" alt="Marin Medak, ugostitelj" />
                            <h2 class="full">Telegram je promijenio medijsku scenu, gotovo pa nedovoljno rano. Postavili ste novi način komunikacije u digitaliji, koji do vašeg dolaska nije postojao. Prednost Indexa je što jako brzo izbacuje informacije, on je najažurniji. Prednost Telegrama je što ima drugačiji pogled, kvalitetnije i realnije tekstove od mnogih drugih medija. Čitam vaše autorske tekstove, drage su mi stvari od Marka Repeckog. Telegram je jedan od četiri medija koje otvaram svaki dan, ima puno čvrstih i kvalitetnih tema na vašem portalu. Super vam je i Super1 koji ste pokrenuli.</h2>
                            <h3 class="quote-author">Marin Medak, ugostitelj</h3>
                            <div class="quotation-marks">“</div>
                        </div>
                    </div>
                    <div class="half ackermann flex-responsive pad-me">
                        <div class="quote relative">
                            <div class="quotation-marks">„</div>
                            <img class="quote-author-image" src="<?php echo $native_path ?>img/daniel-ackermann.png?ver=2.0" alt="Daniel Ackermann, suosnivač agencije Degordian" />
                            <h2 class="full">Od vaših priča najviše mi se urezala afera Eko Sever. Telegram je kasnije otkrio velik broj drugih  afera, ali ova je bila jedna od prvih, ozbiljan istraživački rad koji je nagovijestio važnost Telegrama. U posljednjih deset godina, nitko nije uspio lansirati novi portal i doći u top 10 po čitanosti. Samo Telegram. Ne bez razloga. Telegram je jedinstveni i drugačiji koncept koji jako dobro služi čitateljima, no i cijeloj zajednici. Rijedak slučaj fokusiranja na kvalitetu, a ne kvantitetu. Čitam vas više puta dnevno, cilj mi je biti siguran da sam vidio barem sve naslove.</h2>
                            <h3 class="quote-author">Daniel Ackermann, suosnivač agencije Degordian</h3>
                            <div class="quotation-marks">“</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container flex relative">
                <a class="full article center relative" href="#">
                    <div class="line-decoration-box animate"><div class="line-1 animate"></div><div class="line-2 animate"></div><div class="line-3 animate"></div></div>
                    <img src="https://www.telegram.hr/wp-content/uploads/2020/12/super1-840x530.jpg" aria-hidden="true">
                    <div class="article-content relative flex">
                        <h2 class="full">U ovih pet godina Telegram je osvojio svjetske nagrade i priznanja. Na ova smo najponosniji </h2>
                        <p class="full">Nekoliko godina zaredom nalazimo se na Reutersovoj listi najutjecajnijih medija</p>
                        <div class="full flex">
                            <div class="btn">Pročitaj više</div>
                        </div>
                        <div class="line-decoration-box animate"><div class="line-1 animate"></div><div class="line-2 animate"></div><div class="line-3 animate"></div></div>
                    </div>
                </a>
            </div>
            <div class="full quotes center wrap">
                <h2 class="full section-title center-text">O nama pričaju...</h2>
                    <div class="half sonje flex-responsive pad-me">
                        <div class="quote relative">
                            <div class="quotation-marks">„</div>
                            <img class="quote-author-image" src="<?php echo $native_path ?>img/sonje-velimir.png?ver=2.0" alt="Velimir Šonje, ekonomist" />
                            <h2 class="full">Mislim da je Telegram uspio reafirmirati analitičku formu duljih komentara na portalima i osebujan stil s duljim naslovima. Pokušaji komentara-analiza su nešto što je, s komercijalnim odumiranjem tiska, postupno nestajalo zadnjih deset godina. Da se razumijemo, ima autora koji nastoje tako pisati i u drugim medijima, ali čini mi se da je kod vas to strategija, a drugdje relikt prošlosti. Telegram je malo elitističko osvježenje.</h2>
                            <h3 class="quote-author">Velimir Šonje, ekonomist</h3>
                            <div class="quotation-marks">“</div>
                        </div>
                    </div>
                    <div class="half marasovic flex-responsive pad-me">
                        <div class="quote relative">
                            <div class="quotation-marks">„</div>
                            <img class="quote-author-image" src="<?php echo $native_path ?>img/marasovic.png?ver=2.0" alt="Nevio Marasović, filmski redatelj" />
                            <h2 class="full">Telegram čitam svaki dan, to mi je glavni portal za vijesti. Posebno volim Đivu Đurovića, jer pratim američku politiku, a Telegramove kolumne iznimno su kvalitetne. Najviše pamtim lude afere ministra Kujundžića i situaciju s Lucićem, koji je Hedlu nudio mito. Telegram je promijenio medijsku scenu u Hrvatskoj, vaš pristup sadržaju puno je kvalitetniji i moderniji. Način na koji se obrađuju teme, i na koji je formatiran, rezonira bolje sa svima koji čitaju vijesti na internetu, a ne kupuju novine na kiosku. Inovativan je, donio je novost i osvježenje, s najozbiljnijim pokrivanjem tema, što odgovara načinu na koji pratim informacije.</h2>
                            <h3 class="quote-author">Nevio Marasović, filmski redatelj</h3>
                            <div class="quotation-marks">“</div>
                        </div>
                    </div>
                    <div class="half kresic flex-responsive pad-me">
                        <div class="quote relative">
                            <div class="quotation-marks">„</div>
                            <img class="quote-author-image" src="<?php echo $native_path ?>img/hrvoje-kresic.png?ver=2.0" alt="Hrvoje Krešić, novinar N1 televizije" />
                            <h2 class="full">Telegram je pokazao i dokazao da dugi i ozbiljni tekstovi mogu postojati na portalu. Ta paradigma da internet trpi karticu teksta, fast food varijanta tekstova, tu paradigmu Telegram je okrenuo naopačke. Vidljivo je kako se trudite oko svih detalja, kako naslova, tako i fotografija. Od autora, najzapaženiji mi je Andrej Dimitrijević, posebice tekstovi o ministrima i njihovim aferama. Čitam i tekstove Ane Raić Knežević, te kolumne Jasmina Klarića, Irene Frlan Gašparović i Đive Đurovića. Lijepo je vidjeti da je Telegram na medijsku scenu donio dašak svježine, nove stvari i inovacije.</h2>
                            <h3 class="quote-author">Hrvoje Krešić, novinar N1 televizije</h3>
                            <div class="quotation-marks">“</div>
                        </div>
                    </div>
                    <div class="half zakula flex-responsive pad-me">
                        <div class="quote relative">
                            <div class="quotation-marks">„</div>
                            <img class="quote-author-image" src="<?php echo $native_path ?>img/tea-zakula.png?ver=2.0" alt="Tea Žakula, znanstvenica" />
                            <h2 class="full">Najviše pratim kategoriju tech i intervjue s ljudima koji me impresioniraju i motiviraju. U jednom sam dahu, primjerice, čitala priču Kristine Ivanuš, koja me ostavila bez teksta, te intervju s Damirom Vanđelićem, osobom impresivnog životopisa i rezultata. Zahvalna sam Telegramu što na scenu dovodi ovakve i slične ljude koji odskaču od uobičajenog sivila.</h2>
                            <h3 class="quote-author">Tea Žakula, znanstvenica</h3>
                            <div class="quotation-marks">“</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="full native-signature">
            <div class="container flex">
                <div class="full center">
                    <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio_negative.png?ver=2.0" alt="TG Studio logo" />
                </div>
                <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Erste Bank i po najvišim uredničkim standardima Telegram Media Grupe.</p>
            </div>
        </section>
        <?php //include("footer.php"); ?>
    </div>
    <?php wp_footer(); ?>
</body>

</html>