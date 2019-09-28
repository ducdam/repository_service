<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductServiceInteface;
use App\Poduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductServiceInteface $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAll();
//        dd($products);
       return response()->json($products);
    }

    public function store(Request $request)
    {
        $product = $this->productService->store($request);
        return response()->json($product);
    }

    public function show($id)
    {
        $product = $this->productService->show($id);
//        dd($product);
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $product = $this->productService->update($request,$id);
        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = $this->productService->delete($id);
        return response()->json($product);
    }
}
