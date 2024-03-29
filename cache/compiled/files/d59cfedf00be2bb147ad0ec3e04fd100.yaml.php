<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/contact-htx/user/config/plugins/email.yaml',
    'modified' => 1558349340,
    'data' => [
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
    ]
];
