<template>
    <div class='announcement' :class="{'date-height':!bDateSel}">
        <img class="icon" :src="data.allValue.img" />
        <template v-if="bNews">
            <swiper class="swiper" :options="swiperOption" ref="announSwiper">
                <!-- 幻灯内容 -->
                <swiper-slide class="swiper-slide swiper-no-swiping" :class="{'date-height':bDateSel}" v-for="(item,index) in data.list">
                    <a v-href="{sUrl:item.url,preview:preview}"></a>
                    
                    <p>{{item.desc}}</p>
                    <p class="last" v-if="bDateSel">{{item.date}}</p>
                </swiper-slide>
                <div class="swiper-pagination" slot="pagination"></div>
            </swiper>
            <a v-href="{sUrl:'http://www.ectouch.cn',preview:preview}" class="more-link">更多<i class="iconfont icon-right-arrow"></i></a>
        </template>
        <template v-else>
            <section>
                <p v-seamless-scroll="{winObj:winScrollObj,preview:preview}">{{ data.allValue.announContent }}</p>
            </section>
        </template>
    </div>
</template>

<script>
    // third party components
    import Vue from 'vue'
    import {
        swiper,
        swiperSlide
    } from 'vue-awesome-swiper'

    export default {
        name: 'announcement',
        props: ['data', 'preview', 'modulesIndex'],
        components: {
            swiper,
            swiperSlide
        },
        data() {
            return {
                swiperOption: {
                    notNextTick: true,
                    autoplay: 4000,
                    loop: true,
                    direction: 'vertical',
                    noSwiping: true
                },
                scroll: true,
                winScrollObj: 'announ' + this.modulesIndex
            }
        },
        created() {
        },
        mounted () {
        },
        computed: {
            swiper() {
                return this.$refs.announSwiper.swiper
            },
            bNews() {
                if (this.data.isStyleSel == "0") {
                    this.scroll = false
                    return true
                } else {
                    this.scroll = true
                    return false
                }
            },
            bDateSel() {
                return this.data.isDateSel == "0" ? true : false
            }
        },
        watch: {
            scroll(val,oldVal) {
                if (!val) {
                    clearInterval(window[this.winScrollObj])
                }
            }
        }
    }

</script>

<style lang="scss" scoped>
    @import '../../assets/style/config';
    @import '../../assets/style/mixins/common';
    .announcement {
        background: #fff;
        vertical-align: middle;
        box-sizing: border-box;
        overflow: hidden;
        padding: .2rem $padding-all .2rem $padding-all;
        height: 2.8rem;
        line-height: 1.4;
        @include box-pack(center, start);
        @include direction(center, initial)
    }
    .announcement.date-height{
        height:2rem;
    }
    .icon {
        height: 80%;
        margin-right: .5rem;
        display: block;
    }
    
    .swiper {
        font-size: .82rem;
        height: 100%;
        @include flex1-1();
    }
    
    
    
    .swiper-slide {
        overflow: hidden;
        position: relative;
        line-height:1.6;
        @include box-pack(center, start);
        @include direction(center, flex-start)
    }
    
    .swiper-slide.date-height {
        display:block;
    }

    .swiper-slide p {
        @include ellipses();
    }
    
    .swiper-slide p.last {
        font-size: .8rem;
        color: $subsidiary-color;
    }
    
    .swiper .swiper-slide a {
        @include urlAbsolute();
    }
    
    section {
        position: relative;
        @include flex1-1();
        overflow: hidden;
        height: 2.2rem;
        line-height: 2.2rem;
    }
    
    section p {
        white-space: nowrap;
        position: absolute;
        top: 0;
        left: 0;
    }
</style>