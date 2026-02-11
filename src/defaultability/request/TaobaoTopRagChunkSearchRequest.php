<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagChunkSearchRequest {

    /**
        知识库 ID List
     **/
    private $knowledgeIdList;

    /**
        查询语句
     **/
    private $query;

    /**
        返回 topN 个数
     **/
    private $topN;

    /**
        搜索类型, 1.向量查询 Doc 2.向量查询 QA 3. 根据 target_ids 精确匹配全量召回
     **/
    private $searchTypeList;

    /**
        标签字符串，多值使用','分割,为 and 关系
     **/
    private $searchIds;

    /**
        JSON 序列化数组
     **/
    private $tags;

    /**
        searchType 传 [3] ，精确全量召回时使用
     **/
    private $pageIndex;

    /**
        searchType 传 [3] ，精确全量召回时使用
     **/
    private $pageSize;


    public function getKnowledgeIdList() : array{
        return $this->knowledgeIdList;
    }

    public function setKnowledgeIdList(array $knowledgeIdList){
        $this->knowledgeIdList = $knowledgeIdList;
    }

    public function getQuery() : string{
        return $this->query;
    }

    public function setQuery(string $query){
        $this->query = $query;
    }

    public function getTopN() : int{
        return $this->topN;
    }

    public function setTopN(int $topN){
        $this->topN = $topN;
    }

    public function getSearchTypeList() : array{
        return $this->searchTypeList;
    }

    public function setSearchTypeList(array $searchTypeList){
        $this->searchTypeList = $searchTypeList;
    }

    public function getSearchIds() : string{
        return $this->searchIds;
    }

    public function setSearchIds(string $searchIds){
        $this->searchIds = $searchIds;
    }

    public function getTags() : string{
        return $this->tags;
    }

    public function setTags(string $tags){
        $this->tags = $tags;
    }

    public function getPageIndex() : int{
        return $this->pageIndex;
    }

    public function setPageIndex(int $pageIndex){
        $this->pageIndex = $pageIndex;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }


    public function getApiName() : string {
        return "taobao.top.rag.chunk.search";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->knowledgeIdList)) {
            $requestParam["knowledge_id_list"] = TopUtil::convertBasicList($this->knowledgeIdList);
        }

        if (!TopUtil::checkEmpty($this->query)) {
            $requestParam["query"] = TopUtil::convertBasic($this->query);
        }

        if (!TopUtil::checkEmpty($this->topN)) {
            $requestParam["top_n"] = TopUtil::convertBasic($this->topN);
        }

        if (!TopUtil::checkEmpty($this->searchTypeList)) {
            $requestParam["search_type_list"] = TopUtil::convertBasicList($this->searchTypeList);
        }

        if (!TopUtil::checkEmpty($this->searchIds)) {
            $requestParam["search_ids"] = TopUtil::convertBasic($this->searchIds);
        }

        if (!TopUtil::checkEmpty($this->tags)) {
            $requestParam["tags"] = TopUtil::convertBasic($this->tags);
        }

        if (!TopUtil::checkEmpty($this->pageIndex)) {
            $requestParam["page_index"] = TopUtil::convertBasic($this->pageIndex);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

