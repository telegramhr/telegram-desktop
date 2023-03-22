<!DOCTYPE html>
<html lang="hr">

<?php

/* Potential native paths */
//$native_path = get_stylesheet_directory_uri() . '/templates/native/otp/moja_prva_nekretnina/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/otp/moja_prva_nekretnina/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/otp/moja_prva_nekretnina/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/otp/moja_prva_nekretnina/';
//$native_path = 'http://localhost/moja_prva_nekretnina/';

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
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300&display=swap" rel="stylesheet"> 
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
            <a href="#iskustva" class="third center relative">
                <?php echo file_get_contents($native_path . 'assets/newspaper-solid.svg'); ?>
                <div class="full center-text">Iskustva</div>
            </a>
            <a href="#ekspert" class="third center relative">
                <?php echo file_get_contents($native_path . 'assets/user-tie-hair-solid.svg'); ?>
                <div class="full center-text">Ekspert</div>
            </a>
            <a href="#vodici" class="third center relative">
                <?php echo file_get_contents($native_path . 'assets/handshake-angle-solid.svg'); ?>
                <div class="full center-text">Vodiči</div>
            </a>
        </nav>
        <!-- Top Sticky Nav -->
        <nav class="full top-nav flex relative">
            <div class="container column-horizontal-pad flex relative">
                <div class="center relative text-logo">
                    <a target = "_blank" href="https://www.otpbanka.hr/" class="center relative animate">
                        <img src="<?php echo $native_path ?>assets/otp_logo.png" alt="OTP logo"><span>Moja prva nekretnina</span>
                    </a>
                </div>
                <div class="center relative desktop-only">
                    <a href="#iskustva" class="center relative animate">
                        <?php echo file_get_contents($native_path . 'assets/newspaper-solid.svg'); ?>
                        <div class="full center-text">Iskustva</div>
                    </a>
                    <a href="#ekspert" class="center relative animate">
                        <?php echo file_get_contents($native_path . 'assets/user-tie-hair-solid.svg'); ?>
                        <div class="full center-text">Ekspert</div>
                    </a>
                    <a href="#vodici" class="center relative animate">
                        <?php echo file_get_contents($native_path . 'assets/handshake-angle-solid.svg'); ?>
                        <div class="full center-text">Vodiči</div>
                    </a>
                </div>
            </div>
        </nav>
        <!-- Hero Video -->
        <header class="full flex relative hero-video">
            <div class="header-fade"></div>
            <div class="header-noise"></div>
            <video autoplay loop muted playsinline class="background-video">
                <source src="<?php echo $native_path ?>assets/tg_videobg_family.webm?v=1.00" type="video/webm">
                <source src="<?php echo $native_path ?>assets/tg_videobg_family.mp4?v=1.00" type="video/mp4">
            </video>
            <div class="container text-container flex relative column-full-pad center-text">
                <h1 class="full" data-aos="fade-up" data-aos-delay="250">Moja prva nekretnina</h1>
                <p class="full" data-aos="fade-up" data-aos-delay="750">Potraga za savršenim domom zna biti izazovna. OTP banka d.d. i Telegram su udružili snage i kreirali ovu platformu kako bi taj proces učinili što bezbolnijim.</p>
            </div>
        </header>
        <section class="full flex relative green-bg">
            <div class="container flex relative column-full-pad">
                <div class="full flex gallery mini-facts-bar">
                    <div><p class="full center-text">U Hrvatskoj 90% ljudi ima vlastitu nekretninu - 21% više od europskog prosjeka.</p></div>
                    <div><p class="full center-text">Subvenciju APN-a je od 2017. godine iskoristilo više od 27.700 ljudi. </p></div>
                    <div><p class="full center-text">Nakon Zagreba, najviše odobrenih subvencija je u Slavoniji.</p></div>
                </div>
            </div>
        </section>
        <!-- Iskustva -->
        <h1 id="iskustva" class="full center-text column-full-pad">Iskustva</h1>
        <section class="full flex relative">
            <div class="container flex relative">
                <a class="full flex relative article featured-article column-vertical-pad stretch" href="https://www.telegram.hr/zivot/izabela-zoran-i-marijan-su-nam-ispricali-kako-su-dobili-drzavnu-subvenciju-za-nekretninu-slazu-se-oko-tri-stvari" target="_blank">
                    <div class="half center flex-responsive column-horizontal-pad">
                        <img src="https://www.telegram.hr/wp-content/uploads/2023/01/tg-naslovna-kolaz2023-1-26-1.jpg" aria-hidden="true">
                    </div>
                    <div class="half center flex-responsive column-horizontal-pad">
                        <div class="full flex relative">
                            <h2 class="full">Izabela, Zoran i Marijan su nam ispričali kako su dobili državnu subvenciju za nekretninu. Slažu se oko tri stvari</h2>
                            <p class="full">Na proljeća se otvaraju nove prijave za subvencionirane kredite</p>
                            <div class="full flex article-author">
                                <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                            </div>
                            <div class="full flex stretch">
                                <div class="animate flex relative cta-btn-1">Pročitaj više</div>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="full flex relative article featured-article column-vertical-pad stretch" href="https://www.telegram.hr/zivot/kupujete-stan-terezija-i-kristijan-ispricali-su-nam-kako-su-nasli-svoj-u-zagrebu-na-ove-stvari-morate-paziti/" target="_blank">
                    <div class="half center flex-responsive column-horizontal-pad">
                        <img src="https://www.telegram.hr/wp-content/uploads/2023/02/pxl-060520-28885803-e1676627824462.jpg" aria-hidden="true">
                    </div>
                    <div class="half center flex-responsive column-horizontal-pad">
                        <div class="full flex relative">
                            <h2 class="full">Kupujete stan? Terezija i Kristijan ispričali su nam kako su našli svoj u Zagrebu: ‘Na ove stvari morate paziti’ </h2>
                            <p class="full">Razgovarali smo s ljudima koji su u procesu kupnje i gradnje nekretnine </p>
                            <div class="full flex article-author">
                                <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                            </div>
                            <div class="full flex stretch">
                                <div class="animate flex relative cta-btn-1">Pročitaj više</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <!-- Ekspert -->
        <section class="full flex relative darker-bg">
            <h1 id="ekspert" class="full center-text column-full-pad">Ekspert</h1>
            <div class="container flex relative expert-element">
                <a class="full flex relative article stretch" href="https://www.telegram.hr/zivot/subvencionirani-krediti-2023-uvjeti-savjeti/" target="_blank">
                    <div class="fourth column-full-pad flex relative">
                        <img src="<?php echo $native_path ?>assets/ekspertica.jpeg" class="circle-image" aria-hidden="true">
                    </div>
                    <div class="three-fourths column-full-pad flex relative">
                        <p class="full">Ana Vlainić <br><b>Voditeljica poslovnice</b> OTP banke d.d</p>
                        <h2 class="full italic desktop-only">“Subvenciju možete dobiti čak i za rekonstrukciju kuće, to mnogo ljudi ne zna”</h2>
                        <div class="full flex stretch desktop-only">
                            <div class="animate flex relative cta-btn-1">Pročitaj više</div>
                        </div>
                    </div>
                    <div class="full flex mobile-only column-horizontal-pad">
                        <h2 class="full italic">“Subvenciju možete dobiti čak i za rekonstrukciju kuće, to masa ljudi ne zna”</h2>
                        <div class="full flex stretch">
                            <div class="animate flex relative cta-btn-1">Pročitaj više</div>
                        </div>
                    </div>
                </a>
                <h3 class="full column-full-pad">3 top savjeta</h1>
                <div class="full flex relative advice-element column-bottom-pad">
                    <div class="third flex relative flex-responsive column-horizontal-pad">
                        <p class="full">Čim krenete razmišljati o kupovini, preporuča se otići u banku i izračunati svoju kreditnu sposobnost</p>
                    </div>
                    <div class="third flex relative flex-responsive column-horizontal-pad">
                        <p class="full">Subvencionira se iznos kredita do 100.000 eura. Stambeni kredit može biti i veći, ali se on neće subvencionirati</p>
                    </div>
                    <div class="third flex relative flex-responsive column-horizontal-pad">
                        <p class="full">O prijavi za subvenciju brine vaš osobni bankar u dogovoru s vama.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Vodiči -->
        <h1 id="vodici" class="full center-text column-full-pad">Vodiči</h1>
        <section class="full flex relative">
            <div class="container flex relative">
                <a class="full flex relative article featured-article column-vertical-pad stretch" href="https://www.telegram.hr/zivot/2023-vodic-za-podizanje-stambenog-kredita/" target="_blank">
                    <div class="half center flex-responsive column-horizontal-pad">
                        <img src="https://images.telegram.hr/QnTbOEYc1t7Mi0BVL-CZ-44rLN4dGOLrIjXSsFkHkdk/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDEvcHhsLTA4MDIyMS0zMTc1MzI3OS5qcGc.webp" aria-hidden="true">
                    </div>
                    <div class="half center flex-responsive column-horizontal-pad">
                        <div class="full flex relative">
                            <h2 class="full">Veliki vodič za podizanje stambenog kredita: 10 koraka do novog doma </h2>
                            <p class="full">Odgovaramo na pitanja koja najčešće zanimaju ljude vezano uz kupnju prve nekretnine</p>
                            <div class="full flex article-author">
                                <img src="https://www.telegram.hr/wp-content/uploads/2022/09/mateajezovita.png"><span class="bold">Piše</span><span>Mateja Ježovita</span>
                            </div>
                            <div class="full flex stretch">
                                <div class="animate flex relative cta-btn-1">Pročitaj više</div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="full flex relative five-things column-vertical-pad">
                    <h3 class="full column-horizontal-pad">5 stvari na koje trebate pripaziti</h1>
                    <div class="fifth flex flex-responsive relative">
                        <div class="full center relative fa-solid">
                            <?php echo file_get_contents($native_path . 'assets/house-solid.svg'); ?>
                        </div>
                        <p class="full center-text">Za subvencionirane kredite, nekretnina mora imati određenu dokumentaciju. Najbitnija je uporabna dozvola i izvadak iz zemljišnih knjiga</p>
                    </div>
                    <div class="fifth flex flex-responsive relative">
                        <div class="full center relative fa-solid">
                            <?php echo file_get_contents($native_path . 'assets/apartment-solid.svg'); ?>
                        </div>
                        <p class="full center-text">Iznos stambenog kredita ovisi o procjeni, a ne o cijeni nekretnine. Procjena 1:1 znači da će kredit pokriti ukupnu kupoprodajnu cijenu</p>
                    </div>
                    <div class="fifth flex flex-responsive relative">
                        <div class="full center relative fa-solid">
                            <?php echo file_get_contents($native_path . 'assets/landmark-solid.svg'); ?>
                        </div>
                        <p class="full center-text">Ne zaboravite na druge dodatne troškove koje morate podmiriti van stambenog kredita poput troška javnog bilježnika</p>
                    </div>
                    <div class="fifth flex flex-responsive relative">
                        <div class="full center relative fa-solid building-solid">
                            <?php echo file_get_contents($native_path . 'assets/building-solid.svg'); ?>
                        </div>
                        <p class="full center-text shoo-top">Kod izgradnje je potrebno zemljište, građevinska i pravomoćna dozvola s projektom i troškovnik radova kako biste dobili subvenciju</p>
                    </div>
                    <div class="fifth flex flex-responsive relative">
                        <div class="full center relative fa-solid">
                            <?php echo file_get_contents($native_path . 'assets/warehouse-solid.svg'); ?>
                        </div>
                        <p class="full center-text">Zakonski je određeno da korisnici subvencije u roku od mjesec dana nakon kupnje nekretnine moraju prijaviti prebivalište na adresi</p>
                    </div>
                </div>
                <div class="lazy-boy"></div>
                <a class="full flex relative article featured-article column-vertical-pad stretch" href="https://www.telegram.hr/zivot/pripremili-smo-rjecnik-20-pojmova-koji-ce-vam-olaksati-kupnju-prve-nekretnine-evo-sto-je-sve-korisno-znati/" target="_blank">
                    <div class="half center flex-responsive column-horizontal-pad">
                        <img src="https://images.telegram.hr/0dQRCvL6tuwyITPA7xB5uR-fwGqCnnnyE69j6V299gc/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDEvcHhsLTA5MTAxOC0yMjI3NjQzMi5qcGc.webp" aria-hidden="true">
                    </div>
                    <div class="half center flex-responsive column-horizontal-pad">
                        <div class="full flex relative">
                            <h2 class="full">Pripremili smo rječnik 20 pojmova koji će vam olakšati kupnju prve nekretnine. Evo što je sve korisno znati</h2>
                            <p class="full">Katastar i gruntovnica nisu jednoznačni pojmovi, kao ni otplata u ratama ili anuitetu</p>
                            <div class="full flex article-author">
                                <img src="https://www.telegram.hr/wp-content/uploads/2022/09/anamartinic.png"><span class="bold">Piše</span><span>Ana Martinić</span>
                            </div>
                            <div class="full flex stretch">
                                <div class="animate flex relative cta-btn-1">Pročitaj više</div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="full flex relative five-things column-vertical-pad">
                    <h3 class="full column-horizontal-pad">5 stvari koje trebate poznavati</h1>
                    <div class="fifth flex flex-responsive relative">
                        <div class="full center relative fa-solid">
                            <?php echo file_get_contents($native_path . 'assets/credit-card-solid.svg'); ?>
                        </div>
                        <p class="full center-text">Izračun kreditne sposobnosti podrazumijeva provjeru podataka o zaposlenju i poslodavcu, redovitim primanjima te postojećim financijskim obavezama.</p>
                    </div>
                    <div class="fifth flex flex-responsive relative">
                        <div class="full center relative fa-solid euro-solid">
                            <?php echo file_get_contents($native_path . 'assets/euro-sign-solid.svg'); ?>
                        </div>
                        <p class="full center-text pad-top">Efektivna kamatna stopa je ukupni trošak kredita, odnosno zbroj svih financijskih izdataka koje plaća osoba koja podiže i otplaćuje kredit.</p>
                    </div>
                    <div class="fifth flex flex-responsive relative">
                        <div class="full center relative fa-solid">
                            <?php echo file_get_contents($native_path . 'assets/chart-line-solid.svg'); ?>
                        </div>
                        <p class="full center-text">Jamac ispunjava pojedini kreditni kriterij koji korisnik kredita ne zadovoljava, dok sudužnik uz to može povećati i kreditnu sposobnost korisnika.</p>
                    </div>
                    <div class="fifth flex flex-responsive relative">
                        <div class="full center relative fa-solid">
                                <?php echo file_get_contents($native_path . 'assets/percent-solid.svg'); ?>
                        </div>
                        <p class="full center-text">Trenutna stopa poreza na promet nekretnina je tri posto od tržišne vrijednosti nekretnine u trenutku njezina stjecanja, a plaća ga kupac.</p>
                    </div>
                    <div class="fifth flex flex-responsive relative">
                        <div class="full center relative fa-solid">
                            <?php echo file_get_contents($native_path . 'assets/wallet-solid.svg'); ?>
                        </div>
                        <p class="full center-text">Visina kamate ovisi o iznosu kredita, roku na koji se kredit odobrava, visini ugovorene kamatne stope i metodi obračuna kamata.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer class="full flex relative">
            <div class="container text-container flex relative column-full-pad">
                <div class="full center logo-line">
                    <img src="<?php echo $native_path ?>assets/otp_logo.png" alt="OTP logo" />
                    <img src="<?php echo $native_path ?>assets/logos/tg_studio_horizontal_white.png" alt="TG Studio logo" />
                </div>
                <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom OTP i po najvišim uredničkim standardima Telegram Media Grupe.</p>
            </div>
        </footer>
        <?php wp_footer(); 
        ?>
    </div>
</body>

</html>