<?php

namespace App\Repositories;

interface Repositoriesinterface
{
    public function getAll();
    public function find(int $id);
    public function create(array $data);
    public function update( array $data,$id);
    public function delete($id);
}
