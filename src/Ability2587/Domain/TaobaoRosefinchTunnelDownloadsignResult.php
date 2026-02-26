<?php
namespace Topsdk\Topapi\Ability2587\Domain;

class TaobaoRosefinchTunnelDownloadsignResult {

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
        签名
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

    public function getValue() : string{
        return $this->value;
    }

    public function setValue(string $value){
        $this->value = $value;
    }


}

