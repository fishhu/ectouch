<template>
  <div class="dashboard">
    <router-view></router-view>
  </div>
</template>

<script>
  export default {
    name: 'dashboard',
    data() {
      return {
        msg: 'Welcome to Your Vue.js App'
      }
    }
  }
</script>