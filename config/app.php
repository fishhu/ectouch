<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    */

    'name' => 'ECTouch',

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => 'http://m.ectouch.cn',

    /*
    |--------------------------------------------------------------------------
    | Static Resource URL
    |--------------------------------------------------------------------------
    */

    'static' => 'http://localhost/ecshop/ecshop_v2.7.3',

    /*
    |--------------------------------------------------------------------------
    | Static Resource Path
    |--------------------------------------------------------------------------
    */

    'storage' => dirname(__DIR__) . '/storage/app/public',

    /*
    |--------------------------------------------------------------------------
    | Static Resource Path
    |--------------------------------------------------------------------------
    */

    'menu' => [
        [
            'name' => '我的面板',
            'icon' => 'fa fa-tachometer',
            'submenu' => [
                [
                    'name' => '修改资料',
                    'url' => 'profile/index'
                ],
                [
                    'name' => '修改密码',
                    'url' => 'profile/reset-password'
                ],
            ]
        ],
        [
            'name' => '店铺设置',
            'icon' => 'fa fa-laptop',
            'submenu' => [
                [
                    'name' => '商店设置',
                    'url' => 'setting/shop'
                ],
                [
                    'name' => '导航管理',
                    'url' => 'navigator/index'
                ],
                [
                    'name' => '幻灯片设置',
                    'url' => 'slide/index'
                ],
                [
                    'name' => '支付方式',
                    'url' => 'payment/index'
                ],
                [
                    'name' => '配送方式',
                    'url' => 'shipping/index'
                ],
                [
                    'name' => '地区管理',
                    'url' => 'region/index'
                ],
                [
                    'name' => '办事处列表',
                    'url' => 'agency/index'
                ],
                [
                    'name' => '供货商列表',
                    'url' => 'suppliers/index'
                ],
            ]
        ],
        [
            'name' => '商品管理',
            'icon' => 'fa fa-inbox',
            'submenu' => [
                [
                    'name' => '全部商品',
                    'url' => 'goods/index'
                ],
                [
                    'name' => '商品分类',
                    'url' => 'category/index'
                ],
                [
                    'name' => '商品品牌',
                    'url' => 'brand/index'
                ],
                [
                    'name' => '商品类型',
                    'url' => 'goods-type/index'
                ],
                [
                    'name' => '商品标签',
                    'url' => 'goods-tag/index'
                ],
                [
                    'name' => '商品回收站',
                    'url' => 'goods/trash'
                ],
            ]
        ],
        [
            'name' => '订单管理',
            'icon' => 'fa fa-file-o',
            'submenu' => [
                [
                    'name' => '全部订单', // 查询&合并
                    'url' => 'order/index'
                ],
                [
                    'name' => '发货单管理',
                    'url' => 'delivery/index'
                ],
                [
                    'name' => '退换货管理',
                    'url' => 'refund/index'
                ],
                [
                    'name' => '订单打印设置',
                    'url' => 'order/print'
                ]
            ]
        ],
        [
            'name' => '用户管理',
            'icon' => 'fa fa-user-o',
            'submenu' => [
                [
                    'name' => '会员列表', // 查询&合并
                    'url' => 'user/index'
                ],
                [
                    'name' => '会员等级',
                    'url' => 'user-rank/index'
                ],
                [
                    'name' => '会员整合',
                    'url' => 'user-rank/index'
                ],
                [
                    'name' => '会员注册项',
                    'url' => 'user/fields'
                ]
            ]
        ],
        [
            'name' => '门店管理',
            'icon' => 'fa fa-map-marker',
            'submenu' => [
                [
                    'name' => '门店列表',
                    'url' => 'store/index'
                ],
            ]
        ],
        [
            'name' => '内容资讯',
            'icon' => 'fa fa-newspaper-o',
            'submenu' => [
                [
                    'name' => '广告设置',
                    'url' => 'ads/index'
                ],
                [
                    'name' => '文章管理',
                    'url' => 'article/index'
                ],
                [
                    'name' => '文章分类',
                    'url' => 'article/category'
                ],
                [
                    'name' => '会员留言',
                    'url' => 'user/message'
                ],
                [
                    'name' => '用户评论',
                    'url' => 'comment/index'
                ],
                [
                    'name' => '缺货登记',
                    'url' => 'booking/index'
                ],
            ]
        ],
        [
            'name' => '营销推广',
            'icon' => 'fa fa-gift',
            'submenu' => [
                [
                    'name' => '优惠活动',
                    'url' => 'activity/index'
                ],
                [
                    'name' => '团购活动',
                    'url' => 'group-buy/index'
                ],
                [
                    'name' => '红包优惠',
                    'url' => 'bonus/index'
                ],
                [
                    'name' => '积分兑换',
                    'url' => 'exchange/index'
                ],
                [
                    'name' => '夺宝奇兵',
                    'url' => 'snatch/index'
                ],
                [
                    'name' => '专题管理',
                    'url' => 'topic/index'
                ],
                [
                    'name' => '拍卖活动',
                    'url' => 'auction/index'
                ],
                [
                    'name' => '批发管理',
                    'url' => 'wholesale/index'
                ],
                [
                    'name' => '超值礼包',
                    'url' => 'package/index'
                ],
            ]
        ],
        [
            'name' => '财务管理',
            'icon' => 'fa fa-suitcase',
            'submenu' => [
                [
                    'name' => '资金管理',
                    'url' => 'account/manage'
                ],
                [
                    'name' => '充值提现',
                    'url' => 'account/index'
                ],
                [
                    'name' => '退款申请',
                    'url' => 'refund/fund'
                ],
                [
                    'name' => '现金红包',
                    'url' => 'wechat/cash-bonus/index'
                ],
            ]
        ],
        [
            'name' => '报表统计',
            'icon' => 'fa fa-area-chart',
            'submenu' => [
                [
                    'name' => '流量分析',
                    'url' => 'flow-stats/index'
                ],
                [
                    'name' => '流量分析',
                    'url' => 'guest-stats/index'
                ],
                [
                    'name' => '订单统计',
                    'url' => 'order-stats/index'
                ],
                [
                    'name' => '销售概况',
                    'url' => 'sale-general/index'
                ],
                [
                    'name' => '会员排行',
                    'url' => 'users-order/index'
                ],
                [
                    'name' => '销售明细',
                    'url' => 'ssale-list/index'
                ],
                [
                    'name' => '搜索引擎',
                    'url' => 'searchengine-stats/index'
                ],
                [
                    'name' => '销售排行',
                    'url' => 'sale-order/index'
                ],
                [
                    'name' => '访问购买率',
                    'url' => 'visit-sold/index'
                ],
                [
                    'name' => '站外投放JS',
                    'url' => 'adsense/index'
                ],
            ]
        ],
        [
            'name' => '微信公众号',
            'icon' => 'fa fa-wechat',
            'submenu' => [
                [
                    'name' => '公众号设置',
                    'url' => 'wechat/admin/config'
                ],
                [
                    'name' => '群发消息',
                    'url' => 'wechat/admin/message'
                ],
                [
                    'name' => '自动回复',
                    'url' => 'wechat/admin/reply'
                ],
                [
                    'name' => '自定义菜单',
                    'url' => 'wechat/admin/menu'
                ],
                [
                    'name' => '模板消息通知',
                    'url' => 'wechat/admin/notification'
                ],
                [
                    'name' => '微信粉丝',
                    'url' => 'wechat/admin/follower'
                ],
                [
                    'name' => '素材管理',
                    'url' => 'wechat/admin/material'
                ],
                [
                    'name' => '专属二维码',
                    'url' => 'wechat/admin/qrcode'
                ],
                [
                    'name' => '微信多客服',
                    'url' => 'wechat/admin/service'
                ],
                [
                    'name' => '微信多客服',
                    'url' => 'wechat/admin/plugins'
                ],
            ]
        ],
        [
            'name' => '应用扩展',
            'icon' => 'fa fa-cubes',
            'submenu' => [
                [
                    'name' => '主题模板',
                    'url' => 'template/index'
                ],
                [
                    'name' => '应用模块', // 微信分销 拼团 众筹 一元购 在线调查
                    'url' => 'modules/index'
                ],
                [
                    'name' => '插件管理', // 验证码管理 授权登录插件 短信插件 邮件设置 邮件模板 邮件队列
                    'url' => 'plugins/index'
                ],
            ]
        ],
        [
            'name' => '系统设置',
            'icon' => 'fa fa-cogs',
            'submenu' => [
                [
                    'name' => '基本设置',
                    'url' => 'setting/basic'
                ],
                [
                    'name' => '显示设置',
                    'url' => 'setting/display'
                ],
                [
                    'name' => '购物流程',
                    'url' => 'setting/flow'
                ],
                [
                    'name' => '商品设置',
                    'url' => 'setting/goods'
                ],
                [
                    'name' => '虚拟加密串',
                    'url' => 'setting/virtual-card'
                ],
                [
                    'name' => '数据库管理', // 备份 还原 优化 查询
                    'url' => 'database/index'
                ],
                [
                    'name' => '系统权限管理',
                    'url' => 'authorization/index'
                ],
                [
                    'name' => '在线升级',
                    'url' => 'upgrade/index'
                ],
            ]
        ],
    ],
];
