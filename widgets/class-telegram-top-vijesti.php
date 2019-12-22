<?php

class Telegram_Top_Vijesti extends WP_Widget
{

    public function __construct()
    {
        parent::__construct('tg_top_vijesti', 'Telegram: Top Vijesti',
            array(
                'description' => 'Urednički odabir pet top članaka u danu',
            ));
    }

    public function widget($args, $instance)
    {  ?>

        <div class="tg-widget rainbow-widget top-vijesti container">
            <div class="tg-widget-body cf">
                <?php
                if(get_field('ukljuci', 749255)) {
                    //izbori
	                $kandidati = get_field('kandidat', 749255);
	                usort($kandidati,function($first,$second){
		                return $first['postotak'] < $second['postotak'];
	                });
                    for ($i = 0; $i<4; $i++) {
                        ?>
                        <article class="article-rainbow-block">
                            <div class="thumb">
                                <div class="overlay"></div>
			                    <img src="<?php echo $kandidati[$i]['slika'] ?>" width="280" height="280">
                            </div>
                            <div class="titles">
                                <h1 class="title">
                                    <a href="<?php echo $kandidati[$i]['link'] ?>">
					                    <?php echo $kandidati[$i]['ime'] ?> - <?php echo $kandidati[$i]['postotak'] ?>%
                                    </a>
                                </h1>

                            </div>
                        </article>
                        <?php
                    }
                    ?>
                    <article class="article-rainbow-block">
                        <div class="thumb" style="height: 236px">
                            <div class="overlay"></div>

                        </div>
                        <div class="titles">
                            <h1 class="title">
                                <a href="https://www.telegram.hr/predsjednicki-izbori-2019/">
				                    Pratite s nama rezultate uživo
                                </a>
                            </h1>

                        </div>
                    </article>
                    <?php
                }
                else {
                    $cache = wp_cache_get('top-vijesti', 'widgets');
                    if (!$cache) {
                        ob_start();
	                    $q = z_get_zone_query( 'masthead', array( 'posts_per_page' => 5 ) );
	                    while ( $q->have_posts() ) {
		                    $q->the_post();
		                    // Rainbow article small
		                    get_template_part( 'templates/articles/article-rainbow-block' );
	                    }
	                    wp_reset_postdata();
	                    $cache = ob_get_clean();
	                    wp_cache_set('top-vijesti', $cache, 'widgets');
                    }
                    echo $cache;
                }
                ?>
            </div>
        </div>

        <?php
    }
}

register_widget( 'Telegram_Top_Vijesti' );
