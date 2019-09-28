<?php


namespace App\Http\Repositories\Eloquent;


use App\Http\Repositories\Contract\ProductRepositoryInterface;
use App\Poduct;

class ProductEloquentRepository extends EloquentRepository implements ProductRepositoryInterface
{

    public function getModel()
    {
      return Poduct::class;
    }
}


