
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/tzzz';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rozha+One&display=swap" rel="stylesheet">

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
  <!-- ***** Preloader Start ***** -->


<div class="navigacija text-center">
  <ul>
    <li><a href="#vina"><img src="<?php echo $native_path ?>/assets/images/vino.png"/></a></li>
    <li><a href="#opg"><img src="<?php echo $native_path ?>/assets/images/op.png"/></a></li>
    <li><a href="#wellness"><img src="<?php echo $native_path ?>/assets/images/wellness.png"/></a></li>
    <li><a href="#bike"><img src="<?php echo $native_path ?>/assets/images/bike.png"/></a></li>
  </ul>

</div>

  <div class="blog hero" style="padding-bottom: 0 !important;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
               <img src="<?php echo $native_path ?>/assets/images/claim.svg" class="claimslika" /><br/>
        </div>
        <div class="col-lg-5">
        </div>
    </div>
  </div>
  <div class="container-fluid" style="padding-top:50px;">
      <div class="row">
          <div class="col-lg-12 p-0">
            <img src="<?php echo $native_path ?>/assets/images/grid.png"/>
          </div>
        </div>
    </div>
</div>

<div class="blog" style="background: #74a268;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 text-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
            <h1 style="text-transform: uppercase;">županija za ljude, prirodu i klimu.</h1>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-5 text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.8s">
             <p class="sticky-top" style=" font-weight: 600 !important; color:#fff; margin-top: 0px;">Zagrebačka Županija jedna je od Green Destinations lokacija u Hrvatskoj, što znači da je upravo ovo destinacija koja nudi održivi turizam - održiv za ljude, prirodu i klimu. Stoga smo pripremili vodič za autentičan i održiv doživljaj ovog kraja koji se sastoji od posjeta OPG-ovima, wellness iskustva, biciklističkih tura te isprobavanja lokalnih vina i likera.</p>
          </div>
        </div>
      </div>
</div>


<div class="blog p-0">
  <div class="container-fluid">
      <div class="row">

          <div class="col-lg-12 p-0">
            <img src="<?php echo $native_path ?>/assets/images/interwine.png"/>
          </div>
        </div>
      </div>
</div>


<div class="blog" style="background: #74a268;" id="vina">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 text-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
            <h1 style="text-transform: uppercase;">otkrij autentična vina, rakije i likere</h1>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-5 text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.8s">
             <p class="sticky-top" style=" font-weight: 600 !important; color:#fff; margin-top: 0px;">Vinogradi na Plešivici i Samoborskom gorju neki su od najboljih u regiji. Upravo je ovaj kraj poznat po najboljim hrvatskim pjenušcima, a ovdje se održavaju i neki od najljepših vinskih festivala u kontinentalnoj Hrvatskoj.</p>
          </div>
        </div>
      </div>



      <div class="container" style="border:2px solid #ddca78; margin-top: 50px;">


          <div class="row">
              <div class="iznadprekida">
                  <h2 class="prekid-linije">Posjeti festivale</h2>
              </div>
          </div>

          <div class="row" style="padding-top:20px;">
              <div class="col-lg-4 text-left p-4 wow fadeIn"  data-wow-duration="0.8s" data-wow-delay="0s">
                <img src="<?php echo $native_path ?>/assets/images/sparkling-wine.png"/><br/><br/>
                <h3>Sparkling wine fest</h3>
                <p style=" font-weight: 300 !important; margin-top:0px !important; color:#fff;">Razdoblje: Studeni</p>
              </div>
              <div class="col-lg-4 text-left p-4 wow fadeIn"  data-wow-duration="0.8s" data-wow-delay="0.5s">
                <img src="<?php echo $native_path ?>/assets/images/pjenusci-i-jagode.png"/><br/><br/>
                <h3>Festival pjenušaca & jagoda</h3>
                <p style=" font-weight: 300 !important; margin-top:0px !important; color:#fff;">Razdoblje: Svibanj</p>
              </div>
              <div class="col-lg-4 text-left p-4 wow fadeIn"  data-wow-duration="0.8s" data-wow-delay="1s">
                <img src="<?php echo $native_path ?>/assets/images/dani-vina.png"/><br/><br/>
                <h3>Dani vina</h3>
                <p style=" font-weight: 300 !important; margin-top:0px !important; color:#fff;">Razdoblje: Rujan</p>
              </div>
          </div>
      </div>


</div>




<div class="blog" style="background: #74a268;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 text-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/vino1.png"/>
          </div>
          <div class="col-lg-6 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p class="sticky-top" style=" font-weight: 300 !important; color:#fff;"><span style="font-family: 'Rozha One', serif; font-size: 44px; text-transform: uppercase; color: #ddca78 !important">vinarija jagunić & three stars brut</span><br/><br/>Na vinskoj sceni Zagrebačke županije, Vinarija Jagunić ističe se pjenušcem Three Stars Brut, senzualnim vinom koje pleše na nepcu finim mjehurićima i bogatim okusima. Ovo vino, stvoreno s poštovanjem prema tradiciji i prirodi, zavodi svakim gutljajem, donoseći istinski užitak.</p>
          </div>
        </div>
      </div>

</div>


<div class="blog" style="background: #74a268; padding-top: 0px !important;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 order-lg-2 text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/vino2.png"/>
          </div>
          <div class="col-lg-6 order-lg-1 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p class="sticky-top" style=" font-weight: 300 !important; color:#fff;"><span style="font-family: 'Rozha One', serif; font-size: 44px; text-transform: uppercase; color: #ddca78 !important">vinarija tomac & extra brut millenium</span><br/><br/>Vinarija Tomac osvaja svojim Extra Brut Millennium pjenušcem, koji ujedinjuje tradiciju i inovaciju. Ovo vino, proizvedeno s ekološkim pristupom, utjelovljuje visoke standarde održivosti i kvalitete, čineći svaki gutljaj neponovljivim iskustvom.</p>
          </div>
        </div>
      </div>

</div>


<div class="blog" style="background: #74a268; padding-top: 0px !important">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 text-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/vino3.png"/>
          </div>
          <div class="col-lg-6 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p class="sticky-top" style=" font-weight: 300 !important; color:#fff;"><span style="font-family: 'Rozha One', serif; font-size: 44px; text-transform: uppercase; color: #ddca78 !important">vinarija šember & rajnski rizling</span><br/><br/>Vinarija Šember sa svojim Rajnskim Rizlingom donosi eleganciju u čašu. Ovo vino je odraz kvalitete i strasti prema održivoj proizvodnji, a svaki gutljaj nosi sofisticiranost koja očarava.</p>
          </div>
        </div>
      </div>

</div>


<div class="blog" style="background: #74a268; padding-top: 0px !important;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 order-lg-2 text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/vino4.png"/>
          </div>
          <div class="col-lg-6 order-lg-1 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p class="sticky-top" style=" font-weight: 300 !important; color:#fff;"><span style="font-family: 'Rozha One', serif; font-size: 44px; text-transform: uppercase; color: #ddca78 !important">vinarija dobra berba & brut</span><br/><br/>Vinarija Dobra berba kroz pjenušac Brut priča priču o spoju strasti, znanja i dubokog poštovanja prema prirodi. Njihova vina osvajaju elegancijom i posvećenošću detaljima, čineći svaku bocu pravim doživljajem za ljubitelje vrhunske kapljice.</p>
          </div>
        </div>
      </div>
</div>


<div class="blog" style="background: #74a268; padding-top: 0px !important">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 text-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/vino5.png"/>
          </div>
          <div class="col-lg-6 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p class="sticky-top" style=" font-weight: 300 !important; color:#fff;"><span style="font-family: 'Rozha One', serif; font-size: 44px; text-transform: uppercase; color: #ddca78 !important">vinarija kolarić & Pinot Grigio Classic </span><br/><br/>Vina Kolarić svojim Pinot Grigiom Classic spajaju tradiciju i moderne tehnike uz poštovanje prema prirodi. Njihova vina odišu sofisticiranošću i zavodljivošću, stvarajući nezaboravan doživljaj za svakog ljubitelja vina.</p>
          </div>
        </div>
      </div>

</div>


<div class="blog" style="background: #74a268; padding-top: 0px !important;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 order-lg-2 text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/vino6.png"/>
          </div>
          <div class="col-lg-6 order-lg-1 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p class="sticky-top" style=" font-weight: 300 !important; color:#fff;"><span style="font-family: 'Rozha One', serif; font-size: 44px; text-transform: uppercase; color: #ddca78 !important">vinarija robert braje & rose</span><br/><br/>Vinarija Robert Braje donosi Rose, ručno rađeno vino koje odražava strast i predanost male vinarije koja s ponosom prati ekološke prakse. Svaka boca ove male, ali iznimno cijenjene vinarije donosi autentičan okus i priču o spoju tradicije i prirode.</p>
          </div>
        </div>
      </div>

</div>




<div class="blog" style="background: #74a268; padding-top: 0px !important;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/mapa.png"/>
          </div>
          <div class="col-lg-6 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p class="sticky-top" style=" font-weight: 300 !important; color:#fff;"><span style="font-family: 'Rozha One', serif; font-size: 44px; text-transform: uppercase; color: #ddca78 !important">isplaniraj svoj doživljaj vinarija</span><br/><br/>Od Zagreba do Plešivice automobilom možete doći koristeći autocestu A1, izlaz Jastrebarsko, ili se uputiti popularnom <i>starom Karlovačkom</i> do Jastrebarskog preko Klinča sela. </p>
          </div>
        </div>
      </div>

</div>



<div class="blog" style="background: #74a268; padding-top: 0px !important">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 text-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/vino7.png?v=2"/>
          </div>
          <div class="col-lg-6 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p class="sticky-top" style=" font-weight: 300 !important; color:#fff;"><span style="font-family: 'Rozha One', serif; font-size: 44px; text-transform: uppercase; color: #ddca78 !important">liker bermet filipec</span><br/><br/>Vina Ljubitelji likera mogu uživati u Bermetu Filipec, autohtonom specijalitetu Samobora, čiji bogati okusi evociraju prošlost i povijest ovoga kraja. Ovo je prava tekuća priča o generacijama koje su marljivo radile na očuvanju ove jedinstvene delicije.</p>
          </div>
        </div>
      </div>

</div>


<div class="blog" style="background: #74a268; padding-top: 0px !important;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 order-lg-2 text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/vino8.png?v=2"/>
          </div>
          <div class="col-lg-6 order-lg-1 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p class="sticky-top" style=" font-weight: 300 !important; color:#fff;"><span style="font-family: 'Rozha One', serif; font-size: 44px; text-transform: uppercase; color: #ddca78 !important">destilerija hedonica & destilerija brigljević</span><br/><br/>Destilerija Hedonica sa svojim rakijama i likerima donosi autentične okuse i bogatu tradiciju proizvodnje pića, dok Destilerija Brigljević sa svojim Brandyjem prelazi granice Turopolja svojim prestižem i iznimnom kvalitetom</p>
          </div>
        </div>
      </div>

</div>


  <div class="blog hero pozadina" style="padding-bottom: 0 !important;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
               <img src="<?php echo $native_path ?>/assets/images/claim2.svg" class="claimslika" /><br/>
        </div>
    </div>
  </div>
  <div class="container-fluid" style="padding-top:50px;">
      <div class="row">
          <div class="col-lg-12 p-0">
            <img src="<?php echo $native_path ?>/assets/images/grid.png"/>
          </div>
        </div>
    </div>
</div>

<div class="blog" style="background: #74a268;" id="opg">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 text-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
            <h1 style="text-transform: uppercase;">otkrij tradicionalne domaće proizvode </h1>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-5 text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.8s">
             <p class="sticky-top" style=" font-weight: 600 !important; color:#fff; margin-top: 0px;">Ono što ovaj kraj čini posebnim nije samo prekrasna priroda, već i vrijedni ljudi. U Županiji se nalazi niz OPG-ova, a većina njih se može i posjetiti. Tako možete iz prve ruke doživjeti obiteljsku tradiciju.</p>
          </div>
        </div>
      </div>
</div>


<div class="blog p-0">
  <div class="container-fluid">
      <div class="row">

          <div class="col-lg-12 p-0 wow fadeIn"  data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/svi.jpg"/>
          </div>
        </div>
      </div>
</div>




<div class="blog" style="background: #74a268;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 order-lg-2 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <div class="image-gallery gallery1">
              <img src="<?php echo $native_path ?>/assets/images/opg1.jpg"/>
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p style=" font-weight: 300 !important; color:#fff; padding-top:20px"><span style="font-family: 'Rozha One', serif; font-size: 44px; text-transform: uppercase; color: #ddca78 !important">opg Barišec: stanica za sve koji obožavaju ljuto</span><br/><br/>OPG Barišec najpoznatiji je po brendu "Samo ljuto", specijaliziranom za uzgoj i preradu raznih sorti chili papričica. Njihovi proizvodi, uključujući ljute umake, prava su eksplozija okusa koja oživljava svako jelo. Svaka teglica nudi spoj intenzivne pikantnosti i pažljivo odabranih prirodnih sastojaka, uzgojenih s ljubavlju i poštovanjem prema zemlji.<br/><br/>Posjetiti ih možete na lokaciji u Topolju nedaleko Ivanić Grada. </p>
          </div>
        </div>
      </div>

</div>


<div class="blog" style="background: #74a268; padding-top: 20px;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 order-lg-2 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <div class="image-gallery gallery2">
              <img src="<?php echo $native_path ?>/assets/images/opg2.jpg"/>
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p style=" font-weight: 300 !important; color:#fff; padding-top:20px"><span style="font-family: 'Rozha One', serif; font-size: 44px; text-transform: uppercase; color: #ddca78 !important">opg cesar: bogatstvo za zdravlje srca</span><br/><br/>OPG Cesar ponosno proizvodi vrhunsko bučino ulje, bogato omega-3 i omega-6 masnim kiselinama. Ovo ulje ne samo da poboljšava okuse jela, već i doprinosi zdravlju, čineći ga ključnim dodatkom svake kuhinje. Proizvedeno uz visoke ekološke standarde, bučino ulje iz OPG Cesar odražava kvalitetu i predanost održivoj poljoprivredi.<br/><br/>Nalaze se svega 10ak minuta od istoka Zagreba u Obedišću Ježevskom. </p>
          </div>
        </div>
      </div>

</div>


<div class="blog" style="background: #74a268; padding-top: 20px;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 order-lg-2 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <div class="image-gallery gallery3">
              <img src="<?php echo $native_path ?>/assets/images/opg3.jpg"/>
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p style=" font-weight: 300 !important; color:#fff; padding-top:20px"><span style="font-family: 'Rozha One', serif; font-size: 44px; text-transform: uppercase; color: #ddca78 !important">opg jurkas: gdje nastaju najsvježiji sir i mlijeko</span><br/><br/>OPG Jurkas ističe se svojim mliječnim proizvodima, poput svježeg sira i mlijeka, koji osvajaju kvalitetom i bogatim okusima. Njihovi proizvodi dolaze iz srca prirode, obogaćujući stolove diljem regije svojom svježinom i autentičnošću<br/><br/>Proizvode farme i sirane Jurkas posjetite u Harmici, tik do slovenske granice.</p>
          </div>
        </div>
      </div>

</div>


  <div class="blog hero pozadina2" style="padding-bottom: 0 !important;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
               <img src="<?php echo $native_path ?>/assets/images/claim3.svg" class="claimslika" /><br/>
        </div>
    </div>
  </div>
    </div>
</div>


<div class="blog" style="background: #74a268;" id="wellness">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 text-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
            <h1 style="text-transform: uppercase;">otkrij odmor za um i tijelo </h1>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-5 text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.8s">
             <p class="sticky-top" style=" font-weight: 600 !important; color:#fff; margin-top: 0px;">Ovaj se kraj posebno ponosi i svojim wellness iskustvima. Tako možete uživati u proizvodima koji spajaju benefite za um i tijelo, pritom poštujući održive i ekološke prakse.</p>
          </div>
        </div>
      </div>
</div>



<div class="blog" style="background: #74a268; padding-top: 20px;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
              <img src="<?php echo $native_path ?>/assets/images/magarci.png" style="padding-top:80px" />
          </div>
          <div class="col-lg-6 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p style=" font-weight: 300 !important; color:#fff; padding-top:20px"><span style="font-family: 'Rozha One', serif; font-size: 44px; text-transform: uppercase; color: #ddca78 !important">opg ciganović: čarolije od magarećeg mlijeka</span><br/><br/>OPG Ciganović proizvodi magareće mlijeko i prirodnu kozmetiku, spajajući ljekovite benefite tih proizvoda s ekološkim praksama. Njihovo magareće mlijeko nadaleko je poznato po svojim hranjivim i ljekovitim svojstvima, dok njihovi kozmetički proizvodi pružaju vrhunsku njegu za kožu, uvijek s posebnim naglaskom na održivost.<br/><br/>Proizvode OPG Ciganović možete kupiti i na njihovoj web stranici <a href="https://magare.hr" target="_blank">magare.hr</a>.</p>
          </div>
        </div>
      </div>

</div>


<div class="blog p-0">
  <div class="container-fluid">
      <div class="row">

          <div class="col-lg-6 p-0 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/opg4.jpg"/>
          </div>
          <div class="col-lg-6 p-0 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/opg4-1.jpg"/>
          </div>
        </div>
      </div>
</div>



<div class="blog" style="background: #74a268;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 order-lg-2 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
              <img src="<?php echo $native_path ?>/assets/images/cvijece.png" />
          </div>
          <div class="col-lg-6 order-lg-1 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p style=" font-weight: 300 !important; color:#fff; padding-top:20px"><span style="font-family: 'Rozha One', serif; font-size: 44px; text-transform: uppercase; color: #ddca78 !important">gabrijela vrbetić i čarobne radionice bilja</span><br/><br/>Radionice Gabrijele Vrbetić  o jestivom i ljekovitom pružaju posjetiteljima priliku da nauče o širokom spektru biljaka i njihovim korisnim svojstvima. Uz to, radionica je puna korisnih savjeta za primjenu u svakodnevnom životu. Gabrijeline radionice idealne su za one koji žele dublje zaroniti u blagodati prirode i osjetiti čudesnu povezanost s okolišem.<br/><br/>Sve informacije kada se održava iduća radionica pronađite <a href="https://itisgabysgarden.com/pages/radionice" target="_blank">ovdje</a>.</p>
          </div>
        </div>
      </div>

</div>


<div class="blog p-0">
  <div class="container-fluid">
      <div class="row">

          <div class="col-lg-6 p-0 wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/opg5.jpg"/>
          </div>
          <div class="col-lg-6 p-0 wow fadeInRight"  data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/opg5-1.jpg"/>
          </div>
        </div>
      </div>
</div>



<div class="blog" style="background: #74a268; ">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
              <img src="<?php echo $native_path ?>/assets/images/cvijece2.png" />
          </div>
          <div class="col-lg-6 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p style=" font-weight: 300 !important; color:#fff; padding-top:20px"><span style="font-family: 'Rozha One', serif; font-size: 44px; text-transform: uppercase; color: #ddca78 !important">monika antolović i fitoaromaterapija</span><br/><br/>Monika Antolović, kroz svoju fitoaromaterapiju, koristi ljekovito bilje kako bi stvorila prirodne preparate poput balzama i krema. Njeni proizvodi, izrađeni s ljubavlju prema prirodi, pružaju vrhunske rezultate u njezi tijela i duha, smanjujući stres i potičući osjećaj ravnoteže.<br/><br/>Monikine proizvode možete kupiti i na web-stranici <a href="https://aromarica.hr" target="_blank">aromarica.hr</a>.</p>
          </div>
        </div>
      </div>

</div>


<div class="blog p-0">
  <div class="container-fluid">
      <div class="row">

          <div class="col-lg-6 p-0 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/opg6.jpg" />
          </div>
          <div class="col-lg-6 p-0 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/opg6-1.jpg" />
          </div>
        </div>
      </div>
</div>

<div class="blog" style="background: #74a268; padding-bottom:20px !important" id="bike">
  <div class="container">
      <div class="row">

          <div class="col-lg-8 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <h1 style="text-transform: uppercase;">otkrij zagrebačku županiju. na biciklu. </h1>
          </div>

          <div class="col-lg-4 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p class="sticky-top" style=" font-weight: 600 !important; color:#fff; margin-top: 0px;">Sve ljepote Zagrebačke županije možete doživjeti na najodrživiji način - kroz biciklističke ture.</p>
          </div>
        </div>
      </div>
</div>

<div class="blog p-0">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12 p-0 wow fadeInLeftBig" data-wow-duration="2s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/bicikli.png"/>
          </div>
        </div>
      </div>
</div>


<div class="blog" style="background: #74a268;">
  <div class="container">
      <div class="row">

          <div class="col-lg-6 order-lg-2 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
              <img src="<?php echo $native_path ?>/assets/images/zumb.jpg"/>
          </div>
          <div class="col-lg-6 order-lg-1 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
             <p style=" font-weight: 300 !important; color:#fff; padding-top:20px"><span style="font-family: 'Rozha One', serif; font-size: 44px; text-transform: uppercase; color: #ddca78 !important">natrural žumberak i avantura na e-biciklima</span><br/><br/>Natrural Žumberak poziva posjetitelje da dožive prirodu u njezinom punom sjaju, nudeći ture na e-biciklima kroz vinograde i branje ljekovitog bilja. Ovo izletište idealno je za one koji žele aktivno provesti vrijeme u prirodi, uz učenje o važnosti ekološke svijesti i očuvanja prirodnih resursa.<br/><br/>Izletište Natrural nalazi se u sklopu Parka Prirode Žumberak i otvoreno je svake subote i nedjelje što ga čini idealnim vikend-izletom nadomak Zagreba! </p>
          </div>
        </div>
      </div>

</div>





<div class="blog" style="background: #74a268; padding-top:0px !important">
  <div class="container">

      <div class="container" style="border:2px solid #ddca78; margin-top: 50px;">


          <div class="row">
              <div class="iznadprekida">
                  <h2 class="prekid-linije">Još biciklističkih tura</h2>
              </div>
          </div>

          <div class="row" style="padding-top:20px;">
              <div class="col-lg-4 text-left p-4 wow fadeIn"  data-wow-duration="0.8s" data-wow-delay="0s">
                <img src="<?php echo $native_path ?>/assets/images/ruta1.png"/><br/><br/>
                <h3>Dugo Selo<br/>Prozorje<br/>Martin Breg<br/>Dugo Selo</h3>
                <p style=" font-weight: 300 !important; margin-top:0px !important; color:#fff;">Dužina rute: 11 km<br/>Početna točka: Željeznički kolodvor Dugo Selo</p>
              </div>
              <div class="col-lg-4 text-left p-4 wow fadeIn"  data-wow-duration="0.8s" data-wow-delay="0.5s">
                <img src="<?php echo $native_path ?>/assets/images/ruta2.png"/><br/><br/>
                <h3>Zaprešić<br/>Javorje<br/>Prudnice<br/>Marija Gorica</h3>
                <p style=" font-weight: 300 !important; margin-top:0px !important; color:#fff;">Dužina rute: 29 km<br/>Početna točka: Park Novi dvori, Zaprešić</p>
              </div>
              <div class="col-lg-4 text-left p-4 wow fadeIn"  data-wow-duration="0.8s" data-wow-delay="1s">
                <img src="<?php echo $native_path ?>/assets/images/ruta3.png"/><br/><br/>
                <h3>Sveta Nedelja<br/>Gornja Zdenčina<br/>Rakov Potok<br/>Sveta Nedelja</h3>
                <p style=" font-weight: 300 !important; margin-top:0px !important; color:#fff;">Dužina rute: 44 km<br/>Početna točka: Centar Svete Nedelje</p>
              </div>
          </div>
      </div>


</div>





  <div id="clanci" class="blog" style="z-index: 100; position: relative; padding-top: 120px; padding-bottom: 120px; overflow: hidden; background: #74a268; font-weight: 300 !important;">


    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">

      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
              <p style="color:#fff; font-weight: 300 !important">Fotograf: Dražen Kopač<br/>Kreativno vodstvo: Kristina Livaja<br/><br/>Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/telegram.png" style="max-width: 186px;"  />
          </div>
        </div>
      </div>
  </div>
<script type="text/javascript">
  const galleries = [
    {
      images: ["<?php echo $native_path ?>/assets/images/opg1.jpg", "<?php echo $native_path ?>/assets/images/opg1-1.jpg"],
      currentImageIndex: 0,
      element: document.querySelector(".gallery1 img")
    },
    {
      images: ["<?php echo $native_path ?>/assets/images/opg2.jpg", "<?php echo $native_path ?>/assets/images/opg2-1.jpg"],
      currentImageIndex: 0,
      element: document.querySelector(".gallery2 img")
    },
    {
      images: ["<?php echo $native_path ?>/assets/images/opg3.jpg", "<?php echo $native_path ?>/assets/images/opg3-1.jpg"],
      currentImageIndex: 0,
      element: document.querySelector(".gallery3 img")
    }
  ];

  function updateImage(gallery) {
    const imageUrl = gallery.images[gallery.currentImageIndex];
    gallery.element.style.opacity = 0;
    setTimeout(() => {
      gallery.element.src = imageUrl;
      gallery.element.alt = `Slika ${gallery.currentImageIndex + 1}`;
      gallery.element.style.opacity = 1;
    }, 500);
  }

  function showNextImage(gallery) {
    gallery.currentImageIndex = (gallery.currentImageIndex + 1) % gallery.images.length;
    updateImage(gallery);
  }

  // Postavite interval za automatsko klizanje za svaku galeriju
  galleries.forEach(gallery => {
    updateImage(gallery); // Inicijalno postavljanje slike
    setInterval(() => showNextImage(gallery), 3000); // 3000 ms interval za promjenu slike
  });
</script>
  <!-- Scripts -->
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
