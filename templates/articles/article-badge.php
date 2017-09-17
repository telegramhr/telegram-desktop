<?php
// Check if Article is Crosslink
$src = 'telegram';
$src_link = get_the_permalink();
if ( strpos( $src_link, 'telesport') !== false ) {
    $src = 'telesport';
}
elseif ( strpos( $src_link, 'blog') !== false ) {
    $src = 'dblog';
}

// Get Sticker Badge
if( get_field('sticker' ) && $src == 'telegram') { ?>
    <div class="sticker">
        <h2>
            <?php echo get_field('sticker'); ?>
            <span class="decail"></span>
        </h2>
    </div>
<?php
}
// Get Crosslink Icon
if( $src != 'telegram') {
    // If Telesport
    if( $src == 'telesport' ) {
        ?>
        <img
            src="<?php echo get_template_directory_uri() ?>/assets/img/crosslink/ico-telesport.png"
            width="90" height="90"
            class="ico-sticker ico-telesport" />
        <?php
    }
    elseif( $src == 'dblog' ) {
        ?>
        <img
            src="<?php echo get_template_directory_uri() ?>/assets/img/crosslink/ico-dblog.png"
            width="90" height="90"
            class="ico-sticker ico-dblog" />
        <?php
    }
}
// Get Video Icon
if( $post -> post_type == 'video' ) {
    echo '<div class="play-button"></div>';
}