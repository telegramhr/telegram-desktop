<!DOCTYPE html>
<html lang="hr">
<?php
$native_path = get_stylesheet_directory_uri() . '/templates/native/izbori/2020_parlamentarni/';


$results = get_option('tmg_izbori_2020_total');
$map = [
    'restart' => [
        'alt' => 'RESTART - Davor Bernardić',
        'title' => 'Restart koalicija'
    ],
    'hdz' => [
	    'alt' => 'HDZ - Andrej Plenković',
	    'title' => 'Hrvatska demokratska zajednica'
    ],
    'domovinski' => [
	    'alt' => 'Domovinski pokret - Miroslav Škoro',
	    'title' => 'Domovinski pokret'
    ],
    'mozemo' => [
	    'alt' => 'Možemo - Tomislav Tomašević',
	    'title' => 'Možemo!'
    ],
    'petrina' => [
	    'alt' => 'Nezavisna lista Stipe Petrina',
	    'title' => 'Nezavisna lista Stipe Petrina'
    ],
    'simp' => [
	    'alt' => 'SSIP - Dalija Orešković',
	    'title' => 'Pametno / Fokus / SSIP'
    ],
    'kerum' => [
	    'alt' => 'HGS - Željko Kerum',
	    'title' => 'HGS'
    ],
    'dosta' => [
	    'alt' => 'Dosta Pljačke - Vilibor Sinčić',
	    'title' => 'Dosta pljačke koalicija'
    ],
    'reformisti' => [
	    'alt' => 'Narodna stranka reformisti - Radimir Čačić',
	    'title' => 'Narodna stranka - Reformisti'
    ],
    'most' => [
	    'alt' => 'MOST - Božo Petrov',
	    'title' => 'MOST'
    ],
]
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path ?>tmg_framework.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $native_path ?>style.css" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $native_path ?>functions.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/ere5mls.css">
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
            <h2 class="full">Preliminarni rezultati</h2>
            <div id="refresh-counter">Podaci ažurirani prije 0 minuta. Pokušat ćemo ažurirati podatke za 15 sekundi.</div>
            <div class="full flex relative">                
                <div class="restart-line"><span><?php echo round($results["total"]["restart"]["mandati"]); ?></span> Restart</div>
                <div class="hdz-line">HDZ <span><?php echo round($results["total"]["hdz"]["mandati"]); ?></span></div>
            </div>
            <div class="result-line full flex">
                <div class="slaganje-vlade"></div>
                <div class="restart animate" style="width: <?php echo round($results["total"]["restart"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="mozemo animate" style="width: <?php echo round($results["total"]["mozemo"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="dosta animate" style="width: <?php echo round($results["total"]["dosta"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="simp animate" style="width: <?php echo round($results["total"]["simp"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="reformisti animate" style="width: <?php echo round($results["total"]["reformisti"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="manjine animate" style="width: 5.3%;"></div>
                <div class="petrina animate" style="width: <?php echo round($results["total"]["petrina"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="kerum animate" style="width: <?php echo round($results["total"]["kerum"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="most animate" style="width: <?php echo round($results["total"]["most"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="domovinski animate" style="width: <?php echo round($results["total"]["domovinski"]["mandati"]/151, 4)*100; ?>%;"></div>
                <div class="hdz animate" style="width: <?php echo round($results["total"]["hdz"]["mandati"]/151, 4)*100; ?>%;"></div>
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
                    <?php
                        foreach ($results['total'] as $party => $values) {
                    ?>
                    <div class="full row flex <?php echo $party ?> animate" style="order: <?php echo 151-$values["mandati"]; ?>">
                        <div>
	                        <?php if (isset($map[$party])) { ?>
                                <img src="<?php echo $native_path .'img/lider_'.$party.'.gif' ?>" alt="<?php echo $map[$party]['alt'] ?>"><?php echo $map[$party]['title'] ?>
	                        <?php } else {
		                        echo $party;
	                        }?>
                        </div>
                        <div class="mandati"><?php echo $values["mandati"];?></div>
                        <div class="postotak"><?php echo $values["postotak"];?>%</div>
                        <div></div>
                    </div>
                    <?php } ?>
                    <div class="full row flex manjine animate" style="order: 152;">
                        <div>Zastupnici manjina</div>
                        <div class="mandati">8</div>
                        <div class="postotak"></div>
                        <div></div>
                    </div>
                </div>
                <div class="half flex-responsive center">
                    <?php echo file_get_contents($native_path.'img/hrvatska.svg'); ?>
                </div>
            </div>
            <h2 class="full white-space">Po izbornim jedinicama</h2>
            <div class="full flex relative izborne-jedinice">
                <?php 
                for ($i=1; $i < 11; $i++) { 
                    ?>
                    <div class="half flex-responsive flex">
                        <h3 class="full"><?php echo $i ?>. izborna jedinica</h3>
                        <div class="result-table full flex result-table-<?php echo $i ?>">
                        <div class="full row flex">
                            <div>Lista</div>
                            <div>Mandata</div>
                            <div>Glasova</div>
                            <div></div>
                        </div>
                        <?php foreach ($results[$i] as $party => $values) { ?>
                        <div class="full row flex <?php echo $party ?> animate" style="order: <?php echo (151-$values["mandati"]) ?>">
                            <div>
                                <?php if (isset($map[$party])) { ?>
                                <img src="<?php echo $native_path .'img/lider_'.$party.'.gif' ?>" alt="<?php echo $map[$party]['alt'] ?>"><?php echo $map[$party]['title'] ?>
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
                <?php
                }
                ?>
            </div>
        </div>
    </section>
</div>
<style>
    <?php
        for ($i=1; $i < 9; $i++) { 
           echo '#Layer1_'.$i.'_MEMBER_0_FILL {';
            if (rand(0,10) > 5) {
                echo 'fill: #a8353b !important;';
            }
            else {
                echo 'fill: #3550a8 !important;';
            }
            echo '}';
        }
    ?>
</style>
<?php wp_footer(); ?>
</body>

</html>