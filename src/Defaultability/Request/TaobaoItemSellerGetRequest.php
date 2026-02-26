<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemSellerGetRequest {

    /**
        需要返回的商品字段列表。可选值：Item商品结构体中所有字段均可返回，多个字段用“,”分隔。
     **/
    private $fields;

    /**
        商品数字ID
     **/
    private $numIid;


    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getNumIid() : int{
        return $this->numIid;
    }

    public function setNumIid(int $numIid){
        $this->numIid = $numIid;
    }


    public function getApiName() : string {
        return "taobao.item.seller.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->numIid)) {
            $requestParam["num_iid"] = TopUtil::convertBasic($this->numIid);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

