<template>
    <div class="ec-tabbar">
        <footer class="footer-nav dis-box">
            <template v-for="item in nav">
                <router-link :to="{path:item.url}" class="box-flex nav-list" :class="{active : item.isActive }">
                    <i class="nav-box" :class="item.icon"></i>
                    <span>{{ item.name }}</span>
                </router-link>
            </template>
        </footer>
    </div>
</template>

<script>
export default {
  name: 'ec-tabbar',
  props: {
      type: {
          type: String,
          default: 'home'
      }
  },
  data () {
    return {
      nav: [
        {
          name: '首页',
          url: '/',
          icon: 'i-home',
          isActive: false
        },
        {
          name: '分类',
          url: '/catelog',
          icon: 'i-cate',
          isActive: false
        },
        {
          name: '搜索',
          url: '/search',
          icon: 'i-shop',
          isActive: false
        },
        {
          name: '购物车',
          url: '/cart',
          icon: 'i-flow',
          isActive: false
        },
        {
          name: '我',
          url: '/user',
          icon: 'i-user',
          isActive: false
        },
      ]
    }
  },
  created () {
    let that = this
    that.nav.map(function(item, index){
        if(that.type == 'home' && index == 0){
            item.isActive = true
        }
        if('/' + that.type == item.url){
            item.isActive = true
        }
    })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
