
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/malta2';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">
</style>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <style>
            #map {
                height: 500px;
                width: 100%;
                position: relative;
                overflow: hidden;
            }
        </style>
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
  <header class="header-area">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <nav class="main-nav">
            <ul class="nav">
              <li class="scroll-to-section"><a href="#sto-posjetiti" class="active">Tri dana na Malti</a></li>
              <li class="scroll-to-section"><a href="#kalendar-dogadjanja">Kalendar događanja</a></li>
              <li class="scroll-to-section"><a href="#kako-do-malte">Organiziraj put već danas</a></li>
              <li></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>


<div class="main-banner" id="top" style="position: relative; overflow: hidden; height: 100vh; background: url('<?php echo $native_path ?>/assets/images/fallback-prvi.jpg') no-repeat; background-size: cover;">
  <!-- YouTube Video Background -->

  <!-- Main Content -->
  <div class="container" style="position: relative; z-index: 2;">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 align-self-center">
            <div class="fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <div class="row">
                <div class="col-lg-10 offset-lg-1">
                  <img src="<?php echo $native_path ?>/assets/images/claim.svg">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="blog" style="background: #fff;">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 offset-lg-3 text-left wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s">
            <p>Prva pomisao na Maltu često uključuje zadivljujuće prizore Velike luke, bezvremenski šarm Vallette ili Mdine. Osim užurbanih ulica i kultnih mjesta, Malta skriva dublju priču — onu koja je ukorijenjena u njezinim slikovitim selima. Ondje možete pobjeći od gužve, otkriti lokalne tradicije i uroniti u autentičnu maltešku kulturu.</p>
          </div>
        </div>

    </div>
</div>


<div class="blog" style="background: #ede7dc; padding-bottom: 0; padding-top: 0;">
  <div class="container-fluid p-0">
      <div class="scroll-section">
        <div class="scroll-container">
          <div class="content-box"><img src="<?php echo $native_path ?>/assets/images/slider-1-1.jpg" class="slika1"></div>
          <div class="content-box"><img src="<?php echo $native_path ?>/assets/images/slider-1-2.jpg" class="slika2"></div>
          <div class="content-box"><img src="<?php echo $native_path ?>/assets/images/slider-1-3.jpg" class="slika1"></div>
          <div class="content-box"><img src="<?php echo $native_path ?>/assets/images/slider-1-4.jpg" class="slika2"></div>
          <div class="content-box"><img src="<?php echo $native_path ?>/assets/images/slider-1-5.jpg" class="slika1"></div>
          <div class="content-box"><img src="<?php echo $native_path ?>/assets/images/slider-1-6.jpg" class="slika2"></div>
          <div class="content-box"><img src="<?php echo $native_path ?>/assets/images/slider-1-1.jpg" class="slika1"></div>
          <div class="content-box"><img src="<?php echo $native_path ?>/assets/images/slider-1-2.jpg" class="slika2"></div>
           <div class="content-box"><img src="<?php echo $native_path ?>/assets/images/slider-1-3.jpg" class="slika2"></div>
          <!-- Dodajte još boxova po potrebi -->
        </div>
      </div>

  </div>
</div>


<div id="mapa" class="blog" style="background: url('<?php echo $native_path ?>/assets/images/kviz-pozadina.jpg') no-repeat; background-size: cover;;">
  <div class="container">
    <div class="row p-0">

      <div class="col-lg-8 offset-lg-2 text-center p-0">

        <div id="quiz" class="text-center p-4">
            <h1 class="mb-3" style="color:#fff !important; font-weight:800 !important">Koje je tvoje malteško selo?</h1>
            <p style="color:#fff !important">Odgovori na sljedeća pitanja i otkrij koje malteško selo najbolje odgovara tvom stilu putovanja</p>
            <br/><br/>
            <div id="question-container" class="question-container mb-3"></div>

            <div id="result" class="mt-4"></div>
        </div>

      </div>
    </div>
  </div>
</div>


<div class="main-banner-dva" style="position: relative; overflow: hidden;">
  <!-- YouTube Video Background -->
  <iframe
    src="https://www.youtube.com/embed/rU7ruaDthvw?autoplay=1&mute=1&loop=1&playlist=rU7ruaDthvw"
    frameborder="0"
    allow="autoplay; fullscreen"
    style="position: absolute; top: -60%; left: -60%; width: 220%; height: 220%; z-index: 1; pointer-events: none;">
  </iframe>

  <!-- Main Content -->
  <div class="container" style="position: relative; z-index: 2;">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 align-self-center">
            <div class="left-content show-up header-text wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <div class="row">
                <div class="col-lg-12">
                  <h1 style="line-height: 0.7em !important;"><a href="#sto-posjetiti">1. TRI DANA NA MALTI: Najbolje od malteških sela</a><br/><br/>
                    <a href="#kalendar-dogadjanja">2. KALENDAR DOGAĐANJA: Kada je pravo vrijeme za put na Maltu?</a><br/><br/>
                  <a href="#kako-do-malte">3. ORGANIZIRAJ PUT VEĆ DANAS: Kako iz Zagreba do Malte?</a></h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="blog" id="sto-posjetiti">
  <div class="container">
    <div class="row">

      <div class="col-lg-6">
        <h1 style="font-weight: 800 !important">TRI DANA NA MALTI:<br/>Najbolje od malteških sela</h1>
        <p>Kaže se da je razlika između putnika i turista u načinu na koji doživljavaju destinaciju. Turist obilazi znamenitosti, bilježi najpoznatije prizore, odlazi s popisom „must-see“ lokacija i vraća se s fotografijama svih njih. Putnik, s druge strane, skreće s uobičajenih ruta, doživljava priče koje ne pišu vodiči i upija duh mjesta kroz susrete s lokalcima. Ako želite upoznati Maltu kao putnik, a ne samo kao turist, skrenite izvan Vallette i Mdine – u srcu njezinih sela skriva se prava duša otoka.</p>
      </div>
      <div class="col-lg-6">
        <img src="<?php echo $native_path ?>/assets/images/tri-dana-na-malti.png"/>
      </div>
    </div>
  </div>
</div>

<div class="blog" style="padding-top: 0px;">
  <div class="container">
    <div class="row">

      <div class="col-lg-7 order-lg-3">
        <h2><span style="font-size:2em">DAN #1:</span><br/>Upoznajte jug Malte</h2>
        <p>Na šarenom jugu Malte sjetit ćete se Čolića i zapjevati “Ti i ja smo južnjaci”. Malta se može doživjeti svim osjetilima, a osjetilo koje će u južnim malteškim selima biti zaokupljeno je - vid. Tamo je sve šareno, veselo i vedro.</p>
      </div>
      <div class="col-lg-1 order-lg-2">
      </div>
      <div class="col-lg-4 order-lg-1">
        <img src="<?php echo $native_path ?>/assets/images/mapa1.gif"/>
      </div>
    </div>
  </div>
</div>

<div class="blog" style="padding-top: 0px;">
  <div class="container">
    <div class="row">

      <div class="col-lg-6 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
        <h2>Marsaxlokk</h2>
        <p>Jugoistočno ribarsko selo Marsaxlokk dom je većine lokalnih ribara. Duž slikovite prirodne luke mnogi se mogu vidjeti kako popravljaju mreže ili bojaju svoje šarene luzzu čamce - tako izgleda njihov svakodnevni život. </p>
        <p>Ovi neobični čamci nisu tu samo da bi mamili turiste. Tradicionalne i slikovite ribarske brodice, prepoznatljive po obliku i jarkim bojama na provi imaju nacrtan par ljudskih očiju. Taj detalj podrijetlo vuče od starih Egipćana, pa preko Feničana i Grka, a čiji je glavni zadatak da brod i ljude u njemu čuva od zle sudbine.</p>
      </div>
      <div class="col-lg-6  wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
          <div id="carouselExample4" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo $native_path ?>/assets/images/marsaxlokk-01.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $native_path ?>/assets/images/marsaxlokk-02.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $native_path ?>/assets/images/marsaxlokk-03.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $native_path ?>/assets/images/marsaxlokk-04.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $native_path ?>/assets/images/marsaxlokk-05.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $native_path ?>/assets/images/marsaxlokk-06.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $native_path ?>/assets/images/marsaxlokk-07.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $native_path ?>/assets/images/marsaxlokk-08.jpg" class="d-block w-100" alt="...">
              </div>

            </div>
            <button class="carousel-control-prev klopa" type="button" data-bs-target="#carouselExample4" data-bs-slide="prev">
              <div style="background:#000; padding: 5px; padding-top: 10px;"><span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next klopa" type="button" data-bs-target="#carouselExample4" data-bs-slide="next">
              <div style="background:#000; padding: 5px; padding-top: 10px;"><span class="carousel-control-next-icon" aria-hidden="true"></span></div>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

      </div>
    </div>
    <br/><br/>
    <div class="row">

      <div class="col-lg-6 order-lg-2 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
        <p>Drugi ljudski detalj na provi je - brk - uska traka u jarkoj boji koja se spušta s povišene prove. Svako mjesto koristi drugu boju za brk koji tako otkriva iz kojeg mjesta potječe luzzu.</p>
        <p>Danas se više ne grade, ali nekoliko stotina ovih brodova još uvijek plovi, osobito u Marsaxlokku. Neki luzziji su pretvoreni u prijevoze za turiste, a većina se i dalje koristi kao ribarski brodovi.</p>
        <p>Za nezaboravan dan u Marsaxlokku, posjetite ga nedjeljom kako biste prošetali ribarnicom. Kad ogladnite, kušajte neke od najboljih plodova mora koje Malta nudi u jednom od restorana uz obalu, a dan završite kratkim izletom do prirodnog Bazena svetog Petra, gdje možete zaplivati ili jednostavno uživati u prekrasnom krajoliku.</p>
      </div>
      <div class="col-lg-6 order-lg-1 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
        <img src="<?php echo $native_path ?>/assets/images/malta-dan-prvi-02.jpg"/>
      </div>
    </div>
  </div>
</div>







<div class="blog" style="padding-top: 0px;">
  <div class="container">
    <div class="row">

      <div class="col-lg-6 marginagornja wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
        <h2>Mqabba</h2>
        <p>Mqabba je slikovito, tradicionalno selo koje još uvijek zadržava svoj ruralni šarm. Šetnja njegovim ulicama i seoskim trgom omogućuje da otkrijete autentični malteški seoski život, bilo da prolazite pored prodavača svježih proizvoda ili se susrećete s mještanima u glazbenim klubovima.</p>
        <p>Iako je mala, Mqabba je itekako na glasu i to po svojim vatrometnim spektaklima, posebno tijekom seoskih svetkovina u lipnju ili kolovozu.</p>
        <p>Posjet Mqabbi tijekom jedne od ovih svetkovina vjerojatno bi bio vrhunac putovanja.</p>
      </div>
      <div class="col-lg-6  wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
        <img src="<?php echo $native_path ?>/assets/images/malta-dan-prvi-03.jpg"/>
      </div>
    </div>
  </div>
</div>


<div class="blog" style="padding-top: 0px;">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-lg-12">
        <img src="<?php echo $native_path ?>/assets/images/malta-dan-prvi-04.jpg"/>
      </div>
    </div>
  </div>
</div>

<div class="blog" style="padding-top: 0px;">
  <div class="container">
    <div class="row">

      <div class="col-lg-6   wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
        <h2>Qrendi</h2>
        <p>Qrendi je malo i mirno mjesto i pravi dragulj za ljubitelje povijesti, prirode i autentične malteške atmosfere. Iako na prvi pogled djeluje kao tipično mediteransko selo, ono skriva brojne atrakcije koje ga čine jednim od najzanimljivijih odredišta na otoku. Njegova povijesna i prirodna baština privlači posjetitelje iz cijelog svijeta, a svaka lokacija priča svoju jedinstvenu priču.</p>
        <p>Prva i najvažnija znamenitost Qrendija je Hagar Qim i Mnajdra Arheološki park, koji je pod zaštitom UNESCO-a, a nezaobilazna destinacija je Wied iz-Zurrieq, slikovito ribarsko selo iz kojeg možete uzeti čamac do Plave špilje (Blue Grotto) s nevjerojatnim plavim nijansama koje nastaju refleksijom svjetlosti. </p>
        <p>Bez obzira jeste li ljubitelj arheologije, zaljubljenik u prirodu ili jednostavno tražite mjesto za opuštanje uz prekrasne krajolike, Qrendi će vas zasigurno osvojiti svojom raznolikošću i ljepotom.</p>
      </div>
      <div class="col-lg-6   wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
        <img src="<?php echo $native_path ?>/assets/images/malta-dan-prvi-05.jpg"/>
      </div>
    </div>

  </div>
</div>

<div class="blog" style="padding-top: 0px;">
  <div class="container">
    <div class="row">

      <div class="col-lg-7 order-lg-3">
        <h2><span style="font-size:2em">DAN #2:</span><br/>Lutanje sjeverom Malte</h2>
        <p>Sjever Malte očarava osjetilo okusa svježim plodovima mora, aromatičnim sirevima i medom, dok se u zraku miješaju mirisi pečenih pastizzija i bogatih ribljih juha.</p>
      </div>
      <div class="col-lg-1 order-lg-2">
      </div>
      <div class="col-lg-4 order-lg-1">
        <img src="<?php echo $native_path ?>/assets/images/mapa2.gif"/>
      </div>
    </div>
  </div>
</div>

<div class="blog" style="padding-top: 0px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
        <img src="<?php echo $native_path ?>/assets/images/rabat.jpg"/><br/><br/>
        <h2>Rabat</h2>
        <p>U susjedstvu poznatog 'Tihog grada' Mdine smjestio se Rabat. Započnite svoj izlet u Rabat s pastizzima - te omiljene lokalne slastice možete kušati u jednom od kafića ili tradicionalnih malteških zalogajnica poznatih kao pastizzerije. Zatim prošećite uskim ulicama Rabata i otkrijte neke od njegovih atrakcija - od lokaliteta poput Katakombi sv. Pavla i Muzeja Wignacourt, do šarmantnih obrtničkih trgovina s lokalno izrađenim rukotvorinama - savršenim suvenirima za ponijeti kući.</p><br/>
      </div>
      <div class="col-lg-4   wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
        <img src="<?php echo $native_path ?>/assets/images/kviz04.jpg"/><br/><br/>
        <h2>Mġarr</h2>
        <p>Selo Mġarr je idealno odredište za doživljaj malteškog ruralnog šarma, baštine i prekrasnih krajolika. Opcije su raznolike; možete otkriti UNESCO-ovu svjetsku baštinu hramova Ta' Ħaġrat, pješačiti duž zaljeva Qarraba ili se pridružiti godišnjem Festivalu jagoda u proljeće. Gurmani vole Mġarr - bilo da se odlučite za obilnu podnevnu ftiru ili tradicionalnu fenkatu navečer, većina restorana popularna je među lokalcima, pa nude istinski autentično iskustvo.</p><br/>
      </div>
      <div class="col-lg-4   wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
        <img src="<?php echo $native_path ?>/assets/images/melleha.jpg"/><br/><br/>
        <h2>Mellieha</h2>
        <p>Smještena na brežuljku s prekrasnim pogledom na okolicu, Mellieha je poznata po svojim plažama. Iz ovog mjestašca možete jednostavno uživati u panoramskom pogledu na Popeye Village, zabavni park izgrađen kao filmski set za film o Popaju iz 1980. godine, a ljubitelji povijesti mogu istražiti Crvenu kulu, impresivnu utvrdu iz 17. stoljeća koja nudi spektakularan pogled na okolne zaljeve. Mellieha ima još jedan plus - u podnožju  mjestašca na brdu nalazi se najveća i najpopularnija pješčanu plaža na Malti, Mellieha Bay.</p><br/>
      </div>
    </div>
  </div>
</div>

<div class="blog" style="background: url('<?php echo $native_path ?>/assets/images/back.png') repeat; padding: 0px !important;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 p-0">
        <div class="marquee-container">
            <marquee direction="left" scrollamount="4">
                <img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px; margin-left: -100%;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee01.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee02.jpg" alt="Slika 2" style="width: 480px; height: 480px;"><img src="<?php echo $native_path ?>/assets/images/marquee03.jpg" alt="Slika 2" style="width: 480px; height: 480px;">
            </marquee>
        </div>

      </div>
    </div>
  </div>
</div>


<div class="blog">
  <div class="container">
    <div class="row">

      <div class="col-lg-7 order-lg-3">
        <h2><span style="font-size:2em">DAN #3:</span><br/>Otkrivanje otoka Gozo</h2>
        <p>Treći dan, treća regija i treći raj za osjetila: otok Gozo ispunjava osjetilo njuha svježim mirisom mora koji se miješa s aromama divljeg bilja, borova i agruma.</p>
      </div>
      <div class="col-lg-1 order-lg-2">
      </div>
      <div class="col-lg-4 order-lg-1">
        <img src="<?php echo $native_path ?>/assets/images/mapa3.gif"/>
      </div>
    </div>
  </div>
</div>

<div class="blog" style="padding-top:0px">
  <div class="container">
    <div class="row">

      <div class="col-lg-6 marginagornja">
        <h2>Għarb</h2>
        <p>Ovo tradicionalno selo jedno je od najstarijih na otoku Gozu. Okružen je prirodom pa u Għarbu posjetitelji mogu istinski doživjeti poljoprivredne korijene Goza. Ovo selo je također dom Obrtničkom selu Ta' Dbieġi, koje je nekad služilo kao britanska vojna baza, a sada ugošćuje neke od najboljih obrtnika Goza, koje možete gledati kako izrađuju čipku, puhano staklo, filigran i još mnogo toga. Za ljubitelje prirode, Għarb nudi mnoštvo opcija, od biciklističkih staza do penjanja po stijenama u Wied il-Mielaħu. Također, posjet veličanstvenoj bazilici Ta' Pinu je obavezan.</p>
      </div>
      <div class="col-lg-6">
        <img src="<?php echo $native_path ?>/assets/images/tri-dana-na-malti-2.png"/>
      </div>
    </div>
  </div>
</div>

<div class="blog" style="padding-top:0px;">
  <div class="container">

    <div class="row">


      <div class="col-lg-12">
            <div id="carouselExample3" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo $native_path ?>/assets/images/street-food-01.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $native_path ?>/assets/images/street-food-02.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $native_path ?>/assets/images/street-food-03.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $native_path ?>/assets/images/street-food-04.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?php echo $native_path ?>/assets/images/street-food-05.jpg" class="d-block w-100" alt="...">
              </div>


            </div>
            <button class="carousel-control-prev klopa" type="button" data-bs-target="#carouselExample3" data-bs-slide="prev">
              <div style="background:#000; padding: 5px; padding-top: 10px;"><span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next klopa" type="button" data-bs-target="#carouselExample3" data-bs-slide="next">
              <div style="background:#000; padding: 5px; padding-top: 10px;"><span class="carousel-control-next-icon" aria-hidden="true"></span></div>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
    </div>
  </div>
</div>


<div class="blog" style="padding-top:0px">
  <div class="container">
    <div class="row">

      <div class="col-lg-6 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0s">
        <img src="<?php echo $native_path ?>/assets/images/karneval.jpg"/><br/><br/>
        <h2>Nadur</h2>
        <p>Nadur, poznat kao "drugi grad" Goza najpoznatiji po svom karnevalu, koji je jedan od najautentičnijih na Malti. Nadur predstavlja pravu sliku malteškog seoskog života. Njegov središnji trg vrvi životom, posebno srijedom kada se održava tržnica na otvorenom. Ovdje možete doživjeti svakodnevicu lokalnog stanovništva, od jutarnje kave u lokalnom kafiću do večernjeg druženja u tradicionalnim band klubovima.</p>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="1s">
        <img src="<?php echo $native_path ?>/assets/images/regata.jpg"/><br/><br/>
        <h2>Xaghra</h2>
        <p>Xaghra je jedno od najstarijih naselja na Gozu. Ovo mjestašce utjelovljuje duh drevnog Goza pa šetnja kroz njegove uske ulice otkriva tradicionalnu arhitekturu i  živopisnu atmosferu s brojnim restoranima i kafićima. Smješteno je na brežuljku s prekrasnim pogledom na okolni krajolik, dom je slavnog megalitskog hrama Ġgantija, jednog od najstarijih samostojećih kamenih spomenika na svijetu.</p>
      </div>
    </div>
  </div>
</div>



<div id="mapa" class="blog p-0" style="padding: 0;">
  <div class="container-fluid">
    <div class="row p-0">

      <div class="col-lg-12 text-center p-0">

        <div id="map"></div>

      </div>
    </div>
  </div>
</div>


<div class="blog" id="kalendar-dogadjanja">
  <div class="container">
    <div class="row">

      <div class="col-lg-6">
        <h1 style="font-weight: 800 !important;">KALENDAR DOGAĐANJA:<br/>Kada je pravo vrijeme za put na Maltu?</h1>
        <p>Nema lošeg trenutka za posjetiti Maltu – samo različitih načina da je doživite. U proljeće otoci cvjetaju, ulice mirišu na morsku sol i svježe pečene pastizzi slastice, a drevni hramovi blistaju pod blagim suncem. Ljeti gradovi postaju pozornica za proslave, vatromet para nebo, a more poziva na beskrajno plivanje. Jesen donosi mirniji ritam, savršen za istraživanje uskih uličica bez gužve, dok zima donosi blagdansku čaroliju i trenutke kada Mediteran pokazuje svoje tiho, mistično lice. Malta se ne prilagođava kalendaru – ona je uvijek spremna za avanturu, pitanje je samo u kojem tonu je želite doživjeti. Detaljan kalendar malteških događanja pronađite na <a href="https://www.visitmalta.com/en/blog/malta-cultural-calendar-celebrating-tradition-all-year/" target="_blank">linku</a>.</p>
      </div>
      <div class="col-lg-6">
        <img src="<?php echo $native_path ?>/assets/images/karta.png"/>
      </div>
    </div>
  </div>
</div>



<div class="blog" style="padding-top:0px; padding-bottom:0px">
  <div class="container p-0">

    <div class="row">


      <div class="col-lg-12">
            <div id="carouselExample7" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo $native_path ?>/assets/images/karn.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h4 style="margin-bottom: -20px;">Karneval</h4>
                  <p style="color:#fff !important">28. veljače – 3. ožujka<br/><br/>Karneval su na Maltu donijeli vitezovi Svetog Ivana kao posljednji trenutak uživanja prije početka korizme. Malteški karneval prava je eksplozija boja, kostima, povorki i raskošnih alegorijskih kola, a središta proslave su Valletta i Nadur na Gozu.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="<?php echo $native_path ?>/assets/images/reg.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h4 style="margin-bottom: -20px;">Regata na Dan slobode</h4>
                  <p style="color:#fff !important">31. ožujka<br/><br/>Tradicionalna veslačka s poviješću dugom nekoliko stoljeća. Suparnički veslački klubovi natječu se u četverosatnom spektaklu, dok gledatelji duž obala Vallette, Vittoriosa, Senglea i Cospicua navijaju za svoje favorite.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="<?php echo $native_path ?>/assets/images/festa.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h4 style="margin-bottom: -20px;">Sezona festa</h4>
                  <p style="color:#fff !important">svibanj - rujan<br/><br/>Ako planirate ljetno putovanje na Maltu - očekujte festu! Gotovo svako selo na Malti ljeti slavi svog zaštitnika. Tradicionalne fešte karakteriziraju ulične proslave, limene glazbe i spektakularni vatrometi. Među najvažnijima je festa Velike Gospe (Santa Marija), koja se 15. kolovoza slavi u sedam različitih mjesta, a 2023. godine uvrštena je na UNESCO-v popis nematerijalne kulturne baštine.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="<?php echo $native_path ?>/assets/images/l-imnar.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h4 style="margin-bottom: -20px;">L-Imnarja</h4>
                  <p style="color:#fff !important">29.  lipnja, Rabat<br/><br/>S korijenima još iz rimskog doba, l-Imnarja je jedan od najstarijih blagdana na Malti. Dan započinje svečanom liturgijom u katedrali u Mdini, nakon čega se seli u vrtove Buskett, gdje vesela atmosfera oživljava uz tradicionalnu maltešku glazbu għana i limene glazbe. </p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="<?php echo $native_path ?>/assets/images/advent.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h4 style="margin-bottom: -20px;">Advent</h4>
                  <p style="color:#fff !important"> Prosinac<br/><br/>Vrhunac prosinca na Malti je Bethlehem f’Għajnsielem na Gozu, gdje posjetitelji mogu zakoračiti u prizor živih jaslica u prirodnoj veličini sa 150 glumaca. Malta je poznata po prekrasno izrađenim jaslicama, poznatima kao cribs, koje su izložene diljem malteških sela. Blagdanski ugođaj upotpunjuju božićni sajmovi, svjetlosne instalacije i tradicionalna Ponoćka u konkatedrali svetog Ivana.</p>
                </div>
              </div>


            </div>
            <button class="carousel-control-prev klopa" type="button" data-bs-target="#carouselExample7" data-bs-slide="prev">
              <div style="background:#000; padding: 5px; padding-top: 10px; z-index: 1000;"><span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next klopa" type="button" data-bs-target="#carouselExample7" data-bs-slide="next">
              <div style="background:#000; padding: 5px; padding-top: 10px; z-index: 1000;"><span class="carousel-control-next-icon" aria-hidden="true"></span></div>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
    </div>
  </div>
</div>


<div class="blog" id="kako-do-malte">
  <div class="container">
    <div class="row">

      <div class="col-lg-8 order-lg-2">
        <h1>Kako iz Zagreba do Malte?</h1>
        <p><em>Samo dva sata avionom od Zagreba - izravni letovi od Zagreba do Vallette prometuju svakog dana</em></p>
        <p>Frekvencija letova: od travnja, letovi iz Zagreba za Maltu (Valetta) dostupni su svaki dan, čak i do dva puta dnevno.</p>
        <p>• ponedjeljkom, utorkom, četvrtkom i petkom Zagreb i Malta povezani su s dva leta<br/>• srijedom, subotom i nedjeljom dostupan je jedan let</p>
        <p>Cijene avionskih karti u jednom smjeru kreću se već od 21 eura, a povratne karte u svibnju su dostupne dostupne već od 37 eura.</p>
        <p><span style="font-weight: 800; color:#226469">TIPS&TRICKS:</span> Cijena karata nešto je veća vikendom u odnosu na radne dane, što čini dane od ponedjeljka pa do četvrtka idealnim vremenom za putovanje.</p>
        <p>Prosječno trajanje leta je oko 1 sata i 55 minuta.</p>
      </div>
      <div class="col-lg-4 order-lg-1">
        <img src="<?php echo $native_path ?>/assets/images/avion.png"/>
      </div>
    </div>
  </div>
</div>



<div class="blog" style="padding-top:0px; padding-bottom: 0;">
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-12 p-0" >
        <img src="<?php echo $native_path ?>/assets/images/pozadina2.jpg"/>
      </div>
    </div>
  </div>
</div>












  <div id="clanci" class="blog" style="z-index: 100; position: relative; padding-top: 100px; padding-bottom: 120px; overflow: hidden; background: url('<?php echo $native_path ?>/assets/images/back.png') repeat;">


    <div class="container-fluid wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">

              <p style="color:#000">Autorica: Petra Orešković<br/>
Kreativno vodstvo: TMG Studio<br/>
Razvoj: Reset<br/><br/>
Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/telegram.png" style="max-width: 186px;"  />
          </div>
        </div>
      </div>
  </div>

  <script type="text/javascript">
          window.addEventListener('scroll', function() {
              var slika2 = document.querySelector('.slika2');
              var rect = slika2.getBoundingClientRect();

              if (rect.top <= 0) {
                  slika2.style.zIndex = 3;
              } else {
                  slika2.style.zIndex = 2;
              }
          });

  </script>
          <script>
            // Inicijalizacija mape
            const map = L.map('map').setView([35.9350, 14.2135], 10); // Malta

            // Dodavanje OpenStreetMap sloja
            L.tileLayer('https://a.tile.openstreetmap.de/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);
            // Dodavanje pinova
            const locations = [
                { lat: 35.845, lng: 14.455, title: "Mqabba" },
                { lat: 35.830, lng: 14.439, title: "Qrendi" },
                { lat: 35.884, lng: 14.351, title: "Rabat" },
                { lat: 35.918, lng: 14.347, title: "Mġarr" },
                { lat: 35.964, lng: 14.317, title: "Melleha" },
                { lat: 36.067, lng: 14.190, title: "Għarb" },
                { lat: 36.049, lng: 14.276, title: "Nadur" },
                { lat: 36.055, lng: 14.247, title: "Xaghra" },
                { lat: 35.839, lng: 14.543, title: "Marsaxlokk" },
            ];

            locations.forEach(location => {
                L.marker([location.lat, location.lng]).addTo(map)
                    .bindPopup(`<b>${location.title}</b>`);
            });

        </script>
        <script type="text/javascript">

const scrollSection = document.querySelector('.scroll-section');
const scrollContainer = document.querySelector('.scroll-container');

let startScroll = false;
let initialScrollY = 0;

// Kreiramo Intersection Observer da detektuje kada je container u vidnom polju
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      startScroll = true;
      initialScrollY = window.scrollY; // Pamti početnu vrednost skrola
    } else {
      startScroll = false;
    }
  });
}, { threshold: 0.001 });

observer.observe(scrollSection);

// Maksimalna udaljenost za skrolovanje
const maxScrollDistance = scrollContainer.scrollWidth - window.innerWidth;

// Dodajemo event listener za skrolovanje
window.addEventListener('scroll', () => {
  if (startScroll) {
    // Izračunaj koliko smo skrolovali unutar sekcije
    let scrolledDistance = window.scrollY - initialScrollY;

    // Ograniči pomak na maksimalnu širinu kako bi se elementi vraćali nazad
    scrolledDistance = Math.max(0, Math.min(scrolledDistance, maxScrollDistance));

    // Primeni horizontalni pomak pomoću translateX
    scrollContainer.style.transform = `translateX(-${scrolledDistance}px)`;
  }
});


</script>
<script>



const questions = [
    { text: "Kako zamišljaš idealan dan na odmoru?", options: ["Uživanje u morskim specijalitetima", "Sudjelovanje u festivalima s vatrometom", "Istraživanje povijesnih znamenitosti", "Planinarenje uz obalu", "Promatranje izrade nakita, čipke i suvenira"] },
    { text: "Više voliš...", options: ["Mirnu luku", "Tradicionalno selo", "Mjesto s bogatom poviješću", "Priroda, zelenilo, more...", "Šarenu umjetničku idilu"] },
    { text: "Koji lokalni specijalitet te najviše privlači?", options: ["Aljotta (riblja juha)", "Imqaret (prženi kolačići punjeni datuljama)", "Pastizzi (hrskavo tijesto s ricottom)", "Ftira (malteški kruh s nadjevima kao što su sardine, tuna, rajčica, kapari, masline...)", "Gbejniet (tradicionalni sir, često se poslužuje uz med ili krekere)"] },
    { text: "Što te najviše privlači kod destinacije?", options: ["Svježa morska hrana i šareni ribarski čamci", "Vatrometi, proslave i lokalne tradicije", "Povijesne znamenitosti poput katakombi", "Prirodne ljepote i puno prilika za planinarenje, bicikliranje…", "Ručno izrađeni suveniri"] },
    { text: "Koja aktivnost te najviše privlači?", options: ["Posjet ribarskoj tržnici i uživanje u pogledu na luku ispunjenu šarenim čamcima", "Prisustvovanje velikim festivalima i druženje s mještanima", "Istraživanje povijesnih lokacija i kušanje lokalnih zalogaja", "Festival jagoda!", "Razgledavanje radionica gdje se izrađuju čipka, staklo i nakit"] },
    { text: "Koji tip iskustva želiš stvoriti na odmoru?", options: ["Autentično iskustvo lokalne kulture i tradicije", "Nezaboravne proslave i spektakularne događaje", "Duboko povijesno znanje i kulturno iskustvo", "Aktivno istraživanje prirode", "Kreativno iskustvo s lokalnim obrtnicima i rukotvorinama"] }
];

const resultData = {
    A: { image: "<?php echo $native_path ?>/assets/images/kviz01.jpg", text: "<h3>Tvoje idealno selo je Marsaxlokk!</h3><p>Ovo šarmantno ribarsko mjesto poznato je po svježoj morskoj hrani, šarenim čamcima luzzu i autentičnoj atmosferi.</p>" },
    B: { image: "<?php echo $native_path ?>/assets/images/kviz02.jpg", text: "<h3>Tvoje idealno selo je Mqabba!</h3><p>Ovo mjesto oduševljava spektakularnim vatrometima i tradicionalnim proslavama koje pružaju nezaboravno iskustvo.</p>" },
    C: { image: "<?php echo $native_path ?>/assets/images/kviz03.jpg", text: "<h3>Tvoje idealno selo je Rabat!</h3><p>Povijest, kultura i svakodnevni život spajaju se ovdje kroz znamenitosti poput katakombi svetog Pavla i ukusnih pastizzija.</p>" },
    D: { image: "<?php echo $native_path ?>/assets/images/kviz04.jpg", text: "<h3>Tvoje idealno selo je Mġarr!</h3><p>Idealan izbor za ljubitelje prirode, planinarenja uz obalu Qarraba Baya te sudjelovanja u Festivalu jagoda.</p>" },
    E: { image: "<?php echo $native_path ?>/assets/images/kviz05.jpg", text: "<h3>Tvoje idealno selo je Għarb!</h3><p>Ovo umjetničko selo na otoku Gozo savršeno je za ljubitelje ručnog rada poput čipke, filigranskog nakita i puhanog stakla.</p>" }
};

let currentQuestion = 0;
const answers = [];

function renderQuestion() {
    const question = questions[currentQuestion];
    document.getElementById('question-container').innerHTML = `
        <h4>${question.text}</h4>
        <div class="option-container">
            ${question.options.map((opt, index) => `<button onclick="selectAnswer('${String.fromCharCode(65 + index)}')" class="btn btn-outline-primary m-1">${opt}</button>`).join('')}
        </div>
    `;
}

function selectAnswer(answer) {
    answers.push(answer);
    currentQuestion++;
    if (currentQuestion < questions.length) {
        renderQuestion();
    } else {
        showResult();
    }
}

function showResult() {
    const counts = answers.reduce((acc, ans) => { acc[ans] = (acc[ans] || 0) + 1; return acc; }, {});
    const result = Object.keys(counts).reduce((a, b) => counts[a] > counts[b] ? a : b);
    document.getElementById('result').innerHTML = `
        <div class="card result-card">
            <img src="${resultData[result].image}" alt="Rezultat">
            <div class="card-body">
                ${resultData[result].text}
            </div>
        </div>
    `;
    document.getElementById('question-container').style.display = 'none';
}

renderQuestion();
</script>
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
