<?php
namespace Topsdk\Topapi\Ability2587\Domain;

class TaobaoMessageChatrobotAsyncStressTestActionBody {

    /**
        数据action对应body数据
     **/
    public $body;

    /**
        请求header
     **/
    public $header;


    public function getBody() : TaobaoMessageChatrobotAsyncStressTestChatMessage{
        return $this->body;
    }

    public function setBody(TaobaoMessageChatrobotAsyncStressTestChatMessage $body){
        $this->body = $body;
    }

    public function getHeader() : TaobaoMessageChatrobotAsyncStressTestHeader{
        return $this->header;
    }

    public function setHeader(TaobaoMessageChatrobotAsyncStressTestHeader $header){
        $this->header = $header;
    }


}

