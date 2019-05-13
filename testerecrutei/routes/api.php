<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware("auth:api")->get(
    "/user", function (Request $request) {
        return $request->user();
    }
);


Route::get("/brand", "APIControllers\BrandController@index")
    ->middleware("auth:api", "scope:brand-list")->name("brand.index");

Route::post("/brand", "APIControllers\BrandController@store")
    ->middleware("auth:api", "scope:brand-store")->name("brand.store");

Route::get("/brand/{brand}", "APIControllers\BrandController@show")
    ->middleware("auth:api", "scope:brand-show")->name("brand.show");

Route::put("/brand/{brand}", "APIControllers\BrandController@update")
    ->middleware("auth:api", "scope:brand-update")->name("brand.update");

Route::patch("/brand/{brand}", "APIControllers\BrandController@update")
    ->middleware("auth:api", "scope:brand-update")->name("brand.update");

Route::delete("/brand", "APIControllers\BrandController@destroy")
    ->middleware("auth:api", "scope:brand-destroy")->name("brand.destroy");




Route::apiResource("user", "APIControllers\UserController")
    ->middleware("auth:api");

Route::apiResource("vehiclemodel", "APIControllers\VehicleModelController")
    ->middleware("auth:api");

Route::apiResource("vehicle", "APIControllers\VehicleController")
    ->middleware("scope:vehicle-list");