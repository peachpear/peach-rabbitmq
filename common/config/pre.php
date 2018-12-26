<?php
defined("ENV") || define("ENV", "pre");
$baseConfig = include('base.php');

$commonConfig = array(
    'components' => [
        'demoDB' => [
            'dsn' => '',
            'username' => '',
            'password' => '',
        ],
        'mailer' => [
            'transport' => [
                'username' => 'pre-demo@demo.com',
                'password' => 'abc123+_*',
            ],
            'messageConfig' => [
                'from'=>['pre-demo@demo.com'=>'no-reply']
            ],
        ],
    ],
    'params' => [
        'ticket' => [
            'api_url' => 'http://pre.demo.com',
            'api_secret' => 'pref6bcd4341d373cade4e832456b4f7',
        ],
    ],
    "configService" => [
        "filePath" => "/config/pre/",
        "fileExt" => "json",
    ]
);

return [$baseConfig, $commonConfig];
