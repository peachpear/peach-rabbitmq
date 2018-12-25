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
    ],
    'params' => [],
    "configService" => [
        "filePath" => "/config/pre/",
        "fileExt" => "json",
    ]
);

return [$baseConfig, $commonConfig];
