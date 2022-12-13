<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/ljeto2020/hub/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=1.3" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="<?php echo $native_path ?>isInViewport.js.map"></script>
    <script src="<?php echo $native_path ?>isInViewport.js"></script>
    <script src="<?php echo $native_path ?>functions.js?ver=1.2"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap&subset=latin-ext" rel="stylesheet">
</head>
<div class="main-container flex">
    <div class="native-hero full relative center">
        <a href="https://super1.telegram.hr/" class="header-logos center full">
            <img src="<?php echo $native_path ?>img/super1_logo_white.svg" alt="Super1 Logo">
        </a>
        <div class="native-title center container flex">
            <img src="<?php echo $native_path ?>img/summer_illustration_head.svg" />
            <div class="native-title-square">
                <h1 class="full center-text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">#ljeto2020</h1>
                <h2 class="full center-text wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">1000 super ideja i savjeta za odmor u Hrvatskoj</h2>
            </div>
        </div>
    </div>
    <div class="full flex">
        <div class="container flex">
            <p class="center-text wow fadeInUp intro horizontal-pad" data-wow-duration="1s">Ultimativni vodič za ljeto pred nama: što raditi, jesti, naučiti, iskusiti, posjetiti, odjenuti, kupiti, kako se zabaviti i zaljubiti. Na jednom mjestu, iz dana u dan, Super1 donosi prijedloge za nezaboravno ljeto #stayincroatia</p>
        </div>
    </div>
    <div class="full flex" style="margin-bottom: 100px;">
        <div class="container flex relative stretch">
        <?php
            $articles = z_get_zone_query('#ljeto2020', ['posts_per_page' => 3]);
            $count = $articles->post_count;
            // start block loop
            while ($articles->have_posts()) {
                $articles->the_post();
                    switch ($articles->current_post) {
                        case 0:
                            $dan="Jučer";
                            break;
	                    case 2:
                            $dan="Sutra";
                            break;
                        default:
                        $dan="Danas";
                            break;
                    }
                    echo '<div class="third stretch flex"><div class="time-slider-article animate"><h4 class="full">'.$dan.'</h4>';
                    get_template_part('templates/native/fashion/hub/article-4');
                    echo '</div></div>';
            }
            ?>
        </div>
    </div>
    <div class="full gray-bg">
        <div class="container">
            <div class="content-table center-text">
                <h5>Ako voliš</h5>
                <a class="animate" href="#hedonist">... piti, jesti, putovati – <span style="color: #488180">TI SI HEDONIST</span></a>
                <a class="animate" href="#party">... festivale, tulume i koncerte – <span style="color: #b49b5e">TI SI PARTY TIP</span></a>
                <a class="animate" href="#beauty">... modu, šminku i kremice – <span style="color: #af707f">TI SI SUMMER BEAUTY</span></a>
                <a class="animate" href="#izazov">... nove stvari, učenje i gadgete– <span style="color: #50609c">TI SI TIP ZA IZAZOVE</span></a>
            </div>
        </div>
    </div>
    <div class="full flex hedonist">
        <a id="hedonist"></a>
        <div class="full section-title-papa relative">
            <div class="full center">
                <div class="section-title center flex">
                    <img src="<?php echo $native_path ?>img/summer_illustration_1.svg" />
                    <div class="section-title-square">
                        <h2 class="full center-text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">hedonizam</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container flex">
            <?php
            $articles = z_get_zone_query('#ljeto2020-hedonizam', ['posts_per_page' => 6]);
            // start block loop
            while ($articles->have_posts()) {
	            $articles->the_post();
	            if ($articles->current_post < 2) {
		            echo '<div class="half flex article-1-papa">';
		            get_template_part( 'templates/native/fashion/hub/article-1' );
		            echo '</div>';
	            }
	            else {
		            echo '<div class="fourth flex-responsive">';
		            get_template_part('templates/native/fashion/hub/article-4');
		            echo '</div>';
	            }
	            if ($articles->current_post === 1) {
		            echo '<div class="full flex">';
	            }
            }
            ?>
            </div>
        </div>
    </div>

    <div class="full flex party">
        <a id="party"></a>
        <div class="full section-title-papa shoo-top relative">
            <div class="full center">
                <div class="section-title center flex">
                    <img src="<?php echo $native_path ?>img/summer_illustration_2.svg" />
                    <div class="section-title-square">
                        <h2 class="full center-text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">party zona</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container flex">
            <?php
            $articles = z_get_zone_query('#ljeto2020-party', ['posts_per_page' => 6]);
            while ($articles->have_posts()) {
	            $articles->the_post();
	            if ($articles->current_post < 2) {
		            echo '<div class="half flex article-1-papa">';
		            get_template_part( 'templates/native/fashion/hub/article-1' );
		            echo '</div>';
	            }
	            else {
		            echo '<div class="fourth flex-responsive">';
		            get_template_part('templates/native/fashion/hub/article-4');
		            echo '</div>';
	            }
	            if ($articles->current_post === 1) {
		            echo '<div class="full flex">';
	            }
            }
            ?>
            </div>
        </div>
    </div>

    <div class="full flex beauty">
        <a id="beauty"></a>
        <div class="full section-title-papa shoo-top relative">
            <div class="full center">
                <div class="section-title center flex">
                    <img src="<?php echo $native_path ?>img/summer_illustration_3.svg" />
                    <div class="section-title-square">
                        <h2 class="full center-text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">summer beauty</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container flex">
            <?php
            $articles = z_get_zone_query('#ljeto2020-summer', ['posts_per_page' => 6]);
            while ($articles->have_posts()) {
	            $articles->the_post();
	            if ($articles->current_post < 2) {
		            echo '<div class="half flex article-1-papa">';
		            get_template_part( 'templates/native/fashion/hub/article-1' );
		            echo '</div>';
	            }
	            else {
		            echo '<div class="fourth flex-responsive">';
		            get_template_part('templates/native/fashion/hub/article-4');
		            echo '</div>';
	            }
	            if ($articles->current_post === 1) {
		            echo '<div class="full flex">';
	            }
            }
            ?>
            </div>
        </div>
    </div>

    <div class="full flex izazov">
        <a id="izazov"></a>
        <div class="full section-title-papa shoo-top relative">
            <div class="full center">
                <div class="section-title center flex">
                    <img src="<?php echo $native_path ?>img/summer_illustration_4.svg" />
                    <div class="section-title-square">
                        <h2 class="full center-text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">tips & tricks</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container flex">
            <?php
            $articles = z_get_zone_query('#ljeto2020-tips', ['posts_per_page' => 6]);
            while ($articles->have_posts()) {
	            $articles->the_post();
	            if ($articles->current_post < 2) {
		            echo '<div class="half flex article-1-papa">';
		            get_template_part( 'templates/native/fashion/hub/article-1' );
		            echo '</div>';
	            }
	            else {
		            echo '<div class="fourth flex-responsive">';
		            get_template_part('templates/native/fashion/hub/article-4');
		            echo '</div>';
	            }
	            if ($articles->current_post === 1) {
		            echo '<div class="full flex">';
	            }
            }
            ?>
            </div>
        </div>
    </div>

    <section class="full native-signature hide">
        <div class="container flex">
            <div class="full center">
                <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
            </div>
            <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </section>
</div>

<?php wp_footer(); ?>
</body>

</html>