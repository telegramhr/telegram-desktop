<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/telegram/sw-web';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>

<head>
<?php wp_head(); ?>


<style>
  /* Styles for overlay */
  .overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    justify-content: center;
    align-items: center;
    z-index: 10;
  }

  /* Styles for lightbox content */
  .lightbox-content {
    background-color: white;
    padding: 0px;
    border-radius: 0px;
    box-shadow: 0 7px 10px rgba(0, 0, 0, 0.1);
    max-width: 80%;
    max-height: 90%;
    overflow: auto;
    position: relative;
  }

  /* Close button style */
  .close-button {
    position: absolute;
    top:  10px;
    right: 10px;
    color: #fff;
    z-index: 10;
    width: 40px;
    height: 40px;
    font-size: 40px;
    padding: 0;
    margin: 0;
  }
</style>
<script>
  function openLightbox(contentId) {
    var overlay = document.querySelector('.overlay');
    var lightboxContent = document.querySelector('.lightbox-content');

    var content = document.getElementById(contentId).innerHTML;
    lightboxContent.innerHTML = content;

    overlay.style.display = 'flex';
  }

  function closeLightbox() {
    var overlay = document.querySelector('.overlay');
    overlay.style.display = 'none';
  }
</script>


<?php
$clickCountFile = 'click_counts.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['button_id'])) {
        $buttonId = $_POST['button_id'];
        $clickData = json_decode(file_get_contents($clickCountFile), true);

        if (!isset($clickData[$buttonId])) {
            $clickData[$buttonId] = 1;
        } else {
            $clickData[$buttonId]++;
        }

        file_put_contents($clickCountFile, json_encode($clickData));

        echo $clickData[$buttonId]; // Respond with the updated click count for the button
    }
}
?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

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
<!-- Lightbox overlay -->
<div class="overlay" onclick="closeLightbox()">
  <div class="close-button" onclick="closeLightbox()">☒</div>
  <div class="lightbox-content" onclick="event.stopPropagation()">
  </div>
</div>

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
            <div class="col-lg-5 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6> <img src="<?php echo $native_path ?>/assets/images/swlogo.svg" style="width: 180px; height: auto; padding-bottom: 50px;" alt=""></h6>
                    <h2 style="color:#fff;"><span style="font-weight: 400 !important;">Tvoja destinacija za</span> super shopping</h2>
                    <p style="color:#fff;">Iskoristi jedinstvenu priliku i olakšaj si povratak u svakodnevicu. Sa Super1 Shopping Week kodovima budi #SuperSvoja. </p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#ponuda">POGLEDAJ PONUDU</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>



  <div id="ponuda" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" >
            <h4>Ponuda <span style="font-weight: 400 !important;">popusta</span></h4>
            <p>Super1 i partneri pripremili su ti kolekciju odličnih pogodnosti kako bi povratak na radna mjesta i klupe bio slađi. <span style="font-weight: 700">Većina popusta traje do kraja rujna.</span>. Sakupi ih sve.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 show-up " >
          <div class="blog-post">
            <div class="thumb">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content6')"id="bodyshop"><img src="<?php echo $native_path ?>/assets/images/bodyshop.png" alt=""></a>
            </div>
            <div class="down-content">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content6')"id="bodyshop"><h3 style="color:#000; font-weight: 900;">20% popusta</h3></a>
              <p style="font-size: 16px; text-transform: uppercase;">na artikle na punoj cijeni</p>
              <div class="button"><a href="javascript:void(0);" onclick="openLightbox('popup-content6')" id="bodyshop">PREUZMI KOD ZA POPUST</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 show-up " >
          <div class="blog-post">
            <div class="thumb">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content5')" id="hervis"><img src="<?php echo $native_path ?>/assets/images/hervis.png" alt=""></a>
            </div>
            <div class="down-content">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content5')" id="hervis"><h3 style="color:#000; font-weight: 900;">10% popusta</h3></a>
              <p style="font-size: 16px; text-transform: uppercase;">na kupnju u internet trgovini</p>
              <div class="button"><a href="javascript:void(0);" onclick="openLightbox('popup-content5')" id="hervis">PREUZMI KOD ZA POPUST</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 show-up " >
          <div class="blog-post">
            <div class="thumb">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content1')" id="skolskaknjiga"><img src="<?php echo $native_path ?>/assets/images/skolskaknjiga.png" alt=""></a>
            </div>
            <div class="down-content">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content1')" id="skolskaknjiga"><h3 style="color:#000; font-weight: 900;">10% popusta</h3></a>
              <p style="font-size: 16px; text-transform: uppercase;">na sva izdanja ŠK I LUMENA</p>
              <div class="button"><a href="javascript:void(0);" onclick="openLightbox('popup-content1')" id="skolskaknjiga">PREUZMI KOD ZA POPUST</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 show-up " >
          <div class="blog-post">
            <div class="thumb">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content4')"  id="amazinga"><img src="<?php echo $native_path ?>/assets/images/amazinga.png" alt=""></a>
            </div>
            <div class="down-content">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content4')"  id="amazinga"><h3 style="color:#000; font-weight: 900;">10% popusta</h3></a>
              <p style="font-size: 16px; text-transform: uppercase;">na Amazinga Pack rođendan</p>
              <div class="button"><a href="javascript:void(0);" onclick="openLightbox('popup-content4')" id="amazinga">PREUZMI KOD ZA POPUST</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    <div id="news" class="news">
    <div class="container">
      <div class="row">
        <div class="col-lg-6" style="margin:0; padding: 0">
          <div class="blog-posts" style="margin-left:10px !important; background: #282626;">
            <div class="row">
              <div class="col-lg-6 text-left popustitis" style="padding:50px; padding-bottom: 0; padding-top: 30px;">
                  <img src="<?php echo $native_path ?>/assets/images/acer-logo.png" alt="" style="height: 20px; width: auto; margin-top:20px; margin-bottom: 20px;">
                  <a href="javascript:void(0);" onclick="openLightbox('popup-content13')" id="acer"><h3 style="color:#fff; font-weight: 900;">Akcijska ponuda</h3></a>
                  <p style="font-size: 16px; text-transform: uppercase; color: #C1C1C1;">na laptope</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <div class="button"><a href="javascript:void(0);" onclick="openLightbox('popup-content13')" id="acer">POGLEDAJ PONUDU</a></div>
              </div>
              <div class="col-lg-6 text-right" style="padding: 0">
                  <img src="<?php echo $native_path ?>/assets/images/acer.png" alt="" style="height: auto;" >
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6" style="margin:0; padding: 0">
          <div class="blog-posts" style="margin-left:10px !important; background: #282626;">
            <div class="row">
              <div class="col-lg-6 text-left popustitis" style="padding:50px;  padding-bottom: 0;   padding-top: 30px;">
                  <img src="<?php echo $native_path ?>/assets/images/bjelic-logo.png" alt="" style="height: 25px; width: auto; margin-top:20px;margin-bottom:20px;">
                  <a href="javascript:void(0);" onclick="openLightbox('popup-content3')" id="bjelic"><h3 style="color:#fff; font-weight: 900;">20% popusta</h3></a>
                  <p style="font-size: 16px; text-transform: uppercase; color: #C1C1C1;">na e-cigarete</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <div class="button"><a href="javascript:void(0);" onclick="openLightbox('popup-content3')" id="bjelic">PREUZMI KOD ZA POPUST</a></div>
                  <p style="font-size:12px; color: #fff; padding-top: 10px;">Namijenjeno isključivo osobama iznad 18 godina</p>
              </div>
              <div class="col-lg-6 text-right" style="padding: 0">
                  <img src="<?php echo $native_path ?>/assets/images/bjelicsl.png" alt="" style="height: auto;" >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div id="kviz" class="free-quote">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">

              <img src="<?php echo $native_path ?>/assets/images/fabu-logo.png" alt="" style="height: 30px; width: auto; margin-top:20px;">
                  <p>&nbsp;</p>
                  <a href="javascript:void(0);" onclick="openLightbox('popup-content2')" id="fabu"><h3 style="color:#fff; font-weight: 900;">20% popusta</h3></a>
                  <p style="font-size: 16px; text-transform: uppercase; color: #C1C1C1;">na gotovo sve</p>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                  <div class="button"><a href="javascript:void(0);" onclick="openLightbox('popup-content2')" id="fabu">PREUZMI KOD ZA POPUST</a></div>

          </div>
        </div>
      </div>
    </div>
  </div>



  <div id="" class="blog" style="margin-top: 0px !important; padding-top:50px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 show-up " >
          <div class="blog-post">
            <div class="thumb">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content7')" id="garden"><img src="<?php echo $native_path ?>/assets/images/beautygarden.png" alt=""></a>
            </div>
            <div class="down-content">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content7')" id="garden"><h3 style="color:#000; font-weight: 900;">15% popusta</h3></a>
              <p style="font-size: 16px; text-transform: uppercase;">na cijeli asortiman</p>
              <div class="button"><a href="javascript:void(0);" onclick="openLightbox('popup-content7')" id="garden">PREUZMI KOD ZA POPUST</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 show-up " >
          <div class="blog-post">
            <div class="thumb">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content8')" id="bonami"><img src="<?php echo $native_path ?>/assets/images/bonami.png" alt=""></a>
            </div>
            <div class="down-content">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content8')" id="bonami"><h3 style="color:#000; font-weight: 900;">15% popusta</h3></a>
              <p style="font-size: 16px; text-transform: uppercase;">na sve proizvode</p>
              <div class="button"><a href="javascript:void(0);" onclick="openLightbox('popup-content8')" id="bonami">PREUZMI KOD ZA POPUST</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 show-up " >
          <div class="blog-post">
            <div class="thumb">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content9')" id="bijelatehnika"><img src="<?php echo $native_path ?>/assets/images/bijelatehnika.png" alt=""></a>
            </div>
            <div class="down-content">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content9')" id="bijelatehnika"><h3 style="color:#000; font-weight: 900;">30% popusta</h3></a>
              <p style="font-size: 16px; text-transform: uppercase;">na asortiman Ecovacs</p>
              <div class="button"><a href="javascript:void(0);" onclick="openLightbox('popup-content9')" id="bijelatehnika">PREUZMI KOD ZA POPUST</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 show-up " >
          <div class="blog-post">
            <div class="thumb">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content10')" id="rosalique"><img src="<?php echo $native_path ?>/assets/images/rosalique.png" alt=""></a>
            </div>
            <div class="down-content">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content10')" id="rosalique"><h3 style="color:#000; font-weight: 900;">15% popusta</h3></a>
              <p style="font-size: 16px; text-transform: uppercase;">na Rosalique kremu</p>
              <div class="button"><a href="javascript:void(0);" onclick="openLightbox('popup-content10')" id="rosalique">PREUZMI KOD ZA POPUST</a></div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 show-up " >
          <div class="blog-post">
            <div class="thumb">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content11')" id="mima"><img src="<?php echo $native_path ?>/assets/images/mimanamjestaj.png" alt=""></a>
            </div>
            <div class="down-content">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content11')" id="mima"><h3 style="color:#000; font-weight: 900;">30% popusta</h3></a>
              <p style="font-size: 16px; text-transform: uppercase;">na sve sjedeće garniture</p>
              <div class="button"><a href="javascript:void(0);" onclick="openLightbox('popup-content11')" id="mima">PREUZMI KOD ZA POPUST</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 show-up " >
          <div class="blog-post">
            <div class="thumb">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content12')" id="nuggela"><img src="<?php echo $native_path ?>/assets/images/nuggela.png" alt=""></a>
            </div>
            <div class="down-content">
              <a href="javascript:void(0);" onclick="openLightbox('popup-content12')"id="nuggela"><h3 style="color:#000; font-weight: 900;">15% popusta</h3></a>
              <p style="font-size: 16px; text-transform: uppercase;">na cijeli asortiman</p>
              <div class="button"><a href="javascript:void(0);" onclick="openLightbox('popup-content12')" id="nuggela">PREUZMI KOD ZA POPUST</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="sponsors" class="sponsors">
  <div class="container">

      <div class="row" style="margin-top: 50px;">

       <div class="col-lg-6 text-left wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.6s">
            <p>Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing prema uredničkim standardima Telegram Media Grupe.</p><br/><br/>
            <img style="max-width:186px; height: auto;" src="<?php echo $native_path ?>/assets/images/telegram.png"/>
            <br/><br/>
        </div>
      </div>
  </div>
  </div>

<!-- Hidden lightbox content -->
<div id="popup-content1" style="display: none;">
  <img src="<?php echo $native_path ?>/assets/images/skolskaknjiga.png"/>
  <div style="padding:30px;">
    <h3>10 % na izdanja Školske Knjige i Lumena</h3>
    <p>Popust se odnosi na sva izdanja Školske Knjige I Lumena osim udžbenika, radnih bilježnica i već sniženog.</p>
    <p style="font-size: 16px; text-transform: uppercase; padding-top: 30px;">Promo kod</p>
    <h1 style="font-weight:900; color:#da2127">SKOLSKAKNJIGA10</h1>
    <div class="buttonupopupu"><a href="https://shop.skolskaknjiga.hr/knjizare-skolske-knjige" target="_blank" id="sk-web">POGLEDAJ POSLOVNICE</a></div>
    <p style="font-size: 16px; padding-top: 30px;">Popust vrijedi do kraja rujna.</p>
  </div>
</div>

<!-- Hidden lightbox content -->
<div id="popup-content2" style="display: none;">
  <img src="<?php echo $native_path ?>/assets/images/fabu.png"/>
  <div style="padding:30px;">
    <h3>20% popusta na gotovo sve</h3>
    <p>popust se ne odnosi na već snižene proizvode te brendove Davines, Jo Malone London i La Mer.</p>
    <p style="font-size: 16px; text-transform: uppercase; padding-top: 30px;">Promo kod</p>
    <h1 style="font-weight:900; color:#da2127">fabulous20</h1>
    <div class="buttonupopupu"><a href="https://fabuspot.com/" target="_blank" id="fabu-web">POSJETITE STRANICU</a></div>
     <p style="font-size: 16px; padding-top: 30px;">Popust vrijedi do 27.8. do 3. 9.</p>
  </div>
</div>

<!-- Hidden lightbox content -->
<div id="popup-content3" style="display: none;">
  <img src="<?php echo $native_path ?>/assets/images/bjelic.png"/>
  <div style="padding:30px;">
    <h3>20% popusta</h3>
    <p>na e-cigarete</p>
    <p style="font-size: 16px; text-transform: uppercase; padding-top: 30px;">Promo kod</p>
    <h1 style="font-weight:900; color:#da2127">SuperELF</h1>
    <div class="buttonupopupu"><a href="https://venkon.hr/e-cigarete" target="_blank" id="elf-web">POSJETITE STRANICU</a></div>
    <p style="font-size: 16px; padding-top: 30px;">Namijenjeno isključivo osobama iznad 18 godina! Popust do 17.09.2023.</p>
  </div>
</div>

<!-- Hidden lightbox content -->
<div id="popup-content4" style="display: none;">
  <img src="<?php echo $native_path ?>/assets/images/amazinga.png"/>
  <div style="padding:30px;">
    <h3>10% popusta</h3>
    <p>na Amazinga Pack rođendan</p>
    <p style="font-size: 16px; text-transform: uppercase; padding-top: 30px;">Promo kod</p>
    <h1 style="font-weight:900; color:#da2127">AMAZINGA10</h1>
    <div class="buttonupopupu"><a href="https://amazinga.fun/rodendani/" target="_blank" id="amazinga-web">POSJETITE STRANICU</a></div>
    <p style="font-size: 16px; padding-top: 30px;">Popust vrijedi do kraja rujna.</p>
  </div>
</div>


<!-- Hidden lightbox content -->
<div id="popup-content5" style="display: none;">
  <img src="<?php echo $native_path ?>/assets/images/hervis.png"/>
  <div style="padding:30px;">
    <h3>10% popusta</h3>
    <p>na kupnju u internet trgovini</p>
    <p style="font-size: 16px; text-transform: uppercase; padding-top: 30px;">Promo kod</p>
    <h1 style="font-weight:900; color:#da2127">POPUST-10</h1>
    <div class="buttonupopupu"><a href="https://www.hervis.hr/shop/" target="_blank" id="hervis-web">POSJETITE STRANICU</a></div>
    <p style="font-size: 16px; padding-top: 30px;">Popust vrijedi od 25.8. do 03.09.2023. Popust se ne odnosi na električne bicikle, sportske satove i biciklistička računala</p>
  </div>
</div>

<!-- Hidden lightbox content -->
<div id="popup-content6" style="display: none;">
  <img src="<?php echo $native_path ?>/assets/images/bodyshop.png"/>
  <div style="padding:30px;">
    <h3>20% popusta</h3>
    <p>na artikle na punoj cijeni</p>
    <p style="font-size: 16px; text-transform: uppercase; padding-top: 30px;">Promo kod</p>
    <h1 style="font-weight:900; color:#da2127">SUPERTBS20</h1>
    <div class="buttonupopupu"><a href="https://www.thebodyshop.hr/" target="_blank" id="bs-web">POSJETITE STRANICU</a></div>
    <p style="font-size: 16px; padding-top: 30px;">Popust vrijedi od 25.8. do 15.9. u internet trgovini i na prodajnim mjestima Arena centar, Vice Vukova 6, 10000 Zagreb Bogovićeva 5, 10000 Zagreb</p>
  </div>
</div>

<!-- Hidden lightbox content -->
<div id="popup-content7" style="display: none;">
  <img src="<?php echo $native_path ?>/assets/images/beautygarden.png"/>
  <div style="padding:30px;">
    <h3>15% popusta</h3>
    <p>na cijeli asortiman, osim na pakete koji već imaju popust i na već snižene proizvode </p>
    <p style="font-size: 16px; text-transform: uppercase; padding-top: 30px;">Promo kod</p>
    <h1 style="font-weight:900; color:#da2127">BEAUTYGARDEN15</h1>
    <div class="buttonupopupu"><a href="https://beauty-garden.hr/" target="_blank" id="bg-web">POSJETITE STRANICU</a></div>
    <p style="font-size: 16px; padding-top: 30px;">Popust vrijedi do kraja rujna.</p>
  </div>
</div>

<!-- Hidden lightbox content -->
<div id="popup-content8" style="display: none;">
  <img src="<?php echo $native_path ?>/assets/images/bonami.png"/>
  <div style="padding:30px;">
    <h3>15% popusta</h3>
    <p>na sve proizvode</p>
    <p style="font-size: 16px; text-transform: uppercase; padding-top: 30px;">Promo kod</p>
    <h1 style="font-weight:900; color:#da2127">BONAMI15</h1>
    <div class="buttonupopupu"><a href="https://bonami.shop/Bonamihr-web" target="_blank" id="bonami-web">POSJETITE STRANICU</a></div>
    <p style="font-size: 16px; padding-top: 30px;">Popust vrijedi od 25.8. do 3.9.</p>
  </div>
</div>

<!-- Hidden lightbox content -->
<div id="popup-content9" style="display: none;">
  <img src="<?php echo $native_path ?>/assets/images/bijelatehnika.png"/>
  <div style="padding:30px;">
    <h3>30% popusta</h3>
    <p>na asortiman Ecovacs</p>
    <p style="font-size: 16px; text-transform: uppercase; padding-top: 30px;">Promo kod</p>
    <h1 style="font-weight:900; color:#da2127">ECOGRAM30</h1>
    <div class="buttonupopupu"><a href="https://bijela-tehnika.hr/ecovacs-345/479/" target="_blank" id="eco-web">POSJETITE STRANICU</a></div>
    <p style="font-size: 16px; padding-top: 30px;">Popust vrijedi od 25.8. do 03.09.2023.</p>
  </div>
</div>

<!-- Hidden lightbox content -->
<div id="popup-content10" style="display: none;">
  <img src="<?php echo $native_path ?>/assets/images/rosalique.png"/>
  <div style="padding:30px;">
    <h3>15% popusta</h3>
    <p>na Rosalique kremu </p>
    <p style="font-size: 16px; text-transform: uppercase; padding-top: 30px;">Promo kod</p>
    <h1 style="font-weight:900; color:#da2127">ROSALIQUE15</h1>
    <div class="buttonupopupu"><a href="https://rosalique.hr/" target="_blank" id="rosalique-web">POSJETITE STRANICU</a></div>
    <p style="font-size: 16px; padding-top: 30px;">Popust vrijedi do kraja rujna.</p>
  </div>
</div>

<!-- Hidden lightbox content -->
<div id="popup-content11" style="display: none;">
  <img src="<?php echo $native_path ?>/assets/images/mimanamjestaj.png"/>
  <div style="padding:30px;">
    <h3>30% popusta</h3>
    <p>na sve sjedeće garniture </p>
    <p style="font-size: 16px; text-transform: uppercase; padding-top: 30px;">Promo kod</p>
    <h1 style="font-weight:900; color:#da2127">TELEGRAM01</h1>
    <div class="buttonupopupu"><a href="https://namjestaj-mima.hr/" target="_blank" id="mima-web">POSJETITE STRANICU</a></div>
    <p style="font-size: 16px; padding-top: 30px;">Popust vrijedi do kraja rujna. Pogodnost je moguće iskoristiti i u Mima poslovnicama.</p>
  </div>
</div>

<!-- Hidden lightbox content -->
<div id="popup-content12" style="display: none;">
  <img src="<?php echo $native_path ?>/assets/images/nuggela.png"/>
  <div style="padding:30px;">
    <h3>15% popusta</h3>
    <p>na cijeli asortiman</p>
    <p style="font-size: 16px; text-transform: uppercase; padding-top: 30px;">Promo kod</p>
    <h1 style="font-weight:900; color:#da2127">NUGGELASULE15</h1>
    <div class="buttonupopupu"><a href="https://nuggelasule.hr/" target="_blank" id="nuggela-web">POSJETITE STRANICU</a></div>
    <p style="font-size: 16px; padding-top: 30px;">Popust vrijedi do kraja rujna.</p>
  </div>
</div>


<!-- Hidden lightbox content -->
<div id="popup-content13" style="display: none;">
  <img src="<?php echo $native_path ?>/assets/images/acermod.png"/>
  <div style="padding:30px;">
    <h3>Akcijska ponuda</h3>
    <p>na laptope</p>
    <p style="font-size: 16px; text-transform: uppercase; padding-top: 30px;">PROVJERITE PONUDU KOD NAŠIH PARTNERA</p>
    <p><a href="https://www.makromikrogrupa.hr/laptop-acer-aspire-5-amd-ryzen-3-5425u-16gb-512gb-ssd-dos-15-6-nx-k80ex-00h-b01" style="color:#000; font-weight: 700;" target="_blank">Makro Mikro Grupa</a></p>
    <p><a href="https://www.links.hr/hr/laptop-acer-aspire-5-nx-k80ex-00g-win-ryzen-3-5425u-8gb-512gb-ssd-amd-radeon-graphics-15-6-fhd-led-windows-11-pro-sivi-navlaka-i-mis-010101841" style="color:#000; font-weight: 700;" target="_blank">Links</a></p>
    <p><a href="https://www.hgspot.hr/laptop-acer-aspire-5-ryzen-3-5425u-16gb-512gb-ssd-amd-radeon-15-6-fhd-win-11-nx-k80ex-00m" style="color:#000; font-weight: 700;" target="_blank">HG Spot</a></p>

    <p style="font-size: 16px; padding-top: 30px;">Popust vrijedi do kraja rujna.</p>
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
  function trackButtonClick(buttonId) {

  }

  document.getElementById('bodyshop').addEventListener('click', function() {
    trackButtonClick('bodyshop');
  });

  document.getElementById('hervis').addEventListener('click', function() {
    trackButtonClick('hervis');
  });


  document.getElementById('skolskaknjiga').addEventListener('click', function() {
    trackButtonClick('skolskaknjiga');
  });


  document.getElementById('amazinga').addEventListener('click', function() {
    trackButtonClick('amazinga');
  });


  document.getElementById('acer').addEventListener('click', function() {
    trackButtonClick('acer');
  });

   document.getElementById('bjelic').addEventListener('click', function() {
    trackButtonClick('bjelic');
  });

   document.getElementById('fabu').addEventListener('click', function() {
    trackButtonClick('fabu');
  });

   document.getElementById('garden').addEventListener('click', function() {
    trackButtonClick('garden');
  });


   document.getElementById('bonami').addEventListener('click', function() {
    trackButtonClick('bonami');
  });

   document.getElementById('bijelatehnika').addEventListener('click', function() {
    trackButtonClick('bijelatehnika');
  });

   document.getElementById('rosalique').addEventListener('click', function() {
    trackButtonClick('rosalique');
  });

   document.getElementById('mima').addEventListener('click', function() {
    trackButtonClick('mima');
  });

    document.getElementById('nuggela').addEventListener('click', function() {
    trackButtonClick('nuggela');
  });
</script>
<?php wp_footer(); ?>
</body>
</html>
