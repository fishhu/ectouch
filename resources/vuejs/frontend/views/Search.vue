<template>
  <div class="searchs">
      <div class="search-div j-search-div ts-3">
          <ec-search1>111</ec-search1>
          <section class="search-con">
              <div class="history-search">
                    <p>
                        <label class="fl">热门搜索</label>
                    </p>
                    <ec-hot></ec-hot>
                    <p class="hos-search">
                        <label class="fl">最近搜索</label>
                        <span class="fr clear_history"><i class="iconfont icon-xiao10"></i></span>
                    </p>
                    <div class="no-div-message">
                        <p>暂无搜索记录</p>
                    </div>
              </div>
          </section>
          <div class="other-login search-footer">
              <h4 class="title-hrbg"><a href="javascript:history.go(-1);"><span class="col-6">点击关闭搜索</span></a>
                  <hr>
              </h4>
          </div>
      </div>
  </div>
</template>
<script>
import Search from "../components/Commonsearch";
import Hot from "../components/Hot.vue";
export default {
    name: 'searchs',
    components:{
        "EcSearch1":Search,
        "EcHot":Hot
    }
}
</script>
