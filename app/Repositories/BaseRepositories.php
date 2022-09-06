<?php

namespace App\Repositories;


abstract class BaseRepositories implements Repositoriesinterface
{
    protected $model;

    public function __construct()
    {
        $this->model=app()->make($this->getModel());
    }
    abstract public function getModel();
    public function getAll()
    {
        return $this->model->all();
    }

    public function find(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $result = $this->model->find($id);
        return $result->update($data);
    }

    public function delete($id)
    {
        $result = $this->model->find($id);
        return $result->delete();
    }
}
