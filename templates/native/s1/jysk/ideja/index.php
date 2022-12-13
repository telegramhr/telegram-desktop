<!doctype html>

<html lang="en" dir="ltr">
<?php
		$native_path = get_stylesheet_directory_uri() . '/templates/native/jysk/ideja';
	?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!--include header-->
		<?php wp_head();
		?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Habibi&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo $native_path ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $native_path ?>/css/slick.css" />
  <link rel="stylesheet" href="<?php echo $native_path ?>/css/custom.css?v=2">
  <link rel="stylesheet" href="<?php echo $native_path ?>/css/responsive.css?v=2">
  <link rel="stylesheet" href="<?php echo $native_path ?>/css/animate.min.css">
  
  <script src="<?php echo $native_path ?>/js/jquery-3.5.1.min.js"></script>
  <script src="<?php echo $native_path ?>/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo $native_path ?>/js/slick.min.js"></script>
</head>

<body>
<?php do_action('body_start'); ?>
	<div class="wrapper">
<header class="header">
  <div class="overlay"></div>
  <div class="header-bg">
    <img src="<?php echo $native_path ?>/images/banner.jpg" alt="" class="animate__animated animate__zoomIn" />
  </div>
  <div class="absolute-text-sec">
  <div class="d-flex d-flex h-100 align-items-center text-center">
     <div class="social">
	    <div class="social-inr">
			<a class="d-inline-block" target="_blank" href="#" onclick="FB.ui({ method: 'share', href: '<?php the_permalink() ?>'}, function(response){}); return false;">
				<span class="sr-only">Facebook</span>							
				<i aria-hidden="true" class="fa fa-facebook"></i>
			</a>
			</div>
		</div>
  <div class="txt">
    <h1 class="animate__animated animate__fadeInLeft animate__delay-1s">Prati svoju ideju uživanja</h1>
	<p class="animate__animated animate__fadeInLeft animate__delay-2s">Kreiraj urbanu zonu na svom balkonu. <strong>#mojhyggecorner</strong></p>
	</div>
	</div>
   </div>
</header>
<section class="section-1 section position-relative py-5 text-center">
   <div class="container">
       <div class="row">	 	     
	     <div class="col-md-5 position-relative">
		     <img class="img-fluid float-right position-relative img-abs" src="<?php echo $native_path ?>/images/leaf-bg.png" alt="" />
             <div class="leaf-over position-relative top-10">
             <img class="img-fluid" src="<?php echo $native_path ?>/images/sec2-img.jpg" alt="" />
             </div>
		 </div>
		 <div class="col-md-7">
		 <div class="d-flex d-flex h-100 align-items-center">
		 <div class="txt">
		   <p>Uređenje prostranog ili toliko malog balkona da vam se čini da na njega ništa ne stane, podjednako je izazovno.</p> 
		   <p>No, to ne znači da je neizvedivo – i najmanji balkon može biti vaš hygge kutak za opuštanje.</p>
		   </div>
		   </div>
		 </div>
	    </div>
   </div>
</section>

<section class="section-2 section position-relative py-5">
   <div class="container">
       <div class="row">	 	     
	     <div class="col-md-6 left text-center align-items-center">
		   <div class="d-flex d-flex h-100 align-items-center">
		    <div class="inner-sec">
			<h2>Što je to Hygge?</h2>
			<p>Budući da Danci nose titulu najsretnijih ljudi na svijetu, a otišli su toliko daleko da u Kopenhagenu imaju i Institut za istraživanje sreće, svoju filozofiju sretnog življenja hygge utkali su u sve pore života, a za njom trenutno luduje cijeli svijet.</p>
			<p>Hygge je sinonim za udobnost koja je protkana druželjubivošću, to je zapravo zajednički nazivnik za ugodnu atmosferu, uživanje u dobrim stvarima, s dobrim ljudima. Taj životni koncept sastavni je dio i uređenja interijera, ali ne poznaje granice – lako se seli i izvan naših domova.</p>
			</div>
		  </div>
		</div>
		 <div class="col-md-6 rght">
		   <img src="<?php echo $native_path ?>/images/sto-hygge.jpg" alt="" />
		 </div>
	    </div>
   </div>
</section>

<section class="section-3 section position-relative pt-0 pb-5 py-md-5 text-center">
   <div class="container">
       <div class="row">
       <div class="col-sm-12">	 	     
	     <h2>Uredi urbanu zonu na svom balkonu. #mojhyggecorner</h2>
		 <p>Izazvali smo dva para da urede svoje balkone. Jedan je veliki, a drugi jako mali balkon.<br>
Tražite inspiraciju za uređenje svoje oaze mira?<br> Škicnite ovaj makeover, uredili smo dva balkona
         </p>
		 <div class="w-100 pt-4">
		 	<video width="100%" height="575"  poster="<?php echo $native_path ?>/images/video.jpg" preload="auto" autoplay="autoplay" loop="loop" muted defaultMuted playsinline controls>
				  <source src="<?php echo $native_path ?>/images/TG-Jysk.mp4" type="video/mp4">
				Your browser does not support the video tag.
				</video>

             <!--<iframe class="embed-responsive-item" src="https://vimeo.com/536021706/efd9529fdd?fbclid=IwAR0B6IXvB2g8I7sMgfw1ognm95EOUW59su4mYrUdp43JM4r3v1nx3hkxsIE" allowfullscreen></iframe>-->
         </div>	
         </div>   
	  </div>
   </div>
</section>

<section class="section-4 masonry-sec section position-relative py-5">
   <div class="container-fluid">
   	<div class="padding-image">
       <div class="row">	     
         <div class="d-flex justify-content-center">
		    <div class="col-md-6 text-center">
		      <h2>Što je sve potrebno za uređenje malog balkona</h2>
		        <p>“Budući da je ovaj balkon manjeg formata koji nema neke standardne, klasične dimenzije, funkcionoalni, manji komadi namještaja idealni su za ovakve prostore. Uz drvene, sklopive stolice i stolić, sjajno se uklopila i drvena klupa koja u dnevnoj varijanti može poslužiti kao stolica za smještanje biljaka, svjećica i lampica, a prema potrebi može lako postati sjedeći prostor za goste”, kaže JYSKova stručnjakinja Zvjezdana Novak.</p>
		    </div> 	 
		 </div>  
       </div>
   </div>
	 <div class="row">

  <div class="grid">
  	<div class="left-side">
    <div class="grid-item grid-item--height3 frst">
	  <div class="img-col d-flex h-100">
	   <div class="justify-content-center align-self-center m-auto">
	    <img src="<?php echo $native_path ?>/images/sec6-left-img1.jpg" alt="" />
	   </div>
	  </div>
    </div>
	
    <div class="grid-item">
	  <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec6-left-img2.jpg" alt="" />
	    </div>
	  </div>
	</div>

	<div class="grid-item">
	   <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec6-left-img3.jpg" alt="" />
	   </div>
	  </div>
	</div>
	<div class="grid-item">
	  <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec6-left-img4.jpg" alt="" />
	   </div>
	  </div>
	</div>
	<div class="grid-item">
	  <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec6-left-img6.jpg" alt="" />
	   </div>
	  </div>
	</div>
	<div class="grid-item">
	<div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec6-left-img7.jpg" alt="" />
	   </div>
	  </div>
	</div>
	<div class="grid-item">
	   <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec6-left-img5.jpg" alt="" />
	   </div>
	  </div>
	</div>
</div>
<div class="middle-side">
	<div class="grid-item grid-item--width2 big-img grid-item--height3">
	  <div class="img-col d-flex">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/ferniture1.jpg" alt="" />
	    </div>
	  </div>
	</div>
	</div>
	
<div class="right-side">
    <div class="grid-item grid-item--width1">
	  <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/ferniture2.jpg" alt="" />
	   </div>
	  </div>
	</div>
    
	<div class="grid-item">
	  <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec6-rght-img1.jpg" alt="" />
	   </div>
	  </div>
	</div>
    <div class="grid-item">
	  <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec6-rght-img3.jpg" alt="" />
	   </div>
	  </div>
	</div>
	<div class="grid-item grid-item--width1">
	  <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/ferniture3.jpg" alt="" />
	   </div>
	  </div>
	</div>
    
    <div class="grid-item">
	  <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec6-rght-img2.jpg" alt="" />
	   </div>
	  </div>
	</div>
	
	<div class="grid-item">
	  <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec6-rght-img4.jpg" alt="" />
	   </div>
	  </div>
	</div>
	
  </div>
</div>
</div>
	 <div class="padding-image">
	 <div class="row">
		  <div class="d-flex justify-content-center">
		    <div class="col-md-6 text-center">
		        <p>“Ono što je bitno, kao i u svakom prostoru za uživanje, je to da se on nadopuni zelenilom, cvijećem i dekoracijama jer upravo detalji čine hygge razliku. To može biti živo cvijeće, začinsko bilje ili pak umjetne biljke koje su vjerne kopije živima”, savjetuje Novak.</p>
		    </div> 	 
		 </div>
	   </div>
   </div>
</div>
</section>

<section class="section-5 section dble-img-sec position-relative py-5">
   <div class="container">
       <div class="row">	
	   <div class="rotate-content">NAKON UREĐENJA</div> 	     
	      <div class="col-md-9">
		    <img src="<?php echo $native_path ?>/images/sec6-bdy-img.jpg" alt="" />
		  </div>
		  <div class="col-md-3">
		  <div class="d-flex h-100 align-items-center text-center">
			   <div class="img-rght">
			      <img src="<?php echo $native_path ?>/images/sec6-bdy-img-rght.jpg" alt="" />
			 </div>
		  </div>
		  </div>
	    </div>
   </div>
</section>

<section class="section-6 masonry-sec section position-relative py-5">
   <div class="container-fluid">
   	<div class="padding-image">
       <div class="row">	     
         <div class="d-flex justify-content-center">
		    <div class="col-md-6 text-center">
		      <h2>Što je sve potrebno za uređenje velikog balkona</h2>
		        <p>Ružičin balkon je ipak nešto većih dimenzija. No, bez obzira na to što se čini da su veći balkoni puno jednostavniji za uređenje, i tu treba paziti na sklad. “Prostor smo podijeli u dva dijela, blagovaonski i launch zonu. U blagovaonskom dijelu dominiraju hladni tonovi i minimalističke strukture koje je bilo potrebno povezati s odabirom lounge garniture koja je siva ali ima tople drvene detalje poput bočnih stranica i stolića“, govori Novak</p>
		    </div> 	 
		 </div>  
       </div>
   </div>
	 <div class="row">

  <div class="grid">
  	<div class="left-side">
  	<div class="grid-item px-0">
			<div class="img-col d-flex h-100">
				<div class="justify-content-center align-self-center m-auto">
					<img src="<?php echo $native_path ?>/images/sec7-left-img1.jpg" alt="" />
				</div>
			</div>
		<div class="grid-item mt-2 px-0">
				<div class="img-col d-flex h-100">
					<div class="justify-content-center align-self-center m-auto">
						<img src="<?php echo $native_path ?>/images/sec7-left-img2.jpg" alt="" />
					</div>
				</div>
		</div>
	</div>

	
	<div class="grid-item grid-item--height3 frst">
	  <div class="img-col d-flex h-100">
	   <div class="justify-content-center align-self-center m-auto">
	    <img src="<?php echo $native_path ?>/images/sec7-left-img3.jpg" alt="" />
	   </div>
	  </div>
    </div>
	
    <div class="grid-item px-0 grid-item-third">
	   <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec7-left-img4.jpg" alt="" />
	   </div>
	  </div>
	   <div class="grid-item mt-md-2 px-0">
		  <div class="img-col d-flex h-100">
		    <div class="justify-content-center align-self-center m-auto">
		     <img src="<?php echo $native_path ?>/images/sec7-left-img5.jpg" alt="" />
		   </div>
		  </div>
		</div>
	</div>
   
    
    
	
    
    
	<div class="grid-item grid-item--height3 frst grid-item-fourth">
	  <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec6-left-img1.jpg" alt="" />
	   </div>
	  </div>
	</div>

</div>
<div class="middle-side">
	<div class="grid-item grid-item--width2 big-img grid-item--height3">
	  <div class="img-col d-flex">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec7-ferniture.jpg" alt="" />
	    </div>
	  </div>
	</div>
    
</div>
<div class="right-side">
<div class="grid-item grid-item--height3 frst float-right">
	<!-- <a href="https://jysk.hr/vrt/vrtna-oprema/razno/umjetna-biljka-dverglo-v90cm-bambus"> -->
	  <div class="img-col d-flex h-100">
	   <div class="justify-content-center align-self-center m-auto">
	    <img src="<?php echo $native_path ?>/images/sec7-rght-img7.jpg" alt="" />
	   </div>
	  </div>
    </div>
	<div class="grid-item">
	  <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec7-rght-img1.jpg" alt="" />
	   </div>
	  </div>
	</div>
	<div class="grid-item">
	  <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec7-rght-img3.jpg" alt="" />
	   </div>
	  </div>
	</div>
	<div class="grid-item">
	   <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec7-rght-img4.jpg" alt="" />
	   </div>
	  </div>
	</div>
	
    
	<div class="grid-item grid-item--width1">
	  <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	     <img src="<?php echo $native_path ?>/images/sec7-rght-img2.jpg" alt="" />
	   </div>
	  </div>
	</div>
	<div class="grid-item grid-item--width1">
	  <div class="img-col d-flex h-100">
	    <div class="justify-content-center align-self-center m-auto">
	    <img src="<?php echo $native_path ?>/images/sec7-rght-img5.jpg" alt="" />
	   </div>
	  </div>
	</div>
  </div>
</div>
	 </div>
	 <div class="padding-image">
	 <div class="row">
		  <div class="d-flex justify-content-center">
		    <div class="col-md-6 text-center">
		        <p>Tu su stručnjakinje uz navedeno kombinirale različite svijeće, interesantne tegle te biljke koje osim što osiguravaju više kisika, goste balkona štite od pogleda znatiželjnika. Poseban touch svemu su dali jastučići i deke koji stvaraju cozy element. Stručnjakinja je dala i par savjeta za sve one koji kreću u uređenje svog balkona.</p>
		    </div> 	 
		 </div>
	   </div>
	</div>
   </div>
</section>

<section class="section-7 section dble-img-sec position-relative py-5">
   <div class="container">
       <div class="row">	
	   <div class="rotate-content">NAKON UREĐENJA</div> 	     
	      <div class="col-md-9">
		    <img src="<?php echo $native_path ?>/images/sec7-bdy-img.jpg" alt="" class="main-image"/>
		  </div>
		  <div class="col-md-3">
		  <div class="d-flex h-100 align-items-center text-center">
			   <div class="img-rght">
			      <img src="<?php echo $native_path ?>/images/sec7-bdy-img-rght.jpg" alt="" class="main-image"/>
			 </div>
		  </div>
		  </div>
	    </div>
   </div>
</section>

<section class="section-8 section position-relative py-5">
   <div class="container">
     <div class="row text-center">	 
		<p class="top-tilte">Koje smo proizvode koristili u uređenju, a mogu inspirirati i vas</p>  
            <div class="products-grid items1 slider text-left mt-5">
                <div class="col-md-3 slide">
					<a href="https://jysk.hr/kucanstvo/tepisi/mali-tepisi/tepih-kildeurt-65x120cm-natur" target="_blank">
					  <div class="inner-col d-flex h-100">
	                   <div class="justify-content-center align-self-center m-auto">
	                      <img src="<?php echo $native_path ?>/images/product1.jpg" alt="" />
		              <p class="title">Tepih KILDEURT 65x120cm natur</p>
					  </div>
					  </div>
					  </a>
                </div>
				<div class="col-md-3 slide">
				<a href="https://jysk.hr/vrt/vrtna-oprema/razno/umjetna-biljka-dverglo-v90cm-bambus" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product2.jpg" alt="" />
	              <p class="title">Umjetna biljka DVERGLO V90cm bambus</p>
				  </div>
				  </div>
				  </a>
                </div>
				<div class="col-md-3 slide">
				<a href="https://jysk.hr/kucanstvo/dekoracija/umjetne-biljke/umjetni-cvijet-gregert-v70cm-bez" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product3.jpg" alt="" />
	              <p class="title">Umjetni cvijet GREGERT V70cm bež</p>
				  </div>
				  </div>
				  </a>
                </div>
				<div class="col-md-3 slide">
				<a href="https://jysk.hr/kucanstvo/dekoracija/umjetne-biljke/umjetna-biljka-mikkel-o23xv27cm-s-teglom" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product4.jpg" alt="" />
	              <p class="title">Umjetna biljka MIKKEL Ø23xV27cm s teglom</p>
				  </div>
				  </div>
				  </a>
               </div>
			   <div class="col-md-3 slide">
			   <a href="https://jysk.hr/kucanstvo/dekoracija/umjetne-biljke/umjetna-biljka-svenn-o11xv46cm-s-teglom" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product5.jpg" alt="" />
	              <p class="title">Umjetna biljka SVENN Ø11xV46cm s teglom</p>
				  </div>
				  </div>
				  </a>
               </div>
			   <div class="col-md-3 slide">
			   <a href="https://jysk.hr/kucanstvo/dekoracija/umjetne-biljke/umjetna-biljka-kalle-o13xv16cm-raz" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product6.jpg" alt="" />
	              <p class="title">Umjetna biljka KALLE Ø13xV16cm raz</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/kucanstvo/dekoracija/tegle-i-vaze/tegla-za-cvijece-tim-o9xv7-cm-raz" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product7.jpg" alt="" />
	              <p class="title">Tegla za cvijeće TIM Ø9xV7 cm raz</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/vrt/tegle-za-cvijece/balkon-tegla-za-cvij-bris-o12xv14-raz" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product8.jpg" alt="" />
	              <p class="title">Balkon. tegla za cvij. BRIS Ø12xV14 raz</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/vrt/lampe-i-fenjeri/fenjer-broms-s20-26xv24-32-2-kom-set" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product9.jpg" alt="" />
	              	<p class="title">Fenjer BROMS Š20/26xV24/32 2 kom/set</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/vrt/vrtne-klupe/klupa-gangesbro-s110xdub30-tvrdo-drvo" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product10.jpg" alt="" />
	              	<p class="title">Klupa GANGESBRO Š110xDub30 tvrdo drvo</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/vrt/stolovi/bistro-stolovi/bistro-stol-egelund-s62xd62-tvrdo-drvo" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product11.jpg" alt="" />
	              	<p class="title">Bistro stol EGELUND Š62xD62 tvrdo drvo</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/vrt/stolovi/bistro-stolovi/bistro-stol-egelund-s62xd62-tvrdo-drvo" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product12.jpg" alt="" />
	              	<p class="title">Bistro stol EGELUND Š62xD62 tvrdo drvo</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/vrt/vrtne-stolice/masivno-drvo/sklopiva-stolica-egelund-tvrdo-drvo" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product13.jpg" alt="" />
	              	<p class="title">Sklopiva stolica EGELUND tvrdo drvo</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/pohranjivanje/kosare-i-sl/pletene-kosare/kutija-bjork-s28xd17xv8cm-reciklirana" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product14.jpg" alt="" />
	              	<p class="title">Kutija BJORK Š28xD17xV8cm reciklirana</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/kucanstvo/deke/razno/deka-lobelia-130x180-zelena" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product15.jpg" alt="" />
	              	<p class="title">Deka LOBELIA 130x180 zelena</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/kucanstvo/dekorni-jastuci/ukrasni-jastuci/ukrasni-jastuk-valeriana-50x50-zuta" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product16.jpg" alt="" />
	              	<p class="title">Ukrasni jastuk VALERIANA 50x50 žuta</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/kucanstvo/dekoracija/tegle-i-vaze/vaza-felix-o19xv35-cm-staklo-zelena" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product17.jpg" alt="" />
	              	<p class="title">Vaza FELIX Ø19xV35 cm staklo zelena</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/pohranjivanje/kosare-i-sl/pletene-kosare/kosara-arve-o34xv28cm-natur" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product18.jpg" alt="" />
	              	<p class="title">Košara ARVE Ø34xV28cm natur</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/kucanstvo/dekoracija/svijece-i-salvete/mirisna-svijeca-nikolai-o8xv9cm-raz" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product19.jpg" alt="" />
	              	<p class="title">Mirisna svijeća NIKOLAI Ø8xV9cm raz</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/vrt/vrtna-oprema/razno/tepih-elvesanger-160x230-raz" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product20.jpg" alt="" />
	              	<p class="title">Tepih ELVESANGER 160x230 raz</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/vrt/lampe-i-fenjeri/lampice-gulirisk-4m-s-20-led-prozirna" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product21.jpg" alt="" />
	              	<p class="title">Lampice GULIRISK 4m s 20 LED prozirna</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/vrt/lampe-i-fenjeri/baterijska-lampa-vannrikse-o24xv59" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product22.jpg" alt="" />
	              	<p class="title">Baterijska lampa VANNRIKSE Ø24xV59</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/vrt/lampe-i-fenjeri/fenjer-entita-o38xv32-bambus-crna" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product23.jpg" alt="" />
	              	<p class="title">Fenjer ENTITA Ø38xV32 bambus crna</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/vrt/tegle-za-cvijece/tegla-za-cvijece-hveps-o41xv33cm-raz" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product24.jpg" alt="" />
	              	<p class="title">Tegla za cvijeće HVEPS Ø41xV33cm raz</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/vrt/vrtne-garniture/vrtna-garnitura-s-prod-ugilt-3-os-drvo" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product25.jpg" alt="" />
	              	<p class="title">Vrtna garnitura s prod. UGILT 3 os. drvo</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/vrt/lounge-namjestaj/lounge-stolovi/lounge-stol-ugilt-s60xd90-tvrdo-drvo" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product26.jpg" alt="" />
	              	<p class="title">ounge stol UGILT Š60xD90 tvrdo drvo</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/blagovaonica/bar-stol-stolice/barska-stolica-grindsted-barssiva-crna" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product27.jpg" alt="" />
	              	<p class="title">Barska stolica GRINDSTED barš.siva/crna</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/kucanstvo/dekoracija/svijece-i-salvete/svijeca-bosse-o8xv9cm-svjetlosiva" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product28.jpg" alt="" />
	              	<p class="title">Svijeća BOSSE Ø8xV9cm svjetlosiva</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/kucanstvo/dekorni-jastuci/ukrasni-jastuci/ukrasni-jastuk-engkarse-45x45-bez" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product29.jpg" alt="" />
	              	<p class="title">Ukrasni jastuk ENGKARSE 45x45 bež</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/kucanstvo/dekorni-jastuci/ukrasni-jastuci/ukrasni-jastuk-engsyre-45x45-menta" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product30.jpg" alt="" />
	              	<p class="title">Ukrasni jastuk ENGSYRE 45x45 menta</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/kucanstvo/deke/razno/deka-lobelia-130x180-plava" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product31.jpg" alt="" />
	              	<p class="title">Deka LOBELIA 130x180 plava</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/kucanstvo/dekoracija/tegle-i-vaze/vaza-roy-o13xh20cm-staklo-zelena" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product32.jpg" alt="" />
	              	<p class="title">Vaza ROY Ø13xH20cm staklo zelena</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/kucanstvo/dekoracija/kuhinjska-oprema/zdjela-lauke-o12xv6cm-kamenina-raz" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product33.jpg" alt="" />
	              	<p class="title">Zdjela LAUKE Ø12xV6cm kamenina raz</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/kucanstvo/dekoracija/kuhinjska-oprema/salica-lauke-o9xv8cm-280-ml-raz" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product34.jpg" alt="" />
	              	<p class="title">Šalica LAUKE Ø9xV8cm 280 ml raz</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/kucanstvo/dekoracija/tegle-i-vaze/tegla-za-cvijece-oddmund-o14xv13-cm-crna" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product35.jpg" alt="" />
	              	<p class="title">Tegla za cvijeće ODDMUND Ø14xV13 cm crna</p>
				  </div>
				  </div>
				  </a>
               </div>
               <div class="col-md-3 slide">
			   <a href="https://jysk.hr/kucanstvo/dekoracija/umjetne-biljke/umjetna-biljka-steinar-o25xv30cm-s-tegl" target="_blank">
				  <div class="inner-col d-flex h-100">
                   <div class="justify-content-center align-self-center m-auto">
                      <img src="<?php echo $native_path ?>/images/product36.jpg" alt="" />
	              	<p class="title">Umjetna biljka STEINAR Ø25xV30cm s tegl</p>
				  </div>
				  </div>
				  </a>
               </div>
            </div> 
	    </div>
    </div>
</section>

<section class="section-9 section dble-img-sec position-relative py-5 text-center">
   <div class="container">
       <div class="row">	
	   		<p class="top-tilte mb-5">Doza inspiracije za uređenje tvoje urbane zone</p>   
	      <div class="col-md-6">
		   <div class="inner-col">
		    <img src="<?php echo $native_path ?>/images/blog-img-1.png" alt="" />
			  <div class="txt-details p-4">
			    <p>Svi pričaju o ovom stolcu izrađenom od održivih materijala. Znamo gdje ga možete kupiti</p>
			    <a href="https://super1.telegram.hr/relax/svi-pricaju-o-ovom-stolcu-izradenom-od-odrzivih-materijala-znamo-gdje-ga-mozete-kupiti" target="_blank"><span>Saznaj više</span></a>
			  </div>
			</div>
		  </div>
		  <div class="col-md-6">
		    <div class="inner-col">
			 <img src="<?php echo $native_path ?>/images/blog-img-2.png" alt="" />
			 <div class="txt-details p-4">
			    <p> Tražite inspiraciju za uređenje svoje oaze mira? Škicnite ovaj makeover, uredili smo dva balkona</p>
			    <a href="https://super1.telegram.hr/relax/trazite-inspiraciju-za-uredenje-svoje-oaze-mira-skicnite-ovaj-makeover-uredili-smo-dva-balkona" target="_blank"><span>Saznaj više</span></a>
			  </div>
			 </div>
		  </div>
	   </div>
   </div>
</section>
<section class="section-10 section dble-img-sec position-relative py-5 text-center">
   <div class="container">
       <div class="row">	
	   		<p class="top-tilte mb-5">Instagram inspo hygge kutak</p>   
	      <div class="col-md-3">
		   <div class="inner-col">
		   	<a href="https://www.instagram.com/adobrincic/" target="_blank">
		    <img src="<?php echo $native_path ?>/images/instagram-1.png" alt="" />
			  <div class="txt-details p-4">
			    <a href="https://www.instagram.com/adobrincic/" target="_blank"><span>#mojhyggekutak</span></a>
			  </div>
			  <div class="icon-holder">
			  	<img src="<?php echo $native_path ?>/images/instagram-icon.png" alt="" />
			  </div>
			  </a>
			</div>
		  </div>
		  <div class="col-md-3">
		   <div class="inner-col">
		   	<a href="https://www.instagram.com/skitnica/" target="_blank">
		    <img src="<?php echo $native_path ?>/images/instagram-2.png" alt="" />
			  <div class="txt-details p-4">
			    <a href="https://www.instagram.com/skitnica/" target="_blank"><span>#mojhyggekutak</span></a>
			  </div>
			  <div class="icon-holder">
			  	<img src="<?php echo $native_path ?>/images/instagram-icon.png" alt="" />
			  </div>
			  </a>
			</div>
		  </div>
		  <div class="col-md-3">
		   <div class="inner-col">
		   	<a href="https://www.instagram.com/luluartflower/" target="_blank">
		    <img src="<?php echo $native_path ?>/images/instagram-3.png" alt="" />
			  <div class="txt-details p-4">
			    <a href="https://www.instagram.com/luluartflower/" target="_blank"><span>#mojhyggekutak</span></a>
			  </div>
			  <div class="icon-holder">
			  	<img src="<?php echo $native_path ?>/images/instagram-icon.png" alt="" />
			  </div>
			  </a>
			</div>
		  </div>
		  <div class="col-md-3">
		   <div class="inner-col">
		   	<a href="https://www.instagram.com/august_xvi/" target="_blank">
		    <img src="<?php echo $native_path ?>/images/instagram-4.png" alt="" />
			  <div class="txt-details p-4">
			    <a href="https://www.instagram.com/august_xvi/" target="_blank"><span>#mojhyggekutak</span></a>
			  </div>
			  <div class="icon-holder">
			  	<img src="<?php echo $native_path ?>/images/instagram-icon.png" alt="" />
			  </div>
			  </a>
			</div>
		  </div>
	   </div>
   </div>
</section>
<footer class="page-footer py-5 mt-5 text-center">
    <div class="container">
      <div class="row">
	  <p class="w-100 text-center pb-4">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing.</p>
	  <div class="col-md-12">
           <a class="footer-logo" target="_blank" href="https://www.fina.hr/">
             <img src="<?php echo $native_path ?>/images/jysk-logo1.jpg" alt="" />
           </a>
           <a class="footer-logo" target="_blank" href="https://www.akd.hr/">
             <img src="<?php echo $native_path ?>/images/tg_studio.jpg" alt="" />
           </a>

		</div>
     </div>

</div>
</footer>
</div>

<script>
$(document).ready(function(){
 $(".items1").slick({
        autoplay:true,
        dots: true,
        centerMode: true,
		arrows:true,
		autoplaySpeed:1500,
		prevArrow:'<button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow:'<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        slidesToShow: 4,
        slidesToScroll: 3,
		 responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2,
      }
    },
	{
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
		dots: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
		dots: false
      }
    }
  ]
      });
   /*$(".items2").slick({
	    autoplay:true,
        dots: false,
        centerMode: true,
		arrows:true,
		autoplaySpeed:1500,
		prevArrow:'<button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow:'<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        slidesToShow: 2,
        slidesToScroll: 1,
		responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
      });*/
});
</script>
<script>
$(document).ready(function(){
$('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: 160,
  gutter: 20
});
});
</script>
<!--include footer-->
	<?php wp_footer(); ?>
</body>
</html>
