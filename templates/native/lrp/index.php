
<!DOCTYPE html>
<html lang="hr">
<?php
    // use this native path to embed all the files from project that are included with project, images, scripts, ...
    // we will change this when we upload the project to the server
    // this way we only need to change in one place
    $native_path = 'https://telegram.hr/wp-content/themes/telegram2-desktop/templates/native/lrp';
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style type="text/css">

        @-webkit-keyframes vrtnja { 0% { -webkit-transform:rotate(0deg) } 100% { -webkit-transform: rotate(360deg);} }
        @keyframes vrtnja { 0% { transform:rotate(0deg) } 100% { transform: rotate(360deg);} }


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
    </style>

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


<div class="navigacija text-center">
  <ul>
    <li><a href="#myContainer"><img src="<?php echo $native_path ?>/assets/images/ikona01.png"/></a></li>
    <li><a href="#dva"><img src="<?php echo $native_path ?>/assets/images/ikona02.png"/></a></li>
    <li><a href="#tri"><img src="<?php echo $native_path ?>/assets/images/ikona03.png"/></a></li>
  </ul>

</div>

  <div class="blog hero">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
               <img src="<?php echo $native_path ?>/assets/images/claim.svg" style="padding: 30px" /><br/>
        </div>
    </div>
  </div>
</div>


<div class="blog" style="background: #85c9ef">
  <div class="container">
      <div class="row">
          <div class="col-lg-5 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
             <h1 style="font-weight:600; text-transform: uppercase; color: #fff;">Ultimativni vodič za pripremu osjetljive kože u jeseni i zimi  </h1>
              <p style="color:#fff;">Dolazi hladnije vrijeme, a s njim se i stanje kože mijenja. Nemojte se iznenaditi ako vam vaši skincare proizvodi odjednom više ne odgovaraju, normalno je da koža ima drugačije potrebe s obzirom na sezonu u kojoj se nalazimo. To je posebno izraženo na prijelazu sezona: u jesen vidimo štetne posljedice sunca tijekom ljeta poput pigmentacijskih mrlja i pojačane osjetljivosti kože, a prelaskom u zimski period naša koža postaje suša i sklonija iritacijama.
              </p>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/prva.png" style="z-index:1 !important" />
          </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                <h1><a href="#myContainer"><span style="font-weight: 300;">01</span> <span style="font-weight: 700;">Zašto je koža suha?<span></a></h1>
                <h1><a href="#dva"><span style="font-weight: 300;">02</span> <span style="font-weight: 700;">Savjeti stručnjakinje za njegu kože zimi<span></a></h1>
                <h1><a href="#tri"><span style="font-weight: 300;">03</span> <span style="font-weight: 700;">O njezi kože mame i bebe<span></a></h1>
            </div>
        </div>
      </div>
</div>






<div class="blog" id="myContainer" style="padding-top: 250px; padding-bottom: 250px;">
  <div class="container">
      <div class="row">

          <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <h1 style="color:#fff; font-weight:600">PITAMO SE: ZAŠTO JE KOŽA <i>UOPĆE SUHA</i>?</h1>

          </div>

        </div>
      </div>
</div>


<div class="blog" style="background: #fff">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
             <p style="color:#009cdd">Riječ je o tipu kože, poput masne i mješovite, koji je prisutan tijekom cijele godine. Na površini kože se nalazi hidrolipidni sloj koji šiti kožu od negativnog vanjskog utjecaja, no kada ne postoji dobra ravnoteža lipida i vode, zaštitna funkcija je narušena. Zimi je suho stanje kože izraženije jer tada krećemo grijati prostorije pa nam suhi zrak suši kožu koja počinje zatezati i ljuskati se. Također, zbog niskih temperatura, koža je sklona iritacijama, crvenilu, peckanju te često puca.
              </p>
          </div>
          <div class="col-lg-6" data-wow-duration="0.5s" data-wow-delay="0.5s">
                 <p style="color:#009cdd">Posebnu borbu zimi s kožom vode one osobe s kroničnim stanjima poput rozacee, atopijskog dermatitisa i ekcema. Takva stanja čine kožu izrazito osjetljivom pa ju je važno dobro zaštititi od vanjskih utjecaja, između ostalog znati izabrati prave proizvode koji će biti važni saveznici tijekom čitavog zimskog perioda. To su proizvodi koji u svojoj formulaciji sadrže aktivne sastojke koji regeneriraju kožu, dubinski je hidratiziraju, umiruju i njeguju. </p>
          </div>
        </div>
      </div>
</div>





<div class="blog" style="background: #85c9ef">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <h3 class="okvir wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">Najbolju kombinaciju svih navedenih važnih uloga aktivnih sastojaka pronašli smo u La Roche-Posay proizvodima. Njima smo vjerni jer je riječ o proizvodima koji su formulirani tako da pomognu suhoj i oštećenoj koži, koži s kroničnim stanjima i iznimno osjetljivoj. </h3>
          </div>

        </div>
      </div>
</div>


<div class="blog" style="background: #85c9ef; padding-bottom: 0; padding-top: 0;">
  <div class="container-fluid p-0">
      <div class="scroll-section">
        <div class="scroll-container">
          <div class="content-box"><a href="https://www.laroche-posay.com.hr/lipikar " target="_blank"><img src="<?php echo $native_path ?>/assets/images/01.jpg" /></a></div>
          <div class="content-box"><a href="https://www.laroche-posay.com.hr/lipikar " target="_blank"><img src="<?php echo $native_path ?>/assets/images/02.jpg" /></a></div>
          <div class="content-box"><a href="https://www.laroche-posay.com.hr/lipikar " target="_blank"><img src="<?php echo $native_path ?>/assets/images/03.jpg" /></a></div>
          <div class="content-box"><a href="https://www.laroche-posay.com.hr/lipikar " target="_blank"><img src="<?php echo $native_path ?>/assets/images/04.jpg" /></a></div>
          <div class="content-box"><a href="https://www.laroche-posay.com.hr/lipikar " target="_blank"><img src="<?php echo $native_path ?>/assets/images/05.jpg" /></a></div>
          <div class="content-box"><a href="https://www.laroche-posay.com.hr/lipikar " target="_blank"><img src="<?php echo $native_path ?>/assets/images/01.jpg" /></a></div>
          <div class="content-box"><a href="https://www.laroche-posay.com.hr/lipikar " target="_blank"><img src="<?php echo $native_path ?>/assets/images/02.jpg" /></a></div>
          <div class="content-box"><a href="https://www.laroche-posay.com.hr/lipikar " target="_blank"><img src="<?php echo $native_path ?>/assets/images/03.jpg" /></a></div>
          <div class="content-box"><a href="https://www.laroche-posay.com.hr/lipikar " target="_blank"><img src="<?php echo $native_path ?>/assets/images/04.jpg" /></a></div>
          <div class="content-box"><a href="https://www.laroche-posay.com.hr/lipikar " target="_blank"><img src="<?php echo $native_path ?>/assets/images/05.jpg" /></a></div>
          <div class="content-box"><a href="https://www.laroche-posay.com.hr/lipikar " target="_blank"><img src="<?php echo $native_path ?>/assets/images/01.jpg" /></a></div>
          <div class="content-box"><a href="https://www.laroche-posay.com.hr/lipikar " target="_blank"><img src="<?php echo $native_path ?>/assets/images/02.jpg" /></a></div>
          <div class="content-box"><a href="https://www.laroche-posay.com.hr/lipikar " target="_blank"><img src="<?php echo $native_path ?>/assets/images/03.jpg" /></a></div>
          <div class="content-box"><a href="https://www.laroche-posay.com.hr/lipikar " target="_blank"><img src="<?php echo $native_path ?>/assets/images/04.jpg" /></a></div>
          <div class="content-box"><a href="https://www.laroche-posay.com.hr/lipikar " target="_blank"><img src="<?php echo $native_path ?>/assets/images/05.jpg" /></a></div>
          <!-- Dodajte još boxova po potrebi -->
        </div>
      </div>

  </div>
</div>


<div class="blog" style="background: #85c9ef">
  <div class="container">
      <div class="row">
          <div class="col-lg-5 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
             <p style="color:#fff;" class="sticky-top">Važan sastojak koji će suhoj koži pomoći zimi je shea maslac. On je poznat po svojim svojstvima za obnovu hidrolipidnog sloja kože pomoću sličnih lipida, a nalazi se kao ključni sastojak u svim formulama La Roche-Posay linije proizvoda <a href=" https://www.laroche-posay.com.hr/lipikar/lipikar-balzam-ap-plus-m" target="_blank">Lipikar</a>. Ako vašu kožu treba umiriti, izvanredan sastojak je Madekasosid. Riječ je o ekstraktu biljke Centelle Asiatice, poznate i pod nazivom gotu kola, koja je porijeklom iz Azije te se koristi u liječenju raznih kožnih bolesti. Madekasosid pomaže u obnovi epiderme, a pronaći ćete ga u <a href="https://www.laroche-posay.com.hr/cicaplast/cicaplast-baume-b5" target="_blank">Cicaplast Baume B5+</a> . Ovaj balzam je izvrstan i za osjetljivu kožu koja reagira na vanjske utjecaje na način da se pojavi crvenilo, osip, peckanje i slični simptomi. Balzam sadrži tribiomu, jedinstveni prebiotički kompleks sastavljen od šećera, biljnih ekstrakata i fermenata koji uspostavlja ravnotežu mikrobioma i osjetljive kože pa će se tako smanjiti reakcije vaše kože na vanjske utjecaje te će biti otpornija.
              </p>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/01.jpg" style="z-index:1 !important" />
          </div>
        </div>
        <div class="row">
            <div class="col-lg-12" style="padding-top:50px; padding-bottom: 50px;">
              <h3 class="okvir wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">Balzam koristite u izdašnoj količini prema potrebi kože na mjestima koja zahtijevaju posebnu njegu.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12" style="padding-top:50px; padding-bottom: 50px;">
              <img src="<?php echo $native_path ?>/assets/images/kolaz1.png"/>
            </div>
        </div>
      <div class="row">
          <div class="col-lg-5 order-lg-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
             <p style="color:#fff;" class="sticky-top">Nadalje, niacinamid pomaže umiriti osjećaj svrbeža i obnoviti lipidnu barijeru na koži. Niacinamid se nalazi u <a href="https://www.laroche-posay.com.hr/lipikar/lipikar-huile-lavante-ap-plus" target="_blank">Lipikar AP+ hranjivom ulju za čišćenje</a>  i <a href="https://www.laroche-posay.com.hr/lipikar/lipikar-balzam-ap-plus-m" target="_blank">Lipikar AP+M balzamu</a> pa svakako preporučujemo da koristite ove proizvode ako se borite s atopijskim dermatitisom. <a href="https://www.laroche-posay.com.hr/lipikar" target="_blank">Lipikar</a> proizvodi također sadrže ekskluzivni aktivni kompleks Aqua Posae Filiformis koji uspostavlja ravnotežu mikrobioma kože.
              </p>
          </div>
          <div class="col-lg-1 order-lg-2">
          </div>
          <div class="col-lg-6 order-lg-1 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                  <div class="image-gallery">
                      <img src="<?php echo $native_path ?>/assets/images/02.jpg" alt="Slika 2" style="opacity: 0;">
                  </div>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-12" style="padding-top:50px; padding-bottom: 50px;">
              <h3 class="okvir">Ulje za čišćenje ne morate utrljavati u kožu, nego ga blago nanesite dok se tuširate, a nakon toga stavite njegujući balzam za dodatan učinak u smanjenju suhoće kože.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6" style="padding-top:50px; padding-bottom: 50px;">
              <img src="<?php echo $native_path ?>/assets/images/kolaz2.png"/>
            </div>
            <div class="col-lg-6" style="padding-top:50px; padding-bottom: 50px;">
              <img src="<?php echo $native_path ?>/assets/images/kolaz3.png"/>
            </div>
        </div>
      </div>
</div>


<div class="blog" style="background: #fff">
  <div class="container">
      <div class="row">
          <div class="col-lg-6">
             <h2 style="color:#000; text-transform: uppercase;">5 savjeta za očuvanje kože zimi prema preporuci dr. sc. Maje Kovačević, dr. med., spec. dermatovenerologije</h2><br/><br/>
             <img src="<?php echo $native_path ?>/assets/images/dr.png"/>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-5" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <div class="sticky-top">
                 <h3 class="headlineneki wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">#1 ovlaživanje zraka u prostorijama u kojima boravimo</h3>
                 <h3 class="headlinenekidva wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">#2 korištenje mlake vode pri tuširanju</h3>
                 <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">Prevruća voda prilikom tuširanja može dodatno isušiti kožu. </p>
                 <h3 class="headlinenekidva wow fadeIn" data-wow-duration="1s" data-wow-delay="1.6s">#3 Korištenje hidratantnih proizvoda za čišćenje kože</h3>
                 <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1.8s">Uobičajeni gel za tuširanje zamijenite sindetom, odnosno hidratantnim sredstvom za pranje koje čisti kožu bez da ju isušuje. </p>
                 <h3 class="headlinenekidva wow fadeIn" data-wow-duration="1s" data-wow-delay="2.4s">#4 Biranje sastojaka pogodnih za zimski period</h3>
                 <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="2.6s">U čišćenju suhe kože prednost se daje blagim proizvodima koji ne sadrže alkohol, a u njezi kože birajte proizvode s hijaluronskom kiselinom, ceramidima te tvarima koje djeluju protuupalno.</p>
                 <h3 class="headlinenekidva wow fadeIn" data-wow-duration="1s" data-wow-delay="3s">#5 Njega usana i zaštita kože SPF faktorom </h3>
                 <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="3.2s">Redovito nosite zaštitni balzam na usnama na kojima je koža vrlo tanka i osjetljiva. Proizvode sa SPF-om potrebno je nanositi i tijekom zimskih mjeseci.</p>
              </div>
          </div>
        </div>
      </div>
</div>


<div class="blog nemamobitel" id="dva" style="background: #009cdd">
  <div class="container">

        <div class="row">
            <div class="col-lg-12" style="padding-top:50px; padding-bottom: 50px;">
              <h1 style="color:#fff; font-weight: 600; text-transform: uppercase;">Njega kože mame i bebe:<br/>kako zaštititi najnježniju kožu </h1>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-6 fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <div class="image-container">
              <img src="<?php echo $native_path ?>/assets/images/col1.jpg" alt="Opis slike" class="hover-image">
            </div>

          </div>
          <div class="col-lg-6 fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <div class="image-container">
              <img src="<?php echo $native_path ?>/assets/images/col2.jpg" alt="Opis slike" class="hover-image">
            </div>

          </div>
        </div>
        <div class="row" style="margin-top:25px; margin-bottom: 25px;">
          <div class="col-lg-6 fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <div class="image-container">
              <img src="<?php echo $native_path ?>/assets/images/col3.jpg" alt="Opis slike" class="hover-image">
            </div>

          </div>
          <div class="col-lg-6 fadeIn" data-wow-duration="1s" data-wow-delay="0s">
             <h3 style="color:#fff; text-transform: uppercase; font-weight:600; margin-top:10px">Posebnu važnost pridajemo najnježnijoj skupini: majkama i bebama. Majčinstvo je nova faza života koja je prekrasna, ali izazovna, posebno u prvim mjesecima života bebe kada se privikavate na novi tempo i na biće koji je vaš glavni i jedini fokus. Zato često puta zanemarujemo sebe, no što kada bi postojali proizvodi koje možete koristiti i vi i vaša beba?</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <div class="image-container">
              <img src="<?php echo $native_path ?>/assets/images/col4.jpg" alt="Opis slike" class="hover-image">
            </div>

          </div>
          <div class="col-lg-6 fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <div class="image-container">
              <img src="<?php echo $native_path ?>/assets/images/col5.jpg" alt="Opis slike" class="hover-image">
            </div>

          </div>
        </div>
      </div>
</div>


<div class="blog samomobitel" style="background: #009cdd">
  <div class="container">

        <div class="row">
            <div class="col-lg-12" style="padding-top:50px; padding-bottom: 50px;">
              <h1 style="color:#fff; font-weight: 900; text-transform: uppercase;">Njega kože mame i bebe:<br/>kako zaštititi najnježniju kožu </h1>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-12 fadeIn" data-wow-duration="1s" data-wow-delay="0s">
            <div class="image-container">
              <img src="<?php echo $native_path ?>/assets/images/mobilna.jpg" alt="Opis slike">
              <h3 style="color:#fff; text-transform: uppercase; font-weight:600; margin-top:10px">Posebnu važnost pridajemo najnježnijoj skupini: majkama i bebama. Majčinstvo je nova faza života koja je prekrasna, ali izazovna, posebno u prvim mjesecima života bebe kada se privikavate na novi tempo i na biće koji je vaš glavni i jedini fokus. Zato često puta zanemarujemo sebe, no što kada bi postojali proizvodi koje možete koristiti i vi i vaša beba?</h3>
            </div>

          </div>

        </div>

      </div>
</div>


<div class="blog" style="background: #85c9ef">
  <div class="container">
      <div class="row">
          <div class="visina col-lg-5 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">

              <p style="color:#fff;margin-bottom: 50px;">Bebina koža je najosjetljivija, na njoj se mogu pojaviti razna stanja poput crvenila, atopijskog dermatitisa ili pelenskog osipa. Zato je jako važno znati koje proizvode smijete koristiti na bebinoj koži i koji sastojci će pomoći u umirivanju navedenih stanja.
              </p>
              <h3 class="okvir wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">U Lipikar liniji nalaze se proizvodi koji su formulirani za one s najosjetljivijom kožom, kao što je koža novorođenčeta. </h3>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-6 wow fadeInRightBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
                <img src="<?php echo $native_path ?>/assets/images/broj3.jpg" alt="Slika">
          </div>
        </div>
      </div>
</div>



<div class="blog" id="tri" style="padding-top: 250px; padding-bottom: 250px; background: url('<?php echo $native_path ?>/assets/images/back3.jpg') no-repeat; background-size: cover;">
  <div class="container">
      <div class="row">

          <div class="col-lg-8 offset-lg-2 text-center wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <h1 style="color:#fff; font-weight:600; text-transform: uppercase;">umirujuća kupka:  trenutak za vas i vašu bebu</h1>

          </div>

        </div>
      </div>
</div>



<div class="blog" style="background: #85c9ef">
  <div class="container">
      <div class="row">
          <div class="visinadva col-lg-5 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
             <h2 style="font-weight:600; text-transform: uppercase; color: #fff;">#1 la roche-posay lipikar baume ap+m balzam</h2>
              <p style="color:#fff;">Ako vaša beba ima suhu kožu, atopijski dermatitis ili je sklona alergijama pa je koža crvena i svrbi, naša preporuka je <a href="https://www.laroche-posay.com.hr/lipikar/lipikar-balzam-ap-plus-m" target="">La Roche-Posay Lipikar Baume AP+M balzam</a>. On trenutno sprječava osjećaj svrbeža, umiruje kožu i sprječava ponovno pojavljivanje simptoma, pritom obnavljajući kožnu barijeru.
              </p>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/artikl1.png" style="z-index:1 !important" />
          </div>
        </div>
      </div>
</div>
<div class="blog" style="background: #85c9ef; padding-top:0px">
  <div class="container">
      <div class="row">
          <div class=" col-lg-5 order-lg-3 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
             <h2 style="font-weight:600; text-transform: uppercase; color: #fff;">#2 la roche-posay lipikar ap+ hranjivo ulje</h2>
              <p style="color:#fff;">Kupanje može biti umirujuće za bebicu i proći potpuno bez plača. Napravite spa trenutak za sebe i bebu u kojem ćete se dodatno povezati, a ujedno nahraniti bebinu kožu i spriječiti moguće probleme s kožom. Za kupku koristite <a href="https://www.laroche-posay.com.hr/lipikar/lipikar-huile-lavante-ap-plus" target="_blank">La Roche-Posay Lipikar AP+ hranjivo ulje za čišćenje</a> protiv nadraživanja i svrbeži za kožu sklonu atopijskom dermatitisu. Ovo iznimno nježno ulje čisti izrazito suhu kožu i namijenjeno je i za najosjetljivija područja pa ga tako mogu koristiti i mame i bebe. Zbog svoje nježne formule prikladno je i za intimno područje. Naša topla preporuka je da u rutinu svakako uključite dva spomenuta Lipikar proizvoda koja će zajedno donijeti bolji učinak. Prvo okupajte sebe i svoju bebu nježnim uljem, a zatim namažite balzamom koji će dodatno umiriti kožu i obnoviti njezinu barijeru. S ovom rutinom ćete znatno smanjiti suhoću kože.
              </p>
          </div>
          <div class="col-lg-1 order-lg-2">
          </div>
          <div class="col-lg-6 order-lg-1 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/artikl2.png" style="z-index:1 !important" />
          </div>
        </div>
      </div>
</div>

<div class="blog" style="background: #85c9ef; padding-top: 0;">
  <div class="container">
      <div class="row">
          <div class="visinadva col-lg-5 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
             <h2 style="font-weight:600; text-transform: uppercase; color: #fff;">#3 la roche-posay cicaplast baume b5+</h2>
              <p style="color:#fff;">Nakon kupanja, vaš mali ritual završite s ultra obnavljajućim umirujućim balzamom <a href="https://www.laroche-posay.com.hr/cicaplast/cicaplast-baume-b5" target="_blank">Cicaplast Baume B5+</a>. On je odličan za pelenski osip, crvenilo i iritacije jer zahvaljujući svojoj cjelovitoj formuli, hrani i štiti kožu te obnavlja njezinu barijeru. Njega možete koristiti baš za sve i majke će ga vrlo rado dijeliti sa svojom bebicom. Ako ste bili na zahvatu carskog reza, balzam će pomoći u obnovi kože na tom području. Njega također možete koristiti na intimnom području i svakoj majci će pružati olakšanje.
              </p>
          </div>
          <div class="col-lg-1">
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <img src="<?php echo $native_path ?>/assets/images/artikl3.png" style="z-index:1 !important" />
          </div>
        </div>
      </div>
</div>

<div class="blog" style="background: #85c9ef; padding-top: 0;">
  <div class="container">
      <div class="row">
          <div class=" col-lg-12 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
             <h3 class="okvir">Sva tri proizvoda pomoći će vam u prilagodbi na novu majčinsku ulogu i to tako da date maksimalnu brigu svome djetetu, bez da zanemarite i vlastite potrebe. </h3>

          </div>

        </div>
      </div>
</div>
<div class="blog" style="background: #85c9ef; padding-top: 0; padding-bottom: 0;">
  <div class="container-fluid p-0">
      <div class="row">
          <div class=" col-lg-12 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
             <img src="<?php echo $native_path ?>/assets/images/sviartikli.jpg"/>

          </div>

        </div>
      </div>
</div>
  <div id="clanci" class="blog" style="z-index: 100; position: relative; padding-top: 120px; padding-bottom: 120px; overflow: hidden; background: #009cdd">


    <div class="container-fluid wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">

      <div class="row">
        <div class="col-lg-4 offset-lg-4 text-center">
              <p style="color:#fff">Autor teksta: Lucija Vogrinc<br/>
                Grafičko oblikovanje: TMG & Reset</p>
              <p style="color:#fff">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p><br/><br/>
              <img src="<?php echo $native_path ?>/assets/images/telegram.png" style="max-width: 186px;"  />
          </div>
        </div>
      </div>
  </div>
<script type="text/javascript">

const scrollSection = document.querySelector('.scroll-section');
const scrollContainer = document.querySelector('.scroll-container');

let startScroll = false;
let initialScrollY = 0;

// Kreiramo Intersection Observer da detektuje kada je container u vidnom polju
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      startScroll = true;
      initialScrollY = window.scrollY; // Pamti početnu vrednost skrola
    } else {
      startScroll = false;
    }
  });
}, { threshold: 0.001 });

observer.observe(scrollSection);

// Maksimalna udaljenost za skrolovanje
const maxScrollDistance = scrollContainer.scrollWidth - window.innerWidth;

// Dodajemo event listener za skrolovanje
window.addEventListener('scroll', () => {
  if (startScroll) {
    // Izračunaj koliko smo skrolovali unutar sekcije
    let scrolledDistance = window.scrollY - initialScrollY;

    // Ograniči pomak na maksimalnu širinu kako bi se elementi vraćali nazad
    scrolledDistance = Math.max(0, Math.min(scrolledDistance, maxScrollDistance));

    // Primeni horizontalni pomak pomoću translateX
    scrollContainer.style.transform = `translateX(-${scrolledDistance}px)`;
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
        }, 1000); // Promijenite 1000 ms na željeni vremenski interval za tranziciju
      }

      function showNextImage() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        updateImage();
      }

      // Postavite interval za automatsko klizanje svakih 3 sekunde (3000 ms)
      setInterval(showNextImage, 4000);

      // Inicijalno postavljanje slike
      updateImage();



      const images2 = ["<?php echo $native_path ?>/assets/images/broj1.png","<?php echo $native_path ?>/assets/images/broj2.png"];
      let currentImageIndex2 = 0;
      const imageElement2 = document.querySelector(".image-gallery2 img");

      function updateImage2() {
          const imageUrl = images2[currentImageIndex2];
        imageElement2.style.opacity = 0; // Postavite opacity na 0 prije promjene slike
        setTimeout(() => {
          imageElement2.src = imageUrl;
          imageElement2.alt = `Slika ${currentImageIndex + 1}`;
          imageElement2.style.opacity = 1; // Postavite opacity na 1 nakon promjene slike
        }, 1000); // Promijenite 1000 ms na željeni vremenski interval za tranziciju
      }
      function showNextImage2() {
          currentImageIndex2 = (currentImageIndex2 + 1) % images2.length;
          updateImage2();
      }

      // Postavite interval za automatsko klizanje druge galerije svakih 4 sekunde (4000 ms)
      setInterval(showNextImage2, 4000);

      // Inicijalno postavljanje slike
      updateImage2();

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
