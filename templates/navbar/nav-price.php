<nav class="nav-price">
    <div class="container">
        <div class="tg left-action">
            <a href="<?php echo home_url(); ?>">
                <!-- as bg -->
            </a>
        </div>
        <div class="nav-title">
            <?php
            if( get_field('sticker') ) {
                echo get_field('sticker');
            }
            else if (get_field('nadnaslov')) {
	            the_field('nadnaslov');
            }
            else {
                echo get_the_category()[0]->name;
            }
             ?>
        </div>
        <div class="right-action">
            <?php get_template_part('templates/layout/share-box'); ?>
        </div>

    </div>
</nav>