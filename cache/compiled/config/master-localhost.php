<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1559638989,
    'checksum' => '3aa83b303de1e8257ac99d124be47bd5',
    'files' => [
        'user/config' => [
            'backups' => [
                'file' => 'user/config/backups.yaml',
                'modified' => 1557987174
            ],
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1557987174
            ],
            'plugins/admin' => [
                'file' => 'user/config/plugins/admin.yaml',
                'modified' => 1558069296
            ],
            'plugins/email' => [
                'file' => 'user/config/plugins/email.yaml',
                'modified' => 1558349340
            ],
            'plugins/language-selector' => [
                'file' => 'user/config/plugins/language-selector.yaml',
                'modified' => 1557987254
            ],
            'plugins/simplesearch' => [
                'file' => 'user/config/plugins/simplesearch.yaml',
                'modified' => 1557987254
            ],
            'plugins/tntsearch' => [
                'file' => 'user/config/plugins/tntsearch.yaml',
                'modified' => 1557987254
            ],
            'scheduler' => [
                'file' => 'user/config/scheduler.yaml',
                'modified' => 1557987174
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1557987174
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1558528818
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1557987174
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1559638985
            ],
            'themes/big-picture' => [
                'file' => 'user/config/themes/big-picture.yaml',
                'modified' => 1557987254
            ],
            'themes/bootstrap' => [
                'file' => 'user/config/themes/bootstrap.yaml',
                'modified' => 1557987256
            ],
            'themes/g5_hydrogen' => [
                'file' => 'user/config/themes/g5_hydrogen.yaml',
                'modified' => 1557987254
            ],
            'themes/learn2' => [
                'file' => 'user/config/themes/learn2.yaml',
                'modified' => 1557987256
            ],
            'themes/quark' => [
                'file' => 'user/config/themes/quark.yaml',
                'modified' => 1557987254
            ]
        ],
        'system/config' => [
            'backups' => [
                'file' => 'system/config/backups.yaml',
                'modified' => 1557987170
            ],
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1557987170
            ],
            'security' => [
                'file' => 'system/config/security.yaml',
                'modified' => 1557987170
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1557987170
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1557987170
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1557987170
            ]
        ],
        'user/plugins' => [
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1557987260
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1557987262
            ],
            'plugins/embed' => [
                'file' => 'user/plugins/embed/embed.yaml',
                'modified' => 1558070478
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1557987262
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1557987258
            ],
            'plugins/ganalytics' => [
                'file' => 'user/plugins/ganalytics/ganalytics.yaml',
                'modified' => 1558070576
            ],
            'plugins/gantry5' => [
                'file' => 'user/plugins/gantry5/gantry5.yaml',
                'modified' => 1557987258
            ],
            'plugins/langswitcher' => [
                'file' => 'user/plugins/langswitcher/langswitcher.yaml',
                'modified' => 1557987262
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1557987262
            ],
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/markdown-notices.yaml',
                'modified' => 1557987256
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1557987260
            ],
            'plugins/youtube' => [
                'file' => 'user/plugins/youtube/youtube.yaml',
                'modified' => 1558070844
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'admin' => [
                'enabled' => true,
                'route' => '/admin',
                'cache_enabled' => false,
                'theme' => 'grav',
                'logo_text' => 'Green System',
                'body_classes' => '',
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
            ],
            'email' => [
                'enabled' => true,
                'from' => 'noreply@hethongxanh.vn',
                'from_name' => 'He Thong Xanh\'s Web Master',
                'to' => 'info@greensystem.vn',
                'to_name' => 'Web Master',
                'queue' => [
                    'enabled' => true,
                    'flush_frequency' => '* * * * *',
                    'flush_msg_limit' => 10,
                    'flush_time_limit' => 100
                ],
                'mailer' => [
                    'engine' => 'smtp',
                    'smtp' => [
                        'server' => 'smtp.gmail.com',
                        'port' => 465,
                        'encryption' => 'ssl',
                        'user' => 'noreply@hethongxanh.vn',
                        'password' => 'hethongxanh.vn'
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail -bs'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'embed' => [
                'enabled' => true,
                'oembed' => [
                    'endpoint' => 'http://open.iframe.ly/api/oembed'
                ]
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'form' => [
                'enabled' => true,
                'built_in_css' => true,
                'inline_css' => true,
                'refresh_prevention' => false,
                'client_side_validation' => true,
                'inline_errors' => false,
                'files' => [
                    'multiple' => false,
                    'limit' => 10,
                    'destination' => 'self@',
                    'avoid_overwriting' => false,
                    'random_name' => false,
                    'filesize' => 0,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'recaptcha' => [
                    'version' => '2-checkbox',
                    'theme' => 'light',
                    'site_key' => NULL,
                    'secret_key' => NULL
                ]
            ],
            'ganalytics' => [
                'enabled' => true,
                'trackingId' => '',
                'position' => 'head',
                'objectName' => 'ga',
                'forceSsl' => false,
                'async' => false,
                'anonymizeIp' => false,
                'blockedIps' => [
                    
                ],
                'cookieConfig' => false,
                'cookieName' => '_ga',
                'cookieDomain' => '',
                'cookieExpires' => 63072000,
                'debugStatus' => false,
                'debugTrace' => false
            ],
            'gantry5' => [
                'enabled' => true,
                'production' => true,
                'use_media_folder' => false,
                'offline' => false,
                'offline_message' => NULL,
                'asset_timestamps' => true,
                'asset_timestamps_period' => 7,
                'debug' => false,
                'compile_yaml' => true,
                'compile_twig' => true
            ],
            'langswitcher' => [
                'enabled' => true,
                'built_in_css' => true,
                'untranslated_pages_behavior' => 'none'
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => NULL,
                'redirect_to_login' => true,
                'redirect_after_login' => NULL,
                'redirect_after_logout' => '/',
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'route_profile' => '/user_profile',
                'route_register' => '/user_register',
                'route_unauthorized' => '/user_unauthorized',
                'twofa_enabled' => false,
                'dynamic_page_visibility' => false,
                'parent_acl' => false,
                'protect_protected_page_media' => false,
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 604800,
                    'name' => 'grav-rememberme'
                ],
                'max_pw_resets_count' => 2,
                'max_pw_resets_interval' => 60,
                'max_login_count' => 5,
                'max_login_interval' => 10,
                'ipv6_subnet_size' => 64,
                'user_registration' => [
                    'enabled' => false,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title',
                        5 => 'level',
                        6 => 'twofa_enabled'
                    ],
                    'default_values' => [
                        'level' => 'Newbie'
                    ],
                    'access' => [
                        'site' => [
                            'login' => 'true'
                        ]
                    ],
                    'redirect_after_registration' => '',
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => false,
                        'send_activation_email' => false,
                        'manually_enable' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ]
            ],
            'markdown-notices' => [
                'enabled' => true,
                'built_in_css' => true,
                'level_classes' => [
                    0 => 'yellow',
                    1 => 'red',
                    2 => 'blue',
                    3 => 'green'
                ]
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'youtube' => [
                'enabled' => true,
                'built_in_css' => true,
                'add_editor_button' => true,
                'player_parameters' => [
                    'autoplay' => 0,
                    'cc_load_policy' => 0,
                    'color' => 'red',
                    'controls' => 1,
                    'disablekb' => 0,
                    'enablejsapi' => 0,
                    'fs' => 1,
                    'hl' => '',
                    'iv_load_policy' => 1,
                    'loop' => 0,
                    'modestbranding' => 0,
                    'origin' => '',
                    'playsinline' => 0,
                    'rel' => 1,
                    'showinfo' => 1,
                    'vq' => 'default'
                ],
                'privacy_enhanced_mode' => false
            ],
            'language-selector' => [
                'enabled' => true,
                'built_in_css' => true,
                'untranslated_pages_behavior' => 'none',
                'button_display' => 'default',
                'select_display' => 'default'
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => true,
                'built_in_js' => true,
                'display_button' => true,
                'min_query_length' => 1,
                'route' => '/search',
                'search_content' => 'rendered',
                'template' => 'simplesearch_results',
                'filter_combinator' => 'and',
                'ignore_accented_characters' => true,
                'order' => [
                    'by' => 'date',
                    'dir' => 'asc'
                ]
            ],
            'tntsearch' => [
                'enabled' => true,
                'search_route' => '/search',
                'query_route' => '/s',
                'built_in_css' => true,
                'built_in_js' => true,
                'built_in_search_page' => true,
                'enable_admin_page_events' => true,
                'search_type' => 'auto',
                'fuzzy' => true,
                'phrases' => true,
                'stemmer' => 'default',
                'display_route' => true,
                'display_hits' => true,
                'display_time' => true,
                'live_uri_update' => true,
                'limit' => '20',
                'min' => '3',
                'snippet' => '300',
                'index_page_by_default' => true,
                'scheduled_index' => [
                    'enabled' => true,
                    'at' => '* * * * *',
                    'logs' => 'logs/tntsearch-index.out'
                ],
                'filter' => [
                    'items' => [
                        0 => 'root@.descendants'
                    ]
                ],
                'powered_by' => true,
                'search_object_type' => 'Grav'
            ]
        ],
        'backups' => [
            'purge' => [
                'trigger' => 'space',
                'max_backups_count' => 25,
                'max_backups_space' => 5,
                'max_backups_time' => 365
            ],
            'profiles' => [
                0 => [
                    'name' => 'Default Site Backup',
                    'root' => '/',
                    'schedule' => false,
                    'schedule_at' => '0 3 * * *',
                    'exclude_paths' => '/backup
/cache
/images
/logs
/tmp',
                    'exclude_files' => '.DS_Store
.git
.svn
.hg
.idea
.vscode
node_modules'
                ]
            ]
        ],
        'media' => [
            'types' => [
                'defaults' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb.png',
                    'mime' => 'application/octet-stream',
                    'image' => [
                        'filters' => [
                            'default' => [
                                0 => 'enableProgressive'
                            ]
                        ]
                    ]
                ],
                'jpg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpe' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'jpeg' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-jpg.png',
                    'mime' => 'image/jpeg'
                ],
                'png' => [
                    'type' => 'image',
                    'thumb' => 'media/thumb-png.png',
                    'mime' => 'image/png'
                ],
                'gif' => [
                    'type' => 'animated',
                    'thumb' => 'media/thumb-gif.png',
                    'mime' => 'image/gif'
                ],
                'svg' => [
                    'type' => 'vector',
                    'thumb' => 'media/thumb-svg.png',
                    'mime' => 'image/svg+xml'
                ],
                'mp4' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mp4.png',
                    'mime' => 'video/mp4'
                ],
                'mov' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-mov.png',
                    'mime' => 'video/quicktime'
                ],
                'm4v' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-m4v.png',
                    'mime' => 'video/x-m4v'
                ],
                'swf' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-swf.png',
                    'mime' => 'video/x-flv'
                ],
                'flv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-flv.png',
                    'mime' => 'video/x-flv'
                ],
                'webm' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-webm.png',
                    'mime' => 'video/webm'
                ],
                'ogv' => [
                    'type' => 'video',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'video/ogg'
                ],
                'mp3' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-mp3.png',
                    'mime' => 'audio/mp3'
                ],
                'ogg' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-ogg.png',
                    'mime' => 'audio/ogg'
                ],
                'wma' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wma.png',
                    'mime' => 'audio/wma'
                ],
                'm4a' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-m4a.png',
                    'mime' => 'audio/m4a'
                ],
                'wav' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-wav.png',
                    'mime' => 'audio/wav'
                ],
                'aiff' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aiff'
                ],
                'aif' => [
                    'type' => 'audio',
                    'thumb' => 'media/thumb-aif.png',
                    'mime' => 'audio/aif'
                ],
                'txt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-txt.png',
                    'mime' => 'text/plain'
                ],
                'xml' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xml.png',
                    'mime' => 'application/xml'
                ],
                'doc' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-doc.png',
                    'mime' => 'application/msword'
                ],
                'docx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-docx.png',
                    'mime' => 'application/msword'
                ],
                'xls' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xls.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'xlsx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-xlsx.png',
                    'mime' => 'application/vnd.ms-excel'
                ],
                'ppt' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ppt.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pptx' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pptx.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'pps' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pps.png',
                    'mime' => 'application/vnd.ms-powerpoint'
                ],
                'rtf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-rtf.png',
                    'mime' => 'application/rtf'
                ],
                'bmp' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-bmp.png',
                    'mime' => 'image/bmp'
                ],
                'tiff' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tiff.png',
                    'mime' => 'image/tiff'
                ],
                'mpeg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpg' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpg.png',
                    'mime' => 'video/mpeg'
                ],
                'mpe' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-mpe.png',
                    'mime' => 'video/mpeg'
                ],
                'avi' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-avi.png',
                    'mime' => 'video/msvideo'
                ],
                'wmv' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-wmv.png',
                    'mime' => 'video/x-ms-wmv'
                ],
                'html' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'htm' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-html.png',
                    'mime' => 'text/html'
                ],
                'ics' => [
                    'type' => 'iCal',
                    'thumb' => 'media/thumb-ics.png',
                    'mime' => 'text/calendar'
                ],
                'pdf' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-pdf.png',
                    'mime' => 'application/pdf'
                ],
                'ai' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-ai.png',
                    'mime' => 'image/ai'
                ],
                'psd' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-psd.png',
                    'mime' => 'image/psd'
                ],
                'zip' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-zip.png',
                    'mime' => 'application/zip'
                ],
                '7z' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-7z.png',
                    'mime' => 'application/x-7z-compressed'
                ],
                'gz' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-gz.png',
                    'mime' => 'application/gzip'
                ],
                'tar' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-tar.png',
                    'mime' => 'application/x-tar'
                ],
                'css' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-css.png',
                    'mime' => 'text/css'
                ],
                'js' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-js.png',
                    'mime' => 'application/javascript'
                ],
                'json' => [
                    'type' => 'file',
                    'thumb' => 'media/thumb-json.png',
                    'mime' => 'application/json'
                ]
            ]
        ],
        'security' => [
            'xss_whitelist' => [
                0 => 'admin.super'
            ],
            'xss_enabled' => [
                'on_events' => true,
                'invalid_protocols' => true,
                'moz_binding' => true,
                'html_inline_styles' => true,
                'dangerous_tags' => true
            ],
            'xss_invalid_protocols' => [
                0 => 'javascript',
                1 => 'livescript',
                2 => 'vbscript',
                3 => 'mocha',
                4 => 'feed',
                5 => 'data'
            ],
            'xss_dangerous_tags' => [
                0 => 'applet',
                1 => 'meta',
                2 => 'xml',
                3 => 'blink',
                4 => 'link',
                5 => 'style',
                6 => 'script',
                7 => 'embed',
                8 => 'object',
                9 => 'iframe',
                10 => 'frame',
                11 => 'frameset',
                12 => 'ilayer',
                13 => 'layer',
                14 => 'bgsound',
                15 => 'title',
                16 => 'base'
            ],
            'uploads_dangerous_extensions' => [
                0 => 'php',
                1 => 'html',
                2 => 'htm',
                3 => 'js',
                4 => 'exe'
            ],
            'salt' => 'KAnEPGURz4NwVB'
        ],
        'site' => [
            'title' => 'Công ty TNHH Giải Pháp Hệ Thống Xanh ( Green System Solutions)',
            'default_lang' => 'vi',
            'author' => [
                'name' => 'Chuong NGUYEN',
                'email' => 'info@hethongxanh.vn'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'metadata' => [
                'description' => 'GREEN SYSTEM SOLUTIONS - A Service Oriented Architecture firm offering ERP Implementation, Project Management, Transformation; Technology Infrastructure solutions, the entire IT life cycle for your business',
                'Keywords' => 'Giải pháp quản lý dự án và danh mục đầu tư, project management and portfolio management , ERP consultant, Management Consulting, Project Management, ERP Implementation, Service Oriented Architecture, Change Management, HR Consulting, Technology Infrastructure, Software Testing Solutions, Consulting Services, Consulting Firm, ERP, MIS, CRM, HRM, BI, FM'
            ],
            'summary' => [
                'enabled' => true,
                'format' => 'short',
                'size' => 300,
                'delimiter' => '==='
            ],
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => '/blog'
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'Stream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => '',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'force_ssl' => false,
            'force_lowercase_urls' => true,
            'custom_base_url' => '',
            'username_regex' => '^[a-z0-9_-]{3,16}$',
            'pwd_regex' => '(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{8,}',
            'intl_enabled' => true,
            'languages' => [
                'supported' => [
                    0 => 'vi',
                    1 => 'en',
                    2 => 'fr'
                ],
                'default_lang' => NULL,
                'include_default_lang' => true,
                'pages_fallback_only' => false,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/greensystem',
                'hide_in_urls' => true
            ],
            'pages' => [
                'theme' => 'g5_hydrogen',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => false
                ],
                'twig_first' => false,
                'never_cache_twig' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => false,
                    'auto_line_breaks' => false,
                    'auto_url_links' => false,
                    'escape_markup' => false,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'html',
                    1 => 'htm',
                    2 => 'xml',
                    3 => 'txt',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '.html',
                'expires' => 604800,
                'cache_control' => NULL,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => '302',
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'hide_empty_folders' => false,
                'url_taxonomy_filters' => true,
                'frontmatter' => [
                    'process_twig' => false,
                    'ignore_fields' => [
                        0 => 'form',
                        1 => 'forms'
                    ]
                ]
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'purge_at' => '0 4 * * *',
                'clear_at' => '0 3 * * *',
                'clear_job_type' => 'standard',
                'clear_images_by_default' => true,
                'cli_compatibility' => false,
                'lifetime' => 604800,
                'gzip' => false,
                'allow_webserver_gzip' => false,
                'redis' => [
                    'socket' => false
                ]
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_pipeline_include_externals' => true,
                'css_pipeline_before_excludes' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_pipeline_include_externals' => true,
                'js_pipeline_before_excludes' => true,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => 1,
                'log' => true
            ],
            'log' => [
                'handler' => 'file',
                'syslog' => [
                    'facility' => 'local6'
                ]
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false,
                'auto_fix_orientation' => false,
                'seofriendly' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ],
                'auto_metadata_exif' => false,
                'upload_limit' => 8388608
            ],
            'session' => [
                'enabled' => true,
                'initialize' => true,
                'timeout' => 1800,
                'name' => 'hethongxanh',
                'uniqueness' => 'path',
                'secure' => false,
                'httponly' => true,
                'split' => true,
                'path' => NULL
            ],
            'gpm' => [
                'releases' => 'testing',
                'proxy_url' => NULL,
                'method' => 'auto',
                'verify_peer' => true,
                'official_gpm_only' => true
            ],
            'accounts' => [
                'type' => 'data',
                'storage' => 'file'
            ],
            'strict_mode' => [
                'yaml_compat' => true,
                'twig_compat' => true
            ]
        ],
        'scheduler' => [
            
        ],
        'themes' => [
            'big-picture' => [
                'enabled' => true,
                'favicon' => [
                    'user/themes/big-picture/images/logo.jpg' => [
                        'name' => 'logo.jpg',
                        'type' => 'image/jpeg',
                        'size' => 3902,
                        'path' => 'user/themes/big-picture/images/logo.jpg'
                    ]
                ],
                'error_background_image' => [
                    'user/themes/big-picture/images/bg1.jpg' => [
                        'name' => 'bg1.jpg',
                        'type' => 'image/jpeg',
                        'size' => 89627,
                        'path' => 'user/themes/big-picture/images/bg1.jpg'
                    ]
                ]
            ],
            'bootstrap' => [
                'dropdown' => [
                    'enabled' => true
                ]
            ],
            'g5_hydrogen' => [
                'enabled' => true
            ],
            'learn2' => [
                'enabled' => true,
                'top_level_version' => true,
                'show_all_pages' => false,
                'github' => [
                    'position' => 'top',
                    'tree' => 'https://github.com/getgrav/grav-skeleton-rtfm-site/blob/develop/',
                    'commits' => 'https://github.com/getgrav/grav-skeleton-rtfm-site/commits/develop/'
                ]
            ],
            'quark' => [
                'enabled' => true,
                'production-mode' => true,
                'grid-size' => 'grid-md',
                'header-fixed' => true,
                'header-animated' => true,
                'header-dark' => false,
                'header-transparent' => true,
                'sticky-footer' => true,
                'blog-page' => '/blog',
                'spectre' => [
                    'exp' => false,
                    'icons' => false
                ],
                'custom_logo' => [
                    'user/themes/quark/images/logo/logo.jpg' => [
                        'name' => 'logo.jpg',
                        'type' => 'image/jpeg',
                        'size' => 3902,
                        'path' => 'user/themes/quark/images/logo/logo.jpg'
                    ]
                ],
                'custom_logo_mobile' => [
                    'user/themes/quark/images/logo/logo-design.jpg' => [
                        'name' => 'logo-design.jpg',
                        'type' => 'image/jpeg',
                        'size' => 9827,
                        'path' => 'user/themes/quark/images/logo/logo-design.jpg'
                    ]
                ]
            ]
        ]
    ]
];
