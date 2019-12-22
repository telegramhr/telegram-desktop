<?php
get_header(); ?>

<?php
if( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        ?>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                            echo get_excerpt( get_field('subtitle'), 141 ); ?>
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
                            the_content();

                            $kandidati = get_field('kandidat');
                            usort($kandidati,function($first,$second){
	                            return $first['postotak'] < $second['postotak'];
                            });
                            $faktor = 2;
                            if ($kandidati[0]['postotak'] > 50) {
                                $faktor = 1;
                            }
                            ?>
                                <?php
                                foreach ($kandidati as $kandidat) {
                                    ?><div class="flex" style="width: 100%;">
                                    <img src="<?php echo $kandidat['slika'] ?>" width="150" height="150" class="alignleft">
                                    <div style="flex:1">
                                        <h3><a href="<?php echo $kandidat['link'] ?>"><?php echo $kandidat['ime'] ?></a></h3><br>
                                        <div class="w3-border" style="background-color: #00c2ed">
                                            <div class="w3-blue" style="width:<?php echo $kandidat['postotak']*$faktor ?>%; padding: 3px;"><?php echo $kandidat['postotak'] ?>%</div>
                                        </div>
                                        <p>Broj glasova: <?php echo $kandidat['broj_glasova'] ?></p>
                                    </div>
                                    </div><?php
                                }
                                ?>

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
