<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VoteLog
 */
class VoteLog extends Model
{
    protected $table = 'vote_log';

    protected $primaryKey = 'log_id';

    public $timestamps = false;

    protected $fillable = [
        'vote_id',
        'ip_address',
        'vote_time'
    ];

    protected $guarded = [];

        
}