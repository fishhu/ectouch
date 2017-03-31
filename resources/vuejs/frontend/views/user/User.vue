<template>
    <div>
        <div>this is template bodysss</div>

        <mt-button @click="handleButtonClick">Click Me</mt-button>

        <i class="icon ion-ios-close-empty">s </i>

        <mt-popup
                v-model="popupVisible"
                position="bottom"
                :modal="false"
                class="j-login-dialog">

            <mt-header title="会员登录" style="background-color: #fff; color: #333;">
                    <mt-button slot="left" icon="back" @click.native="popupVisible = false"></mt-button>
            </mt-header>

            <login></login>
        </mt-popup>

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
    import { Popup, Header } from 'mint-ui';
    import Login from './auth/Login';

    export default{
        data() {
            return{
                popupVisible:false
            }
        },
        components: {
            Popup,
            Header,
            Login
        },
        methods: {
            handleButtonClick(){
                this.popupVisible = true;
            }
        }
    }
</script>
