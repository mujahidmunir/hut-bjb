<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\DashboardConroller;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExportDataController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', [\App\Http\Controllers\TestController::class,  'test']);
Route::get('/', [PageController::class, 'Index']);
Route::get('/slider', [PageController::class, 'slider']);

Route::get('/news', [PageController::class, 'News']);
Route::get('/news/{slug}', [PageController::class, 'DetailNew']);

Route::get('/events', [PageController::class, 'AllEvents']);
Route::get('/events/{slug}', [PageController::class, 'DetailEvent']);
Route::get('/profile',  [UserController::class, 'Index']);
Route::post('/profile',  [UserController::class, 'ChangePassword']);

Route::get('promo-bank-bjb', [PromoController::class, 'PromoAll']);
Route::get('promo-bank-bjb/search', [PromoController::class], 'Search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:web'], function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/', [DashboardConroller::class, 'Index']);
        Route::get('/news', [NewsController::class, 'Index']);
        Route::get('/news/create', [NewsController::class, 'Create']);
        Route::post('/news/create', [NewsController::class, 'Store']);
        Route::post('/news/create/{id}', [NewsController::class, 'Update']);

        //program
        Route::get('/program/create', [PromoController::class, 'Create']);
        Route::get('/program/view/all', [PromoController::class, 'ViewAll']);


        //Route Upload Content
        Route::get('/upload', [ExportDataController::class, 'Upload']);
        Route::post('/upload', [ExportDataController::class, 'Import']);



    });
});

