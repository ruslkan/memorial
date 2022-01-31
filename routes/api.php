<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('categories', CategoryController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('materials', MaterialController::class);
Route::apiResource('stellas', StellaController::class);
Route::apiResource('pillars', PillarController::class);
Route::apiResource('pedestals', PedestalController::class);
Route::apiResource('parterres', ParterreController::class);
Route::apiResource('tombstones', TombstoneController::class);
Route::apiResource('services', ServiceController::class);
Route::apiResource('accessoryCategories', AccessoryCategoryController::class);
Route::apiResource('accessories', AccessoryController::class);
