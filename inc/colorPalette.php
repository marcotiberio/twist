<?php

function theme_add_color_palette()
{

    add_theme_support(
        'editor-color-palette',
        '#fff',
        '#3E3E3E',
        '#f00',
    );
}
add_action('init', 'theme_add_color_palette');
