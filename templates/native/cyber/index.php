<!DOCTYPE html>
<html lang="hr">
<?php
// use this native path to embed all the files from project that are included with project, images, scripts, ...
// we will change this when we upload the project to the server
// this way we only need to change in one place
$native_path = 'https://telegram.hr/wp-content/themes/telegram-desktop/templates/native/cyber/assets';
$native_path_vendor = 'https://telegram.hr/wp-content/themes/telegram-desktop/templates/native/cyber';
$native_path = 'https://telegram-wp.ddev.site/wp-content/themes/telegram-desktop/templates/native/cyber/assets';
$native_path_vendor = 'https://telegram-wp.ddev.site/wp-content/themes/telegram-desktop/templates/native/cyber';
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
  <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Expanded:wght@100;200;300;400;500;600;700;800;900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo $native_path_vendor ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="<?php echo $native_path ?>/css/fontawesome.css">
  <link rel="stylesheet" href="<?php echo $native_path ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo $native_path ?>/css/animated.css">
  <link rel="stylesheet" href="<?php echo $native_path ?>/css/owl.css">

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
                  <div class="col-lg-6 text-left">
                    <h2 class="naslov"><span>KOLIKE SU ŠANSE DA BAŠ TEBE HAKIRAJU?</span></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <video autoplay muted loop id="myVideo">
        <source src="<?php echo $native_path ?>/images/hero.mp4" type="video/mp4">
      </video>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding-top:70px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3>Riješi naš test i saznaj odmah!</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <!-- SADRŽAJ -->
    <div class="tab-container red-active" id="clanciContainer">
      <div class="tab-content" id="clanciTabsContent">

        <!-- CLANAK 1 -->
        <div class="tab-pane fade show active" id="clanak1" role="tabpanel">
          <div class="container py-4">
            <div id="quiz-container">

              <!-- Pitanja 1–10 -->
              <div class="quiz-step" data-step="1">
                <h4>1. Koliko često mijenjate lozinke?</h4>
                <div>
                  <button class="btn btn-outline-primary quiz-answer" data-points="0">a) Svakih nekoliko mjeseci </button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="1">b) Samo kad me sustav natjera</button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="2">c) Imam istu lozinku za sve</button>
                </div>
              </div>

              <div class="quiz-step d-none" data-step="2">
                <h4>2. Imate li dvofaktorsku autentifikaciju (2FA)?</h4>
                <div>
                  <button class="btn btn-outline-primary quiz-answer" data-points="0">a) Da, svugdje gdje mogu</button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="1">b) Samo na najvažnijim računima (mail, banka)</button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="2">c) Nemam pojma što je to</button>
                </div>
              </div>

              <div class="quiz-step d-none" data-step="3">
                <h4>3. Kako provjeravate sigurnost web stranica kad nešto kupujete online?</h4>
                <div>
                  <button class="btn btn-outline-primary quiz-answer" data-points="0">a) Provjerim adresu (https, lokot, domenu)</button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="1">b) Kupujem samo na poznatim stranicama</button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="2">c) Ako imaju lijep dizajn, vjerujem da je sve u redu</button>
                </div>
              </div>


              <div class="quiz-step d-none" data-step="4">
                <h4>4. Primili ste poruku “Vaš paket je zadržan, kliknite ovdje za detalje” — što ćete učiniti?</h4>
                <div>
                  <button class="btn btn-outline-primary quiz-answer" data-points="0">a) Provjerim na službenoj stranici dostavne službe</button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="1">b) Kliknem, ali pazim što dalje radim</button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="2">c) Kliknem odmah. Zvuči kao važna informacija!</button>
                </div>
              </div>

              <div class="quiz-step d-none" data-step="5">
                <h4>5. Tko sve može vidjeti vaše objave na društvenim mrežama?</h4>
                <div>
                  <button class="btn btn-outline-primary quiz-answer" data-points="0">a) Samo prijatelji </button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="1">b) Profil mi je većinom javan</button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="2">c) Nemam pojma, ali nije važno</button>
                </div>
              </div>

              <div class="quiz-step d-none" data-step="6">
                <h4>6. Ako vidite oglas koji obećava nagradu ako podijelite link - što činite?</h4>
                <div>
                  <button class="btn btn-outline-primary quiz-answer" data-points="0">a) Odmah prijavim</button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="1">b) Provjerim izvor pa odlučim</button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="2">c) Dijelim, ne škodi pokušati</button>
                </div>
              </div>

              <div class="quiz-step d-none" data-step="7">
                <h4>7. Koristite li isto računalo ili mobitel za posao i privatno?</h4>
                <div>
                  <button class="btn btn-outline-primary quiz-answer" data-points="0">a) Imam odvojene uređaje</button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="1">b) Sve radim na istom, ali pazim</button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="2">c) Da, sve je pomiješano. Nije mi važno</button>
                </div>
              </div>

              <div class="quiz-step d-none" data-step="8">
                <h4>8. Ažurirate li redovito svoje uređaje i aplikacije?</h4>
                <div>
                  <button class="btn btn-outline-primary quiz-answer" data-points="0">a) Da, uvijek</button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="1">b) Povremeno kad me podsjeti sustav </button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="0">c) Ne volim ažuriranja, samo smetaju</button>
                </div>
              </div>


              <div class="quiz-step d-none" data-step="9">
                <h4>9. Ako netko objavi “curenje podataka” vaše platforme, što činite?</h4>
                <div>
                  <button class="btn btn-outline-primary quiz-answer" data-points="0">a) Odmah promijenim lozinku i provjerim izvore</button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="1">b) Pročitam vijest, ali ne poduzimam ništa</button>
                  <button class="btn btn-outline-primary quiz-answer" data-points="2">c) Ignoriram, ionako ne mogu ništa</button>
                </div>
              </div>
              <!-- KORAK 12: Rezultat -->
              <div class="quiz-step d-none" data-step="10" id="quiz-result">
                <div class="row align-items-center">
                  <!-- Col 7: rezultat i tekst -->
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-8">
                    <h3>Rezultat:</h3>
                    <p style="color:#fff" id="score"></p>
                    <p style="color:#fff" id="result-text">
                      <a id="result-link" href="#" target="_blank">Detaljnije</a>
                    </p>
                  </div>
                  <!-- Col 5: slika -->
                  <div class="col-lg-2">
                    <img id="result-image" src="<?php echo $native_path ?>/assets/images/result-high.png" alt="Rezultat">
                  </div>
                  <div class="col-lg-1">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="clanci" class="blog" style="padding-bottom:70px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3>A sad nam dopusti da te uvjerimo, zašto je bitno da pročitaš ostatak ...</h3>
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style=" background: #4f4f4f;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7 d-flex align-items-center order-lg-2">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="sedamnaest"><span style="font-size: 70px;">17%</span><br /><span>MILIJUNA EURA</span></h2>
            </div>
            <div class="col-lg-12">
              <h3>iznosile su štete kibernetičkih napada u Hrvatskoj 2024. godine</h3>
            </div>
            <div class="col-lg-12">
              <p style="color:#fff; font-size: 14px; margin-top: 60px;">Izvor: MUP, Statistički izvještaj, 2025.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 order-lg-1">
          <img src="<?php echo $native_path ?>/images/lova.png" />
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding-top: 70px; padding-bottom: 70px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 d-flex align-items-center order-lg-2">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="pedesetdva"><span>TO JE PORAST OD</span><br /><span id="counter" style="font-size: 70px;">0%</span></h2>
            </div>
            <div class="col-lg-12">
              <h3>u odnosu na godinu ranije</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style=" background: #8655ed;  padding-top: 70px; padding-bottom: 70px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex align-items-center order-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
          <h2 class="citat">istovremeno, broj napada u 2024. godini porastao je tek 20%. <u>drugim riječima, raste broj napada, ali i šteta koju svaki u prosjeku napravi.</u> Svake godine. već godinama.</h2>
        </div>

      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding-top: 70px; padding-bottom: 70px; background: #132447;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex align-items-center order-lg-2">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="najgori"><span>A NAJGORI JE PO BROJU NAPADA UPRAVO ZADNJI KVARTAL</span></h2>
            </div>
            <div class="col-lg-12">
              <h3>Blagdanski period prošle je godine obilježio najveći rast kibernetičkih napada.</h3>
            </div>
            <div class="col-lg-12">
              <img src="<?php echo $native_path ?>/images/blagdan.png" style="margin-top:40px; margin-bottom: 40px;" />
            </div>
            <div class="col-lg-12">
              <h3>Među njima daleko je najpopularniji, i najučinkovitiji, ...</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style=" background: url(<?php echo $native_path ?>/images/pozadina-kartica.jpg);  padding-top: 70px; padding-bottom: 70px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex align-items-center order-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
          <h2 class="phishing"><span>PHISHING</span></h2>
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding-top: 70px; padding-bottom: 70px; background: #132447;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex align-items-center order-lg-2">
          <div class="row">
            <div class="col-lg-12">
              <h3>poruke u kojima se prevaranti predstavljaju pod lažnim identitetom kako bi doznali vaše osobne podatke.<br /><br />

                Predstavljaju se da su:<br /><br />
                • vaša banka<br />
                • vaša osiguravajuća kuća<br />
                • porezna uprava<br />
                • ministarstvo unutarnjih poslova<br />
                • vama bližnja osoba<br />
                • vaš poslodavac<br />
                • vaš poslovni partner<br />
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style=" background: #8655ed;  padding-top: 70px; padding-bottom: 70px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 d-flex align-items-center order-lg-2">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="savjet"><span>#savjetstručnjaka</span></h2>
            </div>
            <div class="col-lg-12">
              <h5 style="margin-bottom:40px;">Automatizacija i umjetna inteligencija jednako služe i napadačima i braniteljima, zato je ključno stalno nadograđivati sustave i procese obrane kako biste ostali korak ispred prijetnji.<br /><br />- Ivan Horvat, Direktor platnog prometa u OTP banci</h5>
            </div>
            <div class="col-lg-12">
              <h3 class="gumb"><span><a href="https://www.telegram.hr/partneri/napadaju-banke-institucije-i-holdinge-zasto-mislite-da-ste-vi-sigurni-evo-kako-se-zastititi-od-kibernetickih-napadaca/" target="_blank">Pročitaj više >>></a></span></h3>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-lg-1">
          <img src="<?php echo $native_path ?>/images/osoba.png" />
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding-top: 70px; padding-bottom: 70px; background: #132447;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="najgori"><span>PARTNER PROJEKTA</span></h2>
            </div>
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4 text-center">
              <img src="<?php echo $native_path ?>/images/otp.jpg" style="margin-top:40px; margin-bottom: 40px;" />
            </div>
            <div class="col-lg-4">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="clanci" class="blog" style="padding-bottom:70px; background: #132447 ;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
          <div>
            <p style="text-align: center; color: #fff !important"><img style="width:160px; height: auto; padding: 10px" src="<?php echo $native_path ?>/images/telegram-studio.png" />
              <br /><br />
              Fotografije i video: Telegram & Freepik<br />
              Kreativno vodstvo: TG Studio<br />
              Razvoj: Reset
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="<?php echo $native_path_vendor ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $native_path_vendor ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $native_path ?>/js/owl-carousel.js"></script>
  <script src="<?php echo $native_path ?>/js/animation.js"></script>
  <script src="<?php echo $native_path ?>/js/imagesloaded.js"></script>
  <script src="<?php echo $native_path ?>/js/custom.js"></script>

  <script>
    const container = document.getElementById('clanciContainer');
    const tabButtons = document.querySelectorAll('.nav-link');

    tabButtons.forEach(btn => {
      btn.addEventListener('shown.bs.tab', function(event) {
        if (event.target.classList.contains('red-tab')) {
          container.classList.add('red-active');
          container.classList.remove('green-active');
        } else if (event.target.classList.contains('green-tab')) {
          container.classList.add('green-active');
          container.classList.remove('red-active');
        }
      });
    });
  </script>

  <script>
    // ⏱ Postavke
    const target = 52; // konačni broj
    const duration = 2000; // trajanje animacije u ms (2 sekunde)
    const element = document.getElementById("counter");

    let start = 0;
    const startTime = performance.now();

    function updateCounter(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const currentValue = Math.floor(progress * target);

      element.textContent = currentValue + "%";

      if (progress < 1) {
        requestAnimationFrame(updateCounter);
      } else {
        element.textContent = target + "%"; // osiguraj točan završni broj
      }
    }
    requestAnimationFrame(updateCounter);
  </script>
  <script>
    let currentStep = 1;
    let totalPoints = 0;

    const nextStepBtn = document.getElementById('next-step');
    const quizSteps = document.querySelectorAll('.quiz-step');

    function showStep(step) {
      quizSteps.forEach(s => s.classList.add('d-none'));
      document.querySelector(`.quiz-step[data-step="${step}"]`).classList.remove('d-none');
    }

    // Koraci 2-11: pitanja
    const answerButtons = document.querySelectorAll('.quiz-answer');
    let postData = [];
    answerButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        totalPoints += parseInt(btn.dataset.points);
        currentStep++;
        postData.push(btn.textContent);
        if (currentStep === 10) {
          const scoreEl = document.getElementById('score');
          const linkEl = document.getElementById('result-link');
          const imgEl = document.getElementById('result-image');

          scoreEl.textContent = `Osvojili ste ${totalPoints} bodova!`;
          postData.push(totalPoints);

          $.post({
            url: 'https://script.google.com/macros/s/AKfycbxAPHmu7mxBS7cl3pycR8KPOy6ZAo6K2faNoe7FMaiKttQNv3BPjTvjgSJubgUj6O86NQ/exec',
            type: 'POST',
            data: JSON.stringify(postData),
            contentType: 'text/plain', // This avoids CORS preflight
            success: function(response) {
              console.log('Submitted successfully!');
            },
            error: function(xhr, status, error) {
              console.log('Error:', error);
            }
          });
          window.dataLayer = window.dataLayer || []
          window.dataLayer.push({
            event: 'quiz-success',
          })
          // Određivanje slike i linka po rasponima
          if (totalPoints <= 7) {
            linkEl.href = "https://www.telegram.hr/partneri/napadaju-banke-institucije-i-holdinge-zasto-mislite-da-ste-vi-sigurni-evo-kako-se-zastititi-od-kibernetickih-napadaca/";
            linkEl.textContent = "Bravo! Tvoj cyber štit je čvrst. Ipak, hakeri ne spavaju — provjeri gdje su tvoje sljedeće točke ranjivosti u našem vodiču o najčešćim trikovima napadača. ";
            imgEl.src = "<?php echo $native_path ?>/images/result-low.png";
          } else if (totalPoints <= 15) {
            linkEl.href = "https://www.telegram.hr/partneri/napadaju-banke-institucije-i-holdinge-zasto-mislite-da-ste-vi-sigurni-evo-kako-se-zastititi-od-kibernetickih-napadaca/";
            linkEl.textContent = "Dobro se snalaziš, ali imaš nekoliko navika koje te mogu skupo koštati. Saznaj kako ih popraviti u našem specijalu o cyber higijeni. ";
            imgEl.src = "<?php echo $native_path ?>/images/result-mid.png";
          } else { // 35-40
            linkEl.href = "https://www.telegram.hr/partneri/napadaju-banke-institucije-i-holdinge-zasto-mislite-da-ste-vi-sigurni-evo-kako-se-zastititi-od-kibernetickih-napadaca/";
            linkEl.textContent = "Ups — ti si san svakog hakera. Još nije kasno! Nauči kako zaštititi svoje podatke, račune i uređaje u par jednostavnih koraka.";
            imgEl.src = "<?php echo $native_path ?>/images/result-high.png";
          }
        }

        showStep(currentStep);
      });
    });

    // inicijalno pokaži prvi korak
    showStep(currentStep);
  </script>
  <!-- this is required to load all the analytics and other scripts -->
  <?php wp_footer(); ?>
</body>

</html>