<div class="single-share">
    <div class="share-text">
        Podijeli:
    </div>
    <div class="share-buttons">
        <div class="facebook">
            <a href="https://www.facebook.com/dialog/share?app_id=1383786971938581&display=popup&href=<?php echo urlencode( get_the_permalink() ); ?>&redirect_uri=<?php echo urlencode( get_the_permalink() ); ?>" target="_blank" class="fb fb-share" data-social-network="Facebook" data-social-action="share" data-social-target="<?php the_permalink(); ?>">Facebook</a>
        </div>
        <div class="twitter">
            <a href="https://twitter.com/intent/tweet?counturl=<?php echo urlencode( get_the_permalink() ) ?>&text=<?php echo urlencode( get_the_title() ); ?>&url=<?php echo urlencode( get_the_permalink() ) ?>&via=TelegramHR" target="_blank" class="tw" data-social-network="Twitter" data-social-target="<?php the_permalink() ?>" data-social-action="tweet">Twitter</a>
        </div>
        <div class="mail">
            <a href="mailto:?Subject=Pogledaj ovaj članak sa Žena Net&body:<?php the_permalink(); ?>">E-mail</a>
        </div>
    </div>

    <div class="article-meta cf">
        <span class="author"><?php the_author(); ?></span>
        <span><?php the_time(); ?></span>
        <span class="rcmnd-no"><?php echo intval(get_post_meta(get_the_ID(), '_recommendations', true)) ?> preporuka</span>
        <span><?php echo intval(get_post_meta(get_the_ID(), '_comments', true)) ?> komentara</span>
    </div>
</div>