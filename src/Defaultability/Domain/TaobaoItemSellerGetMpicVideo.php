<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemSellerGetMpicVideo {

    /**
        主图视频记录所关联的商品的数字id
     **/
    public $num_iid;

    /**
        主图视频的时长，单位：秒
     **/
    public $video_duaration;

    /**
        主图视频的在淘视频中的ID
     **/
    public $video_id;

    /**
        主图视频的缩略图URL
     **/
    public $video_pic;

    /**
        主图视频的状态
     **/
    public $video_status;


    public function getNumIid() : int{
        return $this->num_iid;
    }

    public function setNumIid(int $numIid){
        $this->num_iid = $numIid;
    }

    public function getVideoDuaration() : int{
        return $this->video_duaration;
    }

    public function setVideoDuaration(int $videoDuaration){
        $this->video_duaration = $videoDuaration;
    }

    public function getVideoId() : int{
        return $this->video_id;
    }

    public function setVideoId(int $videoId){
        $this->video_id = $videoId;
    }

    public function getVideoPic() : string{
        return $this->video_pic;
    }

    public function setVideoPic(string $videoPic){
        $this->video_pic = $videoPic;
    }

    public function getVideoStatus() : int{
        return $this->video_status;
    }

    public function setVideoStatus(int $videoStatus){
        $this->video_status = $videoStatus;
    }


}

