<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagChunkAddRequest {

    /**
        知识 chunk 序号
     **/
    private $chunkNum;

    /**
        知识 chunk 所属知识库 ID
     **/
    private $knowledgeId;

    /**
        知识 chunk 所属知识库-知识单元 ID
     **/
    private $unitId;

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


    public function getChunkNum() : int{
        return $this->chunkNum;
    }

    public function setChunkNum(int $chunkNum){
        $this->chunkNum = $chunkNum;
    }

    public function getKnowledgeId() : int{
        return $this->knowledgeId;
    }

    public function setKnowledgeId(int $knowledgeId){
        $this->knowledgeId = $knowledgeId;
    }

    public function getUnitId() : string{
        return $this->unitId;
    }

    public function setUnitId(string $unitId){
        $this->unitId = $unitId;
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
        return "taobao.top.rag.chunk.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->chunkNum)) {
            $requestParam["chunk_num"] = TopUtil::convertBasic($this->chunkNum);
        }

        if (!TopUtil::checkEmpty($this->knowledgeId)) {
            $requestParam["knowledge_id"] = TopUtil::convertBasic($this->knowledgeId);
        }

        if (!TopUtil::checkEmpty($this->unitId)) {
            $requestParam["unit_id"] = TopUtil::convertBasic($this->unitId);
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

