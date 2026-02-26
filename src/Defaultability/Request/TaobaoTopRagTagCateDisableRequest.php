<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagTagCateDisableRequest {

    /**
        类型名称
     **/
    private $cateName;


    public function getCateName() : string{
        return $this->cateName;
    }

    public function setCateName(string $cateName){
        $this->cateName = $cateName;
    }


    public function getApiName() : string {
        return "taobao.top.rag.tag.cate.disable";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->cateName)) {
            $requestParam["cate_name"] = TopUtil::convertBasic($this->cateName);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

