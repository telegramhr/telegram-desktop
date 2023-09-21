<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/hm/pet-kombinacija';
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
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap" rel="stylesheet">

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



  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 align-self-center">
              <div class="left-content show-up header-text wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-10 offset-lg-1 text-center">
                    <h6><img src="<?php echo $native_path ?>/assets/images/logos.png" style="max-width: 300px;" /></h6>
                    <h2>KAKO SE OVE JESENI ODIJEVATI POPUT IT DJEVOJAKA S VELIKIH I MALIH EKRANA? DONOSIMO PET KOMBINACIJA</h2>
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




  <div id="clanci" class="blog" style="padding-top:20px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/hm-01.jpg"/>
        </div>
        <div class="col-lg-6">
          <div class="sticky-top">
            <p class="tekst-gornji">Kad se prije nekoliko dana pojavila na velikom Vogue World eventu u Londonu i premijerno pokazala svoj trudnički trbuščić, Sienna Miller u mnogima od nas izazvala je salve nostalgije. Daleko je iza nas ono vrijeme kad smo s nestrpljenjem čekali u kakvoj će se indie kombinaciji ona ili pak Alexa Chung pojaviti na Glastonburyju ili čije će komade na street style fotografijama s tjedna mode nositi Olivia Palermo. </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:20px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="sticky-top">
            <p class="tekst-gornji" style="padding-bottom:20px;">Onu tajanstvenost i iskonsku magičnu privlačnost koju su it djevojke nekoć nosile, danas pronalazimo tek u nostalgičnim slikama i TV junakinjama poput Regine George iz Opasnih djevojaka ili Carrie Bradshaw iz Seksa i grada. No, zahvaljujući Instagramu danas svatko može biti it djevojka. Sve što nam treba je dobar outfit, a upravo takve s dozom samopouzdanog stava i zdrave drskosti pronašli smo u novoj <a href="https://www2.hm.com/en_eur/free-form-campaigns/autumn-winter-2023.studio.html?utm_source=Native&utm_medium=Super1&utm_campaign=2018_HR_Ladies_Studio_2023#/studio/default" target="_blank" style="text-decoration: underline; color:#fff">H&M Studio kolekciji</a>.</p>
          </div>
        </div>
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/hm-02.jpg"/>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:20px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <p class="maloveci">Nadahnuti it djevojkama s prijelaza tisućljeća, izdvojili smo pet kombinacija za jesen 2023.</p>
        </div>
      </div>
    </div>
  </div>



  <div id="sponsors" class="sponsors">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 text-center">
              <div class="blackoverflow">
                <h1 class="animated-headline">Moćna&nbsp;ramena</h1>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding-top:20px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/hm-03.jpg"/>
        </div>
        <div class="col-lg-6">
          <div class="sticky-top">
            <p class="tekst-gornji">Ono što na prvi pogled privlači svakako su kvalitetno krojeni komadi s naglašenim ramenima. Ovako moćnih silueta ne bi se posramila ni Marlene Dietrich kao ni druge heroine filma noir. </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="sponsors" class="sponsors">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 text-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/hm-04.jpg" />
          </div>
          <div class="col-lg-6 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/hm-05.jpg" />
          </div>
        </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:20px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="sticky-top">
            <p class="tekst-gornji" style="padding-bottom:20px;">Za kompletno moćan look nadahnut tim filmskim it djevojkama spajamo dobro krojena odijela iz nove <a href="https://www2.hm.com/en_eur/free-form-campaigns/autumn-winter-2023.studio.html?utm_source=Native&utm_medium=Super1&utm_campaign=2018_HR_Ladies_Studio_2023#/studio/default" target="_blank" style="text-decoration: underline; color:#fff">H&M Studio kolekcije</a> s još moćnijim kaputima i dječačkim detaljima za zaigranu notu.</p>
            <p class="tekst-donji" style="padding-bottom:20px; display: none;">LINK01</p>
          </div>
        </div>
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/hm-06.jpg"/>
        </div>
      </div>
    </div>
  </div>


  <div id="sponsors" class="sponsors">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 text-center">
              <div class="blackoverflow">
                <h1 class="animated-headline">BOHO&nbsp;DRSKOST</h1>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div id="sponsors" class="sponsors">
    <div class="container-fluid">
        <div class="row" style="margin-top: 20px;">
          <div class="col-lg-12 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto" src="<?php echo $native_path ?>/assets/images/hm-01.jpg" />
          </div>
        </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding-top:20px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/hm-07.jpg"/>
        </div>
        <div class="col-lg-6">
          <div class="sticky-top">
            <p class="tekst-gornji">Ima li vječnije it djevojke od Kate Moss? Njezina moć transformacije i reinvencije nadilazi sve granice, a jednoj konstantni uvijek je vjerna - svom boho stilu. Njegove glavne odrednice su raskošne kratke bunde i lepršave haljine od laganih materijala koje vas mogu povesti od svečane večere do koncerta Florence + The Machine.</p>
            <p class="tekst-donji" style="padding-bottom:20px; display: none;">LINK02</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="sponsors" class="sponsors">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 text-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/hm-08.jpg" />
          </div>
          <div class="col-lg-6 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/hm-09.jpg" />
          </div>
        </div>
    </div>
  </div>

  <div id="sponsors" class="sponsors">
    <div class="container-fluid">
        <div class="row" style="margin-top: 20px;">
          <div class="col-lg-12 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto" src="<?php echo $native_path ?>/assets/images/hm-10.jpg" />
          </div>
        </div>
    </div>
  </div>

  <div id="sponsors" class="sponsors">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 text-center">
              <div class="blackoverflow">
                <h1 class="animated-headline">Mračni&nbsp;glamur</h1>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding-top:20px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/hm-11.jpg"/>
        </div>
        <div class="col-lg-6">
          <div class="sticky-top">
            <p class="tekst-gornji">Charlotte Gainsbourg i Lou Doillon suđeno je da postanu it djevojke po rođenju jer kako ne bi kad im je majka bila Jane Birkin. Polusestre obožavaju mračni glamur i redovito se odjevene u upravo takve kombinacije pojavljuju na prestižnijim revijama na tjednima mode kao i na vlastitim umjetničkim nastupima i izvedbama. </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding-top:20px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="sticky-top">
            <p class="tekst-gornji" style="padding-bottom:20px;">U novoj <a href="https://www2.hm.com/en_eur/free-form-campaigns/autumn-winter-2023.studio.html?utm_source=Native&utm_medium=Super1&utm_campaign=2018_HR_Ladies_Studio_2023#/studio/default" target="_blank" style="text-decoration: underline; color:#fff">H&M Studio kolekciji</a> pronašli smo savršen komplet koji bi obje obožavale.</p>
            <p class="tekst-donji" style="padding-bottom:20px; display: none;">LINK03</p>
          </div>
        </div>
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/hm-12.jpg"/>
        </div>
      </div>
    </div>
  </div>

  <div id="sponsors" class="sponsors">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 text-center">
              <div class="blackoverflow">
                <h1 class="animated-headline">Maksi&nbsp;Maksi&nbsp;Maksi</h1>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div id="sponsors" class="sponsors">
    <div class="container-fluid">
        <div class="row" style="margin-top: 20px;">
          <div class="col-lg-12 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto" src="<?php echo $native_path ?>/assets/images/hm-13.jpg" />
          </div>
        </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding-top:20px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/hm-14.jpg"/>
        </div>
        <div class="col-lg-6">
          <div class="sticky-top">
            <p class="tekst-gornji">Sudeći prema tome kolika je količina ljudi pratila ovogodišnje suđenje o njezinom sudaru na skijanju, Gwyneth Paltrow i danas je it djevojka. A definitivno je to bila i krajem devedesetih kad se u ekranizaciji Dickensovih Velikih očekivanja pojavila u zelenoj maksi suknji s potpisom Donne Karan. Maksi suknje i ove su sezone veliki hit, a posebno su moćne u kožnatim varijantama.</p>
            <p class="tekst-donji" style="padding-bottom:20px; display: none;">LINK04</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="sponsors" class="sponsors">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 text-center">
              <div class="blackoverflow">
                <h1 class="animated-headline">Mini&nbsp;Mini&nbsp;Mini</h1>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div id="sponsors" class="sponsors">
    <div class="container-fluid">
        <div class="row" style="margin-top: 20px;">
          <div class="col-lg-12 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto" src="<?php echo $native_path ?>/assets/images/hm-15.jpg" />
          </div>
        </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding-top:20px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <p style="color: #fff; text-align: center; padding-bottom:20px;">Najveća it djevojka u povijesti mode vjerojatno je Coco Chanel. Izumiteljica male crne haljine nikad nije izvan trenda, a ove sezone njezina crna haljina nije jedino što nosimo u mini dužini. Nose se i mini suknje i mini topovi, a sve smo ih pronašli u novoj <a href="https://www2.hm.com/en_eur/free-form-campaigns/autumn-winter-2023.studio.html?utm_source=Native&utm_medium=Super1&utm_campaign=2018_HR_Ladies_Studio_2023#/studio/default" target="_blank" style="text-decoration: underline; color:#fff">H&M Studio kolekciji</a>.</p>
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding-top:20px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="sticky-top">
            <img src="<?php echo $native_path ?>/assets/images/hm-16.jpg" style="padding-bottom:20px" />
          </div>
        </div>
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/hm-17.jpg"/>
            <p class="tekst-donji" style="padding-bottom:20px;display: none;">LINK05</p>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:20px; padding-bottom: 50px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <p class="maloveci">H&M ove godine slavi 10 godina postojanja svoje Studio linije koja je dvaput godišnje počela izlaziti još 2013. godine, a koju karakteriziraju naprednije dizajnirani komadi i kvalitetnija izrada. Od iduće godine Studio linija izlazit će još češće, u obliku limitiranih kolekcija, a ova nova u odabrane fizičke trgovine i <a href="https://www2.hm.com/en_eur/free-form-campaigns/autumn-winter-2023.studio.html?utm_source=Native&utm_medium=Super1&utm_campaign=2018_HR_Ladies_Studio_2023#/studio/default" target="_blank" style="text-decoration:underline;color: #fff;">online</a> stiže 28. rujna.</p>
        </div>
      </div>
    </div>
  </div>


   <div class="container-fluid" style="padding-left:0 !important; padding-right:0 !important; position: relative;">
      <div class="row">
        <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
          <img class="footer-picture" src="<?php echo $native_path ?>/assets/images/footer.jpg" />
           <div style="position: absolute; top: 0; width: 100%; padding-top:100px; color: #fff;">
              <p style="text-align: center; color: #fff !important">
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
