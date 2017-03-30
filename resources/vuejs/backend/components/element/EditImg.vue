<template>
    <div id='edit-img'>
        <figure class="edit-img-figure">
            <img :src="image" alt="" v-if="bImage"/>
            <img src="../../assets/images/default-img.jpg" alt="" v-else/>
        </figure>
    </div>
</template>

<script>
    export default {
        name: 'edit-img',
        props: ['image'],
        computed: {
            bImage(){
                return this.image == "" ? false : true
            }
        }
    }

</script>

<style lang="scss" scoped>
    @import '../../assets/style/config';
    @import '../../assets/style/mixins/common';
    figure.edit-img-figure {
        width: 6rem;
        height: 6rem;
        box-sizing: border-box;
        text-align: center;
        line-height: 6rem;
        border: 1px solid $border-color-split;
        @include direction(center, center)
    }
    
    figure.edit-img-figure img {
        max-width: 100%;
        max-height: 100%;
        display:block;
    }
</style>