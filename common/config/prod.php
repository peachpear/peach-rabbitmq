<?php
defined("ENV") || define("ENV", "prod");
$baseConfig = include('base.php');

$commonConfig = array(
    'components' => [
        'demoDB' => [
            'dsn' => '',
            'username' => '',
            'password' => '',
        ],
    ],
    'params' => [
        'ticket' => [
            'api_url' => 'http://prod.demo.com',
            'api_secret' => 'prod6bcd4341d373cade4e832456b4f7',
        ],
    ],
    "configService" => [
        "filePath" => "/config/prod/",
        "fileExt" => "json",
    ]
);

return [$baseConfig, $commonConfig];