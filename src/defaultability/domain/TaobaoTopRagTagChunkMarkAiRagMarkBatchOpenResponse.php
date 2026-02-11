<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoTopRagTagChunkMarkAiRagMarkBatchOpenResponse {

    /**
        markTargetId
     **/
    public $mark_target_id;

    /**
        结果集合 List<T>
     **/
    public $mark_result;


    public function getMarkTargetId() : string{
        return $this->mark_target_id;
    }

    public function setMarkTargetId(string $markTargetId){
        $this->mark_target_id = $markTargetId;
    }

    public function getMarkResult() : array{
        return $this->mark_result;
    }

    public function setMarkResult(array $markResult){
        $this->mark_result = $markResult;
    }


}

