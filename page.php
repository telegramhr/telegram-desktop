<?php
get_header(); ?>

<?php
if( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        ?>

        <div class="single-page container">

            <div class="single-body">
                <!-- Single Content -->
                <div class="single-content">

                    <div class="single-head">
                        <h1 class="title">
                            <?php the_title(); ?>
                        </h1>
                        <h2 class="subtitle">
                            <?php
                            echo get_excerpt( get_post_meta( get_the_ID(), 'subtitle', true ) , 141 ); ?>
                        </h2>
                    </div>

                    <div class="content-container">

                        <div class="thumb">
                            <?php
                            // 840x530 px
                            the_post_thumbnail('single-v1'); ?>
                        </div>
                        <div class="the-content">
                            <?php
                            // Article content
                            the_content(); ?>
                        </div>
                    </div>
                </div>

                <!-- Single Sidebar -->
                <div class="sidebar single-sidebar">
                    <?php the_widget('Telegram_Banner_Widget'); ?>
                </div>

            </div>

        </div>


        <?php
    }
}
?>
    </div>

<?php
get_footer();
