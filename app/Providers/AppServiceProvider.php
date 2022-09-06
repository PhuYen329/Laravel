<?php

namespace App\Providers;

// use Illuminate\Contracts\Pagination\Paginator;
use App\Repositories\Products\ProductsRepositories;
use App\Repositories\Products\ProductsRepositoriesinterface;
use App\Service\Products\ProductServices;
use App\Service\Products\ProductServicesInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Product
        $this->app->singleton(
            ProductsRepositoriesinterface::class,
            ProductsRepositories::class,
        );
        $this->app->singleton(
            ProductServicesInterface::class,
            ProductServices::class,
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
