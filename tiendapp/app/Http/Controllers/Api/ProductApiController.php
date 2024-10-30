<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index()
    {
        return Product::with('brand:id,name')->get()->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'unit' => $product->unit,
                'description' => $product->description,
                'stock' => $product->stock,
                'created_at' => $product->created_at,
                'updated_at' => $product->updated_at,
                'brand' => $product->brand
            ];
        });
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'unit' => 'required|string|in:Unidad,Display,Caja|max:7',
            'description' => 'nullable|string',
            'stock' => 'required|integer|min:0',
            'shipment_date' => 'nullable|date',
            'brand_id' => 'required|exists:brands,id'
        ]);

        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    public function show($id)
    {
        $product = Product::with('brand')->where('id', $id)->firstOrFail();
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'string|max:255',
            'unit' => 'string|in:Unidad,Display,Caja|max:7',
            'description' => 'nullable|string',
            'stock' => 'integer|min:0',
            'shipment_date' => 'nullable|date',
            'brand_id' => 'exists:brands,id'
        ]);

        $product = Product::where('id', $id)->firstOrFail();
        $product->update($request->all());

        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        $product->delete();

        return response()->json(null, 204);
    }
}