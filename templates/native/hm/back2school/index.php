
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/hm/back2school';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>


<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Schoolbell&display=swap" rel="stylesheet">
    <style type="text/css">

        @-webkit-keyframes vrtnja { 0% { -webkit-transform:rotate(0deg) } 100% { -webkit-transform: rotate(360deg);} }
        @keyframes vrtnja { 0% { transform:rotate(0deg) } 100% { transform: rotate(360deg);} }


    </style>
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


  <div class="blog hero">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
               <img src="<?php echo $native_path ?>/assets/images/claim.svg" style="padding: 30px" /><br/>
        </div>
    </div>
  </div>
</div>


<div class="blog" style="background: #353534;">
  <div style="position: absolute; width:200px; height: 200px; right: 50px; top:250px; -webkit-animation: vrtnja 11s linear 0s infinite; animation: vrtnja 11s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/cvijet01.svg"/></div>
  <div class="container">
      <div class="row">

          <div class="col-lg-8 offset-lg-2 text-left wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <h2 style="color:#fff;">Početak školske godine, osim blagog stresa jer je ljeto gotovo, donosi i mnoštvo novih iskustava – novu okolinu, nove školske predmete, nove prijatelje, ali i - novu odjeću.</h2>
             <p class="sticky-top" style=" font-weight: 500; color:#fff">Svi znamo osjećaj trčanja po trgovinama u potrazi za savršenim komadima koji će nas pratiti kroz cijelu školsku godinu. Koliko puta smo proveli sate tražeći savršene traperice koje će izdržati sve naše avanture ili majicu koja će biti dovoljno cool za školske hodnike? Zašto si ne bismo olakšali život s novom razigranom, a istovremeno minimalističkom kolekcijom iz H&M-a? Back to School kolekcija nudi savršen spoj klasičnih komada i modernih printeva, omogućujući nam da se izrazimo kroz slojevitu odjeću koja kombinira stil i praktičnost.</p>
          </div>
        </div>
      </div>
</div>


<div class="blog" style="background: linear-gradient(180deg, rgba(53,53,52,1) 0%, rgba(33,33,33,1) 100%);">
  <div style="position: absolute; width:180px; height: 180px; left: -50px; top:600px; -webkit-animation: vrtnja 20s linear 0s infinite; animation: vrtnja 20s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/cvijet02.svg"/></div>
  <div class="container">
      <div class="row">
          <div class="col-lg-5">
             <p style="color:#fff;" class="sticky-top"><img src="<?php echo $native_path ?>/assets/images/prva.svg"  class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s" /><br/><br/><span class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Glavna nit vodilja ove kolekcije leži u razigranom minimalizmu. Odjeća je izrađena od održivih materijala, što znači da svaki komad možemo nositi s ponosom, znajući da doprinosimo očuvanju planeta. Svi smo svjesni koliko je važno misliti na budućnost, a ova kolekcija nam to omogućuje na moderan i praktičan način. Bez obzira na dob ili rod, ovi komadi vraćaju nas u nostalgične trenutke poput prvog dana škole, dok istovremeno pružaju suvremen izgled.<br/><br/>Kolekcija obuhvaća sve što je potrebno za povratak u školu, a svaki komad je pažljivo dizajniran kako bi zadovoljio potrebe svih nas modnih aspiranta, onih koji vole trendove i koriste stil kao sredstvo izražavanja. Bilo da se želimo istaknuti ili uklopiti, H&M nudi rješenje za sve. Zamislite samo: prvi dan škole, svi se okreću za vama, a vi se osjećate samopouzdano i udobno u svom novom outfitu.</span>
              </p>
          </div>
          <div class="col-lg-7 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/2cjelina.jpg" style="z-index:1 !important" />
          </div>
        </div>
      </div>
</div>


<div class="blog" style="background: linear-gradient(180deg, rgba(33,33,33,1) 0%, rgba(15,15,15,1) 100%); padding-bottom: 0;">
  <div style="position: absolute; width:180px; height: 180px; right: 100px; top:400px; -webkit-animation: vrtnja 16s linear 0s infinite; animation: vrtnja 16s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/cvijet03.svg"/></div>

  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12 paddingdolje">
                <div class="container">
                  <div class="row">
                      <div class="col-lg-6 offset-lg-3 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

                        <img src="<?php echo $native_path ?>/assets/images/treca.svg"/>

                      </div>
                      <div class="col-lg-6 offset-lg-3 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

                        <p style="color: #fff; vertical-align: center;">Klasični komadi i svakodnevni osnovni elementi čine temelj ove kolekcije. Slojevitost je ključna za postizanje savršenog školskog outfita, a kolekcija ima sve potrebne elemente kako bi to bilo što jednostavnije. Od udobnih majica do funkcionalnih jakni, svaki komad je dizajniran s ciljem da nam omogući maksimalnu fleksibilnost i prilagodljivost. Svi smo se barem jednom našli u situaciji kad jutarnja žurba otežava odabir odjeće – s H&M kolekcijom, sve je jednostavnije.<br/><br/>Printevi koji oživljavaju dječju maštu i klasični krojevi koji osiguravaju trajnost, zajedno čine kolekciju koja je istovremeno razigrana i minimalistička. Odjeća nije samo modna, već i praktična, omogućujući nam slobodu kretanja i igru tijekom cijelog dana. Sjećate se onih dana kada smo satima trčali po školskom dvorištu? S H&M-om, možemo se ponovno osjećati tako slobodno.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 p-0 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/slobodne-01.jpg" />
          </div>
          <div class="col-lg-4 p-0 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
            <img src="<?php echo $native_path ?>/assets/images/slobodne-02.jpg" />
          </div>
          <div class="col-lg-4 p-0 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
            <img src="<?php echo $native_path ?>/assets/images/slobodne-03.jpg" />
          </div>
        </div>
  </div>
</div>


<div class="blog" style="background: linear-gradient(180deg, rgba(15,15,15,1) 0%, rgba(10,10,10,1) 100%);">
  <div style="position: absolute; width:150px; height: 150px; left: -50px; top:100px; -webkit-animation: vrtnja 20s linear 0s infinite; animation: vrtnja 20s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/cvijet01.svg"/></div>

  <div style="position: absolute; width:200px; height: 200px; border-radius: 100px; right: 50px; top:600px; -webkit-animation: vrtnja 15s linear 0s infinite; animation: vrtnja 15s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/cvijet02.svg"/></div>


  <div class="container">
      <div class="row">
          <div class="col-lg-5 order-lg-2">
             <p class="sticky-top" style="color:#fff"><img src="<?php echo $native_path ?>/assets/images/cetvrta.svg"  class="wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s" /><br/><br/><span class="wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">Najveći modni trenutak godine za svako dijete je povratak u školu. Od kolijevke pa do groba, najljepše je đačko doba, a H&M Back to School kolekcija nudi sve što je potrebno da taj trenutak bude poseban. Komadi su dizajnirani da budu inkluzivni i potiču zajedništvo, što škola i treba promicati. Svi mi želimo pripadati, a ova kolekcija nam pomaže to i ostvariti.<br/><br/>Kombinacija traperica, košulja, frotira i umjetne kože osigurava raznovrsnost i trajnost, dok točkice i pruge unose razigranost. Paleta boja kolekcije obuhvaća kremasto bijelu, bijelu, crnu, sivi melange i boju pijeska, s kontrastnim crvenim i nebesko plavim bojama te naznakom ružičaste.<br/><br/>Inspirirana je svakodnevnim životom i potrebama mladih koji su uvijek u pokretu. Njihova energija i kreativnost nadahnjuju stvaranje odjeće koja je istovremeno trendi i funkcionalna. Klasični komadi omogućuju jednostavno kombiniranje i stvaranje slojevitih outfita koji su prikladni za sve prilike. Zamislite kako je lako kreirati savršeni outfit za svaki školski dan, bez puno razmišljanja. S H&M-om, svaki povratak u školu postaje prilika za novi modni početak, s odjećom koja je praktična, moderna i održiva.</span>
              </p>
          </div>
          <div class="col-lg-7 order-lg-1 p-0 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

            <div class="image-gallery">
                <img src="<?php echo $native_path ?>/assets/images/4cjelina-01.jpg"/>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="blog" style="background: linear-gradient(180deg, rgba(10,10,10,1) 0%, rgba(0,0,0,1) 100%);;">
  <div style="position: absolute; width:200px; height: 200px; left: 50px; top:100px; -webkit-animation: vrtnja 21s linear 0s infinite; animation: vrtnja 21s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/cvijet03.svg"/></div>

  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12 paddingdolje">
                <div class="container">
                  <div class="row">

                      <div class="col-lg-5 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <img src="<?php echo $native_path ?>/assets/images/peta.svg" />
                      </div>
                      <div class="col-lg-1">
                      </div>
                      <div class="col-lg-6 align-self-end wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <p style="color:#fff">Ova kolekcija je tu da podrži sve nas modne aspirante u našem putovanju kroz školu. S H&M-om, svaki povratak u školu postaje prilika za novi modni početak. Pridružimo se u stvaranju svjetlije budućnosti kroz pametnu modu koja je dostupna svima.<br/><br/>Zbog dolaska jeseni i hladnijih dana, slojevitost je ključna, a ova kolekcija ima sve elemente kako bi taj prijelaz bio što jednostavniji. Od klasičnih (basic) komada do modernih printeva, H&M nudi sve što nam je potrebno za povratak u školu u stilu. Pridružite nam se u stvaranju svjetlije budućnosti kroz pametnu modu koja je dostupna svima.</p>
                      </div>


                  </div>
              </div>
          </div>

      </div>
  </div>
  <div class="container-fluid">
    <div class="row">
          <div class="col-lg-12 p-0 wow zoomIn"  data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/5cjelina.jpg" />
          </div>
    </div>
  </div>
</div>


  <div id="clanci" class="blog" style="z-index: 100; position: relative; padding-top: 0px; padding-bottom: 120px; overflow: hidden; background: rgba(0,0,0,1);">


    <div class="container-fluid wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
              <p style="color:#fff">Autorica teksta:  Marija Pajtak<br/>
              Kreativno vodstvo: TG Studio<br/>
                Grafičko oblikovanje: Reset</p>
              <p style="color:#fff">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/telegram.png" style="max-width: 186px;"  />
          </div>
        </div>
      </div>
  </div>
  <script type="text/javascript">
      const images = ["<?php echo $native_path ?>/assets/images/4cjelina-01.jpg", "<?php echo $native_path ?>/assets/images/4cjelina-02.jpg"];
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
