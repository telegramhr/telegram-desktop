<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/fant/zivim_brzo/';
$day=1;
$date_limits = array();
$date_limits[1] = strtotime('2020-10-25 11:00:01');
$date_limits[2] = strtotime('2020-10-26 11:00:01');
$date_limits[3] = strtotime('2020-10-27 11:00:01');
$date_limits[4] = strtotime('2020-10-28 11:00:01');
$date_limits[5] = strtotime('2020-10-29 11:00:01');
$date_limits[6] = strtotime('2020-10-30 11:00:01');
$date_limits[7] = strtotime('2020-10-31 11:00:01');
$date_limits[8] = strtotime('2020-11-01 11:00:01');
$date_limits[9] = strtotime('2020-11-02 11:00:01');
$date_limits[10] = strtotime('2020-11-03 11:00:01');

$now = time();

for ($i=1; $i < 11; $i++) { 
    if ($now > $date_limits[$i]) {
        $day=$i;
    }
}


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=2.0" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $native_path ?>rellax.min.js"></script>
    <script src="<?php echo $native_path ?>functions.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&family=Staatliches&display=swap" rel="stylesheet">
</head>
<div class="main-container flex" style="background-image: url('<?php echo $native_path ?>img/paper_bg.jpg');">
    <div class="native-hero full flex relative center">
        <a href="https://super1.telegram.hr/" class="header-logos center full hide">
            <img src="<?php echo $native_path ?>img/super1_logo.svg" alt="Super1 Logo">
        </a>
        <div class="native-title full flex flex-responsive">
            <h1 class="full center-text">Živim brzo <br>Jedem dobro</h1>
            <h2 class="full center-text">Otkrij recept za aktivan život</h2>
        </div>
        <div class="hero-frame rellax" data-rellax-speed="-3"></div>
        <img class="hero-image hero-image-1 desktop-only rellax" src="<?php echo $native_path ?>img/recipe10.jpg" aria-hidden="true" />
        <img class="hero-image hero-image-2 rellax" data-rellax-speed="-5" src="<?php echo $native_path ?>img/CHILI-CON-CARNE-S-PILETINOM_2.jpg" aria-hidden="true" />
        <img class="hero-image hero-image-3 rellax" src="<?php echo $native_path ?>img/Tortilja_kao_topli_sendvic_1.jpg" aria-hidden="true" />
        <img class="hero-image hero-image-4 rellax" data-rellax-speed="2" src="<?php echo $native_path ?>img/Zapeceni_bolognese_s_mozzarellom2.jpg" aria-hidden="true" />
    </div>
    <div class="full flex">
        <div class="container flex">
            <div class="full calendar">
                <div class="recipe-menu flex full">
                    <a id="recepti"></a>
                    <div class="tenth">
                        <div class="recipe-button button-1 animate full flex<?php if ($day==1) { echo ' active-button'; } ?>" onclick="recipe_click('.recipe-1', '.button-1');">
                            <div class="full recipe-number">1.</div>
                            <div class="full day-element">dan</div>
                        </div>
                    </div>
                    <div class="tenth">
                        <div class="recipe-button button-2 animate full flex<?php if ($day==2) { echo ' active-button'; } ?>" onclick="recipe_click('.recipe-2', '.button-2');">
                            <div class="full recipe-number">2.</div>
                            <div class="full day-element">dan</div>
                        </div>
                    </div>
                    <div class="tenth">
                        <div class="recipe-button button-3 animate full flex<?php if ($day==3) { echo ' active-button'; } ?>" onclick="recipe_click('.recipe-3', '.button-3');">
                            <div class="full recipe-number">3.</div>
                            <div class="full day-element">dan</div>
                        </div>
                    </div>
                    <div class="tenth">
                        <div class="recipe-button button-4 animate full flex<?php if ($day==4) { echo ' active-button'; } ?>" onclick="recipe_click('.recipe-4', '.button-4');">
                            <div class="full recipe-number">4.</div>
                            <div class="full day-element">dan</div>
                        </div>
                    </div>
                    <div class="tenth">
                        <div class="recipe-button button-5 animate full flex<?php if ($day==5) { echo ' active-button'; } ?>" onclick="recipe_click('.recipe-5', '.button-5');">
                            <div class="full recipe-number">5.</div>
                            <div class="full day-element">dan</div>
                        </div>
                    </div>
                    <div class="tenth">
                        <div class="recipe-button button-6 animate full flex<?php if ($day==6) { echo ' active-button'; } ?>" onclick="recipe_click('.recipe-6', '.button-6');">
                            <div class="full recipe-number">6.</div>
                            <div class="full day-element">dan</div>
                        </div>
                    </div>
                    <div class="tenth">
                        <div class="recipe-button button-7 animate full flex<?php if ($day==7) { echo ' active-button'; } ?>" onclick="recipe_click('.recipe-7', '.button-7');">
                            <div class="full recipe-number">7.</div>
                            <div class="full day-element">dan</div>
                        </div>
                    </div>
                    <div class="tenth">
                        <div class="recipe-button button-8 animate full flex<?php if ($day==8) { echo ' active-button'; } ?>" onclick="recipe_click('.recipe-8', '.button-8');">
                            <div class="full recipe-number">8.</div>
                            <div class="full day-element">dan</div>
                        </div>
                    </div>
                    <div class="tenth">
                        <div class="recipe-button button-9 animate full flex<?php if ($day==9) { echo ' active-button'; } ?>" onclick="recipe_click('.recipe-9', '.button-9');">
                            <div class="full recipe-number">9.</div>
                            <div class="full day-element">dan</div>
                        </div>
                    </div>
                    <div class="tenth">
                        <div class="recipe-button button-10 animate full flex<?php if ($day==10) { echo ' active-button'; } ?>" onclick="recipe_click('.recipe-10', '.button-10');">
                            <div class="full recipe-number">10.</div>
                            <div class="full day-element">dan</div>
                        </div>
                    </div>
                </div>
                <a href="https://www.coolinarika.com/recept/chili-con-carne-s-batatom/" target="_blank" class="recipe animate recipe-1<?php if ($day==1) { echo ' active-recipe'; } ?>">
                    <img class="rellax animate" data-rellax-speed="-2" data-rellax-xs-speed="1" data-rellax-mobile-speed="1" data-rellax-tablet-speed="1" src="<?php echo $native_path ?>img/recipe_1.jpg" aria-hidden="true" />
                    <h2>CHILI CON CARNE S BATATOM (za 4 osobe)</h2>
                    <ul>
                        <li>2 žlice ulja</li>
                        <li>300 g miješanog mljevenog mesa (svinjetina, junetina)</li>
                        <li>300 g batata (crveni, narezan na kockice)</li>
                        <li><b>1 Fant za chili con carne</b></li>
                        <li><b>150 g konzerviranog Crvenog graha Podravka</b></li>
                        <li>svježi korijandar za posluživanje</li>
                    </ul>
                    <p class="recipe-description">Na zagrijano ulje stavite mljeveno meso i popecite uz miješanje, da tekućina ispari.<br>Dodajte batat i sve zajedno popecite 5 minuta.<br>Ulijte 500 ml mlake vode i sadržaj vrećice Fanta te izmiješajte.<br>Dodajte ocijeđeni crveni grah i pirjajte 10 minuta, uz povremeno miješanje.<br>Jelo pospite narezanim korijandrom i poslužite s kukuruznim kruhom ili popečenim tortiljama.</p>
                    <p class="recipe-advice">Savjet: Batat možete zamijeniti muškatnom bundevom.</p>
                    <p class="recipe-time">Vrijeme pripreme: 25 minuta</p>
                    <p class="recipe-difficulty">Zahtjevnost: jednostavno</p>
                </a>
                <a href="https://www.coolinarika.com/recept/chili-con-carne-s-piletinom/" target="_blank" class="recipe animate recipe-9<?php if ($day==9) { echo ' active-recipe'; } ?>">
                    <img class="rellax animate" data-rellax-speed="-2" data-rellax-xs-speed="1" data-rellax-mobile-speed="1" data-rellax-tablet-speed="1" src="<?php echo $native_path ?>img/recipe2.jpg" aria-hidden="true" />
                    <h2>CHILI CON CARNE S PILETINOM (za 4 osobe)</h2>
                    <ul>
                        <li>2 žlice ulja</li>
                        <li>1 mrkva</li>
                        <li>300 g mljevene piletine ili puretine</li>
                        <li><b>1 Fant za chili con carne</b></li>
                        <li><b>150 g konzerviranog Slanutka Podravka</b></li>
                        <li>100 g ocijeđenog Kukuruza šećerca Podravka</li>
                        <li><b>250 g Basmati riža Zlato Polje</b></li>
                        <li>sol</li>
                        <li>4 žlice kiselog vrhnja</li>
                        <li>tacosi za posluživanje</li>
                    </ul>
                    <p class="recipe-description">Na zagrijano ulje stavite mrkvu narezanu na kockice, kratko popecite i dodajte mljeveno meso.<br>Popecite uz miješanje, da tekućina ispari.<br>Ulijte 500 ml mlake vode i sadržaj vrećice Fanta te izmiješajte.<br>Ulijte 500 ml mlake vode i sadržaj vrećice Fanta te izmiješajte.<br>Dodajte ocijeđeni slanutak i kukuruz šećerac te pirjajte 10 minuta, uz povremeno miješanje.<br>Rižu skuhajte u posoljenoj vodi i ocijedite.<br>Poslužite tako da u zdjelicu stavite nekoliko žlica kuhane riže, preko nje pripremljeno meso, a na kraju žlicu kiselog vrhnja.<br>Ovako pripremljeni chili con carne, umjesto žlicom, grabite tacosima i tako konzumirajte. Okus je fantastičan!</p>
                    <p class="recipe-advice">Savjet: Basmati riža prepoznatljiva je po svom dugom zrnu, kuha se kratko, između 10 i 12 minuta.</p>
                    <p class="recipe-time">Vrijeme pripreme: 25 minuta</p>
                    <p class="recipe-difficulty">Zahtjevnost: jednostavno</p>
                </a>
                <a href="https://www.coolinarika.com/recept/tortilja-kao-topli-sendvic/" target="_blank" class="recipe animate recipe-4<?php if ($day==4) { echo ' active-recipe'; } ?>">
                    <img class="rellax animate" data-rellax-speed="-2" data-rellax-xs-speed="1" data-rellax-mobile-speed="1" data-rellax-tablet-speed="1" src="<?php echo $native_path ?>img/recipe3.jpg" aria-hidden="true" />
                    <h2>TORTILJA KAO TOPLI SENDVIČ (4 osobe)</h2>
                    <ul>
                        <li>3 žlice ulja</li>
                        <li>500 g piletine</li>
                        <li>1 crvena paprika</li>
                        <li>1 tikvica</li>
                        <li>1 mrkva</li>
                        <li><b>1 Fant za tortilje</b></li>
                        <li>4 veće pšenične tortilje</li>
                        <li>120 g polutvrdog sira (edamer, gauda...)</li>
                    </ul>
                    <p class="recipe-description">Na zagrijano ulje stavite piletinu narezanu na trake i popecite na jačoj vatri uz miješanje, dok tekućina ne ispari.<br>Dodajte na tanke trakice narezanu papriku i na tanke ploške narezane tikvice i mrkvu.<br>Popecite na laganoj vatri, uz povremeno miješanje, oko 5 minuta.<br>Dodajte 300 ml mlake vode, umiješajte sadržaj vrećice Fanta te pirjajte na laganoj vatri oko 5 minuta da se sastojci povežu.<br>Na tortilju stavite četvrtinu nadjeva i pospite sirom. Preklopite tortilju i pritisnite.<br>
                        Na zagrijanoj suhoj tavi popecite pripremljenu tortilju s obiju strana i prije posluživanja prerežite je popola (da dobijete 2 komada).<br>
                        Poslužite odmah toplo.</p>
                    <p class="recipe-advice">Savjet: Tortilje možete popeći na suhoj grill tavi ili tavu možete lagano premazati s malo maslinova ulja.</p>
                    <p class="recipe-time">Vrijeme pripreme: 30 minuta</p>
                    <p class="recipe-difficulty">Zahtjevnost: jednostavno</p>
                </a>
                <a href="https://www.coolinarika.com/recept/fantove-enchilade/" target="_blank" class="recipe animate recipe-7<?php if ($day==7) { echo ' active-recipe'; } ?>">
                    <img class="rellax animate" data-rellax-speed="-2" data-rellax-xs-speed="1" data-rellax-mobile-speed="1" data-rellax-tablet-speed="1" src="<?php echo $native_path ?>img/recipe4.jpg" aria-hidden="true" />
                    <h2>FANTOVE ENCHILADE (4 osobe)</h2>
                    <ul>
                        <li>3 žlice ulja</li>
                        <li>500 g piletine</li>
                        <li>1 paprika (crvena ili žuta)</li>
                        <li>1 manja tikvica</li>
                        <li><b>150 g Smeđeg graha Podravka</b></li>
                        <li><b>1 Fant za tortilje</b></li>
                        <li>120 g naribanog polutvrdog sira</li>
                        <li>8 pšeničnih tortilja</li>
                        <li><b>200 ml Passate Podravka</b></li>
                        <li><b>2 žlice naribanog sira Grana padano</b></li>
                    </ul>
                    <p class="recipe-description">Na zagrijano ulje stavite meso narezano na trake i popecite uz miješanje, dok tekućina ne ispari.<br>Dodajte papriku i tikvicu narezanu na kockice pa zajedno kratko popecite.<br>Dodajte ocijeđeni grah, 300 ml mlake vode, umiješajte sadržaj vrećice Fanta te kuhajte na laganoj vatri oko 5 minuta.<br>Tortilje nadjenite nadjevom, na svaku stavite malo sira i savijte.<br>Nadjevene tortilje posložite u nauljenu vatrostalnu posudu i prelijte pasiranom rajčicom.<br> Pospite naribanim sirom i pecite oko 15 minuta u pećnici zagrijanoj na 200 °C.<br> Tople enchilade poslužite sa salatom po želji.</p>
                    <p class="recipe-advice">Savjet: Koristite tortilje srednje veličine.</p>
                    <p class="recipe-time">Vrijeme pripreme: 40 minuta</p>
                    <p class="recipe-difficulty">Zahtjevnost: jednostavno</p>
                </a>
                <a href="https://www.coolinarika.com/recept/1109841/" target="_blank" class="recipe animate recipe-6<?php if ($day==6) { echo ' active-recipe'; } ?>">
                    <img class="rellax animate" data-rellax-speed="-2" data-rellax-xs-speed="1" data-rellax-mobile-speed="1" data-rellax-tablet-speed="1" src="<?php echo $native_path ?>img/recipe5.jpg" aria-hidden="true" />
                    <h2>PILETINA S POVRĆEM IZ PEĆNICE (4 osobe)</h2>
                    <ul>
                        <li>2 žlice maslinova ulja</li>
                        <li>1 poriluk</li>
                        <li>1 tikvica (oko 200 g)</li>
                        <li>400 g pilećeg filea</li>
                        <li><b>1 Fant za piletinu s 4 vrste sira</b></li>
                        <li>250 ml vrhnja za kuhanje</li>
                        <li><b>Zlato polje Basmati riža </b></li>
                    </ul>
                    <p class="recipe-description">Na zagrijano ulje u tavi stavite sitno narezani poriluk i kratko popecite na jačoj vatri.<br>Dodajte na kocke narezanu tikvicu i nastavite peći uz miješanje.<br>Na kraju dodajte piletinu narezanu na štapiće i sve zajedno kratko popecite.<br>Sastojke premjestite u vatrostalnu posudu ili ostavite u istoj ako može ići u pećnicu.<br>Sadržaj vrećice Fanta pomiješajte sa 100 ml vode i vrhnjem te prelijte preko mesa s povrćem.<br>Pecite oko 30 minuta u pećnici zagrijanoj na 200 °C.<br>Zapečenu piletinu poslužite s kuhanom rižom i pospite narezanim koprom.</p>
                    <p class="recipe-advice">Savjet: Poriluk prerežite po dužini i svaku polovicu dobro isperite, a zatim sitno narežite.</p>
                    <p class="recipe-time">Vrijeme pripreme: 45 minuta</p>
                    <p class="recipe-difficulty">Zahtjevnost: jednostavno</p>
                </a>
                <a href="https://www.coolinarika.com/recept/piletina-s-tjesteninom-iz-pecnice/" target="_blank" class="recipe animate recipe-2<?php if ($day==2) { echo ' active-recipe'; } ?>">
                    <img class="rellax animate" data-rellax-speed="-2" data-rellax-xs-speed="1" data-rellax-mobile-speed="1" data-rellax-tablet-speed="1" src="<?php echo $native_path ?>img/recipe6.jpg" aria-hidden="true" />
                    <h2>PILETINA S TJESTENINOM IZ PEĆNICE (4 osobe)</h2>
                    <ul>
                        <li>250 g širokih rezanaca</li>
                        <li>sol</li>
                        <li>1 brokula (oko 400 g)</li>
                        <li>400 g pilećeg filea</li>
                        <li>1 žlica ulja</li>
                        <li><b>1 Fant za piletinu s 4 vrste sira</b></li>
                        <li>250 ml vrhnja za kuhanje</li>
                    </ul>
                    <p class="recipe-description">Tjesteninu skuhajte al dente u posoljenoj vodi, ocijedite i ohladite pod mlazom vode.<br>Stavite je u nauljenu posudu za pečenje.<br>Cvjetove brokule odvojite i blanširajte.<br>Pileći file narežite na kocke i kratko popecite na zagrijanom ulju.<br>Piletinu i brokulu rasporedite po tjestenini.<br>Sadržaj vrećice Fanta pomiješajte sa 100 ml vode i vrhnjem te prelijte preko sadržaja. Pecite oko 20 minuta u pećnici zagrijanoj na 200 °C.<br>Zapečenu piletinu i tjesteninu poslužite toplu, sa salatom po želji.</p>
                    <p class="recipe-advice">Savjet: Poriluk prerežite po dužini i svaku polovicu dobro isperite, a zatim sitno narežite.</p>
                    <p class="recipe-time">Vrijeme pripreme: 40 minuta</p>
                    <p class="recipe-difficulty">Zahtjevnost: jednostavno</p>
                </a>
                <a href="https://www.coolinarika.com/recept/punjene-rolice-u-lovackom-umaku/" target="_blank" class="recipe animate recipe-3<?php if ($day==3) { echo ' active-recipe'; } ?>">
                    <img class="rellax animate" data-rellax-speed="-2" data-rellax-xs-speed="1" data-rellax-mobile-speed="1" data-rellax-tablet-speed="1" src="<?php echo $native_path ?>img/recipe7.jpg" aria-hidden="true" />
                    <h2>PUNJENE ROLICE U LOVAČKOM UMAKU (4 osobe)</h2>
                    <ul>
                        <li>800 g odrezaka svinjskog buta</li>
                        <li><b>1 žlica Vegete</b></li>
                        <li><b>100 g Pancete Podravka</b></li>
                        <li>2 češnja češnjaka</li>
                        <li>100 g svježeg sira</li>
                        <li>1 žlica nasjeckanog peršina</li>
                        <li><b>Ulje</b></li>
                        <li><b>1 Fant za lovački umak</b></li>
                    </ul>
                    <ul>Prilog:
                        <li><b>1 Pire od krumpira Podravka</b></li>
                        <li>200 ml mlijeka</li>
                        <li>Sol</li>
                        <li>150 g mrkve</li>
                    </ul>
                    <p class="recipe-description">Odreske potucite da budu tanki i pospite ih Vegetom. <br>Za nadjev, pancetu sitno nasjeckajte, dodajte joj protisnuti češnjak i svježi sir, a na kraju i nasjeckani peršin.<br>Odreske premažite nadjevom i zarolajte.<br>Pripremljene rolice popecite u tavi na zagrijanom ulju.<br>Maknite ih s vatre i izvadite iz tave.<br>Na masnoću od pečenja ulijte 300 ml mlake vode, dodajte sadržaj Fanta te miješajte pjenjačom dok umak ne zakipi. Kuhajte tri minute na laganoj vatri, neprestano miješajući.<br>Rolice vratite u tavu, u pripremljeni umak, malo pirjajte, ulijte vrhnje i pustite neka još malo kuha.<br>Poslužite s rižom, tjesteninom ili pireom od krumpira.<br></p>
                    <p class="recipe-advice">Savjet: Ako imate vremena, čvarke i špek sitno narežite, okus će biti još bolji.</p>
                    <p class="recipe-time">Vrijeme pripreme: 45 minuta</p>
                    <p class="recipe-difficulty">Zahtjevnost: jednostavno</p>
                </a>
                <a href="https://www.coolinarika.com/recept/1100427/" target="_blank" class="recipe animate recipe-10<?php if ($day==10) { echo ' active-recipe'; } ?>">
                    <img class="rellax animate" data-rellax-speed="-2" data-rellax-xs-speed="1" data-rellax-mobile-speed="1" data-rellax-tablet-speed="1" src="<?php echo $native_path ?>img/brze_lazanje1.jpg" aria-hidden="true" />
                    <h2>BRZE LAZANJE (za 3 osobe)</h2>
                    <ul>
                        <li><b>250 g Penna tjestenine Zlato polje</b></li>
                        <li>Sol</li>
                        <li>3 žlice ulja</li>
                        <li>300 g mljevenog mesa (miješano)</li>
                        <li>100 ml vrhnja za kuhanje</li>
                        <li><b>1 Fant mješavina za lazanje </b></li>
                        <li>2 tikvice</li>
                    </ul>
                    <ul>Preljev:
                        <li>2 jaja</li>
                        <li>Sol</li>
                        <li>Vegeta Maestro crni papar</li>
                        <li>200 ml slatkog vrhnja</li>
                        <li>80 g naribanog polutvrdog sira</li>
                    </ul>
                    <p class="recipe-description">Tjesteninu skuhajte u posoljenoj vodi al dente, ocijedite i ohladite.<br>Na zagrijanom ulju popirjajte mljeveno meso. Dolijte 500 ml mlake vode i 100 ml vrhnja, umiješajte sadržaj vrećice Fanta i pustite neka zakipi.<br>Tikvice narežite na ploške (dugačke) i na nauljenoj tavi kratko popecite da uvenu.<br>U posudu 20 cm × 20 cm stavite penne u nizu da dobijete podlogu. Zatim nanesite red umaka s mesom i po njemu posložite tikvice.<br>Razmutite jaja, posolite, popaprite i umiješajte slatko vrhnje i naribani sir. Prelijte preko složenih lazanja. Pecite 20-ak minuta u zagrijanoj pećnici na 200 °C.<br>Gotove lazanje pustite da se malo ohlade pa izrežite na kocke.</p>
                    <p class="recipe-advice">Savjet: Lazanje možete pripremiti u posudicama za nabujke tako da svatko dobije svoju porciju.</p>
                    <p class="recipe-time">Vrijeme pripreme: 50 minuta</p>
                </a>
                <a href="https://www.coolinarika.com/recept/zapeceni-spageti-s-mozzarellom/" target="_blank" class="recipe animate recipe-5<?php if ($day==5) { echo ' active-recipe'; } ?>">
                    <img class="rellax animate" data-rellax-speed="-2" data-rellax-xs-speed="1" data-rellax-mobile-speed="1" data-rellax-tablet-speed="1" src="<?php echo $native_path ?>img/recipe9.jpg" aria-hidden="true" />
                    <h2>ZAPEČENI ŠPAGETI S MOZZARELLOM (za 4 osobe)</h2>
                    <ul>
                        <li><b>1 mješavina Fanta za špagete bolognese</b></li>
                        <li>3 žlice maslinova ulja</li>
                        <li>300 g miješanog mljevenog mesa</li>
                        <li><b>100 ml Passate Podravka</b></li>
                        <li><b>300 g Špageta s jajima Zlato polje</b></li>
                        <li>250 g mozzarelle</li>
                        <li>Nekoliko listova svježeg bosiljka</li>
                    </ul>
                    <p class="recipe-description">Sadržaj vrećice Fanta otopite u 500 ml mlake vode.<br>Na zagrijano ulje stavite mljeveno meso i popecite.<br> Maknite s vatre, ulijte pasiranu rajčicu, pripremljeni Fant, vratite na vatru, a kad zakipi, pirjajte na srednje jakoj vatri 15 minuta uz povremeno miješanje da dobijete umak.<br>Špagete skuhajte, ocijedite, pa ih umiješajte u pripremljeni umak.<br>Dodajte pola količine mozzarelle, natrgane na manje komade, listiće bosiljka, lagano promiješajte i sve ulijte u nauljenu posudu za pečenje.<br>Po površini posložite ploške mozzarelle i pecite 15-ak minuta u pećnici zagrijanoj na 200 °C.<br>Poslužite toplo.</p>
                    <p class="recipe-advice">Savjet: Umjesto špageta možete koristiti drugu tjesteninu npr. fussille, penne i sl.</p>
                    <p class="recipe-time">Vrijeme pripreme: 40 minuta</p>
                    <p class="recipe-difficulty">Zahtjevnost: jednostavno</p>
                </a>
                <a href="https://www.coolinarika.com/recept/puretina-s-umakom-od-gljiva/" target="_blank" class="recipe animate recipe-8<?php if ($day==8) { echo ' active-recipe'; } ?>">
                    <img class="rellax animate" data-rellax-speed="-2" data-rellax-xs-speed="1" data-rellax-mobile-speed="1" data-rellax-tablet-speed="1" src="<?php echo $native_path ?>img/recipe10.jpg" aria-hidden="true" />
                    <h2>PURETINA SA UMAKOM OD GLJIVA (za 4 osobe)</h2>
                    <ul>
                        <li>600 g purećih odrezaka</li>
                        <li>Sol</li>
                        <li><b>Vegeta Maestro crni papar</b></li>
                        <li><b>Malo Vegeta Maestro ružmarina</b></li>
                        <li>½ limuna</li>
                        <li>2 žlice ulja</li>
                        <li><b>1 Fant umak od gljiva</b></li>
                    </ul>
                    <p class="recipe-description">Pureće odreske posolite, pospite paprom, ružmarinom, nakapajte sokom limuna i prelijte uljem. Ostavite kratko marinirati.<br>Meso stavite na zagrijanu grill tavu i popecite na srednje jakoj vatri sa svake strane.<br>Meso izvadite iz tave i pokriveno ostavite sa strane.<br>U drugoj tavi na zagrijano ulje stavite grubo narezane gljive i kratko popecite uz miješanje.<br>Ulijte 250 ml hladne vode i uspite sadržaj vrećice Fanta. Miješajte pjenjačom dok umak ne zavri.<br>Kuhajte na laganoj vatri 5 minuta neprestano miješajući.<br>Za posluživanje na svaki odrezak stavite 1-2 žlice umaka s gljivama te poslužite sa kuhanim zelenim šparogama i kuhanim krumpirom.</p>
                    <p class="recipe-advice">Savjet: Puretinu dobro zapecite prije nego što je okrenete na drugu stranu. Tako vam se neće zalijepiti za tavu.</p>
                    <p class="recipe-time">Vrijeme pripreme: 20 minuta.</p>
                    <p class="recipe-difficulty">Zahtjevnost: jednostavno</p>
                </a>
            </div>
            <section class="full native-signature">
                <div class="container flex">
                    <div class="full center">
                        <img class="tg-studio" src="<?php echo $native_path ?>img/tg_studio.png" alt="TG Studio logo" />
                    </div>
                    <p class="full center-text">Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Podravka i po najvišim uredničkim standardima Telegram Media Grupe.</p>
                </div>
            </section>
        </div>
        <?php wp_footer(); ?>
        </body>

</html>