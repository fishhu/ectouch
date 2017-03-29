<template>
    <div id='edit-area'>
        <header>
            <h4>{{ editArea.text }}</h4>
            <div class="compontent-tool">
                <label @click="removeAllModules" for="">
                    <i class="iconfont" :class="'icon-'+editArea.function.clear.icon"></i>清空
                </label>
                <label @click="saveAllModules" for=""><i class="iconfont" :class="'icon-'+editArea.function.save.icon"></i>存储
                </label>
                <label for=""><i class="iconfont" :class="'icon-'+editArea.function.restore.icon"></i>还原
                </label>
            </div>
        </header>

        <div class="edit-area-con" :class="{no:!isMoudles}">
            <div style="height:auto">
                <draggable v-model="modules" style="min-height:10rem; height:auto;" :options="{group:'people',handle:'.handle'}" @add="onDraggAdd($event)">
                    <component class="component" v-for="(item,index) in modules" :is="'b-'+item.module" :modulesIndex="index" :onlineData="item.data"
                        :setting="item.setting">
                    </component>
                </draggable>
            </div>
        </div>
    </div>
</template>

<script>
    // mapActions mapState
    import { mapActions, mapState } from 'vuex'

    // custom components
    import BSlide from '../../../components/slide/Backend'
    import BTitle from '../../../components/title/Backend'
    import BAnnouncement from '../../../components/announcement/Backend'
    import BNav from '../../../components/nav/Backend'

    // third party components
    import {
        MessageBox,
        Message
    } from 'element-ui'
    import draggable from 'vuedraggable'

    export default {
        name: 'edit-area',
        components: {
            draggable,
            MessageBox,
            Message,
            BSlide,
            BTitle,
            BAnnouncement,
            BNav
        },
        data() {
            return {

            }
        },
        beforeMount() {

        },
        methods: {
            onDraggAdd(e) {
                let moduleName = e.item.getAttribute("data-module")
                e.item.outerHTML = ""//拖拽添加后删除该内容'
                this.$store.dispatch('addModules', {
                    newIndex: e.newIndex,
                    module: this.cloneModules(moduleName)
                })
            },
            cloneModules(moduleName) {
                delete require.cache[require.resolve(`../../../components/${moduleName}/data/online`)];
                return require(`../../../components/${moduleName}/data/online`);
            },
            removeAllModules() {
                if (this.isMoudles) {
                    MessageBox.confirm('此操作将清空当前所有组件, 是否继续?', '提示', {
                        confirmButtonText: '确定',
                        cancelButtonText: '取消',
                        type: 'warning'
                    }).then(() => {
                        this.$store.dispatch('removeAllModules')
                        Message.success({
                            message: '清空成功!'
                        });
                    }).catch(() => {
                        Message.info({
                            message: '已取消操作'
                        });
                    });
                } else {
                    Message.info({
                        message: '暂无数据'
                    });
                }

            },
            saveAllModules() {
                let allModules = this.$store.state.modules;
            }
        },
        computed: {
            isMoudles() {
                return 0 < this.modules.length ? true : false
            },
            ...mapState({
                editArea: state => state.dashboard.configInfo.editArea
            }),
            modules: {
                get() {
                    return this.$store.state.modules
                },
                set(value) {
                    this.$store.dispatch('updateModules', {
                        modules: value
                    })
                }
            }
        },
    }

</script>

<style lang="scss" scoped>
    @import '../../../assets/style/config';
    @import '../../../assets/style/mixins/common';
    header {
        height: ($tab-height+.4rem);
        background: $tool-bg;
        padding: 0 1rem;
        @include direction(center, space-between)
    }
    
    header h4 {
        float: left;
        font-weight: normal;
        font-size: $tool-title-size
    }
    
    header .compontent-tool {
        float: right;
    }
    
    header .compontent-tool label {
        margin-left: $icon-margin * 1.5;
        color: #555;
        cursor: pointer
    }
    
    header .compontent-tool label i.iconfont {
        margin-right: ($icon-margin - .2rem)
    }
    
    .edit-area-con {
        background: $write-color;
        position: absolute;
        width: 100%;
        padding: 1rem;
        top: ($tab-height+.4rem);
        bottom: 0rem;
        overflow-y: scroll;
    }
    
    .edit-area-con.no {
        background: url('../../../assets/images/admin_edit.jpg') no-repeat center center;
    }
    
    .component {
        margin-bottom: .8rem
    }
    
    .component:last-child {
        margin-bottom: 0;
    }
    
    .component.hidden {
        visibility: hidden;
    }
</style>