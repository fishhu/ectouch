<?php

namespace App\Repositories;

use App\Contracts\Repositories\UserRepositoryInterface;

/**
 * Class UserRepository
 * @package App\Repositories
 */
class UserRepository implements UserRepositoryInterface
{
    public function all($columns = ['*'])
    {

    }

    public function paginate($perPage = 10, $columns = ['*'])
    {

    }

    public function create(array $data)
    {

    }

    public function update(array $data, $id)
    {

    }

    public function delete($id)
    {

    }

    public function find($id, $columns = ['*'])
    {

    }

    public function findBy($field, $value, $columns = ['*'])
    {

    }
}