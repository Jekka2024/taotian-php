<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoOpenAipaasAlertMessageSendAtConfig {

    /**
        是否@所有人
     **/
    public $is_at_all;

    /**
        @用户ID列表
     **/
    public $at_user_ids;

    /**
        @手机号ID列表
     **/
    public $at_mobiles;


    public function getIsAtAll() : bool{
        return $this->is_at_all;
    }

    public function setIsAtAll(bool $isAtAll){
        $this->is_at_all = $isAtAll;
    }

    public function getAtUserIds() : array{
        return $this->at_user_ids;
    }

    public function setAtUserIds(array $atUserIds){
        $this->at_user_ids = $atUserIds;
    }

    public function getAtMobiles() : array{
        return $this->at_mobiles;
    }

    public function setAtMobiles(array $atMobiles){
        $this->at_mobiles = $atMobiles;
    }


}

