<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagTagCateListResult {

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
    public $ai_paas_tag_category_response_base_page_result;


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

    public function getAiPaasTagCategoryResponseBasePageResult() : TaobaoTopRagTagCateListBasePageResult{
        return $this->ai_paas_tag_category_response_base_page_result;
    }

    public function setAiPaasTagCategoryResponseBasePageResult(TaobaoTopRagTagCateListBasePageResult $aiPaasTagCategoryResponseBasePageResult){
        $this->ai_paas_tag_category_response_base_page_result = $aiPaasTagCategoryResponseBasePageResult;
    }


}

