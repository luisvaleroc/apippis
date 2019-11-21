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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Brands
Route::post('brands', 'BrandController@store')->name('brands.store')
->middleware('permission:brands.create');
Route::get('brands', 'BrandController@index')->name('brands.index')
->middleware('permission:brands.index');
Route::get('brands/create', 'BrandController@create')->name('brands.create')
->middleware('permission:brands.create');
Route::put('brands/{brand}', 'BrandController@update')->name('brands.update')
->middleware('permission:brands.edit');
Route::get('brands/{brand}', 'BrandController@show')->name('brands.show')
->middleware('permission:brands.show');
Route::delete('brands/{brand}', 'BrandController@destroy')->name('brands.destroy')
->middleware('permission:brands.destroy');
Route::get('brands/{brand}/edit', 'BrandController@edit')->name('brands.edit')
->middleware('permission:brands.edit');