<template>
    <div class="ec-login">

        <div class="columns is-mobile">
            <div class="column">
                <mt-field label="账号" placeholder="用户名/邮箱/手机号"></mt-field>
                <mt-field label="密码" placeholder="请输入密码" type="password"></mt-field>
            </div>
        </div>

        <div class="columns is-mobile pdallby5">
            <div class="column has-text-centered">
                <mt-button disabled type="default" class="w-by100">登录</mt-button>
            </div>
        </div>

        <div class="columns is-mobile pdlrby5">
            <div class="column has-text-left">
                <router-link :to="{path:'/register'}" tag="a">
                    手机快速注册
                </router-link>
            </div>
            <div class="column has-text-right">
                <router-link :to="{path:'/forgot'}" tag="a">
                    忘记密码
                </router-link>
            </div>
        </div>

        <div class="columns is-mobile" style="position: fixed; width: 100%; bottom: 5rem;">
            <div class="column has-text-centered">
                <img src="../../../assets/images/static/qq.png" style="width: 4rem;" />
                <p>QQ登录</p>
            </div>
            <div class="column has-text-centered">
                <img src="../../../assets/images/static/weibo.png" style="width: 4rem;" />
                <p>微博登录</p>
            </div>
        </div>

    </div>
</template>

<script>
  import { Field } from 'mint-ui';
  import { Button } from 'mint-ui';

  export default {
    name: 'ec-login',
    data () {
      return {
        msg: 'Welcome to login Page.'
      }
    },
    components: {
        Field,
        Button
    }
  }
</script>

<style>
    .ec-login {
        padding-top: 5rem;
    }
    .w-by94 {
        width: 94%;
    }
    .w-by100 {
        width: 100%;
    }
    .pdallby5 {
        padding: 1rem;
    }
    .pdlrby5 {
        padding: 0 1rem;
    }
</style>