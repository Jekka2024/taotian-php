<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagTagChunkUnmarkAiRagMarkOpenResponse {

    /**
        标签 Code
     **/
    public $tag_code;

    /**
        类目名称
     **/
    public $cate_name;

    /**
        是否成功
     **/
    public $success;

    /**
        错误信息
     **/
    public $error_msg;


    public function getTagCode() : string{
        return $this->tag_code;
    }

    public function setTagCode(string $tagCode){
        $this->tag_code = $tagCode;
    }

    public function getCateName() : string{
        return $this->cate_name;
    }

    public function setCateName(string $cateName){
        $this->cate_name = $cateName;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}

