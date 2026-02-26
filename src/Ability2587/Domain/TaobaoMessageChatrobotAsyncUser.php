<?php
namespace Topsdk\Topapi\Ability2587\Domain;

class TaobaoMessageChatrobotAsyncUser {

    /**
        账号nick
     **/
    public $nick;

    /**
        账号域，可以从上行消息中获取
     **/
    public $user_domain;

    /**
        开放加密账号uid
     **/
    public $open_uid;


    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getUserDomain() : string{
        return $this->user_domain;
    }

    public function setUserDomain(string $userDomain){
        $this->user_domain = $userDomain;
    }

    public function getOpenUid() : string{
        return $this->open_uid;
    }

    public function setOpenUid(string $openUid){
        $this->open_uid = $openUid;
    }


}

