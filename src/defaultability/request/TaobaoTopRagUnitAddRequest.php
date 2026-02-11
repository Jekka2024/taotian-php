<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTopRagUnitAddRequest {

    /**
        知识库 ID
     **/
    private $knowledgeId;

    /**
        知识单元名称
     **/
    private $name;

    /**
        知识单元描述
     **/
    private $description;


    public function getKnowledgeId() : int{
        return $this->knowledgeId;
    }

    public function setKnowledgeId(int $knowledgeId){
        $this->knowledgeId = $knowledgeId;
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


    public function getApiName() : string {
        return "taobao.top.rag.unit.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->knowledgeId)) {
            $requestParam["knowledge_id"] = TopUtil::convertBasic($this->knowledgeId);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
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

