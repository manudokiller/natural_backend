<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MixtureController;
use App\Http\Controllers\MixtureTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\TipController;

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

Route::apiResource('diseases', DiseaseController::class)->only(['index', 'show']);
Route::apiResource('icons', IconController::class)->only(['index', 'show']);
Route::apiResource('images', ImageController::class)->only(['index', 'show']);
Route::apiResource('mixtures', MixtureController::class)->only(['index', 'show']);
Route::apiResource('mixture_types', MixtureTypeController::class)->only(['index', 'show']);
Route::apiResource('products', ProductController::class)->only(['index', 'show']);
Route::apiResource('product_types', ProductTypeController::class)->only(['index', 'show']);
Route::apiResource('tips', TipController::class)->only(['index', 'show']);
