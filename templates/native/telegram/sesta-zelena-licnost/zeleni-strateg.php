<!DOCTYPE html>
<html lang="hr">
<?php
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/telegram/sesta-zelena-licnost';
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
  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="<?php echo site_url() ?>" class="logo">
              <img src="<?php echo $native_path ?>/assets/images/logo-v1.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="https://www.telegram.hr/native/sesta-zelena-licnost/#top">Naslovnica</a></li>
              <li><a href="https://www.telegram.hr/native/sesta-zelena-licnost/#infografike">Infografike</a></li>
              <li><a href="https://www.telegram.hr/native/sesta-zelena-licnost/#kviz">Kviz</a></li>
              <li><a href="https://www.telegram.hr/native/sesta-zelena-licnost/#clanci">Članci</a></li>
              <li><a href="https://www.telegram.hr/native/sesta-zelena-licnost/#about"></a></li>
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
                    <h2>Zeleni strateg</h2>
                    <p>Spontanost i fleksibilnost cijeniš, ali svoju ćeš odgovornost uvijek staviti na prvo mjesto i radije se pripremiti za ono što slijedi i tebi i drugima na vrijeme. Dobra organiziranost, disciplina i efikasnost uvijek su poželjni pa to očekuješ i u raspravi o budućnosti planeta i njegovoj održivosti, a mi ti konkretno donosimo što, kada i kako možeš učiniti. Krenimo odmah.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?php echo $native_path ?>/assets/images/strateg.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="blog" class="blog" style="padding-top:50px">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 show-up prednost wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a href="https://www.telegram.hr/zivot/strucnjak-o-odrzivosti-prometa-buducnost-ne-lezi-samo-u-elektricnim-vozilima-postoje-jos-dva-vazna-rjesenja/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/auti.jpeg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Energija</span>
              <a href="https://www.telegram.hr/zivot/strucnjak-o-odrzivosti-prometa-buducnost-ne-lezi-samo-u-elektricnim-vozilima-postoje-jos-dva-vazna-rjesenja/" target="_blank"><h4>Stručnjak o održivosti prometa: 'Budućnost ne leži samo u električnim vozilima. Postoje još dva važna rješenja'</h4></a>
              <p>Zamislite si situaciju da direktor neke velike kompanije kod nas dođe na sastanak s biciklom. U najmanju ruku bi ga čudno gledali jer je iznimka, dok je u Kopenhagenu to sasvim normalna stvar. Ondje postoje mostovi na koje mogu isključivo bicikli...</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 show-up prednost wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="blog-post">
            <div class="thumb">
              <a href="https://www.telegram.hr/super1/life/godisnje-skupimo-11-kilograma-nepotrebne-odjece-svoju-smo-natrpale-u-5-velikih-vreca-i-pridruzile-se-genijalnoj-inicijativi/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/inicijativa-gen.jpeg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Moda</span>
              <a href="https://www.telegram.hr/super1/life/godisnje-skupimo-11-kilograma-nepotrebne-odjece-svoju-smo-natrpale-u-5-velikih-vreca-i-pridruzile-se-genijalnoj-inicijativi/" target="_blank"><h4>Genijalna incijativa Godišnje skupimo 11 kilograma nepotrebne odjeće. Svoju smo natrpale u 5 velikih vreća</h4></a>
              <p>Obratite pozornost na sadržaj svojeg ormara – primjećujete li odjeću koju gotovo pa ni ne prepoznajete, stisnutu u neki ćošak? Ako je vaš odgovor da, pripadate među većinu ljudi koja 80 posto vremena nosi samo 20 posto od sve odjeće koju inače posjeduje....</p>
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
          <div class="blog-post" style="margin-bottom: 30px;">
            <div class="thumb">
              <a href="https://www.telegram.hr/zivot/ugrozili-smo-mediteransku-vrstu-koja-u-danu-proizvede-do-20-litara-kisika-ova-inicijativa-pokusava-je-spasiti/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/ugrozili-smo.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Priroda</span>
              <a href="https://www.telegram.hr/zivot/ugrozili-smo-mediteransku-vrstu-koja-u-danu-proizvede-do-20-litara-kisika-ova-inicijativa-pokusava-je-spasiti/" target="_blank"><h4>Ugrozili smo mediteransku vrstu koja u danu proizvede do 20 litara kisika. Ova inicijativa pokušava je spasiti</h4></a>
              <p>Zasigurno ste barem jednom iz mora izašli s komadićem trave koji vam se priljubio uz nogu ili ste u dubinama okrznuli stopalima nešto nalik...</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post" style="margin-bottom: 30px;">
            <div class="thumb">
              <a href="https://www.telegram.hr/zivot/hrvatska-bi-ove-godine-mogla-postaviti-novi-rekord-po-broju-instaliranih-solarnih-elektrana-ustede-su-neupitne/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/solari.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Energija</span>
              <a href="https://www.telegram.hr/zivot/hrvatska-bi-ove-godine-mogla-postaviti-novi-rekord-po-broju-instaliranih-solarnih-elektrana-ustede-su-neupitne/" target="_blank"><h4>Hrvatska bi ove godine mogla postaviti novi rekord po broju instaliranih solarnih elektrana. Uštede su neupitne</h4></a>
              <p>Vodeća tvrtka u segmentu solarnih elektrana u Hrvatskoj, Energia Naturalis, u protekloj je godini ugovorila više od 1000 solarnih elektrana</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="blog-post" style="margin-bottom: 30px;">
            <div class="thumb">
              <a href="https://www.telegram.hr/super1/look/gdje-pronaci-savrsen-par-odrzivih-traperica-ovi-brendovi-rade-najbolje-na-svijetu/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/traperice.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Moda</span>
              <a href="https://www.telegram.hr/super1/look/gdje-pronaci-savrsen-par-odrzivih-traperica-ovi-brendovi-rade-najbolje-na-svijetu/" target="_blank"><h4>S1 izbor Gdje pronaći savršen par održivih traperica? Ovi brendovi rade najbolje na svijetu</h4></a>
              <p>Za ove brendove možda još niste čuli, ali rade neke od najboljih traperica na svijetu i održivi su</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="blog-post" style="margin-bottom: 30px;">
            <div class="thumb">
              <a href="https://www.telegram.hr/zivot/u-dva-dana-iz-jadrana-kod-mljeta-izvadeno-vise-od-tone-otpada-plastika-je-bila-tek-druga-na-listi-po-kolicini/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/u-dva-dana-iz-jadrana.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Priroda</span>
              <a href="https://www.telegram.hr/zivot/u-dva-dana-iz-jadrana-kod-mljeta-izvadeno-vise-od-tone-otpada-plastika-je-bila-tek-druga-na-listi-po-kolicini/" target="_blank"><h4>U dva dana iz Jadrana kod Mljeta izvađeno više od tone otpada. Plastika je bila tek druga na listi po količini</h4></a>
              <p>Na Mljetu je tijekom dva dana izvađena jedna tona i 100 kilograma otpada. Više od 25 ronilaca, zaposlenici Nacionalnog...</p>
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
        <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="1.5s">
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
