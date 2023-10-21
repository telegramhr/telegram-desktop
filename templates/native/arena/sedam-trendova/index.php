<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/arena/sedam-trendova';
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
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo $native_path ?>/assets/images/favicon.png">
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
                  <div class="col-lg-8">
                  </div>
                  <div class="col-lg-4">
                    <img src="<?php echo $native_path ?>/assets/images/logos.png">
                    <img src="<?php echo $native_path ?>/assets/images/hero-tekst.svg" style="padding:30px;" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="main-banner mobilnihero mobilecokolada">
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
                    <img src="<?php echo $native_path ?>/assets/images/logos.png">
                    <img src="<?php echo $native_path ?>/assets/images/hero-tekst-mob.svg" style="padding:30px;" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="background: #341415;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-1">
            <h3>Inspirirani moćnim komadima iz dizajnerskih kolekcija koje smo vidjeli na tjednima mode u New Yorku, Londonu, Milanu i Parizu, u ponudi Arena Centra pronašli smo savršene komade i pretočili ih u neizostavne kombinacije za jesen.</h3>
        </div>
        <div class="col-lg-5 offset-lg-1" >

        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style=" padding:0; padding-top:0px; padding-bottom:0px; margin: 0; background:#752329;">
    <div class="container-fluid" style="padding:0">
      <div class="row">
        <div class="col-lg-8" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
            <div class="tekst-gornji" style="padding-bottom:20px;">
                <div class="row">
                  <div class="col-lg-2">
                  </div>
                  <div class="col-lg-4">
                    <img src="<?php echo $native_path ?>/assets/images/crveno.svg" style="padding-bottom:20px; padding-top: 20px;" />
                  </div>
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-5">
                    <p style="padding:0; margin:0;">Ferragamo, Tory Burch, Bottega Veneta i Hermes samo su neki od brendova koji su za ovu jesen najavili dominaciju moćne crvene. Za svakodnevno nošenje odlično funkcionira u akcentima dok je u posebnijim prigodama slobodno možemo nositi od glave do pete.<br/><br/>

                      Upravo smo je na taj način stilizirali u ovom editorijalu. Raskošna kožnata suknja u kombinaciji s dobrim puloverom, kaputom i ubojitim cipelama i još k tome u crvenim tonovima - jednostavno je nepogrešiva.
                    </p>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" style="position:relative; padding: 0; margin: 0;">
            <img src="<?php echo $native_path ?>/assets/images/pic01.png"/>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px; background:#752329;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
            <div class="cijenemobile" style="position: absolute; bottom:0; right: 0; padding: 25px; width:50%;"><p style="font-size: 13px; line-height:15px;">Kaput, 199,99€, Mango, kožna suknja Philosophy di Lorenzo Serafini, 325€, Heraldi for Men and Women, dolčevita Twinset Actitude, 175€, XYZ Premium Fashion Store, cipele na petu, 96€, Aldo, rukavice, 39,99€, Peek & Cloppenburg, sunčane naočale Prada, 410€, optika Anda</p></div>
            <img src="<?php echo $native_path ?>/assets/images/arena02.jpg"/>
            <img src="<?php echo $native_path ?>/assets/images/arena03.jpg"/>
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
            <div class="tekst-gornji" style="padding:0;">
               <img src="<?php echo $native_path ?>/assets/images/arena01.jpg"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px; background:#341415;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s" style="position:relative; padding: 0; margin: 0;">
            <img src="<?php echo $native_path ?>/assets/images/arena04.jpg"/>
        </div>
        <div class="col-lg-2" style="position:relative; padding: 0; margin: 0;">
          <img src="<?php echo $native_path ?>/assets/images/devedesete.svg" class="devedesete" />
        </div>
        <div class="col-lg-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s" style="position:relative; padding: 0; margin: 0;">
          <img src="<?php echo $native_path ?>/assets/images/arena05.jpg"/>
        </div>
      </div>
    </div>
  </div>


 <div id="clanci" class="blog" style="background: #341415;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/arena06.jpg" style="margin-top: 15px;" />
        </div>
        <div class="col-lg-4" >
            <p style=" padding-top:30px; padding-bottom:30px; border-top: 1px solid rgba(255,255,255,0.5); border-bottom:1px solid rgba(255,255,255,0.5); margin-bottom:30px;">Jednostavne siluete, predimenzionirani odjevni predmeti i minimalne boje odlike su stila devedesetih koje vidimo u jesenskim kolekcijama za 2023. Sjajno funkcioniraju u svim prigodama od dnevnih opuštenih s trapericama i košuljama do večernjih u obliku seksepilnih slip haljina.<br/><br/>

            Ove jeseni trend devedesetih možete nositi kroz crno-bijele kombinacije, minimalističke modne dodatke i jednostavne, ali efektne komade poput ove male crne haljine.
          </p>
        </div>
        <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/arena07.jpg" style="margin-top: 15px;" />
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px; background:#752329;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
            <div class="cijenemobile" style="position: absolute; bottom:0; right: 0; padding: 25px; width:50%;"><p style="font-size: 13px; line-height:15px;">Kožnata minica, 89,99€, Reserved, dolčevita, 49,99€, Sportina, haljina/prsluk Victoria Beckham, 830€, Heraldi for Men and Women, torba Seidenfelt Manufaktur, Peek & Cloppenburg, cipele Nine West, 88€, Kicks and Heelz, sunčane naočale s lančićem Chanel, 540€, optika Anda</p></div>
            <img src="<?php echo $native_path ?>/assets/images/arena08.jpg"/>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px; background:#752329; margin-bottom: 0;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center" style="position:relative; padding: 0; margin: 0; margin-top: 50px; margin-bottom:50px;">
            <img src="<?php echo $native_path ?>/assets/images/cokoladno-smedja.svg" class="desktopcokolada" style="padding:20px; max-width: 600px;" />
            <img src="<?php echo $native_path ?>/assets/images/cokoladno-smedja-mobile.svg" class="mobilecokolada" style="padding:40px; padding-bottom:0px; padding-top:0px;" />
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
            <div class="tekst-gornji" style="padding:0;margin: 0;">
                <p class="scrtom">Čokoladna nijansa smeđe boje još je jedan povratnički trend iz devedesetih koji smo vidjeli u nizu kolekcija za jesen/zimu 2023./2024., od Prade do Guccija. Smeđa je ove sezone zapravo neutralna nijansa i kao takvu smo je i kombinirali.<br/><br/>

                Odabrali smo smeđu slip haljinu i dobar jesenski sako koji možete nositi i u nizu drugih kombinacija. S time smo spojili mokasine sa smeđim detaljima koje odlično kontriraju bijelim čarapama te, za ovu sezonu nezaobilaznu smeđu torbu.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0; margin-bottom: 50px;">
          <div class="slideshow-container">
              <!-- Images -->
              <div class="mySlides">
                <img src="<?php echo $native_path ?>/assets/images/arena09.jpg" alt="Image 1">
              </div>
              <div class="mySlides">
                <img src="<?php echo $native_path ?>/assets/images/arena10.jpg" alt="Image 2">
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px; background:#752329;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
            <div class="cijenemobile" style="position: absolute; bottom:0; left: 0; padding: 25px; width:50%;"><p style="font-size: 13px; line-height:15px;">Slip haljina Joseph, 640€, Heraldi for Men and Women, sako, 79,99€, Mango, cipele Sam Edelman, 145€, Kicks and Heelz, torba Longchamp, 315€, XYZ Premium Fashion Store, torba Jil Sander, 968,88€, Heraldi for Men and Women, sunčane naočale Gucci (prugaste), 850€, optika Anda, sunčane naočale Saint Laurent, 420€, optika Anda</p></div>
            <img src="<?php echo $native_path ?>/assets/images/arena11.png"/>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px; background:#341415;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1" style="position:relative; padding: 0; margin: 0;">
        </div>
        <div class="col-lg-4" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
            <div class="tekst-gornji" style="padding-bottom:20px;">
                    <img src="<?php echo $native_path ?>/assets/images/francuski-chic.svg" style="padding-bottom:40px;" />
                    <p style="padding:0; margin:0;">Ferragamo, Tory Burch, Bottega Veneta i Hermes samo su neki od brendova koji su za ovu jesen najavili dominaciju moćne crvene. Za svakodnevno nošenje odlično funkcionira u akcentima dok je u posebnijim prigodama slobodno možemo nositi od glave do pete.<br/><br/>

                      Upravo smo je na taj način stilizirali u ovom editorijalu. Raskošna kožnata suknja u kombinaciji s dobrim puloverom, kaputom i ubojitim cipelama i još k tome u crvenim tonovima - jednostavno je nepogrešiva.
                    </p>
            </div>
          </div>
        </div>
        <div class="col-lg-1" style="position:relative; padding: 0; margin: 0;">
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
            <img src="<?php echo $native_path ?>/assets/images/arena12.jpg"/>
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px; background:#341415;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
            <div class="cijenemobile" style="position: absolute; bottom:0; right: 0; padding: 25px; width:50%;"><p style="font-size: 13px; line-height:15px;">Traperice, 110€, Levi’s, prugasta majica, 25,99€, Reserved, kaput, 399,90€, Tommy Hilfiger, cipele Nine West, 99€, Kicks and Heelz, torba Jil Sander, 1670€, Heraldi for Men and Women, francuska kapa, 12,99€, Mohito, sunčane naočale Chanel, 530€, optika Anda</p></div>
            <img src="<?php echo $native_path ?>/assets/images/arena14.png"/>
            <img src="<?php echo $native_path ?>/assets/images/arena15.png"/>
            <img src="<?php echo $native_path ?>/assets/images/arena16.png"/>
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
            <div class="tekst-gornji" style="padding:0;">
               <img src="<?php echo $native_path ?>/assets/images/arena13.png"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


 <div id="clanci" class="blog" style="background: #752329;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3  wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/arena18.png" style="margin-top: 15px; opacity: 0.4;" />
        </div>
        <div class="col-lg-3  wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.2s">
            <img src="<?php echo $native_path ?>/assets/images/arena17.png?v=2" style="margin-top: 15px;" />
        </div>
        <div class="col-lg-3  wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/arena18.png" style="margin-top: 15px;" />
        </div>
        <div class="col-lg-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
            <img src="<?php echo $native_path ?>/assets/images/pjescani-sat.svg" style="padding: 50px;" />
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px; background:#752329;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
              <div class="image-gallery2">
                    <img src="<?php echo $native_path ?>/assets/images/arena19.jpg" alt="Slika 3">
                </div>

        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px; background:#752329;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1" style="position:relative; padding: 0; margin: 0;">
        </div>
        <div class="col-lg-4" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
            <div class="tekst-gornji" style="padding-bottom:20px;">
                    <p style="padding:0; margin:0;">Silueta pješčanog sata ove se jeseni vraća na velika vrata. Naglašen struk u svojim su kolekcijama za sezonu najavili Max Mara, Alaïa, Schiaparelli i Versace. Neki nam sugeriraju elaborirane odjevne predmete krojene tako da naglašavaju struk dok je drugima dovoljan tek dobar remen koji će naglasiti siluetu.
                    <br/><br/>
                    Mi smo u ovom slučaju odabrali statement sivo odijelo čiji je korzet bez rukava i s naglašenim strukom zvijezda ove kombinacije. Spojili smo ga s jednostavnom crnom torbom i upečatljivim crnim natikačama koje smo pronašli u ponudi Arena Centra.
                    </p>
                    <div class="cijenemobile"><p style="font-size: 13px; line-height:15px; padding: 0;">Hlače, 35,99€, Reserved, top, 32,99€, Reserved, sandale, 69,99€, Mango, torba Valentino, 129,99€, Peek & Cloppenburg, naušnice, 19,99€, Mango, sunčane naočale Gucci, 500€, optika Anda</p></div>
            </div>
          </div>
        </div>
        <div class="col-lg-1" style="position:relative; padding: 0; margin: 0;">
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
          <img src="<?php echo $native_path ?>/assets/images/arena20.png"/>
            <img src="<?php echo $native_path ?>/assets/images/arena21.png"/>
        </div>
      </div>
    </div>
  </div>


 <div id="clanci" class="blog" style="background: #341415; padding-top:0px; padding-bottom:0px; padding: 0; margin: 0; ">
    <div class="container-fluid" style="margin: 0; padding:0">
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/arena22.png"/>
        </div>
        <div class="col-lg-4">
          <div class="sticky-top">
            <div class="tekst-gornji" style="padding-bottom:20px;">
            <p style="padding-top:30px; padding-bottom:30px; border-top: 1px solid rgba(255,255,255,0.5); border-bottom:1px solid rgba(255,255,255,0.5); margin-bottom:30px;"><img src="<?php echo $native_path ?>/assets/images/povratak.svg"/>
          </p>
                      </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/arena23.png"/>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px; background:#341415;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
            <img src="<?php echo $native_path ?>/assets/images/arena24.png" alt="Image 1">
                    <div class="cijenemobiledva"><p style="font-size: 13px; line-height:15px; padding: 0; text-align:center; width:50%; margin:30px auto;">Haljina, 69,99€, Mango, jakna Philosophy di Lorenzo Serafini, 925€, Heraldi for Men and Women, torba Guess, 140€, Fashion&Friends, čipkaste čarape, 9,99€, Mohito, sandale, 39,99€, Mango, sunčane naočale Ray-Ban Wayfarer, 205€, optika Anda</p></div>
        </div>
      </div>
    </div>
  </div>


    <div id="clanci" class="blog" style="background:#341415;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1" style="position:relative; padding: 0; margin: 0;">
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
              <div class="image-gallery">
                    <img src="<?php echo $native_path ?>/assets/images/arena25.png" alt="Slika 1">
                </div>
        </div>
        <div class="col-lg-5" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
            <div class="tekst-gornji" style="padding-bottom:20px;">
                    <p style="padding:0; margin:0;">Balmain, Christopher Kane i Brandon Maxwell najavili su povratak polarizirajućeg trenda 2010-ih, pepluma. Volan koji se širi od struka prema bokovima ove je sezone redefiniran te poprima veće dimenzije, dolazi na vrhu visokog struka pencil suknje ili se pak simetrično širi u oba smjera odjevnog predmeta.<br/><br/>

                      Stilistice iz studija Onne zaslužne za styling u ovom editorijalu, ove ga sezone ne vide u preppy kombinacijama u stilu 2010-ih, već u spoju odvažnih komada s kojima on više nije glavna zvijezda kombinacije.
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px; background:#752329;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
            <div class="tekst-gornji" style="padding-bottom:20px;">
                <div class="row">
                  <div class="col-lg-6">
                  </div>
                  <div class="col-lg-6">
                    <p style="text-align:right;"><img src="<?php echo $native_path ?>/assets/images/prozirna-drskost.svg" style="max-width: 300px;"></p>
                    <p style="padding:0; margin:0;">Miuccia Prada za svoj brend Miu Miu ove je jeseni kreirala niz prozirnih suknji koje su bile hit i prije nego su došle u prodaju. Hrabri će ove suknje nositi samo uz donje rublje dok će se drugi odlučiti za kakvu podsuknju ili pak predimenzionirani pulover preko cijele kombinacije.<br/><br/>

Mi smo ovaj put odlučili biti hrabri te smo nježnu prozirnu suknju kombinirali s moćnim kožnatim komadima i zaokružili sve s dobrom metalik srebrnom torbom. Sve komade iz editorijala pronađite u Arena Centru.

                    </p>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4" style="position:relative; padding: 0; margin: 0;">
            <img src="<?php echo $native_path ?>/assets/images/arena28.png"/>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px; background:#752329;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
            <div class="cijenemobile" style="position: absolute; bottom:0; right: 0; padding: 25px; width:50%;"><p style="font-size: 13px; line-height:15px; color: #000;">Suknja s gaćicama, 39,99€, Mango, majica s prozirnim rukavima, 17,99€, Mohito, čizme, 165€, Aldo, sako, 39,99€, Mohito, srebrna torba Coach, 425€, XYZ Premium Fashion Store, sunčane naočale Saint Laurent, 495€, optika Anda
</p></div>
            <img src="<?php echo $native_path ?>/assets/images/arena30.png"/>
            <img src="<?php echo $native_path ?>/assets/images/arena31.png"/>
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top">
            <div class="tekst-gornji" style="padding:0;">
               <img src="<?php echo $native_path ?>/assets/images/arena29.png"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


   <div class="container-fluid" style="padding-left:0 !important; padding-right:0 !important; position: relative; background:#752329;">
      <div class="row">
        <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
           <div style="padding-top:100px; padding-bottom: 100px; color: #fff;">
              <p style="text-align: center; color: #fff !important">Fotografija: Marko Miščević<br/>
                  Model: Laura Bračun<br/>
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
<script type="text/javascript">
  const images = ["<?php echo $native_path ?>/assets/images/arena25.png", "<?php echo $native_path ?>/assets/images/arena26.png"];
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

const images2 = ["<?php echo $native_path ?>/assets/images/arena19.jpg", "<?php echo $native_path ?>/assets/images/arena27.jpg"];
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
</script>

    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
