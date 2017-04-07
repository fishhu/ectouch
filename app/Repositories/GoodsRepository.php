<?php

namespace App\Repositories;

use App\Contracts\Repositories\GoodsRepositoryInterface;
use App\Models\Goods;

/**
 * Class GoodsRepository
 * @package App\Repositories
 */
class GoodsRepository implements GoodsRepositoryInterface
{

    /**
     * @var Goods
     */
    protected $goods;

    /**
     * GoodsRepository constructor.
     * @param Goods $goods
     */
    public function __construct(Goods $goods)
    {
        $this->goods = $goods;
    }

    /**
     * @param array $columns
     * @param array $condition
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all($columns = ['*'], $condition = [])
    {
        return $this->goods->all($columns);
    }

    /**
     * @param int $perPage
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function paginate($perPage = 10, $columns = ['*'])
    {
        return $this->goods->all($columns);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->goods->create($data);
    }

    /**
     * @param array $data
     * @param $id
     * @return bool
     */
    public function update(array $data, $id)
    {
        return $this->goods->update($data);

    }

    /**
     * @param $id
     * @param bool $softDelete
     * @return mixed
     */
    public function delete($id, $softDelete = true)
    {
        // 移入回收站
        if ($softDelete) {
            return $this->goods->find($id);
        }
    }

    /**
     * @param $id
     * @param array $columns
     */
    public function find($id, $columns = ['*'])
    {

    }

    /**
     * @param $field
     * @param $value
     * @param array $columns
     */
    public function findBy($field, $value, $columns = ['*'])
    {

    }

}