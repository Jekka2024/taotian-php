<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemSellerGetCuntaoItemSpecific {

    /**
        村淘商品级佣金率
     **/
    public $kick_back_rate;


    public function getKickBackRate() : string{
        return $this->kick_back_rate;
    }

    public function setKickBackRate(string $kickBackRate){
        $this->kick_back_rate = $kickBackRate;
    }


}

