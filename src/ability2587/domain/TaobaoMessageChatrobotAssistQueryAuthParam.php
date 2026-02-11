<?php
namespace Topsdk\Topapi\Ability2587\Domain;

class TaobaoMessageChatrobotAssistQueryAuthParam {

    /**
        请求token，数据平台申请并分配
     **/
    public $request_token;


    public function getRequestToken() : string{
        return $this->request_token;
    }

    public function setRequestToken(string $requestToken){
        $this->request_token = $requestToken;
    }


}

