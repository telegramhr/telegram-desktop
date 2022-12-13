<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/always/testiranje/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $native_path ?>jquery.serialize-object.min.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/jnp1xuk.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=2.0" type="text/css" />
</head>
<div class="main-container flex">
    <div class="native-hero full flex relative center">
        <div class="container native-title flex">
            <div class="full center"><img src="<?php echo $native_path ?>img/always.png" alt="Always Logo"></div>
            <h3 class="full center-text overtitle">Super1 kreativni natječaj</h3>
            <h1 class="full center-text">Izazivamo vas da osjetite mekoću</h1>
            <h2 class="full center-text">Testiraj Always Sensitive i osvoji super poklon</h2>
        </div>
        <div class="arrow-indicator center"><div></div></div>
        <video preload="auto" autoplay="" muted="" loop="" playsinline src="<?php echo $native_path ?>img/always_bg.mp4" type="video/mp4"></video>
    </div>
    <div class="container flex content">
        <div class="full relative flex">
            <img class="cloud cloud-1" src="<?php echo $native_path ?>img/cloud.png" alt="Cloud">
            <img class="cloud cloud-2" src="<?php echo $native_path ?>img/cloud.png" alt="Cloud">
            <video class="gific" preload="auto" autoplay="" muted="" loop="" playsinline src="<?php echo $native_path ?>img/Super1_Always.mp4?ver=1.1" type="video/mp4"></video>
        </div>
        <p class="intro">Mekoća i udobnost uvijek su nam važni, posebice onih dana u mjesecu kada samo tako osjetljive… Da bi tada, ali i kroz sve izazove u životu, bile snažne, hrabre, da bi mogle slijediti svoje snove i biti ono što jesmo, važna nam je sigurnost i podrška. Kao vodeći proizvođač higijenskih uložaka,  Always prepoznaje potrebe žena i uz njih je kada  žele ostvariti svoje snove i biti ono što žele. Always potiče samopouzdanje žena te je baš stoga kreirao Always Sensitive higijenske uloške, zaštitu na koju se možete u potpunosti osloniti. Mekoća, udobnost, površina mekana poput pamuka,  mekana i fleksibilna krilca za udobnost i kada ste u pokretu samo su dio onoga što pruža Always Sensitive. Izazivamo vas da osjetite mekoću.</p>
        <h2 class="full">Kako sudjelovati u kreativnom natječaju Izazivamo vas da osjetite mekoću Always Sensitivea?</h2>
        <p>Sve što trebate napraviti je ispuniti prijavu za testiranje kako bi na vašu adresu stigao Always Sensitive paket uložaka na testiranje.</p>
        <p>Potom nam nakon testiranja napišite svoje mišljenje, a svaki tjedan do 30. studenog jednu čitateljicu s najkreativnijim odgovorima po izboru žirija - redakcije Super1 – nagrađujemo Always Sensitive softbox s mnogo super stvari koje će život učiniti ljepšim jer znamo što je bitno kad imaš mjesečnicu.</p>
        <p>Ako si već isprobala Always Sensitive možeš nam svakako ostaviti komentar i ispričati svoje iskustvo i tako sudjelovati u natječaju te osvojiti softbox čak ovaj tjedan.</p>
        <form id="always-apply" class="full flex">
            <h2 class="full">Prijave za testiranje Always Sensitivea</h2>
            <label for="ime" class="full">Vaše ime i prezime</label>
            <input type="text" id="ime" name="ime">
            <label for="email" class="full">Vaš email</label>
            <input type="email" id="email" name="email">
            <label for="adresa" class="full">Vaša adresa</label>
            <input type="text" id="adresa" name="adresa">
            <div class="full flex consent-parent">
                <input type="checkbox" id="consent" name="consent" value="1" required><label class="consent-label" for="consent">Prihvaćam <a target="_blank" href="https://super1.telegram.hr/pravila-privatnosti/">pravila privatnosti Super1</a> i <a target="_blank" href="https://super1.telegram.hr/snaga/opci-uvjeti-nagradnog-natjecaja/">pravila kreativnog natječaja</a></label>
            </div>
            <div class="full center">
                <button id="submit-form-apply" class="submit-btn" type="submit">Pošalji prijavu</button>
                <div id="submitted-apply" class="hide">Prijava uspiješno spremljena. Hvala!</div>
            </div>
        </form>
        <div class="full flex notice first-notice">
        <p>Radi puno prijava, već smo podijelili sve Always Sensitive uloške za ovaj tjedan. Ali, iskušaj svoju sreću već sljedeći tjedan, jer dijelimo ih sve do kraja studenog! :)</p>
        <p>Ako si već isprobala mekoću Always Sensitive uložaka možeš nam ostaviti svoje mišljenje niže i upasti u bubuanj za osvojiti softbox čak i ovaj tjedan. Sretno! :)</p>
        </div>
        <form id="always-review" class="full flex">
            <h2 class="full">Pitanja za testiranje</h2>
            <div class="full question">Jesi li Always Sensitive koristila otprije ili si ga sada isprobala prvi put?</div>
            <div class="full flex">
                <input type="radio" id="da-iskustvo" name="prethodno_iskustvo" value="da-iskustvo">
                <label for="da-iskustvo" class="animate small-label center">Koristila sam ga prije</label>
            </div>
            <div class="full flex">
                <input type="radio" id="ne-iskustvo" name="prethodno_iskustvo" value="ne-iskustvo">
                <label for="ne-iskustvo" class="animate small-label  center">Sada sam ga koristila prvi put</label>
            </div>
            <div class="full question">Ako si ga koristila otprije, kako si odabrala Always?</div>
            <div class="full flex">
                <input type="radio" id="preporuka" name="prethodno_saznanje" value="preporuka">
                <label for="preporuka" class="animate small-label center">Po preporuci</label>
            </div>
            <div class="full flex">
                <input type="radio" id="reklama" name="prethodno_saznanje" value="reklama">
                <label for="reklama" class="animate small-label center">Iz reklame</label>
            </div>
            <div class="full flex">
                <input type="radio" id="radno_mjesto" name="prethodno_saznanje" value="radno_mjesto">
                <label for="radno_mjesto" class="animate small-label center">Na radnom mjestu</label>
            </div>
            <div class="full flex">
                <input type="radio" id="skola" name="prethodno_saznanje" value="skola">
                <label for="skola" class="animate small-label center">Školi</label>
            </div>
            <div class="full question">Ocijeni Always Sensitive mekoću</div>
            <div class="full flex one-to-five">
                <div class="fifth flex">
                    <input type="radio" id="mekoca-1" name="ocjena_mekoce" value="mekoca-1">
                    <label for="mekoca-1" class="animate small-label center">1</label>
                </div>
                <div class="fifth flex">
                    <input type="radio" id="mekoca-2" name="ocjena_mekoce" value="mekoca-2">
                    <label for="mekoca-2" class="animate small-label center">2</label>
                </div>
                <div class="fifth flex">
                    <input type="radio" id="mekoca-3" name="ocjena_mekoce" value="mekoca-3">
                    <label for="mekoca-3" class="animate small-label center">3</label>
                </div>
                <div class="fifth flex">
                    <input type="radio" id="mekoca-4" name="ocjena_mekoce" value="mekoca-4">
                    <label for="mekoca-4" class="animate small-label center">4</label>
                </div>
                <div class="fifth flex">
                    <input type="radio" id="mekoca-5" name="ocjena_mekoce" value="mekoca-5">
                    <label for="mekoca-5" class="animate small-label center">5</label>
                </div>
            </div>
            <div class="full question">Ocijeni Always Sensitive udobnost</div>
            <div class="full flex one-to-five">
                <div class="fifth flex">
                    <input type="radio" id="udobnost-1" name="ocjena_udobnosti" value="udobnost-1">
                    <label for="udobnost-1" class="animate small-label center">1</label>
                </div>
                <div class="fifth flex">
                    <input type="radio" id="udobnost-2" name="ocjena_udobnosti" value="udobnost-2">
                    <label for="udobnost-2" class="animate small-label center">2</label>
                </div>
                <div class="fifth flex">
                    <input type="radio" id="udobnost-3" name="ocjena_udobnosti" value="udobnost-3">
                    <label for="udobnost-3" class="animate small-label center">3</label>
                </div>
                <div class="fifth flex">
                    <input type="radio" id="udobnost-4" name="ocjena_udobnosti" value="udobnost-4">
                    <label for="udobnost-4" class="animate small-label center">4</label>
                </div>
                <div class="fifth flex">
                    <input type="radio" id="udobnost-5" name="ocjena_udobnosti" value="udobnost-5">
                    <label for="udobnost-5" class="animate small-label center">5</label>
                </div>
            </div>
            <div class="full question">Ocijeni Always Sensitive fleksibilnost</div>
            <div class="full flex one-to-five">
                <div class="fifth flex">
                    <input type="radio" id="fleksibilnost-1" name="ocjena_fleksibilnosti" value="fleksibilnost-1">
                    <label for="fleksibilnost-1" class="animate small-label center">1</label>
                </div>
                <div class="fifth flex">
                    <input type="radio" id="fleksibilnost-2" name="ocjena_fleksibilnosti" value="fleksibilnost-2">
                    <label for="fleksibilnost-2" class="animate small-label center">2</label>
                </div>
                <div class="fifth flex">
                    <input type="radio" id="fleksibilnost-3" name="ocjena_fleksibilnosti" value="fleksibilnost-3">
                    <label for="fleksibilnost-3" class="animate small-label center">3</label>
                </div>
                <div class="fifth flex">
                    <input type="radio" id="fleksibilnost-4" name="ocjena_fleksibilnosti" value="fleksibilnost-4">
                    <label for="fleksibilnost-4" class="animate small-label center">4</label>
                </div>
                <div class="fifth flex">
                    <input type="radio" id="fleksibilnost-5" name="ocjena_fleksibilnosti" value="fleksibilnost-5">
                    <label for="fleksibilnost-5" class="animate small-label center">5</label>
                </div>
            </div>
            <label for="preporuka" class="full">Zašto bi preporučila Always Sensitive svojoj prijateljici?</label>
            <div class="small-text">8 najkreativnijih odgovora nagrađujemo Always Sensitive softboxom u kojem se nalazi: mekani jastuk, topla dekica Dormeo, udobna maska za spavanje, Ruby čokolada, paket Always Sensitive uložaka.</div>
            <input type="text-area" id="preporuka" name="preporuka">
            <label for="email" class="full">Vaš email</label>
            <input type="email" id="email" name="email">
            <div class="full flex consent-parent">
                <input type="checkbox" id="consent-review" name="consent-review" value="1" required><label class="consent-label" for="consent-review">Prihvaćam <a target="_blank" href="https://super1.telegram.hr/pravila-privatnosti/">pravila privatnosti Super1</a> i <a target="_blank" href="https://super1.telegram.hr/snaga/opci-uvjeti-nagradnog-natjecaja/">pravila kreativnog natječaja</a></label>
            </div>
            <div class="full center">
                <button id="submit-form-review" class="submit-btn" type="submit">Pošalji odgovore</button>
                <div id="submitted-review" class="hide">Prijava uspiješno spremljena. Hvala!</div>
            </div>
        </form>
        <div class="full flex notice second-notice">
            <p>Pobjednica sedmog kruga natječaja je <b>Sanja Marić.</b> Čestitamo! Uživajte u najnježnijem poklonu ove jeseni.</p>
            <p>Svim drugim sudionicima želimo sreću u slijedećem krugu natječaja.</p>
        </div>
    </div>
    <img src="<?php echo $native_path ?>img/vizual.jpg" alt="Always sensitive - 2x mekši, sada s dodatnom zaštitom">
    <section class="full native-signature">
        <div class="container flex">
            <div class="full center">
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom P&G i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </section>
    <script>
        var $form = jQuery('form#always-apply'),
            url = 'https://script.google.com/macros/s/AKfycbzbrVkPUynBwNKvqDBs-1_fQ084L2YbYPTkOE2aqFzihUjUyTk/exec'

        jQuery('#submit-form-apply').on('click', function(e) {
            e.preventDefault();
            var jqxhr = jQuery.ajax({
                url: url,
                method: "GET",
                dataType: "json",
                data: $form.serializeObject()
            }).done(
                function(){
                    $('#submit-form-apply').hide();
                    $('#submitted-apply').removeClass('hide');
                }
            );
        })
        var $form_review = jQuery('form#always-review'),
            url_review = 'https://script.google.com/macros/s/AKfycbxmL2yZ9NcZwd-dGRoQ5tRfDrUuq0ocWvS5d3iemb5ZRSuVisY/exec'

        jQuery('#submit-form-review').on('click', function(e) {
            e.preventDefault();
            var jqxhr = jQuery.ajax({
                url: url_review,
                method: "GET",
                dataType: "json",
                data: $form_review.serializeObject()
            }).done(
                function(){
                    $('#submit-form-review').hide();
                    $('#submitted-review').removeClass('hide');
                }
            );
        })
    </script>
</div>
<style> <?php echo get_post_meta( get_the_ID(), 'editorial_style', true ) ; ?></style>
<?php wp_footer(); ?>
</body>

</html>