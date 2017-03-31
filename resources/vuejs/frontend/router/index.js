import Vue from 'vue'
import Router from 'vue-router'

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

export default new Router({
  // mode: 'history',
  routes: [
    {path: '/', name: 'home', component: Home},
    {path: '/catelog', name: 'catelog', component: Catelog},
    {path: '/category', name: 'category', component: Category},
    {path: '/search', name: 'search', component: Search},
    {path: '/goods', name: 'goods', component: Goods},
    {path: '/cart', name: 'cart', component: Cart},
    {path: '/checkout', name: 'checkout', component: Checkout},
    {path: '/done', name: 'done', component: Done},
    {path: '/respond', name: 'respond', component: Respond},
    // activity
    {path: '/activity', name: 'activity', component: Activity},
    {path: '/activity/detail', name: 'activity-detail', component: ActivityDetail},
    // article
    {path: '/article', name: 'article', component: Article},
    {path: '/article/detail', name: 'article-detail', component: ArticleDetail},
    {path: '/article/wechat', name: 'article-wechat', component: ArticleWechat},
    // auction
    {path: '/auction', name: 'auction', component: Auction},
    {path: '/auction/detail', name: 'auction-detail', component: AuctionDetail},
    {path: '/auction/log', name: 'auction-log', component: AuctionLog},
    // brand
    {path: '/brand', name: 'brand', component: Brand},
    {path: '/brand/detail', name: 'brand-detail', component: BrandDetail},
    // exchange
    {path: '/exchange', name: 'exchange', component: Exchange},
    {path: '/exchange/detail', name: 'exchange-detail', component: ExchangeDetail},
    // group buy
    {path: '/group-buy', name: 'group-buy', component: GroupBuy},
    {path: '/group-buy/detail', name: 'group-buy-detail', component: GroupBuyDetail},
    // oauth
    {path: '/oauth', name: 'oauth', component: OAuth},
    // topic
    {path: '/topic', name: 'topic', component: Topic},
    {path: '/topic/detail', name: 'topic-detail', component: TopicDetail},
    // wholesale
    {path: '/wholesale', name: 'wholesale', component: Wholesale},
    {path: '/wholesale/detail', name: 'wholesale-detail', component: WholesaleDetail},
    {path: '/wholesale/cart', name: 'wholesale-cart', component: WholesaleCart},
    // user auth
    {path: '/register', name: 'register', component: Register},
    {path: '/login', name: 'login', component: Login},
    {path: '/forgot', name: 'forgot', component: Forgot},
    {path: '/reset', name: 'reset', component: Reset},
    // user center
    {path: '/user', name: 'user', component: User},
    {path: '/user/account', name: 'user-account', component: Account},
    {path: '/user/address', name: 'user-address', component: Address},
    {path: '/user/affiliate', name: 'user-affiliate', component: Affiliate},
    {path: '/user/booking', name: 'user-booking', component: Booking},
    {path: '/user/collection', name: 'user-collection', component: Collection},
    {path: '/user/comment', name: 'user-comment', component: Comment},
    {path: '/user/message', name: 'user-message', component: Message},
    {path: '/user/order', name: 'user-order', component: Order},
    {path: '/user/order', name: 'user-order-detail', component: OrderDetail},
    {path: '/user/profile', name: 'user-profile', component: Profile},
    {path: '/user/refound', name: 'user-refound', component: Refound}
  ]
})
