<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/generic/';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>

<?php
$counterFile = 'drustvenjak.txt';
$count = intval(file_get_contents($counterFile));
$count++;
file_put_contents($counterFile, $count);
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo $native_path ?>/assets/images/favicon.png">

    <title>6. Zelena ličnost - Telegram</title>

    <meta property="og:url"                content="http://www.telegram.hr" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="6. Zelena ličnost - Telegram" />
    <meta property="og:description"        content="Svaka odluka koju donesemo odraz je naše osobnosti. Volimo li promjene, jesmo li otvoreni novim idejama, koliko nam je važna vlastita a koliko tuđa dobrobit - samo su neke od stvari opisane s 5 velikih osobnosti. A mi ti danas predstavljamo šestu - zelenu ličnost" />
    <meta property="og:image"              content="<?php echo $native_path ?>/assets/images/facebook.jpg" />

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
  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="https://www.telegram.hr/native/sesta-zelena-licnost/" class="logo">
              <img src="<?php echo $native_path ?>/assets/images/logo-v1.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.php#top">Naslovnica</a></li>
              <li><a href="index.php#infografike">Infografike</a></li>
              <li><a href="index.php#kviz">Kviz</a></li>
              <li><a href="index.php#clanci">Članci</a></li>
              <li><a href="index.php#about"></a></li>
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

  <div class="main-banner rezultat wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>REZULTAT TESTA</h6>
                    <h2>Zeleni društvenjak</h2>
                    <p>Razumijevanje, suradnja i ljubaznost jednako su važne za skladnu zajednicu, kao i za očuvanje planeta, i ti to najbolje znaš. Na koji način možemo udružiti svoju snagu, koja je tvoja uloga i kako možeš inspirirati i potaknuti druge i odigrati svoju ulogu u ostvarenju održive budućnosti, top su izbor tema za tebe, a mi ti ih donosimo u nastavku. Krenimo odmah.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?php echo $native_path ?>/assets/images/drustvenjak.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="blog" class="blog"style="padding-top:50px">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 show-up prednost wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
          <div class="blog-post">
            <div class="thumb">
              <a href="https://www.telegram.hr/zivot/iznenadujuce-dobri-podaci-hrvatska-ima-umjerenu-potrosnju-plastike-i-relativno-dobro-upravlja-otpadom/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/pxl-201122-96981021.webp" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Priroda</span>
              <a href="https://www.telegram.hr/zivot/iznenadujuce-dobri-podaci-hrvatska-ima-umjerenu-potrosnju-plastike-i-relativno-dobro-upravlja-otpadom/" target="_blank"><h4>Iznenađujuće dobri podaci: Hrvatska ima umjerenu potrošnju plastike i relativno dobro upravlja otpadom</h4></a>
              <p>Međunarodni dan prekoračenja plastike, poznatiji kao Plastic Overshoot Day označava dan u kojem se u svijetu proizvelo više plastike no što se može zbrinuti. Globalno smo taj prag prešli 28. srpnja, no postoji i određeni datum za svaku zemlju zasebno. Hrvatsku pak očekuje 11. listopada.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 show-up prednost wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="blog-post">
            <div class="thumb">
              <a href="https://www.telegram.hr/zivot/unatoc-inflaciji-svaka-druga-osoba-platit-ce-vise-za-ekoloski-prihvatljive-proizvode-istrazili-smo-zasto/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/shutterstock-1664636416.webp" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Ljudi</span>
              <a href="https://www.telegram.hr/zivot/unatoc-inflaciji-svaka-druga-osoba-platit-ce-vise-za-ekoloski-prihvatljive-proizvode-istrazili-smo-zasto/" target="_blank"><h4>Unatoč inflaciji svaka druga osoba platit će više za ekološki prihvatljive proizvode. Istražili smo zašto</h4></a>
              <p>Odgovorna potrošnja i proizvodnja, kako je navedeno u jednom od UN-ovih ciljeva održivog razvoja, zahtijeva minimiziranje utjecaja na okoliš, povećanje učinkovitosti resursa te smanjenje otpada. U njihovom ostvarenju značajnu ulogu imaju globalna trgovina i navike potrošača, a istraživanja pokazuju da smo na poprilično dobrom putu.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="clanci" class="blog" style="padding-top:40px !important">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 show-up prednost wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
          <div class="blog-post">
            <div class="thumb">
              <a href="https://www.telegram.hr/partneri/izgleda-da-ima-nade-10-pozitivnih-stvari-za-nas-planet-koje-su-se-dogodile-u-prvoj-polovici-godine/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/promjene.webp" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Priroda</span>
              <a href="https://www.telegram.hr/partneri/izgleda-da-ima-nade-10-pozitivnih-stvari-za-nas-planet-koje-su-se-dogodile-u-prvoj-polovici-godine/" target="_blank"><h4>Izgleda da ima nade: 10 pozitivnih stvari za naš planet koje su se dogodile u prvoj polovici godine</h4></a>
              <p>Unazad desetak godina, klimatske promjene bile su nešto što se rijetko spominjalo. Danas pak gotovo svaki čovjek, društvo i razne tvrtke o održivosti razmišljaju svakodnevno. Sve izraženije posljedice, kontinuirano crpljenje Zemljinih resursa i ubrzano zagrijavanje planeta...</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 show-up prednost wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="blog-post">
            <div class="thumb">
              <a href="https://www.telegram.hr/zivot/u-dva-dana-iz-jadrana-kod-mljeta-izvadeno-vise-od-tone-otpada-plastika-je-bila-tek-druga-na-listi-po-kolicini/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/u-dva-dana-iz-jadrana.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Priroda</span>
              <a href="https://www.telegram.hr/zivot/u-dva-dana-iz-jadrana-kod-mljeta-izvadeno-vise-od-tone-otpada-plastika-je-bila-tek-druga-na-listi-po-kolicini/" target="_blank"><h4>U dva dana iz Jadrana kod Mljeta izvađeno više od tone otpada. Plastika je bila tek druga na listi po količini</h4></a>
              <p>Na Mljetu je tijekom dva dana izvađena jedna tona i 100 kilograma otpada. Više od 25 ronilaca, zaposlenici Nacionalnog parka, akademici i mještani sudjelovali su u dvodnevnoj #MakeItCount akciji čišćenja devet podmorskih mikrolokacija 29. i 30. travnja oko Polača i mjesta Kozarica...</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 show-up wow fadeInUp"  data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a href="https://www.telegram.hr/super1/life/godisnje-skupimo-11-kilograma-nepotrebne-odjece-svoju-smo-natrpale-u-5-velikih-vreca-i-pridruzile-se-genijalnoj-inicijativi/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/inicijativa-gen.jpeg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Moda</span>
              <a href="https://www.telegram.hr/super1/life/godisnje-skupimo-11-kilograma-nepotrebne-odjece-svoju-smo-natrpale-u-5-velikih-vreca-i-pridruzile-se-genijalnoj-inicijativi/" target="_blank"><h4>Genijalna incijativa Godišnje skupimo 11 kilograma nepotrebne odjeće. Svoju smo natrpale u 5 velikih vreća</h4></a>
              <p>U samo tri tjedna prikupili su više od 100 kilograma stare odjeće, a sada će pošumljavati Hrvatsku</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 show-up wow fadeInUp"  data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="blog-post">
            <div class="thumb">
              <a href="https://www.telegram.hr/biznis-tech/omiljene-hrvatske-tiktokerice-jedan-mali-uredaj-moze-vam-stvoriti-veliki-problem-ali-mozete-ga-rijesiti/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/omiljene-hrvatske-tiktokerice.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Tech</span>
              <a href="https://www.telegram.hr/biznis-tech/omiljene-hrvatske-tiktokerice-jedan-mali-uredaj-moze-vam-stvoriti-veliki-problem-ali-mozete-ga-rijesiti/" target="_blank"><h4>Omiljene hrvatske TikTokerice: Jedan mali uređaj može vam stvoriti veliki problem. Ali, možete ga riješiti</h4></a>
              <p>‘Nema apsolutno nikakve koristi od toga da stari mobitel držimo u ladici. To ne donosi ništa dobro ni okolišu ni ljudima.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 show-up wow fadeInUp"  data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="blog-post" style="margin-top:40px;">
            <div class="thumb">
              <a href="https://www.telegram.hr/zivot/jadransko-more-suocava-se-s-ekoloskom-krizom-imamo-fotografije-koje-to-dokazuju/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/more-jadransko.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Priroda</span>
              <a href="https://www.telegram.hr/zivot/jadransko-more-suocava-se-s-ekoloskom-krizom-imamo-fotografije-koje-to-dokazuju/" target="_blank"><h4>Jadransko more suočava se s ekološkom krizom. Imamo fotografije koje to dokazuju</h4></a>
              <p>Klimatske promjene, izlov ribe i sve više otpada dovode u pitanje održivost cijelog jadranskog ekosustava...</p>
            </div>
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
        <div class="col-lg-6 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
            <div class="container">
              <div class="row">
            <h4>Zlatni <em>partneri</em></h4>
              </div>
            </div>
            <div class="container">
              <div class="row">
                  <div class="col-lg-6" data-wow-duration="1s" data-wow-delay="1s">
                    <img  style="width: auto; height: 100px;" src="<?php echo $native_path ?>/assets/images/hgk.png"/>
                  </div>
                  <div class="col-lg-6" data-wow-duration="1s" data-wow-delay="1s">
                    <img  style="width: auto; height: 100px;" src="<?php echo $native_path ?>/assets/images/ht.png"/>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-lg-6 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
            <div class="container">
              <div class="row">
            <h4>Srebrni <em>partner</em></h4>
              </div>
            </div>
            <div class="container">
              <div class="row">
                  <div class="col-lg-6 offset-lg-3" data-wow-duration="1s" data-wow-delay="1s">
                    <img  style="width: auto; height: 100px;" src="<?php echo $native_path ?>/assets/images/hrana-se-ne-baca.png"/>
                  </div>
              </div>
          </div>
          <br/><br/>
        </div>
        <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
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
    let currentQuestion = 1;
    const totalQuestions = 10;

    function showQuestion(questionNumber) {
      document.getElementById(`question-${questionNumber}`).style.display = 'block';
    }

    function hideQuestion(questionNumber) {
      document.getElementById(`question-${questionNumber}`).style.display = 'none';
    }

    function nextQuestion() {
      hideQuestion(currentQuestion);
      currentQuestion++;
      if (currentQuestion <= totalQuestions) {
        showQuestion(currentQuestion);
      }
    }

function startQuiz() {
  const quizContent = document.getElementById('quiz-content');
  const headline = document.querySelector('.free-quote h2');
  const startButton = document.querySelector('.free-quote button');
  
  quizContent.style.display = 'block';
  headline.style.display = 'none';
  startButton.style.display = 'none';
  
  showQuestion(currentQuestion);
}


    document.getElementById('quiz-form').addEventListener('submit', function(event) {
      event.preventDefault();
      showResults();
    });

   function showResults() {
      const form = document.getElementById('quiz-form');
      const formData = new FormData(form);
      let score = 0;

      for (let pair of formData.entries()) {
        const questionNumber = pair[0];
        const answer = pair[1];


        // Check if the answer is correct and increment the score
        if (questionNumber === 'q1' && answer === 'a') {
          score++;
        }
        if (questionNumber === 'q2' && answer === 'b') {
          score++;
        }
        if (questionNumber === 'q3' && answer === 'c') {
          score++;
        }
        if (questionNumber === 'q4' && answer === 'c') {
          score++;
        }
        if (questionNumber === 'q5' && answer === 'a') {
          score++;
        }
        if (questionNumber === 'q6' && answer === 'c') {
          score++;
        }
        if (questionNumber === 'q7' && answer === 'a') {
          score++;
        }
        if (questionNumber === 'q8' && answer === 'b') {
          score++;
        }
        if (questionNumber === 'q9' && answer === 'c') {
          score++;
        }
        if (questionNumber === 'q10' && answer === 'c') {
          score++;
        }
        // Add simila
        // Add similar conditions for the remaining questions
      }

      const resultContainer = document.getElementById('results');
      const scoreElement = document.getElementById('score');
      const messageElement = document.getElementById('message');
      scoreElement.textContent = 'Rezultat: ' + score + '/10';

      if (score === 10) {
        messageElement.textContent = 'Odlično! Imaš zavidno znanje o održivosti.';
      } else if (score >= 6) {
        messageElement.textContent = 'Nije loše, bravo. Nadamo se da si naučio/la nešto novo.';
      } else if (score >= 3) {
        messageElement.textContent = 'Znamo da možeš bolje! Pročitaj naše tekstove pa probaj ponovno.';
      } else {
        messageElement.textContent = 'Znamo da možeš bolje! Pročitaj naše tekstove pa probaj ponovno.';
      }

      // Hide the last question and display only the results
      document.getElementById(`question-${totalQuestions}`).style.display = 'none';
      resultContainer.style.display = 'block';
    }
  </script>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>