<?php get_header(); ?>
<script src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/dobre_odluke/functions.js"></script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/dobre_odluke/style.css?ver=1.1" type="text/css" />
<div class="main-container barracuda">
    <div class="hero center">
        <div class="hero-title wow fadeInRight">
            <h1>Kreni s dobrom odlukom.<br> Evo kako!</h1>
            <h2>Pravo je vrijeme da učiniš nešto za sebe</h2>
        </div>
    </div>
    <div class="container flex">
        <p class="introduction">Dobra odluka vrlo je često pokretač dobrih promjena. Bez obzira je li u pitanju forma, izgled, ljepota, prehrana ili opuštanje, najvažnije je odlučiti i krenuti! U suradnji s hrvatskim vodećim influencericama u sljedeća četiri tjedna donosimo vam rješenja što možete učiniti već danas da biste se osjećali bolje, izgledali ljepše, bili u boljoj formi i opustili se. Napokon donesete pravu odluku za sebe!</p>
    </div>
    <div class="background-shade">


        <div class="week-container">
            <div class="week container full animate">
                <div class="week-header flex">
                    <div class="half flex-responsive center week-header-title">
                        <div class="full">
                            <h4>Hit je biti fit</h4>
                            <h2>Odlučila sam:<br> Od danas vježbam!</h2>
                            <h5>Vaš Super tim su:</h5>
                            <div class="flex">
                                <div class="super-tim flex-responsive">
                                    <img class="tg-studio" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/dobre_odluke/img/ana_tomac.jpg" alt="Ana Tomac" />
                                    <div>
                                        <div class="first-name animate">Ana</div>
                                        <div class="last-name animate">Tomac</div>
                                        <div class="credit-border"></div>
                                        <div class="person-credit">@girlyfitnesshr</div>
                                    </div>
                                </div>
                                <div class="super-tim flex-responsive">
                                    <img class="tg-studio" src="https://super1.telegram.hr/wp-content/uploads/sites/3/2018/10/s1_veronika3.png" alt="Veronika Švob" />
                                    <div>
                                        <div class="first-name animate">Veronika</div>
                                        <div class="last-name animate">Švob</div>
                                        <div class="credit-border"></div>
                                        <div class="person-credit">@super1.hr</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="half flex-responsive">
                        <img class="week-header-img" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/dobre_odluke/img/arena_week1_art.png" alt="Od danas počinjem trčati art" />
                    </div>
                </div>
                <div class="single-body">
                    <div class="flex">
					    <?php

					    $articles = new WP_Query([
						    'posts_per_page' => 4,
						    'tag' => '#mjesecdobrihodluka',
                            'orderby' => 'date',
                            'order' => 'asc',
						    'ignore_sticky_posts' => true,
						    'no_found_rows'       => true,
					    ]);
					    $count = $articles->post_count;
					    // start block loop
					    if ($articles->have_posts()) {
						    while ($articles->have_posts()) {
							    $articles->the_post();
							    get_template_part('templates/articles/article-4');
						    }
					    }
					    $week_articles = [
						    [
							    'title' => 'Fitness influencerica u misiji kako krenuti trčati',
							    'image' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2019/05/s1_arena_dobre_odluke_placeholder.jpg',
						    ],
						    [
							    'title' => 'Super savjetnik za sve one koji ne vole teretanu',
							    'image' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2019/05/s1_arena_dobre_odluke_placeholder.jpg',
						    ],
						    [
							    'title' => 'Shopping vodič: Najbolja sportska oprema iz Arena Centra i Arena Parka',
							    'image' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2019/05/s1_arena_dobre_odluke_placeholder.jpg',
						    ],
						    [
							    'title' => 'Video: 10 vježbi u 10 minuta',
							    'image' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2019/05/s1_arena_dobre_odluke_placeholder.jpg',
						    ]
					    ];
					    while ($count < 4) {
						    ?>
                            <article class="article-4 animate faded">
                                <div class="article-img">
                                    <div>
                                        <img src="<?php echo $week_articles[$count]["image"] ?>" class="attachment-featured-4 size-featured-4 wp-post-image" alt="<?php echo $week_articles[$count]["title"] ?>">
                                    </div>
                                </div>
                                <div class="article-text">
                                    <div class="text-area">
                                        <h3 class="overtitle">Dolazi uskoro</h3>
                                        <h1 class="title">
                                            <div>
											    <?php echo $week_articles[$count]["title"] ?>
                                            </div>
                                        </h1>
                                        <div class="article-meta">
                                        </div>
                                    </div>
                                </div>
                            </article>
						    <?php
						    $count++;
					    }
					    ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="week-container">
            <div class="week container full animate">
                <div class="week-header flex">
                    <div class="half flex-responsive center week-header-title">
                        <div class="full">
                            <h4>Od tanjura do zdravlja</h4>
                            <h2>Odlučila sam:<br> Od danas jedem zdravo!</h2>
                            <h5>Vaš Super tim su:</h5>
                            <div class="flex">
                                <div class="super-tim flex-responsive">
                                    <img class="tg-studio" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/dobre_odluke/img/helena_malogorski.jpg" alt="Helena Malogorski" />
                                    <div>
                                        <div class="first-name animate">Helena</div>
                                        <div class="last-name animate">Malogorski</div>
                                        <div class="credit-border"></div>
                                        <div class="person-credit">@helenarawandlifestyle</div>
                                    </div>
                                </div>
                                <div class="super-tim flex-responsive">
                                    <img class="tg-studio" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/dobre_odluke/img/sonja_svajhler.jpg" alt="Sonja Švajhler" />
                                    <div>
                                        <div class="first-name animate">Sonja</div>
                                        <div class="last-name animate">Švajhler</div>
                                        <div class="credit-border"></div>
                                        <div class="person-credit">@supermame.hr</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="half flex-responsive">
                        <img class="week-header-img" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/dobre_odluke/img/arena_week2_art.png" alt="Od danas jedem zdravo art" />
                    </div>
                </div>
                <div class="single-body">
                    <div class="flex">
                        <?php


                        $articles = new WP_Query([
                            'posts_per_page' => 4,
                        'offset' => 4,
                            'tag' => '#mjesecdobrihodluka',
                            'orderby' => 'date',
                            'order' => 'asc',
                            'ignore_sticky_posts' => true,
                            'no_found_rows'       => true,
                        ]);
                        $count = $articles->post_count;
                        // start block loop
                        if ($articles->have_posts()) {
                            while ($articles->have_posts()) {
                                $articles->the_post();
                                get_template_part('templates/articles/article-4');
                            }
                        }
                        $count = $articles->post_count;
                        $week_articles = [
                            [
                                'title' => 'Dobri savjeti foodie influencerice i recept za veganski čokoladni brownies',
                                'image' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2019/05/s1_arena_dobre_odluke_placeholder.jpg',
                            ],
                            [
                                'title' => 'Muke Supermame Sonje sa zdravom prehranom djece',
                                'image' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2019/05/s1_arena_dobre_odluke_placeholder.jpg',
                            ],
                            [
                                'title' => 'Shopping vodič: Super zdrave ideje iz trgovina Arena Centra i Arena Parka',
                                'image' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2019/05/s1_arena_dobre_odluke_placeholder.jpg',
                            ],
                            [
                                'title' => 'Top 10 zdravih recepata',
                                'image' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2019/05/s1_arena_dobre_odluke_placeholder.jpg',
                            ]
                        ];
                        while ($count < 4) {
	                        ?>
                            <article class="article-4 animate faded">
                                <div class="article-img">
                                    <div>
                                        <img src="<?php echo $week_articles[$count]["image"] ?>" class="attachment-featured-4 size-featured-4 wp-post-image" alt="<?php echo $week_articles[$count]["title"] ?>">        </div>
                                </div>
                                <div class="article-text">
                                    <div class="text-area">
                                        <h3 class="overtitle">Dolazi uskoro</h3>
                                        <h1 class="title">
                                            <div>
						                        <?php echo $week_articles[$count]["title"] ?>
                                            </div>
                                        </h1>
                                        <div class="article-meta">
                                        </div>
                                    </div>
                                </div>
                            </article>
	                        <?php
                            $count++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="week-container">
            <div class="week container full animate">
                <div class="week-header flex">
                    <div class="half flex-responsive center week-header-title">
                        <div class="full">
                            <h4>Tu je ljepota</h4>
                            <h2>Odlučila sam:<br> Od danas njegujem<br> svoje tijelo!</h2>
                            <h5>Vaš Super tim su:</h5>
                            <div class="flex">
                                <div class="super-tim flex-responsive">
                                    <img class="tg-studio" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/dobre_odluke/img/lorin_nukic.jpg" alt="Lorin Nukić" />
                                    <div>
                                        <div class="first-name animate">Lorin</div>
                                        <div class="last-name animate">Nukić</div>
                                        <div class="credit-border"></div>
                                        <div class="person-credit">@lorainne7</div>
                                    </div>
                                </div>
                                <div class="super-tim flex-responsive">
                                    <img class="tg-studio" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/dobre_odluke/img/matea_pavic.jpg" alt="Matea Pavić" />
                                    <div>
                                        <div class="first-name animate">Matea</div>
                                        <div class="last-name animate">Pavić</div>
                                        <div class="credit-border"></div>
                                        <div class="person-credit">@classifiedbeauty</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="half flex-responsive">
                        <img class="week-header-img" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/dobre_odluke/img/arena_week3_art.png" alt="Od danas njegujem svoje tijelo art" />
                    </div>
                </div>
                <div class="single-body">
                    <div class="flex">
                        <?php


                        $articles = new WP_Query([
                            'posts_per_page' => 4,
                            'offset' => 8,
                            'tag' => '#mjesecdobrihodluka',
                            'orderby' => 'date',
                            'order' => 'asc',
                            'ignore_sticky_posts' => true,
                            'no_found_rows'       => true,
                        ]);
                        $count = $articles->post_count;
                        // start block loop
                        if ($articles->have_posts()) {
                            while ($articles->have_posts()) {
                                $articles->the_post();
                                get_template_part('templates/articles/article-4');
                            }
                        }
                        $count = $articles->post_count;
                        $week_articles = [
                            [
                                'title' => 'Insiderske beauty tajne jedne bloggerice',
                                'image' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2019/05/s1_arena_dobre_odluke_placeholder.jpg',
                            ],
                            [
                                'title' => 'Celulita se ne sramimo, ali evo kako ga možemo ublažiti',
                                'image' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2019/05/s1_arena_dobre_odluke_placeholder.jpg',
                            ],
                            [
                                'title' => 'Shopping vodič: Ultimativni proizvodi za njegu iz Arene Centra i Arene Park',
                                'image' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2019/05/s1_arena_dobre_odluke_placeholder.jpg',
                            ],
                            [
                                'title' => 'Video: 10 kozmetičkih proizvoda po preporuci poznate youtuberice',
                                'image' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2019/05/s1_arena_dobre_odluke_placeholder.jpg',
                            ]
                        ];
                        while ($count < 4) {
                            ?>
                            <article class="article-4 animate faded">
                                <div class="article-img">
                                    <div>
                                        <img src="<?php echo $week_articles[$count]["image"] ?>" class="attachment-featured-4 size-featured-4 wp-post-image" alt="<?php echo $week_articles[$count]["title"] ?>">        </div>
                                </div>
                                <div class="article-text">
                                    <div class="text-area">
                                        <h3 class="overtitle">Dolazi uskoro</h3>
                                        <h1 class="title">
                                            <div>
                                                <?php echo $week_articles[$count]["title"] ?>
                                            </div>
                                        </h1>
                                        <div class="article-meta">
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php
                            $count++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="week-container">
            <div class="week container full animate">
                <div class="week-header flex">
                    <div class="half flex-responsive center week-header-title">
                        <div class="full">
                            <h4>Zona opuštanja</h4>
                            <h2>Odlučila sam:<br> Od danas sam nova ja!</h2>
                            <h5>Vaša Super savjetnica je:</h5>
                            <div class="flex">
                                <div class="super-tim flex-responsive">
                                    <img class="tg-studio" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/dobre_odluke/img/alis_maric.jpg" alt="Alis Marić" />
                                    <div>
                                        <div class="first-name animate">Alis</div>
                                        <div class="last-name animate">Marić</div>
                                        <div class="credit-border"></div>
                                        <div class="person-credit">@citaj_knjigu</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="half flex-responsive">
                        <img class="week-header-img" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/dobre_odluke/img/arena_week4_art.png" alt="Od danas sam nova ja art" />
                    </div>
                </div>
                <div class="single-body">
                    <div class="flex">
                        <?php


                        $articles = new WP_Query([
                            'posts_per_page' => 4,
                        'offset' => 12,
                            'tag' => '#mjesecdobrihodluka',
                            'orderby' => 'date',
                            'order' => 'asc',
                            'ignore_sticky_posts' => true,
                            'no_found_rows'       => true,
                        ]);
                        $count = $articles->post_count;
                        // start block loop
                        if ($articles->have_posts()) {
                            while ($articles->have_posts()) {
                                $articles->the_post();
                                get_template_part('templates/articles/article-4');
                            }
                        }
                        $count = $articles->post_count;
                        $week_articles = [
                            [
                                'title' => 'Kako postati bolja osoba sebi i drugima',
                                'image' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2019/05/s1_arena_dobre_odluke_placeholder.jpg',
                            ],
                            [
                                'title' => 'Kućni spa bez velike investicije',
                                'image' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2019/05/s1_arena_dobre_odluke_placeholder.jpg',
                            ],
                            [
                                'title' => 'Shopping vodič: Stvari koje će ti pomoći da se opustiš',
                                'image' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2019/05/s1_arena_dobre_odluke_placeholder.jpg',
                            ],
                            [
                                'title' => 'Savjetnik: 10 dobrih načina kako savladati stres',
                                'image' => 'https://super1.telegram.hr/wp-content/uploads/sites/3/2019/05/s1_arena_dobre_odluke_placeholder.jpg',
                            ]
                        ];
                        while ($count < 4) {
                            ?>
                            <article class="article-4 animate faded">
                                <div class="article-img">
                                    <div>
                                        <img src="<?php echo $week_articles[$count]["image"] ?>" class="attachment-featured-4 size-featured-4 wp-post-image" alt="<?php echo $week_articles[$count]["title"] ?>">        </div>
                                    </div>
                                <div class="article-text">
                                    <div class="text-area">
                                            <h3 class="overtitle">Dolazi uskoro</h3>
                                            <h1 class="title">
                                                <div>
                                                    <?php echo $week_articles[$count]["title"] ?>
                                                </div>
                                            </h1>
                                        <div class="article-meta">
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php
                            $count++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="native-signature wow fadeInUp">
        <div class="container flex center">
            <img class="tg-studio" src="<?php echo get_stylesheet_directory_uri() ?>/templates/native/arena/dobre_odluke/img/tg_studio.png" alt="TG Studio logo" />
            <p>Producirano u radionici TG Studija, Telegramove in-house agencije za nativni marketing, u suradnji s partnerom Arena Centar i po najvišim uredničkim standardima Telegram Media Grupe.</p>
        </div>
    </div>
</div>
<?php get_footer();
