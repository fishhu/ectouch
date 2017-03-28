<?php

namespace App\Repositories;

use App\Models\Goods;

class GoodsRepository
{

    protected $goods;

    /**
     * GoodsRepository constructor.
     * @param $goods
     */
    public function __construct(Goods $goods)
    {
        $this->goods = $goods;
    }

    /**
     * return all
     */
    public function all()
    {
        return $this->goods->all();
    }

    /**
     * create record
     */
    public function store($data, $id)
    {
        return $this->goods->find($id);
    }

    /**
     * return one
     */
    public function show($id)
    {
        $goods = $this->goods->find($id);

        return $goods;
    }

    /**
     * update record
     */
    public function update($id)
    {
        $goods = $this->goods->find($id);
    }

    /**
     * delete record
     * @param bool $softDelete
     */
    public function destroy($id, $softDelete = true)
    {
        // 移入回收站
        if ($softDelete) {
            return $this->goods->find($id);
        }

    }
}
