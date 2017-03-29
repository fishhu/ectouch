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
