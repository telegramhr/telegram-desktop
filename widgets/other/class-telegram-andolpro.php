<?php

class Telegram_AndolPro extends WP_Widget
{

    public function __construct()
    {
        parent::__construct('tg_andolpro', 'Telegram: AndolPro',
            array(
                'description' => 'AndolPro',
            ));
    }

    public function widget($args, $instance)
    {
	        ?>
            <div class="tg-widget rainbow-widget procitajte-danas">
                <div class="tg-widget-head" style="text-transform: none;">
                    DONOSI ANDOL&#174; PRO
                </div>
                <div class="tg-widget-body">
			        <?php
			        $articles = [
				        [
					        'title' => 'KONZILIJ VODEĆIH LIJEČNIKA I NUTRICIONISTA ISTRAŽUJE: Evo kako povećati otpornost na viruse!',
					        'image' => 808828,
					        'link'  => 'https://doktor-online.hr/'
				        ],
				        [
					        'title' => 'Hrvatska liječnica otkriva: Imunitet oboljelih od šećernih bolesti i uloga vitamina D i Magnezija',
					        'image' => 809636,
					        'link'  => 'https://doktor-online.hr/dossier-kako-ojacati-imunitet-oboljelih-od-secerne-bolesti-i-koja-je-uloga-vitamina-d-i-magnezija/'
				        ],
				        [
					        'title' => 'Kardiologinja s KBC-a Zagreb: Saznajte u kakvom je sada stanju vaš najsnažniji mišić i kako ga zaštititi',
					        'image' => 809637,
					        'link'  => 'https://doktor-online.hr/kako-zastititi-zdravlje-srcanih-bolesnika-7-preporuka-vodece-kardiologinje-i-1-razlog-zasto-ne-smijete-propustiti-terapiju/'
				        ],
				        [
					        'title' => 'Jedan od naših najistaknutijih psihijatara: Ne potiskujte stres, pogledajte što vam se sve može dogoditi',
					        'image' => 809638,
					        'link'  => 'https://doktor-online.hr/kako-krenuti-dalje-nakon-pandemije-pobijedite-zatvorenika-proslosti-u-sebi-uz-ova-4-koraka/'
				        ],
				        [
					        'title' => 'Prvi donosimo: "Zid zahvalnosti" za potporu svim liječnicima koji u pandemiji brinu o nama ',
					        'image' => 808832,
					        'link'  => 'https://doktor-online.hr/'
				        ],
			        ];
			        foreach ($articles as $article) {
				        ?>
                        <article class="article-rainbow-small andolpro">
                            <div class="thumb">
                                <div class="overlay"></div>
						        <?php
                                echo wp_get_attachment_image($article['image'], 'article-rainbow-small')
						         ?>
                            </div>
                            <div class="titles">
                                <h1 class="title">
                                    <a href="<?php echo esc_url($article['link']) ?>" target="_blank">
								        <?php echo esc_html($article['title']) ?>
                                    </a>
                                </h1>
                                <div class="article-meta">
                                </div>
                            </div>
                        </article>
                        <?php
			        }
			        ?>
                </div>
            </div>

	        <?php
    }

}

register_widget( 'Telegram_AndolPro' );
