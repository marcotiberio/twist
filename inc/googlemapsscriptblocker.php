<?php

// /**
//  * There are a lot of custom implementations for Google Maps. These require a custom block script, as described below
//  * Replace initMap with a variable from the inline script which runs the init, or the URL where this script resides.
//  */
defined('ABSPATH') or die('you do not have access to this page!');

// /**
//  * Block the script, and an inline script with string 'initMap'.
//  * initMap can also be something else. That's the problem with custom maps :)
//  * Add a placeholder to a div with class "my-maps-class"
//  * @param $tags
//  *
//  * @return array
//  */
function cmplz_custom_googlemaps_script($tags)
{
    $tags[] = array(
    'name' => 'google-maps',
    'category' => 'marketing',
    'urls' => array(
        // 'maps.googleapis.com/maps/api/js',
        'new_map',
    ),
    'placeholder' => 'google-maps',
    'enable_placeholder' => '1',
    'placeholder_class' => 'acf-map',
    'enable_dependency' => '0',
    'dependency' => [
        //'wait-for-this-script' => 'script-that-should-wait'
        'new_map' => 'maps.googleapis.com',
    ],
    );
    return $tags;
}
add_filter('cmplz_known_script_tags', 'cmplz_custom_googlemaps_script');

/* remove line 1 if implementing in functions.php, instead of an MU-plugin */
add_filter('cmplz_default_placeholder', "cmplz_my_placeholder");
function cmplz_my_placeholder($placeholder_url)
{
    $placeholder_url = '/wp-content/uploads/2022/08/google-maps-placheloder-twist.png';
    return $placeholder_url;
}
