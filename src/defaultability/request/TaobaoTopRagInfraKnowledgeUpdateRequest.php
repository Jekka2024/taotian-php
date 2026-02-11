<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagInfraKnowledgeUpdateRequest {

    /**
        知识库ID
     **/
    private $id;

    /**
        知识库名称
     **/
    private $name;

    /**
        知识库图标 URL
     **/
    private $icon;

    /**
        知识库描述
     **/
    private $description;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getIcon() : string{
        return $this->icon;
    }

    public function setIcon(string $icon){
        $this->icon = $icon;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description){
        $this->description = $description;
    }


    public function getApiName() : string {
        return "taobao.top.rag.infra.knowledge.update";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->id)) {
            $requestParam["id"] = TopUtil::convertBasic($this->id);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->icon)) {
            $requestParam["icon"] = TopUtil::convertBasic($this->icon);
        }

        if (!TopUtil::checkEmpty($this->description)) {
            $requestParam["description"] = TopUtil::convertBasic($this->description);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

