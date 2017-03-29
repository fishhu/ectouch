<template>
    <div class='preview-area'>
        <header class="component-header">
            <h4>{{ previewArea.text }}</h4>
            <ec-button class="release-btn" size="mini" type="primary">{{ previewArea.function.release.text }}</ec-button>
        </header>
        <div class="edit-area-con">
            <div class="phone-view">
                <div class="phone-edit">
                    <header class="title">
                        首页
                    </header>
                    <div class="phone-edit-con" :class="{no:!isMoudles}">
                        <!--preview 如果为 true 则取消所有链接 -->
                        <component v-for="(item,index) in modules" :is="'ec-'+item.module" :data="item.data" :preview="true" :modulesIndex="index"> </component>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    // mapActions mapState
    import { mapActions, mapState } from 'vuex'

     // custom components
    import EcSlide from '../../../components/slide/Frontend'
    import EcTitle from '../../../components/title/Frontend'
    import EcAnnouncement from '../../../components/announcement/Frontend'
    import EcNav from '../../../components/nav/Frontend'
    
    // third party components
    import { 
        Button 
    } from 'element-ui'

   
    export default {
        name: 'admin-prview-area',
        components: {
            "EcButton": Button,
            EcSlide,
            EcTitle,
            EcAnnouncement,
            EcNav
        },
        data() {
            return {
            }
        },
        beforeMount() {

        },
        computed: {
            isMoudles() {
                return 0 < this.modules.length ? true : false
            },
            ...mapState({
                previewArea: state => state.dashboard.configInfo.previewArea,
            }),
            modules() {
                return this.$store.state.modules
            }
        },
    }

</script>

<style lang="scss" scoped>
    @import '../../../assets/style/config';
    @import '../../../assets/style/mixins/common';
    $title-height :3rem;
    .component-header {
        height: ($tab-height+.4rem);
        background: $tool-bg;
        padding: 0 1rem;
        @include direction(center, space-between)
    }
    
    .component-header h4 {
        float: left;
        font-weight: normal;
        font-size: $tool-title-size
    }
    
    .release-btn i {
        font-size: .8rem;
        margin-right: .1rem;
    }
    
    .phone-view {
        width: 314px;
        height: 628px;
        background: url('../../../assets/images/iphone-bg.jpg');
        background-size: cover;
        margin-top: 2.4rem;
        overflow: hidden;
        margin-left: 50%;
        @include translateX(-50%);
        position: relative;
    }
    
    .phone-view header.title {
        color: $write-color;
        background: $color;
        height: $title-height;
        width: 100%;
        font-size: .9rem;
        font-weight: bold;
        text-align: center;
        background: url('../../../assets/images/iphone-title-info.png') $color no-repeat center center;
        background-size: cover auto;
        padding-top: 1.4rem;
    }
    
    .phone-edit {
        width: 274px;
        height: 484px;
        background: #f1f2f4;
        margin-left: 50%;
        margin-top: 4.57rem;
        @include translateX(-50%);
    }
    
    .phone-edit .phone-edit-con {
        position: absolute;
        width: 100%;
        top: $title-height;
        bottom: 0;
        overflow-y: scroll;
    }
    
    .phone-edit-con.no {
        background: url('../../../assets/images/admin_pre.jpg') no-repeat center 30%;
    }
</style>