module.exports = {
    module: "nav",
    componentName: "图片导航",
    suggest: "",
    setting: "0",
    data: {
        showStyle:[{
            key:"0",
            type:"radio",
            title:"样式1",
        },{
            key:"1",
            type:"radio",
            title:"样式2"
        }],
        showIcon: [{
            key: "0",
            type: "radio",
            title: "显示",
        }, {
            key: "1",
            type: "radio",
            title: "隐藏",
        }],
        list: [],
        isShowStyle:"0",
        isIconSel: "0",
    }
}
