<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemsSellerListGetLocation {

    /**
        所在城市（中文名称）
     **/
    public $city;

    /**
        所在省份（中文名称）
     **/
    public $state;


    public function getCity() : string{
        return $this->city;
    }

    public function setCity(string $city){
        $this->city = $city;
    }

    public function getState() : string{
        return $this->state;
    }

    public function setState(string $state){
        $this->state = $state;
    }


}

