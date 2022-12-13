<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/eucerin/akne/';
//$native_path = 'http://localhost/super1-theme/templates/native/eucerin/akne/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();
    ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=2.7" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $native_path ?>jquery.serialize-object.min.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>slick/slick.css" type="text/css" />
    <script src="<?php echo $native_path ?>slick/slick.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>aos.css" type="text/css" />
    <script src="<?php echo $native_path ?>aos.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Benne&family=Roboto:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
    <script src="<?php echo $native_path ?>functions.js?ver=2.2"></script>
</head>

<body>
    <div id="page">
        <header class="full flex intro main-logo-full flex" style="background-image: url('<?php echo $native_path ?>img/noisy_bg.png')">
            <div class="container center relative"><img class="main-logo" data-aos="flip-up" src="<?php echo $native_path ?>img/tg_mojeiskustvo_logo.svg?ver=2.0" alt="Moje iskustvo s aknama" /></div>
        </header>
        <div class="full flex intro" data-aos="fade-up">
            <div class="container narrow-container flex relative">
                <p>One nisu samo bolest kože i nisu samo dermatološki problem. One utječu na naše mentalno zdravlje, snagu i doživljaj samih sebe, ali i svijeta oko nas.</p>
                <p>Akne za sobom nose izazove zbog kojih je važno imati podršku okoline, obitelji, prijatelja, ali i podršku stručnjaka koji mogu predložiti najbolje proizvode za rješavanje ovog problema.</p>
            </div>
        </div>
        <div class="full flex intro" data-aos="fade-up">
            <div class="container narrow-container flex relative">
                <p class="full">Ovo je Petra i njezino iskustvo s aknama</p>
            </div>
        </div>
        <div class="full flex" data-aos="fade-up">
            <div class="container flex relative">
                <style>
                    .video-container {
                        position: relative;
                        padding-bottom: 56.25%;
                        padding-top: 30px;
                        height: 0;
                        overflow: hidden;
                    }

                    .video-container iframe,
                    .video-container object,
                    .video-container embed {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                    }
                </style>
                <div class='full video-container'><iframe src='https://www.youtube.com/embed/-3Ra8qQ4Wec' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>
            </div>
        </div>
        <div class="full flex intro" data-aos="fade-up">
            <div class="container narrow-container flex relative">
                <p>Podijelite i vi s nama svoje iskustvo s aknama. Snimite svoju priču i budite inspiracija drugima.</p>
                <p>Snimite video do jedne minute na temu <br><b>"Kako se borite s aknama i koja osoba vam je najveća potpora?"</b></p>
                <p>Video pošaljite putem WeTransfer ili YouTube linka u našem formularu za prijavu.</p>
                <p>Najinspirativniji odgovor po odabiru redakcije nagrađujemo vrijednim nagradama:<br />
                    ● Eucerin paket Dermopure proizvoda<br />
                    ● Pregled kod dermatologa<br />
                    ● Savjetovanje kod nutricionista
                </p>
            </div>
        </div>
        <div class="full flex infographic">
            <img src="<?php echo $native_path ?>img/tg_infographic_eucerin_akne2.png?ver=2.0" aria-hidden="true" class="mobile-only" data-aos="fade-up">
            <div class="container flex relative desktop-only" data-aos="fade-up">
                <img src="<?php echo $native_path ?>img/tg_infographic_eucerin_akne.png?ver=2.0" aria-hidden="true" class="desktop-only">
            </div>
        </div>
        <div class="full flex infographic2">
            <div class="container flex relative">
                <h2 class="full center-text" data-aos="fade-up">DERMATOLOZI PRUŽAJU ODGOVORE NA NAJČEŠĆA PITANJA O NJEZI KOŽE</h2>
                <div class="full circle-line center" data-aos="fade-up"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                <h3 class="full center-text green-text" data-aos="fade-up">Trebam li čistiti kožu ujutro i navečer?</h3>
                <p class="full center-text" data-aos="fade-up">Da. Vaša koža naporno radi kako bi se obnovila tijekom noći pa kada čistite lice ujutro, uklanjate sebum (masnoću koju vaša koža proizvodi na prirodan način kako bi spriječila isušivanje). Na kraju dana trebate ukloniti sebum, znoj i trgove šminke koju ste možda nanijeli. Znanstveno je dokazano da očišćena koža može bolje disati. Čišćenje kože također omogućuje upijanje aktivnih sastojaka iz proizvoda za njegu koje upotrebljavate.</p>
                <div class="full special-element" data-aos="fade-up">
                    <img src="<?php echo $native_path ?>img/krug-1.png" aria-hidden="true">
                    <h3 class="full center-text">Je li Eucerin DERMOPURE njega pogodna kao podloga prije šminke?</h3>
                    <p class="full center-text">Da. Ako je koža temeljito hidratizirana, šminka se lakše i ujednačenije nanosi.</p>
                </div>

                <h3 class="full center-text green-text" data-aos="fade-up">Prekrivam akne šminkom. Radim li loše?</h3>
                <p class="full center-text" data-aos="fade-up">Temeljito čišćenje i hidratiziranje poboljšat će kožu na koju se svakodnevno nanosi šminka koja stvara dodatne nečistoće. Svakako koristite make-up koji je prikladan za vašu kožu i ne zaboravite ga ukloniti temeljito prije spavanja. Eucerin DERMOPURE obojani stik za prikrivanje nepravilnosti kože je posebno osmišljen da prikrije i smanjuje akne. Savjetujte se s liječnikom ili ljekarnikom o vašim kozmetičkim izborima.</p>

                <div class="full special-element alternate-sp-el" data-aos="fade-up">
                    <img src="<?php echo $native_path ?>img/krug-2.png" aria-hidden="true">
                    <h3 class="full center-text">Koje namirnice se najčešće povezuju s prištićima i aknama?</h3>
                    <p class="full center-text">Brojna istraživanja potvrđuju da ruralna i neindustrijska društva imaju manje slučajeva akni od zapadne populacije. Sastavni elementi zapadne prehrane su hiperglikemijski ugljikohidrati, (kravlje) mlijeko i zasićene masne kiseline i postoje uvjerljivi dokazi da hrana s visokim glikemijskim indeksa i mlijeko mogu uzrokovati akne. Oboje potiču androgene (muške hormone) koji imaju dokazano važnu ulogu u nastanku akni. <a href="https://www.eucerin.hr/acne/article-overview/410_article_12" target="_blank">Saznajte više</a></p>
                </div>
                <h3 class="full center-text green-text" data-aos="fade-up">Jesu li akne nasljedne?</h3>
                <p class="full center-text" data-aos="fade-up">Da. Genetska predispozicija u nastajanju akni ima značajnu ulogu. Ako su oba roditelja patila od akni u adolescentskoj dobi, veća je vjerojatnost da će se akne pojaviti i kod njihove djece.</p>

             
                <div class="full special-element" data-aos="fade-up">
                    <img src="<?php echo $native_path ?>img/krug-3.png" aria-hidden="true">
                    <p class="full center-text">„Nema konačnog istraživanja o uzrocima akni u odrasloj dobi, ali se vjeruje da su povezane s hormonima i fluktuacijama u razinama hormona. Što god je uzrokovalo njihovu pojavu, kao i u mlađoj životnoj dobi, potrebno je odabrati nekomedogene preparate koji će pružiti olakšanje simptoma problematične kože.“</p>
                </div>
                <p class="full center-text" data-aos="fade-up"><a href="https://www.eucerin.hr/kozna-oboljenja/sve-o-njezi-masne-i-aknama-sklone-koze" target="_blank">Saznajte sve</a> o njezi masne i aknama sklone kože Uz stručne savjete specijalistice dermatovenerologije Vesne Lamer, dr. med.</p>

            </div>
        </div>
        <div class="full flex intro" data-aos="fade-up">
            <div class="container flex relative">
                <p>Pronađi odgovarajuću njegu za sebe</p>
                <div class="full gallery">
                    <div><a href="https://www.eucerin.hr/proizvodi/dermopure/gel-za-ciscenje" target="_blank" class="full flex"><img src="<?php echo $native_path ?>img/DermoPure-gel-za-ƒiτåenje-lica.png">
                            <p class="full center-text">DermoPure Gel za čišćenje lica</p>
                        </a></div>
                    <div><a href="https://www.eucerin.hr/proizvodi/dermopure/matirajuci-fluid" target="_blank" class="full flex"><img src="<?php echo $native_path ?>img/DermoPure-matirajuåi-fluid.png">
                            <p class="full center-text">DermoPure matirajući fluid</p>
                        </a></div>
                    <div><a href="https://www.eucerin.hr/proizvodi/dermopure/micelarna-otopina" target="_blank" class="full flex"><img src="<?php echo $native_path ?>img/DermoPure-micelarna-otopina.png">
                            <p class="full center-text">DermoPure micelarna otopina</p>
                        </a></div>
                    <div><a href="https://www.eucerin.hr/proizvodi/dermopure/obnavljajuca-krema" target="_blank" class="full flex"><img src="<?php echo $native_path ?>img/DermoPure-obnavljajuåa-krema.png">
                            <p class="full center-text">DermoPure obnavljajuća krema</p>
                        </a></div>
                    <div><a href="https://www.eucerin.hr/proizvodi/dermopure/obojeni-stick-za-prikrivanje" target="_blank" class="full flex"><img src="<?php echo $native_path ?>img/DermoPure-obojani-stik-za-prikrivanje.png">
                            <p class="full center-text">DermoPure obojani stik za prikrivanje</p>
                        </a></div>
                    <div><a href="https://www.eucerin.hr/proizvodi/dermopure/osvjezavajuci-losion" target="_blank" class="full flex"><img src="<?php echo $native_path ?>img/DermoPure-osvjeºavajuåi-losion-za-lice.png">
                            <p class="full center-text">DermoPure osvježavajući losion</p>
                        </a></div>
                    <div><a href="https://www.eucerin.hr/proizvodi/hyaluron-filler/skin-refining-serum" target="_blank" class="full flex"><img src="<?php echo $native_path ?>img/Hyaluron Filler_Skin_Refining_Serum_web.png">
                            <p class="full center-text">Hyaluron Filler Skin Refining Serum</p>
                        </a></div>
                </div>
            </div>
        </div>
        <div class="full center">
            <a href="https://www.eucerin.hr/specials/dermopure" target="_blank" class="cta animate">Saznajte više</a>
        </div>
        <div class="full flex">
            <div class="container narrow-container flex relative">
                <section class="full native-signature">
                    <div class="container flex">
                        <div class="full center">
                            <img class="partner" src="<?php echo $native_path ?>img/eucerin.png" alt="Eucerin logo" />
                            <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
                        </div>
                        <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s Eucerin i po najvišim uredničkim standardima Telegram Media Grupe.</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php wp_footer();
    ?>
</body>

</html>