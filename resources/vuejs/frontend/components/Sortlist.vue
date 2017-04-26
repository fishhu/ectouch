<template>
    <div class="sort">
        <section class="product-sequence dis-box">
          <a class="box-flex active" href="">综合<i class="iconfont icon-xiajiantou"></i></a>
          <a class="box-flex" href="">新品</a>
          <a class="box-flex" href="">销量</a>
          <a class="box-flex" href="">价格<i class="iconfont icon-xiajiantou"></i></a>
          <a class="a-sequence j-a-sequence"><i v-bind:class="[iconfont,{'warning':isWarning,'safe':isSafe}]" v-on:click="toggle"></i></a>
          <div id="classBind">
              <span :class="{warning:isWarning,safe:isSafe}" v-on:click="toggle">状态:{{alert}}{{isSafe}}</span>
          </div>
        </section>
    </div>
</template>
<script>
export default {
    name:'#classBind',
    data:{
        isWarning:true,
        alertList:['红色警报','解除警报'],
        alert:''
    },
    computed:{
        isSafe:function(){
            return !this.isWarning;
        }
    },
    methods:{
        toggle:function(){
            this.isWarning=!this.isWarnin;
            this.alert=this.isWarning?this.alertlist[0]:this.alertList[1];
        }
    }
}
</script>
<style>
a, a:link {
    color: #232326;
    text-decoration: none;
}
a.s-filter {
    display: block;
    font-size: 1.5rem;
    text-align: center;
    line-height: 3.2rem;
    box-sizing: border-box;
    padding-left: 1.2rem;
}
.product-sequence {
    text-align: center;
    height: 4rem;
    line-height: 4rem;
    font-size: 1.5rem;
    background: #fff;
    width: 100%;
    border-bottom: 1px solid #f1f1f1;
}
a.a-sequence {
    width: 6.6rem;
    height: 4rem;
    line-height: 4rem;
    display: block;
    color: #666;
    position: relative;
}
a.a-sequence .iconfont:before {
    font-size: 2.4rem;
    color: #888;
}
.product-sequence a:hover, .product-sequence a {
    text-decoration: none;
    color: #444;
}
.product-sequence a.active {
    color: #EC5151;
}
.product-sequence .icon-xiajiantou {
    margin-left: .1rem;
    position: relative;
    font-size: 1.1rem;
    transition: 0.2s ease;
}
</style>