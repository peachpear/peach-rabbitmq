<?php
defined('YII_DEBUG') or define("YII_DEBUG", false);

$initConfig = [
    "components"  =>  [
    ],
    "params" => [
        'root' => dirname(__DIR__),
        'pidfile_root' => '/var/www/log/rabbitMQ/test/',
        'rabbitMQ' => [
            'host'     => 'test.rabbitmq.demo.com',
            'port'     => '5672',
            'login'    => 'admin',
            'password' => '123+-*abc'
        ],
    ],
];
list($commonBaseConfig, $commonConfig) = include(__DIR__ . '/../../common/config/test.php');
$baseConfig = include('base.php');

return [$commonBaseConfig, $commonConfig, $baseConfig, $initConfig];
