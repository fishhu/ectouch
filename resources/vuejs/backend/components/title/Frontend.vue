<template>
    <div class='title'>
        <header class="transition" :style="{'text-align':sPosition}" v-if="bStyleSelTradition">
            <section>
                <h1>{{ title }}<span class="link" v-if="isList"> - <a v-href="{sUrl:sUrl,preview:preview}">{{ desc }}</a></span></h1>
            </section>
            <aside>
                <span v-show="!bDate">{{ data.allValue.fitTitle }}</span>
                <span v-show="bDate">{{ data.allValue.dataTime }}</span>
            </aside>
        </header>
        <header class="w-x" v-else>
            <h1>{{ title }}</h1>
            <aside>
                <span v-show="data.allValue.dataTime">{{ data.allValue.dataTime }}</span>
                <span v-show="data.allValue.author">{{ data.allValue.author }}</span>
                <span class="link" v-if="isList"> <a v-href="{sUrl:sUrl,preview:preview}">{{ desc }}</a></span>
            </aside>
        </header>
    </div>
</template>

<script>
    export default {
        name: 'title',
        props: ['data','preview'],
        beforeMount() {
        },
        methods: {
            getText(o) {
                let inputValue = this.data[o.dataNext][o.attrName]
                return inputValue == "" || inputValue == "undefined" ? o.defaultValue : inputValue
            },
            getListText(o) {
                let inputValue = this.data.list[o.listIndex][o.attrName]
                return inputValue == "" || inputValue == "undefined" ? o.defaultValue : inputValue
            }
        },
        computed: {
            bDate() {
                return this.data.isDate == "0" ? false : true
            },
            bStyleSelTradition() {
                return this.data.isStyleSel == "0" ? true : false
            },
            sPosition() {
                let sPositionSel = this.data.isPositionSel
                switch (sPositionSel) {
                    case "0":
                        return "left"
                        break;
                    case "1":
                        return "center"
                        break;
                    case "2":
                        return "right"
                        break;
                    default:
                        return "left"
                        break;
                }
            },
            title() {
                return this.getText({
                    dataNext: "allValue",
                    attrName: "title",
                    defaultValue: "[编辑标题名]"
                })
            },
            desc() {
                if (this.isList) {
                    return this.getListText({
                        listIndex: 0,
                        attrName: "desc",
                        defaultValue: "[链接名]"
                    })
                }

            },
            sUrl() {
                if (this.isList) {
                    return this.getListText({
                        listIndex: 0,
                        attrName: "url",
                        defaultValue: "#"
                    })
                }
            },
            bgColor() {
                // return 
            },
            isList() {
                return 0 >= this.data.list.length ? false : true
            }
        }
    }

</script>

<style lang="scss" scoped>
    @import '../../assets/style/config';
    @import '../../assets/style/mixins/common';
    header {
        background: #ffffff;
        padding: $padding-all;
    }
    
    header section {
        overflow: hidden;
    }
    
    header h1 {
        font-size: .96rem;
        font-weight: normal;
        line-height: 1.2;
        margin-bottom: .2rem;
        color: $text-title-color;
    }
    
    header.transition .link {
        font-size: .82rem;
        padding-top: .1rem;
        margin-left: .2rem;
    }
    
    header.transition span {
        font-size: .8rem;
        color: $title-color;
    }
    
    header.w-x h1 {
        float: inherit;
    }
    
    header.w-x aside {
        font-size: .78rem;
        color: $title-color;
    }
    
    header.w-x aside span {
        margin-right: .1rem;
    }
</style>