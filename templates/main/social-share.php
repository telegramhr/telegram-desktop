<div class="social-share">

    <div class="comments">
        <i class="fa fa-comment"></i>
        <span class="fb-comments-count" data-href="<?php the_permalink(); ?>">0</span>
    </div>

    <div class="shares">
        <span class="num fb-share-count" data-href="<?php the_permalink(); ?>">0</span>
        <span>dijeljenja</span>
    </div>

    <div class="facebook">
        <a href="https://www.facebook.com/dialog/share?app_id=1383786971938581&display=popup&href=<?php echo urlencode( get_the_permalink() ); ?>&redirect_uri=<?php echo urlencode( get_the_permalink() ); ?>" target="_blank" class="fb fb-share" data-social-network="Facebook" data-social-action="share" data-social-target="<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
        <a class="fb-save-fake"><i class="fa fa-bookmark"></i></a>
        <div class="fb-save"
             data-uri="<?php the_permalink(); ?>">
        </div>
    </div>

    <div class="twitter">
        <a href="https://twitter.com/intent/tweet?counturl=<?php echo urlencode( get_the_permalink() ) ?>&text=<?php echo urlencode( get_the_title() ); ?>&url=<?php echo urlencode( get_the_permalink() ) ?>&via=TelegramHR" target="_blank" class="tw" data-social-network="Twitter" data-social-target="<?php the_permalink() ?>" data-social-action="tweet"><i class="fa fa-twitter"></i></a>
    </div>

    <div class="linkedin">
        <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php the_excerpt(); ?>&source="><i class="fa fa-linkedin"></i></a>
    </div>

    <div class="mail">
        <a href="mailto:?Subject=Pogledaj ovaj članak sa Žena Net&body:<?php the_permalink(); ?>"><i class="fa fa-envelope"></i></a>
    </div>

</div>