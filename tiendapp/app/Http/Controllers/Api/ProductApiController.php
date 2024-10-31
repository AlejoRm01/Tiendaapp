<?php

namespace App\Http\Controllers\Api;

use App\Services\ProductServiceInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    protected $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return $this->productService->getAllProducts();
    }

    public function store(Request $request)
    {
        return response()->json($this->productService->createProduct($request), 201);
    }

    public function show($id)
    {
        return response()->json($this->productService->getProductById($id));
    }

    public function update(Request $request, $id)
    {
        return response()->json($this->productService->updateProduct($request, $id));
    }

    public function destroy($id)
    {
        return $this->productService->deleteProduct($id);
    }
}