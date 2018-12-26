<?php
namespace console\workers;

use common\service\MailService;
use Yii;

class Mail
{
    /**
     * @param $envelope
     * @param $queue
     */
    public function run($envelope, $queue)
    {
        $msg = $envelope->getBody();
        MailService::sendMailOfQueue($msg);
        Yii::$app->demoDB->close();
        $queue->ack($envelope->getDeliveryTag());
    }
}