<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/lidl/superfino/';
//$native_path = 'http://localhost/super1-theme/templates/native/lidl/superfino/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="<?php echo $native_path ?>style.css?v=92" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Raleway:wght@600&display=swap" rel="stylesheet">
</head>
<body>
<?php do_action('body_start'); ?>
<div class="main-container">
	<div class="header-container">
		<div class="overlay"></div>
		<div class="header-bg">
			<img src="<?php echo $native_path ?>img/naslovna-slika.jpg?v=2" alt=""/>
		</div>
		<div class="header-text">
			<h1>Super fino,<br>
				super smart</h1>
			<p>Dobro došli na gastro platformu koja otkriva kako<br>
			kuhati omiljena jela na zdraviji način, kako<br>
			organizirati svoju špajzu i kako pametnije kupovati </p>
		</div>
	</div>
	<div class="quiz-container flex">
		<div class="quiz flex">
			<div class="powered-by flex">Powered by <img src="<?php echo $native_path ?>img/vegeta.png?v=2" alt="Vegeta logo"></div>
			<div class="slide slide-1 flex" data-slide="1">
				<div class="big-question-mark">?</div>
				<p class="quiz-intro">Smatraš se gastro znalcem ili to tek planiraš postati? Riješi gastro kviz brzine i znanja i osvoji vrijedne poklone s kojima će kuhanje biti još zabavnije.</p>
				<p class="quiz-intro">Darujemo 3 čitatelja koja točno i najbrže odgovore na pitanja, vrijednim i finim Vegeta paketom proizvoda. Sretno!</p>
				<div class="quiz-button">Započni</div>
			</div>
			<div class="slide slide-2 flex hide" data-slide="2">
				<p class="quiz-question">Origano je mediteranska, višegodišnja biljka poznata po aromatičnom mirisu i okusu.</p>
				<div class="half">
					<div class="quiz-button btn-yes" data-button="yes">Točno</div>
				</div>
				<div class="half">
					<div class="quiz-button btn-no" data-button="no">Netočno</div>
				</div>
			</div>
			<div class="slide slide-3 flex hide" data-slide="3">
				<p class="quiz-question">Ružmarin je neizostavan začin kod pripreme ribe na gradelama te kod pripreme mesa, a posebno piletine i janjetine.</p>
				<div class="half">
					<div class="quiz-button btn-yes" data-button="yes">Točno</div>
				</div>
				<div class="half">
					<div class="quiz-button btn-no" data-button="no">Netočno</div>
				</div>
			</div>
			<div class="slide slide-4 flex hide" data-slide="4">
				<p class="quiz-question">Bosiljak nije jednogodišnja zeljasta biljka poznata kao začin.</p>
				<div class="half">
					<div class="quiz-button btn-yes" data-button="yes">Točno</div>
				</div>
				<div class="half">
					<div class="quiz-button btn-no" data-button="no">Netočno</div>
				</div>
			</div>
			<div class="slide slide-5 flex hide" data-slide="5">
				<p class="quiz-question">Sušeni peršin treba čuvati u hermetički zatvorenoj posudi na hladnom, suhom i tamnom mjestu.</p>
				<div class="half">
					<div class="quiz-button btn-yes" data-button="yes">Točno</div>
				</div>
				<div class="half">
					<div class="quiz-button btn-no" data-button="no">Netočno</div>
				</div>
			</div>
			<div class="slide slide-6 flex hide" data-slide="6">
				<p class="quiz-question">Origano je porijeklom je iz južnih krajeva Europe, a kao začin najčešće se koristi u Italiji, Americi i Meksiku.</p>
				<div class="half">
					<div class="quiz-button btn-yes" data-button="yes">Točno</div>
				</div>
				<div class="half">
					<div class="quiz-button btn-no" data-button="no">Netočno</div>
				</div>
			</div>
			<div class="slide slide-7 flex hide" data-slide="7">
				<p class="quiz-question">Origano je najbolje dodati pri kraju kuhanja kako bi se naglasio njegov prirodan okus.</p>
				<div class="half">
					<div class="quiz-button btn-yes" data-button="yes">Točno</div>
				</div>
				<div class="half">
					<div class="quiz-button btn-no" data-button="no">Netočno</div>
				</div>
			</div>
			<div class="slide slide-8 flex hide" data-slide="8">
				<p class="quiz-question">Osušene listove ružmarina ne treba čuvati u čvrsto zatvorenoj posudi na hladnom, tamnom i suhom mjestu do 6 mjeseci.</p>
				<div class="half">
					<div class="quiz-button btn-yes" data-button="yes">Točno</div>
				</div>
				<div class="half">
					<div class="quiz-button btn-no" data-button="no">Netočno</div>
				</div>
			</div>
			<div class="slide slide-9 flex hide" data-slide="9">
				<p class="quiz-question">To je to! Tvoje vrijeme je spremljeno. <br>Upiši podatke za prijavu na natječaj.</p>
				<form class="quiz-form flex" id="form">
					<input type="text" id="quiz-ime" name="ime" placeholder="Ime" required>
					<input type="text" id="quiz-prezime" name="prezime" placeholder="Prezime" required>
					<input type="email" id="quiz-mail" name="email" placeholder="Mail" required>
                    <input type="hidden" id="correct" name="correct" value="0">
                    <input type="hidden" id="time" name="time" value="0">
					<div class="full flex uvjeti"><input type="checkbox" id="quiz-uvjeti" required><label for="quiz-uvjeti"><a href="https://super1.telegram.hr/promo/opci-uvjeti-vegeta-super-fino-super-smart-nagradnog-natjecaja/" target="_blank">Prihvaćam uvjete korištenja i natječaja</a></label></div>
					<div class="full flex">
						<div class="quiz-button submit-btn" id="submit-form">Pošalji</div>
					</div>
				</form>
			</div>
			<div class="slide slide-10 flex hide" data-slide="10">
				<p id="success-msg" class="quiz-question hide">Tvoja prijava je spremljena. Hvala na sudjelovanju!</p>
				<div id="loading-indicator">
					<div class="lds-grid"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
				</div>
			</div>
		</div>
	</div>
	<div class="week-recipe-container">
		<div class="content-wrapper">
		<a target="_blank" href="https://super1.telegram.hr/relax/s-blogericom-anom-spelic-pripremili-smo-shakshuku-genijalno-bliskoistocno-jelo-idealno-za-ljeto/"><b>Recept tjedna</b></a>
		<div class="video-papa"><style>.video-container { position: relative; padding-bottom: 56.25%; padding-top: 30px; height: 0; overflow: hidden; } .video-container iframe, .video-container object, .video-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='video-container'><iframe src='https://www.youtube.com/embed/Do1rN7xD2DY' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div></div>
			<a target="_blank" href="https://super1.telegram.hr/relax/s-blogericom-anom-spelic-pripremili-smo-shakshuku-genijalno-bliskoistocno-jelo-idealno-za-ljeto/">S blogericom Anom Špelić pripremili smo shakshuku, genijalno bliskoistočno jelo idealno za ljeto</a>
			<a target="_blank" href="https://super1.telegram.hr/relax/s-blogericom-anom-spelic-pripremili-smo-shakshuku-genijalno-bliskoistocno-jelo-idealno-za-ljeto/" class="article-button">Pročitaj više</a>
		</div>
	</div>
	<div class="great-day-container">
		<div class="content-wrapper">
		<h2>Slasni recepti za super dan</h2>
			<div class="items-wrapper clear">
				<div class="recipe-items">
					<div class="recipe-image">
						<a target="_blank" href="https://super1.telegram.hr/relax/otkrile-smo-super-fini-recept-za-frittatu-s-povrcem-a-glavni-zacini-su-bosiljak-i-ruzmarin/0/"><img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2021/06/dizajn-bez-naslova-5-880x520.png" alt="Frittata s povrćem"/><a>
					</div>
					<div class="recipe-link">
						<a target="_blank" href="https://super1.telegram.hr/relax/otkrile-smo-super-fini-recept-za-frittatu-s-povrcem-a-glavni-zacini-su-bosiljak-i-ruzmarin/0/">Otkrile smo super fini recept za Frittatu s povrćem, a glavni začini su bosiljak i ružmarin </a>
					</div>
				</div>
				<div class="recipe-items">
					<div class="recipe-image">
						<a target="_blank" href="https://super1.telegram.hr/relax/prisjetila-sam-se-putovanja-na-prekrasnu-siciliju-a-ovaj-tjedan-je-okusima-mozete-posjetiti-i-vi/"><img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2021/07/tumblr-ofz8p3kujd1qdjg9co1-1280-880x520.jpg" alt="Sicilija"/><a>
					</div>
					<div class="recipe-link">
						<a target="_blank" href="https://super1.telegram.hr/relax/prisjetila-sam-se-putovanja-na-prekrasnu-siciliju-a-ovaj-tjedan-je-okusima-mozete-posjetiti-i-vi/">Prisjetila sam se putovanja na prekrasnu Siciliju, a ovaj tjedan je okusima možete posjetiti i vi </a>
					</div>
				</div>
				<div class="recipe-items">
					<div class="recipe-image">
						<a target="_blank" href="https://super1.telegram.hr/relax/s-blogericom-anom-spelic-pripremili-smo-shakshuku-genijalno-bliskoistocno-jelo-idealno-za-ljeto/"><img src="https://super1.telegram.hr/wp-content/uploads/sites/3/2021/07/bojanharonmarkicevic-04-1-880x520.jpg" alt=""/><a>
					</div>
					<div class="recipe-link">
						<a target="_blank" href="https://super1.telegram.hr/relax/s-blogericom-anom-spelic-pripremili-smo-shakshuku-genijalno-bliskoistocno-jelo-idealno-za-ljeto/">S blogericom Anom Špelić pripremili smo shakshuku, genijalno bliskoistočno jelo idealno za ljeto </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="gastro-container">
		<div class="content-wrapper">
			<h2>Gastro rubrike</h2>
			<div class="gastro-wrapper home clear">
				<div class="gastro-items">
					<div class="gastro-image">
						<a href="http://super1.telegram.hr/native/nesto-konkretno/"><img src="<?php echo $native_path ?>img/gastro1.jpg?v=2" alt=""/><a>
					</div>
					<div class="gastro-links gastro-links-alt">
						<a href="http://super1.telegram.hr/native/nesto-konkretno/">NEŠTO KONKRETNO</a>
						<a href="http://super1.telegram.hr/native/nesto-konkretno/" class="article-button">Pročitaj više</a>
					</div>
				</div>
				<div class="gastro-items">
					<div class="gastro-image">
						<a href="http://super1.telegram.hr/native/nesto-na-brzinu/"><img src="<?php echo $native_path ?>img/gastro2.jpg?v=2" alt=""/><a>
					</div>
					<div class="gastro-links gastro-links-alt">
						<a href="http://super1.telegram.hr/native/nesto-na-brzinu/">NEŠTO NA BRZINU</a>
						<a href="http://super1.telegram.hr/native/nesto-na-brzinu/" class="article-button">Pročitaj više</a>
					</div>
				</div>
				<div class="gastro-items">
					<div class="gastro-image">
						<a href="http://super1.telegram.hr/native/spajza/"><img src="<?php echo $native_path ?>img/gastro3.jpg?v=2" alt=""/><a>
					</div>
					<div class="gastro-links gastro-links-alt">
						<a href="http://super1.telegram.hr/native/spajza/">ŠPAJZA</a>
						<a href="http://super1.telegram.hr/native/spajza/" class="article-button">Pročitaj više</a>
					</div>
				</div>
				<div class="gastro-items">
					<div class="gastro-image">
						<a href="http://super1.telegram.hr/native/bakin-recept/"><img src="<?php echo $native_path ?>img/gastro4.jpg?v=2" alt=""/><a>
					</div>
					<div class="gastro-links gastro-links-alt">
						<a href="http://super1.telegram.hr/native/bakin-recept/">BAKIN RECEPT</a>
						<a href="http://super1.telegram.hr/native/bakin-recept/" class="article-button">Pročitaj više</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-container">
		<div class="content-wrapper">
			<div class="logos">
			<img src="<?php echo $native_path ?>img/vegeta.png?v=2" alt="Vegeta logo">
				<img src="<?php echo $native_path ?>img/lidl.png?v=2" alt="Lidl logo">
				<img src="<?php echo $native_path ?>img/tg_studio.png?v=2" alt="TG Studio logo">
			</div>
			<p>Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerima i po najvišim uredničkim standardima Telegram Media Grupe.</p>
		</div>
	</div>
</div>
<script src="<?php echo $native_path ?>/jquery.serialize-object.min.js"></script>
<script>
    let correct = 0;
    let start = null;
    let end = null;
    const answers = {
        2: 'yes',
        3: 'yes',
        4: 'no',
        5: 'yes',
        6: 'yes',
        7: 'yes',
        8: 'no',
    }
    jQuery('.slide .quiz-button').click(function() {
        let id = parseInt(jQuery(this).parents('.slide').attr('data-slide'))
        if (id === 1) {
            start = new Date();
        }

        let answer = jQuery(this).attr('data-button')
        if (answers[id] === answer) {
            correct++
        }
        $('.slide-' + id).toggleClass('hide')
        $('.slide-' + (id+1)).toggleClass('hide')
        if (id === 8) {
            end = new Date();
            jQuery('#correct').val(correct)
            jQuery('#time').val(Math.abs(end - start))
        }
    })

    var $form = jQuery('form#form'),
        url = 'https://script.google.com/macros/s/AKfycby71oF4u1Np11Z40dgybubr_zgMtjFsnKxjwm-dHG7lDGflbIg5MhxLAcP7J_toVUXhlA/exec'

    jQuery('#submit-form').on('click', function(e) {
        e.preventDefault();
        var jqxhr = jQuery.ajax({
            url: url,
            method: "GET",
            dataType: "json",
            data: $form.serializeObject()
        }).done(
            function(){
                jQuery('#submit-form').hide();
				console.log("Form submitted.");
				jQuery('#success-msg').toggleClass('hide');
				jQuery('#loading-indicator').toggleClass('hide');
            }
        );
    })
</script>
<?php wp_footer(); ?>
</body>

</html>