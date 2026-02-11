<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemSellerGetLocalityLife {

    /**
        表示是否使用邮寄 0: 代表不使用邮寄； 1：代表使用邮寄；如果不设置这个值，代表不使用邮寄
     **/
    public $choose_logis;

    /**
        电子凭证业务属性
     **/
    public $eticket;

    /**
        电子交易凭证有效期，有三种格式：如果有效期为起止日期类型，此值为2012-08-06,2012-08-16 如果有效期为【购买成功日 至】类型则格式为2012-08-16如果有效期为天数类型则格式为15
     **/
    public $expirydate;

    /**
        格式为 码商id:nick
     **/
    public $merchant;

    /**
        网点ID,在参数empty_fields里设置locality_life.network_id可删除网点ID
     **/
    public $network_id;

    /**
        电子凭证售中自动退款比例
     **/
    public $onsale_auto_refund_ratio;

    /**
        退款比例，百分比%前的数字，1-100的正整数值；在参数empty_fields里设置locality_life.refund_ratio可删除退款比例
     **/
    public $refund_ratio;

    /**
        退款码费承担方。发布电子凭证宝贝的时候会增加“退款码费承担方”配置项，可选填：(1)s（卖家承担） (2)b(买家承担)
     **/
    public $refundmafee;

    /**
        核销打款:1代表核销打款,0代表非核销打款;在参数empty_fields里设置locality_life.verification可删除核销打款
     **/
    public $verification;


    public function getChooseLogis() : string{
        return $this->choose_logis;
    }

    public function setChooseLogis(string $chooseLogis){
        $this->choose_logis = $chooseLogis;
    }

    public function getEticket() : string{
        return $this->eticket;
    }

    public function setEticket(string $eticket){
        $this->eticket = $eticket;
    }

    public function getExpirydate() : string{
        return $this->expirydate;
    }

    public function setExpirydate(string $expirydate){
        $this->expirydate = $expirydate;
    }

    public function getMerchant() : string{
        return $this->merchant;
    }

    public function setMerchant(string $merchant){
        $this->merchant = $merchant;
    }

    public function getNetworkId() : string{
        return $this->network_id;
    }

    public function setNetworkId(string $networkId){
        $this->network_id = $networkId;
    }

    public function getOnsaleAutoRefundRatio() : int{
        return $this->onsale_auto_refund_ratio;
    }

    public function setOnsaleAutoRefundRatio(int $onsaleAutoRefundRatio){
        $this->onsale_auto_refund_ratio = $onsaleAutoRefundRatio;
    }

    public function getRefundRatio() : int{
        return $this->refund_ratio;
    }

    public function setRefundRatio(int $refundRatio){
        $this->refund_ratio = $refundRatio;
    }

    public function getRefundmafee() : string{
        return $this->refundmafee;
    }

    public function setRefundmafee(string $refundmafee){
        $this->refundmafee = $refundmafee;
    }

    public function getVerification() : string{
        return $this->verification;
    }

    public function setVerification(string $verification){
        $this->verification = $verification;
    }


}

