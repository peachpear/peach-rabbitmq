<?php
defined("ENV") || define("ENV", "dev");
$baseConfig = include('base.php');

$commonConfig = array(
	'components' => [
        'demoDB' => [
            'dsn' => 'mysql:host=192.168.100.2;port=3306;dbname=demo',
            'username' => 'demo',
            'password' => 'demo_+-*123',
        ],
    ],
    'params' => [],
    "configService" => [
        "filePath" => "/config/dev/",
        "fileExt" => "json",
    ]
);

return [$baseConfig, $commonConfig];
