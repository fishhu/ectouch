<template>
    <div id='b-announcement'>
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
                        ICON：
                    </label>
                <div class="group-r">
                    <edit-img :image="onlineData.allValue.img"></edit-img>
                </div>
            </div>
             <div class="form-group" v-show="bNews">
                <label class="group-l">
                        显示日期：
                    </label>
                <radio-group v-model="dateSel" size="small">
                    <radio v-for="item in data.showDate" :label="item.key">{{ item.title }}</radio>
                </radio-group>
            </div>
            <div class="form-group" v-show="!bNews">
                <label class="group-l">
                        公告内容：
                    </label>
                 <div class="group-r">
                    <ec-input type="textarea" :autosize="{ minRows: 2, maxRows: 6 }" v-model="announContent"></ec-input>
                </div>
            </div>
        </component-con>
    </div>
</template>

<script>
    // mapActions mapState
    import { mapActions, mapState } from 'vuex'

    // custom components
    import ComponentCon from '../element/ComponentCon'
    import EditImg from '../element/EditImg'

    // third party components
    import {
        Radio,
        RadioGroup,
        Input
    } from 'element-ui'

    // minxin
    import formProcessing from '../../mixins/form-processing'

    // localData
    import localData from './data/local'

    export default {
        name: 'b-announcement',
        props: ['setting', 'onlineData', 'modulesIndex'],
        mixins: [formProcessing],
        data() {
            return {
                componentName: localData.componentName,
            }
        },
        components: {
            Radio,
            RadioGroup,
            ComponentCon,
            EditImg,
            "EcInput": Input
        },
        beforeMount() {
        },
        methods: {
            /**
             * 修改指定title allValue中的属性值
             * @param { 当前被修改属性 } sName 
             * @param { 新的value } sValue 
             */
            updateTitleText(sName, sValue) {
                let o = {
                    modulesIndex:this.modulesIndex,
                    dataNext:"allValue",
                    attrName:sName,
                    newValue:sValue
                }
                this.updateText(o)
            },
        },
        computed: {
            bNews(){
                return this.styleSel == "0" ? true : false;
            },
            announContent:{
                get(){
                    return this.data.allValue.announContent
                },
                set(value){
                    this.updateTitleText('announContent', value)
                }
            },
            styleSel: {
                get() {
                    return this.data.isStyleSel
                },
                set(value) {
                    this.updateRadioSel('isStyleSel', value)
                }
            },
            dateSel:{
                get() {
                    return this.data.isDateSel
                },
                set(value) {
                    this.updateRadioSel('isDateSel', value)
                }
            },
            data() {
                return Object.assign({}, localData.data, this.onlineData)
            }
        }

    }

</script>

<style scoped>

</style>