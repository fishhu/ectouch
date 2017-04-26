
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

import MintUI from 'mint-ui'
import 'mint-ui/lib/style.css'
import 'bulma'

import App from './App'
import router from './router'

Vue.use(MintUI)

Vue.config.productionTip = false

const app = new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})
