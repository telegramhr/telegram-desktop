<!DOCTYPE html>
<html lang="hr">
<?php
// use this native path to embed all the files from project that are included with project, images, scripts, ...
// we will change this when we upload the project to the server
// this way we only need to change in one place
$native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/cyber/assets';
$native_path_vendor = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/cyber';
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
  <div class="instagram-embed-container">
    <script async src="//www.instagram.com/embed.js"></script>
    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DQv27xYjG4E/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
      <div style="padding:16px;"> <a href="https://www.instagram.com/reel/DQv27xYjG4E/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank">
          <div style=" display: flex; flex-direction: row; align-items: center;">
            <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
              <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
              <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
            </div>
          </div>
          <div style="padding: 19% 0;"></div>
          <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                  <g>
                    <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                  </g>
                </g>
              </g>
            </svg></div>
          <div style="padding-top: 8px;">
            <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Pogledajte ovu objavu na Instagramu.</div>
          </div>
          <div style="padding: 12.5% 0;"></div>
          <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
            <div>
              <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
              <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
              <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
            </div>
            <div style="margin-left: 8px;">
              <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
              <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
            </div>
            <div style="margin-left: auto;">
              <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
              <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
              <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
            </div>
          </div>
          <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
            <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
            <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
          </div>
        </a>
        <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/DQv27xYjG4E/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Objavu dijeli Telegram.hr (@telegram.hr)</a></p>
      </div>
    </blockquote>
    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DRMLpnKEsB_/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
      <div style="padding:16px;"> <a href="https://www.instagram.com/reel/DRMLpnKEsB_/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank">
          <div style=" display: flex; flex-direction: row; align-items: center;">
            <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
              <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
              <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
            </div>
          </div>
          <div style="padding: 19% 0;"></div>
          <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                  <g>
                    <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                  </g>
                </g>
              </g>
            </svg></div>
          <div style="padding-top: 8px;">
            <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Pogledajte ovu objavu na Instagramu.</div>
          </div>
          <div style="padding: 12.5% 0;"></div>
          <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
            <div>
              <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
              <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
              <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
            </div>
            <div style="margin-left: 8px;">
              <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
              <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
            </div>
            <div style="margin-left: auto;">
              <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
              <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
              <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
            </div>
          </div>
          <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
            <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
            <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
          </div>
        </a>
        <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/DRMLpnKEsB_/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Objavu dijeli Telegram.hr (@telegram.hr)</a></p>
      </div>
    </blockquote>
  </div>

  <style>
    .instagram-embed-container {
      display: flex;
      margin: 0 auto;
      flex-direction: column;
      gap: 40px;
      width: fit-content;
      padding: 16px;
    }


    @media screen and (min-width: 768px) {
      .instagram-embed-container {
        flex-direction: row;
        padding: 0;
      }
    .instagram-embed-container .instagram-media {
      max-width: 49%
    }
    }
  </style>
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