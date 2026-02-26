<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagInfraKnowledgeUpdateTaoAgentResult {

    /**
        调用是否成功
     **/
    public $success;

    /**
        调用真实响应内容
     **/
    public $data;

    /**
        错误码
     **/
    public $err_code;

    /**
        错误消息
     **/
    public $err_msg;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getData() : bool{
        return $this->data;
    }

    public function setData(bool $data){
        $this->data = $data;
    }

    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
    }

    public function getErrMsg() : string{
        return $this->err_msg;
    }

    public function setErrMsg(string $errMsg){
        $this->err_msg = $errMsg;
    }


}

