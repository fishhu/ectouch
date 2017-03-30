import {
    SET_MODULE_INFO,
} from './mutation-type.js'

import * as onlineModules from '../config/api/modules'

export default {
    setModuleInfo({ commit }) {
        commit(SET_MODULE_INFO, { onlineModules })
    },
}