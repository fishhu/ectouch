import Vue from 'vue'
import Router from 'vue-router'

// backend
import Home from '../views/Home'
import Drawing from '../views/drawing/Dashboard'

Vue.use(Router)

export default new Router({
  routes: [
    { path: '/', name: 'dashboard', component: Home },
    { path: '/drawing', name: 'drawing', component: Drawing }
  ]
})
