export default {
    methods: {
        /**
         * 点击切换单选按钮
         * @param {单选按钮属性名称} sName 
         * @param {新的值} sValue 
         */
        updateRadioSel(sName, sValue) {
            this.$store.dispatch('updateRadioSel', {
                modulesIndex: this.modulesIndex,
                sName: sName,
                newValue: sValue
            })
        },
        /**
         * 修改指定data.list或者data[属性]的value值
         * @param { 修改类型 } sType
         * @param { data后属性 } sDataNext 
         * @param { 当前被修改属性 } sName 
         * @param { 新的value } sValue 
         */
        updateText(o) {
            this.$store.dispatch('updateText', o)
        },
        /**
        * 根据属性删除data.list当前索引值
        * @param { list索引值 } index 
        */
        removeList(iIndex) {
            this.$store.dispatch('removeList', {
                modulesIndex: this.modulesIndex,
                listIndex: iIndex
            })
        },
        /**
         * 增加data.list一个数组
         * @param { 根据传入不同的值判断类型 } sType 
         */
        addList(sType) {
            let o = {
                modulesIndex: this.modulesIndex,
                url: "",
                urlCatetory: "",
                urlName: "",
                desc: ""
            }
            if (sType == "imgList") {
                o.img = ""
            }
            this.$store.dispatch('addList', o)
        },
        /**
         * 修改指定data.list中的value值
         * @param { o包含listIndex, newValue } o 
         */
        updateListText(o) {
            this.$store.dispatch('updateListText', {
                modulesIndex: this.modulesIndex,
                attrListName: o.attrListName,
                listIndex: o.index,
                newValue: o.value
            })
        },
    },

}