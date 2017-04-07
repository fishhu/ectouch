<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App\Models
 */
class Article extends Model
{
    /**
     * @var string
     */
    protected $table = 'article';

    /**
     * @var string
     */
    protected $primaryKey = 'article_id';

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'cat_id',
        'title',
        'content',
        'author',
        'author_email',
        'keywords',
        'article_type',
        'is_open',
        'add_time',
        'file_url',
        'open_type',
        'link',
        'description'
    ];

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var array
     */
    protected $appends = [
        'id',
        'short_name',
        'created_at',
        'updated_at',
        'album'
    ];

    /**
     * @var array
     */
    protected $visible = [
        'id',
        'title',
        'short_name',
        'author',
        'author_email',
        'keywords',
        'description',
        'album',
        'content',
        'created_at',
        'updated_at'
    ];

    /**
     * 文章关联评论
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comment()
    {
        return $this->hasMany('App\Models\Comment', 'id_value', 'article_id');
    }

    /**
     * 文章关联商品
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function goods()
    {
        return $this->hasMany('App\Models\GoodsArticle', 'article_id', 'article_id');
    }

    /**
     * @return mixed
     */
    public function getIdAttribute()
    {
        return $this->attributes['article_id'];
    }

    /**
     * @return mixed
     */
    public function getShortNameAttribute()
    {
        return $this->attributes['title'];
    }

    /**
     * @return mixed
     */
    public function getCreatedAtAttribute()
    {
        return local_date('Y-m-d', $this->attributes['add_time']);
    }

    /**
     * @return mixed
     */
    public function getUpdatedAtAttribute()
    {
        return local_date('Y-m-d', $this->attributes['add_time']);
    }

    /**
     * @return array
     */
    public function getAlbumAttribute()
    {
        $pattern = "/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png|\.bmp|\.jpeg]))[\'|\"].*?[\/]?>/";
        preg_match_all($pattern, $this->attributes['content'], $match);
        $album = array();
        if (count($match[1]) > 0) {
            foreach ($match[1] as $img) {
                if (strtolower(substr($img, 0, 4)) != 'http') {
                    $realpath = mb_substr($img, stripos($img, 'images/'));
                    $album[] = get_image_path($realpath);
                }
            }
        }
        // 超过三图则取前三
        if (count($album) > 3) {
            $album = array_slice($album, 0, 3);
        }
        return $album;
    }

}