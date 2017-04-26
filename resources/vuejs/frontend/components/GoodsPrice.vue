<template>
    <div class="goods-price padding-all b-color-f">
         <p class="p-price"><span class="t-first" id="ECS_SHOPPRICE">¥7999.00</span><em class="em-promotion"><font id="ECS_DISCOUNT">4.5</font>折</em></p>
         <p class="p-market">
            市场价格： <del id="ECS_MARKETPRICE">¥9598.80</del>
         </p>
         <p class=" dis-box g-p-tthree m-top06">
            <span class="box-flex text-left">销量 0</span>
            <span class="box-flex text-right">当前库存 <font class="goods_attr_num">1000</font></span>        
         </p>
    </div>
</template>
<script>
    export default{
        name:'goods-price'
    }
</script>
<style>
.goods-price{padding-top:0;}
.p-price {clear: both;overflow: hidden;}
.t-first {color: #ec5151;}
.p-price span {font-size: 2.1rem;vertical-align: middle;}
.em-promotion {font-size: 1.2rem;vertical-align: middle;padding: .1rem .4rem;background: #ec5151;border-radius: 1.2rem;color: #fff;}
.p-price .em-promotion {margin-left: .6rem;margin-top: .2rem;}
.p-market {color: #999;font-size: 1.4rem;clear: both;}
del {color: #aaa;font-size: 1.2rem;}
.p-market del {font-size: 1.4rem;margin-left: .6rem;}
.g-p-tthree {
    font-size: 1.4rem;
    color: #999;
}
</style>