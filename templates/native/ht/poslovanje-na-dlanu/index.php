<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/ht/poslovanje-na-dlanu';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;300;500;600;700&display=swap" rel="stylesheet">

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
  <header class="header-area">
    <div class="container">
      <div class="row">
        <div class="col-4">
            <h5 style="font-weight:700; color:#fff; padding: 23px 30px; font-size: 28px; padding-left: 0px;;">POSLOVANJE NA DLANU</h5>
        </div>
        <div class="col-8 text-right">
          <nav class="main-nav">
            <ul class="nav">
              <li class="scroll-to-section"><a href="#optimizacija" class="active">Optimizacija</a></li>
              <li class="scroll-to-section"><a href="#kolaboracija">Kolaboracija</a></li>
              <li class="scroll-to-section"><a href="#infrastruktura">Infrastruktura</a></li>
              <li></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->


  <div class="main-banner wow fadeIn" id="top" data-wow-duration="0s" data-wow-delay="0s">
    <div class="video-background">
      <iframe src="https://www.youtube.com/embed/9KCtn3S5tnM?autoplay=1&loop=1&controls=0&mute=1&playlist=9KCtn3S5tnM" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>POSLOVANJE<br/><span style="color:#fff;">NA DLANU</span></h2>
                    <p>Tehnologija napreduje, očekivanja potrošača se mijenjaju, konkurencija raste. Izazovi pred poduzetnicima konstantno se multipliciraju. Pravilno postaviti prioritete i suočiti se s njima nikada nije bilo važnije.</p>
                    <p>Telegram i Hrvatski Telekom predstavljaju <span style="font-weight: 700; color:#ea0a8e;">Poslovanje na dlanu</span>, platformu koja otkriva aktualne izazove manjih i srednjih poduzeća u Hrvatskoj te zajedno s našim vodećim stručnjacima i poduzetnicima iz različitih industrija otkriva koji su trendovi i rješenja ključni za <span style="font-weight: 700; color:#ea0a8e;">uspješno poslovanje u digitalno doba.</span></p>
                    <div class="border-first-button scroll-to-section" style="padding-top: 0px;">
                      <a href="#blog">SAZNAJ VIŠE</a>
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

  <div id="blog" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width: 80px;padding-bottom: 100px; padding-top: 20px;" /></br>
              <p>Temeljem studije agencije Wilke u kojoj je sudjelovalo više od 500 tvrtki u Hrvatskoj, definirali smo <span style="font-weight: 700; color:#ea0a8e;">tri stupa digitalnog poslovanja</span> i vodeće izazove u kojima su poduzetnicima potrebna pouzdana rješenja i partneri.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 show-up prednost wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a href="#optimizacija"><img src="<?php echo $native_path ?>/assets/images/optimizacija.png" style="border-radius: 10px; margin-bottom:15px;"></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 show-up prednost wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="blog-post">
            <div class="thumb">
              <a href="#kolaboracija"><img src="<?php echo $native_path ?>/assets/images/kolaboracija.png" style="border-radius: 10px; margin-bottom:15px;"></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 show-up prednost wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
          <div class="blog-post">
            <div class="thumb">
              <a href="#infrastruktura"><img src="<?php echo $native_path ?>/assets/images/infrastruktura.png" style="border-radius: 10px; margin-bottom:15px;"></a>
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
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>STRUČNJACI I PODUZETNICI</h6>
            <h4>Stručnjaci<em> na temu...</em></h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 show-up prednost wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post" style="text-align: center;">
            <div class="thumb">
              <img src="<?php echo $native_path ?>/assets/images/vuk-vukovic.png" style="border-radius: 110px; width: 220px; height: auto; margin-bottom: 30px;">
            </div>
            <h3>Vuk Vuković</h3>
            <p>Osnivač Oraclum Capital</p>
          </div>
        </div>
        <div class="col-lg-4 show-up prednost wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="blog-post" style="text-align: center;">
            <div class="thumb">
              <img src="<?php echo $native_path ?>/assets/images/dejan-ljustina.png" style="border-radius: 110px; width: 220px; height: auto; margin-bottom: 30px;">
            </div>
            <h3>Dejan Ljuština</h3>
            <p>Osnivač Vision Partners</p>
          </div>
        </div>
        <div class="col-lg-4 show-up prednost wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
          <div class="blog-post" style="text-align: center;">
            <div class="thumb">
              <img src="<?php echo $native_path ?>/assets/images/nikola-vrdoljak.png" style="border-radius: 110px; width: 220px; height: auto; margin-bottom: 30px;">
            </div>
            <h3>Nikola Vrdoljak</h3>
            <p>Osnivač 404 agency</p>
          </div>
        </div>
      </div>

      <div class="row" style="background:#f1f1f1; padding:20px 10px; margin-top: 60px;">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <a target="_blank" href="https://www.telegram.hr/partneri/uspjesni-hrvatski-poduzetnici-komentirali-su-danasnja-poslovanja-digitalizacija-je-jedini-nacin-prezivljavanja/"><img src="<?php echo $native_path ?>/assets/images/clanak02.jpeg" style="border-radius: 0px;" alt=""></a>
            </div>
            <div class="col-lg-6">
              <a target="_blank" href="https://www.telegram.hr/partneri/uspjesni-hrvatski-poduzetnici-komentirali-su-danasnja-poslovanja-digitalizacija-je-jedini-nacin-prezivljavanja/"><h2 style="color:#ea0a8e; font-weight: 700; margin-top: 30px; margin-bottom: 30px;">Uspješni hrvatski poduzetnici komentirali su današnja poslovanja: 'Digitalizacija je jedini način preživljavanja'</h2></a>
              <a target="_blank" href="https://www.telegram.hr/partneri/uspjesni-hrvatski-poduzetnici-komentirali-su-danasnja-poslovanja-digitalizacija-je-jedini-nacin-prezivljavanja/"><p style="margin-bottom: 30px; color: #000;">“Za poduzetnike u Hrvatskoj, digitalizacija poslovanja više nije nešto što im može omogućiti prednost pred konkurencijom, već jedini način preživljavanja”</p></a>
              <p><a target="_blank" href="https://www.telegram.hr/partneri/uspjesni-hrvatski-poduzetnici-komentirali-su-danasnja-poslovanja-digitalizacija-je-jedini-nacin-prezivljavanja/" style="color:#ea0a8e; font-weight: 700;">SAZNAJ VIŠE</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top:50px;">
        <div class="col-lg-5">
          <div class="section-heading wow fadeIn" data-wow-duration="0s" data-wow-delay="0s">
            <h4>...i poduzetnice iz prve ruke</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="post-item">
            <div class="thumb">
              <img src="<?php echo $native_path ?>/assets/images/iva-pranjic.png" style="border-radius:50%; width: 120px; height: auto;" alt="">
            </div>
            <div class="right-content">
              <h5 style="color:#fff; font-weight: 700; margin-top: 10px;">Iva Pranjić</h5>
              <p>vlasnica destilerije Castrum</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="post-item">
            <div class="thumb">
              <img src="<?php echo $native_path ?>/assets/images/daniela-drcec.png" style="border-radius:50%; width: 120px; height: auto;" alt="">
            </div>
            <div class="right-content">
              <h5 style="color:#fff; font-weight: 700; margin-top: 0px;">Daniela Drčec</h5>
              <p>osnivačica brenda prehrambenih proizvoda aDORAble</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="post-item">
            <div class="thumb">
              <img src="<?php echo $native_path ?>/assets/images/ana-marija-golub.png" style="border-radius:50%; width: 120px; height: auto;" alt="">
            </div>
            <div class="right-content">
              <h5 style="color:#fff; font-weight: 700; margin-top: 0px;">Ana-Marija Golub</h5>
              <p>vlasnica obrta heklanih modnih dodataka Loopco Bags</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="post-item">
            <div class="thumb">
              <img src="<?php echo $native_path ?>/assets/images/danijela-hajdinjak-prihic.png" style="border-radius:50%; width: 120px; height: auto;" alt="">
            </div>
            <div class="right-content">
              <h5 style="color:#fff; font-weight: 700; margin-top: 0px;">Danijela Hajdinjak Prihić</h5>
              <p>vlasnica stomatološke ordinacije Danijela Hajdinjak Prihić</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="post-item">
            <div class="thumb">
              <img src="<?php echo $native_path ?>/assets/images/ivana-akrap-antic.png" style="border-radius:50%; width: 120px; height: auto;" alt="">
            </div>
            <div class="right-content">
              <h5 style="color:#fff; font-weight: 700; margin-top: 0px;">Ivana Akrap Antić</h5>
              <p>osnivačica škole stranih jezika za djecu Fun2Learn</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="post-item">
            <div class="thumb">
              <img src="<?php echo $native_path ?>/assets/images/karmela-bali.png" style="border-radius:50%; width: 120px; height: auto;" alt="">
            </div>
            <div class="right-content">
              <h5 style="color:#fff; font-weight: 700; margin-top: 0px;">Karmela Bali</h5>
              <p>vlasnica medicinsko-estetskog centra Vital</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="post-item">
            <div class="thumb">
              <img src="<?php echo $native_path ?>/assets/images/zeljka-jelavic.png" style="border-radius:50%; width: 120px; height: auto;" alt="">
            </div>
            <div class="right-content">
              <h5 style="color:#fff; font-weight: 700; margin-top: 0px;">Željka Jelavić</h5>
              <p>osnivačica tvrtke EXTE-PRODUKT</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
        </div>
      </div>
    </div>
  </div>


  <div id="optimizacija" class="blog" style="padding-top: 100px !important; margin-top: 30px !important;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width: 80px;margin-bottom: 50px;" /></br>
              <h4><em>OPTIMIZACIJA</em></h4>
              <p>U poslovanju je važno optimizirati resurse. To je temelj dobrog i održivog poslovanja svake kompanije, a danas se primarno odnosi na apliciranje novih tehnoloških rješenja kako bi se izbjegli nepotrebni troškovi i resursi se preusmjerili u rast.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <h3 style="color:#fff; font-weight: 700;"><span style="color:#ea0a8e">60% poduzetnika</span> treba svojim zaposlenicima osigurati fleksibilnost rada od bilo kud</h3><br/>
          <img src="<?php echo $native_path ?>/assets/images/opt1.png" />
        </div>
      </div>

            <div class="row" style="background:#f1f1f1; padding:20px 10px;">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-4">
                    <a target="_blank" href="https://www.telegram.hr/partneri/savjet-strucnjaka-i-poduzetnika-optimizirajte-svoje-poslovanje-nemojte-bjezati-od-modernih-digitalnih-rjesenja/"><img src="<?php echo $native_path ?>/assets/images/optimizacijaclanak.png" style="border-radius: 0px;" alt=""></a>
                  </div>
                  <div class="col-lg-8">
                    <a target="_blank" href="https://www.telegram.hr/partneri/savjet-strucnjaka-i-poduzetnika-optimizirajte-svoje-poslovanje-nemojte-bjezati-od-modernih-digitalnih-rjesenja/"><h2 style="color:#ea0a8e; font-weight: 700; margin-top: 30px; margin-bottom: 30px;">Savjet stručnjaka i poduzetnika: Optimizirajte svoje poslovanje, nemojte bježati od modernih digitalnih rješenja</h2></a>
                    <a target="_blank" href="https://www.telegram.hr/partneri/savjet-strucnjaka-i-poduzetnika-optimizirajte-svoje-poslovanje-nemojte-bjezati-od-modernih-digitalnih-rjesenja/"><p style="margin-bottom: 30px; color: #000;">Rezultati mogu biti vrlo zadovoljavajući - štedi se vrijeme, raste profitabilnost, a organizacija je kvalitetnija</p></a>
                    <p><a target="_blank" href="https://www.telegram.hr/partneri/savjet-strucnjaka-i-poduzetnika-optimizirajte-svoje-poslovanje-nemojte-bjezati-od-modernih-digitalnih-rjesenja/" style="color:#ea0a8e; font-weight: 700;">SAZNAJ VIŠE</a></p>
                  </div>
                </div>
              </div>
            </div>

      <div class="row" style="margin-top:50px;">
        <div class="col-lg-12">
          <h3 style="color:#fff; font-weight: 700;"><span style="color:#ea0a8e">38% tvrtki</span> želi optimizirati postojeći sustav, a ne zamijeniti ga</h3><br/>
          <img src="<?php echo $native_path ?>/assets/images/opt2.png" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="post-item">
            <div class="thumb">
              <p style="position: absolute;"><img src="<?php echo $native_path ?>/assets/images/quote.png"></p>
              <img src="<?php echo $native_path ?>/assets/images/nikola-vrdoljak.png" style="border-radius:50%; width: 120px; height: auto; margin-left: 60px;" alt="">
            </div>
            <div class="right-content">
              <p style="margin-top:-20px;"><em>Time tracking zaposlenika u mnogim je poslovima ključan input iz kojeg se izračunavaju troškovi obavljanja posla, a time i profitabilnost određenih klijenata ili projekata.</em></p>
              <h5 style="color:#fff; font-weight: 700; margin-top: 10px;">Nikola Vrdokljak</h5>
              <p>Osnivač 404 agency</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="background:#f1f1f1; padding:20px 10px; margin-bottom: 60px;">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <a target="_blank" href="https://www.telegram.hr/partneri/tri-uspjesne-poduzetnice-o-poslovnom-rastu-i-digitalnim-rjesenjima-u-ordinaciji-ucionici-i-beauty-centru/"><img src="<?php echo $native_path ?>/assets/images/wide8-4.jpeg" style="border-radius: 0px;" alt=""></a>
            </div>
            <div class="col-lg-6">
              <a target="_blank" href="https://www.telegram.hr/partneri/tri-uspjesne-poduzetnice-o-poslovnom-rastu-i-digitalnim-rjesenjima-u-ordinaciji-ucionici-i-beauty-centru/"><h2 style="color:#ea0a8e; font-weight: 700; margin-top: 30px; margin-bottom: 30px;">Tri uspješne poduzetnice o poslovnom rastu i digitalnim rješenjima u ordinaciji, učionici i beauty centru</h2></a>
              <a target="_blank" href="https://www.telegram.hr/partneri/tri-uspjesne-poduzetnice-o-poslovnom-rastu-i-digitalnim-rjesenjima-u-ordinaciji-ucionici-i-beauty-centru/"><p style="margin-bottom: 30px; color: #000;">Danijela, Ivana i Karmela su investirale u digitalizaciju poslovanju i slažu se da im je to bila najpametnija odluka</p></a>
              <p><a target="_blank" href="https://www.telegram.hr/partneri/tri-uspjesne-poduzetnice-o-poslovnom-rastu-i-digitalnim-rjesenjima-u-ordinaciji-ucionici-i-beauty-centru/" style="color:#ea0a8e; font-weight: 700;">SAZNAJ VIŠE</a></p>
            </div>
          </div>
        </div>
      </div>

      <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank">
            <div class="row" style="background:#ea0a8e; padding:20px;">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-3">
                    <img src="<?php echo $native_path ?>/assets/images/mta.png" style="border-radius: 0px;" alt="">
                  </div>
                  <div class="col-lg-9">
                    <h2 style="color:#fff; font-weight: 500; margin-top: 25px; font-size: 20px; line-height: 30px;">Moj Telekom aplikacija za poslovne korisnike idealno je rješenje za uštedu vremena i olakšavanje poslovanja. Osim što je intuitivna i lako se koristi, korisnici ondje imaju uvid u mobilne i fiksne usluge, pakete i aktivirane opcije. Vrlo jednostavno mogu aktivirati nove opcije i nadoplatiti bonove, a uz to mogu i jednostavno platiti račun, kao i pogledati ekskluzivne pogodnosti i popusti.</h2>

                  </div>
                </div>
              </div>
            </div>
      </a>
    </div>
  </div>


<a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank">
  <div style="padding-top: 30px !important; padding-bottom:30px !important; margin-top: 100px !important; background: #fff;">
    <div class="container-fluid">
      <div class="row">
        <marquee><h4 style="color:#000; font-weight:500; margin-left:-100% !important"><b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b></h4></marquee>
      </div>
    </div>
  </div>
</a>


   <div id="kolaboracija" class="blog" style="padding-top: 100px !important; margin-top: 30px !important;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width: 80px;margin-bottom: 50px;" /></br>
              <h4><em>KOLABORACIJA</em></h4>
              <p>Rađa se sve više novih trendova u radu – pojavljuje se sve veća potreba za pravovremeno rješavanje problema s različitih lokacija i u suradnji s vanjskim dobavljačima te partnerima. Promptne reakcije nikada nisu bile toliko važne, a sa sve više radnika u remote uredima, sigurna i ažurna rješenja su važna za normalno funkcioniranje kompanija.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <h3 style="color:#fff; font-weight: 700;"><span style="color:#ea0a8e">57% organizacija</span> treba jednostavna digitalna rješenja s pojašnjenjima na lokalnom jeziku</h3><br/>
          <img src="<?php echo $native_path ?>/assets/images/kol1.png" />
        </div>
      </div>


      <div class="row" style="background:#f1f1f1; padding:20px 10px;">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-4">
              <a target="_blank" href="https://www.telegram.hr/partneri/kolaboracija-i-komunikacija-kljuc-su-uspjesnog-poslovanja-domaci-poduzetnici-objasnili-su-nam-zasto/"><img src="<?php echo $native_path ?>/assets/images/kolaboracijaclanak.png" style="border-radius: 0px;" alt=""></a>
            </div>
            <div class="col-lg-8">
              <a target="_blank" href="https://www.telegram.hr/partneri/kolaboracija-i-komunikacija-kljuc-su-uspjesnog-poslovanja-domaci-poduzetnici-objasnili-su-nam-zasto/"><h2 style="color:#ea0a8e; font-weight: 700; margin-top: 30px; margin-bottom: 30px;">Kolaboracija i komunikacija ključ su uspješnog poslovanja. Domaći poduzetnici objasnili su nam zašto</h2></a>
              <a target="_blank" href="https://www.telegram.hr/partneri/kolaboracija-i-komunikacija-kljuc-su-uspjesnog-poslovanja-domaci-poduzetnici-objasnili-su-nam-zasto/"><p style="margin-bottom: 30px; color: #000;">Važno je svakodnevno eksperimentirati s digitalnim alatima i ići ukorak s trendovima</p></a>
              <p><a target="_blank" href="https://www.telegram.hr/partneri/kolaboracija-i-komunikacija-kljuc-su-uspjesnog-poslovanja-domaci-poduzetnici-objasnili-su-nam-zasto/" style="color:#ea0a8e; font-weight: 700;">SAZNAJ VIŠE</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top:50px;">
        <div class="col-lg-12">
          <h3 style="color:#fff; font-weight: 700;"><span style="color:#ea0a8e">41% poduzetnika</span> mora svojim zaposlenicima osigurati pristup najrecentnijim verzijama dokumenata</h3><br/>
          <img src="<?php echo $native_path ?>/assets/images/kol2.png" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="post-item">
            <div class="thumb">
              <p style="position: absolute;"><img src="<?php echo $native_path ?>/assets/images/quote.png"></p>
              <img src="<?php echo $native_path ?>/assets/images/vuk-vukovic.png" style="border-radius:50%; width: 120px; height: auto; margin-left: 60px;" alt="">
            </div>
            <div class="right-content">
              <p style="margin-top:-20px;"><em>Primarna funkcija digitalne tehnologije za poduzetnika je njena jednostavnost. Što je jednostavnija usluga koja bolje rješava neki problem, to je veća vjerojatnost da će je većina poduzetnika koristiti i implementirati.</em></p>
              <h5 style="color:#fff; font-weight: 700; margin-top: 10px;">Vuk Vuković</h5>
              <p>Osnivač Oraclum Capital</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="background:#f1f1f1; padding:20px 10px; margin-bottom: 50px;">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-4">
              <a target="_blank" href="https://www.telegram.hr/partneri/ova-zagrepcanka-izraduje-komarnike-rolete-i-ograde-krenula-je-u-travnju-a-vec-razmislja-o-prosirenju/"><img src="https://images.telegram.hr/q_iYOVANkX1PqySyl9qomrLOj3SJvqFx0McXbnstjic/preset:single2/aHR0cHM6Ly93d3cudGVsZWdyYW0uaHIvd3AtY29udGVudC91cGxvYWRzLzIwMjMvMDkvdGctbmFzbG92bmEtMjAyMy0wOS0wOC0yLTEuanBn.webp" style="border-radius: 0px;" alt=""></a>
            </div>
            <div class="col-lg-8">
              <a target="_blank" href="https://www.telegram.hr/partneri/ova-zagrepcanka-izraduje-komarnike-rolete-i-ograde-krenula-je-u-travnju-a-vec-razmislja-o-prosirenju/"><h2 style="color:#ea0a8e; font-weight: 700; margin-top: 30px; margin-bottom: 30px;">Ova Zagrepčanka proizvodi komarnike, rolete i ograde. Krenula je u travnju, a već razmišlja o proširenju</h2></a>
              <a target="_blank" href="https://www.telegram.hr/partneri/ova-zagrepcanka-izraduje-komarnike-rolete-i-ograde-krenula-je-u-travnju-a-vec-razmislja-o-prosirenju/"><p style="margin-bottom: 30px; color: #000;">Željka je izradu weba sasvim prepustila partnerskoj firmi kako bi se posvetila svom osnovnom poslu</p></a>
              <p><a target="_blank" href="https://www.telegram.hr/partneri/ova-zagrepcanka-izraduje-komarnike-rolete-i-ograde-krenula-je-u-travnju-a-vec-razmislja-o-prosirenju/" style="color:#ea0a8e; font-weight: 700;">SAZNAJ VIŠE</a></p>
            </div>
          </div>
        </div>
      </div>

      <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank">
            <div class="row" style="background:#ea0a8e; padding:20px;">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-3">
                    <img src="<?php echo $native_path ?>/assets/images/mta.png" style="border-radius: 0px;" alt="">
                  </div>
                  <div class="col-lg-9">
                    <h2 style="color:#fff; font-weight: 500; margin-top: 25px; font-size: 20px; line-height: 30px;">Moj Telekom aplikacija za poslovne korisnike idealno je rješenje za uštedu vremena i olakšavanje poslovanja. Osim što je intuitivna i lako se koristi, korisnici ondje imaju uvid u mobilne i fiksne usluge, pakete i aktivirane opcije. Vrlo jednostavno mogu aktivirati nove opcije i nadoplatiti bonove, a uz to mogu i jednostavno platiti račun, kao i pogledati ekskluzivne pogodnosti i popusti.</h2>

                  </div>
                </div>
              </div>
            </div>
      </a>
    </div>
  </div>



<a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank">
  <div style="padding-top: 30px !important; padding-bottom:30px !important; margin-top: 100px !important; background: #fff;">
    <div class="container-fluid">
      <div class="row">
        <marquee><h4 style="color:#000; font-weight:500; margin-left:-100% !important"><b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>KORISNIK SI HRVATSKOG TELEKOMA? <a href="https://www.hrvatskitelekom.hr/poslovni/moj-telekom-aplikacija" target="_blank" style="color:#ea0a8e">ISPROBAJ MOJ TELEKOM APLIKACIJU</a></b></h4></marquee>
      </div>
    </div>
  </div>
</a>


<div id="infrastruktura" class="blog" style="padding-top: 100px !important; margin-top: 30px !important;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width: 80px;margin-bottom: 50px;" /></br>
              <h4><em>INFRASTRUKTURA</em></h4>
              <p>Tehnologija se razvija najbrže dosad i omogućava nam sve nužne poslovne procese danas, a njih je teško pratiti ako to nije core business kompanije. U takvim slučajevima je kompanijama ključno imati relevantan izvor informacija i podrške od povjerenja. </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <h3 style="color:#fff; font-weight: 700;"><span style="color:#ea0a8e">67% tvrtki</span> smatra nužnim da partneri, koji razvijaju ili nabavljaju digitalna rješenja, razumiju njihove proizvode i poslovanje</h3><br/>
          <img src="<?php echo $native_path ?>/assets/images/inf1.png" />
        </div>
      </div>

            <div class="row" style="background:#f1f1f1; padding:20px 10px;">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-4">
                    <a target="_blank" href="https://www.telegram.hr/partneri/vlasnik-zagrebacke-tvrtke-dio-sadrzaja-za-nas-web-napravila-je-umjetna-inteligencija-mogucnosti-su-beskrajne/"><img src="<?php echo $native_path ?>/assets/images/infrastrukturaclanak.png" style="border-radius: 0px;" alt=""></a>
                  </div>
                  <div class="col-lg-8">
                    <a target="_blank" href="https://www.telegram.hr/partneri/vlasnik-zagrebacke-tvrtke-dio-sadrzaja-za-nas-web-napravila-je-umjetna-inteligencija-mogucnosti-su-beskrajne/"><h2 style="color:#ea0a8e; font-weight: 700; margin-top: 30px; margin-bottom: 30px;">Vlasnik zagrebačke tvrtke: 'Dio sadržaja za naš web napravila je umjetna inteligencija. Mogućnosti su beskrajne'</h2></a>
                    <a target="_blank" href="https://www.telegram.hr/partneri/vlasnik-zagrebacke-tvrtke-dio-sadrzaja-za-nas-web-napravila-je-umjetna-inteligencija-mogucnosti-su-beskrajne/"><p style="margin-bottom: 30px; color: #000;">KNaši su sugovornici zaključili da treba biti ukorak s trendovima, ali i taktičan pri njihovoj primjeni</p></a>
                    <p><a target="_blank" href="https://www.telegram.hr/partneri/vlasnik-zagrebacke-tvrtke-dio-sadrzaja-za-nas-web-napravila-je-umjetna-inteligencija-mogucnosti-su-beskrajne/" style="color:#ea0a8e; font-weight: 700;">SAZNAJ VIŠE</a></p>
                  </div>
                </div>
              </div>
            </div>

      <div class="row" style="margin-top:50px;">
        <div class="col-lg-12">
          <h3 style="color:#fff; font-weight: 700;"><span style="color:#ea0a8e">73% organizacija</span> shvaća da moraju osigurati poslovne podatke, posebice tijekom remote rada</h3><br/>
          <img src="<?php echo $native_path ?>/assets/images/inf2.png" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="post-item">
            <div class="thumb">
              <p style="position: absolute;"><img src="<?php echo $native_path ?>/assets/images/quote.png"></p>
              <img src="<?php echo $native_path ?>/assets/images/dejan-ljustina.png" style="border-radius:50%; width: 120px; height: auto; margin-left: 60px;" alt="">
            </div>
            <div class="right-content">
              <p style="margin-top:-20px;"><em>Jedna od najbitnijih stvari za ovu godinu i u periodu koji dolazi je Generative Artificial Intelligence (AI). To je najbrže rastuća tehnologija ikad – u manje od dva mjeseca postojanja Chat GPT je stekao više od stotinu milijuna korisnika, što ništa do tada nije ostvarilo.</em></p>
              <h5 style="color:#fff; font-weight: 700; margin-top: 10px;">Dejan Ljuština</h5>
              <p>Osnivač Vision Partners</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row" style="background:#f1f1f1; padding:20px 10px; ">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <a target="_blank" href="https://www.telegram.hr/partneri/one-su-napustile-svoje-karijere-i-postale-poduzetnice-izgradile-su-genijalne-brendove-i-sve-prodaju-online/"><img src="<?php echo $native_path ?>/assets/images/tg-naslovna-2023-07-31-wide-alt.jpeg" style="border-radius: 0px;" alt=""></a>
            </div>
            <div class="col-lg-6">
              <a target="_blank" href="https://www.telegram.hr/partneri/one-su-napustile-svoje-karijere-i-postale-poduzetnice-izgradile-su-genijalne-brendove-i-sve-prodaju-online/"><h2 style="color:#ea0a8e; font-weight: 700; margin-top: 30px; margin-bottom: 30px;">One su napustile svoje karijere i postale poduzetnice. Izgradile su genijalne brendove i sve prodaju online</h2></a>
              <a target="_blank" href="https://www.telegram.hr/partneri/one-su-napustile-svoje-karijere-i-postale-poduzetnice-izgradile-su-genijalne-brendove-i-sve-prodaju-online/"><p style="margin-bottom: 30px; color: #000;">Svoj posao ne mogu zamisliti bez digitalnih rješenja koja im sve uvelike olakšavaju</p></a>
              <p><a target="_blank" href="https://www.telegram.hr/partneri/one-su-napustile-svoje-karijere-i-postale-poduzetnice-izgradile-su-genijalne-brendove-i-sve-prodaju-online/" style="color:#ea0a8e; font-weight: 700;">SAZNAJ VIŠE</a></p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>



<div  class="blog" style="padding-top: 100px !important; margin-top: 30px !important;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <img src="<?php echo $native_path ?>/assets/images/crta.png" style="width: 80px;margin-bottom: 50px;" /></br>
              <h4><em>Unaprijedi svoje poslovanje</em></h4>
              <p>Uspješnim poduzetnicima ključni su provjereni savjeti i pouzdane usluge, a najvrjednije su one koje se temelje na godinama iskustva rada s vodećim kompanijama na tržištu. Stoga je Hrvatski Telekom pokrenuo platformu <a href="https://godigital.hrvatskitelekom.hr/" target="_blank" style="font-weight:700; color: #ea0a8e ">GODIGITAL</a> na kojoj možeš pronaći odgovore na najvažnija pitanja o svom biznisu, i kreirao set paketa usluga koje će ti olakšati poslovanje bez obzira na tvoju veličinu i industriju.</p>

              <h5>Korisni savjeti</h5>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a target="_blank" href="https://godigital.hrvatskitelekom.hr/odlicni-poduzetnici-univerzalni-principi-uspjeha/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/clanak01.jpeg" alt=""></a>
            </div>
            <div class="down-content">
              <a target="_blank" href="https://godigital.hrvatskitelekom.hr/odlicni-poduzetnici-univerzalni-principi-uspjeha/" target="_blank"><h4>Univerzalni principi uspjeha poduzetnika: Deset karakteristika koje stignete razviti</h4></a>
              <p>Za pokretanje uspješnog poslovanja potreban je snažan koncept i početno financiranje. No, možda najvažniji sastojak je poduzetnik</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a target="_blank" href="https://godigital.hrvatskitelekom.hr/kako-vam-ai-moze-pomoci-pri-zaposljavanju/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/clanak02a.jpeg" alt=""></a>
            </div>
            <div class="down-content">
              <a target="_blank" href="https://godigital.hrvatskitelekom.hr/kako-vam-ai-moze-pomoci-pri-zaposljavanju/" target="_blank"><h4>Umjetna inteligencija u zapošljavanju: Evo kako uštediti vrijeme i novac u pronalasku kandidata</h4></a>
              <p>Googleovom Bardu postavili smo jednostavan upit da napiše oglas za posao marketinškog stručnjaka</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a target="_blank" href="https://godigital.hrvatskitelekom.hr/__trashed-2/" target="_blank"><img src="<?php echo $native_path ?>/assets/images/clanak03.jpeg" alt=""></a>
            </div>
            <div class="down-content">
              <a target="_blank" href="https://godigital.hrvatskitelekom.hr/__trashed-2/" target="_blank"><h4>Edukacija kao ključni faktor u povećanju snage ljudskog kapitala i vrijednosti poduzeća</h4></a>
              <p>Poduzeća koja sustavno ulažu u edukaciju zaposlenika izgrađuju timove visoko kvalificiranih stručnjaka</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <h5>Pouzdane usluge</h5>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <a href="https://www.hrvatskitelekom.hr/poslovni/digitalno-poslovanje" target="_blank"><div class="blog-post" style="background: #fff; padding: 40px; border-radius:0 !important; min-height: 550px;">
             <h5 style="font-weight:700; margin-bottom: 40px; color: #ea0a8e">Digitalno poslovanje</h5>
              <ul>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">kreiranje web-stranice u skladu s vašim vizualnim identitetom</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">SEO optimizacija sadržaja</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">hosting web-stranice</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">održavanje web-stranice i korisnička podrška</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">izrada web shopa - automatizirane online trgovine koja radi 24 sata</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">kontinuirano praćenje posjećenosti web shopa</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">analiza kupaca i praćenje popularnosti proizvoda</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">olakšana automatizacija i interakcija s korisnicima</li>
              </ul>
          </div></a>
        </div>
        <div class="col-lg-4 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <a href="https://www.hrvatskitelekom.hr/poslovni/ict/sigurnost-poslovanja" target="_blank"><div class="blog-post" style="background: #fff; padding: 40px; border-radius:0 !important; min-height: 550px;">
             <h5 style="font-weight:700; margin-bottom: 40px; color: #ea0a8e">Sigurnost poslovanja</h5>
              <ul>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">zaštita digitalnog radnog mjesta</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">sigurno spremanje podataka u vrhunski opremljenom podatkovnom centru</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">zaštita od financijskih gubitaka, gubitka podataka i duljeg prekida u radu</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">zaštita ureda i poslovnih podataka</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">zaštita lokalne mreže i mrežna zaštita fiksnog priključka i svih spojenih uređaja</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">ICT video nadzor za zaštitu zaposlenika, klijenata i imovine</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">analiza kupaca i praćenje popularnosti proizvoda</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">napredne tehnologije za sprječavanje hakerskih napada</li>
              </ul>
          </div></a>
        </div>
        <div class="col-lg-4 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <a href="https://www.hrvatskitelekom.hr/poslovni/moj-digitalni-ured" target="_blank"><div class="blog-post" style="background: #fff; padding: 40px; border-radius:0 !important; min-height: 550px;">
             <h5 style="font-weight:700; margin-bottom: 40px; color: #ea0a8e">Moj digitalni ured</h5>
              <ul>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">kvalitetan poslovni laptop s Windows operativnim sustavom, antivirusnom zaštitom i jamstvom</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000"> SIM kartica s 20 GB internet prometa mjesečno</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">IT podrška dostupna u svakom trenu</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">mogućnost odabira različitih paketa ovisno o potrebama poslovanja</li>
                <li style="margin-left: 20px; list-style-type: square; margin-top: 10px; color: #000">mogućnost korištenja Microsoft 365 usluga</li>
              </ul>
          </div></a>
        </div>
      </div>
    </div>
  </div>


  <div id="sponsors" class="sponsors">
  <div class="container">
      <div class="row">

       <div class="col-lg-6 offset-md-3 text-center wow fadeIn" data-wow-duration="0.6s" data-wow-delay="0.6s">
            <p>Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Hrvatski Telekom i po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
            <img style="max-width:100px; height: auto;" src="<?php echo $native_path ?>/assets/images/ht.png"/>&nbsp;
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

    <?php wp_footer(); ?>
</body>
</html>
