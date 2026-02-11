<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagChunkUpdateRequest {

    /**
        知识 chunk ID
     **/
    private $id;

    /**
        知识 chunk 内容，不超过 500 字
     **/
    private $chunkContent;

    /**
        官方标准格式，仅支持商家图片空间视频空间 & OSS地址
     **/
    private $imageInfo;

    /**
        官方标准格式，仅支持商家图片空间视频空间 & OSS地址
     **/
    private $videoInfo;

    /**
        知识关联的商品 SKU或店铺信息
     **/
    private $targetIds;


    public function getId() : string{
        return $this->id;
    }

    public function setId(string $id){
        $this->id = $id;
    }

    public function getChunkContent() : string{
        return $this->chunkContent;
    }

    public function setChunkContent(string $chunkContent){
        $this->chunkContent = $chunkContent;
    }

    public function getImageInfo() : string{
        return $this->imageInfo;
    }

    public function setImageInfo(string $imageInfo){
        $this->imageInfo = $imageInfo;
    }

    public function getVideoInfo() : string{
        return $this->videoInfo;
    }

    public function setVideoInfo(string $videoInfo){
        $this->videoInfo = $videoInfo;
    }

    public function getTargetIds() : array{
        return $this->targetIds;
    }

    public function setTargetIds(array $targetIds){
        $this->targetIds = $targetIds;
    }


    public function getApiName() : string {
        return "taobao.top.rag.chunk.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->id)) {
            $requestParam["id"] = TopUtil::convertBasic($this->id);
        }

        if (!TopUtil::checkEmpty($this->chunkContent)) {
            $requestParam["chunk_content"] = TopUtil::convertBasic($this->chunkContent);
        }

        if (!TopUtil::checkEmpty($this->imageInfo)) {
            $requestParam["image_info"] = TopUtil::convertBasic($this->imageInfo);
        }

        if (!TopUtil::checkEmpty($this->videoInfo)) {
            $requestParam["video_info"] = TopUtil::convertBasic($this->videoInfo);
        }

        if (!TopUtil::checkEmpty($this->targetIds)) {
            $requestParam["target_ids"] = TopUtil::convertBasicList($this->targetIds);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

