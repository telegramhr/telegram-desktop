<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/lidl/superfino/bakin-recept/';
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
            <h1>Bakin recept</h1>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="gastro-wrapper gastro-single clear">
            <div class="gastro-items">
                <div class="gastro-image">
                    <a target="_blank" href="https://super1.telegram.hr/relax/imamo-pet-lakih-recepata-za-krepki-i-ukusni-ajngemahtec/"><img src="<?php echo $native_path ?>img/ajngemah.jpg?v=2" alt=""/><a>
                </div>
                <div class="gastro-links">
                    <a target="_blank" href="https://super1.telegram.hr/relax/imamo-pet-lakih-recepata-za-krepki-i-ukusni-ajngemahtec/"><span>Imamo pet lakih recepata za krepki i ukusni ajngemahtec</span></a>
                    <div>
                        <span class="author"><a target="_blank" href="https://super1.telegram.hr/author/super1/">Super1</a></span>
                        <span class="category"><a target="_blank" href="https://super1.telegram.hr/category/relax/">RELAX</a></span>
                    </div>
                </div>
            </div>
            <div class="gastro-items">
                <div class="gastro-image">
                    <a target="_blank" href="https://super1.telegram.hr/relax/tanja-pastuovic-s-bloga-cookam-i-gustam-dala-nam-je-recept-za-finu-krepku-juhu-svima-ce-dobro-doci/"><img src="<?php echo $native_path ?>img/krepka-juha.jpg?v=2" alt=""/><a>
                </div>
                <div class="gastro-links">
                    <a target="_blank" href="https://super1.telegram.hr/relax/tanja-pastuovic-s-bloga-cookam-i-gustam-dala-nam-je-recept-za-finu-krepku-juhu-svima-ce-dobro-doci/"><span>Tanja Pastuović s bloga Cookam i guštam dala nam je recept za finu krepku juhu. Svima će dobro doći</span></a>
                    <div>
                        <span class="author"><a target="_blank" href="https://super1.telegram.hr/author/super1/">Super1</a></span>
                        <span class="category"><a target="_blank" href="https://super1.telegram.hr/category/relax/">RELAX</a></span>
                    </div>
                </div>
            </div>
            <div class="gastro-items">
                <div class="gastro-image">
                    <a href="https://super1.telegram.hr/relax/zeljni-ste-rucka-na-zlicu-probajte-ovaj-fora-recept-za-varivo-s-lecom-gljivama-i-noklicama/"><img src="<?php echo $native_path ?>img/varivo-leca.jpg?v=2" alt=""/><a>
                </div>
                <div class="gastro-links">
                    <a htarget="_blank" ref="https://super1.telegram.hr/relax/zeljni-ste-rucka-na-zlicu-probajte-ovaj-fora-recept-za-varivo-s-lecom-gljivama-i-noklicama/"><span>Željni ste ručka na žlicu? Probajte ovaj fora recept za varivo s lećom, gljivama i noklicama</span></a>
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