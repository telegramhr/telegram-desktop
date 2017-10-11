<div class="share-box">
    <div class="facebook">
        <a href="#" data-social-network="Facebook" data-social-action="share" data-social-target="<?php the_permalink(); ?>"
        onclick="FB.ui({ method: 'share', href: '<?php the_permalink() ?>'}, function(response){}); return false;"><i class="fa fa-facebook"></i> Podijeli</a>
    </div>
    <div class="twitter">
        <a href="https://twitter.com/intent/tweet?counturl=<?php echo urlencode( get_the_permalink() ) ?>&text=<?php echo urlencode( get_the_title() ); ?>&url=<?php echo urlencode( get_the_permalink() ) ?>&via=TelegramHR" target="_blank" class="tw" data-social-network="Twitter" data-social-target="<?php the_permalink() ?>" data-social-action="tweet"><i class="fa fa-twitter"></i> Tweetaj</a>
    </div>
</div>