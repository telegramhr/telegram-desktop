<!DOCTYPE html>
<html lang="hr">

<?php

/* Potential native paths */
//$native_path = get_stylesheet_directory_uri() . '/templates/native/lice-promjene/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/lice-promjene/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/lice-promjene/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/lice-promjene/';
//$native_path = 'http://localhost/lice-promjene/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="<?php echo $native_path ?>assets/jquery.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
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
    <!-- Functions -->
    <script src="<?php echo $native_path ?>assets/functions.js"></script>
</head>
<body>
    <div class="main-container flex relative">
        <!-- Mobile Bottom Sticky Nav -->
        <nav class="full bottom-nav mobile-only flex relative">
            <a href="#dostojanstvo" class="fourth center relative">
                <?php echo file_get_contents($native_path.'assets/placeholders/shield-heart-solid.svg'); ?>
                <div class="full center-text">Dostojanstvo</div>
            </a>
            <a href="#jednakost" class="fourth center relative">
                <?php echo file_get_contents($native_path.'assets/placeholders/handshake-solid.svg'); ?>
                <div class="full center-text">Jednakost</div>
            </a>
            <a href="#prirodu" class="fourth center relative">
                <?php echo file_get_contents($native_path.'assets/placeholders/leaf-solid.svg'); ?>
                <div class="full center-text">Prirodu</div>
            </a>
            <a href="#buducnost" class="fourth center relative">
                <?php echo file_get_contents($native_path.'assets/placeholders/clock-solid.svg'); ?>
                <div class="full center-text">Budućnost</div>
            </a>
        </nav>
        <!-- Top Nav -->
        <nav class="full top-nav flex relative">
            <div class="container column-horizontal-pad center relative">
                <div class="center relative text-logo"><img class = 'lica-logo' src="<?php echo $native_path ?>assets/logos/logo.svg" alt="Lica promjene logo"></div>
                <div class="center relative desktop-only">
                    <a href="#dostojanstvo" class="center relative animate">
                        <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); ?>
                        <div class="full center-text">Za dostojanstvo</div>
                    </a>
                    <a href="#jednakost" class="center relative animate">
                        <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); ?>
                        <div class="full center-text">Za jednakost</div>
                    </a>
                    <a href="#prirodu" class="center relative animate">
                        <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); ?>
                        <div class="full center-text">Za prirodu</div>
                    </a>
                    <a href="#buducnost" class="center relative animate">
                        <?php //echo file_get_contents($native_path.'assets/placeholders/people-group-solid.svg'); ?>
                        <div class="full center-text">Za budućnost</div>
                    </a>
                </div>
                <div class="center relative text-logo"><img class = 'telegram-logo'src="<?php echo $native_path ?>assets/logos/telegram_logo_black.svg" alt="TELEGRAM logo"></div>
            </div>
        </nav>
        <!-- Hero Video -->
        <!-- <header class="full flex relative hero-video">
            <div class="header-fade"></div>
            <div class="header-noise"></div>
            <video autoplay loop muted playsinline class="background-video">
                <source src="<?php echo $native_path ?>assets/placeholders/tg_videobg_nature.webm?v=1.00" type="video/webm">
                <source src="<?php echo $native_path ?>assets/placeholders/tg_videobg_nature.mp4?v=1.00" type="video/mp4">
            </video>
            <div class="container flex relative column-full-pad">
                <h1 class="full" data-aos="fade-up" data-aos-delay="250">Lorem Ipsum Dolor Sit Amet</h1>
            </div>
        </header> -->
        <!-- Header with Quiz -->
        <header class="full flex relative">
            <div class="container flex relative article featured-article stretch">
                <div class="half center flex-responsive column-full-pad mobile-order-1">
                    <div class="full flex relative">
                        <p class="full capatalise">Telegram Predstavlja</hp>
                        <h1 class="full">Lica promjene</h1>
                        <p class="full">Svaka odluka koju donesemo odraz je naše osobnosti. Volimo li promjene, jesmo li otvoreni novim idejama, koliko nam je važna vlastita a koliko tuđa dobrobit - samo su neke od stvari opisane s 5 velikih osobnosti. A mi ti danas predstavljamo šestu - zelenu ličnost. Otkrij tko si u svijetu održivosti.</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div>
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1">Pročitaj više</div>
                        </div> -->
                    </div>
                </div>
                <!-- Quiz -->
                <div class="half flex flex-responsive column-full-pad lightgray-bg mobile-order-2">
                    <p class="full capatalise">Riješi kratki tekst i otkrij svoju ličnost</p>
                    <!-- Slide 1 -->
                    <div data-slide="1" class="full flex relative slide active slide-1">
                        <h3 class="full question">Ti i tvoji prijatelji želite isplanirati zajedničko putovanje. Što ti predlažeš?</h3>
                        <div class="answers center wrap full">
                            <div data-category="typeA" class="answer animate">
                                <p>Putovanje na mjesta gdje možete sudjelovati u humanitarnim misijama</p>
                            </div>
                            <div data-category="typeB" class="answer animate">
                                <p>Bilo gdje. Samo da je itinerar dobro unaprijed organiziran</p>
                            </div>
                            <div data-category="typeC" class="answer animate">
                                <p>Kampiranje i boravak u prirodi</p>
                            </div>
                            <div data-category="typeD" class="answer animate">
                                <p>Putovanje u gradove gdje se može puno toga naučiti</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div data-slide="2" class="full flex relative slide slide-2">
                        <h3 class="full question">Prije no što krećete, odlazite u dućan kupiti namirnice za put. Koji ti najvažniji kriterij prilikom odabira proizvoda?</h3>
                        <div class="answers center wrap full">
                            <div data-category="typeA" class="answer animate">
                                <p>Društvena odgovornost proizvođača</p>
                            </div>
                            <div data-category="typeB" class="answer animate">
                                <p>Kvaliteta i usklađenost s tvojim standardima</p>
                            </div>
                            <div data-category="typeC" class="answer animate">
                                <p>Održivost pakiranja i ekološka prihvatljivost</p>
                            </div>
                            <div data-category="typeD" class="answer animate">
                                <p>Inovativnost proizvoda i rješenje koje nudi</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div data-slide="3" class="full flex relative slide slide-3">
                        <h3 class="full question">Put je započeo! Koja je tvoja uloga?</h3>
                        <div class="answers center wrap full">
                            <div data-category="typeA" class="answer animate">
                                <p>Preuzimaš ulogu zaštitnika i paziš da se svi osjećaju poštovano</p>
                            </div>
                            <div data-category="typeB" class="answer animate">
                                <p>Postaješ vođa grupe i osiguravaš da sve ide po planu</p>
                            </div>
                            <div data-category="typeC" class="answer animate">
                                <p>Predlažeš ekološki prihvatljive načine prilikom bilo kakve aktivnosti</p>
                            </div>
                            <div data-category="typeD" class="answer animate">
                                <p>Fokusiraš se na analiziranje online savjeta o destinaciji te donošenje informiranih odluka</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                    <div data-slide="4" class="full flex relative slide slide-4">
                        <h3 class="full question">Stigli ste na odredište i imate slobodan dan. Što predlažeš?</h3>
                        <div class="answers center wrap full">
                            <div data-category="typeA" class="answer animate">
                                <p>Posjet lokalnoj zajednici</p>
                            </div>
                            <div data-category="typeB" class="answer animate">
                                <p>Organizirani razgled grada</p>
                            </div>
                            <div data-category="typeC" class="answer animate">
                                <p>Planinarenje</p>
                            </div>
                            <div data-category="typeD" class="answer animate">
                                <p>Posjet muzeju ili znanstvenom centru</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 5 -->
                    <div data-slide="5" class="full flex relative slide slide-5">
                        <h3 class="full question">Tijekom putovanja, primjećuješ da netko u grupi nije zadovoljan. Što radiš?</h3>
                        <div class="answers center wrap full">
                            <div data-category="typeA" class="answer animate">
                                <p>Prilaziš im i pokušavaš saznati kako im možeš pomoći da se osjećaju bolje</p>
                            </div>
                            <div data-category="typeB" class="answer animate">
                                <p>Prilagođavaš planove kako bi svi bili zadovoljni</p>
                            </div>
                            <div data-category="typeC" class="answer animate">
                                <p>Predlažeš aktivnost u prirodi jer bi im svjež zrak mogao podići raspoloženje</p>
                            </div>
                            <div data-category="typeD" class="answer animate">
                                <p>Pokušavaš razumjeti njihove probleme i predlažeš rješenja na temelju informacija koje imaš</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 6 -->
                    <div data-slide="6" class="full flex relative slide slide-6">
                        <h3 class="full question">Destinacija na kojoj se nalazite dobila je brojne nagrade za dobre održive prakse. Što ti se najviše sviđa kod njih?</h3>
                        <div class="answers center wrap full">
                            <div data-category="typeA" class="answer animate">
                                <p>Imaju veliki broj pučkih kuhinja</p>
                            </div>
                            <div data-category="typeB" class="answer animate">
                                <p>Sve recikliraju i rade to pravilno</p>
                            </div>
                            <div data-category="typeC" class="answer animate">
                                <p>Stavljaju veliki naglasak na očuvanje prirodnih resursa</p>
                            </div>
                            <div data-category="typeD" class="answer animate">
                                <p>Jako su dobro informirani koliko svaka stavka grada emitira ugljičnog dioksida</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 7 -->
                    <div data-slide="7" class="full flex relative slide slide-7">
                        <h3 class="full question">Ogladnili ste, a ti predlažeš restoran. Dok ćeš istraživati ponudu restorana, pazit ćeš da</h3>
                        <div class="answers center wrap full">
                            <div data-category="typeA" class="answer animate">
                                <p>Koriste lokalne dobavljače</p>
                            </div>
                            <div data-category="typeB" class="answer animate">
                                <p>Imaju dobru reputaciju</p>
                            </div>
                            <div data-category="typeC" class="answer animate">
                                <p>Rade po ‘low waste’ principu</p>
                            </div>
                            <div data-category="typeD" class="answer animate">
                                <p>Koriste inovativne metode pripreme</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 8 -->
                    <div data-slide="8" class="full flex relative slide slide-8">
                        <h3 class="full question">Kakve ćeš suvenire donijeti svojima ‘doma’?</h3>
                        <div class="answers center wrap full">
                            <div data-category="typeA" class="answer animate">
                                <p>Nešto što podržava zajednicu i napravljeno je od strane lokalnih obrtnika</p>
                            </div>
                            <div data-category="typeB" class="answer animate">
                                <p>Nešto praktično i korisno što će svi moći upotrijebiti</p>
                            </div>
                            <div data-category="typeC" class="answer animate">
                                <p>Nešto ekološki prihvatljivo; napravljeno od recikliranih materijala</p>
                            </div>
                            <div data-category="typeD" class="answer animate">
                                <p>Nešto edukativno, poput knjige</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 9 -->
                    <div data-slide="9" class="full flex relative slide slide-9">
                        <h3 class="full question">Apsolutno si uživao u putovanju, a ponajviše je to zbog tvojih prijatelja. Što najviše cijeniš kod svojih prijatelja?</h3>
                        <div class="answers center wrap full">
                            <div data-category="typeA" class="answer animate">
                                <p>Njihovu empatiju i spremnost da pomognu drugima</p>
                            </div>
                            <div data-category="typeB" class="answer animate">
                                <p>Njihovu pouzdanost i sposobnost organizacije</p>
                            </div>
                            <div data-category="typeC" class="answer animate">
                                <p>Njihovu ljubav prema prirodi i životinjama</p>
                            </div>
                            <div data-category="typeD" class="answer animate">
                                <p>Njihovu znatiželju i volju da stalno uče nešto novo i zanimljivo</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 10 -->
                    <div data-slide="10" class="full flex relative slide slide-10 result">
                        <div class="result">
                            <div class="question">
                                <span></span>
                            </div>
                            <div class="description"></div>
                            <div class="answer animate center">
                                <p class="restart">Restart</p>
                            </div>
                        </div>
                    </div>
                    <div class="progress-indicator"></div>
                </div>
            </div>
        </header>
        <!-- Brown Cube Articles -->
        <section class="full flex relative desktop-only" id="">
            <div class="container flex relative article featured-article stretch column-full-pad">
                <div class="full center relative">
                    <a class="fourth flex relative" target="_blank" href = "#">
                        <img src="<?php echo $native_path ?>assets/placeholders/solar.png" aria-hidden="true">
                        <div class="full article-title">
                            <p class="full capatalise">Priroda</p>
                            <p class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</p>
                        </div>
                    </a>
                    <a class="fourth flex relative column-left-margin" target="_blank" href = "#">
                        <img src="<?php echo $native_path ?>assets/placeholders/weight.png" aria-hidden="true">
                        <div class="full article-title">
                            <p class="full capatalise">Priroda</p>
                            <p class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</p>
                        </div>
                    </a>
                    <a class="fourth flex relative column-left-margin" target="_blank" href = "#">
                        <img src="<?php echo $native_path ?>assets/placeholders/solar.png" aria-hidden="true">
                        <div class="full article-title">
                            <p class="full capatalise">Priroda</p>
                            <p class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</p>
                        </div>
                    </a>
                    <a class="fourth flex relative column-left-margin" target="_blank" href = "#">
                        <img src="<?php echo $native_path ?>assets/placeholders/weight.png" aria-hidden="true">
                        <div class="full article-title">
                            <p class="full capatalise">Priroda</p>
                            <p class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</p>
                        </div>
                    </a>
                </div>
        </section>
        <!-- Za Dostojanstvo Articles -->
        <section class="full flex relative" id ="dostojanstvo">
        <div class="background-text">Dostojanstvo</div>
            <div class="container flex relative article featured-article stretch">
                <div class="forty flex flex-responsive column-full-pad desktop-order-2 mobile-order-1">
                    <div class="full flex relative">
                        <p class="full capatalise">Kategorija Lorem Ispum</hp>
                        <h2 class="full">Za dostojanstvo</h2>
                        <p class="full">Otvorenost prema novim iskustvima i mišljenjima, tvoja je glavna prednost u otkrivanju novih načina za održiviji i zeleniji život. Kreativna rješenja, nekonvencijalne ideje i izazovni zadaci ono su što te pokreće. Zato smo ti ispod pripremili vijesti o ekološkim temama koje bi ti se mogle najviše svidjeti. Krenimo odmah.</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div>
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1">Pročitaj više</div>
                        </div> -->
                    </div>
                </div>
                <div class="sixty center flex-responsive column-full-pad desktop-order-1 wrap mobile-order-2">
                    <a class="full flex relative" target="_blank" href = "#">
                        <img src="<?php echo $native_path ?>assets/placeholders/roba.png" aria-hidden="true">
                        <div class="full article-title">
                            <p class="full capatalise">Priroda</p>
                            <p class="full">Levisice su se prije kupovale svake druge godine, a sad traperice kupujemo svakih par mjeseci. Evo zašto</p>
                        </div>
                    </a>
                    <div class="full center relative column-vertical-pad">
                        <a class="half flex relative" target="_blank" href = "#">
                            <img src="<?php echo $native_path ?>assets/placeholders/weight.png" aria-hidden="true">
                            <div class="full article-title">
                                <p class="full capatalise">Priroda</p>
                                <p class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</p>
                            </div>
                        </a>
                        <a class="half flex relative column-left-margin" target="_blank" href = "#">
                            <img src="<?php echo $native_path ?>assets/placeholders/solar.png" aria-hidden="true">
                            <div class="full article-title">
                                <p class="full capatalise">Priroda</p>
                                <p class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</p>
                            </div>
                        </a>
                    </div>
                    <a class="full center relative column-bottom-margin" target="_blank" href = "#">
                        <div class="third center relative">
                            <img class = "circle-img" src="<?php echo $native_path ?>assets/placeholders/solar.png" aria-hidden="true">
                        </div>
                        <div class="two-thirds center relative wrap">
                            <p class="full capatalise">Priroda</p>
                            <h4 class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</h4>
                        </div>
                    </a>
                    <a class="full center relative column-bottom-margin" target="_blank" href = "#">
                        <div class="third center relative">
                            <img class = "circle-img" src="<?php echo $native_path ?>assets/placeholders/weight.png" aria-hidden="true">
                        </div>
                        <div class="two-thirds center relative wrap">
                            <p class="full capatalise">Priroda</p>
                            <h4 class="full">Levisice su se prije kupovale svake druge godine, a sad traperice kupujemo svakih par mjeseci. Evo zašto</h4>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- Za Jednakost Articles -->
        <section class="full flex relative" id="jednakost">
            <div class="background-text">Jednakost</div>
            <div class="container flex relative article featured-article stretch">
                <div class="forty flex flex-responsive column-full-pad desktop-order-1 mobile-order-1">
                    <div class="full flex relative">
                        <p class="full capatalise">Kategorija Lorem Ispum</hp>
                        <h2 class="full orange-text">Za jednakost</h2>
                        <p class="full">Otvorenost prema novim iskustvima i mišljenjima, tvoja je glavna prednost u otkrivanju novih načina za održiviji i zeleniji život. Kreativna rješenja, nekonvencijalne ideje i izazovni zadaci ono su što te pokreće. Zato smo ti ispod pripremili vijesti o ekološkim temama koje bi ti se mogle najviše svidjeti. Krenimo odmah.</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div>
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1">Pročitaj više</div>
                        </div> -->
                    </div>
                </div>
                <div class="sixty flex-responsive center column-full-pad desktop-order-2 wrap mobile-order-2">
                    <a class="full flex relative" target="_blank" href = "#">
                        <img src="<?php echo $native_path ?>assets/placeholders/roba.png" aria-hidden="true">
                        <div class="full article-title">
                            <p class="full capatalise">Priroda</p>
                            <p class="full">Levisice su se prije kupovale svake druge godine, a sad traperice kupujemo svakih par mjeseci. Evo zašto</p>
                        </div>
                    </a>
                    <div class="full center relative column-vertical-pad">
                        <a class="half flex relative" target="_blank" href = "#">
                            <img src="<?php echo $native_path ?>assets/placeholders/weight.png" aria-hidden="true">
                            <div class="full article-title">
                                <p class="full capatalise">Priroda</p>
                                <p class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</p>
                            </div>
                        </a>
                        <a class="half flex relative column-left-margin" target="_blank" href = "#">
                            <img src="<?php echo $native_path ?>assets/placeholders/solar.png" aria-hidden="true">
                            <div class="full article-title">
                                <p class="full capatalise">Priroda</p>
                                <p class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</p>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="full center relative column-vertical-pad mobile-only flex-repsonsive">
                        <a href="" class="full flex relative">
                            <img src="<?php echo $native_path ?>assets/placeholders/roba.png" aria-hidden="true">
                            <div class="full article-title">
                                <p class="full capatalise">Priroda</p>
                                <p class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</p>
                            </div>
                        </a>
                    </div> -->
                    <a class="full center relative column-bottom-margin" target="_blank" href = "#">
                        <div class="third center relative">
                            <img class = "circle-img" src="<?php echo $native_path ?>assets/placeholders/solar.png" aria-hidden="true">
                        </div>
                        <div class="two-thirds center relative wrap">
                            <p class="full capatalise">Priroda</p>
                            <h4 class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</h4>
                        </div>
                    </a>
                    <a class="full center relative column-bottom-margin" target="_blank" href = "#">
                        <div class="third center relative">
                            <img class = "circle-img" src="<?php echo $native_path ?>assets/placeholders/weight.png" aria-hidden="true">
                        </div>
                        <div class="two-thirds center relative wrap">
                            <p class="full capatalise">Priroda</p>
                            <h4 class="full">Levisice su se prije kupovale svake druge godine, a sad traperice kupujemo svakih par mjeseci. Evo zašto</h4>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- Za Prirodu Articles -->
        <section class="full flex relative" id="prirodu">
        <div class="background-text">Prioda</div>
            <div class="container flex relative article featured-article stretch">
                <div class="forty flex flex-responsive column-full-pad desktop-order-2 mobile-order-1">
                    <div class="full flex relative">
                        <p class="full capatalise">Kategorija Lorem Ispum</hp>
                        <h2 class="full">Za prirodu</h2>
                        <p class="full">Otvorenost prema novim iskustvima i mišljenjima, tvoja je glavna prednost u otkrivanju novih načina za održiviji i zeleniji život. Kreativna rješenja, nekonvencijalne ideje i izazovni zadaci ono su što te pokreće. Zato smo ti ispod pripremili vijesti o ekološkim temama koje bi ti se mogle najviše svidjeti. Krenimo odmah.</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div>
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1">Pročitaj više</div>
                        </div> -->
                    </div>
                </div>
                <div class="sixty center flex-responsive column-full-pad desktop-order-1 wrap mobile-order-2">
                    <a class="full flex relative" target="_blank" href = "#">
                        <img src="<?php echo $native_path ?>assets/placeholders/roba.png" aria-hidden="true">
                        <div class="full article-title">
                            <p class="full capatalise">Priroda</p>
                            <p class="full">Levisice su se prije kupovale svake druge godine, a sad traperice kupujemo svakih par mjeseci. Evo zašto</p>
                        </div>
                    </a>
                    <div class="full center relative column-vertical-pad">
                        <a class="half flex relative" target="_blank" href = "#">
                            <img src="<?php echo $native_path ?>assets/placeholders/weight.png" aria-hidden="true">
                            <div class="full article-title">
                                <p class="full capatalise">Priroda</p>
                                <p class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</p>
                            </div>
                        </a>
                        <a class="half flex relative column-left-margin" target="_blank" href = "#">
                            <img src="<?php echo $native_path ?>assets/placeholders/solar.png" aria-hidden="true">
                            <div class="full article-title">
                                <p class="full capatalise">Priroda</p>
                                <p class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</p>
                            </div>
                        </a>
                    </div>
                    <a class="full center relative column-bottom-margin" target="_blank" href = "#">
                        <div class="third center relative">
                            <img class = "circle-img" src="<?php echo $native_path ?>assets/placeholders/solar.png" aria-hidden="true">
                        </div>
                        <div class="two-thirds center relative wrap">
                            <p class="full capatalise">Priroda</p>
                            <h4 class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</h4>
                        </div>
                    </a>
                    <a class="full center relative column-bottom-margin" target="_blank" href = "#">
                        <div class="third center relative">
                            <img class = "circle-img" src="<?php echo $native_path ?>assets/placeholders/weight.png" aria-hidden="true">
                        </div>
                        <div class="two-thirds center relative wrap">
                            <p class="full capatalise">Priroda</p>
                            <h4 class="full">Levisice su se prije kupovale svake druge godine, a sad traperice kupujemo svakih par mjeseci. Evo zašto</h4>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- Za Buducnost Articles -->
        <section class="full flex relative" id="buducnost">
        <div class="background-text">Budućnost</div>
            <div class="container flex relative article featured-article stretch">
                <div class="forty flex flex-responsive column-full-pad desktop-order-1 mobile-order-1">
                    <div class="full flex relative">
                        <p class="full capatalise">Kategorija Lorem Ispum</hp>
                        <h2 class="full orange-text">Za budućnost</h2>
                        <p class="full">Otvorenost prema novim iskustvima i mišljenjima, tvoja je glavna prednost u otkrivanju novih načina za održiviji i zeleniji život. Kreativna rješenja, nekonvencijalne ideje i izazovni zadaci ono su što te pokreće. Zato smo ti ispod pripremili vijesti o ekološkim temama koje bi ti se mogle najviše svidjeti. Krenimo odmah.</p>
                        <!-- <div class="full flex article-author">
                            <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                        </div>
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1">Pročitaj više</div>
                        </div> -->
                    </div>
                </div>
                <div class="sixty center flex-responsive column-full-pad desktop-order-2 wrap mobile-order-2">
                    <a class="full flex relative" target="_blank" href = "#">
                        <img src="<?php echo $native_path ?>assets/placeholders/roba.png" aria-hidden="true">
                        <div class="full article-title">
                            <p class="full capatalise">Priroda</p>
                            <p class="full">Levisice su se prije kupovale svake druge godine, a sad traperice kupujemo svakih par mjeseci. Evo zašto</p>
                        </div>
                    </a>
                    <div class="full center relative column-vertical-pad">
                        <a class="half flex relative" target="_blank" href = "#">
                            <img src="<?php echo $native_path ?>assets/placeholders/weight.png" aria-hidden="true">
                            <div class="full article-title">
                                <p class="full capatalise">Priroda</p>
                                <p class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</p>
                            </div>
                        </a>
                        <a class="half flex relative column-left-margin" target="_blank" href = "#">
                            <img src="<?php echo $native_path ?>assets/placeholders/solar.png" aria-hidden="true">
                            <div class="full article-title">
                                <p class="full capatalise">Priroda</p>
                                <p class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</p>
                            </div>
                        </a>
                    </div>
                    <a class="full center relative column-bottom-margin" target="_blank" href = "#">
                        <div class="third center relative">
                            <img class = "circle-img" src="<?php echo $native_path ?>assets/placeholders/solar.png" aria-hidden="true">
                        </div>
                        <div class="two-thirds center relative wrap">
                            <p class="full capatalise">Priroda</p>
                            <h4 class="full">Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</h4>
                        </div>
                    </a>
                    <a class="full center relative column-bottom-margin" target="_blank" href = "#">
                        <div class="third center relative">
                            <img class = "circle-img" src="<?php echo $native_path ?>assets/placeholders/weight.png" aria-hidden="true">
                        </div>
                        <div class="two-thirds center relative wrap">
                            <p class="full capatalise">Priroda</p>
                            <h4 class="full">Levisice su se prije kupovale svake druge godine, a sad traperice kupujemo svakih par mjeseci. Evo zašto</h4>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer class="full flex relative">
            <div class="container text-container flex relative">
                <div class="full flex relative flex-col">
                    <div class="third center relative wrap">
                        <p class="full gray-text center-text">Ekskluzivni partner</p>
                        <img class="full column-horizontal-pad" src="<?php echo $native_path ?>assets/logos/energia-naturalis.png" alt="energia-naturalis-logo">
                    </div>
                    <div class="third center relative wrap">
                        <p class="full gray-text center-text">Zlatni partneri</p>
                        <div class="no-wrap center column-horizontal-pad">
                            <img src="<?php echo $native_path ?>assets/logos/hgk.png" alt="hgk-logo" class="full">
                            <img src="<?php echo $native_path ?>assets/logos/ht.png" alt="ht-logo" class="full">
                        </div>
                    </div>
                    <div class="third center relative wrap">
                        <p class="full gray-text center-text">Brončani partneri</p>
                        <div class="no-wrap center column-vertical-pad">
                            <img src="<?php echo $native_path ?>assets/logos/answear.png" alt="answear-logo" class="full no">
                            <img src="<?php echo $native_path ?>assets/logos/janaf.png" alt="janaf-logo" class="full">
                            <img src="<?php echo $native_path ?>assets/logos/kaufland.png" alt="kaufland-logo" class="full">
                            <img src="<?php echo $native_path ?>assets/logos/posta.png" alt="pošta-logo" class="full">
                        </div>
                    </div>
                </div>        
                <div class="full center logo-line">
                    <img class = "lp-logo" src="<?php echo $native_path ?>assets/logos/logo.svg" alt="TG Studio logo" />
                </div>
                <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom i po najvišim uredničkim standardima Telegram Media Grupe.</p>
                <div class="full center logo-line tele-logo">
                    <img src="<?php echo $native_path ?>assets/logos/tg_studio_horizontal_color.png" alt="TG Studio logo" />
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </div>
</body>

</html>