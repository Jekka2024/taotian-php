<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoOpenAipaasTokenGetAiAppOpenCredentialsRequest;

class TaobaoOpenAipaasTokenGetRequest {

    /**
        请求
     **/
    private $aiAppOpenCredentialsRequest;


    public function getAiAppOpenCredentialsRequest() : TaobaoOpenAipaasTokenGetAiAppOpenCredentialsRequest{
        return $this->aiAppOpenCredentialsRequest;
    }

    public function setAiAppOpenCredentialsRequest(TaobaoOpenAipaasTokenGetAiAppOpenCredentialsRequest $aiAppOpenCredentialsRequest){
        $this->aiAppOpenCredentialsRequest = $aiAppOpenCredentialsRequest;
    }


    public function getApiName() : string {
        return "taobao.open.aipaas.token.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->aiAppOpenCredentialsRequest)) {
            $requestParam["ai_app_open_credentials_request"] = TopUtil::convertStruct($this->aiAppOpenCredentialsRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

