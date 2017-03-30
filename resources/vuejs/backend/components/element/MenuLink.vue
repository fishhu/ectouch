<template>
    <div class='menu-link'>
        <div class="link-group">
            <div class="link-name" :class="{ no:isUrlName }">
                <slot name="link-name-close"></slot>
                    <p :title="catetory + '-' + urlName" v-show="!isUrlName">
                        <b>{{ catetory }}</b> - {{ urlName }}
                    </p>
                    <p v-show="isUrlName">
                        请选择
                    </p>
                    <div>
                    </div>
            </div>
            <dropdown trigger="click" @command="handleCommand">
                <span class="dropdown-link">
                修改
            </span>
                <dropdown-menu slot="dropdown">
                    <dropdown-item command="商品及商品分类">商品及商品分类</dropdown-item>
                    <dropdown-item command="默认及自定义页面">默认及自定义页面</dropdown-item>
                    <dropdown-item command="营销活动">营销活动</dropdown-item>
                    <dropdown-item command="投票调查">投票调查</dropdown-item>
                    <dropdown-item command="会员主页">会员主页</dropdown-item>
                    <dropdown-item command="文章及文章分类">文章及文章分类</dropdown-item>
                    <dropdown-item command="自定义页面">自定义页面</dropdown-item>
                </dropdown-menu>
            </dropdown>
        </div>
    </div>
</template>

<script>
    import {
        Dropdown,
        DropdownMenu,
        DropdownItem
    } from 'element-ui'
    export default {
        name: 'menu-link',
        props: ['urlName', 'catetory'],
        components: {
            Dropdown,
            DropdownMenu,
            DropdownItem
        },
        methods: {
          handleCommand(val){
              console.log(val)
          }  
        },
        computed: {
            isUrlName() {
                return '' == this.urlName || '' == this.urlName ? true : false
            },
        }
    }

</script>

<style lang="scss" scoped>
    @import '../../assets/style/config';
    @import '../../assets/style/mixins/common';
    .dropdown-link {
        font-size: .8rem;
        cursor: pointer;
        color: $link-color;
    }
    
    .link-group {
        width: 100%;
        @include direction(center, flex-start);
    }
    
    .link-name {
        position: relative;
        max-width: 74%;
        margin-right: .6rem;
    }
    
    .link-name.no p {
        background: #bbb;
    }
    
    .link-name p {
        color: #fff;
        font-size: .8rem;
        background: #3eb1fa;
        padding: .3rem .5rem;
        border-radius: 6px;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
    }
    
    .link-name .link-name-close {
        z-index: 11;
        display: block;
        font-size: .8rem;
        cursor: pointer;
        display: none;
        transform: scale(.7);
    }
    
    .link-name:hover .link-name-close {
        display: block;
    }
    
    .link-name .link-name-close i {
        font-size: 14px;
    }
</style>