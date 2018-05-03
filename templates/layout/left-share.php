<div class="left-share">

    <div class="facebook">
        <a onclick="FB.ui({ method: 'share', href: '<?php the_permalink() ?>'}, function(response){}); return false;" target="_blank" class="fb fb-share" data-social-network="Facebook" data-social-action="share" data-social-target="<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
    </div>

    <div class="twitter">
        <a href="https://twitter.com/intent/tweet?counturl=<?php echo urlencode( get_the_permalink() ) ?>&text=<?php echo urlencode( get_the_title() ); ?>&url=<?php echo urlencode( get_the_permalink() ) ?>&via=TelegramHR" target="_blank" class="tw" data-social-network="Twitter" data-social-target="<?php the_permalink() ?>" data-social-action="tweet"><i class="fa fa-twitter"></i> </a>
    </div>

    <div class="linkedin">
        <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php the_excerpt(); ?>&source="><i class="fa fa-linkedin"></i></a>
    </div>

    <div class="mail">
        <a href="mailto:?Subject=Pogledaj ovaj članak s Telegrama&body:<?php the_permalink(); ?>"><i class="fa fa-envelope"></i></a>
    </div>

</div>