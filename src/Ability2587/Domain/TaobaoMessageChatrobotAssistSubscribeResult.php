<?php
namespace Topsdk\Topapi\Ability2587\Domain;

class TaobaoMessageChatrobotAssistSubscribeResult {

    /**
        错误码
     **/
    public $code;

    /**
        是否成功
     **/
    public $success;

    /**
        错误信息
     **/
    public $message;

    /**
        结果
     **/
    public $value;


    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getMessage() : string{
        return $this->message;
    }

    public function setMessage(string $message){
        $this->message = $message;
    }

    public function getValue() : bool{
        return $this->value;
    }

    public function setValue(bool $value){
        $this->value = $value;
    }


}

