<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
Route::get('/product/{product}',[Controllers\ProductController::class, 'getOne']);
Route::get('/',[Controllers\BaseController::class, 'getIndex']);

Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::resource('/catalog', App\Http\Controllers\CatalogController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'postIndex']);
Route::get('/home/product/{product}/delete', [Controllers\HomeController::class, 'getDelete']);
Route::get('{url}', [Controllers\MaintextController::class, 'getIndex']);// этот всегда последний маршрут все остальные писать перед ним



