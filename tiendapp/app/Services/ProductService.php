<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductService implements ProductServiceInterface
{
    public function getAllProducts()
    {
        return Product::with('brand:id,name')->get()->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'unit' => $product->unit,
                'description' => $product->description,
                'boarding_date' => $product->boarding_date,
                'stock' => $product->stock,
                'created_at' => $product->created_at,
                'updated_at' => $product->updated_at,
                'brand' => $product->brand
            ];
        });
    }

    public function getProductById($id)
    {
        return Product::with('brand:id,name')->where('id', $id)->firstOrFail();
    }

    public function createProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'unit' => 'required|string|in:Unidad,Display,Caja|max:10',
            'description' => 'required|string',
            'boarding_date' => 'required|date',
            'stock' => 'required|integer|min:0',
            'brand_id' => 'required|exists:brands,id'
        ]);

        return Product::create($request->all());
    }

    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'unit' => 'required|string|in:Unidad,Display,Caja|max:7',
            'description' => 'required|string',
            'boarding_date' => 'required|date',
            'stock' => 'integer|min:0',
            'brand_id' => 'exists:brands,id'
        ]);

        $product = Product::where('id', $id)->firstOrFail();
        $product->update($request->all());

        return $product;
    }

    public function deleteProduct($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        $product->delete();

        return response()->json(null, 204);
    }
}