<?php

use Joaopaulolndev\FilamentGeneralSettings\Enums\TypeFieldEnum;

return [
    'show_application_tab'         => true,
    'show_analytics_tab'           => false,
    'show_logo_and_favicon'        => true,
    'show_seo_tab'                 => false,
    'show_email_tab'               => true,
    'show_social_networks_tab'     => true,
    'expiration_cache_config_time' => 60,
    'show_custom_tabs'             => true,
    'custom_tabs'                  => [
        'more_configs' => [
            'label'   => 'Header & Footer Scripts',
            'icon'    => 'heroicon-o-code-bracket-square',
            'columns' => 1,
            'fields'  => [
                'header_code' => [
                    'type'        => TypeFieldEnum::Textarea->value,
                    'label'       => 'Header Code',
                    'placeholder' => 'Enter the code to be placed in the header',
                    'rows'        => '3',
                    'required'    => false,
                ],
                'footer_code' => [
                    'type'        => TypeFieldEnum::Textarea->value,
                    'label'       => 'Footer Code',
                    'placeholder' => 'Enter the code to be placed in the footer',
                    'rows'        => '3',
                    'required'    => false,
                ],

            ]
        ],
    ]
];
