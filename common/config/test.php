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
    ],
    'params' => [],
    "configService" => [
        "filePath" => "/config/test/",
        "fileExt" => "json",
    ]
);

return [$baseConfig, $commonConfig];
