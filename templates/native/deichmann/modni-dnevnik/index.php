<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/deichmann/modni-dnevnik';
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
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
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



  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 align-self-center">
              <div class="left-content show-up header-text wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-10 offset-lg-1 text-center" style="opacity: 0.5;">
                    <h6><img src="<?php echo $native_path ?>/assets/images/logos.png" style="max-width: 300px;" /></h6>
                    <h2>Modni dnevnik s 10 kombinacija koje možete nositi <br/><span style="font-family: 'Hurricane', cursive !important; text-transform: lowercase !important;">od jutra do mraka</span></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div id="clanci" class="blog" style="background: #D9D9D9;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="sticky-top">
            <div class="tekst-gornji">
              <h3 style="padding-bottom:40px;">Super1 i Deichmann osmislili su editorijal koji će vam poslužiti kao <span style="font-family: 'Hurricane', cursive !important; ">šalabahter</span> na sve one dane kad je ujutro hladno, a tijekom dana toplo. </h3>
              <p>Jutra su prohladna, dani topli, izmjenjuju se sunce i kiša, magla i vedrina. Već smo hrabro zagazili u jesenske dane tijekom kojih se ponekad kao najteža stvar na svijetu čini odabrati kombinaciju koja će biti dostatna za cijeli dan - od tog hladnjikavog jutra do toplog popodneva. Zato smo u suradnji s Deichmannom pripremili modni editorijal s 10 kombinacija koje će vam poslužiti kao šalabahter za one dane kad je teško odlučiti je li prognoza za sandale ili čarape i mokasine.</p>
              <p>Osmislili smo pet odjevnih kombinacija za svaku prigodu - aktivno jutro, posao, druženje u gradu, večernji provod i spavanje. A svaku od njih izveli smo u dvije varijante - jednu za topliji sunčan dan i jednu za hladniji kišan dan. Svaka kombinacija sadrži neki komad koji joj se može oduzeti kako bi postala prikladnija za više temperature, ili dodati ako se trebamo zaštititi od hladnoće. U svakoj kombinaciji koristili smo i različite komade obuće iz Deichmannove ponude i tako na kraju dobili 10 različitih odjevnih kombinacija među kojima će svatko pronaći nešto za sebe.</p></div>
          </div>
        </div>
        <div class="col-lg-6" >
            <div class="slideshow-container">
              <!-- Images -->
              <div class="mySlides">
                <img src="<?php echo $native_path ?>/assets/images/ss1.jpg" alt="Image 1">
              </div>
              <div class="mySlides">
                <img src="<?php echo $native_path ?>/assets/images/ss2.jpg" alt="Image 2">
              </div>
              <div class="mySlides">
                <img src="<?php echo $native_path ?>/assets/images/ss3.jpg" alt="Image 3">
              </div>
              <div class="mySlides">
                <img src="<?php echo $native_path ?>/assets/images/ss4.jpg" alt="Image 4">
              </div>
            </div>

        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; background:#535D6B;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
            <div class="cijenemobile" style="position: absolute; bottom:0; left: 0; padding: 25px;"><p style="font-size: 13px; line-height:15px;">Tajice, 19,99€, H&M; top za vježbanje, 19,99€, H&M; tenisice Nike, 63,99€, Deichmann; čarape, 9,99€, H&M / Look 2: Tajice, 19,99€, H&M; sportski top dugih rukava Nike, 45,99€, Intersport; crne tenisice Adidas, 59,99€, Deichmann;  jakna,69,99€, Mango; šal, 14,99€, H&M; crna sportska torba Skechers, 29,99€, Deichmann; Naslonjač, 299€, Lesnina</p></div>
            <img src="<?php echo $native_path ?>/assets/images/deichmann01.jpg"/>
        </div>
        <div class="col-lg-6">
          <div class="sticky-top">
            <div class="tekst-gornji" style="padding-bottom:20px;"><p style="color: #fff;">Tijekom toplijih dana za vježbanje su dovoljne udobne tajice, kratak top i dobre tenisice, a ovo je jedan od najjednostavnijih lookova za prelazak u hladniju sezonu. Jednostavno mu dodamo toplu sportsku jaknu, možda i šal i kožnate tenisice u kojima možemo do teretane ili yoga studija čak i kad kiši.</p>
            <img src="<?php echo $native_path ?>/assets/images/sticker.png"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; background:#535D6B;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
          <div class="tekst-gornji" style="padding:0px;">
            <img src="<?php echo $native_path ?>/assets/images/deichmann02.jpg"/>
          </div>
          </div>
        </div>
        <div class="col-lg-6">
              <div class="cijenemobile" style="position: absolute; bottom:0; right: 0; padding: 25px;"><p style="font-size: 13px; line-height:15px;">Tajice, 19,99€, H&M; Top za vježbanje, 19,99€, H&M Tenisice Nike, 63,99€, Deichmann; Čarape, 9,99€, H&M</p></div>
              <img src="<?php echo $native_path ?>/assets/images/deichmann03.jpg"/>
              <img src="<?php echo $native_path ?>/assets/images/deichmann04.jpg"/>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; background:#535D6B;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
          <div class="tekst-gornji" style="padding:0px;">
            <img src="<?php echo $native_path ?>/assets/images/deichman05.jpeg"/>
          </div>
          </div>
        </div>
        <div class="col-lg-6">
              <div class="cijenemobile" style="position: absolute; bottom:0; right: 0; padding: 25px; width:50%; text-align: right;"><p  style="font-size: 13px; line-height:15px; color:#fff; ">Široke hlače, 49,95€, Zara; Sako bez rukava, 59,95€, Zara; Torba, 19,99€, Deichmann; Crvene sandale, 29,99€, Deichmann; Naušnice, 14,99€, H&M; Sunčane naočale Saint Laurent, 277,50€, optika Anda; Body, 27,99€, H&M</p></div>
              <img src="<?php echo $native_path ?>/assets/images/deichman06.jpg"/>
              <img src="<?php echo $native_path ?>/assets/images/deichman07.jpg"/>
              <img src="<?php echo $native_path ?>/assets/images/deichman08.jpg"/>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; background:#535D6B;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
              <div class="cijenemobile" style="position: absolute; bottom:0; left: 0; padding: 25px; width: 50%"><p style="font-size: 13px; line-height:15px; color: #fff">Mokasine, 29,99€, Deichmann; Bež torbica, 19,99€, Deichmann; Minica/kratke hlačice, 22,95€, Zara; Bijela košulja s mašnom, 34,99€, H&M; Bež sako, 39,95€, Zara; Srebrne naušnice, 14,99€, H&M</p></div>
              <img src="<?php echo $native_path ?>/assets/images/deichman09.jpg"/>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; background:#535D6B;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
              <div class="cijenemobile" style="position: absolute; bottom:0; left: 0; padding: 25px; width: 50%"><p style="font-size: 13px; line-height:15px;">Traperice , 35,99€, Mango; kožna jakna, 499,90€, Mona; vesta, 49,99€, H&M; balerinke, 31,46€, Deichmann; naušnice, 7,99€, H&M; Barska stolica ratan, 79,50€, Lesnina</p></div>
              <div class="slideshow-kontejner">
              <!-- Images -->
              <div class="slideovi">
                <img src="<?php echo $native_path ?>/assets/images/ss6.jpg" alt="Image 1">
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding-top:0px; background:#535D6B;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
            <div class="cijenemobile" style="position: absolute; bottom:0; left: 0; padding: 25px;"><p style="font-size: 13px; line-height:15px; color:#fff;">Traperice, 35,99€, Mango; Crna jakna, 69,99€, Mango; Crne ravne slingback cipele, 24,99€, Deichmann; Torba, 19,99€, Deichmann; Zlatne naušnice, 7,99€,H&M</p></div>
            <img src="<?php echo $native_path ?>/assets/images/deichman10.jpg"/>
        </div>
        <div class="col-lg-6">
          <div class="sticky-top" style="padding:0; margin:0">
            <div class="tekst-gornji" style="padding:0; padding-bottom:0px;"><p style="color: #fff; padding: 40px;">Za druženje u gradu uvijek dobro funkcioniraju kitten heel slingback cipele ili natikače u kojima nije teško hodati, a podižu svaki look. Odlično funkcioniraju za sve opuštene gradske kombinacije uz traperice dok gornji dio možemo mijenjati ovisno o vremenskoj prognozi.</p>
            <img src="<?php echo $native_path ?>/assets/images/deichman11.jpg" style="padding:0; margin: 0; " />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; background:#000;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
            <img src="<?php echo $native_path ?>/assets/images/deichman12.jpg"/>
                      <p class="cijenemobile" style="position: absolute; left:0; bottom:0; padding:35px; font-size: 13px; line-height:15px; color: #fff">Crna haljina, 99,99€, Mango; crne sandale, 29,99€, Deichmann; naušnice, 7,99€, H&M</p>
        </div>
        <div class="col-lg-6">
          <div class="sticky-top" style="padding:0; margin:0">
            <div class="tekst-gornji"><p style="color: #fff;">Malo što je seksepilnije od elegantne sandale s tankim remenčićima i zato uvijek tako dobro funkcioniraju u večernjim kombinacijama. Kad zahladi rado ih mijenjamo za klasične zatvorene salonke ili eventualno slingback model. Mini haljina dobro će funkcionirati i sa zatvorenim i otvorenim modelom cipela, dok dulji modeli bolje funkcioniraju sa sandalama, no čim zahladi možete ih zamijeniti za dobar špičasti par cipela na petu. </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; background:#535D6B;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
          <div class="tekst-gornji" style="padding:0px;">
            <img src="<?php echo $native_path ?>/assets/images/deichman14.jpg"/>
          </div>
          </div>
        </div>
        <div class="col-lg-6">
              <div class="cijenemobile" style="position: absolute; top:0; right: 0; padding: 25px;"><p  style="font-size: 13px; line-height:15px;color: #fff;">Bež haljina Mango Capsule, 240€, Mango; Cipele na petu, 17,49€, Deichmann; Naušnice, 7,99€, H&M</p></div>
              <img src="<?php echo $native_path ?>/assets/images/deichman13.jpg"/>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; background:#535D6B;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="sticky-top">
            <div class="tekst-gornji" style="padding-bottom:20px;"><p style="color: #fff;">Kratke dvodjelne pidžame i udobne plutene natikače zimi mijenjamo za dugačke dvodjelne pidžame i zatvorene vunene papuče. Još ako su k tome obložene krznom kao ove iz Deichmanna, spremni ste za jednu dugu zimu u toplini svog doma.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
            <div class="cijenemobile" style="position: absolute; bottom:0; right: 0; padding: 25px;"><p style="font-size: 13px; line-height:15px;color: #fff;">Plava pidžama, 39,99€, H&M; Top, 12,99, Women’s secret; Papuče, 19,99€, Deichmann: Naslonjač, 663,48€, Lesnina</p></div>
            <img src="<?php echo $native_path ?>/assets/images/deichman15.jpg"/>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; background:#535D6B;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
              <div class="cijenemobile" style="position: absolute; bottom:0; right: 0; padding: 25px; width: 50%"><p style="font-size: 13px; line-height:15px; text-align: right; color: #fff;">Prugasta pidžama, 34,99€, H&M; Top, 12,99€, Women secret; Papuče s krznom, 17,99€, Deichmann; Naslonjač, 663,48€, Lesnina</p></div>
              <img src="<?php echo $native_path ?>/assets/images/deichman16.jpg"/>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; background:#535D6B;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/deichman17.jpg"/>
        </div>
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/deichman18.jpg"/>
        </div>
      </div>
    </div>
  </div>


   <div class="container-fluid" style="padding-left:0 !important; padding-right:0 !important; position: relative; background:#000;">
      <div class="row">
        <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
           <div style="padding-top:100px; padding-bottom: 100px; color: #fff;">
              <p style="text-align: center; color: #fff !important">Fotografija: Marko Miščević<br/>
                  Model: Irina Garcia Villanueva (Talia Model)<br/>
                  Styling: Studio Onne<br/>
                  Makeup: Josipa Drpić<br/>
                  Kosa: Davor Hair & Soul<br/>
                  Grafičko oblikovanje:<br/>TMG Studio x Reset<br/><br/>
              <img style="width:160px; height: auto; padding: 10px" src="<?php echo $native_path ?>/assets/images/zalando-logo.png" /><img style="width:160px; height: auto; padding: 10px" src="<?php echo $native_path ?>/assets/images/telegram-studio.png" />
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

<script>
  // JavaScript to control the slideshow
  var slideIndex = 0;

  function showSlides() {
    var slides = document.getElementsByClassName("mySlides");
    for (var i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds (2000 milliseconds)
  }

  showSlides(); // Start the slideshow
</script>

    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
