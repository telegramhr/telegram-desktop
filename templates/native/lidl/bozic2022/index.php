<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path=get_stylesheet_directory_uri() . '/templates/native/lidl/bozic2022/';
$native_path='https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/lidl/bozic2022/';
//$native_path='http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/lidl/bozic2022/';
//$native_path='http://localhost/telegram-desktop/templates/native/lidl/bozic2022/';
//$native_path='http://localhost/lidl_bozic2022/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $native_path ?>img/aos.css?ver=1.00" type="text/css" />
    <script src="<?php echo $native_path ?>img/aos.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>font/rawline.css?ver=1.10" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=1.00" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=1.24" type="text/css" />
    <script src="<?php echo $native_path ?>functions.js?ver=1.11"></script>
</head>
<body>
    <div class="main-container flex relative">
        <header class="full center relative sky">
            <img src="<?php echo $native_path ?>img/tg_header_lidlbozic_desktop.jpg" class="img-bg desktop-only">
            <img src="<?php echo $native_path ?>img/tg_header_lidlbozic_mobile.jpg" class="img-bg mobile-only">
            <div class="container center relative center-text horizontal-pad flex-responsive">
                <h1 class="full" data-aos="fade-up">Božićni vodič: <br>Ovako to rade mame</h1>
                <p class="full text-container" data-aos="fade-up" data-aos-delay="1000">Donosimo emotivne priče, blagdanske dogodovštine i korisne savjete tri poznate mame i pet čitateljica koje su nas pustile u svoje domove i s nama podijelile svoje planove za Božić.</p>
            </div>
            <div class="brought-by-sticker center">
                <div class="full center-text">Sadržaj omogućava LIDL</div>
                <div class="full center"><img src="<?php echo $native_path ?>img/lidl.svg" aria-hidden="true" class="lidl-logo"></div>
            </div>
        </header>
        <!--Timer section-->
        <section class="full flex relative red-bg holiday-plants">
            <img src="<?php echo $native_path ?>img/tg_visual_holiday_plants_rotated.svg" class="img-fluid desktop-only">
            <img src="<?php echo $native_path ?>img/tg_visual_holiday_plants.svg" class="img-fluid mobile-only">
            <div class="container center relative vertical-pad">
                <div class="half flex-responsive flex relative horizontal-pad">
                    <div class="full flex relative">
                        <h1 class="full timer-text white-text center-text" data-aos="fade-right" data-aos-delay="1000">Odbrojavamo do Božića:</h1>
                    </div>
                </div>
                <div class="half flex-responsive flex relative horizontal-pad"  data-aos="fade-left" data-aos-delay="1000">
                    <div class="full countdown-element center relative">
                        <div class="countdown-day-block center ">
                            <div class="countdown-tiles flex">
                                <div class="countdown-tile" id="cd-day-1">0</div>
                                <div class="countdown-tile" id="cd-day-2">0</div>
                            </div>
                                <div class=" full countdown-subtitle center-text">Dana
                            </div>
                        </div>
                        <div class="countdown-day-divider flex">:</div>
                        <div class="countdown-day-block center ">
                            <div class="countdown-tiles flex">
                                <div class="countdown-tile" id="cd-hour-1">0</div>
                                <div class="countdown-tile" id="cd-hour-2">0</div>
                            </div>
                                <div class="full countdown-subtitle center-text">Sati
                            </div>
                        </div>
                        <div class="countdown-day-divider center">:</div>
                        <div class="countdown-day-block center ">
                            <div class="countdown-tiles flex">
                                <div class="countdown-tile" id="cd-min-1">0</div>
                                <div class="countdown-tile" id="cd-min-2">0</div>
                            </div>
                                <div class=" full countdown-subtitle center-text">Minuta
                            </div>
                        </div>
                        <div class="countdown-day-divider center">:</div>
                        <div class="countdown-day-block center ">
                            <div class="countdown-tiles flex">
                                <div class="countdown-tile" id="cd-sec-1">0</div>
                                <div class="countdown-tile" id="cd-sec-2">0</div>
                            </div>
                                <div class=" full countdown-subtitle center-text">Sekundi
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo $native_path ?>img/tg_visual_holiday_plants.svg" class="img-fluid mobile-only upside-down">
            <img src="<?php echo $native_path ?>img/tg_visual_holiday_plants_rotated.svg" class="img-fluid desktop-only upside-down">
        </section>
        <!--MAMA Section-->
        <?php /*
        <div class="container flex relative">
        <h1 class="full center-text">Priče i savjeti naših mama</h1>
            <div class="full center relative circle-img">
                <img src="<?php echo $native_path ?>img/person-img-1.png" aria-hidden="true" class="img-fluid">
            </div>
        </div>
        <section class="full flex relative bg-img wide-article-image"></section>
        */ ?>

        <!--Video Section-->
        <?php /*
        <section class="full flex relative">
            <div class="container center relative center-text horizontal-pad">
                <h2 class="full bold">NASLOV</h2>
                <p class="full text-container">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac sollicitudin quam, id mattis odio. Cras mattis lacus lectus, vel condimentum velit fringilla nec. Vestibulum tempor eros sit amet neque efficitur, eu congue massa lobortis. Fusce sollicitudin sollicitudin tempor. Nulla at diam ut elit fringilla efficitur sit amet eu massa. </p>
                <img src="<?php echo $native_path ?>img/grey_placeholder.png" aria-hidden="true" class="horizontal-pad pad-bot margin-top">
            </div>
        </section>

        <!--Stories-->
        <?php /*<section class="full flex relative">
            <a class="container flex relative stretch" href="https://www.telegram.hr/preview/1340516" target="_blank">
                <div class="half flex-responsive center relative mobile-order-1 desktop-order-1" data-aos="fade-right" data-aos-delay="1000">
                    <div class="full flex relative pad-me story-img">
                        <img src="https://images.telegram.hr/sUn29l2DryclqaZCSZVfWeS-hSJL5MsNS205j2oNRUI/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTEvd2hhdHNhcHAtaW1hZ2UtMjAyMi0xMS0wNC1hdC0xNTUyMDUuanBlZw.webp" aria-hidden="true" class="horizontal-pad" >
                    </div>
                </div>
                <div class="half flex-responsive center relative desktop-order-2 mobile-order-2" data-aos="fade-left" data-aos-delay="1000">
                    <div class="full relative flex horizontal-pad">
                        <img src="<?php echo $native_path ?>img/tg_visual_holiday_topdeco.svg" class="topdeco">
                        <h2 class="full bold">Dječjoj mašti nema kraja, pitali smo klince što žele za Božić. Neki odgovori su urnebesni, evo što kažu</h2>
                        <p class="full">
                        Ni manje ni više, poželjeli su dron, aparat za šećernu vunu i električni romobil.
                        </p>
                        <div class="full flex relative">
                            <div class="cta italic" href="">Pročitaj više...</div>
                        </div>
                    </div>
                </div>
            </a>
        </section>
        */ ?>
        <section class="full flex relative">
            <a class="container flex relative stretch" href="https://www.telegram.hr/partneri/mame-otkrile-kako-izbjeci-stresnu-kupnju-bozicnih-darova-pripazite-klinci-su-mudriji-nego-sto-mislimo/" target="_blank">
                <div class="half flex-responsive center relative mobile-order-1 desktop-order-2" data-aos="fade-right" data-aos-delay="1000">
                    <div class="full flex relative story-img">
                        <img src="https://images.telegram.hr/DTLFb9LCRf8Lff10Uu1sHae7rYgt2FZEtCXLOMgVjOw/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjIvMTEvd2hhdHNhcHAtaW1hZ2UtMjAyMi0xMS0wNy1hdC0wODU3MDUuanBlZw.webp" aria-hidden="true" class="horizontal-pad">
                    </div>
                </div>
                <div class="half flex-responsive center relative desktop-order-1 mobile-order-2" data-aos="fade-left" data-aos-delay="1000">
                    <div class="full relative flex horizontal-pad">
                        <img src="<?php echo $native_path ?>img/tg_visual_holiday_topdeco.svg" class="topdeco">
                        <h2 class="full bold">Mame otkrile kako izbjeći stresnu kupnju božićnih darova. 'Pripazite, klinci su mudriji nego što mislimo'</h2>
                        <p class="full">
                        Napravite popis dječjih želja i vaših ideja, pratite kataloge te odredite budžet kojim raspolažete
                        </p>
                        <div class="full flex relative">
                            <div class="cta italic" href="">Pročitaj više...</div>
                        </div>
                    </div>
                </div>
            </a>
        </section>
        <!--Form section-->
        <section class="full flex relative green-bg form-section">
            <img src="<?php echo $native_path ?>img/tg_visual_holiday_leaves.svg" class="holiday-leaves">
            <div class="container center relative horizontal-pad">
                <div class="full center relative text-container">
                    <p class="full center-text white-text">
                        Lidl te nagrađuje
                    </p>
                    <h1 class="full center-text white-text">Podijeli svoju priču s nama i osvoji Lidl poklon bon:</h1>
                </div>
                <form method="post" action="<?php echo admin_url('admin-post.php') ?>" id="applications" class="full flex relative text-container" enctype="multipart/form-data">
                    <label class="full form-text white-text">Tvoje ime:</label>
                    <input type="text" class="full" id="ime" name="ime">
                    <label class="full form-text white-text">Tvoj e-mail:</label>
                    <input type="email" class="full" id="e-mail" name="email">
                    <label class="full form-text white-text">Tvoj broj:</label>
                    <input type="text" class="full" id="broj" name="broj">
                    <label class="full form-text white-text textarea-label">Opiši nam svoj najdraži božićni poklon iz djetinjstva. Fotografiraj ga, nacrtaj ili predstavi na sasvim treći način i opiši u par rečenica zašto ti je toliko poseban:</label>
                    <textarea type="text" class="full" id="poruka" name="poruka"></textarea>
                    <input type="file" accept="image/*" name="slika">
                  <input type="hidden" name="campaign" value="lidl">
                  <input type="hidden" name="action" value="image_submit">
                  <div class="full flex white-text">
                    <input type="checkbox" required="" id="uvjeti" name="uvjeti">
                    <label class="clickable" for="uvjeti">Prihvaćam <a href="https://www.telegram.hr/partneri/pravila-nagradnog-natjecaja-lidl/" target="_blank">pravila nagradnog natječaja.</a></label>
                </div>
                    <div class="full center">
                        <button type="submit" id="submit-application" disabled class="insite-btn">Pošalji prijavu</button>
                    </div>
                </form>
            </div>
        </section>


    <!--Footer-->
      <footer class="full flex relative gray-bg">
          <div class="container flex relative">
          <p class="full vertical-pad center-text bold horizontal-pad">Blagdansku ponudu igračaka i slastica za bogati blagdanski stol potražite u Lidlu!</p>
              <div class="full flex-responsive relative flex">
                  <div class="full flex relative horizontal-pad center">
                        <img src="<?php echo $native_path ?>img/lidl.svg" aria-hidden="true" class="footer-logo">
                        <img src="<?php echo $native_path ?>img/tg_studio.png" aria-hidden="true" class="footer-logo">
                  </div>
              </div>
              <div class="full flex-responsive relative flex">
                  <div class="full center relative horizontal-pad">
                      <p class="full footer-text center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Lidl i po najvišim uredničkim standardima Telegram Media Grupe.</p>
                  </div>
              </div>
          </div>
      </footer>
    </div>
    <?php wp_footer(); ?>
</body>

</html>
