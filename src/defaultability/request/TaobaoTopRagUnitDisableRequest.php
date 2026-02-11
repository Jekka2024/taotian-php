<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagUnitDisableRequest {

    /**
        知识单元 ID
     **/
    private $id;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }


    public function getApiName() : string {
        return "taobao.top.rag.unit.disable";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->id)) {
            $requestParam["id"] = TopUtil::convertBasic($this->id);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

