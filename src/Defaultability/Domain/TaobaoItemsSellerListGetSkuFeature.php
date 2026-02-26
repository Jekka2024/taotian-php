<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemsSellerListGetSkuFeature {

    /**
        colorHotNew
     **/
    public $color_hot_new;

    /**
        colorMaterialImg
     **/
    public $color_material_img;

    /**
        colorValue
     **/
    public $color_value;

    /**
        colorMaterial
     **/
    public $color_material;

    /**
        colorSeries
     **/
    public $color_series;


    public function getColorHotNew() : string{
        return $this->color_hot_new;
    }

    public function setColorHotNew(string $colorHotNew){
        $this->color_hot_new = $colorHotNew;
    }

    public function getColorMaterialImg() : string{
        return $this->color_material_img;
    }

    public function setColorMaterialImg(string $colorMaterialImg){
        $this->color_material_img = $colorMaterialImg;
    }

    public function getColorValue() : string{
        return $this->color_value;
    }

    public function setColorValue(string $colorValue){
        $this->color_value = $colorValue;
    }

    public function getColorMaterial() : string{
        return $this->color_material;
    }

    public function setColorMaterial(string $colorMaterial){
        $this->color_material = $colorMaterial;
    }

    public function getColorSeries() : string{
        return $this->color_series;
    }

    public function setColorSeries(string $colorSeries){
        $this->color_series = $colorSeries;
    }


}

