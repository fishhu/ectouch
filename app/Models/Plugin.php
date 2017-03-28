<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plugin
 */
class Plugin extends Model
{
    protected $table = 'plugins';

    protected $primaryKey = 'code';

    public $timestamps = false;

    protected $fillable = [
        'version',
        'library',
        'assign',
        'install_date'
    ];

    protected $guarded = [];

        
}