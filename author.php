<?php get_header(); ?>

    <div class="single-page author-page">
        <div class="container">

            <div class="author-head">
                <?php
                $author = get_queried_object();
                ?>
                    <div class="author-thumb">
                        <?php
                        if( coauthors_get_avatar($author) ) {
                            echo coauthors_get_avatar($author, 300 );
                            echo '<div class="line"></div>';
                        } else {
                            ?>
                            <div class="initials">
                                <?php
                                echo $author->first_name[0];
                                echo $author->last_name[0]; ?>
                            </div>
                            <?php
                        } ?>
                        <?php // if has mail
                        if( $author->user_email ) {
                        ?>
                        <a href="<?php echo home_url(); ?>/kontaktirajte-nas/?autor=<?php echo $author->user_id; ?>">
                            Kontaktiraj autora
                        </a>
                        <?php
                        } else { ?>
                            <a href="<?php echo home_url(); ?>/kontaktirajte-nas/">
                                Kontaktiraj autora
                            </a>
                        <?php } ?>
                    </div>

                    <div class="author-text">
                        <h1 class="author-name title">
                            <?php echo $author->display_name; ?>
                        </h1>
                        <h2 class="author-meta">
                            <?php
                            if( $author->occupation ) {
                                echo $author->occupation;
                            } else {
                                echo 'Telegram autor';
                            } ?>
                        </h2>
                        <div class="bio">
                            <h3>Biografija autora</h3>
                            <?php
                            if( $author->description ) {
                                echo $author->description;
                            } else {
                                echo $author->display_name.' trenutno radi na biografiji. Bude prvom prilikom. Do tada, pogledajte posljednje članke ovog autora.';
                            } ?>
                        </div>
                    </div>

                </div>

                <div class="author-articles">
                    <h1 class="big-title">
                        Posljednji članci ovog autora
                    </h1>
                    <div class="article-author-container">
                        <?php
                        if ( have_posts() ) {
                            while ( have_posts() ) {
                                the_post();
                                // Article template
                                get_template_part('templates/articles/article-fourth');
                            }
                        }
                        ?>
                    </div>

                    <?php next_posts_link('Još Članaka'); ?>

                </div>

            </div>
        </div>

<?php get_footer(); ?>