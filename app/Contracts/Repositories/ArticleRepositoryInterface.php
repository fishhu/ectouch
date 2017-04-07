<?php

namespace App\Contracts\Repositories;

/**
 * Interface ArticleRepositoryInterface
 * @package App\Contracts\Repositories
 */
interface ArticleRepositoryInterface
{
    /**
     * @param array $condition
     * @param array $columns
     * @return mixed
     */
    public function all($condition = [], $columns = ['*']);

    /**
     * @param array $condition
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($condition = [], $perPage = 10, $columns = ['*']);

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param array $data
     * @param $id
     * @return mixed
     */
    public function update(array $data, $id);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, $columns = ['*']);

    /**
     * @param $field
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($field, $value, $columns = ['*']);

    /**
     * @param $id
     * @return mixed
     */
    public function relatedGoods($id);
}