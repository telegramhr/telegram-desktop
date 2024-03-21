<!DOCTYPE html>
<html lang="hr">

<?php

/* Potential native paths */
//$native_path = get_stylesheet_directory_uri() . '/templates/native/client/landing/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/franck/kralju-kavu/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/franck/kralju-kavu/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/franck/kralju-kavu/';
//$native_path = 'http://localhost/kralju-kavu/';
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
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oleo+Script+Swash+Caps:wght@400;700&display=swap" rel="stylesheet">
    <!-- Animate on scroll -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/aos/aos.css?v=1.00" type="text/css" />
    <script src="<?php echo $native_path ?>assets/aos/aos.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/operon.css?v=1.10" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/style.css?v=1.10" type="text/css" />
    <!-- Functions -->
    <script src="<?php echo $native_path ?>assets/jquery.serialize-object.min.js"></script>
    <script src="<?php echo $native_path ?>assets/functions.js"></script>
</head>

<body>
    <div class="main-container flex relative">
        <!-- Mobile Side Panel -->
        <div class="mobile-only side-menu">
            <div id="mySidepanel" class="sidepanel flex">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="#" class="center-text full red-text bold">Tko je tvoj kralj ili kraljica?</a>
                <a href="#pocetna" class="relative animate shoo-left">
                    <div class="full">Početna</div>
                </a>
                <a href="#form" class="relative animate shoo-left">
                    <div class="full">Nagradite ih Ciglicom</div>
                </a>
                <a href="#price" class="relative animate shoo-left">
                    <div class="full">Vaše priče</div>
                </a>
            </div>
            <button class="openbtn" onclick="openNav()">☰</button>
        </div>
        <!-- Top Sticky Nav -->
        <nav class="full top-nav flex relative">
            <div class="container column-horizontal-pad flex relative">
                <div class="center relative desktop-only">
                    <a href="#pocetna" class="center relative animate">
                        <div class="full center-text">Početna</div>
                    </a>
                    <a href="#form" class="center relative animate">
                        <div class="full center-text">Nagradite ih Ciglicom</div>
                    </a>
                    <a href="#" class="center relative animate">
                        <div class="full center-text red-text">|</div>
                    </a>
                    <a href="#price" class="center relative animate">
                        <div class="full center-text">Vaše priče</div>
                    </a>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <header class="full flex relative" id="pocetna">
            <div class="container center relative stretch">
                <div class="half flex flex-responsive column-full-pad mobile-order-2">
                    <div class="full flex relative">
                        <h1 class="full red-text bold" data-aos="fade-down">Tko je tvoj kralj ili kraljica?</h1>
                        <p class="full" data-aos="fade-right" data-aos-delay="500">U srcu svakog doma u Hrvatskoj, već se tradicionalno krije crveno pakiranje četvrtastog oblika. Simbol ljubavi, pažnje i darivanja - kultna Franckova ciglica. Međutim, nije potrebno čekati posebne pozivnice ili proslave kako biste svojim najmilijima pokazali koliko vam znače.</p>
                        <p class="full" data-aos="fade-right" data-aos-delay="1000">U suradnji s Telegramom, Franck vam pruža priliku da poklonite "ciglicu" onome tko je u vašem životu pravi kralj ili kraljica. Otvorite svoje srce i podijelite priču o njima, a mi ćemo najbolje nagraditi ekskluzivnim Franck poklon paketom.</p>
                        <div class="full stretch flex mobile-order-3"  data-aos="fade-right" data-aos-delay="1500">
                            <a href="#form" class="animate flex relative button-24">Nagradite ih Ciglicom</a>
                        </div>
                        <div class="full flex relative">
                            <img src="<?php echo $native_path ?>assets/placeholders/jubilarna.png?ver=1.0" aria-hidden="true" class=" column-vertical-pad">
                        </div>
                    </div>
                </div>
                <div class="half flex flex-responsive mobile-order-1 relative">
                    <div class="santa-fade"></div>
                    <img src="<?php echo $native_path ?>assets/placeholders/yetanothercoffee.jpg" aria-hidden="true" class="santa-bg-img">
                </div>
            </div>
        </header>
        <!-- FORM ---------------------------->
        <section class="full flex relative" id="form">
            <div class="container center relative stretch">
                <div class="sixty center flex-responsive column-full-pad mobile-order-1">
                    <div class="full flex relative">
                        <div class="full flex relative mobile-only">
                            <img src="<?php echo $native_path ?>assets/placeholders/many_coffees.png" aria-hidden="true" class=" column-full-pad ">
                        </div>
                        <h3 class="full red-text bold">Nagradite ih Ciglicom</h3>
                        <p class="full">Možda je to vaša supruga koja nesebično volontira, najbolji prijatelj koji je uspješno obranio svoj diplomski rad, ili kolegica koja vas stalno pokriva na poslu. Neka Franck kava postane nota ljubavi prema onima koji zaslužuju krunu u vašem životu.</p>
                        <p class="full">Za sve kraljeve i kraljice koje znamo – <a href="https://shop.franck.eu/hr/kava/mljevena-kava/jubilarna/?utm_medium=display&utm_source=telegram&utm_campaign=jubilarna&utm_content=nagradni_natjecaj&utm_term=croatia_web_jubilarna_telegram_nagradni_natjecaj" target="_blank" class="decorate-link">Franck, jer svaki trenutak zaslužuje kraljevski tretman.</a></p>
                        <div class="full flex relative column-full-pad desktop-only">
                            <img src="<?php echo $native_path ?>assets/placeholders/many_coffees.png" aria-hidden="true" class="">
                        </div>
                    </div>
                </div>
                <div class="fourty center flex-responsive column-full-pad wrap mobile-order-2 bg-color">
                    <form class="full flex relative form-text" id="kavu-form">
                        <p class="full input-text">Vaše ime i prezime</p>
                        <input required type="text" id="ime" name="ime" placeholder="Ivan Horvat" class="full styledinput">
                        <p class="full input-text">Vaša adresa stanovanja</p>
                        <input required type="text" id="adresa" name="adresa" placeholder="Vukovarsko ulica 75a, Zagreb 10000" class="full styledinput">
                        <p class="full input-text">Vaš kontakt broj</p>
                        <input required type="text" id="broj" name="broj" placeholder="091 123 4567" class="full styledinput">
                        <p class="full input-text">Tko je kralj ili kraljica u vašem životu i zašto?</p>
                        <textarea required type="text" id="kralj" name="kralj" placeholder="Pero Perić je za mene kralj jer..." class="full"></textarea>
                        <p class="full input-text">Ispričaj nam najdražu anegdotu koju vežeš uz imenovanog kralja ili kraljicu?</p>
                        <textarea required type="text" id="prica" name="prica" placeholder="Najdraža mi je anegdota kada smo..." class="full shoo-bottom"></textarea>
                        <input type="checkbox" id="prihvacam" name="prihvacam" value="">
                        <label for="prihvacam" class="center-text mobile-70">Prihvaćam <a href="https://www.telegram.hr/promo/pravila-nagradnog-natjecaja-kralju-kavu/" target="_blank">pravila privatnosti i uvjete nagradnog natječaja.</a></label>
                    </form>
                    <div class="full stretch flex">
                        <div class="animate flex relative button-24 right-side" id="submit-form">Nagradite ih Ciglicom</div>
                    </div>
                    <p class="full center-text column-top-pad hide" id="warning">Morate prihvatiti pravila privatnost i uvjete.</p>
                    <p class="full center-text column-top-pad hide" id="success">Uspjeh! Vaša prijava je predana.</p>
                </div>
            </div>
        </section>
        <!-- Vase price----------- -->
        <section class="full center relative" id="price">
            <img src="<?php echo $native_path ?>assets/placeholders/yetanothercoffee.jpg" aria-hidden="true" class="bg-img">
            <div class="full center flex-responsive relative white-bg">
                <h2 class="red-text center-text bold seventy">U fazi smo prikupljanja priča o genijalnim kraljevima i kraljicama. Uskoro ih objavljujemo!</h2>
            </div>
        </section>
        <!-- Articles
        <section class="full center relative">
            <img src="<?php echo $native_path ?>assets/placeholders/friends-bg.png" aria-hidden="true" class="bg-img">
            <a class="full flex relative featured-article stretch">
                <div class="half flex flex-responsive column-full-pad desktop-order-1 white-bg red-border-right">
                    <div class="full flex relative">
                        <h3 class="full red-text bold">Moja supruga je kraljica jer volontira u domu za nezbrinutu djecu već 30 godina. Ovo je naša priča.</h3>
                        <p class="full">Mirko (57) jako je ponosan na svoju suprugu Anu (57) jer već 30 godina pomaže u domu za nezbrinutu djecu. Njezin je rad pomogao obnovi cijelog doma, a i sami su udomili jedno dijete dok je Ana pozvala Mirka da pomogne u krečenju doma.</p>
                        <p class="full">Dok se Mirko zaigrano prepirao s djevojčicom iz doma tjednima, prirasla mu je srcu i odlučili su ju posvojiti. Naglašavamo kako je Mirko putem našeg micrositea i prijavnice na njemu svojoj ženi poslao ciglicu Franck kave - tradicionalni poklon u našim krajevima- ali ovog puta kao znak pažnje i poruku da je ona Kraljica.</p>
                    </div>
                </div>
                <div class="half center flex-responsive column-full-pad desktop-order-2"></div>
            </a>
        </section>
        <section class="full center relative">
            <img src="<?php echo $native_path ?>assets/placeholders/friends-bg.png" aria-hidden="true" class="bg-img">
            <a class="full flex relative featured-article stretch">
                <div class="half flex flex-responsive column-full-pad desktop-order-2 white-bg red-border-left">
                    <div class="full flex relative">
                        <h3 class="full red-text bold">Moja supruga je kraljica jer volontira u domu za nezbrinutu djecu već 30 godina. Ovo je naša priča.</h3>
                        <p class="full">Mirko (57) jako je ponosan na svoju suprugu Anu (57) jer već 30 godina pomaže u domu za nezbrinutu djecu. Njezin je rad pomogao obnovi cijelog doma, a i sami su udomili jedno dijete dok je Ana pozvala Mirka da pomogne u krečenju doma.</p>
                        <p class="full">Dok se Mirko zaigrano prepirao s djevojčicom iz doma tjednima, prirasla mu je srcu i odlučili su ju posvojiti. Naglašavamo kako je Mirko putem našeg micrositea i prijavnice na njemu svojoj ženi poslao ciglicu Franck kave - tradicionalni poklon u našim krajevima- ali ovog puta kao znak pažnje i poruku da je ona Kraljica.</p>
                    </div>
                </div>
                <div class="half center flex-responsive column-full-pad desktop-order-1"></div>
            </a>
        </section> -->
        <!-- Footer -->
        <section class="full center relative" id="theend">
            <footer class="full flex relative">
                <div class="container text-container flex relative column-full-pad">
                    <div class="full center logo-line">
                        <img src="<?php echo $native_path ?>assets/logos/tg_studio_horizontal_color.png" alt="TG Studio logo" />
                    </div>
                    <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom i po najvišim uredničkim standardima Telegram Media Grupe.</p>
                </div>
            </footer>
        </section>
        <?php wp_footer(); 
        ?>
    </div>
</body>

</html>