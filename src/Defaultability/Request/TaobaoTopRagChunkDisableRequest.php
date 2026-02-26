<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagChunkDisableRequest {

    /**
        知识 chunk ID 列表
     **/
    private $ids;


    public function getIds() : array{
        return $this->ids;
    }

    public function setIds(array $ids){
        $this->ids = $ids;
    }


    public function getApiName() : string {
        return "taobao.top.rag.chunk.disable";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->ids)) {
            $requestParam["ids"] = TopUtil::convertBasicList($this->ids);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

