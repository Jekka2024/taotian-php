<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagTagCateUpdateRequest {

    /**
        类型名称
     **/
    private $cateName;

    /**
        同一个知识点最多可打N个此类型标签，默认1
     **/
    private $maxMarkCount;


    public function getCateName() : string{
        return $this->cateName;
    }

    public function setCateName(string $cateName){
        $this->cateName = $cateName;
    }

    public function getMaxMarkCount() : int{
        return $this->maxMarkCount;
    }

    public function setMaxMarkCount(int $maxMarkCount){
        $this->maxMarkCount = $maxMarkCount;
    }


    public function getApiName() : string {
        return "taobao.top.rag.tag.cate.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->cateName)) {
            $requestParam["cate_name"] = TopUtil::convertBasic($this->cateName);
        }

        if (!TopUtil::checkEmpty($this->maxMarkCount)) {
            $requestParam["max_mark_count"] = TopUtil::convertBasic($this->maxMarkCount);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

