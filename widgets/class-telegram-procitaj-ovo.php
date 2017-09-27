<?php

class Telegram_Procitaj_Ovo extends WP_Widget
{

    public function __construct()
    {
        parent::__construct('tg_procitaj_ovo', 'Telegram: Pročitaj i ovo',
            array(
                'description' => 'Vezani članci na sam članak.',
            ));
    }

    public function widget($args, $instance)
    { ?>

        <div class="tg-widget single-widget tg-procitaj-ovo">
            <div class="tg-widget-body">
                <?php
                global $post;
                //$terms = wp_get_post_terms($post->ID, 'post_tag', array('fields' => 'ids'));
                $args = array(
                    'posts_per_page' => 3,
                    'post_type' => array('post', 'fotogalerije', 'video', 'price'),
                    'post__not_in' => array(intval($post->ID)),
                    'no_found_rows' => true,
                    'ignore_sticky_posts' => true,
                    'post_status' => 'publish'
                    /*
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'post_tag',
                            'field' => 'id',
                            'terms' => $terms
                        )
                    ) */
                );
                $q = new WP_Query($args);
                while ($q->have_posts()) {
                    $q->the_post();
                    ?>
                    <li>
                        <i class="fa fa-angle-right"></i>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </li>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div> <!-- End Widget-Body -->
        </div>

        <?php
    }

}

register_widget( 'Telegram_Procitaj_Ovo' );
