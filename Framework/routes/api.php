<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\JsonAdminController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [JsonController::class, 'Load']);
Route::get('/cat', [JsonController::class, 'NewsCategories']);
Route::get('/cat/{id}', [JsonController::class, 'NewsCategories']);

Route::get('/parent', [JsonController::class, 'CatParent']);
Route::post('/cat', [JsonController::class, 'CatStore']);

Route::post('city', [JsonController::class, 'City']);
Route::get('get-url/{id}/{slug}', [JsonController::class, 'GetUrl']);

Route::post('/create/news', [JsonController::class, 'CreateNews']);

Route::get('/get-promo/all' , [JsonController::class, 'GetPromoAll']);
Route::get('/get-city', [JsonController::class, 'getCity']);
Route::get('/get-categories', [JsonController::class, 'getCategories']);

Route::post('search' , [JsonController::class, 'Search']);

//Admin

Route::get('/admin/get-news', [JsonAdminController::class, 'GetNews']);
Route::get('/admin/get-promo', [JsonAdminController::class, 'GetPromo']);
Route::get('/admin/get-program', [JsonAdminController::class, 'GetProgram']);
Route::get('/admin/get-info-all', [JsonAdminController::class, 'GetInfoAll']);
Route::get('/admin/get-dashboard' , [JsonController::class, 'getDashboard']);





