<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SessionsData
 */
class SessionsData extends Model
{
    protected $table = 'sessions_data';

    protected $primaryKey = 'sesskey';

    public $timestamps = false;

    protected $fillable = [
        'expiry',
        'data'
    ];

    protected $guarded = [];

        
}