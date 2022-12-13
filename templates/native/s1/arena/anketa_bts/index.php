<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/arena/anketa_bts/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=1.1" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $native_path ?>jquery.serialize-object.min.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/omn3ltq.css">
    <script src="https://kit.fontawesome.com/4878256e09.js" crossorigin="anonymous"></script>
</head>
<div class="main-container flex">
    <a href="https://super1.telegram.hr/" class="header-logos center full">
        <img src="<?php echo $native_path ?>img/super1_logo.svg" alt="Super1 Logo">
        <img src="<?php echo $native_path ?>img/arena_centar.svg" alt="Super1 Logo">
    </a>
    <h1 class="full center-text">Veliko istraživanje <br>o novoj školskoj godini</h1>
    <h2 class="full center-text">Ispuni <i>back to school</i> anketu i osvoji poklon karticu Arena Centra od 1000 kuna</h2>
    <img class="main-visual" src="<?php echo $native_path ?>img/arena_bts_vizual.png" alt="Arena Centar Back to School vizual">
    <div class="container flex">
        <div class="full relative intro"><div class="line"></div><div class="line"></div>Super1 i Arena Centar provode veliko istraživanje o pripremama i očekivanjima u novoj školskoj godini koja će po svemu biti vrlo izazovna i za djecu i za roditelje. Uključite se u naš <i>roditeljski sastanak,</i> napišite što mislite, čega se pribojavate, što bi se moglo bolje organizirati, otkrijte nam kako se pripremate i gledate na nova školska pravila.</div>
        <form id="test-form" class="full flex">
            <h2 class="full center-text question">Ti si?</h2>
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
            <h2 class="full center-text question">Koliko imaš godina?</h2>
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
            <h2 class="full center-text question">Iz koje si regije?</h2>
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
            <h2 class="full center-text question">Koliko školaraca imate?</h2>
            <div class="full answer-row center wrap">
                <div>
                    <input type="radio" id="jednog" name="broj_skolaraca" value="jednog">
                    <label for="jednog" class="button-label animate center">
                        <div class="full flex">
                            <div class="full center-text">Jednog</div>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="radio" id="dva" name="broj_skolaraca" value="dva">
                    <label for="dva" class="button-label animate center">
                        <div class="full flex">
                            <div class="full center-text">Dva</div>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="radio" id="vise_od_dva" name="broj_skolaraca" value="vise_od_dva">
                    <label for="vise_od_dva" class="button-label animate center">
                        <div class="full flex">
                            <div class="full center-text">Više od dva</div>
                        </div>
                    </label>
                </div>
            </div>
            <h2 class="full center-text question">Koje su dobi vaši školarci?</h2>
            <div class="full answer-row center wrap">
                <div class="full center">
                    <input type="radio" id="niza_osnovna" name="dob" value="niza_osnovna">
                    <label for="niza_osnovna" class="extended extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Niši razredi osnovne škole</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="visa_osnovna" name="dob" value="visa_osnovna">
                    <label for="visa_osnovna" class="extended extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Viši razredi osnovne škole</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="obje_osnovne" name="dob" value="obje_osnovne">
                    <label for="obje_osnovne" class="extended extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Niži i viši razredi osnovne škole</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="osnovna_i_srednja" name="dob" value="osnovna_i_srednja">
                    <label for="osnovna_i_srednja" class="extended extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Osnovnoškolci i srednjoškolci</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="srednja" name="dob" value="srednja">
                    <label for="srednja" class="extended extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Srednja škola</div>
                        </div>
                    </label>
                </div>
            </div>
            <h2 class="full center-text question">Koliko planirate (ili ste već potrošili) za nabavu odjeće i školske opreme po školarcu?</h2>
            <div class="full answer-row center wrap">
                <div class="full center">
                    <input type="radio" id="do_1000" name="budzet" value="do_1000">
                    <label for="do_1000" class="extended extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Do 1000 kuna</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="1000-2000" name="budzet" value="1000-2000">
                    <label for="1000-2000" class="extended extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Od 1000 do 2000 kuna</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="2000-3000" name="budzet" value="2000-3000">
                    <label for="2000-3000" class="extended extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Od 2000 do 3000 kuna</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="preko_3000" name="budzet" value="preko_3000">
                    <label for="preko_3000" class="extended extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Više od 3000 kuna</div>
                        </div>
                    </label>
                </div>
            </div>
            <h2 class="full center-text question">Jeste li morali kupovati školske knjige?</h2>
            <div class="full answer-row center wrap">
                <div>
                    <input type="radio" id="da" name="knjige" value="da">
                    <label for="da" class="button-label animate center">
                        <div class="full flex">
                            <div class="full center-text">Da</div>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="radio" id="ne" name="knjige" value="ne">
                    <label for="ne" class="button-label animate center">
                        <div class="full flex">
                            <div class="full center-text">Ne</div>
                        </div>
                    </label>
                </div>
            </div>
            <h2 class="full center-text question">Kako ove godine obavljate back to school shopping?</h2>
            <div class="full answer-row center wrap">
                <div class="full center">
                    <input type="radio" id="trgovacki_centar" name="kupnja" value="trgovacki_centar">
                    <label for="trgovacki_centar" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">U velikom trgovačkom centru</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="online" name="kupnja" value="online">
                    <label for="online" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Online</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="trgovine" name="kupnja" value="trgovine">
                    <label for="trgovine" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Pojedinačne trgovine širom grada</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="outlet" name="kupnja" value="outlet">
                    <label for="outlet" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Outlet centri</div>
                        </div>
                    </label>
                </div>
            </div>
            <h2 class="full center-text question">Koliko vremena obično provedete u trgovačkom centru  kada obavljate kupnju?</h2>
            <div class="full answer-row center wrap">
                <div>
                    <input type="radio" id="sat" name="duljina_shoppinga" value="sat">
                    <label for="sat" class="button-label animate center">
                        <div class="full flex">
                            <div class="full center-text">Sat vremena</div>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="radio" id="dva_sata" name="duljina_shoppinga" value="dva_sata">
                    <label for="dva_sata" class="button-label animate center">
                        <div class="full flex">
                            <div class="full center-text">Dva sata</div>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="radio" id="tri_sata" name="duljina_shoppinga" value="tri_sata">
                    <label for="tri_sata" class="button-label animate center">
                        <div class="full flex">
                            <div class="full center-text">Tri sata</div>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="radio" id="vise_od_tri_sata" name="duljina_shoppinga" value="vise_od_tri_sata">
                    <label for="vise_od_tri_sata" class="button-label animate center">
                        <div class="full flex">
                            <div class="full center-text">Više od tri sata</div>
                        </div>
                    </label>
                </div>
            </div>
            <h2 class="full center-text question">Što bi vam olakšalo ovogodišnju back to school shopping?</h2>
            <div class="full answer-row center wrap">
                <div>
                    <input type="radio" id="popusti" name="zelja" value="popusti">
                    <label for="popusti" class="button-label animate center">
                        <div class="full flex">
                            <div class="full center-text">Popusti</div>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="radio" id="beskontaktno" name="zelja" value="beskontaktno">
                    <label for="beskontaktno" class="button-label animate center">
                        <div class="full flex">
                            <div class="full center-text">Beskontaktno plaćanje</div>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="radio" id="blizina" name="zelja" value="blizina">
                    <label for="blizina" class="button-label animate center">
                        <div class="full flex">
                            <div class="full center-text">Blizina shopping mjesta</div>
                        </div>
                    </label>
                </div>
                <div>
                    <input type="radio" id="ponuda" name="zelja" value="ponuda">
                    <label for="ponuda" class="button-label animate center">
                        <div class="full flex">
                            <div class="full center-text">Širina ponude, da je sve na jednom mjestu</div>
                        </div>
                    </label>
                </div>
            </div>
            <h2 class="full center-text question">Što vam je najvažnije kod odabira mjesta za kupnju?</h2>
            <div class="full answer-row center wrap">
                <div class="full center">
                    <input type="radio" id="covid_sigurnost" name="najvaznije" value="covid_sigurnost">
                    <label for="covid_sigurnost" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Sigurnost i higijenske mjere vezano uz COVID-19/koronavirus</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="sve_na_jednom" name="najvaznije" value="sve_na_jednom">
                    <label for="sve_na_jednom" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Da sve možete pronaći na jednom mjestu</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="cijene" name="najvaznije" value="cijene">
                    <label for="cijene" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Najpovoljnije cijene</div>
                        </div>
                    </label>
                </div>
            </div>
            <h2 class="full center-text question">Što mislite da bi mogao biti najveći problem ove školske godine?</h2>
            <div class="full answer-row center wrap">
                <div class="full center">
                    <input type="radio" id="higijena" name="problem" value="higijena">
                    <label for="higijena" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Nova pravila oko higijene</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="online_nastava" name="problem" value="online_nastava">
                    <label for="online_nastava" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Online nastava</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="zaraza" name="problem" value="zaraza">
                    <label for="zaraza" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Mogućnost zaraze</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="distanca" name="problem" value="distanca">
                    <label for="distanca" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Socijalna distanca</div>
                        </div>
                    </label>
                </div>
            </div>
            <h2 class="full center-text question">Što je, po vama, najvažnije da školarac može uspješno svladavati gradivo ove školske godine?</h2>
            <div class="full answer-row center wrap">
                <div class="full center">
                    <input type="radio" id="laptop" name="kljuc_uspjeha" value="laptop">
                    <label for="laptop" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Laptop</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="mobitel" name="kljuc_uspjeha" value="mobitel">
                    <label for="mobitel" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Mobitel</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="online_materijali" name="kljuc_uspjeha" value="online_materijali">
                    <label for="online_materijali" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Online pristup gradivu i školskim materijalima</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="fleksibilnost_ucitelja" name="kljuc_uspjeha" value="fleksibilnost_ucitelja">
                    <label for="fleksibilnost_ucitelja" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Fleksibilnost učitelja</div>
                        </div>
                    </label>
                </div>
            </div>
            <h2 class="full center-text question">Kakva su vaša iskustva s prošlom školskom godinom u svladavanju gradiva?</h2>
            <div class="full answer-row center wrap">
                <div class="full center">
                    <input type="radio" id="dijete_preoptereceno" name="iskustvo" value="dijete_preoptereceno">
                    <label for="dijete_preoptereceno" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Dijete nam je bilo preopterećeno i teško je svladavalo gradivo.</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="roditelj_preopterecen" name="iskustvo" value="roditelj_preopterecen">
                    <label for="roditelj_preopterecen" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Bili smo preopterećni i morali smo s djetetom puno više učiti nego prije.</div>
                        </div>
                    </label>
                </div>
                <div class="full center">
                    <input type="radio" id="uspijeh" name="iskustvo" value="uspjeh">
                    <label for="uspijeh" class="extended-question animate center">
                        <div class="full flex">
                            <div class="full center-text">Uspijevali smo bez problema odraditi sve školske zahtjeve </div>
                        </div>
                    </label>
                </div>
            </div>
            <h2 class="full center-text question"><b>Pitanje za kreativni natječaj:</b> <br>Napišite nam svoj prijedlog kako unaprijediti i olakšati jesensku kupnju za cijelu obitelj u trgovačkom centru</h2>
            <div class="full answer-row center">
                <input type="text-area" id="prijedlog" name="prijedlog">
            </div>
            <h2 class="full center-text question">I za kraj, vaš email</h2>
            <div class="full answer-row center">
                <input type="email" id="email" name="email">
            </div>
            <div class="full relative intro shoo-top"><div class="line"></div><div class="line"></div>Napomena: tri najkreativnija i najkonkretnija prijedloga nagrađujemo s poklon karticom Arena Centra po 1000 kuna. <br>U anketu se možete uključiti do 30. rujna. Dobitnike objavljujemo na portalu Super1 početkom listopada.</div>
                <div class="full answer-row center">
                <input type="checkbox" id="consent" name="consent" value="1" required><label class="consent-label" for="consent">Prihvaćam <a target="_blank" href="https://super1.telegram.hr/pravila-privatnosti/">pravila privatnosti Super1</a> i <a target="_blank" href="https://super1.telegram.hr/snaga/opci-uvjeti-nagradnog-natjecaja/">pravila kreativnog natječaja</a> i razumijem da će podaci u ovoj anketi biti podijeljeni s Arena Centrom</label>
            </div>
            <div class="full answer-row center">
                <button id="submit-form" type="submit">Pošalji odgovore</button>
                <div id="submitted" class="hide">Odgovori uspiješno spremljeni. Hvala!</div>
            </div>
        </form>
        <div class="full relative intro"><div class="line"></div><div class="line"></div>Rezultate istraživanja detaljno donosimo <a href="https://super1.telegram.hr/native/50-hrvata-kaze-kako-je-za-kupnju-najvaznije-da-se-sve-moze-pronaci-na-jednom-mjestu/" target="_blank">OVDJE.</a><br>
        Nagrade iz kreativnog natječaja osvojile su<br>
        1. Maja Ravlić <br>
        2. Tanja Vidaković <br>
        3. Klara Kapetanić <br>
        <b>Čestitamo!</b>
</div>
    </div>
    <section class="full native-signature">
        <div class="container flex">
            <div class="full center">
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Arena Centar i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </section>
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
        url = 'https://script.google.com/macros/s/AKfycbyYt3xD1slcjd8gfFJ5_2rjzi2rPj_vpDHDRDQsFKRQbvljIhgf/exec'

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