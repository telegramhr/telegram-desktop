<!DOCTYPE html>
<html lang="hr">
<?php
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/telegram/sesta-zelena-licnost/';
?>
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>assets/css/owl.css">
    <?php wp_head(); ?>
  </head>

<body>

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
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="<?php echo site_url() ?>" class="logo">
              <img src="<?php echo $native_path ?>assets/images/logo-v1.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="https://www.telegram.hr/native/sesta-zelena-licnost/#top">Naslovnica</a></li>
              <li class="scroll-to-section"><a href="https://www.telegram.hr/native/sesta-zelena-licnost/#infografike">Infografike</a></li>
              <li class="scroll-to-section"><a href="https://www.telegram.hr/native/sesta-zelena-licnost/#kviz" class="active">Kviz</a></li>
              <li class="scroll-to-section"><a href="https://www.telegram.hr/native/sesta-zelena-licnost/#clanci">Članci</a></li>
              <li class="scroll-to-section"><a href="https://www.telegram.hr/native/sesta-zelena-licnost/#about"></a></li>
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->


<div id="kviz" class="kviz">
    <div class="container">
        <div class="row">
            <div class="col-lg-8  offset-lg-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">


                <h3>1. Potražnja za solarnom energijom u Hrvatskoj je unatrag godinu dana porasla za 300 posto. Na distribucijsku mrežu su priključene:</h3>
                <form name="pitanje1" action="" method="POST">
                    <input type="radio" name="pitanje1" value="1" id="p1_odgovor1">
                    <label for="p1_odgovor1">9.053 sunčane elektrane</label><br/>
                    <input type="radio" name="pitanje1" value="2" id="p1_odgovor2">
                    <label for="p1_odgovor2">8.632 sunčane elektrane</label><br/>
                    <input type="radio" name="pitanje1" value="3" id="p1_odgovor3">
                    <label for="p1_odgovor3">10.693 sunčane elektrane</label>
                </form>

                <h3>2. Jedna europska država ima plan do 2025. postati ugljično neutralna u pogledu automobila. Lani je imala udio novokupljenih električnih automobila od gotovo 90 posto. Riječ je o:</h3>
                <form name="pitanje2" action="" method="POST">
                    <input type="radio" name="pitanje2" value="1" id="p2_odgovor1">
                    <label for="p2_odgovor1">Španjolskoj</label><br/>
                    <input type="radio" name="pitanje2" value="2" id="p2_odgovor2">
                    <label for="p2_odgovor2">Norveškoj</label><br/>
                    <input type="radio" name="pitanje2" value="3" id="p2_odgovor3">
                    <label for="p2_odgovor3">Švicarskoj</label>
                </form>

                <h3>3. U Europi prosječno se proizvede 486 kilograma komunalnog otpada po glavi stanovnika u godini dana. Najmanje otpada reciklira Srbija – tek jedan posto, a najvišu stopu recikliranja od skoro 70 posto ima:</h3>
                <form name="pitanje3" action="" method="POST">
                    <input type="radio" name="pitanje3" value="1" id="p3_odgovor1">
                    <label for="p3_odgovor1">Slovenija</label><br/>
                    <input type="radio" name="pitanje3" value="2" id="p3_odgovor2">
                    <label for="p3_odgovor2">Estonija</label><br/>
                    <input type="radio" name="pitanje3" value="3" id="p3_odgovor3">
                    <label for="p3_odgovor3">Njemačka</label>
                </form>

                <h3>4. Hrvati čuvaju pet milijuna starih mobitela po ladicama, a mogli bi ih reciklirati jer sadrže vrijedne sirovine. Koliko posto materijala u mobilnim telefonima se može reciklirati?</h3>
                <form name="pitanje4" action="" method="POST">
                    <input type="radio" name="pitanje4" value="1" id="p4_odgovor1">
                    <label for="p4_odgovor1">100 %</label><br/>
                    <input type="radio" name="pitanje4" value="2" id="p4_odgovor2">
                    <label for="p4_odgovor2">90 %</label><br/>
                    <input type="radio" name="pitanje4" value="3" id="p4_odgovor3">
                    <label for="p4_odgovor3">80 %</label>
                </form>

                <h3>5. Ulaganje u održivost u sportskoj industriji jedna je od tema o kojoj se često raspravlja u javnom prostoru. Naime, brojke pokazuju da su Olimpijske igre u Riju 2016. godine proizvele 4,5 milijuna tona CO2, dok je Svjetsko prvenstvo u nogometu u Kataru 2022. godine proizvelo:</h3>
                <form name="pitanje5" action="" method="POST">
                    <input type="radio" name="pitanje5" value="1" id="p5_odgovor1">
                    <label for="p5_odgovor1">3,6 milijuna tona</label><br/>
                    <input type="radio" name="pitanje5" value="2" id="p5_odgovor2">
                    <label for="p5_odgovor2">5,5 milijuna tona</label><br/>
                    <input type="radio" name="pitanje5" value="3" id="p5_odgovor3">
                    <label for="p5_odgovor3">6,2 milijuna tona</label>
                </form>

                <h3>6. Modna industrija je jedan od najvećih zagađivača okoliša. Proizvodnja tekstila odgovorna je za oko 20% globalnog onečišćenja čiste vode i 10% emisija ugljika godišnje. Zato se potražnja za održivim komadima u Hrvatskoj lani u odnosnu na godinu prije povećala za:</h3>
                <form name="pitanje6" action="" method="POST">
                    <input type="radio" name="pitanje6" value="1" id="p6_odgovor1">
                    <label for="p6_odgovor1">37 %</label><br/>
                    <input type="radio" name="pitanje6" value="2" id="p6_odgovor2">
                    <label for="p6_odgovor2">50 %</label><br/>
                    <input type="radio" name="pitanje6" value="3" id="p6_odgovor3">
                    <label for="p6_odgovor3">94 %</label>
                </form>

                <h3>7. Europska unija se Pariškim sporazumom do 2030. godine obvezala smanjiti emisije stakleničkih plinova za najmanje 55 % i da se globalno zagrijavanje ograniči na 1,5 stupnjeva. Među državama koje provode najkorisnije mjere za ostvarivanje ciljeva su:</h3>
                <form name="pitanje7" action="" method="POST">
                    <input type="radio" name="pitanje7" value="1" id="p7_odgovor1">
                    <label for="p7_odgovor1">Hrvatska i Cipar</label><br/>
                    <input type="radio" name="pitanje7" value="2" id="p7_odgovor2">
                    <label for="p7_odgovor2">Estonija i Latvija</label><br/>
                    <input type="radio" name="pitanje7" value="3" id="p7_odgovor3">
                    <label for="p7_odgovor3">Luksemburg i Belgija</label>
                </form>

                <h3>8. Osam zemalja svijeta je dosad postiglo nultu emisiju stakleničkih plinova. To su Butan, Madagaskar, Komori, Gabon, Gvajana, Niue, Surinam i:</h3>
                <form name="pitanje8" action="" method="POST">
                    <input type="radio" name="pitanje8" value="1" id="p8_odgovor1">
                    <label for="p8_odgovor1">Monako</label><br/>
                    <input type="radio" name="pitanje8" value="2" id="p8_odgovor2">
                    <label for="p8_odgovor2">Panama</label><br/>
                    <input type="radio" name="pitanje8" value="3" id="p8_odgovor3">
                    <label for="p8_odgovor3">Tuvalu</label>
                </form>

                <h3>9. Učenje o održivosti se pokušava sve više implementirati u sustav obrazovanja. Prva zemlja u Europi koja je u klimatsku krizu uključila u školski kurikulum 2019. godine bila je:</h3>
                <form name="pitanje9" action="" method="POST">
                    <input type="radio" name="pitanje9" value="1" id="p9_odgovor1">
                    <label for="p9_odgovor1">Njemačka</label><br/>
                    <input type="radio" name="pitanje9" value="2" id="p9_odgovor2">
                    <label for="p9_odgovor2">Francuska</label><br/>
                    <input type="radio" name="pitanje9" value="3" id="p9_odgovor3">
                    <label for="p9_odgovor3">Italija</label>
                </form>

                <h3>10. Dan planeta Zemlje se u svijetu obilježava 22. travnja, službeno od 1992. godine. Mi smo ga počeli organizirano obilježavati:</h3>
                <form name="pitanje10" action="" method="POST">
                    <input type="radio" name="pitanje10" value="1" id="p10_odgovor1">
                    <label for="p10_odgovor1">2000. godine</label><br/>
                    <input type="radio" name="pitanje10" value="2" id="p10_odgovor2">
                    <label for="p10_odgovor2">1995. godine</label><br/>
                    <input type="radio" name="pitanje10" value="3" id="p10_odgovor3">
                    <label for="p10_odgovor3">1990. godine</label>
                </form>

                <button class="submit btn btn-primary border-first-button scroll-to-section">Pošalji</button>

            </div>
        </div>
    </div>
</div>



  <div id="sponsors" class="sponsors">
  <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
            <h4>Ekskluzivni <em>partner</em></h4>
        </div>
        <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.3s">
            <img style="max-width:300px; height: auto;" src="<?php echo $native_path ?>assets/images/energia-naturalis.png"/><br/>
            <br/><br/>
        </div>
        <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
            <h4>Zlatni <em>partner</em></h4>
        </div>
        <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="1.6s" data-wow-delay="1.6s">
            <img style="max-width:200px; height: auto;" src="<?php echo $native_path ?>assets/images/hgk.png"/><br/>
            <img style="max-width:130px; height: auto;" src="<?php echo $native_path ?>assets/images/ht.png"/>
            <br/><br/>
        </div>

        <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="1.8s" data-wow-delay="1.8s">
            <h4>Brončani <em>partner</em></h4>
        </div>
        <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="2s">
            <img style="max-width:220px; height: auto;" src="<?php echo $native_path ?>assets/images/kaufland.png"/><br/>
            <img style="max-width:220px; height: auto;" src="<?php echo $native_path ?>assets/images/posta.png"/><br/>
            <img style="max-width:220px; height: auto;" src="<?php echo $native_path ?>assets/images/answear.png"/>
            <br/><br/>
        </div>
       <div class="col-lg-6 offset-md-3 text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="2s">
            <img style="max-width:300px; height: auto;" src="<?php echo $native_path ?>assets/images/zl.png"/><br/>
            <p>Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing prema uredničkim standardima Telegram Media Grupe.</p><br/><br/>
            <img style="max-width:186px; height: auto;" src="<?php echo $native_path ?>assets/images/telegram.png"/>
            <br/><br/>
        </div>



        </div>
    </div>
</div>


<!-- Scripts -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
  <script src="<?php echo $native_path ?>assets/js/required.js"></script>
  <script src="<?php echo $native_path ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $native_path ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $native_path ?>assets/js/owl-carousel.js"></script>
  <script src="<?php echo $native_path ?>assets/js/animation.js"></script>
  <script src="<?php echo $native_path ?>assets/js/imagesloaded.js"></script>
  <script src="<?php echo $native_path ?>assets/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>
