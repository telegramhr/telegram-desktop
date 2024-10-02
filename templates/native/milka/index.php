
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/milka';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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


  <div class="blog hero" style="padding-bottom: 0 !important;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
               <img src="<?php echo $native_path ?>/assets/images/claim.svg" class="claimslika" /><br/>
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

<div class="blog" style="background: #7d69ac; padding-top: 30px; color: #fff">
  <div class="container">
      <div class="row">

          <div class="col-lg-8 offset-lg-2 text-left wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <h2>Pitali smo se, kako tri generacije - X, Y & Z - koriste svoje dragocjene sate? </h2>
             <p class="sticky-top" style=" font-weight: 300 !important; color:#fff">Najprije kroz anketu, a potom i kroz priče svakog predstavnika generacije, odlučili smo saznati kako oni provode svoja 24 Milka trenutka. Što nam je važnije dok smo mlađi, a na što stavljamo fokus kako starimo?<br/><br/>Gotovo 800 ljudi podijelilo je svoje iskustvo s nama u velikoj anketi koju smo organizirali na portalu Super1. Otkrijte kako različite generacije provode 24 sata - tko je najzaposleniji, tko najviše kuha, a tko se ne javlja na telefon?</p>
          </div>
        </div>
      </div>
</div>

<div class="blog" style="padding: 0px;">
  <div class="container-fluid">
      <div class="row">

          <div class="col-lg-12 p-0">
            <img src="<?php echo $native_path ?>/assets/images/prvi.jpg"/>
          </div>
        </div>
      </div>
</div>



<div class="blog" style="background: #7d69ac;">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <h1 style="color:#fff !important; font-weight: 900 !important">Pitali smo ih kako se informiraju</h1>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <p style="color:#fff; font-weight:300 !important" class="sticky-top"><span class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Neovisno o godinama, sve se generacije ujutro o novostima u svijetu najčešće informiraju putem - društvenih mreža. Čini to 53% Generacije X, 59% Generacije Y te 65% Generacije Z. Otprilike ⅓ svake generacije za informiranje čita medijske portale & newslettere.<br/><br/>
                <font style="font-weight: 900 !important;">Društvene mreže najčešći su izvor informacija sve tri generacije.</font></span>
              </p>

          </div>
        </div>
        <br/><br/>
        <div class="row"  style="padding-top:50px !important">
          <div class="container">
              <div class="col-lg-12">
                <h2 style="color: #fff !important">Jutro je i zgrabili ste šalicu svoje najdraže kave ili čaja. Kako ćete se informirati o novostima u svijetu?</h2>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top:50px !important">
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf01.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf02.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf03.jpg"/>
            </div>
        </div>
      </div>
</div>

<div class="blog" style="background: #7d69ac; padding-top:0px">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <h1 style="color:#fff !important; font-weight: 900 !important">Pitali smo ih kako spavaju</h1>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <p style="color:#fff; font-weight:300 !important" class="sticky-top"><span class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Kako starimo, tako i manje spavamo. Primjerice, svaki drugi pripadnik Gen Z spava između 7 i 8 sati, a iako njih tek 17% spava više od 8 sati, značajno je to više je od ostale dvije generacije. Gotovo 60% i Generacije X i Generacije Y spava između 6 i 7 sati. <br/><br/>
                <font style="font-weight: 900 !important;">Najviše spava - Generacija Z.</font></span>
              </p>

          </div>
        </div>
        <br/><br/>
        <div class="row"  style="padding-top:50px !important">
          <div class="container">
              <div class="col-lg-12">
                <h2 style="color: #fff !important">Koliko ste tu noć spavali?</h2>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top:50px !important">
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf04.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf05.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf06.jpg"/>
            </div>
        </div>
      </div>
</div>


<div class="blog" style="padding: 0px;">
  <div class="container-fluid">
      <div class="row">

          <div class="col-lg-12 p-0">
            <img src="<?php echo $native_path ?>/assets/images/cokolada.jpg"/>
          </div>
        </div>
      </div>
</div>




<div class="blog" style="background: #7d69ac;">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <h1 style="color:#fff !important; font-weight: 900 !important">Pitali smo ih što doručkuju</h1>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <p style="color:#fff; font-weight:300 !important" class="sticky-top"><span class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Generacija Z također odvaja najviše vremena za doručak, ali pohvalno je kako baš sve generacije paze da ne preskoče možda najvažniji obrok u danu. Za to-go opcijom posegnut će svaki drugi pripadnik Generacije X. <br/><br/>
                <font style="font-weight: 900 !important;">Generacija Z skinula je s trona milenijalce po pitanju avokado tosta. </font></span>
              </p>

          </div>
        </div>
        <br/><br/>
        <div class="row"  style="padding-top:50px !important">
          <div class="container">
              <div class="col-lg-12">
                <h2 style="color: #fff !important">Na redu je doručak. Što doručkujete?</h2>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top:50px !important">
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf07.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf08.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf09.jpg"/>
            </div>
        </div>
      </div>
</div>

<div class="blog" style="background: #7d69ac; padding-top:0px">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <h1 style="color:#fff !important; font-weight: 900 !important">Pitali smo ih kako se kreću po gradu</h1>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <p style="color:#fff; font-weight:300 !important" class="sticky-top"><span class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Gotovo polovica Generacije X i Generacije Y koristi - vlastiti automobil. Mlađe će se generacije, pak, češće odlučiti za javni prijevoz ili bicikl. Ipak, ne smijemo zanemariti činjenicu da dio Generacije Z još uvijek nije punoljetno pa time i ne posjeduje vozačku dozvolu. <br/><br/>
                <font style="font-weight: 900 !important;">Najmanje se taksijem ili javnim prijevozom voze pripadnici Generacije X. </font></span>
              </p>

          </div>
        </div>
        <br/><br/>
        <div class="row"  style="padding-top:50px !important">
          <div class="container">
              <div class="col-lg-12">
                <h2 style="color: #fff !important">Izlazite iz vašeg doma. Kako preferirate doći do željene destinacije?</h2>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top:50px !important">
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf10.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf11.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf12.jpg"/>
            </div>
        </div>
      </div>
</div>


<div class="blog" style="padding: 0px;">
  <div class="container-fluid">
      <div class="row">

          <div class="col-lg-12 p-0">
            <img src="<?php echo $native_path ?>/assets/images/cokse.jpg"/>
          </div>
        </div>
      </div>
</div>




<div class="blog" style="background: #7d69ac;">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <h1 style="color:#fff !important; font-weight: 900 !important">Pitali smo ih kako komuniciraju sa svojim najbližima</h1>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <p style="color:#fff; font-weight:300 !important" class="sticky-top"><span class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Sa svojom obitelji i prijateljima svaka će generacija komunicirati na svoj način: tako će vas pripadnik Generacije X nazvati ili dogovoriti sastanak uživo, od milenijalca očekujte FaceTime video-poziv, a od Gen Z - poruku u DM.<br/><br/>
                <font style="font-weight: 900 !important;">Svaka od tri generacije preferira različit način komunikacije s najbližima.</font></span>
              </p>

          </div>
        </div>
        <br/><br/>
        <div class="row"  style="padding-top:50px !important">
          <div class="container">
              <div class="col-lg-12">
                <h2 style="color: #fff !important">Na koji način najčešće komunicirate tijekom dana sa svojom obitelji i/ili prijateljima?</h2>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top:50px !important">
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf13.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf14.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf15.jpg"/>
            </div>
        </div>
      </div>
</div>

<div class="blog" style="background: #7d69ac; padding-top:0px">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <h1 style="color:#fff !important; font-weight: 900 !important">Pitali smo ih koliko komuniciraju sa svojim najbližima</h1>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <p style="color:#fff; font-weight:300 !important" class="sticky-top"><span class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Jedna trećina i Generacije Y i Generacije X odgovorila je kako se trudi da im se većina dana sastoji od razgovora s najmilijima. Naglasak na odmoru od društvenih interakcija najviše stavlja Generacija Z. <br/><br/>
                <font style="font-weight: 900 !important;">Što smo stariji, to više vremena provedemo komunicirajući s najbližima. </font></span>
              </p>

          </div>
        </div>
        <br/><br/>
        <div class="row"  style="padding-top:50px !important">
          <div class="container">
              <div class="col-lg-12">
                <h2 style="color: #fff !important">Koliko sati dnevno izdvojite razgovarajući sa svojim najbližima?</h2>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top:50px !important">
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf16.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf17.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf18.jpg"/>
            </div>
        </div>
      </div>
</div>


<div class="blog" style="padding: 0px;">
  <div class="container-fluid">
      <div class="row">

          <div class="col-lg-12 p-0">
            <img src="<?php echo $native_path ?>/assets/images/alpe.jpg"/>
          </div>
        </div>
      </div>
</div>




<div class="blog" style="background: #7d69ac;">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <h1 style="color:#fff !important; font-weight: 900 !important">Pitali smo ih kako obnavljaju svoju garderobu</h1>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <p style="color:#fff; font-weight:300 !important" class="sticky-top"><span class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Ukratko - u fizičkim trgovinama. Takvo shopping iskustvo i dalje preferiraju sve tri generacije. Od ostalih načina kupovine, aplikacije i web shopovi najpopularniji su među Generacijom Y. <br/><br/>
                <font style="font-weight: 900 !important;">Odlazak u fizičku trgovinu i dalje je preferabilan način kupovine nove garderobe za sve tri generacije. </font></span>
              </p>

          </div>
        </div>
        <br/><br/>
        <div class="row"  style="padding-top:50px !important">
          <div class="container">
              <div class="col-lg-12">
                <h2 style="color: #fff !important">Razmišljate o tome kako trebate obnoviti svoju garderobu. Kako planirate kupiti novu odjeću?</h2>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top:50px !important">
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf19.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf20.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf21.jpg"/>
            </div>
        </div>
      </div>
</div>

<div class="blog" style="background: #7d69ac; padding-top:0px">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <h1 style="color:#fff !important; font-weight: 900 !important">Pitali smo ih i kako stječu nove vještine</h1>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <p style="color:#fff; font-weight:300 !important" class="sticky-top"><span class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Generacija X i Generacija Y preferiraju učenje od nekoga s iskustvom ili seminare. Generacija Z podjednako se opredijelila između učenja uživo i učenja online kroz video tutoriale ili aplikacije. <br/><br/>
                <font style="font-weight: 900 !important;">Svaki peti milenijalac opredijelit će se za učenje kroz online tečajeve ili webinare. </font></span>
              </p>

          </div>
        </div>
        <br/><br/>
        <div class="row"  style="padding-top:50px !important">
          <div class="container">
              <div class="col-lg-12">
                <h2 style="color: #fff !important">Kako pristupate stjecanju novih vještina?</h2>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top:50px !important">
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf22.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf23.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf24.jpg"/>
            </div>
        </div>
      </div>
</div>


<div class="blog" style="padding: 0px;">
  <div class="container-fluid">
      <div class="row">

          <div class="col-lg-12 p-0">
            <img src="<?php echo $native_path ?>/assets/images/milkapolje.jpg"/>
          </div>
        </div>
      </div>
</div>


<div class="blog" style="background: #7d69ac;">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <h1 style="color:#fff !important; font-weight: 900 !important">Pitali smo ih kako se opuštaju nakon radnog dana</h1>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <p style="color:#fff; font-weight:300 !important" class="sticky-top"><span class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Sve tri će generacije najprije posegnuti za listanjem knjige ili TV kanala. Generaciji Z draga su i druženja te sportske aktivnosti. Također, od svih generacija, oni najviše igraju igrice i/ili scrollaju po društvenim mrežama.  <br/><br/>
                <font style="font-weight: 900 !important;">Listanje knjiga ili TV kanala drago je baš svima. </font></span>
              </p>

          </div>
        </div>
        <br/><br/>
        <div class="row"  style="padding-top:50px !important">
          <div class="container">
              <div class="col-lg-12">
                <h2 style="color: #fff !important">Završio je vaš radni dan. Kako se planirate opustiti?</h2>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top:50px !important">
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf25.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf26.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf27.jpg"/>
            </div>
        </div>
      </div>
</div>

<div class="blog" style="background: #7d69ac; padding-top:0px">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <h1 style="color:#fff !important; font-weight: 900 !important">Pitali samo ih javljaju li se na telefon nakon 17h</h1>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <p style="color:#fff; font-weight:300 !important" class="sticky-top"><span class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Gotovo 70% pripadnika Generacije Y odmah se javlja na pozive kolega poslije 17h i provjerava o čemu je riječ. Najmanje se na telefon javlja najmlađa generacija. Njih više od 60% se ili rijetko javlja na pozive ili shvaća kako neke stvari mogu pričekati i idući radni dan. <br/><br/>
                <font style="font-weight: 900 !important;">Ukoliko poslije 17h zovete svog kolegu, najbrže će vam se javiti onaj koji je pripadnik - Generacije Y. </font></span>
              </p>

          </div>
        </div>
        <br/><br/>
        <div class="row"  style="padding-top:50px !important">
          <div class="container">
              <div class="col-lg-12">
                <h2 style="color: #fff !important">Zove vas kolega s posla iako je vaš radni dan završio. Što ćete učiniti?</h2>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top:50px !important">
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf28.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf29.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf30.jpg"/>
            </div>
        </div>
      </div>
</div>


<div class="blog" style="padding: 0px;">
  <div class="container-fluid">
      <div class="row">

          <div class="col-lg-12 p-0">
            <img src="<?php echo $native_path ?>/assets/images/cok.jpg"/>
          </div>
        </div>
      </div>
</div>



<div class="blog" style="background: #7d69ac;">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <h1 style="color:#fff !important; font-weight: 900 !important">Pitali smo ih koliko će vremena potrošiti na večeru</h1>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <p style="color:#fff; font-weight:300 !important" class="sticky-top"><span class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Tradicionalni i već isprobani recepti koji ne zahtijevaju dugotrajnu pripremu najdraži su Generaciji X, s čime se slaže 70% pripadnika te generacije. Svaki treći milenijalac će posegnuti za dostavom, dok Generacija Z uživa u isprobavanju novih recepata.  <br/><br/>
                <font style="font-weight: 900 !important;">Najviše vremena u kuhinji provodi - Generacija Z.</font></span>
              </p>

          </div>
        </div>
        <br/><br/>
        <div class="row"  style="padding-top:50px !important">
          <div class="container">
              <div class="col-lg-12">
                <h2 style="color: #fff !important">Koliko ćete vremena ‘potrošiti’ na večeru?</h2>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top:50px !important">
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf31.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf32.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf33.jpg"/>
            </div>
        </div>
      </div>
</div>

<div class="blog" style="background: #7d69ac; padding-top:0px">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <h1 style="color:#fff !important; font-weight: 900 !important">Pitali smo ih kako organiziraju unutar doma</h1>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <p style="color:#fff; font-weight:300 !important" class="sticky-top"><span class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Sve se tri generacije slažu u jednom: dobra rješenja za pohranu stvari genijalan su izum. Uz funkcionalnost, Generacija X naginje i na organizaciji doma gdje je sve lako dostupno (37%), a dio milenijalca nije ljubitelj prenatrpanih prostorija već preferiraju minimalizam (28,5%) <br/><br/>
                <font style="font-weight: 900 !important;">Svima je najbitnija funkcionalnost, a potom dostupnost i minimalizam. </font></span>
              </p>

          </div>
        </div>
        <br/><br/>
        <div class="row"  style="padding-top:50px !important">
          <div class="container">
              <div class="col-lg-12">
                <h2 style="color: #fff !important">Kako pristupate organizaciji unutar vašeg doma?</h2>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top:50px !important">
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf34.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf35.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf36.jpg"/>
            </div>
        </div>
      </div>
</div>


<div class="blog" style="background: #7d69ac; padding-top:0px">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
              <h1 style="color:#fff !important; font-weight: 900 !important">Pitali smo ih koliko sati provedu između zadnje obaveze i odlaska na spavanje</h1>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <p style="color:#fff; font-weight:300 !important" class="sticky-top"><span class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">Najviše slobodnog vremena prije spavanja ostavit će si pripadnici Generacije X (34%), dok će svaki drugi pripadnik Generacije Z provesti oko 2 sata. Svaki 2 od 5 pripadnika Generacije Y imat će tek sat vremena slobodnog vremena prije odlaska u krevet. <br/><br/>
                <font style="font-weight: 900 !important;">Milenijalci se čine kao najzaposlenija generacija. </font></span>
              </p>

          </div>
        </div>
        <br/><br/>
        <div class="row"  style="padding-top:50px !important">
          <div class="container">
              <div class="col-lg-12">
                <h2 style="color: #fff !important">Koliko ćete sati taj dan provesti između zadnje obaveze i odlaska na spavanje?</h2>
              </div>
          </div>
        </div>
        <div class="row" style="padding-top:50px !important">
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf37.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf38.jpg"/>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="<?php echo $native_path ?>/assets/images/graf39.jpg"/>
            </div>
        </div>
      </div>
</div>


<div class="blog" style="padding: 0px;">
  <div class="container-fluid">
      <div class="row">

          <div class="col-lg-12 p-0">
            <img src="<?php echo $native_path ?>/assets/images/packshoti.jpg"/>
          </div>
        </div>
      </div>
</div>



  <div id="clanci" class="blog" style="z-index: 100; position: relative; padding-top: 120px; padding-bottom: 120px; overflow: hidden; background: #7d69ac; font-weight: 500 !important;">


    <div class="container-fluid wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
              <p style="color:#fff; font-weight: 300 !important">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/telegram.png" style="max-width: 186px;"  />
          </div>
        </div>
      </div>
  </div>
  <script type="text/javascript">
      const images = ["<?php echo $native_path ?>/assets/images/osamdesete-01.jpg", "<?php echo $native_path ?>/assets/images/osamdesete-02.jpg"];
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
      setInterval(showNextImage, 5000);

      // Inicijalno postavljanje slike
      updateImage();
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
