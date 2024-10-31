<?php

namespace App\Services;

use App\Models\Brand;
use Illuminate\Http\Request;

interface BrandServiceInterface
{
    public function getAllBrands();
    public function createBrand(Request $request);
    public function getBrandById($id);
    public function updateBrand(Request $request, $id);
    public function deleteBrand($id);
}