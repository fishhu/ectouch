<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MailTemplate
 */
class MailTemplate extends Model
{
    protected $table = 'mail_templates';

    protected $primaryKey = 'template_id';

    public $timestamps = false;

    protected $fillable = [
        'template_code',
        'is_html',
        'template_subject',
        'template_content',
        'last_modify',
        'last_send',
        'type'
    ];

    protected $guarded = [];

        
}