<?php

namespace App\Services;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandService implements BrandServiceInterface
{
    public function getAllBrands()
    {
        return Brand::all();
    }

    public function createBrand(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);
        
        return Brand::create($request->all());
    }

    public function getBrandById($id)
    {
        return Brand::where('id', $id)->firstOrFail();
    }

    public function updateBrand(Request $request, $id)
    {
        $request->validate([
            'name' => 'string|max:255',
        ]);

        $brand = Brand::where('id', $id)->firstOrFail();
        $brand->update($request->all());

        return $brand;
    }

    public function deleteBrand($id)
    {
        $brand = Brand::where('id', $id)->firstOrFail();
        $brand->delete();
    }
}