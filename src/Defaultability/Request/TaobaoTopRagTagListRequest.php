<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagTagListRequest {

    /**
        tag类目
     **/
    private $cateName;

    /**
        每页大小
     **/
    private $pageSize;

    /**
        页数，1开始
     **/
    private $pageNum;


    public function getCateName() : string{
        return $this->cateName;
    }

    public function setCateName(string $cateName){
        $this->cateName = $cateName;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getPageNum() : int{
        return $this->pageNum;
    }

    public function setPageNum(int $pageNum){
        $this->pageNum = $pageNum;
    }


    public function getApiName() : string {
        return "taobao.top.rag.tag.list";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->cateName)) {
            $requestParam["cate_name"] = TopUtil::convertBasic($this->cateName);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->pageNum)) {
            $requestParam["page_num"] = TopUtil::convertBasic($this->pageNum);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

