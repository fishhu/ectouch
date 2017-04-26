<template>
    <section class="footer">
        <footer class="footer-nav dis-box">
            <router-link :to="{path:'/home'}" class="box-flex nav-list active" tag="a">
            <i class="nav-box i-home"></i><span>首页</span>
            </router-link>
            <router-link :to="{path:'/catelog'}" class="box-flex nav-list " tag="a">
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
    </section>
</template>

<script>
export default {
  name: 'footer'                                                                                                                                                                                                                                               
}
</script>
<style>
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
.footer-nav .nav-list.active .i-flow {
    background-position: -5.78rem -3rem;
}
.footer-nav .nav-list.active .i-user {
    background-position: -8.38rem -3rem;
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
