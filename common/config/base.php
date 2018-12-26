<?php
defined("APP_NAME") || define("APP_NAME", "demo");
defined('VERSION') or define('VERSION', '*');

return array(
    'aliases' => [
        '@common' => realpath(__DIR__."/../"),
    ],
    'bootstrap' => ['log'],
	'components' => [
		'cache' => [
            'class' => 'yii\caching\FileCache',
		],
        'demoDB' => [
            'class' => '\yii\db\Connection',
            'charset' => 'utf8mb4',
            'enableQueryCache' => false,
        ],
		'curl'=> [
			'class' => 'common\components\LComponentCurl',
		],
        'log' => [
            'targets' => [
                'file' => [
                    'class' => 'yii\log\FileTarget',
                ],
            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' =>false,  // false发送邮件；true只是生成邮件在runtime文件夹下，不发邮件
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.exmail.demo.com',  // 每种邮箱的host配置不一样
                'port' => '465',
                'encryption' => 'ssl',
            ],
            'messageConfig' => [
                'charset'=>'UTF-8',
            ],
        ],
	]
);
