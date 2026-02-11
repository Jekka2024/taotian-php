<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagUnitListAiPaasKnowledgeUnitBizDto {

    /**
        知识单元主键
     **/
    public $knowledge_unit_id;

    /**
        知识库主键
     **/
    public $knowledge_id;

    /**
        知识单元修改时间
     **/
    public $gmt_modified;

    /**
        知识单元名称
     **/
    public $name;

    /**
        知识单元描述
     **/
    public $description;


    public function getKnowledgeUnitId() : string{
        return $this->knowledge_unit_id;
    }

    public function setKnowledgeUnitId(string $knowledgeUnitId){
        $this->knowledge_unit_id = $knowledgeUnitId;
    }

    public function getKnowledgeId() : int{
        return $this->knowledge_id;
    }

    public function setKnowledgeId(int $knowledgeId){
        $this->knowledge_id = $knowledgeId;
    }

    public function getGmtModified() : string{
        return $this->gmt_modified;
    }

    public function setGmtModified(string $gmtModified){
        $this->gmt_modified = $gmtModified;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }


}

