<?php

namespace App\Http\Controllers\Api;

use App\Services\BrandServiceInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandApiController extends Controller
{
    protected $brandService;

    public function __construct(BrandServiceInterface $brandService)
    {
        $this->brandService = $brandService;
    }

    public function index()
    {
        return $this->brandService->getAllBrands();
    }

    public function store(Request $request)
    {
        $brand = $this->brandService->createBrand($request);
        return response()->json($brand, 201);
    }

    public function show($id)
    {
        $brand = $this->brandService->getBrandById($id);
        return response()->json($brand);
    }

    public function update(Request $request, $id)
    {
        $brand = $this->brandService->updateBrand($request, $id);
        return response()->json($brand);
    }

    public function destroy($id)
    {
        $this->brandService->deleteBrand($id);
        return response()->json(null, 204);
    }
}