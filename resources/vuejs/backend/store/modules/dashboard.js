//模块配置信息
import { pageInfo } from '../../config/config'
import pageList from '../../config/api/pageList'
import {
    SET_DOC_CONFIG,//赋值config
    NAV_ENTER_TAB,//nav导航切换
    NAV_LEAVE_TAB,//nav离开导航事件
    SET_PAGE_LIST,//赋值pagelist

    ADD_MODULES,//增加 module
    UPDATE_MODULES,//修改modules排序
    UP_MODULES,//当前module上移
    DOWN_MODULES,//当前module下移
    REMOVE_MODULES,//当前module删除
    REMOVE_ALL_MODULES,//清空module
    IS_SHOW_EDIT_COMPONENT,//显示隐藏编辑框配置
    UPDATE_RADIO_SEL,//修改radio选择
    UPDATE_TEXT,//修改两类text文本框内容
    UPDATE_LIST_TEXT,//修改data list中desc内容
    REMOVE_LIST,//根据索引删除指定list,
    ADD_LIST,//增加一个list

    UPDATE_SETTING_ACTIVE,//修改active显示隐藏状态
} from '../mutation-type'

const state = {
    configInfo: {},
    pageList: []
}

const mutations = {
    [SET_DOC_CONFIG](state, configInfo) {
        state.configInfo = configInfo
    },
    [NAV_ENTER_TAB](state, index) {
        let menuCommponent = state.configInfo.headerMenu.menuComponent
        menuCommponent.map((o, i) => {
            i == index ? o.isActive = true : o.isActive = false;
        })
    },
    [NAV_LEAVE_TAB](state, index) {
        let menuCommponent = state.configInfo.headerMenu.menuComponent
        menuCommponent[index].isActive = false
    },
    [SET_PAGE_LIST](state) {
        state.pageList = pageList
    },

    [ADD_MODULES](state, { rootState, o }) {
        rootState.modules.splice(o.newIndex, 0, o.module)
    },
    [UPDATE_MODULES](state, { rootState, o }) {
        rootState.modules = o.modules
    },
    [UP_MODULES](state, { rootState, o }) {
        let currModule = rootState.modules[o.modulesIndex]
        rootState.modules.splice(o.modulesIndex, 1)
        rootState.modules.splice(o.modulesIndex - 1, 0, currModule)
    },
    [DOWN_MODULES](state, { rootState, o }) {
        let currModule = rootState.modules[o.modulesIndex]
        rootState.modules.splice(o.modulesIndex, 1)
        rootState.modules.splice(o.modulesIndex + 1, 0, currModule)
    },
    [REMOVE_MODULES](state, { rootState, o }) {
        rootState.modules.splice(o.modulesIndex, 1)
    },
    [REMOVE_ALL_MODULES](state, rootState) {
        rootState.modules = []
    },
    [IS_SHOW_EDIT_COMPONENT](state, { rootState, o }) {
        let sSetting = rootState.modules[o.modulesIndex].setting;
        '1' == sSetting ? rootState.modules[o.modulesIndex].setting = '0' : rootState.modules[o.modulesIndex].setting = '1'
    },
    [UPDATE_RADIO_SEL](state, { rootState, o }) {
        rootState.modules[o.modulesIndex].data[o.sName] = o.newValue
    },
    [ADD_LIST](state, { rootState, o }) {
        let thisModules = rootState.modules[o.modulesIndex];
        delete o["modulesIndex"]
        thisModules.data.list.push(o)
    },
    [REMOVE_LIST](state, { rootState, o }) {
        rootState.modules[o.modulesIndex].data.list.splice(o.listIndex, 1)
    },
    [UPDATE_TEXT](state, { rootState, o }) {
        rootState.modules[o.modulesIndex].data[o.dataNext][o.attrName] = o.newValue
    },
    [UPDATE_LIST_TEXT](state, { rootState, o }) {
        rootState.modules[o.modulesIndex].data[o.attrListName][o.listIndex].desc = o.newValue
    },
    [UPDATE_SETTING_ACTIVE](state, { rootState, attrName }) {
        let bActive = state.configInfo.headerMenu[attrName].isActive;
        state.configInfo.headerMenu[attrName].isActive = !bActive;
    }

}

const actions = {
    setDocConfig({ commit }) {
        commit(SET_DOC_CONFIG, pageInfo)
    },
    navEnterTab({ commit }, index) {
        commit(NAV_ENTER_TAB, index)
    },
    navLeaveTab({ commit }, index) {
        commit(NAV_LEAVE_TAB, index)
    },
    setPageList({ commit }) {
        commit(SET_PAGE_LIST);
    },

    updateModules({ commit, rootState }, o) {
        commit(UPDATE_MODULES, { rootState, o })
    },
    upModules({ commit, rootState }, o) {
        commit(UP_MODULES, { rootState, o })
    },
    downModules({ commit, rootState }, o) {
        commit(DOWN_MODULES, { rootState, o })
    },
    removeModules({ commit, rootState }, o) {
        commit(REMOVE_MODULES, { rootState, o })
    },
    removeAllModules({ commit, rootState }) {
        commit(REMOVE_ALL_MODULES, rootState)
    },
    isShowEditComponent({ commit, rootState }, o) {
        commit(IS_SHOW_EDIT_COMPONENT, { rootState, o })
    },
    addModules({ commit, rootState }, o) {
        commit(ADD_MODULES, { rootState, o })
    },
    updateRadioSel({ commit, rootState }, o) {
        commit(UPDATE_RADIO_SEL, { rootState, o })
    },
    updateText({ commit, rootState }, o) {
        commit(UPDATE_TEXT, { rootState, o });
    },
    updateListText({ commit, rootState }, o) {
        commit(UPDATE_LIST_TEXT, { rootState, o })
    },
    removeList({ commit, rootState }, o) {
        commit(REMOVE_LIST, { rootState, o })
    },
    addList({ commit, rootState }, o) {
        commit(ADD_LIST, { rootState, o })
    },
    updateSettingActive({ commit, rootState }, attrName) {
        commit(UPDATE_SETTING_ACTIVE, { rootState, attrName })
    }
}

const getters = {

}

export default {
    state,
    mutations,
    actions,
    getters
}