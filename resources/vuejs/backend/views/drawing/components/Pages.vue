<template>
    <div class='pages' :class="{'close-page-list':!bPageListTitle}">
        <div class="search">
            <div class="search-text">
                <i class="iconfont icon-search"></i>
                <input type="text" placeholder="页面搜索">
            </div>
        </div>
        <tabs class="ec-tabs" v-model="activeName" type="border-card" @tab-click="handleClick">
            <tab-pane :label="pageListTool.system.text" name="system">
                <page-list></page-list>
            </tab-pane>
            <tab-pane :label="pageListTool.custom.text" name="custom">

            </tab-pane>
        </tabs>
    </div>
</template>

<script>
    // mapActions mapState
    import { mapActions, mapState } from 'vuex'

    // custom components
    import PageList from '../../../components/element/PageList'

    // third party components
    import {
         Tabs, TabPane 
    } from 'element-ui'

    export default {
        name: 'pages',
        data() {
            return {
                activeName: 'system'
            }
        },
        components: {
            Tabs,
            TabPane,
            PageList
        },
        beforeMount() {
            this.$store.dispatch('setPageList')//将pagelist赋值给store  pageList对象
        },
        computed: {
            ...mapState({
                pageListTool: state => state.dashboard.configInfo.pageListTool,
                bPageListTitle: state => state.dashboard.configInfo.headerMenu.pageListTitle.isActive
            })
        },
        methods: {
            handleClick(tab, event) {

            }
        }
    }

</script>

<style scoped lang="scss">
    @import '../../../assets/style/config';
    @import '../../../assets/style/mixins/common';
    .pages {
        left: 0;
        @include transition(left, .3s)
    }
    .pages.close-page-list {
        left: -14rem;
        @include transition(left, .3s)
    }
    
    .search {
        position: absolute;
        z-index: 11;
        width: 100%;
        top: $tab-height;
        padding: 1rem;
        border-bottom: 1px solid $border-color-split;
        background: #fff;
    }
    
    .search-text {
        border-radius: 9999px;
        border: 1px solid $border-color-base;
        overflow: hidden;
        position: relative;
        height: 1.8rem;
    }
    
    .search-text i {
        font-size: 1rem;
        position: absolute;
        left: .6rem;
        color: #999;
        top: 50%;
        @include translateY(-50%);
    }
    
    .search input {
        border: 0;
        height: 1.7rem;
        line-height: 1.7rem;
        position: absolute;
        left: 1.9rem;
        right: 0;
        color: $text-color;
    }
    
    .ec-tabs {
        @include shadow(10px, 0, 20px, raba(0, 0, 0, 0.1));
        border: none !important;
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
    }
    
    .admin-pages .ec-tabs .el-tab-pane {
        position: absolute;
        top: ($tab-height*1.4);
        left: 0;
        right: 0;
        bottom: 0;
        padding: 20px 15px;
        text-align: center;
        overflow-x: scroll;
    }
</style>