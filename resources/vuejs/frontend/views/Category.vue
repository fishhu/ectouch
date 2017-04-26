<template>
  <div class="category">
     <!--搜索-->
     <ec-search></ec-search>
     <!--排序列表-->
     <ec-sort></ec-sort>
     <!--商品列表-->
     <ec-product></ec-product>
  </div>
</template>
<router-link :to="{path:'/goods', query:{id:1}}" tag="a">
      牛仔裤
</router-link>
<script>
import Search from '../components/Commonsearch.vue';
import Sort from '../components/Sortlist.vue'; 
import Product from '../components/Productlist.vue'; 
  export default {
    name: 'category',
    components:{
      "EcSearch": Search,
      "EcSort": Sort,
      "EcProduct":Product
    },
    data () {
      return {
        msg: 'Welcome to Category Page.'
      }
    }
  }
</script>

