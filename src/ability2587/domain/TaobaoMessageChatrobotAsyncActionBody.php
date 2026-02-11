<?php
namespace Topsdk\Topapi\Ability2587\Domain;

class TaobaoMessageChatrobotAsyncActionBody {

    /**
        数据action对应body数据
     **/
    public $body;

    /**
        请求header
     **/
    public $header;


    public function getBody() : TaobaoMessageChatrobotAsyncChatMessage{
        return $this->body;
    }

    public function setBody(TaobaoMessageChatrobotAsyncChatMessage $body){
        $this->body = $body;
    }

    public function getHeader() : TaobaoMessageChatrobotAsyncHeader{
        return $this->header;
    }

    public function setHeader(TaobaoMessageChatrobotAsyncHeader $header){
        $this->header = $header;
    }


}

