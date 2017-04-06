<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Searchengine
 */
class Searchengine extends Model
{
    protected $table = 'searchengine';

    public $timestamps = false;

    protected $fillable = [
        'date',
        'searchengine',
        'count'
    ];

    protected $guarded = [];

        
}