<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegField
 */
class RegField extends Model
{
    protected $table = 'reg_fields';

    public $timestamps = false;

    protected $fillable = [
        'reg_field_name',
        'dis_order',
        'display',
        'type',
        'is_need'
    ];

    protected $guarded = [];

        
}