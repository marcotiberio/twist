<?php

/**
 * Defines field variables to be used across multiple components.
 */

namespace Flynt\FieldVariables;

function getTheme()
{
    return [
        'label' => __('Theme', 'flynt'),
        'name' => 'theme',
        'type' => 'select',
        'allow_null' => 0,
        'multiple' => 0,
        'ui' => 0,
        'ajax' => 0,
        'choices' => [
            '' => __('(none)', 'flynt'),
            // 'themeLight' => __('Light', 'flynt'),
            // 'themeDark' => __('Dark', 'flynt'),
            // 'themeHero' => __('Hero', 'flynt'),
            'themeWhite' => __('White', 'flynt'),
            'themeRed' => __('Red', 'flynt'),
        ]
    ];
}

function getIcon()
{
    return [
        'label' => __('Icon', 'flynt'),
        'name' => 'icon',
        'type' => 'text',
        'instructions' => __('Enter a valid icon name from <a href="https://feathericons.com">Feather Icons</a> (e.g. `check-circle`).', 'flynt'),
        'required' => 1
    ];
}

function getSectionId()
{
    return [
        [
            'label' => __('Section ID', 'flynt'),
            'name' => 'sectionId',
            'type' => 'text',
            'wrapper' => [
                'width' => '100',
            ],
        ],
    ];
}

function getBackgroundColor()
{
    return [
        [
            'label' => __('Background COlor', 'flynt'),
            'name' => 'backgroundColor',
            'type' => 'color_picker',
            'wrapper' => [
                'width' => '100',
            ],
        ],
    ];
}
