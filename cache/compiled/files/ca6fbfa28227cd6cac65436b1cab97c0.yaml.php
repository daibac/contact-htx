<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/contact-htx/user/plugins/embed/blueprints.yaml',
    'modified' => 1558070478,
    'data' => [
        'name' => 'Embed',
        'version' => '1.0.0',
        'description' => 'Easily embed all kinds of url\'s in plain markdown or using a Twig function',
        'icon' => 'code',
        'author' => [
            'name' => 'Gertt',
            'email' => 'gert@gert.gert',
            'url' => 'http://github.com/Gertt'
        ],
        'homepage' => 'https://github.com/Gertt/grav-plugin-embed',
        'keywords' => 'embed, plugin, iframe, responsive, iframely, facebook, youtube, twitter, instagram, vine, codepen, slides',
        'bugs' => 'https://github.com/Gertt/grav-plugin-embed/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'oembed.endoint' => [
                    'type' => 'text',
                    'label' => 'OEmbed Endpoint',
                    'placeholder' => 'http://open.iframe.ly/api/oembed',
                    'validate' => [
                        'type' => 'url'
                    ]
                ]
            ]
        ]
    ]
];
