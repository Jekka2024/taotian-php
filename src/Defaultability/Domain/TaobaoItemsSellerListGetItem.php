<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItemsSellerListGetItem {

    /**
        售后服务ID,该字段仅在taobao.item.get接口中返回
     **/
    public $after_sale_id;

    /**
        商品上传后的状态。onsale出售中，instock库中
     **/
    public $approve_status;

    /**
        商品的积分返点比例。如:5,表示:返点比例0.5%
     **/
    public $auction_point;

    /**
        代充商品类型。在代充商品的类目下，不传表示不标记商品类型（交易搜索中就不能通过标记搜到相关的交易了）。可选类型： no_mark(不做类型标记) time_card(点卡软件代充) fee_card(话费软件代充)
     **/
    public $auto_fill;

    /**
        自动重发,true/false
     **/
    public $auto_repost;

    /**
        商品级别的条形码
     **/
    public $barcode;

    /**
        商品所属的叶子类目 id
     **/
    public $cid;

    /**
        货到付款运费模板ID
     **/
    public $cod_postage_id;

    /**
        Item的发布时间，目前仅供taobao.item.add和taobao.item.get可用
     **/
    public $created;

    /**
        定制工具Id
     **/
    public $custom_made_type_id;

    /**
        下架时间（下架时间不准确，暂不支持使用）
     **/
    public $delist_time;

    /**
        商品描述, 字数要大于5个字符，小于25000个字符
     **/
    public $desc;

    /**
        宝贝描述规范化模块锚点信息
     **/
    public $desc_module_info;

    /**
        商品url
     **/
    public $detail_url;

    /**
        ems费用,格式：5.00；单位：元；精确到：分
     **/
    public $ems_fee;

    /**
        快递费用,格式：5.00；单位：元；精确到：分
     **/
    public $express_fee;

    /**
        宝贝特征值，只有在Top支持的特征值才能保存到宝贝上
     **/
    public $features;

    /**
        食品安全信息，包括：生产许可证编号、产品标准号、厂名、厂址等
     **/
    public $food_security;

    /**
        运费承担方式,seller（卖家承担），buyer(买家承担）
     **/
    public $freight_payer;

    /**
        全球购商品采购地信息（地区/国家），代表全球购商品的产地信息。
     **/
    public $global_stock_country;

    /**
        全球购商品采购地信息（库存类型），有两种库存类型：现货和代购;参数值为1时代表现货，值为2时代表代购
     **/
    public $global_stock_type;

    /**
        支持会员打折,true/false
     **/
    public $has_discount;

    /**
        是否有发票,true/false
     **/
    public $has_invoice;

    /**
        橱窗推荐,true/false
     **/
    public $has_showcase;

    /**
        是否有保修,true/false
     **/
    public $has_warranty;

    /**
        加价幅度。如果为0，代表系统代理幅度。在竞拍中，为了超越上一个出价，会员需要在当前出价上增加金额，这个金额就是加价幅度。卖家在发布宝贝的时候可以自定义加价幅度，也可以让系统自动代理加价。系统自动代理加价的加价幅度随着当前出价金额的增加而增加，我们建议会员使用系统自动代理加价，并请买家在出价前看清楚加价幅度的具体金额。另外需要注意是，此功能只适用于拍卖的商品。以下是系统自动代理加价幅度表：当前价（加价幅度 ）1-40（ 1 ）、41-100（ 2 ）、101-200（5 ）、201-500 （10）、501-1001（15）、001-2000（25）、2001-5000（50）、5001-10000（100）10001以上         200
     **/
    public $increment;

    /**
        用户内店宝贝装修模板id
     **/
    public $inner_shop_auction_template_id;

    /**
        用户自行输入的类目属性ID串。结构："pid1,pid2,pid3"，如："20000"（表示品牌） 注：通常一个类目下用户可输入的关键属性不超过1个。
     **/
    public $input_pids;

    /**
        用户自行输入的子属性名和属性值，结构:"父属性值;一级子属性名;一级子属性值;二级子属性名;自定义输入值,....",如：“耐克;耐克系列;科比系列;科比系列;2K5”，input_str需要与input_pids一一对应，注：通常一个类目下用户可输入的关键属性不超过1个。所有属性别名加起来不能超过 3999字节。
     **/
    public $input_str;

    /**
        是否是3D淘宝的商品
     **/
    public $is_3D;

    /**
        是否在外部网店显示
     **/
    public $is_ex;

    /**
        非分销商品：0，代销：1，经销：2
     **/
    public $is_fenxiao;

    /**
        是否24小时闪电发货
     **/
    public $is_lightning_consignment;

    /**
        商品是否为先行赔付taobao.items.search和taobao.items.vip.search专用
     **/
    public $is_prepay;

    /**
        是否在淘宝显示
     **/
    public $is_taobao;

    /**
        是否定时上架商品
     **/
    public $is_timing;

    /**
        虚拟商品的状态字段
     **/
    public $is_virtual;

    /**
        标示商品是否为新品。值含义：true-是，false-否。
     **/
    public $is_xinpin;

    /**
        商品图片列表(包括主图)。fields中只设置item_img可以返回ItemImg结构体中所有字段，如果设置为item_img.id、item_img.url、item_img.position等形式就只会返回相应的字段
     **/
    public $item_imgs;

    /**
        表示商品的体积，用于按体积计费的运费模板。该值的单位为立方米（m3）。该值支持两种格式的设置：格式1：bulk:3,单位为立方米(m3),表示直接设置为商品的体积。格式2：weight:10;breadth:10;height:10，单位为米（m）
     **/
    public $item_size;

    /**
        商品的重量，用于按重量计费的运费模板。注意：单位为kg
     **/
    public $item_weight;

    /**
        上架时间（上架时间不准确，暂不支持使用）
     **/
    public $list_time;

    /**
        本地生活电子交易凭证业务，目前此字段只涉及到的信息为有效期:如果有效期为起止日期类型，此值为2012-08-06,2012-08-16如果有效期为【购买成功日 至】类型则格式为2012-08-16如果有效期为天数类型则格式为3
     **/
    public $locality_life;

    /**
        商品所在地
     **/
    public $location;

    /**
        商品修改时间（格式：yyyy-MM-dd HH:mm:ss）
     **/
    public $modified;

    /**
        宝贝主图视频的数据信息，包括：视频ID，视频缩略图URL，视频时长，视频状态等信息。
     **/
    public $mpic_video;

    /**
        是否为新消保法中的7天无理由退货
     **/
    public $newprepay;

    /**
        卖家昵称
     **/
    public $nick;

    /**
        商品数量
     **/
    public $num;

    /**
        商品数字id
     **/
    public $num_iid;

    /**
        是否淘1站商品
     **/
    public $one_station;

    /**
        商家外部编码(可与商家外部系统对接)。需要授权才能获取。
     **/
    public $outer_id;

    /**
        用户外店装修模板id
     **/
    public $outer_shop_auction_template_id;

    /**
        用于保存拍卖有关的信息
     **/
    public $paimai_info;

    /**
        周期销售库存
     **/
    public $period_sold_quantity;

    /**
        商品主图片地址
     **/
    public $pic_url;

    /**
        平邮费用,格式：5.00；单位：元；精确到：分
     **/
    public $post_fee;

    /**
        宝贝所属的运费模板ID，如果没有返回则说明没有使用运费模板
     **/
    public $postage_id;

    /**
        商品价格，格式：5.00；单位：元；精确到：分
     **/
    public $price;

    /**
        宝贝所属产品的id(可能为空). 该字段可以通过taobao.products.search 得到
     **/
    public $product_id;

    /**
        消保类型，多个类型以,分割。可取以下值：2：假一赔三；4：7天无理由退换货；taobao.items.search和taobao.items.vip.search专用
     **/
    public $promoted_service;

    /**
        商品属性图片列表。fields中只设置prop_img可以返回PropImg结构体中所有字段，如果设置为prop_img.id、prop_img.url、prop_img.properties、prop_img.position等形式就只会返回相应的字段
     **/
    public $prop_imgs;

    /**
        属性值别名,比如颜色的自定义名称
     **/
    public $property_alias;

    /**
        商品属性 格式：pid:vid;pid:vid
     **/
    public $props;

    /**
        商品属性名称。标识着props内容里面的pid和vid所对应的名称。格式为：pid1:vid1:pid_name1:vid_name1;pid2:vid2:pid_name2:vid_name2……(<strong>注：</strong><font color="red">属性名称中的冒号":"被转换为："#cln#";  分号";"被转换为："#scln#"</font>)
     **/
    public $props_name;

    /**
        商品所属卖家的信用等级数，1表示1心，2表示2心……，只有调用商品搜索:taobao.items.get和taobao.items.search的时候才能返回
     **/
    public $score;

    /**
        秒杀商品类型。打上秒杀标记的商品，用户只能下架并不能再上架，其他任何编辑或删除操作都不能进行。如果用户想取消秒杀标记，需要联系小二进行操作。如果秒杀结束需要自由编辑请联系活动负责人（小二）去掉秒杀标记。可选类型web_only(只能通过web网络秒杀)wap_only(只能通过wap网络秒杀)web_and_wap(既能通过web秒杀也能通过wap秒杀)
     **/
    public $second_kill;

    /**
        商品卖点信息，天猫商家使用字段，最长150个字符。
     **/
    public $sell_point;

    /**
        是否承诺退换货服务!
     **/
    public $sell_promise;

    /**
        商品所属的店铺内卖家自定义类目列表
     **/
    public $seller_cids;

    /**
        <a href="http://open.taobao.com/dev/index.php/Sku">Sku</a>列表。fields中只设置sku可以返回Sku结构体中所有字段，如果设置为sku.sku_id、sku.properties、sku.quantity等形式就只会返回相应的字段
     **/
    public $skus;

    /**
        商品销量
     **/
    public $sold_quantity;

    /**
        商品新旧程度(全新:new，闲置:unused，二手：second)
     **/
    public $stuff_status;

    /**
        商品是否支持拍下减库存:1支持;2取消支持(付款减库存);0(默认)不更改 集市卖家默认拍下减库存; 商城卖家默认付款减库存
     **/
    public $sub_stock;

    /**
        页面模板id
     **/
    public $template_id;

    /**
        商品标题,不能超过60字节
     **/
    public $title;

    /**
        商品类型(fixed:一口价;auction:拍卖)注：取消团购
     **/
    public $type;

    /**
        有效期,7或者14（默认是7天）
     **/
    public $valid_thru;

    /**
        该字段废弃，请勿使用。
     **/
    public $video_id;

    /**
        商品视频列表(目前只支持单个视频关联)。fields中只设置video可以返回Video结构体中所有字段，如果设置为video.id、video.video_id、video.url等形式就只会返回相应的字段
     **/
    public $videos;

    /**
        商品是否违规，违规：true , 不违规：false
     **/
    public $violation;

    /**
        对应搜索商品列表页的最近成交量,只有调用商品搜索:taobao.items.get和taobao.items.search的时候才能返回
     **/
    public $volume;

    /**
        不带html标签的desc文本信息，该字段只在taobao.item.get接口中返回
     **/
    public $wap_desc;

    /**
        适合wap应用的商品详情url ，该字段只在taobao.item.get接口中返回
     **/
    public $wap_detail_url;

    /**
        无线的宝贝描述
     **/
    public $wireless_desc;

    /**
        预扣库存，即付款减库存的商品现在有多少处于未付款状态的订单
     **/
    public $with_hold_quantity;

    /**
        商品所属的商家的旺旺在线状况，taobao.items.search和taobao.items.vip.search专用
     **/
    public $ww_status;

    /**
        商品描述模块化，模块列表，由List转化成jsonArray存入，后端逻辑验证通过，拼装成模块内容+锚点导航后存入desc中。数据结构具体参见Item_Desc_Module
     **/
    public $desc_modules;

    /**
        村淘特有商品级数据结构
     **/
    public $cuntao_item_specific;

    /**
        3:4商品主图
     **/
    public $item_rectangle_imgs;

    /**
        是否为小时达子商品
     **/
    public $is_xsd_subitem;

    /**
        多SPU商品对应的多个spuIds
     **/
    public $spu_ids;

    /**
        新版主图视频
     **/
    public $auction_videos;


    public function getAfterSaleId() : int{
        return $this->after_sale_id;
    }

    public function setAfterSaleId(int $afterSaleId){
        $this->after_sale_id = $afterSaleId;
    }

    public function getApproveStatus() : string{
        return $this->approve_status;
    }

    public function setApproveStatus(string $approveStatus){
        $this->approve_status = $approveStatus;
    }

    public function getAuctionPoint() : int{
        return $this->auction_point;
    }

    public function setAuctionPoint(int $auctionPoint){
        $this->auction_point = $auctionPoint;
    }

    public function getAutoFill() : string{
        return $this->auto_fill;
    }

    public function setAutoFill(string $autoFill){
        $this->auto_fill = $autoFill;
    }

    public function getAutoRepost() : bool{
        return $this->auto_repost;
    }

    public function setAutoRepost(bool $autoRepost){
        $this->auto_repost = $autoRepost;
    }

    public function getBarcode() : string{
        return $this->barcode;
    }

    public function setBarcode(string $barcode){
        $this->barcode = $barcode;
    }

    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
    }

    public function getCodPostageId() : int{
        return $this->cod_postage_id;
    }

    public function setCodPostageId(int $codPostageId){
        $this->cod_postage_id = $codPostageId;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getCustomMadeTypeId() : string{
        return $this->custom_made_type_id;
    }

    public function setCustomMadeTypeId(string $customMadeTypeId){
        $this->custom_made_type_id = $customMadeTypeId;
    }

    public function getDelistTime() : string{
        return $this->delist_time;
    }

    public function setDelistTime(string $delistTime){
        $this->delist_time = $delistTime;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getDescModuleInfo() : TaobaoItemsSellerListGetDescModuleInfo{
        return $this->desc_module_info;
    }

    public function setDescModuleInfo(TaobaoItemsSellerListGetDescModuleInfo $descModuleInfo){
        $this->desc_module_info = $descModuleInfo;
    }

    public function getDetailUrl() : string{
        return $this->detail_url;
    }

    public function setDetailUrl(string $detailUrl){
        $this->detail_url = $detailUrl;
    }

    public function getEmsFee() : string{
        return $this->ems_fee;
    }

    public function setEmsFee(string $emsFee){
        $this->ems_fee = $emsFee;
    }

    public function getExpressFee() : string{
        return $this->express_fee;
    }

    public function setExpressFee(string $expressFee){
        $this->express_fee = $expressFee;
    }

    public function getFeatures() : string{
        return $this->features;
    }

    public function setFeatures(string $features){
        $this->features = $features;
    }

    public function getFoodSecurity() : TaobaoItemsSellerListGetFoodSecurity{
        return $this->food_security;
    }

    public function setFoodSecurity(TaobaoItemsSellerListGetFoodSecurity $foodSecurity){
        $this->food_security = $foodSecurity;
    }

    public function getFreightPayer() : string{
        return $this->freight_payer;
    }

    public function setFreightPayer(string $freightPayer){
        $this->freight_payer = $freightPayer;
    }

    public function getGlobalStockCountry() : string{
        return $this->global_stock_country;
    }

    public function setGlobalStockCountry(string $globalStockCountry){
        $this->global_stock_country = $globalStockCountry;
    }

    public function getGlobalStockType() : string{
        return $this->global_stock_type;
    }

    public function setGlobalStockType(string $globalStockType){
        $this->global_stock_type = $globalStockType;
    }

    public function getHasDiscount() : bool{
        return $this->has_discount;
    }

    public function setHasDiscount(bool $hasDiscount){
        $this->has_discount = $hasDiscount;
    }

    public function getHasInvoice() : bool{
        return $this->has_invoice;
    }

    public function setHasInvoice(bool $hasInvoice){
        $this->has_invoice = $hasInvoice;
    }

    public function getHasShowcase() : bool{
        return $this->has_showcase;
    }

    public function setHasShowcase(bool $hasShowcase){
        $this->has_showcase = $hasShowcase;
    }

    public function getHasWarranty() : bool{
        return $this->has_warranty;
    }

    public function setHasWarranty(bool $hasWarranty){
        $this->has_warranty = $hasWarranty;
    }

    public function getIncrement() : string{
        return $this->increment;
    }

    public function setIncrement(string $increment){
        $this->increment = $increment;
    }

    public function getInnerShopAuctionTemplateId() : int{
        return $this->inner_shop_auction_template_id;
    }

    public function setInnerShopAuctionTemplateId(int $innerShopAuctionTemplateId){
        $this->inner_shop_auction_template_id = $innerShopAuctionTemplateId;
    }

    public function getInputPids() : string{
        return $this->input_pids;
    }

    public function setInputPids(string $inputPids){
        $this->input_pids = $inputPids;
    }

    public function getInputStr() : string{
        return $this->input_str;
    }

    public function setInputStr(string $inputStr){
        $this->input_str = $inputStr;
    }

    public function getIs3D() : bool{
        return $this->is_3D;
    }

    public function setIs3D(bool $is3D){
        $this->is_3D = $is3D;
    }

    public function getIsEx() : bool{
        return $this->is_ex;
    }

    public function setIsEx(bool $isEx){
        $this->is_ex = $isEx;
    }

    public function getIsFenxiao() : int{
        return $this->is_fenxiao;
    }

    public function setIsFenxiao(int $isFenxiao){
        $this->is_fenxiao = $isFenxiao;
    }

    public function getIsLightningConsignment() : bool{
        return $this->is_lightning_consignment;
    }

    public function setIsLightningConsignment(bool $isLightningConsignment){
        $this->is_lightning_consignment = $isLightningConsignment;
    }

    public function getIsPrepay() : bool{
        return $this->is_prepay;
    }

    public function setIsPrepay(bool $isPrepay){
        $this->is_prepay = $isPrepay;
    }

    public function getIsTaobao() : bool{
        return $this->is_taobao;
    }

    public function setIsTaobao(bool $isTaobao){
        $this->is_taobao = $isTaobao;
    }

    public function getIsTiming() : bool{
        return $this->is_timing;
    }

    public function setIsTiming(bool $isTiming){
        $this->is_timing = $isTiming;
    }

    public function getIsVirtual() : bool{
        return $this->is_virtual;
    }

    public function setIsVirtual(bool $isVirtual){
        $this->is_virtual = $isVirtual;
    }

    public function getIsXinpin() : bool{
        return $this->is_xinpin;
    }

    public function setIsXinpin(bool $isXinpin){
        $this->is_xinpin = $isXinpin;
    }

    public function getItemImgs() : array{
        return $this->item_imgs;
    }

    public function setItemImgs(array $itemImgs){
        $this->item_imgs = $itemImgs;
    }

    public function getItemSize() : string{
        return $this->item_size;
    }

    public function setItemSize(string $itemSize){
        $this->item_size = $itemSize;
    }

    public function getItemWeight() : string{
        return $this->item_weight;
    }

    public function setItemWeight(string $itemWeight){
        $this->item_weight = $itemWeight;
    }

    public function getListTime() : string{
        return $this->list_time;
    }

    public function setListTime(string $listTime){
        $this->list_time = $listTime;
    }

    public function getLocalityLife() : TaobaoItemsSellerListGetLocalityLife{
        return $this->locality_life;
    }

    public function setLocalityLife(TaobaoItemsSellerListGetLocalityLife $localityLife){
        $this->locality_life = $localityLife;
    }

    public function getLocation() : TaobaoItemsSellerListGetLocation{
        return $this->location;
    }

    public function setLocation(TaobaoItemsSellerListGetLocation $location){
        $this->location = $location;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getMpicVideo() : TaobaoItemsSellerListGetMpicVideo{
        return $this->mpic_video;
    }

    public function setMpicVideo(TaobaoItemsSellerListGetMpicVideo $mpicVideo){
        $this->mpic_video = $mpicVideo;
    }

    public function getNewprepay() : string{
        return $this->newprepay;
    }

    public function setNewprepay(string $newprepay){
        $this->newprepay = $newprepay;
    }

    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }

    public function getNumIid() : int{
        return $this->num_iid;
    }

    public function setNumIid(int $numIid){
        $this->num_iid = $numIid;
    }

    public function getOneStation() : bool{
        return $this->one_station;
    }

    public function setOneStation(bool $oneStation){
        $this->one_station = $oneStation;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getOuterShopAuctionTemplateId() : int{
        return $this->outer_shop_auction_template_id;
    }

    public function setOuterShopAuctionTemplateId(int $outerShopAuctionTemplateId){
        $this->outer_shop_auction_template_id = $outerShopAuctionTemplateId;
    }

    public function getPaimaiInfo() : TaobaoItemsSellerListGetPaimaiInfo{
        return $this->paimai_info;
    }

    public function setPaimaiInfo(TaobaoItemsSellerListGetPaimaiInfo $paimaiInfo){
        $this->paimai_info = $paimaiInfo;
    }

    public function getPeriodSoldQuantity() : int{
        return $this->period_sold_quantity;
    }

    public function setPeriodSoldQuantity(int $periodSoldQuantity){
        $this->period_sold_quantity = $periodSoldQuantity;
    }

    public function getPicUrl() : string{
        return $this->pic_url;
    }

    public function setPicUrl(string $picUrl){
        $this->pic_url = $picUrl;
    }

    public function getPostFee() : string{
        return $this->post_fee;
    }

    public function setPostFee(string $postFee){
        $this->post_fee = $postFee;
    }

    public function getPostageId() : int{
        return $this->postage_id;
    }

    public function setPostageId(int $postageId){
        $this->postage_id = $postageId;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getProductId() : int{
        return $this->product_id;
    }

    public function setProductId(int $productId){
        $this->product_id = $productId;
    }

    public function getPromotedService() : string{
        return $this->promoted_service;
    }

    public function setPromotedService(string $promotedService){
        $this->promoted_service = $promotedService;
    }

    public function getPropImgs() : array{
        return $this->prop_imgs;
    }

    public function setPropImgs(array $propImgs){
        $this->prop_imgs = $propImgs;
    }

    public function getPropertyAlias() : string{
        return $this->property_alias;
    }

    public function setPropertyAlias(string $propertyAlias){
        $this->property_alias = $propertyAlias;
    }

    public function getProps() : string{
        return $this->props;
    }

    public function setProps(string $props){
        $this->props = $props;
    }

    public function getPropsName() : string{
        return $this->props_name;
    }

    public function setPropsName(string $propsName){
        $this->props_name = $propsName;
    }

    public function getScore() : int{
        return $this->score;
    }

    public function setScore(int $score){
        $this->score = $score;
    }

    public function getSecondKill() : string{
        return $this->second_kill;
    }

    public function setSecondKill(string $secondKill){
        $this->second_kill = $secondKill;
    }

    public function getSellPoint() : string{
        return $this->sell_point;
    }

    public function setSellPoint(string $sellPoint){
        $this->sell_point = $sellPoint;
    }

    public function getSellPromise() : bool{
        return $this->sell_promise;
    }

    public function setSellPromise(bool $sellPromise){
        $this->sell_promise = $sellPromise;
    }

    public function getSellerCids() : string{
        return $this->seller_cids;
    }

    public function setSellerCids(string $sellerCids){
        $this->seller_cids = $sellerCids;
    }

    public function getSkus() : array{
        return $this->skus;
    }

    public function setSkus(array $skus){
        $this->skus = $skus;
    }

    public function getSoldQuantity() : int{
        return $this->sold_quantity;
    }

    public function setSoldQuantity(int $soldQuantity){
        $this->sold_quantity = $soldQuantity;
    }

    public function getStuffStatus() : string{
        return $this->stuff_status;
    }

    public function setStuffStatus(string $stuffStatus){
        $this->stuff_status = $stuffStatus;
    }

    public function getSubStock() : int{
        return $this->sub_stock;
    }

    public function setSubStock(int $subStock){
        $this->sub_stock = $subStock;
    }

    public function getTemplateId() : string{
        return $this->template_id;
    }

    public function setTemplateId(string $templateId){
        $this->template_id = $templateId;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getType() : string{
        return $this->type;
    }

    public function setType(string $type){
        $this->type = $type;
    }

    public function getValidThru() : int{
        return $this->valid_thru;
    }

    public function setValidThru(int $validThru){
        $this->valid_thru = $validThru;
    }

    public function getVideoId() : int{
        return $this->video_id;
    }

    public function setVideoId(int $videoId){
        $this->video_id = $videoId;
    }

    public function getVideos() : array{
        return $this->videos;
    }

    public function setVideos(array $videos){
        $this->videos = $videos;
    }

    public function getViolation() : bool{
        return $this->violation;
    }

    public function setViolation(bool $violation){
        $this->violation = $violation;
    }

    public function getVolume() : int{
        return $this->volume;
    }

    public function setVolume(int $volume){
        $this->volume = $volume;
    }

    public function getWapDesc() : string{
        return $this->wap_desc;
    }

    public function setWapDesc(string $wapDesc){
        $this->wap_desc = $wapDesc;
    }

    public function getWapDetailUrl() : string{
        return $this->wap_detail_url;
    }

    public function setWapDetailUrl(string $wapDetailUrl){
        $this->wap_detail_url = $wapDetailUrl;
    }

    public function getWirelessDesc() : string{
        return $this->wireless_desc;
    }

    public function setWirelessDesc(string $wirelessDesc){
        $this->wireless_desc = $wirelessDesc;
    }

    public function getWithHoldQuantity() : int{
        return $this->with_hold_quantity;
    }

    public function setWithHoldQuantity(int $withHoldQuantity){
        $this->with_hold_quantity = $withHoldQuantity;
    }

    public function getWwStatus() : bool{
        return $this->ww_status;
    }

    public function setWwStatus(bool $wwStatus){
        $this->ww_status = $wwStatus;
    }

    public function getDescModules() : string{
        return $this->desc_modules;
    }

    public function setDescModules(string $descModules){
        $this->desc_modules = $descModules;
    }

    public function getCuntaoItemSpecific() : TaobaoItemsSellerListGetCuntaoItemSpecific{
        return $this->cuntao_item_specific;
    }

    public function setCuntaoItemSpecific(TaobaoItemsSellerListGetCuntaoItemSpecific $cuntaoItemSpecific){
        $this->cuntao_item_specific = $cuntaoItemSpecific;
    }

    public function getItemRectangleImgs() : array{
        return $this->item_rectangle_imgs;
    }

    public function setItemRectangleImgs(array $itemRectangleImgs){
        $this->item_rectangle_imgs = $itemRectangleImgs;
    }

    public function getIsXsdSubitem() : bool{
        return $this->is_xsd_subitem;
    }

    public function setIsXsdSubitem(bool $isXsdSubitem){
        $this->is_xsd_subitem = $isXsdSubitem;
    }

    public function getSpuIds() : string{
        return $this->spu_ids;
    }

    public function setSpuIds(string $spuIds){
        $this->spu_ids = $spuIds;
    }

    public function getAuctionVideos() : array{
        return $this->auction_videos;
    }

    public function setAuctionVideos(array $auctionVideos){
        $this->auction_videos = $auctionVideos;
    }


}

