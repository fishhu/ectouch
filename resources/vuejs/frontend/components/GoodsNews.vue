<template>
    <div class="goods-shop no-shopping-title m-top08 b-color-f">
         <div class="goods-shop-pic of-hidden">
            <h4 class="title-hrbg m-top06"><span>爆款新品</span><hr> </h4>
            <div class="g-s-p-con product-one-list of-hidden scrollbar-none j-g-s-p-con padding-all swiper-container-horizontal">
                <div class="swiper-wrapper ">
                    <li v-for="item in items">
                        <div class="product-div">
                            <a :href="item.url"><img class="product-list-img" :src="item.img"></a>
                            <div class="product-text m-top06 index-product-text">
                                <a :href="item.url"><h4>item.desc</h4></a>
                                <p><span class="p-price t-first ">{{item.price}}</span>
                                </p>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
        <div class="ect-button-more n-ect-button-more m-top10 dis-box padding-all">
                <a class="box-flex btn-default-new br-5 min-btn" href=""><i class="iconfont icon-kefu t-first"></i>联系客服</a>
        </div>
    </div>
</template>
<script>
    export default{
        name:'',
    }
</script>
<style>
.no-shopping-title.goods-shop {
    padding-top: 0;
}
</style>