<!DOCTYPE html>
<html lang="hr">
<?php
		$native_path = get_stylesheet_directory_uri() . '/templates/native/jana/pro-women';
	?>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--include header-->
		<?php wp_head();
		?>
		<!--fonts-->

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;800;900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;500&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo $native_path ?>/assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $native_path ?>/assets/css/slick.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $native_path ?>/assets/css/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $native_path ?>/assets/css/style.css?v=5">
	</head>

	<body>
    <?php do_action('body_start') ?>
    <header>
    <div class="container">
        <div class="logo-area">
            <div class="logo">
                <a href="https://super1.telegram.hr">
                    <img src="<?php echo $native_path ?>/assets/img/super1_logo.svg" height="65">
                </a>
            </div>
            <div class="stripe">
                <div class="pattern"></div>
            </div>
        </div>
        <div class="navbar-area">
            <div class="left-action"></div>
            <div class="main-menu">
                <div class="menu-glavni-izbornik-container">
                	<ul id="menu-glavni-izbornik" class="menu">
                		<li class="menu-item">
                			<a href="https://super1.telegram.hr/category/look/">Look</a>
                		</li>
                		<li class="menu-item">
                			<a href="https://super1.telegram.hr/category/snaga/">Snaga</a>
                		</li>
                		<li class="menu-item">
                			<a href="https://super1.telegram.hr/category/relax/">Relax</a>
                		</li>
                		<li class="menu-item">
                			<a href="https://super1.telegram.hr/category/emocije/">Emocije</a>
                		</li>
                	</ul>
                </div>                
            </div>
        </div>
    </div>
</header>
<section class="banner">
	<div class="slick marquee">
	  <div class="slick-slide">
	    <div class="inner">
	      <img src="<?php echo $native_path ?>/assets/img/banner-img1.png" alt="banner" width="480" height="530" />
	    </div>
	  </div>
	  <div class="slick-slide">
	    <div class="inner">
	      <img src="<?php echo $native_path ?>/assets/img/banner-img2.png" alt="banner" width="480" height="530"/>
	    </div>
	  </div>
	  <div class="slick-slide">
	    <div class="inner">
	      <img src="<?php echo $native_path ?>/assets/img/banner-img3.png" alt="banner" width="480" height="530"/>
	    </div>
	  </div>
	  <div class="slick-slide">
	    <div class="inner">
	      <img src="<?php echo $native_path ?>/assets/img/banner-img4.png" alt="banner" width="480" height="530"/>
	    </div>
	  </div>
	</div>
	<div class="banner-caption">
		<div class="container">
			<h1>PRO-WOMEN.</h1>
			<h3 class="text-white">ŽENE KOJE ČINE ISKORAK</h3>
		</div>
	</div>
</section>
<section class="white-section">
	<div class="container">
		<div class="row justify-content-center">
			<h4 class="text-center order-2 order-sm-1 ">Prisjetimo se žena koje su <br>kroz povijest napravile <br><span>iskorak u biznisu,</span> <br><strong>ali i onih<br>koje to čine danas.</strong></h4>
			<img src="<?php echo $native_path ?>/assets/img/girls-img.png" alt="" class="girls-img order-1 order-sm-2">
		</div>
	</div>
</section>
<section class="women-sliders">
	<div class="container-fluid">
		<div class="slick">
		  <div class="slick-slide">
		    <div class="inner">
		      <img src="<?php echo $native_path ?>/assets/img/banner-img1.png" alt="banner" width="480" height="530" />
		    </div>
		  </div>
		  <div class="slick-slide">
		    <div class="inner">
		      <img src="<?php echo $native_path ?>/assets/img/banner-img2.png" alt="banner" width="480" height="530"/>
		    </div>
		  </div>
		  <div class="slick-slide">
		    <div class="inner">
		      <img src="<?php echo $native_path ?>/assets/img/banner-img3.png" alt="banner" width="480" height="530"/>
		    </div>
		  </div>
		  <div class="slick-slide">
		    <div class="inner">
		      <img src="<?php echo $native_path ?>/assets/img/banner-img4.png" alt="banner" width="480" height="530"/>
		    </div>
		  </div>
		</div>
	</div>
</section>
<section class="second-section">
	<div class="container">
		<div class="slider-holder">
			<img src="<?php echo $native_path ?>/assets/img/text-rotated.png" alt="banner" class="img-fluid position-absolute text-rotated slider-sec-text"/>
			<div class="slideshow__slides slider">
			    <div class="slider-image">
			      <div class="image-wrap">
			        <img src="<?php echo $native_path ?>/assets/img/banner-img1.png" alt="d" />
			        <div class="description">
			        	<p>Francuskinja poznata pod nazivom “Grande Dame of Champagne” u svojoj je 27. godini života ostala udovica te je zbog toga preuzela suprugov posao proizvodnje šampanjca. Tada postaje ženska ikona u svijetu proizvodnje šampanjaca, a brend i tvrtka Veuve Clicquot Ponsardin i danas nose njezino ime. </p>
			        </div>
			        <div class="caption-readmore">
			        		<img src="<?php echo $native_path ?>/assets/img/white-icon.svg" alt="" class="more-icon">
			        		<img src="<?php echo $native_path ?>/assets/img/sampanjac-icon.svg" alt="" class="hover-icon">
			        </div>
			      </div>
			      <div class="slider-caption-wrap">
			        <div class="caption-details">
			          <span class="year-of-innovation text-roboto">(1777. – 1866.)</span>
			          <span class="name">BARBE-NICOLE CLICQUOT Ponsardin</span>
			        </div>
			      </div>
			    </div>
			    <div class="slider-image">
			      <div class="image-wrap">
			        <img src="<?php echo $native_path ?>/assets/img/banner-img4.png" alt="d" />
			        <div class="description">
			        	<p>Smatra se prvom ženskom poduzetnicom. Riječ je o afro-američkoj poduzetnici, filantropici te političkoj i društvenoj aktivistici. U Guinnessovoj knjizi svjetskih rekorda upisana je kao prva milijunašica u Americi koja je sama stvorila svoje bogatstvo. Zbog bolesti vlasišta, stvorila je formulu za kondicioniranje i iscjeljivanje vlasišta, otvorila tvornicu tih proizvoda i školu ljepote. Njezina životna priča prikazana je u seriji Self Made.</p>
			        </div>
			        <div class="caption-readmore">
			        		<img src="<?php echo $native_path ?>/assets/img/white-icon.svg" alt="" class="more-icon">
			        		<img src="<?php echo $native_path ?>/assets/img/krema-icon.svg" alt="" class="hover-icon">
			        </div>
			      </div>
			      <div class="slider-caption-wrap">
			        <div class="caption-details">
			        	<span class="year-of-innovation text-roboto">(1867. – 1919.)</span>
			          	<span class="name">Madame C.J. Walker</span>
			        </div>
			      </div>
			    </div>
			    <div class="slider-image">
			      <div class="image-wrap">
			        <img src="<?php echo $native_path ?>/assets/img/banner-img3.png" alt="d" />
			        <div class="description">
			        	<p>Od 1963. do 1991. godine vodila je obiteljske novine, The Washington Post, te se smatra osobom koja je postavila standarde istraživačkog novinarstva. Bila je prva žena na čelu kompanije koja je uvrštena na Forbesov popis 500 najboljih američkih tvrtki. Graham je predsjedala novinama dok su izvještavale o skandalu Watergate, što je na kraju dovelo do ostavke predsjednika Richarda Nixona. </p>
			        </div>
			        <div class="caption-readmore">
			        		<img src="<?php echo $native_path ?>/assets/img/white-icon.svg" alt="" class="more-icon">
			        		<img src="<?php echo $native_path ?>/assets/img/novine-icon.svg" alt="" class="hover-icon">
			        </div>
			      </div>
			      <div class="slider-caption-wrap">
			        <div class="caption-details">
			        	<span class="year-of-innovation text-roboto">(1917. – 2001.)</span>
			          	<span class="name">Katharine Graham</span>
			        </div>
			      </div>
			    </div>
			    <div class="slider-image">
			      <div class="image-wrap">
			        <img src="<?php echo $native_path ?>/assets/img/banner-img2.png" alt="d" />
			        <div class="description">
			        	<p>Prva žena koja se bavila izdavaštvom u Americi te je bila prva žena koja je obnašala funkciju upravitelja pošte. Jedno od najvećih postignuća po kojem ju svijet pamti je činjenica da je ona tiskala prvi primjerak Deklaracije o neovisnosti, a njezino ime je jedino žensko ime koje se nalazi na spomenutom dokumentu. </p>
			        </div>
			        <div class="caption-readmore">
			        		<img src="<?php echo $native_path ?>/assets/img/white-icon.svg" alt="" class="more-icon">
			        		<img src="<?php echo $native_path ?>/assets/img/tiskanje-icon.svg" alt="" class="hover-icon">
			        </div>
			      </div>
			      <div class="slider-caption-wrap">
			        <div class="caption-details">
			        	<span class="year-of-innovation text-roboto">(1738. – 1816.)</span>
			          	<span class="name">Mary Katherine Goddard</span>
			        </div>
			      </div>
			    </div>
			</div>
		</div>
	</div>
  </section>
  <section class="third-section">
	<div class="container-fluid p-0">
		<h5 class="text-center">PRO ŽENE U HRVATSKOJ</h5>
		<div class="row justify-content-center my-5">	
			
			<div class="col-12 col-sm-5 py-sm-5 pl-sm-5 pr-sm-0 position-relative">
				<img src="<?php echo $native_path ?>/assets/img/red-icon.png" alt="banner" class="img-fluid position-absolute red-icon left">
				<img src="<?php echo $native_path ?>/assets/img/text-rotated.png" alt="banner" class="img-fluid position-absolute text-rotated left">
				<img src="<?php echo $native_path ?>/assets/img/Marlena.jpg" alt="banner" class="img-fluid float-right post-img">
				<span class="position-absolute text-roboto post-count left">1</span>
				<a href="https://super1.telegram.hr/snaga/marlena-je-dizajnerica-najluksuznije-jahte-u-hrvatskoj-govorili-su-mi-da-sam-ona-koja-bira-boje/" target="_blank"><img src="<?php echo $native_path ?>/assets/img/link-arrow.png" alt="banner" class="img-fluid position-absolute link-arow left d-none d-sm-block"></a>
				<a href="https://super1.telegram.hr/snaga/marlena-je-dizajnerica-najluksuznije-jahte-u-hrvatskoj-govorili-su-mi-da-sam-ona-koja-bira-boje/" target="_blank"><img src="<?php echo $native_path ?>/assets/img/link-arrow-mob.png" alt="banner" class="img-fluid position-absolute link-arow left d-block d-sm-none"></a>
			</div>
			<div class="col-12 col-sm-5 py-5 pr-sm-5">
				<h2 class="position-relative left-spacing py-2">Marlena <br>Dapčić</h2>
				<p class="w-75 pl-5 pt-sm-5 res-text">Upornost i volja jači su od talenta. Ne odustajte od svojih snova, poručuje Marlena
				<a href="https://super1.telegram.hr/snaga/marlena-je-dizajnerica-najluksuznije-jahte-u-hrvatskoj-govorili-su-mi-da-sam-ona-koja-bira-boje/" target="_blank" class="d-sm-block text-red pt-5 d-none d-sm-block">PROČITAJ</a>
				</p>
			</div>
		</div>
		<div class="row justify-content-center my-5">	
			<div class="col-12 col-sm-5 py-sm-5 pr-sm-5 position-relative order-sm-2">
				<img src="<?php echo $native_path ?>/assets/img/red-icon.png" alt="banner" class="img-fluid position-absolute red-icon right">
				<img src="<?php echo $native_path ?>/assets/img/text-rotated.png" alt="banner" class="img-fluid position-absolute text-rotated right">
				<img src="<?php echo $native_path ?>/assets/img/Tatjana.jpg" alt="banner" class="img-fluid float-right post-img">
				<span class="position-absolute text-roboto post-count right">2</span>
				<a href="https://super1.telegram.hr/snaga/ona-je-jedina-zena-koja-je-via-adriaticu-prehodala-tijekom-zime-upoznajte-sjajnu-tatjanu-savoric/" target="_blank"><img src="<?php echo $native_path ?>/assets/img/link-arrow.png" alt="banner" class="img-fluid position-absolute link-arow right d-none d-sm-block"></a>
				<a href="https://super1.telegram.hr/snaga/ona-je-jedina-zena-koja-je-via-adriaticu-prehodala-tijekom-zime-upoznajte-sjajnu-tatjanu-savoric/" target="_blank"><img src="<?php echo $native_path ?>/assets/img/link-arrow-mob.png" alt="banner" class="img-fluid position-absolute link-arow left d-block d-sm-none"></a>
			</div>
			<div class="col-12 col-sm-5 py-5 pl-md-5 pl-sm-0 pr-0 order-sm-1">
				<h2 class="position-relative py-2">Tatjana <br>Šavorić</h2>
				<p class="w-75 pt-5 res-text">S medicinskom sestrom i strastvenom planinarkom pričali smo o njezinom inspirativnom pothvatu
				<a href="https://super1.telegram.hr/snaga/ona-je-jedina-zena-koja-je-via-adriaticu-prehodala-tijekom-zime-upoznajte-sjajnu-tatjanu-savoric/" target="_blank" class="d-block text-red pt-5">PROČITAJ</a>
				</p>
			</div>
		</div>
		<div class="row justify-content-center my-5">	
			
			<div class="col-12 col-sm-5 py-sm-5 pl-sm-5 pr-sm-0 position-relative">
				<img src="<?php echo $native_path ?>/assets/img/red-icon.png" alt="banner" class="img-fluid position-absolute red-icon left">
				<img src="<?php echo $native_path ?>/assets/img/text-rotated.png" alt="banner" class="img-fluid position-absolute text-rotated left">
				<img src="<?php echo $native_path ?>/assets/img/babic-img.png" alt="banner" class="img-fluid float-right post-img">
				<span class="position-absolute text-roboto post-count left">3</span>
				<a href="https://super1.telegram.hr/snaga/radila-je-za-google-i-izgradila-mocnu-karijeru-a-danas-zeli-djecu-nauciti-programirati/" target="_blank"><img src="<?php echo $native_path ?>/assets/img/link-arrow.png" alt="banner" class="img-fluid position-absolute link-arow left d-none d-sm-block"></a>
				<a href="https://super1.telegram.hr/snaga/radila-je-za-google-i-izgradila-mocnu-karijeru-a-danas-zeli-djecu-nauciti-programirati/" target="_blank"><img src="<?php echo $native_path ?>/assets/img/link-arrow-mob.png" alt="banner" class="img-fluid position-absolute link-arow left d-block d-sm-none"></a>
			</div>
			<div class="col-12 col-sm-5 py-5 pr-sm-5">
				<h2 class="position-relative left-spacing py-2">Branka<br> Bebić</h2>
				<p class="w-75 pl-5 pt-sm-5 res-text">Radila je za Google i izgradila moćnu karijeru, a danas želi djecu naučiti programirati
				<a href="https://super1.telegram.hr/snaga/radila-je-za-google-i-izgradila-mocnu-karijeru-a-danas-zeli-djecu-nauciti-programirati/" target="_blank" class="d-sm-block text-red pt-5 d-none d-sm-block">PROČITAJ</a>
				</p>
				
			</div>
			
		</div>
	</div>
</section>
<!--<section class="fourth-section">
	<div class="container-fluid p-0">
		<h5 class="text-center text-red">I ONE NAS INSPIRIRAJU</h5>
		<div class="d-flex justify-content-between align-items-center my-5 py-5 inspiriraju-sec row-1 position-relative">
			<div class="d-flex justify-content-end align-items-center red-section">
				<h6 class="text-white text-right">Ivana <br>Čuljak</h6>
				<img src="<?php echo $native_path ?>/assets/img/ivana-čuljakk.png" alt="" class="float-right round-img">
			</div>
			<div class="content-section">
				<p class="w-md-75 w-sm-100">U kasnim dvadesetima promijenila je profesiju i poručila ženama da vjeruju u sebe</p>
				<p><a href="https://super1.telegram.hr/look/o-karijeri-stilu-odijevanja-i-definiciji-snazne-zene-razgovarali-smo-sa-slasticarkom-ivanom-culjak/" target="_blank" class="d-sm-block text-red pt-5 d-none">PROČITAJ</a></p>
			</div>
		</div>
		 <div class="d-flex justify-content-between align-items-center my-5 py-5 inspiriraju-sec row-2 position-relative">
			<div class="d-flex justify-content-start align-items-center red-section order-md-2 order-sm-1">
				<h6 class="text-white text-left order-md-2 order-sm-1">Imelorem <br>Prezime</h6>
				<img src="<?php echo $native_path ?>/assets/img/inspiracija-img.png" alt="" class="float-right round-img order-md-1 order-sm-2">
			</div>
			<div class="content-section order-md-1 order-sm-2">
				<p class="w-md-75 w-sm-100">Nam porta odio eget velit luctus ultricies Fusce sed tincidunt turpis volutpat, dui in laoreet semper. Fusce sed tincidunt turpis volutpat, dui in laoreet semper</p>
				<p><a href="#" target="_blank" class="d-sm-block text-red pt-5 d-none">PROČITAJ</a></p>
			</div>
		</div>
		<div class="d-flex justify-content-between align-items-center my-5 py-5 inspiriraju-sec row-3 position-relative">
			<div class="d-flex justify-content-end align-items-center red-section">
				<h6 class="text-white text-right">Imelorem <br>Prezime</h6>
				<img src="<?php echo $native_path ?>/assets/img/inspiracija-img.png" alt="" class="float-right round-img">
			</div>
			<div class="content-section">
				<p class="w-md-75 w-sm-100">Nam porta odio eget velit luctus ultricies Fusce sed tincidunt turpis volutpat, dui in laoreet semper. Fusce sed tincidunt turpis volutpat, dui in laoreet semper</p>
				<p><a href="#" target="_blank" class="d-sm-block text-red pt-5 d-none">PROČITAJ</a></p>
			</div>
		</div> -->
	</div>
</section>
<section class="fourth-section">
	<div class="container-fluid p-0">
		<h5 class="text-center text-red">I ONE NAS INSPIRIRAJU</h5>
		<div class="d-flex justify-content-between flex-column flex-md-row align-items-center my-5 py-5 inspiriraju-sec row-1 position-relative">
			<div class="d-flex justify-content-end align-items-center red-section">
				<h6 class="text-white text-right">Ivana <br>Čuljak</h6>
				<img src="<?php echo $native_path ?>/assets/img/ivana-čuljakk.png" alt="" class="float-right round-img ">
			</div>
			<div class="content-section">
				<p class="w-md-75 w-sm-100">U kasnim dvadesetima promijenila je profesiju i poručila ženama da vjeruju u sebe</p>
				<p><a href="https://super1.telegram.hr/look/o-karijeri-stilu-odijevanja-i-definiciji-snazne-zene-razgovarali-smo-sa-slasticarkom-ivanom-culjak/" target="_blank" class="d-sm-block text-red pt-3 pt-md-5">PROČITAJ</a></p>
			</div>
		</div> 
		<div class="d-flex justify-content-between align-items-center flex-column flex-md-row mb-5 mt-0 mt-md-5 py-0 py-md-5 inspiriraju-sec row-2 position-relative">
			<div class="d-flex justify-content-start align-items-center red-section order-md-2 order-sm-1">
				<h6 class="text-white text-left order-2 order-md-2 ">Nana <br>Nadarević</h6>
				<img src="<?php echo $native_path ?>/assets/img/nana.png" alt="" class="float-right round-img order-1 order-md-1 ">
			</div>
			<div class="content-section order-md-1 order-sm-2">
				<p class="w-md-75 w-sm-100">Svojim stavovima Nana potiče žene da se ne libe izraziti svoje mišljenje, naročito kad su u pitanju njihova prava</p>
				<p><a href="https://super1.telegram.hr/look/o-zenskim-pravima-vaznim-zivotnim-lekcijama-i-osobnom-stilu-razgovarali-smo-s-nanom-nadarevic/" target="_blank" class="d-sm-block text-red pt-3 pt-md-5">PROČITAJ</a></p>
			</div>
		</div>
		<div class="d-flex justify-content-between align-items-center flex-column flex-md-row my-0 my-md-5 py-0 py-md-5 inspiriraju-sec row-3 position-relative">
			<div class="d-flex justify-content-end align-items-center red-section">
				<h6 class="text-white text-right">Tina  <br>Walme</h6>
				<img src="<?php echo $native_path ?>/assets/img/tina-walme.png" alt="" class="float-right round-img">
			</div>
			<div class="content-section">
				<p class="w-md-75 w-sm-100">Snažna žena je ona koja se ne boji pokazati svoj stil, stav i osjećaje. Trud, rad i disciplina uvijek će te dovesti bliže tvom cilju</p>
				<p><a href="https://super1.telegram.hr/look/s-tinom-walme-o-prvim-plesnim-koracima-samopouzdanju-i-cool-sportskim-izdanjima/" target="_blank" class="d-sm-block text-red pt-3 pt-md-5">PROČITAJ</a></p>
			</div>
		</div>
	</div>
</section>
 <footer class="py-5">
	<div class="container-fluid">
		<p class="text-center text-gray ">Powered by</p>
		<div class="d-sm-flex justify-content-center align-items-center">
			<div class="col-12 col-sm-2 text-center">
				<a href="#" target="_blank"><img src="<?php echo $native_path ?>/assets/img/footer-logo1.png" alt="banner" class="img-fluid footer-logo"></a>
			</div>
			<div class="col-12 col-sm-2 text-center">
				<a href="#" target="_blank"><img src="<?php echo $native_path ?>/assets/img/footer-logo2.png" alt="banner" class="img-fluid footer-logo"></a>
			</div>
			<div class="col-12 col-sm-2 text-center">
				<a href="#" target="_blank"><img src="<?php echo $native_path ?>/assets/img/footer-logo3.jpg" alt="banner" class="img-fluid footer-logo"></a>
			</div>
			<div class="col-12 col-sm-2 text-center">
				<a href="#" target="_blank"><img src="<?php echo $native_path ?>/assets/img/footer-logo4.png" alt="banner" class="img-fluid footer-logo"></a>
			</div>
		</div>
		<p class="text-center text-gray mt-4">Producirano u radionici TG Studija, Telegramove in-house<br> agencije za nativni marketing.</p>
	</div>
</footer> 

	  
	<!--script-->	
	<script type="text/javascript" src="<?php echo $native_path ?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo $native_path ?>/assets/js/bootstrap.min.js"></script>
	<script type="" src="<?php echo $native_path ?>/assets/js/slick.min.js"></script>
	<script type="" src="<?php echo $native_path ?>/assets/js/custom.js"></script>
	<!--include footer-->
	<?php wp_footer(); ?>
	</body>
</html>