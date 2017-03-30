
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../../assets/js/bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Vue from 'vue'
import * as global from './directives/global'
import seamlessScroll from './directives/seamlessScroll'

/**
 * Configuration
 */

Vue.config.silent = false;
Vue.config.devtools = true;

/**
 * Directives
 */

Vue.directive('href',global.href)
Vue.directive('seamless-scroll',seamlessScroll)

Vue.directive('url', {
  bind: function (el, binding) {
    el.href = window.ROOT_URL + 'index.php?m=' + binding.value;
  }
})

/**
 * 生成服务端入URL
 */

Vue.prototype.url = function (module) {
  return window.ROOT_URL + 'index.php?m=' + module;
}

import App from './App'
import router from './router'
import store from './store'

const app = new Vue({
  el: '#app',
  router,
  store,
  template: '<App/>',
  components: {App}
})
