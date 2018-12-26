<?php
return array(
	'name' => 'demo',
	'id'   =>   "demo-console",
	'basePath' => dirname(__DIR__),
    'controllerNamespace'   =>  "console\controllers",
    'aliases' => [
        '@console' => realpath(__DIR__."/../"),
    ],
    "components" =>  [
        'errorHandler' => [
            'class' => 'console\components\LConsoleErrorHandler',
        ],
    ],
    'params' => [
        'CLog' => [
            'queue' => 'queue_logs',
            'exchange' => 'logstash',
            'routing' => 'logs'
        ],
        'CTicket' => [
            'queue' => 'queue_ticket',
            'exchange' => 'async',
            'routing' => 'ticket'
        ],
        'DTicket' => [
            'queue' => 'queue_delay_ticket',
            'exchange' => 'delay',
            'routing' => 'delay_ticket',
            'x_exchange' => 'async',
            'x_routing' => 'ticket'
        ],
    ],
);