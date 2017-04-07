<template>
    <section class="product">
        <div class="product-list normal">
          <ul>
            <li v-for="product in products" :key="product.url">
              <a :href="product.url"></a>
              <div class="product-cart">
                <i class="iconfont icon-cart"></i>
              </div>
              <figure>
                <img :src="product.img">
                <figcaption>
                  <h4>{{product.desc}}</h4>
                  <p class="remark">
                    <em style="display: none;">库存：{{product.stock}}</em>
                    <em style="display: none;">销量：{{product.sales}}</em></p>
                  <p class="price">
                    <em>{{product.price}}</em></p>
                </figcaption>
              </figure>
            </li>
          </ul>
        </div>
    </section>
</template>
<script>
export default {
  name: 'product',
  data () {
    return {
        products:[
            {url:'',img:'http://10.10.10.156/ecmoban_dsc/images/201512/thumb_img/474_thumb_G_1451089812126.jpg',desc:'申士（SNSIR）SN系 家庭影院套装 5.1组合功放音响 回音壁挂电视音箱 铝合金黑色',price:'￥200'},
            {url:'',img:'http://10.10.10.156//ecmoban_dsc/images/201512/thumb_img/450_thumb_G_1451011856282.jpg',desc:'海俪恩 新款偏光太阳眼镜 男款时尚潮流墨镜 防紫外线太阳镜驾驶镜 男 N6273 方框75蓝紫色',price:'￥400'},
            {url:'',img:'http://10.10.10.156/ecmoban_dsc/images/201512/thumb_img/7_thumb_G_1450120026360.jpg',desc:'媞沫 2014夏装新品女装 宽松假两件蝙蝠短袖印花雪纺衫 粉色 S',price:'￥400'}
        ]
    }
  }
}
</script>
<style scoped>
.product-list {
    padding: .05rem;
    overflow:hidden;
}
.product-list ul li {
    width: 50%;
    padding: .1rem;
    padding-bottom: 0;
    float: left;
    position: relative;
}
.product-list ul li .product-cart {
    position: absolute;
    right: .7rem;
    bottom: .7rem;
    width: 2.2rem;
    height: 2.2rem;
    line-height: 2.2rem;
    background: #ec5151;
    text-align: center;
    border-radius: 100%;
    color: #fff;
    z-index: 3;
}
.product-list ul li .product-cart i {
    font-size: 1.5rem;
}
.product-list figure img {
    width: 100%;
    height: auto;
}
.product-list figcaption {
    margin-top: 1rem;
}
h4{
    margin: 0;
    padding: 0;
    border: 0;
    list-style: none;
    font-weight: 400;
}
.product-list figure h4 {
    font-size: 1.5rem;
    height:3.8rem;
    line-height:1.9rem;
    word-break: break-all;
    overflow: hidden;
    text-overflow:ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}
.product-list figure p {
    margin-top: .4rem;
}
.product-list figure .remark em {
    font-size: 1.3rem;
    color: #888;
}
.product-list figure p {
    margin-top: .4rem;
}
.product-list figure .price em {
    color: #ec5151;
    font-size: 1.8rem;
    display: block;
}
.product-list figure {
    background: #fff;
    padding: .8rem;
}
</style>