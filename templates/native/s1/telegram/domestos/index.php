<!doctype html>
<html class="no-js" lang="">
<?php
		$native_path = get_stylesheet_directory_uri() . '/templates/native/telegram/domestos';
	?>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!--include header-->
		<?php wp_head();
		?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $native_path ?>/fonts/css/all.css"> <!--load all styles -->
	
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $native_path ?>/css/slick.css" />
  <link rel="stylesheet" href="<?php echo $native_path ?>/css/main.css?v=14">
  <link rel="stylesheet" href="<?php echo $native_path ?>/css/responsive.css?v=14">
  <style>
  #onepage-nav li a {
	color:;
	text-decoration: none;
}

#onepage-nav li a.scroll.active{
	font-weight: 600;
}
  </style>
</head>

<body>
<?php do_action('body_start'); ?>
  <!-- Add your site or application content here -->
	<div class="domestos-holder relative">
	<div class="wrapper_wrap">
	  <div class="benner-img-section"><img src="<?php echo $native_path ?>/img/banner-key-img.jpg" alt="" class="relative"></div>
		<!--<div class="d-flex justify-start header-start">
			<div class="logo-holder">
				<img src="<?php //echo $native_path ?>/img/logo.png" alt="" class="relative">				
			</div>
			<div class="logo-holder logo2">
			<img src="<?php //echo $native_path ?>/img/logo2.png" alt="" class="relative">
			</div>
			<div class="top-header">
				<h2 class="uppercase-text">Oni brinu sami o sebi,<br>
NO U TOME NE TREBAJU BITI SAMI.</h2>
			</div>
		</div>-->
		<!--<div class="d-flex align-center time-section justify-center w-100">
			<div class="timer-holder">
				<span class="uppercase-text text-medium">iznos prikupljenih donacija</span>
				<h1>
					000 003 429  <span>kuna</span>
				</h1>
			</div>
		</div>-->
			<!--<div class="bottom-part">
				<div class="d-flex align-center justify-center qr-area">
				<h2 class="uppercase-text title-arrow mobile-title">doniraj i ti</h2>
				<div class="qr-image-left"><a href="https://kekspay.hr/pay/?cid=C003828&tid=P003829&qr_type=4" target="_blank"><img src="<?php //echo $native_path ?>/img/keks1.png" alt="" class="relative"></a></div>
				<div class="qr-image"><img src="<?php //echo $native_path ?>/img/qr.png?v=11" alt="" class="relative"></div>
				<div class="qr-rightpart">
					<div>
					<div class="txt">
						<h2 class="uppercase-text title-arrow">doniraj i ti</h2>
						<p>HR7123600001102052855<br>

							Poziv na broj: HR 00 092021<br>

							Rotary Klub Zagreb – Donacija Korak u život Domestos</p>

							<span>Domestos donacija iznosi 192.000 kn.</span>
                       </div>
					</div>
					
				</div>
				
			</div>
			<p class="footer-text d-desk">Vaš kupljeni proizvod ne podržava izravno dobrotvornu organizaciju. Doniranje u dobrotvorne svrhe možete izvršiti putem QR koda.</p>
			<marquee width="90%" direction="left" height="100px"  class="footer-text d-mob">
Vaš kupljeni proizvod ne podržava izravno dobrotvornu organizaciju. Doniranje u dobrotvorne svrhe možete izvršiti putem QR koda.
</marquee>
			
			</div>-->
		</div><!-- wrapper_wrap -->
		<!--<div class="marko absolute">
			<img src="<?php //echo $native_path ?>/img/marko.png" alt="" class="relative">
		</div>-->
		
		
	</div>


  <!-- Header Section Start -->

  <div class="main-wrapper">
    
	<div class="section-header">
	 <div class="header-inner">
	  <div class="d-flex justify-start header-start">
	    <div class="header-logo">
          <img class="relative" alt="" src="<?php echo $native_path ?>/img/logo.png">
        </div>
		<span class="toggle"><i class="fa fa-bars" aria-hidden="true"></i></span>
		<div class="fix-nav">
		 <ul class="menu desk" id="onepage-nav">
		    
			<li class="second"><a class="menu-itam scroll" href="#section2">Sve što trebate znati<br> o dezinfekciji</a></li>
			<li class="third"><a class="menu-itam scroll" href="#section3">10 načina dezinfekcije</a></li>
			<li class="fourth"><a class="menu-itam scroll" href="#section4">Kako pravilno dozirati<br> i koristiti Domestos</a></li>
			<li class="fifth"><a class="menu-itam scroll" href="#section5">Domestos asortiman</a></li>
			<li class="first"><a class="menu-itam scroll" href="#section1">Humanitarni projekt<br> KORAK U ŽIVOT</a></li>
			
		  </ul>
		  <ul class="menu mobile" id="onepage-nav2">
		    
			<li class="second"><a class="menu-itam scroll2" href="#section7">Sve što trebate znati<br> o dezinfekciji</a></li>
			<li class="third"><a class="menu-itam scroll2" href="#section8">10 načina dezinfekcije</a></li>
			<li class="fourth"><a class="menu-itam scroll2" href="#section9">Kako pravilno dozirati<br> i koristiti Domestos</a></li>
			<li class="fifth"><a class="menu-itam scroll2" href="#section10">Domestos asortiman</a></li>
			<li class="first"><a class="menu-itam scroll2" href="#section6">Humanitarni projekt<br> KORAK U ŽIVOT</a></li>
			
		  </ul>
		</div>
		<div class="header-right relative">
		  <ul>
		  <li><a href="https://www.konzum.hr/web/search?&search[scope]=1&search[term]=Domestos&sort=RELEVANCE&utf8=%E2%9C%93&per_page=11" target="_blank">konzum <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a></li>
		  <!--<li><a href="https://www.ekupi.hr/hr/search/?text=domestos">ekupi <span><i clasfa fa-long-arrow-right" aria-hidden="true" target="_blank"></i></span></a></li>-->
		  <li><a href="https://bazzar.hr/search?utf8=%E2%9C%93&q=domestos">bazzar <span><i class="fa fa-long-arrow-right" aria-hidden="trues=" target="_blank"></i></span></a></li>	
		  <li class="fb"><a href="https://www.facebook.com/domestoshrvatska/" target="_blank"><span><i class="fa fa-facebook" aria-hidden="true"></i></span>Domestos Hrvatska</a></li>	  
		  </ul>
		  
		</div>
	   </div>
	  </div>
	</div>
	
	<div class="body-content">
	<div></div>
	 
	  
	  <div class="section section2">
	   <h2 id="section2" class="uppercase-text top-heading">sve što trebate znati o dezinfekciji</h2>
	   <div id="section7" class="mob"></div>
	    <div class="content-section text-center">
		   <h3 class="content-heading uppercase-text mb-3">U ovim nespecifičnim životnim uvjetima pokazalo se<br> da je dezinfekcija doma itekako važna. Evo sve što<br> trebate o njoj znati</h3>
		   <p>Dezinfekcija u širem smislu predstavlja skup postupaka kojima se uklanjaju, onesposobljavaju ili uništavaju mikroorganizmi u toj mjeri da nisu sposobni izazvati infekciju. Ovaj „ozbiljni“ termin sasvim nam je ozbiljno ušao u svakodnevicu i gotovo ne možemo zamisliti dan a da barem 10-ak puta ne dezinficiramo ruke, kvake, ključeve, mobitel, površine po kući... Mehanički postupci dezinfekcije - čišćenje i pranje - smanjuju broj mikroorganizama i uklanjaju ih s površina i predmeta, kao i sa živog tkiva. Sredstva za čišćenje - deterdženti, sapuni i prašci za ribanje - odmašćuju podlogu i uklanjaju nečistoću u kojoj su uklopljeni mikroorganizmi te na taj način olakšavaju postupak dezinfekcije.</p>       <div class="img-box relative mt-3">
		      <img src="<?php echo $native_path ?>/img/img1.png" alt="" />
			  <h5 class="absolute blue-bg text-left uppercase-text">samo 34% ljudi<br> pravilno pere<br> ruke</h5>
			  <h4 class="img-title">Dezinfekcija ruku i tijela</h4>
			  <p>Istraživanja širom svijeta pokazala su da samo 34% ljudi pravilno pere ruke. Ruke je potrebno prati i prije i poslije pripremanja hrane, kontakta sa prehlađenima, kihanja i kašljanja, rada sa smećem te prilikom ulaska u kuću. Prema Svjetskoj zdravstvenoj organizaciji (WHO), pranje ruku je jedna od najefikasnijih metoda za sprečavanje širenja virusa. Ako ste izvan kuće i nemate priliku oprati ruke, vlažne maramice i tekućine za dezinfekciju mogu dati donekle dobru alternativu. Važno je njima dobro očistiti sva mjesta na rukama, uključujući područje između prstiju, nokte, površinu ispod nokta i palčeve.</p>
		   </div>
		   <div class="img-box relative mt-3">
		      <img src="<?php echo $native_path ?>/img/img2.png" alt="" />
			  <h4 class="img-title">Mobitel, miš, tipkovnica...</h4>
			  <p>O njihovoj čistoći i dezinfekciji svakodnevno treba voditi računa i to raditi više puta dnevno. Miš, tipkovnicu, daljinski upravljač, glazbeni uređaj, upravljače videoigara, ključeve tretirajte dezinficijensom, ali tako da ga raspršite na krpu od mikrovlakana ili pamuka, ali ne prejako, da bude prevlažna i tako ošteti uređaj. Usredotočite se na utore i posušite čistom krpom.</p>
		   </div>
		   <div class="img-box relative mt-3 mb-3">
		      <img src="<?php echo $native_path ?>/img/img3.png" alt="" />
			  <h5 class="absolute blue-bg text-left uppercase-text">ubija 99%<br> poznatih<br> mikroorganizama</h5>
			  <h4 class="img-title">Dezinfekcija površina u domu i na radnom mjestu</h4>
			  <p>Iznimno važan postupak u ovo vrijeme pandemije je dezinfekcija životnog i radnog okruženja. Svaki bi dan trebali dezifincirati sve površine koje često dodirujete – kvake na vratima, prekidače, slavine u kupaonici i kuhinji te radnu površinu u kuhinji. Multifunkcionalno sredstvo za čišćenje i dezinfekciju Domestos pouzdan je i siguran izbor jer ga se može koristiti na čak 10 različitih načina, a iznimno je učinkovit protiv virusa i bakterija – ubija čak 99% poznatih mikroorganizama</p>
		   </div>		   
		</div>
	  </div>
	  
	  <div class="section section3">
	  <div class="img-box4 relative mb-3 text-center">
	  <h4>od malih do velikih površina</h4>
	  <img src="<?php echo $native_path ?>/img/anim.gif" alt="" />
	  
	  </div>

	   <h2 id="section3" class="uppercase-text top-heading">10 načina dezinfekcije</h2>
	   <div id="section8" class="mob"></div>
	    <div class="content-section text-center">
		  <div class="products-grid items1 slider">
                <div class="col-md-4 slide">
				  <div class="inner-col">
                   <img src="<?php echo $native_path ?>/img/slide-img1.png" alt="" />
	               <h4 class="img-title">1. stalno prohodne površine</h4>
				   <p>Vrlo je važno dezinficirati površine koje su stalno prohodne, stoga podove u kući ili stanu redovito dezinficirajte razrjeđenim proizvodom. <br>
Kako: nalijte 180 ml Domestosa u 5l vode i temeljiti pobrišite sve površine (kod novih, obojenih ili sumnjivih površina prvo isprobati na malom, neprimjetnom dijelu).</p>
				  </div>
                </div>
				<div class="col-md-4 slide">
				  <div class="inner-col">
                   <img src="<?php echo $native_path ?>/img/slide-img1-1.jpg" alt="" />
	               <h4 class="img-title">2. Umivaonik</h4>
				   <p>Umivaonik redovito čistite koristeći Domestos. Odstranite prljavštinu i tragove sapuna, a zatim upotrijebite razrijeđeni Domestos za uništavanje mikroba i isperite. <br>
OPREZ: Nikako ne koristite sredstvo za čišćenje na emajliranim površinama i površinama presvučenim metalom (kromiranim/pozlaćenim) jer će doći do oštećenja (slavine, rukohvati i sl.).</p>
				  </div>
                </div>
				<div class="col-md-4 slide">
				  <div class="inner-col">
                   <img src="<?php echo $native_path ?>/img/slide-img1-2.jpg" alt="" />
	               <h4 class="img-title">3. WC školjka i WC četka</h4>
				   <p>Za optimalnu i dugotrajnu zaštitu od kamenca i mikroorganizama koji se nalaze u vašoj WC školjki nalijte Domestos pod rub (oko 80 ml) i ostavite da djeluje 30 minuta. Dezinficirajte WC školjku svaki dan. Četku kojom čistite vašu WC školjku potrebno je redovito dezinficirati. Nalijte razrijeđeni Domestos u posudu u kojoj se nalazi četka. Pazite da ne dođe u kontakt s drškom četke ukoliko je metalna.<br>
Mijenjajte otopinu nekoliko puta tjedno.</p>
				  </div>
                </div>
				<div class="col-md-4 slide">
				  <div class="inner-col">
                   <img src="<?php echo $native_path ?>/img/slide-img1-3.jpg" alt="" />
	               <h4 class="img-title">4. Odčepljivanja odvoda</h4>
				   <p>Ukoliko imate problema sa začepljenim odvodom u vašoj kuhinji, kupaonici ili sudoperu, nalijte Domestos u odvod i pričekajte 30 minuta. Odvod će biti dezinficiran, a neugodni mirisi otklonjeni.<br>
*Prilikom ulijevanja tekućine pazite da se ne razlijeva po rubu odvoda ukoliko je metalan, kako ne bi došlo do oštećenja.</p>
				  </div>
                </div>
				<div class="col-md-4 slide">
				  <div class="inner-col">
                   <img src="<?php echo $native_path ?>/img/slide-img1-4.jpg" alt="" />
	               <h4 class="img-title">5. Površine za pripremu hrane</h4>
				   <p>Za dezinficiranje površina na kojima pripremate hranu, stavite 180 ml otopine u 5 l vode. Prebrišite površine i isperite nakon 60 minuta. U slučaju težih nečistoća, prije dezinfekcije uklonite nečistoće. <br>
*Ne upotrebljavati na emajliranim povšinama i površinama presvučenim metalom (kromiranim/pozlaćenim).</p>
				  </div>
                </div>
				<div class="col-md-4 slide">
				  <div class="inner-col">
                   <img src="<?php echo $native_path ?>/img/slide-img1-5.jpg" alt="" />
	               <h4 class="img-title">6. Kante za smeće</h4>
				   <p> Kante za smeće su prostor u kojima se često nalazi puno bakterija. Redovito ih perite i dezinficirajte razrijeđenim Domestosom. Ne zaboravite očistiti i prostor oko kante za smeće. Ne upotrebljavati na emajliranim povšinama i površinama presvučenim metalom.</p>
				  </div>
                </div>
				<div class="col-md-4 slide">
				  <div class="inner-col">
                   <img src="<?php echo $native_path ?>/img/slide-img1-6.jpg" alt="" />
	               <h4 class="img-title">7. Kante i krpe za pranje poda</h4>
				   <p>Kantu i krpu za pranje poda redovito dezinficirajte koristeći razrijeđeni Domestos.<br>
Stavite 90 ml proizvoda u pola kante vode i ostavite da se namaće u otopini 60 minuta.<br>
Napomena: proizvod koristiti samo na plastičnim kantama/posudama.   
</p>
				  </div>
                </div>
				<div class="col-md-4 slide">
				  <div class="inner-col">
                   <img src="<?php echo $native_path ?>/img/slide-img1-7.jpg" alt="" />
	               <h4 class="img-title">8. Ulazna vrata</h4>
				   <p>Ulazna vrata su mjesto čestog kontakta nas i naših gostiju i stoga ih je potrebno redovito dezinficirati.<br>
Razrijedite 180 ml proizvoda u 5 l vode i detaljno prebrišite vrata za potpunu dezinfekciju. Ukoliko su kvake od nehrđajućeg čelika može se koristiti Domestos univerzalno sredstvo za čišćenje u spreju.<br>
Napomena: proizvod koristiti samo ako se radi o PVC stolariji.
</p>
				  </div>
                </div>
				<div class="col-md-4 slide">
				  <div class="inner-col">
                   <img src="<?php echo $native_path ?>/img/slide-img1-8.jpg" alt="" />
	               <h4 class="img-title">9. Posude kućnih ljubimaca</h4>
				   <p>Ne zaboravite i na higijenu vaših kućnih ljubimaca. Plastične posude za hranu i vodu redovito dezinficirajte razrijeđenim proizvodom.</p>
				  </div>
                </div>
				<div class="col-md-4 slide">
				  <div class="inner-col">
                   <img src="<?php echo $native_path ?>/img/slide-img1-9.jpg" alt="" />
	               <h4 class="img-title">10. Bijelo rublje</h4>
				   <p>Domestos koristite za izbjeljivanje svog rublja i dezinfekciju bijelih pamučnih višekratnih maski za lice. Stavite 20 ml proizvoda u 5 l vode i ostavite tijekom noći, zatim temeljito isperite.</p>
				  </div>
                </div>				
            </div>
		</div>
	  </div>
	  
	  <div class="section section4">
	   <img class="large" src="<?php echo $native_path ?>/img/zelena_boca.png" alt="" />
	   <h2 id="section4" class="uppercase-text top-heading">kako pravilno dozirati i koristiti domestos?</h2>
	   <div id="section9" class="mob"></div>
	    <div class="content-section text-center">
		  <div class="img-box first">
		     <h4 class="img-title">1. RAZRIJEÐEN - za dezinfekciju</h4>
			 <p><strong>Podovi i radne površine:</strong> staviti 180 ml proizvoda u 5 l vode i ostaviti da se osuši na podu. Ne upotrebljavati nerazrijeđen proizvod na podovima. U slučaju težih nečistoća, prije dezinfekcije potrebno ih je ukloniti.</p>
<p class="last"><strong>Kuhinjske krpe i spužvice:</strong> isprati ih vodom, zatim staviti 90 ml proizvoda u pola kante vode i ostaviti ih da se namaču u otopini 60 minuta.</p>
             <img src="<?php echo $native_path ?>/img/img5.jpg" alt="" />
		  </div>
		  <div class="img-box">
		     <h4 class="img-title mt-3">2. NERAZRIJEÐEN - za dezinfekciju i zaštitu od<br> mikroorganizama</h4>
			 <p><strong>WC školjka:</strong> naliti pod rub (oko 80 ml) i ostaviti da djeluje 30 minuta. Za optimalnu dugotrajnu zaštitu od kamenca i mikroorganizama, koristiti proizvod barem jednom dnevno.</p>
<p class="last"><strong>Odvodi u kuhinji/kupaonici/sudoperu:</strong> nanesite u odvod za dezinfekciju i uklanjanje neugodnih mirisa. Paziti da ne dođe u kontakt s površinama koje dolaze u kontakt sa hranom i pićem. Ostaviti da djeluje 30 minuta i zatim temeljito isprati.</p>
		  </div>
		  <div class="img-box">
		     <h4 class="img-title mt-3">3. Prilikom korištenja dobro provjetrite prostoriju i<br> izbjegavajte izravno udisanje proizvoda. Uvijek koristite<br> plastičnu posudu.</h4>
			 <img src="<?php echo $native_path ?>/img/img-6.jpg" alt="" />
		  </div>
		  <div class="img-box third">
		     <h4 class="img-title mt-3">4. Uvijek koristite rukavice.</h4>
             <h4 class="img-title mt-3">5. Uvijek nakon korištenja operite ruke.</h4>
		  </div>
		</div>
	  </div>
	  
	  <div class="section section5">
	   <h2 id="section5" class="uppercase-text top-heading">domestos asortiman</h2>
	   <div id="section10" class="mob"></div>
	    <div class="content-section text-center">
		  <div class="products-grid items2 slider">
                <div class="col-md-4 slide">
				  <div class="inner-col">
                   <img src="<?php echo $native_path ?>/img/slide-img2.jpg" alt="" />
	               <h4 class="img-title">osvježivač za wc školjku</h4>
				   <p>5 funkcija: Održava čistoću, pjeni, sprječava nakupljanje kamenca, miriše, daje sjaj</p>
				  </div>
                </div>
				<div class="col-md-4 slide">
				  <div class="inner-col">
                   <img src="<?php echo $native_path ?>/img/domestos_proizvod_5.jpg" alt="" />
	               <h4 class="img-title">UNIVERZALNI SPREJ</h4>
				   <p>Učinkovit u kuhinji, kupaonici i ostalim perivim površinama.</p>
				  </div>
                </div>
				
				<div class="col-md-4 slide">
				  <div class="inner-col">
                   <img src="<?php echo $native_path ?>/img/slide-img2-1.png" alt="" />
	               <h4 class="img-title">TEKUĆE SREDSTVO ZA ČIŠĆENJE I DEZINFEKCIJU</h4>
				   <p>Učinkovit protiv virusa i bakterija, za potpunu higijenu doma.</p>
				  </div>
                </div>
				
				<div class="col-md-4 slide">
				  <div class="inner-col">
                   <img src="<?php echo $native_path ?>/img/slide-img2-3.jpg" alt="" />
	               <h4 class="img-title">GEL ZA WC</h4>
				   <p>Domestos Zero gel za uklanjanje kamenca u WC školjci.</p>
				  </div>
                </div>
				
				<div class="col-md-4 slide">
				  <div class="inner-col">
                   <img src="<?php echo $native_path ?>/img/slide-img2-4.jpg" alt="" />
	               <h4 class="img-title">IZBJELJIVAČ RUBLJA</h4>
				   <p>Domestos Original za izbjeljivanje i dezinfekciju bijelog pamučnog rublja.</p>
				  </div>
                </div>		
				<div class="col-md-4 slide">
				  <div class="inner-col">
                   <img src="<?php echo $native_path ?>/img/slide-img2-5.jpg" alt="" />
	               <h4 class="img-title">UNIVERZALNE MARAMICE</h4>
				   <p>Higijenske maramice za kućanstvo, univerzalne,  za čišćenje svih površina.</p>
				  </div>
                </div>
					
            </div>
			
			
		</div>
	  </div>
	   <div class="section section1">
	    <h2 id="section1" class="uppercase-text top-heading">Humanitarni projekt korak u život</h2>
		<div id="section6" class="mob"></div>
		<div class="content-section text-center">
		  <h3 class="content-heading uppercase-text mb-3">Oni brinu sami o sebi.<!--<br> Domestos im pomaže da u tome nisu sami.--></h3>
		 <!-- <p class="mb-3">Djeca i mladi bez odgovarajuće skrbi prisiljeni su misliti na stvari koje ostali vršnjaci ne moraju. Nemaju sigurnost koju većina nas osjeća tijekom odrastanja. Bili oni spremni ili ne, moraju biti odgovorni sami za sebe. I to oduzima radost odrastanja.</p>
<p>Novom Domestos kampanjom odlučili smo im pokazati da nisu sami.</p>-->
           <!--<div class="d-flex justify-center top-video mb-3 mt-3">
		
<div class="video-section">
<video id="autoplay" width="500" height="280" muted playsinline controls>
   <source src="<?php //echo $native_path ?>/img/BUMPERHD.mp4" type="video/mp4">
   <source src="video.webm" type="video/webm">
</video>
</div>
		<div class="video-section">
			     <video id="vid" width="500" height="280" class="backvid" autoplay="autoplay">
  <source src="<?php //echo $native_path ?>/img/BUMPERHD.mp4" type="video/mp4">
  <source src="<?php //echo $native_path ?>/img/BUMPERHD.ogg" type="video/ogg">
</video>
			  </div>
			  <div class="video-img">
			     <img src="<?php //echo $native_path ?>/img/oni-brinu.jpg" alt="" />
			  </div>
		   </div>-->
		   <p>Djeca i mladi bez odgovarajuće skrbi prisiljeni su misliti na stvari koje ostali vršnjaci ne moraju. Nemaju sigurnost koju većina nas osjeća tijekom odrastanja. Bili oni spremni ili ne, moraju biti odgovorni sami za sebe. I to im oduzima radost odrastanja.</p>

<p>Domestos kampanjom odlučili smo im pokazati da nisu sami.</p>
   
<p>Povezali smo se s humanitarnom akcijom „Korak u život“ koja od 2008. godine prikuplja sredstva za stipendiranje mladih bez odgovarajuće roditeljske skrbi, koji zbog zakonskih ograničenja napuštaju udomiteljske obitelji i domove nakon stjecanja punoljetnosti, a nemaju potrebna sredstva za daljnje školovanje.
Akciji „Korak u život“ donirali smo 192.000 kuna čime smo pomogli pokriti troškove dvije studentske stipendije u razdoblju od pet godina.
</p>

<p>Više o tome kako je naša brižnost postala njihova sigurnija budućnost pogledajte u videu.</p>
<div class="video-section video-section2">
<video id="autoplay" width="500" height="280" muted playsinline controls>
   <source src="<?php echo $native_path ?>/img/Domestos.mp4" type="video/mp4">
   <source src="video.webm" type="video/webm">
</video>
</div>
        <!-- <p class="product-img mt-3 mb-3">
		    <img src="<?php //echo $native_path ?>/img/product.png" alt="" />
		 </p>
		 <p class="mt-3 mb-3">Samostalnost je vrlina, ali kada stigne prerano postaje teret. Pomozite nam da stipendijama rasteretimo talentirane mlade ljude i osiguramo im bolju startnu poziciju u budućnosti.</p>-->
		 <!--<div class="d-flex align-center justify-center">
		 <div class="keks-image-left"><a href="https://kekspay.hr/pay/?cid=C003828&tid=P003829&qr_type=4" target="_blank"><img src="<?php echo $native_path ?>/img/keks1.png" alt="" class="relative"></a></div>
		   <div class="keks-img">
		     <img src="<?php //echo $native_path ?>/img/qr1.svg" alt="" />
			 <img src="<?php //echo $native_path ?>/img/keks.png" alt="" />
		   </div>
		 </div>-->
		</div>
	  </div>
	</div>
	<footer class="page-footer text-center">
   <div class="footer-content">
  	<p>Biocidni proizvod rabiti pažljivo. Prije uporabe uvijek pročitati deklaraciju i podatke o proizvodu.</p>
    <div class="d-flex justify-start">
		      <div class="logo-holder">
			     <img alt="" src="<?php echo $native_path ?>/img/logo.png">
				 <img alt="" src="<?php echo $native_path ?>/img/tg_studio.png">
			  </div>
		   </div>
		   <p class="scroll">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Domestos i po najvišim uredničkim standardima Telegram Media Grupe.</p>
		<ul class="d-mob footer-btm-icon">
		  <li><a href="https://www.konzum.hr/web/search?&amp;search[scope]=1&amp;search[term]=Domestos&amp;sort=RELEVANCE&amp;utf8=%E2%9C%93&amp;per_page=11" target="_blank">konzum </a></li>
		 <!-- <li><a href="https://www.ekupi.hr/hr/search/?text=domestos" target="_blank">ekupi </a></li>-->
		  <li><a href="https://bazzar.hr/search?utf8=%E2%9C%93&amp;q=domestos" target="_blank">bazzar </a></li>	
		  </ul>
	 </div>
  </footer>
  </div>
  
 

  <!-- Header Section Ends -->


  <!-- Wrapper Section Start -->



  <!-- Wrapper Section Ends -->


  <!-- Footer Section Start -->

 
  <!-- Footer Section Ends -->
<!--include footer-->
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="<?php echo $native_path ?>/js/onepageNav.js"></script>
	<script type="text/javascript">
		jQuery('.scroll').onePgaeNav({
			wrapper : '#onepage-nav'
		});
	</script>
	<script type="text/javascript">
		jQuery('.scroll2').onePgaeNav({
			wrapper : '#onepage-nav2'
		});
	</script>

<script type="text/javascript" src="<?php echo $native_path ?>/js/slick.min.js"></script>
<script>
jQuery(function() {
    jQuery('a[href*=\\#]:not([href=\\#])').on('click', function() {
        var target = jQuery(this.hash);
        target = target.length ? target : jQuery('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            jQuery('html,body').animate({
                scrollTop: target.offset().top - 200
            }, 1000);
            return false;
        }
    });
});
</script>
<script>
jQuery(document).ready(function(){
 jQuery(".items1").slick({
        autoplay:true,
        dots: true,
        centerMode: true,
		arrows:true,
		autoplaySpeed:1500,
		prevArrow:'<button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow:'<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        slidesToShow: 1,
        slidesToScroll: 1,
		responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
	{
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
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
      });
      jQuery(".items2").slick({
	    autoplay:true,
        dots: true,
        centerMode: true,
		arrows:true,
		autoplaySpeed:1500,
		prevArrow:'<button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow:'<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        slidesToShow: 1,
        slidesToScroll: 1,
		responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
	{
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
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
      });
	  jQuery("#button").click(function() {
    jQuery('html, body').animate({
        scrollTop: jQuery("#myDiv").offset().top
    }, 2000);
});
});
</script>
<script>
jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > 1){
    jQuery('.section-header').addClass("sticky");
  }
  else{
    jQuery('.section-header').removeClass("sticky");
  }
});
</script>
<script>
jQuery(document).ready(function() {
jQuery(".menu-itam").click(function () {
    jQuery(".menu-itam").removeClass("active");
    // jQuery(".tab").addClass("active"); // instead of this do the below
    jQuery(this).addClass("active");
});
jQuery(".toggle").click(function(){
    jQuery(".fix-nav").toggle();
  });
});
</script>
<script>
document.getElementById('autoplay').play();
</script>

</body>

</html>
