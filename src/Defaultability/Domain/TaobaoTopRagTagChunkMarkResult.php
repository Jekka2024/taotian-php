<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagTagChunkMarkResult {

    /**
        是否成功
     **/
    public $success;

    /**
        错误编码
     **/
    public $code;

    /**
        错误信息
     **/
    public $error_msg;

    /**
        响应结果
     **/
    public $ai_rag_mark_batch_open_response_list;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getCode() : int{
        return $this->code;
    }

    public function setCode(int $code){
        $this->code = $code;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }

    public function getAiRagMarkBatchOpenResponseList() : array{
        return $this->ai_rag_mark_batch_open_response_list;
    }

    public function setAiRagMarkBatchOpenResponseList(array $aiRagMarkBatchOpenResponseList){
        $this->ai_rag_mark_batch_open_response_list = $aiRagMarkBatchOpenResponseList;
    }


}

