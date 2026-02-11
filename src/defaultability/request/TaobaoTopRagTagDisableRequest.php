<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagTagDisableRequest {

    /**
        标签 code, 2-10个字符，仅支持英文和下划线，类目下唯一 
     **/
    private $tagCode;

    /**
        标签类目
     **/
    private $cateName;


    public function getTagCode() : string{
        return $this->tagCode;
    }

    public function setTagCode(string $tagCode){
        $this->tagCode = $tagCode;
    }

    public function getCateName() : string{
        return $this->cateName;
    }

    public function setCateName(string $cateName){
        $this->cateName = $cateName;
    }


    public function getApiName() : string {
        return "taobao.top.rag.tag.disable";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tagCode)) {
            $requestParam["tag_code"] = TopUtil::convertBasic($this->tagCode);
        }

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

