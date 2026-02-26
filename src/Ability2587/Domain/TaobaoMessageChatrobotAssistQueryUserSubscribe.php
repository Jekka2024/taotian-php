<?php
namespace Topsdk\Topapi\Ability2587\Domain;

class TaobaoMessageChatrobotAssistQueryUserSubscribe {

    /**
        已经开启的账号nick
     **/
    public $user_nick;

    /**
        租户ID
     **/
    public $tenant_id;


    public function getUserNick() : string{
        return $this->user_nick;
    }

    public function setUserNick(string $userNick){
        $this->user_nick = $userNick;
    }

    public function getTenantId() : int{
        return $this->tenant_id;
    }

    public function setTenantId(int $tenantId){
        $this->tenant_id = $tenantId;
    }


}

