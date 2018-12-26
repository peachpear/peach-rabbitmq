<?php
defined("ENV") || define("ENV", "test");
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
                'username' => 'test-demo@demo.com',
                'password' => 'abc123+_*',
            ],
            'messageConfig' => [
                'from'=>['test-demo@demo.com'=>'no-reply']
            ],
        ],
    ],
    'params' => [
        'ticket' => [
            'api_url' => 'http://test.demo.com',
            'api_secret' => 'test6bcd4341d373cade4e832456b4f7',
        ],
    ],
    "configService" => [
        "filePath" => "/config/test/",
        "fileExt" => "json",
    ]
);

return [$baseConfig, $commonConfig];
