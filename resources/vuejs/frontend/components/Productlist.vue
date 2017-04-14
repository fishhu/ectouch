<template>
    <section class="product">
       <div class="product-list-small" data="0">
          <ul> 
              <li v-for="product in products" :key="product.url">
                  <div class="product-div">
                      <a :href="product.url"><img class="product-list-img" :src="product.img"></a>
                      <div class="product-text index-product-text">
                          <a :href="product.url"><h4>{{product.desc}}</h4></a>
                          <p class="dis-box p-t-remark"><span class="box-flex">库存:{{product.stock}}
                          </span><span class="box-flex">销量:{{product.sales}}</span></p>
                          <p>
                          <span class="p-price t-first ">{{product.price}}
                              <small><del>¥6480.00</del></small>
                          </span>
                          </p>
                          <a href="javascript:void(0);" class="icon-flow-cart fr j-goods-attr" onclick="addToCart(296, 0)"><i class="iconfont icon-gouwuche"></i></a>
                      </div>
                  </div>
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
.product-list ul {
    overflow: hidden;
    width: 100%;
}
.product-list ul li {
    box-sizing: border-box;
}
.product-list-small ul li {
    width: 100%;
    padding-bottom: 1px;
}
.product-div {
    background: #fff;
    position: relative;
    overflow: hidden;
}
.product-list-small .product-div {
    padding: .8rem;
}
.product-div img {
    width: 100%;
    display: block;
}
.product-list-small .product-list-img {
    width: 9.2rem;
    height: auto;
    float: left;
}
.product-list-small .product-div img {
    border: 1px solid #f1f1f1;
}
.product-list-small .product-text {
    margin-left: 10.6rem;
    padding: .2rem 0;
    height: 5.8rem;
}
.product-text h4 {
    display: block;
    overflow: hidden;
}
.product-list-medium h4, .product-list-small h4 {
    font-size: 1.5rem;
    height: 3.8rem;
    line-height: 1.9rem;
}
.index-product-text h4 {
    padding-right: 0;
}
.product-text .p-t-remark {
    color: #999;
    padding-bottom: 0rem;
}
.product-list-small .p-t-remark {
    padding-top: .6rem;
    font-size: 1.3rem;
}
.product-text p {
    padding-top: .6rem;
    padding-bottom: .4rem;
}
.t-first {
    color: #EC5151;
}
.p-price {
    clear: both;
    overflow: hidden;
}
.product-list-small .p-price small {
    margin-left: .6rem;
    font-size: 1.4rem;
}
.product-list-small .p-price {font-size:2rem;}
del {
    color: #aaa;
    font-size: 1.2rem;
}
.icon-flow-cart {
    background: #EC5151;
    border-radius: 50%;
    text-align: center;
    position: absolute;
    z-index: 3;
}
.product-list-small .icon-flow-cart {
    right: 1.3rem;
    bottom: 1.3rem;
    width: 2.8rem;
    height: 2.8rem;
    line-height: 2.8rem;
}
.icon-flow-cart i.icon-gouwuche {
    color: #fff;
}
.product-list-small .icon-flow-cart i.icon-gouwuche {
    font-size: 1.8rem;
}
.product-list-medium {
    padding: 0rem 0rem;
}
.product-list-medium ul li {
    float: left;
    width: 50%;
    padding: .2rem 0;
}
.product-list-medium ul li:nth-child(2n) {
    padding-left: 0.2rem;
}
.product-list-medium ul li:nth-child(2n-1) {
    padding-right: 0.2rem;
}
.product-list-medium .product-text {
    padding: .8rem;
}
.product-list-medium .p-t-remark {
    font-size: 1.2rem;
    padding-top: .2rem;
    display: none;
}
.product-list-medium .p-price {
    font-size: 1.8rem;
}
.product-list-medium .p-price small {
    margin-left: .6rem;
    display: none;
}
.product-list-medium .icon-flow-cart {
    right: .6rem;
    bottom: .6rem;
    width: 2.8rem;
    height: 2.8rem;
    line-height: 2.8rem;
    display: none;
}
.product-list-medium .icon-flow-cart i.icon-gouwuche {
    font-size: 1.8rem;
}

.product-list-big {
    padding: 0.5rem 1rem;
}
.product-list-big ul li {
    width: 100%;
    padding: .5rem 0;
}
.product-list-big .product-text {
    padding: 1.4rem;
}
.product-list-big h4 {
    font-size: 1.8rem;
    height: 4.4rem;
    line-height: 2.3rem;
}
.product-list-big .p-t-remark {
    padding-top: .8rem;
    font-size: 1.5rem;
    display: none;
}
.product-list-big .p-price {
    font-size: 2.3rem;
}
.product-list-big .p-price del {
    font-size: 1.6rem;
    margin-left: 1rem;
}
.product-list-big .icon-flow-cart {
    right: 1.4rem;
    bottom: 1.4rem;
    width: 3.6rem;
    height: 3.6rem;
    line-height: 3.6rem;
}
.product-list-big .icon-flow-cart i.icon-gouwuche {
    font-size: 2.4rem;
}
</style>