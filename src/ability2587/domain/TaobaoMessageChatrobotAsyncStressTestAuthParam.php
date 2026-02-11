<?php
namespace Topsdk\Topapi\Ability2587\Domain;

class TaobaoMessageChatrobotAsyncStressTestAuthParam {

    /**
        请求服务的访问token,数据平台颁发
     **/
    public $request_token;


    public function getRequestToken() : string{
        return $this->request_token;
    }

    public function setRequestToken(string $requestToken){
        $this->request_token = $requestToken;
    }


}

