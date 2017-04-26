<template>
    <nav class="nav" :class="listStyle">
        <section class="list" v-for="item in data.list">
            <a v-href="{sUrl:'http://www.ectouch.cn',preview:preview}" class="more-link"></a>
            <img class="icon" :src="item.img" v-if="bIcon && item.img" />
            <img class="icon" src="../../assets/images/default-img.jpg" v-if="bIcon && !item.img" />
            <div class="con">
                <template v-if="item.desc">
                    {{ item.desc }}
                </template>
                <template v-else>
                    [描述]
                </template>

            </div>
            <i class="iconfont icon-right-arrow"></i>
        </section>
    </nav>
</template>

<script>
    // custom components


    // third party components


    export default {
        name: 'nav',
        props: ['data', 'preview'],
        components: {
        },
        data() {
            return {

            }
        },
        beforeMount() {
        },
        computed: {
            bIcon() {
                return this.data.isIconSel == "0" ? true : false
            },
            listStyle(){
                return this.showStyle == "0" ? "list-style1" : "list-style2"
            },
            showStyle: {
                get() {
                    return this.data.isShowStyle;
                },
                set(value) {
                    this.updateRadioSel('isShowStyle', value)
                }
            },
        }
    }

</script>

<style lang="scss" scoped>
    @import '../../assets/style/config';
    @import '../../assets/style/mixins/common';
    .nav {
        background: #fff;
        overflow:hidden;
        padding:0 $padding-all;
    }
    
    .nav .list {
        overflow: hidden;
        box-sizing: content-box;
        position: relative;
    }
    
    .nav .list img {
        display: block;
    }
    
    .nav .con {
        color:$text-title-color;
        @include flex1-1();
    }
    
    .more-link {
        border-left: 0;
        @include urlAbsolute();
    }

    .list-style1 .list{
        height: 2rem;
        padding: .3rem 0;
        border-bottom: 1px solid $border-color-split;
        @include box-pack(center, start);
        @include direction(center, initial)
    }
    .list-style1 .list .icon-right-arrow {
        color: $title-color;
        font-size: .6rem;
    }
    .list-style1 .list:last-of-type {
        border-bottom: 0;
    }
    
    .list-style1 .list img {
        height: 68%;
        width: auto;
        margin-right: .5rem;
    }



    .list-style2{
        padding-bottom:$padding-all*1.2;
    }
    .list-style2 .list{
        width:20%;
        float:left;
        text-align: center;
        border-bottom:0 !important;
        padding-top:$padding-all*1.2;
        overflow:hidden;
    }
    .list-style2 .list img{
        width:78%;
        height:auto;
        margin:0 auto;
        display:block;
    }
    .list-style2 .list .con{
        margin-top:.2rem;
        font-size:.7rem;
    }
    .list-style2 .list .icon-right-arrow{
        display:none;
    }
</style>