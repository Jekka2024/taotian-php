<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagTagCateListRequest {

    /**
        类型名称
     **/
    private $catName;

    /**
        每页大小
     **/
    private $pageSize;

    /**
        页数，1开始
     **/
    private $pageNum;


    public function getCatName() : string{
        return $this->catName;
    }

    public function setCatName(string $catName){
        $this->catName = $catName;
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
        return "taobao.top.rag.tag.cate.list";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->catName)) {
            $requestParam["cat_name"] = TopUtil::convertBasic($this->catName);
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

