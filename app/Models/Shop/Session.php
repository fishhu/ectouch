<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Session
 */
class Session extends Model
{
    protected $table = 'sessions';

    protected $primaryKey = 'sesskey';

    public $timestamps = false;

    protected $fillable = [
        'expiry',
        'userid',
        'adminid',
        'ip',
        'user_name',
        'user_rank',
        'discount',
        'email',
        'data'
    ];

    protected $guarded = [];

        
}