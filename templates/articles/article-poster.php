<article class="article-poster">
    <a href="<?php echo $link ?>">
        <div class="thumb">
            <?php echo $image ?>
        </div>
    </a>
    <div class="titles ">
        <div class="title-block">
            <h1 class="title">
                <a href="<?php echo $link ?>">
                    <?php
                    echo $title;
                    ?>
                </a>
            </h1>
            <?php if(isset($recommendations) && $recommendations) { ?>
            <div class="article-meta">
                <span class="rcmds">
                    <?php echo intval($recommendations) ?> preporuka
                </span>
            </div>
            <?php } ?>
        </div>
    </div>
</article>