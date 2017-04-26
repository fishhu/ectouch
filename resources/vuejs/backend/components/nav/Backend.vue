<template>
    <div class="back-nav">
        <component-con :modulesIndex="modulesIndex" :componentName="componentName" :setting="setting">
            <div class="form-group">
                <label class="group-l">
                        显示方式：
                    </label>
                <radio-group v-model="showStyle" size="small">
                    <radio v-for="item in data.showStyle" :label="item.key">{{ item.title }}</radio>
                </radio-group>
            </div>
            <div class="form-group">
                <label class="group-l">
                        显示图标：
                    </label>
                <radio-group v-model="iconSel" size="small">
                    <radio v-for="item in data.showIcon" :label="item.key">{{ item.title }}</radio>
                </radio-group>
            </div>
            <template v-if="bNav">
                <img-ipt-url v-for="(item,index) in data.list" :info="item" :listIndex="index" :bEditImg="bEditImg" @setDescValue="updateListText">
                    <span slot="edit-img-close" class="link-close" @click="removeList(index)">
                                <i class="iconfont icon-close"></i>
                            </span>
                    <span slot="link-name-close" class="link-name-close">
                                <i class="iconfont icon-close"></i>
                            </span>
                </img-ipt-url>
            </template>
            <add-btn :add="add" @click.native="addList('imgList')" v-show="oAddBtn"></add-btn>
        </component-con>
    </div>
</template>

<script>
    // mapActions mapState
    import { mapActions, mapState } from 'vuex'
    // custom components
    import ComponentCon from '../element/ComponentCon'
    import ImgIptUrl from '../element/ImgIptUrl'
    import AddBtn from '../element/AddBtn'

    // third party components
    import {
        Radio,
        RadioGroup,
        Checkbox
    } from 'element-ui'

    // minxin
    import formProcessing from '../../mixins/form-processing'

    // localData
    import localData from './data/local'
    export default {
        name: 'back-nav',
        props: ['setting', 'onlineData', 'modulesIndex'],
        mixins: [formProcessing],
        data() {
            return {
                componentName: localData.componentName,
                add: { 
                    title: "添加一个文本导航" 
                },
                maxLength:10
            }
        },
        components: {
            Radio,
            RadioGroup,
            "EcCheckbox": Checkbox,
            ComponentCon,
            ImgIptUrl,
            AddBtn
        },
        beforeMount() {
        },
        methods: {

        },
        computed: {
            bNav() {
                return this.data.list.length > 0 ? true : false
            },
            bEditImg() {
                return this.iconSel == "0" ? true : false
            },
            oAddBtn(){
                return this.maxLength == this.data.list.length ? false : true
            },
            showStyle:{
                 get() {
                    return this.data.isShowStyle;
                },
                set(value) {
                    this.updateRadioSel('isShowStyle', value)
                }
            },
            iconSel: {
                get() {
                    return this.data.isIconSel;
                },
                set(value) {
                    this.updateRadioSel('isIconSel', value)
                }
            },
            data() {
                return Object.assign({}, localData.data, this.onlineData)
            }
        }
    }

</script>