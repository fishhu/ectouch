<template>
    <div class="back-slide">
        <component-con :modulesIndex="modulesIndex" :componentName="componentName" :setting="setting">
            <div class="form-group">
                <label class="group-l">
                        显示方式：
                    </label>
                <radio-group v-model="styleSel" size="small">
                    <radio v-for="item in data.showStyle" :label="item.key">{{ item.title }}</radio>
                </radio-group>
            </div>
            <div class="form-group">
                <label class="group-l">
                        显示大小：
                    </label>
                <radio-group v-model="sizeSel" size="small">
                    <radio v-for="item in picSize" :label="item.key">{{ item.title }}</radio>
                </radio-group>
            </div>
            <img-ipt-url v-for="(item,index) in data.list" :info="item" :listIndex="index" :bEditImg="true" @setDescValue="updateListText">
                <span slot="edit-img-close" class="link-close" @click="removeList(index)">
                                <i class="iconfont icon-close"></i>
                            </span>
                <span slot="link-name-close" class="link-name-close" @click="close()">
                                <i class="iconfont icon-close"></i>
                            </span>
            </img-ipt-url>
            <add-btn :add="add" @click.native="addList('imgList')" v-show="oAddBtn"></add-btn>
        </component-con>
    </div>
</template>

<script>
    // mapActions mapState
    import { mapActions, mapState } from 'vuex'
    // custom components
    import ComponentCon from '../element/ComponentCon'
    import AddBtn from '../element/AddBtn'
    import ImgIptUrl from '../element/ImgIptUrl'

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
        name: 'back-slide',
        props: ['setting', 'onlineData', 'modulesIndex'],
        mixins: [formProcessing],
        data() {
            return {
                add: {
                    title: '添加一个广告位'
                },
                componentName: localData.componentName,
                maxLength:10
            }
        },
        components: {
            Radio,
            RadioGroup,
            "EcCheckbox": Checkbox,
            ImgIptUrl,
            ComponentCon,
            AddBtn
        },
        beforeMount() {
        },
        methods: {
            
        },
        computed: {
            picSize() {//动态显示 显示大小 属性
                let sizeKey = this.data.showStyle[this.styleSel].picSizeKey;
                let picSize = [];
                sizeKey.map((v) => {
                    let dPicSize = this.data.picSize //data picsize
                    dPicSize.map((dV) => {
                        if (dV.key === v) {
                            picSize.push(dV)
                        }
                    })
                })
                return picSize
            },
            oAddBtn(){
                return this.maxLength == this.data.list.length ? false : true
            },
            styleSel: {
                get() {
                    return this.data.isStyleSel;
                },
                set(value) {
                    this.updateRadioSel('isStyleSel', value)
                }
            },
            sizeSel: {
                get() {
                    return this.data.isSizeSel;
                },
                set(value) {
                    this.updateRadioSel('isSizeSel', value)
                }
            },
            data() {
                return Object.assign({}, localData.data, this.onlineData)
            }
        }
    }

</script>