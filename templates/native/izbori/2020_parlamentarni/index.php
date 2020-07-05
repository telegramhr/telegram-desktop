<!DOCTYPE html>
<html lang="hr">

<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/izbori/2020_parlamentarni/';

$opisi_izbornih = array(
    1 => 'I. izborna jedinica obuhvaća sjeverozapadni dio Zagrebačke županije te dio centra i zapada Grada Zagreba.',
    2 => 'II. izborna jedinica obuhvaća istočni dio Zagrebačke županije, Koprivničko-križevačku županiju, Bjelovarsko-bilogorsku županiju i istočni dio Grada Zagreba.',
    3 => 'III. izborna jedinica obuhvaća Krapinsko-zagorsku županiju, Varaždinsku županiju i Međimursku županiju.',
    4 => 'IV. izborna jedinica obuhvaća Virovitičko-podravsku županiju i Osječko-baranjsku županiju.',
    5 => 'V. izborna jedinica obuhvaća Požeško-slavonsku županiju, Brodsko-posavsku županiju i Vukovarsko-srijemsku županiju.',
    6 => 'VI. izborna jedinica obuhvaća jugoistočni dio Zagrebačke županije, Sisačko-moslavačku županiju i jugoistočni dio Grada Zagreba.',
    7 => 'VII. izborna jedinica obuhvaća jugozapadni dio Zagrebačke županije, Karlovačku županiju, istočni dio Primorsko-goranske županije i južni dio Grada Zagreba.',
    8 => 'VIII. izborna jedinica obuhvaća područje Istarske županije i zapadni dio Primorsko-goranske županije.',
    9 => 'IX. izborna jedinica obuhvaća Ličko-senjsku županiju, Zadarsku županiju, Šibensko-kninsku županiju i sjeverni dio Splitsko-dalmatinske županije.',
    10 => 'X. izborna jedinica obuhvaća južni dio Splitsko-dalmatinske županije i Dubrovačko-neretvansku županiju.'
);
$results = get_option('tmg_izbori_2020_total');
$map = [
	1 => [
		'alt' => 'RESTART - Davor Bernardić',
		'title' => 'Restart koalicija',
        'class' => 'restart'
	],
	20 => [
		'alt' => 'HDZ - Andrej Plenković',
		'title' => 'HDZ',
		'class' => 'hdz'
	],
	19 => [
		'alt' => 'Domovinski pokret - Miroslav Škoro',
		'title' => 'Domovinski pokret',
		'class' => 'domovinski'
	],
	2 => [
		'alt' => 'Možemo - Tomislav Tomašević',
		'title' => 'Možemo!',
		'class' => 'mozemo'
	],
	15 => [
		'alt' => 'Nezavisna lista Stipe Petrina',
		'title' => 'Nezavisna lista Stipe Petrina',
		'class' => 'petrina'
	],
	7 => [
		'alt' => 'SSIP - Dalija Orešković',
		'title' => 'Pametno / Fokus / SSIP',
		'class' => 'simp'
	],
	16 => [
		'alt' => 'HGS - Željko Kerum',
		'title' => 'HGS',
		'class' => 'kerum'
	],
    12 => [
        'alt' => 'HNS - Predrag Štromar',
        'title' => 'HNS',
        'class' => 'hns'
    ],
	11 => [
		'alt' => 'Dosta Pljačke - Vilibor Sinčić',
		'title' => 'Dosta pljačke koalicija',
		'class' => 'dosta'
	],
	9 => [
		'alt' => 'Narodna stranka reformisti - Radimir Čačić',
		'title' => 'Narodna stranka - Reformisti',
		'class' => 'reformisti'
	],
    17 => [
            'alt' => '365 - Milan Bandić',
            'class' => 365,
        'title' => '365 - Stranka Rada i Solidarnosti'
    ],
	18 => [
		'alt' => 'MOST - Božo Petrov',
		'title' => 'MOST',
		'class' => 'most'
	],
    10 => [
            'class' => 'manjine'
    ]
];

ksort($map);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/wow/wow.min.js' ?>"></script>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css?ver=2.1" type="text/css" />
    <script src="<?php echo $native_path ?>functions.js?v=14"></script>
    <link rel="stylesheet" href="https://use.typekit.net/ere5mls.css">
    <meta http-equiv="refresh" content="300">
</head>
<body>
<div id="notification">Dogodila se greška pri dohvaćanju novih podataka. Telegram će pokušati opet za 15 sekundi, a do tada će na stranici ostati postojeći rezultati.</div>
<div class="main-container flex">
    <div class="hero full flex relative" style="background-image: url('<?php echo $native_path ?>img/glave.jpg');">
        <a href="https://telegram.hr/" class="header-logos center full">
            <img src="<?php echo $native_path ?>img/telegram_logo.svg" alt="Telegram Logo">
        </a>
        <div class="hero-title full">
            <div class="container flex relative">
                <div class="full flex flex-responsive">
                    <h1 class="full">Izbori 2020.</h1>
                    <h2 class="full">Uz Telegram pratite rezultate uživo cijelu izbornu noć.</h2>
                </div>
            </div>
        </div>
    </div>
    <section class="full flex">
        <div class="container flex relative">
            <h2 class="full"><?php echo $results['dip']?'Uživo: rezultati izbora':'Izlazne ankete' ?></h2>
            <div class="mini-data"><span id="data-counted-total">Prebrojano <?php echo $results["counted"]; ?>% glasova. </span><span id="data-age">Podaci ažurirani u <?php echo $results["age"]; ?>h. </span><span id="data-refresh">Pokušati ćemo ažurirati podatke za 15 sekundi.</span></div>
            <div class="full flex relative">                
                <div class="restart-line"><span><?php echo round($results["total"]["restart"]["mandati"]); ?></span> Restart</div>
                <div class="hdz-line">HDZ <span><?php echo round($results["total"]["hdz"]["mandati"]); ?></span></div>
            </div>
            <div class="result-line full flex">
                <div class="slaganje-vlade"></div>
                <?php foreach($map as $party) {
                    if ($party['class'] == 'manjine') {
                        ?><div class="manjine animate" style="width: 5.3%;"></div><?php
                    }
                    if (!$results["total"][$party['class']]["mandati"]) {
	                    continue;
                    }
                    ?>
                <div class="<?php echo $party['class'] ?> animate" style="width: <?php echo round($results["total"][$party['class']]["mandati"]/151, 4)*100; ?>%;"></div>
                <?php
                } ?>
            </div>
            <div class="full result-line-text center-text">76 mandata za većinu</div>
            <div class="full flex">
                <div class="half flex-responsive flex result-table total-results">
                    <div class="full row flex">
                        <div>Lista</div>
                        <div>Mandata</div>
                        <div>Glasova</div>
                        <div></div>
                    </div>
                    <?php foreach ($map as $party) {
	                    if (!$results["total"][$party['class']]["mandati"]) {
		                    continue;
	                    }
                        ?>
                    <div class="full row flex <?php echo $party['class'] ?> animate" style="order: <?php echo 100-$results["total"][$party['class']]["mandati"]; ?>">
                        <div><img src="<?php echo $native_path ?>img/lider_<?php echo $party['class'] ?>.gif" alt="<?php echo $party['alt'] ?>"><?php echo $party['title'] ?></div>
                        <div class="mandati"><?php echo $results["total"][$party['class']]["mandati"];?></div>
                        <div class="postotak"><?php echo $results["total"][$party['class']]["postotak"];?>%</div>
                        <div></div>
                    </div>
                    <?php } ?>
                      <div class="full row flex manjine animate" style="order: 100;">
                        <div>Zastupnici manjina</div>
                        <div class="mandati">8</div>
                        <div class="postotak"></div>
                        <div></div>
                    </div>
                </div>
                <div class="half flex-responsive center main-karta">
                    <?php echo file_get_contents($native_path.'img/karta.svg'); ?>
                </div>
            </div>
            <h3 class="full white-space">Po izbornim jedinicama</h3>
            <div class="full flex relative izborne-jedinice">
                <?php 
                for ($i=1; $i < 11; $i++) {
                    ?>
                    <div class="half flex-responsive flex">
                        <div class="full flex">
                            <div class="two-thirds">
                            <h4 class="full"><?php echo $i ?>. izborna jedinica</h4>
                            <div class="full mini-data"><span id="data-counted-<?php echo $i ?>">Prebrojano <?php echo $results[$i]["counted"] ?>% glasova. </span></div>
                             <?php echo $opisi_izbornih[$i] ?>
                            </div>
                            <div class="third flex-responsive center karta-<?php echo $i ?>">
                                <?php echo file_get_contents($native_path.'img/karta.svg') ?>
                            </div>
                        </div>
                        <div class="result-table full flex result-table-<?php echo $i ?>">
                        <div class="full row flex">
                            <div>Lista</div>
                            <div>Mandata</div>
                            <div>Glasova</div>
                            <div></div>
                        </div>
                            <?php foreach ($results[$i]['party'] as $party => $values) {
                                ?>
                        <div class="full row flex <?php echo $party ?> animate" style="order: <?php echo (100-$values["mandati"]) ?>">
                            <div>
	                            <?php
	                            $neededObject = array_filter(
		                            $map,
		                            function ($e) use (&$party) {
			                            return $e['class'] == $party;
		                            }
	                            );

	                            if (sizeof($neededObject)) {
		                            $neededObject = array_pop($neededObject);
		                            ?>
                                    <img src="<?php echo $native_path .'img/lider_'.$party.'.gif' ?>" alt="<?php echo $neededObject['alt'] ?>"><?php echo $neededObject['title'] ?>
	                            <?php } else {
		                            echo $party;
	                            }?>
                            </div>
                            <div class="mandati"><?php echo $values["mandati"] ?></div>
                            <div class="postotak"><?php echo $values["postotak"] ?>%</div>
                            <div></div>
                        </div>
                            <?php } ?>
                    </div>
                </div><?php
                }
                ?>
                <div class="half flex-responsive flex">
                    <div class="full flex">
                        <div class="two-thirds">
                            <h4 class="full">11. izborna jedinica</h4>
                            <div class="full mini-data"><span id="data-counted-11">Prebrojano <?php echo $results[11]["counted"] ?>% glasova. </span></div>
                            XI. izborna jedinica je zasebna izborna jedinica za izbor zastupnika koje biraju hrvatski državljani koji nemaju prebivalište u Republici Hrvatskoj.
                        </div>
                    </div>
                    <div class="result-table full flex result-table-11">
                        <div class="full row flex">
                            <div>Lista</div>
                            <div>Mandata</div>
                            <div>Glasova</div>
                            <div></div>
                        </div>
			            <?php foreach ($results[11]['party'] as $party => $values) { ?>
                            <div class="full row flex <?php echo $party ?> animate" style="order: <?php echo (100-$values["mandati"]) ?>">
                                <div>
						            <?php
						            $neededObject = array_filter(
							            $map,
							            function ($e) use (&$party) {
								            return $e['class'] == $party;
							            }
						            );
                                    if (sizeof($neededObject)) {
                                        $neededObject = array_pop($neededObject);
                                        ?>
                                        <img src="<?php echo $native_path .'img/lider_'.$party.'.gif' ?>" alt="<?php echo $neededObject['alt'] ?>"><?php echo $neededObject['title'] ?>
						            <?php } else {
							            echo $party;
						            }?>
                                </div>
                                <div class="mandati"><?php echo $values["mandati"] ?></div>
                                <div class="postotak"><?php echo $values["postotak"] ?>%</div>
                                <div></div>
                            </div>
			            <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<style>
    <?php
        for ($i=1; $i < 11; $i++) { 
           echo '.main-karta #izborna_x5F_'.$i.' path, .karta-'.$i.' #izborna_x5F_'.$i.' path {
               position: relative; z-index: 2; ';
            if ($results[$i]['party']["mozemo"]["mandati"] >= $results[$i]['party']["restart"]["mandati"] && $results[$i]['party']["mozemo"]["mandati"] >= $results[$i]['party']["hdz"]["mandati"]) {
                echo 'fill: #35a843 !important;';
            }
            else if ($results[$i]['party']["restart"]["mandati"] > $results[$i]['party']["hdz"]["mandati"]) {
                echo 'fill: #a8353b !important;';
            }
            else if ($results[$i]['party']["hdz"]["mandati"] > $results[$i]['party']["restart"]["mandati"]) {
                echo 'fill: #3550a8 !important;';
            }
            else if ($results[$i]['party']["hdz"]["mandati"] == $results[$i]['party']["restart"]["mandati"]) {
                echo 'fill: purple !important;';
            }
            echo '}';
        }
    ?>
</style>

<div class="tg-widget tg-ne-propusti">
    <div class="tg-widget-head big-title">
        Ostanite uz telegramov program
    </div>
    <div class="tg-widget-body flex">
		<?php
		$args = array(
			'posts_per_page' => 8,
			'tag' => 'izbori2020',
			'post_type' => ['post', 'price'],
			'no_found_rows' => true,
			'ignore_sticky_posts' => true,
			'post_status' => 'publish'
		);
		$q = new WP_Query($args);
		while($q->have_posts()) {
			$q->the_post();
			if ( wp_is_mobile() ) {
				get_template_part('templates/articles/article-1');
			} else {
				get_template_part('templates/articles/article-fourth');
			}
		}
		wp_reset_postdata();
		?>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>