<template>
    <div class="searchs">
         <ul class="a-text-more">
            <li class="w-3" v-for="item in items"><a :href="item.url"><span class="onelist-hidden">{{item.desc}}</span></a></li>
        </ul>
    </div>
</template>
<script>
    export default {
    name: 'searchs',
    data () {
        return {
            items:[
                {url:'',desc:'周大福'},
                {url:'',desc:'内衣'},
                {url:'',desc:'Five Plus'},
                {url:'',desc:'手机'}
            ]
        }
    }
    }
</script>
<style>

</style>