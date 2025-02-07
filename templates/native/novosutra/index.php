<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/novosutra';
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
<link href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css?=v17122024">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">

  </head>

<body>
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


  <!-- ***** Header Area Start ***** -->


  <div class="main-banner wow fadeIn" id="top" data-wow-duration="0s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-7 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="row">
                  <div class="col-lg-12">
                    <img src="<?php echo $native_path ?>/assets/images/header-logo-alt.svg" style="max-width: 200px; height: auto; margin-bottom: 30px;" />
                    <h2>ZAJEDNO ZA<br/><span style="color:#fff;">NOVE PRILIKE</span></h2>
                    <p>Zaklada Novo Sutra već godinama u Hrvatskoj financira brojne humanitarne projekte humanog, obrazovnog i razvojnog karaktera. Tako je samo kroz donacijski natječaj podržala gotovo 50 projekata s više od 1,6 milijuna eura, a ove su im godine u posebnom fokusu mentalno zdravlje i mladi. Upravo zbog toga odlučili su i stipendirati 20 uspješnih studenata kroz sljedećih deset mjeseci, s mjesečnim iznosom od 500 eura. Ovo su samo neke od stvari koje su napravili za razvoj ugroženih u Hrvatskoj, a mi smo na jednom mjestu okupili sve njihove hvalevrijedne projekte.</p>

                    <div class="border-first-button scroll-to-section" style="padding-top: 0px;">
                      <a href="#vise">SAZNAJ VIŠE</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div id="vise" class="our-portfolio section">
    <div class="container">


      <div class="row p-5">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-7">
              <a target="_blank" href="https://www.telegram.hr/partneri/do-sad-su-podijelili-vise-od-16-milijuna-eura-udrugama-diljem-zemlje-evo-kako-se-prijaviti-na-novi-natjecaj/"><img src="<?php echo $native_path ?>/assets/images/clanak-02.jpeg" style="border-radius: 20px; box-shadow: 0px 10px 40px -10px rgba(0, 0,0,0.5)" alt=""></a>
            </div>
            <div class="col-lg-5"  style="padding-top:60px">
              <a target="_blank" href="https://www.telegram.hr/partneri/do-sad-su-podijelili-vise-od-16-milijuna-eura-udrugama-diljem-zemlje-evo-kako-se-prijaviti-na-novi-natjecaj/"><h2 style="color:#fff; font-weight: 700; margin-top: 30px; margin-bottom: 30px;">Podijeljene stipendije veće od 500 eura mjesečno, saznali smo sve detalje</h2></a>
              <a target="_blank" href="https://www.telegram.hr/partneri/do-sad-su-podijelili-vise-od-16-milijuna-eura-udrugama-diljem-zemlje-evo-kako-se-prijaviti-na-novi-natjecaj/"><p style="margin-bottom: 30px; color: #fff;">Zaklada Novo Sutra ove je godine u fokus stavila mentalno zdravlje djece i mladih</p></a>
              <p><a target="_blank" href="https://www.telegram.hr/partneri/do-sad-su-podijelili-vise-od-16-milijuna-eura-udrugama-diljem-zemlje-evo-kako-se-prijaviti-na-novi-natjecaj/" style="color:#fff; font-weight: 700;">SAZNAJ VIŠE</a></p>
            </div>
          </div>
        </div>
      </div>


      <div class="row p-5">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-7 order-lg-2">
              <a target="_blank" href="https://www.telegram.hr/partneri/vise-od-50-milijuna-ljudi-treba-palijativnu-skrb-u-europi-kod-nas-je-ta-usluga-ostala-u-rukama-udruga/"><img src="<?php echo $native_path ?>/assets/images/clanak-04.jpeg" style="border-radius: 20px; box-shadow: 0px 10px 40px -10px rgba(0, 0,0,0.5)" alt=""></a>
            </div>
            <div class="col-lg-5 order-lg-1" style="padding-top:60px">
              <a target="_blank" href="https://www.telegram.hr/partneri/vise-od-50-milijuna-ljudi-treba-palijativnu-skrb-u-europi-kod-nas-je-ta-usluga-ostala-u-rukama-udruga/"><h2 style="color:#fff; font-weight: 700; margin-top: 30px; margin-bottom: 30px;">Više od 50 milijuna ljudi treba palijativnu skrb u Europi. Kod nas je ta usluga ostala u rukama udruga</h2></a>
              <a target="_blank" href="https://www.telegram.hr/partneri/vise-od-50-milijuna-ljudi-treba-palijativnu-skrb-u-europi-kod-nas-je-ta-usluga-ostala-u-rukama-udruga/"><p style="margin-bottom: 30px; color: #fff;">Razgovarali smo s predstavnicima jedne. Vode ih na preglede i frizure, zovu majstore i obavljaju kupnje</p></a>
              <p><a target="_blank" href="https://www.telegram.hr/partneri/vise-od-50-milijuna-ljudi-treba-palijativnu-skrb-u-europi-kod-nas-je-ta-usluga-ostala-u-rukama-udruga/" style="color:#fff; font-weight: 700;">SAZNAJ VIŠE</a></p>
            </div>
          </div>
        </div>
      </div>


      <div class="row p-5">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-7">
              <a target="_blank" href="https://www.telegram.hr/partneri/hortikulturalna-terapija-vrtlarenje-ima-terapeutski-ucinak/"><img src="<?php echo $native_path ?>/assets/images/clanak-03.jpeg" style="border-radius: 20px; box-shadow: 0px 10px 40px -10px rgba(0, 0,0,0.5)" alt=""></a>
            </div>
            <div class="col-lg-5"  style="padding-top:60px">
              <a target="_blank" href="https://www.telegram.hr/partneri/hortikulturalna-terapija-vrtlarenje-ima-terapeutski-ucinak/"><h2 style="color:#fff; font-weight: 700; margin-top: 30px; margin-bottom: 30px;">Vrtlarenje ima terapeutski učinak: Ove su tehnike kod nas tek u povojima, ali potencijal je ogroman</h2></a>
              <a target="_blank" href="https://www.telegram.hr/partneri/hortikulturalna-terapija-vrtlarenje-ima-terapeutski-ucinak/"><p style="margin-bottom: 30px; color: #fff;">Terapija hortikulturom prvi se put u Hrvatskoj spominje 1917. godine</p></a>
              <p><a target="_blank" href="https://www.telegram.hr/partneri/hortikulturalna-terapija-vrtlarenje-ima-terapeutski-ucinak/" style="color:#fff; font-weight: 700;">SAZNAJ VIŠE</a></p>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>


  <div id="infografike" class="blog" style="background:#f0f0f0">
    <div class="container">


      <div class="row">
        <div class="col-lg-4 text-center">
           <h1 style="font-weight:900; color: #8bc650;">8 godina</h1>
           <p style="color:#000">stvaranja boljeg društva</p>
        </div>

        <div class="col-lg-4 text-center">
           <h1 style="font-weight:900; color: #8bc650;">+1,6 mil. €</h1>
           <p style="color:#000">financiranih projekata</p>
        </div>

        <div class="col-lg-4 text-center">
           <h1 style="font-weight:900; color: #8bc650;">+2,1 mil. €</h1>
           <p style="color:#000">dodijeljenih investicija</p>
        </div>
      </div>


    </div>
  </div>




<div class="our-portfolio section">
    <div class="container">


      <div class="row">
        <div class="col-lg-4">
          <div class="row">
              <a target="_blank" href="https://www.telegram.hr/partneri/do-sad-su-podijelili-vise-od-16-milijuna-eura-udrugama-diljem-zemlje-evo-kako-se-prijaviti-na-novi-natjecaj/"><img src="<?php echo $native_path ?>/assets/images/clanak-01.jpeg" style="border-radius: 20px; box-shadow: 0px 10px 40px -10px rgba(0, 0,0,0.5)" alt=""></a>
              <a target="_blank" href="https://www.telegram.hr/partneri/do-sad-su-podijelili-vise-od-16-milijuna-eura-udrugama-diljem-zemlje-evo-kako-se-prijaviti-na-novi-natjecaj/"><h2 style="color:#fff; font-weight: 700; margin-top: 30px; margin-bottom: 30px;">Dosad su podijelili više od 1,6 milijuna eura udrugama diljem zemlje. Evo kako se prijaviti na novi natječaj</h2></a>
              <a target="_blank" href="https://www.telegram.hr/partneri/do-sad-su-podijelili-vise-od-16-milijuna-eura-udrugama-diljem-zemlje-evo-kako-se-prijaviti-na-novi-natjecaj/"><p style="margin-bottom: 30px; color: #fff;">Projekt humanitarnog karaktera možete prijaviti do 31. listopada</p></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="row">
              <a target="_blank" href="https://www.telegram.hr/partneri/u-slavonskom-gradu-organiziraju-poseban-kamp-za-djecu-ovdje-stjecu-radne-navike-i-pravila-zajednickog-zivota/"><img src="<?php echo $native_path ?>/assets/images/clanak-05.jpeg" style="border-radius: 20px; box-shadow: 0px 10px 40px -10px rgba(0, 0,0,0.5)" alt=""></a>
              <a target="_blank" href="https://www.telegram.hr/partneri/u-slavonskom-gradu-organiziraju-poseban-kamp-za-djecu-ovdje-stjecu-radne-navike-i-pravila-zajednickog-zivota/"><h2 style="color:#fff; font-weight: 700; margin-top: 30px; margin-bottom: 30px;">U slavonskom gradu organiziraju poseban kamp za djecu: 'Ovdje stječu radne navike i pravila zajedničkog života'</h2></a>
              <a target="_blank" href="https://www.telegram.hr/partneri/u-slavonskom-gradu-organiziraju-poseban-kamp-za-djecu-ovdje-stjecu-radne-navike-i-pravila-zajednickog-zivota/"><p style="margin-bottom: 30px; color: #fff;">Otkrili su nam detalje</p></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="row">
              <a target="_blank" href="https://www.telegram.hr/partneri/otvoren-je-natjecaj-za-stipendiranje-studenata-iz-sest-zupanija-iznos-je-ove-godine-dvostruko-veci-evo-kako-se-prijaviti/"><img src="<?php echo $native_path ?>/assets/images/clanak-06.jpeg" style="border-radius: 20px; box-shadow: 0px 10px 40px -10px rgba(0, 0,0,0.5)" alt=""></a>
              <a target="_blank" href="https://www.telegram.hr/partneri/otvoren-je-natjecaj-za-stipendiranje-studenata-iz-sest-zupanija-iznos-je-ove-godine-dvostruko-veci-evo-kako-se-prijaviti/"><h2 style="color:#fff; font-weight: 700; margin-top: 30px; margin-bottom: 30px;">Otvoren je natječaj za stipendiranje studenata iz šest županija: Iznos je ove godine dvostruko veći, evo kako se prijaviti</h2></a>
              <a target="_blank" href="https://www.telegram.hr/partneri/otvoren-je-natjecaj-za-stipendiranje-studenata-iz-sest-zupanija-iznos-je-ove-godine-dvostruko-veci-evo-kako-se-prijaviti/"><p style="margin-bottom: 30px; color: #fff;">Razgovarali smo s postojećim stipendistima i ravnateljem Zaklade Novo sutra</p></a>
          </div>
        </div>
      </div>


    </div>
  </div>





  <div id="sponsors" class="sponsors">
  <div class="container">
      <div class="row">

       <div class="col-lg-6 offset-md-3 text-center wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.6s">
            <p style="color:#fff">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
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

    <?php wp_footer(); ?>
</body>
</html>
