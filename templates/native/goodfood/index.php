<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/goodfood';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>


<head>
    <?php wp_head(); ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css?v=2">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">
    <style>
          @-webkit-keyframes puls { 0% { -webkit-transform:scale(1) } 50% {-webkit-transform: scale(1.4);} 100% { -webkit-transform:scale(1) } }
           @keyframes puls { 0% { transform:scale(1) } 50% {transform: scale(1.4);} 100% { transform:scale(1) } }

          @-webkit-keyframes pulsbubblea { 0% { margin-top:0; } 50% {margin-top: 10px;} 100% { margin-top:0; } }
           @keyframes pulsbubblea { 0% { margin-top:0 } 50% {margin-top: 10px;} 100% { margin-top:0 } }
    </style>
</head>

<body>
<?php do_action('telegram_body_start'); ?>

  <div id="clanci" class="blog">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 text-center">
            <div class="sticky-top">
                    <img src="<?php echo $native_path ?>/assets/images/salata.png" style="-webkit-animation: pulse 2s ease-in-out 0s infinite; animation: pulse 2s ease-in-out 0s infinite; z-index: 9; position: relative;"/>
          </div>
        </div>
        <div class="col-lg-6 text-left kontent">
            <img src="<?php echo $native_path ?>/assets/images/logos.png" class="slikahero" />
            <h1>Postani <span style="color:#e5d6a2">Super1</span> Salad Stilist</h1>
            <h3>Najzdraviji nagradni natječaj: tvoja superzdrava salata na GoodFood meniju?</h3>
            <div class="border-first-button scroll-to-section">
               <a href="#detaljna-pravila">PRIJAVI SE</a>
            </div>
            <img src="<?php echo $native_path ?>/assets/images/salata01.png"/>
            <p class="prviblok" id="procitaj-vise"><span style="font-weight: 900;">GoodFood i Super1 te pozivaju da postaneš Salad Stilist!</span> Osmisli svoju superzdravu i superukusnu salatu, idealnu za jesenski radni dan. <span style="font-weight: 900;">Želiš svojim kreativnim receptom obogatiti GoodFood meni?</span> Sada imaš priliku!</p>
            <p  class="ostali"><img src="<?php echo $native_path ?>/assets/images/crta.png" style="max-width: 70px; height:auto" /></p>
            <p class="ostali">Natječaj je super jednostavan - samo slijedi ovih nekoliko koraka:</p>
            <ul>
              <li>Razmisli o svojoj omiljenoj salati koju bi volio vidjeti na GoodFood meniju. Bez ograničenja - danas ti biraš!</li>
              <li>Što joj čini bazu - hrskavi listovi zelene kristal salate ili voliš više gorčinu iz rukole? </li>
              <li>Koje joj dodatke dodaješ - je li to svježe ili grill povrće, mladi ili tvrdi sir, orašasto ili sušeno voće, sočan ili hrskavi komad mesa?</li>
              <li>Umak je tajna svakog velikog majstora salate. Što se nalazi u tvom - je li kiseo, sladak, gorak, gust, ljut, osvježavajući?</li>
              <li>Na kraju razmisli o imenu koje će se savršeno uklopiti u GoodFood meni. Daj mašti na volju.</li>
            </ul>
            <p  class="ostali"><img src="<?php echo $native_path ?>/assets/images/crta.png" style="max-width: 70px; height:auto" /></p>
            <p class="ostali"><span style="font-weight: 900;">Autore top 10 najboljih salata nagradit ćemo GoodFood vaučerom u vrijednosti od 50€.</span> Među njima top 5 najboljih proći će u drugi krug u kojemu pozivamo sve čitatelje da glasuju za onaj recept koji im se najviše sviđa. Najbolji recept, po izboru publike, završit će na GoodFood meniju i biti dostupan baš svima čak mjesec dana. Uz to, kreator pobjedničkog recepta dobit će udio zarade od prodaje svoje salate te 30 dana besplatno jesti u restoranima GoodFooda!</p>
            <p class="ostali">Pokaži svoju kulinarsku kreativnost i osvoji mjesto na GoodFood jelovniku. Naše savjete za pobjedničku salatu potraži ispod.</p>
            <div class="border-first-button scroll-to-section">
               <a href="#detaljna-pravila">PRIJAVI SE</a>
            </div>
            <p class="ostali"><a href="#detaljna-pravila" >Pročitaj detaljna pravila</a></p>
            <img src="<?php echo $native_path ?>/assets/images/salata02.png"/>
            <h3 id="detaljna-pravila" style="font-weight:900">Evo kako tvoja salata može biti ona pobjednička</h3>
            <p class="ostali">Dobro pregledaj sve postojeće salate na GoodFood jelovniku kako bi osigurao da je tvoja kreacija jedinstvena - tražimo originalnost i raznolikost! Pripazi da su tvoju sastojci lako dostupni, stoga izbjegavaj sastojke poput kokihija ili novozelandskog špinata. Detaljno razradi svoj umak i ne zaboravi salati dati kreativno ime imajući na umu kako GoodFood inače naziva svoja jela. Prati naše upute i nećeš imati problema sa stvaranjem salate koja će se istaknuti. </p>
            <p class="ostali"><a href="https://www.telegram.hr/super1/life/pravila-nagradnog-natjecaja-good-food/" target="_blank">Detalje i pravila nagradnog natječaja pronađi ovdje.</a></p>
            <p class="ostali">
                <div>
                <h3>Hvala na prijavama. Natječaj je završen. Uskoro ćemo objaviti pobjednika.</h3>
            </div>
                    <!--<form id="test_form">
                        <h3 style="font-weight: 900;">Osobni podaci</h3>
                        <label for="ime">Ime:</label>
                        <input type="text" name="ime" placeholder="Ivana" required><br>

                        <label for="prezime">Prezime:</label>
                        <input type="text" name="prezime" placeholder="Ivanić" required><br>

                        <label for="lokacija">Mjesto:</label>
                        <input type="text" name="lokacija" placeholder="Ivanić Grad" required><br>

                        <label for="telefon">Kontakt telefon:</label>
                        <input type="tel" name="telefon" placeholder="098 2323 333" required><br>

                        <label for="email">E-mail:</label>
                        <input type="email" name="email" placeholder="ivana.ivanic@gmail.com" required><br>

                        <label class="prihvacanjelabela">
                                    <input type="checkbox" name="pravila" class="prihvacanje" required><span style="margin-top: 25px !important; position: absolute; margin-left: 10px;">Prihvaćam pravila i uvjete natječaja
                                </span></label>

                        <h3 style="padding-top: 30px !important; font-weight: 900;">Tvoja salata</h3>
                        <label style="align-items: top !important;" for="imesalate">Ime salate:</label>
                        <input type="text" name="imesalate" placeholder="Buffalo Bill" required><br>

                        <label style="align-items: top !important;"  for="baza">Baza:</label>
                        <input type="text" name="baza" style="margin-bottom: 10px;" placeholder="Salata romana, kristal salata, crveni kupus"  required><br>

                        <label for="dodaci">Dodaci:</label>
                        <textarea name="dodaci" rows="4" cols="50" placeholder="Crispy pileća krilca, avokado, plavi sir, celer, mrkva, krastavac" style="height: 100px; margin-bottom: 0px;" required></textarea><br>

                        <label for="umak">Umak:</label>
                        <textarea name="umak" rows="4" cols="50" placeholder="Maslinovo ulje, ocat, Worstershire, ljuti umak" style="height: 100px;" required></textarea><br>

                        <input type="submit" id="submit-form" value="Pošalji">
                    </form>-->
            <!--<div class="col-lg-6 kontent" id="hvala" style="display: none;">
                <img src="<?php echo $native_path ?>/assets/images/logos.png" class="slikahero" />
                <h1>Hvala <span style="color:#e5d6a2">na sudjelovanju!</span></h1>
                <h3>Osmislio/la si svoju superzdravu i superukusnu salatu, idealnu za jesenski radni dan.</h3>
                <div class="border-first-button scroll-to-section">
                    <a href="">PRIJAVI SE PONOVNO</a>
                </div>

            </div>-->
                    <br/><br/>
            </p>
            <p class="prviblok">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom GoodFood i po najvišim uredničkim standardima Telegram Media Grupe.</p>
            <img src="<?php echo $native_path ?>/assets/images/telegram-studio.png" style="max-width: 180px; height: auto;" /><br/><br/>
        </div>
      </div>
    </div>
  </div>
<img src="<?php echo $native_path ?>/assets/images/bubble.png" class="bubble"/>
  <!-- Scripts -->
  <script src="<?php echo $native_path ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $native_path ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/owl-carousel.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/animation.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/imagesloaded.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/custom.js"></script>
<script src="https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/super1/superdan/jquery.serialize-object.min.js"></script>
<script>
    var $form = jQuery('form#test_form'),
        url = 'https://script.google.com/macros/s/AKfycby8hA1X1rowN32CFzZSkX-d_0TXSWtBYULVac8zMSN8_JIq6Htk-0VVGWlynV1Zqj0Y/exec'

    jQuery('#submit-form').on('click', function(e) {
        e.preventDefault();
        jQuery('#submit-form').hide()
        var jqxhr = jQuery.ajax({
            url: url,
            method: "GET",
            dataType: "json",
            data: $form.serializeObject()
        }).done(
            function(){
                jQuery('#test_form').hide();
                jQuery('#hvala').show();
            }
        );
    })
</script>
    <?php wp_footer(); ?>
</body>
</html>
