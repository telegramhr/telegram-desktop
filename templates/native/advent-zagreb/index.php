
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/advent-zagreb';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
<style type="text/css">

        @-webkit-keyframes vrtnja { 0% { -webkit-transform:rotate(0deg) } 100% { -webkit-transform: rotate(360deg);} }
        @keyframes vrtnja { 0% { transform:rotate(0deg) } 100% { transform: rotate(360deg);} }


</style>
<style>
.clickable-image {
  cursor: pointer;
  transition: transform 0.2s;
}
.clickable-image:hover {
  transform: scale(1.15);
}
</style>

<head>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css?v=09052024">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="15" class="pozadina">
<?php do_action('telegram_body_start'); ?>
  <!-- ***** Preloader Start ***** -->

<div style="position: fixed; width:100px; height: 100px; right: 50px; bottom:50px; z-index: 110;"><img class="img-fluid clickable-image" data-bs-toggle="modal" data-bs-target="#imageModal1" src="<?php echo $native_path ?>/assets/images/pismo.png"/></div>


  <div class="blog hero" style="padding-top: 70px; padding-bottom: 70px">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
               <img src="<?php echo $native_path ?>/assets/images/claim.svg" style="padding: 30px" /><br/>
        </div>
    </div>
  </div>
</div>


<div class="blog" style="background: #28323c; padding-bottom:0px">
  <div style="position: absolute; width:120px; height: 120px; right: 50px; top:250px; -webkit-animation: vrtnja 11s linear 0s infinite; animation: vrtnja 11s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/cvijet01.svg"/></div>
  <div class="container">
      <div class="row">

          <div class="col-lg-8 offset-lg-2 text-left wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <h4 style="color:#fff !important">Raznolika adventska ponuda smješta Zagreb na kartu svjetskih destinacija, a s punim pravom nosi titulu jednog od najboljih božićnih sajmova u Europi. Ugledni BBC, Forbes, CNN, National Geographic, The Times i brojni drugi ove godine Zagreb nazivaju nezaobilaznom zimskom destinacijom. </h4>
             <h4 style="color:#fff !important">Brojne nagrade, poput one za najbolji advent u Europi čak tri godine zaredom, potvrđuju kako je naš glavni grad mjesto za sve one koji žele uživati u najljepšem dobu godine. </h4><br/><br/>
             <h1><a href="#jutarnja-carolija">01 Jutarnja čarolija</a></h1>
             <h1><a href="#popodnevna-avantura">02 Popodnevna avantura</a></h1>
             <h1><a href="#vecernja-romantika">03 Večernja romantika</a></h1>
          </div>
        </div>

      </div>
</div>


<div class="blog" style="background: #28323c; padding-bottom: 0;">
  <div style="position: absolute; width:200px; height: 200px; border-radius: 100px; left: -50px; top:600px; -webkit-animation: vrtnja 20s linear 0s infinite; animation: vrtnja 20s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/cvijet02.svg"/></div>
  <div class="container">
      <div class="row">
          <div class="col-lg-5">
             <p style="color:#e8e5e1;" class="sticky-top">A takvih je mnogo. Posjetitelji iz svih krajeva svijeta dolaze istražiti bogatu gastronomsku ponudu na više od deset lokacija diljem grada, gdje ih očekuju delicije koje spajaju tradicionalne i suvremene okuse. Uz uživanje u kuhanom vinu i specijalitetima, gosti se opuštaju uz odlične glazbene nastupe, uživaju na klizalištu smještenom u samom srcu grada te sudjeluju u raznovrsnim događanjima koja svakom posjetitelju nude jedinstveno blagdansko iskustvo.
              </p>
          </div>
          <div class="col-lg-7 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/prva.jpg" style="z-index:1 !important" />
          </div>
        </div>
      </div>
</div>


<div class="blog" style="background: #28323c; padding-bottom: 0;">
  <div style="position: absolute; width:120px; height: 120px; right: 50px; top:250px; -webkit-animation: vrtnja 11s linear 0s infinite; animation: vrtnja 11s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/cvijet03.svg"/></div>
  <div class="container">
      <div class="row">
          <div class="col-lg-5 order-lg-2">
             <p style="color:#e8e5e1;" class="sticky-top">Ove je godine ponuda proširena na dodatne lokacije u gradu. Na najvišoj točki Zagreba, iznad oblaka, smjestio se tako sljemenski Advent, gdje posjetitelji mogu uživati u bogatoj ponudi uz spektakularan pogled na cijeli grad. Tu je i Bal na Gornjem gradu za ljubitelje romantičnih događanja, kao i Lovački muzej na Tuškancu s lovačkim specijalitetima i mogućnosti besplatnog razgledavanja muzeja i sudjelovanja na radionicama.
              </p>
          </div>
          <div class="col-lg-7 order-lg-1 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/druga.jpg" style="z-index:1 !important" />
          </div>
        </div>
      </div>
</div>


<div id="jutarnja-carolija" class="blog" style="background: #28323c; padding-bottom: 0;">
  <div style="position: absolute; width:180px; height: 180px; right: 100px; top:400px; -webkit-animation: vrtnja 16s linear 0s infinite; animation: vrtnja 16s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/cvijet03.svg"/></div>

  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12 paddingdolje">
                <div class="container">
                  <div class="row">
                      <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

                        <img src="<?php echo $native_path ?>/assets/images/jutro.svg"/>

                      </div>
                      <div class="col-lg-4">
                      </div>
                      <div class="col-lg-8 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

                        <p style="color: #e8e5e1; vertical-align: center;">Nezaboravno zimsko iskustvo ove je godine smješteno doslovno iznad oblaka. Uživajte uz spektakularan pogled na Zagreb, uz vrhunsku zabavu i gastronomsku ponudu. Advent na Sljemenu održava se sve do 7. siječnja. Pritom se adventska ponuda odnosi na nekoliko termina, zasebno u Snježnoj kraljici i Tomislavovom domu. U predivno uređenom predvorju hotela Tomislavov dom izložen je dio opusa izložbe „Šuma okom šumara“ koju ne smijete propustiti.  </p>
                        <br/><br/>

                        <p style="color:#fff !important"><span style="color:#eac998 !important; font-family: Young Serif; font-size:1.6em">Naši favoriti</span><br/><br/>
                            <span style="font-weight: 900;">20.12.2024. u 12 sati na Zrinjevcu</span> – Klasika u podne – White Quartet<br/>
                            <span style="font-weight: 900;">22.12.2024. u 10 sati na Zrinjevcu</span> – Dječji zbor – Kikići i Genijalci<br/>
                            24.12.2024. u 11 sati na Trgu bana Jelačića </span> - Zborovi Badnjak - Midday Advent Melodies<br/>
                            <span style="font-weight: 900;">29.11.2024. - 5.1.2025.</span> – posjet Adventa u Kući karikature Oto Reisinger</p>

                      </div>
                      <div class="col-lg-6">
                      </div>

                  </div>
              </div>
          </div>
          <div class="col-lg-4 p-0 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/jutro-01.jpg" />
          </div>
          <div class="col-lg-4 p-0 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
            <img src="<?php echo $native_path ?>/assets/images/jutro-02.jpg" />
          </div>
          <div class="col-lg-4 p-0 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.4s">
            <img src="<?php echo $native_path ?>/assets/images/jutro-03.jpg" />
          </div>
        </div>
  </div>
</div>


<div id="popodnevna-avantura" class="blog" style="background: #28323c; padding-bottom:0px">
  <div style="position: absolute; width:150px; height: 150px; left: -50px; top:100px; -webkit-animation: vrtnja 20s linear 0s infinite; animation: vrtnja 20s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/cvijet01.svg"/></div>

  <div style="position: absolute; width:200px; height: 200px; border-radius: 100px; right: 50px; top:600px; -webkit-animation: vrtnja 15s linear 0s infinite; animation: vrtnja 15s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/cvijet02.svg"/></div>


  <div class="container">
      <div class="row">
          <div class="col-lg-5 order-lg-2">
             <p class="sticky-top" style="color:#e8e5e1"><img src="<?php echo $native_path ?>/assets/images/popodne.svg"  class="wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s" /><br/><br/><span class="wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">U Zagrebu se u ovo vrijeme održavaju sjajne kreativne radionice sadržajno prilagođene i za djecu i za odrasle. Najmlađi će pak posebno uživati u vožnji kočijom Djeda Božićnjaka od utorka do nedjelje u popodnevnim satima. Na Zrinjevcu pak uživajte u odličnom glazbenom programu.  </span><br/><br/><span style="color:#eac998 !important; font-family: Young Serif; font-size:1.6em">Naši favoriti</span><br/><br/><span style="font-weight: 900;">22.12.2024. u 17 sati, Kavana Lav</span> – Šesteročlani Ad gloriam brass, limeni puhački sastav, unijet će blagdansku radost s božićnih balkona.<br/>
                                    <span style="font-weight: 900;">23.12.2024. u 18:30 u Ledenom parku na Tomislavcu</span> – Orašar na ledu<br/>
                                    <span style="font-weight: 900;">24.12.2024. u 13 sati na Zrinjevcu</span> – koncert Lea Lovrenčić<br/>
                                    <span style="font-weight: 900;">1.12.2024. - 31.12.2024.</span> – posjet čaroliji Adventa u Hrvatskom prirodoslovnom muzeju<br/>
                                    <span style="font-weight: 900;">30.11.2024. -7.1.2025.</span> – posjet Adventu na Dolcu</p>
          </div>
          <div class="col-lg-7 order-lg-1 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">


                <img src="<?php echo $native_path ?>/assets/images/popodne-01.jpg"/>
          </div>
        </div>
      </div>
</div>

<div id="vecernja-romantika" class="blog" style="background: #28323c">
  <div style="position: absolute; width:100px; height: 100px; left: 50px; top:100px; -webkit-animation: vrtnja 21s linear 0s infinite; animation: vrtnja 21s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/cvijet03.svg"/></div>

  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12 paddingdolje">
                <div class="container">
                  <div class="row">

                      <div class="col-lg-5 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <img src="<?php echo $native_path ?>/assets/images/navecer.svg" />
                      </div>
                      <div class="col-lg-1">
                      </div>
                      <div class="col-lg-6 align-self-end wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <p style="color:#fff">Večer je pak rezervirana za ponešto intimnije druženje uz svjetlosne instalacije i klizanje. Ne propustite Bal na Gornjem gradu koji traje sve do 31. prosinca. Osim toga, ove se godine obilježava čak 10 godina Ledenog parka. Ne propustite stoga reprizu predstave s otvorenja, koja će se održati 23.12. kada će vrhunska ekipa na ledu ponovno uprizoriti Orašara Petra Iljiča Čajkovskog. Ne  propustite posjetiti ni Tunel Grič koji ove godine odiše estetikom Polar Expressa.  </p>
                        <br/><br/>

                        <p style="color:#fff !important"><span style="color:#eac998 !important; font-family: Young Serif; font-size:1.6em">Naši favoriti</span><br/><br/><span style="font-weight: 900;">20.12.2024. u 19:30 ispred Hrvatskog narodnog kazališta</span> – prijenos baleta Orašar<br/>
<span style="font-weight: 900;">23.12.2024. u 20 sati na Zrinjevcu</span> – koncert Marko Tolja<br/>
<span style="font-weight: 900;">27.12.2024. u 20 sati na Zrinjevcu</span> – koncerti Bacon and Blues te Gramophonix<br/>
<span style="font-weight: 900;">27.12.2024. od 20 sati na Trgu bana Jelačića </span>- Koncert Želim život - Zaklada Ana Rukavina<br/>
<span style="font-weight: 900;">31.12.2024. 20:00 na Trgu bana Jelačića</span> – doček Nove godine uz Baby Lasagnu, Miach, Gršu, Hiljsona Mandelu i drugih</p>
                      </div>

                  </div>
              </div>
          </div>

      </div>
  </div>
  <div class="container-fluid">
    <div class="row">
          <div class="col-lg-12 p-0 wow zoomIn"  data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/navecer.jpg" />
          </div>
          <div class="col-lg-6 p-0 wow fadeInLeft"  data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/navecer-01.jpg" />
          </div>
          <div class="col-lg-6 p-0 wow fadeInRight"  data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/navecer-02.jpg" />
          </div>
    </div>
  </div>
</div>


  <div id="clanci" class="blog" style="z-index: 100; position: relative; padding-top: 0px; padding-bottom: 120px; overflow: hidden; background: #28323c">


    <div class="container-fluid wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
          <img src="<?php echo $native_path ?>/assets/images/zg.png" style="max-width: 186px;"  /><br/><br/>
              <p style="color:#fff">Autor teksta: Monika Bončina<br/>
              Kreativno vodstvo: TG Studio<br/>
                Grafičko oblikovanje: Reset</p>
              <p style="color:#fff">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/telegram.png" style="max-width: 186px;"  />
          </div>
        </div>
      </div>
  </div>



<!-- Modal za sliku 1 -->
<div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModal1Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="background: #28323c;">
      <div class="modal-header" style="border:none">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zatvori" style="color:#fff !important"></button>
      </div>
      <div class="modal-body">
        <p style="font-size:18px; font-family: 'Young Serif', serif; color: #e8e5e1">“Advent Zagreb već godinama donosi jedinstvenu čaroliju blagdana, a ove godine dodatno naglašavamo posebne programe koji pružaju nezaboravno iskustvo. Tako, Advent i Božić na Sljemenu vikendima spaja prirodu i blagdanski duh uz paljenje adventskih svijeća i prigodne koncerte, dok Lovački Advent na Tuškancu donosi autentičnu atmosferu uz jedinstvenu gastronomsku ponudu, besplatan posjet Lovačkom muzeju i radionice za najmlađe. Poseban doživljaj od 14. prosinca očekuje posjetitelje na Balu na Gornjem gradu, uz veliki plesni podij i sjajne koncerte. Pozivam sve da posjete Advent Zagreb i otkriju zašto je naš grad nezaobilazna destinacija najljepšeg doba u godini.” <br/><br/>
        <span style="font-size:14px; font-family: 'Archivo'; color: #e8e5e1">- Martina Bienenfeld, Direktorica Turističke zajednice grada Zagreba</span></p>
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
  <script src="<?php echo $native_path ?>/assets/js/script.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
