<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemSellerGetVideo {

    /**
        视频关联记录创建时间（格式：yyyy-MM-dd HH:mm:ss）
     **/
    public $created;

    /**
        视频关联记录的id，和商品相对应
     **/
    public $id;

    /**
        视频关联记录修改时间（格式：yyyy-MM-dd HH:mm:ss）
     **/
    public $modified;

    /**
        video的url连接地址。淘秀里视频记录里面存储的url地址
     **/
    public $url;

    /**
        video的id，对应于视频在淘秀的存储记录
     **/
    public $video_id;


    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }

    public function getVideoId() : int{
        return $this->video_id;
    }

    public function setVideoId(int $videoId){
        $this->video_id = $videoId;
    }


}

