<?php

namespace app\contracts\repository\article;

/**
 * Interface CategoryRepositoryInterface
 * @package app\contracts\repository\article
 */
interface CategoryRepositoryInterface
{
    /**
     * @param $cid
     * @param $type
     * @return mixed
     */
    public function getList($cid, $type);

    /**
     * @param $cid
     * @return mixed
     */
    public function getDetail($cid);

    /**
     * @param $cid
     * @return mixed
     */
    public function getArticle($cid);
}