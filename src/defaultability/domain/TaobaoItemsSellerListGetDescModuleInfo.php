<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemsSellerListGetDescModuleInfo {

    /**
        代表宝贝描述中规范化打标使用到的模块id列表，以逗号分隔。
     **/
    public $anchor_module_ids;

    /**
        类型代表规范化打标的类型：人工或自动化
     **/
    public $type;


    public function getAnchorModuleIds() : string{
        return $this->anchor_module_ids;
    }

    public function setAnchorModuleIds(string $anchorModuleIds){
        $this->anchor_module_ids = $anchorModuleIds;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }


}

