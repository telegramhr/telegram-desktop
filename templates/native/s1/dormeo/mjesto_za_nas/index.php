<!DOCTYPE html>
<html lang="hr">
<?php
    $native_path = get_stylesheet_directory_uri().'/templates/native/dormeo/mjesto_za_nas/';
    //$native_path = 'http://localhost/super1-theme/templates/native/dormeo/mjesto_za_nas/';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); 
    ?>  
    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="<?php echo $native_path; ?>js/aos.css?ver=4" type="text/css" />
    <script src="<?php echo $native_path; ?>js/aos.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path; ?>style.css?ver=15" type="text/css" />
    <script src="<?php echo $native_path; ?>slick/slick.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path; ?>slick/slick.css" type="text/css" />
    <script src="<?php echo $native_path; ?>functions.js?ver=5"></script>
</head>

<body>
    <div class="slider">
        <div class="slide slide-1">
            <div class="slide-content full flex center">
                <h1 class="full flex">
                    <span class="full center-text" data-aos="fade-down" data-aos-duration="500">Bitno je kako spavaš, bitno je što sanjaš</span>
                    <span class="full center-text" data-aos="fade-down" data-aos-delay="750" data-aos-duration="1000">Uz lijepe snove, život je pjesma</span>
                </h1>
                <div class="text-container" data-aos="fade-up" data-aos-delay="2000" data-aos-duration="1000">
                    <h2 class="full center-text">Da život treba živjeti po svom, slijediti svoje snove i ostvariti ih uz svoje najbliže jako dobro zna Jole. Jole je odabrao svoj put, ali i put za siguran i lijep san koji je za njega i njegovu obitelj prvi korak prema sreći. Što je odabrao, a što možete odabrati vi, otkrijte sami.</h2>
                </div>
                <div class="full center header-btns"><a href="#madraci" class="cta animate">Madraci i nadmadraci</a>
                <div class="full center cta animate" onclick="$('.yt-embed').toggleClass('show-video');">Pogledaj intro</div>
            </div>
        
            </div>
            
            <div class="img-container full center">
                <video preload="auto" autoplay="" muted="" loop="" class="header-video">
                    <source src="<?php echo $native_path; ?>/img/header.mp4?ver=2.0" type="video/mp4">
                </video>
                <div class="full center video-overlay">
                <iframe class="animate yt-embed" id="youtube-intro" style="max-width:920px; width:100%; max-height:485px; height:45vw; margin:0 auto;" src="https://www.youtube.com/embed/WJYtRCtXhs8" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="920" height="485" frameborder="0"></iframe>
            </div>
            </div>
            <div class="go-down full center"><img src="<?php echo $native_path; ?>img/godown.png" alt="Arrow pointing down" /></div>
        </div>
        <div class="slide slide-2 slide-yellow flex">
            <div class="container flex">
                <div class="img-container" >
                </div>
                <div class="slide-content center">
                    <a target="_blank" href="https://super1.telegram.hr/relax/jole-nam-je-otkrio-sto-znaci-njegov-skok-u-bazen/" class="full flex">
                        <div class="full">
                            <h4>Jole je odabrao Dormeo</h4>
                        </div>
                        <h2 class="full">Jole nam je otkrio što simbolizira skok u bazen. Možda isto želite i vi</h2>
                        <div class="cta animate">Pročitaj više</div>
                        
                    </a>
                </div>
            </div>
        </div>
        <div class="slide slide-2  flex">
            <div class="container flex">
                <div class="img-container">
                </div>
                <div class="slide-content center">
                    <a target="_blank" href="https://super1.telegram.hr/relax/koliko-dobro-se-poznaju-ana-i-jole-cagalj/" class="full flex">
                        <div class="full">
                            <h4>Couples challenge: Jole & Ana</h4>
                        </div>
                        <h2 class="full">I oni su par koji ne voli spavati na isti način i madracu iste čvrstoće, ali su pronašli savršeno rješenje za to</h2>
                        <div class="cta animate">Pročitaj više</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="slide slide-2 slide-yellow flex">
            <div class="container flex">
                <div class="img-container">
                </div>
                <div class="slide-content center">
                    <a target="_blank" href="https://www.dormeo.com.hr/?med=pr&cex=20451278&src=hr_multich_dr-mattr-summer_pr_br_super1&referrer=Super1_pr_20451278&utm_source=Super1_ext&utm_medium=PR_class&utm_campaign=multich_dr-mattr-summer&utm_content=CR_DR_Madraci_20off_Super1_PR_08_2021_br_20451278" class="full flex">
                        <div class="full">
                            <h4>Odabrao Jole</h4>
                        </div>
                        <h2 class="full">Odabrati omiljeni madrac za sebe i svoju obitelj, a pritom uštedjeti 20%? Može!</h2>
                        <div class="cta animate">Pročitaj više</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="slide slide-2  flex">
            <div class="container flex">
                <div class="img-container">
                </div>
                <div class="slide-content center">
                    <a target="_blank" href="https://super1.telegram.hr/relax/kako-se-jole-snasao-na-snimanju-dormeo-kampanje/" class="full flex">
                        <div class="full">
                            <h4>Behind the scenes</h4>
                        </div>
                        <h2 class="full">Kako se Jole snašao na snimanju Dormeo kampanje</h2>
                        <div class="cta animate">Pročitaj više</div>
                    </a>
                </div>
            </div>
        </div>

        <div class="slide  flex" id="madraci">
            <div class="container flex">
                <div class="full gallery">
                        <div class="full center">
                            <a href="https://bit.ly/3kpvnmL" target="_blank" class="full flex">
                                <img src="<?php echo $native_path; ?>img/madrac1.jpg">
                </a>
                        </div>
                        <div class="full center">
                            <a href="https://bit.ly/3kpvnmL" target="_blank" class="full flex">
                                <img src="<?php echo $native_path; ?>img/madrac2.jpg">
                                
                </a>
                        </div>
                        <div class="full center">
                            <a href="https://bit.ly/3kpvnmL" target="_blank" class="full flex">
                                <img src="<?php echo $native_path; ?>img/madrac3.jpg">
                               
                </a>
                        </div>
                        <div class="full center">
                            <a href="https://bit.ly/3kpvnmL" target="_blank" class="full flex">
                                <img src="<?php echo $native_path; ?>img/madrac4.jpg">
                               
                </a>
                        </div>
                    </div>
                    <div class="full center"><a href="https://bit.ly/3kpvnmL" class="cta animate">Saznajte više</a></div>
            </div>
            
        </div>     
        








        <div class="slide slide-1">
            <div class="slide-content full flex center">
                <h1 class="full flex">
                    <span class="full center-text">Udobnost je stvarna. Udobnost je mjesto za nas</span>
                    <span class="full center-text">I ovo je mjesto za nas</span>
                </h1>
                <div class="text-container">
                    <h2 class="full center-text">Svako je mjesto za nas ako smo sa svojim bližnjima ili ako u novim prilikama spoznajemo sebe i stvaramo zdravu vezu sa svojim ja. <br>Otkrivamo zanimljive priče i putovanja koja mogu postati dio vaše stvarnosti, a otkrivamo kako na raznim mjestima osigurati savršenu udobnost.</h2>
                </div>
            </div>
            
            <div class="img-container full center" style="background-image: url('http://super1.staging.telegram.hr/wp-content/themes/super1-theme/templates/native/dormeo/mjesto_za_nas/img/Dora1.jpg');"></div>
            <div class="go-down full center"><img src="http://super1.staging.telegram.hr/wp-content/themes/super1-theme/templates/native/dormeo/mjesto_za_nas/img/godown.png" alt="Arrow pointing down"></div>
        </div>






        <div class="slide slide-2 flex">
            <div class="container flex">
                <div class="img-container" >
                </div>
                <div class="slide-content center">
                    <a target="_blank" href="https://super1.telegram.hr/relax/ova-sestorka-godinama-ljetuje-na-divlje-i-spava-u-satorima-jednom-su-upali-u-minsko-polje/" class="full flex">
                        <div class="full">
                            <h4>Čuvena putovanja</h4>
                        </div>
                        <h2 class="full">Ova šestorka godinama ljetuje na divlje i spava u šatorima. Jednom su upali u minsko polje</h2>
                        <div class="cta animate">Pročitaj više</div>
                        
                    </a>
                </div>
            </div>
        </div>
        <div class="slide slide-2 slide-yellow flex">
            <div class="container flex">
                <div class="img-container">
                </div>
                <div class="slide-content center">
                    <a target="_blank" href="" class="full flex">
                        <div class="full">
                            <h4>Čuvena putovanja</h4>
                        </div>
                        <h2 class="full">Dora putuje i živi u svom van kamperu, možete li to napraviti vi?</h2>
                        <div class="cta animate">Pročitaj više</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="slide slide-2 flex">
            <div class="container flex">
                <div class="img-container">
                </div>
                <div class="slide-content center">
                    <a target="_blank" href="https://super1.telegram.hr/relax/evo-kako-se-pakiramo-ovo-ljeto-ovo-su-trikovi-za-pakiranje-koje-ne-zaobilazimo/" class="full flex">
                        <div class="full">
                            <h4>Organizacija putovanja</h4>
                        </div>
                        <h2 class="full">Evo kako se pakiramo ovo ljeto. Ovo su trikovi za pakiranje koje ne zaobilazimo</h2>
                        <div class="cta animate">Pročitaj više</div>
                    </a>
                </div>
            </div>
        </div>













        
        <div class="slide slide-2 slide-yellow flex">
            <div class="container center">
                <div class="full flex">
                <h2 class="full center-text shoo-bottom">Svako je mjesto, mjesto za nas.</h2>
                <p class="full center-text special-intro">Posjetimo li baku i djeda, otputujemo li na ljetovanje s prijateljicama ili pak odlučimo spavati u šatoru pod zvijezdama. Svako je to mjesto za nas i za svako mjesto trebamo osigurati i udobnost. Ugodan san i komociju za potpuni doživljaj.</p>
                </div>
                
            </div>
        </div>
        <div class="slide slide-2 flex">
            <div class="container center">
                <div class="full flex">
                <h2 class="full center-text">Testirali smo udobnost u raznim prilikama!</h2>
                </div>
            </div>
        </div>
        <div class="slide slide-2 slide-yellow flex">
            <div class="container center">
                <div class="full flex">
                <h2 class="full center-text shoo-bottom">Razgibavanje i trening</h2>
                <div class="full video-container"><iframe src="https://www.youtube.com/embed/LF97sQYIFVA" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
            </div>
        </div>
        <div class="slide slide-2 flex">
            <div class="container center">
                <div class="full flex">
                <h2 class="full center-text shoo-bottom">Putovanje u van camperu</h2>
                <div class="full video-container"><iframe src="https://www.youtube.com/embed/k4p-TOoxGPE" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
            </div>
        </div>
        <div class="slide slide-2 slide-yellow flex">
            <div class="container center">
                <div class="full flex">
                <h2 class="full center-text">Otkrivamo što je udobnost Dalibora, Sonju i Martinu. Pronalazite li se i vi u tome?</h2>
                </div>
            </div>
        </div>
        <div class="slide slide-2 flex">
            <div class="container center">
                <div class="full flex">
                <div class="full video-container"><iframe src="https://www.youtube.com/embed/deu3W9O8aL8" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
            </div>
        </div>
        <div class="slide slide-2 slide-yellow flex">
            <div class="container center">
                <div class="full flex">
                <div class="full video-container"><iframe src="https://www.youtube.com/embed/XbBfAQvehqM" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
            </div>
        </div>
        <div class="slide slide-2 flex">
            <div class="container center">
                <div class="full flex">
                <div class="full video-container"><iframe src="https://www.youtube.com/embed/o8Y_lranu-w" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
            </div>
        </div>


        <div class="slide full flex center">

        <div class="full flex fullstretch galleries">

                    <div class="full gallery">
                        <div class="full center">
                            <a href="https://bit.ly/3jBtBAu" target="_blank" class="full flex">
                                <img src="<?php echo $native_path; ?>img/dormeo1.jpg">
                </a>
                        </div>
                        <div class="full center">
                            <a href="https://bit.ly/3jAfye9" target="_blank" class="full flex">
                                <img src="<?php echo $native_path; ?>img/dormeo2.jpg">
                                
                </a>
                        </div>
                        <div class="full center">
                            <a href="https://bit.ly/366fw5M" target="_blank" class="full flex">
                                <img src="<?php echo $native_path; ?>img/dormeo3.jpg">
                               
                </a>
                        </div>
                    </div>
                    
                
            </div>



            <div class="full container flex footer-container">

                <div class="full text-container center-text dolje-text">Da bi putovanja u prekrasne trenutke, pa gdje god oni bili, bila potpuna i baš po vašoj mjeri, predstavljamo Dormeo Aloa Vera nadmadrace</div>
                <div class="full flex">
                    <div class="credits center-text">
                        Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Reebok i po najvišim uredničkim standardima Telegram Media Grupe.
                    </div>
                    <div class="full center">
                        <img src="<?php echo $native_path; ?>img/tg_studio.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>

</html>