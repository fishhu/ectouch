<?php

/**
 * var_dump & die
 * @param $data
 */
function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
}

/**
 * 返回商品图片URL
 * @param $url
 * @return string
 */
function getImagePath($url)
{
    return rtrim(Yii::$app->params['static'], '/') . '/' . ltrim($url, '/');
}

/**
 * 返回Data资源URL
 * @param $url
 * @return string
 */
function getDataPath($url)
{
    return rtrim(Yii::$app->params['static'], '/') . '/data/' . ltrim($url, '/');
}

/**
 * 获取和设置配置参数
 * @param null $name 配置参数
 * @param null $default 默认值
 */
function config($name = null, $default = null)
{
    $config = \app\repositorys\ConfigRepository::all();

    if (isset($config[$name])) {
        return $config[$name];
    }

    return $default;
}

/**
 * 获得所有模块的名称以及配置
 * @param string $type
 * @return array
 */
function read_services($type = 'payment')
{
    $path = Yii::$aliases['@app'] . '/services/' . $type . '/*/config.php';
    $list = glob($path);

    $res = [];
    foreach ($list as $vo) {
        $res[] = require($vo);
    }

    return $res;
}
