<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoOpenAipaasOssputTokenGetAiAppOpenCredentialsRequest {

    /**
        具体实例id，或者bucket等信息，在开放控制台获取。
     **/
    public $instance_id;

    /**
        test/online
     **/
    public $env;


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

