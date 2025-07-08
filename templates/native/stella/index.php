
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/stella/';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<style type="text/css">
    
        @-webkit-keyframes vrtnja { 0% { -webkit-transform:rotate(0deg) } 100% { -webkit-transform: rotate(360deg);} }
        @keyframes vrtnja { 0% { transform:rotate(0deg) } 100% { transform: rotate(360deg);} }


</style>
<style>

    .carousel-control-next, .carousel-control-prev {width: 5% !important}
    .slide-wrapper {
      position: relative;
      overflow: hidden;
      width: 100%;
      height: 100vh;
    }

    .slide {
      position: absolute;
      top: 0;
      width: 100%;
      height: 100%;
      transition: transform 0.6s ease;
      background: #f6f0e7 !important;
    }

    .offscreen-left {
      transform: translateX(-100%);
    }

    .onscreen {
      transform: translateX(0);
    }

    .offscreen-right {
      transform: translateX(100%);
    }
  </style>
<head>
    <!-- this is required to load all the analytics and other scripts -->
    <?php wp_head(); ?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/x-icon" href="<?php echo $native_path ?>/assets/images/favicon.png">

    <title>The Perfect</title>

    <meta property="og:url"                content="http://www.telegram.hr" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Serve" />
    <meta property="og:description"        content="Jedan potez. Jedan reket i jedna loptica nevjerojatne brzine. Milimetri odlučuju, a sekunde pišu povijest." />
    <meta property="og:image"              content="<?php echo $native_path ?>/assets/images/facebook.jpg" />

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


  <div class="blog hero" style="padding-top: 50px; padding-bottom: 50px;">
    <a href="#pitanje">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
               <img src="<?php echo $native_path ?>/assets/images/claim.svg" style="padding: 30px" /><br/>
        </div>
    </div>
    <div class="row">
      <div class="col-lg-2 offset-lg-5 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
               <img class="logo" src="<?php echo $native_path ?>/assets/images/logo.png" /><br/>
        </div>
    </div>
  </div>
</a>
</div>


<div class="blog" style="background: #f6f0e7;">
  <div class="container">
      <div class="row">  

          <div class="col-lg-6 offset-lg-3 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            
             <p class="sticky-top" style=" font-weight: 300;">Jedan potez. Jedan reket i jedna loptica nevjerojatne brzine. Milimetri odlučuju, a sekunde pišu povijest.<br/><br/><span style="font-weight:600 !important">Telegram i Stella Artois</span> traže baš takve trenutke. Prisjetite se onog
savršenog servisa koji vam je ostao u sjećanju i podijelite ga s nama.</p>
          </div>
        </div>
      </div>
</div>


<div class="blog" style="background: #f6f0e7; padding-bottom: 80px; padding-top: 0;">

  <div class="container">
      <div class="row">  
          <div class="col-lg-4 offset-lg-4 text-center">
             <img class="smanjinamob" src="<?php echo $native_path ?>/assets/images/pivo.png" style="z-index:1 !important" />
          </div>
        </div>
      </div>
</div>



<div class="blog" style="background: #f6f0e7; padding-bottom: 30px; padding-top: 0;">

  <div class="container p-0">
      <div class="row">  
          <div class="col-lg-6 offset-lg-3 text-center">
             <h2>Koji je, po tebi, najvažniji servis u povijesti hrvatskog tenisa – i zašto?</h2>
             <p>Pitali smo vas koji je, po vama, najvažniji servis u povijesti hrvatskog tenisa i zašto? Svoje odgovore ste poslali u stilu sportskih komentara, i 6 najboljih je osvojilo nagrade. <br/><br/>U nastavku donosimo listu pobjednika i najbolje odgovore.</p><br/><br/>
             <h3 style="font-weight:700 !important">Nagrade su osvojili: </h3><br/><br/>
             <h4 style="font-weight:700 !important">Nada Jagnjić<br/>Nikol Valinčić<br/>Ružica Mandić<br/>Antonio Klemić<br/>Davor Lerić<br/>Lucija Perić</h4>
          </div>
        </div>
      </div>
</div>



<div class="blog" style="background: #f6f0e7; padding-bottom: 30px; padding-top: 0;">

<div class="container">
  <div class="row">
    <div class="col-12">
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="col-12 bg-white text-center p-5" style="border-radius: 15px;">
              <p>"Ivanišević, Wimbledon 2001., finale protiv Raftera.<br/><br/>Peti set, 8-7, četvrta meč lopta...<br/><br/>Tišina u mom dnevnom boravku je bila grobna. Mama drži tatin rukav kao da će se utopiti. Tata ne trepće. Susjedov televizor se čuje kroz zid - cijela zgradi diše kao jedan. Goran uzima loptu. Odskoči jednom, dvaput. Srce mi lupa kao da je moje ime na marker-u. Pogled prema nebu. Onaj njegov pogled kada moli sve svece da mu ne zataji ruka. Zagreb je stao. Split je stao. Karlovac, Osijek, Dubrovnik - sve je stalo.<br/><br/>I onda...<br/><br/>Zalet. Ruka se podiže kao katapult. Lopta leti kao da nosi sve naše molitve. Nije to bio savršeni servis,ali je bio dovoljno dobar da Rafter lopticu zakuca u mrežu. I zbog toga je savršen,jer se njime ispisala naša teniska povijest. Goran pada na travu. Ruke raširene kao da hoće zagrliti cijeli svijet. A u tom trenutku...<br/><br/>Moj tata viče tako glasno da se susjedi plaše. Mama plače i smije se istovremeno. Ja skačem po sofi kao nenormalna. Na ulici se čuju trube. Netko puca petarde. Susjeda viče s balkona: ""NAAAAAŠŠ!"" To je bila pobjeda nacije. Kad je Goran ustao s te trave, podigao je i nas. Sve nas. Malu zemlju koja je htjela biti velika. Sve što je došlo poslije - Čilić, Karlović, Donna, Davis Cup - sve nosi DNK tog servisa.<br/><br/>To je servis koji je dokazao: ""Hrvatska postoji. I mi smo jači nego što mislite."<br/><br/><br/>- <span style="font-weight:800 !important">Nada Jagnjić</span></p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-12 bg-white text-center p-5" style="border-radius: 15px;">
              <p>"Dame i gospodo, dobrodošli u povijest!
              <br/><br/>Ako postoji udarac koji je Hrvatsku stavio na tenisku kartu svijeta, to je – servis. Hrvatski tenisači nisu samo slali loptice preko mreže – oni su ih katapultirali, mjerili ih u stotinama kilometara na sat i njome osvajali srca navijača i... Grand Slamove.
              <br/><br/>Goran Ivanišević – 'As iz snova'<br/>
              Kad je Wimbledon 2001. eksplodirao u euforiji, to nije bio samo turnir, to je bila katarza. Ivaniševićev servis bio je najubojitije oružje tog ljeta. Ljevak iz Splita tresao je mrežu s desecima asova – čak 213 asova tijekom turnira, uključujući 21 u finalu protiv Raftera. Goran nije igrao po pravilima fizike, on ih je pisao iznova – svaki put kad bi bacio lopticu u zrak.
              <br/><br/>
              Ivo Karlović – 'Doktor As'<br/>
              A onda – Ivo Karlović. Visok 2,11 m, njegov servis nije dolazio – on je padao s neba. S više od 13.500 asova u karijeri, Karlović je apsolutni rekorder i simbol servis-dominacije. Tko ga nije doživio na betonu Cincinnatija ili travi Wimbledona, ne zna što znači – biti nemoćan na reternu.
              <br/><br/>
              Marin Čilić – 'Servis stabilnosti'<br/>
              Čilićev servis nije bio čista sirova snaga, nego kombinacija preciznosti, tajminga i pouzdanosti. Na putu do naslova na US Openu 2014., Marin je ostavio servis-impresiju – asovi u ključnim trenucima, bez dvostrukih pogrešaka, uvijek hladne glave. Nije se bojao servirati za meč protiv Federera. Niti protiv Nishikorija u finalu.
              <br/><br/>
              Hrvatski servis kroz povijest nije bio samo udarac – bio je oružje, zaštitni znak, i put prema teniskoj besmrtnosti. Od Ivaniševićevih ""bombardiranja"", preko Karlovićevih ""projektila"", do Čilićevih ""strelovitih preciznosti"" – hrvatski servis je vrisak talenta i ponosa."<br/><br/><br/>- <span style="font-weight:800 !important">Nikol Valinčić</span></p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-12 bg-white text-center p-5" style="border-radius: 15px;">
              <p>"Vjerujem da je kroz povijest hrvatskog tenisa odigrano mnogo važnih servisa, od kojih su neki ispisali povijest i donijeli nam nezaboravne trenutke. Ipak, mnogih od tih trenutaka se ili ne sjećam jer tada nisam bila rođena, ili sam bila premlada da bih ih doživjela na pravi način.<br/><br/>
              Zato je za mene osobno najvažniji servis u povijesti hrvatskog tenisa onaj Donne Vekić protiv Marte Kostyuk u četvrtfinalu Olimpijskih igara 2024. godine.
              To ljeto sam provela u Americi. Zbog vremenske razlike većina Donninih mečeva počinjala je u 6 ujutro po lokalnom vremenu, a kako su se igrali dan za danom, već sam bila iscrpljena – budila sam se rano i odmah nakon toga odlazila na duple smjene na poslu.<br/><br/>
              No, za taj meč, koji je značio borbu za medalju, odlučila sam uzeti slobodan dan i napokon gledati u miru. Međutim, bilo je sve samo ne mirno! Meč je trajao gotovo tri sata i bio ispunjen napetosti, preokretima i živciranjem. Iako Donnin postotak prvog servisa tijekom meča nije bio najsjajniji, upravo taj posljednji servis za pobjedu bio je najvažniji. Kad je najviše trebalo, servisom je zaključila meč i izborila plasman među četiri najbolje tenisačice svijeta.<br/><br/>
              Taj trenutak, nakon tri sata borbe, umora i navijanja, ostao mi je duboko urezan u sjećanje. Ne samo zato što je značio ulazak u polufinale, već zato što je kasnije rezultirao i povijesnom srebrenom medaljom – prvom olimpijskom medaljom za hrvatski ženski tenis.<br/><br/>
              Za mene, to nije bio samo sportski trenutak, bio je to trenutak povezanosti, ponosa i strasti, koji me podsjetio koliko sport može dirnuti srce i ostati s nama cijeli život."<br/><br/><br/>- <span style="font-weight:800 !important">Ružica Mandić</span></p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-12 bg-white text-center p-5" style="border-radius: 15px;">
              <p>"Ne mogu reći da sam odmalena bio teniski fanatik. Tenis sam gledao usput – finale Wimbledona, malo Đokovića, malo Federera. I onda – Donna. Ne zato što je bila najbolja, nego jer je bila stvarna. Jer nije imala ‘sve posloženo’. Jer sam prvi put vidio sportašicu koja ne ide linijom manjeg otpora.<br/><br/>

              Na Olimpijskim igrama u Tokiju 2021. gledam je kako jedva hoda između poena, koljeno joj omotano, izrazi lica kao da joj tijelo govori da stane. U drugom kolu protiv Buzărnescu izvlači gemove preko čiste volje. Servis – ne za as, ne za spektakl, nego za ostati u igri. U osmini finala protiv Rybakine pada. Ali taj meč nije bio poraz. Bio je dokaz. Da je stigla tamo ozlijeđena, borila se, pobijedila dvije protivnice, igrala za Hrvatsku bez kalkulacije, bez odustajanja.<br/><br/>

              Godinu dana kasnije operacija. Pa mukotrpan oporavak. Pa povratak. Gledam 2023. kad ulazi u četvrtfinale Australian Opena, kad svi misle da je gotova – a ona ide još jače. Nema halabuke, nema self-help citata, samo ona i teren. I servis koji sad ima još veću težinu jer znaš što stoji iza njega – sve što je preživjela.<br/><br/>

              Za mene, najvažniji servis u povijesti hrvatskog tenisa nije onaj koji je donio naslov, nego onaj Donnin u Tokiju – kad je servirala s jednim koljenom, za sebe, za svoj inat, za dres s hrvatskim grbom. Taj servis ne postoji u highlightima. Ali postoji u svakom tko zna koliko boli treba da bi mogao ponovno stati na liniju, podignuti reket i reći: još igram."<br/><br/><br/>- <span style="font-weight:800 !important">Antonio Klemić</span></p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-12 bg-white text-center p-5" style="border-radius: 15px;">
              <p>"Iako svi pamtimo sjajnu Ivaniševićevu igru u finalu Wimbeldona 2001. gdje je zahvaljujući svojem izvrsnom servisu i čak 27 aseva osvojio titulu, rijetko tko spominje ogromni uspjeh Ive Majoli na Roland Garrosu 1997. gdje je Hrvatskoj donijela i prvu Grand Slam titulu.<br/><br/>Nije rijetka pojava da na velikim natjecanjima hrvatski sportaši ulaze kao autsajderi, što je bio slučaj i s Majoli, ali zato su pobjede s kojima često izlazimo protiv glavnih favorita još i slađe. Majoli je sredinom prvog seta uspjela osvojiti break i doći u prednost, ali sljedeći servis gem bio je ključan da tu prednost i zadrži. Majoli je u kritičnom gemu dominirala, a istaknuo bih servis kod rezultata 30:0 gdje se Majoli kod drugog servisa odlučila za riskantni široki servis blizu linije kojeg suparnica nije uspjela iskontrolirati. To je pokazalo koliko je Majoli i psihički spremna da bude na velikoj pozornici jer je i u ključnim trenucima meča zadržala koncentraciju i nije se predavala. Tu prednost je naposljetku konvertirala i u osvajanje seta, a tempo igre je nastavila i u drugom setu kojeg je bez velikih poteškoća dobila te osvojila jednu od najprestižnijih titula.<br/><br/>Veliki uspjeh Ive Majoli doprinuo je i popularizaciji tenisa u Hrvatskoj te inspirirao buduće generacije hrvatskih tenisača i tenisačica, uključujući i finalisticu Olimpijskih igara Donnu Vekić."<br/><br/><br/>- <span style="font-weight:800 !important">Davor Lerić</span></p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="col-12 bg-white text-center p-5" style="border-radius: 15px;">
              <p>"Dame i gospodo, pripremite se za retrospektivu servisa koji nisu samo osvajali poene, nego i srca – dobro došli u povijest hrvatskog tenisa!<br/><br/>Počinjemo s Goranom Ivaniševićem i Wimbledonom 2001. – meč-lopta, nervi na izmaku, a Goran šalje as ravno u vječnost. Bio je to servis koji nije bio samo tehnički savršen – bio je emocionalno savršen. Pravi perfect serve jedne generacije.<br/><br/>Zatim, Ivo Karlović – statistički fenomen i čovjek čiji je servis imao vlastitu gravitaciju. Doktor Ivo, gospodar aseva, servirao je s toliko milimetarske preciznosti da bi i švicarski sat bio ljubomoran.<br/><br/>I ne smijemo zaboraviti Donnu Vekić, našu prvakinju sadašnjice. Njezina sposobnost da u ključnim trenucima servira hladne, fokusirane loptice na samu liniju pokazuje da perfect serve nije samo pitanje sile – nego i stava.<br/><br/>Kao i savršeno servirana Stella Artois, i ovi servisi traže pažnju, balans i majstorstvo. A kad se spoje u pravom trenutku – stvaraju povijest.<br/><br/>Zato i ja šaljem ovaj svoj osvrt u nadi da će završiti točno na liniji – pa možda i osvojim potpisani reket, ruksak i hladan paket Stella Artoisa. Jer realno – tko ne bi poželio vlastiti perfect serve?"<br/><br/><br/>- <span style="font-weight:800 !important">Lucija Perić</span></p>
            </div>
          </div>
        </div>
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon d-none"></span>
          <span class="fs-1 text-dark">&#8249;</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon d-none"></span>
          <span class="fs-1 text-dark">&#8250;</span>
        </button>
      </div>
    </div>
  </div>
</div>

</div>



<div class="blog sakrijnamob" style="background: #f6f0e7;">

  <div class="container-fluid p-0">
      <div class="row">  
          <div class="col-lg-12">
             <a href="#pitanje"><img src="<?php echo $native_path ?>/assets/images/slika.jpg" style="z-index:1 !important" /></a>
          </div>
        </div>
      </div>
</div>




<div class="blog namobitelu" style="background: #f6f0e7;">

  <div class="container-fluid p-0">
      <div class="row">  
          <div class="col-lg-12">
             <a href="#pitanje"><img src="<?php echo $native_path ?>/assets/images/slika-mobilna.jpg" style="z-index:1 !important" /></a>
          </div>
        </div>
      </div>
</div>


  <div id="clanci" class="blog" style="z-index: 100; position: relative; padding-top: 0px; padding-bottom: 120px; overflow: hidden; background: #f6f0e7;">


    <div class="container-fluid wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
              <p style="color:#000">Autor teksta: Monika Tomljanović<br/>
              Kreativno vodstvo: TG Studio<br/>
                Grafičko oblikovanje: Reset</p>
              <p style="color:#000">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/telegram.png" style="max-width: 186px;"  />
          </div>
        </div>
      </div>
  </div>
  <script type="text/javascript">
      const images = ["<?php echo $native_path ?>/assets/images/osamdesete-01.jpg", "<?php echo $native_path ?>/assets/images/osamdesete-02.jpg"];
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
      setInterval(showNextImage, 5000);

      // Inicijalno postavljanje slike
      updateImage();
</script>
<script>
  const video = document.getElementById('myVideo');

  // Kada se video završi, ostavi ga na zadnjem frameu
  video.addEventListener('ended', () => {
    video.pause();
    video.currentTime = video.duration; // osiguraj da ostane na zadnjem frameu
  });
</script>
<script>
  function goToNext() {
    const screen1 = document.getElementById('screen1');
    const screen2 = document.getElementById('screen2');

    screen1.classList.remove('onscreen');
    screen1.classList.add('offscreen-right');

    screen2.classList.remove('offscreen-left');
    screen2.classList.add('onscreen');
  }

  function goToPrev() {
    const screen1 = document.getElementById('screen1');
    const screen2 = document.getElementById('screen2');

    screen2.classList.remove('onscreen');
    screen2.classList.add('offscreen-left');

    screen1.classList.remove('offscreen-right');
    screen1.classList.add('onscreen');
  }
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
