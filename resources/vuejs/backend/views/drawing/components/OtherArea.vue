<template>
    <div id='other-area'>
        <div class="code">
            <img src="../../../assets/images/code.jpg" alt="">
            <p>{{ otherArea.QRCodeText }}</p>
        </div>
        <div class="button">
            <ec-button class="export" size="large" type="primary">{{ otherArea.function.export }}</ec-button>
            <ec-button class="import" size="large" type="success">{{ otherArea.function.import }}</ec-button>
        </div>
        <div class="warm-tip">
            <h5>{{ otherArea.prompt.headline }}</h5>
            <p>{{ otherArea.prompt.text }}</p>
            <a :href="otherArea.prompt.http.link" target="_blank">{{ otherArea.prompt.http.text }}</a>
        </div>
    </div>
</template>

<script>
    // mapActions mapState
    import { mapActions, mapState } from 'vuex'
    
    // third party components
    import {
         Button
    } from 'element-ui'
    
    export default {
        name: 'prview-area',
        components: {
            "EcButton": Button
        },
        data() {
            return {
            }
        },
        beforeMount() {

        },
        computed: mapState({
            otherArea: state => state.dashboard.configInfo.otherArea
        }),
    }

</script>

<style lang="scss" scoped>
    @import '../../../assets/style/config';
    @import '../../../assets/style/mixins/common';
    $export-color :#3eb1fa;
    $import-color :#0cd0c4;
    .code {
        margin-top: 1.1rem;
        width: 13.6rem;
        margin-left: 50%;
        @include translateX(-50%);
    }
    
    .code img {
        width: 100%;
        height: auto;
    }
    
    .code p {
        text-align: center;
        margin-top: .2rem;
        color: $title-color;
        overflow: hidden;
    }
    
    .button {
        overflow: hidden;
        padding: 1rem 1.2rem;
        margin-top: .6rem;
    }
    
    .button button {
        width: 100%;
        margin: 0;
        margin-top: .8rem;
    }
    
    .button button.export {
        background: $export-color;
        border-color: $export-color
    }
    
    .button button.import {
        background: $import-color;
        border-color: $import-color
    }
    
    .warm-tip {
        width: 100%;
        text-align: center;
        margin-top: 1rem;
    }
    
    .warm-tip h5 {
        font-size: .9rem;
    }
    
    .warm-tip p {
        font-size: .8rem;
        color: #666;
        margin-top: .2rem;
    }
    
    .warm-tip a {
        font-size: .7rem;
    }
</style>