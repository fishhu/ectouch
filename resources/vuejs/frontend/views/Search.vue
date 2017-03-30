<template>
  <div class="search">
      <div class="search-div j-search-div ts-3">
          <section class="search common-search">
              <div class="text-all dis-box j-text-all text-all-back">
                  <a class="a-icon-back" href="javascript:history.go(-1);"><i class="iconfont icon-back"></i></a>
                  <div class="box-flex input-text">
                      <label class="search-check j-search-check" data="2">
                          <span>商品</span><i class="iconfont icon-xiajiantou"></i>
                      </label>
                      <input class="j-input-text" type="text" name="keyword" autofocus="" placeholder="商品/店铺搜索">
                      <input type="hidden" name="type_select" value="2">
                      <input type="hidden" name="isself" value="">
                      <input type="hidden" name="brand" value="">
                      <input type="hidden" name="price_min" value="">
                      <input type="hidden" name="price_max" value="">
                      <input type="hidden" name="filter_attr" value="">
                      <i class="iconfont icon-guanbi1 is-null j-is-null"></i>
                  </div>
                  <a type="button" class="btn-submit search-btn" onclick="$('#search-form').submit()">搜索</a>
              </div>
          </section>
          <section class="search-con">
              <div class="history-search">
                 <!-- <div class="swiper-wrapper">
                      <div class="swiper-slide">-->
                          <p>
                              <label class="fl">热门搜索</label>
                          </p>
                          <ul class="hot-search a-text-more">
                              <li class="w-3"><a href=""><span class="onelist-hidden">周大福</span></a></li>
                              <li class="w-3"><a href=""><span class="onelist-hidden">内衣</span></a></li>
                              <li class="w-3"><a href=""><span class="onelist-hidden">Five Plus</span></a></li>
                              <li class="w-3"><a href=""><span class="onelist-hidden">手机</span></a></li>
                          </ul>
                          <p class="hos-search">
                              <label class="fl">最近搜索</label>
                              <span class="fr clear_history"><i class="iconfont icon-xiao10"></i></span>
                          </p>
                                              <div class="no-div-message">
                              <p>暂无搜索记录</p>
                          </div>
                                          <!--</div>
                  </div>-->
              <div class="swiper-scrollbar"></div>
              </div>
          </section>
          <div class="other-login search-footer">
              <h4 class="title-hrbg"><a href="javascript:history.go(-1);"><span class="col-6">点击关闭搜索</span></a>
                  <hr>
              </h4>
          </div>
          <!--<a href="javascript:history.go(-1);">
           <footer class="close-search">
            关闭
          </footer>
          </a>-->
      </div>
  </div>
</template>
<script>
  export default {
    name: 'search',
    data () {
      return {
        msg: 'Welcome to search App'
      }
    }
  }
</script>
<style>
.search-div {
    background: #fff;
}
.ts-3 {
    -webkit-transition: all .3s;
    -moz-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;
}
.fl {
    float: left;
}
.fr {
    float: right;
}
label {
    font-weight: 400;
    margin-bottom: 0;
}
.text-all label {
    font-size: 1.6rem;
    display: block;
    margin-right: .8rem;
}
.search .search-check {
    position: absolute;
    padding-left: 1rem;
    color: #666;
}
.search-div, .show-depot-div {
    position: fixed;
    bottom: 0;
    right: 0;
}
.search-div {
    background: #fff;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
    z-index: 100;

}
.show-search-div .search-div {
    top: 0;
    visibility: visible;
}
.search-div .search {
    background: #F6F6F9;
}
.search-div .common-search {
    background: #Fff;
    border-bottom: 1px solid #e4e4e4;
}
.common-search .text-all {
    padding: .7rem 0;
}
.text-all-back .a-icon-back {
    display: -webkit-box;
    display: box;
    display: -moz-box;
    position: relative;
    width: 2.6rem;
}
.text-all-back .icon-back {
    font-size: 2.6rem;
    margin-left: -.4rem;
    margin-right: .4rem;
    color: #999;
    position: absolute;
    top: 50%;
    margin-top: -1.6rem;
}
.search-check i.icon-xiajiantou {
    position: absolute;
    font-size: 1.2rem;
}
.search-con {
    padding: 2rem 1rem 0;
    background: #fff;
}
.history-search {
    position: absolute!important;
    bottom: 5rem;
    overflow-y: scroll;
    left: 0;
    top: 6.8rem;
    right: 0;
    padding: 0 1.3rem;
}
.search-con p {
    overflow: hidden;
    font-size: 1.5rem;
    padding: 0 0 .8rem;
    clear: both;
    color: #999;
}
.search-con ul {
    overflow: hidden;
    color: #555;
}
.search-con ul a {
    color: #666;
}
.a-text-more a {
    display: block;
    width: 100%;
    text-align: center;
    box-sizing: border-box;
}
.a-text-more span {
    padding: 0;
    font-size: 1.5rem;
    display: block;
    border: 1px solid #efefef;
    border-radius: 4px;
    height: 2.8rem;
    line-height: 2.8rem;
}
.search-con p.hos-search {
    margin-top: 1.3rem;
}
.search-con p.hos-search i.icon-xiao10 {
    font-size: 1.8rem;
}
.no-div-message {
    text-align: center;
    padding-top: 6rem;
    color: #999;
}
.no-div-message p {
    margin-top: 1.8rem;
    font-size: 1.6rem;
}
.common-search .input-text {
    border-radius: 2px;
    background: #eee;
    box-shadow: none;
}
.input-text input {
    height: 3.1rem;
    line-height: 3.1rem;
    padding: 0 1rem 0 0;
    color: #666;
}
.search .input-text input {
    padding-left: 5.8rem;
}
.common-search .input-text input {
    background: #eee;
}
.is-null {
    font-size: 2.1rem;
    color: #ddd;
    top: 50%;
    margin-top: -1.2rem;
    z-index: 10;
    position: absolute;
    right: .2rem;
    visibility: hidden;
    opacity: 0;
    transition: all .1s;
}
.search .is-null {
    right: .6rem;
}
.btn-alipay, .btn-cart, .btn-default, .btn-default-new, .btn-disab, .btn-reset, .btn-submit, .btn-submit1, .btn-wechat {
    font-size: 1.6rem;
    color: #fff;
    border: 0;
    text-align: center;
    padding: 1.2rem 0;
    width: 100%;
}
.search-btn {
    background: #fff;
}
a.search-btn {
    color: #1a232b;
}
.search .btn-submit, .search .search-check, a.s-filter {
    line-height: 3.2rem;
    box-sizing: border-box;
}
.search .btn-submit {
    display: block;
    width: 6rem;
    height: 3.2rem;
    border-radius: 4px;
    margin-left: .5rem;
    font-size: 1.6rem;
    padding: 0;
}
.common-search .btn-submit {
    margin-left: 0;
    width: 4.5rem;
}
 input:valid {
    border: 0;
    outline: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -ms-box-shadow: none;
    -o-box-shadow: none;
    box-shadow: none;
}
.search-footer {
    position: fixed;
    bottom: 1rem;
    width: 100%;
    z-index: 10;
}
h4.title-hrbg, h5.title-hrbg {
    line-height: 4rem;
    overflow: hidden;
}
h4.title-hrbg {
    font-size: 1.3rem;
    position: relative;
    z-index: 1;
    height: 4rem;
    color: #888;
    text-align: center;
    margin-top: 4rem;
}
h4.title-hrbg span {
    background: #fff;
    padding: 1rem .6rem;
    font-size: 1.4rem;
    z-index: 10;
}
.col-6 {
    color: #666;
}
hr {
    margin-bottom: 20px;
    box-sizing:border-box;
}
h4.title-hrbg hr {
    background: #f6f6f9;
    height: 1px;
    border: 0;
    position: absolute;
    left: 0;
    right: 0;
    top: 50%;
    margin-top: 1px;
    z-index: -1;
}
</style>
<script>
//import $ from '../assets/js/jquery.min.js';
//$(".j-search-check").click(function () {
//    if ($(this).attr("data") == 1) {
//        $(this).attr("data", 2).find("span").html("店铺");
//        $("input[name=type_select]").val(2);
//    } else {
//        $(this).attr("data", 1).find("span").html("商品");
//        $("input[name=type_select]").val(1);
//    }
//});
</script>
