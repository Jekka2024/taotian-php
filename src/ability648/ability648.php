<?php
namespace Topsdk\Topapi\Ability648;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability648\Request\TaobaoTradesSoldGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoTradeFullinfoGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoTradeConfirmfeeGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoLogisticsTraceSearchRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoLogisticsOrdersDetailGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoLogisticsOrdersGetRequest;
use Topsdk\Topapi\Ability648\Request\TaobaoTradeAmountGetRequest;

class Ability648 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        查询卖家已卖出的交易数据（根据创建时间）
    **/
    public function taobaoTradesSoldGet(TaobaoTradesSoldGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trades.sold.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取单笔交易的详细信息
    **/
    public function taobaoTradeFullinfoGet(TaobaoTradeFullinfoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trade.fullinfo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取交易确认收货费用
    **/
    public function taobaoTradeConfirmfeeGet(TaobaoTradeConfirmfeeGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trade.confirmfee.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        物流流转信息查询
    **/
    public function taobaoLogisticsTraceSearch(TaobaoLogisticsTraceSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.trace.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        批量查询物流订单,返回详细信息
    **/
    public function taobaoLogisticsOrdersDetailGet(TaobaoLogisticsOrdersDetailGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.orders.detail.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        批量查询物流订单
    **/
    public function taobaoLogisticsOrdersGet(TaobaoLogisticsOrdersGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.orders.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        交易帐务查询
    **/
    public function taobaoTradeAmountGet(TaobaoTradeAmountGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trade.amount.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}