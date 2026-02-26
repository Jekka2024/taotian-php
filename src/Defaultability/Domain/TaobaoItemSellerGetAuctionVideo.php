<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemSellerGetAuctionVideo {

    /**
        商品和视频的关联id
     **/
    public $id;

    /**
        视频id
     **/
    public $video_id;

    /**
        视频类型
     **/
    public $video_type;

    /**
        审核结果
     **/
    public $audit_result;

    /**
        审核结果明细
     **/
    public $audit_reason;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getVideoId() : int{
        return $this->video_id;
    }

    public function setVideoId(int $videoId){
        $this->video_id = $videoId;
    }

    public function getVideoType() : string{
        return $this->video_type;
    }

    public function setVideoType(string $videoType){
        $this->video_type = $videoType;
    }

    public function getAuditResult() : string{
        return $this->audit_result;
    }

    public function setAuditResult(string $auditResult){
        $this->audit_result = $auditResult;
    }

    public function getAuditReason() : string{
        return $this->audit_reason;
    }

    public function setAuditReason(string $auditReason){
        $this->audit_reason = $auditReason;
    }


}

