<?php
namespace Topsdk\Topapi\Ability2587\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2587\Domain\TaobaoMessageChatrobotAssistQueryAuthParam;

class TaobaoMessageChatrobotAssistQueryRequest {

    /**
        授权参数
     **/
    private $authParam;

    /**
        归宿租户id，数据平台申请并分配
     **/
    private $tenantId;


    public function getAuthParam() : TaobaoMessageChatrobotAssistQueryAuthParam{
        return $this->authParam;
    }

    public function setAuthParam(TaobaoMessageChatrobotAssistQueryAuthParam $authParam){
        $this->authParam = $authParam;
    }

    public function getTenantId() : int{
        return $this->tenantId;
    }

    public function setTenantId(int $tenantId){
        $this->tenantId = $tenantId;
    }


    public function getApiName() : string {
        return "taobao.message.chatrobot.assist.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->authParam)) {
            $requestParam["auth_param"] = TopUtil::convertStruct($this->authParam);
        }

        if (!TopUtil::checkEmpty($this->tenantId)) {
            $requestParam["tenant_id"] = TopUtil::convertBasic($this->tenantId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

