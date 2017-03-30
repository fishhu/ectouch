<template>
    <div class='page-list'>
        <figure v-for="(item,index) in pageList">
            <img src="../../assets/images/page.jpg" alt="Example image" />
            <figcaption><i class="iconfont icon-editor" @click="getAlertInput()"></i><span>{{ item.title }}</span></figcaption>
        </figure>
    </div>
</template>

<script>
    import { mapActions, mapState } from 'vuex'
    export default {
        name: 'page-list',
        data() {
            return {
            }
        },
        created() {

        },
        beforeMount() {
            this.$store.dispatch('setDocConfig')//将页面列表信息赋值给store  pagelist对象

        },
        computed: {
            ...mapState({
                pageList: state => state.dashboard.pageList
            }),
        },
        methods: {
            updateTitle(e, index) {
                this.$store.dispatch('updateTitle', {
                    "title": e.target.value,
                    "index": index
                })
            },
            getAlertInput() {

            }
        }
    }

</script>

<style lang="scss" scoped>
    @import '../../assets/style/config';
    @import '../../assets/style/mixins/common';
    .page-list {
        text-align: center;
    }
    
    .page-list figure {
        width: 80%;
        margin: 0 auto;
        margin-bottom: .8rem;
    }
    
    .page-list figure img {
        width: 100%;
        height: auto;
        padding: 4px;
        border: 1px solid $border-color-base
    }
    
    .page-list figcaption {
        position: relative;
        margin-top: .4rem;
        @include translateX(-.4rem);
    }
    
    .page-list span {
        font-size: .82rem;
        color: #666;
    }
    
    .page-list i.icon-editor {
        color: #aaa;
        font-size: .8rem;
        margin-right: .2rem;
        cursor: pointer;
    }
    
    .page-list input:focus {
        background: #f1f1f1;
    }
</style>