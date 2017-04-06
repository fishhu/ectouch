<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Template
 */
class Template extends Model
{
    protected $table = 'template';

    public $timestamps = false;

    protected $fillable = [
        'filename',
        'region',
        'library',
        'sort_order',
        'number',
        'type',
        'theme',
        'remarks'
    ];

    protected $guarded = [];

        
}