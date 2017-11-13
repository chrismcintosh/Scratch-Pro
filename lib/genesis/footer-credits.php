<?php

add_filter('genesis_footer_creds_text', 'scratch_do_footer');

function scratch_do_footer () {
    $text = '<p class="credits">&copy; ' . date('Y') . ' ' . get_bloginfo($show = 'name');

    // Display Web Designer link?
    if (get_field('display_designer_info', 'option')) {
        $text = $text . ' &middot; Designed by <a target="_blank" rel="nofollow" href="' . get_field('designer_url', 'option')
                      . '">' . get_field('designer_name', 'option') . '</a>';
    }

    // Display Scratch Pro link?
    if (get_field('display_theme_info', 'option')) {
        $text = $text . ' &middot; Built on <a target="_blank" rel="nofollow" href="https://github.com/chrismcintosh/Scratch-Pro/">Scratch Pro</a>';
    }

    $text = $text . '</p>';

    echo $text;
}
