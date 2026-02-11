<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagChunkListAiPaasKnowledgeDocVectorBizDto {

    /**
        知识 chunk 主键
     **/
    public $id;

    /**
        知识库主键
     **/
    public $knowledge_id;

    /**
        知识库单元主键
     **/
    public $unit_id;

    /**
        知识库单元名称
     **/
    public $unit_name;

    /**
        知识 chunk 序号
     **/
    public $chunk_num;

    /**
        知识内容
     **/
    public $chunk_content;

    /**
        chunk 标签
     **/
    public $labels;

    /**
        知识关联的商品 SKU或店铺信息
     **/
    public $target_ids;


    public function getId() : string{
        return $this->id;
    }

    public function setId(string $id){
        $this->id = $id;
    }

    public function getKnowledgeId() : int{
        return $this->knowledge_id;
    }

    public function setKnowledgeId(int $knowledgeId){
        $this->knowledge_id = $knowledgeId;
    }

    public function getUnitId() : string{
        return $this->unit_id;
    }

    public function setUnitId(string $unitId){
        $this->unit_id = $unitId;
    }

    public function getUnitName() : string{
        return $this->unit_name;
    }

    public function setUnitName(string $unitName){
        $this->unit_name = $unitName;
    }

    public function getChunkNum() : int{
        return $this->chunk_num;
    }

    public function setChunkNum(int $chunkNum){
        $this->chunk_num = $chunkNum;
    }

    public function getChunkContent() : string{
        return $this->chunk_content;
    }

    public function setChunkContent(string $chunkContent){
        $this->chunk_content = $chunkContent;
    }

    public function getLabels() : array{
        return $this->labels;
    }

    public function setLabels(array $labels){
        $this->labels = $labels;
    }

    public function getTargetIds() : array{
        return $this->target_ids;
    }

    public function setTargetIds(array $targetIds){
        $this->target_ids = $targetIds;
    }


}

