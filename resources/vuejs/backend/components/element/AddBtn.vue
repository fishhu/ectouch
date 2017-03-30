<template>
    <div class='add-btn'>
        <a href="javascript:;" class="a-plus" @click="addBtn()">
            <span>
                <i class="iconfont icon-plus"></i>
            </span>
            {{ add.title }}
        </a>
    </div>
</template>

<script>
export default {
    name: 'add-btn',
    props:['add'],
    methods: {
        addBtn(){
            this.$emit('add')
        }
    }
}
</script>

<style lang="scss" scoped>
    @import '../../assets/style/config';
    @import '../../assets/style/mixins/common';
    .a-plus{
        border:1px solid $border-color-split;
        padding:.4rem .5rem;
        border-radius:6px;
        margin-top:1rem;
        font-size:.86rem;
        max-width:40rem;
        @include direction(center,flex-start);
    }
    .a-plus span{
        display:block;
        width:1.3rem; 
        height:1.3rem;
        border-radius: 9999px;
        background:#0cd0c4;
        color:#fff;
        margin-right:.4rem;
        @include direction(center,center)
    }
    .a-plus i.icon-plus{
        font-size:.9rem;
    }
</style>