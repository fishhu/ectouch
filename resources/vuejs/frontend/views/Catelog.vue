<template>
    <div class="catelog">
        <ec-catelog></ec-catelog>
        <div class="con">
            <aside class="menu-left">
                <ul>
                    <li v-for="item in categoryTop" @click="tabCategory(item.id)" class="active">{{item.name}}</li>
                </ul>
            </aside>
            <div class="menu-right padding-all">
                <section v-for="item in catelog" v-show="item.isActive">
                    <a href="">
                        <h5>{{ item.data.name }}</h5>
                    </a>
                    <!--<ul class="mune-no-img">-->
                    <ul>
                        <li class="w-3"  v-for="itemChild in item.data.childData">
                            <a :href="itemChild.id"></a><img :src="itemChild.img" alt="平板电视"><span>平板电视</span>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
        <ec-footer></ec-footer>
    </div>
</template>

<script>
    import Catelog from '../components/CatelogSearch';
    import Footer from '../components/Footer.vue';
    export default {
        components: {
            "EcCatelog": Catelog,
            "EcFooter": Footer
        },
        name: 'catelog',
        data() {
            return {
                categoryTop: [{
                    id: "1",
                    name: "一级分类1"
                }, {
                    id: "2",
                    name: "一级分类2"
                }, {
                    id: "3",
                    name: "一级分类3"
                }],
                catelog: [{
                    isActive: true,
                    data: {
                        "id": "1",
                        "cid": "1",
                        "name": "二级分类1",
                        "url": "",
                        "img": "",
                        "childData": [{
                            "id": "1",
                            "name": "平板电脑",
                            "img": "http://test2.ecmoban.com/images/201703/thumb_img/0_thumb_G_1490209495581.jpg",
                        }, {
                            "id": "2",
                            "name": "空调",
                            "img": "http://test2.ecmoban.com/images/201703/thumb_img/0_thumb_G_1490175614721.jpg",
                        }]
                    }
                },
                {
                    isActive: false,
                    data: {
                        "id": "2",
                        "cid": "1",
                        "name": "二级分类1",
                        "url": "",
                        "img": "",
                        "childData": [{
                            "id": "1",
                            "name": "平板电脑",
                            "img": "http://test2.ecmoban.com/images/201703/thumb_img/0_thumb_G_1490209495581.jpg",
                        }, {
                            "id": "2",
                            "name": "空调",
                            "img": "http://test2.ecmoban.com/images/201703/thumb_img/0_thumb_G_1490175614721.jpg",
                        }]
                    }
                }
            ]
        }
    },
    // created(){
        
    // },
    methods: {
        tabCategory(id){
        }
    }

    }
</script>
<style>
.con, body, html {
    overflow-x: hidden;
    max-width: 100%;
    min-width: 320px;
    min-height: 100vh;
}
.padding-all {
    padding: 1.1rem;
}
.search {
    /*padding: 0 1rem;*/
    position: relative;
}
.category-top .search {
    border-bottom: 1px solid #e8e8e8;
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    z-index: 1;
    background: #F6F6F9;
}
.category .category-search, .category-top .category-search {
    background: #fff;
    border-bottom: 1px solid #f1f1f1;
}
.text-all {
    border-bottom: 1px solid #F6F6F9;
    padding: .6rem 0;
    width: 100%;
    overflow: hidden;
}
.search .text-all {
    border-bottom: 0;
}
.box-flex {
    -webkit-box-flex: 1;
    -moz-box-flex: 1;
    -ms-box-flex: 1;
    box-flex: 1;
    display: block;
    width: 100%;
}
.search .input-text {
    border-bottom: 0;
    background: rgba(255,255,255,.7);
    border-radius: 4px;
    overflow: hidden;
    position: relative;
    box-shadow: 1px 0 1px rgba(200,200,200,.2);
}
.category-search .n-input-text {
    background: #eee;
}
.search a.a-search-input {
    display: block;
    position: absolute;
    left: 0;
    bottom: 0;
    right: 0;
    top: 0;
    z-index: 2;
}
.input-text .nav-soso, .text-all .text-all-span, .text-all label {
    height: 3.2rem;
    line-height: 3.2rem;
}
.input-text .nav-soso, .input-text input {
    border: 0;
    box-sizing: border-box;
    font-size: 1.5rem;
    width: 100%;
}
.input-text .nav-soso {
    padding: 0 3rem 0 0;
    color: #777;
}
.search .n-input-text.i-search-input .nav-soso, .search .n-input-text.i-search-input input {
    padding-left: 3.2rem;
    background: 0 0;
}
.i-search-input i.icon-sousuo {
    position: absolute;
    font-size: 1.62rem;
    color: #8e8d8a;
    left: 1.1rem;
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block;
}
.f-c-s-coupon, .swiper-scroll {
    position: relative;
}

.menu-left, .menu-right {
    position: fixed;
    left: 0;
    top: 5.7rem;
    bottom: 0;
    overflow-y: scroll;
    margin-bottom: 5.4rem;
}
.menu-left {
    background: #f3f5f7;
    position: fixed;
    left: 0;
    top: 4.6rem;
    bottom: 0;
}
.menu-left ul li {
    padding: 1.3rem .8rem;
    box-sizing: border-box;
    font-size: 1.4rem;
    width: 8.6rem;
    text-align: center;
    border-bottom:1px solid #e5e5e5
}
.menu-left ul li.active {
    background: #fff;
    position: relative;
    color: #EC5151;
}
.menu-left ul li.active:before {
    content: " ";
    position: absolute;
    display: block;
    width: 2px;
    height: 100%;
    background: #EC5151;
    top: 0;
    left: 0;
}
.menu-left ul li.active:before {
    content: " ";
    position: absolute;
    display: block;
    width: 2px;
    height: 100%;
    background: #EC5151;
    top: 0;
    left: 0;
}
.menu-right {
    position: fixed;
    left: 0;
    top: 5.7rem;
    bottom: 0;
    overflow-y: scroll;
}
.menu-right {
    background: #fff;
    position: inherit;
    margin-left: 8.6rem;
    margin-top: 4.6rem;
    right: 0;
    bottom: 0;
    left: 8.6rem;
}
.menu-right ul {
    overflow: hidden;
    background:#fff;
}
.menu-right h5 {
    font-size: 1.5rem;
    color: #666;
    margin:0.6rem 0;
}
.w-3 {
    width: 33.33%;
    float: left;
    padding: .5rem .4rem;
    box-sizing: border-box;
    position: relative;
}
.menu-right ul li {
    text-align: center;
}
.w-3:nth-child(3n+1) {
    padding-right: .6rem;
}
.menu-right ul li a {
    display: block;
    position: absolute;
    left: .3rem;
    top: .7rem;
    bottom: .7rem;
    right: .3rem;
}
.menu-right ul li:nth-child(3n+1) a {
    left: 0;
    right: .7rem;
}
.menu-right ul li img {
    width: 100%;
    height: auto;
    foont-size:1.3rem;
    color:#999;
}
.menu-right ul li span {
    display: block;
    height: 2.6rem;
    line-height: 2.6rem;
    overflow: hidden;
    text-align: center;
    font-size: 1.3rem;
    color:#777;
}
</style>