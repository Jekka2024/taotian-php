<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemsSellerListGetFoodSecurity {

    /**
        厂家联系方式
     **/
    public $contact;

    /**
        产品标准号
     **/
    public $design_code;

    /**
        厂名
     **/
    public $factory;

    /**
        厂址
     **/
    public $factory_site;

    /**
        食品添加剂
     **/
    public $food_additive;

    /**
        健字号，保健品/膳食营养补充剂 这个类目下特有的信息，此类目下无需填写生产许可证编号（QS），如果填写了生产许可证编号（QS）将被忽略不保存；保存宝贝时，标题前会自动加上健字号产品名称一起作为宝贝标题；
     **/
    public $health_product_no;

    /**
        配料表
     **/
    public $mix;

    /**
        保质期
     **/
    public $period;

    /**
        储藏方法
     **/
    public $plan_storage;

    /**
        生产许可证号
     **/
    public $prd_license_no;

    /**
        生产结束日期
     **/
    public $product_date_end;

    /**
        生产开始日期
     **/
    public $product_date_start;

    /**
        进货结束日期，要在生产日期之后
     **/
    public $stock_date_end;

    /**
        进货开始日期，要在生产日期之后
     **/
    public $stock_date_start;

    /**
        供货商
     **/
    public $supplier;


    public function getContact() : string{
        return $this->contact;
    }

    public function setContact(string $contact){
        $this->contact = $contact;
    }

    public function getDesignCode() : string{
        return $this->design_code;
    }

    public function setDesignCode(string $designCode){
        $this->design_code = $designCode;
    }

    public function getFactory() : string{
        return $this->factory;
    }

    public function setFactory(string $factory){
        $this->factory = $factory;
    }

    public function getFactorySite() : string{
        return $this->factory_site;
    }

    public function setFactorySite(string $factorySite){
        $this->factory_site = $factorySite;
    }

    public function getFoodAdditive() : string{
        return $this->food_additive;
    }

    public function setFoodAdditive(string $foodAdditive){
        $this->food_additive = $foodAdditive;
    }

    public function getHealthProductNo() : string{
        return $this->health_product_no;
    }

    public function setHealthProductNo(string $healthProductNo){
        $this->health_product_no = $healthProductNo;
    }

    public function getMix() : string{
        return $this->mix;
    }

    public function setMix(string $mix){
        $this->mix = $mix;
    }

    public function getPeriod() : string{
        return $this->period;
    }

    public function setPeriod(string $period){
        $this->period = $period;
    }

    public function getPlanStorage() : string{
        return $this->plan_storage;
    }

    public function setPlanStorage(string $planStorage){
        $this->plan_storage = $planStorage;
    }

    public function getPrdLicenseNo() : string{
        return $this->prd_license_no;
    }

    public function setPrdLicenseNo(string $prdLicenseNo){
        $this->prd_license_no = $prdLicenseNo;
    }

    public function getProductDateEnd() : string{
        return $this->product_date_end;
    }

    public function setProductDateEnd(string $productDateEnd){
        $this->product_date_end = $productDateEnd;
    }

    public function getProductDateStart() : string{
        return $this->product_date_start;
    }

    public function setProductDateStart(string $productDateStart){
        $this->product_date_start = $productDateStart;
    }

    public function getStockDateEnd() : string{
        return $this->stock_date_end;
    }

    public function setStockDateEnd(string $stockDateEnd){
        $this->stock_date_end = $stockDateEnd;
    }

    public function getStockDateStart() : string{
        return $this->stock_date_start;
    }

    public function setStockDateStart(string $stockDateStart){
        $this->stock_date_start = $stockDateStart;
    }

    public function getSupplier() : string{
        return $this->supplier;
    }

    public function setSupplier(string $supplier){
        $this->supplier = $supplier;
    }


}

