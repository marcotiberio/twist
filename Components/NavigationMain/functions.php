<?php

namespace Flynt\Components\NavigationMain;

use Flynt\Utils\Options;
use Flynt\FieldVariables;
use Flynt\ComponentManager;
use Timber\Timber;
use Flynt\Utils\Asset;
use Timber\Menu;

add_action('init', function () {
    register_nav_menus([
        'navigation_main' => __('Navigation Main', 'flynt')
    ]);
});

add_filter('Flynt/addComponentData?name=NavigationMain', function ($data) {
    $data['menu'] = new Menu('navigation_main');
    $data['logo'] = [
        'src' => get_theme_mod('custom_header_logo') ? get_theme_mod('custom_header_logo') : Asset::requireUrl('Components/NavigationMain/Assets/logo.svg'),
        'alt' => get_bloginfo('name')
    ];

    return $data;
});

Options::addGlobal('NavigationMain', [
    [
        'label' => __('CTA', 'flynt'),
        'name' => 'ctaTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => 'CTA Link',
        'name' => 'ctaLink',
        'type' => 'link',
        'return_format' => 'array',
        'wrapper' => [
            'width' => 100
        ]
    ],
    // [
    //     'label' => 'CTA Text',
    //     'name' => 'ctaText',
    //     'type' => 'text',
    //     'wrapper' => [
    //         'width' => 50
    //     ]
    // ],
    // [
    //     'label' => __('Social Media', 'flynt'),
    //     'name' => 'socialMediaTab',
    //     'type' => 'tab',
    //     'placement' => 'top',
    //     'endpoint' => 0
    // ],
    // [
    //     'label' => __('Social Platform', 'flynt'),
    //     'type' => 'repeater',
    //     'name' => 'social',
    //     'layout' => 'table',
    //     'button_label' => __('Add Social Link', 'flynt'),
    //     'sub_fields' => [
    //         [
    //             'label' => __('Platform', 'flynt'),
    //             'name' => 'platform',
    //             'type' => 'select',
    //             'allow_null' => 0,
    //             'multiple' => 0,
    //             'ui' => 1,
    //             'ajax' => 0,
    //             'return_format' => 'array',
    //             'choices' => [
    //                 'facebook' => 'Facebook',
    //                 'instagram' => 'Instagram',
    //                 'twitter' => 'Twitter',
    //                 'youtube' => 'Youtube',
    //                 'linkedin' => 'LinkedIn',
    //                 'spotify' => 'Spotify',
    //                 'soundcloud' => 'Soundcloud',
    //                 'vimeo' => 'Vimeo',
    //                 'website' => 'Website',
    //                 'xing' => 'Xing'
    //             ]
    //         ],
    //         [
    //             'label' => __('Link', 'flynt'),
    //             'name' => 'url',
    //             'type' => 'text',
    //             'required' => 1
    //         ]
    //     ]
    // ],
]);
