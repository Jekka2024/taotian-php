<?php
namespace Topsdk\Topapi\Ability2587\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoRosefinchTunnelDownloadsignRequest {

    /**
        ODPS加签文本
     **/
    private $strToSign;


    public function getStrToSign() : string{
        return $this->strToSign;
    }

    public function setStrToSign(string $strToSign){
        $this->strToSign = $strToSign;
    }


    public function getApiName() : string {
        return "taobao.rosefinch.tunnel.downloadsign";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->strToSign)) {
            $requestParam["str_to_sign"] = TopUtil::convertBasic($this->strToSign);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

