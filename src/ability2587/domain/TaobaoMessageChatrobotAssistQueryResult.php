<?php
namespace Topsdk\Topapi\Ability2587\Domain;

class TaobaoMessageChatrobotAssistQueryResult {

    /**
        code
     **/
    public $code;

    /**
        是否成功
     **/
    public $success;

    /**
        message
     **/
    public $message;

    /**
        value
     **/
    public $values;


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

    public function getValues() : array{
        return $this->values;
    }

    public function setValues(array $values){
        $this->values = $values;
    }


}

