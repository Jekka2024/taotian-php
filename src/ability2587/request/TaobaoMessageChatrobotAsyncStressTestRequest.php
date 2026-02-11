<?php
namespace Topsdk\Topapi\Ability2587\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability2587\Domain\TaobaoMessageChatrobotAsyncStressTestAuthParam;

class TaobaoMessageChatrobotAsyncStressTestRequest {

    /**
        授权参数
     **/
    private $authParam;

    /**
        需要触发的actions
     **/
    private $actions;


    public function getAuthParam() : TaobaoMessageChatrobotAsyncStressTestAuthParam{
        return $this->authParam;
    }

    public function setAuthParam(TaobaoMessageChatrobotAsyncStressTestAuthParam $authParam){
        $this->authParam = $authParam;
    }

    public function getActions() : array{
        return $this->actions;
    }

    public function setActions(array $actions){
        $this->actions = $actions;
    }


    public function getApiName() : string {
        return "taobao.message.chatrobot.async.stress.test";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->authParam)) {
            $requestParam["auth_param"] = TopUtil::convertStruct($this->authParam);
        }

        if (!TopUtil::checkEmpty($this->actions)) {
            $requestParam["actions"] = TopUtil::convertStructList($this->actions);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

