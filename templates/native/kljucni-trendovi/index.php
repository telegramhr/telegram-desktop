<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/klucni-trendovi';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>

<head>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">

</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="15">
<?php do_action('telegram_body_start'); ?>
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->



  <div class="main-banner desktopcokolada">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 align-self-center">
              <div class="left-content show-up header-text wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-7">
                  </div>
                  <div class="col-lg-5">
                    <img src="<?php echo $native_path ?>/assets/images/logos.png" style="width:auto; height:70px; padding-bottom: 20px;">
                    <h1>Šljokice, metalik, karirano i baršun su ključni trendovi za blagdane 2023.<br/><br/>Znamo kako ih nositi.</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
         <video autoplay muted loop id="myVideo">
                <source src="<?php echo $native_path ?>/assets/images/video.mp4" type="video/mp4">
        </video>
    </div>
  </div>


  <div class="main-banner mobilecokolada">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 align-self-center">
              <div class="left-content show-up header-text wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-8">
                  </div>
                  <div class="col-lg-4">
                    <img src="<?php echo $native_path ?>/assets/images/logos.png" style="width:auto; height:70px; padding-bottom: 20px;">
                    <h1>Šljokice, metalik, karirano i baršun su ključni trendovi za blagdane 2023.<br/><br/>Znamo kako ih nositi.</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
         <video autoplay muted loop id="myVideo">
                <source src="<?php echo $native_path ?>/assets/images/video.mp4" type="video/mp4">
        </video>
    </div>
  </div>




  <div id="clanci" class="blog" style=" padding:0; padding-top:0px; padding-bottom:0px; margin: 0;">
    <div class="container-fluid" style="padding:0">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
                <img src="<?php echo $native_path ?>/assets/images/cco01.jpg"/>
        </div>
        <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
            <div class="tekst-gornji" style="padding-bottom:20px;">
            <h2>City Center one i Super1 u jednom editorijalu objedinjuju ključne trendove za nadolazeću blagdansku sezonu</h2>
            <p>Pred nama je još jedna blagdanska sezona puna veselih druženja bilo da se radi o poslovnim domjencima, proslavama s prijateljima ili toplim obiteljskim trenutcima oko raskošnog stola. Odjevne kombinacije za sve spomenute prigode uvijek je nekako najslađe birati jer su simbol blagdanskog slavlja, zajedništva i veselja za kojim žudimo nakon naporne radne godine. Zato smo u suradnji sa <a href="https://citycenterone.hr/zagreb-east/" target="_blank">City Centerom one</a> pripremili jedan bogati modni editorijal u kojem smo u prvi plan stavili upravo blagdanske odjevne kombinacije.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-2">
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style=" padding:0; padding-top:0px; padding-bottom:0px; margin: 0;">
    <div class="container-fluid" style="padding:0">
      <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
            <div class="tekst-gornji" style="padding-bottom:20px;">
            <p>Stilistice Ana Galić i Barbara Jazvić iz studija Onne osmislile su šest odjevnih kombinacija kroz koje su provukle ključne trendove za ovu blagdansku sezonu. Uz uvijek nezaobilazne šljokice, ove sezone to su metalik detalji, karirani uzorci i raskošni baršun. Sve slavljeničke komade iz editorijala stilistice su pronašle u bogatoj jesensko-zimskoj ponudi <a href="https://citycenterone.hr/zagreb-west/" target="_blank">City Centera one</a>, a među njima će svatko pronaći nešto za sebe. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
                <img src="<?php echo $native_path ?>/assets/images/cco02.jpg"/>
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style=" padding:0; padding-top:0px; padding-bottom:0px; margin: 0;">
    <div class="container-fluid" style="padding:0">
      <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
            <div class="tekst-gornji">
            <h3>Sjaj šljokica i metala</h3>

            </div>
            <img src="<?php echo $native_path ?>/assets/images/cco04.jpg"/>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s" style="position:relative; padding: 0; margin: 0;">
                <img src="<?php echo $native_path ?>/assets/images/cco03.png"/>
        </div>


      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style=" padding:0; padding-top:0px; padding-bottom:0px; margin: 0;">
    <div class="container-fluid" style="padding:0">
      <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
            <div class="tekst-gornji" style="padding-bottom:20px;">
            <p>Šljokice, lame i sjajni materijali obično su nešto što rado biramo za doček Nove godine, no ove sezone možemo ih nositi i na domjenak na poslu ili blagdansku večeru s partnerom. Kako nam sugeriraju H&M i Paco Rabanne koji su ovih dana predstavili zajedničku kolekciju prepunu metaliziranih perli i zrcalno srebrnih detalja, sjaj šljokica i metala nije rezerviran samo za ponoćni poljubac na Staru godinu.</p>

            <p>Mi smo za ovaj editorijal odabrali dva ključna komada - jednu šljokičastu mini suknju i jednu šljokičastu mini haljinu - te smo oko njih gradili ostatak blagdanske kombinacije. Šljokičasti komad također je odličan poklon za sestru ili prijateljicu baš kao i <a href="https://citycenterone.hr/zagreb-west/" target="_blank">City Center one</a> poklon bon s kojim će draga osoba moći samostalno odabrati dar prema vlastitom ukusu.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
                      <div class="cijenemobile" style="position: absolute; bottom:0; right: 0; padding: 25px; width:50%;"><p style="font-size: 13px; line-height:15px; color: #fff;">Pavla (lijevo) nosi: minica, 34,99€, H&M, lakirane sandale, 39,99€, Mango, torba srce, 19,99€, H&M, crna bunda, 119,99€, Mango, naušnice, 14,99€, H&M, sunčane naočale YSL, 600€, optika Anda, crna majica, 22,99€, Mango (sve City Center one) <br/><br/>Monika (desno) nosi: haljina, 219€, Marella, torba, 114,90€, Mona, bijela bunda, 119,99€, Mango, gležnjače na petu, 49,95€, Humanic, prstenje, 6,99€, H&M (sve City Center one)</p></div>
                <img src="<?php echo $native_path ?>/assets/images/cco05.jpg"/>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px; background:#752329;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
              <div class="image-gallery">
                    <img src="<?php echo $native_path ?>/assets/images/cco06.jpg" alt="Slika 1">
                </div>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style=" padding:0; padding-top:0px; padding-bottom:0px; margin: 0;">
    <div class="container-fluid" style="padding:0">
      <div class="row">
        <div class="col-lg-2 order-lg-3">
        </div>
        <div class="col-lg-4 order-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
            <div class="tekst-gornji">
            <h3>Neki novi karirani uzorak</h3>

            </div>
            <img src="<?php echo $native_path ?>/assets/images/cco09.jpg"/>
          </div>
        </div>
        <div class="col-lg-6 order-lg-1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s" style="position:relative; padding: 0; margin: 0;">
                                <div class="cijenemobile" style="position: absolute; bottom:0; right: 0; padding: 25px; width:50%;"><p style="font-size: 13px; line-height:15px; color: #fff;">Pavla nosi: srebrne hlače Jake’s, 79,99€, Peek & Cloppenburg, karirana suknja Polo Ralph Lauren, 500€, Five star fashion, vesta kratkih rukava Polo Ralph Lauren, 250€, Five star fashion, natikače na malu petu, 39,99€, H&M, srebrni ringovi, 86€, Iva Viljevac (sve City Center one)<br/><br/>Monika nosi: srebrna minica, 39,99€, Mango, srebrna rebrasta majica, 29,99€, H&M, vesta kratkih rukava Polo Ralph Lauren, 250€, Five star fashion, cipele, 69,95€, Humanic, naušnice, 7,99€, H&M, lakirana crna torba Lazzarini, 49,95€, Humanic, kopča za kosu s mašnom, 7,99€, H&M (sve City Center one)</p></div>
                <img src="<?php echo $native_path ?>/assets/images/cco10.png"/>
        </div>

      </div>
    </div>
  </div>

  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s" style="position:relative; padding: 0; margin: 0;">
            <p>Karirani uzorak vječni je simbol blagdana i rado viđen uzorak u tom dijelu godine kako na kućnom tekstilu tako i na odjeći. Nosi svojevrsni šarm i viziju obiteljskog blagdanskog okupljanja što u svojim božićnim kolekcijama iz godine u godinu koriste brendovi među kojima su redovito Ralph Lauren, Burberry i Alexander McQueen.</p>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s" style="position:relative; padding: 0; margin: 0;">
            <p>U ovom editorijalu, karirani komadi pretvoreni su u prave party komade uz pomoć srebrnih detalja. Kariranom topu dodali smo metalik srebrnu suknju, a ispod karirane suknje stilizirali odvažne srebrne hlače. Ove kombinacije tako postaju sjajan transformativni izbor koji će vas odvesti od večere kod roditelja do klupskog plesnog podija.</p>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
              <div class="image-gallery2">
                    <img src="<?php echo $native_path ?>/assets/images/cco11.jpg" alt="Slika 1">
                </div>
        </div>
      </div>
    </div>
  </div>



  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s" style="position:relative; padding: 0; margin: 0;">
            <img src="<?php echo $native_path ?>/assets/images/cco13.jpg"/>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s" style="position:relative; padding: 0; margin: 0;">
          <img src="<?php echo $native_path ?>/assets/images/cco14.jpg"/>
        </div>
      </div>
    </div>
  </div>



  <div id="clanci" class="blog" style=" padding:0; padding-top:0px; padding-bottom:0px; margin: 0;">
    <div class="container-fluid" style="padding:0">
      <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
            <div class="tekst-gornji">
            <h3>Vječni baršun</h3>

            </div>
            <img src="<?php echo $native_path ?>/assets/images/cco15.jpg"/>
          </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" style="position:relative; padding: 0; margin: 0;">
                                <div class="cijenemobile" style="position: absolute; bottom:0; right: 0; padding: 25px; width:50%;"><p style="font-size: 13px; line-height:15px; color: #fff;">Pavla nosi: sako na vezanje, 289€, Mona, hlače, 187€, Mona, natikače na petu, 39,99€, Mango torba, 49,99€, Mango, naušnice, 8,99€, H&M, ogrlica, 7,99€, H&M, prstenje, 7,99€, H&M (sve City Center one)<br/><br/>Monika nosi: sako Jake’s, 99,99€, Peek &Cloppenburg, hlače Jake’s, 69,99€, Peek & Cloppenburg, ogrlica, 19,99€, H&M, naušnice, 14,99€, H&M, srebrna torba, 89€, Aldo, sunčane naočale Gucci, 353€, optika Optotim, prstenjem 6,99€, H&M, baršunaste sandale, 39,99€, Mango (sve City Center one)</p></div>
                <img src="<?php echo $native_path ?>/assets/images/cco16.png"/>
        </div>


      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style=" padding:0; padding-top:0px; padding-bottom:0px; margin: 0;">
    <div class="container-fluid" style="padding:0">
      <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
            <div class="tekst-gornji" style="padding-bottom:20px;">
            <p>O baršunu samo najbolje. Ovaj raskošni zimski materijal nezamjenjiv je u blagdanskoj garderobi. Izgleda moćno i raskošno bilo da se nalazi na haljinama, suknjama i strogim odijelima. Mi smo se u ovom editorijalu fokusirali upravo na odijela kako bismo vam pokazali da je moguće odabrati kombinaciju u kojoj istovremeno možete na posao i na blagdansku večeru.</p>
            <p>Stilizirana s pažljivo odabranim modnim dodatcima, baršunasta odijela iz ponude <a href="https://citycenterone.hr/zagreb-east/" target="_blank">City Centera one</a> upravo su ono što nam treba za ovu blagdansku sezonu - sofisticirana, odvažna i nevjerojatno zabavna.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
                <div class="image-gallery3">
                    <img src="<?php echo $native_path ?>/assets/images/cco17.jpg" alt="Slika 3">
                </div>
        </div>
      </div>
    </div>
  </div>




  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
              <div class="image-gallery4">
                    <img src="<?php echo $native_path ?>/assets/images/cco19.jpg" alt="Slika 1">
                </div>
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s" style="position:relative; padding: 0; margin: 0;">
            <img src="<?php echo $native_path ?>/assets/images/cco21.jpg"/>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s" style="position:relative; padding: 0; margin: 0;">
          <img src="<?php echo $native_path ?>/assets/images/cco022.jpg"/>
        </div>
      </div>
    </div>
  </div>




   <div class="container-fluid footer">
      <div class="row">
        <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
           <div style="padding-top:100px; padding-bottom: 100px; color: #fff;">
              <p style="text-align: center; color: #fff !important">Fotografija: Marko Miščević<br/>
Styling: Ana Galić i Barbara Jazvić (Studio Onne)<br/>
Modeli: Monika G. i Pavla P. (Talia Model)<br/>
Kosa: Davor Hair & Soul<br/>
Makeup: Josipa Drpić<br/><br/>

Zahvaljujemo hotelu Amadria Park na ustupljenom prostoru za snimanje.<br/><br/>

              <img style="width:160px; height: auto; padding: 10px" src="<?php echo $native_path ?>/assets/images/logos.png" /><br/><img style="width:160px; height: auto; padding: 10px" src="<?php echo $native_path ?>/assets/images/telegram-studio.png" />
              </p>
           </div>
        </div>
      </div>
  </div>

  <!-- Scripts -->
  <script src="<?php echo $native_path ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $native_path ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/owl-carousel.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/animation.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/imagesloaded.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/custom.js"></script>

<script type="text/javascript">
  const images = ["<?php echo $native_path ?>/assets/images/cco06.jpg", "<?php echo $native_path ?>/assets/images/cco07.jpg", "<?php echo $native_path ?>/assets/images/cco08.jpg"];
let currentImageIndex = 0;
const imageElement = document.querySelector(".image-gallery img");

function updateImage() {
    const imageUrl = images[currentImageIndex];
    imageElement.src = imageUrl;
    imageElement.alt = `Slika ${currentImageIndex + 1}`;
}

function showNextImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    updateImage();
}

// Postavite interval za automatsko klizanje svakih 3 sekunde (3000 ms)
setInterval(showNextImage, 3000);

// Inicijalno postavljanje slike
updateImage();

const images2 = ["<?php echo $native_path ?>/assets/images/cco11.jpg", "<?php echo $native_path ?>/assets/images/cco12.jpg"];
let currentImageIndex2 = 0;
const imageElement2 = document.querySelector(".image-gallery2 img");

function updateImage2() {
    const imageUrl = images2[currentImageIndex2];
    imageElement2.src = imageUrl;
    imageElement2.alt = `Slika ${currentImageIndex2 + 4}`;
}

function showNextImage2() {
    currentImageIndex2 = (currentImageIndex2 + 1) % images2.length;
    updateImage2();
}

// Postavite interval za automatsko klizanje druge galerije svakih 4 sekunde (4000 ms)
setInterval(showNextImage2, 3000);

// Inicijalno postavljanje slike
updateImage2();

const images3 = ["<?php echo $native_path ?>/assets/images/cco17.jpg", "<?php echo $native_path ?>/assets/images/cco18.jpg"];
let currentImageIndex3 = 0;
const imageElement3 = document.querySelector(".image-gallery3 img");

function updateImage3() {
    const imageUrl = images3[currentImageIndex3];
    imageElement3.src = imageUrl;
    imageElement3.alt = `Slika ${currentImageIndex3 + 4}`;
}

function showNextImage3() {
    currentImageIndex3 = (currentImageIndex3 + 1) % images3.length;
    updateImage3();
}

// Postavite interval za automatsko klizanje druge galerije svakih 4 sekunde (4000 ms)
setInterval(showNextImage3, 3000);

// Inicijalno postavljanje slike
updateImage3();


const images4 = ["<?php echo $native_path ?>/assets/images/cco19.jpg", "<?php echo $native_path ?>/assets/images/cco20.jpg"];
let currentImageIndex4 = 0;
const imageElement4 = document.querySelector(".image-gallery4 img");

function updateImage4() {
    const imageUrl = images4[currentImageIndex4];
    imageElement4.src = imageUrl;
    imageElement4.alt = `Slika ${currentImageIndex4 + 4}`;
}

function showNextImage4() {
    currentImageIndex4 = (currentImageIndex4 + 1) % images4.length;
    updateImage4();
}

// Postavite interval za automatsko klizanje druge galerije svakih 4 sekunde (4000 ms)
setInterval(showNextImage4, 3000);

// Inicijalno postavljanje slike
updateImage4();
</script>

    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
