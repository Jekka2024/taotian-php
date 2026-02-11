<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItemsSellerListGetRequest {

    /**
        需要返回的商品字段列表。可选值：点击返回结果中的Item结构体中能展示出来的所有字段，多个字段用“,”分隔。注：返回所有sku信息的字段名称是sku而不是skus。
     **/
    private $fields;

    /**
        商品ID列表，多个ID用半角逗号隔开，一次最多不超过20个。注：获取不存在的商品ID或获取别人的商品都不会报错，但没有商品数据返回。
     **/
    private $numIids;


    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getNumIids() : array{
        return $this->numIids;
    }

    public function setNumIids(array $numIids){
        $this->numIids = $numIids;
    }


    public function getApiName() : string {
        return "taobao.items.seller.list.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->numIids)) {
            $requestParam["num_iids"] = TopUtil::convertBasicList($this->numIids);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

