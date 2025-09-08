<!DOCTYPE html>
<html lang="hr">

<?php

/* Potential native paths */
//$native_path = get_stylesheet_directory_uri() . '/templates/native/client/landing/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/superone/back-to-routine/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/back-to-routine/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/superone/back-to-routine/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/client/landing/';
//$native_path = 'http://localhost/back-to-routine/';
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
    <link href="https://fonts.googleapis.com/css2?family=Ballet:opsz@16..72&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Special+Elite&display=swap" rel="stylesheet">

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
        <!-- Desktop-only Header-->
        <header class="full center relative hero-photo desktop-only">
            <nav class="full center relative folder-nav">
                <a class = "absolute white-folder" href="#power" ><img src="assets/placeholders/bijeli-file.png" alt="Back to Power" data-aos="fade-right" data-aos-delay="250"></a>
                <a class = "absolute brown-folder" href="#design"><img src="assets/placeholders/smedi-file.png" alt="Back to Design" data-aos="fade-left" data-aos-delay="500"></a>
                <a class = "absolute blue-folder" href="#lifestyle"><img src="assets/placeholders/plavi-file.png" alt="Back to Lifestyle" data-aos="fade-right" data-aos-delay="750"></a>
                <a class = "absolute yellow-folder" href="#beauty"><img src="assets/placeholders/zuti-file.png" alt="Back to Beauty" data-aos="fade-left" data-aos-delay="1000"></a>
                <a class = "absolute pink-folder" href="#fashion"><img src="assets/placeholders/rozi-file(1).png" alt="Back to Fashion" data-aos="fade-right" data-aos-delay="1250"></a>
            </nav>
            <div class="header-text full flex center-text relative absolute" data-aos="fade-right" data-aos-delay="1500">
                <h1 class="full fancy">Back</h1>
                <h3 class="full normal-text capatalise">to</h3>
                <h1 class="full fancy">routine</h1>
            </div>
        </header>
        <header class="full center relative hero-photo mobile-only">
            <nav class="full center relative folder-nav">
                <a class = "absolute white-folder full" href="#power" ><img src="assets/placeholders/bijeli-file-mobile.png" alt="Back to Power" data-aos="fade-right" data-aos-delay="250"></a>
                <a class = "absolute brown-folder full" href="#design"><img src="assets/placeholders/brown-file.png" alt="Back to Design" data-aos="fade-left" data-aos-delay="500"></a>
                <a class = "absolute blue-folder full" href="#lifestyle"><img src="assets/placeholders/plavi-file-mobile.png" alt="Back to Lifestyle" data-aos="fade-right" data-aos-delay="750"></a>
                <a class = "absolute yellow-folder full" href="#beauty"><img src="assets/placeholders/zuti-file-mobile.png" alt="Back to Beauty" data-aos="fade-left" data-aos-delay="1000"></a>
                <a class = "absolute pink-folder full" href="#fashion"><img src="assets/placeholders/pink-file-mobile.png" alt="Back to Fashion" data-aos="fade-right" data-aos-delay="1250"></a>
            </nav>
            <div class="header-text full flex center-text relative absolute" data-aos="fade-right" data-aos-delay="1500">
                <h1 class="full fancy">Back</h1>
                <h3 class="full normal-text capatalise">to</h3>
                <h1 class="full fancy">routine</h1>
            </div>
        </header>
        <!-- Notebook part -->
        <section class="full center relative notebook-bg">
            <div class="half center wrap relative desktop-only">
                <div class="full center">
                    <img class = "third column-full-pad box absolute kava-img" src="<?php echo $native_path ?>assets/placeholders/kava.png" alt="kava" data-aos="fade-right" data-aos-delay="250"/>
                </div>
                <div class="full">
                    <img class = "left-margin thirty box shoo-bottom" src="<?php echo $native_path ?>assets/placeholders/makeup-1.png" alt="makeup" data-aos="fade-left" data-aos-delay="500"/>
                </div>
                <div class="full center">
                    <img class = "thirty box absolute yoga-img" src="<?php echo $native_path ?>assets/placeholders/yoga(2).png" alt="yoga mat and weight" data-aos="fade-right" data-aos-delay="750"/>
                </div>
            </div>
            <div class="half flex relative desktop-only">
                <img class = "btr-sticky" data-aos="fade-right" data-aos-delay="500" src="<?php echo $native_path ?>assets/placeholders/btr-sticky.png" alt="back to routine sticky note" />
            </div>
            <div class="full relative mobile-only">
                <img class = "half column-full-pad absolute kava-img" src="<?php echo $native_path ?>assets/placeholders/kava.png" alt="kava" data-aos="fade-right" data-aos-delay="500"/>
                <img class = "btr-sticky absolute" data-aos="fade-right" data-aos-delay="250" src="<?php echo $native_path ?>assets/placeholders/btr-sticky.png" alt="back to routine sticky note" />
            </div>
        </section>
        <!-- featured articles -->
        <section class="full center wrap relative blue-bg" id="moda">
        <div class="full center relative" data-aos="fade-down" data-aos-delay="250">
            <img src="<?php echo $native_path ?>assets/placeholders/old-window.webp" alt="old web window" class="column-full-pad shoo-top">
        </div>
            <div class="container flex relative">
                <a href="https://www.telegram.hr/super1/look/almada-label-modni-brend/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-right" data-aos-delay="500">
                    <img src="<?php echo $native_path ?>assets/placeholders/mali-rozi.png" alt="" class="full animate column-full-pad">
                    <div class="full center folder-text box">
                        <p class="full">Modni brend Najbolje investicije za jesensku (i zimsku) garderobu? Moderni klasici ovog brenda nalaze se visoko na toj listi</p>
                    </div>
                    <div class="full center folder-img">
                        <img class="full animate" src="https://images.telegram.hr/YJy0oMHN5CI7kDg366OyO34pjyfAcdOQrB-Kn5gvZu0/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvYWxtYWRhbC1sYWJlbC1jb3Zlci5qcGc.jpg" alt="Article thumbnail">
                    </div>
                </a>
                <a href="https://www.telegram.hr/super1/shopping-vodic/smeda-za-jesen-najbolji-odjevni-komadi-i-modni-dodaci/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                    <img src="<?php echo $native_path ?>assets/placeholders/mali-rozi.png" alt="" class="full animate column-full-pad">
                    <div class="half center folder-text box">
                        <p class="full">Shopping vodič Smeđa za jesen možda nije groundbreaking, ali izgleda toliko dobro! Izdvojili smo najbolje modele</p>
                    </div>
                    <div class="full center folder-img">
                        <img class="full animate" src="https://images.telegram.hr/JT7Kw9J1zWEH-gOgP5OrglVzIkBbs6KanfjYDqVr7G4/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvc21lZGEtYm9qYS1jb3Zlci5qcGc.jpg" alt="Article thumbnail">
                    </div>
                </a>
                <a href="https://www.telegram.hr/super1/look/back-to-office-look-outfit-ideje/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-right" data-aos-delay="500">
                    <img src="<?php echo $native_path ?>assets/placeholders/mali-rozi.png" alt="" class="full animate column-full-pad">
                    <div class="full center folder-text box">
                        <p class="full">Outfit inspo Back to office panika? Ovih 12 odjevnih kombinacija riješit će sve modne dileme</p>
                    </div>
                    <div class="full center folder-img">
                        <img class="full animate" src="https://images.telegram.hr/iVoaotv2U9Ai1UlefDlEnXDiI7YZaeGu1tj9uY3L5ic/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvYmFjay10by1vZmZpY2Utb3V0Zml0LWlkZWplLWNvdmVyLmpwZw.jpg" alt="Article thumbnail">
                    </div>
                </a>
                <a href="https://www.telegram.hr/super1/shopping-vodic/vagabond-ravne-cipele-za-jesen/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                    <img src="<?php echo $native_path ?>assets/placeholders/mali-rozi.png" alt="" class="full animate column-full-pad">
                    <div class="half center folder-text box">
                        <p class="full">Hot stuff Pronašli smo savršene ravne cipele za jesen koje obožavaju i modne trendseterice i zvijezde</p>
                    </div>
                    <div class="full center folder-img">
                        <img class="full animate" src="https://images.telegram.hr/YO6EPdfgvHdVIFuQDOkmSg1FBoW16ScfFKrFQGT5xC8/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvbGV5YWthaW4tdmFnYWJvbmQtcmF2bmUtY2lwZWxlLWNvdmVyLmpwZw.jpg" alt="Article thumbnail">
                    </div>
                </a>
                <a href="https://www.telegram.hr/super1/shopping-vodic/high-street-traperice-za-jesen-2025/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                    <img src="<?php echo $native_path ?>assets/placeholders/mali-rozi.png" alt="" class="full animate column-full-pad">
                    <div class="half center folder-text box">
                        <p class="full">Shopping vodič Što je zajedničko svim high street kolecijama za jesen? Super traperice! Izdvojili smo najbolje</p>
                    </div>
                    <div class="full center folder-img">
                        <img class="full animate" src="https://images.telegram.hr/9NZHt9qhtKP_-yJMDQRKq0jQBkqZ3o9G7LLUQxuH5MM/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvdHJhcGVyaWNlLWNvdmVyLTIuanBn.jpg" alt="Article thumbnail">
                    </div>
                </a>
                <a href="https://www.telegram.hr/super1/look/dani-michelle-top-5-komada-za-jesen/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                    <img src="<?php echo $native_path ?>assets/placeholders/mali-rozi.png" alt="" class="full animate column-full-pad">
                    <div class="half center folder-text box">
                        <p class="full">Fashion inspo Što ćemo nositi ove jeseni? Stilistica Kendall Jenner predlaže ovih 5 komada</p>
                    </div>
                    <div class="full center folder-img">
                        <img class="full animate" src="https://images.telegram.hr/ojoEOnm48dht-3Po-fUWwC_mVWZynVqVjtzqX1SPOGY/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgva2VuZGFsbGplbm5lci1uYXNsb3ZuYS5qcGc.jpg" alt="Article thumbnail">
                    </div>
                </a>
                <a href="https://www.telegram.hr/super1/shopping-vodic/kozne-torbe-high-street-jesen-2025/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                    <img src="<?php echo $native_path ?>assets/placeholders/mali-rozi.png" alt="" class="full animate column-full-pad">
                    <div class="half center folder-text box">
                        <p class="full">Shopping vodič Torbe su najbolji dio prvih jesenskih kolekcija, a ovi high street modeli to potvrđuju </p>
                    </div>
                    <div class="full center folder-img">
                        <img class="full animate" src="https://images.telegram.hr/jj6ji9rDHOfVnwf5OksXn8-DwLNuWdwrFOp9uIAQbMk/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvamVzc2ljYXNreWUta296bmEtdG9yYmEtY292ZXIucG5n.jpg" alt="Article thumbnail">
                    </div>
                </a>
                <div class="full flex relative">
                    <div class="full flex relative desktop-only negative-margin" data-aos="fade-down" data-aos-delay="250">
                        <img src= "<?php echo $native_path ?>assets/placeholders/pilates.png" alt="pilates bag" class="full animate desktop-only scale-down" data-aos="fade-in" data-aos-delay="500">
                        <img src= "<?php echo $native_path ?>assets/placeholders/stuff-desktop.png" alt="pilates bag" class="full animate absolute stuff-move" data-aos="fade-down" data-aos-delay="750">
                    </div>
                    <div class="full flex relative mobile-only negative-margin" data-aos="fade-down" data-aos-delay="200">
                        <img src= "<?php echo $native_path ?>assets/placeholders/pilates-mobile-hd.png" alt="pilates bag" class="full animate mobile-only" data-aos="fade-right" data-aos-delay="250">
                        <img src= "<?php echo $native_path ?>assets/placeholders/bag.png" alt="pilates bag" class="full animate absolute mobile-only bag-move" data-aos="fade-down" data-aos-delay="500">
                        <img src= "<?php echo $native_path ?>assets/placeholders/stuff-mobile.png" alt="pilates bag" class="full animate absolute mobile-only stuff-move" data-aos="fade-down" data-aos-delay="750">
                    </div>
                </div>
            </div>
        </section>
        <!-- Fashion -->
        <section class="full flex relative" id = "fashion">
            <img src="<?php echo $native_path ?>assets/placeholders/dugi-rozi.png" alt="" class="full animate absolute desktop-only folder-bg blue-bg">
            <img src="<?php echo $native_path ?>assets/placeholders/dugi-rozi-mobile.png" alt="" class="full animate absolute mobile-only blue-bg">
            <div class="container flex relative">
            <div class="full center relative" data-aos="fade-down" data-aos-delay="250">
                <img src="<?php echo $native_path ?>assets/placeholders/models-sticky.webp" alt="models" class="full animate desktop-only scale-down">
                <img src="<?php echo $native_path ?>assets/placeholders/sticky-model-mobile.webp" alt="models" class="full animate models-mobile mobile-only">
            </div>
            <div class="mobile-only full flex relative">
                <!-- <img src="<?php echo $native_path ?>assets/placeholders/blue-sticky-1.png" alt="models" class="full animate scale-down"> -->
                <!-- <img src="<?php echo $native_path ?>assets/placeholders/yellw-sticky.png" alt="models" class="full animate scale-down"> -->
            </div>
                <div class="full flex relative negative-margin pink-bg">
                    <!-- <a href="https://www.telegram.hr/super1/beauty/razdjeljak-na-stranu-valovi-bob-i-druge-trendi-frizure-koje-ce-obiljeziti-jesensku-sezonu/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-right" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-smedi.png" alt="" class="full animate column-full-pad">
                        <div class="full center folder-text box">
                            <p class="full">Hair inspo Razdjeljak na stranu, slojevi, nijanse plave i druge trendi frizure koje će obilježiti jesensku sezonu </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/8aBVrHB4YA4Lsgi2eNTKCXPCP2tpPhIT0zqpBfhnHVk/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvZGVtYXJ1c2hhYWEtdHJlbmRpLWZyaXp1cmUtemEtamVzZW4tMjAyNS1jb3Zlci5qcGc.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/super1/beauty/oribe-mirror-rinse-glass-hair-tretman-sjajna-kosa/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-smedi.png" alt="" class="full animate column-full-pad">
                        <div class="half center folder-text box">
                            <p class="full">Glass hair Kako vratiti sjaj kosi nakon ljeta? Ovaj proizvod obećava stakleno sjajnu kosu u samo nekoliko minuta </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/vKMGvGZpwpze5ccLw-AnAiZIoabrNtjycp5G79z2O5I/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvaGFpbGV5YmllYmVyLWdsYXNzLWhhaXItY292ZXIuanBn.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/super1/beauty/crni-nokti-ideje/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-right" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-smedi.png" alt="" class="full animate column-full-pad">
                        <div class="full center folder-text box">
                            <p class="full">Nail inspo Crni nokti su elegantni i odvažni klasik među manikurama. Evo kako ih nositi </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/ybwgcm6-MWiPJOzrFUKoKso0XpYeGH9tmFWMAzTzJSI/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvaXJhbXNoZWx0b24tY3JuaS1ub2t0aS1jb3Zlci5qcGc.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/super1/beauty/bob-frizure-tanka-rijetka-kosa/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-smedi.png" alt="" class="full animate column-full-pad">
                        <div class="half center folder-text box">
                            <p class="full">Hair inspo Najbolja frizure za tanku i rijetku kosu? Bob u četiri verzije koje stvaraju volumen </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/Bi2H87sP_g4WeFRwiCiHx8Xbs5upLVKZECOI16yqRjk/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvdmVyYXZhbmVycC1ib2ItZnJpenVyZS16YS10YW5rdS1pLXJpamV0a3Uta29zdS1uYXNsb3ZuYS5qcGc.jpg" alt="Article thumbnail">
                        </div>
                    </a> -->
                </div>
            </div>
        </section>
        <!-- Beauty -->
        <section class="full flex relative shoo-top yellow-bg" id = "beauty">
            <img src="<?php echo $native_path ?>assets/placeholders/dugi-zuti.png" alt="" class="full animate absolute desktop-only folder-bg pink-bg">
            <img src="<?php echo $native_path ?>assets/placeholders/dugi-zuti-mobile.png" alt="" class="pink-bg full animate absolute mobile-only">
            <div class="container flex relative">
                  <!-- First message - right aligned -->
                <div class="chat-bubble bubble-right shoo-top-chat" data-aos="fade-left" data-aos-delay="250">
                    <img src="<?php echo $native_path ?>assets/placeholders/text1.png" alt="" class="full animate">
                </div>
                <!-- Image message - left aligned -->
                <div class="chat-bubble bubble-left" data-aos="fade-right" data-aos-delay="500">
                    <img src="<?php echo $native_path ?>assets/placeholders/text2-flip.webp" alt="" class="thirty animate">
                </div>

                <!-- Response - left aligned -->
                <div class="chat-bubble bubble-left full"data-aos="fade-right" data-aos-delay="750">
                    <img src="<?php echo $native_path ?>assets/placeholders/text3.png" alt="" class="thirty animate">
                </div>
                <!-- Final message - right aligned -->
                <div class="chat-bubble bubble-right" data-aos="fade-left" data-aos-delay="1000">
                    <img src="<?php echo $native_path ?>assets/placeholders/text4.png" alt="" class="full animate">
                </div>
                <div class="full flex relative">
                <a href="https://www.telegram.hr/super1/beauty/razdjeljak-na-stranu-valovi-bob-i-druge-trendi-frizure-koje-ce-obiljeziti-jesensku-sezonu/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-right" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-plavi.png" alt="" class="full animate column-full-pad">
                        <div class="full center folder-text box">
                            <p class="full">Hair inspo Razdjeljak na stranu, slojevi, nijanse plave i druge trendi frizure koje će obilježiti jesensku sezonu </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/8aBVrHB4YA4Lsgi2eNTKCXPCP2tpPhIT0zqpBfhnHVk/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvZGVtYXJ1c2hhYWEtdHJlbmRpLWZyaXp1cmUtemEtamVzZW4tMjAyNS1jb3Zlci5qcGc.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/super1/beauty/oribe-mirror-rinse-glass-hair-tretman-sjajna-kosa/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-plavi.png" alt="" class="full animate column-full-pad">
                        <div class="half center folder-text box">
                            <p class="full">Glass hair Kako vratiti sjaj kosi nakon ljeta? Ovaj proizvod obećava stakleno sjajnu kosu u samo nekoliko minuta </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/vKMGvGZpwpze5ccLw-AnAiZIoabrNtjycp5G79z2O5I/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvaGFpbGV5YmllYmVyLWdsYXNzLWhhaXItY292ZXIuanBn.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/super1/beauty/crni-nokti-ideje/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-right" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-plavi.png" alt="" class="full animate column-full-pad">
                        <div class="full center folder-text box">
                            <p class="full">Nail inspo Crni nokti su elegantni i odvažni klasik među manikurama. Evo kako ih nositi </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/ybwgcm6-MWiPJOzrFUKoKso0XpYeGH9tmFWMAzTzJSI/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvaXJhbXNoZWx0b24tY3JuaS1ub2t0aS1jb3Zlci5qcGc.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/super1/beauty/bob-frizure-tanka-rijetka-kosa/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-plavi.png" alt="" class="full animate column-full-pad">
                        <div class="half center folder-text box">
                            <p class="full">Hair inspo Najbolja frizure za tanku i rijetku kosu? Bob u četiri verzije koje stvaraju volumen </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/Bi2H87sP_g4WeFRwiCiHx8Xbs5upLVKZECOI16yqRjk/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvdmVyYXZhbmVycC1ib2ItZnJpenVyZS16YS10YW5rdS1pLXJpamV0a3Uta29zdS1uYXNsb3ZuYS5qcGc.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/super1/shopping-vodic/najbolji-korektor-za-podocnjake/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-plavi.png" alt="" class="full animate column-full-pad">
                        <div class="half center folder-text box">
                            <p class="full">Tips&tricks Borite se s podočnjacima? Evo kako izabrati najbolji korektor za podočnjake prema svom tenu i tipu kože</p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/xbWDqO5QY8YCdwki41JNvdxqEOahT428vuGPYvKyIIU/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvc3ZpcmRvdnNrYXlhc2FzaGEtbmFqYm9samkta29yZWt0b3ItemEtcG9kb2NuamFrZS1jb3Zlci5qcGc.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- Lifestyle -->
        <section class="full flex relative shoo-top blue-bg" id = "lifestyle">
            <img src="<?php echo $native_path ?>assets/placeholders/dugi-plavi.png" alt="" class="full animate absolute desktop-only folder-bg yellow-bg">
            <img src="<?php echo $native_path ?>assets/placeholders/dugi-plavi-mobile.png" alt="" class="full animate absolute yellow-bg mobile-only">
            <div class="container flex relative">
            <div class="full center relative">
                <img src="<?php echo $native_path ?>assets/placeholders/life-cycle.png" alt="models" class="full animate scale-down shoo-top-bottom rotate-fade-in">
            </div>
                <div class="full flex relative negative-margin">
                    <a href="https://www.telegram.hr/super1/life/nove-serije-i-nove-sezone-rujan-2025/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-right" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-zuti.png" alt="zuti folder s clankom" class="full animate column-full-pad">
                        <div class="full center folder-text box">
                            <p class="full">Binge maraton Rujan će biti mjesec bingeanja jer stižu odlične nove serije i nove sezone hit naslova. Imamo popis </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/4w1QFRxVCO0U7-sf0GrqOntX2eAMzDiD_YsJQXEOlHo/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvdGhlLW1vcm5pbmctc2hvdy1uYXNsb3ZuYS5qcGc.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/super1/life/pinterest-trend-repost-jesen-2025/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-zuti.png" alt="zuti folder s clankom" class="full animate column-full-pad">
                        <div class="half center folder-text box">
                            <p class="full">Pinterest Trend Report Koji će trendovi obilježiti jesensku sezonu? Od mode do putovanja, Pinterest je objavio svoja predviđanja </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/FEO2GKgJf4rkfzJvfeddjB7jxKR2wYwaVzrAWzP159I/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvcGludGVyZXN0LXRyZW5kb3ZpLWplc2VuLTIwMjUtbmFzbG92bmEuanBn.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/super1/life/undo-projekt-marta-francekovic-antonija-bacic-intervju/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-right" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-zuti.png" alt="zuti folder s clankom" class="full animate column-full-pad">
                        <div class="full center folder-text box">
                            <p class="full">Super projekt Dizajnerica i psihologinja napravile su pomno osmišljenu knjižicu koja nam pomaže da ne doživimo burnout </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/YeXh0RHpsq5XmVkmUiO_OZGsMH-g_TAEe8XtMZCBqCs/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDkvZGl6YWpuLWJlei1uYXNsb3ZhLTE5LnBuZw.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/super1/life/5-knjiga-koje-citamo-nakon-godisnjih/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-zuti.png" alt="zuti folder s clankom" class="full animate column-full-pad">
                        <div class="half center folder-text box">
                            <p class="full">S1 prijedlozi Niste odustali od čitanja nakon godišnjih? Bravo, ovo je 6 novih naslova koje trebate imati na radaru </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/tLHauDvSXhq6iZTrI-jKgRBsJ8avV_2mFEFro64Xr0g/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvYm9va3MuanBn.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/super1/life/second-degree-dinner-druzenja/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-zuti.png" alt="zuti folder s clankom" class="full animate column-full-pad">
                        <div class="half center folder-text box">
                            <p class="full">Second Degree Dinner Što su Second Degree Dinners i zašto ih sve više ljudi prakticira </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/XJ2PaEIY-6B_YPsU2ZM9JkGPNqVK0qH7ZYM0BVGkDF0/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvbHVjeXdpbGxpYW1zMDItc2Vjb25kLWRlZ3JlZS1kaW5uZXItbmFzbG92bmEuanBn.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/super1/life/najljepsi-sukulenti-jednostavne-biljke-zeleni-dom/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-zuti.png" alt="zuti folder s clankom" class="full animate column-full-pad">
                        <div class="half center folder-text box">
                            <p class="full">Zeleni dom Tražimo najljepše sukulente: 5 biljaka koje će unijeti stil i mir u vaš prostor </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/Qd739otkySrrsC5SK0t4QqNiFFJ5KWISUED4h7FDyVg/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvbmFqbGplcHNpLXN1a3VsZW50aS5qcGc.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                </div>
                
            </div>
        </section>
        <!-- Design -->
        <section class="full flex relative shoo-top brown-bg" id = "design">
            <img src="<?php echo $native_path ?>assets/placeholders/dugi-smedi.png" alt="" class="full animate absolute desktop-only blue-bg folder-bg">
            <img src="<?php echo $native_path ?>assets/placeholders/dugi-smedi-mobile.png" alt="" class="full animate absolute mobile-only blue-bg">
            <div class="container flex relative">
            <div class="full flex-relative" data-aos="fade-down" data-aos-delay="250">
                <img src="<?php echo $native_path ?>assets/placeholders/chair-window.png" alt="models" class="full animate scale-down shoo-top-bottom">
            </div>
                <div class="full flex relative negative-margin">
                    <a href="https://www.telegram.hr/super1/design/povratak-rutini-nikad-nije-izgledao-bolje-pogledajte-veliki-jesenski-super1-editorijal/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-right" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-bijeli.png" alt="plavi folder s clankom" class="full animate column-full-pad">
                        <div class="full center folder-text box">
                            <p class="full">S1 editorijal Povratak rutini nikad nije izgledao bolje! Pogledajte veliki jesenski Super1 editorijal </p>
                        </div>
                        <div class="full center folder-img landscape">
                            <img class="full animate" src="https://www.telegram.hr/wp-content/uploads/2025/09/11.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/super1/design/back-to-school-uredenje-kucnog-ureda/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-bijeli.png" alt="plavi folder s clankom" class="full animate column-full-pad">
                        <div class="half center folder-text box">
                            <p class="full">Home inspo Nova sezona, novi ured! Kako dozvati back to school vibru u home office kroz samo 5 koraka? </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/47ru4hof2LcLiO-Idi8lhGVZNgXMI_4hqtwcx8iwPJI/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDkvaG9tZS1vZmZpY2UtaG9tZWhvbWVkZWNvcmhvbWVkZXNpZ25ob21lZGVjb3JhdGlvbmhvbWVzdHlsZWhvbWVzdHlsaW5nZGVzaWduZGVzaWduZXJkZS0xLWUxNzU2ODAwMTk1MjI0LmpwZw.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/super1/design/neuroestetsko-uredenje-interijera-sto-je-i-kako-urediti/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-right" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-bijeli.png" alt="plavi folder s clankom" class="full animate column-full-pad">
                        <div class="full center folder-text box">
                            <p class="full">Home inspo Što je neuroestetsko uređenje interijera i kako dizajn može utjecati na naš mozak i raspoloženje? </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/r6vdkOZKQzt26EEWwoTVZ2J0wrP0ZNeAOHoNhPnBv_A/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDkvZnVyLWlpY2Zsb3JhbHRvdWNoZXMtZ2lidHMtaGV1dGUtbnVyLWVpbi10aHJvd2JhY2stZGEtaWNoLWxlaWRlci1kZW4tZ2FuemVuLXRhZy11bnRlcndlZ3MtYmluLWUxNzU2OTA1Mjk0ODE1LmpwZw.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/super1/design/cloffice-uredenje-ideje/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-bijeli.png" alt="plavi folder s clankom" class="full animate column-full-pad">
                        <div class="half center folder-text box">
                            <p class="full">Home inspo Znamo kako u 7 koraka urediti savršen cloffice (closet + office) bez previše muke </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/Tctz4D0TGtvs-57dJMBE-shWVshiCDf1BAjOWFn6TWY/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvc25hcGlucy1haS0zMTQyNjI1MjIyNzQ5Mjg3ODg3LmpwZw.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/super1/design/nijanse-koje-cemo-vidati-u-interijeru-na-jesen/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-bijeli.png" alt="plavi folder s clankom" class="full animate column-full-pad">
                        <div class="half center folder-text box">
                            <p class="full">Home decor Uz mocha mousse koja je boja godine, ove nijanse će definitivno dominirati interijerima u novoj sezoni </p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/87boC3ozjvoSVxhRj9sTx6iAaWC61vpAkrgeu42BsQ0/preset:s1single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDgvc25hcGlucy1haS0zNjk3NTM3MjkwOTEyOTQ4MDcyLWUxNzU1NjAzODY1Njk0LmpwZw.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- Power -->
        <section class="full flex relative shoo-top"id = "power">
            <img src="<?php echo $native_path ?>assets/placeholders/dugi-bijeli.png" alt="" class="full animate absolute desktop-only folder-bg brown-bg">
            <img src="<?php echo $native_path ?>assets/placeholders/dugi-bijeli-mobile.png" alt="" class="full animate absolute mobile-only brown-bg">
            <div class="container flex relative">
            <div class="full flex relative" data-aos="fade-right" data-aos-delay="500">
                <img src="<?php echo $native_path ?>assets/placeholders/stickers.png" alt="sticky-notes" class="full animate scale-down shoo-top-bottom">
            </div>
                <div class="full flex relative negative-margin">
                    <!-- <a href="https://www.telegram.hr/vijesti/novi-detalji-pucnjave-kod-zadra-ustrijelio-vlasnika-salona-jer-se-naljutio-zbog-popravka-auta/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-right" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-rozi.png" alt="plavi folder s clankom" class="full animate column-full-pad">
                        <div class="full center folder-text box">
                            <p class="full">Novi detalji pucnjave kod Zadra: ustrijelio vlasnika salona jer se naljutio zbog popravka auta</p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/qn7gj-aeNpRkDxO0ZbWU68CW9tmt7_485cYuOMhnBmc/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDkvcHhsLTA0MDkyNS0xMzc4MjQ5NTIuanBn.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/politika-kriminal/eksplodirali-krediti-kucanstvima-zaduzenost-enormna-podaci-po-zupanijama-pokazuju-i-jos-jedan-zabrinjavajuci-trend/" target = "_blank" class="half flex relative flex-responsive" data-aos="fade-left" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-rozi.png" alt="plavi folder s clankom" class="full animate column-full-pad">
                        <div class="half center folder-text box">
                            <p class="full">Eksplodirali krediti kućanstvima: zaduženost enormna, podaci po županijama pokazuju i još jedan zabrinjavajući trend</p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/Jddz3Yl-_6-XM0F6V5Fg5SZVJjfSRfbX0P1Mb7gwLdg/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDMvdGctbmFzbG92bmEtMjAyNS0zLTExLTUuanBn.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/vijesti/novi-detalji-pucnjave-kod-zadra-ustrijelio-vlasnika-salona-jer-se-naljutio-zbog-popravka-auta/" target = "_blank" class="half flex relative flex-responsive white-bg" data-aos="fade-right" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-rozi.png" alt="plavi folder s clankom" class="full animate column-full-pad">
                        <div class="full center folder-text box">
                            <p class="full">Novi detalji pucnjave kod Zadra: ustrijelio vlasnika salona jer se naljutio zbog popravka auta</p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/qn7gj-aeNpRkDxO0ZbWU68CW9tmt7_485cYuOMhnBmc/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDkvcHhsLTA0MDkyNS0xMzc4MjQ5NTIuanBn.jpg" alt="Article thumbnail">
                        </div>
                    </a>
                    <a href="https://www.telegram.hr/politika-kriminal/eksplodirali-krediti-kucanstvima-zaduzenost-enormna-podaci-po-zupanijama-pokazuju-i-jos-jedan-zabrinjavajuci-trend/" target = "_blank" class="half flex relative flex-responsive white-bg" data-aos="fade-left" data-aos-delay="500">
                        <img src="<?php echo $native_path ?>assets/placeholders/mali-rozi.png" alt="plavi folder s clankom" class="full animate column-full-pad">
                        <div class="half center folder-text box">
                            <p class="full">Eksplodirali krediti kućanstvima: zaduženost enormna, podaci po županijama pokazuju i još jedan zabrinjavajući trend</p>
                        </div>
                        <div class="full center folder-img">
                            <img class="full animate" src="https://images.telegram.hr/Jddz3Yl-_6-XM0F6V5Fg5SZVJjfSRfbX0P1Mb7gwLdg/preset:single1/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjUvMDMvdGctbmFzbG92bmEtMjAyNS0zLTExLTUuanBn.jpg" alt="Article thumbnail">
                        </div>
                    </a> -->
                </div>
            </div>
        </section>
        <!-- Footer -->
        <footer class="full flex relative">
            <div class="container text-container flex relative column-full-pad">
                <div class="full center logo-line">
                    <img src="<?php echo $native_path ?>assets/logos/tg_studio_horizontal_color.png" alt="TG Studio logo" />
                </div>
                <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom i po najvišim uredničkim standardima Telegram Media Grupe.</p>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </div>
</body>

</html>