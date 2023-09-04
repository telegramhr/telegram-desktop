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
              <li class="scroll-to-section"><a href="#top" class="active">Naslovnica</a></li>
              <li class="scroll-to-section"><a href="#infografike">Infografike</a></li>
              <li class="scroll-to-section"><a href="#kviz">Kviz</a></li>
              <li class="scroll-to-section"><a href="#clanci">Članci</a></li>
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

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>Telegram predstavlja</h6>
                    <h2>6. zelena ličnost</h2>
                    <p>Svaka odluka koju donesemo odraz je naše osobnosti. Volimo li promjene, jesmo li otvoreni novim idejama, koliko nam je važna vlastita a koliko tuđa dobrobit - samo su neke od stvari opisane s 5 velikih osobnosti. A mi ti danas predstavljamo šestu - zelenu ličnost. Otkrij tko si u svijetu održivosti.</p>
                    <p>Riješi naš kratki test ličnosti i otkrij svoju šestu zelenu ličnost.</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="https://www.telegram.hr/native/sesta-zelena-licnost/test-licnosti">TEST LIČNOSTI</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?php echo $native_path ?>/assets/images/slider-dec.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="blog" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 show-up prednost wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a href="https://www.telegram.hr/biznis-tech/od-usisavaca-smoga-do-papira-izradenog-od-kamena-pronasli-smo-osam-genijalnih-ekoloskih-inovacija/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/offgridbox.webp" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Priroda</span>
              <a href="https://www.telegram.hr/biznis-tech/od-usisavaca-smoga-do-papira-izradenog-od-kamena-pronasli-smo-osam-genijalnih-ekoloskih-inovacija/" target="_blank"><h4>Od usisavača smoga do papira izrađenog od kamena. Pronašli smo osam genijalnih ekoloških inovacija</h4></a>
              <p>Zaštita okoliša i održivost nikada nisu bili važniji. Iz dana u dan svjedoci smo posljedica klimatskih promjena pa osviještenost globalne populacije kontinuirano raste. Tomu svjedoče i rezultati istraživanja koji pokazuju da polovica globalnih potrošača svrstava održivost među pet najvećih pokretača vrijednosti.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/zivot/prosle-godine-prodano-je-10-milijuna-elektricnih-vozila-istrazili-smo-tko-ima-najveci-vozni-park-u-hrvatskoj/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/paketomat-postar-small.webp" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Ljudi</span>
                    <a href="https://www.telegram.hr/zivot/prosle-godine-prodano-je-10-milijuna-elektricnih-vozila-istrazili-smo-tko-ima-najveci-vozni-park-u-hrvatskoj/" target="_blank"><h4>Prošle godine prodano je 10 milijuna električnih vozila. Istražili smo tko ima najveći vozni park u Hrvatskoj</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/zivot/prosle-godine-prodano-je-10-milijuna-elektricnih-vozila-istrazili-smo-tko-ima-najveci-vozni-park-u-hrvatskoj/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/juice-yx-bmnafcje-unsplash_small.webp" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Energija</span>
                    <a href="https://www.telegram.hr/zivot/prosle-godine-prodano-je-10-milijuna-elektricnih-vozila-istrazili-smo-tko-ima-najveci-vozni-park-u-hrvatskoj/" target="_blank"><h4>Prošle godine prodano je 10 milijuna električnih vozila. Istražili smo tko ima najveći vozni park u Hrvatskoj</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/partneri/izgleda-da-ima-nade-10-pozitivnih-stvari-za-nas-planet-koje-su-se-dogodile-u-prvoj-polovici-godine/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/promjene_small.webp" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Priroda</span>
                    <a href="https://www.telegram.hr/partneri/izgleda-da-ima-nade-10-pozitivnih-stvari-za-nas-planet-koje-su-se-dogodile-u-prvoj-polovici-godine/" target="_blank"><h4>Izgleda da ima nade: 10 pozitivnih stvari za naš planet koje su se dogodile u prvoj polovici godine</h4></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="infografike" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>INFOGRAFIKE</h6>
            <h4>Brojevi koje <em>trebaš znati</em></h4>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12"  style="padding-bottom: 80px !important;">
          <div class="loop owl-carousel">
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $native_path ?>/assets/images/infografika-1.jpg" alt="">
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $native_path ?>/assets/images/infografika-2.jpg" alt="">
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $native_path ?>/assets/images/infografika-3.jpg" alt="">
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $native_path ?>/assets/images/infografika-4.jpg" alt="">
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $native_path ?>/assets/images/infografika-5.jpg" alt="">
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $native_path ?>/assets/images/infografika-6.jpg" alt="">
                </div>
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


                <div class="quiz-container">
                  <h2>Poznaješ li dobro svijet ekologije?</h2>
                  <button onclick="startQuiz()">Zaigraj kviz</button>

                  <div id="quiz-content" style="display: none;">
                  <form id="quiz-form">
                    <div id="question-1" class="question">
                      <h3>1. Potražnja za solarnom energijom u Hrvatskoj je unatrag godinu dana porasla za 300 posto. Na distribucijsku mrežu su priključene:</h3>
                      <div class="options">
                        <input type="radio" name="q1" value="a"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> a) 9.053 sunčane elektrane</span><br>
                        <input type="radio" name="q1" value="b"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> b) 8.632 sunčane elektrane</span><br>
                        <input type="radio" name="q1" value="c"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> c) 10.693 sunčane elektrane</span><br>
                      </div>
                      <button type="button" onclick="nextQuestion()">Dalje</button>
                    </div>

                    <div id="question-2" class="question">
                      <h3>2. Jedna europska država ima plan do 2025. postati ugljično neutralna u pogledu automobila. Lani je imala udio novokupljenih električnih automobila od gotovo 90 posto. Riječ je o:</h3>
                      <div class="options">
                        <input type="radio" name="q2" value="a"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> a) Španjolskoj</span><br>
                        <input type="radio" name="q2" value="b"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> b) Norveškoj</span><br>
                        <input type="radio" name="q2" value="c"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> c) Švicarskoj</span><br>
                      </div>
                      <button type="button" onclick="nextQuestion()">Dalje</button>
                    </div>

                    <div id="question-3" class="question">
                      <h3>3. U Europi prosječno se proizvede 486 kilograma komunalnog otpada po glavi stanovnika u godini dana. Najmanje otpada reciklira Srbija – tek jedan posto, a najvišu stopu recikliranja od skoro 70 posto ima:</h3>
                      <div class="options">
                        <input type="radio" name="q3" value="a"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> a) Slovenija</span><br>
                        <input type="radio" name="q3" value="b"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> b) Estonija</span><br>
                        <input type="radio" name="q3" value="c"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> c) Njemačka</span><br>
                      </div>
                      <button type="button" onclick="nextQuestion()">Dalje</button>
                    </div>
                    <!-- Repeat the above structure for the remaining questions -->

                    <div id="question-4" class="question">
                      <h3>4. Hrvati čuvaju pet milijuna starih mobitela po ladicama, a mogli bi ih reciklirati jer sadrže vrijedne sirovine. Koliko posto materijala u mobilnim telefonima se može reciklirati?</h3>
                      <div class="options">
                        <input type="radio" name="q4" value="a"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> a) 100 %</span><br>
                        <input type="radio" name="q4" value="b"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> b) 90 %</span><br>
                        <input type="radio" name="q4" value="c"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> c) 80 %</span><br>
                      </div>
                      <button type="button" onclick="nextQuestion()">Dalje</button>
                    </div>
                    <!-- Repeat the above structure for the remaining questions -->

                    <div id="question-5" class="question">
                      <h3>5. Ulaganje u održivost u sportskoj industriji jedna je od tema o kojoj se često raspravlja u javnom prostoru. Naime, brojke pokazuju da su Olimpijske igre u Riju 2016. godine proizvele 4,5 milijuna tona CO2, dok je Svjetsko prvenstvo u nogometu u Kataru 2022. godine proizvelo:</h3>
                      <div class="options">
                        <input type="radio" name="q5" value="a"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> a) 3,6 milijuna tona</span><br>
                        <input type="radio" name="q5" value="b"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> b) 5,5 milijuna tona</span><br>
                        <input type="radio" name="q5" value="c"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> c) 6,2 milijuna tona</span><br>
                      </div>
                      <button type="button" onclick="nextQuestion()">Dalje</button>
                    </div>
                    <!-- Repeat the above structure for the remaining questions -->

                    <div id="question-6" class="question">
                      <h3>6. Modna industrija je jedan od najvećih zagađivača okoliša. Proizvodnja tekstila odgovorna je za oko 20% globalnog onečišćenja čiste vode i 10% emisija ugljika godišnje. Zato se potražnja za održivim komadima u Hrvatskoj lani u odnosnu na godinu prije povećala za:</h3>
                      <div class="options">
                        <input type="radio" name="q6" value="a"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> a) 37 %</span><br>
                        <input type="radio" name="q6" value="b"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> b) 50 %</span><br>
                        <input type="radio" name="q6" value="c"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> c) 94 %</span><br>
                      </div>
                      <button type="button" onclick="nextQuestion()">Dalje</button>
                    </div>

                    <div id="question-7" class="question">
                      <h3>7. Europska unija se Pariškim sporazumom do 2030. godine obvezala smanjiti emisije stakleničkih plinova za najmanje 55 % i da se globalno zagrijavanje ograniči na 1,5 stupnjeva. Među državama koje provode najkorisnije mjere za ostvarivanje ciljeva su:</h3>
                      <div class="options">
                        <input type="radio" name="q7" value="a"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> a) Hrvatska i Cipar</span><br>
                        <input type="radio" name="q7" value="b"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> b) Estonija i Latvija</span><br>
                        <input type="radio" name="q7" value="c"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> c) Luksemburg i Belgija</span><br>
                      </div>
                      <button type="button" onclick="nextQuestion()">Dalje</button>
                    </div>

                    <div id="question-8" class="question">
                      <h3>8. Osam zemalja svijeta je dosad postiglo nultu emisiju stakleničkih plinova. To su Butan, Madagaskar, Komori, Gabon, Gvajana, Niue, Surinam i:</h3>
                      <div class="options">
                        <input type="radio" name="q8" value="a"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> a) Monako</span><br>
                        <input type="radio" name="q8" value="b"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> b) Panama</span><br>
                        <input type="radio" name="q8" value="c"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> c) Tuvalu</span><br>
                      </div>
                      <button type="button" onclick="nextQuestion()">Dalje</button>
                    </div>

                    <div id="question-9" class="question">
                      <h3>9. Učenje o održivosti se pokušava sve više implementirati u sustav obrazovanja. Prva zemlja u Europi koja je u klimatsku krizu uključila u školski kurikulum 2019. godine bila je:</h3>
                      <div class="options">
                        <input type="radio" name="q9" value="a"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> a) Njemačka</span><br>
                        <input type="radio" name="q9" value="b"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> b) Francuska</span><br>
                        <input type="radio" name="q9" value="c"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> c) Italija</span><br>
                      </div>
                      <button type="button" onclick="nextQuestion()">Dalje</button>
                    </div>

                    <div id="question-10" class="question">
                      <h3>10. Dan planeta Zemlje se u svijetu obilježava 22. travnja, službeno od 1992. godine. Mi smo ga počeli organizirano obilježavati:</h3>
                      <div class="options">
                        <input type="radio" name="q10" value="a"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> a) 2000. godine</span><br>
                        <input type="radio" name="q10" value="b"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> b) 1995. godine</span><br>
                        <input type="radio" name="q10" value="c"><span class="radio-label" style="margin-left: 10px; margin-top: 0px;"> c) 1990. godine</span><br>
                      </div>
                      <button type="submit">Odgovori</button>
                    </div>
                  </form>

                  <div id="results" style="display: none;">
                    <h2 id="score"></h2>
                    <div id="message" class="message"></div>
                     <div class="border-first-button scroll-to-section">
                        <a href="/index.php#kviz">ZAIGRAJ PONOVNO</a>
                      </div>
                  </div>
                </div>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>


  <div id="clanci" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>ČLANCI</h6>
            <h4>Još malo <em>zanimljivog sadržaja</em></h4>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
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
        <div class="col-lg-4 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="blog-post">
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
        <div class="col-lg-4 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="blog-post">
            <div class="thumb">
              <a href="https://www.telegram.hr/zivot/klimatolozi-zabrinuti-izasli-preliminarni-podaci-za-lipanj-ovo-sto-se-dogada-nije-uobicajeno-a-el-nino-se-tek-ocekuje/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/klimatolozi-zabrinuti.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Klima</span>
              <a href="https://www.telegram.hr/zivot/klimatolozi-zabrinuti-izasli-preliminarni-podaci-za-lipanj-ovo-sto-se-dogada-nije-uobicajeno-a-el-nino-se-tek-ocekuje/" target="_blank"><h4>Klimatolozi izrazito zabrinuti, izašli preliminarni podaci za lipanj: 'Ovo što se sada događa nije nimalo uobičajeno'</h4></a>
              <p>Temperature diljem svijeta ovoga su se mjeseca popele na rekordne razine što ukazuje na klimatsku krizu uoči El Nina...</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    <div id="news" class="news">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/partneri/blizi-se-dan-ekoloskog-duga-ali-hrvatska-je-svoj-odavno-presisala-evo-kako-osigurati-da-nam-jedna-zemlja-bude-dovoljna/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/shutterstock-2055681092_small.webp" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Priroda</span>
                    <a href="https://www.telegram.hr/partneri/blizi-se-dan-ekoloskog-duga-ali-hrvatska-je-svoj-odavno-presisala-evo-kako-osigurati-da-nam-jedna-zemlja-bude-dovoljna/" target="_blank"><h4>Bliži se Dan ekološkog duga, ali Hrvatska je svoj odavno prešišala. Evo kako osigurati da nam...</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/super1/look/gdje-pronaci-savrsen-par-odrzivih-traperica-ovi-brendovi-rade-najbolje-na-svijetu/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/gdje-pronaci.jpeg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Moda</span>
                    <a href="https://www.telegram.hr/super1/look/gdje-pronaci-savrsen-par-odrzivih-traperica-ovi-brendovi-rade-najbolje-na-svijetu/" target="_blank"><h4>S1 izbor Gdje pronaći savršen par održivih traperica? Ovi brendovi rade najbolje na svijetu</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/zivot/jadransko-more-suocava-se-s-ekoloskom-krizom-imamo-fotografije-koje-to-dokazuju/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/jadransko-more.jpeg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Priroda</span>
                    <a href="https://www.telegram.hr/zivot/jadransko-more-suocava-se-s-ekoloskom-krizom-imamo-fotografije-koje-to-dokazuju/" target="_blank"><h4>Jadransko more suočava se s ekološkom krizom. Imamo fotografije koje to dokazuju</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/zivot/ugrozili-smo-mediteransku-vrstu-koja-u-danu-proizvede-do-20-litara-kisika-ova-inicijativa-pokusava-je-spasiti/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/more-square.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Priroda</span>
                    <a href="https://www.telegram.hr/zivot/ugrozili-smo-mediteransku-vrstu-koja-u-danu-proizvede-do-20-litara-kisika-ova-inicijativa-pokusava-je-spasiti/" target="_blank"><h4>Ugrozili smo mediteransku vrstu koja u danu proizvede do 20 litara kisika. Ova inicijativa pokušava je spasiti</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/zivot/hrvatska-bi-ove-godine-mogla-postaviti-novi-rekord-po-broju-instaliranih-solarnih-elektrana-ustede-su-neupitne/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/rekord-hr.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Energija</span>
                    <a href="https://www.telegram.hr/zivot/hrvatska-bi-ove-godine-mogla-postaviti-novi-rekord-po-broju-instaliranih-solarnih-elektrana-ustede-su-neupitne/" target="_blank"><h4>Hrvatska bi ove godine mogla postaviti novi rekord po broju instaliranih solarnih elektrana</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/zivot/ako-nastavimo-ovim-tempom-do-2035-ce-s-debljinom-zivjeti-polovica-hrvata-vrijeme-je-za-promjene/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/ako-nastavimo.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Zdravlje</span>
                    <a href="https://www.telegram.hr/zivot/ako-nastavimo-ovim-tempom-do-2035-ce-s-debljinom-zivjeti-polovica-hrvata-vrijeme-je-za-promjene/" target="_blank"><h4>Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</h4></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/super1/power/pricu-oko-otpada-i-ekologije-ucinila-je-razumljivom-svima-vise-od-11-tisuca-ljudi-su-zbog-nje-bolji-gradani/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/pricu-oko-otpada.jpeg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Ljudi</span>
                    <a href="https://www.telegram.hr/super1/power/pricu-oko-otpada-i-ekologije-ucinila-je-razumljivom-svima-vise-od-11-tisuca-ljudi-su-zbog-nje-bolji-gradani/" target="_blank"><h4>Super1 intervju Priču oko otpada i ekologije učinila je razumljivom svima. Više od 11 tisuća...</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/biznis-tech/sto-kad-eu-naredi-da-kupujemo-nove-elektricne-aute-kina-ce-postati-lider-na-cestama-bismo-svi-mogli-imati-isti-problem/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/sto-kad-eu-naredi.jpeg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Energija</span>
                    <a href="https://www.telegram.hr/biznis-tech/sto-kad-eu-naredi-da-kupujemo-nove-elektricne-aute-kina-ce-postati-lider-na-cestama-bismo-svi-mogli-imati-isti-problem/" target="_blank"><h4>Što kad EU naredi da kupujemo samo nove, električne aute? Kina će postati lider, na cestama...</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/super1/life/godisnje-skupimo-11-kilograma-nepotrebne-odjece-svoju-smo-natrpale-u-5-velikih-vreca-i-pridruzile-se-genijalnoj-inicijativi/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/genijalna-inicijativa.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Moda</span>
                    <a href="https://www.telegram.hr/super1/life/godisnje-skupimo-11-kilograma-nepotrebne-odjece-svoju-smo-natrpale-u-5-velikih-vreca-i-pridruzile-se-genijalnoj-inicijativi/" target="_blank"><h4>Genijalna incijativa Godišnje skupimo 11 kilograma nepotrebne odjeće...</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/zivot/strucnjak-o-odrzivosti-prometa-buducnost-ne-lezi-samo-u-elektricnim-vozilima-postoje-jos-dva-vazna-rjesenja/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/autimala.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Energija</span>
                    <a href="https://www.telegram.hr/zivot/strucnjak-o-odrzivosti-prometa-buducnost-ne-lezi-samo-u-elektricnim-vozilima-postoje-jos-dva-vazna-rjesenja/" target="_blank"><h4>Stručnjak o održivosti prometa: 'Budućnost ne leži samo u električnim vozilima. Postoje još dva važna rješenja'</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="hhttps://www.telegram.hr/zivot/levisice-su-se-prije-kupovale-svake-druge-godine-a-sad-traperice-kupujemo-svakih-par-mjeseci-evo-zasto/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/levisice-blok.jpeg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Moda</span>
                    <a href="hhttps://www.telegram.hr/zivot/levisice-su-se-prije-kupovale-svake-druge-godine-a-sad-traperice-kupujemo-svakih-par-mjeseci-evo-zasto/" target="_blank"><h4>Levisice su se prije kupovale svake druge godine, a sad traperice kupujemo svakih par mjeseci. Evo zašto</h4></a>
                  </div>
                </div>
              </div>
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
<script>
const labels = document.querySelectorAll('.radio-label');

labels.forEach(label => {
  label.addEventListener('click', () => {
    const radioBtn = label.previousElementSibling;
    radioBtn.checked = true;
  });
});
</script>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
