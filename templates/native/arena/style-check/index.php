
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/arena/style-check';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>


<head>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <style type="text/css">

        @-webkit-keyframes vrtnja { 0% { -webkit-transform:rotate(0deg) } 100% { -webkit-transform: rotate(360deg);} }
        @keyframes vrtnja { 0% { transform:rotate(0deg) } 100% { transform: rotate(360deg);} }


    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $native_path ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/style.css?v=2709">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/owl.css">
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="15" class="pozadina">
<?php do_action('telegram_body_start'); ?>
  <!-- ***** Preloader Start ***** -->


  <div class="blog hero">
    <div class="container-fluid">
      <div style="position: absolute; width: 140px;height: 50px; left:20px; top:20px"><img src="<?php echo $native_path ?>/assets/images/arena.png"/></div>
      <div style="position: absolute; width: 140px;height: 50px; right:20px; top:20px"><img src="<?php echo $native_path ?>/assets/images/super1n.png"/></div>
      <div class="row">
        <div class="col-lg-6 offset-lg-3 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
               <img src="<?php echo $native_path ?>/assets/images/claim.svg" style="padding: 30px" /><br/>
        </div>
    </div>
  </div>
</div>


<div class="blog" style="background: #891a21 url('<?php echo $native_path ?>/assets/images/redpatt.png')">
  <div class="container">
      <div class="row">
          <div class="col-lg-5">
             <p style="color:#fff;" class="sticky-top"><span class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s"><span style="font-size: 2em; line-height: 1.1em;">Za tri sam se prigode odjenula sama, pa me za iste te prilike odjenula stilistica: <font style="font-weight:900">Razlika je velika</font></span></span>
              <br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/crta.png"/><br/>
              Autorica: <font style="font-weight:800">Ema Glavina</font><br/>
              Stilistica: <font style="font-weight:800">Ivana Pavić</font><br/>
              Fotograf: <font style="font-weight:800">Marko Miščević</font>
              </p>
          </div>
          <div class="col-lg-7 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/prva.png" style="z-index:1 !important" />
          </div>
        </div>
      </div>
</div>



<div class="blog" style="background: #000 url('<?php echo $native_path ?>/assets/images/blackpatt.png')">
  <div class="container">
      <div class="row">

          <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <p style="color:#fff">Na mom popisu želja za svaku iduću novu godinu već se dugo nalazi odlazak u shopping s profesionalnim stilistom, a kako svi znamo da prava nova godina ionako kreće s rujnom, i meni se poklopilo da je upravo tad napokon i ostvarim. <br/><br/>Cijeli život volim i pratim modu, a otkako sam počela raditi kao lifestyle novinarka, a kasnije i urednica, moj se odnos prema njoj dodatno intenzivirao. S godinama sam pronašla neku svoju provjerenu formulu kad je riječ o biranju odjeće, obuće i dodataka za razne prilike, ali sam primijetila da, poput mnogih, u tom polju igram na sigurno i zapravo vrlo rijetko izlazim iz zone komfora.</p><br/><br/>

          </div>
          <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/druga.jpg"/>
            <br/><br/>
          </div>
          <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <p style="color:#fff">Ne radi se toliko o tome da ne želim ponekad odjenuti neki drugačiji komad, koliko o tome da mi pogled naprosto uvijek bježi prema onima slične, mahom minimalističke estetike s vrlo malo prisutnosti boja. A upravo zato što radim posao koji radim, znam kolika može biti moć dobrog stilista - u što sam se naumila uvjeriti i na vlastitom primjeru. <br/><br/>U pomoć sam pozvala <font style="font-weight:900">Ivanu Pavić</font>, modnu stilisticu koja je radila za sve renomirane modne časopise i digitalne publikacije, sudjelovala u brojnim kampanjama i usko surađivala s raznim dizajnerima.<br/><br/>

<img src="<?php echo $native_path ?>/assets/images/crta-sredina.png"/>
            <br/><br/>
              Našle smo se na kavi u <a href="https://www.arenacentar.hr" target="_blank">Arena Centru</a>, malo razgovarale o tome što volim, a što ne kad je moda u pitanju i krenule planirati izazov. Pao je sljedeći dogovor: odabrat ću si po jedan outfit za važan poslovni sastanak, jedan za klasični dan u uredu i jedan za after-work druženje, a onda će mi za iste prigode outfite odabrati ona. Drugim riječima, iz prve ću ruke provjeriti isplati li se angažirati osobnog stilista i što nam on točno može pružiti.

            </p><br/><br/>
          </div>

        </div>
      </div>
</div>


<div class="blog" style="background: #fff">
  <div class="container">
      <div class="row">
          <div class="col-lg-5 order-lg-1">
             <p class="sticky-top" style="color:#000"><span class="wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s"><span style="color:#000; font-size:3em; font-weight:900">LOOK 1</span><br/><i>Casual look za klasični dan u uredu</i><br/><br/><span style="font-weight:900">Ema:</span><br/>Za odlazak u ured biram outfite prema dva jednostavna načela - da mi u njima bude udobno, a da u isto vrijeme izgledaju dovoljno pristojno da se u njima mogu pojaviti na ponekom iznenadnom sastanku ili eventu. Volim kombinirati elegantnije komade, poput ove satenske suknje boje vanilije s onim svakodnevnijim, poput ove motorističke jakne i kaubojskih čizama.</span>
              <br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/crta-crna.png"/><br/><i>
              Jakna C&A 59,99€<br/>
              Majica Mohito 5,99€<br/>
              Suknja Liu Jo 219,90€<br/>
              Čizme Replay 263,00€<br/>
              Torbica Mango 29,99€<br/>
              Naočale Bottega Veneta, Optika Anda, 375,00€</i>


              </p>
          </div>
          <div class="col-lg-7 order-lg-2 p-0 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <div style="width:110px; height: 110px; position: absolute; margin-left: 30px; margin-top:30px; -webkit-animation: vrtnja 11s linear 0s infinite; animation: vrtnja 11s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/ema1.png"/></div>
                <img src="<?php echo $native_path ?>/assets/images/sl-01.jpg"/><br/><br/>
                <img src="<?php echo $native_path ?>/assets/images/sl-02.jpg"/>
          </div>
        </div>
      </div>
</div>


<div class="blog" style="background: #fff; padding-top: 0;">
  <div class="container">
      <div class="row">
          <div class="col-lg-5 order-lg-2">
             <p class="sticky-top" style="color:#000"><span class="wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s"><span style="font-weight:900">Ivana:</span><br/>Za obični dan u uredu volim odabrati traper, ali ne bilo koji, već fini, tamni traper. Emi sam odabrala traperice boot cut kroja koje najbolje laskaju ženskoj figuri. Ove dolaze s efektnim kosim kopčanjem, dok sam za gornji dio odabrala košulju koju sam stilizirala u duhu 80-ih godina, s naglašenim ramenima. Košulju na plavo-roze prugice sam birala tako da joj paše uz ten, a bijele cipele sam odabrala zato da podignu ukupni dojam. Crvena torbica zaokružuje cijeli outfit, a uz ove sunčane naočale i naušnice, Ema je spremna za sve izazove koje joj (poslovni) dan donosi.</span>
              <br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/crta-crna.png"/><br/><i>
              Traperice Opus, Peek & Cloppenburg, 89,99€ <br/>
              Košulja Mango 39,99€ <br/>
              Cipele Aldo 115,00€<br/>
              Torbica Mango 39,99€<br/>
              Naušnice Mango 12,99€ <br/>
              Bottega Veneta, Optika Anda, 475,00€</i>
              </p>
          </div>
          <div class="col-lg-7 order-lg-1 p-0 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <div style="width:110px; height: 110px; position: absolute; margin-left: 30px; margin-top:30px; -webkit-animation: vrtnja 11s linear 0s infinite; animation: vrtnja 11s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/ivana1.png"/></div>
                <img src="<?php echo $native_path ?>/assets/images/sl-03.jpg"/><br/><br/>
                <img src="<?php echo $native_path ?>/assets/images/sl-04.jpg"/><br/><br/>
                <img src="<?php echo $native_path ?>/assets/images/sl-05.jpg"/>
          </div>
        </div>
      </div>
</div>







<div class="blog"  style="background: #891a21">
  <div class="container">
      <div class="row">
          <div class="col-lg-5 order-lg-1">
             <p class="sticky-top" style="color:#fff"><span class="wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s"><span style="color:#fff; font-size:3em; font-weight:900">LOOK 2</span><br/><i>Business look za važan sastanak</i><br/><br/><span style="font-weight:900">Ema:</span><br/>Moram priznati da moj posao vrlo rijetko (ako ikad) zahtijeva baš izrazito formalno odijevanje, tako da se čak ni za ovu prigodu nisam mogla natjerati da se uvučem u klasično crno ili plavo odijelo. Umjesto toga, poželjela sam nešto drugačije i odabrala široke sive hlače, cipele s visokom potpeticom te kratko rezani crno-bijeli sako, a look upotpunila velikom clutch torbicom.</span>
              <br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/crta.png"/><br/><i>
              Sako Josh V, Peek & Cloppenburg, 199,99€<br/>
              Hlače C&A 39,99€<br/>
              Torbica Mango 29,99€ <br/>
              Cipele Aldo 115,00€<br/>
              Torbica Liu Jo 169,00€</i>


              </p>
          </div>
          <div class="col-lg-7 order-lg-2 p-0 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
                          <div style="width:110px; height: 110px; position: absolute; margin-left: 30px; margin-top:30px; -webkit-animation: vrtnja 11s linear 0s infinite; animation: vrtnja 11s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/ema2.png"/></div>
                <img src="<?php echo $native_path ?>/assets/images/sl-06.jpg"/><br/><br/>
                <img src="<?php echo $native_path ?>/assets/images/sl-07.jpg"/>
          </div>
        </div>
      </div>
</div>


<div class="blog" style="background: #891a21; padding-top: 0;">
  <div class="container">
      <div class="row">
          <div class="col-lg-5 order-lg-2">
             <p class="sticky-top" style="color:#fff"><span class="wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s"><span style="font-weight:900">Ivana:</span><br/>Za ovakve je prigode najbolje odabrati neko dobro krojeno odijelo, a ovo koje sam odabrala je baš takvo. Veže se u struku, hlače lijepo padaju na crtu, a njegova bež nijansa s natruhama boje breskve odlično pristaju Eminoj puti. U isto je vrijeme i strogo poslovno i vrlo ženstveno. Odijelo sam odlučila upotpuniti zlatnim detaljima i razigrati odabirom cipela i torbice u bojama.</span>
              <br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/crta.png"/><br/><i>
              Sako Vicolo, Peek & Cloppenburg, 179,99€<br/>
              Hlače Vicolo, Peek & Cloppenburg, 99,00€ <br/>
              Cipele Aldo 86,00€<br/>
              Torbica Gianni Chiarini, Peek & Cloppenburg, 149,99€<br/>
              Mango naušnice 12,99€<br/>
              Ogrlica Mohito 17,99€</i>
              </p>
          </div>
          <div class="col-lg-7 order-lg-1 p-0 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
                          <div style="width:110px; height: 110px; position: absolute; margin-left: 30px; margin-top:30px; -webkit-animation: vrtnja 11s linear 0s infinite; animation: vrtnja 11s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/ivana2.png"/></div>
                <img src="<?php echo $native_path ?>/assets/images/sl-08.jpg"/><br/><br/>
                <img src="<?php echo $native_path ?>/assets/images/sl-09.jpg"/>
          </div>
        </div>
      </div>
</div>




<div class="blog" style="background: #fff">
  <div class="container">
      <div class="row">
          <div class="col-lg-5 order-lg-1">
             <p class="sticky-top" style="color:#000"><span class="wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s"><span style="color:#000; font-size:3em; font-weight:900">LOOK 3</span><br/><i>Look za druženje nakon posla</i><br/><br/><span style="font-weight:900">Ema:</span><br/>Kad bih morala birati između sva tri svoja današnja outfita, za ovaj bih rekla da se u njemu definitivno najviše osjećam kao - ja. Zaljubila sam se u ove slingback cipele boje crnog vina, kao i u ove zelene utility hlače koje u kombinaciji s njima izgledaju baš nekako cool. Džemper u tamno plavoj nijansi i baloner boje kave dali su završni touch, a jako su mi fora i ove naočale oblih okvira i mini torbica.</span>
              <br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/crta-crna.png"/><br/><i>
              Hlače Patrizia Pepe, Europa 92, 99,00€<br/>
              Vesta Mango 39,99€<br/>
              Baloner Liu Jo 289,00€<br/>
              Torbica Gianni Chiarini, Peek & Cloppenburg, 164,99€<br/>
              Cipele Mango 49,99€<br/>
              Naočale Saint Laurent, Optika Anda 440,00€</i>


              </p>
          </div>
          <div class="col-lg-7 order-lg-2 p-0 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
                          <div style="width:110px; height: 110px; position: absolute; margin-left: 30px; margin-top:30px; -webkit-animation: vrtnja 11s linear 0s infinite; animation: vrtnja 11s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/ema3.png"/></div>
                <img src="<?php echo $native_path ?>/assets/images/sl-10.jpg"/><br/><br/>
                <img src="<?php echo $native_path ?>/assets/images/sl-11.jpg"/>
          </div>
        </div>
      </div>
</div>


<div class="blog" style="background: #fff; padding-top: 0;">
  <div class="container">
      <div class="row">
          <div class="col-lg-5 order-lg-2">
             <p class="sticky-top" style="color:#000"><span class="wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s"><span style="font-weight:900">Ivana:</span><br/>Htjela sam postići kombinaciju koja spaja ženstvene elemente s onima koji su pomalo cool i drugačiji, s obaveznim dodatkom boje koja odlično komplimentira njezinim plavim očima i svjetlijoj puti. Uz to, Eminoj ženstvenoj figuri lijepo pristaju uska traper suknja i uža majica off-roze boje, a za dozu kontrasta u vidu robusnosti zadužene su čizme. S obzirom na to da je jesen krenula i navečer zna biti hladnije, look sam zaokružila bijelim mantilom, a sve skupa upotpunila raznim modnim detaljima.</span>
              <br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/crta-crna.png"/><br/><i>
              Kaput Mango 149,99€<br/>
              Replay suknja 135,00€<br/>
              Majica C&A 22,99€<br/>
              Replay čizme 294,00€<br/>
              Ogrlice Mohito 17,99€<br/>
              Torba Calvin Klein 129,00€<br/>
              Naočale Saint Laurent, Optika Anda, 455,00€</i>
              </p>
          </div>
          <div class="col-lg-7 order-lg-1 p-0 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
                          <div style="width:110px; height: 110px; position: absolute; margin-left: 30px; margin-top:30px; -webkit-animation: vrtnja 11s linear 0s infinite; animation: vrtnja 11s linear 0s infinite;"><img src="<?php echo $native_path ?>/assets/images/ivana3.png"/></div>
                <img src="<?php echo $native_path ?>/assets/images/sl-12.jpg"/><br/><br/>
                <img src="<?php echo $native_path ?>/assets/images/sl-13.jpg"/><br/><br/>
                <img src="<?php echo $native_path ?>/assets/images/sl-14.jpg"/>
          </div>
        </div>
      </div>
</div>








<div class="blog" style="background: #000; padding-bottom: 0; padding-top: 0;">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4 p-0">
            <div class="image-gallery" id="gallery1">
              <img src="<?php echo $native_path ?>/assets/images/01.jpg" />
            </div>
          </div>
          <div class="col-lg-4 p-0">
            <div class="image-gallery" id="gallery2">
              <img src="<?php echo $native_path ?>/assets/images/02.jpg" />
            </div>
          </div>
          <div class="col-lg-4 p-0">
            <div class="image-gallery" id="gallery3">
              <img src="<?php echo $native_path ?>/assets/images/03.jpg" />
            </div>
          </div>
        </div>
  </div>
</div>


<div class="blog" style="background: #000 url('<?php echo $native_path ?>/assets/images/blackpatt.png'); padding-bottom: 10px;">
  <div class="container">
      <div class="row">

          <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <p style="color:#fff">Nakon cijelog dana provedenog u <a href="https://www.arenacentar.hr" target="_blank">Arena Centru</a> s Ivanom, nimalo ne dvojim oko toga jesam li postupila ispravno kad sam je angažirala. Način na koji ona promišlja modne kombinacije na toliko je razina dublji i kreativniji od mog. <br/><br/>Ona točno zna koja boja otvara ili zatvara, zna kakvi krojevi laskaju ili ne laskaju nečijoj figuri i sa mnom je, baš kao i s ostalim klijentima, nesebično podijelila sve savjete i trikove struke. I dalje mi se sviđaju svi komadi koje sam odabrala za svoje današnje outfite, ali kad pogledam ukupnu sliku, moram biti iskrena i reći da me ona odjenula tako da izgledam bolje.<br/><br/>Samoj mi vjerojatno nikad ne bi palo na pamet odabrati rozu košulju s plavim prugicama ili narančastu torbicu (jer sam, ponavljam, navikla razmišljati u istim sigurnim okvirima), ali ne mogu ne zaključiti kako u ovim kombinacijama one funkcioniraju odlično. Štoviše, dvije osobno mi omiljene kombinacije cijelog ovog izazova su upravo one koje je stilizirala Ivana, a radi se o onima za poslovni sastanak i obični dan u uredu. Ne znam u što sam se više zaljubila, bež odijelo ili traperice.<br/><br/>Provela sam dan u shoppingu, pritom se zbilja dobro zabavila i naučila hrpu korisnih modnih trikova koje ću nadalje početi koristiti - izlazak iz zone komfora se, zaključujem, ponekad ipak isplati.<br/><br/><img src="<?php echo $native_path ?>/assets/images/crta-sredina.png"/><br/><br/>Preuzmi Arena SPOT aplikaciju i skupljaj bodove jer možda ćeš baš ti imati priliku otići u Arena Centar, u shopping sa stilisticom Ivanom Pavić! <br/><br/><img src="<?php echo $native_path ?>/assets/images/crta-sredina.png"/></p>
          </div>

        </div>
      </div>
</div>


  <div id="clanci" class="blog" style="z-index: 100; position: relative; padding-top: 0px; padding-bottom: 120px; overflow: hidden; background: #000 url('<?php echo $native_path ?>/assets/images/blackpatt.png')">


    <div class="container-fluid wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
              <p style="color:#fff">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/telegram.png" style="max-width: 186px;"  />
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
<script type="text/javascript">
    const galleries = [
        {
            element: document.querySelector("#gallery1 img"),
            images: ["<?php echo $native_path ?>/assets/images/02.jpg", "<?php echo $native_path ?>/assets/images/03.jpg"],
            interval: 3000, // 3 sekunde
            startDelay: 0 // Započinje odmah
        },
        {
            element: document.querySelector("#gallery2 img"),
            images: ["<?php echo $native_path ?>/assets/images/03.jpg", "<?php echo $native_path ?>/assets/images/01.jpg"],
            interval: 3000, // 3 sekunde
            startDelay: 500 // Započinje nakon 0.5 sekundi
        },
        {
            element: document.querySelector("#gallery3 img"),
            images: ["<?php echo $native_path ?>/assets/images/01.jpg", "<?php echo $native_path ?>/assets/images/02.jpg"],
            interval: 3000, // 3 sekunde
            startDelay: 1000 // Započinje nakon 1 sekunde
        }
    ];

    galleries.forEach(gallery => {
        let currentImageIndex = 0;

        function updateImage() {
            const imageUrl = gallery.images[currentImageIndex];
            gallery.element.style.opacity = 0; // Postavite opacity na 0 prije promjene slike
            setTimeout(() => {
                gallery.element.src = imageUrl;
                gallery.element.alt = `Slika ${currentImageIndex + 1}`;
                gallery.element.style.opacity = 1; // Postavite opacity na 1 nakon promjene slike
            }, 500); // Vrijeme za tranziciju
        }

        function showNextImage() {
            currentImageIndex = (currentImageIndex + 1) % gallery.images.length;
            updateImage();
        }

        // Postavite interval za automatsko klizanje prema zadanoj vrijednosti nakon odgode
        setTimeout(() => {
            showNextImage(); // Prikazivanje prve slike odmah nakon odgode
            setInterval(showNextImage, gallery.interval); // Postavljanje intervala
        }, gallery.startDelay);

        // Inicijalno postavljanje slike
        updateImage();
    });
</script>



    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_footer(); ?>
</body>
</html>
