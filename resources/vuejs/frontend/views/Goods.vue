<template>
  <div class="goods">
      <!--头部-->
      <ec-head></ec-head>
      <!--轮播-->
      <div class="goods-model" style="margin-top:4rem">
        <ec-swipe :auto="0" :speed="300" :prevent="true">
          <ec-swipe-item v-for="banner in banners" :key="banner.desc"><img :src="banner.img"></ec-swipe-item>
        </ec-swipe>
      </div>
      <!--商品描述-->
      <ec-desc></ec-desc>
      <!--价格-->
      <ec-price></ec-price>
      <!--促销-->
      <ec-promotion></ec-promotion>
      <!--配送地址-->
      <ec-patch></ec-patch>
      <!--已选商品个数-->
      <ec-number></ec-number>
      <!--用户评论-->
      <ec-comment></ec-comment>
      <!--加入购物车列表-->
      <ec-filter></ec-filter>
  </div>
</template>
<router-link :to="{path:'/cart'}" tag="a">
  加入购物车
</router-link>
<script>
  import Head from '../components/GoodsHead';
  import { Swipe, SwipeItem } from 'mint-ui';
  import Desc from '../components/GoodsDesc';
  import Price from '../components/GoodsPrice';
  import Promotion from '../components/GoodsPromotion';
  import Patch from '../components/GoodsPatch';
  import Numbers from '../components/GoodsNumber';
  import Comments from '../components/GoodsComment';
  import Filter from '../components/GoodsFilter'
  export default {
    name: 'goods',
    components: {
      "EcHead": Head,
      "EcSwipe": Swipe,
      "EcSwipeItem": SwipeItem,
      "EcDesc":Desc,
      "EcPrice":Price,
      "EcPromotion":Promotion,
      "EcPatch":Patch,
      "EcNumber":Numbers,
      "EcComment":Comments,
      "EcFilter":Filter
    },
    data () {
      return {
        banners: [
          { id: '1', img: 'http://test2.ecmoban.com/images/201703/goods_img/0_P_1490175463169.jpg' },
          { id: '2', img: 'http://test2.ecmoban.com/images/201703/goods_img/0_P_1490175463169.jpg' }
        ]
      }
    }
  }
</script>
<style>
.goods-model{height:31rem}
.goods{
    margin-bottom: 5rem;
}
</style>
