<template>
    <section class="nav">
       <div class="mod-nav">
          <nav class="index-nav nav-gap-in nav-gap-out">
            <ul>
              <li v-for="item in items" style="width: 20%;">
                <a :href="item.url"></a>
                <img :src="item.img">
                <span>{{item.desc}}</span></li>
            </ul>
          </nav>
        </div> 
    </section>
</template>
<script>
export default {
  name: 'nav',
  data () {
    return{
         items:[
            {
            url:'',img:'http://10.10.10.156/ecmoban_dsc/data/attached/nav/store.png',desc:'店铺街'},
            {url:'',img:'http://10.10.10.156/ecmoban_dsc/data/attached/nav/brand.png',desc:'品牌街'},
            {url:'',img:'http://10.10.10.156/ecmoban_dsc/data/attached/nav/activity.png',desc:'促销活动'},
            {url:'',img:'http://10.10.10.156/ecmoban_dsc/data/attached/nav/groupbuy.png',desc:'最新团购'},
            {url:'',img:'http://10.10.10.156/ecmoban_dsc/data/attached/nav/exchange.png',desc:'积分换购'},
            {url:'',img:'http://10.10.10.156/ecmoban_dsc/data/attached/nav/community.png',desc:'微社区'},
            {url:'',img:'http://10.10.10.156/ecmoban_dsc/data/attached/nav/crowd_funding.png',desc:'微筹'},
            {url:'',img:'http://10.10.10.156/ecmoban_dsc/data/attached/nav/auction.png',desc:'拍卖活动'},
            {url:'',img:'http://10.10.10.156/ecmoban_dsc/data/attached/nav/package.png',desc:'超值礼包'},
            {url:'',img:'http://10.10.10.156/ecmoban_dsc/data/attached/nav/topic.png',desc:'专题汇'}
        ]
    }
  },
}
</script>
<style scoped>
.mod-nav nav {
    background: #fff;
    min-height: 6rem;
}
.mod-nav nav.nav-gap-out {
    padding: .8rem .6rem;
}
.mod-nav nav ul {
    width: 100%;
    overflow: hidden;
}
.mod-nav nav ul li {
    width: 20%;
    float: left;
    text-align: center;
    position: relative;
}
.mod-nav nav.nav-gap-in ul li {
    padding: .8rem .4rem;
}
.mod-nav nav ul li a {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
}
.mod-nav nav ul li img {
    width: 80%;
    height: auto;
}
.mod-nav nav ul li span {
    font-size: 1.2rem;
    color: #333;
    margin-top: .4rem;
    display: block;
}
</style>