<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
	<?php wp_head(); ?>
    <!-- Scripts -->
    <script src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/dormeo/anketa/functions.js"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/templates/native/dormeo/anketa/style.css?ver=1.1" type="text/css" />
</head>
<body>

<div class="native-page">
    <div class="full flex native-hero stretch">
        <img class="forest" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/dormeo/anketa/img/forest.png" alt="Pozadinska šuma">
        <div class="full flex native-title dark-purple relative">
            <div class="half flex-responsive native-title-text">
                <div class="full wow fadeInUp" data-wow-delay="1.5s">
                    <h4 class="full">VELIKO ISTRAŽIVANJE</h4>
                    <h1 class="full">50% Hrvata ima problema sa spavanjem</h1>
                    <h2 class="full">Na temelju istraživanja kojeg smo proveli u suradnji s Dormeom, saznali smo navike
                    spavanja Hrvata</h4>
                </div>
            </div>
            <div class="half flex-responsive native-hero-image">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/dormeo/anketa/img/house_girl.png" alt="Mlada djevojka u mračnoj kući gleda kroz prozor jer ne može spavati">
                <div class="native-hero-fade mobile-only">
                </div>
            </div>
            <div class="native-hero-fade desktop-only">
            </div>
        </div>
    </div>
    <div class="full flex dark-purple main-infographic-content relative">
        <div class="container">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/dormeo/anketa/img/dormeo_anketa_new.png" alt="Rezultati Dormeo ankete">
        </div>
    </div>
    </div>
    <div class="native-signature wow fadeInUp">
        <div class="container flex center">
            <img class="tg-studio" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/dormeo/anketa/img/tg_studio.png" alt="TG Studio logo" />
            <img class="dormeo" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/dormeo/anketa/img/dormeo.png" alt="Dormeo logo" />
            <p>Sadržaj je nastao u suradnji Dormea i Telegram media grupe. Pročitaj uvjete korištenja i pravila privatnosti.</p>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
