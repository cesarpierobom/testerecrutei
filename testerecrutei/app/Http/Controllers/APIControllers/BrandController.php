<?php

namespace App\Http\Controllers\APIControllers;

use App\Models\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Brand\ListBrands;
use App\Http\Requests\Brand\StoreBrand;
use App\Http\Requests\Brand\ShowBrand;
use App\Http\Requests\Brand\UpdateBrand;
use App\Http\Requests\Brand\DestroyBrand;
use App\Http\Resources\Brand\BrandResource;
use App\Http\Resources\Brand\BrandCollection;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \App\Http\Requests\Brand\ListBrands  $request
     * @return \Illuminate\Http\Response
     * 
     * @OA\Get(
     *   path="/brand",
     *   summary="list brands",
     *   @OA\Response(
     *     response=200,
     *     description="A list with brands"
     *   ),
     *   @OA\Response(
     *     response="401",
     *     description="You must be logged in to view this resource"
     *   ),
     *   @OA\Response(
     *     response="403",
     *     description="You don't have permission to view this resource"
     *   )
     * )
     */
    public function index(ListBrands $request)
    {
        return (new BrandCollection(Brand::all()))
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Brand\StoreBrand  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrand $request)
    {
        $brand = Brand::create($request->all());

        return (new BrandResource($brand))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @param  \App\Http\Requests\Brand\ShowBrand  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand, ShowBrand $request)
    {
        return (new BrandResource($brand))
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Brand\UpdateBrand  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrand $request, Brand $brand)
    {
        $brand->update($request->all());

        return response()
            ->setStatusCode(204);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @param  \App\Http\Requests\Brand\DestroyBrand  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand, DestroyBrand $request)
    {
        $brand->delete();

        return response()
            ->setStatusCode(204);
    }
}
