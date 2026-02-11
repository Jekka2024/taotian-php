<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagTagCateListBasePageResult {

    /**
        结果集合 List<T>
     **/
    public $ai_paas_tag_category_response_list;

    /**
        总页数
     **/
    public $total_page;

    /**
        总数
     **/
    public $total_count;


    public function getAiPaasTagCategoryResponseList() : array{
        return $this->ai_paas_tag_category_response_list;
    }

    public function setAiPaasTagCategoryResponseList(array $aiPaasTagCategoryResponseList){
        $this->ai_paas_tag_category_response_list = $aiPaasTagCategoryResponseList;
    }

    public function getTotalPage() : int{
        return $this->total_page;
    }

    public function setTotalPage(int $totalPage){
        $this->total_page = $totalPage;
    }

    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }


}

