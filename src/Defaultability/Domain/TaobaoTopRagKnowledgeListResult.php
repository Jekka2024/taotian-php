<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagKnowledgeListResult {

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
    public $ai_paas_knowledge_biz_d_t_o_base_page_result;


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

    public function getAiPaasKnowledgeBizDTOBasePageResult() : TaobaoTopRagKnowledgeListBasePageResult{
        return $this->ai_paas_knowledge_biz_d_t_o_base_page_result;
    }

    public function setAiPaasKnowledgeBizDTOBasePageResult(TaobaoTopRagKnowledgeListBasePageResult $aiPaasKnowledgeBizDTOBasePageResult){
        $this->ai_paas_knowledge_biz_d_t_o_base_page_result = $aiPaasKnowledgeBizDTOBasePageResult;
    }


}

