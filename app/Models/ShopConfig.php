<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ShopConfig
 */
class ShopConfig extends Model
{
    protected $table = 'shop_config';

    public $timestamps = false;

    protected $fillable = [
        'parent_id',
        'code',
        'type',
        'store_range',
        'store_dir',
        'value',
        'sort_order'
    ];

    protected $guarded = [];

    /**
     * @param $code
     * @return mixed
     */
    public static function findByCode($code)
    {
        return self::where(['code' => $code])->value('value');
    }

    /**
     * @return array
     */
    public static function getShopInfo()
    {
        return [
            'site_info' => [
                'name' => self::findByCode('shop_name'),
                'desc' => self::findByCode('shop_desc'),
                'logo' => formatPhoto(self::findByCode('shop_logo')),
                'opening' => (bool)!self::findByCode('shop_closed'),
                'telephone' => self::findByCode('service_phone'),
            ]
        ];
    }

    /**
     * @param $configure
     * @return array
     */
    public static function getConfigure($configure)
    {
        $data = [];
        $configure = unserialize($configure);
        foreach ($configure as $key => $val) {
            $data[$val['name']] = $val['value'];
        }
        return $data;
    }
}