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
                    DONOSI PLIVIT&#174; Magnezij
                </div>
                <div class="tg-widget-body">
			        <?php
			        $articles = [
				        [
					        'title' => 'Prvi put u Hrvatskoj: Vodeći doktori i farmaceuti otkrivaju kako obnoviti zdravlje nakon izolacije',
					        'image' => 808828,
					        'link'  => 'https://doktor-online.hr/'
				        ],
				        [
					        'title' => 'Naši stručnjaci za zdravlje u velikom specijalu: Osam trenutno najboljih namirnica za žene i muškarce ',
					        'image' => 808829,
					        'link'  => 'https://doktor-online.hr/'
				        ],
				        [
					        'title' => 'Ugledni kardiokirurg analizira: I o vašem stavu o životu ovisi hoćete li se zaštititi od najopasnije bolesti',
					        'image' => 808830,
					        'link'  => 'https://doktor-online.hr/'
				        ],
				        [
					        'title' => 'Vitamin D važan je i za najmlađe: Pedijatrica je pronašla dobitnu formulu za vaše dijete, provjerite',
					        'image' => 808831,
					        'link'  => 'https://doktor-online.hr/'
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
