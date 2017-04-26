<?php

namespace app\contracts\repository\article;

/**
 * Interface ArticleRepositoryInterface
 * @package app\contracts\repository
 */
interface ArticleRepositoryInterface
{
    /**
     * @param $cid
     * @return mixed
     */
    public function getList($cid);

    /**
     * @param $id
     * @return mixed
     */
    public function getDetail($id);

    /**
     * @param $id
     * @return mixed
     */
    public function getComment($id);

    /**
     * @param $id
     * @return mixed
     */
    public function getRelatedGoods($id);
}