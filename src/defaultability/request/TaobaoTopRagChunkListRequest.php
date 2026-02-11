<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagChunkListRequest {

    /**
        chunk ID 主键列表
     **/
    private $ids;

    /**
        知识库 ID
     **/
    private $knowledgeId;

    /**
        知识单元 ID
     **/
    private $unitId;

    /**
        页码。正整数，默认值为1。当深翻时(page_no*page_size>1万),为了性能考虑，部分接口将报错。请尽可能细化搜索，如:根据时间分段
     **/
    private $pageNo;

    /**
        每页获取条数。正整数，默认值10，最大值100。
     **/
    private $pageSize;


    public function getIds() : array{
        return $this->ids;
    }

    public function setIds(array $ids){
        $this->ids = $ids;
    }

    public function getKnowledgeId() : int{
        return $this->knowledgeId;
    }

    public function setKnowledgeId(int $knowledgeId){
        $this->knowledgeId = $knowledgeId;
    }

    public function getUnitId() : int{
        return $this->unitId;
    }

    public function setUnitId(int $unitId){
        $this->unitId = $unitId;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }


    public function getApiName() : string {
        return "taobao.top.rag.chunk.list";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->ids)) {
            $requestParam["ids"] = TopUtil::convertBasicList($this->ids);
        }

        if (!TopUtil::checkEmpty($this->knowledgeId)) {
            $requestParam["knowledge_id"] = TopUtil::convertBasic($this->knowledgeId);
        }

        if (!TopUtil::checkEmpty($this->unitId)) {
            $requestParam["unit_id"] = TopUtil::convertBasic($this->unitId);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
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

