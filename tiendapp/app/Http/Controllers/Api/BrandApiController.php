<?php

namespace App\Http\Controllers\Api;

use App\Models\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandApiController extends Controller
{
    public function index()
    {
        return Brand::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $brand = Brand::create($request->all());

        return response()->json($brand, 201);
    }

    public function show($id)
    {
        $brand = Brand::where('id', $id)->firstOrFail();
        return response()->json($brand);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'string|max:255',
        ]);

        $brand = Brand::where('id', $id)->firstOrFail();
        $brand->update($request->all());

        return response()->json($brand);
    }

    public function destroy($id)
    {
        $brand = Brand::where('id', $id)->firstOrFail();
        $brand->delete();

        return response()->json(null, 204);
    }
}