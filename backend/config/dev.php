<?php
defined('YII_DEBUG') or define("YII_DEBUG", true);
ini_set("display_errors", true);

$initConfig = [
    "components"  =>  [
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                'file' => [
                    'levels' => ['error', 'warning', "trace"],
                ],
            ],
        ],
    ],
    "params"    =>  [
    ],
];

list($commonBaseConfig, $commonEnvConfig) = include(__DIR__ . '/../../common/config/dev.php');

$baseConfig = include('base.php');

return [$commonBaseConfig, $commonEnvConfig, $baseConfig, $initConfig];
