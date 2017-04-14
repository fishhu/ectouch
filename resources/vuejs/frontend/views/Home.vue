<template>
  <div class="warp home">
    <!--头部搜索-->
    <ec-search></ec-search>
    <!--轮播-->
    <div class="vue-model">
      <ec-swipe :auto="4000" :speed="300" :prevent="true">
        <ec-swipe-item v-for="banner in banners" :key="banner.desc"><img :src="banner.img"></ec-swipe-item>
      </ec-swipe>
    </div>
    <!--导航-->
    <ec-nav></ec-nav>
    <!--资讯-->
    <ec-announ></ec-announ>
    <!--资讯图片展示-->
    <ec-picture :pictrue="pictureHot"></ec-picture>
    <!--限时秒杀-->
    <ec-spike></ec-spike>
    <!--楼层标题-->
    <ec-title imgUrl="http://test2.ecmoban.com/data/gallery_album/original_img/58db48bfe5559.jpg"></ec-title>
    <!--图片列表-->
    <ec-picture :pictrue="pictureList2"></ec-picture>
    <ec-picture :pictrue="pictureList"></ec-picture>
    <div class="banner1">
      <ec-swipe :auto="4000" :showIndicators="false">
        <ec-swipe-item v-for="banner in banners1" :key="banner.img">
          <img :src="banner.img">
        </ec-swipe-item>
      </ec-swipe>
    </div>
    <ec-title imgUrl="http://test2.ecmoban.com/data/gallery_album/original_img/58db72f9d115e.jpg"></ec-title>
    <ec-picture :pictrue="pictureList2"></ec-picture>
    <ec-picture :pictrue="pictureList"></ec-picture>
    <!--商品列表-->
    <ec-product id="2"></ec-product>
    <!--底部-->
    <ec-footer></ec-footer>
  </div>
</template>

<script>
  import { Swipe, SwipeItem } from 'mint-ui';
  import Search from '../components/Homesearch.vue';
  import Navs from '../components/Homenav.vue';
  import Announ from "../components/Announ";
  import Spike from "../components/Timedspike";
  import Footer from '../components/Footer.vue';
  import Product from '../components/Productlist.vue';
  import Title from '../components/Title';
  import Picture from '../components/Picturelist'
  export default {
    name: 'home',
    components: {
      "EcSwipe": Swipe,
      "EcSwipeItem": SwipeItem,
      "EcSearch": Search,
      "EcNav": Navs,
      "EcAnnoun": Announ,
      "EcSpike": Spike,
      "EcFooter": Footer,
      "EcProduct": Product,
      "EcTitle": Title,
      "EcPicture": Picture
    },
    data() {
      return {
        pictureList: {
          number: 3,
          imgList: [{
            url: '',
            img: 'http://test2.ecmoban.com/data/gallery_album/original_img/58db86dbf11a1.jpg'
          }, {
            url: '',
            img: 'http://test2.ecmoban.com/data/gallery_album/original_img/58db86dbe5a07.jpg'
          },
          {
            url: '',
            img: 'http://test2.ecmoban.com/data/gallery_album/original_img/58db86dbd9a9c.jpg'
          }]
        },
        pictureList2:{
          number: 2,
          imgList: [{
            url: '',
            img: 'http://test2.ecmoban.com/data/gallery_album/original_img/58da2f7c5c60c.jpg'
          }, {
            url: '',
            img: 'http://test2.ecmoban.com/data/gallery_album/original_img/58da2f7c5c60c.jpg'
          }]
        },
        pictureHot: {
          number:2,
          imgList: [{
            url: '',
            img: 'http://test2.ecmoban.com/data/gallery_album/original_img/58db45c1b998e.jpg'
          },{
            url: '',
            img: 'http://test2.ecmoban.com/data/gallery_album/original_img/58db45c23d3c0.jpg'
          },{
            url: '',
            img: 'http://test2.ecmoban.com/data/gallery_album/original_img/58db45c2303ef.jpg'
          },{
            url: '',
            img: 'http://test2.ecmoban.com/data/gallery_album/original_img/58db45c220b7c.jpg'
          }]
        },
        banners: [
          { id: '1', img: 'http://localhost/ecmoban_dsc/data/afficheimg/index_b1.png' },
          { id: '2', img: 'http://localhost/ecmoban_dsc/data/afficheimg/index_b1.png' },
          { id: '3', img: 'http://localhost/ecmoban_dsc/data/afficheimg/index_b1.png' }
        ],
        banners1: [
          { img: 'http://test2.ecmoban.com/data/gallery_album/original_img/58db8d27b034b.jpg' },
          { img: 'http://test2.ecmoban.com/data/gallery_album/original_img/58db8d27b034b.jpg' },
          { img: 'http://test2.ecmoban.com/data/gallery_album/original_img/58db8d27b034b.jpg' }
        ],
        pictures2: [
          { url: '', img: 'http://test2.ecmoban.com/data/gallery_album/original_img/58db86db98b7d.jpg' },
          { url: '', img: 'http://test2.ecmoban.com/data/gallery_album/original_img/58db86dbbd18d.jpg' }
        ]
      }
    }
  };
</script>
<style>
body{font-size:14px !important;}
.mb-7 {margin-bottom: 5.2rem;}
/*轮播*/
.vue-model{height:15rem}
.mint-swipe-items-wrap img{width:100%;height:100%;}
.announcement-cont{font-size: 1.5rem;color:#444;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align: left;line-height: 3rem;position: relative;}
.search.search-fixed{padding:0;}
.banner1{height:8rem;}
</style>