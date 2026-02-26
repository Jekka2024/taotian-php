<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagChunkListBasePageResult {

    /**
        结果集合 List<T>
     **/
    public $ai_paas_knowledge_doc_vector_biz_d_t_o_list;

    /**
        总页数
     **/
    public $total_page;

    /**
        总数
     **/
    public $total_count;


    public function getAiPaasKnowledgeDocVectorBizDTOList() : array{
        return $this->ai_paas_knowledge_doc_vector_biz_d_t_o_list;
    }

    public function setAiPaasKnowledgeDocVectorBizDTOList(array $aiPaasKnowledgeDocVectorBizDTOList){
        $this->ai_paas_knowledge_doc_vector_biz_d_t_o_list = $aiPaasKnowledgeDocVectorBizDTOList;
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

