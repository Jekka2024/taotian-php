<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagInfraKnowledgeQueryRequest {

    /**
        知识库 ID
     **/
    private $id;

    /**
        知识库 ID 列表
     **/
    private $idList;

    /**
        页码。正整数，默认值为1。当深翻时(page_no*page_size>1万),为了性能考虑，部分接口将报错。请尽可能细化搜索，如:根据时间分段
     **/
    private $pageNo;

    /**
        每页获取条数。正整数，默认值10，最大值100。
     **/
    private $pageSize;

    /**
        起始时间,默认不限制,注意部分接口支持时间区间有限,当时间点过于不合理可能查询报错
     **/
    private $startDate;

    /**
        结束时间,默认不限制,注意部分接口支持时间区间有限,当时间点过于不合理可能查询报错
     **/
    private $endDate;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getIdList() : array{
        return $this->idList;
    }

    public function setIdList(array $idList){
        $this->idList = $idList;
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

    public function getStartDate() : string{
        return $this->startDate;
    }

    public function setStartDate(string $startDate){
        $this->startDate = $startDate;
    }

    public function getEndDate() : string{
        return $this->endDate;
    }

    public function setEndDate(string $endDate){
        $this->endDate = $endDate;
    }


    public function getApiName() : string {
        return "taobao.top.rag.infra.knowledge.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->id)) {
            $requestParam["id"] = TopUtil::convertBasic($this->id);
        }

        if (!TopUtil::checkEmpty($this->idList)) {
            $requestParam["id_list"] = TopUtil::convertBasicList($this->idList);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->startDate)) {
            $requestParam["start_date"] = TopUtil::convertBasic($this->startDate);
        }

        if (!TopUtil::checkEmpty($this->endDate)) {
            $requestParam["end_date"] = TopUtil::convertBasic($this->endDate);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

