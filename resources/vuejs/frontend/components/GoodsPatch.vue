<template>
    <div class="goods-patch padding-all b-color-f m-top08">
        <div id="editAddressForm">
            <input type="hidden" id="town_id" name="town_region_id" value="">
            <input type="hidden" id="village_id" name="village_region_id" value="">
            <input type="hidden" id="address_id" name="address_id" value="">
            <input type="hidden" value="639" id="district_id" name="district_region_id">
            <input type="hidden" value="809" id="good_id" name="good_id">
            <div class="address-box">
                    <label class="fl t-remark g-t-temark">配送至：</label>
                    <span class="fl text-all-span f-04">甘肃酒泉金塔县</span>
                    <span class="t-jiantou fr"><i class="iconfont icon-jiantou tf-180"></i></span>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        name:'goods-patch'
    }
</script>
<style>
.address-box {
    height: 1.9rem;
    line-height: 1.9rem;
}
span.t-jiantou {
    position: relative;
    font-size: 1.3rem;
    padding-right: 1.2rem;
    margin-top: .1rem;
    color: #777;
}
span.t-jiantou i.icon-jiantou {
    position: absolute;
    font-size: 1rem;
}
</style>