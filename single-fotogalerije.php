<?php
get_header(); ?>

<?php
if( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        ?>
        <div class="single-page gallery-page">
            <div class="container">
                <div class="gallery-head">
                    <h3 class="overtitle"><?php
	                    if (get_post_meta( get_the_ID(), 'nadnaslov', true ) ) {
		                    the_field('nadnaslov');
	                    }
	                    else {
		                    the_category();
	                    }
	                    ?></h3>
                    <h1 class="title">
                        <?php the_title(); ?>
                    </h1>
                    <h2 class="subtitle">
                        <?php
                        echo get_excerpt( get_post_meta( get_the_ID(), 'subtitle', true ) , 141 ); ?>
                    </h2>
                </div>
                <div class="gallery-container">

                    <div class="gallery-nav">
                        <div class="arrow arrow-left prev-img" ><i class="fa fa-angle-left"></i> Prethodna</div>
                        <div class="slide-num">Slika: <span></span></div>
                        <div class="arrow arrow-right next-img" >Sljedeća <i class="fa fa-angle-right"></i></div>
                    </div>

                    <div class="gallery-meta">
                        <h2 class="caption"></h2>
                        <div class='photo-author'></div>
                    </div>
                    <a class="arrow arrow-img arrow-left prev-img" ><i class="fa fa-angle-left"></i></a>
                    <a class="arrow arrow-img arrow-right next-img" ><i class="fa fa-angle-right"></i></a>
                    <div>
                        <?php the_content(); ?>
                    </div>
                    <div class="sidebar gallery-sidebar">
                        <?php dynamic_sidebar('sidebar-gallery'); ?>
                    </div>
                </div>
            </div>
	        <?php
	        the_widget('Telegram_Banner_Widget', array('size' => 'telegram_desktop_billboard_v2'));
	        the_widget('Telegram_Midas_Widget', ['id' => 657, 'script' => '657']);
	        ?>
        </div>

        <?php
    }
}

get_footer();
