<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/minuta-za-mene';
    // use this for versioning, to avoid cache problems
    $version = 6;
?>
<head>

    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css?v=<?php echo $version ?>">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css?v=<?php echo $version ?>">

  </head>

<body>

    <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <div class="container">
      <div class="row">
        <div class="col-8 text-left">
          <nav class="main-nav">
            <ul class="nav">
              <li class="scroll-to-section"><a href="#ambasadorice">AMBASADORICE</a></li>
              <li class="scroll-to-section"><a href="#ispovijesti">ISPOVIJESTI</a></li>
              <li class="scroll-to-section"><a href="#procitaj-vise">PROČITAJ VIŠE</a></li>
              <li class="scroll-to-section"><a href="#kviz">KVIZ</a></li>
              <li></li>
            </ul>
          </nav>
        </div>
        <div class="col-4 text-right">
          <nav class="main-nav"  style="float: right;">
            <ul class="nav">
              <li class="scroll-to-section"><a href="#potpisi-povelju">POTPIŠI POVELJU</a></li>
              <li></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-10 offset-lg-1 align-self-center">
                <div class="row">
                  <div class="col-lg-12 text-center">
                    <img src="<?php echo $native_path ?>/assets/images/logo.png" alt="" class="keyvizual">
                    <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Minuta za mene je minuta kojom spašavam svoj život.</h2>
                    <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" style="font-size: 24px !important;">U mjesecu borbe protiv raka dojke, naglašavamo važnost samopregleda.<br/>Za njega nam je potrebno svega 60 sekundi.</p>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container blokscrtom" style="padding-top: 30px !important;">
      <div class="row">
        <div class="col-lg-12 show-up prednost wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="0.3s">
          <p style="font-size:24px;">Odradili smo potpuni takeover <span style="letter-spacing: 3px; font-weight:700">SUPER1</span> portala: tijekom dva tjedna, dosegnuli smo više od 200.000 čitateljica i čitatelja, a poziv ženama da naprave samopregled dojki podržalo je i više od 20 influencerica, glumica, pjevačica, novinarki, poduzetnica i kreativnih direktorica.</p>
        </div>
      </div>
    </div>
  </div>

  <div id="ambasadorice" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 show-up prednost wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay="0.3s">
          <h1><img src="<?php echo $native_path ?>/assets/images/headline_left.png" style="height: 40px; width: auto; margin-right: 50px;" class="cicenaheadlineu" /> AMBASADORICE <img src="<?php echo $native_path ?>/assets/images/headline_right.png" style="height: 40px; width: auto; margin-left: 50px;" class="cicenaheadlineu" /></h1>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-5 show-up prednost wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <img src="<?php echo $native_path ?>/assets/images/ambasadori-01.png" alt="">
        </div>
        <div class="col-lg-7 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <h3>AMBASADORI</h3>
          <p>Minutu za mene podržalo je 50-ak poznatih žena na društvenim mrežama. Otkrile su nam zašto</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/super1/power/minutu-za-mene-podrzalo-je-50-ak-poznatih-zena-na-drustvenim-mrezama-otkrile-su-nam-zasto/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container blokscrtom">
      <div class="row">
        <div class="col-lg-12 show-up prednost wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="0.3s">
          <p>Svaka četvrta žena u Hrvatskoj kojoj je dijagnosticiran rak, ima rak dojke.</p>
        </div>
      </div>
    </div>
  </div>


  <div id="ispovijesti" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 show-up prednost wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay="0.3s">
          <h1><img src="<?php echo $native_path ?>/assets/images/headline_left.png" style="height: 40px; width: auto; margin-right: 50px;" class="cicenaheadlineu" /> ISPOVIJESTI <img src="<?php echo $native_path ?>/assets/images/headline_right.png" style="height: 40px; width: auto; margin-left: 50px;" class="cicenaheadlineu" /></h1>
        </div>
      </div>
    </div>
    <div class="container" style="margin-bottom: 80px !important;">
      <div class="row">
        <div class="col-lg-5">
          <img src="<?php echo $native_path ?>/assets/images/ispovijest-01.png" alt="">
        </div>
        <div class="col-lg-7">
          <h3 style="margin-top: 20px !important">ISPOVIJEST #1</h3>
          <h2>Ivana Mihaljević</h2>
          <p>Šest mjeseci me nešto zatezalo iznad dojke, a onda mi je kirurg rekao da smo zakasnili. Ovo je moja priča</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/super1/power/sest-mjeseci-me-nesto-zatezalo-iznad-dojke-a-onda-mi-je-kirurg-saopcio-da-smo-zakasnili-ovo-je-moja-prica/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container" style="margin-bottom: 80px !important;">
      <div class="row">
        <div class="col-lg-5 order-lg-2">
          <img src="<?php echo $native_path ?>/assets/images/ispovijest-02.png" alt="">
        </div>
        <div class="col-lg-7 order-lg-1">
          <h3 style="margin-top: 20px !important">ISPOVIJEST #2</h3>
          <h2>Simona Augustić</h2>
          <p>Preboljela je rak dojke, osnovala brend donjeg rublja za oboljele i sada pokreće prvu online trgovinu za onkološke pacijentice</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/super1/power/preboljela-je-rak-dojke-osnovala-brend-donjeg-rublja-za-oboljele-i-sada-pokrece-prvu-online-trgovinu-za-onkoloske-pacijentice/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container" style="margin-bottom: 80px !important;">
      <div class="row">
        <div class="col-lg-5">
          <img src="<?php echo $native_path ?>/assets/images/ispovijest-04.png" alt="">
        </div>
        <div class="col-lg-7">
          <h3 style="margin-top: 20px !important">ISPOVIJEST #3</h3>
          <h2>Marina Zubak</h2>
          <p>Moždani udari, fibromialgija i karcinom nisu zaustavili život Marine Zubak. Ovo je njezina priča </p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/super1/power/mozdani-udari-fibromialgija-i-karcinom-nisu-zaustavili-zivot-marine-zubak-ovo-je-njezina-prica/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container" style="margin-bottom: 80px !important;">
      <div class="row">
        <div class="col-lg-5 order-lg-2">
          <img src="<?php echo $native_path ?>/assets/images/ispovijest-05.png" alt="">
        </div>
        <div class="col-lg-7  order-lg-1">
          <h3 style="margin-top: 20px !important">ISPOVIJEST #4</h3>
          <h2>Vesna Ramljak</h2>
          <p>Naša liječnica sama je sebi postavila dijagnozu pa pobijedila rak dojke. Prošlo je 8 godina i sve je dobro</p>
          <div class="border-first-button">

              <a href="https://www.telegram.hr/super1/nasa-lijecnica-sama-je-sebi-postavila-dijagnozu-pa-pobijedila-rak-dojke-proslo-je-8-godina-i-sve-je-dobro/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container" style="margin-bottom: 80px !important;">
      <div class="row">
        <div class="col-lg-5">
          <img src="<?php echo $native_path ?>/assets/images/ispovijest-06.png" alt="">
        </div>
        <div class="col-lg-7">
          <h3 style="margin-top: 20px !important">ISPOVIJEST #5</h3>
          <h2>Lovorka Brajković</h2>
          <p>Naša psihologinja provela je istraživanje o kvaliteti seksualnog života žena oboljelih od raka. Evo što kaže </p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/super1/nasa-psihologinja-provela-je-istrazivanje-o-kvaliteti-seksualnog-zivota-zena-oboljelih-od-raka-evo-sto-kaze/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container blokscrtom">
      <div class="row">
        <div class="col-lg-12 show-up prednost wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="0.3s">
          <p>Pravovremeni početak terapije uspješno liječi u 90 posto slučajeva.</p>
        </div>
      </div>
    </div>
  </div>


  <div id="procitaj-vise" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 show-up prednost wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay="0.3s">
          <h1><img src="<?php echo $native_path ?>/assets/images/headline_left.png" style="height: 40px; width: auto; margin-right: 50px;" class="cicenaheadlineu" /> PROČITAJ VIŠE <img src="<?php echo $native_path ?>/assets/images/headline_right.png" style="height: 40px; width: auto; margin-left: 50px;" class="cicenaheadlineu" /></h1>
        </div>
      </div>
    </div>

    <div class="container" style="margin-bottom: 80px !important;">
      <div class="row">
        <div class="col-lg-4 text-center"  style="margin-top:50px;">
          <img src="<?php echo $native_path ?>/assets/images/clanak-01.png" alt="">
          <p>Robert već 30 godina oboljelim ženama pomaže pronaći idealnu periku, ali i izgubljeno samopouzdanje. Razgovarali smo s njim</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/super1/power/robert-vec-30-godina-oboljelim-zenama-pomaze-pronaci-idealnu-periku-ali-i-izgubljeno-samopouzdanje-razgovarali-smo-s-njim/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
        <div class="col-lg-4 text-center"  style="margin-top:50px;">
          <img src="<?php echo $native_path ?>/assets/images/clanak-02.png" alt="">
          <p>Rana pojava menstruacije povećava rizik od raka dojke za pet do 20 posto. Evo što kažu stručnjaci</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/partneri/rana-pojava-menstruacije-povecava-rizik-od-raka-dojke-za-pet-do-20-posto-evo-sto-kazu-strucnjaci/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
        <div class="col-lg-4 text-center"  style="margin-top:50px;">
          <img src="<?php echo $native_path ?>/assets/images/clanak-03.png" alt="">
          <p>Pripremite maramice: U mjesecu borbe protiv raka dojke, gledamo ovih 10 genijalnih filmova</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/super1/life/u-mjesecu-borbe-protiv-raka-dojke-gledamo-ovih-10-genijalnih-filmova/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 text-center"  style="margin-top:50px;">
          <img src="<?php echo $native_path ?>/assets/images/clanak-04.png" alt="">
          <p>Prevencija je pola zdravlja: ovih 12 pregleda svaka bi žena trebala napraviti barem jednom godišnje</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/partneri/prevencija-je-pola-zdravlja-ovih-12-pregleda-svaka-bi-zena-trebala-napraviti-barem-jednom-godisnje/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
        <div class="col-lg-4 text-center"  style="margin-top:50px;">
          <img src="<?php echo $native_path ?>/assets/images/clanak-05.png" alt="">
          <p>Priče koje slamaju srca. Ove žene su napisale knjige o vlastitim borbama s rakom dojke</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/super1/price-koje-slamaju-srca-ove-zene-su-napisale-knjige-o-vlastitim-borbama-s-rakom-dojke/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
        <div class="col-lg-4 text-center"  style="margin-top:50px;">
          <img src="<?php echo $native_path ?>/assets/images/clanak-06.png" alt="">
          <p>Od stresa do ozbiljnih zdravstvenih stanja. Ovo su najčešći razlozi poremećaja menstrualnog ciklusa</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/partneri/od-stresa-do-ozbiljnih-zdravstvenih-stanja-ovo-su-najcesci-razlozi-poremecaja-menstrualnog-ciklusa/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 text-center"  style="margin-top:50px;">
          <img src="<?php echo $native_path ?>/assets/images/clanak-08.png" alt="">
          <p>Učinite dobru stvar. Kupnjom ovih proizvoda pomažete udruzi posvećenoj ženama oboljelih od raka</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/life/ucinite-dobru-stvar-kupnjom-ovih-proizvoda-pomazete-udruzi-posvecenoj-zenama-oboljelih-od-raka/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
        <div class="col-lg-4 text-center"  style="margin-top:50px;">
          <img src="<?php echo $native_path ?>/assets/images/clanak-07.png" alt="">
          <p>Jeste li već otkrili brend Planina? Jako su nam fora njihove šalice i vaze s motivom grudi</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/super1/life/hrvatski-brend-keramike-ponovno-odusevljava-nakon-genijalnih-salica-s-motivom-grudi-stigle-su-i-vaze/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
        <div class="col-lg-4 text-center"  style="margin-top:50px;">
          <img src="<?php echo $native_path ?>/assets/images/clanak-09.png" alt="">
          <p>O mentalnom zdravlju, seksu, hormonima i menstruaciji. Imamo detalje s prve ženske konferencije</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/life/o-mentalnom-zdravlju-seksu-hormonima-i-menstruaciji-imamo-detalje-s-prve-zenske-konferencije/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 text-center"  style="margin-top:50px;">
          <img src="<?php echo $native_path ?>/assets/images/clanak-10.png" alt="">
          <p>Karcinom može uzeti kosu, ali ne i vašu ljepotu. Ovo je 8 chic načina kako možete nositi maramu</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/super1/karcinom-moze-uzeti-kosu-ali-ne-i-vasu-ljepotu-imamo-sedam-sik-nacina-kako-mozete-nositi-maramu/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
        <div class="col-lg-4 text-center"  style="margin-top:50px;">
          <img src="<?php echo $native_path ?>/assets/images/clanak-11.png" alt="">
          <p>Pričali smo s Darkom, tattoo artistom koji ženama oboljelima od raka besplatno tetovira bradavice</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/super1/power/pricali-smo-s-darkom-tattoo-artistom-koji-zenama-oboljelima-od-raka-besplatno-tetovira-bradavice/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
        <div class="col-lg-4 text-center"  style="margin-top:50px;">
          <img src="<?php echo $native_path ?>/assets/images/clanak-12.png" alt="">
          <p>Što nakon dijagnoze raka dojke? Ove hvalevrijedne udruge pružaju podršku ženama u Hrvatskoj</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/super1/sto-nakon-dijagnoze-raka-dojke-ove-hvalevrijedne-udruge-pruzaju-podrsku-zenama-u-hrvatskoj/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 text-center"  style="margin-top:50px;">
          <img src="<?php echo $native_path ?>/assets/images/clanak-14.png" alt="">
          <p>Prekrivene gumenim bombonima, pucketavom ambalažom ili u sendviču. Ovaj umjetnički projekt ima za cilj otkriti što definira grudi</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/super1/power/prekrivene-gumenim-bombonima-pucketavom-ambalazom-ili-u-sendvicu-ovaj-umjetnicki-projekt-ima-za-cilj-otkriti-sto-definira-grudi/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
        <div class="col-lg-4 text-center"  style="margin-top:50px;">
          <img src="<?php echo $native_path ?>/assets/images/clanak-13.png" alt="">
          <p>Poznate žene koje su preboljele rak dojke, neke su na kemoterapiju išle u pauzama od snimanja</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/super1/poznate-zene-koje-su-preboljele-rak-dojke-neke-su-na-kemoterapiju-isle-u-pauzama-od-snimanja/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
        <div class="col-lg-4 text-center"  style="margin-top:50px;">
          <img src="<?php echo $native_path ?>/assets/images/clanak-15.png" alt="">
          <p>Ovaj francuski brend nakita i ukrasa za kosu ima za ideju da ženske grudi budu slobodne. Dostupan je i kod nas</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/super1/look/ovaj-francuski-brend-nakita-i-ukrasa-za-kosu-ima-za-ideju-da-zenske-grudi-budu-slobodne-dostupan-je-i-kod-nas/" target="_blank"><button class="border-first-button" id="startButton">Pročitaj više</button></a>
          </div>
        </div>
      </div>
    </div>


    <div class="container blokscrtom">
      <div class="row">
        <div class="col-lg-12 show-up prednost wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="0.3s">
          <p>Rak dojke vodeći je po broju i smrtnosti među ženama. </p>
        </div>
      </div>
    </div>
  </div>

  <div id="kviz" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 show-up prednost wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay="0.3s">
          <h1><img src="<?php echo $native_path ?>/assets/images/headline_left.png" style="height: 40px; width: auto; margin-right: 50px;" class="cicenaheadlineu" /> KVIZ <img src="<?php echo $native_path ?>/assets/images/headline_right.png" style="height: 40px; width: auto; margin-left: 50px;" class="cicenaheadlineu" /></h1>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 show-up prednost wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="0.3s">
          <p>Pitali smo umjetnu inteligenciju da nam složi kviz o raku dojke. Provjerite tko je bolji - vi ili računalo.</p>
          <div class="border-first-button">
              <a href="https://www.telegram.hr/super1/pitali-smo-umjetnu-inteligenciju-da-slozi-kviz-o-raku-dojke-provjerite-tko-je-bolji-vi-ili-racunalo/" target="_blank"><button class="border-first-button" id="startButton">Riješi kviz</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="samopregled" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 show-up prednost wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay="0.3s">
          <h1><img src="<?php echo $native_path ?>/assets/images/headline_left.png" style="height: 40px; width: auto; margin-right: 50px;" class="cicenaheadlineu" /> SAMOPREGLED <img src="<?php echo $native_path ?>/assets/images/headline_right.png" style="height: 40px; width: auto; margin-left: 50px;" class="cicenaheadlineu" /></h1>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-5 show-up prednost wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <img src="<?php echo $native_path ?>/assets/images/01.png" alt="">
        </div>
        <div class="col-lg-7 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <h2 class="korak">Stani ispred ogledala</h2>
          <p>Stavi ruku na bokove, stisni prsne mišiće i vizualno pregledaj dojke. Obrati pažnju na veličinu, oblik i boju i traži bilo kakvu promjenu, uključujući kvržice, promjene u boji ili izgledu kože te izbočine ili udubine. Podigni desnu ruku kako bi detaljno pregledala desnu dojku. Isto učini i s lijevom. Nježno pritisni bradavicu i promotri javlja li se iscjedak.</p>
        </div>
      </div>
    </div>
  </div>

  <div id="element2" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 order-lg-1 order-2 show-up prednost wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <h2 class="korak">Stani uspravno</h2>
          <p>Tijelo namaži mlijekom ili losionom. Vrijeme je za pipanje dojki ili palpaciju. Za pregled lijeve dojke koristi desnu, a za pregled desne dojke lijevu ruku. Spoji jagodice tri srednja prsta i započni s kružnim pokretima. Kreni od vanjskih rubova dojke prema bradavicama ili obrnuto, bitno je da pregledaš cijelu površinu. Neka ti pokreti najprije budu nježni i površinski, a zatim čvršći i dublji. Obavezno ispipaj i prostor iznad i ispod dojki te pazušnu jamu. Ovaj korak možeš učiniti i u tušu, samo se dobro nasapunaj.</p>
        </div>
        <div class="col-lg-5 order-lg-2 order-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <img src="<?php echo $native_path ?>/assets/images/02.png" alt="">
        </div>
      </div>
    </div>
  </div>


  <div id="element3" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 show-up prednost wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <img src="<?php echo $native_path ?>/assets/images/03.png" alt="">
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <h2 class="korak">Namjesti se u ležeći položaj</h2>
          <p>Stavi jastuk ili složeni ručnik ispod ramena, a ruku na kojoj ležiš iznad glave. Ponovno spoji tri srednja prsta suprotne ruke te kreni s nježnim kružnim pokretima, a zatim manjim i čvršćim. Završi pregled opipavanjem područja ispod pazuha tako što ćeš ruku koja miruje i na kojoj ležiš u potpunosti opustiti, a suprotnom rukom duboko opipati cijeli pazuh. Ponovi postupak na drugoj dojci.</p>
        </div>
      </div>
    </div>
  </div>

  <div id="potpisi-povelju" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 show-up prednost wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay="0.3s">
          <h1><img src="<?php echo $native_path ?>/assets/images/headline_left.png" style="height: 40px; width: auto; margin-right: 50px;" class="cicenaheadlineu" /> POTPIŠI POVELJU <img src="<?php echo $native_path ?>/assets/images/headline_right.png" style="height: 40px; width: auto; margin-left: 50px;" class="cicenaheadlineu" /></h1>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4 show-up prednost wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="0.3s">
          <p>Obećajem sebi kako ću redovito uzimati minutu za samopregled dojki jer svaka minuta koju provedem brinući se za svoje zdravlje je minuta - za mene</p>
          <form action="povelja.php" method="POST">
              <label for="ime">Ime i prezime:</label>
              <input type="text" id="ime" name="ime" required><br><br>

              <input type="submit" value="Potpiši povelju">
          </form>
        </div>
      </div>
    </div>
  </div>


<div id="sponsors" class="sponsors">
  <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
            <h2>Sponzori projekta</h2>
        </div>
        <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
          <div class="row">
            <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
                <img src="<?php echo $native_path ?>/assets/images/biobaza.png"/>
            </div>
            <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
                <img src="<?php echo $native_path ?>/assets/images/dm.png"/>
            </div>
            <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
                <img src="<?php echo $native_path ?>/assets/images/librese.png"/>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top: 50px;">

       <div class="col-lg-6 offset-md-3 text-center wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.6s">
            <p>Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing prema uredničkim standardima Telegram Media Grupe.</p><br/><br/>
            <img style="max-width:186px; height: auto;" src="<?php echo $native_path ?>/assets/images/telegram.png"/>
            <br/><br/>
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
    <script src="https://super1.telegram.hr/wp-content/themes/super1-theme/templates/native/super1/superdan/jquery.serialize-object.min.js"></script>
    <script>
        var $form = jQuery('form#test_form'),
            url = 'https://script.google.com/macros/s/AKfycbwkBAd0Ie7xBEIeizxeNG-1UP8npjMonbqLUQuCywn6TVZyHwfyHBt5rOB5zSXFP1Kx/exec'

        jQuery('#submit-form').on('click', function(e) {
            e.preventDefault();
            jQuery('#submit-form').attr('disable', true);
            var jqxhr = jQuery.ajax({
                url: url,
                method: "GET",
                dataType: "json",
                data: $form.serializeObject()
            }).done(
                function(){
                    window.location.href = 'https://www.telegram.hr/native/minuta-za-mene/povelja'
                }
            );
        })
    </script>
    <?php wp_footer(); ?>
</body>
</html>
