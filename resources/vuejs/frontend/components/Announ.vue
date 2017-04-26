<template>
    <section class="announcement">
        <div class="announ-left">
          <img src="../assets/images/static/new-icon.png" alt=""></div>
        <div class="announ-center">
           <ec-swipe :auto="4000" :showIndicators="false">
              <ec-swipe-item v-for="info in infos" :key="info.desc">
                  <div class="announcement-cont">{{info.desc}}</div>
              </ec-swipe-item>
           </ec-swipe>
        </div>
        <div class="announ-right">
          <a href=""></a>更多
          <i class="iconfont icon-right-arrow"></i></div>
    </section>
</template>
<script>
export default {
  name: 'announcement',
  props:['message'],
  data () {
    return {
       infos:[
            {desc:'手机游戏下载'},
            {desc:'诺基亚6681手机广告欣赏'},
            {desc:'三星SGHU308说明书下载'}
        ],
    }
  },

}
</script>
<style lang="">
.announcement {
    background: #fff;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-align: center;
    align-items: center;
    border-top: 1px solid #f6f6f9;
    border-bottom: 1px solid #f6f6f9;
    padding: .6rem 0;
    height: 4.8rem;
}
.announ-left, .announ-right, .announcement {
    -ms-flex-pack: center;
    justify-content: center;
}
.announ-left {
    color: #ec5151;
    height: 100%;
    padding: .2rem 1rem;
}
.announ-left img {
    max-height: 90%;
    width: auto;
}
.announ-center {
    overflow: hidden;
    -ms-flex: 1;
    flex: 1;
    -webkit-flex: 1;
    color: #333;
    height: 3rem;
    padding: 0 .7rem;
    padding-left: 0;
}
.announ-center .swiper-container {
    width: 100%;
    height: 100%;
}
.announ-center .swiper-slide a {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
}
.announcement-cont {
    color: #444;
}
.announ-center .swiper-slide .announcement-cont {
    font-size: 1.5rem;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: left;
    line-height: 3rem;
    position: relative;
}
.announ-left, .announ-right {
    padding: 0 1rem;
    -webkit-justify-content: center;
}
.announ-right {
    font-size: 1.4rem;
    height: 2.2rem;
    line-height: 2.2rem;
    box-sizing: content-box;
    border-left: 1px solid #f6f6f9;
    color: #666;
    position: relative;
}
.announ-right a {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
}
.announ-right i {
    font-size: 1.4rem;
    margin-left: .2rem;
}
</style>