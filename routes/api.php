<?php

return [

    'api/v2' => 'ecapi/v2/default',

    // Other
    'api/v2/ecapi.article.show' => 'ecapi/v2/article/show',

    'api/v2/ecapi.notice.show' => 'ecapi/v2/notice/show',

    'api/v2/ecapi.order.notify.<code:\S+>' => 'ecapi/v2/order/notify',

    'api/v2/ecapi.product.intro.<id:\d+>' => 'ecapi/v2/goods/intro',

    'api/v2/ecapi.product.share.<id:\d+>' => 'ecapi/v2/goods/share',

    'api/v2/ecapi.auth.web' => 'ecapi/v2/user/web-oauth',

    'api/v2/ecapi.auth.web.callback/<vendor:\d+>' => 'ecapi/v2/user/web-callback',

    // Guest
    'api/v2/ecapi.access.dns' => 'ecapi/v2/access/dns',

    'api/v2/ecapi.access.batch' => 'ecapi/v2/access/batch',

    'api/v2/ecapi.category.list' => 'ecapi/v2/goods/category',

    'api/v2/ecapi.category.all.list' => 'ecapi/v2/goods/all-category',

    'api/v2/ecapi.product.list' => 'ecapi/v2/goods/index',

    'api/v2/ecapi.search.product.list' => 'ecapi/v2/goods/search',

    'api/v2/ecapi.review.product.list' => 'ecapi/v2/goods/review',

    'api/v2/ecapi.review.product.subtotal' => 'ecapi/v2/goods/subtotal',

    'api/v2/ecapi.recommend.product.list' => 'ecapi/v2/goods/recommend-list',

    'api/v2/ecapi.product.accessory.list' => 'ecapi/v2/goods/accessory-list',

    'api/v2/ecapi.product.get' => 'ecapi/v2/goods/info',

    'api/v2/ecapi.auth.weixin.mplogin' => 'ecapi/v2/user/weixin-mini-program-login',

    'api/v2/ecapi.auth.signin' => 'ecapi/v2/user/signin',

    'api/v2/ecapi.auth.social' => 'ecapi/v2/user/auth',

    'api/v2/ecapi.auth.default.signup' => 'ecapi/v2/user/signup-by-email',

    'api/v2/ecapi.auth.mobile.signup' => 'ecapi/v2/user/signup-by-mobile',

    'api/v2/ecapi.user.profile.fields' => 'ecapi/v2/user/fields',

    'api/v2/ecapi.auth.mobile.verify' => 'ecapi/v2/user/verify-mobile',

    'api/v2/ecapi.auth.mobile.send' => 'ecapi/v2/user/send-code',

    'api/v2/ecapi.auth.mobile.reset' => 'ecapi/v2/user/reset-password-by-mobile',

    'api/v2/ecapi.auth.default.reset' => 'ecapi/v2/user/reset-password-by-email',

    'api/v2/ecapi.cardpage.get' => 'ecapi/v2/card-page/view',

    'api/v2/ecapi.cardpage.preview' => 'ecapi/v2/card-page/preview',

    'api/v2/ecapi.config.get' => 'ecapi/v2/config/index',

    'api/v2/ecapi.article.list' => 'ecapi/v2/article/index',

    'api/v2/ecapi.brand.list' => 'ecapi/v2/brand/index',

    'api/v2/ecapi.search.keyword.list' => 'ecapi/v2/search/index',

    'api/v2/ecapi.region.list' => 'ecapi/v2/region/index',

    'api/v2/ecapi.invoice.type.list' => 'ecapi/v2/invoice/type',

    'api/v2/ecapi.invoice.content.list' => 'ecapi/v2/invoice/content',

    'api/v2/ecapi.invoice.status.get' => 'ecapi/v2/invoice/status',

    'api/v2/ecapi.notice.list' => 'ecapi/v2/notice/index',

    'api/v2/ecapi.banner.list' => 'ecapi/v2/banner/index',

    'api/v2/ecapi.version.check' => 'ecapi/v2/version/check',

    'api/v2/ecapi.recommend.brand.list' => 'ecapi/v2/brand/recommend',

    'api/v2/ecapi.message.system.list' => 'ecapi/v2/message/system',

    'api/v2/ecapi.message.count' => 'ecapi/v2/message/unread',

    'api/v2/ecapi.site.get' => 'ecapi/v2/site/index',

    'api/v2/ecapi.splash.list' => 'ecapi/v2/splash/index',

    'api/v2/ecapi.splash.preview' => 'ecapi/v2/splash/view',

    'api/v2/ecapi.theme.list' => 'ecapi/v2/theme/index',

    'api/v2/ecapi.theme.preview' => 'ecapi/v2/theme/view',

    'api/v2/ecapi.search.category.list' => 'ecapi/v2/goods/category-search',

    'api/v2/ecapi.order.reason.list' => 'ecapi/v2/order/reason-list',

    'api/v2/ecapi.search.shop.list' => 'ecapi/v2/shop/search',

    'api/v2/ecapi.recommend.shop.list' => 'ecapi/v2/shop/recommand',

    'api/v2/ecapi.shop.list' => 'ecapi/v2/shop/index',

    'api/v2/ecapi.shop.get' => 'ecapi/v2/shop/info',

    'api/v2/ecapi.areacode.list' => 'ecapi/v2/area-code/index',

    // Authorization
    'api/v2/ecapi.user.profile.get' => 'ecapi/v2/user/profile',

    'api/v2/ecapi.user.profile.update' => 'ecapi/v2/user/update-profile',

    'api/v2/ecapi.user.password.update' => 'ecapi/v2/user/update-password',

    'api/v2/ecapi.order.list' => 'ecapi/v2/order/index',

    'api/v2/ecapi.order.get' => 'ecapi/v2/order/view',

    'api/v2/ecapi.order.confirm' => 'ecapi/v2/order/confirm',

    'api/v2/ecapi.order.cancel' => 'ecapi/v2/order/cancel',

    'api/v2/ecapi.order.price' => 'ecapi/v2/order/price',

    'api/v2/ecapi.product.like' => 'ecapi/v2/goods/set-like',

    'api/v2/ecapi.product.unlike' => 'ecapi/v2/goods/set-unlike',

    'api/v2/ecapi.product.liked.list' => 'ecapi/v2/goods/liked-list',

    'api/v2/ecapi.order.review' => 'ecapi/v2/order/review',

    'api/v2/ecapi.order.subtotal' => 'ecapi/v2/order/subtotal',

    'api/v2/ecapi.payment.types.list' => 'ecapi/v2/order/payment-list',

    'api/v2/ecapi.payment.pay' => 'ecapi/v2/order/pay',

    'api/v2/ecapi.shipping.vendor.list' => 'ecapi/v2/shipping/index',

    'api/v2/ecapi.shipping.status.get' => 'ecapi/v2/shipping/info',

    'api/v2/ecapi.consignee.list' => 'ecapi/v2/consignee/index',

    'api/v2/ecapi.consignee.update' => 'ecapi/v2/consignee/modify',

    'api/v2/ecapi.consignee.add' => 'ecapi/v2/consignee/add',

    'api/v2/ecapi.consignee.delete' => 'ecapi/v2/consignee/remove',

    'api/v2/ecapi.consignee.setDefault' => 'ecapi/v2/consignee/set-default',

    'api/v2/ecapi.score.get' => 'ecapi/v2/score/view',

    'api/v2/ecapi.score.history.list' => 'ecapi/v2/score/history',

    'api/v2/ecapi.cashgift.list' => 'ecapi/v2/cash-gift/index',

    'api/v2/ecapi.cashgift.available' => 'ecapi/v2/cash-gift/available',

    'api/v2/ecapi.push.update' => 'ecapi/v2/message/update-deviceId',

    'api/v2/ecapi.cart.add' => 'ecapi/v2/cart/add',

    'api/v2/ecapi.cart.clear' => 'ecapi/v2/cart/clear',

    'api/v2/ecapi.cart.delete' => 'ecapi/v2/cart/delete',

    'api/v2/ecapi.cart.get' => 'ecapi/v2/cart/index',

    'api/v2/ecapi.cart.update' => 'ecapi/v2/cart/update',

    'api/v2/ecapi.cart.checkout' => 'ecapi/v2/cart/checkout',

    'api/v2/ecapi.cart.promos' => 'ecapi/v2/cart/promos',

    'api/v2/ecapi.product.purchase' => 'ecapi/v2/goods/purchase',

    'api/v2/ecapi.product.validate' => 'ecapi/v2/goods/check-product',

    'api/v2/ecapi.message.order.list' => 'ecapi/v2/message/order',

    'api/v2/ecapi.shop.watch' => 'ecapi/v2/shop/watch',

    'api/v2/ecapi.shop.unwatch' => 'ecapi/v2/shop/unwatch',

    'api/v2/ecapi.shop.watching.list' => 'ecapi/v2/shop/watching-list',

    'api/v2/ecapi.coupon.list' => 'ecapi/v2/coupon/index',

    'api/v2/ecapi.coupon.available' => 'ecapi/v2/coupon/available',

    'api/v2/ecapi.cart.flow' => 'ecapi/v2/cart/flow',

];

/**

// API
Route::get('/', function () {
    return 'I\'m ready.';
});

// Notify
Route::group(['prefix' => 'v2'], function () {
    Route::post('ectouch.order.notify.{code}', 'OrderController@notify');
    Route::get('ectouch.user.auth.callback/{vendor:[0-9]+}', 'UserController@callback');
});

// Guest
Route::group(['prefix' => 'v2', 'middleware' => 'api'], function () {
    // 商品
    Route::post('ectouch.item.get', 'GoodsController@show'); // 获取单个商品信息
    Route::post('ectouch.item.sku.get', 'ProductController@show'); // 获取单个商品SKU
    Route::post('ectouch.item.accessory.list', 'GoodsController@accessory'); // 获取商品配件
    Route::post('ectouch.items.get', 'GoodsController@index'); // 获取商品列表
    // 类目
    Route::post('ectouch.category.get', 'CategoryController@show'); // 获取单个分类信息
    Route::post('ectouch.categories.get', 'CategoryController@index'); // 获取分类列表
    Route::post('ectouch.brand.category.get', 'BrandController@category'); // 获取品牌分类
    Route::post('ectouch.brand.get', 'BrandController@show'); // 获取单个品牌信息
    Route::post('ectouch.brands.get', 'BrandController@index'); // 获取品牌列表
    // 用户
    Route::post('ectouch.user.signup.fields', 'UserController@fields'); // 获取注册字段
    Route::post('ectouch.user.social', 'UserController@social'); // 获取oAuth
    Route::post('ectouch.user.oauth', 'UserController@oauth'); // oAuth登录
    Route::post('ectouch.user.signin', 'UserController@signin'); // 用户登录
    Route::post('ectouch.user.default.signup', 'UserController@signupByEmail'); // 用户邮箱注册
    Route::post('ectouch.user.mobile.signup', 'UserController@signupByMobile'); // 用户手机注册
    Route::post('ectouch.user.mobile.send', 'UserController@sendCode'); // 发送验证码
    Route::post('ectouch.user.mobile.verify', 'UserController@verifyMobile'); // 校验验证码
    Route::post('ectouch.user.default.reset', 'UserController@resetByEmail'); // 找回密码
    Route::post('ectouch.user.mobile.reset', 'UserController@resetByMobile');
    Route::post('ectouch.user.bind', 'UserController@bind'); // 绑定注册
    // 评论
    Route::post('ectouch.comments.get', 'CommentController@index'); // 显示评论列表
    Route::post('ectouch.messages.get', 'MessageController@index'); // 显示留言列表
    // 营销
    Route::post('ectouch.activity.list', 'ActivityController@index'); // 优惠活动
    Route::post('ectouch.auction.list', 'AuctionController@index'); // 拍卖活动
    Route::post('ectouch.groupbuy.list', 'GroupBuyController@index'); // 团购活动
    Route::post('ectouch.exchange.list', 'ExchangeController@index'); // 积分兑换
    Route::post('ectouch.topic.list', 'TopicController@index'); // 专题汇
    Route::post('ectouch.article.list', 'ArticleController@index'); // 社区资讯
    Route::post('ectouch.article.get', 'ArticleController@show');
    Route::post('ectouch.wholesale.list', 'WholesaleController@index'); // 批发活动
    Route::post('ectouch.snatch.list', 'SnatchController@index'); // 夺宝奇兵
    // 微信
    Route::post('ectouch.wechat.jssdk', 'WechatController@jssdk'); // 微信JSSDK
    // 门店
    Route::post('ectouch.stores.get', 'StoreController@index'); // 门店列表
    Route::post('ectouch.store.get', 'StoreController@show'); // 门店详情
    // 核销
    Route::post('ectouch.virtualcodes.get', 'VirtualcodeController@index'); // 核销订单列表
    Route::post('ectouch.virtualcode.get', 'VirtualcodeController@show'); // 核销订单信息
    Route::post('ectouch.virtualcode.apply', 'VirtualcodeController@apply'); // 使用核销验证码
    // 店铺
    Route::post('ectouch.shop.config', 'ShopController@config'); // 系统配置
    Route::post('ectouch.shop.shipping', 'ShopController@shipping'); // 配送方式
    Route::post('ectouch.shop.payment', 'ShopController@payment'); // 支付方式
    Route::post('ectouch.shop.banner', 'ShopController@banner'); // 手机幻灯片
    Route::post('ectouch.shop.adv', 'ShopController@adv'); // 手机广告
    Route::post('ectouch.shop.help', 'ShopController@help'); // 商店帮助
    // 工具
    Route::post('ectouch.tool.region', 'MiscController@region'); // 地区
    Route::post('ectouch.search.keywords', 'GoodsController@index'); // 搜索关键词
});

// Authentication
Route::group(['prefix' => 'v2', 'middleware' => 'auth:api'], function () {
    // 用户资料
    Route::post('ectouch.user.get', 'UserController@show'); // 获取用户信息
    Route::post('ectouch.user.profile.update', 'UserController@update'); // 更新用户资料
    Route::post('ectouch.user.password.update', 'UserController@password'); // 修改会员密码
    // 收货地址
    Route::post('ectouch.user.address.get', 'UserAddressController@show'); // 获取用户收货地址
    Route::post('ectouch.user.address.add', 'UserAddressController@store'); // 添加用户收货地址
    Route::post('ectouch.user.address.update', 'UserAddressController@update'); // 更新用户收货地址
    Route::post('ectouch.user.address.delete', 'UserAddressController@destroy'); // 删除用户收货地址
    Route::post('ectouch.user.address.default', 'UserAddressController@default'); // 设置默认收货地址
    // 收藏&关注
    Route::post('ectouch.user.collect.add', 'UserCollectController@store'); // 用户收藏单个商品
    Route::post('ectouch.user.collect.delete', 'UserCollectController@destroy'); // 用户删除收藏商品
    Route::post('ectouch.user.collects.get', 'UserCollectController@index'); // 用户收藏列表
    Route::post('ectouch.user.attention.add', 'UserAttentionController@store'); // 添加关注商品
    Route::post('ectouch.user.attention.delete', 'UserAttentionController@destroy'); // 取消关注商品
    Route::post('ectouch.user.attentions.get', 'UserAttentionController@index'); // 用户关注列表
    // 资金
    Route::post('ectouch.user.account.log', 'UserAccountController@log'); // 获取会员充值提现记录
    Route::post('ectouch.user.account.deposit', 'UserAccountController@deposit'); // 创建会员充值申请
    Route::post('ectouch.user.account.raply', 'UserAccountController@raply'); // 创建会员提现申请
    Route::post('ectouch.user.account.detail', 'UserAccountController@detail'); // 获取帐户资金明细
    Route::post('ectouch.user.account.pay', 'UserAccountController@pay'); // 会员充值付款
    Route::post('ectouch.user.account.cancel', 'UserAccountController@cancel'); // 会员充值/提现申请取消
    // 红包
    Route::post('ectouch.user.bonus.get', 'UserBonusController@index'); // 会员红包列表
    Route::post('ectouch.user.bonus.add', 'UserBonusController@store'); // 添加一个红包
    // 缺货登记
    Route::post('ectouch.user.booking.add', 'UserBookingController@store'); // 添加缺货登记
    Route::post('ectouch.user.booking.delete', 'UserBookingController@destroy'); // 删除缺货登记
    Route::post('ectouch.user.bookings.get', 'UserBookingController@index'); // 显示缺货登记列表
    // 标签云
    Route::post('ectouch.user.tags.get', 'UserTagController@index'); // 标签云列表
    Route::post('ectouch.user.tag.add', 'UserTagController@store'); // 添加标签云
    Route::post('ectouch.user.tag.delete', 'UserTagController@destroy'); // 删除标签
    // 推荐分成
    Route::post('ectouch.user.affiliate', 'UserController@affiliate'); // 用户推荐分成
    // 浏览历史
    Route::post('ectouch.user.history.add', 'UserHistoryController@store'); // 增加商品浏览历史
    Route::post('ectouch.user.history.clear', 'UserHistoryController@clear'); // 清除商品浏览历史
    // 评论&留言
    Route::post('ectouch.comment.add', 'CommentController@store'); // 发表商品评论
    Route::post('ectouch.comment.delete', 'CommentController@destroy'); // 删除评论
    Route::post('ectouch.message.add', 'MessageController@store'); // 提交留言反馈
    Route::post('ectouch.message.delete', 'MessageController@destroy'); // 删除留言
    // 购物车
    Route::post('ectouch.cart.get', 'CartController@index'); // 获取购物车商品
    Route::post('ectouch.cart.add', 'CartController@store'); // 添加一个商品到购物车
    Route::post('ectouch.cart.update', 'CartController@update'); // 更新购物车商品数目
    Route::post('ectouch.cart.delete', 'CartController@destroy'); // 从购物车中删除一商品
    Route::post('ectouch.cart.clear', 'CartController@clear'); // 清空购物车中的商品
    Route::post('ectouch.cart.collect', 'CartController@collect'); // 将商品移至收藏夹
    Route::post('ectouch.cart.package.add', 'CartPackageController@store'); // 添加礼包到购物车
    Route::post('ectouch.cart.favourable.add', 'CartFavourableController@store'); // 添加优惠活动到购物车
    // 交易
    Route::post('ectouch.flow.check', 'FlowController@check'); // 检查订单数据
    Route::post('ectouch.flow.shipping.update', 'FlowController@shipping'); // 改变配送方式
    Route::post('ectouch.flow.insure.update', 'FlowController@insure'); // 选定/取消配送保价
    Route::post('ectouch.flow.payment.update', 'FlowController@payment'); // 改变支付方式
    Route::post('ectouch.flow.pack.update', 'FlowController@pack'); // 改变包装
    Route::post('ectouch.flow.card.update', 'FlowController@card'); // 改变贺卡
    Route::post('ectouch.flow.surplus.update', 'FlowController@surplus'); // 改变余额
    Route::post('ectouch.flow.integral.update', 'FlowController@integral'); // 改变积分
    Route::post('ectouch.flow.bonus.update', 'FlowController@bonus'); // 改变红包优惠券
    Route::post('ectouch.flow.needinv.update', 'FlowController@needinv'); // 改变发票设置
    Route::post('ectouch.flow.oos.update', 'FlowController@oos'); // 改变缺货处理方式
    // 订单
    Route::post('ectouch.order.add', 'OrderController@store'); // 提交订单数据
    Route::post('ectouch.order.get', 'OrderController@show'); // 获取单个订单
    Route::post('ectouch.order.update', 'OrderController@update'); // 更新单个订单
    Route::post('ectouch.order.cancel', 'OrderController@cancel'); // 取消单个订单
    Route::post('ectouch.order.merge', 'OrderController@merge'); // 合并两个订单
    Route::post('ectouch.order.again', 'OrderController@again'); // 订单商品添加到购物车
    Route::post('ectouch.order.pay', 'OrderController@pay'); // 获取订单支付信息
    Route::post('ectouch.order.reminder', 'OrderController@reminder'); // 订单发货提醒
    Route::post('ectouch.order.express', 'OrderController@express'); // 订单快递追踪
    Route::post('ectouch.order.received', 'OrderController@received'); // 订单确认收货
    Route::post('ectouch.orders.get', 'OrderController@index'); // 获取订单列表
});