<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BookingGood
 */
class BookingGood extends Model
{
    protected $table = 'booking_goods';

    protected $primaryKey = 'rec_id';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'email',
        'link_man',
        'tel',
        'goods_id',
        'goods_desc',
        'goods_number',
        'booking_time',
        'is_dispose',
        'dispose_user',
        'dispose_time',
        'dispose_note'
    ];

    protected $guarded = [];

        
}