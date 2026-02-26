<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoMessageChatrobotStatusSwitchRequest {

    /**
        买家open_id
     **/
    private $buyerOpenId;

    /**
        客服帐号nick
     **/
    private $senderNick;

    /**
        从上行event的header中获取
     **/
    private $tenantId;


    public function getBuyerOpenId() : string{
        return $this->buyerOpenId;
    }

    public function setBuyerOpenId(string $buyerOpenId){
        $this->buyerOpenId = $buyerOpenId;
    }

    public function getSenderNick() : string{
        return $this->senderNick;
    }

    public function setSenderNick(string $senderNick){
        $this->senderNick = $senderNick;
    }

    public function getTenantId() : int{
        return $this->tenantId;
    }

    public function setTenantId(int $tenantId){
        $this->tenantId = $tenantId;
    }


    public function getApiName() : string {
        return "taobao.message.chatrobot.status.switch";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->buyerOpenId)) {
            $requestParam["buyer_open_id"] = TopUtil::convertBasic($this->buyerOpenId);
        }

        if (!TopUtil::checkEmpty($this->senderNick)) {
            $requestParam["sender_nick"] = TopUtil::convertBasic($this->senderNick);
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

