<!DOCTYPE html>
<html lang="hr">
<?php
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/telegram/sesta-zelena-licnost/';
?>

<head>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css">
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
              <li class="scroll-to-section"><a href="https://www.telegram.hr/native/sesta-zelena-licnost#top">Naslovnica</a></li>
              <li class="scroll-to-section"><a href="https://www.telegram.hr/native/sesta-zelena-licnost#infografike">Infografike</a></li>
              <li class="scroll-to-section"><a href="https://www.telegram.hr/native/sesta-zelena-licnost/test-licnosti"  class="active">Kviz</a></li>
              <li class="scroll-to-section"><a href="https://www.telegram.hr/native/sesta-zelena-licnost#clanci">Članci</a></li>
              <li class="scroll-to-section"><a href="https://www.telegram.hr/native/sesta-zelena-licnost#about"></a></li>
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



  <div id="kviz" class="test-osobnosti">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">


                <h2>Ja sam osoba koja...</h2>

                <div class="pitanje">
                  <h3>...generalno vjeruje drugima.</h3>
                  <p class="odgovori"><input type="radio" name="group1" value="1" checked="checked"> Uopće se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group1" value="2"> Djelomično se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group1" value="3"> Niti se slažem niti se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group1" value="4"> Djelomično se slažem.</p>
                  <p class="odgovori"><input type="radio" name="group1" value="5"> U potpunosti se slažem.</p>
                </div>

                <div class="pitanje">
                  <h3>...je često lijena.</h3>
                  <p class="odgovori"><input type="radio" name="group2" value="5" checked="checked"> Uopće se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group2" value="4"> Djelomično se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group2" value="3"> Niti se slažem niti se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group2" value="2"> Djelomično se slažem.</p>
                  <p class="odgovori"><input type="radio" name="group2" value="1"> U potpunosti se slažem.</p>
                </div>

                <div class="pitanje">
                  <h3>...ima malo interesa za umjetnost.</h3>
                  <p class="odgovori"><input type="radio" name="group3" value="5" checked="checked"> Uopće se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group3" value="4"> Djelomično se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group3" value="3"> Niti se slažem niti se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group3" value="2"> Djelomično se slažem.</p>
                  <p class="odgovori"><input type="radio" name="group3" value="1"> U potpunosti se slažem.</p>
                </div>

                <div class="pitanje">
                  <h3>...je sklona pronalaziti mane u drugima.</h3>
                  <p class="odgovori"><input type="radio" name="group4" value="5" checked="checked"> Uopće se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group4" value="4"> Djelomično se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group4" value="3"> Niti se slažem niti se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group4" value="2"> Djelomično se slažem.</p>
                  <p class="odgovori"><input type="radio" name="group4" value="1"> U potpunosti se slažem.</p>
                </div>

                <div class="pitanje">
                  <h3>...odradi svoj posao temeljito.</h3>
                  <p class="odgovori"><input type="radio" name="group5" value="1" checked="checked"> Uopće se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group5" value="2"> Djelomično se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group5" value="3"> Niti se slažem niti se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group5" value="4"> Djelomično se slažem.</p>
                  <p class="odgovori"><input type="radio" name="group5" value="5"> U potpunosti se slažem.</p>
                </div>

                <div class="pitanje">
                  <h3>...ima aktivnu maštu.</h3>
                  <p class="odgovori"><input type="radio" name="group6" value="1" checked="checked"> Uopće se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group6" value="2"> Djelomično se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group6" value="3"> Niti se slažem niti se ne slažem.</p>
                  <p class="odgovori"><input type="radio" name="group6" value="4"> Djelomično se slažem.</p>
                  <p class="odgovori"><input type="radio" name="group6" value="5"> U potpunosti se slažem.</p>
                </div>

                <button onclick="calculateResult()">KLIKNI I SAZNAJ</button>

                <div class="result" id="result"></div>



            </div>
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
            <img style="max-width:300px; height: auto;" src="<?php echo $native_path ?>/assets/images/energia-naturalis.png"/><br/>
            <br/><br/>
        </div>
        <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
            <div class="container">
              <div class="row">
            <h4>Zlatni <em>partneri</em></h4>
              </div>
            </div>
            <div class="container">
              <div class="row">
                  <div class="col-lg-6" data-wow-duration="1s" data-wow-delay="1s">
                    <img  style="width: auto; max-height: 70px;" src="<?php echo $native_path ?>/assets/images/hgk.png"/>
                  </div>
                  <div class="col-lg-6" data-wow-duration="1s" data-wow-delay="1s">
                    <img  style="width: auto; max-height: 70px;" src="<?php echo $native_path ?>/assets/images/ht.png"/>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-lg-8 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
            <div class="container">
              <div class="row">
            <h4>Brončani <em>partneri</em></h4>
              </div>
            </div>
            <div class="container">
              <div class="row">
                  <div class="col-lg-3" data-wow-duration="1s" data-wow-delay="1s">
                    <img  style="width: auto; max-height: 70px;" src="<?php echo $native_path ?>/assets/images/kaufland.png"/>
                  </div>
                  <div class="col-lg-3" data-wow-duration="1s" data-wow-delay="1s">
                    <img  style="width: auto; max-height: 70px;" src="<?php echo $native_path ?>/assets/images/answear.png"/>
                  </div>
                  <div class="col-lg-3" data-wow-duration="1s" data-wow-delay="1s">
                    <img  style="width: auto; max-height: 70px;" src="<?php echo $native_path ?>/assets/images/posta.png"/>
                   </div>
                  <div class="col-lg-3" data-wow-duration="1s" data-wow-delay="1s">
                    <img  style="width: auto; max-height: 70px;" src="<?php echo $native_path ?>/assets/images/janaf.png"/>
                  </div>
              </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top: 50px;">

       <div class="col-lg-6 offset-md-3 text-center wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.6s">
            <img style="max-width:300px; height: auto;" src="<?php echo $native_path ?>/assets/images/zl.png"/><br/>
            <p>Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing prema uredničkim standardima Telegram Media Grupe.</p><br/><br/>
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


  <script>
    function calculateResult() {
      // Dohvati vrijednosti odabranih radio gumba
      var answer1 = parseInt(document.querySelector('input[name="group1"]:checked').value);
      var answer2 = parseInt(document.querySelector('input[name="group2"]:checked').value);
      var answer3 = parseInt(document.querySelector('input[name="group3"]:checked').value);
      var answer4 = parseInt(document.querySelector('input[name="group4"]:checked').value);
      var answer5 = parseInt(document.querySelector('input[name="group5"]:checked').value);
      var answer6 = parseInt(document.querySelector('input[name="group6"]:checked').value);

      // Izračunaj zbrojeve za svaku grupu pitanja
      var sumGroup1 = answer3 + answer6;
      var sumGroup2 = answer1 + answer4;
      var sumGroup3 = answer2 + answer5;

      // Pronađi najveći zbroj
      var maxSum = Math.max(sumGroup1, sumGroup2, sumGroup3);

      // Preusmjeri na odgovarajuću stranicu na temelju rezultata
      if (maxSum === sumGroup1) {
        window.location.href = "https://www.telegram.hr/native/sesta-zelena-licnost/zeleni-istrazivac/;
      } else if (maxSum === sumGroup2) {
        window.location.href = "https://www.telegram.hr/native/sesta-zelena-licnost/zeleni-drustvenjak/";
      } else {
        window.location.href = "https://www.telegram.hr/native/sesta-zelena-licnost/zeleni-strateg/";
      }
    }
  </script>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
