import {
    SET_MODULE_INFO,//赋值modoues
} from './mutation-type.js'

export default {
    [SET_MODULE_INFO](state, o) {
        state.modules = o.onlineModules;
    },
}