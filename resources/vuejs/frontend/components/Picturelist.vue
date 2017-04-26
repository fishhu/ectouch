<template>
    <section class="pictures">
        <div class="picture-tile">
            <ul>
                <li v-for="picture in pictures3" :key="picture.url" :style="{'width':sStyleW}">
                <a :href="picture.url"></a>
                <img :src="picture.img">
                </li>
            </ul>
        </div>
    </section>
</template>
<script>
    export default {
        name: 'pictures',
        props: ['pictrue'],
        data() {
            return {
            }
        },
        computed: {
            sStyleW() { 
                return 100 / this.pictrue.number + '%'
            },
            pictures3(){
                return this.pictrue.imgList
            }
        }
    }
</script>
<style lang="">
.picture-tile ul {overflow: hidden;}
.picture-tile ul li {position: relative;}
.picture-tile ul li img {width: 100%;}
.pictures li{float:left;text-align:center;border-right: 1px solid #f0f3f6;
    border-bottom: 1px solid #f0f3f6;padding-bottom:0;}
.picture2 ul,.picture3 ul{width:100%;overflow:hidden;}
.pictures.picture2 li{width:50%;}
.pictures.picture3 li{width:33.333%;}
img {vertical-align: middle;}
</style>