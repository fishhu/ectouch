<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Stat
 */
class Stat extends Model
{
    protected $table = 'stats';

    public $timestamps = false;

    protected $fillable = [
        'access_time',
        'ip_address',
        'visit_times',
        'browser',
        'system',
        'language',
        'area',
        'referer_domain',
        'referer_path',
        'access_url'
    ];

    protected $guarded = [];

        
}