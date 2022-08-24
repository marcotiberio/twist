<?php

namespace Flynt\Components\BlockFullWidthTile;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockFullWidthTile',
        'label' => 'Block: Full-Width Tile',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Text Position', 'flynt'),
                'name' => 'textPosition',
                'type' => 'button_group',
                'choices' => [
                    'left' => '<i class=\'dashicons dashicons-align-left\' title=\'Text on the left\'></i>',
                    'right' => '<i class=\'dashicons dashicons-align-right\' title=\'Text on the right\'></i>'
                ]
            ],
            [
                'label' => __('Background Image', 'flynt'),
                'name' => 'backgroundImage',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                'required' => 0,
                'mime_types' => 'jpg,jpeg,png,svg'
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 0,
            ],
            // [
            //     'label' => __('Options', 'flynt'),
            //     'name' => 'optionsTab',
            //     'type' => 'tab',
            //     'placement' => 'top',
            //     'endpoint' => 0,
            // ],
            // [
            //     'label' => '',
            //     'name' => 'options',
            //     'type' => 'group',
            //     'layout' => 'block',
            //     'sub_fields' => [
            //         FieldVariables\getTheme(),
            //     ]
            // ]
        ]
    ];
}
