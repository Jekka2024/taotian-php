<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoOpenAipaasOssputTokenGetAiAppCredentialsOpenDTO {

    /**
        临时token
     **/
    public $security_token;

    /**
         accessKeySecret
     **/
    public $access_key_secret;

    /**
        accessKeyId
     **/
    public $access_key_id;

    /**
        过期时间戳UTC
     **/
    public $expiration;


    public function getSecurityToken() : string{
        return $this->security_token;
    }

    public function setSecurityToken(string $securityToken){
        $this->security_token = $securityToken;
    }

    public function getAccessKeySecret() : string{
        return $this->access_key_secret;
    }

    public function setAccessKeySecret(string $accessKeySecret){
        $this->access_key_secret = $accessKeySecret;
    }

    public function getAccessKeyId() : string{
        return $this->access_key_id;
    }

    public function setAccessKeyId(string $accessKeyId){
        $this->access_key_id = $accessKeyId;
    }

    public function getExpiration() : string{
        return $this->expiration;
    }

    public function setExpiration(string $expiration){
        $this->expiration = $expiration;
    }


}

