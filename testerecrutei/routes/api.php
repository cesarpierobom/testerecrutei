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

Route::apiResource("brand", "APIControllers\BrandController")
    ->middleware("auth:api");

Route::apiResource("user", "APIControllers\UserController")
    ->middleware("auth:api");

Route::apiResource("vehiclemodel", "APIControllers\VehicleModelController")
    ->middleware("auth:api");

Route::apiResource("vehicle", "APIControllers\VehicleController")
    ->middleware("auth:api");