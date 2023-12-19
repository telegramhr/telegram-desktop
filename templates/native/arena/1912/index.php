<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/arena/1912';
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
    <link href="https://fonts.googleapis.com/css2?family=Kalnia&display=swap" rel="stylesheet">
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



  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 align-self-center">
              <div class="left-content show-up header-text wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-6">
                  </div>
                  <div class="col-lg-6">
                    <img src="<?php echo $native_path ?>/assets/images/logos.png" style="max-width:280px; height: auto;" />
                    <h2>Od Adventa u gradu do romantičnog dočeka Nove godine u famoznim blistavim kombinacijama</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<div id="infografike" class="our-portfolio section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12"  style="padding-bottom: 0px !important;">
          <div class="loop owl-carousel">
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                   <img src="<?php echo $native_path ?>/assets/images/arena01.png"/>
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                   <img src="<?php echo $native_path ?>/assets/images/arena02.png"/>
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                   <img src="<?php echo $native_path ?>/assets/images/arena03.png"/>
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                   <img src="<?php echo $native_path ?>/assets/images/arena04.png"/>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

 <div id="clanci" class="blog" style="background: #410A0A; padding-top: 10px; padding-bottom: 30px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/arena05.png" style="margin-top:15px; margin-bottom: 0px;" />
        </div>
        <div class="col-lg-4" >
          <div class="sticky-top">
            <p style=" padding-top:30px; padding-bottom:30px; border-top: 1px solid #75481E; border-bottom:1px solid #75481E; margin-bottom:30px;">Vođeni svjetlucavim akcentima blagdanske sezone, u suradnji s Arena Centrom osmislili smo četiri savršene kombinacije za svaku prazničnu prigodu<br/><br/>Prosinac je najuzbudljiviji mjesec tijekom kojeg dovršavamo posljednje obaveze u godini, kupujemo poklone i jurimo s uredskog tuluma na Advent u gradu, s obiteljskog blagdanskog ručka na blagdansku proslavu s prijateljima. A ne bi li sve to bilo lakše kad još ne bismo trebali razmišljati što pritom odjenuti? U ponudi Arena Centra pronašli smo komade za baš svaku prigodu tijekom ovog najblistavijeg mjeseca i pretvorili ih u četiri famozne kombinacije koje će vam poslužiti kao svojevrsni šalabahter za blagdanski chic.
          </p>
          </div>
        </div>
        <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/arena06.png" style="margin-top:15px; margin-bottom: 0px;" />
        </div>
      </div>
    </div>
  </div>



  <div class="main-banner" style="background-image: url(<?php echo $native_path ?>/assets/images/arena07.png) !important;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 align-self-center">
              <div class="left-content show-up header-text wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-6">
                  </div>
                  <div class="col-lg-6">
                    <h1>#1 OBITELJSKI RUČAK</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 <div id="clanci" class="blog" style="background: #410A0A; padding-top: 0px; padding-bottom: 0px; margin:0 !important">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img src="<?php echo $native_path ?>/assets/images/arena08.jpg"  />
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
          <img src="<?php echo $native_path ?>/assets/images/arena08a.jpg"  />
        </div>
      </div>
    </div>
  </div>


 <div id="clanci" class="blog" style="background: #410A0A; padding-top: 10px; padding-bottom: 30px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4" >
          <div class="sticky-top">
            <p style=" padding-top:30px; padding-bottom:30px; border-top: 1px solid #75481E; border-bottom:1px solid #75481E; margin-bottom:30px;">Obiteljska druženja tijekom blagdana obično uključuju vrtlog radosnih emocija, puno smijeha i aktivnosti poput zajedničkog kićenja bora ili igranja s klincima. Pritom nam je važno da nam je udobno, no svakako volimo da kombinacija i dalje prenosi blagdanski duh i pozitivnu energiju.<br/><br/>U ovom smo slučaju zato odabrali jednu moćnu kolorističku kombinaciju ljubičaste haljine, ružičastog kaputa i crvenih cipela. Za dodatni moment sjaja čitavom looku možete dodati i modni dodatak poput nepogrešive šljokičaste torbice.
          </p>
          </div>
        </div>
        <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/arena08.png" style="margin-top: 15px; " />
        </div>
        <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
            <img src="<?php echo $native_path ?>/assets/images/arena09.png" style="margin-top: 15px; " />
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding:0; padding-top:0px; padding-bottom:0px; background:#752329; margin: 0 !important;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
            <div class="cijenemobile" style="position: absolute; bottom:0; left: 0; padding: 25px; width:50%;"><p style="font-size: 13px; line-height:15px;">Ljubičasta haljina Philosophy di Lorenzo Serafini, 610€, Heraldi for Men and Women, kaput, 174,30€, comma, crvene lakirane sandale, 89€, Aldo, naušnice, 19,99€, Mango, šljokičasta pismo torbica, 29,99€, Mohito, baršun sandale, 175€, Guess</p></div>
            <img src="<?php echo $native_path ?>/assets/images/arena11.png"/>
        </div>
      </div>
    </div>
  </div>



  <div class="main-banner" style="background-image: url(<?php echo $native_path ?>/assets/images/arena12.png) !important;  ">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 align-self-center">
              <div class="left-content show-up header-text wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-5">
                    <h1>#2 ADVENT U GRADU</h1>
                  </div>
                  <div class="col-lg-7">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



 <div id="clanci" class="blog" style="background: #410A0A; padding-top: 0px; padding-bottom: 0px; margin:0 !important">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img src="<?php echo $native_path ?>/assets/images/arenagrupa.jpg"  />
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
          <img src="<?php echo $native_path ?>/assets/images/arenagrupaa.jpg"  />
        </div>
      </div>
    </div>
  </div>


 <div id="clanci" class="blog" style="background: #410A0A; padding-top: 10px; padding-bottom: 30px; margin:0 !important">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/arena-ad-1.png"/>
        </div>
        <div class="col-lg-4" >
          <div class="sticky-top">
            <p style=" padding-top:30px; padding-bottom:30px; border-top: 1px solid #75481E; border-bottom:1px solid #75481E; margin-bottom:30px;">Zagrebački Advent ove je godine opet svrstan među najbolje u Europi. Svojim svjetlima i ponudom jednostavno nas zove na ulice, na druženje s prijateljima i smijeh do kasno u noć. Kao i kod obiteljskih druženja, na Adventu u gradu važno nam je da nam je udobno - i toplo.<br/><br/>Zato smo u ovom slučaju odabrali kombinaciju srebrnih hlača, udobnih, ali vrlo stylish balerinki te slojeviti gornji dio koji grade košulja, vesta i kaput. Ako cijeloj kombinaciji ipak želite dodati dozu glamura, balerinke uvijek možete zamijeniti visokim petama.
          </p>
          </div>
        </div>
        <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/arena-ad-2.png"/>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px; background:#752329;">
    <div class="container-fluid" style="margin:0; padding:0">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
            <div class="cijenemobile" style="position: absolute; bottom:0; left: 0; padding: 25px; width:50%;"><p style="font-size: 13px; line-height:15px;">Košulja s mašnom, 29,99€, Reserved, srebrne hlače, 59,99€, Peek & Cloppenburg, vesta, 357€, Pinko, naušnice Jen Ceballos x Mango, 19,99€, Mango, torba Kate Spade, 575€, XYZ Premium Fashion Store, kaput, 199,99€, Mango, balerinke, 104,30€, Kicks and Heelz, čarape Tommy Hilfiger, 11,99€, Mass, srebrne cipele na petu, 35,99€, Reserved, šljokičasta torba, 29,99€, Mass</p></div>
            <img src="<?php echo $native_path ?>/assets/images/arenacipele.png"/>
        </div>
      </div>
    </div>
  </div>


  <div class="main-banner ured" style="background-image: url(<?php echo $native_path ?>/assets/images/ured.png) !important; ">
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
                    <h1>#3 UREDSKI PARTY</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<div id="infografike" class="our-portfolio section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12"  style="padding-bottom: 0px !important;">
          <div class="loop owl-carousel">
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                   <img src="<?php echo $native_path ?>/assets/images/ured01.png"/>
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                   <img src="<?php echo $native_path ?>/assets/images/ured02.png"/>
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                   <img src="<?php echo $native_path ?>/assets/images/ured03.png"/>
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                   <img src="<?php echo $native_path ?>/assets/images/ured04.png"/>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>


 <div id="clanci" class="blog" style="background: #410A0A; padding-top: 10px; padding-bottom: 30px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6" >
          <div class="sticky-top">
            <p style=" padding-top:30px; padding-bottom:30px; border-top: 1px solid #75481E; border-bottom:1px solid #75481E; margin-bottom:30px;">Osim ako nemaju dress code, uredski tulumi nerijetko rezultiraju dosadnim kombinacijama pa zašto ove godine cijelom događaju ne bismo dodali više sjaja? Zamislite da ste Anne Hathaway u Vrag nosi Pradu i u uredu se pojavite u moćnim kožnatim čizmama s megapopularnom kitten heel petom.<br/><br/>Dodajte im moćne suknja-hlače i kaputić u stilu Chanela čime ćete čitavom slavljeničkom looku dati malu dozu tog uredskog, smart chica. Sve zaokružite svjetlucavim dodatcima i imat ćete najbolje izdanje u uredu.
          </p>
          </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/ured05.png" style="margin-top: 15px; margin-left: 0; margin-right: 0;" />
        </div>
      </div>
    </div>
  </div>




 <div id="clanci" class="blog" style="background: #410A0A; padding-top: 0px; padding-bottom: 0px; margin:0 !important">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img src="<?php echo $native_path ?>/assets/images/uredcipele.jpg"  />
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
          <img src="<?php echo $native_path ?>/assets/images/uredcipelea.jpg"  />
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px; background:#752329;">
    <div class="container-fluid" style="margin:0; padding:0">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
            <div class="cijenemobile" style="position: absolute; bottom:0; left: 0; padding: 25px; width:50%;"><p style="font-size: 13px; line-height:15px;">Crne visoke čizme Proenza Schouler, 920€, Heraldi for Men and Women, suknja/kratke hlačice, 25,99€, Reserved, kratki sako, 45,99€, Reserved, zlatna ogrlica, 9,99, Mohito, zlatna čvrsta ogrlica, privatno vlasništvo, crni top s perjem, 79,99€, Reserved, aušnice, 15€, Aldo, crno srebrna torbica, 49,99€, Reserved, crne cipele na petu sa zakovicama Kurt Geiger, 190€, XYZ Premium Fashion Store</p></div>
            <img src="<?php echo $native_path ?>/assets/images/uredcijene.png"/>
        </div>
      </div>
    </div>
  </div>



  <div class="main-banner" style="background-image: url(<?php echo $native_path ?>/assets/images/docek.png) !important; ">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 align-self-center">
              <div class="left-content show-up header-text wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-4">
                    <h1>#4 DOČEK NOVE GODINE</h1>
                  </div>
                  <div class="col-lg-8">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



 <div id="clanci" class="blog" style="background: #410A0A; padding-top: 0px; padding-bottom: 0px; margin:0 !important">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img src="<?php echo $native_path ?>/assets/images/docekgrupa.jpg"  />
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
          <img src="<?php echo $native_path ?>/assets/images/docekgrupaa.jpg"  />
        </div>
      </div>
    </div>
  </div>



 <div id="clanci" class="blog" style="background: #410A0A; padding-top: 10px; padding-bottom: 30px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/docek01.png" style="margin-top:15px; margin-bottom: 0px;" />
        </div>
        <div class="col-lg-4" >
          <div class="sticky-top">
            <p style=" padding-top:30px; padding-bottom:30px; border-top: 1px solid #75481E; border-bottom:1px solid #75481E; margin-bottom:30px;">Od pritiska koje donosi pitanje “Gdje ćeš za Novu?” svi nedvojbeno bježimo. Ulice će vrvjeti fanovima vatrometa, klubovi su bukirani mjesecima unaprijed, stolovi u restoranima popunjeni. No, ako se nas pita, u moćnoj haljini poput ove s potpisom brenda Simkhai možemo ostati i kod kuće. Kombinirali smo je s jednako moćnim gležnjačama s motivom kamelije.<br/><br/>Cijeli ovaj zlatno-crni look zapravo možemo nositi i tijekom brojnih drugih prigoda nakon Nove godine što ga čini još poželjnijim. Sve komade iz editorijala pronađite u Arena Centru.
          </p>
          </div>
        </div>
        <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/docek02.png" style="margin-top:15px; margin-bottom: 0px;" />
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0px; padding-bottom:0px; background:#752329;">
    <div class="container-fluid" style="margin:0; padding:0">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
            <div class="cijenemobile" style="position: absolute; bottom:0; left: 0; padding: 25px; width:50%;"><p style="font-size: 13px; line-height:15px;">Crna haljina Simkhai, 1025€, Heraldi for Men and Women, crne gležnjače sa zlatnim detaljem, 69,99€, Reserved, šljokasta smeđa pismo torba Capsule Mango, 60€, Mango, zlatne naušnice, 12€, Aldo, lakirane platforme, 149€, Kicks and Heelz</p></div>
            <img src="<?php echo $native_path ?>/assets/images/docekcijene.png"/>
        </div>
      </div>
    </div>
  </div>


 <div id="clanci" class="blog" style="background: #410A0A; padding-top: 0px; padding-bottom: 0px; margin:0 !important">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <img src="<?php echo $native_path ?>/assets/images/kraj.png"  />
        </div>
      </div>
    </div>
  </div>



   <div class="container-fluid" style="padding-left:0 !important; padding-right:0 !important; position: relative; background:#410A0A;">
      <div class="row">
        <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
           <div style="padding-top:100px; padding-bottom: 100px; color: #fff;">
              <p style="text-align: center; color: #fff !important">Fotografija: Marko Miščević<br/>
                  Model: Laura Bračun<br/>
                  Styling: Studio Onne<br/>
                  Makeup: Saša Knežević<br/>
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


    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
