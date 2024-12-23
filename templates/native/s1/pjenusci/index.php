
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/s1/pjenusci';
    // use this for versioning, to avoid cache problems
    $version = 1;
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
<style type="text/css">

        @-webkit-keyframes muving { 0% { transform: rotate(0deg) } 33% { transform:rotate(5deg); } 50% {transform: rotate(-5deg);} 66% {transform: rotate(0deg);} }
    @keyframes muving { 0% { transform: rotate(0deg) } 33% { transform:rotate(5deg); } 50% {transform: rotate(-5deg);} 66% {transform: rotate(0deg);} }


    .vrtnja {animation: muving 5s ease-in-out 0s infinite;-webkit-animation: muving 5s ease-in-out 0s infinite;}
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
    opacity:0.8;
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

<div class="snow">

  <div data-video-urls="https://telegram.reset.hr/advent-2024/video.mp4?=new" data-autoplay="true" data-loop="true" data-wf-ignore="true" style="opacity: 1; display: block;" class="snow w-background-video w-background-video-atom">
    <video id="video" autoplay loop muted playsinline data-wf-ignore="true" data-object-fit="cover" data-cmp-info="9">
      <source src="https://telegram.reset.hr/advent-2024/sparkles.mp4?=new" data-wf-ignore="true" data-cmp-ab="2">
    </video>
  </div>
</div>


  <div class="blog hero">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
               <img src="<?php echo $native_path ?>/assets/images/claim.png" style="padding: 0px" />
               <h3>Otkrijte eleganciju, proslavite trenutke<br/>i uživajte u svijetu pjenušaca</h3>
        </div>

    </div>


  </div>
</div>


  <div class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
               <p>Svaka proslava, bilo da je riječ o božićnom domjenku, rođendanu ili novogodišnjoj proslavi dijeli zajednički trenutak nazdravljanja. Tada jedni drugima želimo sve najbolje i da se večer nastavi u veselom tonu i ugodnoj atmosferi punoj dobre volje. A glavni akter nazdravljanja predstavlja čaša dobrog pjenušavog pića.</p>
               <p>Pjenušac je simbol slavlja, njegova zlatna boja i zvuk mjehurića u čaši evociraju otmjenost, luksuz i zabavu. Nije bez razloga pjenušac izabrano piće za nazdravljanje; ono unosi eleganciju i veselje gdje god se nalazili te nas potiče da maksimalno uživamo u svakom trenutku. Taj trenutak može biti luksuzno slavlje, intimna večera s voljenom osobom ili opuštanje nakon dugog dana.</p>
               <p>Boca pjenušca je također uvijek dobar odabir za poklon jer na ovaj način darujete dragoj osobi i dašak luksuza. Ovo pjenušavo, šarmantno piće dobrodošlo je u svakoj prigodi pa smo odlučili napraviti vodič u kojem ćete pronaći svoj savršeni pjenušac. Otkrijte pjenušavu priču kroz pažljivo odabrane etikete koje će uljepšati svaki Sparkling Moment.</p>
        </div>
    </div>

  </div>
</div>


  <div class="blog p-0">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 crveno okvir lijevi dolje text-center wow fadeIn p-0 m-0" data-wow-duration="1.5s" data-wow-delay="0s">
            <a href="#za-posebne-prilike"><img src="<?php echo $native_path ?>/assets/images/za-posebne-prilike.png"/></a>
        </div>
        <div class="col-lg-4 crveno okvir lijevi dolje text-center wow fadeIn p-0 m-0" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <a href="#za-darivanje"><img src="<?php echo $native_path ?>/assets/images/za-darivanje.png"/></a>
        </div>
        <div class="col-lg-4 crveno okvir lijevi desni dolje text-center wow fadeIn p-0 m-0" data-wow-duration="1.5s" data-wow-delay="1s">
            <a href="#za-opustanje"><img src="<?php echo $native_path ?>/assets/images/za-opustanje.png"/></a>
        </div>
    </div>
  </div>
</div>



  <div id="za-posebne-prilike" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <h1 style="color: #7c1c1c !important;">Premium pjenušci za posebne prilike</h1>
            <p>Život je satkan od raznih trenutaka među kojima se ističu oni iznimno posebni, poput vjenčanja, proslava poslovnih uspjeha ili zaruka. Tada želimo ovjekovječiti trenutak s dozom elegancije, a za to biramo premium pjenušce.</p>
        </div>
    </div>
  </div>
</div>



<div class="blog p-0">
  <div class="container-fluid">
        <div class="row">
             <div class="col-lg-4 okvir lijevi text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/01.png" /><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/01-naziv.png"/>
             </div>
             <div class="col-lg-4 okvir lijevi text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0.3s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/02.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/02-naziv.png"/>
             </div>
             <div class="col-lg-4 okvir lijevi desni text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0.6s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/03.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/03-naziv.png"/>
             </div>
        </div>
        <div class="row">
             <div class="col-lg-4 okvir lijevi text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/04.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/04-naziv.png"/>
             </div>
             <div class="col-lg-4 okvir lijevi text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0.3s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/05.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/05-naziv.png"/>
             </div>

             <div class="col-lg-4 okvir lijevi desni text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0.6s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/06.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/06-naziv.png"/>
             </div>
        </div>
        <div class="row">
             <div class="col-lg-4 okvir lijevi dolje text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/07.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/07-naziv.png"/>
             </div>
             <div class="col-lg-4 okvir lijevi dolje text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0.3s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/08.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/08-naziv.png"/>
             </div>

             <div class="col-lg-4 okvir lijevi dolje desni text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0.6s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/09.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/09-naziv.png"/>
             </div>
        </div>
      </div>
</div>




  <div id="za-darivanje" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <h1 style="color: #7c1c1c !important;">Savršeni pjenušci za darivanje</h1>
            <p>U blagdanskom smo razdoblju i kupujemo poklone za naše drage osobe. Pjenušac je savršen dar, a u ovaj popis smo uvrstili etikete koje se slažu s gastronomskim delicijima poput sireva, kolača i grickalica. Uparite pjenušavo vino s ušećerenim bademima, laganim kolačem od voća ili sirevima kao što su brie, camembert i parmigiano reggiano kako biste kreirali cjelovit i luksuzan poklon paket savršen za ispod bora.</p>
            <p><a href="https://www.spar.hr/letci-i-katalozi/aktualni-katalozi-interspar/241128-1-interspardelicije" target="_blank"><button class="border-first-button">INTERSPAR Delicije</button></a></p>
        </div>
    </div>
  </div>
</div>



<div class="blog p-0">
  <div class="container-fluid">
        <div class="row">
             <div class="col-lg-4 okvir lijevi text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/10.png" /><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/10-naziv.png"/>
             </div>
             <div class="col-lg-4 okvir lijevi text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/11.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/11-naziv.png"/>
             </div>
             <div class="col-lg-4 okvir lijevi desni text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/12.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/12-naziv.png"/>
             </div>
        </div>
        <div class="row">
             <div class="col-lg-4 okvir lijevi text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/13.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/13-naziv.png"/>
             </div>
             <div class="col-lg-4 okvir lijevi text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/14.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/14-naziv.png"/>
             </div>

             <div class="col-lg-4 okvir lijevi desni text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/15.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/15-naziv.png"/>
             </div>
        </div>
        <div class="row">
             <div class="col-lg-4 okvir lijevi dolje text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/16.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/16-naziv.png"/>
             </div>
             <div class="col-lg-4 okvir lijevi dolje text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/17.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/17-naziv.png"/>
             </div>

             <div class="col-lg-4 okvir lijevi dolje desni text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/18.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/18-naziv.png"/>
             </div>
        </div>
      </div>
</div>



  <div id="za-opustanje" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <h1 style="color: #7c1c1c !important;">Pjenušci za opuštanje</h1>
            <p>Čašu pjenušca volimo popiti u ležernim, opuštajućim trenutcima, bilo da odmaramo u udobnosti svoga doma ili ne nalazimo u mirnom i ugodnom okruženju sa svojim prijateljima. Tada nam trebaju lagane arome koje će nas osvježiti i maksimalno pridonijeti opuštajućoj atmosferi. Pronašli smo pjenušce koji upravo to nude.</p>
        </div>
    </div>
  </div>
</div>



<div class="blog p-0">
  <div class="container-fluid">
        <div class="row">
             <div class="col-lg-4 okvir lijevi text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/19.png" /><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/19-naziv.png"/>
             </div>
             <div class="col-lg-4 okvir lijevi text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/20.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/20-naziv.png"/>
             </div>
             <div class="col-lg-4 okvir lijevi desni text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/21.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/21-naziv.png"/>
             </div>
        </div>
        <div class="row">
             <div class="col-lg-4 okvir lijevi dolje text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/22.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/22-naziv.png"/>
             </div>
             <div class="col-lg-4 okvir lijevi dolje text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/23.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/23-naziv.png"/>
             </div>

             <div class="col-lg-4 okvir lijevi dolje desni text-center wow fadeIn p-0 m-0" data-wow-duration="1s" data-wow-delay="0s">
                <img class="vrtnja" src="<?php echo $native_path ?>/assets/images/24.png"/><img style="position:absolute; width: 300px; height:auto; top:30px; left:30px" src="<?php echo $native_path ?>/assets/images/24-naziv.png"/>
             </div>
        </div>
      </div>
</div>



  <div class="blog" style="background: #7c1c1c;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <h1 style="color:#fff !important"><span style="font-weight: 900;">SPAR</span>ivanje</h1>
            <h2 style="color: #fff !important;">Premium pjenušci za posebne prilike</h2>
            <p style="color:#fff !important">Luksuzni okusi za svečane večeri i blagdanske proslave</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/9-7.png"/>
            <h4 style="color:#f2c289">Champagne Pommery Brut Royal</h4>
            <p style="color:#fff !important"><span style="color:#f2c289">Sirevi:</span> Zreli sirevi poput Parmigiano Reggiano ili Grana Padano za intenzivan okus.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Deserti:</span> Elegantni macarons s blagdanskim okusima poput cimeta i vanilije.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Grickalice:</span> Blago zasoljeni bademi ili kandirani orasi za slatko-slanu kombinaciju.</p>
        </div>
        <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/10-7.png"/>
            <h4 style="color:#f2c289">Pjenušac Griffin Brut / Pjenušac Griffin Rosé</h4>
            <p style="color:#fff !important"><span style="color:#f2c289">Sirevi:</span> Polutvrdi sirevi poput Gouda s tartufima ili Emmental.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Deserti:</span> Čokoladne praline s voćnim punjenjem (npr. malina ili šumsko voće).</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Grickalice:</span> Mini kroasani s maslacem ili štapići od lisnatog tijesta s parmezanom.</p>
        </div>
        <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/11-7.png"/>
            <h4 style="color:#f2c289">Prosecco Valdo Rosé / Prosecco Valdo Cuvee</h4>
            <p style="color:#fff !important"><span style="color:#f2c289">Sirevi:</span> Mekani sirevi poput Brie ili Camemberta uz malo džema od smokve.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Deserti:</span> Jagode prelivene čokoladom ili voćne torte s kremom od vanilije.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Grickalice:</span> Slane grisine s prosciuttom ili mini sendviči s krem sirom i lososom.</p>
        </div>
    </div>
  </div>
</div>
  <div class="blog" style="background: #5f1010;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <h2 style="color: #fff !important;">Savršeni pjenušci za darivanje</h2>
            <p style="color:#fff !important">Topli okusi uz blagdanske slastice – idealno za poklone</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/9-8.png"/>
            <h4 style="color:#f2c289">Pjenušavo vino Piena Charmat / Prosecco Villa Sandi Rosé</h4>
            <p style="color:#fff !important"><span style="color:#f2c289">Sirevi:</span> Svježi sirevi poput ricotte ili blagog kozjeg sira.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Deserti:</span> Medenjaci s cimetom i medom, štrudle s jabukama.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Grickalice:</span> Sušene marelice ili blago zasoljeni indijski oraščići.</p>
        </div>

        <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/10-8.png"/>
            <h4 style="color:#f2c289">Pjenušac JP Chenet Muscat / Pjenušac Royal Highness Rosé Brut </h4>
            <p style="color:#fff !important"><span style="color:#f2c289">Sirevi:</span> Blagi sirevi poput Edamera ili sira s dodacima brusnica.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Deserti:</span> Cheesecake s preljevom od šumskog voća ili kremasti tart s limunom.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Grickalice:</span> Prepečeni lješnjaci ili domaće kekse sa zvjezdastim oblikom.</p>
        </div>

        <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/11-8.png"/>
            <h4 style="color:#f2c289">Pjenušac Srebrna Penina Radgonska / Pjenušac Srebrna Penina Extra Dry</h4>
            <p style="color:#fff !important"><span style="color:#f2c289">Sirevi:</span> Mekani sirevi poput Camemberta ili mascarponea.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Deserti:</span> Tart od malina ili kolačići s vanilijom.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Grickalice:</span> Mini sendviči s lososom ili pistacije.</p>
        </div>
    </div>
  </div>

</div>
  <div class="blog" style="background: #7c1c1c; ">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <h2 style="color: #fff !important;">Pjenušci za opuštanje</h2>
            <p style="color:#fff !important">Ležerni, osvježavajući okusi za blagdansko popodne ili večernje opuštanje</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/9-9.png"/>
            <h4 style="color:#f2c289">Pjenušavo vino Mia Moscato / Pjenušavo vino Mia Moscato Rosé</h4>
            <p style="color:#fff !important"><span style="color:#f2c289">Sirevi:</span> Kremasti sirevi poput mascarponea s medom ili svježi ricotta sir.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Deserti:</span> Voćne salate s jagodama i borovnicama ili kremasti kolač s limunom.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Grickalice:</span> Hrskavi pereci ili zaslađeni kandirani bademi.</p>
        </div>
        <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/10-9.png"/>
            <h4 style="color:#f2c289">Prosecco Civa Villa Fonte / Prosecco Extra Dry</h4>
            <p style="color:#fff !important"><span style="color:#f2c289">Sirevi:</span> Lagani kravlji sirevi poput feta sira s dodacima začinskog bilja.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Deserti:</span> Sorbet od citrusa ili keksi s cimetom i zvjezdanim anisom.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Grickalice:</span> Grisine s ružmarinom ili blago zasoljeni čips od batata.</p>
        </div>

        <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <img src="<?php echo $native_path ?>/assets/images/11-9.png"/>
            <h4 style="color:#f2c289">Pjenušavo vino Kadarita Dry</h4>
            <p style="color:#fff !important"><span style="color:#f2c289">Sirevi:</span> Svježi sirevi poput cottage sira ili krem sir s vlascem.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Deserti:</span> Lagani medenjaci ili keksi s maslacem.</p>
            <p style="color:#fff !important"><span style="color:#f2c289">Grickalice:</span> Hrskavi krekersi ili začinjeni pečeni lješnjaci.</p>
        </div>
    </div>
  </div>
</div>


  <div class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <h1 style="color: #7c1c1c !important;">Kako poslužiti pjenušac</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <img style="margin-bottom: 20px; box-shadow: 0px 0px 30px -5px rgba(0, 0, 0, 0.4); border-radius: 5px;" src="<?php echo $native_path ?>/assets/images/shutterstock_2436036023.jpg"/>
            <h3 style="color:#705433;">Idealna temperatura posluživanja</h3>
            <p>Premium suhi pjenušci (Brut, Rose): 6-8°C – dovoljno hladni, ali ne previše, da sačuvaju kompleksnost okusa.</p>
            <p>Slatkasti i lagani pjenušci (Moscato, Extra Dry): 4-6°C – dodatno rashlađeni za osvježavajući doživljaj.</p>
            <p>Savjet: Stavite pjenušac u kantu s vodom i ledom oko 20-30 minuta prije posluživanja. Nemojte ga stavljati u zamrzivač da ne izgubi aromu.</p>
        </div>
        <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <img style="margin-bottom: 20px; box-shadow: 0px 0px 30px -5px rgba(0, 0, 0, 0.4); border-radius: 5px;" src="<?php echo $native_path ?>/assets/images/shutterstock_2406745541.jpg"/>
            <h3 style="color:#705433;">Čaše za pjenušac</h3>
            <p>Flute čaše (uske i visoke): Najbolji izbor jer zadržavaju mjehuriće i usmjeravaju aromu prema nosu.</p>
            <p>Coupe čaše (široke i plitke): Vizualno atraktivne za posebne prilike, ali mjehurići brže nestaju.</p>
            <p>Savjet: Prilikom posluživanja čašu držite za dršku kako bi se piće zadržalo rashlađeno.</p>
        </div>
        <div class="col-lg-4 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <img style="margin-bottom: 20px; box-shadow: 0px 0px 30px -5px rgba(0, 0, 0, 0.4); border-radius: 5px;" src="<?php echo $native_path ?>/assets/images/shutterstock_2554838793.jpg"/>
            <h3 style="color:#705433;">Prezentacija i posluživanje</h3>
            <p>Poslužite pjenušac u kristalnim čašama za dodatan dojam elegancije.</p>
            <p>Ukrasite čašu tankim kriškom limuna, naranče ili dodajte svježu jagodu za vizualni i aromatski efekt.</p>
            <p>Za blagdanski stol, pjenušce poslužite uz svijeće, borove grančice ili male zlatne detalje kako bi dojam bio svečan.</p>
        </div>
    </div>

  </div>
</div>


  <div class="blog">
    <div class="container">


      <div class="row p-5">
        <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
            <h1 style="color: #7c1c1c !important;">Otkrijte svijet mjehurića i pronađite svoj savršeni pjenušac za blagdanske trenutke.</h1>
        </div>
    </div>
  </div>
</div>




  <div id="clanci" class="blog">
    <div class="container-fluid wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">

      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">

              <p style="color:#000">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/telegram.png" style="max-width: 186px;"  />
          </div>
        </div>
      </div>
  </div>




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
