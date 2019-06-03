<?php

while (have_posts()) {
    the_post();
    $template = get_post_meta(get_the_ID(), 'native_template', true);
    get_template_part('templates/native/' . $template);
}
