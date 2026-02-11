<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagKnowledgeListBasePageResult {

    /**
        结果集合 List<T>
     **/
    public $ai_paas_knowledge_biz_d_t_o_list;

    /**
        总页数
     **/
    public $total_page;

    /**
        总数
     **/
    public $total_count;


    public function getAiPaasKnowledgeBizDTOList() : array{
        return $this->ai_paas_knowledge_biz_d_t_o_list;
    }

    public function setAiPaasKnowledgeBizDTOList(array $aiPaasKnowledgeBizDTOList){
        $this->ai_paas_knowledge_biz_d_t_o_list = $aiPaasKnowledgeBizDTOList;
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

