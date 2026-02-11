<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagTagUnitMarkRequest {

    /**
        当前操作的支持单元id
     **/
    private $unitId;

    /**
        标签信息
     **/
    private $tags;


    public function getUnitId() : int{
        return $this->unitId;
    }

    public function setUnitId(int $unitId){
        $this->unitId = $unitId;
    }

    public function getTags() : array{
        return $this->tags;
    }

    public function setTags(array $tags){
        $this->tags = $tags;
    }


    public function getApiName() : string {
        return "taobao.top.rag.tag.unit.mark";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->unitId)) {
            $requestParam["unit_id"] = TopUtil::convertBasic($this->unitId);
        }

        if (!TopUtil::checkEmpty($this->tags)) {
            $requestParam["tags"] = TopUtil::convertStructList($this->tags);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

