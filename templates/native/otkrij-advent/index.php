
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/otkrij-advent';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>


<head>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap" rel="stylesheet">
    <style type="text/css">

        @-webkit-keyframes muving { 0% { bottom:0 } 50%{ bottom:15px } 100% { bottom:0px } }
        @keyframes muving { 0% { bottom:0 } 50%{ bottom:15px } 100% { bottom:0px } }


    </style>

    <link rel="stylesheet" href="https://use.typekit.net/ntk0fcy.css">
    <style>
        /* Definiraj osnovni container */
        #myContainer {
            width: 100%;
            background-image: url('<?php echo $native_path ?>/assets/images/back01.jpg');
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out; /* Glatki prijelaz */


        }

        .snow {
            z-index: 10;
            width: 100%;
            height: 100%;
            display: block;
            mix-blend-mode: screen;
            position: fixed;
            top: 0%;
            bottom: 0%;
            left: 0%;
            right: 0%;
            pointer-events: none;
        }

        .w-background-video > video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -100;
            background-position: 50%;
            background-size: cover;
            margin: auto;
            position: absolute;
            top: -100%;
            bottom: -100%;
            left: -100%;
            right: -100%;
        }

    </style>


    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css?v=09052025k">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">

</head>


<body data-spy="scroll" data-target="#myScrollspy" data-offset="15" class="pozadina">
<?php do_action('telegram_body_start'); ?>
  <!-- ***** Preloader Start ***** -->


  <nav class="sticky-nav">
    <ul>
      <li><a href="#zagrebacka-zupanija">TZ Zagrebačka županija</a></li>
      <li><a href="#osijek">TZ Osijek</a></li>
      <li><a href="#">TZ Makarska</a></li>
      <li><a href="#rovinj">TZ Rovinj</a></li>
      <li><a href="#dubrovnik">Dubrovnik Hotel Luxury Adriatic</a></li>
      <li><a href="#flixbus">FlixBus</a></li>
      <li><a href="#zagreb">Ledeni park i Advent Zrinjevac</a></li>
    </ul>
  </nav>


<iframe style="position: absolute;" id="video" width="0" height="0"
    src="https://www.youtube.com/embed/mng4p8yWFjs?autoplay=1&loop=1&mute=1&playlist=mng4p8yWFjs"
    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<!-- Button to control the video's mute state -->
<button id="toggleMuteButton" style="z-index:300000000; position: fixed; top:20px; right:20px; background: none; border: none;">
    <img id="buttonIcon" src="<?php echo $native_path ?>/assets/images/mute.png" alt="Mute Video" style="width: 32px; height: 32px;">
</button>

<script>
    const iframe = document.getElementById("video");
    const toggleMuteButton = document.getElementById("toggleMuteButton");
    const buttonIcon = document.getElementById("buttonIcon");

    // Function to toggle mute/unmute the video
    toggleMuteButton.addEventListener("click", function() {
        const iframeSrc = iframe.src;

        if (iframeSrc.includes("mute=1")) {
            // Unmute the video
            iframe.src = iframeSrc.replace("mute=1", "mute=0");
            buttonIcon.src = "<?php echo $native_path ?>/assets/images/unmute.png"; // Change the icon to unmute.png
            buttonIcon.alt = "Unmute Video"; // Update alt text
        } else {
            // Mute the video
            iframe.src = iframeSrc.replace("mute=0", "mute=1");
            buttonIcon.src = "<?php echo $native_path ?>/assets/images/mute.png"; // Change the icon to mute.png
            buttonIcon.alt = "Mute Video"; // Update alt text
        }
    });
</script>


<div class="snow">

  <div data-video-urls="https://telegram.reset.hr/advent-2024/video.mp4?=new" data-autoplay="true" data-loop="true" data-wf-ignore="true" style="opacity: 1; display: block;" class="snow w-background-video w-background-video-atom">
    <video id="video" autoplay loop muted playsinline data-wf-ignore="true" data-object-fit="cover" data-cmp-info="9">
      <source src="https://telegram.reset.hr/advent-2024/video.mp4?=new" data-wf-ignore="true" data-cmp-ab="2">
    </video>
  </div>
</div>


  <div class="blog hero" style="padding-bottom: 0px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
               <img src="<?php echo $native_path ?>/assets/images/claim.png" style="padding: 30px" />
        </div>

    </div>
    <div class="row">
          <div class="col-lg-12 p-0 text-center">
             <img src="<?php echo $native_path ?>/assets/images/strelica.png" style="width:80px; height:80px; position: relative; bottom:0; -webkit-animation: muving 2s ease-in-out 0s infinite; animation: muving 2s ease-in-out 0s infinite;">
             <img src="<?php echo $native_path ?>/assets/images/prijelaz.png"/>
          </div>
    </div>

  </div>
</div>


<div class="blog" style="background: url('<?php echo $native_path ?>/assets/images/back2.png'); background-size: 100% 100%;">
  <div class="container">


        <div class="row">
             <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
              <p class="uvodni">Otvaramo vrata najčarobnijih adventskih lokacija diljem Hrvatske. Kroz miris kuhanog vina, zvuke božićnih melodija i sjaja svjetlucavih ukrasa, istražujemo što čini svaki advent jedinstvenim kako biste iskusili doživljaje koji se pamte. <br/><br/>Okusite lokalne specijalitete, upoznajte srdačne domaćine i stvorite uspomene koje će trajati dugo i nakon što se blagdanska svjetla ugase. Advent u Hrvatskoj nikada nije bio ovako čaroban - otkrijte ga s nama.</p>
             </div>
        </div>
      </div>
</div>



<div id="zagrebacka-zupanija" class="blog" style="background: url('<?php echo $native_path ?>/assets/images/back.jpg'); background-size: 100% 100%;">
  <div class="container">

      <div class="row">
          <div class="col-lg-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <p class="sticky-top">
             <a href="#"><img src="<?php echo $native_path ?>/assets/images/adventska3.png" /></a>
           </p>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
              <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <h1 class="sakrij">Advent<br/>Zagrebačke županije</h1>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <p>Čarolija Božića proteže se od Zaprešića, Samobora, Svete Nedelje, Vrbovca, Jastrebarskog do Velike Gorice i Ivanić grada. Program Zagrebačke županije ima dovoljno lokacija da cijele blagdane provedete u istoj regiji. Uživajte u adventu koji će oduševiti i velike i male. </p>
                      <a href="https://www.telegram.hr/partneri/u-okolici-zagreba-cak-12-mjesta-ima-odlicnu-adventsku-ponudu-evo-sto-vas-ocekuje/" target="_blank"><button class="border-first-button">Otkrij advent u Zagrebačkoj županiji</button></a>
                      <a href="https://www.telegram.hr/super1/life/top-gastro-goodie-bag-prepun-je-neodoljivih-domacih-proizvoda-i-savrsen-je-poklon-pod-bor/" target="_blank"><button class="border-drugi-button">Otkrij jedinstvene poklone</button></a>
                     </div>
                  </div>

              </div>
          </div>
        </div>
      </div>
</div>

<div class="blog" style="padding-bottom: 0; padding-top: 0;">
  <div class="container-fluid">

      <div class="row p-0">
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/zag-zup/01.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/zag-zup/02.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/zag-zup/03.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/zag-zup/04.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/zag-zup/05.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/zag-zup/06.jpg" />
          </div>
        </div>
      </div>
</div>


<div class="blog" style="background: url('<?php echo $native_path ?>/assets/images/back2.png'); background-size: 100% 100%;">
  <div class="container-fluid p-0">


          <div class="scroll-section">
            <button class="scroll-button left-button">←</button>
            <div class="scroll-container">
              <div class="content-box"><a href="https://www.telegram.hr/partneri/vikend-provodimo-u-samoboru-i-svetoj-nedelji-izdvojili-smo-atrakcije-ovog-adventa/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/samobor.png" /></a></div>
              <div class="content-box"><a href="https://www.telegram.hr/partneri/vikend-provodimo-u-samoboru-i-svetoj-nedelji-izdvojili-smo-atrakcije-ovog-adventa/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/sv-nedelja.png" /></a></div>
              <div class="content-box"><a href="https://www.telegram.hr/partneri/donosimo-10-razloga-zasto-ovog-adventa-morate-posjetiti-veliku-goricu/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/v-gorica.png" /></a></div>
              <div class="content-box"><a href="#" target="_blank"><img src="<?php echo $native_path ?>/assets/images/zapresic.png" /></a></div>
              <div class="content-box"><a href="https://www.telegram.hr/partneri/vikend-provodimo-u-samoboru-i-svetoj-nedelji-izdvojili-smo-atrakcije-ovog-adventa/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/samobor.png" /></a></div>
              <div class="content-box"><a href="https://www.telegram.hr/partneri/vikend-provodimo-u-samoboru-i-svetoj-nedelji-izdvojili-smo-atrakcije-ovog-adventa/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/sv-nedelja.png" /></a></div>
              <div class="content-box"><a href="#" target="_blank"><img src="<?php echo $native_path ?>/assets/images/v-gorica.png" /></a></div>
              <div class="content-box"><a href="#" target="_blank"><img src="<?php echo $native_path ?>/assets/images/zapresic.png" /></a></div>
            </div>
            <button class="scroll-button right-button">→</button>
          </div>


  </div>
</div>



<div id="osijek" class="blog" style="background: url('<?php echo $native_path ?>/assets/images/back.jpg'); background-size: 100% 100%;">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 order-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
             <img src="<?php echo $native_path ?>/assets/images/adventska2.png" style="z-index:1 !important" />
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
              <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <h1 class="sakrij">Advent u Osijeku</h1>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <p>Osijek već nosi naziv grada ‘po mjeri čovjeka’, a takav je i ovogodišnji program adventa. Na Trgu sv. Trojstva u srcu Tvrđe očekuje vas pregršt tradicionalnih zalogaja, a bogat glazbeni program zadovoljit će ljubitelje svih žanrova. Otkrijte Advent u Osijeku kroz gostoprimstvo srdačnih domaćina. </p>
                      <a href="https://www.telegram.hr/partneri/ovaj-hrvatski-grad-ima-ozbiljno-dobar-advent-evo-zasto-biste-se-u-prosincu-trebali-zaputiti-u-slavoniju/" target="_blank"><button class="border-first-button">Otkrij advent u Osijeku</button></a>
                     </div>
                </div>
              </div>
          </div>
        </div>

      </div>
</div>


<div class="blog" style="padding-bottom: 0; padding-top: 0;">
  <div class="container-fluid">

      <div class="row p-0">
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/os/os01.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/os/os02.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/os/os03.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/os/os04.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/os/os05.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/os/os06.jpg" />
          </div>
        </div>
      </div>
</div>



<div id="zagreb" class="blog" style="background: url('<?php echo $native_path ?>/assets/images/back2.png'); background-size: 100% 100%;">
  <div class="container">

      <div class="row">
          <div class="col-lg-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
             <a href="#"><img src="<?php echo $native_path ?>/assets/images/adventska1.png" /></a>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
              <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <h1 class="sakrij">Ledeni park i<br/>Advent Zrinjevac</h1>
                    </div>
                  </div>
                  <div class="row">
                       <div class="col-lg-12 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <p>Ledeni park na Trgu kralja Tomislava ove godine slavi jubilarnu 10. obljetnicu, a sve posjetitelje očekuje bogata ugostiteljska ponuda, novi suvenir shop te brojne kreativne radionice za djecu. Nakon klizanja uputite se na Zrinjevac gdje možete zaplesati uz čak dva koncerta uživo dnevno. </p>
                        <button class="border-first-button">Otkrij advent u Zagrebu</button>
                       </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
</div>


<div class="blog" style="padding-bottom: 0; padding-top: 0;">
  <div class="container-fluid">

      <div class="row p-0">
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/zg/01.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/zg/02.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/zg/03.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/zg/04.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/zg/05.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/zg/06.jpg" />
          </div>
        </div>
      </div>
</div>


<div id="rovinj" class="blog" style="background: url('<?php echo $native_path ?>/assets/images/back.jpg'); background-size: 100% 100%;">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 order-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
             <img src="<?php echo $native_path ?>/assets/images/rovinj.png" style="z-index:1 !important" />
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
              <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <h1 class="sakrij">Advent u Rovinju</h1>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <p>Doživite čaroliju blagdana na moru uz vrhunski program i gostoljubivost domaćina u Rovinju. Posjetite ukrašenu rivu, otkrijte što je to rovinjska batana te zaplešite uz brojne koncerte. Ako još uvijek nemate planove, doček 2025. uz more uvijek je dobra ideja, a u Rovinju Vas čeka koncert grupe Parni valjak. </p>
                      <a href="https://www.telegram.hr/partneri/carolija-adventa-u-rovinju-glazbeni-spektakl-uz-vise-od-30-koncerata/" target="_blank"><button class="border-first-button">Otkrij advent u Rovinju</button></a>
                     </div>
                </div>
              </div>
          </div>
        </div>

      </div>
</div>


<div class="blog" style="padding-bottom: 0; padding-top: 0;">
  <div class="container-fluid">

      <div class="row p-0">
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/ro/01.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/ro/02.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/ro/03.jpg" />
          </div>

        </div>
      </div>
</div>



<div id="dubrovnik" class="blog" style="background: url('<?php echo $native_path ?>/assets/images/back2.png'); background-size: 100% 100%;">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
             <img src="<?php echo $native_path ?>/assets/images/dubrovnik.png" style="z-index:1 !important" />
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
              <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <h1 class="sakrij">Dubrovnik Hotel Luxury Adriatic </h1>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <p>Advent u Jadranskim luksuznim hotelima trajat će sve do 6. siječnja 2025. Za ovu prigodu, Hotel Excelsior i Hotel Dubrovnik Palace pripremili su bogat izbor slastica, slanih delicija, zimskih koktela i adventske kave, stvarajući savršen ugođaj za sve posjetitelje.</p>
                      <a href="https://www.telegram.hr/partneri/advent-u-alh-jadranski-luksuzni-hoteli-najavljuju-adventski-program-u-dubrovackim-hotelima-excelsior-i-dubrovnik-palace/" target="_blank"><button class="border-first-button">Otkrij advent u Dubrovniku </button></a>
                     </div>
                </div>
              </div>
          </div>
        </div>

      </div>
</div>


<div class="blog" style="padding-bottom: 0; padding-top: 0;">
  <div class="container-fluid">

      <div class="row p-0">
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/du/01.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/du/02.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/du/03.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/du/04.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/du/05.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/du/06.jpg" />
          </div>
        </div>
      </div>
</div>


<div id="flixbus" class="blog" style="background: url('<?php echo $native_path ?>/assets/images/back.jpg'); background-size: 100% 100%;">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 order-lg-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
             <img src="<?php echo $native_path ?>/assets/images/flixbus.png" style="z-index:1 !important" />
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
              <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <h1 class="sakrij">FlixBus</h1>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <p>Do svakog čarobnog kutka Hrvatske otputovati možete bezbrižno uz FlixBus. Otkrijte advent uz široku ponudu brzih i pristupačnih putovanja za koje karte možete kupiti jednostavno i brzo putem aplikacije ili weba. Putovanje nikad nije bilo jednostavnije, a destinacije još bolje.  </p>
                      <a href="https://www.telegram.hr/partneri/top-lista-lokacija-u-hrvatskoj-znamo-gdje-se-kriju-najsladi-bozicni-sajmovi-koje-ne-smijete-propustiti/" target="_blank"><button class="border-first-button">Najslađi Božićni sajmovi</button></a>
                     </div>
                </div>
              </div>
          </div>
        </div>

      </div>
</div>


<div class="blog" style="padding-bottom: 0; padding-top: 0;">
  <div class="container-fluid">

      <div class="row p-0">
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/flixbus/01.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/flixbus/02.jpg" />
          </div>
          <div class="col-lg-4 p-0">
              <img src="<?php echo $native_path ?>/assets/images/flixbus/03.jpg" />
          </div>

        </div>
      </div>
</div>



  <div id="clanci" class="blog" style="z-index: 1; position: relative; padding-bottom: 120px; overflow: hidden; background: url('<?php echo $native_path ?>/assets/images/back.jpg'); background-size: 100% 100%;">


    <div class="container-fluid wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
              <p style="color:#164982">Autorice tekstova: Ana Šoda i Monika Bončina<br/>
                Kreativno vodstvo: Kristina Livaja<br/>
                Grafičko oblikovanje: Reset</p>
                <p><span style="font-weight: 900;">Generalni sponzor projekta:</span><br/><img src="<?php echo $native_path ?>/assets/images/generalni.png" style="max-width: 186px;"  /></p>
                <p><span style="font-weight: 900;">Projekt podržali:</span><br/><img src="<?php echo $native_path ?>/assets/images/podrska.png" style="max-width: 240px;"  /></p>
              <p style="color:#164982">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/telegram.png" style="max-width: 186px;"  />
          </div>
        </div>
      </div>
  </div>


    <div id="img1" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/zag-zup/01.jpg" alt="Image 1">
    </div>
    <div id="img2" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/zag-zup/02.jpg" alt="Image 2">
    </div>
    <div id="img3" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/zag-zup/03.jpg" alt="Image 3">
    </div>
    <div id="img4" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/zag-zup/04.jpg" alt="Image 1">
    </div>
    <div id="img5" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/zag-zup/05.jpg" alt="Image 2">
    </div>
    <div id="img6" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/zag-zup/06.jpg" alt="Image 3">
    </div>


    <div id="img7" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/os/os01.jpg" alt="Image 1">
    </div>
    <div id="img8" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/os/os02.jpg" alt="Image 2">
    </div>
    <div id="img9" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/os/os03.jpg" alt="Image 3">
    </div>
    <div id="img10" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/os/os04.jpg" alt="Image 1">
    </div>
    <div id="img11" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/os/os05.jpg" alt="Image 2">
    </div>
    <div id="img12" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/os/os06.jpg" alt="Image 3">
    </div>


    <div id="img13" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/zg/01.jpg" alt="Image 1">
    </div>
    <div id="img14" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/zg/02.jpg" alt="Image 2">
    </div>
    <div id="img15" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/zg/03.jpg" alt="Image 3">
    </div>
    <div id="img16" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/zg/04.jpg" alt="Image 1">
    </div>
    <div id="img17" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/zg/05.jpg" alt="Image 2">
    </div>
    <div id="img18" class="lightbox">
        <a href="javascript:void(0)" class="close">&times;</a>
        <img src="<?php echo $native_path ?>/assets/images/zg/06.jpg" alt="Image 3">
    </div>

    <script>
        // Selektiranje svih slika u galeriji
        const images = document.querySelectorAll('.gallery img');
        const lightboxes = document.querySelectorAll('.lightbox');

        // Dodavanje klik događaja za otvaranje lightboxa
        images.forEach(image => {
            image.addEventListener('click', () => {
                const targetId = image.getAttribute('data-target');
                const lightbox = document.getElementById(targetId);
                lightbox.classList.add('active');
            });
        });

        // Dodavanje klik događaja za zatvaranje lightboxa
        lightboxes.forEach(lightbox => {
            const closeBtn = lightbox.querySelector('.close');
            closeBtn.addEventListener('click', () => {
                lightbox.classList.remove('active');
            });
        });
    </script>


<script>
  const scrollContainer = document.querySelector('.scroll-container');
  const leftButton = document.querySelector('.left-button');
  const rightButton = document.querySelector('.right-button');

  // Dohvati širinu jedne slike (content-box uključujući marginu)
  const contentBoxWidth = document.querySelector('.content-box').offsetWidth + 20; // Dodaj margin-right
  const totalContentWidth = scrollContainer.scrollWidth; // Ukupna širina sadržaja
  const containerVisibleWidth = scrollContainer.offsetWidth; // Vidljivi dio kontejnera

  rightButton.addEventListener('click', () => {
    const currentScrollPosition = scrollContainer.scrollLeft;

    // Ako je zadnja slika prikazana, resetiraj na prvu
    if (currentScrollPosition + containerVisibleWidth >= totalContentWidth) {
      scrollContainer.scrollTo({ left: 0, behavior: 'smooth' });
    } else {
      scrollContainer.scrollBy({ left: contentBoxWidth, behavior: 'smooth' });
    }
  });

  leftButton.addEventListener('click', () => {
    const currentScrollPosition = scrollContainer.scrollLeft;

    // Ako je prva slika prikazana, idi na zadnju
    if (currentScrollPosition <= 0) {
      scrollContainer.scrollTo({ left: totalContentWidth - containerVisibleWidth, behavior: 'smooth' });
    } else {
      scrollContainer.scrollBy({ left: -contentBoxWidth, behavior: 'smooth' });
    }
  });
</script>


<script>
    let currentBackground = 1;

    function changeBackgroundImage() {
        const container = document.getElementById("myContainer");

        // Provjera koja slika je trenutno postavljena, te se mijenja u drugu
        if (currentBackground === 1) {
            container.style.backgroundImage = "url('<?php echo $native_path ?>/assets/images/back02.jpg')";
            currentBackground = 2;
        } else {
            container.style.backgroundImage = "url('<?php echo $native_path ?>/assets/images/back01.jpg')";
            currentBackground = 1;
        }
    }

    // Postavi interval za mijenjanje svake 3 sekunde
    setInterval(changeBackgroundImage, 3000);
</script>

  <script type="text/javascript">
      const images = ["<?php echo $native_path ?>/assets/images/01.jpg", "<?php echo $native_path ?>/assets/images/02.jpg"];
      let currentImageIndex = 0;
      const imageElement = document.querySelector(".image-gallery img");


      function updateImage() {
        const imageUrl = images[currentImageIndex];
        imageElement.style.opacity = 0; // Postavite opacity na 0 prije promjene slike
        setTimeout(() => {
          imageElement.src = imageUrl;
          imageElement.alt = `Slika ${currentImageIndex + 1}`;
          imageElement.style.opacity = 1; // Postavite opacity na 1 nakon promjene slike
        }, 500); // Promijenite 1000 ms na željeni vremenski interval za tranziciju
      }

      function showNextImage() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        updateImage();
      }

      // Postavite interval za automatsko klizanje svakih 3 sekunde (3000 ms)
      setInterval(showNextImage, 4000);

      // Inicijalno postavljanje slike
      updateImage();
  </script>
  <!-- Scripts -->
  <script src="<?php echo $native_path ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $native_path ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/owl-carousel.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/animation.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/imagesloaded.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/custom.js"></script>
  <script src="<?php echo $native_path ?>/assets/js/script.js"></script>

    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>


</body>
</html>
