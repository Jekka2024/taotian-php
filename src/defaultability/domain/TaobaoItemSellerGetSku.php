<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemSellerGetSku {

    /**
        商品级别的条形码
     **/
    public $barcode;

    /**
        sku创建日期 时间格式：yyyy-MM-dd HH:mm:ss
     **/
    public $created;

    /**
        sku最后修改日期 时间格式：yyyy-MM-dd HH:mm:ss
     **/
    public $modified;

    /**
        商家设置的外部id。天猫和集市的卖家，需要登录才能获取到自己的商家编码，不能获取到他人的商家编码。
     **/
    public $outer_id;

    /**
        属于这个sku的商品的价格 取值范围:0-100000000;精确到2位小数;单位:元。如:200.07，表示:200元7分。
     **/
    public $price;

    /**
        sku的销售属性组合字符串（颜色，大小，等等，可通过类目API获取某类目下的销售属性）,格式是p1:v1;p2:v2
     **/
    public $properties;

    /**
        sku所对应的销售属性的中文名字串，格式如：pid1:vid1:pid_name1:vid_name1;pid2:vid2:pid_name2:vid_name2……
     **/
    public $properties_name;

    /**
        属于这个sku的商品的数量，
     **/
    public $quantity;

    /**
        sku的id
     **/
    public $sku_id;

    /**
        sku状态。 normal:正常；delete:删除；down_shelf:下架
     **/
    public $status;

    /**
        sku图片
     **/
    public $sku_picture;


    public function getBarcode() : string{
        return $this->barcode;
    }

    public function setBarcode(string $barcode){
        $this->barcode = $barcode;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getProperties() : string{
        return $this->properties;
    }

    public function setProperties(string $properties){
        $this->properties = $properties;
    }

    public function getPropertiesName() : string{
        return $this->properties_name;
    }

    public function setPropertiesName(string $propertiesName){
        $this->properties_name = $propertiesName;
    }

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getSkuPicture() : array{
        return $this->sku_picture;
    }

    public function setSkuPicture(array $skuPicture){
        $this->sku_picture = $skuPicture;
    }


}

