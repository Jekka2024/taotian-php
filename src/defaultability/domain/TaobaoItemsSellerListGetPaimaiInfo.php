<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemsSellerListGetPaimaiInfo {

    /**
        用户自定义的固定保证金。如果用户未传则说明用户选择使用淘宝默认的保证金模式10%，此时deposit等于0.
     **/
    public $deposit;

    /**
        增价幅度或降价幅度
     **/
    public $increment;

    /**
        降价拍中的降价间隔
     **/
    public $interval;

    /**
        拍卖类型，目前包括增加拍，荷兰拍和降价拍。
     **/
    public $mode;

    /**
        降价拍的保留价
     **/
    public $reserve;

    /**
        对于拍卖来说可以设定有效期，这里是有效期的小时数。
     **/
    public $valid_hour;

    /**
        对于拍卖来说可以设定有效期，这里是有效期的分钟数。
     **/
    public $valid_minute;

    /**
        重复上拍总次数，如果不是重复上拍的，则为0
     **/
    public $repeat;

    /**
        拍品开始时间
     **/
    public $start;

    /**
        拍品结束时间
     **/
    public $end;

    /**
        拍品起拍价
     **/
    public $start_price;

    /**
        拍品封顶价（分）
     **/
    public $ceil_price;

    /**
        增加拍延迟周期（分钟）
     **/
    public $delay_in_minute;

    /**
        拍卖周期（秒钟），非重复上架为（开始时间-结束时间），当为重复上拍时为一次重复上架的时间
     **/
    public $period;

    /**
        降价时间周期（分钟）
     **/
    public $frequency;


    public function getDeposit() : int{
        return $this->deposit;
    }

    public function setDeposit(int $deposit){
        $this->deposit = $deposit;
    }

    public function getIncrement() : string{
        return $this->increment;
    }

    public function setIncrement(string $increment){
        $this->increment = $increment;
    }

    public function getInterval() : int{
        return $this->interval;
    }

    public function setInterval(int $interval){
        $this->interval = $interval;
    }

    public function getMode() : int{
        return $this->mode;
    }

    public function setMode(int $mode){
        $this->mode = $mode;
    }

    public function getReserve() : string{
        return $this->reserve;
    }

    public function setReserve(string $reserve){
        $this->reserve = $reserve;
    }

    public function getValidHour() : int{
        return $this->valid_hour;
    }

    public function setValidHour(int $validHour){
        $this->valid_hour = $validHour;
    }

    public function getValidMinute() : int{
        return $this->valid_minute;
    }

    public function setValidMinute(int $validMinute){
        $this->valid_minute = $validMinute;
    }

    public function getRepeat() : int{
        return $this->repeat;
    }

    public function setRepeat(int $repeat){
        $this->repeat = $repeat;
    }

    public function getStart() : string{
        return $this->start;
    }

    public function setStart(string $start){
        $this->start = $start;
    }

    public function getEnd() : string{
        return $this->end;
    }

    public function setEnd(string $end){
        $this->end = $end;
    }

    public function getStartPrice() : int{
        return $this->start_price;
    }

    public function setStartPrice(int $startPrice){
        $this->start_price = $startPrice;
    }

    public function getCeilPrice() : int{
        return $this->ceil_price;
    }

    public function setCeilPrice(int $ceilPrice){
        $this->ceil_price = $ceilPrice;
    }

    public function getDelayInMinute() : int{
        return $this->delay_in_minute;
    }

    public function setDelayInMinute(int $delayInMinute){
        $this->delay_in_minute = $delayInMinute;
    }

    public function getPeriod() : int{
        return $this->period;
    }

    public function setPeriod(int $period){
        $this->period = $period;
    }

    public function getFrequency() : int{
        return $this->frequency;
    }

    public function setFrequency(int $frequency){
        $this->frequency = $frequency;
    }


}

