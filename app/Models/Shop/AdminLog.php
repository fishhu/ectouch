<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdminLog
 */
class AdminLog extends Model
{
    protected $table = 'admin_log';

    protected $primaryKey = 'log_id';

    public $timestamps = false;

    protected $fillable = [
        'log_time',
        'user_id',
        'log_info',
        'ip_address'
    ];

    protected $guarded = [];

        
}