<?php
namespace Topsdk\Topapi\Defaultability;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagChunkDisableRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagChunkListRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagTagCateUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagTagCateAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagTagCateDisableRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagTagCateListRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagTagChunkUnmarkRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagTagChunkMarkRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagTagUnitUnmarkRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagTagUnitMarkRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterSubusersGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubusersPageRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterUserPermissionsGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoOpenAipaasAlertMessageSendRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagKnowledgeUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagKnowledgeDisableRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagKnowledgeListRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagUnitUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemsOnsaleGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagUnitAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagUnitDisableRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagUnitListRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagChunkUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagChunkAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagChunkSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemSkuGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoAppstoreSubscribeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemSkusGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagTagEnableRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagTagListRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagTagDisableRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagTagAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagTagUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemSellerGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemsSellerListGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterSubuserPermissionsRolesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterRolesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoShopcatsListGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercatsListGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterRoleAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoLogisticsTraceGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasSubscribeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagInfraKnowledgeDeleteRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasOrderSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasSubscSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagInfraKnowledgeQueryRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagInfraKnowledgeUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoFuwuScoresGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagInfraKnowledgeAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoOpenAipaasTokenGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoOpenAipaasOssputTokenGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemcatsGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoFuwuSaleLinkGenRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoKfcKeywordSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoWlbOrderJzQueryRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoWlbOrderJzConsignRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubusersInfoQueryRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemcatsAuthorizeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemsInventoryGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSkusCustomGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoMessageChatrobotStatusSwitchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubusersGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubuserFullinfoGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubuserDepartmentsGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubuserDutysGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubuserInfoUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTradesSoldIncrementvGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcMessageProduceRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserCancelRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserPermitRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoOpenAipaasGrayCheckRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterSubusersPageRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTopRagKnowledgeAddRequest;

class Defaultability {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        AI-RAG 禁用知识 chunk
    **/
    public function taobaoTopRagChunkDisable(TaobaoTopRagChunkDisableRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.chunk.disable", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 查询知识 chunk
    **/
    public function taobaoTopRagChunkList(TaobaoTopRagChunkListRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.chunk.list", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 更新标签类目
    **/
    public function taobaoTopRagTagCateUpdate(TaobaoTopRagTagCateUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.tag.cate.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 创建标签类目
    **/
    public function taobaoTopRagTagCateAdd(TaobaoTopRagTagCateAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.tag.cate.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 禁用标签类目
    **/
    public function taobaoTopRagTagCateDisable(TaobaoTopRagTagCateDisableRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.tag.cate.disable", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 查询标签类目
    **/
    public function taobaoTopRagTagCateList(TaobaoTopRagTagCateListRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.tag.cate.list", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG chunk 移除标签
    **/
    public function taobaoTopRagTagChunkUnmark(TaobaoTopRagTagChunkUnmarkRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.tag.chunk.unmark", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG chunk 添加标签
    **/
    public function taobaoTopRagTagChunkMark(TaobaoTopRagTagChunkMarkRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.tag.chunk.mark", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 知识单元移除标签
    **/
    public function taobaoTopRagTagUnitUnmark(TaobaoTopRagTagUnitUnmarkRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.tag.unit.unmark", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 知识单元添加标签
    **/
    public function taobaoTopRagTagUnitMark(TaobaoTopRagTagUnitMarkRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.tag.unit.mark", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询指定账户的子账号列表
    **/
    public function taobaoSellercenterSubusersGet(TaobaoSellercenterSubusersGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.subusers.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        分页获取指定账户的子账号简易信息列表（新isv建议使用taobao.sellercenter.subusers.page接口）
    **/
    public function taobaoSubusersPage(TaobaoSubusersPageRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.page", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定用户的权限集合
    **/
    public function taobaoSellercenterUserPermissionsGet(TaobaoSellercenterUserPermissionsGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.user.permissions.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI服务封闭环境发送告警消息
    **/
    public function taobaoOpenAipaasAlertMessageSend(TaobaoOpenAipaasAlertMessageSendRequest $request) {
        return $this->client->execute("taobao.open.aipaas.alert.message.send", $request->toMap(), $request->toFileParamMap());
    }
    /**
        AI-RAG 更新知识库
    **/
    public function taobaoTopRagKnowledgeUpdate(TaobaoTopRagKnowledgeUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.knowledge.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 禁用知识库
    **/
    public function taobaoTopRagKnowledgeDisable(TaobaoTopRagKnowledgeDisableRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.knowledge.disable", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 查询知识库
    **/
    public function taobaoTopRagKnowledgeList(TaobaoTopRagKnowledgeListRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.knowledge.list", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 更新知识单元
    **/
    public function taobaoTopRagUnitUpdate(TaobaoTopRagUnitUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.unit.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取当前会话用户出售中的商品列表
    **/
    public function taobaoItemsOnsaleGet(TaobaoItemsOnsaleGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.items.onsale.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 创建知识单元
    **/
    public function taobaoTopRagUnitAdd(TaobaoTopRagUnitAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.unit.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 禁用知识单元
    **/
    public function taobaoTopRagUnitDisable(TaobaoTopRagUnitDisableRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.unit.disable", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 查询知识单元
    **/
    public function taobaoTopRagUnitList(TaobaoTopRagUnitListRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.unit.list", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 更新知识 chunk
    **/
    public function taobaoTopRagChunkUpdate(TaobaoTopRagChunkUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.chunk.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 创建知识 chunk
    **/
    public function taobaoTopRagChunkAdd(TaobaoTopRagChunkAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.chunk.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取商家所在分组及其已授权(广播)消息topics
    **/
    public function taobaoTmcUserGet(TaobaoTmcUserGetRequest $request) {
        return $this->client->execute("taobao.tmc.user.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        AI-RAG 知识检索
    **/
    public function taobaoTopRagChunkSearch(TaobaoTopRagChunkSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.chunk.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取SKU
    **/
    public function taobaoItemSkuGet(TaobaoItemSkuGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.sku.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询appstore应用订购关系
    **/
    public function taobaoAppstoreSubscribeGet(TaobaoAppstoreSubscribeGetRequest $request) {
        return $this->client->execute("taobao.appstore.subscribe.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        根据商品ID列表获取SKU信息
    **/
    public function taobaoItemSkusGet(TaobaoItemSkusGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.skus.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 禁用后重新启用标签
    **/
    public function taobaoTopRagTagEnable(TaobaoTopRagTagEnableRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.tag.enable", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 查询标签
    **/
    public function taobaoTopRagTagList(TaobaoTopRagTagListRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.tag.list", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 禁用标签
    **/
    public function taobaoTopRagTagDisable(TaobaoTopRagTagDisableRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.tag.disable", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 创建标签
    **/
    public function taobaoTopRagTagAdd(TaobaoTopRagTagAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.tag.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 更新标签
    **/
    public function taobaoTopRagTagUpdate(TaobaoTopRagTagUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.tag.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取单个商品详细信息
    **/
    public function taobaoItemSellerGet(TaobaoItemSellerGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.seller.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        批量获取商品详细信息
    **/
    public function taobaoItemsSellerListGet(TaobaoItemsSellerListGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.items.seller.list.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询指定的子账号的权限和角色信息
    **/
    public function taobaoSellercenterSubuserPermissionsRolesGet(TaobaoSellercenterSubuserPermissionsRolesGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.subuser.permissions.roles.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定卖家的角色列表
    **/
    public function taobaoSellercenterRolesGet(TaobaoSellercenterRolesGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.roles.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取前台展示的店铺类目
    **/
    public function taobaoShopcatsListGet(TaobaoShopcatsListGetRequest $request) {
        return $this->client->execute("taobao.shopcats.list.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取前台展示的店铺内卖家自定义商品类目
    **/
    public function taobaoSellercatsListGet(TaobaoSellercatsListGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercats.list.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        子账号角色的新增（指定卖家）
    **/
    public function taobaoSellercenterRoleAdd(TaobaoSellercenterRoleAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.role.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        用户根据交易号查询物流流转信息
    **/
    public function taobaoLogisticsTraceGet(TaobaoLogisticsTraceGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.logistics.trace.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        订购关系查询
    **/
    public function taobaoVasSubscribeGet(TaobaoVasSubscribeGetRequest $request) {
        return $this->client->execute("taobao.vas.subscribe.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        AI基建生态删除知识库
    **/
    public function taobaoTopRagInfraKnowledgeDelete(TaobaoTopRagInfraKnowledgeDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.infra.knowledge.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        订单记录导出
    **/
    public function taobaoVasOrderSearch(TaobaoVasOrderSearchRequest $request) {
        return $this->client->execute("taobao.vas.order.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        订购记录导出
    **/
    public function taobaoVasSubscSearch(TaobaoVasSubscSearchRequest $request) {
        return $this->client->execute("taobao.vas.subsc.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        AI基建生态查询知识库
    **/
    public function taobaoTopRagInfraKnowledgeQuery(TaobaoTopRagInfraKnowledgeQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.infra.knowledge.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI基建生态更新知识库
    **/
    public function taobaoTopRagInfraKnowledgeUpdate(TaobaoTopRagInfraKnowledgeUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.infra.knowledge.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务平台评价查询接口
    **/
    public function taobaoFuwuScoresGet(TaobaoFuwuScoresGetRequest $request) {
        return $this->client->execute("taobao.fuwu.scores.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        AI基建生态创建知识库
    **/
    public function taobaoTopRagInfraKnowledgeAdd(TaobaoTopRagInfraKnowledgeAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.infra.knowledge.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI封闭环境临时token获取
    **/
    public function taobaoOpenAipaasTokenGet(TaobaoOpenAipaasTokenGetRequest $request) {
        return $this->client->execute("taobao.open.aipaas.token.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        AI服务封闭环境外OSS仅上传aksk获取
    **/
    public function taobaoOpenAipaasOssputTokenGet(TaobaoOpenAipaasOssputTokenGetRequest $request) {
        return $this->client->execute("taobao.open.aipaas.ossput.token.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取后台供卖家发布商品的标准商品类目
    **/
    public function taobaoItemcatsGet(TaobaoItemcatsGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.itemcats.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        服务平台营销链接生成接口
    **/
    public function taobaoFuwuSaleLinkGen(TaobaoFuwuSaleLinkGenRequest $request) {
        return $this->client->execute("taobao.fuwu.sale.link.gen", $request->toMap(), $request->toFileParamMap());
    }
    /**
        关键词过滤匹配
    **/
    public function taobaoKfcKeywordSearch(TaobaoKfcKeywordSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.kfc.keyword.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        家装业务查询物流公司api
    **/
    public function taobaoWlbOrderJzQuery(TaobaoWlbOrderJzQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.order.jz.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        家装发货接口
    **/
    public function taobaoWlbOrderJzConsign(TaobaoWlbOrderJzConsignRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.wlb.order.jz.consign", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据当前子账号登陆态，获取该子账号基本信息
    **/
    public function taobaoSubusersInfoQuery(TaobaoSubusersInfoQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.info.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询商家被授权品牌列表和类目列表
    **/
    public function taobaoItemcatsAuthorizeGet(TaobaoItemcatsAuthorizeGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.itemcats.authorize.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        得到当前会话用户库存中的商品列表
    **/
    public function taobaoItemsInventoryGet(TaobaoItemsInventoryGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.items.inventory.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据外部ID取商品SKU
    **/
    public function taobaoSkusCustomGet(TaobaoSkusCustomGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.skus.custom.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        客服机器人托管状态切换
    **/
    public function taobaoMessageChatrobotStatusSwitch(TaobaoMessageChatrobotStatusSwitchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.message.chatrobot.status.switch", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定账户的子账号简易信息列表
    **/
    public function taobaoSubusersGet(TaobaoSubusersGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定账户子账号的详细信息
    **/
    public function taobaoSubuserFullinfoGet(TaobaoSubuserFullinfoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subuser.fullinfo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定账户的所有部门列表
    **/
    public function taobaoSubuserDepartmentsGet(TaobaoSubuserDepartmentsGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subuser.departments.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定账户的所有职务信息列表
    **/
    public function taobaoSubuserDutysGet(TaobaoSubuserDutysGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subuser.dutys.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改指定账户子账号的基本信息
    **/
    public function taobaoSubuserInfoUpdate(TaobaoSubuserInfoUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subuser.info.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询卖家已卖出的增量交易数据（根据入库时间）
    **/
    public function taobaoTradesSoldIncrementvGet(TaobaoTradesSoldIncrementvGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.trades.sold.incrementv.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        发布单条消息
    **/
    public function taobaoTmcMessageProduce(TaobaoTmcMessageProduceRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tmc.message.produce", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        取消用户的消息服务
    **/
    public function taobaoTmcUserCancel(TaobaoTmcUserCancelRequest $request) {
        return $this->client->execute("taobao.tmc.user.cancel", $request->toMap(), $request->toFileParamMap());
    }
    /**
        为已授权的用户开通消息服务
    **/
    public function taobaoTmcUserPermit(TaobaoTmcUserPermitRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tmc.user.permit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI服务封闭环境切流判断
    **/
    public function taobaoOpenAipaasGrayCheck(TaobaoOpenAipaasGrayCheckRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.open.aipaas.gray.check", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        通过主账号登陆态分页查询子账号列表
    **/
    public function taobaoSellercenterSubusersPage(TaobaoSellercenterSubusersPageRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.subusers.page", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        AI-RAG 创建知识库
    **/
    public function taobaoTopRagKnowledgeAdd(TaobaoTopRagKnowledgeAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.top.rag.knowledge.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
}