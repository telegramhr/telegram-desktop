<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/pilatesbag/assets';
    $native_path_vendor = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/pilatesbag';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>

<head>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <title>Pilates Bag - Za pilates girl jesen, u suradnji s modnom dizajnericom Lanom Puljić, koja stoji iza popularnog modnog brenda Lokomotiva, kreirali smo ultimativni pilates bag</title>

    <meta property="og:url"                content="http://www.telegram.hr" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Pilates Bag" />
    <meta property="og:description"        content="Za pilates girl jesen, u suradnji s modnom dizajnericom Lanom Puljić, koja stoji iza popularnog modnog brenda Lokomotiva, kreirali smo ultimativni pilates bag." />
    <meta property="og:image"              content="<?php echo $native_path ?>/images/facebook.jpg" />

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path_vendor ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/css/owl.css">
    <style>
        
            @-webkit-keyframes pomicanje { 0% { left:0px; } 50% {left:-20px;} 100% { left:0px;  } }
            @keyframes pomicanje { 0% { left:0px; } 50% {left:-20px;} 100% { left:0px;  } }

    </style>
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



  <div class="main-banner" id="top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 align-self-center">
              <div class="left-content show-up header-text wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">

                  <div class="col-lg-12 text-center">
                    <h6><img src="<?php echo $native_path ?>/images/logos.png" style="max-width: 500px;" /></h6>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8 col-7 text-left p-0">
                  </div>
                  <div class="col-lg-4 col-5 text-left p-0">
                    
                    <h2 class="pilatesnaslov wow fadeInRight" data-wow-duration="2.5s" data-wow-delay="0s">PILATES</h2>
                    <h2 class="bagnaslov wow fadeInRight" data-wow-duration="2.5s" data-wow-delay="0.5s"><span>bag</span></h2>
                  </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  

  <div id="clanci" class="blog" style="background: #7D7E82;">
    <div class="container-fluid p-0">
      <div class="row">
          <div class="col-lg-6 col-xs-12 order-lg-2 text-center d-flex align-items-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
          <p style="color:#EBEBDF">Ljeto je i službeno iza nas, što znači samo jedno: vrijeme je za povratak gradskim ulicama i rutini, povratak obavezama i rasporedima. Osim što nas vraćaju u rutinu, prvi jesenski dani uvijek nam donose osjećaj novog početka i želju da ih ispunimo pozitivnim navikama i promjenama. Jedna od najčešćih “novih-starih” odluka svakako je više kretanja. Nakon opuštenih ljetnih mjeseci, vraćamo se treninzima, a kao apsolutni favorit i ove će se sezone istaknuti pilates.</p>
          </div>
        <div class="col-lg-3 col-6 order-lg-1 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">

          <img src="<?php echo $native_path ?>/images/slika1uvod.png" alt="Torba"/>

        </div>

        <div class="col-lg-3 col-6 order-lg-3 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.6s">
          <img src="<?php echo $native_path ?>/images/slika2uvod.png"/>
        </div>
        </div>
      </div>
    </div>
  </div>
  

    <div id="clanci" class="blog" style="background: #7D7E82; padding: 0 !important;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 p-0 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">

          <img src="<?php echo $native_path ?>/images/ispoduvodas3.png" alt="Torba"/>

        </div>
        <div class="col-lg-4 p-0 text-center d-flex align-items-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
          <img src="<?php echo $native_path ?>/images/ispoduvodas2.png" alt="Torba"/>
          </div>
        <div class="col-lg-4 p-0 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.6s">
          <img src="<?php echo $native_path ?>/images/ispoduvodas1.png" alt="Torba"/>
        </div>
        </div>
      </div>
    </div>
  </div>


   <div id="clanci" class="blog" style="background: linear-gradient(180deg,rgba(235, 235, 223, 1) 0%, rgba(235, 235, 223, 1) 74%, rgba(177, 199, 222, 1) 74%, rgba(177, 199, 222, 1) 100%); ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12  p-0">
        <div class="marquee-container" style="margin-top: 200px;">
            <marquee direction="left" scrollamount="5" style="margin-bottom: -20px !important;">
                <h2 class="eatsleepleft">EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.</h2>
            </marquee>
            <marquee direction="right" scrollamount="5" style="margin-bottom: -20px !important;">
                <h2 class="eatsleepright">EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.</h2>
            </marquee>
            <marquee direction="left" scrollamount="5" style="margin-bottom: -20px !important;">
                <h2 class="eatsleepleft">EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.</h2>
            </marquee>
            <marquee direction="right" scrollamount="5" style="margin-bottom: -20px !important;">
                <h2 class="eatsleepright">EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.</h2>
            </marquee>
            <marquee direction="left" scrollamount="5" style="margin-bottom: -20px !important;">
                <h2 class="eatsleepleft">EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.</h2>
            </marquee>
        </div>

        </div>
      </div>
    </div>
    <div class="container d-flex align-items-center" style="margin:0 auto; margin-top:-550px; position: relative; padding-bottom: 0; ">
      <div class="row align-items-center">
        <div class="col-lg-6 offset-lg-3">
            <img src="<?php echo $native_path ?>/images/fotka.png" class="obrub">
        </div>
      </div>
    </div>
  </div>

    <div id="clanci" class="blog" style="background: #B1C7DE; padding-top: 0px; padding-bottom: 0; ">
    <div class="container">
      <div class="row">

        <div class="col-lg-8 offset-lg-2 text-center d-flex align-items-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
            <p style="padding-top:0px">Pilates girl estetika već je nekoliko sezona veliki trend: minimalizam, balans, elegancija pokreta i osjećaj da tijelo radi za nas, a ne protiv nas. Pilates nije samo trening, nego i lifestyle, onaj koji spaja disciplinu, nježnost i brigu o sebi.<br/><br/>A kada trening postane važan dio naše svakodnevice i našeg životnog stila, logično je da to prati i naša torba. Ona nije samo mjesto za prostirku i bocu vode, već mini svijet u kojem nosimo sve ono što nam treba u danu: prije, tijekom i nakon treninga.</p>
          </div>
        </div>
      </div>
    </div>


    <div id="clanci" class="blog" style="background: linear-gradient(0deg,rgba(235, 235, 223, 1) 0%, rgba(177, 199, 222, 1) 100%);">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-12 p-0 text-center d-flex align-items-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">

            <img src="<?php echo $native_path ?>/images/s1_torba-1.png" alt="Torba">

          </div>
        <div class="col-lg-6 col-12 p-0 text-center d-flex align-items-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/images/s1_torba-2.png" alt="Torba">
          </div>
        </div>
      </div>
    </div>


    <div id="clanci" class="blog" style="background: #EBEBDF; ">
    <div class="container">
      <div class="row">

        <div class="col-lg-8 offset-lg-2 text-center d-flex align-items-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
            <h2 class="nekipodnaslov">Za pilates girl jesen, u suradnji s modnom dizajnericom Lanom Puljić, koja stoji iza popularnog modnog brenda Lokomotiva, kreirali smo ultimativni pilates bag.</h2>
          </div>
        </div>
      </div>
    </div>


    <div id="clanci" class="blog" style="padding-bottom: 0px !important;">
    <div class="container-fluid p-0">
      <div class="row">
        <img src="<?php echo $native_path ?>/images/pilatesgirlfail.png" class="fotkakojasemice">
        <div class="col-lg-12 text-center d-flex align-items-center wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0s">
            <img class="prikazinakomp" src="<?php echo $native_path ?>/images/torbe.png" alt="Torba">
            <img class="prikazinamob" src="<?php echo $native_path ?>/images/torbemob.png" alt="Torba">
          </div>
        </div>
      </div>
    </div>


    <div id="clanci" class="blog" style="background: rgba(125, 126, 130, 1) ">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center d-flex align-items-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
            <p style="color:#EBEBDF">No, cool izgled tek je početak onoga što Super1 x Lokomotiva pilates bag ističe kao ultimativnu torbu za trening ove sezone. U suradnji s omiljenim brendovima i partnerima, naš pilates bag napunili smo svime što ultimativni pilates bag treba imati.<br/><br/><br/></p>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-5 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
              <img src="<?php echo $native_path ?>/images/04.png">
            </div>
            <div class="col-lg-7 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
              <p style="color:#EBEBDF">Tu su zdravi snackovi koji nas spašavaju između posla i treninga i daju nam onaj boost energije koji nam je potreban za dobar trening. Super1 x Lokomotiva pilates bag prepuna je i odličnih beauty proizvoda za brzinsko osvježenje nakon treninga jer, budimo realni, često ćemo nakon dvorane produžiti na večernje druženje, film ili koncert. <br/><br/>
                Od gela za tuširanje, dezića i parfema do proizvoda za osvježenje i styling kosa do omiljenih beauty favorita koje baš uvijek moramo imati nadohvat ruke poput balzama za usne i CC kreme, naš pilates bag ima ih sve! <br/><br/>Najbolje od svega, Super1 x Lokomotiva pilates bag ima dovoljno prostora da na putu doma odradite last minute shopping stvari poput hrane za kućne ljubimce ili omiljene cuge za kućno après pilates druženje s ekipom.</p>
                <img src="<?php echo $native_path ?>/images/zena.png" class="zena">
            </div>
        </div>
      </div>
    </div>


    <div id="clanci" class="blog" style="background: rgba(125, 126, 130, 1) ">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-lg-12 text-center d-flex align-items-center">
            <div class="marquee-container" style="margin-top: 0px;">
              <marquee direction="left" scrollamount="5">
                  <h2 class="clicktosee">CHECK TO SEE WHAT’S IN OUR PILATES BAG.CHECK TO SEE WHAT’S IN OUR PILATES BAG.CHECK TO SEE WHAT’S IN OUR PILATES BAG.CHECK TO SEE WHAT’S IN OUR PILATES BAG.CHECK TO SEE WHAT’S IN OUR PILATES BAG.CHECK TO SEE WHAT’S IN OUR PILATES BAG.CHECK TO SEE WHAT’S IN OUR PILATES BAG.CHECK TO SEE WHAT’S IN OUR PILATES BAG.CHECK TO SEE WHAT’S IN OUR PILATES BAG.CHECK TO SEE WHAT’S IN OUR PILATES BAG.CHECK TO SEE WHAT’S IN OUR PILATES BAG.CHECK TO SEE WHAT’S IN OUR PILATES BAG.CHECK TO SEE WHAT’S IN OUR PILATES BAG.</h2>
              </marquee>
            </div>
          </div>
            <div class="col-lg-8 offset-lg-2 text-center">
              
              <a href="#artikli">
                  <img class="prikazinakomp wow fadeIn" data-wow-duration="0s" data-wow-delay="0.2s" src="https://telegram.reset.hr/pilatesbag/komp.gif" alt="Torba">
                  <img class="prikazinamob  wow fadeIn" data-wow-duration="0s" data-wow-delay="0.2s" src="https://telegram.reset.hr/pilatesbag/mobi.gif" alt="Torba">

              </a>




            </div>
        </div>
      </div>
    </div>



   <div id="clanci" class="blog" style="margin-top:-1px;background: linear-gradient(180deg,rgba(125, 126, 130, 1) 0%, rgba(125, 126, 130, 1) 65%, rgba(235, 235, 223, 1) 65%, rgba(235, 235, 223, 1) 100%); padding-top: 0;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12  p-0">
        <div class="marquee-container" style="margin-top: 200px;">
            <marquee direction="left" scrollamount="5" style="margin-bottom: -20px !important;">
                <h2 class="eatsleepleftdva">EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.</h2>
            </marquee>
            <marquee direction="right" scrollamount="5" style="margin-bottom: -20px !important;">
                <h2 class="eatsleeprightdva">EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.</h2>
            </marquee>
            <marquee direction="left" scrollamount="5" style="margin-bottom: -20px !important;">
                <h2 class="eatsleepleftdva">EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.</h2>
            </marquee>
            <marquee direction="right" scrollamount="5" style="margin-bottom: -20px !important;">
                <h2 class="eatsleeprightdva">EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.</h2>
            </marquee>
            <marquee direction="left" scrollamount="5" style="margin-bottom: -20px !important;">
                <h2 class="eatsleepleftdva">EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.EAT.SLEEP.PILATES.REPEAT.</h2>
            </marquee>
        </div>

        </div>
      </div>
    </div>
    <div class="container align-items-center" style=" margin-top:-550px; position: relative; ">
      <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-5">

            <img src="<?php echo $native_path ?>/images/t1.png" class="prikazinakomp" alt="Torba">

        </div>
        <div class="col-lg-5">
            <img src="<?php echo $native_path ?>/images/t2.png" class="paddingnamobitelu" alt="Torba">
        </div>
        <div class="col-lg-1">
        </div>
      </div>
    </div>
  </div>



    <div id="clanci" class="blog" style="margin-top:-200px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 text-center d-flex align-items-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
              <img src="<?php echo $native_path ?>/images/tekstnapapiru.png">
          </div>
                      
        </div>
      </div>
    </div>


    <div id="artikli" class="blog" style="padding-bottom: 0;">
    <div class="container">
      <div class="row m-1">
        <div class="col-lg-12 plavicontainer wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h2 class="ukarticamaheadline text-center">L'OrÉal Paris Revitalift Laser krema</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <img style="margin-bottom:20px;" src="<?php echo $native_path ?>/images/artikl01.png" alt="artikl">
              </div>
              <div class="col-lg-8 text-left d-flex align-items-center">
                <p>Baš poput osvježenja koje dobar treninga daje našem tijelu, nova <a href="https://www.loreal-paris.hr/revitalift/revitalift-laser/krema-za-instant-korekciju-vrecica-ispod-ociju" target="_blank">L'Oréal Paris Revitalift Laser krema za instant korekciju</a> vrećica ispod očiju daje našem licu. Vrećice ispod očiju, bore i opuštenost kože u području oko očiju realnost su za mnoge, a Revitalift Laser krema za instant korekciju vrećica ispod očiju nevjerojatno vidljivu razliku donosi u samo 15 minuta. Ona zaglađuje vrećice, vidljivo smanjuje bore, fine linije i opuštenost kože u području oko očiju tijekom 8 sati. 95% žena primjetilo je smanjenje vrećica ispod očiju, a 94% žena potvrdilo je da im područje oko očiju izgleda glađe, čvršće i podignutije.*<br/>*Samoprocjena, 83, žene</p>
              </div>
            </div>
          </div>
                      
        </div>

      <div class="row m-1">
        <div class="col-lg-12 sivicontainer wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h2 class="ukarticamaheadlinedva text-center">Pharmaceris N-Capilar Tone CC krema SPF 30</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 order-lg-2">
                <img style="margin-bottom:20px;" src="<?php echo $native_path ?>/images/artikl16.png"  alt="artikl">
              </div>
              <div class="col-lg-8 order-lg-1 text-right d-flex align-items-center">
                <p class="tekstdesno" style="color:#EBEBDF">Neki od najboljih make up proizvoda oni su koji dolaze s dozom njege, baš poput <a href="https://www.beautypharmacy.hr/hr/pharmaceris-n-capilar-tone-cc-krema-spf30.html" target="_blank">Pharmaceris N-Capilar Tone CC krema SPF 30</a> koja je postala naš ultimativni favorit za dnevni make up look. Ova lagana tonirana krema koja istodobno njeguje kožu lica i prekriva nedostatke, a idealan je odabir za osobe koje su sklone crvenilu ili imaju dijagnosticiranu rozaceu jer sadrži zeleni mineralni pigment poznat po svojoj sposobnosti da izjednači ton kože učinkovito prikrivajući crvenilo i minimizirajući pojavu kapilara. Toliko nježna i dobra prema našoj koži da ju ni ne skidamo prije treninga. Uz to, dolazi s SPFom 30 koji daje zaštitu od sunca tokom cijele godine.</p>
              </div>
            </div>
          </div>
                      
        </div>


      <div class="row m-1">
        <div class="col-lg-12 plavicontainer wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h2 class="ukarticamaheadline text-center">Vichy Liftactiv Collagen Specialist 16 serum </h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <img style="margin-bottom:20px;" src="<?php echo $native_path ?>/images/artikl02.png"  alt="artikl">
              </div>
              <div class="col-lg-8 text-left d-flex align-items-center">
                <p>Dok mi treningom održavamo svoje tijelom mladim, <a href="https://www.vichy.hr/lice/collagen-specialist-16-bonding-serum-liftactiv/p49811.aspx" target="_blank">Vichy Liftactiv Collagen Specialist 16 serum</a> u isto vrijeme radi istu stvar za kožu našeg lica. Kao serum koji donosi sveobuhvatno rješenje problema starenja kože, Vichy Liftactiv Collagen Specialist 16 ističe se Co-Bonding tehnologijom koja ciljano djeluje na 16 ključnih znakova starenja, uključujući gubitak čvrstoće, elastičnosti i pojavu bora, te osigurava vidljivu transformaciju kože.  Za lice koje odolijeva vremenu i vanjskim utjecajima te dašak mladosti koji traje.</p>
              </div>
            </div>
          </div>
                      
        </div>


      <div class="row m-1">
        <div class="col-lg-12 sivicontainer wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h2 class="ukarticamaheadlinedva text-center">MJUUK: REFRESH, VOLUME I STRONG SUHI ŠAMPON</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 order-lg-2">
                <img style="margin-bottom:20px;" src="<?php echo $native_path ?>/images/artikl15.png"  alt="artikl">
              </div>
              <div class="col-lg-8 order-lg-1 text-right d-flex align-items-center">
                <p class="tekstdesno" style="color:#EBEBDF">Bad hair day više nije opcija, čak ni nakon treninga, a sve to zahvaljujući moćnom triu favorita za njegu i styling kose finskog brenda Mjuuk. Refresh, Volume i Strong tri su čarobne riječi kada govorimo o kosi, a Mjuuk ih je pretvorio u tri praktična proizvoda koja uvijek imamo nadohvat ruke. Refresh šampon za suho pranje donosi osvježenje između pranja ili nakon treninga, uklanja višak masnoće i vraća osjećaj čiste kose. Volume pjena za kosu daje kosi prirodan volumen i teksturu, idealno za oblikovanje raznih frizura, dok Strong sprej za kosu pruža snažnu i dugotrajnu fiksaciju bez otežavanja kose za frizuru koje može izdržati i dobar trening.</p>
              </div>
            </div>
          </div>
                      
        </div>


      <div class="row m-1">
        <div class="col-lg-12 plavicontainer wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h2 class="ukarticamaheadline text-center">Byphasse Micelarna voda</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <img style="margin-bottom:20px;" src="<?php echo $native_path ?>/images/artikl03.png"  alt="artikl">
              </div>
              <div class="col-lg-8 text-left d-flex align-items-center">
                <p>Jedna od beauty navika kojoj se vraćamo s jesenskim danima je redovito skidanje šminke. Prije treninga ili na kraju dana, malo Byphasse Micelarnom vode za skidanje šminke bit će dovoljno da skinemo šminku, a naša koža na tome će nam biti jako zahvalna. Jedinstvena formula Byphasse Micelarne vode za skidanje šminke s micelama, malim česticama koje djeluju kao magnetski privlačitelji, učinkovito uklanja nečistoće, istovremeno čuvajući prirodnu ravnotežu kože, zbog čega je idealna za sve tipove kože, pa čak i za osjetljivu kožu.</p>
              </div>
            </div>
          </div>
                      
        </div>



      <div class="row m-1">
        <div class="col-lg-12 sivicontainer wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h2 class="ukarticamaheadlinedva text-center">The Solution Salicylic Acid</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 order-lg-2">
                <img style="margin-bottom:20px;" src="<?php echo $native_path ?>/images/artikl14.png"  alt="artikl">
              </div>
              <div class="col-lg-8 order-lg-1 text-right d-flex align-items-center">
                <p class="tekstdesno" style="color:#EBEBDF">Njega kože cijelog tijela nakon treninga za nas je obavezna, a THE SOLUTION Salicylic Acid je jedan od naših favorita. Lagani, neljepljivi i brzoupijajući gel za čistu kožu sa salicilnom kiselinom je savršeno rješenje za borbu protiv akni, viška sebuma i nepravilnosti na tijelu, koje nisu rijetkost prilikom redovitog treniniranja. THE SOLUTION Sadrži 2,1 % aktivnih sastojaka, uključujući salicilnu kiselinu (1 %), obnavljajući niacinamid (1 %) i umirujuće čajno drvo. Koristite ga svakodnevno kao dio vaše rutine za njegu kože bez nepravilnosti.</p>
              </div>
            </div>
          </div>
                      
        </div>

      <div class="row m-1">
        <div class="col-lg-12 plavicontainer wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h2 class="ukarticamaheadline text-center">L’Erbolario Iris Bianco parfem</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <img style="margin-bottom:20px;" src="<?php echo $native_path ?>/images/artikl04.png" alt="artikl">
              </div>
              <div class="col-lg-8 text-left d-flex align-items-center">
                <p>Česti su dani kada ćemo nakon treninga produžiti na druženje, zbog čega je parfem obavezan dio našeg pilates baga. <a href="https://www.lerbolario.hr/hr/lines/mirisne-linije/iris-bianco/parfem-iris-bianco-3996.html?search_query=iris+bianco&results=3" target="_blank">L’Erbolario Iris Bianco</a> je nježan, ali intenzivan parfem koji vas obavija mirisnim oblakom, sofisticiranim poput čistih bijelih latica bijelog irisa. Gornje note citrusa prelijevaju se u intenzivno, cvjetno srce mirisa, koje potom ustupa mjesto suptilnim, zavodljivim notama vanilije. Praktično mini izdanje parfema koji će vas osvojiti na prvu ubacili smo u pilates bag, zajedno s karticom za popustom od 20% koji vrijedi za kupovinu svih L’Erbolario proizvoda u dućanu u Masarykovoj 6 ili na web shopu.</p>
              </div>
            </div>
          </div>
                      
        </div>



      <div class="row m-1">
        <div class="col-lg-12 sivicontainer wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h2 class="ukarticamaheadlinedva text-center">Koozmetik balzami za usne</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 order-lg-2">
                <img style="margin-bottom:20px;" src="<?php echo $native_path ?>/images/artikl13.png" alt="artikl">
              </div>
              <div class="col-lg-8 order-lg-1 text-right d-flex align-items-center">
                <p class="tekstdesno" style="color:#EBEBDF">U svakoj torbi uvijek se nalazi jedan beauty proizvod, a pilates bag nije iznimka. Naravno, riječ je o balzamu za usne, beauty favoritu kojeg obožavaju baš svi zbog čega ćemo ga uvijek imati nadohvat ruke, čak i na treningu. Ako tražite dobar balzam zausne, Koozmetik balzami za usne su 100% prirodni balzami za usne koji dubinski hrane i hidratiziraju, stvarajući zaštitni sloj bez ostavljanja ljepljivog traga. Sadrže prirodni pčelinji vosak s antibakterijskim svojstvima, te slatko bademovo ulje koje dodatno njeguje usne, a dostupni su u četiri okusa: jagoda, mandarina, vanilija-kokos i čokolada.</p>
              </div>
            </div>
          </div>
                      
        </div>

      <div class="row m-1">
        <div class="col-lg-12 plavicontainer wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h2 class="ukarticamaheadline text-center">Rexona Advanced Protection dezodorans</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <img style="margin-bottom:20px;" src="<?php echo $native_path ?>/images/artikl05.png" alt="artikl">
              </div>
              <div class="col-lg-8 text-left d-flex align-items-center">
                <p>Bez obzira na raspored, pa čak i ako se u njemu nalazi pilates class, brige za oznojenu odjeću možete zaboraviti uz Rexona Advanced Protection Bright Bouquet, antiperspirant koji sprječava onaj neugodan faux pas u obliku mrlja ispod pazuha. Zahvaljujući antiperspirantnim sastojcima koje sadrži, a koji aktivno sprječavaju stvaranje znoja i tako pomažu održati kožu suhom, Rexona Advanced Protection Bright Bouquet pruža dugotrajnu zaštitu od tjelesnih neugodnih mirisa i neželjenog znoja kako bi mogli uživati u osjećaju svježine i čistoće tijekom cijelog dana.</p>
              </div>
            </div>
          </div>
                      
        </div>



      <div class="row m-1">
        <div class="col-lg-12 sivicontainer wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h2 class="ukarticamaheadlinedva text-center">Colagate Gum Care & Sensitivity pasta i četkica</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 order-lg-2">
                <img style="margin-bottom:20px;" src="<?php echo $native_path ?>/images/artikl12.png" alt="artikl">
              </div>
              <div class="col-lg-8 order-lg-1 text-right d-flex align-items-center">
                <p class="tekstdesno" style="color:#EBEBDF">Proizvodi za higijenu oni su koje će u svojoj torbi za trening imati i najveći beauty minimalisti, a Colagate pasta i četkica za zube nalaze se visoko na toj listi. Pasta za zube Gum Care & Sensitivity iz <a href="https://www.colgate.hr/" target="_blank">Colgate linije Total Active Prevention</a> aktivno sprječava mnoge probleme s oralnim zdravljem uz 24-satnu antibakterijsku zaštitu. Uz pastu koja smanjuje plak prije i pomaže u zaštiti cakline od erozije djelovanjem kiselina u usnoj šupljini, sve što nam treba je dobra četkica. Colgate Slim Soft Advanced Design Edition je ultra meka četkica za zube s vlaknima koja dosežu 7 puta dublje ispod linije desni u poređenju sa regularnim četkicama za zube sa ravno sečenim i zaobljenim vlaknima.</p>
              </div>
            </div>
          </div>
                      
        </div>


      <div class="row m-1">
        <div class="col-lg-12 plavicontainer wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h2 class="ukarticamaheadline text-center">Gym Beam Kolagen Beauty Shot i sport bottle  boca</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <img style="margin-bottom:20px;" src="<?php echo $native_path ?>/images/artikl06.png" alt="artikl">
              </div>
              <div class="col-lg-8 text-left d-flex align-items-center">
                <p>Povratak rutini i dobrim navikama ove smo jeseni započeli pilatesom i njegom, a nastavljamo zdravom i uravnotežnom prehranom. Jedna od adresa na kojoj smo pronašli sve što nam treba kako bismo ostvarili svoje planove je Gym Beam. Na jednom mjestu, Gym Beam okuplja sve od suplemenata i nutritivno bogatih snackova do opreme za trening. Naš prvi favorit iz Gym Beam ponude je <a href="https://gymbeam.hr/kolagen-beauty-shot-beastpink.html " target="_blank">Kolagen Beauty Shot</a> koji sadrži funkcionalnu dozu vrhunskog morskog kolagena, hijaluronske kiseline i odabranih vitamina i minerala. Zahvaljujući svojoj praktičnom pakiranju, idealan je dodatak našem pilates bagu. Drugi favorit je velika <a href="https://gymbeam.hr/boca-sport-bottle-pink-1000-ml-gymbeam.html" target="_blank">Sport Bottle Pink boca</a>. Napravljena od kvalitetnog materijala bez BPA, ova je boca neslomljiva, lagana i ne ostavlja mirise u napitcima, a prigodna je i za vruće i za hladne napitke. Definitivno obavezan dodatak svakom danu i treningu.</p>
              </div>
            </div>
          </div>
                      
        </div>



      <div class="row m-1">
        <div class="col-lg-12 sivicontainer wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h2 class="ukarticamaheadlinedva text-center">Nutri kulti Zobene bombice i krekeri</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 order-lg-2">
                <img style="margin-bottom:20px;" src="<?php echo $native_path ?>/images/artikl11.png" alt="artikl">
              </div>
              <div class="col-lg-8 order-lg-1 text-right d-flex align-items-center">
                <p class="tekstdesno" style="color:#EBEBDF">Za boost energije prije i nakon treninga u naš pilates bag ubacili smo Nutri kulti <a href="">Zobene bombice</a> i <a href="https://nutrikulti.hr/proizvod/zobene-bombice/" target="_blank">krekere 1000 sjemenki</a>, nutritivno bogate, veganske/vegetarian i bez aditiva, pojačivača okusa ili umjetnih bojila. <a href="https://nutrikulti.hr/proizvod/1000-sjemenki-krekeri/" target="_blank">Zobene bombice</a> su aromatični keksi od zobenih pahuljica, badema, kandiranih brusnica, cimeta, smeđeg lana, soka naranče i arome vanilije. Prava su nutritivna bomba zbog čega su super izbor kao ne samo kao poslastica, podloga za desert ili doručak uz omiljeni napitak i voće, već i prije treninga kao brza i nutritivno bogata energija. <a href="https://nutrikulti.hr/proizvod/zobene-bombice/">Krekeri 1000 sjemenki</a> su hrskave pločice napravljene od chia sjemenki, zlatnog i smeđeg lana, integralnog sezama, bučinih sjemenki, suncokreta i psyllium ljuskice, bez dodatka brašna, dok im posebnu aromu im daje češnjak te uz dodatak integralnog sezama i bučinih golica ovi krekeri mogu biti odlična zamjena za kruh. A ako izmrvite koju pločicu u sir ili jogurt možete dobiti odličan dodatak svakom jelu ili snack nakon treninga. Osim što su veganski/vegetarian, pogodni su i za sve one koji moraju regulirati šećer u krvi te osobe koje se hrane po lchf ili keto principima prehrane.</p>
              </div>
            </div>
          </div>
                      
        </div>


      <div class="row m-1">
        <div class="col-lg-12 plavicontainer wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h2 class="ukarticamaheadline text-center">Boom Box<br/>smoothie</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <img style="margin-bottom:20px;" src="<?php echo $native_path ?>/images/artikl07.png" alt="artikl">
              </div>
              <div class="col-lg-8 text-left d-flex align-items-center">
                <p>Za osvježenje i slatki predah, Boom Box smoothie je uvijek u našoj torbi. Savršeno izbalansirana kombinacija voća, obogaćena zobi za kremastu teksturu i dodatnu energiju, svaki Boom Box smoothie je prirodno osvježenje, idealno za užurban jutarnji trenutak ili izbalansiran predah tijekom dana. U Super1 x Lokomotiva pilates bag ubacili smo naše omiljene okuse: <a href="https://boombox.eu/hr/smoothie-sa-zobi/kupina-malina-banana-i-jabuka/" target="_blank">smoothie sa zobi, kupinom, malinom, bananom</a> i <a href="https://boombox.eu/hr/smoothie-sa-zobi/jabuka-mango-i-marakuja/" target="_blank">jabukom the smoothie sa zobi, jabukom, mangom i marakujom</a>.</p>
              </div>
            </div>
          </div>
                      
        </div>



      <div class="row m-1">
        <div class="col-lg-12 sivicontainer wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h2 class="ukarticamaheadlinedva text-center">Sana Crispy<br/>štapići</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 order-lg-2">
                <img style="margin-bottom:20px;" src="<?php echo $native_path ?>/images/artikl10.png" alt="artikl">
              </div>
              <div class="col-lg-8 order-lg-1 text-right d-flex align-items-center">
                <p class="tekstdesno" style="color:#EBEBDF">Kada nakon treninga poželimo hrskavi i slani snack, Sana Crispy štapići su naš prvi izbor. Ukusni ekstrudirani hrskavi štapići bez glutena predstavljaju zdraviju opciju od klasičnih grisina ili štapića od bijelog brašna, no svakako će zadovoljiti onaj craving za hrskavim i slanim. Sana Crispy štapići su odlični kao solo snack, ali i za „dipanje“ u omiljeni humus ili kremasti guacamole. Najbolje od svega, dolaze u nekoliko okusa, a posebno ističe varijanta s okusom sira za koju znamo da će biti veliki hit među slanoljupcima - i baš smo ju zato ubacili u pilates bag.</p>
              </div>
            </div>
          </div>
                      
        </div>




      <div class="row m-1">
        <div class="col-lg-12 plavicontainer wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0s">
            <div class="row">
              <div class="col-lg-12">
                <h2 class="ukarticamaheadline text-center">Purina PRO PLAN Delicate Mousse i fortiflora </h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <img style="margin-bottom:20px;" src="<?php echo $native_path ?>/images/artikl08.png" alt="artikl">
              </div>
              <div class="col-lg-8 text-left d-flex align-items-center">
                <p> svakom dobrom pilates bagu ima prostora za sve što nam treba prije, tijekom i nakon trendinga, ali i da u njega ubacimo nekoliko stvari koje ćemo kupiti na putu doma. Jedna od stvari za koju će se uvijek naći mjesta u našem pilates bagu je hrana za naše kućne ljubimce, a Purina je uvijek najbolji izbor. Za mačke koje su navikle na najbolje, u pilates bag ubacili smo poslastice koje će ih oduševiti, Purina PRO PLAN® Delicate Mousse bogat puretinom te  <a href="https://www.purina.hr/macke/hrana-za-macke" target="_blank">Purina PRO PLAN® FORTIFLORA probiotički dodatak prehrani za mačke</a> koji je zaslužan za održavanje zdravlja crijeva, ravnotežu mikroflore, ali i kao pomoć u održavanju zdravog imunološkog sustava./p>
              </div>
            </div>
          </div>
                      
        </div>


      <div class="row m-1">
        <div class="col-lg-12 sivicontainer wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <div class="row">
              <div class="col-lg-8 offset-lg-2">
                <h2 class="ukarticamaheadlinedva text-center">Jägermeister Orange i Thomas Henry premium mixeri</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 order-lg-2">
                <img style="margin-bottom:20px;" src="<?php echo $native_path ?>/images/artikl09.png" alt="artikl">
              </div>
              <div class="col-lg-8 order-lg-1 text-right d-flex align-items-center">

                <p class="tekstdesno" style="color:#EBEBDF">Iako su ljetni dani iza nas, uz <a href="https://www.instagram.com/g3spirits_croatia/" target="_blank">Jägermeister Orange i Thomas Henry premium mixere</a> možemo zadržati svježinu i razigranost i u jesenskim mjesecima, savršeno za after-work opuštanje, vikend druženja s ekipom, a u pilates bag ubacit ćemo ga za aprés pilates piće. Jer tajna dobrih dana uvijek se nalazi u balansu između posla i opuštenja, zdravih navika i uživanja u stvarima koje nas opuštaju i vesele.</p>
              </div>
            </div>
          </div>
                      
        </div>

      </div>
    </div>

   <div class="blog" style="padding-top: 0;">
   <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">

              <p style="text-align: center;">
                  Kreativno vodstvo: Ela Jarni<br/>
Fotografija: Matej Dokić<br/>
Grafičko oblikovanje: Domia Oršolić<br/>
Model: Ivana Vukušić<br/><br/>
              <img style="width:200px; height: auto; padding: 10px" src="<?php echo $native_path ?>/images/telegram-studio.png"  alt="logo"/>
              </p>

        </div>
      </div>

  </div>
</div>
  <!-- Scripts -->
  <script src="<?php echo $native_path_vendor ?>/jquery/jquery.min.js"></script>
  <script src="<?php echo $native_path_vendor ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $native_path ?>/js/owl-carousel.js"></script>
  <script src="<?php echo $native_path ?>/js/animation.js"></script>
  <script src="<?php echo $native_path ?>/js/imagesloaded.js"></script>
  <script src="<?php echo $native_path ?>/js/custom.js"></script>


    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>