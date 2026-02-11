<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagKnowledgeAddRequest {

    /**
        知识库名称
     **/
    private $name;

    /**
        知识库描述
     **/
    private $description;

    /**
        知识库图标 URL
     **/
    private $icon;

    /**
        知识库归属场景
     **/
    private $scenes;


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

    public function getScenes() : string{
        return $this->scenes;
    }

    public function setScenes(string $scenes){
        $this->scenes = $scenes;
    }


    public function getApiName() : string {
        return "taobao.top.rag.knowledge.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->description)) {
            $requestParam["description"] = TopUtil::convertBasic($this->description);
        }

        if (!TopUtil::checkEmpty($this->icon)) {
            $requestParam["icon"] = TopUtil::convertBasic($this->icon);
        }

        if (!TopUtil::checkEmpty($this->scenes)) {
            $requestParam["scenes"] = TopUtil::convertBasic($this->scenes);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

