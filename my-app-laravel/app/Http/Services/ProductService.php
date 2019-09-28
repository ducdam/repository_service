<?php


namespace App\Http\Services;


use App\Http\Repositories\Contract\ProductRepositoryInterface;
use App\Poduct;

class ProductService implements ProductServiceInteface
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAll()
    {
        return $this->productRepository->getAll();
    }

    public function store($request)
    {
        $product = new Poduct();
        $product->name = $request->name;
        $product->amount = $request->amount;
        $product->price = $request->price;
        $this->productRepository->save($product);
    }

    public function show($id)
    {
        return $this->productRepository->find($id);
    }

    public function update($request, $id)
    {
        $product = $this->productRepository->find($id);
        $product->name = $request->name;
        $product->amount = $request->amount;
        $product->price = $request->price;
        $this->productRepository->save($product);
    }

    public function delete($id)
    {
         $this->productRepository->destroy($id);
    }
}
