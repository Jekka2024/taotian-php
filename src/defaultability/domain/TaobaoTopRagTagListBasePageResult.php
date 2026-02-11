<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagTagListBasePageResult {

    /**
        结果集合 List<T>
     **/
    public $ai_paas_tag_response_list;

    /**
        总页数
     **/
    public $total_page;

    /**
        总数
     **/
    public $total_count;


    public function getAiPaasTagResponseList() : array{
        return $this->ai_paas_tag_response_list;
    }

    public function setAiPaasTagResponseList(array $aiPaasTagResponseList){
        $this->ai_paas_tag_response_list = $aiPaasTagResponseList;
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

