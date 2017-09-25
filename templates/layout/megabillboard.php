<?php
$meta = get_post_meta(get_option('telegram_promo_special'));
if ($meta['promo_on'][0] === 1) {
$image_id = $meta['promo_special_image'][0];
$image = wp_get_attachment_image_url($image_id, 'full');
?>
<div class="megabillboard">
    <div class="megabillboard-text">
        <div class="container">
            <div class="titles">
                <h3 class="overtitle"><?php echo esc_html( $meta['promo_special_overtitle'][0] ) ?></h3>
                <h1 class="title">
                    <a href="<?php echo esc_html( $meta['promo_special_link'][0] ) ?>">
                        <?php echo esc_html($meta['promo_special_title'][0]) ?>
                    </a>
                <h2 class="subtitle">
	                <?php echo esc_html( $meta['promo_special_subtitle'][0] ) ?>
                </h2>
                <a href="<?php echo esc_html( $meta['promo_special_link'][0] ) ?>" class="btn btn-purple">
	                <?php echo esc_html( $meta['promo_special_button_text'][0] ) ?>
                </a>
            </div>
        </div>
    </div>

    <img id="mega-bg" src="<?php echo esc_url($image) ?>">
</div>

<style type="text/css">

    .megabillboard {
        position: relative;
    }

    .megabillboard #mega-bg {
        width: 100%;
        height: auto;
    }

    .megabillboard .megabillboard-text {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 60px 0 ;
    }

    .megabillboard .titles {
        color: #fff;
        width: 50%;
    }

    .megabillboard .titles .overtitle {
        text-transform: uppercase;
    }

    .megabillboard .titles .title {
        font-size: 82px;
        margin: 15px 0;
    }

    .megabillboard .titles .subtitle {
        font-size: 24px;
        margin-bottom: 30px;
    }

</style>

<?php }