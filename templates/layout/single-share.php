<div class="single-share">
    <div class="share-text">
        Podijeli:
    </div>
    <div class="share-box">
        <div class="facebook">
            <a href="#" onclick="FB.ui({ method: 'share', href: '<?php the_permalink() ?>'}, function(response){}); return false;" target="_blank" class="fb fb-share" data-social-network="Facebook" data-social-action="share" data-social-target="<?php the_permalink(); ?>">Facebook</a>
        </div>
        <div class="twitter">
            <a href="https://twitter.com/intent/tweet?counturl=<?php echo urlencode( get_the_permalink() ) ?>&text=<?php echo urlencode( get_the_title() ); ?>&url=<?php echo urlencode( get_the_permalink() ) ?>&via=TelegramHR" target="_blank" class="tw" data-social-network="Twitter" data-social-target="<?php the_permalink() ?>" data-social-action="tweet">Twitter</a>
        </div>
        <div class="mail">
            <a href="mailto:?Subject=Pogledaj ovaj članak s Telesportat&body:<?php the_permalink(); ?>">E-mail</a>
        </div>
    </div>
</div>