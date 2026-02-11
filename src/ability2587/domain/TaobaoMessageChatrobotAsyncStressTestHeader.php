<?php
namespace Topsdk\Topapi\Ability2587\Domain;

class TaobaoMessageChatrobotAsyncStressTestHeader {

    /**
        序列化方式 Json,Hessian,ProtoBuff等
     **/
    public $serialize_type;

    /**
        无特殊需要不需指定
     **/
    public $ctx;

    /**
        从上行event的header中获取
     **/
    public $action_mode;

    /**
        当前系统的ms时间戳
     **/
    public $create_time;

    /**
        1. bc单聊消息 2.bc富文本及卡片的点击事件 3. bc转交
     **/
    public $type;

    /**
        从上行event的header中获取
     **/
    public $request_id;

    /**
        从上行event的header中获取
     **/
    public $tenant_id;


    public function getSerializeType() : string{
        return $this->serialize_type;
    }

    public function setSerializeType(string $serializeType){
        $this->serialize_type = $serializeType;
    }

    public function getCtx() : array{
        return $this->ctx;
    }

    public function setCtx(array $ctx){
        $this->ctx = $ctx;
    }

    public function getActionMode() : int{
        return $this->action_mode;
    }

    public function setActionMode(int $actionMode){
        $this->action_mode = $actionMode;
    }

    public function getCreateTime() : int{
        return $this->create_time;
    }

    public function setCreateTime(int $createTime){
        $this->create_time = $createTime;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getRequestId() : string{
        return $this->request_id;
    }

    public function setRequestId(string $requestId){
        $this->request_id = $requestId;
    }

    public function getTenantId() : int{
        return $this->tenant_id;
    }

    public function setTenantId(int $tenantId){
        $this->tenant_id = $tenantId;
    }


}

