<?php
namespace Topsdk\Topapi\Ability2587\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2587\Domain\TaobaoMessageChatrobotAssistSubscribeAuthParam;

class TaobaoMessageChatrobotAssistSubscribeRequest {

    /**
        系统自动生成
     **/
    private $authParam;

    /**
        归宿租户id，数据平台申请并分配
     **/
    private $tenantId;

    /**
        需要启用的账号Nicks，只能统一店铺下的账号 目前最大不能超过50
     **/
    private $userNicks;

    /**
        true/false，启用还是关闭
     **/
    private $status;


    public function getAuthParam() : TaobaoMessageChatrobotAssistSubscribeAuthParam{
        return $this->authParam;
    }

    public function setAuthParam(TaobaoMessageChatrobotAssistSubscribeAuthParam $authParam){
        $this->authParam = $authParam;
    }

    public function getTenantId() : int{
        return $this->tenantId;
    }

    public function setTenantId(int $tenantId){
        $this->tenantId = $tenantId;
    }

    public function getUserNicks() : array{
        return $this->userNicks;
    }

    public function setUserNicks(array $userNicks){
        $this->userNicks = $userNicks;
    }

    public function getStatus() : bool{
        return $this->status;
    }

    public function setStatus(bool $status){
        $this->status = $status;
    }


    public function getApiName() : string {
        return "taobao.message.chatrobot.assist.subscribe";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->authParam)) {
            $requestParam["auth_param"] = TopUtil::convertStruct($this->authParam);
        }

        if (!TopUtil::checkEmpty($this->tenantId)) {
            $requestParam["tenant_id"] = TopUtil::convertBasic($this->tenantId);
        }

        if (!TopUtil::checkEmpty($this->userNicks)) {
            $requestParam["user_nicks"] = TopUtil::convertBasicList($this->userNicks);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

