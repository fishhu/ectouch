<template>
    <div class="goods-head">
         <header class="dis-box header-menu n-header-menu ts-5">
		<h3 class="box-flex">
            <nav class="n-goods-shop-list-nav box-flex">
                <ul class="dis-box text-c">
                    <li class="box-flex active">
                        <a class="product-div-link" href=""></a>商品</li>
                    <li class="box-flex">
                        <a class="product-div-link" href=""></a>详情</li>
                    <li class="box-flex">
                        <a class="product-div-link" href=""></a>评论</li>
                </ul>
            </nav>
		</h3>
	</header>
    </div>
</template>
<script>
export default{
   name:'goods-head'
}
</script>
<style>
.header-menu {
    height: 4rem;
    line-height: 4rem;
    padding-right: 2.6rem;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 6;
    background: rgba(255,255,255,.9);
    border-bottom: 1px solid rgba(100,100,100,.1);
    box-shadow: 1px 1px 3px rgba(50,50,50,.1);
}
.n-header-menu {
    padding-right: 0;
}
.header-menu h3 {
    font-size: 2rem;
    text-align: center;
    line-height: 4rem;
}
.n-goods-shop-list-nav {
    padding: 0;
    box-sizing: border-box;
    z-index: 12;
    width: 70%;
    margin: 0 auto;
}
.text-c {
    text-align: center!important;
}
.n-goods-shop-list-nav ul li {
    padding: 0;
    font-size: 1.5rem;
    width: auto;
    position: relative;
    color: #555;
}
.n-goods-shop-list-nav ul li.active {
    color: #ec5151;
    position: relative;
}
.n-goods-shop-list-nav ul li.active:after {
    content: " ";
    position: absolute;
    left: .8rem;
    right: .8rem;
    bottom: 0;
    height: 1.5px;
    background: #ec5151;
    z-index: 2;
}
.product-div-link {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 2;
}
.header-menu a {
    color: #555;
}
</style>