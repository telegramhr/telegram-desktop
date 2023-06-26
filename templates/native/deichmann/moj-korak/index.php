<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/deichmann/moj-korak';
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
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo $native_path ?>/assets/images/favicon.png">
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
                    <h2>MOJ KORAK. MOJ STIL.<br/>Umjetnost slaganja savršene ljetne kombinacije</h2>
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
            <img src="<?php echo $native_path ?>/assets/images/deichmann-01.jpg"/>
        </div>
        <div class="col-lg-6">
          <div class="sticky-top">
            <p class="tekst-gornji">Ljeto je godišnje doba u kojem najviše pažnje pridajemo odijevanju. Da, nosimo najmanje odjeće, ali dok zimi možemo na sebe nabaciti više slojeva u različitim teksturama i bojama, prava je umjetnost složiti jednoslojnu ljetnu kombinaciju u kojoj nam neće biti prevruće, a koja će zadovoljiti sve kućice koje stoje ispred destinacije na koju idemo. Neovisno o tome provodimo li ga na užarenom gradskom asfaltu, na kakvoj egzotičnoj plaži ili u obiteljskoj kući na otoku, dobar par sandala ili natikača nešto je bez čega ne možemo. Zato smo u suradnji s <a  href="https://www.deichmann.com/HR/hr/shop/welcome.html" target="_blank" >Deichmannom</a> pripremili inspirativan modni editorijal u kojem smo tri različite odjevne kombinacije za ljetne dane spojili s devet pari natikača i sandala koje ćete obožavati.</p>
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
            <p class="tekst-gornji" style="padding-bottom:20px;">Izbor obuće nikada nije bio raskošniji pa smo iz Deichmannove ponude izabrali tri različita modela cipela s kojima ćete biti pokriveni za cijelo ljeto. To su sandale s tankim remenčićima koje variraju od robusnih modela do elegantnih japanki, natikače s dva remena koje će biti sjajne u svim ležernim kombinacijama i profinjene sandale na petu u kojima ćete bez problema provesti čitavu noć na vjenčanju ili proslavi rođendana prijateljice.</p>
          </div>
        </div>
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/deichmann-02.jpg"/>
        </div>
      </div>
    </div>
  </div>


  <div id="sponsors" class="sponsors">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 text-center">
              <div class="blackoverflow">
                <h4 class="animated-headline">Ljetna&nbsp;romansa</h4>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto" src="<?php echo $native_path ?>/assets/images/deichmann-03.jpg" />
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 offset-lg-3 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
              <p style="padding-top:100px; padding-bottom: 100px;">Ljeta su u pravilu rezervirana za posebne prigode. Bilo da se radi o vjenčanju ili proslavi rođendana ili godišnjice, sandale na visoku petu su jedini komad koji vam treba. Mi smo ih ovaj put u prvi plan stavili uz elegantnu bijelu haljinu koju možda ne možete nositi na nečije vjenčanje, ali definitivno ćete privući pažnju na svakoj proslavi na kojoj se pojavite. Naš prvi izbor uz ovu haljinu su bijele sandale i torbica sa srebrnim metalnim detaljima.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5 text-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/deichmann-04.jpg" />
          </div>
          <div class="col-lg-2 text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style=" height: 100%; width: auto; position: absolute; bottom:0; left:20%;" src="<?php echo $native_path ?>/assets/images/elegancija.gif" />
          </div>
          <div class="col-lg-5 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="1s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/deichmann-05.jpg" />
          </div>
        </div>
    </div>
  </div>


  <div id="sponsors" class="sponsors">
    <div class="container-fluid">
        <div class="row" style="margin-top: 20px;">
          <div class="col-lg-12 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto" src="<?php echo $native_path ?>/assets/images/deichmann-06.jpg" />
              <p class="sticky-top" style="position: absolute; top: 0; right:0; width:35%; margin-right: 40px; margin-top:40px; text-align: center; color: #fff !important; font-size: 14px; line-height: 20px;">Srebrne sandale <a href="https://www.deichmann.com/HR/hr/shop/zene/cipele/sandale-visoka-peta/00012102030157/Sandale*s*petom.prod?positionInList=29&amp;fromCategoryDetail=true" target="_blank">Graceland 29,99€</a>, Bijele sandale 29,99€, Sandale sa zlatnim detaljima <a href="https://www.deichmann.com/HR/hr/shop/zene/cipele/sandale-visoka-peta/00012102181399/Sandale*s*petom.prod?s=3&amp;_=1687360184142&amp;positionInList=97&amp;fromCategoryDetail=true" target="_blank">Laura Biagiotti 59,99€</a>, Torbica <a href="https://www.deichmann.com/HR/hr/shop/0001210213617700000004/41007119.prod?isSearch=true&amp;q=41007119&amp;positionInList=1" target="_blank">Catwalk 19,99</a>€ (sve Deichmann) Haljina Twinset 261€, Naušnice H&amp;M 7,99€</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 offset-lg-3 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
              <p style="padding-top:100px; padding-bottom: 100px;">No, možete se poigrati i sa zlatnim ili srebrnim tonovima ili pak odabrati sandale s debljom petom u kojima će vam biti lakše provesti čitavu noć na tulumu, a koje ćete kasnije moći nositi i u drugim odjevnim kombinacijama. Opcija je bezbroj.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto" src="<?php echo $native_path ?>/assets/images/deichmann-07.jpg" />
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
             <div class="blackoverflow">
                <h4  class="animated-headline">Od jutra do mraka</h4>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto" src="<?php echo $native_path ?>/assets/images/deichmann-08.jpg" />
          </div>
        </div>
    </div>
  </div>


<div id="clanci" class="blog">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="sticky-top">
            <p class="tekst-gornji" style="padding-bottom: 40px !important">Sandale s tankim remenčićima najraznolikija su kategorija ljetne obuće. Mogu varirati od laganih japanki preko sandala koje izgledaju kao da su izrađene od špage pa sve do udobnih sandala s ravnom platformom. Kao baznu obuću prve odjevne kombinacije koja se sastojala od kombinezona i pletene torbice, odabrali smo upravo japanke. Sugeriramo vam da ih uz ovu kombinaciju zamijenite za sandale od konopa ili pak one s nešto debljim remenom i udobnom ravnom platformom.</p>
          </div>
        </div>
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/deichmann-09.jpg"/>
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/deichmann-10.jpg"/>
        </div>
        <div class="col-lg-6">
          <div class="sticky-top">
            <p class="tekst-gornji">Japanke 7,99€, Sandale od konopa 22,99€, Sandale s ravnom platformom <a href="https://www.deichmann.com/HR/hr/shop/zene/cipele/sandale/00012102169494/Sandale.prod?s=3&amp;_=1687507268460&amp;positionInList=143&amp;fromCategoryDetail=true" target="_blank">Catwalk 34,99€</a>, Okrugla torbica <a href="https://www.deichmann.com/HR/hr/shop/0001210171075600000001/4100196.prod?isSearch=true&amp;q=4100196&amp;positionInList=1" target="_blank">Graceland 19,99€</a>, Torbica s pomponima <a href="https://www.deichmann.com/HR/hr/shop/0001210206342500000001/41006590.prod?isSearch=true&amp;q=41006590&amp;positionInList=1" target="_blank">Graceland 14,99€</a> (sve Deichmann), Kombinezon Twinset 345€ </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="sponsors" class="sponsors">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 text-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/deichmann-11.jpg" />
          </div>
          <div class="col-lg-6 text-center">
              <div class="row">
                            <div class="col-lg-12 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0s">
                              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/deichmann-12.jpg" />
                          </div>
              </div>
              <div class="row">
                            <div class="col-lg-12 text-center">
                              <h4 class="animated-headline">Bezbrižnost</h4>
                          </div>
              </div>
               <div class="row">
                            <div class="col-lg-12 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
                              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/deichmann-13.jpg" />
                          </div>
              </div>

              </div>

          </div>
        </div>
    </div>
  </div>


  <div id="sponsors" class="sponsors"style="padding-top:0px;">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="blackoverflow">
                <h4  class="animated-headline">Udobnost kao imperativ</h4>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <img style="width:100%; height: auto" src="<?php echo $native_path ?>/assets/images/deichmann-14.jpg" />
              <p style="position: absolute; bottom: 0; right:0; width:35%; margin-right: 40px; margin-bottom:40px; text-align: center; color: #fff !important; font-size: 14px; line-height: 20px;">Crno-bijele sandale <a href="https://www.deichmann.com/HR/hr/shop/00012102169505/Sandale.prod?isSearch=true&amp;q=12208480&amp;positionInList=1" target="_blank">Catwalk 39,99€</a>, Bijele natikače <a href="https://www.deichmann.com/HR/hr/shop/00012102178684/Natika%C4%8De.prod?isSearch=true&amp;q=12608520&amp;positionInList=1" target="_blank">Catwalk 24,99€</a>, Crne natikače <a href="https://www.deichmann.com/HR/hr/shop/00012102169589/Natika%C4%8De.prod?isSearch=true&amp;q=12608536&amp;positionInList=1" target="_blank">Catwalk 19,99€</a>, Torbica <a href="https://www.deichmann.com/HR/hr/shop/0001210218485200000004/41008049.prod?isSearch=true&amp;q=41008049&amp;positionInList=1" target="_blank">Graceland 19,99€</a> (sve Deichmann), Komplet Twinset, gornji dio 272€, donji dio 182€</p>
          </div>
        </div>
    </div>
  </div>

  <div id="clanci" class="blog">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="sticky-top">
            <p class="tekst-gornji">Ultimativni komad koji nam garantira udobnost tijekom ljetnih dana su sandale i natikače s debljim remenom i kopčama. Naš prvi izbor su robusne bijele sandale s kontrastnim đonom u crnoj. Odlično smiruju romantičnu odjevnu kombinaciju poput ovog pastelnog kompleta, a savršeno su udobne da u njima možete provesti cijeli dan istražujući egzotičan otok ili zabavljajući se na kakvom festivalu.</p>
              <p class="tekst-donji">Alternativa iz iste kategorije koju bi svatko trebao imati u svom ormaru su natikače s dvije kopče. I one se sjajno uklapaju u ovakav look, a opet su beskrajno udobne i mogu se nositi gotovo uz bilo koju ležernu kombinaciju koju ste pripremili za ljetovanje.</p>
          </div>
        </div>
        <div class="col-lg-6">
            <img src="<?php echo $native_path ?>/assets/images/deichmann-02.jpg"/>
        </div>
      </div>
    </div>
  </div>

  <div id="sponsors" class="sponsors">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 text-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0s">
              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/deichmann-15.jpg" />
          </div>
           <div class="col-lg-6 text-center">
              <div class="row">
                            <div class="col-lg-12 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0s">
                              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/deichmann-16.jpg" />
                          </div>
              </div>
              <div class="row">
                            <div class="col-lg-12 text-center">
                              <h4 class="animated-headline">Udobnost</h4>
                          </div>
              </div>
               <div class="row">
                            <div class="col-lg-12 text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
                              <img style="width:100%; height: auto; padding-bottom:20px;" src="<?php echo $native_path ?>/assets/images/deichmann-17.jpg" />
                          </div>
              </div>

            </div>

          </div>
        </div>
    </div>
  </div>

   <div class="container-fluid" style="padding-left:0 !important; padding-right:0 !important; position: relative;">
      <div class="row">
        <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
          <img class="footer-picture" src="<?php echo $native_path ?>/assets/images/footer.jpg" />
           <div style="position: absolute; top: 0; width: 100%; padding-top:100px; color: #fff;">
              <p style="text-align: center; color: #fff !important">Fotografija: Aleksandar Selak<br/>
                  Model: Ana Vuglač<br/>
                  Styling: Studio Onne<br/>
                  Makeup: Josipa Drpić<br/>
                  Kosa: Davor Hair&Soul<br/>
                  Grafičko oblikovanje:<br/>TMG Studio x Reset<br/><br/>
                  Zahvaljujemo klubu Saloon<br/>na ustupljenom prostoru.<br/><br/>
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
