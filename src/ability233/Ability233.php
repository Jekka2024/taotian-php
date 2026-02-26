<?php
namespace Topsdk\Topapi\Ability233;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability233\Request\TaobaoLogisticsReverseorderErpSearchRequest;
use Topsdk\Topapi\Ability233\Request\TaobaoLogisticsTraceGetNewRequest;
use Topsdk\Topapi\Ability233\Request\TaobaoLogisticsReturnorderSvcSearchRequest;
use Topsdk\Topapi\Ability233\Request\TaobaoLogisticsFulfilorderSearchRequest;

class Ability233 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        ERP销退单查询接口
    **/
    public function taobaoLogisticsReverseorderErpSearch(TaobaoLogisticsReverseorderErpSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.reverseorder.erp.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        物流信息获取新掊
    **/
    public function taobaoLogisticsTraceGetNew(TaobaoLogisticsTraceGetNewRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.trace.get.new", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询逆向物流信息接口
    **/
    public function taobaoLogisticsReturnorderSvcSearch(TaobaoLogisticsReturnorderSvcSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.returnorder.svc.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        物流履约单据查询
    **/
    public function taobaoLogisticsFulfilorderSearch(TaobaoLogisticsFulfilorderSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.fulfilorder.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
}