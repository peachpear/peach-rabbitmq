<?php
namespace console\workers;

use Yii;

class Log
{
    /**
     * @param $envelope
     * @param $queue
     */
    public function run($envelope, $queue)
    {
        $msg = $envelope->getBody();
        $queue->ack($envelope->getDeliveryTag());
    }
}