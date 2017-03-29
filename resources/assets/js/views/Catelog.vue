<template>
  <div class="catelog">
      <div class="con">
            <div class="category-top blur-div">
                <header>
                    <section class="search category-search">
                        <div class="text-all dis-box j-text-all text-all-back">
                            <div class="box-flex input-text n-input-text i-search-input">
                                <a class="a-search-input" href=""></a>
                                <div class="j-input-text nav-soso"><i class="iconfont icon-sousuo"></i>商品/店铺搜索</div>
                            </div>
                        </div>
                    </section>
                </header>
                <aside>
                    <div class="menu-left" id="sidebar">
                        <div class="swiper-scroll swiper-container-vertical swiper-container-free-mode">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide swiper-slide-active">
                                    <ul>
                                        <li class="active">家用电器</li>
                                        <li>手机数码</li>
                                        <li>电脑办公</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <section class="menu-right padding-all">
                    <!--<ul class="mune-no-img"></ul>-->
                    <ul class="child_category">
                        <a href=""><h5>大家电</h5></a>
                        <!--<ul class="mune-no-img">-->
                        <ul>
                            <li class="w-3"><a href=""></a><img src="../assets/images/static/category1.jpg" alt="平板电视"><span>平板电视</span></li>
                            <li class="w-3"><a href=""></a><img src="../assets/images/static/category2.jpg" alt="空调"><span>空调</span></li>
                            <li class="w-3"><a href=""></a><img src="../assets/images/static/category3.jpg" alt="冰箱"><span>冰箱</span></li>
                        </ul>
                        <a href=""><h5>生活电器</h5></a>
                        <!--<ul class="mune-no-img">-->
                        <ul>
                            <li class="w-3"><a href=""></a><img src="../assets/images/static/category4.jpg" alt="电风扇"><span>电风扇</span></li>
                            <li class="w-3"><a href=""></a><img src="../assets/images/static/category5.jpg" alt="冷风扇"><span>冷风扇</span></li>
                            <li class="w-3"><a href=""></a><img src="../assets/images/static/category6.jpg" alt="净化器"><span>净化器</span></li>
                        </ul>
                    </ul>
                    <script id="category" type="text/html">
                        <a href=""><h5></h5></a>
                        <!--<ul class="mune-no-img">-->
                        <ul>
                            <li class="w-3"><a href=""></a><img src="" alt="" /><span></span></li>
                        </ul>
                        <li class="w-3"><a href=""></a><img src="" alt="" /><span></span></li>
                    </script>
                </section>
                <footer class="footer-nav dis-box">
                  <router-link :to="{path:'/'}" class="box-flex nav-list " tag="a">
                    <i class="nav-box i-home"></i><span>首页</span>
                  </router-link>
                  <router-link :to="{path:'/catelog'}" class="box-flex nav-list active" tag="a">
                    <i class="nav-box i-cate"></i><span>分类</span>
                  </router-link>
                  <router-link :to="{path:'/search'}" class="box-flex nav-list">
                    <i class="nav-box i-shop"></i><span>搜索</span>
                  </router-link>
                  <router-link :to="{path:'/cart'}" class="box-flex position-rel nav-list">
                    <i class="nav-box i-flow"></i><span>购物车</span>
                  </router-link>
                  <router-link :to="{path:'/catelog'}" class="box-flex nav-list">
                    <i class="nav-box i-user"></i><span>我</span>
                  </router-link>
                </footer>
            </div>
       </div>
  </div>
</template>

<script>
  export default {
    name: 'catelog',
    data () {
      return {
        msg: 'Welcome to catelog Page.'
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
    padding: 0 1rem;
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
.swiper-slide, .swiper-wrapper {
    width: 100%;
    height: 100%;
    position: relative;
}
.swiper-slide {
    -webkit-flex-shrink: 0;
    -ms-flex: 0 0 auto;
    flex-shrink: 0;
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
.menu-left .swiper-scroll, .menu-right .swiper-scroll {
    min-height: 100%;
    max-height: 100%;
    width: 100%;
    overflow: hidden;
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
#loading, .loading {
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    background: rgba(255,255,255,1);
    margin-left: -2.5rem;
    margin-top: -1rem;
    z-index: 111;
}
.loading {
    left: 11.1rem;
    top: 6.7rem;
}
.loading img {
    position: absolute;
    width: 5rem;
    height: auto;
    left: 50%;
    top: 50%;
    margin-left: -2rem;
    margin-top: -3rem;
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
    padding-left: 0;
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


.footer-nav {
    background-color: rgba(254,253,252,1);
    left: 0;
    right: 0;
    position: fixed;
    margin: 0 auto;
    bottom: 0;
    z-index: 11;
    box-shadow: 1px 5px 15px rgba(50,50,50,.3);
    border-top: 1px solid #f6f6f9;
    padding: .3rem 0;
}
.dis-box {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-box;
    display: box;
}
.footer-nav .nav-list {
    font-size: 1.1rem;
    display: block;
    text-align: center;
    padding-top: 0;
    color: #595959;
}
.footer-nav .nav-list .nav-box {
    background: url(../assets/images/static/ec-icon.png) no-repeat;
    width: 2.7rem;
    height: 2.7rem;
    display: block;
    margin: 0 auto;
    background-size: 32.1rem;
}
.footer-nav .nav-list .i-home {
    background-position: -.02rem 0;
}
.footer-nav .nav-list .i-cate {
    background-position: -2.701rem 0.2rem;
}
.footer-nav .nav-list .i-shop {
    background-position: -13.9rem 0;
}
.footer-nav .nav-list .i-flow {
    background-position: -5.78rem 0;
}
.footer-nav .nav-list .i-user {
    background-position: -8.38rem 0;
}
.footer-nav .nav-list.active .i-cate {
    background-position: -2.701rem -3rem;
}
.footer-nav .nav-list.active .i-home{
    background-position:0rem -2.7rem;
}
.footer-nav .nav-list {
    font-size: 1.1rem;
    display: block;
    text-align: center;
    padding-top: 0;
    color: #595959;
}
.footer-nav .nav-list.active span{
  color:#ec5151;
}
</style>

