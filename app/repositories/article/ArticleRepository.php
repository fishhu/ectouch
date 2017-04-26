<?php

namespace App\Repositories;

use App\Contracts\Repositories\ArticleRepositoryInterface;
use App\Models\Article;
use App\Models\ArticleCat;

/**
 * Class ArticleRepository
 * @package App\Repositories
 */
class ArticleRepository implements ArticleRepositoryInterface
{
    /**
     * @var
     */
    protected $category;

    /**
     * @var
     */
    protected $article;

    /**
     * ArticleRepository constructor.
     * @param $category
     * @param $article
     */
    public function __construct(ArticleCat $category, Article $article)
    {
        $this->category = $category;
        $this->article = $article;
    }

    /**
     * @param array $condition
     * @param array $columns
     * @return mixed
     */
    public function all($condition = [], $columns = ['*'])
    {
        $article = $this->article;

        if (!empty($condition)) {
            $article->where($condition);
        }

        $result = $article->get($columns);

        return $result;
    }

    /**
     * @param array $condition
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($condition = [], $perPage = 10, $columns = ['*'])
    {
        return $this->article->paginate($perPage, $columns);
    }

    /**
     * @param array $data
     * @return bool
     */
    public function create(array $data)
    {
        return false;
    }

    /**
     * @param array $data
     * @param $id
     * @return bool
     */
    public function update(array $data, $id)
    {
        return false;
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        return false;
    }

    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, $columns = ['*'])
    {
        return $this->article->select($columns)->find($id);
    }

    /**
     * @param $field
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($field, $value, $columns = ['*'])
    {
        return $this->article->select($columns)->where($field, $value)->first();
    }

    /**
     * @param $id
     * @return array
     */
    public function relatedGoods($id)
    {
        $sql = 'SELECT g.goods_id, g.goods_name, g.goods_thumb, g.goods_img, g.shop_price AS org_price, ' .
            "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, " .
            'g.market_price, g.promote_price, g.promote_start_date, g.promote_end_date ' .
            'FROM ' . $GLOBALS['ecs']->table('goods_article') . ' ga ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('goods') . ' AS g ON g.goods_id = ga.goods_id ' .
            "LEFT JOIN " . $GLOBALS['ecs']->table('member_price') . " AS mp " .
            "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' " .
            "WHERE ga.article_id = '$id' AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0";
        $res = $GLOBALS['db']->query($sql);

        $arr = array();
        while ($row = $GLOBALS['db']->fetchRow($res)) {
            $arr[$row['goods_id']]['goods_id'] = $row['goods_id'];
            $arr[$row['goods_id']]['goods_name'] = $row['goods_name'];
            $arr[$row['goods_id']]['short_name'] = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
                sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
            $arr[$row['goods_id']]['goods_thumb'] = get_image_path($row['goods_id'], $row['goods_thumb'], true);
            $arr[$row['goods_id']]['goods_img'] = get_image_path($row['goods_id'], $row['goods_img']);
            $arr[$row['goods_id']]['market_price'] = price_format($row['market_price']);
            $arr[$row['goods_id']]['shop_price'] = price_format($row['shop_price']);
            $arr[$row['goods_id']]['url'] = build_uri('goods', array('gid' => $row['goods_id']), $row['goods_name']);

            if ($row['promote_price'] > 0) {
                $arr[$row['goods_id']]['promote_price'] = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
                $arr[$row['goods_id']]['formated_promote_price'] = price_format($arr[$row['goods_id']]['promote_price']);
            } else {
                $arr[$row['goods_id']]['promote_price'] = 0;
            }
        }

        return $arr;
    }

}