<template>
    <section class="spike">
        <header>
          <div class="header-left">限时秒杀</div>
          <div class="header-center">
            <div class="header-time">
              <em>44129</em>:
              <em>27</em>:
              <em>36</em></div>
          </div>
          <div class="header-right">
            <a href=""></a>更多
            <i class="iconfont icon-right-arrow"></i></div>
        </header>
    </section>
</template>
<script>
export default{
    name:'spike'
}    
</script>
<style lang="">
.spike header {
    background: #fff;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -ms-flex-align: center;
    align-items: center;
    justify-content: center;
    border-top: 1px solid #f6f6f9;
    border-bottom: 1px solid #f6f6f9;
    padding: .6rem 0;
}
.spike .header-left, .spike .header-right {
    padding: 0 1rem;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-justify-content: center;
}
.spike .header-left {
    color: #ec5151;
}
.spike .header-center {
    -ms-flex: 1;
    flex: 1;
    -webkit-flex: 1;
    color: #333;
    height: 3rem;
    padding: 0 .7rem;
    padding-left: 0;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -ms-flex-align: center;
    align-items: center;
}
.spike .header-time {
    margin-left: -.3rem;
    color: #666;
    font-weight: 700;
}
.spike .header-time em {
    padding: .1rem .4rem;
    font-size: 1.2rem;
    margin: 0 .3rem;
    border-radius: .2rem;
    height: 2rem;
    width: 2rem;
    color: #fff;
    background: #555;
}
.spike .header-right {
    position: relative;
    height: 2.2rem;
    line-height: 2.2rem;
    font-size: 1.4rem;
    box-sizing: content-box;
    color: #666;
}
.spike .header-right a {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
}
.spike .header-right i {
    font-size: 1.4rem;
    margin-left: .2rem;
}  
</style>