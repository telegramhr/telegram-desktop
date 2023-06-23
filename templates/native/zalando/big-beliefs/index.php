<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/zalando/big-beliefs';
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
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@900&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">

</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="15">
<!-- this is required to load all the analytics and other scripts -->
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
                  <div class="col-lg-8 offset-lg-2 text-center">
                    <h6><img src="<?php echo $native_path ?>/assets/images/logos.png" style="max-width: 300px;" /></h6>
                    <h2>30 KOMADA - 6 LOOKOVA<br/>SVE ŠTO TI TREBA OVOG LJETA</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
         <video autoplay muted loop id="myVideo">
                <source src="<?php echo $native_path ?>/assets/images/hero.mp4" type="video/mp4">
        </video>
    </div>
  </div>




  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/zalando-01.jpg"/><br/><br/>
            <img src="<?php echo $native_path ?>/assets/images/zalando-02.jpg"/>
        </div>
        <div class="col-lg-6">
          <div class="sticky-top">
            <p class="tekst-gornji">Termin kapsulne garderobe nešto je s čime modni mediji vole koketirati iz sezone u sezonu. Iza ideje o takvoj garderobi krije se tendencija da se sa svega nekoliko ključnih komada kreira ormar u kojem ne nedostaje baš ništa i iz kojeg se lako mogu iskombinirati modno osviještena izdanja za baš sve prigode od poslovnog ručka do trčanja za klincima na plaži. No, je li ta ideja zaista izvediva u praksi? Je li moguće nabaviti samo određen broj komada s kojima ćete biti osigurani za baš sva iskustva koja vas čekaju?  </p>
            <p class="tekst-donji">U suradnji sa Zalandom testirali smo kako kapsulna garderoba funkcionira u praksi. Odabrali smo 30 komada iz njihove ponude i od njih složili tri osnovne odjevne kombinacije za posebne prigode, casual izlaske i sport, te još tri dodatne kombinacije izvedene iz ovih osnovnih izdanja ponavljajući komade koje smo već koristili kako bismo vam pokazali koliko je jednostavno graditi nove odjevne kombinacije kad imate kvalitetnu bazu.</p>
          </div>
        </div>

      </div>
    </div>
  </div>


  <div id="sponsors" class="sponsors">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
              <h4>Transformativnost klasičnog kupaćeg kostima</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto" src="<?php echo $native_path ?>/assets/images/kombinacija-1-01.jpg" />
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 offset-lg-3 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
              <p style="padding-top:100px; padding-bottom: 100px;">Krenuli smo od ključnog komada koji svima treba za ljetni odmor - vječnog crnog kupaćeg kostima. Klasično izdanje za plažu s prostranim cekerom i upečatljivim šeširom nešto je o čemu ne treba puno govoriti. Ta kombinacija funkcionira već stotinjak godina otkad su se žene prestale sasvim pokrivati na plažama i nikada neće izaći iz mode.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 text-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-1-02.jpg" />
          </div>
          <div class="col-lg-6 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="1s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-1-03.jpg" />
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5 text-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-1-04.jpg" />
              <p style="margin-top: 100px;"> Kombinacija 1: Kupaći kostim <a href="https://www.zalando.hr/filippa-k-asymmetric-swimsuit-kupaci-kostim-black-f1481g00f-q11.html">Filippa K </a>139,95€, Torba <a href="https://www.zalando.hr/arket-acapulco-velika-torba-beige-aru51h01e-b11.html">Arket</a> 88,79€, Ručnik za plažu <a href="https://www.zalando.hr/masikoeh-marine-terry-rucnik-za-plazu-beige-mmf81000x-b11.html">MAЯSIKØH</a> 45€, Šešir <a href="https://www.zalando.hr/eugenia-kim-mirabel-sesir-natural-eu651b001-b11.html">Eugenia Kim</a> 492,27€, Prsten <a href="https://www.zalando.hr/pilgrim-valkyria-prsten-gold-coloured-pi851l0fj-f11.html">Pilgrim</a> 34,38€</p>
          </div>
          <div class="col-lg-7 text-center wow fadeInRight order-first order-md-1" data-wow-duration="0.5s" data-wow-delay="1s" >
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-1-05.jpg" />
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 offset-lg-3 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
              <p style="padding-top:100px; padding-bottom: 100px;">Sjajna stvar kod jednodijelnog kupaćeg kostima jest to što ga možete nositi umjesto topa tijekom cijelog dana. U drugoj kombinaciji zato smo mu dodali kratku suknju, klasičnu bijelu košulju, elegantne sandale i upečatljivu torbicu. Tako smo dobili izdanje u kojem bez problema možete otići na opuštenu kavu u gradu ili se jednostavno otisnuti u večernji izlazak direktno nakon plaže.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-2-01.jpg" />
          </div>
        </div>



        <div class="row">
          <div class="col-lg-6 text-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-2-02.jpg" />
          </div>
          <div class="col-lg-6 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="1s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-2-03.jpg" />
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 text-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: aut; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-2-04.jpg" />
          </div>
          <div class="col-lg-5 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="1s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-2-05.jpg" />
              <p style="margin-top: 100px;">Kombinacija 2: Kupaći kostim <a href="https://www.zalando.hr/filippa-k-asymmetric-swimsuit-kupaci-kostim-black-f1481g00f-q11.html">Filippa K </a>139,95€, Košulja <a href="https://www.zalando.hr/victoria-beckham-cold-shoulder-bluza-s-gumbima-white-v0921e03s-a11.html">Victoria Beckham</a> 331,95€, Suknja <a href="https://www.zalando.hr/filippa-k-skirt-mini-suknja-khaki-green-f1421b032-m11.html">Filippa K</a> 224,17€, Prsten <a href="https://www.zalando.hr/pilgrim-valkyria-prsten-gold-coloured-pi851l0fj-f11.html">Pilgrim</a> 34,38€, Torba <a href="https://www.zalando.hr/cult-gaia-s-ark-mini-top-handle-rucna-torba-natural-cui51h026-b11.html">Cult Gaia</a> 90,12€, Sandale <a href="https://www.zalando.hr/kg-kurt-geiger-riser-sandale-black-kg111a06u-q11.html">Kurt Geiger</a> 87,95€, Sunčane naočale <a href="https://www.zalando.hr/evenandodd-suncane-naocale-white-ev451k046-a11.html">Even&amp;Odd</a> 9,50€</p>
          </div>
        </div>
    </div>
  </div>


  <div id="sponsors" class="sponsors">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
              <h4>Po uzoru na princezu Dianu</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-3-01.jpg" />
          </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
          <div class="sticky-top">
            <p class="tekst-gornji"> Ako ste od onih koji ujutro vole odraditi trening čak i na odmoru ili vam jednostavno trebaju praktične sportske kombinacije za trčanje za klincima, planinarenje ili istraživanje lokalne flore i faune, savjetujemo da sa sobom na odmor ponesete biciklističke hlačice. Možete ih nositi po uzoru na Lady Di s robusnim tenisicama, hudicom i šiltericom za trčanje uz more ranom zorom u predivnoj tišini ili istraživanje najvišeg vrha na otoku na kojem boravite.</p>
            <p class="tekst-donji">Kombinacija 3: Biciklističke hlačice <a href="https://www.zalando.hr/arket-tajice-black-aru41e00c-q11.html">Arket</a> 25,95€, Hoodie <a href="https://www.zalando.hr/lascana-active-gornji-dio-trenirke-offwhite-acc41g004-a11.html">Lascana Active</a> 44,99€, Torba <a href="https://www.zalando.hr/ellesse-merlo-unisex-sportska-torba-white-el954h02h-a11.html">Ellesse</a> 49,77€, Tenisice <a href="https://www.zalando.hr/adidas-originals-rivalry-unisex-tenisice-white-tinteasy-yellowoff-white-ad115o1lh-a12.html">Adidas</a> 110,03€, Šilterica <a href="https://www.zalando.hr/polo-ralph-lauren-classic-sport-unisex-kapa-khaki-tan-po252p029-k11.html">Polo Ralph Lauren</a> 55,95€, Sunčane naočale <a href="https://www.zalando.hr/ray-ban-suncane-naocale-havana-ra254k040-o12.html">Ray Ban</a> 153,83€</p>
          </div>
        </div>
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/kombinacija-3-02.jpg"/><br/><br/>
            <img src="<?php echo $native_path ?>/assets/images/kombinacija-3-03.jpg"/>
        </div>
      </div>
        <div class="row" style="margin-top:50px;">
          <div class="col-lg-6 text-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto;padding-bottom: 20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-3-04.jpg" />
          </div>
          <div class="col-lg-6 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="1s">
              <img style="width:100%; height: auto;padding-bottom: 20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-3-05.jpg" />
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 offset-lg-3 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
              <p style="padding-top:100px; padding-bottom: 100px;">Vrlo se lako mogu uklopiti i u dnevnu kombinaciju s ravnim sandalama i kratkim topom u kojoj ujutro možete otići na kavu ili na tržnicu. A ako im dodate i sako ili mini torbicu, u njima možete i na koncert ili kakav živopisni ulični festival.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 text-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-4-01.jpg" />
          </div>
          <div class="col-lg-6 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="1s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-4-02.jpg" />
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 text-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-4-03.jpg" />
          </div>
          <div class="col-lg-5 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="1s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-4-04.jpg" />
          </div>
        </div>

        <div class="row" style="margin-top: 50px;">
          <div class="col-lg-12 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto" src="<?php echo $native_path ?>/assets/images/kombinacija-4-05.jpg" />
              <p class="sticky-top" style="position: absolute; top: 0; right:0; width:35%; margin-right: 40px; margin-top:40px;">Kombinacija 4: Biciklističke hlačice <a href="https://www.zalando.hr/arket-tajice-black-aru41e00c-q11.html">Arket</a> 25,95€, Top <a href="https://www.zalando.hr/seafolly-collective-one-shoulder-gornji-dio-bikinija-black-s1981j0cm-q11.html">Seafolly</a> 70,21€, Sunčane naočale <a href="https://www.zalando.hr/le-specs-outta-love-suncane-naocale-black-ls151k018-q11.html">Le Specs</a> 59,59€, Sako <a href="https://www.zalando.hr/philosophy-di-lorenzo-serafini-kratka-jakna-white-phh21g00h-a11.html">Philosophy di Lorenzo Serafini</a> 603,95€, Sandale <a href="https://www.zalando.hr/kurt-geiger-london-orson-sandale-black-ku011a01z-q11.html">Kurt Geiger</a> 160,95€, Torbica <a href="https://www.zalando.hr/cult-gaia-enid-rucna-torbica-black-cui51h02u-q11.html">Cult Gaia</a> 313,09€</p>
          </div>
        </div>

    </div>
  </div>


  <div id="sponsors" class="sponsors">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
              <h4>Elegancija u bijelom</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto" src="<?php echo $native_path ?>/assets/images/kombinacija-5-01.jpg" />
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 offset-lg-3 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
              <p style="padding-top:100px; padding-bottom: 100px;">Kao posljednji ključni komad naše kapsulne garderobe odabrali smo vječnu ljetnu (ne)boju koju svatko ima u ormaru - elegantnu bijelu. Iako se više ne držimo onih starih pravila da je bijela isključivo ljetna boja, činjenica jest da je obožavamo nositi ljeti uz preplanuli ten i opuštene valove u kosi dotaknute morskom solju i suncem. Kao bazu ove kombinacije odabrali smo bijele sandale i efektnu torbicu koja izgleda poput bisera sa zlatnom ručkom. Iskombinirali smo ih s nježnom, a opet moćnom bijelom haljinom otvorenih leđa i zlatnim nakitom i dobili savršenu kombinaciju za romantičnu ljetnu večeru na otvorenom.</p>
          </div>
        </div>


        <div class="row">
          <div class="col-lg-6 text-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-5-02.jpg" />
          </div>
          <div class="col-lg-6 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="1s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-5-03.jpg" />
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 text-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-5-04.jpg" />
          </div>
          <div class="col-lg-5 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="1s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-5-05.jpg" />
              <p style="margin-top: 100px;">Kombinacija 5: Sandale <a href="https://www.zalando.hr/stradivarius-sandale-off-white-sth11a0mi-a11.html">Stradivarius</a> 25,99€, Torbica <a href="https://www.zalando.hr/cult-gaia-pearl-top-handle-rucna-torba-ivory-cui51h01o-a11.html">Cult Gaia</a> 346,27€, Prsten <a href="https://www.zalando.hr/pilgrim-valkyria-prsten-gold-coloured-pi851l0fj-f11.html">Pilgrim</a> 34,38€, Naušnice <a href="https://www.zalando.hr/dinari-jewels-irregular-textured-earrings-nausnice-gold-coloured-d2t51l007-f11.html">Dinari Jewels</a> 39,68€, Haljina <a href="https://www.zalando.hr/mango-velika-haljina-off-white-m9121c5y1-a11.html">Mango</a> 49,99€</p>
          </div>
        </div>


      <div class="row" style="padding-top:120px;">
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/kombinacija-6-01.jpg"/><br/><br/>
            <img src="<?php echo $native_path ?>/assets/images/kombinacija-6-02.jpg"/>
        </div>
        <div class="col-lg-6">
          <div class="sticky-top">
            <p class="tekst-gornji">U drugom izdanju haljinu smo zamijenili kratkim hlačicama i sakoom čime smo dobili nešto opušteniju varijantu iste kombinacije koja je idealna za proslavu rođendana drage osobe ili kakav ljetni tulum koji traje do kasno u toplu noć.</p>
            <p class="tekst-donji">Kombinacija 6: Sandale <a href="https://www.zalando.hr/stradivarius-sandale-off-white-sth11a0mi-a11.html">Stradivarius</a> 25,99€, Torbica <a href="https://www.zalando.hr/cult-gaia-pearl-top-handle-rucna-torba-ivory-cui51h01o-a11.html">Cult Gaia</a> 346,27€, Hlačice <a href="https://www.zalando.hr/mango-fica-kratke-hlace-gebroken-wit-m9121s0l1-a11.html">Mango</a> 35,99€, Sako <a href="https://www.zalando.hr/mango-kratka-jakna-ecru-m9121g1hp-a11.html">Mango</a> 119,99€, Ogrlica <a href="https://www.zalando.hr/weekend-maxmara-balco-ogrlica-gold-coloured-mw751l02c-f11.html">Weekend Max Mara</a> 70,95€</p>
          </div>
        </div>

      </div>

        <div class="row" style="padding-top:80px;">
          <div class="col-lg-6 text-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-6-03.jpg" />
          </div>
          <div class="col-lg-6 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="1s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/kombinacija-6-04.jpg" />
          </div>
        </div>

    </div>
  </div>

   <div class="container-fluid" style="padding-left:0 !important; padding-right:0 !important; position: relative;">
      <div class="row">
        <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
          <img class="footer-picture" src="<?php echo $native_path ?>/assets/images/kombinacija-6-05.jpg" />
           <div style="position: absolute; top: 0; width: 100%; padding-top:100px;">
              <p style="text-align: center;">Fotografija: Aleksandar Selak<br/>
              Model: Hana Matija Brkić, Talia Model<br/>
              Styling: Studio Onne<br/>
              Makeup: Josipa Drpić<br/>
              Grafičko oblikovanje: TMG Studio x Reset<br/><br/>
              Zahvaljujemo geografsko-botaničkom rezervatu Đurđevački pijesci na ustupljenom prostoru za snimanje.<br/><br/>
              <img style="width:160px; height: auto; padding: 10px" src="<?php echo $native_path ?>/assets/images/zalando-logo.png" /><img style="width:160px; height: auto; padding: 10px" src="<?php echo $native_path ?>/assets/images/telegram-studio.png" />
              </p>
           </div>
        </div>
      </div>
  </div>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/owl-carousel.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/animation.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/imagesloaded.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/custom.js"></script>

    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
