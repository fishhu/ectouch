<?php

use App\Repositories\ShopConfigRepository;

/**
 * 获得当前格林威治时间的时间戳
 * @return int
 */
function gmtime()
{
    return (time() - date('Z'));
}

/**
 * 获得服务器的时区
 * @return float|int|string
 */
function server_timezone()
{
    if (function_exists('date_default_timezone_get')) {
        return date_default_timezone_get();
    } else {
        return date('Z') / 3600;
    }
}

/**
 * 生成一个用户自定义时区日期的GMT时间戳
 * @param null $hour
 * @param null $minute
 * @param null $second
 * @param null $month
 * @param null $day
 * @param null $year
 * @return false|int
 */
function local_mktime($hour = NULL, $minute = NULL, $second = NULL, $month = NULL, $day = NULL, $year = NULL)
{
    $timezone = isset($_SESSION['timezone']) ? $_SESSION['timezone'] : shop_config('timezone');

    /**
     * $time = mktime($hour, $minute, $second, $month, $day, $year) - date('Z') + (date('Z') - $timezone * 3600)
     * 先用mktime生成时间戳，再减去date('Z')转换为GMT时间，然后修正为用户自定义时间。以下是化简后结果
     **/
    $time = mktime($hour, $minute, $second, $month, $day, $year) - $timezone * 3600;

    return $time;
}

/**
 * 将GMT时间戳格式化为用户自定义时区日期
 * @param $format
 * @param null $time
 * @return false|string
 */
function local_date($format, $time = NULL)
{
    $timezone = isset($_SESSION['timezone']) ? $_SESSION['timezone'] : shop_config('timezone');

    if ($time === NULL) {
        $time = gmtime();
    } elseif ($time <= 0) {
        return '';
    }

    $time += ($timezone * 3600);

    return date($format, $time);
}

/**
 * 转换字符串形式的时间表达式为GMT时间戳
 * @param $str
 * @return false|int|string
 */
function gmstr2time($str)
{
    $time = strtotime($str);

    if ($time > 0) {
        $time -= date('Z');
    }

    return $time;
}

/**
 * 将一个用户自定义时区的日期转为GMT时间戳
 * @param $str
 * @return false|int
 */
function local_strtotime($str)
{
    $timezone = isset($_SESSION['timezone']) ? $_SESSION['timezone'] : shop_config('timezone');

    /**
     * $time = mktime($hour, $minute, $second, $month, $day, $year) - date('Z') + (date('Z') - $timezone * 3600)
     * 先用mktime生成时间戳，再减去date('Z')转换为GMT时间，然后修正为用户自定义时间。以下是化简后结果
     **/
    $time = strtotime($str) - $timezone * 3600;

    return $time;
}

/**
 * 获得用户所在时区指定的时间戳
 * @param null $timestamp
 * @return mixed
 */
function local_gettime($timestamp = NULL)
{
    $tmp = local_getdate($timestamp);
    return $tmp[0];
}

/**
 * 获得用户所在时区指定的日期和时间信息
 * @param null $timestamp
 * @return array
 */
function local_getdate($timestamp = NULL)
{
    $timezone = isset($_SESSION['timezone']) ? $_SESSION['timezone'] : shop_config('timezone');

    /* 如果时间戳为空，则获得服务器的当前时间 */
    if ($timestamp === NULL) {
        $timestamp = time();
    }

    $gmt = $timestamp - date('Z'); // 得到该时间的格林威治时间
    $local_time = $gmt + ($timezone * 3600); // 转换为用户所在时区的时间戳

    return getdate($local_time);
}

/**
 * 获取和设置商城配置项
 * @param null $name
 * @param null $value
 * @param null $default
 * @return array|mixed|null
 */
function shop_config($name = null, $value = null, $default = null)
{
    static $_config = [];
    // 配置项初始化
    if (empty($_config)) {
        $_config = ShopConfigRepository::all();
    }
    // 无参数时获取所有
    if (empty($name)) {
        return $_config;
    }
    // 优先执行设置获取或赋值
    if (is_string($name)) {
        if (!strpos($name, '.')) {
            $name = strtoupper($name);
            if (is_null($value))
                return isset($_config[$name]) ? $_config[$name] : $default;
            $_config[$name] = $value;
            return null;
        }
        // 二维数组设置和获取支持
        $name = explode('.', $name);
        $name[0] = strtoupper($name[0]);
        if (is_null($value))
            return isset($_config[$name[0]][$name[1]]) ? $_config[$name[0]][$name[1]] : $default;
        $_config[$name[0]][$name[1]] = $value;
        return null;
    }
    // 批量设置
    if (is_array($name)) {
        $_config = array_merge($_config, array_change_key_case($name, CASE_UPPER));
        return null;
    }
    return null; // 避免非法参数
}