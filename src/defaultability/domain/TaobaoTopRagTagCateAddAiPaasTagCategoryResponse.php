<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagTagCateAddAiPaasTagCategoryResponse {

    /**
        类型名称
     **/
    public $name;

    /**
        同一个知识点最多可打N个此类型标签，默认1
     **/
    public $max_mark_count;


    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getMaxMarkCount() : int{
        return $this->max_mark_count;
    }

    public function setMaxMarkCount(int $maxMarkCount){
        $this->max_mark_count = $maxMarkCount;
    }


}

