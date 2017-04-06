<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PackageGood
 */
class PackageGood extends Model
{
    protected $table = 'package_goods';

    public $timestamps = false;

    protected $fillable = [
        'package_id',
        'goods_id',
        'product_id',
        'goods_number',
        'admin_id'
    ];

    protected $guarded = [];

        
}