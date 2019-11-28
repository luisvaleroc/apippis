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

//URL::forceScheme('https');


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


//Store
Route::post('stores', 'StoreController@store')->name('stores.store')
->middleware('permission:stores.create');
Route::get('stores', 'StoreController@index')->name('stores.index')
->middleware('permission:stores.index');
Route::get('stores/create', 'StoreController@create')->name('stores.create')
->middleware('permission:stores.create');
Route::put('stores/{store}', 'StoreController@update')->name('stores.update')
->middleware('permission:stores.edit');
Route::get('stores/{store}', 'StoreController@show')->name('stores.show')
->middleware('permission:stores.show');
Route::delete('stores/{store}', 'StoreController@destroy')->name('stores.destroy')
->middleware('permission:stores.destroy');
Route::get('stores/{store}/edit', 'StoreController@edit')->name('stores.edit')
->middleware('permission:stores.edit');



Route::post('login', 'LogController@login');
//Route::post('logout', 'LogController@logout');

Route::post('register', 'LogController@register');
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('stores', 'StoreController@index')->name('stores.index')
    ->middleware('permission:stores.index');
    Route::get('details', 'LogController@details');
});