<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemsSellerListGetPropImg {

    /**
        属性图片的id，和商品相对应
     **/
    public $id;

    /**
        图片放在第几张（多图时可设置）
     **/
    public $position;

    /**
        图片所对应的属性组合的字符串
     **/
    public $properties;

    /**
        图片链接地址
     **/
    public $url;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getPosition() : int{
        return $this->position;
    }

    public function setPosition(int $position){
        $this->position = $position;
    }

    public function getProperties() : string{
        return $this->properties;
    }

    public function setProperties(string $properties){
        $this->properties = $properties;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }


}

