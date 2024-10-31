<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;

interface ProductServiceInterface
{
    public function getAllProducts();
    public function getProductById($id);
    public function createProduct(Request $request);
    public function updateProduct(Request $request, $id);
    public function deleteProduct($id);
}