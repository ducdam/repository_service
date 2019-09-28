<?php

namespace App\Providers;

use App\Http\Repositories\Contract\ProductRepositoryInterface;
use App\Http\Repositories\Contract\RepositoryInterface;
use App\Http\Repositories\Eloquent\EloquentRepository;
use App\Http\Repositories\Eloquent\ProductEloquentRepository;
use App\Http\Services\ProductService;
use App\Http\Services\ProductServiceInteface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RepositoryInterface::class,
            EloquentRepository::class);
        $this->app->singleton(ProductRepositoryInterface::class,
            ProductEloquentRepository::class);
        $this->app->singleton(ProductServiceInteface::class,
            ProductService::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
