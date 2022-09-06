<?php

namespace App\Service;

class BaseServices implements ServicesInterface
{
    public $repository;

    public function getAll()
    {
       return $this->repository->getAll();
    }

    public function find(int $id)
    {
        return $this->repository->find($id);
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->repository->update($data,$id);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
