<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/eucerin/hiper_pigmentacija/';
//$native_path = 'http://localhost/super1-theme/templates/native/eucerin/hiper_pigmentacija/';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();
    ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=2.7" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $native_path ?>jquery.serialize-object.min.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>slick/slick.css" type="text/css" />
    <script src="<?php echo $native_path ?>slick/slick.js"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>aos.css" type="text/css" />
    <script src="<?php echo $native_path ?>aos.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Benne&family=Roboto:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
    <script src="<?php echo $native_path ?>functions.js?ver=2.3"></script>
</head>

<body>
    <div id="page">
        <header class="full flex intro main-logo-full flex" style="background-image: url('<?php echo $native_path ?>img/noisy_bg.png')">
			 <div class="container center relative">
			 <select class="select-box">
				<option value="1">Moje iskustvo s hiperpigmentacijom</option>
				<option value="2">Moje iskustvo s aknama </option>
			</select>
                 <script>
                     jQuery('.select-box').on('change', function() {
                         switch(jQuery(this).val()) {
                             case "2":
                                 window.location.href = 'https://super1.telegram.hr/native/moje-iskustvo-s-aknama/';
                                 break;
                         }
                     })
                 </script>
			</div>
            <div class="container center relative">
				
			
			<img class="main-logo" data-aos="flip-up" src="<?php echo $native_path ?>img/tg_mojeiskustvo_logo2.svg?ver=2.0" alt="Moje iskustvo s aknama" /></div>
        </header>
        <div class="full flex intro" data-aos="fade-up">
            <div class="container narrow-container flex relative">
                <p>Hiperpigmentacija se pojavljuje u obliku tamnih mrlja koje kožu čine neujednačenom, a nastaje zbog prekomjerne proizvodnje melanina. Melanin je prirodni pigment koji našoj koži, kosi i očima daje njihovu prirodnu boju. Iako nije ozbiljan zdravstveni problem, može utjecati na naš doživljaj samih sebe i na količinu stresa s kojom se moramo nositi.
Prekomjerna proizvodnja melanina, a time i pojava hiperpigmentacije, povezuje se s izlaganjem suncu, genetikom, hormonalnim utjecajima te ozljedama ili upalama na koži</p>
            </div>
        </div>
        <div class="full flex intro" data-aos="fade-up">
            <div class="container narrow-container flex relative">
                <p class="full">Ovo je Jelena i njezino iskustvo s hiperpigmentacijom.</p>
            </div>
        </div>
        <div class="full flex" data-aos="fade-up">
            <div class="container flex relative">
                <style>
                    .video-container {
                        position: relative;
                        padding-bottom: 56.25%;
                        padding-top: 30px;
                        height: 0;
                        overflow: hidden;
                    }

                    .video-container iframe,
                    .video-container object,
                    .video-container embed {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                    }
                </style>
                <div class='full video-container'>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Jvx-Y5g7kf8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
            </div>
        </div>
		 <div class="full flex intro" data-aos="fade-up">
            <div class="container narrow-container flex relative">
                <p>Hvala svima na sudjelovanju u nagradnom natječaju. Tri sretne dobitnice Eucerin proizvoda i savjetovanje kod dermatologa su: Ana Pušić Oklopčić, Maja Milošević, Ana Kerum Tente. Čestitamo!</p>
            </div>
        </div>
        
        <div class="full flex infographic">
            <img src="<?php echo $native_path ?>img/tg_infographic_eucerin_hiperpigmentacijom2.png?ver=2.0" aria-hidden="true" class="mobile-only" data-aos="fade-up">
            <div class="container flex relative desktop-only" data-aos="fade-up">
                <img src="<?php echo $native_path ?>img/tg_infographic_eucerin_hiperpigmentacijom.png?ver=2.0" aria-hidden="true" class="desktop-only">
            </div>
        </div>
        <div class="full flex infographic2">
            <div class="container flex relative">
                <h2 class="full center-text" data-aos="fade-up">Dermatolozi pružaju odgovore na najčešća pitanja o njezi kože:</h2>
                <div class="full circle-line center" data-aos="fade-up"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                <h3 class="full center-text green-text" data-aos="fade-up">Kako spriječiti pojavu hiperpigmentacije?</h3>
                <p class="full center-text" data-aos="fade-up">Kao najvažniji korak koji morate poduzeti kako biste spriječili hiperpigmentaciju je zaštita od sunca. Sunčeve zrake utječu na kožu čak i kada je vani oblačno, zato je bitno koži pružiti svakodnevnu zaštitu.</p>
                <div class="full special-element" data-aos="fade-up">
                    <img src="<?php echo $native_path ?>img/hiper_pigmentacija-1.png" aria-hidden="true">
                    <h3 class="full center-text">Zašto Eucerin Anti-Pigment dnevna njega SPF 30 sadrži UVA i UVB zaštitu?</h3>
                    <p class="full center-text">Čak i za vrijeme oblačnih dana sunčeve zrake mogu uzrokovati hiperpigmentaciju, fotostarenje (pojam koji se koristi za opisivanje preranog starenja kože uzrokovanog suncem) i oštećenja DNA. <a href="https://www.eucerin.hr/o-kozi/osnovni-podaci-o-kozi/sunce-i-koza " target="_blank">Saznajte više</a> o tome u članku Kako sunce utječe na kožu. </p>
                </div>

                <h3 class="full center-text green-text" data-aos="fade-up">Prestanem li koristiti Eucerin Anti-Pigment njegu hoće li se pigmentacijske mrlje vratiti?</h3>
                <p class="full center-text" data-aos="fade-up">Da. Preparati iz linije smanjuju proizvodnju melanina koja uzrokuje hiperpigmentaciju. Ako prestanete koristiti Eucerin Anti-Pigment njegu, proizvodnja melanina mogla bi se ponovno povećati, a tamne mrlje vratiti. Za trajne rezultate preporučujemo redovitu upotrebu.</p>

                <div class="full special-element alternate-sp-el" data-aos="fade-up">
                    <img src="<?php echo $native_path ?>img/hiper_pigmentacija-2.png" aria-hidden="true">
                    <h3 class="full center-text">Mogu li se hiperpigmentacije tretirati i u ljetnim mjesecima?</h3>
                    <p class="full center-text">Da, ali samo neki oblici terapija. U ljetnim mjesecima za tretiranje tamnih mrlja uz Eucerin Anti-Pigment njegu, preporučuje se nanošenje Eucerin Pigment Control fluida za zaštitu kože lica od sunca SPF 50+. Prilagođen je svim tipovima kože, pruža svakodnevnu pouzdanu zaštitu i pomaže u sprječavanju hiperpigmentacije izazvane suncem.
Je li Eucerin Anti-Pigment njega učinkovita u tretiranju postupalne hiperpigmentacije, konkretno diskoloracije kože nakon izbijanja prištića ili akni?
Da, Eucerin Anti-Pigment njega koristi se i za tretiranje postupalne hiperpigmentacije. Pomaže ujednačiti ten kože čineći ju blistavijom, a učinkoviti sastojak Thiamidol dokazano smanjuje tamne mrlje i sprječava njihovo ponovno pojavljivanje.
</p>
                </div>
               
             
                <div class="full special-element" data-aos="fade-up">
                    <img src="<?php echo $native_path ?>img/hiper_pigmentacija-3.png" aria-hidden="true">
                    <p class="full center-text">“Dobra vijest je da se problem hiperpigmetacije može riješiti pravilnom njegom! Koristite one preparate koji su posebno formulirani za rješavanje ovog problema te su klinički i dermatološki dokazano učinkoviti.
Cjelokupna Eucerin Anti-Pigment njega sadrži Thiamidol, patentirani Eucerin sastojak koji djeluje na pojavu hiperpigmentacije smanjenjem proizvodnje melanina.
Također, dermatološki tretmani mogu pomoći u smanjenju hiperpigmentacije, poput kemijskog pilinga te u nekim slučajevima terapija s IPL i laserom.
”</p>
                </div>
                <p class="full center-text" data-aos="fade-up"> Smanjite hiperpigmentaciju i spriječite njeno ponovno pojavljivanje uz Eucerin njegu i savjete Prim. Sanja Špoljar, dr.med. specijalist dermatologije i venerologije koja će dati odgovore na vaša najčešće postavljana pitanja vezana uz ovu kožnu indikaciju  <a href="https://www.eucerin.hr/kozna-oboljenja/smanjite-hiperpigmentaciju-pravilnom-njegom " target="_blank">Saznajte više</a> </p>

            </div>
        </div>
        <div class="full flex intro" data-aos="fade-up">
            <div class="container flex relative">
                <p>Pronađi odgovarajuću njegu za sebe</p>
                <div class="full gallery">
                    <div><a href="https://www.eucerin.hr/proizvodi/anti-pigment/spot-korektor" target="_blank" class="full flex"><img src="<?php echo $native_path ?>img/product-1.png">
                            <p class="full center-text"></p>
                        </a></div>
                    <div><a href="https://www.eucerin.hr/proizvodi/anti-pigment/nocna-krema" target="_blank" class="full flex"><img src="<?php echo $native_path ?>img/product-2.png">
                            <p class="full center-text"></p>
                        </a></div>
                    <div><a href="https://www.eucerin.hr/proizvodi/anti-pigment/dvofazni-serum" target="_blank" class="full flex"><img src="<?php echo $native_path ?>img/product-3.png">
                            <p class="full center-text"></p>
                        </a></div>
                    <div><a href="https://www.eucerin.hr/proizvodi/anti-pigment/dnevna-krema" target="_blank" class="full flex"><img src="<?php echo $native_path ?>img/product-4.png">
                            <p class="full center-text"></p>
                        </a></div>
                   
                  
                </div>
            </div>
        </div>
        <div class="full center">
            <a href="https://www.eucerin.hr/kozna-oboljenja/neujednacen-ten-koze" target="_blank" class="cta animate">Saznajte više</a>
        </div>
        <div class="full flex">
            <div class="container narrow-container flex relative">
                <section class="full native-signature">
                    <div class="container flex logo-display">
                        <div class="full center">
                            <img class="partner" src="<?php echo $native_path ?>img/eucerin.png" alt="Eucerin logo" />
                            <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
							<img class="tg-studio" src="<?php echo $native_path ?>img/omega.png" alt="Omega logo" />
                        </div>
                        <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s Eucerin i po najvišim uredničkim standardima Telegram Media Grupe.</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php wp_footer();
    ?>
</body>

</html>