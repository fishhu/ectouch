<template>
    <div class='img-ipt-url'>
        <div class="edit-img">
            <slot name="edit-img-close"></slot>
                <admin-edit-img :image="info.img" v-show="bEditImg"></admin-edit-img>
                <div class="edit-input">
                    <div class="form-group">
                        <label class="group-l">
                        描述：
                        </label>
                        <div class="group-r">
                            <ec-input v-model="desc" size="small" placeholder="添加描述"></ec-input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="group-l">链接：</label>
                        <div class="group-r">
                            <menu-link :catetory="info.urlCatetory" :urlName="info.urlName"></menu-link>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</template>

<script>
    import MenuLink from './MenuLink'
    import AdminEditImg from './EditImg'
    import { Input } from 'element-ui'

    //mixins
    import fromProcessing from '../../mixins/form-processing'

    export default {
        name: 'img-ipt-url',
        props: {
            info: {
                type: Object,
                required: true
            },
            bEditImg: {
                type: Boolean,
                required: true
            },
            listIndex: {}
        },
        mixins: [fromProcessing],
        components: {
            "EcInput": Input,
            MenuLink,
            AdminEditImg
        },
        data() {
            return {
                
            }
        },
        beforeMount() {
        },
        methods: {
        },
        computed: {
            desc: {
                get() {
                    return this.info.desc
                },
                set(value) {
                    this.$emit("setDescValue",{
                        index:this.listIndex,
                        attrListName:"list",
                        value:value
                    })
                }
            }
        }

    }

</script>

<style lang="scss" scoped>
    @import '../../assets/style/config';
    @import '../../assets/style/mixins/common';
    .edit-img {
        box-sizing: border-box;
        border-radius: .4rem;
        padding: 1rem .8rem;
        max-width: 40rem;
        margin-top: 1.4rem;
        position: relative;
        border: 1px solid $border-color-split;
        @include direction(center, flex-start)
    }
    
    .link-close,
    .link-name-close {
        position: absolute;
        right: -.7rem;
        top: -.7rem;
        color: #fff;
        text-align: center;
        width: 1.6rem;
        height: 1.6rem;
        line-height: 1.6rem;
        background: rgba(0, 0, 0, .4);
        border-radius: 9999px;
        transform: scale(.9);
        display: none;
    }
    
    .edit-img:hover .link-close {
        display: block;
        cursor: pointer;
    }
    
    .link-close i {
        font-size: .8rem;
        font-weight: bold;
    }
    
    .edit-input {
        flex: 1;
        width: 60%;
    }
    
    .edit-input .group-r {
        flex: 1;
        width: 70%;
    }
</style>