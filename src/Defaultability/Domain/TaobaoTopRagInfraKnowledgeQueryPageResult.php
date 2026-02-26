<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagInfraKnowledgeQueryPageResult {

    /**
        数据列表
     **/
    public $top_rag_knowledge_response_list;

    /**
        总记录数
     **/
    public $total;

    /**
        总页数
     **/
    public $pages;

    /**
        当前页
     **/
    public $page_num;

    /**
        每页大小
     **/
    public $page_size;


    public function getTopRagKnowledgeResponseList() : array{
        return $this->top_rag_knowledge_response_list;
    }

    public function setTopRagKnowledgeResponseList(array $topRagKnowledgeResponseList){
        $this->top_rag_knowledge_response_list = $topRagKnowledgeResponseList;
    }

    public function getTotal() : int{
        return $this->total;
    }

    public function setTotal(int $total){
        $this->total = $total;
    }

    public function getPages() : int{
        return $this->pages;
    }

    public function setPages(int $pages){
        $this->pages = $pages;
    }

    public function getPageNum() : int{
        return $this->page_num;
    }

    public function setPageNum(int $pageNum){
        $this->page_num = $pageNum;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }


}

