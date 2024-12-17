
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/milka-mix';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<head>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css?v=09052024">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="15" class="pozadina">
<?php do_action('telegram_body_start'); ?>
  <!-- ***** Preloader Start ***** -->


  <div class="blog hero" style="padding-top: 50px; padding-bottom: 50px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
               <img src="<?php echo $native_path ?>/assets/images/claim.svg" class="claimslika" /><br/>
        </div>
    </div>
  </div>

</div>

<div class="blog" style="background: #7d69ac; color: #fff">
  <div class="container">
      <div class="row">

          <div class="col-lg-8 offset-lg-2 text-left wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
             <p  style=" font-weight: 300 !important; color:#fff">Svi volimo osjećaj uzbuđenja dok otvaramo poklone na kojima piše naše ime, ali priznajmo - prava čarolija blagdana krije se u darivanju. Ipak, s dolaskom božićnih svjetala i mirisa cimeta, stiže i klasična blagdanska dilema: što pokloniti osobama koje najviše volimo?<br/><br/>Uz sve obaveze, pokušavamo pronaći savršeni balans između biranja darova i dragocjenog vremena s našim najmilijima. Zato ove godine, umjesto da jurimo za velikim iznenađenjima, zastanimo i sjetimo se što blagdani zapravo znače. Najveći poklon? Mali znak pažnje i vrijeme koje provedemo zajedno. Jer to je ono što se pamti. <br/><br/>U suradnji s Milkom, osmislili smo društvenu igru koja će vas inspirirati na iskrene i zabavne razgovore s vašim najmilijima. Sve što trebate su malo vremena, blagdanski ugođaj i neodoljivi Milka Božićni Mix.</p><br/><br/>
             <h3 style="font-weight:900">Pravila</h3>
             <p  style=" font-weight: 300 !important; color:#fff">Svaki Milka Božićni Mix sastoji se od 8 različitih čokoladica. Nekih okusa ima u više primjeraka, a nekih u manje, ali sveukupno ih je 19. Ti i tvoj suigrač igrate naizmjenično. Ovisno koju čokoladicu izvučete, pročitajte pitanje svom suigraču naglas. Uživajte u čokoladnim slasticama i razgovoru koji će Milka Božićni Mix potaknuti. </p><br/><br/>
             <h2>Igraš li igru s članom tvoje obitelji, prijateljem ili s tvojim partnerom?</h2>

          </div>
        </div>
      </div>
</div>


<div class="blog" style="background: #7d69ac; color: #fff; padding-top: 0px;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 text-left wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
             <a href="#obitelj-prijatelji"><img src="<?php echo $native_path ?>/assets/images/obitelj-prijatelji.png"/></a>

          </div>
          <div class="col-lg-6 text-left wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
             <a href="#partneri"><img src="<?php echo $native_path ?>/assets/images/partneri.png"/></a>

          </div>
        </div>
      </div>
</div>

<div id="obitelj-prijatelji" class="blog" style="background: #7d69ac; color: #fff; padding-top: 0px;">
  <div class="container">
      <div class="row">

          <div class="col-lg-8 offset-lg-2 text-left wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
            <h1 style="font-weight: 900; color:#fff !important">Za obitelj & prijatelje</h1>
             <h3 style="font-weight:900; margin-top:50px">Milka Choco Wafer</h3>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Koji trenutak sa mnom iz 2024. nećeš nikada zaboraviti?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">U kojoj božićnoj aktivnosti najviše uživaš?</p>

             <h3 style="font-weight:900; margin-top:50px">Čokoladni bombon u plavom omotu</h3>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Kako me opisuješ drugim ljudima?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Koja ti je moja omiljena vrlina?</p>
              <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Jesi li ikada bio zaljubljen/a u nekoga, a da im to nikada nisi priznao/la? </p>

             <h3 style="font-weight:900; margin-top:50px">Milka Milkinis</h3>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Koja je najsmješnija laž koju si ikada izrekao/la?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Kod kojeg me izazova uvijek zoveš u pomoć?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Kada si se posljednji put nasmijao/la do suza?</p>

             <h3 style="font-weight:900; margin-top:50px">Čokoladni bombon u ljubičastom omotu sa zlatnim zvjezdicama</h3>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Kad bi mogao/la jesti samo jedno jelo cijeli život, koje bi to bilo?</p>

            <h3 style="font-weight:900; margin-top:50px">Milka MMMax Toffee & Nut</h3>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Gdje me vidiš za 20 godina?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Kojoj aktivnosti bi volio/la da se više posvetimo?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Kakav/a bih bio/la šef?</p>

             <h3 style="font-weight:900; margin-top:50px">Čokoladni bombon u ljubičasto-bijelom omotu</h3>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Bi li radije da Božić traje 10 dana zaredom ili da je 10 puta godišnje?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Postoji li neka hrana koju, začuđujuće, nisi nikada probao/la?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Koje tri slavne osobe bi pozvao/la na božićnu večeru i zašto?</p>

             <h3 style="font-weight:900; margin-top:50px">Milka mini-čokoladica</h3>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Koja je tvoja najneobičnija vještina?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Da možeš zauvijek ostati iste dobi, koju bi izabrao/la?</p>

             <h3 style="font-weight:900; margin-top:50px">Čokoladni bombon u ružičasto-zlatnom omotu</h3>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Tko daje najbolje zagrljaje?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Koja je to ‘naša’ pjesma?</p>

          </div>
        </div>
      </div>
</div>



<div id="partneri" class="blog" style="background: #7d69ac; color: #fff; padding-top: 0px;">
  <div class="container">
      <div class="row">

          <div class="col-lg-8 offset-lg-2 text-left wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
            <h1 style="font-weight: 900; color:#fff !important">Za partnera</h1>
             <h3 style="font-weight:900; margin-top:50px">Milka Choco Wafer</h3>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Koje karakterne osobine dijelimo?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Koji ti je naš najdraži zajednički ritual?</p>

             <h3 style="font-weight:900; margin-top:50px">Čokoladni bombon u plavom omotu</h3>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">U kojem trenutku smo se zaljubili?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">O čemu bismo trebali više razgovarati?</p>
              <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Koji je najbolji poklon koji si dobio/la od mene?</p>

             <h3 style="font-weight:900; margin-top:50px">Milka Milkinis</h3>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Koja je prva uspomena koju vežeš uz mene?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Što najviše voliš kada ti skuham?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Koji ti je najdraži zajednički Božić?</p>

             <h3 style="font-weight:900; margin-top:50px">Čokoladni bombon u ljubičastom omotu sa zlatnim zvjezdicama</h3>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Kako me opisuješ drugima?</p>

            <h3 style="font-weight:900; margin-top:50px">Milka MMMax Toffee & Nut</h3>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Gdje nas vidiš za 5 godina?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Koja pjesma te podsjeća na mene?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Postoji li nešto što ti nedostaje u našem odnosu?</p>

             <h3 style="font-weight:900; margin-top:50px">Čokoladni bombon u ljubičasto-bijelom omotu</h3>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Na čemu si najzahvalniji/a?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Koja ti je moja omiljena vrlina?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Po čemu prepoznaješ da te uistinu volim?</p>

             <h3 style="font-weight:900; margin-top:50px">Milka mini-čokoladica</h3>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Gdje bi volio/la da otputujemo?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Pokaži mi tvoju omiljenu fotografiju mene.</p>

             <h3 style="font-weight:900; margin-top:50px">Čokoladni bombon u ružičasto-zlatnom omotu</h3>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Na koji način bih mogao/la biti posvećeniji/a našem odnosu?</p>
             <p  style=" font-weight: 300 !important; color:#fff; margin-top: 0;">Postoji li nešto što mi nikada nisi priznao/la?</p>

          </div>
        </div>
      </div>
</div>




<div id="clanci" class="blog" style="z-index: 100; position: relative; padding-top: 120px; padding-bottom: 120px; overflow: hidden; background: #7d69ac; font-weight: 500 !important;">


    <div class="container-fluid wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
              <p style="color:#fff; font-weight: 300 !important">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/telegram.png" style="max-width: 186px;"  />
          </div>
        </div>
      </div>
  </div>
  <script type="text/javascript">
      const images = ["<?php echo $native_path ?>/assets/images/osamdesete-01.jpg", "<?php echo $native_path ?>/assets/images/osamdesete-02.jpg"];
      let currentImageIndex = 0;
      const imageElement = document.querySelector(".image-gallery img");


      function updateImage() {
        const imageUrl = images[currentImageIndex];
        imageElement.style.opacity = 0; // Postavite opacity na 0 prije promjene slike
        setTimeout(() => {
          imageElement.src = imageUrl;
          imageElement.alt = `Slika ${currentImageIndex + 1}`;
          imageElement.style.opacity = 1; // Postavite opacity na 1 nakon promjene slike
        }, 500); // Promijenite 1000 ms na željeni vremenski interval za tranziciju
      }

      function showNextImage() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        updateImage();
      }

      // Postavite interval za automatsko klizanje svakih 3 sekunde (3000 ms)
      setInterval(showNextImage, 5000);

      // Inicijalno postavljanje slike
      updateImage();
</script>
  <!-- Scripts -->
  <script src="<?php echo $native_path ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $native_path ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/owl-carousel.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/animation.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/imagesloaded.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/custom.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/script.js"></script>

    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
