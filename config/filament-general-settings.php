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

            ],
        ],
        'stat_bar'     => [
            'label'   => 'Stat Bar',
            'icon'    => 'heroicon-o-adjustments-horizontal',
            'columns' => 1,
            'fields'  => [
                'scouts_and_volunteers'        => [
                    'type'        => TypeFieldEnum::Text->value,
                    'label'       => 'Scouts and volunteers',
                    'placeholder' => 'Enter the number of Scouts and volunteers',
                    'required'    => false,
                    'rules'       => '',
                ],
                'scouts_troops'                => [
                    'type'        => TypeFieldEnum::Text->value,
                    'label'       => 'Scouts troops',
                    'placeholder' => 'Enter the number of Scouts troops',
                    'required'    => false,
                    'rules'       => '',
                ],
                'hours_of_community_service'   => [
                    'type'        => TypeFieldEnum::Text->value,
                    'label'       => 'Hours of community service',
                    'placeholder' => 'Enter the number of Hours of community service',
                    'required'    => false,
                    'rules'       => '',
                ],
                'service_projects_and_actions' => [
                    'type'        => TypeFieldEnum::Text->value,
                    'label'       => 'Service projects and actions',
                    'placeholder' => 'Enter the number of Service projects and actions',
                    'required'    => false,
                    'rules'       => '',
                ],
            ]
        ]
    ],
];
