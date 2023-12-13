<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/adv-vodic-2023';
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
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css?v=3">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">
    <link href="<?php echo $native_path ?>/assets/dist/css/lightbox.css" rel="stylesheet" />
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




  <div id="clanci" class="blog prvi">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 text-center wow fadeIn"  data-wow-duration="1s" data-wow-delay="0.5s">
          <img src="<?php echo $native_path ?>/assets/images/woman.png" class="slikamobilenestane" />
        </div>
        <div class="col-lg-6 text-center wow fadeIn"  data-wow-duration="1s" data-wow-delay="0s">
          <h1>Advent u<br/>našem kraju</h1>
          <p style="text-align:center;">Obišli smo najatraktivnije lokacije ovih blagdana diljem Hrvatske i donosimo vam spektakularno putovanje kroz destinacije koje morate posjetiti ovog adventa. Krenite s nama na avanturu punu divnih ukrasa i poklona, ukusnih slanih i slatkih zalogaja, dobre muzike i odličnih domaćina.</p>
          <p style="text-align:center;"> <a href="#zagreb"><button class="border-first-button">Zagreb</button></a> <a href="#samobor"><button class="border-first-button">Samobor</button></a> <a href="#vinkovci"><button class="border-first-button">Vinkovci</button></a> <a href="#zagrebacka-zupanija"><button class="border-first-button">Zagrebačka županija</button></a> <a href="#rovinj"><button class="border-first-button">Rovinj</button></a> <a href="#trogir"><button class="border-first-button">Trogir</button></a> <a href="#osijek" style="display:none"><button class="border-first-button">Osijek</button></a> <a href="#zadar"><button class="border-first-button">Zadar</button></a> <a href="#jj-sound-bar"><button class="border-first-button">JJ Sound bar</button></a></p>
          <p>&nbsp;</p>
        </div>
        <div class="col-lg-3 text-center wow fadeIn"  data-wow-duration="1s" data-wow-delay="0.5s">
          <img src="<?php echo $native_path ?>/assets/images/man.png" class="slikamobilenestane" />
        </div>
      </div>
    </div>
  </div>


  <div id="zagreb" class="blog" style="padding-top: 0;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
          <h2>Zagreb</h2>
          <p>Advent koji je tri godine za redom proglašen najboljim u Europi, svake godine svojim sadržajem i energijom doziva sve više posjetitelja koji će ove sezone u njemu moći uživati u muzejima, kazalištima, crkvama, pa čak i tunelima, umjetničkim punktovima i brojnim trgovima.</p>
          <p><a href="https://www.telegram.hr/partneri/od-koncerata-i-flashmoba-do-programa-u-muzejima-na-adventu-zagreb-ocekuju-vas-najljepse-blagdanske-uspomene/" target="_blank" class="linkovi">OTKRIJTE ADVENT U ZAGREBU</a></p>
          <p><a href="https://www.telegram.hr/partneri/blagdanska-carolija-u-zagrebu-je-krenula-ove-godine-secemo-medu-divovima-u-parku-i-idemo-na-bal-na-mazurancu/" target="_blank" class="linkovi">EVO ŠTO JE JOŠ NOVO</a></p>
          <p>&nbsp;</p>
        </div>
        <div class="col-lg-6 order-lg-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
          <img src="<?php echo $native_path ?>/assets/images/zagreb.png" />
        </div>
      </div>
            <div class="row">
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/zagreb-01.jpg" data-lightbox="image-1" data-title="Zagreb"><img src="<?php echo $native_path ?>/assets/images/zagreb01.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/zagreb-02.jpg" data-lightbox="image-1" data-title="Zagreb"><img src="<?php echo $native_path ?>/assets/images/zagreb02.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/zagreb-03.jpg" data-lightbox="image-1" data-title="Zagreb"><img src="<?php echo $native_path ?>/assets/images/zagreb03.png" /></a>
              </div>
            </div>
    </div>
  </div>

  <div id="samobor" class="blog" style="padding-top: 0px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-lg-1  wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
          <h2>Samobor</h2>
          <p>Tisuće lampica tvorit će zvjezdano nebo iznad klizališta i svjetlucavu šetnicu kroz centar grada koja će vas odvesti do uređenih foto kutaka i još brojnijih eno gastro štandova. Dok se probijate kroz magične ulice s radovima lokalnih umjetnika idealnima za blagdanski poklon, pratit će vas tonovi brojnih poznatih hrvatski izvođača.</p>
          <p><a href="https://www.telegram.hr/partneri/carobni-advent-u-samoboru/" target="_blank">OTKRIJTE ADVENT U SAMOBORU</a></p>
          <p>&nbsp;</p>
        </div>
        <div class="col-lg-6 order-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
          <img src="<?php echo $native_path ?>/assets/images/samobor.png" />
        </div>
      </div>
            <div class="row">
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/samobor-01.jpg" data-lightbox="image-1" data-title="Samobor"><img src="<?php echo $native_path ?>/assets/images/samobor01.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/samobor-02.jpg" data-lightbox="image-1" data-title="Samobor"><img src="<?php echo $native_path ?>/assets/images/samobor02.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/samobor-03.jpg" data-lightbox="image-1" data-title="Samobor"><img src="<?php echo $native_path ?>/assets/images/samobor03.png" /></a>
              </div>
            </div>
    </div>
</div>



  <div id="vinkovci" class="blog" style="padding-top: 0;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
          <h2>Vinkovci</h2>
          <p>U Ledenoj bajci, u samom centru ovog šarmantnog srijemskog i slavonskog grada, dočekat će vas Snješko Vinko, pravi slavonski snjegović sa šokačkim šeširom i prslukom ukrašenim dukatima i zlatovezom s brojnim glazbenim točkama lokalnih i regionalnih izvođača.</p>
          <p><a href="https://www.telegram.hr/partneri/advent-u-vinkovcima-ne-propustamo-imaju-genijalnog-slavonskog-snjegovica-odlicne-koncerte-i-predstave-za-najmlade/" target="_blank" class="linkovi">OTKRIJTE ADVENT U VINKOVCIMA</a></p>
          <p>&nbsp;</p>
        </div>
        <div class="col-lg-6 order-lg-1  wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
          <img src="<?php echo $native_path ?>/assets/images/vinkovci.png" />
        </div>
      </div>
            <div class="row">
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/vinkovci-01.jpeg" data-lightbox="image-1" data-title="Vinkovci"><img src="<?php echo $native_path ?>/assets/images/vinkovci01.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/vinkovci-02.jpg" data-lightbox="image-1" data-title="Vinkovci"><img src="<?php echo $native_path ?>/assets/images/vinkovci02.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/vinkovci-03.jpeg" data-lightbox="image-1" data-title="Vinkovci"><img src="<?php echo $native_path ?>/assets/images/vinkovci03.png" /></a>
              </div>
            </div>
    </div>

</div>




  <div id="zagrebacka-zupanija" class="blog" style="padding-top: 0;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-lg-1  wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
          <h2>Zagrebačka županija</h2>
          <p>Bogata gastro ponuda, glazbeni koncerti, klizališta, ručni radovi, radionice, raznolike aktivnosti za velike i male, čine pravu božićnu atmosferu koja nikoga ne ostavlja ravnodušnim diljem županije.</p>
          <p><a href="https://www.telegram.hr/partneri/otkrijte-caroliju-bozica-u-zagrebackoj-zupaniji/" target="_blank">OTKRIJTE ADVENT U ZAGREBAČKOJ ŽUPANIJI</a></p>
          <p>&nbsp;</p>
        </div>
        <div class="col-lg-6 order-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
          <img src="<?php echo $native_path ?>/assets/images/zag-zup.png" />
        </div>
      </div>
            <div class="row">
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/zagzup-01.jpeg" data-lightbox="image-1" data-title="Zagrebačka županija"><img src="<?php echo $native_path ?>/assets/images/zagzup01.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/zagzup-02.jpg" data-lightbox="image-1" data-title="Zagrebačka županija"><img src="<?php echo $native_path ?>/assets/images/zagzup02.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/zagzup-03.jpeg" data-lightbox="image-1" data-title="Zagrebačka županija"><img src="<?php echo $native_path ?>/assets/images/zagzup03.png" /></a>
              </div>
            </div>
    </div>
  <a href="https://www.telegram.hr/super1/najbolji-adventski-programi-diljem-zemlje-napravili-smo-popis-onih-koje-morate-obici/" target="_blank">
    <div class="container flixbus">
      <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-3 text-center">
          <img src="<?php echo $native_path ?>/assets/images/bus.png" />
        </div>
        <div class="col-lg-8">
          <h3>Otputuj na svoju sljedeću adventsku destinaciju bezbrižno</h3>
          <p>Provjeri kuda sve možeš s najpopularnijim zelenim busevima već sljedećeg vikenda.</p>
        </div>
      </div>
    </div>
    </a>
</div>



  <div id="rovinj" class="blog" style="padding-top: 0;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
          <h2>Rovinj</h2>
          <p>Advent inspiriran morem i tradicijom ove nas godine očekuje sa šaolikim programom žive glazbe, vrhunske hrane i pića i brojnih iskustava za velike i male s vrhunskom ponudom za prenoćiti i uživati u potpunom adventskom vikend iskustvu.</p>
          <p><a href="https://www.telegram.hr/partneri/advent-inspiriran-morem-i-tradicijom/" target="_blank">OTKRIJTE ADVENT U ROVINJU</a></p>
          <p>&nbsp;</p>
        </div>
        <div class="col-lg-6 order-lg-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
          <img src="<?php echo $native_path ?>/assets/images/rovinj.png" />
        </div>
      </div>
            <div class="row">
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/rovinj-01.jpg" data-lightbox="image-1" data-title="Rovinj"><img src="<?php echo $native_path ?>/assets/images/rovinj01.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/rovinj-02.jpg" data-lightbox="image-1" data-title="Rovinj"><img src="<?php echo $native_path ?>/assets/images/rovinj02.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/rovinj-03.jpg" data-lightbox="image-1" data-title="Rovinj"><img src="<?php echo $native_path ?>/assets/images/rovinj03.png" /></a>
              </div>
            </div>
    </div>

  </div>


  <div id="trogir" class="blog" style="padding-top: 0;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-lg-1  wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
          <h2>Trogir</h2>
          <p>Program šestog izdanja Zimske Adventure uistinu je raznolik i broji više od 40 događanja na različitim lokacijama u gradu, koja će poprimiti čarobnu blagdansku vizuru obogaćenu zvjezdanim nebom, novim svjetlucavim ukrasima i dekoracijama.</p>
          <p><a href="https://www.telegram.hr/partneri/predstavljen-program-zimske-adventure-2023-u-trogiru/" target="_blank">OTKRIJTE ADVENT U TROGIRU</a></p>
          <p>&nbsp;</p>
        </div>
        <div class="col-lg-6 order-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
          <img src="<?php echo $native_path ?>/assets/images/trogir.png" />
        </div>
      </div>
            <div class="row">
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/trogir-01.jpeg" data-lightbox="image-1" data-title="Trogir"><img src="<?php echo $native_path ?>/assets/images/trogir01.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/trogir-02.jpg" data-lightbox="image-1" data-title="Trogir"><img src="<?php echo $native_path ?>/assets/images/trogir02.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/trogir-03.jpeg" data-lightbox="image-1" data-title="Trogir"><img src="<?php echo $native_path ?>/assets/images/trogir03.png" /></a>
              </div>
            </div>
    </div>

</div>



  <div id="osijek" class="blog" style="padding-top: 0; display: none;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-lg-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
          <h2>Osijek</h2>
          <p>Posljednje dvije godine nositelj titule Najljepšeg Adventa u Hrvatskoj zna kako zaključiti godinu sa stilom pa tijekom čitavog prosinca u njemu živi blagdanski duh i odzvanja zvuk zabave. Saznajte što donosi ovogodišnji Advent zbog kojeg se itekako isplati provesti zimski vikend na istoku zemlje.</p>
          <p style="display: none;"><a href="#" target="_blank" class="linkovi">OTKRIJTE ADVENT U OSIJEKU</a></p>
          <p>&nbsp;</p>
        </div>
        <div class="col-lg-6 order-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
          <img src="<?php echo $native_path ?>/assets/images/osijek.png" />
        </div>
      </div>
            <div class="row">
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/osijek-01.jpg" data-lightbox="image-1" data-title="Osijek"><img src="<?php echo $native_path ?>/assets/images/osijek01.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/osijek-02.jpg" data-lightbox="image-1" data-title="Osijek"><img src="<?php echo $native_path ?>/assets/images/osijek02.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/osijek-03.jpg" data-lightbox="image-1" data-title="Osijek"><img src="<?php echo $native_path ?>/assets/images/osijek03.png" /></a>
              </div>
            </div>
    </div>

  </div>

    <div id="zadar" class="blog" style="padding-top: 0;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
          <h2>Zadar</h2>
          <p>Njihova se gastronomska ponuda prošle godine proširila diljem zemlje, a ove nam sezone nude to i još više, popraćeno bogatim muzičkim programom, jedinstvenom adventskom trkačkom utrkom i zimskim parkom na čak 500 četvornih metara. Ovo su samo neki od razloga zašto se sljedeći vikend uputiti prema moru.</p>
          <p><a href="https://www.telegram.hr/partneri/drugacija-sarma-burger-s-tripicama-i-zimski-kokteli-ove-se-godine-grijemo-na-standovima-u-zadru/" target="_blank">OTKRIJTE ADVENT U ZADRU</a></p>
          <p>&nbsp;</p>
        </div>
        <div class="col-lg-6 order-lg-1  wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
          <img src="<?php echo $native_path ?>/assets/images/zadar.png" />
        </div>
      </div>
            <div class="row">
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/zadar-01.jpeg" data-lightbox="image-1" data-title="Zadar"><img src="<?php echo $native_path ?>/assets/images/zadar01.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/zadar-02.jpg" data-lightbox="image-1" data-title="Zadar"><img src="<?php echo $native_path ?>/assets/images/zadar02.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/zadar-03.jpeg" data-lightbox="image-1" data-title="Zadar"><img src="<?php echo $native_path ?>/assets/images/zadar03.png" /></a>
              </div>
            </div>
    </div>
    <a href="https://www.telegram.hr/super1/najbolji-adventski-programi-diljem-zemlje-napravili-smo-popis-onih-koje-morate-obici/" target="_blank">
    <div class="container flixbus">
      <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-3 text-center">
          <img src="<?php echo $native_path ?>/assets/images/bus.png" />
        </div>
        <div class="col-lg-8">
          <h3>Otputuj na svoju sljedeću adventsku destinaciju bezbrižno</h3>
          <p>Provjeri kuda sve možeš s najpopularnijim zelenim busevima već sljedećeg vikenda.</p>
        </div>
      </div>
    </div>
    </a>
</div>

  <div id="jj-sound-bar" class="blog" style="padding-top: 0;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-lg-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
          <h2>JJ Sound Bar</h2>
          <p>Posljednje dvije godine nositelj titule Najljepšeg Adventa u Hrvatskoj zna kako zaključiti godinu sa stilom pa tijekom čitavog prosinca u njemu živi blagdanski duh i odzvanja zvuk zabave. Saznajte što donosi ovogodišnji Advent zbog kojeg se itekako isplati provesti zimski vikend na istoku zemlje.</p>
          <p><a href="https://www.telegram.hr/partneri/jj-sound-donosi-posebnu-ponudu-zimskih-koktela/" target="_blank" class="linkovi">OTKRIJTE ADVENT U JJ SOUND BARU</a></p>
          <p>&nbsp;</p>
        </div>
        <div class="col-lg-6 order-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
          <img src="<?php echo $native_path ?>/assets/images/jjsoundbar.png" />
        </div>
      </div>
            <div class="row">
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/jjsound-01.jpeg" data-lightbox="image-1" data-title="JJ Sound Bar"><img src="<?php echo $native_path ?>/assets/images/jjsound01.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/jjsound-02.jpg" data-lightbox="image-1" data-title="JJ Sound Bar"><img src="<?php echo $native_path ?>/assets/images/jjsound02.png" /></a>
              </div>
              <div class="col-lg-4" style="margin:0; padding: 0;">
                <a href="<?php echo $native_path ?>/assets/images/jjsound-03.jpeg" data-lightbox="image-1" data-title="JJ Sound Bar"><img src="<?php echo $native_path ?>/assets/images/jjsound03.png" /></a>
              </div>
            </div>
    </div>

  </div>



   <div class="container-fluid footer">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 text-center wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="0s">
           <p style="text-align:center;">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p>

            <img style="width:160px; height: auto; padding: 10px" src="<?php echo $native_path ?>/assets/images/telegram-studio.png" />

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
  <script src="<?php echo $native_path ?>/assets/dist/js/lightbox.js"></script>


    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
