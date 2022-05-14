<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\ProductController@index');
Route::get('/add-product', 'App\Http\Controllers\ProductController@create');
Route::post('/add-product', 'App\Http\Controllers\ProductController@product');
Route::get('/edit-product/{product}', 'App\Http\Controllers\ProductController@edit');
Route::put('/edit-product/{product}', 'App\Http\Controllers\ProductController@update');
Route::get('/search', 'App\Http\Controllers\ProductController@search');

Route::get('/category', 'App\Http\Controllers\CategoryController@index');
Route::get('/add-category', 'App\Http\Controllers\CategoryController@create');
Route::post('/add-category', 'App\Http\Controllers\CategoryController@product');
Route::get('/edit-category/{category}', 'App\Http\Controllers\CategoryController@edit');
Route::put('/edit-category/{category}', 'App\Http\Controllers\CategoryController@update');

Route::get('/home', function () {
    return view('home');
});
