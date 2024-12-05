<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = get_stylesheet_directory_uri() . '/templates/native/erste/sigurnost/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/erste/sigurnost/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/erste/sigurnost/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/erste/sigurnost/';
//$native_path = 'http://localhost/sigurnost/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>img/aos.css?ver=1.00" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;700&display=swap" rel="stylesheet">
    <script src="<?php echo $native_path ?>img/aos.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=1.20" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=1.32" type="text/css" />
    <script src="<?php echo $native_path ?>functions.js?ver=1.00"></script>
</head>

<body>
    <div class="main-container flex relative">
        <nav class="full topnav desktop-only flex relative">
            <div class="container center relative">
                <div class="center relative textlogo"><img src="<?php echo $native_path ?>img/erste_white.png"
                        alt="Erste logo">Sigurnost kartičnog plaćanja</div>
                <div class="center relative">
                    <a href="#izazov" class="center relative animate">
                        <?php echo file_get_contents($native_path . 'img/gamepad-solid.svg'); ?>
                        <div class="full">Izazov</div>
                    </a>
                    <a href="#strucnjaci" class="center relative animate">
                        <?php echo file_get_contents($native_path . 'img/user-headset-solid.svg'); ?>
                        <div class="full">Stručnjaci</div>
                    </a>
                    <a href="#vodici" class="center relative animate">
                        <?php echo file_get_contents($native_path . 'img/shield-keyhole-solid.svg'); ?>
                        <div class="full">Vodiči</div>
                    </a>
                </div>
            </div>
        </nav>
        <nav class="full inpage-nav mobile-only center relative">
            <a href="#izazov" class="fourth center relative">
                <?php echo file_get_contents($native_path . 'img/gamepad-solid.svg'); ?>
                <div class="full center-text">Izazov</div>
            </a>
            <a href="#strucnjaci" class="fourth center relative">
                <?php echo file_get_contents($native_path . 'img/user-headset-solid.svg'); ?>
                <div class="full center-text">Stručnjaci</div>
            </a>
            <a href="#vodici" class="fourth center relative">
                <?php echo file_get_contents($native_path . 'img/shield-keyhole-solid.svg'); ?>
                <div class="full center-text">Vodiči</div>
            </a>
        </nav>
        <header class="full center relative">
            <div class="header-fade"></div>
            <video autoplay loop muted playsinline class="background-video">
                <source src="<?php echo $native_path ?>img/tg_videobg_payments.mp4?v=1.10" type="video/mp4">
            </video>
            <div class="container flex relative horizontal-pad">
                <h1 class="full bigger-h1 center-text" id="main-title">S</h1>
                <h2 class="full center-text">Istražite s nama svijet iza kartičnih prijevara i kako ih spriječiti</h2>
            </div>
        </header>
        <section class="full flex relative shoo-top">
            <div class="container flex center-text relative">
                <div class="full center wrap flex-responsive infographic-element horizontal-pad margin-bottom shoo-top">
                    <p class="full">589.468.664</p>
                    <p class="full bold">ukupan broj transakcija platnim karticama koje su izdane u Hrvatskoj u 2023. godini</p>
                </div>
                <div class="half flex flex-responsive infographic-element horizontal-pad">
                    <p class="full">84,98%</p>
                    <p class="full">debitne kartice</p>
                </div>
                <div class="half flex flex-responsive infographic-element horizontal-pad">
                    <p class="full">15,01%</p>
                    <p class="full">kreditne kartice</p>
                </div>
                <div class="full flex horizontal-pad tiny-text">
                    <p class="full infographic-descriptor">Izvori:</p>
                    <p class="full">Hrvatska narodna banka, Izvještaj o bezgotovinskim platnim transakcijama u RH za
                        2023.</p>
                </div>
            </div>
        </section>
        <section class="full flex relative gray-bg" id="izazov">
            <div class="container flex center-text relative">
                <div class="full flex horizontal-pad">
                <p class="full center-text game-intro">Preskočite prepreke koje vas čekaju u svijetu kartičnog plaćanja, točno odgovorite na izazove znanja i sakupite svih 30 novčića. Koristite kontrole na ekranu ili tipke WASD na tipkovnici.</p>
                </div>
                <div class="full center videogame">
                    <iframe src="<?php echo $native_path ?>/erstegame/index.html" width="480" height="640"></iframe>
                </div>
            </div>
        </section>
        <section class="full flex relative shoo-top" id="strucnjaci">
            <a href="https://www.telegram.hr/biznis-tech/ne-padajte-na-ove-kripto-prijevare-ekspertica-za-karticnu-sigurnost-objasnila-je-kako-nas-hakeri-namame/"
                class="container flex article-embed" target="_blank">
                <div class="two-thirds flex flex-responsive horizontal-pad desktop-order-2">
                    <img
                        src="https://www.telegram.hr/wp-content/uploads/2023/10/sasa7175xw.jpg">
                </div>
                <div class="third flex flex-responsive horizontal-pad desktop-order-1">
                    <h2 class="full">Ne padajte na ove kripto prijevare. Ekspertica za kartičnu sigurnost objasnila je kako nas hakeri namame </h2>
                    <p class="full shoo-bottom">Razgovarali smo s Anitom Tadić, višom stručnom suradnicom za kartičnu sigurnost </p>
                    <div class="cta">Pročitaj više</div>
                </div>
            </a>
        </section>
        <section class="full flex relative shoo-top">
            <a href="https://www.telegram.hr/biznis-tech/strucnjakinja-o-karticnim-prijevarama-mogu-se-dogoditi-bilo-kome-a-najvise-se-treba-paziti-direktnih-oglasa/"
                class="container flex article-embed" target="_blank">
                <div class="two-thirds flex flex-responsive horizontal-pad">
                    <img
                        src="https://www.telegram.hr/wp-content/uploads/2023/09/sasa8017xw.jpg">
                </div>
                <div class="third flex flex-responsive horizontal-pad">
                    <h2 class="full">Stručnjakinja o kartičnim prijevarama: 'Mogu se dogoditi bilo kome, a najviše se treba paziti direktnih oglasa'</h2>
                    <p class="full shoo-bottom">Aleksandra Capan je protekle četiri godine voditeljica Službe kartične podrške i sigurnosti u Erste banci </p>
                    <div class="cta">Pročitaj više</div>
                </div>
            </a>
        </section>
        <section class="full flex relative shoo-top">
            <a href="https://www.telegram.hr/zivot/bankari-su-nam-otkrili-najcesce-financijske-prevare-kod-nas-i-10-savjeta-kako-se-zastititi/"
                class="container flex article-embed" target="_blank">
                <div class="two-thirds flex flex-responsive horizontal-pad desktop-order-2">
                    <img
                        src="https://www.telegram.hr/wp-content/uploads/2023/05/sasa9491xw.jpg">
                </div>
                <div class="third flex flex-responsive horizontal-pad desktop-order-1">
                    <h2 class="full">Bankari su nam otkrili najčešće financijske prevare kod nas i 10 savjeta kako se zaštititi </h2>
                    <p class="full shoo-bottom">Opreza nikad dosta, poručuju Hrvoje Gledec i Melita Olanović - stručnjaci iz Erste banke</p>
                    <div class="cta">Pročitaj više</div>
                </div>
            </a>
        </section>
        <section class="full flex relative shoo-top margin-bottom">
            <div class="container flex center-text relative">
                <div class="full center wrap flex-responsive infographic-element horizontal-pad margin-bottom shoo-top">
                    <p class="full">1256%</p>
                    <p class="full">više malicioznih e-mailova otkad je aktivan ChatGPT</p>
                </div>
                <div class="half flex flex-responsive infographic-element horizontal-pad">
                    <p class="full">31+</p>
                    <p class="full">tisuća prijetnji dnevno</p>
                </div>
                <div class="half flex flex-responsive infographic-element horizontal-pad">
                    <p class="full">39%</p>
                    <p class="full">svih napada krpz mobilne uređaje započinju SMSom</p>
                </div>
                <div class="full flex horizontal-pad tiny-text">
                    <p class="full infographic-descriptor">Izvori:</p>
                    <p class="full">SlashNext, The State of Phishing 2023</p>

                </div>
            </div>
        </section>
        <section class="full flex relative shoo-top" id="vodici">
            <div class="container flex relative">
                <a class="half flex flex-responsive relative article-embed stretch pad-me" href="https://www.telegram.hr/partneri/sve-je-teze-prepoznati-prijevare-na-internetu-rijesite-nas-kviz-i-doznajte-kolika-ste-meta-prevarantima/" target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/RvD7yVP6pF8AaZgv3lruS_Usie7I9mCV2gEYlltgb5Q/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjQvMDgvc2h1dHRlcnN0b2NrLTIzMjc0Mzc0OTcuanBn.webp">
                    <div class="full flex">
                        <h2 class="full">Sve je teže prepoznati prijevare na internetu. Riješite naš kviz i doznajte kolika ste meta prevarantima</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a class="half flex flex-responsive relative article-embed stretch pad-me" href="https://www.telegram.hr/partneri/sve-vise-ljudi-placa-mobitelom-istrazili-smo-koliko-je-to-sigurno/" target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/DT3oDjVtXH1DgGP7ETwX04_t0U4M-YQ7quMnrihzGKU/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjQvMTEvc2h1dHRlcnN0b2NrLTI0MjQ2MDA0NTcuanBn.webp">
                    <div class="full flex">
                        <h2 class="full">Sve više ljudi plaća mobitelom. Istražili smo koliko je to sigurno</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a class="half flex flex-responsive relative article-embed stretch pad-me" href="https://www.telegram.hr/partneri/priblizava-nam-se-ultimativna-soping-sezona-zastitite-svoje-kartice-i-novac-na-vrijeme/" target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/ryFcSmuTPsyDeGqGHSRIKJ4Jt-s4ajL0Oks9qRZwECQ/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjQvMTAvcHhsLTI1MTEyMi05NzA4MDQ5MC0xLmpwZw.webp">
                    <div class="full flex">
                        <h2 class="full">Približava nam se ultimativna šoping sezona. Zaštitite svoje kartice i novac na vrijeme</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>

                <a class="half flex flex-responsive relative article-embed stretch pad-me" href="https://www.telegram.hr/partneri/sve-vise-ljudi-diljem-zemlje-placa-karticama-ali-ne-znaju-da-postoje-odredene-opasnosti-evo-kako-se-zastititi/" target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/528Ntp1ip1EAVvXZukPG9rgTt7ZAq5sc2RpXuKLnEo0/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjQvMDYvcGV4ZWxzLXRpbWEtbWlyb3NobmljaGVua28tNTcwODIxNy5qcGc.webp">
                    <div class="full flex">
                        <h2 class="full">Sve više ljudi diljem zemlje plaća karticama, ali ne znaju da postoje određene opasnosti. Evo kako se zaštititi</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a class="half flex flex-responsive relative article-embed stretch pad-me" href="https://www.telegram.hr/partneri/internet-je-postao-leglo-prevaranata-kreirali-smo-vodic-kako-se-zastititi-tijekom-online-kupovine/" target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/E45P-6YkabPGUyW0YF8-aWGbPW2We92aF13xTQGH3s0/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjQvMDUvdW50aXRsZWQtMjAyNC0wNS0yOHQxNjI3NDEwOTEucG5n.webp">
                    <div class="full flex">
                        <h2 class="full">Internet je postao leglo prevaranata. Kreirali smo vodič kako se zaštititi tijekom online kupovine</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a class="half flex flex-responsive relative article-embed stretch pad-me" href="https://www.telegram.hr/partneri/prevaranti-su-osmislili-novi-nacin-evo-kako-vam-mogu-ukrasti-novac-ako-kupujete-online/" target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/WVWHgc2ySEEMj-ZWSA4xXyJBpwMUrDceD-fQ29g4HRY/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjQvMDMvcGV4ZWxzLWNvdHRvbmJyby1zdHVkaW8tMzk0NDQwNS5qcGc.jpg">
                    <div class="full flex">
                        <h2 class="full">Prevaranti su osmislili novi način: Evo kako vam mogu ukrasti novac ako kupujete online</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a class="half flex flex-responsive relative article-embed stretch pad-me" href="https://www.telegram.hr/biznis-tech/pazite-se-laznih-oglasa-i-internet-kupovine-kiberneticki-kriminal-u-hrvatskoj-lani-porastao-za-gotovo-20-posto/" target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/1yGpDjqXhSHJylYbVFpin0tjXNYvzIcRwJhwdWRd8pQ/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDkvb25saW5lLWt1cG92aW5hLmpwZw.webp">
                    <div class="full flex">
                        <h2 class="full">Pazite se lažnih oglasa i internet kupovine. Kibernetički kriminal u Hrvatskoj lani porastao za gotovo 20 posto</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a class="half flex flex-responsive relative article-embed stretch pad-me" href="https://www.telegram.hr/zivot/vise-od-38-posto-prevara-dogada-se-tijekom-kupnje-na-internetu-izdvojili-smo-neke-od-novijih-slucajeva/" target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/NyD0rwImgan-nEpk2YXOJKCl7yOMKjLb5tlSSf1c1zk/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDYvYmVuY2gtYWNjb3VudGluZy1jM3Y4OGJvb3JvbS11bnNwbGFzaC5qcGc.webp">
                    <div class="full flex">
                        <h2 class="full">Više od 38 posto prevara događa se tijekom kupnje na internetu. Izdvojili smo neke od novijih slučajeva</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a href="https://www.telegram.hr/zivot/probrali-smo-genijalne-mailove-koje-primamo-kako-bi-nas-prevarili-predstavljaju-se-kao-porezna-europol-i-hakeri/"
                    target="_blank" class="half flex flex-responsive relative article-embed stretch pad-me">
                    <img class="shoo-bottom"
                        src="https://images.telegram.hr/rjHFQmmxCYA7svHAPesnF1Jcw-c12s7XaBsfHC3Djsk/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDQvc2h1dHRlcnN0b2NrLTcyNTExNTUyMC5qcGc.jpg">
                    <div class="full flex">
                        <h2 class="full">Probrali smo genijalne mailove koje primamo kako bi nas prevarili.
                            Predstavljaju se kao porezna, Europol i hakeri</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a href="https://www.telegram.hr/zivot/vodic-za-sljedece-putovanje-kako-sprijeciti-blokadu-kartica-kradu-podataka-i-sto-nas-ceka-na-bankomatu/"
                    target="_blank" class="half flex flex-responsive relative article-embed stretch pad-me">
                    <img class="shoo-bottom"
                        src="https://images.telegram.hr/BrbwqVht8STO5qh7znM59GXkRVUoDtAOFzdeT3BphVA/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDQvc2h1dHRlcnN0b2NrLTY2MDYwNTg1Ny5qcGc.jpg">
                    <div class="full flex">
                        <h2 class="full">Vodič za sljedeće putovanje: Kako spriječiti blokadu kartica, krađu podataka i
                            što nas čeka na bankomatu </h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <!-- <a class="fourth flex flex-responsive relative article-embed stretch pad-me" href="https://www.telegram.hr/partneri/cyberbullying-je-sve-cesci-i-ozbiljniji-problem-psihologinja-nam-objasnjava-kako-dolazi-do-njega-i-kako-se-nositi-s-njime/ " target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/didb8RlhRqjxU6CbW9VP_Roa-SmvDenTjGe2zCk4Lg4/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTEvdGlqYW5hLTE5MDAuanBn.webp">
                    <div class="full flex">
                        <h2 class="full">Cyberbullying je sve češći i ozbiljniji problem. Psihologinja objašnjava kako dolazi do njega</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a>
                <a class="fourth flex flex-responsive relative article-embed stretch pad-me" href="https://www.telegram.hr/partneri/sve-vise-mlade-djece-vrijeme-provodi-na-internetu-ove-slikovnice-uce-ih-oprezu/ " target="_blank">
                    <img class="shoo-bottom" src="https://images.telegram.hr/MPSAhH0Q1VQqy_pGXoLHzshR7I6jnwZfEFCX1CUtx0o/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTEvaW1hZ2UwMDAxNy5qcGVn.webp">
                    <div class="full flex">
                        <h2 class="full">Sve više mlađe djece vrijeme provodi na internetu. Ove slikovnice uče ih oprezu</h2>
                        <div class="cta animate">Pročitaj više...</div>
                    </div>
                </a> -->
            </div>
        </section>
        <footer class="full flex relative native-signature">
            <div class="container text-container flex relative stretch">
                <div class="full center logo-line">
                    <img src="<?php echo $native_path ?>img/erste_dark.png" alt="Erste logo">
                    <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
                </div>
                <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni
                    marketing, u suradnji s partnerom ERSTE i po najvišim uredničkim standardima Telegram Media Grupe.
                </p>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>

</html>