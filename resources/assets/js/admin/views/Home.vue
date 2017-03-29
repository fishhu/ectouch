<template>
  <div class="home">
    <h1>{{ msg }}</h1>

     <router-link :to="{path:'/drawing'}" tag="b">
      可视化编辑工具
    </router-link>
  </div>
</template>

<script>
  export default {
    name: 'home',
    data () {
      return {
        msg: 'Welcome to Home App'
      }
    }
  }
</script>
