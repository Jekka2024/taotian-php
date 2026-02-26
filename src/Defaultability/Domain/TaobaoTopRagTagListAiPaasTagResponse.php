<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagTagListAiPaasTagResponse {

    /**
        标签code, 2-10个字符，仅英文&下划线，类目下唯一
     **/
    public $tag_code;

    /**
        标签名称, 2-8个字符，仅英文&下划线，类目下唯一
     **/
    public $name;

    /**
        tag类目
     **/
    public $cate_name;

    /**
        标签描述
     **/
    public $description;


    public function getTagCode() : string{
        return $this->tag_code;
    }

    public function setTagCode(string $tagCode){
        $this->tag_code = $tagCode;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getCateName() : string{
        return $this->cate_name;
    }

    public function setCateName(string $cateName){
        $this->cate_name = $cateName;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }


}

