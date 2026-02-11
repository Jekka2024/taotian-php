<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagTagChunkUnmarkRequest {

    /**
        知识分片Ids
     **/
    private $chunkIds;

    /**
        知识库id
     **/
    private $knowledgeId;

    /**
        知识单元id
     **/
    private $unitId;

    /**
        标签信息
     **/
    private $tags;


    public function getChunkIds() : array{
        return $this->chunkIds;
    }

    public function setChunkIds(array $chunkIds){
        $this->chunkIds = $chunkIds;
    }

    public function getKnowledgeId() : int{
        return $this->knowledgeId;
    }

    public function setKnowledgeId(int $knowledgeId){
        $this->knowledgeId = $knowledgeId;
    }

    public function getUnitId() : int{
        return $this->unitId;
    }

    public function setUnitId(int $unitId){
        $this->unitId = $unitId;
    }

    public function getTags() : array{
        return $this->tags;
    }

    public function setTags(array $tags){
        $this->tags = $tags;
    }


    public function getApiName() : string {
        return "taobao.top.rag.tag.chunk.unmark";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->chunkIds)) {
            $requestParam["chunk_ids"] = TopUtil::convertBasicList($this->chunkIds);
        }

        if (!TopUtil::checkEmpty($this->knowledgeId)) {
            $requestParam["knowledge_id"] = TopUtil::convertBasic($this->knowledgeId);
        }

        if (!TopUtil::checkEmpty($this->unitId)) {
            $requestParam["unit_id"] = TopUtil::convertBasic($this->unitId);
        }

        if (!TopUtil::checkEmpty($this->tags)) {
            $requestParam["tags"] = TopUtil::convertStructList($this->tags);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

