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
                    <h3 class="overtitle"><?php the_category(); ?></h3>
                    <h1 class="title">
                        <?php the_title(); ?>
                    </h1>
                    <h2 class="subtitle">
                        <?php
                        echo get_excerpt( get_field('subtitle'), 141 ); ?>
                    </h2>
                </div>
                <div class="gallery-container">

                    <div class="gallery-nav">
                        <div class="arrow arrow-left prev-img" ><i class="fa fa-angle-left"></i> Prethodna</div>
                        <div class="slide-num">Slika: <span>1/9</span></div>
                        <div class="arrow arrow-right next-img" >Sljedeća <i class="fa fa-angle-right"></i></div>
                    </div>

                    <div class="gallery-meta">
                        <h2 class="caption"></h2>
                        <div class='photo-author'></div>
                    </div>
                    <a class="arrow arrow-img arrow-left prev-img" ><i class="fa fa-angle-left"></i></a>
                    <a class="arrow arrow-img arrow-right next-img" ><i class="fa fa-angle-right"></i></a>
                    <div class="gallery-slider">
                        <?php the_content(); ?>
                    </div>

                    <div class="sidebar gallery-sidebar">
                        <?php dynamic_sidebar('sidebar-gallery'); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
}

get_footer();
