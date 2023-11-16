<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/jesen-u-osijeku';
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600&family=Italianno&family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">
    <style type="text/css">

    @-webkit-keyframes ptica { 0% { -webkit-transform:scale(1) } 100% {-webkit-transform: scale(1.2);} }
    @keyframes ptica { 0% { transform:scale(1) } 100% {transform: scale(1.2);} }


    @-webkit-keyframes langosice { 0% { margin-left:50px; } 50% {margin-left: 0px} 100% { margin-left:50px; } }
    @keyframes langosice { 0% { margin-left:50px; } 50% {margin-left: 0px} 100% { margin-left:50px; } }

    @-webkit-keyframes puls { 0% { margin-top:70px; } 50% {margin-top: 50px} 100% { margin-top:70px; } }
    @keyframes puls { 0% { margin-top:70px; } 50% {margin-top: 50px} 100% { margin-top:70px; } }
    </style>
</head>

<body class="pozadina" data-spy="scroll" data-target="#myScrollspy" data-offset="15">
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
              <div class="left-content show-up header-text">
                <div class="row">
                  <div class="col-lg-12 text-center">
                      <h3 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">Doživi jesen u</h3>
                      <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Osijeku</h1>
                      <img src="<?php echo $native_path ?>/assets/images/downarrow.svg" style="width:32px; height: auto; margin-top:70px; -webkit-animation: puls 1.5s ease-in-out 0s infinite; animation: puls 1.5s ease-in-out 0s infinite;" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 wow fadeIn"  data-wow-duration="1s" data-wow-delay="0s" style="position:relative; padding: 0; margin: 0;">
            <div class="image-gallery">
                <img src="<?php echo $native_path ?>/assets/images/osijek-01.png" alt="Slika 1">
            </div>
        </div>
        <div class="col-lg-5 wow fadeIn"  data-wow-duration="1s" data-wow-delay="0.5s" style="position:relative; padding: 0; margin: 0;">
            <p style="margin-top:20px">Prošle je godine proglašen najuspješnijom kontinentalnom destinacijom gradskog turizma. Istočno od Zagreba mjesto je s najviše noćenja. Ove godine obara nove rekorde po broju posjetitelja. Njegovi legice i lege domaćini su koji uvijek dočekuju raširenih ruku. Grad Osijek destinacija je za poželjeti.<br/><br/><span style="font-weight: 900;">Ovaj grad na Dravi osvojit će vas već na prvu, a u nastavku smo izdvojili što sve vrijedi posjetiti, isprobati i vidjeti kada se nađete u jednoj od glavnih turističkih prijestolnica istoka Lijepe naše.</span></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
                <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:32px; height: auto">
                <h4 class="wow fadeIn"  data-wow-duration="1s" data-wow-delay="0s">Osijek od</h4>
                <h2 class="wow fadeIn"  data-wow-duration="1s" data-wow-delay="0.5s">1 do 5</h2>
        </div>
      </div>
  </div>

  <div id="infografike" class="our-portfolio section">
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12"  style="padding-bottom: 80px !important;">
          <div class="loop owl-carousel">
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $native_path ?>/assets/images/infografika-1.png" alt="">
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $native_path ?>/assets/images/infografika-2.png" alt="">
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $native_path ?>/assets/images/infografika-3.png" alt="">
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $native_path ?>/assets/images/infografika-4.png" alt="">
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $native_path ?>/assets/images/infografika-5.png" alt="">
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
                <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:32px; height: auto">
                <h4 class="wow fadeIn"  data-wow-duration="1s" data-wow-delay="0s">Započni putovanje</h4>
                <h2 class="wow fadeIn"  data-wow-duration="1s" data-wow-delay="0.5s">korakom kulture</h2>
        </div>
      </div>
  </div>



  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-5" style="position:relative; padding: 0; margin: 0;">
            <h5>Dva nobelovca i dvostruki oskarovac uživali su u gradu na istoku Hrvatske. Imamo razloge da ga posjetite i vi</h5>
            <p style="padding-top: 0px;">Četvrti grad po veličini u Hrvatskoj i prošlogodišnja najuspješnija kontinentalna destinacija gradskog turizma. Istočno od Zagreba mjesto s najviše zabilježenih noćenja u Hrvatskoj. Pravi biser kontinenta i istoka zemlje. Mjesto u kojem živi, radi, obrazuje se, veseli, smije i gradi svoju sreću gotovo 100 tisuća legica i lega.<br/><br/>To je Osijek - pun sunca, uz Dravu miran i tih, grad koji uvijek ostaje najljepša pjesma i stih. Riječi su to poznate himne grada skladatelja Branka Mihaljevića - književnika, novinara i glazbenog urednika.<br/><br/>Ovaj najveći grad istočne Hrvatske u sebi krije mnoštvo zanimljivosti, a kada je riječ o kulturnoj i prirodnoj baštini, prava je riznica. Zato smo vas laganim korakom odlučili upoznati s gradskim vrijednostima koje zajedno sjaje najjače. Pa, krenimo.</p>
        </div>
        <div class="col-lg-7" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top" style="padding-top: 20px;">
            <div class="tekst-gornji">
              <img class="sjena" src="<?php echo $native_path ?>/assets/images/novafotkagrada.jpg">
              <p style="font-size: 14px; text-transform: uppercase; color:#9a8b63; padding:0; margin:0; padding-top:15px;">Davor Javorovic / Pixsell</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
                <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:32px; height: auto">
        </div>
      </div>
  </div>

  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top" style="padding-top: 20px;">
            <div class="tekst-gornji">
                <img src="<?php echo $native_path ?>/assets/images/osijek-fotka-01.png" />
            </div>
          </div>
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
            <h5>Mjesto nekadašnjeg osmog svjetskog čuda</h5>
            <p style="padding-top: 0px;">Ondje je još 1884. godine vozio prvi tramvaj u Hrvatskoj - konjski tramvaj, dok su se električnim tramvajem građani mogli voziti od 1926. godine. Njime su putovala i dvojica nobelovaca koji su u Osijeku pohađali srednju školu - Lavoslav Ružička i Vladimir Prelog. Među najistaknutijim Osječanima je i Josip Juraj Strossmayer, između ostaloga, zaslužan i za izgradnju jednog od simbola centra grada - konkatedrale Sv. Petra i Pavla iz davne 1898. godine.
            <br/><br/>Osijek je treći najveći studentski grad po broju fakulteta te je okružen s pet mostova koji vode do grada, a ondje je nekada bilo izgrađeno i osmo svjetsko čudo - Sulejmanov most. Nosi titulu grada s najviše zelenila i zelenih površina u Hrvatskoj. Broji više parkova nego što ima trgova, a ulaz jednog od najpopularnijih, Sakuntala parka, čuvaju ni manje ni više već - sfinge. Park je izvorno projektirao najveći osječki arhitekt svoga vremena, Viktor Axmann.</p>

              <div class="image-gallery5">
                <img src="<?php echo $native_path ?>/assets/images/sulejmanovmost.jpg" alt="Slika 16">
                <p style="font-size: 14px; text-transform: uppercase; color:#9a8b63; padding:0; margin:0; padding-top:15px; width:100%; text-align:center;">Sulejmanov most, NSK / Sfinge: Davor Javorovic, Pixsell</p>
            </div>
        </div>
      </div>
    </div>
  </div>



  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-left" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top" style="padding-top: 20px;">
            <div class="tekst-gornji" style="text-align:left" >
                <img class="sjena" src="<?php echo $native_path ?>/assets/images/osijek-fotka-03.png" />
                <h4 style="margin-top:20px;">Dobrodošli u kino koje radi već stojedanaest godina!</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-5" style="position:relative; padding: 0; margin: 0;">
            <h5>Kultno kino i grad dvostrukog oskarovca</h5>
            <p style="padding-top: 0px;">Nasuprot parka nalazi se i kultno osječko kino Urania koje radi posljednjih 111 godina te je omiljeno mjesto zabave i razonode brojnih domaćih, ali i stranih posjetitelja. Zaštitni je znak tradicionalne kinematografije, a u njemu se nalazi i mozaik u čast rođenog Osječanina i producenta svjetskog glasa, Branka Lustiga. Za one koji nisu znali, Lustig je ujedno i jedini Hrvat koji ima dvije filmske nagrade Oscar. Prvoga je dobio 1993. godine za Schindlerovu listu, a drugoga 2001. godine za film Gladijator.<br/><br/>Ondje će vas svakog dana dočekati bogat program filmova, predstava pa i stand-up nastupa, tako da svakako preporučamo posjet, a obavezno kupite i kokice na obližnjem kiosku. U škarnicli, kao u dobra stara vremena.<br/><br/>Dok hodate gradom, a jedna od ljepših šetnji je svakako Europskom avenijom i poznatim secesijskim nizom, nemojte se iznenaditi specifičnim osječkim slengom koji sadrži riječi i izraze koje ćete rijetko gdje izvan Osijeka i okolice čuti. Nemojte se začuditi ako vas netko prozove legicom ili legom prije no što se uopće upoznate, ako počne zbijati dumine/ šale na vaš račun ili vas pak uputi da pjehe/pješice otiđete do pije/tržnice koja je u jutarnjim satima pravi centar svih zbivanja.</p>
        </div>
      </div>
    </div>
  </div>


  <div class="container text-center">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
                <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:32px; height: auto"/>
        </div>
      </div>
  </div>
  <div class="container-fluid text-center">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
            <img src="<?php echo $native_path ?>/assets/images/langosice.png" class="langosice" style="-webkit-animation: langosice 1.5s ease-in-out 0s infinite; animation: langosice 1.5s ease-in-out 0s infinite;"/>
        </div>
      </div>
  </div>


  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <h5>Viseći most šetnjom spaja dva sasvim različita dijela grada</h5>
            <p>Kada smo već kod zbivanja, svake prve subote u mjesecu u Osijeku se održava Sajam antikviteta u Parku kralja Držislava. Ovim jedinstvenim događajem njeguje se višestoljetna tradicija sajmovanja koja je u gradu odavno postala svojevrsni trend. Svako izdanje posjeti više od tisuću ljudi, a ondje ćete naći preukusne langošice, unikatni nakit, ploče, knjige, antikni namještaj i još mnoštvo toga za svačiju radost.</p>

        </div>
      </div>
    </div>
  </div>


  <div id="infografike" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12"  style="padding-bottom: 20px !important;">

           <div class="image-gallery2">
                <img src="<?php echo $native_path ?>/assets/images/sajam01.jpg" alt="Slika 4">
            </div>
            <p style="font-size: 14px; text-transform: uppercase; color:#9a8b63; padding:0; margin:0; padding-top:15px; text-align: center;"> Dubravka Petric / Pixsell</p>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="margin-top:0; padding-top:0;">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 text-center">

        </div>
        <div class="col-lg-6">
            <p style="padding-top: 0px;">Tijekom jeseni u Osijeku svakako prošetajte i Pješačkim mostom, visećim mostom izgledom jedinstvenim u cijeloj Hrvatskoj. Most je poznat i po nekoliko drugih naziva, a neki od njih su i  Most mladosti te Bijeli most.<br/><br/>
            Izgrađen je 1981. godine te u Osijeku već desetljećima spaja urbani dio, odnosno gradsko središte s desne te rekreativno zeleno središte grada s lijeve obale rijeke Drave. Jedan je od najpoznatijih i najljepših simbola grada, motiv koji se najčešće nađe na fotografijama prolaznika te je nezaobilazan foto kutak za sve posjetitelje, ali i lokalce.</p>
        </div>
        <div class="col-lg-3">
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="margin-top:50px; margin-bottom:50px;background:#000 url('<?php echo $native_path ?>/assets/images/most.jpg') no-repeat; background-size: cover; background-position: 100% 100%;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center" style="height:450px; position: relative; text-align: center;">
            <p style="font-size: 14px; text-transform: uppercase; color:#fff; padding:0; margin:0; padding-top:15px; position: absolute; bottom:0; width:100%; text-align:center;">Zvonimir Barisin / Pixsell</p>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
            <h5>Nekoć vojna utvrda, danas mjesto znanja, kulture i zabave</h5>
            <p style="padding-top: 0px;">Najvrjedniji osječki biser svakako je barokna Tvrđa - nekoć vojna utvrda, danas mjesto znanja, kulture i zabave. Lokacija je najvećeg muzeja općeg tipa u Hrvatskoj - Muzeja Slavonije, a ove je godine u potpunosti rekonstruirana u što je uloženo više od tri milijuna eura.<br/><br/>Ondje se možete upustiti u neke od najtraženijih turističkih obilazaka tijekom kojih ćete saznati popularne osječke legende. Pripremite se upoznati generala Von Beckersa čije je tijelo uzidano u zidine Tvrđe.<br/><br/>Saznat ćete sve o plaćanju bećarine, odnosno poreza na veselje, kročit ćete Osmanskom turom i upoznati nestašnu priču o vojnicima, gostionicama i bludnicama. Nezaobilazno odredište Tvrđe je i kužni pil ili zavjetni spomenik Presvetog Trojstva podignut u 18. stoljeću u spomen na zavjet protiv kuge. Njegova se vizura nalazila i na novčanici od 200 kuna.</p>
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">

           <div class="image-gallery3">
                <img src="<?php echo $native_path ?>/assets/images/tvrda.png" alt="Slika 10">
            </div>

        </div>
      </div>
    </div>
  </div>

  <div class="container text-center">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
                <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:32px; height: auto"/>
                <h4 class="wow fadeIn"  data-wow-duration="1s" data-wow-delay="0s">Nastavi putovanje</h4>
                <h2 class="wow fadeIn"  data-wow-duration="1s" data-wow-delay="0.5s">iza kulisa gastro scene</h2>
        </div>
      </div>
  </div>

  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top" style="padding-top: 20px;">
            <div class="tekst-gornji" style="padding:20px" >
                <img class="sjena" src="<?php echo $native_path ?>/assets/images/osijek-fotka-07.png" />
            </div>
          </div>
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
            <h5>Specijaliteti od fajferice i pivo s tradicijom proizvodnje iz 17. stoljeća. Osječku gastro scenu ne smijete propustiti</h5>
            <p style="padding-top: 0px;">Stanovnici istoka Hrvatske nadaleko su poznati kao dobri domaćini, ali i gostoljubivi, radišni i veseli gurmani. U sekundi ćete im postati lega, buraz ili bracika, a sve to, naravno, ne može proći bez dobra zalogaja na tanjuru i ukusna pića u čaši. U ovom dijelu vas zato vodimo iza kulisa gastro scene grada Osijeka i okolice te donosimo ideje gdje ove jeseni ondje pronaći zalogaj sreće, u doslovnom smislu.</p>
            <img src="<?php echo $native_path ?>/assets/images/svinje.png"/>
            <p>Središnji događaj gastro turizma u Osijeku je jesenski Osijek Gourmet - manifestacija koja svake godine stavlja naglasak na jednu grupu premium lokalnih proizvoda te na jedinstven način predstavlja gourmet ponudu grada i regije.<br/><br/>Prošle je godine tema bila tradicionalna crna slavonska svinja, ove je godine u fokusu riječna riba, a u izdanjima koja se pripremaju idućih godina bit će riječ o divljači i kulenu. Sve su to važni dijelovi autentične regionalne kulinarske baštine koju vrijedi istražiti.<br/><br/>Osim degustacije gastro specijaliteta u restoranima s posebno osmišljenim jelovnicima i promotivnim cijenama, u sklopu manifestacije Osijek Gourmet organiziraju se i razne panel rasprave, radionice i okrugli stolovi na kojima svi zainteresirani mogu naučiti nešto više o samoj osječkoj gastro sceni te zanimljivostima o pojedinoj lokalnoj namirnici.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
                <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:32px; height: auto"/>
        </div>
      </div>
  </div>


  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-7" style="position:relative; padding: 0; margin: 0;">
            <h5>Ručajte u zaštićenom spomeniku kulture</h5>
            <p style="padding-top: 0px;">Autohtone slavonske proizvode svakako valja začiniti vrhunskim vinima 10 osječkih proizvođača ili kvalitetnim pivom čija je tradicija proizvodnje u ovom kraju započela još davne 1664. godine.<br/><br/>Tradiciju od nekoliko desetljeća imaju i brojne kultne gastro adrese koje ne smijete propustiti kada se nađete u ovom gradu na Dravi. Riječ je o samo nekim od omiljenih restorana lokalaca i turista, koji već godinama dobro kotiraju na ljestvicama gastro senzacija.<br/><br/>Tako smo na popis stavili restoran Zimska luka smješten unutar velebnog Hotela Osijek, a tu je i restoran Waldinger uz istoimeni hotel čija vizura krasi Županijsku ulicu već stoljećima, zbog čega je sama zgrada hotela zaštićena kao spomenik kulture. Svakako vrijedi spomenuti i elegantni restorančić Lumiere, tik uz kultno osječko kino Urania.<br/><br/>Neke od najboljih ribljih specijaliteta karakteristične za istok Hrvatske kušajte pak u Čardi kod Baranjca, mjestu poznatom po fantastičnom fiš paprikašu, a savjetujemo posjetiti i restoran Kod Javora koji više od 40 godina oduševljava svoje goste prekrasnim pogledom na rijeku Dravu. </p>
        </div>
        <div class="col-lg-5" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top" style="padding-top: 20px;">
            <div class="tekst-gornji-s-pozadinom" style="padding-bottom:160px !important">
                <h5 style="margin-top: 0; padding-top:0; font-size:30px !important; font-weight:900 !important; margin-bottom:15px;"><span style="color:#223A5E;">Zapiši ove</span> kultne gastro adrese</h5>
                <p style="padding:10px 30px !important; color:#000; margin-top:0px !important;">
                <span style="font-weight: 700;">Zimska luka</span>, Šamačka 4<br/>
                <span style="font-weight: 700;">Waldinger</span>, Županijska ulica 8<br/>
                <span style="font-weight: 700;">Lumiere</span>, Šetalište kardinala Franje Šepera 8<br/>
                <span style="font-weight: 700;">Projekt 9</span>, Gornjodravska obala bb<br/>
                <span style="font-weight: 700;">Bijelo-plavi</span>, Ulica Martina Divalta 8<br/>
                <span style="font-weight: 700;">Rustika</span>, Ulica Pavla Pejačevića 32<br/>
                <span style="font-weight: 700;">Čingi lingi čarda</span>, Ulica Kralja Zvonimira, Bilje<br/>
                <span style="font-weight: 700;">Crna svinja</span>, Ulica Ovčara 3, Čepin<br/>
                <span style="font-weight: 700;">Kod Baranjca</span>, Biljska cesta 54<br/>
                <span style="font-weight: 700;">Kod Javora</span>, Donjodravska ulica 14
                </p>
                <img src="<?php echo $native_path ?>/assets/images/tanjur.png" style="position: absolute; width:50%; height: auto;" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog">
    <div class="container-fluid" style="margin:0; padding:0; margin-top: 50px;">
      <div class="row" style="padding:0; margin:0;">
        <div class="col-lg-4 text-center" style="margin:0; padding:0; position: relative;">
            <img src="<?php echo $native_path ?>/assets/images/hrana01.jpg" />
            <p style="position: absolute; bottom: 0; text-align: center; color: #fff;">Satrica: svježi sir s vrhnjem, sjeckanim mladim lukom i tucanom sušenom crvenom paprikom</p>
        </div>
        <div class="col-lg-4 text-center" style="margin:0; padding:0; position: relative;">
            <img src="<?php echo $native_path ?>/assets/images/hrana02.jpg" />
            <p style="position: absolute; bottom: 0; text-align: center; color: #fff; width: 100%;">Odrezak od crne slavonske svinje<br/>Davor Javorovic / Pixsell</p>
        </div>
        <div class="col-lg-4 text-center" style="margin:0; padding:0; position: relative;">
            <img src="<?php echo $native_path ?>/assets/images/hrana03.jpg" />
            <p style="position: absolute; bottom: 0; text-align: center; color: #fff; width: 100%;">Tradicionalni baranjski kulen<br/>Dino Stanin / Pixsell</p>
        </div>
      </div>
      <div class="row" style="padding:0; margin:0;">
        <div class="col-lg-4 text-center" style="margin:0; padding:0; position: relative;">
            <img src="<?php echo $native_path ?>/assets/images/hrana04.png" />
            <p style="position: absolute; bottom: 0; text-align: center; color: #fff;">Satrica: svježi sir s vrhnjem, sjeckanim mladim lukom i tucanom sušenom crvenom paprikom</p>
        </div>
        <div class="col-lg-4 text-center" style="margin:0; padding:0; position: relative;">
            <img src="<?php echo $native_path ?>/assets/images/hrana05.png" />
            <p style="position: absolute; bottom: 0; text-align: center; color: #fff;">Perkelt od soma: odrezak od soma, luka, češnjaka, mljevene crvene paprike, blage i ljute, te slanine. </p>
        </div>
        <div class="col-lg-4 text-center" style="margin:0; padding:0; position: relative;">
            <img src="<?php echo $native_path ?>/assets/images/hrana06.jpg" />
             <p style="position: absolute; bottom: 0; text-align: center; color: #fff; width: 100%;">Šaran na rašljama, posluživan često uz grah ili krumpir salatu<br/>Neva Zganec / Pixsell</p>
        </div>
      </div>
    </div>
  </div>




  <div class="container text-center">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
                <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:32px; height: auto; margin-top:80px;"/>
        </div>
      </div>
  </div>


  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-7" style="position:relative; padding: 0; margin: 0;">
            <h5>Kultna mjesta već nekoliko desetljeća</h5>
            <p style="padding-top: 0px;">Restoran Bijelo-plavi u Divaltovoj ulici na broju 8 mjesto je koje će vam svaki lokalac preporučiti jer svoje goste dočekuje još od davne 1978. godine. Ime je dobio po navijačkim bojama Nogometnog kluba Osijek, a atmosfera je domaća, dosljedna sebi već godinama.<br/><br/>Kultni status u gradu ima i restoran Rustika u samom centru, u kojem uvijek možete kušati fantastičnu pizzu, sočno meso s roštilja ili pak ukusne pržene lignje, a jelovnik je obogaćen i mnogim drugim specijalitetima.<br/><br/>Budući da se gastro scena u Osijeku vrlo dobro razvija, pronašli smo i neke novije adrese te ih uvrstili na popis ‘kušajte i guštajte’. Tu se tako našao Projekt 9 - restoran na brodu usidrenom uz samu Promenadu, najdužu riječnu šetnicu u Hrvatskoj. Odiše elegancijom i modernim dizajnom, a pogled na Dravu jedan mu je od najjačih aduta.</p>
        </div>
        <div class="col-lg-4 text-left" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top" style="padding-top: 20px;">
            <div class="tekst-gornji" style="text-align:left" >
                <h6 style="margin-bottom:20px;">Projekt 9 prvi je solidarni restoran u Osijeku koji će osobama slabijeg imovinskog stanja ponuditi zdrav obrok.</h6>
                <img src="<?php echo $native_path ?>/assets/images/doris.png" style="margin-bottom:20px;" />
                <h6 style="margin-bottom:20px;">“Da priuštimo da mogu uživati u restoranu i da mogu uživati u finoj hrani, iako si to sami ne mogu priuštiti”, objasila je voditeljica restorana Doris Vukelja. </h6>
            </div>
          </div>
        </div>
        <div class="col-lg-1 text-left" style="position:relative; padding: 0; margin: 0;">
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
                <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:32px; height: auto; margin-top:80px;"/>
        </div>
      </div>
  </div>

  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 text-left" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top" style="padding-top: 20px; text-align: center;">
            <div class="tekst-gornji">
                <img src="<?php echo $native_path ?>/assets/images/zvono.png" />
                <h6 style="width:80%;">Dvaput razmislite prije no što povučete konop u Čingi Lingi Čardi.</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-7" style="position:relative; padding: 0; margin: 0;">
            <h5>Istražite okolicu - ugodno će vas iznenaditi</h5>
            <p style="padding-top: 0px;">Na putu do ili iz Osijeka, ovisno iz kojeg smjera dolazite, također su se sakrile dvije vrlo popularne adrese na kojima se nepce može počastiti autohtonim i tradicionalnim lokalnim proizvodima.<br/><br/>Prva je Čingi Lingi Čarda u Bilju koja je svoj kultni naziv stekla odavno kada je bila poznata kao mjesto veselja, žive glazbe i odlične klope. Prije dvije godine zasjala je u obnovljenom ruhu i od tada je gotovo svakog dana puna, a zaštitni znak su joj ljuljačka na ulazu, kamin s Balaševićevim stihovima i zvono na koje ne biste baš voljeli pozvoniti.<br/><br/>Naime, stara legenda, koja se očuvala i dandanas, kaže da onaj tko povuče konop zvona, time iskazuje želju da sve goste prisutne u čardi počasti pićem na svoj račun. Zato, budite oprezni.<br/><br/>Druga neizostavna gastro lokacija u okolici Osijeka nalazi se u Čepinu. Riječ je o restoranu Crna svinja smještenom u kompleksu Terra Negra Country Cluba. Najpoznatiji je po specijalitetima već spomenute tradicionalne fajferice, a tradicionalne namirnice sezonski se spajaju sa svjetskim recepturama, tako da nikako nemojte propustiti kušati novi jesenski jelovnik. </p>
            <img class="sjena" src="<?php echo $native_path ?>/assets/images/os-fotka.png" />
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top" style="padding-top: 20px;">
            <div class="tekst-gornji-s-pozadinom" style="padding-bottom:160px !important">
                <h5 style="margin-top: 0; padding-top:0; font-size:30px !important; font-weight:900 !important; margin-bottom:15px;"><span style="color:#223A5E;">I ove adrese</span> stavi na popis</h5>
                <p style="padding:10px 30px !important; color:#000; margin-top:0px !important;">
                  <span style="font-weight:700">Franz Koch</span>, Ulica Franje Kuhača 10<br/>
                  <span style="font-weight:700">LULU Fusion Bistro</span>, Sunčana ulica 5<br/>
                  <span style="font-weight:700">Pépé pizza place</span>, Šamačka 4<br/>
                  <span style="font-weight:700">Ventidue Pizza & Bar</span>, Ulica Stjepana Radića 22<br/>
                  <span style="font-weight:700">Woki</span>, Trg Slobode 6<br/>
                  <span style="font-weight:700">Umami</span>, Ul. Kardinala Alojzija Stepinca 59<br/>
                  <span style="font-weight:700">American Bar Dollar</span>, Županijska ulica 5
                </p>
                <img src="<?php echo $native_path ?>/assets/images/tanjur.png" style="position: absolute; width:50%; height: auto;" />
            </div>
          </div>
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
            <h5>Svjetski okusi u Osijeku</h5>
            <p style="padding-top: 0px;">Ako se pak zasitite lokalnih specijaliteta, što nekako sumnjamo da hoćete, ili jednostavno želite isprobati nešto novo i drugačije, ne brinite. U Osijeku se nalazi i nekoliko destinacija idealnih za gastro kreativce i istraživače koji vole isprobati čari internacionalnih okusa.<br/><br/>Za fantastičan sushi i azijske specijalitete zaputite se u Tvrđu na adresu Franje Kuhača 10 gdje se nalazi Franz Koch, a nećete pogriješiti ni odlaskom u Ulicu Kardinala Alojzija Stepinca na broju 59 gdje se šire autentični mirisi Umamija.<br/><br/>Čari azijskog fusion bistroa možete pak okušati u Sunčanoj ulici na relativno novoj adresi LULU Fusion Bistroa čije je otvaranje dalo poprilično intrigantnu notu ritmu osječke gastro scene. Azijske delicije pripremaju se i u zalogajnici Woki - idealnoj stanici ako vam je žurno potrebna hrana za ponijeti.<br/><br/>Prvoklasnu recepturu talijanskih napoletana pizza svim ljubiteljima preporučamo isprobati u modernom Pépé pizza placeu koje je u manje od godinu dana osvojilo brojne simpatije. Tu je i Ventidue Pizza & Bar u uvijek vibrantnoj Radićevoj ulici koji će vas oduševiti kvalitetnim sastojcima i šarmantnim interijerom. Primamljive burgere i američke specijalitete valja pak isprobati u American baru Dollar čije je dvorište posebno prekrasno tijekom jeseni.<br/><br/>Sve u svemu, u Osijeku zasigurno nećete ostati gladni jer vas ondje čeka još mnoštvo adresa na kojima su tanjuri uvijek puni, isto kao i zadovoljstvo gostiju. I ne brinite - u ovom su gradu najpopularnije mjere 90-90-90. </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
                <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:32px; height: auto; margin-top:80px;"/>
                <h4 class="wow fadeIn"  data-wow-duration="1s" data-wow-delay="0s">Putovanje završite</h4>
                <h2 class="wow fadeIn"  data-wow-duration="1s" data-wow-delay="0.5s">osmijehom</h2>
        </div>
      </div>
  </div>

  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
            <h5>Porez na veselje uspomena je koja svjedoči da ovom gradu zabave ne fali. Evo što raditi ove jeseni u Osijeku</h5>
            <p style="padding-top: 0px;">Legenda o bećarini najpoznatija je priča koju ćete čuti u Osijeku. U nekim davnim vremenima, dok još nije ni postojala javna rasvjeta, u Tvrđi, mjestu poznatom po dobrom provodu vojnika i ostalih slučajnih ili namjernih prolaznika, plaćao se porez na veselje.<br/><br/>Svakome tko bi hodao ulicama u kasne noćne sate, naplaćena je bećarina za uslugu paljenja lampe koja bi mu osvijetlila put i osigurala siguran dolazak do kuće ili pak do neke nove gostionice.<br/><br/>Bećarina je tako ostala kao vrijedna uspomena koja svjedoči o tome da se u Osijeku oduvijek dobro veselilo, a kako bismo to i provjerili i na vaše lice stavili osmijeh za kraj, istražili smo gdje sve potražiti zabavu ako se ove jeseni nađete u Osijeku. </p>
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top" style="padding-top: 20px;">
            <div class="tekst-gornji" style="padding:20px" >
              <div class="image-gallery4">
                <img src="<?php echo $native_path ?>/assets/images/becari.png" alt="Slika 14">
            </div>
                <p style="font-size: 14px; text-transform: uppercase; color:#9a8b63; padding:0; margin:0; padding-top:15px; text-align:center;">ADOBE STOCK</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="container text-center">
      <div class="row">
        <div class="col-lg-12 text-center" style="position:relative; padding: 0; margin: 0;">
                <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:32px; height: auto; margin-top:80px;"/><br/>
                <img src="<?php echo $native_path ?>/assets/images/lampa.png" style="width:180px; height: auto;"/><br/>
                <h6>Nastavi putovanje u mraku jer ako je upališ - platit ćeš porez!</h6><br/>
                <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:32px; height: auto; "/>
        </div>
      </div>
  </div>

  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-left" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top" style="padding-top: 20px; text-align: center;">
            <div class="tekst-gornji">
                <img class="sjena" src="<?php echo $native_path ?>/assets/images/glazbom.png" />
            </div>
          </div>
        </div>
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
            <h5>Glazbom dirnut će vam dušu </h5>
            <p style="padding-top: 0px;">Onima koji ovaj grad planiraju posjetiti s prijateljima, svakako savjetujemo istražiti Tvrđu kao glavnu destinaciju ludog provoda. U samom srcu barokne vojne utvrde čije su zidine danas zaštitni znak osječke vizure, smjestila su se mjesta u kojima se stvaraju najljepše uspomene.<br/><br/>Kao top pet lokacija za izlazak s ekipom izdvojili smo Pivnicu Bure-Bar, Gastro pub Bulart 1887, Club EXIT i Kafanicu - svi se nalaze u Tvrđi, na samo par minuta jedan od drugoga. Ondje nikad ne nedostaje dobre glazbe i sjajne atmosfere. U centru grada pak nemojte zaobići Axmann Pub čije zidove krase najznačajnija djela arhitekta i urbanista Viktora Axmanna, dok je prostor svakog vikenda ispunjen notama lokalnih izvođača.<br/><br/>U Pivnicu Bure-Bar dolaze ljubitelji strane glazbe i trash hitova, u Bulartu vikendom uvijek nastupa neka živa glazba - od tamburica i narodne glazbe do rock bendova. Kafanica je mjesto gdje se uvijek mogu čuti zvuci glazbe koja dira dušu. Club EXIT poznat je pak kao mjesto alternativne scene, a omiljeno je okupljalište već generacijama.</p>
        </div>
      </div>
    </div>
  </div>


  <div class="container text-center">
      <div class="row">
        <div class="col-lg-12" style="position:relative; padding: 0; margin: 0;">
                <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:32px; height: auto; margin-top:20px;"/>
        </div>
      </div>
  </div>

  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-6" style="position:relative; padding: 0; margin: 0;">
            <h5>Galaksija zabave i doza adrenalina</h5>
            <p style="padding-top: 0px;">Ako u grad na Dravi stignete s obitelji koja broji i one najmlađe članove, ne brinite, neće vam kukati da im je dosadno. Posjetite s njima Astro Garden u kojem ih čeka galaksija dobre zabave, game room i igraonica, a osim ovog mjesta, izrazito su popularne i igraonice Twister Fun Park i Todoland.<br/><br/>One malo starije osnovnoškolce i srednjoškolce, ali i članove njihovih obitelji, oduševit će pak ideja da se okušaju u akciji i adrenalinskim aktivnostima na novom mjestu osječke fun scene pod nazivom Game Over: Laser Tag & Escape Room.<br/><br/>U Psycho Escape Roomu najmračnije strahote pretvaraju se u stvarnost, sat otkucava 60 minuta, a izlaz nije lako pronaći. Mislite li da ćete uspjeti riješiti zagonetku i izbaviti se iz sobe napetosti? – Ne znate dok ne pokušate.<br/><br/>Laser tag, uzbudljiva i interaktivna igra posljednjih je godina stekla popularnost na domaćem tržištu, a upravo u Osijeku se nalazi najmodernija Laser tag arena u čitavoj Hrvatskoj. U adrenalinskom okruženju istovremeno se može okušati čak 16 igrača, a svoje vještine mogu brusiti u prostoru većem od 300 metara kvadratnih.</p>
        </div>
        <div class="col-lg-6 text-left" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top" style="padding-top: 20px; text-align: center;">
            <div class="tekst-gornji">
                <img class="sjena" src="<?php echo $native_path ?>/assets/images/glazba-2.png" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div id="clanci" class="blog">
    <div class="container-fluid" style="margin:0; padding:0; margin-top: 50px;">
      <div class="row" style="padding:0; margin:0;">
        <div class="col-lg-4 text-center" style="margin:0; padding:0; position: relative;">
            <img src="<?php echo $native_path ?>/assets/images/izlasci01.jpg" />
        </div>
        <div class="col-lg-4 text-center" style="margin:0; padding:0; position: relative;">
            <img src="<?php echo $native_path ?>/assets/images/izlasci02.jpg" />
        </div>
        <div class="col-lg-4 text-center" style="margin:0; padding:0; position: relative;">
            <img src="<?php echo $native_path ?>/assets/images/izlasci03.jpg" />
        </div>
      </div>
      <div class="row" style="padding:0; margin:0;">
        <div class="col-lg-4 text-center" style="margin:0; padding:0; position: relative;">
            <img src="<?php echo $native_path ?>/assets/images/izlasci04.jpg" />
        </div>
        <div class="col-lg-4 text-center" style="margin:0; padding:0; position: relative;">
            <img src="<?php echo $native_path ?>/assets/images/izlasci05.jpg" />
        </div>
        <div class="col-lg-4 text-center" style="margin:0; padding:0; position: relative;">
            <img src="<?php echo $native_path ?>/assets/images/izlasci06.jpg" />
        </div>
      </div>
    </div>
  </div>


  <div class="container text-center">
      <div class="row">
        <div class="col-lg-12 text-center" style="position:relative; padding: 0; margin: 0;">
                <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:32px; height: auto; margin-top:80px;"/><br/>
                <img src="<?php echo $native_path ?>/assets/images/ptica.png" style="width:300px; height: auto;  -webkit-animation: ptica 10s ease-in-out 0s forwards; animation: ptica 10s ease-in-out 0s forwards;"/><br/>
                <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width:32px; height: auto;"/>
        </div>
      </div>
  </div>


  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-left" style="position:relative; padding: 0; margin: 0;">
          <div class="sticky-top" style="padding-top: 20px; text-align: center;">
            <div class="tekst-gornji">
                <img src="<?php echo $native_path ?>/assets/images/zoo.png" />
                <h6 style="text-align:center; margin-top:40px;">Jedini zoološki vrt u Hrvatskoj<br/>u kojem možete vidjeti žirafe.</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-5" style="position:relative; padding: 0; margin: 0;">
            <h5>Uskočite u ulogu timaritelja</h5>
            <p style="padding-top: 0px;">Još jedno jedinstveno iskustvo za cijelu obitelj možete pronaći i u Zoološkom vrtu Osijek - površinom najvećem u Hrvatskoj i kako lokalci vole reći, ‘zoološkom vrtu po mjeri životinja, a ne čovjeka’ budući da se prostire na 11 hektara, okružen zelenilom i mirom.<br/><br/>Ondje je dostupan poseban program ‘Postani timaritelj na jedan dan’ tijekom kojeg posjetitelji imaju priliku naučiti kako izgleda posao timaritelja te zajedno s njima sudjelovati u aktivnostima poput pripreme hrane, hranjenja životinja i čišćenja nastambi.<br/><br/>Zoološki vrt Osijek poseban je po tome što je ondje nekoć boravio najstariji jaguar na svijetu, nastamba za dikobraze izgrađena je od autohtone stare popločene kocke kojom je bila uređena barokna Tvrđa, broji više od 90 životinjskih vrsta i više od 1000 jedinki, ima svoje oporavilište za životinje, a otvoren je 1955. godine.</p>
        </div>
      </div>
    </div>
  </div>

    <div id="clanci" class="blog" style="padding-bottom:0px !important">
    <div class="container-fluid" style="margin:0; padding:0; margin-top: 50px;">
      <div class="row" style="padding:0; margin:0;">
        <div class="col-lg-12 text-center" style="margin:0; padding:0; position: relative;">
            <img src="<?php echo $native_path ?>/assets/images/zirafa.jpg" />
        </div>
      </div>
    </div>
  </div>


   <div class="container-fluid" style="margin-top: 0px;padding-left:0 !important; padding-right:0 !important; position: relative; background:#fff;">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
           <div style="padding-top:100px; padding-bottom: 100px; ">
            <p style="text-align: center;">Autor teksta: Ana Martinić<br/>
            Kreativno vodstvo: Kristina Livaja<br/>
            Grafičko oblikovanje: Reset<br/>
          </p>
              <p style="text-align: center;">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom TZ Grada Osijeka po najvišim uredničkim standardima Telegram Media Grupe.<br/><br/>
              <img style="width:160px; height: auto; padding: 10px" src="<?php echo $native_path ?>/assets/images/telegram-studio.png" />
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
      const images = ["<?php echo $native_path ?>/assets/images/osijek-01.png", "<?php echo $native_path ?>/assets/images/osijek-02.png", "<?php echo $native_path ?>/assets/images/osijek-03.png"];
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
      setInterval(showNextImage, 4000);

      // Inicijalno postavljanje slike
      updateImage();


      const images2 = ["<?php echo $native_path ?>/assets/images/sajam01.jpg","<?php echo $native_path ?>/assets/images/sajam02.jpg","<?php echo $native_path ?>/assets/images/sajam03.jpg","<?php echo $native_path ?>/assets/images/sajam04.jpg","<?php echo $native_path ?>/assets/images/sajam05.jpg","<?php echo $native_path ?>/assets/images/sajam06.jpg"];
      let currentImageIndex2 = 0;
      const imageElement2 = document.querySelector(".image-gallery2 img");

      function updateImage2() {
          const imageUrl = images2[currentImageIndex2];
        imageElement2.style.opacity = 0; // Postavite opacity na 0 prije promjene slike
        setTimeout(() => {
          imageElement2.src = imageUrl;
          imageElement2.alt = `Slika ${currentImageIndex + 1}`;
          imageElement2.style.opacity = 1; // Postavite opacity na 1 nakon promjene slike
        }, 500); // Promijenite 1000 ms na željeni vremenski interval za tranziciju
      }
      function showNextImage2() {
          currentImageIndex2 = (currentImageIndex2 + 1) % images2.length;
          updateImage2();
      }

      // Postavite interval za automatsko klizanje druge galerije svakih 4 sekunde (4000 ms)
      setInterval(showNextImage2, 3000);

      // Inicijalno postavljanje slike
      updateImage2();


      const images3 = ["<?php echo $native_path ?>/assets/images/tvrda.png","<?php echo $native_path ?>/assets/images/tvrda02.png","<?php echo $native_path ?>/assets/images/tvrda03.png"];
      let currentImageIndex3 = 0;
      const imageElement3 = document.querySelector(".image-gallery3 img");

      function updateImage3() {
          const imageUrl = images3[currentImageIndex3];
        imageElement3.style.opacity = 0; // Postavite opacity na 0 prije promjene slike
        setTimeout(() => {
          imageElement3.src = imageUrl;
          imageElement3.alt = `Slika ${currentImageIndex + 1}`;
          imageElement3.style.opacity = 1; // Postavite opacity na 1 nakon promjene slike
        }, 500); // Promijenite 1000 ms na željeni vremenski interval za tranziciju
      }
      function showNextImage3() {
          currentImageIndex3 = (currentImageIndex3 + 1) % images3.length;
          updateImage3();
      }

      // Postavite interval za automatsko klizanje druge galerije svakih 4 sekunde (4000 ms)
      setInterval(showNextImage3, 3000);

      // Inicijalno postavljanje slike
      updateImage3();


      const images4 = ["<?php echo $native_path ?>/assets/images/becari.png","<?php echo $native_path ?>/assets/images/becari02.png"];
      let currentImageIndex4 = 0;
      const imageElement4 = document.querySelector(".image-gallery4 img");

      function updateImage4() {
          const imageUrl = images4[currentImageIndex4];
        imageElement4.style.opacity = 0; // Postavite opacity na 0 prije promjene slike
        setTimeout(() => {
          imageElement4.src = imageUrl;
          imageElement4.alt = `Slika ${currentImageIndex + 1}`;
          imageElement4.style.opacity = 1; // Postavite opacity na 1 nakon promjene slike
        }, 500); // Promijenite 1000 ms na željeni vremenski interval za tranziciju
      }
      function showNextImage4() {
          currentImageIndex4 = (currentImageIndex4 + 1) % images4.length;
          updateImage4();
      }

      // Postavite interval za automatsko klizanje druge galerije svakih 4 sekunde (4000 ms)
      setInterval(showNextImage4, 3000);

      // Inicijalno postavljanje slike
      updateImage4();



      const images5 = ["<?php echo $native_path ?>/assets/images/sulejmanovmost.jpg","<?php echo $native_path ?>/assets/images/sfinge.jpg"];
      let currentImageIndex5 = 0;
      const imageElement5 = document.querySelector(".image-gallery5 img");

      function updateImage5() {
          const imageUrl = images5[currentImageIndex5];
        imageElement5.style.opacity = 0; // Postavite opacity na 0 prije promjene slike
        setTimeout(() => {
          imageElement5.src = imageUrl;
          imageElement5.alt = `Slika ${currentImageIndex + 1}`;
          imageElement5.style.opacity = 1; // Postavite opacity na 1 nakon promjene slike
        }, 500); // Promijenite 1000 ms na željeni vremenski interval za tranziciju
      }
      function showNextImage5() {
          currentImageIndex5 = (currentImageIndex5 + 1) % images5.length;
          updateImage5();
      }

      // Postavite interval za automatsko klizanje druge galerije svakih 4 sekunde (4000 ms)
      setInterval(showNextImage5, 3000);

      // Inicijalno postavljanje slike
      updateImage5();
</script>

    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
