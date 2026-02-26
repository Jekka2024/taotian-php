<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoOpenAipaasAlertMessageSendSendAiAppAlertMessageRequest {

    /**
        接收消息的机器人地址
     **/
    public $webhook;

    /**
        @群成员
     **/
    public $at;

    /**
        消息渠道（dingRobot/wxRobot/fsRobot）
     **/
    public $channel;

    /**
        消息内容
     **/
    public $content;


    public function getWebhook() : string{
        return $this->webhook;
    }

    public function setWebhook(string $webhook){
        $this->webhook = $webhook;
    }

    public function getAt() : TaobaoOpenAipaasAlertMessageSendAtConfig{
        return $this->at;
    }

    public function setAt(TaobaoOpenAipaasAlertMessageSendAtConfig $at){
        $this->at = $at;
    }

    public function getChannel() : string{
        return $this->channel;
    }

    public function setChannel(string $channel){
        $this->channel = $channel;
    }

    public function getContent() : string{
        return $this->content;
    }

    public function setContent(string $content){
        $this->content = $content;
    }


}

