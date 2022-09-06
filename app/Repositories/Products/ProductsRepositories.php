<?php

namespace App\Repositories\Products;

use App\Models\productsModel;
use App\Repositories\BaseRepositories;

class ProductsRepositories extends BaseRepositories implements ProductsRepositoriesinterface
{

    public function getModel()
    {
        return productsModel::class;
    }
}
