<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CollectGood
 */
class CollectGood extends Model
{
    protected $table = 'collect_goods';

    protected $primaryKey = 'rec_id';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'goods_id',
        'add_time',
        'is_attention'
    ];

    protected $guarded = [];

        
}