<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/adventski-kalendar';
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;800&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">
    <link href="<?php echo $native_path ?>/assets/dist/css/lightbox.css" rel="stylesheet" />
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



  <div id="clanci" class="blog prvi">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center wow fadeIn"  data-wow-duration="1s" data-wow-delay="0s">
          <img src="<?php echo $native_path ?>/assets/images/logos.png" style="max-width: 200px; margin-bottom: 15px;" />
          <h1>Adventski Giveaway</h1>
          <p style="text-align:center;">Oštra zimska jutra, ozeblo sunce, vjetrovite i poneke kišne dane, te duge i tamne noći, svake godine najljepše osvijetle nanizane lampice i zagriju druženja s najmilijima. Kako bismo vaše blagdane učinili još slađima i uzbudljivijama, Super1 i brojni naši partneri pripremili su vam još jednu sezonu adventskog darivanja.<br/><br/>Igrajte se s nama od 01. do 24. prosinca kada ćemo svakog dana otvoriti novu kućicu adventskog kalendara i najaviti jedinstveno darivanje na Instagramu Super1 profila. Pokloni su šaroliki i brojni, svatko će među njima pronaći sitnicu za sebe i svoje bližnje. Zato ne propusti ni jedno jutro i dopusti nam unesemo malo zimske čarolije i u tvoj dom!<br/><br/>Novo nagradno darivanje otkrivamo svakog dana, a svaki pojedinačni natječaj traje tri dana - 72sata. Prvi sljedeći radni dan od završetka natječaja, objavit ćemo dobitnike na storyju Super1 Instagram profila. Sretno!</p>
        </div>
      </div>
    </div>
  </div>


<div id="kartice" class="blog" style="padding-top: 0px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
          <div class="kartica  ">
            <img src="<?php echo $native_path ?>/assets/images/mima.jpg" />
            <h4>01. prosinca 2023.</h4>
            <h2>Mima namještaj</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
            <div class="karticaoff skrivena">
                <h2>01</h2>
            </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/kerastase.jpg" />
            <h4>02. prosinca 2023.</h4>
            <h2>Kerastase</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>02</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/de-rigo.jpg" />
            <h4>03. prosinca 2023.</h4>
            <h2>De Rigo</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>03</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/de-longhi.jpg" />
            <h4>04. prosinca 2023.</h4>
            <h2>De Longhi</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>04</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/barcaffe.jpg" />
            <h4>05. prosinca 2023.</h4>
            <h2>Barcaffe</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>05</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/dermalogica.jpg" />
            <h4>06. prosinca 2023.</h4>
            <h2>Dermalogica</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>06</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/lisca.jpg" />
            <h4>07. prosinca 2023.</h4>
            <h2>Lisca</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>07</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/loreal.jpg" />
            <h4>08. prosinca 2023.</h4>
            <h2>L'Oreal</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>08</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/intimina.jpg" />
            <h4>09. prosinca 2023.</h4>
            <h2>Intimina</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>09</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/kotanyi.jpg" />
            <h4>10. prosinca 2023.</h4>
            <h2>Kotanyi</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>10</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/geske.jpg" />
            <h4>11. prosinca 2023.</h4>
            <h2>Geske</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>11</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/ht.jpg" />
            <h4>12. prosinca 2023.</h4>
            <h2 style="font-size:20px !important; margin-bottom:16px !important">Hrvatski Telekom</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>12</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.2s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/purina.jpg" />
            <h4>13. prosinca 2023.</h4>
            <h2>Purina</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>13</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.3s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/gorenje.jpg" />
            <h4>14. prosinca 2023.</h4>
            <h2>Gorenje</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>14</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.4s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/plodine.jpg" />
            <h4>15. prosinca 2023.</h4>
            <h2>Plodine</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>15</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/lelo.jpg" />
            <h4>16. prosinca 2023.</h4>
            <h2>Lelo</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>16</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.6s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/daruvarska-pivovara.jpg" />
            <h4>17. prosinca 2023.</h4>
            <h2 style="font-size:20px !important; margin-bottom:16px !important">Daruvarska Pivovara</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff  <?php echo date('mdH') > 121708 ? 'skrivena' : '' ?>">
            <h2>17</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.7s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/erborian.jpg" />
            <h4>18. prosinca 2023.</h4>
            <h2>Erborian</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>18</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.8s">
          <div class="kartica ">
            <img src="<?php echo $native_path ?>/assets/images/melvita.jpg" />
            <h4>19. prosinca 2023.</h4>
            <h2>Melvita</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff skrivena">
            <h2>19</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.9s">
          <div class="kartica  <?php echo date('mdH') < 122008 ? 'skrivena' : '' ?>">
            <img src="<?php echo $native_path ?>/assets/images/jimmy-choo.jpg" />
            <h4>20. prosinca 2023.</h4>
            <h2>Jimmy Choo</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff  <?php echo date('mdH') > 122008 ? 'skrivena' : '' ?>">
            <h2>20</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="2s">
          <div class="kartica  <?php echo date('mdH') < 122108 ? 'skrivena' : '' ?>">
            <img src="<?php echo $native_path ?>/assets/images/esthederm.jpg" />
            <h4>21. prosinca 2023.</h4>
            <h2>Esthederm</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff  <?php echo date('mdH') > 122108 ? 'skrivena' : '' ?>">
            <h2>21</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="2.1s">
          <div class="kartica  <?php echo date('mdH') < 122208 ? 'skrivena' : '' ?>">
            <img src="<?php echo $native_path ?>/assets/images/lancome.jpg" />
            <h4>22. prosinca 2023.</h4>
            <h2>Lancome</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff  <?php echo date('mdH') > 122208 ? 'skrivena' : '' ?>">
            <h2>22</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="2.2s">
          <div class="kartica  <?php echo date('mdH') < 122308 ? 'skrivena' : '' ?>">
            <img src="<?php echo $native_path ?>/assets/images/bioderma.jpg" />
            <h4>23. prosinca 2023.</h4>
            <h2>Bioderma</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff  <?php echo date('mdH') > 122308 ? 'skrivena' : '' ?>">
            <h2>23</h2>
          </div>
        </div>
        <div class="col-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="2.3s">
          <div class="kartica  <?php echo date('mdH') < 122408 ? 'skrivena' : '' ?>">
            <img src="<?php echo $native_path ?>/assets/images/anja-beauty-koncept.jpg?v=2" />
            <h4>24. prosinca 2023.</h4>
            <h2  style="font-size:20px !important; margin-bottom:16px !important">Anja Beauty Koncept</h2>
            <div class="border-second-button scroll-to-section">
              <a href="https://www.instagram.com/super1.hr/" target="_blank">Nagradno darivanje</a>
            </div>
          </div>
          <div class="karticaoff  <?php echo date('mdH') > 122408 ? 'skrivena' : '' ?>">
            <h2>24</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog" style="padding-top:0; padding-bottom: 0;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <img src="<?php echo $native_path ?>/assets/images/footerpred.png" />
        </div>
      </div>
    </div>
  </div>


   <div class="container-fluid footer">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 text-center wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="0s">
           <p style="text-align:center;">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p>

            <img style="width:160px; height: auto; padding: 10px" src="<?php echo $native_path ?>/assets/images/telegram-studio.png" />

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
  <script src="<?php echo $native_path ?>/assets/dist/js/lightbox.js"></script>


    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
