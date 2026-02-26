<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoOpenAipaasTokenGetAiAppOpenCredentialsRequest {

    /**
        云产品类型：REDIS_INSTANCE、RDS_INSTANCE、BUCKET、MQ_INSTANCE
     **/
    public $resource_type;

    /**
        具体实例id，或者bucket等信息，在开放控制台获取。
     **/
    public $instance_id;

    /**
        test/online
     **/
    public $env;


    public function getResourceType() : string{
        return $this->resource_type;
    }

    public function setResourceType(string $resourceType){
        $this->resource_type = $resourceType;
    }

    public function getInstanceId() : string{
        return $this->instance_id;
    }

    public function setInstanceId(string $instanceId){
        $this->instance_id = $instanceId;
    }

    public function getEnv() : string{
        return $this->env;
    }

    public function setEnv(string $env){
        $this->env = $env;
    }


}

