<!DOCTYPE html>
<html lang="hr">

<?php
$directory = PARENT_PATH . "/templates/native/mastercard/priceless_new/";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900&display=swap&subset=latin-ext" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo $directory; ?>js/aos.css?ver=1.0" type="text/css" />
    <link rel="stylesheet" href="<?php echo $directory; ?>catalyst.css?ver=1.2" type="text/css" />
    <link rel="stylesheet" href="<?php echo $directory; ?>style.css?ver=2.0" type="text/css" />
</head>

<body>
    <header class="full flex center relative">
        <video preload="auto" autoplay="" muted="" loop="" class="header-video">
            <source src="<?php echo $directory; ?>img/mc_header.webm" type="video/webm">
            <source src="<?php echo $directory; ?>img/mc_header.mp4" type="video/mp4">
        </video>
        <div class="header-text center">
            <div class="container">
                <h1 class="full">Okusi neprocjenjivo</h1>
                <h2 class="full">Iskustva koja vrijedi isprobati</h2>
            </div>
        </div>
        <div class="native-sticker">
            <p>U suradnji s</p>
            <img src="<?php echo $directory; ?>img/mastercard_white.svg" alt="Mastercard">
        </div>
    </header>
    <div class="container flex intro">
        <p>Okusi se ne rađaju, nego stvaraju, iskustva nas mijenjaju,  poučavaju,  šire vidike, oplemenjuju život. Kreirati okus za vrhunski doživljaj mogu samo najbolji. Ovo su priče o njima.</p>
    </div>
    <section class="big-article" style="background-image: url('<?php echo $directory; ?>img/medak_bg.jpg');">
        <a class="container flex stretch" href="https://www.telegram.hr/price/odrastao-je-u-selu-na-neretvi-pokrenuo-trend-burgera-i-razvio-biznis-a-sada-hrvatsku-kuhinju-planira-jos-pogurati/" target="_blank">
            <div class="half flex-responsive center">
                <div class="full flex">
                    <div class="article-data relative flex" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500">
                        <h2 class="full">Porazgovarali smo s gastro vizionarom Marinom Medakom. Oduševio nas je njegov pogled na kulinarstvo, ali i poslovna filozofija</h2>
                    </div>
                    <div class="full">
                        <div class="cta animate" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="750">Pročitaj više</div>
                    </div>
                </div>
            </div>
            <div class="half flex-responsive flex article-image">
                <img alt="Chef Marin Medak" src="<?php echo $directory; ?>img/medak.png">
            </div>
        </a>
    </section>
    <section class="big-article" style="background-image: url('<?php echo $directory; ?>img/milkbar_bg.jpg');">
        <a class="container flex stretch" href="https://www.telegram.hr/price/provela-sam-dan-na-farmi-hranila-i-muzla-koze-i-na-kraju-napravila-svoj-prvi-jogurt-neprocjenjivo-iskustvo/" target="_blank">
            <div class="half flex-responsive flex article-image">
                <img alt="S1 Veronika" src="<?php echo $directory; ?>img/veronika.png">
            </div>
            <div class="half flex-responsive center">
                <div class="full flex">
                    <div class="article-data relative flex" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500">
                        <h2 class="full">Provela sam dan na farmi, hranila i muzla koze, i na kraju napravila svoj prvi jogurt. Neprocjenjivo iskustvo</h2>
                    </div>
                    <div class="full">
                        <div class="cta animate" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="750">Pročitaj više</div>
                    </div>
                </div>
            </div>
        </a>
    </section>
    <div class="gray-background full flex">
        <section class="coming-soon-article container flex bottom-pad">
            <h4 class="full relative" data-aos="fade-left" data-aos-duration="500" data-aos-delay="250"><?php echo file_get_contents($directory . "img/clock.svg"); ?>Pročitaj uskoro! Priča stiže 06.11.</h4>
            <h2 class="full relative" data-aos="fade-left" data-aos-duration="500" data-aos-delay="500">Skoknuli smo do Paga i ručali s Borisom Šuljićem. Sada nam je jasno zašto ga nazivaju pionirom hrvatske moderne gastronomije</h2>
        </section>
    </div>
    <div class="container flex">
        <h2 class="full top-pad desktop-white-space" data-aos="fade-left" data-aos-duration="500" data-aos-delay="250">Isprobaj neprocjenjiva gastro iskustva</h2>
    </div>
    <div class="container flex slider-parent">
        <div class="slider flex">
            <a target="_blank" href="https://priceless.hr/eat-and-sip-dalmatia-2-proizvod-58/" class="slide relative">
                <img class="animate" src="<?php echo $directory; ?>img/priceless1.jpg" alt="Školjka u Foša restoranu">
                <div class="slide-content">
                    <h2 class="full">Foša</h2>
                    <p class="full">Otkrijte raznolikost dalmatinske kuhinje</p>
                    <h4 class="full">Zadar</h4>
                </div>
            </a>
            <a target="_blank" href="https://priceless.hr/in-truffles-we-believe-menu-2-proizvod-59/" class="slide relative">
                <img class="animate" src="<?php echo $directory; ?>img/priceless2.jpg" alt="Tartufi u Zigante restoranu">
                <div class="slide-content">
                    <h2 class="full">Zigante</h2>
                    <p class="full">Kušajte poznate hrvatske crne tartufe u četiri slijeda</p>
                    <h4 class="full">Livade</h4>
                </div>
            </a>
            <a target="_blank" href="https://priceless.hr/pocastite-se-vecerom-od-osam-sljedova-za-dvoje-u-boskincu-proizvod-80/" class="slide relative">
                <img class="animate" src="<?php echo $directory; ?>img/priceless3.jpg" alt="Hrana u restoranu Boškinac">
                <div class="slide-content">
                    <h2 class="full">Boškinac</h2>
                    <p class="full">Isprobajte autentične okuse Paga u boutique hotelu i vinariji</p>
                    <h4 class="full">Novalja</h4>
                </div>
            </a>
            <a target="_blank" href="https://priceless.hr/wine-and-dine-special-2-proizvod-61/" class="slide relative">
                <img class="animate" src="<?php echo $directory; ?>img/priceless4.jpg" alt="Hrana u restoranu San Rocco">
                <div class="slide-content">
                    <h2 class="full">San Rocco</h2>
                    <p class="full">Počastite se večerom u vinskom podrumu uz osobnog sommerliera</p>
                    <h4 class="full">Brtonigla</h4>
                </div>
            </a>
            <a target="_blank" href="https://priceless.hr/explore-fusion-croatian-and-japanese-cuisines-proizvod-122/" class="slide relative">
                <img class="animate" src="<?php echo $directory; ?>img/priceless5.jpg" alt="Hrana u Bellevue hotel">
                <div class="slide-content">
                    <h2 class="full">Bellevue Hotel</h2>
                    <p class="full">Uživajte u japanskom degustacijskom jelovniku i pijuckajte rijetke viskije</p>
                    <h4 class="full">Mali Lošinj</h4>
                </div>
            </a>
        </div>
    </div>
    <div class="gray-background full flex desktop-shoo-bot">
        <section class="container flex top-pad">
            <div class="full flex">
                <h2 class="full bottom-pad desktop-white-space desktop-shoo-bot" data-aos="fade-left" data-aos-duration="500" data-aos-delay="250">Otkrij neprocjenjive prednosti</h2>
            </div>
            <details class="full flex">
                 <summary class="full"><img src="<?php echo $directory; ?>img/popratni_1.jpg">Pogodnosti Mastercard Sladokusca</summary>
                <p>Ljubitelji finih jela neprestano su u potrazi za kvalitetnim restoranima, bistroima, autentičnim gastro lokacijama. Upravo stoga je Mastercard za sve ljubitelje kulinarstva razvio wine & dine projekt pod nazivom Sladokusac te u suradnji s poznatim restoranima i drugim gastro lokacijama za plaćanje Mastercard<sup>®</sup> i Maestro<sup>®</sup> karticama nudi poseban program pogodnosti.</p>
                <p>Suradnja s renomiranim chefovima i restoranima diljem Hrvatske ima za cilj na jednom mjestu okupiti partnere koji korisnicima Mastercard i Maestro kartica donose pogodnosti, ali i približiti gastro trendove široj publici. Besplatan desert, besplatno piće dobrodošlice ili popusti pri plaćanju spomenutim karticama očekuju vas na raznim gastro destinacijama širom Hrvatske, na vama je samo odabrati. Za početak kliknite <a href="https://www.mastercard.hr/hr-hr/consumers/offers-promotions/sladokusac.html" target="_blank">ovdje.</a></p> 
            </details>
            <details class="full flex">
                 <summary class="full"><img src="<?php echo $directory; ?>img/popratni_2.jpg">Ekskluzivna neprocjenjiva iskustva</summary>
                <p>Sjećate li se kampanje „Neke se stvari ne mogu kupiti novcem…” kojom su promicani neprocjenjivi trenuci? Ova, sada već legendarna rečenica (možemo je slobodno nazvati i aforizmom), nastala je prije dvadesetak godina. Baš je njome Mastercard započeo kampanju Priceless, stvaranje neprocjenjivih, nezaboravnih iskustava - shvaćajući da su putnicima današnjice doživljaji bitniji od posjedovanja.</p>
                <p>Digitalna platforma <a href="https://www.priceless.com/" target="_blank">priceless.com</a> nudi korisnicima Mastercard<sup>®</sup> kartica neponovljiva, ekskluzivna iskustva u Hrvatskoj i u još 40-ak turističkih destinacija u cijelom svijetu. Korisnici tako mogu iskusiti najbolje od Hrvatske na drugačiji način, doživjeti razne svjetske destinacije kroz autentična iskustva, ispuniti svoju ili strast svojih najdražih originalnim darom.</p>
                <p>Kako? Nakon registracije na <a href="https://www.priceless.com/" target="_blank">priceless.com</a>, mogu odabrati jedno od iskustava ili ponuda te ih kupiti svojom Mastercard karticom – za sebe i svoje najbliže ili kao jedinstven poklon.</p>
                <p>Suradnja s renomiranim chefovima i restoranima diljem Hrvatske ima za cilj na jednom mjestu okupiti partnere koji korisnicima Mastercard<sup>®</sup> i Maestro<sup>®</sup> kartica donose pogodnosti, ali i približiti gastro trendove široj publici. Besplatan desert, besplatno piće dobrodošlice ili popusti pri plaćanju spomenutim karticama očekuju vas na raznim gastro destinacijama širom Hrvatske, na vama je samo odabrati. Za početak kliknite <a href="https://www.mastercard.hr/hr-hr/consumers/offers-promotions/sladokusac.html" target="_blank">ovdje.</a></p> 
            </details>
            <details class="full flex">
                 <summary class="full"><img src="<?php echo $directory; ?>img/popratni_3.jpg">Upoznajte najpoznatije hrvatske chefove uz Mastercard</summary>
                <p>Mastercard je u suradnji s <a href="https://www.jre.eu/en/croatia" target="_blank">JRE Hrvatska</a> kreirao program „Meet the Chef“ kako bi korisnicima zlatnih i platinum Mastercard kartica ponudio nezaboravno iskustvo. Ako pri rezervaciji u JRE restoranima u Hrvatskoj napomenete broj vaše premium kartice, chefovi će vas posjetiti za stolom, predstaviti ili poslužiti desert ili pak dodati jelu završni detalj, samo za vas. Osim toga, gosti koji plaćaju svojom premium Mastercard<sup>®</sup> karticom će na dar dobiti bocu JRE Chiavalon ekstra djevičanskog maslinovog ulja koje se proizvodi isključivo za restorane članove JRE-a, prema zahtjevima i izboru JRE chefova. Dostupno je kao poklon ekskluzivno korisnicima Mastercard kartica u JRE restoranima, s izuzetkom Drage di Lovrana.</p>
            </details>
        </section>
    </div>
    <div class="container top-pad flex">
        <h2 class="full bottom-pad desktop-white-space" data-aos="fade-left" data-aos-duration="500" data-aos-delay="250">Istraži posebne wine & dine pogodnosti</h2>
        <h4 class="full desktop-white-space mobile-only" data-aos="fade-left" data-aos-duration="500" data-aos-delay="500">Zagreb</h4>
    </div>
    <div class="full flex desktop-white-space">
        <div class="gray-background-desktop full flex">
            <div class="rounded-window relative full">
            <div class="desktop-only map-title zagreb-map-title">Zagreb</div>
                <div class="container zagreb-map-parent">
                    <div id="map-window" class="animate flex">
                        <img src="<?php echo $directory; ?>img/exit.svg" class="exit-btn" alt="Exit map window button">
                        <img src="<?php echo $directory; ?>img/bistro-apetit.jpg" id="map-window-image" alt="Bistro apetit ambijent">
                        <div class="full padme">
                            <h2 class="full" id="map-window-title">Bistro Apetit by Marin Rendić, Zagreb</h2>
                            <p class="full" id="map-window-text">Bistro Apetit by Marin Rendić je mjesto na kojem će vas dočekati vrhunski spoj hrane, pića i hedonizma. Gault&Millau ga je ocijenio kao gastronomsku destinaciju u kojoj će i najprobirljiviji gosti uživati. Chef Marin Rendić svojim je iskustvom u elitnim restoranima diljem svijeta, postigao je životni san i postao cijenjeni i svjetski poznati kuhar.</p>
                        </div>
                        <p class="full" id="map-window-deal">Za plaćanje Mastercard<sup>®</sup> i Maestro<sup>®</sup> karticama u Bistrou Apetit by Marin Rendić dobivate besplatan desert.</p>
                    </div>
                    <img src="<?php echo $directory; ?>img/mastercard_zagreb.jpg" class="the-map" alt="Interaktivna mapa Zagreba">
                    <div class="location animate" id="bistro-apetit" data-aos="fade-up" data-aos-duration="500" data-aos-delay="250">
                        <div class="location-title animate">Bistro Apetit</div>
                        <img alt="Bistro Apetit lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location animate" id="johan-franck" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                        <div class="location-title animate">Johann Franck</div>
                        <img alt="Johann Franck lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location animate" id="rougemarin" data-aos="fade-up" data-aos-duration="500" data-aos-delay="350">
                        <div class="location-title animate">Rougemarin</div>
                        <img alt="Rougemarin lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location animate" id="bagel" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                        <div class="location-title animate">Bagel & Lobster Barr</div>
                        <img alt="Bagel & Lobster bar lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location animate" id="savica" data-aos="fade-up" data-aos-duration="500" data-aos-delay="450">
                        <div class="location-title animate">Savica Eatery bar</div>
                        <img alt="Savica Eatery bar lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location animate" id="lemika" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                        <div class="location-title animate">Le Mika</div>
                        <img alt="Le Mika lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location animate" id="truffle" data-aos="fade-up" data-aos-duration="500" data-aos-delay="550">
                        <div class="location-title alt-locaton-title animate">Lov na tartufe</div>
                        <img alt="Lov na tartufe lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location animate" id="dubravkin-put" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
                        <div class="location-title animate">Dubravkin put</div>
                        <img alt="Dubravkin put lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location animate" id="baba" data-aos="fade-up" data-aos-duration="500" data-aos-delay="650">
                        <div class="location-title animate">BABA by RougeMarin</div>
                        <img alt="BABA lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="container flex mobile-only">
            <h4 class="full pad-top desktop-white-space" data-aos="fade-left" data-aos-duration="500" data-aos-delay="250">Jadran</h4>
        </div>
        <div class="gray-background-desktop desktop-blue full flex">
            <div class="rounded-window relative full">
            <div class="desktop-only map-title obala-map-title">Jadran</div>
                <div class="container obala-map-parent">
                    <div id="map-window-2" class="animate flex">
                        <img src="<?php echo $directory; ?>img/exit.svg" class="exit-btn-2" alt="Exit map window button">
                        <img src="<?php echo $directory; ?>img/bistro-apetit.jpg" id="map-window-image-2" alt="Bistro apetit ambijent">
                        <div class="full padme">
                            <h2 class="full" id="map-window-title-2">Cantinetta, Skradin</h2>
                            <p class="full" id="map-window-text-2">U kuhinji kultnog skradinskog restorana vrhunski se miješa duh venecijanske gastronomske tradicije, morlačkog zaleđa i orijentalnih utjecaja. Imperativ restorana su prirodne i sezonske namirnice koje na sebi svojstven način predstavljaju na stolu. Duh negdašnje kultne konobe, koju su lokalci nazivali Kod Ane, vlasnik i chef restorana Tome Računica utako je u svako jelo poštujući tradiciju izvorne skradinske gastronomije.</p>
                        </div>
                        <p class="full" id="map-window-deal-2">Uz plaćanje Mastercard ili Maestro karticom, u Cantinetti vas očekuje besplatno piće dobrodošlice.</p>
                    </div>
                    <img src="<?php echo $directory; ?>img/mastercard_obala.jpg" class="the-map" alt="Interaktivna mapa Hrvatske obale">
                    <div class="location-2 animate" id="cantinetta" data-aos="fade-up" data-aos-duration="500" data-aos-delay="250">
                        <div class="location-title animate">Cantinetta</div>
                        <img alt="Cantinetta lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="fosa" data-aos="fade-up" data-aos-duration="500" data-aos-delay="275">
                        <div class="location-title alt-locaton-title animate">Foša</div>
                        <img alt="Foša lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="zora" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                        <div class="location-title animate">Zora bila</div>
                        <img alt="Zora bila lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>

                    <div class="location-2 animate" id="zigante" data-aos="fade-up" data-aos-duration="500" data-aos-delay="350">
                        <div class="location-title animate">Zigante</div>
                        <img alt="Zigante lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="boskinac" data-aos="fade-up" data-aos-duration="500" data-aos-delay="375">
                        <div class="location-title animate">Boškinac</div>
                        <img alt="Boškinac lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="san-rocco" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                        <div class="location-title animate">San Rocco</div>
                        <img alt="San Rocco lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="bellevue-hotel" data-aos="fade-up" data-aos-duration="500" data-aos-delay="425">
                        <div class="location-title animate">Bellevue Hotel</div>
                        <img alt="Bellevue Hotel lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="eat-istria" data-aos="fade-up" data-aos-duration="500" data-aos-delay="450">
                        <div class="location-title alt-locaton-title animate">Eat Istria</div>
                        <img alt="Eat Istria lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="os-kolac" data-aos="fade-up" data-aos-duration="500" data-aos-delay="475">
                        <div class="location-title animate">O'š Kolač</div>
                        <img alt="O'š Kolač lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="okusi-motovuna" data-aos="fade-up" data-aos-duration="500" data-aos-delay="475">
                        <div class="location-title animate">Okusi Motovuna</div>
                        <img alt="Okusi Motovuna lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="dida" data-aos="fade-up" data-aos-duration="500" data-aos-delay="325">
                        <div class="location-title animate">Didova kuća</div>
                        <img alt="Didova kuća lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="ldpalace" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                        <div class="location-title animate">Lešić Dimitri Palace</div>
                        <img alt="Lešić Dimitri Palace lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="badi" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                        <div class="location-title animate">Badi</div>
                        <img alt="Badi lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="pergola" data-aos="fade-up" data-aos-duration="500" data-aos-delay="525">
                        <div class="location-title animate">Pergola</div>
                        <img alt="Pergola lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="plavi-podrum" data-aos="fade-up" data-aos-duration="500" data-aos-delay="550">
                        <div class="location-title animate">Plavi podrum</div>
                        <img alt="Plavi podrum lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="marina" data-aos="fade-up" data-aos-duration="500" data-aos-delay="575">
                        <div class="location-title animate">Marina</div>
                        <img alt="Marina lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="monte" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
                        <div class="location-title animate">Monte</div>
                        <img alt="Monte lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="ariston" data-aos="fade-up" data-aos-duration="500" data-aos-delay="625">
                        <div class="location-title animate">Ariston</div>
                        <img alt="Ariston lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="konoba-boba" data-aos="fade-up" data-aos-duration="500" data-aos-delay="650">
                        <div class="location-title animate">Konoba Boba</div>
                        <img alt="Konoba Bob lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="draga-di-lovrana" data-aos="fade-up" data-aos-duration="500" data-aos-delay="675">
                        <div class="location-title animate">Draga di Lovrana</div>
                        <img alt="Draga di Lovrana lokacija na mapi" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                    <div class="location-2 animate" id="pelegrini" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700">
                        <div class="location-title animate">Pelegrini</div>
                        <img alt="Pelegrini" src="<?php echo $directory; ?>img/chef.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container center top-pad">
        <h4 class="flex underline-title" data-aos="fade-left" data-aos-duration="500" data-aos-delay="250">Inspiriraj se neprocjenjivim pričama</h4>
    </div>
    <div class="full flex mini-articles">
        <a href="https://www.telegram.hr/price/da-dokaze-svojima-da-nije-beskoristan-bacio-se-na-djedov-vinograd-sada-je-jedan-od-najboljih-vinara-u-hrvatskoj/" target="_blank" class="flex article-mini third flex-responsive">
            <img class="animate" src="https://www.telegram.hr/wp-content/uploads/2019/07/trapan_obitelj-840x530.jpg" alt="Obitelj Trapan">
            <div class="article-mini-text full flex">
                <h2 class="full" data-aos="fade-up" data-aos-duration="500" data-aos-delay="250">Da dokaže svojima da nije beskoristan, bacio se na djedov vinograd. Sada je jedan od najboljih vinara u Hrvatskoj</h2>
                <div class="full">
                    <div class="cta animate" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="750">Pročitaj više</div>
                </div>
            </div>
        </a>
        <a href="https://www.telegram.hr/price/pronasla-sam-genijalnu-zabavu-za-ljeto-u-zagrebu-otisla-sam-na-radionicu-da-naucim-raditi-cokoladu/" target="_blank" class="flex article-mini third flex-responsive">
            <img class="animate" src="https://www.telegram.hr/wp-content/uploads/2019/07/40A6708-840x530.jpg" alt="Novinarka priprema craft čokoladu">
            <div class="article-mini-text full flex">
                <h2 class="full" data-aos="fade-up" data-aos-duration="500" data-aos-delay="250">Pronašla sam genijalnu zabavu za ljeto u Zagrebu. Otišla sam na radionicu, da naučim raditi čokoladu</h2>
                <div class="full">
                    <div class="cta animate" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="750">Pročitaj više</div>
                </div>
            </div>
        </a>
        <a href="https://www.telegram.hr/price/provela-sam-dan-u-istarskom-restoranu-zigante-u-kojem-su-posve-opsesivni-oko-tartufa-evo-sto-sam-naucila/" target="_blank" class="flex article-mini third flex-responsive">
            <img class="animate" src="https://www.telegram.hr/wp-content/uploads/2017/07/g-840x530.jpg" alt="Restoran Zigante">
            <div class="article-mini-text full flex">
                <h2 class="full" data-aos="fade-up" data-aos-duration="500" data-aos-delay="250">Provela sam dan u istarskom restoranu Zigante gdje su opsesivni oko tartufa; evo što sam naučila</h2>
                <div class="full">
                    <div class="cta animate" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="750">Pročitaj više</div>
                </div>
            </div>
        </a>
    </div>
    
    <footer class="gray-background">
        <div class="container flex">
            <div class="full center">
                <img src="<?php echo $directory; ?>img/tg_studio.png" class="tg-studio" alt="Telegram Studio">
                <img src="<?php echo $directory; ?>img/mastercard.svg" class="partner" alt="Mastercard">
            </div>
            <p class="full center-text">
                Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Mastercard i po najvišim uredničkim standardima Telegram Media Grupe.
            </p>
        </div>
    </footer>
    <script src="<?php echo $directory; ?>js/aos.js"></script>
    <script>
        AOS.init({
            easing: 'ease-out',
            once: false,
            mirror: true
        });
        var directory = '<?php echo $directory; ?>';

        function changeText(id) {
            $("#map-window-image").attr("src", directory + "img/" + id + ".jpg");
            switch (id) {
                case 'bistro-apetit':
                    $("#map-window-title").html("Bistro Apetit by Marin Rendić, Zagreb");
                    $("#map-window-text").html("Bistro Apetit by Marin Rendić je mjesto na kojem će vas dočekati vrhunski spoj hrane, pića i hedonizma. Gault&Millau ga je ocijenio kao gastronomsku destinaciju u kojoj će uživati i najprobirljiviji gosti. Chef Marin Rendić svojim je iskustvom u elitnim restoranima diljem svijeta, postigao životni san i postao cijenjeni i svjetski poznati kuhar.");
                    $("#map-window-deal").html("Za plaćanje Mastercard<sup>®</sup> i Maestro<sup>®</sup> karticama u Bistrou Apetit by Marin Rendić dobivate besplatan desert.");
                    $("#map-window-image").attr("alt", "Bistro Apetit ambijent");
                    break;
                case 'johan-franck':
                    $("#map-window-title").html("Johann Franck, Zagreb");
                    $("#map-window-text").html("Ugodan i topli prostor objedinjuje ponudu kavane, bistroa i lounge bara. Johann Franck je mjesto na kojem možete popiti najbolju Franck kavu, kušati ukusne delicije. Pomno promišljena jela vruhunskih kuhara u predivnom ambijentu u srcu grada oduševit će svakog ljubitelja fine hrane.");
                    $("#map-window-deal").html("Za plaćanje Mastercard<sup>®</sup> i Maestro<sup>®</sup> karticama Johann Franck nudi besplatan desert.");
                    $("#map-window-image").attr("alt", "Johann Franck ambijent");
                    break;
                case 'rougemarin':
                    $("#map-window-title").html("RougeMarin i RougeMarin City, Zagreb");
                    $("#map-window-text").html("RougeMarin nije ni bistro, ni restoran, ni gostionica: to je mjesto gdje vrhunska hrana kombinirana s besprijekornom prezentacijom i profesionalnom uslugom nosi unikatan doživljaj za svakog pojedinog gosta. Od ranog ručka do tematskih večera, od vjenčanja do cateringa na bilo kojoj lokaciji.");
                    $("#map-window-deal").html("RougeMarin i RougeMarinCity svakog četvrtka korisnicima Mastercard<sup>®</sup> i Maestro<sup>®</sup> kartica donose 10% popusta prilikom plaćanja.");
                    $("#map-window-image").attr("alt", "Rougemarin ambijent");
                    break;
                case 'bagel':
                    $("#map-window-title").html("Bagel & Lobster Barr, Zagreb");
                    $("#map-window-text").html("Bagel & Lobster Barr nudi razne varijante doručka i ručka s bagel pecivom, a u ponudi imaju i lobster, odnosno hlap te jela od hlapa. Osim cijelog hlapa s grilla (kamado joe grilla) u ponudi se mogu pronaći i jela od hlapa kao što su klasični lobster roll u domaćem brioche pecivu s japanskom majonezom i bisque maslacem.");
                    $("#map-window-deal").html("Bagel & Lobster bar  svakog četvrtka korisnicima Mastercard<sup>®</sup> i Maestro<sup>®</sup> kartica donose 10% popusta prilikom plaćanja.");
                    $("#map-window-image").attr("alt", "Bagel & Lobster Barr razna peciva");
                    break;
                case 'savica':
                    $("#map-window-title").html("Savica Eatery, Zagreb");
                    $("#map-window-text").html("Savica Eatery mjesto je na kojem domaća kuhinja susreće moderni način pripremanja hrane, na kojem domaće namirnice susreću kreativnost i na kojem se može pronaći ne samo vrhunska hrana, već i gdje ćete se osjećati kao doma. Jelovnik  se kreira u skladu sa sezonskim namirnicama,  a začinske mješavine rade sami.");
                    $("#map-window-deal").html("Pogodnost od 5% popusta te besplatno piće dobrodošlice sve goste koji plaćaju Mastercard<sup>®</sup> ili Maestro<sup>®</sup> kartice očekuje u bistrou Savica Eatery.");
                    $("#map-window-image").attr("alt", "Bagel & Lobster bar razna peciva");
                    break;
                case 'lemika':
                    $("#map-window-title").html("Le Mika, Zagreb");
                    $("#map-window-text").html("Le Mika je trenutačno jedno od 'it' zagrebačkih mjesta na koje se odlazi na ručak ili večeru. U ponudi imaju klasične francuske juhe, a na jelovniku se mogu naći i quiche Lorraine, govedina Bourginon te ostali francuski bistro klasici.");
                    $("#map-window-deal").html("Prilikom konzumacije glavnog jela, u Le Miki dobivate 10% popusta na sve deserte prilikom plaćanja Mastercard<sup>®</sup> i Maestro<sup>®</sup> karticama.");
                    $("#map-window-image").attr("alt", "Le Mika crepe");
                    break;
                case 'truffle':
                    $("#map-window-title").html("Lov na tartufe, Zagreb");
                    $("#map-window-text").html("Kušajte tartufe izravno iz tla uz Truffle Hunting Zagreb. Između ostalog, uživat ćete u degustaciji na otvorenom koja uključuje nasjeckane tartufe, sir s tartufima i poseban aperitiv, nakon čega slijedi jelovnik u tri slijeda jela nadahnutih tartufima popraćen vinom. Čak ćete primiti svježe iskopani tartuf koji možete ponijeti kući.");
                    $("#map-window-deal").hide();
                    $("#map-window-deal").html("");
                    $("#map-window-image").attr("alt", "Tartufi");
                    break;
                case 'dubravkin-put':
                    $("#map-window-title").html("Dubravkin put, chef Vedran Petranović");
                    $("#map-window-text").html("Za gosta s Premium karticom biti će osigurano iskustvo upoznavanja chefa koji će se doći javiti gostima te s njima popričati o dojmu, odnosno objasniti jelo koje upravo jedu.");
                    $("#map-window-deal").hide();
                    $("#map-window-deal").html("");
                    $("#map-window-image").attr("alt", "Restoran ambijent");
                    break;
                case 'baba':
                    $("#map-window-title").html("BABA by RougeMarin, Zagreb");
                    $("#map-window-text").html("BABA by RougeMarin u središtu Zagreba mjesto je u kojem se može probati nova kreativna delicija chefa Marin Medaka. MlinZZa, hrskavi spoj mlinca i sočne pizze, kojima je dodao pozlatu – svoju paletu okusa i mirisa oduševit će sve koji fine zalogaje.");
                    $("#map-window-deal").html("BABA by RougeMarinsvakog četvrtka korisnicima Mastercard<sup>®</sup> i Maestro<sup>®</sup> kartica donose 10% popusta prilikom plaćanja.");
                    $("#map-window-image").attr("alt", "BABA by RougeMarin ambijent");
                    break;
                default:
                    console.log("Error 404: ID of map marker not found.");
                    break;
            }
        }

        function changeText2(id) {
            $("#map-window-image-2").attr("src", directory + "img/" + id + ".jpg");
            switch (id) {
                case 'cantinetta':
                    $("#map-window-title-2").html("Cantinetta, Skradin");
                    $("#map-window-text-2").html("U kuhinji kultnog skradinskog restorana vrhunski se miješa duh venecijanske gastronomske tradicije, morlačkog zaleđa i orijentalnih utjecaja. Duh negdašnje kultne konobe, koju su lokalci nazivali Kod Ane, vlasnik i chef restorana Tome Računica utako je u svako jelo poštujući tradiciju izvorne skradinske gastronomije.");
                    $("#map-window-deal-2").show();
                    $("#map-window-deal-2").html("Uz plaćanje Mastercard<sup>®</sup> ili Maestro<sup>®</sup> karticom, u Cantinetti vas očekuje besplatno piće dobrodošlice.");
                    $("#map-window-image-2").attr("alt", "Cantinetta ambijent");
                    break;
                case 'fosa':
                    $("#map-window-title-2").html("Foša, Zadar");
                    $("#map-window-text-2").html("Riblji restoran Foša spoj je iskonskog dalmatinskog i suvremenih trendova, podjednako u arhitekturi i uređenju interijera, kao i u gastronomiji. Ugodan ambijent restorana zadržao je elemente tradicije, ali suvremnenim uređenjem poručuje da se razvija u duhu vremena i u skaldu sa zahtjevima suvremenog gosta.");
                    $("#map-window-deal-2").show();
                    $("#map-window-deal-2").html("Uz plaćanje Mastercard<sup>®</sup> ili Maestro<sup>®</sup> karticom, u Foši  vas očekuje besplatno piće dobrodošlice.");
                    $("#map-window-image-2").attr("alt", "Foša ambijent");
                    break;
                case 'zora':
                    $("#map-window-title-2").html("Zora bila, Split");
                    $("#map-window-text-2").html("Na jednoj od najljepših splitskih lokacija, neposredno pored međunarodno poznate plaže Bačvice, nalazi se Zora bila. U predivnom modernom ambijentu s panoramskim pogledom na splitska vrata, otoke Brač i Šoltu, možete uživati u kreativnoj kuhinji koju osmišljavaju kuharski i životni par Sandra & Dane.");
                    $("#map-window-deal-2").show();
                    $("#map-window-deal-2").html("Uz plaćanje Mastercard<sup>®</sup> ili Maestro<sup>®</sup> karticom, u Zori biloj  vas očekuje besplatno piće dobrodošlice.");
                    $("#map-window-image-2").attr("alt", "Zora bila ambijent");
                    break;
                case 'dida':
                    $("#map-window-title-2").html("Didova kuća, otok Pag");
                    $("#map-window-text-2").html("U toplom obiteljskom ambijentu, u mjestu Šimuni na otoku Pagu smjestila se Konoba Didova kuća. U njoj se nastoje očuvati autohtone vrijednosti nudeći gostima maštovita domaća jela spravljena od svježih i lokalnih namirnica te vrhunska vina i birana maslinova ulja.");
                    $("#map-window-deal-2").show();
                    $("#map-window-deal-2").html("Uz plaćanje Mastercard<sup>®</sup> ili Maestro<sup>®</sup> karticom, u Didovoj kući  vas očekuje besplatno piće dobrodošlice.");
                    $("#map-window-image-2").attr("alt", "Didova kuća ambijent");
                    break;
                case 'zigante':
                    $("#map-window-title-2").html("Zigante, Livade");
                    $("#map-window-text-2").html("Prepustite se ljubavi prema tartufima uz ukusni meni u restoranu Zigante. Večera za dvoje u četiri slijeda donosi popularne i u Istri omiljene crne tartufe. Kušajte delicije poput moussea od ovčjeg sira s tartufima, domaće tagliatele sa svježim crnim tartufima, obraza boškarina u terano umaku i sladoled od tartufa.");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "Zigante ambijent");
                    break;
                case 'boskinac':
                    $("#map-window-title-2").html("Boškinac, Novalja ");
                    $("#map-window-text-2").html("Prepustite se paškoj kuhinji uz večeru od osam sljedova za dvoje u Boškincu, poznatom luksuznom hotelu, vinariji i restoranu koji je dio prestižne udruge Jeunes Restaurateurs d'Europe (JRE). Dobit ćete i potpisanu bocu domaćeg vina iz Boškinca koju ćete moći ponijeti kući.");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "Boškinac ambijent");
                    break;
                case 'san-rocco':
                    $("#map-window-title-2").html("San Rocco, Brtonigla");
                    $("#map-window-text-2").html("Vi i vaša pratnja uživat ćete u večeri od 10 sljedova, a baza jela su  tradicionalne istarske namirnice poput tartufa, maslinovog ulja i svježe, lokalno ulovljene ribe i divljači. Uz svaki slijed ponudit će vam se domaće vino koje će naglasiti puni okus svakog jela.");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "San Rocco ambijent");
                    break;
                case 'bellevue-hotel':
                    $("#map-window-title-2").html("Bellevue Hotel, Mali Lošinj");
                    $("#map-window-text-2").html("Počastite se izvanrednom mješavinom okusa u Matsunokiju, japanskom restoranu u luksuznom hotelu Bellevue u Malom Lošinju, gdje će vas chef Saša Pribičević voditi kroz degustacijski jelovnik u pet sljedova. Nakon obroka zaputite se u Alto Rosso, salonski bar u hotelu, da biste se opustili uz degustaciju četiri rijetka single-malt viskija.");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "Bellevue Hotel ambijent");
                    break;
                case 'eat-istria':
                    $("#map-window-title-2").html("Eat Istria, Vodnjan");
                    $("#map-window-text-2").html("Otkrijte što čini istarsko maslinovo ulje najboljim na svijetu tijekom obilaska dvaju renomiranih proizvođača maslinovog ulja. Također ćete kušati domaće zalogaje pripremljene s raznim maslinovim uljima kako bi se postigao savršen okus. Osim toga, moći ćete kušati i jedini balzamični ocat koji se proizvodi u Istri.");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "Eat Istria, Vodnjan ambijent");
                    break;
                case 'os-kolac':
                    $("#map-window-title-2").html("O'š Kolač, Split");
                    $("#map-window-text-2").html("Okusite slatku stranu Hrvatske uz poseban izlet u O'š Kolač, popularnu slastičarnicu u Splitu. Upoznat ćete osnivačicu i chefa Teu Mamut i uživati u njezinim jedinstvenim desertima. Očekuju vas i darovi, a u svojoj ćete vrećici pronaći i recept.");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "O'š Kolač, Split, Vodnjan ambijent");
                    break;
                case 'okusi-motovuna':
                    $("#map-window-title-2").html("Okusi Motovuna, Motovun");
                    $("#map-window-text-2").html("Saznajte sve o malom gradiću Motovunu, od njegove živopisne povijesti do najpopularnije hrane. Između ostalog, kušat ćete fritule i domaću rakiju,  istarske kobasice i bruschettu te naučiti kako praviti tjesteninu uz crne tartufe za ukusan kraj dana.");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "Okusi Motovuna, Motovun, Vodnjan ambijent");
                    break;
                case 'ldpalace':
                    $("#map-window-title-2").html("Lešić Dimitri Palace, chef Marko Gajski");
                    $("#map-window-text-2").html("Pri dobrodošlici gostima s Premium karticom biti će ponuđena čaša pjenušca, a chef će s gostima nazdraviti i popričati. Na kraju večeri chef će prezentirati desert i porazgovarati s gostima o ukupnom dojmu večere u restoranu.");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "Restoran ambijent");
                    break;
                case 'badi':
                    $("#map-window-title-2").html("Badi, chef Aleksandar Grubić");
                    $("#map-window-text-2").html("Chef će izaći pozdraviti goste s Premium karticom, a zatim im osobno donijeti desert te ponuditi razgled kuhinje.");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "Restoran ambijent");
                    break;
                case 'pergola':
                    $("#map-window-title-2").html("Pergola, chef Fabricio Vežnaver");
                    $("#map-window-text-2").html("Gost s Premium karticom će dobiti čašu JRE Malvazije Kozlović i usput će mu biti prezentirana priča o ovom posebnom projektu 15 chefova JRE-a i vinara Gianfranca Kozlovića.  JRE Malvazija je dostupna samo  u JRE restoranima u ograničenoj količini od 1650 boca za berbu 2015 koja je trenutno u prodaji.");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "Restoran ambijent");
                    break;
                case 'plavi-podrum':
                    $("#map-window-title-2").html("Plavi podrum, chef Daniela Kramarić");
                    $("#map-window-text-2").html("Chef će se obratiti gostima s Premium karticom tijekom serviranja jednog jela te im dati food explanation.");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "Restoran ambijent");
                    break;
                case 'marina':
                    $("#map-window-title-2").html("Marina, chef Marina Gaši");
                    $("#map-window-text-2").html("Gost s Premium karticom će biti pozvan u kuhinju gdje će prisustvovati slaganju/serviranju jednog slijeda ili deserta.");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "Restoran ambijent");
                    break;
                case 'monte':
                    $("#map-window-title-2").html("Monte, chef Danijel Đekić");
                    $("#map-window-text-2").html("Michelin star 2017, 2018, 2019. Gosti s Premium karticom, upoznati će tijekom večere chefa koji će ih obići.");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "Restoran ambijent");
                    break;
                case 'ariston':
                    $("#map-window-title-2").html("Ariston");
                    $("#map-window-text-2").html("Chef će osobno predstaviti i poslužiti degustacijski menu u 7 slijedova uz pratnju vina za goste s Premium karticom.");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "Restoran ambijent");
                    break;
                case 'konoba-boba':
                    $("#map-window-title-2").html("Konoba Boba, chef Vjeko Bašić");
                    $("#map-window-text-2").html("Chef će gosta s Premium karaticom pozdraviti uz aperitiv i predstaviti svaki slijed koji je pripremio. Radi se degustacijskom meniju koji predstavlja filozofiju restorana. Gostu će biti ponuđen i obilazak kuhinje.");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "Restoran ambijent");
                    break;
                case 'draga-di-lovrana':
                    $("#map-window-title-2").html("Draga di Lovrana, chef Deni Srdoč");
                    $("#map-window-text-2").html("Michelin star 2019. Za svakog gosta s Premium karticom chef će osobno poslužiti jedno jelo i objasniti  kroz to jelo filozofiju restorana koji je fokusiran na (mikro)lokaciju Kvarnera s otocima");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "Restoran ambijent");
                    break;
                case 'pelegrini':
                    $("#map-window-title-2").html("Pelegrini, chef Rudolf Štefan");
                    $("#map-window-text-2").html("Michelin star 2018, 2019. Svakom gostu s Premium karticom bit će ponuđen pjenušac i kamenica pri dolasku u konobu.");
                    $("#map-window-deal-2").hide();
                    $("#map-window-deal-2").html("");
                    $("#map-window-image-2").attr("alt", "Restoran ambijent");
                    break;
                default:
                    console.log("Error 404: ID of map marker not found.");
                    break;
            }
        }
        $(".location").click(function() {
            var id = $(this).attr("id");
            changeText(id);
            $(".zagreb-map-parent").toggleClass("map-toggle");
            $("#map-window-image").fadeIn();
        })
        $(".location-2").click(function() {
            var id = $(this).attr("id");
            changeText2(id);
            $(".obala-map-parent").toggleClass("map-toggle");
            $("#map-window-image-2").fadeIn();
        })
        $(".exit-btn").click(function() {
            $(".zagreb-map-parent").toggleClass("map-toggle");
            $("#map-window-image").fadeOut();
        })
        $(".exit-btn-2").click(function() {
            $(".obala-map-parent").toggleClass("map-toggle");
            $("#map-window-image-2").fadeOut();
        })
    </script>
    <?php wp_footer(); ?>
</body>

</html>