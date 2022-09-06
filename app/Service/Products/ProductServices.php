<?php

namespace App\Service\Products;

use App\Repositories\Products\ProductsRepositoriesinterface;
use App\Service\BaseServices;


class ProductServices extends BaseServices implements ProductServicesInterface
{
    public $repository;
    public function __construct(ProductsRepositoriesinterface $productsRepositoriesinterface)
    {
        $this->repository=$productsRepositoriesinterface;
    }
}
