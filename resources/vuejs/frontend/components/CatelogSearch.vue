<template>
    <section class="category-top">
        <div class="search category-search">
            <div class="text-all dis-box j-text-all text-all-back">
                <div class="box-flex input-text n-input-text i-search-input">
                    <router-link :to="{path:'/search'}">
                        <div class="j-input-text nav-soso"><i class="iconfont icon-sousuo"></i>aa商品/店铺搜索</div>
                    </router-link>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    name:'category-top',
}
</script>
<style lang="">
.search {
    padding: 0 1rem;
    position: relative;
}  
.category-top .search {
    border-bottom: 1px solid #e8e8e8;
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    z-index: 1;
    background: #eee;
}
.category-top .category-search {
    background: #fff;
    border-bottom: 1px solid #f1f1f1;
}
.text-all {
    border-bottom: 1px solid #f6f6f9;
    padding: .6rem 0;
    width: 100%;
    overflow: hidden;
}
.search .text-all {
    border-bottom: 0;
}
.search .input-text {
    border-bottom: 0;
    background: rgba(255,255,255,.7);
    border-radius: 4px;
    overflow: hidden;
    position: relative;
    box-shadow: 1px 0 1px rgba(200,200,200,.2);
}
.category-search .n-input-text {
    background: #eee;
}
.search a.a-search-input {
    display: block;
    position: absolute;
    left: 0;
    bottom: 0;
    right: 0;
    top: 0;
    z-index: 2;
}
.input-text .nav-soso {
    border: 0;
    height: 3.2rem;
    line-height: 3.2rem;
    padding: 0;
    box-sizing: border-box;
    width: 100%;
    color: #777;
    font-size: 1.5rem;
    padding-right: 3rem;
}
.search .n-input-text.i-search-input .nav-soso, .search .n-input-text.i-search-input input {
    padding-left: 3.2rem;
    background: 0 0;
}
.i-search-input i.icon-sousuo {
    position: absolute;
    font-size: 1.62rem;
    color: #8e8d8a;
    left: 1.1rem;
}
</style>