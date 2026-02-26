<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagKnowledgeListAiPaasKnowledgeBizDto {

    /**
        知识库主键
     **/
    public $id;

    /**
        创建时间
     **/
    public $gmt_create;

    /**
        修改时间
     **/
    public $gmt_modified;

    /**
        知识库名称
     **/
    public $name;

    /**
        知识库描述
     **/
    public $description;

    /**
        知识库图标
     **/
    public $icon;

    /**
        知识库下知识单元数量
     **/
    public $unit_count;

    /**
        知识库大小
     **/
    public $knowledge_size;

    /**
        知识库场景
     **/
    public $scenes;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getGmtCreate() : string{
        return $this->gmt_create;
    }

    public function setGmtCreate(string $gmtCreate){
        $this->gmt_create = $gmtCreate;
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

    public function getIcon() : string{
        return $this->icon;
    }

    public function setIcon(string $icon){
        $this->icon = $icon;
    }

    public function getUnitCount() : int{
        return $this->unit_count;
    }

    public function setUnitCount(int $unitCount){
        $this->unit_count = $unitCount;
    }

    public function getKnowledgeSize() : int{
        return $this->knowledge_size;
    }

    public function setKnowledgeSize(int $knowledgeSize){
        $this->knowledge_size = $knowledgeSize;
    }

    public function getScenes() : string{
        return $this->scenes;
    }

    public function setScenes(string $scenes){
        $this->scenes = $scenes;
    }


}

