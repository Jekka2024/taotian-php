<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagTagUpdateRequest {

    /**
        标签code, 2-10个字符，仅英文&下划线，类目下唯一 
     **/
    private $tagCode;

    /**
        标签名称, 2-8个字符，仅英文&下划线，类目下唯一
     **/
    private $tagName;

    /**
        tag类目
     **/
    private $cateName;

    /**
        标签描述
     **/
    private $description;


    public function getTagCode() : string{
        return $this->tagCode;
    }

    public function setTagCode(string $tagCode){
        $this->tagCode = $tagCode;
    }

    public function getTagName() : string{
        return $this->tagName;
    }

    public function setTagName(string $tagName){
        $this->tagName = $tagName;
    }

    public function getCateName() : string{
        return $this->cateName;
    }

    public function setCateName(string $cateName){
        $this->cateName = $cateName;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }


    public function getApiName() : string {
        return "taobao.top.rag.tag.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tagCode)) {
            $requestParam["tag_code"] = TopUtil::convertBasic($this->tagCode);
        }

        if (!TopUtil::checkEmpty($this->tagName)) {
            $requestParam["tag_name"] = TopUtil::convertBasic($this->tagName);
        }

        if (!TopUtil::checkEmpty($this->cateName)) {
            $requestParam["cate_name"] = TopUtil::convertBasic($this->cateName);
        }

        if (!TopUtil::checkEmpty($this->description)) {
            $requestParam["description"] = TopUtil::convertBasic($this->description);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

