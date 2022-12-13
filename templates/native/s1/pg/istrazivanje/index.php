<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/pg/istrazivanje/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=1.1" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $native_path ?>jquery.serialize-object.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4878256e09.js" crossorigin="anonymous"></script>
</head>
<div class="main-container flex">
    <div class="container">
        <img src="<?php echo $native_path ?>img/pg_header_vizual.jpg" alt="P&G vizual proizvoda i veselih ljudi svih dobi">
        <div class="header-logos center full">
            <img src="<?php echo $native_path ?>img/super1_logo.svg" alt="Super1 Logo">
            <img src="<?php echo $native_path ?>img/pg_logo.png" alt="P&G Logo">
        </div>
        <h3 class="full center-text overtitle">Veliko istraživanje o navikama kupovanja</h3>
        <h1 class="full flex center-text"><span class="full superbold">Ispunite anketu </span><span class="full">i osvojite paket </span><span class="full superbold">P&G proizvoda</span></h1>
        <div class="full flex">
            <div class="full relative intro">
                <div class="line"></div>
                <div class="line"></div>Super1 i P&G provode veliko istraživanje o navikama kupovanja koje su se posljednjih mjeseci zbog novih životnih okolnosti kod mnogih uvelike promijenile. Uključite se u naš shopping kutak, napišite što mislite, kako kupujete, što vam je važno kod odabira proizvoda i prijedlog kako da kupnja bude što ugodnija. 10 čitatelja s najkreativnijim odgovorima darujemo s paketima P&G proizvoda koje treba svako kućanstvo.
            </div>
            <form id="test-form" class="full flex">
                <h2 class="full center-text question">Vi ste?</h2>
                <div class="full answer-row center wrap">
                    <div>
                        <input type="radio" id="zena" name="spol" value="zena">
                        <label for="zena" class="button-label animate center">
                            <div class="full flex">
                                <i class="fas fa-female"></i>
                                <div class="full center-text">Žena</div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="muskarac" name="spol" value="muskarac">
                        <label for="muskarac" class="button-label animate center">
                            <div class="full flex">
                                <i class="fas fa-male"></i>
                                <div class="full center-text">Muškarac</div>
                            </div>
                        </label>
                    </div>
                </div>
                <h2 class="full center-text question">Koliko imate godina?</h2>
                <div class="full answer-row center wrap">
                    <div>
                        <input type="radio" id="manje_od_20" name="godine" value="manje_od_20">
                        <label for="manje_od_20" class="button-label animate center">
                            <div class="full flex">
                                <img src="<?php echo $native_path ?>img/age_1.png" aria-hidden="true">
                                <div class="full center-text">Manje od 20</div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="21-30" name="godine" value="21-30">
                        <label for="21-30" class="button-label animate center">
                            <div class="full flex">
                                <img src="<?php echo $native_path ?>img/age_2.png" aria-hidden="true">
                                <div class="full center-text">21-30</div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="31-40" name="godine" value="godine">
                        <label for="31-40" class="button-label animate center">
                            <div class="full flex">
                                <img src="<?php echo $native_path ?>img/age_4.png" aria-hidden="true">
                                <div class="full center-text">31-40</div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="vise_od_40" name="godine" value="vise_od_40">
                        <label for="vise_od_40" class="button-label animate center">
                            <div class="full flex">
                                <img src="<?php echo $native_path ?>img/age_3.png" aria-hidden="true">
                                <div class="full center-text">Više od 40</div>
                            </div>
                        </label>
                    </div>
                </div>
                <h2 class="full center-text question">Iz koje ste regije?</h2>
                <div class="full answer-row center wrap geography">
                    <div>
                        <input type="radio" id="sredisnja" name="regija" value="sredisnja">
                        <label for="sredisnja" class="button-label animate center">
                            <div class="full flex">
                                <img src="<?php echo $native_path ?>img/geo_1.png" aria-hidden="true">
                                <div class="full center-text">Središnja Hrvatska</div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="istocna" name="regija" value="istocna">
                        <label for="istocna" class="button-label animate center">
                            <div class="full flex">
                                <img src="<?php echo $native_path ?>img/geo_2.png" aria-hidden="true">
                                <div class="full center-text">Istočna Hrvatska</div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="gorska" name="regija" value="gorska">
                        <label for="gorska" class="button-label animate center">
                            <div class="full flex">
                                <img src="<?php echo $native_path ?>img/geo_3.png" aria-hidden="true">
                                <div class="full center-text">Gorska Hrvatska</div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="sjeverno-primorje" name="regija" value="sjeverno-primorje">
                        <label for="sjeverno-primorje" class="button-label animate center">
                            <div class="full flex">
                                <img src="<?php echo $native_path ?>img/geo_4.png" aria-hidden="true">
                                <div class="full center-text">Sjeverno hrvatsko primorje</div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="juzno-primorje" name="regija" value="juzno-primorje">
                        <label for="juzno-primorje" class="button-label animate center">
                            <div class="full flex">
                                <img src="<?php echo $native_path ?>img/geo_5.png" aria-hidden="true">
                                <div class="full center-text">Južno hrvatsko primorje</div>
                            </div>
                        </label>
                    </div>
                </div>
                <h2 class="full center-text question">Je li korona kriza promijenila tvoje navike kupovanja?</h2>
                <div class="full answer-row center wrap">
                    <div>
                        <input type="radio" id="promjena_navika_da" name="promjena_navika" value="promjena_navika_da">
                        <label for="promjena_navika_da" class="button-label animate center">
                            <div class="full flex">
                                <div class="full center-text">DA</div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="promjena_navika_ne" name="promjena_navika" value="promjena_navika_da">
                        <label for="promjena_navika_ne" class="button-label animate center">
                            <div class="full flex">
                                <div class="full center-text">NE</div>
                            </div>
                        </label>
                    </div>
                </div>
                <h2 class="full center-text question">Kupujte li posljednjih mjeseci više online?</h2>
                <div class="full answer-row center wrap">
                    <div>
                        <input type="radio" id="vise_online_da" name="vise_online" value="vise_online_da">
                        <label for="vise_online_da" class="button-label animate center">
                            <div class="full flex">
                                <div class="full center-text">DA</div>
                            </div>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="vise_online_ne" name="vise_online" value="vise_online_da">
                        <label for="vise_online_ne" class="button-label animate center">
                            <div class="full flex">
                                <div class="full center-text">NE</div>
                            </div>
                        </label>
                    </div>
                </div>
                <h2 class="full center-text question">Kod fizičke kupnje, kakav tip dućana preferiraš?</h2>
                <div class="full answer-row center wrap">
                    <div class="full center">
                        <input type="radio" id="u_kvartu" name="preferiran_ducan" value="u_kvartu">
                        <label for="u_kvartu" class="extended extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">Dućan u kvartu</div>
                            </div>
                        </label>
                    </div>
                    <div class="full center">
                        <input type="radio" id="supermarket" name="preferiran_ducan" value="supermarket">
                        <label for="supermarket" class="extended extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">Najbliži supermarket</div>
                            </div>
                        </label>
                    </div>
                    <div class="full center">
                        <input type="radio" id="trgovacki_centar" name="preferiran_ducan" value="trgovacki_centar">
                        <label for="trgovacki_centar" class="extended extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">Veliki trgovački centar</div>
                            </div>
                        </label>
                    </div>
                </div>
                <h2 class="full center-text question">Gdje najčešće kupuješ deterdžente za pranje suđa Jar, deterdžent za pranje rublja Ariel, omekšivač Lenor, pelene Pampers, britvice Gillette, uloške Always?</h2>
                <div class="full answer-row center wrap">
                    <div class="full center">
                        <input type="radio" id="u_kvartu_pg" name="gdje_kupuju_pg" value="u_kvartu_pg">
                        <label for="u_kvartu_pg" class="extended extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">U dućanu u kvartu</div>
                            </div>
                        </label>
                    </div>
                    <div class="full center">
                        <input type="radio" id="supermarket_pg" name="gdje_kupuju_pg" value="supermarket_pg">
                        <label for="supermarket_pg" class="extended extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">U najbližem supermarketu</div>
                            </div>
                        </label>
                    </div>
                    <div class="full center">
                        <input type="radio" id="dm_bipa_muller" name="gdje_kupuju_pg" value="dm_bipa_muller">
                        <label for="dm_bipa_muller" class="extended extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">U dm-u Bipi, Mulleru</div>
                            </div>
                        </label>
                    </div>
                    <div class="full center">
                        <input type="radio" id="trgovacki_centar_pg" name="gdje_kupuju_pg" value="trgovacki_centar_pg">
                        <label for="trgovacki_centar_pg" class="extended extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">U velikom trgovačkom centru</div>
                            </div>
                        </label>
                    </div>
                </div>
                <h2 class="full center-text question">Jesu li ti kod odabira dućana u kojem nabavljate kućne potrepštine važne akcije i popusti koji se nude?</h2>
                <div class="full answer-row center wrap">
                    <div class="full center">
                        <input type="radio" id="bitni_popusti_da" name="bitni_popusti" value="bitni_popusti_da">
                        <label for="bitni_popusti_da" class="extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">DA</div>
                            </div>
                        </label>
                    </div>
                    <div class="full center">
                        <input type="radio" id="bitni_popusti_ne" name="bitni_popusti" value="bitni_popusti_ne">
                        <label for="bitni_popusti_ne" class="extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">NE</div>
                            </div>
                        </label>
                    </div>
                    <div class="full center">
                        <input type="radio" id="bitni_popusti_ovisi" name="bitni_popusti" value="bitni_popusti_ovisi">
                        <label for="bitni_popusti_ovisi" class="extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">Ovisno o tome što trebam kupiti</div>
                            </div>
                        </label>
                    </div>
                </div>
                <h2 class="full center-text question">Biraš li radije trgovačke marke ili isključivo poznate i provjerene brendove?</h2>
                <div class="full answer-row center wrap">
                    <div class="full center">
                        <input type="radio" id="poznate_marke" name="marke_ili_ne" value="poznate_marke">
                        <label for="poznate_marke" class="extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">Poznate brendove</div>
                            </div>
                        </label>
                    </div>
                    <div class="full center">
                        <input type="radio" id="trgovacke_marke" name="marke_ili_ne" value="trgovacke_marke">
                        <label for="trgovacke_marke" class="extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">Trgovačke marke</div>
                            </div>
                        </label>
                    </div>
                    <div class="full center">
                        <input type="radio" id="poznate_i_privatne" name="marke_ili_ne" value="poznate_i_privatne">
                        <label for="poznate_i_privatne" class="extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">Kupujem i trgovačke marke i poznate brandove</div>
                            </div>
                        </label>
                    </div>
                </div>
                <h2 class="full center-text question">Što bi ti olakšalo kupnju potrepština za dom?</h2>
                <div class="full answer-row center wrap">
                    <div class="full center">
                        <input type="radio" id="popusti_olaksaju" name="olaksa_kupnju_potrepstina" value="popusti_olaksaju">
                        <label for="popusti_olaksaju" class="extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">Popusti</div>
                            </div>
                        </label>
                    </div>
                    <div class="full center">
                        <input type="radio" id="beskontakno_olaksa" name="olaksa_kupnju_potrepstina" value="beskontakno_olaksa">
                        <label for="beskontakno_olaksa" class="extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">Beskontaktno plaćanje</div>
                            </div>
                        </label>
                    </div>
                    <div class="full center">
                        <input type="radio" id="akcija_olaksa" name="olaksa_kupnju_potrepstina" value="akcija_olaksa">
                        <label for="akcija_olaksa" class="extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">Akcijska ponuda</div>
                            </div>
                        </label>
                    </div>
                </div>
                <h2 class="full center-text question">Što ti je najvažnije kod odabira mjesta za kupnju?</h2>
                <div class="full answer-row center wrap">
                    <div class="full center">
                        <input type="radio" id="najbitnija_sigurnost" name="najbitnije_za_kupnju" value="najbitnija_sigurnost">
                        <label for="najbitnija_sigurnost" class="extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">Sigurnost i higijenske Covid-19 mjere</div>
                            </div>
                        </label>
                    </div>
                    <div class="full center">
                        <input type="radio" id="najbitnije_sve_skupa" name="najbitnije_za_kupnju" value="najbitnije_sve_skupa">
                        <label for="najbitnije_sve_skupa" class="extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">Da sve mogu pronaći na jednom mjestu </div>
                            </div>
                        </label>
                    </div>
                    <div class="full center">
                        <input type="radio" id="najbitnije_cijene" name="najbitnije_za_kupnju" value="najbitnije_cijene">
                        <label for="najbitnije_cijene" class="extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">Najpovoljnije cijene </div>
                            </div>
                        </label>
                    </div>
                    <div class="full center">
                        <input type="radio" id="najbitniji_brendovi" name="najbitnije_za_kupnju" value="najbitniji_brendovi">
                        <label for="najbitniji_brendovi" class="extended-question animate center">
                            <div class="full flex">
                                <div class="full center-text">Da trgovina ima moje omiljene brendove</div>
                            </div>
                        </label>
                    </div>
                </div>
                <h2 class="full center-text question"><b>Pitanje za kreativni natječaj:</b> <br>Napiši nam zašto pri kupnji biraš P&G proizvode i zašto su Ariel, Gillette, Jar, Lenor, Pampers, Always brendovi kojima vjerujete godinama.</h2>
                <div class="full answer-row center">
                    <input type="text-area" id="prijedlog" name="prijedlog">
                </div>
                <h2 class="full center-text question">I za kraj, tvoj email</h2>
                <div class="full answer-row center">
                    <input type="email" id="email" name="email">
                </div>
                <div class="full relative intro shoo-top">
                    <div class="line"></div>
                    <div class="line"></div>Hvala vam na sudjelovanju u ovom istraživanju i nagradnom natječaju. <br><br>10 najkreativnijih odgovora nagrađujemo paketom P&G proizvoda za kućanstvo. Dobitnike objavljujemo po 11.11.2020. Nagrade šalje tvrtka MPG d.o.o.
                </div>
                <div class="full answer-row smaller-row center">
                    <input type="checkbox" id="consent" name="consent" value="1" required><label class="consent-label" for="consent">Prihvaćam <a target="_blank" href="https://super1.telegram.hr/pravila-privatnosti/">pravila privatnosti Super1</a> i <a target="_blank" href="https://super1.telegram.hr/snaga/opci-uvjeti-nagradnog-natjecaja/">pravila kreativnog natječaja</a></label>
                </div>
                <div class="full answer-row center">
                    <button id="submit-form" type="submit">Pošalji odgovore</button>
                    <div id="submitted">Odgovori uspiješno spremljeni. Hvala!</div>
                </div>
            </form>
        </div>
        <section class="full flex native-signature">
            <div class="full center">
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom P&G i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </section>
    </div>
</div>
<style>
    body {
        background-size: cover;
        background-attachment: fixed;
        background-image: url('<?php echo $native_path ?>img/arena_bts_bg_desktop.jpg');
    }

    @media screen and (max-width: 1023px) {
        body {
            background-image: url('<?php echo $native_path ?>img/arena_bts_bg_mobile.jpg');
        }
    }
</style>
<script>
    var $form = jQuery('form#test-form'),
        url = 'https://script.google.com/macros/s/AKfycbxs84ptvkHH5cP3gZuvf7pFG83mGGBmncDjlcBlR65MnXd7eA5S/exec'

    jQuery('#submit-form').on('click', function(e) {
        e.preventDefault();
        var jqxhr = jQuery.ajax({
            url: url,
            method: "GET",
            dataType: "json",
            data: $form.serializeObject()
        }).done(
            function(){
                $('#submit-form').hide();
                $('#submitted').show();
            }
        );
    })
</script>

<?php wp_footer(); ?>
</body>

</html>