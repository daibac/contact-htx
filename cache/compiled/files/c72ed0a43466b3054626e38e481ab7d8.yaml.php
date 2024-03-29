<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/contact-htx/user/config/plugins/admin.yaml',
    'modified' => 1558069296,
    'data' => [
        'enabled' => true,
        'route' => '/admin',
        'cache_enabled' => false,
        'theme' => 'grav',
        'logo_text' => 'Green System',
        'content_padding' => true,
        'twofa_enabled' => true,
        'log_viewer_files' => [
            0 => 'grav',
            1 => 'email'
        ],
        'sidebar' => [
            'activate' => 'tab',
            'hover_delay' => 100,
            'size' => 'auto'
        ],
        'dashboard' => [
            'days_of_stats' => 7
        ],
        'widgets' => [
            'dashboard-maintenance' => true,
            'dashboard-statistics' => true,
            'dashboard-notifications' => false,
            'dashboard-feed' => false,
            'dashboard-pages' => true
        ],
        'pages' => [
            'show_parents' => 'both',
            'show_modular' => true
        ],
        'session' => [
            'timeout' => 1800
        ],
        'warnings' => [
            'delete_page' => true
        ],
        'edit_mode' => 'normal',
        'frontend_preview_target' => 'inline',
        'show_github_msg' => false,
        'pages_list_display_field' => 'title',
        'google_fonts' => true,
        'admin_icons' => 'line-awesome',
        'enable_auto_updates_check' => false,
        'notifications' => [
            'feed' => true,
            'dashboard' => true,
            'plugins' => true,
            'themes' => true
        ],
        'popularity' => [
            'enabled' => true,
            'ignore' => [
                0 => '/test*',
                1 => '/modular'
            ],
            'history' => [
                'daily' => '30',
                'monthly' => '12',
                'visitors' => '20'
            ]
        ],
        'pagemedia' => [
            'resize_width' => 0,
            'resize_height' => 0,
            'res_min_width' => 0,
            'res_min_height' => 0,
            'res_max_width' => 0,
            'res_max_height' => 0,
            'resize_quality' => 0.8
        ]
    ]
];
