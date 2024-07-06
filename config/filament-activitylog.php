<?php

return [
    'resources' => [
        'label'                  => 'Activity Log',
        'plural_label'           => 'Activity Logs',
        'navigation_group'       => 'User Management',
        'navigation_icon'        => 'heroicon-o-clipboard-document-list',
        'navigation_sort'        => null,
        'navigation_count_badge' => true,
        'resource'               => \App\Filament\Resources\ActivityLogResource::class,
    ],
    'datetime_format' => 'd/m/Y H:i:s',
];
