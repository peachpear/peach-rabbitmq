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
    'params' => [],
    "configService" => [
        "filePath" => "/config/prod/",
        "fileExt" => "json",
    ]
);

return [$baseConfig, $commonConfig];