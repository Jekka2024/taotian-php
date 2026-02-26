<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoOpenAipaasAlertMessageSendSendAiAppAlertMessageRequest;

class TaobaoOpenAipaasAlertMessageSendRequest {

    /**
        请求
     **/
    private $sendAiAppAlertMessageRequest;


    public function getSendAiAppAlertMessageRequest() : TaobaoOpenAipaasAlertMessageSendSendAiAppAlertMessageRequest{
        return $this->sendAiAppAlertMessageRequest;
    }

    public function setSendAiAppAlertMessageRequest(TaobaoOpenAipaasAlertMessageSendSendAiAppAlertMessageRequest $sendAiAppAlertMessageRequest){
        $this->sendAiAppAlertMessageRequest = $sendAiAppAlertMessageRequest;
    }


    public function getApiName() : string {
        return "taobao.open.aipaas.alert.message.send";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->sendAiAppAlertMessageRequest)) {
            $requestParam["send_ai_app_alert_message_request"] = TopUtil::convertStruct($this->sendAiAppAlertMessageRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

