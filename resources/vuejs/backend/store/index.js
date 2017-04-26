import Vue from 'vue'
import Vuex from 'vuex'
import actions from './actions'
import mutations from './mutations'
import dashboard from './modules/dashboard'

Vue.use(Vuex)

const debug = process.env.NODE_ENV !== 'production' //发布模式不使用严格模式
export default new Vuex.Store({
    strict:debug,
    state: {
        modules:[]
    },
    actions,
    mutations,
    modules: {
        dashboard,
    }
})