<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagTagChunkUnmarkAiRagTagOpen {

    /**
        标签code
     **/
    public $tag_code;

    /**
        标签分类名称2-10个字
     **/
    public $cate_name;


    public function getTagCode() : string{
        return $this->tag_code;
    }

    public function setTagCode(string $tagCode){
        $this->tag_code = $tagCode;
    }

    public function getCateName() : string{
        return $this->cate_name;
    }

    public function setCateName(string $cateName){
        $this->cate_name = $cateName;
    }


}

