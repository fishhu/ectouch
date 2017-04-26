import Vue from 'vue'
import Router from 'vue-router'
import Util from '../libs/util'
import { Indicator } from 'mint-ui'

// frontend
import Home from '../views/Home'
import Catelog from '../views/Catelog'
import Category from '../views/Category'
import Search from '../views/Search'
import Goods from '../views/Goods'
import Cart from '../views/Cart'
import Checkout from '../views/Checkout'
import Done from '../views/Done'
import Respond from '../views/Respond'
// activity
import Activity from '../views/activity/Activity'
import ActivityDetail from '../views/activity/Detail'
// article
import Article from '../views/article/Article'
import ArticleDetail from '../views/article/Detail'
import ArticleWechat from '../views/article/Wechat'
// auction
import Auction from '../views/auction/Auction'
import AuctionDetail from '../views/auction/Detail'
import AuctionLog from '../views/auction/Log'
// brand
import Brand from '../views/brand/Brand'
import BrandDetail from '../views/brand/Detail'
// exchange
import Exchange from '../views/exchange/Exchange'
import ExchangeDetail from '../views/exchange/Detail'
// group buy
import GroupBuy from '../views/group-buy/GroupBuy'
import GroupBuyDetail from '../views/group-buy/Detail'
// oauth
import OAuth from '../views/oauth/OAuth'
// topic
import Topic from '../views/topic/Topic'
import TopicDetail from '../views/topic/Detail'
// wholesale
import Wholesale from '../views/wholesale/Wholesale'
import WholesaleDetail from '../views/wholesale/Detail'
import WholesaleCart from '../views/wholesale/Cart'
// user auth
import Register from '../views/user/auth/Register'
import Login from '../views/user/auth/Login'
import Forgot from '../views/user/auth/Forgot'
import Reset from '../views/user/auth/Reset'
// user center
import User from '../views/user/User'
import Account from '../views/user/account/Account'
import Address from '../views/user/address/Address'
import Affiliate from '../views/user/affiliate/Affiliate'
import Booking from '../views/user/booking/Booking'
import Collection from '../views/user/collection/Collection'
import Comment from '../views/user/comment/Comment'
import Message from '../views/user/message/Message'
import Order from '../views/user/order/Order'
import OrderDetail from '../views/user/order/Detail'
import Profile from '../views/user/profile/Profile'
import Refound from '../views/user/refound/Refound'
import RefoundDetail from '../views/user/refound/Detail'

Vue.use(Router)

const router = new Router({
  // mode: 'history',
  routes: [
    {path: '/', name: 'home', component: Home},
    {path: '/catelog', name: 'catelog', component: Catelog, meta: {title: '全部类别'}},
    {path: '/category', name: 'category', component: Category, meta: {title: '搜索'}},
    {path: '/search', name: 'search', component: Search, meta: {title: '搜索'}},
    {path: '/goods', name: 'goods', component: Goods, meta: {title: '商品详情'}},
    {path: '/cart', name: 'cart', component: Cart, meta: {title: '购物车'}},
    {path: '/checkout', name: 'checkout', component: Checkout, meta: {title: '确认订单'}},
    {path: '/done', name: 'done', component: Done, meta: {title: '提交成功'}},
    {path: '/respond', name: 'respond', component: Respond},
    // activity
    {path: '/activity', name: 'activity', component: Activity, meta: {title: '优惠活动'}},
    {path: '/activity/detail', name: 'activity-detail', component: ActivityDetail, meta: {title: '优惠详情'}},
    // article
    {path: '/article', name: 'article', component: Article, meta: {title: '最新资讯'}},
    {path: '/article/detail', name: 'article-detail', component: ArticleDetail, meta: {title: '资讯详情'}},
    {path: '/article/wechat', name: 'article-wechat', component: ArticleWechat, meta: {title: '图文详情'}},
    // auction
    {path: '/auction', name: 'auction', component: Auction, meta: {title: '拍卖活动'}},
    {path: '/auction/detail', name: 'auction-detail', component: AuctionDetail, meta: {title: '拍卖详情'}},
    {path: '/auction/log', name: 'auction-log', component: AuctionLog, meta: {title: '拍卖出价'}},
    // brand
    {path: '/brand', name: 'brand', component: Brand, meta: {title: '品牌街'}},
    {path: '/brand/detail', name: 'brand-detail', component: BrandDetail, meta: {title: '品牌介绍'}},
    // exchange
    {path: '/exchange', name: 'exchange', component: Exchange, meta: {title: '积分商城'}},
    {path: '/exchange/detail', name: 'exchange-detail', component: ExchangeDetail, meta: {title: '兑换详情'}},
    // group buy
    {path: '/group-buy', name: 'group-buy', component: GroupBuy, meta: {title: '团购活动'}},
    {path: '/group-buy/detail', name: 'group-buy-detail', component: GroupBuyDetail, meta: {title: '团购详情'}},
    // oauth
    {path: '/oauth', name: 'oauth', component: OAuth, meta: {title: '绑定手机'}},
    // topic
    {path: '/topic', name: 'topic', component: Topic, meta: {title: '专题活动'}},
    {path: '/topic/detail', name: 'topic-detail', component: TopicDetail, meta: {title: '专题详情'}},
    // wholesale
    {path: '/wholesale', name: 'wholesale', component: Wholesale, meta: {title: '批发活动'}},
    {path: '/wholesale/detail', name: 'wholesale-detail', component: WholesaleDetail, meta: {title: '批发详情'}},
    {path: '/wholesale/cart', name: 'wholesale-cart', component: WholesaleCart, meta: {title: '批发购物车'}},
    // user auth
    {path: '/register', name: 'register', component: Register, meta: {title: '会员注册'}},
    {path: '/login', name: 'login', component: Login, meta: {title: '会员登录'}},
    {path: '/forgot', name: 'forgot', component: Forgot, meta: {title: '忘记密码'}},
    {path: '/reset', name: 'reset', component: Reset, meta: {title: '重设新密码'}},
    // user center
    {path: '/user', name: 'user', component: User, meta: {title: '个人中心'}},
    {path: '/user/account', name: 'user-account', component: Account, meta: {title: '我的资产'}},
    {path: '/user/address', name: 'user-address', component: Address, meta: {title: '收货地址'}},
    {path: '/user/affiliate', name: 'user-affiliate', component: Affiliate, meta: {title: '推荐分成'}},
    {path: '/user/booking', name: 'user-booking', component: Booking, meta: {title: '我的'}},
    {path: '/user/collection', name: 'user-collection', component: Collection, meta: {title: '我的收藏'}},
    {path: '/user/comment', name: 'user-comment', component: Comment, meta: {title: '我的评价'}},
    {path: '/user/message', name: 'user-message', component: Message, meta: {title: '我的消息'}},
    {path: '/user/order', name: 'user-order', component: Order, meta: {title: '我的订单'}},
    {path: '/user/order', name: 'user-order-detail', component: OrderDetail, meta: {title: '订单详情'}},
    {path: '/user/profile', name: 'user-profile', component: Profile, meta: {title: '账号管理'}},
    {path: '/user/refound', name: 'user-refound', component: Refound, meta: {title: '退货/售后'}},
    {path: '/user/refound/detail', name: 'user-refound-detail', component: RefoundDetail, meta: {title: '退货/售后'}}
  ]
})

router.beforeEach((to, from, next) => {
    // Indicator.open();
    Util.title(to.meta.title);
    next();
});

router.afterEach(route => {
    // Indicator.close();
    window.scrollTo(0, 0);
});

export default router;