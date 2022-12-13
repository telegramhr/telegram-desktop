<!doctype html>
<html lang="en">
<?php
  $native_path = get_stylesheet_directory_uri() . '/templates/native/super1/superdan';
  //$native_path = 'http://localhost/super1-theme/templates/native/super1/superdan';
 ?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
      <?php wp_head();
      ?>
      <link rel="stylesheet" type="text/css" href="<?php echo $native_path; ?>/js/libs/slick/slick.css?v=3"/>
      <link rel="stylesheet" type="text/css" href="<?php echo $native_path; ?>/js/libs/slick/slick-theme.css?v=3"/>

      <link rel="stylesheet" href="<?php echo $native_path; ?>/styles.css?v=6">
  </head>
  <body>
    <header>
        <div id="header">
            <a target="_blank" href="https://super1.telegram.hr/"><img id="logo" src="<?php echo $native_path; ?>/img/logo.svg" alt="super1 logo" name="Super1 Logo"/></a>
        </div>
    </header>
    <div class="container-fluid" id="container-fluid-nopadding">
        <div class="row nomargin">
            <div class="col-lg-1 d-none d-lg-block justify-content-center align-self-center">
                <div class="align-middle">
                    <a class="no-decor" href="#A"><span>.Osvoji nagrade</span></a>
                    
                </div>

                <div class="align-middle">
                    <a class="no-decor" href="#B"><span>.Inspiriraj se</span></a>
                </div>
            </div>
            <div class="col-lg-5">
                <div id="img-1-wrapper" class="in-left">
                    <a href="https://super1.telegram.hr/snaga/stil-ove-zene-nas-je-odusevio-upoznajte-leu-dizajnericu-koja-stoji-iza-brenda-svoya/" target="_blank">
                    <img src="<?php echo $native_path; ?>/img/fotka1.jpg?v=2" alt="slika1"/></a>
                </div>
            </div>            
            <div  class="col-md-6 bg-orange whitespace">
                <div id="copy-1-wrapper" class="d-flex flex-column justify-content-center">
                    <h1>Danas je super dan za ići van!</h1>
                    <p id="description-text">Volimo summer time i summer vibe! Želimo te inspirirati i nagraditi za uživanje u ljetnoj vibri. Svaki tjedan dijelimo cool nagrade na našem kreativnom natječaju, a ovaj tjedan vas Designer Outlet Croatia nagrađuje sa shoppingom od 500 kn!
                    </p>
                    <div id="brand-padding-top">
                        Powered by <a target="_blank" href="https://www.designeroutletcroatia.com/"><img id="brand" src="<?php echo $native_path; ?>/img/designerOutletCroatiaLogo.png" alt="Designer Outlet Croatia Logo" name="Designer Outlet Croatia logo" /></a>
                    </div>
                    <a class="button" href="#A">
                        <div>
                            <p>OSVOJI NAGRADE</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    <div class="row nomargin">
        <div class="col-lg-1 d-none d-lg-block justify-content-center align-self-center p-b-50">
            <div class="align-middle">
                <span>Inspiriraj se.</span>
            </div>
        </div>
        <div class="col-lg-4">

            <div id="img-2-wrapper">
                <div id="hover-container" class="img-fluid hover-wrapper hover-img">
                    <img src="<?php echo $native_path; ?>/img/fotka2.jpg?v=2" alt="Dizajnerica Lea Horvat" name="Dizajnerica Lea Horvat"/>
                    <div class="hover-text bg-blue">
                        <a class="underline" target="_blank" href="https://super1.telegram.hr/snaga/stil-ove-zene-nas-je-odusevio-upoznajte-leu-dizajnericu-koja-stoji-iza-brenda-svoya/">Pročitaj više</a>
                        <p id="title-hover">Stil ove žene nas je oduševio. Upoznajte Leu, dizajnericu koja stoji iza brenda Svoya</p>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="col-md-7">
            <div id="img-3-wrapper" class="d-flex flex-column justify-content-center">
                <div class="hover-img hover-wrapper img-fluid">
                    <img src="<?php echo $native_path; ?>/img/fotka3.jpg?v=2" alt="Dizajnerica Lea Horvat" name="Dizajnerica Lea Horvat" />
                    <div class="hover-text">
                        <a class="underline" target="_blank" href="https://super1.telegram.hr/snaga/stil-ove-zene-nas-je-odusevio-upoznajte-leu-dizajnericu-koja-stoji-iza-brenda-svoya/">Pročitaj više</a>
                        <p id="title-hover">Stil ove žene nas je oduševio. Upoznajte Leu, dizajnericu koja stoji iza brenda Svoya</p>
                    </div>
                </div>
            </div>
                
            </div>
        </div>
    </div>
    
    <?php
    /*
    <div class="row reverse-article">
        <div class="col-lg-1 d-none d-lg-block justify-content-center align-self-center p-b-50">
            <div class="align-middle">
                <span class="align-middle"></span>
            </div>
        </div>

        <div class="col-md-7">
            <div id="img-3-wrapper" class="d-flex flex-column justify-content-center reverse-article ">
                <img src="<?php echo $native_path; ?>/img/4.png" alt="" name="" />
            </div>
        </div>

        <div class="col-lg-4">
            <div id="img-2-wrapper">
                <img id="top-reverse" class="img-fluid hover-img" src="<?php echo $native_path; ?>/img/5.png" alt="" name="" />
            </div>
            <h2 class="align-middle"></h2>
        </div>   
     </div>
     */
    ?>

        <div id="container-fluid-nopadding" class="container-fluid p-t-65">
            <a name="A"></a>
        <div class="row nomargin" id="rotate-text-container">
            <div id="float" class="bg-orange container-fluid d-block d-md-none">
                <div id="unrotate-text">
                    Giveaway time
                </div>
            </div>
            <div class="col-12 bg-orange fullwidth">
                <div id="float" class="bg-orange container-fluid d-none d-md-block">
                    <div style="display: none;" id="rotate-text">
                        Giveaway time
                    </div>
                </div>
                <div id="copy-4-wrapper" class="">
                    <h2 id="question">Opišite svoj stil i koji su vam omiljeni brandovi iz Designer Outleta Croatia</h2>
                    <p>Osvoji nagrade i neka ti dan bude još više super!</p>
                    <p>Designer Outlet Croatia i Super1 nagrađuju sve vas koji volite ići van. Dvoje najkreativnijih dobiva po jednu poklon karticu od 500 kn za kupovinu u Designer Outletu Croatia.</p>
                    <p style="font-weight: 700; margin-top: 32px; margin-bottom: 64px;">Prijave su zatvorene! Hvala na sudjelovanju!</p>
                </div>              
            </div>
        </div>
        </div>
      <div class="row nomargin">
        <a name="B"></a>
          <div class="title-gallery">Look and Feel</div>
          
            <div class="col">
                <div class="slick-wrap">
                    <div class="slick">
                        <div class="hover-wrapper-slick">
                            <div class="slide" style="background-image: url(<?php echo $native_path; ?>/img/article1.jpeg)">
                                <div class="overlay"></div>
                                <div class="title hover-text-slick bg-blue">
                                    <a target="_blank" href="https://super1.telegram.hr/look/sve-sto-nam-treba-ovog-ljeta-je-dobar-kaftan-za-plazu-izdvajamo-ovih-19/"><p class="underline">Pročitaj više</p></a>
                                    <p id="title-hover-slick" class="lighter">Sve što nam treba ovog ljeta je dobar kaftan za plažu. Izdvajamo ovih 19</p>
                                </div>
                            </div>
                        </div>

                        <div class="hover-wrapper-slick">
                            <div class="slide" style="background-image: url(<?php echo $native_path; ?>/img/article2.jpg)">
                                <div class="overlay"></div>
                                <div class="title hover-text-slick bg-blue">
                                    <a target="_blank" href="https://super1.telegram.hr/look/never-not-ready-novi-je-domaci-brend-u-cijim-cete-komadima-htjeti-biti-od-jutra-do-veceri/"><p class="underline">Pročitaj više</p></a>
                                    <p id="title-hover-slick" class="lighter">Never Not Ready novi je domaći brend u čijim ćete komadima htjeti biti od jutra do večeri</p>    
                                </div>
                            </div>
                        </div>

                        <div class="hover-wrapper-slick">
                            <div class="slide" style="background-image: url(<?php echo $native_path; ?>/img/article3.jpg)">
                                <div class="overlay"></div>
                                <div class="title hover-text-slick bg-blue">
                                    <a target="_blank" href="https://super1.telegram.hr/look/u-popularnom-nail-baru-raspa-sada-mozete-napraviti-i-pedikuru-evo-sto-nude/"><p class="underline">Pročitaj više</p></a>
                                    <p id="title-hover-slick" class="lighter">U popularnom nail baru Rašpa sada možete napraviti i pedikuru. Evo što nude</p>    
                                </div>
                            </div>
                        </div>

                        <div class="hover-wrapper-slick">
                            <div class="slide" style="background-image: url(<?php echo $native_path; ?>/img/article4.jpg)">
                                <div class="overlay"></div>
                                <div class="title hover-text-slick bg-blue">
                                    <a target="_blank" href="https://super1.telegram.hr/look/isprobala-sam-popularni-tretman-za-lice-s-morskom-soli-ovo-je-jedino-mjesto-gdje-ga-mozete-isprobati-kod-nas/"><p class="underline">Pročitaj više</p></a>
                                    <p id="title-hover-slick" class="lighter">Isprobala sam popularni tretman za lice s morskom soli. Ovo je jedino mjesto gdje ga možete isprobati kod nas</p>    
                                </div>
                            </div>
                        </div>
	                    <?php $q = new WP_Query([
		                    'posts_per_page' => 10,
		                    'tag' => 'lookandfeel'
	                    ]);
	                    while($q->have_posts()) {
		                    $q->the_post();
		                    ?>
                            <div class="hover-wrapper-slick">
                                <div class="slide" style="background-image: url(<?php echo get_the_post_thumbnail_url($q->post->ID, 'featured-longform') ?>)">
                                    <div class="overlay"></div>
                                    <div class="title hover-text-slick bg-blue">
                                        <a target="_blank" href="<?php the_permalink(); ?>"><p class="underline">Pročitaj više</p></a>
                                        <p id="title-hover-slick" class="lighter"><?php the_title(); ?></p>
                                    </div>
                                </div>
                            </div>
		                    <?php
	                    }
	                    ?>
                    </div>
                </div>
                
            </div>          
      </div>

      <div class="row nomargin">
          <div class="title-gallery">Do and Taste</div>
          
            <div class="col">
                <div class="slick-wrap">
                    <div class="slick">
                        <div class="hover-wrapper-slick">
                            <div class="slide" style="background-image: url(<?php echo $native_path; ?>/img/article5.jpg)">
                                <div class="overlay"></div>
                                <div class="title hover-text-slick bg-blue">
                                    <a target="_blank" href="https://super1.telegram.hr/relax/omiljena-dubrovacka-sladoledarnica-sada-se-nalazi-na-jos-jednoj-adresi-imamo-fotografije/"><p class="underline">Pročitaj više</p></a>
                                    <p id="title-hover-slick" class="lighter">Omiljena dubrovačka sladoledarnica sada se nalazi na još jednoj adresi. Zavirite unutra</p>    
                                </div>
                            </div>
                        </div>

                        <div class="hover-wrapper-slick">
                            <div class="slide" style="background-image: url(<?php echo $native_path; ?>/img/article6.jpg)">
                                <div class="overlay"></div>
                                <div class="title hover-text-slick bg-blue">
                                    <a target="_blank" href="https://super1.telegram.hr/relax/pogledajte-ovaj-spektakl-od-bazena-dio-je-jednog-kompleksa-za-odmor-na-otoku-krku/"><p class="underline">Pročitaj više</p></a>
                                    <p id="title-hover-slick" class="lighter">Pogledajte ovaj spektakl od bazena. Dio je jednog kompleksa za odmor na otoku Krku</p>    
                                </div>
                            </div>
                        </div>
                    
                        <div class="hover-wrapper-slick">
                            <div class="slide" style="background-image: url(<?php echo $native_path; ?>/img/article7.jpg)">
                                <div class="overlay"></div>
                                <div class="title hover-text-slick bg-blue">
                                    <a target="_blank" href="https://super1.telegram.hr/relax/isprobali-smo-novi-meni-iz-fidel-gastra-tesko-nam-je-izdvojiti-samo-jednog-favorita/"><p class="underline">Pročitaj više</p></a>
                                    <p id="title-hover-slick" class="lighter">Isprobali smo novi meni iz Fidel Gastra. Teško nam je izdvojiti samo jednog favorita</p>    
                                </div>
                            </div>
                        </div>

                        <div class="hover-wrapper-slick">
                            <div class="slide" style="background-image: url(<?php echo $native_path; ?>/img/article8.jpg)">
                                <div class="overlay"></div>
                                <div class="title hover-text-slick bg-blue">
                                    <a target="_blank" href="https://super1.telegram.hr/look/u-zagrebu-se-tijekom-vikenda-dogadaju-tri-fora-buvljaka-evo-detalja/"><p class="underline">Pročitaj više</p></a>
                                    <p id="title-hover-slick" class="lighter">U Zagrebu se tijekom vikenda događaju tri fora buvljaka. Evo detalja</p>    
                                </div>
                            </div>
                        </div>
	                    <?php $q = new WP_Query([
		                    'posts_per_page' => 10,
		                    'tag' => 'doandtaste'
	                    ]);
	                    while($q->have_posts()) {
		                    $q->the_post();
		                    ?>
                            <div class="hover-wrapper-slick">
                                <div class="slide" style="background-image: url(<?php echo get_the_post_thumbnail_url($q->post->ID, 'featured-longform') ?>)">
                                    <div class="overlay"></div>
                                    <div class="title hover-text-slick bg-blue">
                                        <a target="_blank" href="<?php the_permalink(); ?>"><p class="underline">Pročitaj više</p></a>
                                        <p id="title-hover-slick" class="lighter"><?php the_title(); ?></p>
                                    </div>
                                </div>
                            </div>
		                    <?php
	                    }
	                    ?>
                    </div>
                </div>
                
            </div>          
      </div>
      
    <footer id="footer">
        <a target="_blank" href="https://www.telegram.hr/">
            <img class="d-block" id="logo" src="<?php echo $native_path; ?>/img/telegram.svg" alt="telegram logo" name="Telegram Logo" />
        </a>
        <div class="bg-white">
            <div class="flex">
                <a target="_blank" href="https://www.designeroutletcroatia.com/">
                    <img src="<?php echo $native_path; ?>/img/designerOutletCroatiaLogo.png" alt="Designer Outlet Croatia logo" name="Designer Outlet Croatia logo" />
                </a>
            </div>
            <div class="flex">
                <a target="_blank" href="https://studena.hr/">
                    <img src="<?php echo $native_path; ?>/img/studena-logo_white.png" alt="Studena logo" name="Studena Logo" style="padding: 8px;" />
                </a>
            </div>
            <div class="flex">
                <a target="_blank" href="https://www.intersport.hr/">
                    <img src="<?php echo $native_path; ?>/img/intersport.png" alt="intersport logo" name="Intersport Logo" />
                </a>
            </div>
            <div class="flex">
                <a target="_blank" href="https://www.somersby.com/hr-hr/naslovnica">
                    <img src="<?php echo $native_path; ?>/img/somersby_white.png" alt="Somersby logo" name="Somersby Logo" />
                </a>
            </div>
        </div>

        <p>Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p>

    </footer>
          
      
        
    

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="<?php echo $native_path; ?>/js/libs/slick/slick.min.js"></script>
    <script src="<?php echo $native_path; ?>/jquery.serialize-object.min.js"></script>
    <script>
        jQuery('.hover-text').click(function () {
            jQuery(this).toggleClass('show-this');
        })
        jQuery('.hover-text-slick').click(function () {
            jQuery(this).toggleClass('show-this');
        })
    </script>
    <?php wp_footer(); ?>

    <script src="<?php echo $native_path; ?>/js/script.js?v=2" ></script>
  </body>
</html>