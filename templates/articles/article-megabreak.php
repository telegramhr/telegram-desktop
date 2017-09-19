<article class="article-megabreak">
    <div class="thumb">
        <?php echo $image ?>
    </div>
    <div class="article-content">
        <div class="titles container">
            <div class="article-cat">
                <a href="<?php echo $overtitle_link; ?>">
                    <?php echo $overtitle; ?>
                </a>
            </div>
            <h1 class="title">
                <a href="<?php echo $link ?>">
                    <?php echo $title; ?>
                </a>
            </h1>
            <?php if ($author) { ?>
            <div class="article-meta">
                piše <span class="author"><?php echo $author; ?></span>
            </div>
            <?php } ?>
            <h2 class="subtitle">
                <?php echo $subtitle; ?>
            </h2>
            <a href="<?php echo $link; ?>" class="btn btn-purple">
                <?php echo $button_text ?>
            </a>
        </div>
    </div>
</article>