<?php
namespace Topsdk\Topapi\Ability2587\Domain;

class TaobaoMessageChatrobotAsyncStressTestChatMessage {

    /**
        {}
     **/
    public $ext;

    /**
        {}
     **/
    public $tags;

    /**
        {}
     **/
    public $options;

    /**
        发送者信息
     **/
    public $sender;

    /**
        当前ms系统时间
     **/
    public $create_time;

    /**
        通道类型
     **/
    public $channel_type;

    /**
        消息内容
     **/
    public $content;

    /**
        1 文本消息  2 模板 6 图片等
     **/
    public $content_type;

    /**
        接收者信息
     **/
    public $receivers;


    public function getExt() : array{
        return $this->ext;
    }

    public function setExt(array $ext){
        $this->ext = $ext;
    }

    public function getTags() : array{
        return $this->tags;
    }

    public function setTags(array $tags){
        $this->tags = $tags;
    }

    public function getOptions() : array{
        return $this->options;
    }

    public function setOptions(array $options){
        $this->options = $options;
    }

    public function getSender() : TaobaoMessageChatrobotAsyncStressTestUser{
        return $this->sender;
    }

    public function setSender(TaobaoMessageChatrobotAsyncStressTestUser $sender){
        $this->sender = $sender;
    }

    public function getCreateTime() : int{
        return $this->create_time;
    }

    public function setCreateTime(int $createTime){
        $this->create_time = $createTime;
    }

    public function getChannelType() : string{
        return $this->channel_type;
    }

    public function setChannelType(string $channelType){
        $this->channel_type = $channelType;
    }

    public function getContent() : string{
        return $this->content;
    }

    public function setContent(string $content){
        $this->content = $content;
    }

    public function getContentType() : int{
        return $this->content_type;
    }

    public function setContentType(int $contentType){
        $this->content_type = $contentType;
    }

    public function getReceivers() : array{
        return $this->receivers;
    }

    public function setReceivers(array $receivers){
        $this->receivers = $receivers;
    }


}

