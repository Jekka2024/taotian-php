<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagInfraKnowledgeQueryTopRagKnowledgeResponse {

    /**
        知识库 ID
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
        知识库图标 URL
     **/
    public $icon;

    /**
        知识库状态
     **/
    public $is_deleted;

    /**
        知识库下知识单元数量
     **/
    public $unit_count;

    /**
        知识库大小 MB
     **/
    public $knowledge_size;

    /**
        知识库 ownerId
     **/
    public $owner_id;

    /**
        知识库 ownerNick
     **/
    public $owner_nick;

    /**
        知识库授权的开发者 ID List
     **/
    public $developer_id_list;


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

    public function getIsDeleted() : int{
        return $this->is_deleted;
    }

    public function setIsDeleted(int $isDeleted){
        $this->is_deleted = $isDeleted;
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

    public function getOwnerId() : int{
        return $this->owner_id;
    }

    public function setOwnerId(int $ownerId){
        $this->owner_id = $ownerId;
    }

    public function getOwnerNick() : string{
        return $this->owner_nick;
    }

    public function setOwnerNick(string $ownerNick){
        $this->owner_nick = $ownerNick;
    }

    public function getDeveloperIdList() : array{
        return $this->developer_id_list;
    }

    public function setDeveloperIdList(array $developerIdList){
        $this->developer_id_list = $developerIdList;
    }


}

