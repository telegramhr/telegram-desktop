<!DOCTYPE html>
<html lang="hr">

<?php
//$native_path = get_stylesheet_directory_uri() . '/templates/native/jackdaniels/lucky7/';
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/jackdaniels/lucky7/';
//$native_path = 'http://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/jackdaniels/lucky7/';
//$native_path = 'http://localhost/telegram-desktop/templates/native/jackdaniels/lucky7/';

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;700&family=Noto+Sans+JP:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>img/aos.css?ver=1.00" type="text/css" />
    <script src="<?php echo $native_path ?>img/aos.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css?ver=1.00" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=1.12" type="text/css" />
    <script src="<?php echo $native_path ?>jquery.serialize-object.min.js"></script>
</head>

<body>
    <div class="main-container flex relative">
        <nav class="full topnav flex relative">
            <div class="container full flex">
                <div class="center full relative textlogo center-text">
                    <div></div>Lucky no.7<div></div>
                </div>
            </div>
        </nav>
        <!-- Articles -->
        <section class="full flex relative margin-top">
            <a class="full center relative" href="https://telesport.telegram.hr/partneri/ana-je-osvojila-koznu-nogometnu-loptu-na-nasoj-pitalici-poklonit-cu-je-sinu-bit-ce-izvan-sebe/" target="_blank">
                <div class="full center relative flex-responsive">
                    <img class="full" src="https://telesport.telegram.hr/wp-content/uploads/sites/2/2022/12/sasa1343xw-1600x899.jpg" aria-hidden="true" class="horizontal-pad pad-bot margin-top">
                </div>
                <div class="container full center relative">
                    <div class="full flex relative center center-text horizontal-pad flex-responsive">
                        <h2 class="full">Ana je osvojila kožnu nogometnu loptu na našoj pitalici: ‘Poklonit ću je sinu, bit će izvan sebe’ </h2>
                    </div>
                    <div class="full center relative">
                        <div class="button-48"><span class="text">Pročitaj više...</span></div>
                    </div>
                </div>
            </a>
        </section>
        <section class="full flex relative margin-top">
            <a class="full center relative" href="https://telesport.telegram.hr/partneri/jedinstvena-lopta-s-radom-poznatog-umjetnika-osvojite-je-u-nasem-kvizu/" target="_blank">
                <div class="full center relative flex-responsive">
                    <img class="full" src="https://telesport.telegram.hr/wp-content/uploads/sites/2/2022/12/telesportslika-final.jpg" aria-hidden="true" class="horizontal-pad pad-bot margin-top">
                </div>
                <div class="container full center relative">
                    <div class="full flex relative center center-text horizontal-pad flex-responsive">
                        <h2 class="full">Jedinstvena lopta s radom poznatog umjetnika. Osvojite je u našem kvizu</h2>
                    </div>
                    <div class="full center relative">
                        <div class="button-48"><span class="text">Pročitaj više...</span></div>
                    </div>
                </div>
            </a>
        </section>
        <!-- Form -->
        <section class="full flex relative margin-top quiz-form">
            <div class="full center relative flex-responsive">
                <img class="full" src="<?php echo $native_path ?>/img/ts_naslovna_lopta.jpg?ver=2.0" aria-hidden="true">
            </div>
            <div class="container mobile-side-pad text-container full center relative">
                <div class="full flex relative center center-text horizontal-pad flex-responsive">
                    <h2 class="full">Lucky no.7 kviz </h2>
                </div>
                <p class="full article-description">Budi prvi koji će na sva pitanja točno odgovoriti i osvoji Lucky No. 7 kožnu nogometnu loptu s jedinstvenom tetovažom tattoo umjetnika Korova Leša inspiriranom Svjetskim prvenstvom u Katru!</p>
                <p class="full article-description">Pravila natječaja provjeri <a href="https://telesport.telegram.hr/partneri/pravila-nagradnog-natjecaja-lucky-no-7/" target="_blank">ovdje.</a> Krenimo!</p>
                <details class="full flex relative">
                    <summary class="full center relative">
                        <div class="button-48"><span class="text">Pokaži kviz</span></div>
                    </summary>
                    <form id="applications" class="full flex">
                        <label class="full">1. David Beckham dobio je crveni karton u osmini finala Svjetskog prvenstva 1998. u Francuskoj na utakmici protiv: </label>
                        <div class="full flex">
                            <input type="radio" id="kolumbije" value="kolumbije" name="pitanje1"><label for="kolumbije" class="full">Kolumbije</label>
                        </div>
                        <div class="full flex">
                            <input type="radio" id="argentine" value="argentine" name="pitanje1"><label for="argentine" class="full">Argentine</label>
                        </div>
                        <div class="full flex">
                            <input type="radio" id="rumunjske" value="rumunjske" name="pitanje1"><label for="rumunjske" class="full">Rumunjske</label>
                        </div>

                        <label class="full">2.	Ivan Rakitić došao je u hrvatsku reprezentaciju nakon razgovora s tadašnjim izbornikom:</label>
                        <div class="full flex">
                            <input type="radio" id="zlatkom-kranjcarom" value="zlatkom-kranjcarom" name="pitanje2"><label for="zlatkom-kranjcarom" class="full">Zlatkom Kranjčarom</label>
                        </div>
                        <div class="full flex">
                            <input type="radio" id="miroslavom-blazevicem" value="miroslavom-blazevicem" name="pitanje2"><label for="miroslavom-blazevicem" class="full">Miroslavom Blaževićem </label>
                        </div>
                        <div class="full flex">
                            <input type="radio" id="slavenom-bilicem" value="slavenom-bilicem" name="pitanje2"><label for="slavenom-bilicem" class="full">Slavenom Bilićem</label>
                        </div>

                        <label class="full">3.	Manuel Francisco dos Santos Mané Garrincha rođen je s:</label>
                        <div class="full flex">
                            <input type="radio" id="kracom-lijevom-nogom" value="kracom-lijevom-nogom" name="pitanje3"><label for="kracom-lijevom-nogom" class="full">lijevom nogom šest centimetara kraćom i svinutom prema van</label>
                        </div>
                        <div class="full flex">
                            <input type="radio" id="bez-palca" value="bez-palca" name="pitanje3"><label for="bez-palca" class="full">bez palca na desnoj ruci</label>
                        </div>
                        <div class="full flex">
                            <input type="radio" id="deformiranom-kraljeznicom" value="deformiranom-kraljeznicom" name="pitanje3"><label for="deformiranom-kraljeznicom" class="full">deformiranom kralježnicom i oslabljenim vidom</label>
                        </div>

                        <label class="full">4.	Kylian Mbappé Lottin završio je školovanje u čuvenoj nogometnoj akademiji Clairefontaine, a nakon toga je potpisao prvi ugovor s:</label>
                        <div class="full flex">
                            <input type="radio" id="real-madridom" value="real-madridom" name="pitanje4"><label for="real-madridom" class="full">Real Madridom</label>
                        </div>
                        <div class="full flex">
                            <input type="radio" id="chelseajem" value="chelseajem" name="pitanje4"><label for="chelseajem" class="full">Chelseajem</label>
                        </div>
                        <div class="full flex">
                            <input type="radio" id="as-monacom" value="as-monacom" name="pitanje4"><label for="as-monacom" class="full">AS Monacom</label>
                        </div>

                        <label class="full">5.	Luis Figo izazvao je veliki bijes kod navijača Barcelone nakon što je napustio klub i potpisao ugovor s: </label>
                        <div class="full flex">
                            <input type="radio" id="interom" value="interom" name="pitanje5"><label for="interom" class="full">Interom</label>
                        </div>
                        <div class="full flex">
                            <input type="radio" id="real-madridom2" value="real-madridom2" name="pitanje5"><label for="real-madridom2" class="full">Real Madridom</label>
                        </div>
                        <div class="full flex">
                            <input type="radio" id="manchester-unitedom" value="manchester-unitedom" name="pitanje5"><label for="manchester-unitedom" class="full">Manchester Unitedom</label>
                        </div>

                        <label class="full">6.	U svojih 49 nastupa za hrvatsku reprezentaciju, Milan Rapaić zabio je: </label>
                        <div class="full flex">
                            <input type="radio" id="sest-golova" value="sest-golova" name="pitanje6"><label for="sest-golova" class="full">6 golova</label>
                        </div>
                        <div class="full flex">
                            <input type="radio" id="jedanaest-golova" value="jedanaest-golova" name="pitanje6"><label for="jedanaest-golova" class="full">11 golova</label>
                        </div>
                        <div class="full flex">
                            <input type="radio" id="deset-golova" value="deset-golova" name="pitanje6"><label for="deset-golova" class="full">10 golova</label>
                        </div>

                        <label class="full">7.	Cristiano Ronaldo osvojio je Zlatnu loptu:</label>
                        <div class="full flex">
                            <input type="radio" id="tri-puta" value="tri-puta" name="pitanje7"><label for="tri-puta" class="full">tri puta</label>
                        </div>
                        <div class="full flex">
                            <input type="radio" id="cetiri-puta" value="cetiri-puta" name="pitanje7"><label for="cetiri-puta" class="full">četiri puta</label>
                        </div>
                        <div class="full flex">
                            <input type="radio" id="pet-puta" value="pet-puta" name="pitanje7"><label for="pet-puta" class="full">pet puta</label>
                        </div>
                        <label class="full">Ime i prezime:</label>
                        <input type="text" class="full" id="ime" value="" name="ime">
                        <label class="full">Mjesto stanovanja:</label>
                        <input type="text" class="full" id="mjesto" value="" name="mjesto">
                        <label class="full">Kontakt telefon:</label>
                        <input type="text" class="full" id="telefon" value="" name="telefon">
                        <label class="full">Dob:</label>
                        <input type="text" class="full" id="dob" value="" name="dob">
                        <div class="full flex margin-top">
                            <input type="checkbox" required id="pravila-privatnosti" value="" name="pravila-privatnosti">
                            <label class="clickable ruleslabel" for="pravila-privatnosti">Prihvaćam <a href="https://www.telegram.hr/stranica/pravila-privatnosti/" target="_blank">pravila privatnosti Telegrama.</a></label>
                        </div>
                        <div class="full flex">
                            <div class="button-48" id="submit-application"><span class="text">Pošalji prijavu</span></div>
                        </div>
                        <div class="full flex">
                            <p id="error-msg" class="bold hide">Morate prihvatiti pravila privatnosti!</p>
                        </div>
                        <div class="full flex hide" id="loading-indicator">
                            <div class="lds-facebook">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="full flex">
                            <p id="response-msg" class="bold hide">Vaša prijava je spremljena. Hvala na sudjelovanju!</p>
                        </div>
                    </form>
                </details>
            </div>
        </section>
        <!-- Articles -->
        <section class="full flex relative margin-top">
            <a class="full center relative" href="https://telesport.telegram.hr/partneri/mbappe-vitez/" target="_blank">
                <div class="full center relative flex-responsive">
                    <img class="full" src="https://telesport.telegram.hr/wp-content/uploads/sites/2/2022/11/jack-daniels-mbappe-sedmica-uvodna-fin.jpg" aria-hidden="true" class="horizontal-pad pad-bot margin-top">
                </div>
                <div class="container full center relative">
                    <div class="full flex relative center center-text horizontal-pad flex-responsive">
                        <h2 class="full">Mbappé: Vitez</h2>
                    </div>
                    <div class="full center relative">
                        <div class="button-48"><span class="text">Pročitaj više...</span></div>
                    </div>
                </div>
            </a>
        </section>
        <section class="full flex relative margin-top">
            <a class="full center relative" href="https://telesport.telegram.hr/partneri/garrincha-andeo/" target="_blank">
                <div class="full center relative flex-responsive">
                    <img class="full" src="https://telesport.telegram.hr/wp-content/uploads/sites/2/2022/11/jack-daniels-garicnha-uvodna.jpg" aria-hidden="true" class="horizontal-pad pad-bot margin-top">
                </div>
                <div class="container full center relative">
                    <div class="full flex relative center center-text horizontal-pad flex-responsive">
                        <h2 class="full">Garrincha: Anđeo</h2>
                    </div>
                    <div class="full center relative">
                        <div class="button-48"><span class="text">Pročitaj više...</span></div>
                    </div>
                </div>
            </a>
        </section>
        <section class="full flex relative margin-top">
            <a class="full center relative" href="https://telesport.telegram.hr/partneri/rakitic-klasa-iz-sjene/" target="_blank">
                <div class="full center relative flex-responsive">
                    <img class="full" src="https://telesport.telegram.hr/wp-content/uploads/sites/2/2022/11/jack-daniels-rakitic-uvodna.jpg" aria-hidden="true" class="horizontal-pad pad-bot margin-top">
                </div>
                <div class="container full center relative">
                    <div class="full flex relative center center-text horizontal-pad flex-responsive">
                        <h2 class="full margin-bot">Rakitić: Klasa iz sjene</h2>
                    </div>
                    <div class="full center relative">
                        <div class="button-48"><span class="text">Pročitaj više...</span></div>
                    </div>
                </div>
            </a>
        </section>
        <section class="full flex relative margin-top">
            <a class="full center relative" href="https://telesport.telegram.hr/partneri/beckham-galactico/" target="_blank">
                <div class="full center relative flex-responsive">
                    <img class="full" src="https://telesport.telegram.hr/wp-content/uploads/sites/2/2022/11/jack-daniels-beckham-uvodna.jpg" aria-hidden="true" class="horizontal-pad pad-bot margin-top">
                </div>
                <div class="container full center relative">
                    <div class="full flex relative center center-text horizontal-pad flex-responsive">
                        <h2 class="full">Beckham: Galáctico</h2>
                    </div>
                    <div class="full center relative">
                        <div class="button-48"><span class="text">Pročitaj više...</span></div>
                    </div>
                </div>
            </a>
        </section>
        <section class="full flex relative margin-top">
            <a class="full center relative" href="https://telesport.telegram.hr/partneri/ronaldo-7-kao-brand/" target="_blank">
                <div class="full center relative flex-responsive">
                    <img class="full" src="https://telesport.telegram.hr/wp-content/uploads/sites/2/2022/12/jack-daniels-ronaldo-uvodna.jpg" aria-hidden="true" class="horizontal-pad pad-bot margin-top">
                </div>
                <div class="container full center relative">
                    <div class="full flex relative center center-text horizontal-pad flex-responsive">
                        <h2 class="full">Ronaldo: 7 kao brand</h2>
                    </div>
                    <div class="full center relative">
                        <div class="button-48"><span class="text">Pročitaj više...</span></div>
                    </div>
                </div>
            </a>
        </section>
        <section class="full flex relative margin-top">
            <a class="full center relative" href="https://telesport.telegram.hr/partneri/figo-imao-je-sve/" target="_blank">
                <div class="full center relative flex-responsive">
                    <img class="full" src="https://telesport.telegram.hr/wp-content/uploads/sites/2/2022/12/jack-daniels-figo-uvodna.jpg" aria-hidden="true" class="horizontal-pad pad-bot margin-top">
                </div>
                <div class="container full center relative">
                    <div class="full flex relative center center-text horizontal-pad flex-responsive">
                        <h2 class="full">Figo: Imao je sve</h2>
                    </div>
                    <div class="full center relative">
                        <div class="button-48"><span class="text">Pročitaj više...</span></div>
                    </div>
                </div>
            </a>
        </section>
        <section class="full flex relative margin-top">
            <a class="full center relative" href="https://telesport.telegram.hr/partneri/rapaic-mangup/" target="_blank">
                <div class="full center relative flex-responsive">
                    <img class="full" src="https://telesport.telegram.hr/wp-content/uploads/sites/2/2022/12/jack-daniels-rapaic-7-uvodna.jpg" aria-hidden="true" class="horizontal-pad pad-bot margin-top">
                </div>
                <div class="container full center relative">
                    <div class="full flex relative center center-text horizontal-pad flex-responsive">
                        <h2 class="full">Rapaić: Mangup</h2>
                    </div>
                    <div class="full center relative">
                        <div class="button-48"><span class="text">Pročitaj više...</span></div>
                    </div>
                </div>
            </a>
        </section>
        <!--Footer-->
        <footer class="full flex relative">
            <div class="container flex relative">
                <div class="full flex-responsive relative flex">
                    <div class="full flex relative horizontal-pad center">
                        <img src="<?php echo $native_path ?>img/logo_MIC.png" aria-hidden="true" class="footer-logo">
                        <img src="<?php echo $native_path ?>img/tg_studio.png" aria-hidden="true" class="footer-logo">
                    </div>
                </div>
                <div class="full flex-responsive relative flex">
                    <div class="full center relative horizontal-pad">
                        <p class="full footer-text center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Jack Daniels i po najvišim uredničkim standardima Telegram Media Grupe.</p>
                    </div>
                </div>
            </div>
        </footer>
        <script>
            var $form = jQuery('form#applications'),
                url = 'https://script.google.com/macros/s/AKfycbwoQFQnqBw55Hxj1VDzRKDkVPIfYb2QL8pclaGBrhqk00dveG6lZ0Vn_3ii1ZnA0Ty3/exec'

            jQuery('#submit-application').on('click', function(e) {
                e.preventDefault();
                if(document.getElementById('pravila-privatnosti').checked) {
                    $('#submit-application').hide();
                    $('#error-msg').hide();
                    $('#loading-indicator').removeClass('hide');
                    var jqxhr = jQuery.ajax({
                        url: url,
                        method: "GET",
                        dataType: "json",
                        data: $form.serializeObject()
                    }).done(
                        function(){
                            $('#loading-indicator').hide();
                            $('#response-msg').removeClass('hide');
                            fbq('track', 'SubmitApplication');
                        }
                    );
                }
                else {
                    $('#error-msg').removeClass('hide');
                }
            })
        </script>
    </div>
    <?php wp_footer();
    ?>
</body>

</html>
