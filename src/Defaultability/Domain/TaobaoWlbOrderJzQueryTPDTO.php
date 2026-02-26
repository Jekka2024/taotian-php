<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoWlbOrderJzQueryTPDTO {

    /**
        公司编码
     **/
    public $code;

    /**
        公司名称
     **/
    public $name;

    /**
        是否商家绑定的默认安装公司
     **/
    public $is_default;


    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getIsDefault() : bool{
        return $this->is_default;
    }

    public function setIsDefault(bool $isDefault){
        $this->is_default = $isDefault;
    }


}

