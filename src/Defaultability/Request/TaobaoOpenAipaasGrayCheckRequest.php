<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoOpenAipaasGrayCheckAiAppCheckHitRequest;

class TaobaoOpenAipaasGrayCheckRequest {

    /**
        请求
     **/
    private $aiAppCheckHitRequest;


    public function getAiAppCheckHitRequest() : TaobaoOpenAipaasGrayCheckAiAppCheckHitRequest{
        return $this->aiAppCheckHitRequest;
    }

    public function setAiAppCheckHitRequest(TaobaoOpenAipaasGrayCheckAiAppCheckHitRequest $aiAppCheckHitRequest){
        $this->aiAppCheckHitRequest = $aiAppCheckHitRequest;
    }


    public function getApiName() : string {
        return "taobao.open.aipaas.gray.check";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->aiAppCheckHitRequest)) {
            $requestParam["ai_app_check_hit_request"] = TopUtil::convertStruct($this->aiAppCheckHitRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

