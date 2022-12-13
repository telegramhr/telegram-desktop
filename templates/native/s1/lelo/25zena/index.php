<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/lelo/25zena/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=2.0" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $native_path ?>slick/slick.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>slick/slick.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,700;0,900;1,400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=2.0" type="text/css" />
    <script src="<?php echo $native_path ?>functions.js"></script>
</head>
<div class="main-container flex">
    <div class="full native-hero relative flex stretch">
        <div class="native-title half center flex-responsive flex">
            <div>
                <div class="full native-logos flex">
                    <img src="<?php echo $native_path ?>img/super1_logo_white.svg" alt="Super1 Logo">
                    <img class="partner" src="<?php echo $native_path ?>img/lelo.png" alt="TG Studio logo" />
                </div>
                <h1 class="full"><div class="full">26 žena, </div><div class="full">26 stvarnih priča </div><div class="full">o seksu</div></h1>
                <h2 class="full">Pričaj i ti. I osvoji svoj LELO</h2>
            </div>
        </div>
        <div class="native-creative half center relative flex-responsive flex">
            <div>
                <div class="full circle">
                    <div>
                        <div class="full circle">
                            <div class="featured-lady relative">
                                <img src="<?php echo $native_path ?>img/sonja_featured.png" alt="Sonja">
                                <img src="<?php echo $native_path ?>img/andrea_featured.png" alt="Andrea">
                                <img src="<?php echo $native_path ?>img/ema_featured.png" alt="Ema">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <video preload="auto" autoplay="" muted="" loop="" playsinline src="<?php echo $native_path ?>img/lelo_bg.mp4" type="video/mp4"></video>
    </div>
    <div class="container flex relative">
        <p>Seks, orgazam i masturbacija uvijek su vruće teme, ali izgleda da se još uvijek premalo o tome govori. Posebna tabu tema je ženski solo užitak i igra sa seks igračkama. Uostalom, kada ste zadnji puta ili jeste li uopće ikada pričale o vlastitom seksualnom užitku i kako do njega dolazite? Zaigrajte sa Super1&LELO igru asocijacija na riječ SEKS, osvojite LELO gadgete <a href="https://www.lelo.com/sona-2-cruise" target="_blank">SONA 2 Cruise</a>, <a href="https://www.lelo.com/ora-3" target="_blank">ORA 2</a>, <a href="https://www.lelo.com/tiani-3">TIANI 3</a> i <a href="https://www.lelo.com/mia-2" target="_blank">MIA 2</a> i sudjelujte u velikom hrvatskom pokretu demistifikacije ženskog užitka.</p>
    </div>
    <h2 class="full big-title center-text">Stvarne priče</h2>
    <div class="slider-container full flex">
        <div class="full price">
            <div class="column">
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/andrea-solomun/" target="_blank">
                    <img src="<?php echo $native_path ?>img/andrea_solomun.jpg" alt="Andrea Solomun">
                    <h3 class="full center-text">Andrea Solomun</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Seks….tvoja prva asocijacija?</div>
                                <div class="answer">Igra, smijeh i zabava.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer">Zora, dok hladan zrak ulazi u prostoriju uz prve zrake svjetlosti.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Orgazam… tvoja prva asocijacija?</div>
                                <div class="answer">… sloboda.</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/paula-brecak/" target="_blank">
                    <img src="<?php echo $native_path ?>img/paula_brecak.jpg" alt="Paula Brečak">
                    <h3 class="full center-text">Paula Brečak</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Seks….tvoja prva asocijacija?</div>
                                <div class="answer">Dodir, strast i glazba.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najseksi filmska scena?</div>
                                <div class="answer">Mr And Mrs Smith, kada razbiju cijelu kuhinju</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Solo play ili u paru?</div>
                                <div class="answer">Hedonizam – za mene pravo i potpuno uživanje u životu uključuje i uživanje u seksu i orgazmima.</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/nives-bosnjak/" target="_blank">
                    <img src="<?php echo $native_path ?>img/nives_bosnjak.jpg" alt="Nives Bosnjak">
                    <h3 class="full center-text">Nives Bošnjak</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Kakav je tvoj stav prema seks igračkama?</div>
                                <div class="answer">Pozitivan. Izazovne su i donose neku novu dimenziju u odnos.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer">Vikend, bilo kad.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Orgazam… tvoja prva asocijacija?</div>
                                <div class="answer">Višestruki..</div>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/ema-glavina/" target="_blank">
                    <img src="<?php echo $native_path ?>img/ema_glavina.jpg" alt="Nives Bosnjak">
                    <h3 class="full center-text">Ema Glavina</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najseksi filmska scena?</div>
                                <div class="answer">Hm, trenutačno mi nijedna posebno ne pada na pamet.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Seks….tvoja prva asocijacija?</div>
                                <div class="answer">Opuštanje.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Solo play ili u paru?</div>
                                <div class="answer">U paru.</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/ema-glavina/" target="_blank">
                    <img src="<?php echo $native_path ?>img/ema_glavina.jpg" alt="Ema Glavina">
                    <h3 class="full center-text">Ema Glavina</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najseksi filmska scena?</div>
                                <div class="answer">Hm, trenutačno mi nijedna posebno ne pada na pamet.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Seks….tvoja prva asocijacija?</div>
                                <div class="answer">Opuštanje.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Solo play ili u paru?</div>
                                <div class="answer">U paru.</div>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/veronika-svob/" target="_blank">
                    <img src="<?php echo $native_path ?>img/veronika_svob.jpg" alt="Veronika Švob">
                    <h3 class="full center-text">Veronika Švob</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Seks….tvoja prva asocijacija?</div>
                                <div class="answer">Otok sreće.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer">Od 19 pa dok kad ide, u rundama najbolje. </div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Orgazam… tvoja prva asocijacija??</div>
                                <div class="answer">Sloboda.</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/latica-martins-filkovic/" target="_blank">
                    <img src="<?php echo $native_path ?>img/latica_martinis_filkovic.jpg" alt="Latica Martins Filković ">
                    <h3 class="full center-text">Latica Martins Filković </h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Kakav je tvoj stav prema seks igračkama?</div>
                                <div class="answer">Oduvijek blagonaklon. </div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najseksi filmska scena?</div>
                                <div class="answer">Carlito’s Way, kad Al Pacino razvali ona vrata je top. </div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer">Jutro.</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/lucija-tunkovic/" target="_blank">
                    <img src="<?php echo $native_path ?>img/lucija_tunkovic.jpg" alt="Lucija Tunković">
                    <h3 class="full center-text">Lucija Tunković </h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Seks….tvoja prva asocijacija?</div>
                                <div class="answer">Znam da će ovo zvučati bizarno, ali Titanic. Da, Titanic...još uvijek se sjećam one scene iz auta.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Kakav je tvoj stav prema seks igračkama?</div>
                                <div class="answer">Cijeli si život želim nabaviti jednu.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Orgazam… tvoja prva asocijacija?</div>
                                <div class="answer">Svemir.</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/katarina-jelcic/" target="_blank">
                    <img src="<?php echo $native_path ?>img/katarina_jelcic.jpg" alt="Katarina Jelčić ">
                    <h3 class="full center-text">Katarina Jelčić</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Kakav je tvoj stav prema seks igračkama?</div>
                                <div class="answer">Volim seks igračke i imam ih cijeli arsenal. Pogotovo su odlične ako ste u dugoj vezi/braku čisto da nije sve rutinski.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najseksi filmska scena?</div>
                                <div class="answer">Bilo koja iz The Secretary ili ako ćemo malo suptilnije, francuski film Blue is the warmest colour ih ima par.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer">Bilo koje vrijeme je dobro za seks. Dobro, možda ne ako ste u redu na blagajni u Konzumu.</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/tina-loncar/" target="_blank">
                    <img src="<?php echo $native_path ?>img/tina_loncar.jpg" alt="Tina Lončar ">
                    <h3 class="full center-text">Tina Lončar </h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najseksi filmska scena?</div>
                                <div class="answer">Prašnjavi podrum. Brad Pitt gol do pasa s cigaretom u ustima. Fight Club. </div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer">Praskozorje. (pun intended)</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Orgazam… tvoja prva asocijacija?</div>
                                <div class="answer">Mir. </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/zorana-jagodic/" target="_blank">
                    <img src="<?php echo $native_path ?>img/zorana_jagodic.jpg" alt="Zorana Jagodić">
                    <h3 class="full center-text">Zorana Jagodić</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Seks… tvoja prva asocijacija?</div>
                                <div class="answer">Strast.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Kakav je tvoj stav prema seks igračkama?</div>
                                <div class="answer">Po potrebi.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Orgazam… tvoja prva asocijacija?</div>
                                <div class="answer">Drhtaj.</div>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/nusa-zunec/" target="_blank">
                    <img src="<?php echo $native_path ?>img/nusa_zunec.jpg" alt="Nuša Žunec">
                    <h3 class="full center-text">Nuša Žunec</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najseksi filmska scena?</div>
                                <div class="answer">Film Secretary iz 2002. Teško je izabrati samo jednu scenu iz ovog filma. </div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer">Večer.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Solo play ili u paru?</div>
                                <div class="answer">Ovo je kao da pitate majku koje dijete više voli.</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/tajana-conka/" target="_blank">
                    <img src="<?php echo $native_path ?>img/tajana_conka.jpg" alt="Tajana Čonka ">
                    <h3 class="full center-text">Tajana Čonka </h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Seks….tvoja prva asocijacija?</div>
                                <div class="answer">Kapljica znoja koja se slijeva ravno po kralježnici.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Kakav je tvoj stav prema seks igračkama?</div>
                                <div class="answer">S osmijehom.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer">24/7.</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/lucija_svob/" target="_blank">
                    <img src="<?php echo $native_path ?>img/lucija_svob.jpg" alt="Lucija Švob">
                    <h3 class="full center-text">Lucija Švob</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Kakav je tvoj stav prema seks igračkama?</div>
                                <div class="answer">Mogu biti korisne i zabavne </div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najseksi filmska scena?</div>
                                <div class="answer">Uglavnom ona koja naslućuje seks. Ne mora uopće bit prikazan.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Solo play ili u paru? </div>
                                <div class="answer">U paru.</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/sonja-svajhler/" target="_blank">
                    <img src="<?php echo $native_path ?>img/sonja_svajhler.jpg" alt="Sonja Švajhler">
                    <h3 class="full center-text">Sonja Švajhler </h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Seks….tvoja prva asocijacija? </div>
                                <div class="answer">Sreća. Uživanje. Hedonizam.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Kakav je tvoj stav prema seks igračkama?</div>
                                <div class="answer">Nikada nisam koristila, ali djeluje zabavno.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Orgazam… tvoja prva asocijacija?</div>
                                <div class="answer">Trnci. </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/martina-friganovic/" target="_blank">
                    <img src="<?php echo $native_path ?>img/martina_friganovic.jpg" alt="Martina Friganović ">
                    <h3 class="full center-text">Martina Friganović </h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Kakav je tvoj stav prema seks igračkama? </div>
                                <div class="answer">Zašto ne? Tko voli, nek’ izvoli. </div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najseksi filmska scena?</div>
                                <div class="answer">Ghost. Nepopravljiva sam romantičarka, znam.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Solo play ili u paru?</div>
                                <div class="answer">Oboje.</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/kim-matrljan/" target="_blank">
                    <img src="<?php echo $native_path ?>img/kim_matrljan.jpg" alt="Kim Matrljan">
                    <h3 class="full center-text">Kim Matrljan</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Seks….tvoja prva asocijacija?</div>
                                <div class="answer">Ruke </div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer">Od kad popijem prvu kavu na dalje.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Orgazam… tvoja prva asocijacija?</div>
                                <div class="answer">Daaa</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/antea-piplica/" target="_blank">
                    <img src="<?php echo $native_path ?>img/antea_piplica.jpg" alt="Antea Piplica">
                    <h3 class="full center-text">Antea Piplica</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Kakav je tvoj stav prema seks igračkama?</div>
                                <div class="answer">Može! Ali ne baš uvijek.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najseksi filmska scena?</div>
                                <div class="answer">The Handmaiden, dosta dobrih scena između njih dvije ima…</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Solo play ili u paru?</div>
                                <div class="answer">Kako kad, ali uglavnom u paru.</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/tina-loncar/" target="_blank">
                    <img src="<?php echo $native_path ?>img/tina_loncar.jpg" alt="Tina Lončar ">
                    <h3 class="full center-text">Tina Lončar </h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najseksi filmska scena?</div>
                                <div class="answer">Prašnjavi podrum. Brad Pitt gol do pasa s cigaretom u ustima. Fight Club. </div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer">Praskozorje. (pun intended)</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Orgazam… tvoja prva asocijacija?</div>
                                <div class="answer">Mir. </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/srna-grgic/" target="_blank">
                    <img src="<?php echo $native_path ?>img/srna_grgic.jpg" alt="Srna Grgić">
                    <h3 class="full center-text">Srna Grgić</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Seks….tvoja prva asocijacija?</div>
                                <div class="answer">Vino. </div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Kakav je tvoj stav prema seks igračkama?</div>
                                <div class="answer">Why not?!</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer">Jutro. </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/morana-kovac/" target="_blank">
                    <img src="<?php echo $native_path ?>img/morana_kovac.jpg" alt="Morana Kovač">
                    <h3 class="full center-text">Morana Kovač</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najseksi filmska scena?</div>
                                <div class="answer">Brad Pitt, Troja</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer">Ujutro nakon buđenja.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Orgazam… tvoja prva asocijacija?</div>
                                <div class="answer">Lako dohvatljiv samo solo.</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/andrea-tintor/" target="_blank">
                    <img src="<?php echo $native_path ?>img/andrea_tintor.jpg" alt="Andrea Tintor">
                    <h3 class="full center-text">Andrea Tintor</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Seks….tvoja prva asocijacija?</div>
                                <div class="answer">Sočna naranča iz koje curi sok i pulpa dok je gnječim golim rukama.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Solo play ili u paru?</div>
                                <div class="answer">U paru.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Kakav je tvoj stav prema seks igračkama?</div>
                                <div class="answer">Buddies for life.</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/tamara-babun/" target="_blank">
                    <img src="<?php echo $native_path ?>img/tamara_babun.jpg" alt="Tamara Babun ">
                    <h3 class="full center-text">Tamara Babun</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najseksi filmska scena?</div>
                                <div class="answer">Easy Virtue, scena tanga i Scent of a Woman, scena tanga – ne mogu se odlučiti, vaga:-)</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer">Bilo koje u kojem ugasimo telefone i ne damo se smesti.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Orgazam… tvoja prva asocijacija?</div>
                                <div class="answer">Put u svemir.</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/mirna-mihokovic/" target="_blank">
                    <img src="<?php echo $native_path ?>img/mirna_mihokovic.jpg" alt="Mirna Mihoković">
                    <h3 class="full center-text">Mirna Mihoković</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Seks….tvoja prva asocijacija?</div>
                                <div class="answer">Njam</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Kakav je tvoj stav prema seks igračkama?</div>
                                <div class="answer">Kada su mi bile potrebne, bila sam jako zahvalna što postoje. </div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Solo play ili u paru?</div>
                                <div class="answer">Oboje.</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/terezija-jerkovic-bjelajac/" target="_blank">
                    <img src="<?php echo $native_path ?>img/terezija.jpg" alt="Terezija Jerković- Bjelajac ">
                    <h3 class="full center-text">Terezija Jerković- Bjelajac </h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najseksi filmska scena?</div>
                                <div class="answer">Sve su poprilično fejk i izvještačene, ali bilo koja iz Sin Cityja.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Seks….tvoja prva asocijacija?</div>
                                <div class="answer">Dost’ jednostavno u biti, moj dečko i naša gola tijela.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer">Kad god smo oboje napaljeni.</div>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/marina-tkalcic/" target="_blank">
                    <img src="<?php echo $native_path ?>img/marina_tkalcic.jpg" alt="Marina Tkalčić ">
                    <h3 class="full center-text">Marina Tkalčić </h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Kakav je tvoj stav prema seks igračkama?</div>
                                <div class="answer">U potpunosti afirmativan. Svaka odrasla osoba bi trebala posjedovati seksi accessoire – za mentalni i fizički boljitak.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer">Seks nije stvar trenutka, već međusobnih osjećaja ili želja. Dakle, kad god.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Solo play ili u paru?</div>
                                <div class="answer">It takes two to tango.</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="column">
                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/maja-j/" target="_blank">
                    <img src="<?php echo $native_path ?>img/maja_j.jpg" alt="Maja J.">
                    <h3 class="full center-text">Maja J.</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Seks….tvoja prva asocijacija?</div>
                                <div class="answer">Orgazam.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najseksi filmska scena?</div>
                                <div class="answer">Ona iz filma Stoker.</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Orgazam… tvoja prva asocijacija?</div>
                                <div class="answer">Olakšanje.</div>
                            </div>
                        </div>
                    </div>
                </a>

                <a class="full card relative flex" href="https://super1.telegram.hr/snaga/maja-golub/" target="_blank">
                    <img src="<?php echo $native_path ?>img/maja_golub.jpg" alt="Maja Golub">
                    <h3 class="full center-text">Maja Golub</h3>
                    <div class="card-content relative flex">
                        <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Kakav je tvoj stav prema seks igračkama?</div>
                                <div class="answer">Zašto ne?</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer">Noć</div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Solo play ili u paru?</div>
                                <div class="answer">U paru</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <h2 class="full big-title center-text">Naše priče</h2>
    <div class="full slider-container articles flex">
        <div class="fourth flex-responsive flex">
            <a href="https://super1.telegram.hr/emocije/sve-sto-trebate-znati-o-masturbaciji-i-zenskom-orgazmu-i-kako-ga-postici/" target="_blank" class="full article">
                <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2020/09/pexels-medium-photoclub-4199730-880x520@2x.jpg" alt="Sve što trebate znati o masturbaciji i ženskom orgazmu (i kako ga postići)">
                <div class="article-pad">
                    <h4 class="full">Sve što trebate znati o masturbaciji i ženskom orgazmu (i kako ga postići)</h4>
                    <div class="cta animate">Pročitaj više</div>
                </div>
            </a>
        </div>
        <div class="fourth flex-responsive flex">
            <a href="https://super1.telegram.hr/snaga/zasto-je-zenski-orgazam-i-dalje-tabu-tema-evo-sto-nam-je-ispricala-psihologinja/" target="_blank" class="full article">
                <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2020/09/malvestida-magazine-rvts1dcckyy-unsplash-880x520@2x.jpg" alt="Zašto je ženski orgazam i dalje tabu tema? Evo što nam je ispričala psihologinja">
                <div class="article-pad">
                    <h4 class="full">Zašto je ženski orgazam i dalje tabu tema? Evo što nam je ispričala psihologinja</h4>
                    <div class="cta animate">Pročitaj više</div>
                </div>
            </a>
        </div>
        <div class="fourth flex-responsive flex">
            <a href="https://super1.telegram.hr/relax/bed-vam-je-uvesti-sex-igracke-u-vezu-mozda-se-predomislite-uz-ove-sjajne-komade/" target="_blank" class="full article">
                <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2020/09/hr_190717_lelo_soraya_2_0115_v1-low_res-preview-1-880x520@2x.jpg" alt="Bed vam je uvesti sex igračke u vezu? Možda se predomislite uz ove sjajne komade ">
                <div class="article-pad">
                    <h4 class="full">Bed vam je uvesti sex igračke u vezu? Možda se predomislite uz ove sjajne komade</h4>
                    <div class="cta animate">Pročitaj više</div>
                </div>
            </a>
        </div>
        <div class="fourth flex-responsive flex">
            <a href="https://super1.telegram.hr/snaga/pitale-smo-zene-koliko-poznaju-seks-igracke-iznenadit-cete-se/" target="_blank" class="full article">
                <img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2020/10/lelo-880x520@2x.jpg" alt="Pitale smo žene koliko poznaju seks igračke. Iznenadit ćete se">
                <div class="article-pad">
                    <h4 class="full">Pitale smo žene koliko poznaju seks igračke. Iznenadit ćete se</h4>
                    <div class="cta animate">Pročitaj više</div>
                </div>
            </a>
        </div>
    </div>
    <h2 class="full big-title center-text">Seks u brojkama</h2>
    <div class="slider-container full flex infographic">
        <div class="fourth flex flex-responsive">
            <h1 class="full center-text">80%</h1>
            <p class="full center-text">ispitanika do svog prvog orgazma došlo je masturbacijom</p>
        </div>
        <div class="fourth flex flex-responsive">
            <h1 class="full center-text">60%</h1>
            <p class="full center-text">ljudi treba klitoralnu stimulaciju za orgazam</p>
        </div>
        <div class="fourth flex flex-responsive">
            <h1 class="full center-text">67%</h1>
            <p class="full center-text">ljudi glumi orgazam</p>
        </div>
        <div class="fourth flex flex-responsive">
            <h1 class="full center-text">15%</h1>
            <p class="full center-text">ljudi nikada ne razgovara o seksu</p>
        </div>
    </div>
    <h2 class="full big-title center-text">Kreativni natječaj</h2>
    <div class="container flex realative">
        <form id="lelo-form" class="full flex" action="<?php echo site_url() ?>/wp-admin/admin-post.php" method="post">
            <h2 class="full">„Reci seks i osvoji svoj LELO“</h2>
            <label for="ime" class="full">Tvoje ime (ili pseudonim)?</label>
            <input type="text" id="ime" name="ime">
            <label for="email" class="full">Tvoj email?</label>
            <input type="email" id="email" name="email">
            <label for="asocijacija" class="full">Seks….tvoja prva asocijacija?</label>
            <input type="text" id="asocijacija" name="asocijacija">
            <label for="igracke" class="full">Kakav je tvoj stav prema seks igračkama?</label>
            <input type="text" id="igracke" name="igracke">
            <label for="scena" class="full">Najseksi filmska scena?</label>
            <input type="text" id="scena" name="scena">
            <label for="vrijeme" class="full">Najbolje vrijeme za seks?</label>
            <input type="text" id="vrijeme" name="vrijeme">
            <label for="solo" class="full">Solo play ili u paru?</label>
            <input type="text" id="solo" name="solo">
            <label for="orgazam" class="full">Orgazam… tvoja prva asocijacija?</label>
            <input type="text" id="orgazam" name="orgazam">
            <label for="prijedlog" class="full"><b>PITANJE ZA KREATIVNI NATJEČAJ:</b> Napišite nam zašto baš vama treba LELO sex igračka.</label>
            <input type="text" id="prijedlog" name="prijedlog">
            <p>Četiri najkreativnija i najoriginalnija odgovora nagrađujemo s LELO gadgetima <a href="https://www.lelo.com/sona-2-cruise" target="_blank">SONA 2 Cruise</a>, <a href="https://www.lelo.com/ora-3" target="_blank">ORA 2</a>, <a href="https://www.lelo.com/tiani-3">TIANI 3</a> i <a href="https://www.lelo.com/mia-2" target="_blank">MIA 2</a>. U natječaj se možete uključiti do 25.listopada 2020. Dobitnike objavljujemo na portalu Super1 28. listopada 2020.</p>
            <div class="full flex consent-parent">
                <input type="checkbox" id="consent" name="consent" value="1" required><label class="consent-label" for="consent">Prihvaćam <a target="_blank" href="https://super1.telegram.hr/pravila-privatnosti/">pravila privatnosti Super1</a> i <a target="_blank" href="https://super1.telegram.hr/snaga/opci-uvjeti-nagradnog-natjecaja/">pravila kreativnog natječaja</a> i razumijem da će podaci u ovoj anketi biti podijeljeni s Lelom</label>
            </div>
            <?php wp_nonce_field('lelo') ?>
            <div class="full center">
                <button id="submit-form-apply" class="submit-btn" type="submit">Pošalji odgovore</button>
                <div id="submitted-apply" class="hide">Odgovori uspješno spremljeni. Hvala!</div>
            </div>
        </form>
        <script>
            jQuery('#lelo-form').submit(function(e) {
                e.preventDefault();
                jQuery.post('<?php echo site_url() ?>/wp-admin/admin-post.php', {
                    'action': 'super1_lelo',
                    'ime': jQuery('#ime').val(),
                    'email': jQuery('#email').val(),
                    'asocijacija': jQuery('#asocijacija').val(),
                    'igracke': jQuery('#igracke').val(),
                    'scena': jQuery('#scena').val(),
                    'vrijeme': jQuery('#vrijeme').val(),
                    'orgazam': jQuery('#orgazam').val(),
                    'prijedlog': jQuery('#prijedlog').val(),
                    'consent': jQuery('#consent').val(),
                    'solo': jQuery('#solo').val(),
                    '_wpnonce': jQuery('#_wpnonce').val()
                }, function() {
                    jQuery('#submit-form-apply').hide();
                    jQuery('#submitted-apply').removeClass('hide');
                })
            })
        </script>
    </div>
    <h2 class="full big-title center-text">Vaše priče</h2>
    <div class="slider-container full flex">
        <div class="full price">
            <?php
            $q = new WP_Query([
                'post_per_page' => -1,
                'orderby' => 'rand',
                'post_type' => 'lelo',
                'post_status' => 'publish',
                'ignore_sticky_posts' => true,
                'no_found_rows' => true
            ]);
            $open = false;
            while ($q->have_posts()) {
                $q->the_post();
                if ($q->current_post % 2 === 0) {
                    ?><div class="column"><?php
                    $open = true;
                }
                ?>
                <a class="full card relative flex" href="<?php the_permalink(); ?>" target="_blank">
                    <img src="<?php echo $native_path.'img/avatar_'.rand(1,6).'.jpg'; ?>" alt="Čitateljica">
                    <h3 class="full center-text"><?php echo get_post_meta( get_the_ID(), 'tvoje_ime', true ) ; ?></h3>
                    <div class="card-content relative flex">
			            <?php $rng = rand(0, 500) / 100; ?>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Seks….tvoja prva asocijacija?</div>
                                <div class="answer"><?php echo get_post_meta( get_the_ID(), 'seks_tvoja_prva_asocijacija', true ) ; ?></div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Kakav je tvoj stav prema seks igračkama?</div>
                                <div class="answer"><?php echo get_post_meta( get_the_ID(), 'kakav_je_tvoj_stav_prema_seks_igrackama', true ) ; ?></div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najseksi filmska scena?</div>
                                <div class="answer"><?php echo get_post_meta( get_the_ID(), 'najseksi_filmska_scena', true ) ; ?></div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Najbolje vrijeme za seks?</div>
                                <div class="answer"><?php echo get_post_meta( get_the_ID(), 'najbolje_vrijeme_za_seks', true ) ; ?></div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Solo play ili u paru?</div>
                                <div class="answer"><?php echo get_post_meta( get_the_ID(), 'solo_play_ili_u_paru', true ) ; ?></div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Orgazam… tvoja prva asocijacija?</div>
                                <div class="answer"><?php echo get_post_meta( get_the_ID(), 'orgazam_-_tvoja_prva_asocijacija', true ) ; ?></div>
                            </div>
                        </div>
                        <div class="center" style="animation-delay: <?php echo $rng; ?>s;">
                            <div class="qna">
                                <div class="question">Zašto baš vama treba LELO sex igračka.</div>
                                <div class="answer"><?php echo get_post_meta( get_the_ID(), 'pitanje_za_kreativni_natjecaj', true ) ; ?></div>
                            </div>
                        </div>
                    </div>
                </a>
                <?php

		        if ($q->current_post % 2 === 1) {
		            ?></div><?php
                    $open = false;
                }
            }
            if ($open) {
            ?></div><?php
            }
            ?>
        </div>
    </div>
    <section class="full native-signature">
        <div class="container flex">
            <div class="full center">
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio_negative.png" alt="TG Studio logo" />
                <img class="partner" src="<?php echo $native_path ?>img/lelo.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom LELO i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </section>
</div>

<?php wp_footer(); ?>
</body>

</html>