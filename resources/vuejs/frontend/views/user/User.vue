<template>
    <div>
        <div>this is template bodysss</div>

        <mt-button @click="handleButtonClick">Click Me</mt-button>

        <router-link :to="{path:'/login'}" tag="a">
            去登录
        </router-link>
    </div>
</template>

<style>
.j-login-dialog {
    width: 100%;
    height: 100%;
    background-color: #fff;
}
</style>

<script>

    export default{
        data() {
            return{

            }
        },
        components: {

        },
        methods: {

        }
    }
</script>
