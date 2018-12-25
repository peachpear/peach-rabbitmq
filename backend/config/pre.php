<?php
defined('YII_DEBUG') or define("YII_DEBUG", false);

$initConfig = [
    "components"  =>  [
        'log' => [
            'targets' => [
                'file' => [
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
    "params"    =>  [
    ]
];

list($commonBaseConfig, $commonEnvConfig)= include(__DIR__ . '/../../common/config/pre.php');

$baseConfig = include('base.php');

return [$commonBaseConfig, $commonEnvConfig, $baseConfig, $initConfig];