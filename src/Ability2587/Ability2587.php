<?php
namespace Topsdk\Topapi\Ability2587;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability2587\Request\TaobaoRosefinchTunnelDownloadsignRequest;
use Topsdk\Topapi\Ability2587\Request\TaobaoMessageChatrobotAssistQueryRequest;
use Topsdk\Topapi\Ability2587\Request\TaobaoMessageChatrobotAssistSubscribeRequest;
use Topsdk\Topapi\Ability2587\Request\TaobaoMessageChatrobotAsyncRequest;
use Topsdk\Topapi\Ability2587\Request\TaobaoMessageChatrobotAsyncStressTestRequest;

class Ability2587 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        odps tunnel通道加签
    **/
    public function taobaoRosefinchTunnelDownloadsign(TaobaoRosefinchTunnelDownloadsignRequest $request) {
        return $this->client->execute("taobao.rosefinch.tunnel.downloadsign", $request->toMap(), $request->toFileParamMap());
    }
    /**
        机器人智能辅助账号订阅状态查询接口
    **/
    public function taobaoMessageChatrobotAssistQuery(TaobaoMessageChatrobotAssistQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.message.chatrobot.assist.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        机器人智能辅助账号订阅接口
    **/
    public function taobaoMessageChatrobotAssistSubscribe(TaobaoMessageChatrobotAssistSubscribeRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.message.chatrobot.assist.subscribe", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        聊天机器人异步action
    **/
    public function taobaoMessageChatrobotAsync(TaobaoMessageChatrobotAsyncRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.message.chatrobot.async", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        异步回复消息接口(仅压测使用)
    **/
    public function taobaoMessageChatrobotAsyncStressTest(TaobaoMessageChatrobotAsyncStressTestRequest $request) {
        return $this->client->execute("taobao.message.chatrobot.async.stress.test", $request->toMap(), $request->toFileParamMap());
    }
}