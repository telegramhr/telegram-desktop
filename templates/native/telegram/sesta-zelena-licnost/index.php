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
              <img src="<?php echo $native_path ?>assets/images/logo-v1.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Naslovnica</a></li>
              <li class="scroll-to-section"><a href="#infografike">Infografike</a></li>
              <li class="scroll-to-section"><a href="#kviz">Kviz</a></li>
              <li class="scroll-to-section"><a href="#clanci">Članci</a></li>
              <li class="scroll-to-section"><a href="#about"></a></li>
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
                      <a href="#contact">TEST LIČNOSTI! USKORO...</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?php echo $native_path ?>assets/images/slider-dec.png" alt="">
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
              <a href="https://www.telegram.hr/zivot/ugrozili-smo-mediteransku-vrstu-koja-u-danu-proizvede-do-20-litara-kisika-ova-inicijativa-pokusava-je-spasiti/" target="_blank"><img src="<?php echo $native_path ?>assets/images/ugrozili-smo.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Priroda</span>
              <a href="https://www.telegram.hr/zivot/ugrozili-smo-mediteransku-vrstu-koja-u-danu-proizvede-do-20-litara-kisika-ova-inicijativa-pokusava-je-spasiti/" target="_blank"><h4>Ugrozili smo mediteransku vrstu koja u danu proizvede do 20 litara kisika. Ova inicijativa pokušava je spasiti</h4></a>
              <p>Zasigurno ste barem jednom iz mora izašli s komadićem trave koji vam se priljubio uz nogu ili ste u dubinama okrznuli stopalima nešto nalik tome. Velika je vjerojatnost da je upravo ta trava bila posidonija – biljka koja se protiv klimatskih promjena bori tiho, ali efikasno...</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/zivot/ako-nastavimo-ovim-tempom-do-2035-ce-s-debljinom-zivjeti-polovica-hrvata-vrijeme-je-za-promjene/" target="_blank"><img src="<?php echo $native_path ?>assets/images/ako-nastavimo.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Zdravlje</span>
                    <a href="https://www.telegram.hr/zivot/ako-nastavimo-ovim-tempom-do-2035-ce-s-debljinom-zivjeti-polovica-hrvata-vrijeme-je-za-promjene/" target="_blank"><h4>Ako nastavimo ovim tempom, do 2035. će s debljinom živjeti polovica Hrvata</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/zivot/hrvatska-bi-ove-godine-mogla-postaviti-novi-rekord-po-broju-instaliranih-solarnih-elektrana-ustede-su-neupitne/" target="_blank"><img src="<?php echo $native_path ?>assets/images/rekord-hr.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Energija</span>
                    <a href="https://www.telegram.hr/zivot/hrvatska-bi-ove-godine-mogla-postaviti-novi-rekord-po-broju-instaliranih-solarnih-elektrana-ustede-su-neupitne/" target="_blank"><h4>Hrvatska bi ove godine mogla postaviti novi rekord po broju instaliranih solarnih elektrana</h4></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/super1/life/godisnje-skupimo-11-kilograma-nepotrebne-odjece-svoju-smo-natrpale-u-5-velikih-vreca-i-pridruzile-se-genijalnoj-inicijativi/" target="_blank"><img src="<?php echo $native_path ?>assets/images/genijalna-inicijativa.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Moda</span>
                    <a href="https://www.telegram.hr/super1/life/godisnje-skupimo-11-kilograma-nepotrebne-odjece-svoju-smo-natrpale-u-5-velikih-vreca-i-pridruzile-se-genijalnoj-inicijativi/" target="_blank"><h4>Genijalna incijativa Godišnje skupimo 11 kilograma nepotrebne odjeće...</h4></a>
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
                  <img src="<?php echo $native_path ?>assets/images/infografika-1.jpg" alt="">
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $native_path ?>assets/images/infografika-2.jpg" alt="">
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $native_path ?>assets/images/infografika-3.jpg" alt="">
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $native_path ?>assets/images/infografika-4.jpg" alt="">
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $native_path ?>assets/images/infografika-5.jpg" alt="">
                </div>
              </div>

            </div>
            <div class="item">

                <div class="portfolio-item">
                <div class="thumb">
                  <img src="<?php echo $native_path ?>assets/images/infografika-6.jpg" alt="">
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
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>ZAIGRAJ NAŠ KVIZ</h6>
            <h4>Poznaješ li dobro svijet ekologije?</h4>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#">USKORO...</a>
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
              <a href="https://www.telegram.hr/biznis-tech/omiljene-hrvatske-tiktokerice-jedan-mali-uredaj-moze-vam-stvoriti-veliki-problem-ali-mozete-ga-rijesiti/" target="_blank"><img src="<?php echo $native_path ?>assets/images/omiljene-hrvatske-tiktokerice.jpg" alt=""></a>
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
              <a href="https://www.telegram.hr/zivot/u-dva-dana-iz-jadrana-kod-mljeta-izvadeno-vise-od-tone-otpada-plastika-je-bila-tek-druga-na-listi-po-kolicini/" target="_blank"><img src="<?php echo $native_path ?>assets/images/u-dva-dana-iz-jadrana.jpg" alt=""></a>
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
              <a href="https://www.telegram.hr/zivot/klimatolozi-zabrinuti-izasli-preliminarni-podaci-za-lipanj-ovo-sto-se-dogada-nije-uobicajeno-a-el-nino-se-tek-ocekuje/" target="_blank"><img src="<?php echo $native_path ?>assets/images/klimatolozi-zabrinuti.jpg" alt=""></a>
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
                <div class="post-item">
                  <div class="thumb">
                    <a href="https://www.telegram.hr/super1/look/gdje-pronaci-savrsen-par-odrzivih-traperica-ovi-brendovi-rade-najbolje-na-svijetu/" target="_blank"><img src="<?php echo $native_path ?>assets/images/gdje-pronaci.jpeg" alt=""></a>
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
                    <a href="https://www.telegram.hr/zivot/jadransko-more-suocava-se-s-ekoloskom-krizom-imamo-fotografije-koje-to-dokazuju/" target="_blank"><img src="<?php echo $native_path ?>assets/images/jadransko-more.jpeg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Priroda</span>
                    <a href="https://www.telegram.hr/zivot/jadransko-more-suocava-se-s-ekoloskom-krizom-imamo-fotografije-koje-to-dokazuju/" target="_blank"><h4>Jadransko more suočava se s ekološkom krizom. Imamo fotografije koje to dokazuju</h4></a>
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
                    <a href="https://www.telegram.hr/super1/power/pricu-oko-otpada-i-ekologije-ucinila-je-razumljivom-svima-vise-od-11-tisuca-ljudi-su-zbog-nje-bolji-gradani/" target="_blank"><img src="<?php echo $native_path ?>assets/images/pricu-oko-otpada.jpeg" alt=""></a>
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
                    <a href="https://www.telegram.hr/biznis-tech/sto-kad-eu-naredi-da-kupujemo-nove-elektricne-aute-kina-ce-postati-lider-na-cestama-bismo-svi-mogli-imati-isti-problem/" target="_blank"><img src="<?php echo $native_path ?>assets/images/sto-kad-eu-naredi.jpeg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Energija</span>
                    <a href="https://www.telegram.hr/biznis-tech/sto-kad-eu-naredi-da-kupujemo-nove-elektricne-aute-kina-ce-postati-lider-na-cestama-bismo-svi-mogli-imati-isti-problem/" target="_blank"><h4>Što kad EU naredi da kupujemo samo nove, električne aute? Kina će postati lider, na cestama...</h4></a>
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
  <script src="<?php echo $native_path ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $native_path ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $native_path ?>assets/js/owl-carousel.js"></script>
  <script src="<?php echo $native_path ?>assets/js/animation.js"></script>
  <script src="<?php echo $native_path ?>assets/js/imagesloaded.js"></script>
  <script src="<?php echo $native_path ?>assets/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>
