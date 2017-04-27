<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author carson <docxcn@gmail.com>
 * @since 2.0
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/dashboard/app.css',
    ];
    public $js = [
        'js/dashboard/app.js',
    ];
}
