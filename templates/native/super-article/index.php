<!DOCTYPE html>
<html lang="hr">
<?php
/**
 * Super Article — scrollytelling native template
 *
 * Renders fullscreen sections from ACF Flexible Content field "sa_sections".
 * Set native_template to "super-article/index" in the Native oprema fields.
 */

// Native path — uncomment the appropriate line for your environment
// $native_path = get_stylesheet_directory_uri() . '/templates/native/super-article';
$native_path = 'https://www.telegram.hr/wp-content/themes/telegram2-desktop/templates/native/super-article';
// $native_path = 'https://staging.telegram.hr/wp-content/themes/telegram-desktop/templates/native/super-article';
 $native_path = 'https://telegram-wp.ddev.site/wp-content/themes/telegram-desktop/templates/native/super-article';

$version = 1;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo $native_path; ?>/dist/style.css?v=<?php echo $version; ?>">
    <script src="<?php echo $native_path; ?>/dist/main.js?v=<?php echo $version; ?>" defer></script>
</head>
<body class="bg-black">
    <?php do_action('telegram_body_start'); ?>

    <!-- Scroll progress bar -->
    <div class="sa-progress" id="sa-progress">
        <div class="sa-progress__bar" id="sa-progress-bar"></div>
    </div>

    <main class="sa-article">
        <?php
        $section_index = 0;

        if (have_rows('sa_sections')) :
            while (have_rows('sa_sections')) : the_row();
                $layout        = get_row_layout();
                $bg_color      = get_sub_field('bg_color') ?: '#000000';
                $gradient_from = get_sub_field('gradient_from') ?: $bg_color;
                $gradient_style = sprintf(
                    'background: linear-gradient(to bottom, %s 0%%, %s 15%%);',
                    esc_attr($gradient_from),
                    esc_attr($bg_color)
                );

                // ── Crossfade Hero ──
                if ($layout === 'crossfade_hero') :
                    $title       = get_sub_field('title');
                    $image       = get_sub_field('background_image');
                    $text_color  = get_sub_field('text_color') ?: 'white';
                    $text_align  = get_sub_field('text_align') ?: 'center';
                    $color_class = $text_color === 'white' ? 'text-white' : 'text-black';
                ?>
                    <section class="sa-section sa-section--crossfade js-sa-section"
                             data-index="<?php echo $section_index; ?>"
                             style="<?php echo $gradient_style; ?>">
                        <?php if ($image) : ?>
                        <div class="sa-media js-sa-media">
                            <img src="<?php echo esc_url($image); ?>"
                                 alt="<?php echo esc_attr($title); ?>"
                                 class="sa-media__img"
                                 loading="<?php echo $section_index === 0 ? 'eager' : 'lazy'; ?>">
                        </div>
                        <?php endif; ?>

                        <?php if ($title) : ?>
                        <div class="sa-text js-sa-text <?php echo $color_class; ?> text-<?php echo esc_attr($text_align); ?>">
                            <h2 class="sa-text__title"><?php echo esc_html($title); ?></h2>
                        </div>
                        <?php endif; ?>
                    </section>

                <?php
                // ── Text Block ──
                elseif ($layout === 'text_block') :
                    $content    = get_sub_field('content');
                    $text_color = get_sub_field('text_color') ?: 'white';
                    $color_class = $text_color === 'white' ? 'text-white' : 'text-black';
                ?>
                    <section class="sa-section sa-section--text js-sa-section"
                             data-index="<?php echo $section_index; ?>"
                             style="<?php echo $gradient_style; ?>">
                        <div class="sa-body js-sa-text <?php echo $color_class; ?>">
                            <div class="sa-body__content prose">
                                <?php echo $content; ?>
                            </div>
                        </div>
                    </section>

                <?php
                // ── Full Image ──
                elseif ($layout === 'full_image') :
                    $image   = get_sub_field('image');
                    $caption = get_sub_field('caption');
                ?>
                    <section class="sa-section sa-section--fullimage js-sa-section"
                             data-index="<?php echo $section_index; ?>"
                             style="<?php echo $gradient_style; ?>">
                        <?php if ($image) : ?>
                        <div class="sa-media js-sa-media">
                            <img src="<?php echo esc_url($image); ?>"
                                 alt="<?php echo esc_attr($caption); ?>"
                                 class="sa-media__img"
                                 loading="lazy">
                        </div>
                        <?php endif; ?>

                        <?php if ($caption) : ?>
                        <div class="sa-caption js-sa-text">
                            <span class="sa-caption__text"><?php echo esc_html($caption); ?></span>
                        </div>
                        <?php endif; ?>
                    </section>

                <?php
                // ── Pull Quote ──
                elseif ($layout === 'pull_quote') :
                    $quote       = get_sub_field('quote');
                    $attribution = get_sub_field('attribution');
                    $text_color  = get_sub_field('text_color') ?: 'white';
                    $text_align  = get_sub_field('text_align') ?: 'center';
                    $color_class = $text_color === 'white' ? 'text-white' : 'text-black';
                ?>
                    <section class="sa-section sa-section--quote js-sa-section"
                             data-index="<?php echo $section_index; ?>"
                             style="<?php echo $gradient_style; ?>">
                        <div class="sa-text js-sa-text <?php echo $color_class; ?> text-<?php echo esc_attr($text_align); ?>">
                            <?php if ($quote) : ?>
                            <blockquote class="sa-text__quote"><?php echo esc_html($quote); ?></blockquote>
                            <?php endif; ?>
                            <?php if ($attribution) : ?>
                            <cite class="sa-text__cite">&mdash; <?php echo esc_html($attribution); ?></cite>
                            <?php endif; ?>
                        </div>
                    </section>

                <?php endif;
                $section_index++;
            endwhile;
        else : ?>
            <section class="sa-section sa-section--text" style="background: #1a1a1a;">
                <div class="sa-body is-active text-white">
                    <div class="sa-body__content prose">
                        <h2>Super Article</h2>
                        <p>Dodajte sekcije u WordPress adminu koristeći "Super Article sekcije" polje.</p>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </main>

    <?php wp_footer(); ?>
</body>
</html>
