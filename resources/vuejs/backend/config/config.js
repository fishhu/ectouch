export const target = "https://www.ectouch.cn/ecapi"
export const pageInfo = {
    headerMenu: {
        pageListTitle: {
            icon: "page",
            isActive: false
        },
        globaSettings: {
            text: "全局配置",
            isActive: false
        },
        menuComponent: [{
            text: "布局",
            isActive: false,
            isShow: true,
            subComponent: [{
                icon: "line",
                text: "辅助线",
                module: "line",
                isShow: true,
            }, {
                icon: "blank",
                text: "辅助空白",
                module: "blank",
                isShow: true,
            }, {
                icon: "magic-cube",
                text: "魔方",
                module: "magicCube",
                isShow: false,
            }]
        }, {
            text: "文本",
            isActive: false,
            isShow: true,
            subComponent: [{
                text: "标题",
                icon: "title",
                module: "title",
                isShow: true,
            }, {
                text: "段落",
                icon: "passage",
                module: "passage",
                isShow: false,
            }, {
                text: "富文本",
                icon: "rick-text",
                module: "rickText",
                isShow: false,
            }, {
                text: "公告",
                icon: "announcement",
                module: "announcement",
                isShow: true,
            }, {
                text: "文字导航",
                icon: "text-nav",
                module: "textNav",
                isShow: false,
            }]
        }, {
            text: "图片",
            isActive: false,
            isShow: true,
            subComponent: [{
                icon: "img-nav",
                text: "图片导航",
                module: "nav",
                isShow: true,
            }, {
                icon: "slide",
                text: "幻灯片",
                module: "slide",
                isShow: true,
            }, {
                icon: "jigsaw",
                text: "拼图",
                module: "jigsaw",
                isShow: true,
            }]
        }, {
            text: "功能",
            isActive: false,
            isShow: true,
            subComponent: [{
                icon: "count-down",
                text: "倒计时",
                module: "countDown",
                isShow: true,
            }, {
                icon: "coupon",
                text: "优惠券",
                module: "coupon",
                isShow: true,
            }, {
                icon: "product",
                text: "商品列表",
                module: "product",
                isShow: true,
            }, {
                icon: "search",
                text: "搜索",
                module: "search",
                isShow: true,
            }, {
                icon: "button",
                text: "按钮",
                module: "button",
                isShow: true,
            }]
        }],
    },
    pageListTool: {
        system: {
            text: "系统默认"
        },
        custom: {
            text: "自定义"
        },
        search: {
            icon: "search",
            text: "页面搜索"
        }
    },
    editArea: {
        text: "编辑区域",
        function: {
            clear: {
                text: "清空",
                icon: "clear"
            },
            save: {
                text: "存储",
                icon: "save",
            },
            restore: {
                text: "还原",
                icon: "restore"
            }
        },
        compontentTool: {
            spread: "arrow",
            sort: "sort-arrow",
        }
    },
    previewArea: {
        text: "预览区域",
        function: {
            release: {
                text: "发布",
                icon: "release"
            }
        }
    },
    otherArea: {
        QRCodeText: "扫码手机预览",
        function: {
            import: "本地导入",
            export: "导出至本地"
        },
        prompt: {
            headline: "温馨提示",
            text: "相关说明说明说明",
            http: {
                text: "链接名称",
                link: "http://www.ectouch.cn"
            }
        }
    }
} 