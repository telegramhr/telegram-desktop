<!DOCTYPE html>
<html lang="hr">
<?php
		$native_path = get_stylesheet_directory_uri() . '/templates/native/bayer/iberogast';
	?>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--include header-->
		<?php wp_head();
		?>
		<!--fonts-->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="<?php echo $native_path ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $native_path ?>/css/style.css">
		<link rel="stylesheet" href="<?php echo $native_path ?>/css/responsive.css">
		 <!--animation-->
		<link rel='stylesheet' href='<?php echo $native_path ?>/assets/css/animate.min.css'>
	</head>

	<body>
    <?php do_action('body_start') ?>
    <header class="header">
		<!--  <div class="overlay"></div>-->
		  <div class="header-bg">
		    <img class="bnr-desk" src="<?php echo $native_path ?>/images/banner.jpg" alt="" />
			<img class="bnr-mb" src="<?php echo $native_path ?>/images/banner-mobile.jpg" alt="" />
		  </div>
		  <div class="absolute-text-sec">   
		  <div class="txt wow slideInLeft" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
		    <h1>Za sretan<br> trbuh!</h1>
			</div>
		   </div>
		   <div class="left-fix-img"><img class="img-fx" src="<?php echo $native_path ?>/images/lft-fx-img.png" alt="" /></div>
		</header>
		<section class="section-1 section position-relative py-5 text-center">
		   <div class="container">
		     <div class="row">	
				 <div class="icon-txt">
				   <div class="icon">
				   	<div class="icon-inr">
				   		<img src="<?php echo $native_path ?>/images/round-icon.jpg" alt="" />
				   		<span class="border-rotate"></span>
				   	</div>
				   </div>
				   <p class="mid-txt mb-5">Sve više ljudi pati od smetnji kao što su bol u trbuhu, grčevi, osjećaj punoće i težine, nadutost, vjetrovi i mučnina. Pročitajte više o temi i saznajte kako vam Iberogast® može pomoći</p> 
				  </div>
			      <div class="col-md-7 position-relative mb-5">
			      	<div class="wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
				       <img class="gray-bg" src="<?php echo $native_path ?>/images/gray-bg.jpg" alt="" />
		               <div class="d-flex d-flex h-100 align-items-center">
				          	<div class="inner-sec">
		                  		<img src="<?php echo $native_path ?>/images/img1.jpg" alt="" />
		               		</div>
						</div>
					</div>
				 </div>
				 <div class="col-md-5">
				    <div class="txt wow fadeInRightBig" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
				     <img src="<?php echo $native_path ?>/images/img-1-1.png" alt="" />
				     <p class="mt-5"><a href="https://www.krenizdravo.hr/zdravlje/probava-na-udaru-stresa-sto-je-sindrom-iritabilnog-crijeva" target="_blank">Probava na udaru stresa – što je sindrom iritabilnog crijeva?</a></p> 
				     <a class="btn" href="https://www.krenizdravo.hr/zdravlje/probava-na-udaru-stresa-sto-je-sindrom-iritabilnog-crijeva" target="_blank">Saznajte sve</a>
				    </div>
				 </div>
			</div>
		  </div>
		</section>
		<section class="section-2 section position-relative py-5 text-center">
		   <div class="container">
		       <div class="row">	
			   <div class="col-md-5 mb-5">
				    <div class="txt wow fadeInLeftBig" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
				     <img src="<?php echo $native_path ?>/images/img-2-2.png" alt="" />
				     <p class="mt-5"><a href="https://www.krenizdravo.hr/zdravlje/imate-zgaravicu-cesto-ste-naduti-i-patite-od-grceva-mozda-imate-dispepsiju-evo-o-cemu-se-radi" target="_blank">Imate žgaravicu, često ste naduti i patite od grčeva? Možda imate dispepsiju – evo o čemu se radi</a></p> 
				     <a class="btn" href="https://www.krenizdravo.hr/zdravlje/imate-zgaravicu-cesto-ste-naduti-i-patite-od-grceva-mozda-imate-dispepsiju-evo-o-cemu-se-radi" target="_blank">Saznajte sve</a>
				    </div>
				 </div>
			       <div class="col-md-7 position-relative mb-5">
			       	<div class="wow fadeInRight" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
				       <img class="gray-bg" src="<?php echo $native_path ?>/images/gray-bg.jpg" alt="" />
		               <div class="d-flex d-flex h-100 align-items-center">
				          <div class="inner-sec">
		                  	<img src="<?php echo $native_path ?>/images/img2.jpg" alt="" />
		               	  </div>
						</div>
					</div>
				 </div>	  
			  </div>
		   </div>
		</section>
		<footer class="page-footer py-5 mt-5 text-center">
		    <div class="container">
		      <div class="row">
			     <div class="ftr-txt-bx mb-1 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
			       <p>Prije upotrebe pažljivo pročitajte uputu o lijeku, a o rizicima i nuspojavama upitajte svog liječnika ili ljekarnika. </p>
			     </div>
				 <div class="text-center w-100 mb-5">LMR-CH-20210415-61</div>
			  <div class="col-md-12 mb-5">
			  <p class="w-100 text-center pb-3 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing.</p>
		           <a class="footer-logo" target="_blank" href="https://www.fina.hr/" target="_blank">
		           <img src="<?php echo $native_path ?>/images/iberogast-logo.png" alt="" class="wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
		           </a>
		           <a class="footer-logo" target="_blank" href="https://www.akd.hr/" target="_blank">
		           <img src="<?php echo $native_path ?>/images/tg_studio.png" alt="" class="wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible;-webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s;">
		           </a>

				</div>
		     </div>

			</div>
		</footer>



	  
	<!--script-->	
	<script src="<?php echo $native_path ?>/js/jquery-3.5.1.min.js"></script>
	<script src="<?php echo $native_path ?>/js/bootstrap.bundle.min.js"></script>
	<!--script for animation-->
      <script>
      new WOW().init();
      </script>
	<!--include footer-->
	<?php wp_footer(); ?>
	</body>
</html>