<template>
  <div class="login">
    <h1>{{ msg }}</h1>

    <router-link :to="{path:'/user'}" tag="a">
      注册
    </router-link>
  </div>
</template>

<script>
  export default {
    name: 'login',
    data () {
      return {
        msg: 'Welcome to login Page.'
      }
    }
  }
</script>
