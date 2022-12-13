<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/lidl/superfino/nesto-konkretno/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="/wp-content/themes/super1-theme/templates/native/lidl/superfino/style.css?v=6" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Raleway:wght@600&display=swap" rel="stylesheet">
</head>
<body>
<?php do_action('body_start'); ?>
<div class="main-container">
    <div class="header-gastro-container">
        <div class="content-wrapper">
            <h1>Nešto konkretno</h1>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="gastro-wrapper gastro-single clear">
            <div class="gastro-items">
                <div class="gastro-image">
                    <a target="_blank" href="https://super1.telegram.hr/relax/poznate-smo-gastro-blogere-pitali-koje-namirnice-bas-uvijek-imaju-u-kuhinji/"><img src="<?php echo $native_path ?>img/gastro-bloger.jpg?v=2" alt=""/><a>
                </div>
                <div class="gastro-links">
                    <a target="_blank" href="https://super1.telegram.hr/relax/poznate-smo-gastro-blogere-pitali-koje-namirnice-bas-uvijek-imaju-u-kuhinji/"><span>Poznate smo gastro blogere pitali koje namirnice baš uvijek imaju u kuhinji</span></a>
                    <div>
                        <span class="author"><a target="_blank" href="https://super1.telegram.hr/author/super1/">Super1</a></span>
                        <span class="category"><a target="_blank" href="https://super1.telegram.hr/category/relax/">RELAX</a></span>
                    </div>
                </div>
            </div>
            <div class="gastro-items">
                <div class="gastro-image">
                    <a target="_blank" href="https://super1.telegram.hr/relax/evo-kako-napraviti-najsocniji-falafel-na-pet-razlicitih-nacina/"><img src="<?php echo $native_path ?>img/falafel.jpg?v=2" alt=""/><a>
                </div>
                <div class="gastro-links">
                    <a target="_blank" href="https://super1.telegram.hr/relax/evo-kako-napraviti-najsocniji-falafel-na-pet-razlicitih-nacina/"><span>Evo kako napraviti najsočniji falafel na pet različitih načina</span></a>
                    <div>
                        <span class="author"><a target="_blank" href="https://super1.telegram.hr/author/super1/">Super1</a></span>
                        <span class="category"><a target="_blank" href="https://super1.telegram.hr/category/relax/">RELAX</a></span>
                    </div>
                </div>
            </div>
            <div class="gastro-items">
                <div class="gastro-image">
                    <a href="https://super1.telegram.hr/fit/kako-vrucine-ne-bi-iz-vas-iscijedile-i-posljednji-atom-snage-vazno-je-sto-jedete-i-pijete-imamo-najbolje-preporuke/"><img src="<?php echo $native_path ?>img/vrucina.jpg?v=2" alt=""/><a>
                </div>
                <div class="gastro-links">
                    <a target="_blank" href="https://super1.telegram.hr/fit/kako-vrucine-ne-bi-iz-vas-iscijedile-i-posljednji-atom-snage-vazno-je-sto-jedete-i-pijete-imamo-najbolje-preporuke/"><span>Kako vrućine ne bi iz vas iscijedile i posljednji atom snage, važno je što jedete i pijete. Imamo najbolje preporuke</span></a>
                    <div>
                        <span class="author"><a target="_blank" href="https://super1.telegram.hr/author/super1/">Super1</a></span>
                        <span class="category"><a target="_blank" href="https://super1.telegram.hr/category/fit/">FIT</a></span>
                    </div>
                </div>
            </div>
            <div class="gastro-items">
                <div class="gastro-image">
                    <a href="https://super1.telegram.hr/relax/homa-vikend-recepti/"><img src="<?php echo $native_path ?>img/homa.jpg?v=2" alt=""/><a>
                </div>
                <div class="gastro-links">
                    <a target="_blank" href="https://super1.telegram.hr/relax/homa-vikend-recepti/"><span>Chef iz beogradskog restorana Homa s nama je podijelio tri vikend recepta</span></a>
                    <div>
                        <span class="author"><a target="_blank" href="https://super1.telegram.hr/author/super1/">Super1</a></span>
                        <span class="category"><a target="_blank" href="https://super1.telegram.hr/category/relax/">RELAX</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-container">
		<div class="content-wrapper">
			<div class="logos">
			<img src="/wp-content/themes/super1-theme/templates/native/lidl/superfino/img/vegeta.png?v=1" alt="Vegeta logo">
				<img src="/wp-content/themes/super1-theme/templates/native/lidl/superfino/img/lidl.png?v=2" alt="Lidl logo">
				<img src="/wp-content/themes/super1-theme/templates/native/lidl/superfino/img/tg_studio.png?v=2" alt="TG Studio logo">
			</div>
			<p>Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerima i po najvišim uredničkim standardima Telegram Media Grupe.</p>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>