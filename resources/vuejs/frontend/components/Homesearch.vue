<template>
    <div class="mod-search">
        <header class="search search-fixed">
            <div class="header-search">
                <a href="" style="color: rgb(255, 255, 255);">
                    <div class="search-left">
                    <span>上海
                        <i class="iconfont icon-down-arrow"></i></span>
                    </div>
                </a>
                <router-link :to="{path:'/search'}" class="search-center">
                    <div>
                        <i class="iconfont icon-search"></i>商品/店铺搜索
                    </div>
                </router-link>
                <a href="" style="color: rgb(255, 255, 255);">
                    <div class="search-right">
                    <em></em>
                    <i class="iconfont icon-message"></i>
                    </div>
                </a>
                </div>
                <div class="search-mask"></div>
        </header>
        <!---->
    </div>
</template>

<script>
export default {
  name: 'search',
  props:['message'],
  data () {
    return {
    }
  },

}
</script>

<style scoped>
    .mod-search header {
    width: 100%;
    height: 5.4rem;
    color: #fff;
    z-index: 12;
}
header.search-fixed, header.search-preview, header.search-visual {
    z-index: 11;
    width: 100%;
    background: rgba(236,81,81,0);
}
header.search-fixed, header.search-preview {
    position: absolute;
}
.header-search {
    z-index: 111;
    position: absolute;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    background: rgba(236,81,81,0);
    padding: 0 1rem;
    overflow: hidden;
    height: 5.4rem;
    width: 100%;
}
.mod-search .search-left {
    padding: 0 1rem 0 0;
}
.mod-search .search-left, .mod-search .search-right {
    -ms-flex-pack: center;
    justify-content: center;
}
.mod-search .search-left i {
    font-size: 1rem;
}
header.search-fixed .search-mask, header.search-preview .search-mask, header.search-visual .search-mask {
    position: absolute;
    background-image: linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.4) 60%,transparent 98%);
    z-index: -1;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
}
.mod-search .search-center {
    -ms-flex: 1;
    flex: 1;
    height: 3.4rem;
    line-height: 3.4rem;
    padding: 0 1rem;
    box-sizing: content-box;
    font-size: 1.5rem;
    border-radius: .4rem;
    background: #fff;
    color: #999;
}
header.search-fixed .search-center, header.search-visual .search-center {
    background: hsla(0,0%,100%,.8);
    color: #666;
}
.mod-search .search-center i.icon-search {
    margin-right: .4rem;
}
.mod-search .search-center {
    color: #fff !important;
}
.mod-search .search-right {
    padding: 0 0 0 1rem;
}
.mod-search .search-right {
    position: relative;
    -ms-flex-pack: center;
    justify-content: center;
}
.mod-search .search-right em {
    position: absolute;
    display: block;
    width: .6rem;
    height: .6rem;
    border-radius: 100%;
    background: red;
    right: .3rem;
    top: .1rem;
    border: 1px solid #fff;
}
.mod-search .search-right i {
    -ms-flex: 1;
    flex: 1;
    font-size: 2.2rem;
}
</style>
