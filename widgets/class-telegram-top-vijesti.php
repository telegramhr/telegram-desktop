<?php

class TG_Top_Vijesti extends WP_Widget
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
                $q = z_get_zone_query( 'masthead', array('posts_per_page' => 5));
                while ($q->have_posts()) {
                    $q->the_post();
                    // Rainbow article small
                    get_template_part('templates/articles/article-rainbow-block');
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>

        <?php
    }
}

register_widget( 'TG_Top_Vijesti' );
