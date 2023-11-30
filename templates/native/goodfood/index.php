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
                Dragi sudionici natječaja,
            </p> <p class="ostali">
                Hvala vam na fantastičnim prijavama - zatvorili smo prvu fazu našeg nagradnog natječaja. Vaše su nas super salate ostavile bez daha i izazovno je bilo izabrati samo 10 najboljih. No, ovo su salate koje su se istaknule i osvojile nagradu:
            </p> <p class="ostali">
                Top 10 i vaučer u iznosu od 50 € osvajaju salate (autori):
            </p>
            <p class="ostali">
                <ul>
                <li>
                Quinoa Glow Bowl (Sanja Novotny)
                </li><li>
                Eve’s Apple (Jan Cegnar)
                </li><li>
                Greenie Beenie Zucchini (Ivana Poljanac)
                </li><li>
                East West (Laura Novak)
                </li><li>
                Beetlejuice (Kristiana Božičević)
                </li><li>
                Think Pink (Vana Grgurinović)
                </li><li>
                Cheesy Kale (Tena Marčac)
                </li><li>
                Fetalicious Falafel (Helena Hastor)
                </li><li>
                Piri-Piri Salata (Klara Kolarić)
                </li><li>
                Vegan Winter (Lara Levak)
                </li></ul>
            </p> <p class="ostali">
                Top 5 i prolaze dalje u drugu fazu natječaja:
            </p> <p class="ostali">
                <ul>
                <li>
                Think Pink (Vana Grgurinović)
                </li><li>
                Cheesy Kale (Tena Marčac)
                </li><li>
                Fetalicious Falafel (Helena Hastor)
                </li><li>
                Piri-Piri Salata (Klara Kolarić)
                </li><li>
                Vegan Winter (Lara Levak)
                </li></ul>
            <p class="ostali">
                S obzirom na veliki broj prijava, morali smo pomaknuti fazu glasovanja na ponedjeljak (4.12.2023.). Hvala Vam na strpljenju! Pozivamo Vas da od ponedjeljka ostavite svoj glas i tako izravno sudjelujete u odabiru Super1 Salad Stilista. Pobjednika objavljujemo 16. prosinca.
            </p>
            <p class="ostali">
                Izmijenjena pravila nagradnog natječaja pročitajte <a href="https://www.telegram.hr/super1/life/pravila-nagradnog-natjecaja-good-food/" target="_blank">ovdje</a>.
            </p>
            <p class="ostali">
                Sretno svima!
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
