<template>
    <div class="filter-btn dis-box">
        <a class="filter-btn-kefu heart" href=""><i class="kefu"></i><em>客服</em></a>
        <a class="filter-btn-flow  heart j-heart "><i class="shoucang ts-2"></i><em>收藏</em></a>
        <a href="" class="filter-btn-flow heart"><i class="flow"></i><sup class="b-color cart-num">0</sup><em>购物车</em> </a>
        <a class="btn-submit box-flex add-to-cart btnCart" href="javascript:;" onclick="checkAdd(809,0)">加入购物车</a>
    </div>
</template>
<script>
export default{
    name:'filter-btn'
}
</script>
<style>
.filter-btn {
    position: fixed;
    width: 100%;
    left: 0;
    right: 0;
    bottom: 0;
    box-sizing: border-box;
    z-index: 10;
    background: #fafafc;
    box-shadow: 1px 0 5px rgba(100,100,100,.2);
}
.heart {
    display: block;
    padding: 0 1.3rem;
    text-align: center;
    position: relative;
    margin-top: .5rem;
}
.ts-2 {
    -webkit-transition: all .2s;
    -moz-transition: all .2s;
    -o-transition: all .2s;
    transition: all .2s;
}
.heart i {
    display: block;
    width: 2rem;
    height: 2rem;
    margin: 0 auto;
}
.heart .kefu {
    background: url(http://test2.ecmoban.com/mobile/public/img/heart_kefu.png) 0 100% no-repeat;
    background-size: 2rem 4rem;
}
.heart .shoucang {
    background: url(http://test2.ecmoban.com/mobile/public/img/heart_03.png) 0 100% no-repeat;
    background-size: 2rem 4rem;
}
.heart .flow {
    background: url(http://test2.ecmoban.com/mobile/public/img/heart_flow.png) 0 100% no-repeat;
    background-size: 2rem 4rem;
}
.b-color {
    background: #ec5151;
}
.filter-btn .filter-btn-flow sup {
    position: absolute;
    top: .1rem;
    right: .9rem;
    height: 1.4rem;
    min-width: 1.4rem;
    line-height: 1.4rem;
    padding: 0 .2rem;
    box-sizing: border-box;
    font-size: 1.2rem;
    color: #fff;
    border-radius: .7rem;
}
.heart em {
    font-size: 1.1rem;
    display: block;
    text-align: center;
    margin-top: 0;
    color: #666;
}
.btn-submit {
    background: #ec5151;
}
a.btn-submit, a.btn-wechat {
    color: #fff;
}
</style>
