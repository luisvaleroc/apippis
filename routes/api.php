<?php

use Illuminate\Http\Request;
use App\Solidwaste;
use App\Store;



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
Route::get('brands', 'BrandController@index');
Route::delete('brands/{id}', 'BrandController@destroy');

 Route::post('brands', 'BrandController@store')->name('brands.store');

//solid wastes
Route::post('solidwastes/store/{store}', 'SolidwasteController@store')->name('solidwastes.solidwaste')
;
Route::get('solidwastes/store/{id}', 'SolidwasteController@index')->name('solidwastes.index')
;
Route::get('solidwastes/create', 'SolidwasteController@create')->name('solidwastes.create')
;
Route::put('solidwastes/{solidwaste}', 'SolidwasteController@update')->name('solidwastes.update')
;
Route::get('solidwastes/{solidwaste}', 'SolidwasteController@show')->name('solidwastes.show')
;
Route::delete('solidwastes/{solidwaste}', 'SolidwasteController@destroy')->name('solidwastes.destroy')
;
Route::get('solidwastes/{solidwaste}/edit', 'SolidwasteController@edit')->name('solidwastes.edit')
;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Brands
// Route::post('brands', 'BrandController@store')->name('brands.store')
// ->middleware('permission:brands.create');
// Route::get('brands', 'BrandController@index')->name('brands.index')
// ->middleware('permission:brands.index');
// Route::get('brands/create', 'BrandController@create')->name('brands.create')
// ->middleware('permission:brands.create');
// Route::put('brands/{brand}', 'BrandController@update')->name('brands.update')
// ->middleware('permission:brands.edit');
// Route::get('brands/{brand}', 'BrandController@show')->name('brands.show')
// ->middleware('permission:brands.show');
// Route::delete('brands/{brand}', 'BrandController@destroy')->name('brands.destroy')
// ->middleware('permission:brands.destroy');
// Route::get('brands/{brand}/edit', 'BrandController@edit')->name('brands.edit')
// ->middleware('permission:brands.edit');


// //Store
// Route::post('stores', 'StoreController@store')->name('stores.store')
// ->middleware('permission:stores.create');
// Route::get('stores', 'StoreController@index')->name('stores.index')
// ->middleware('permission:stores.index');
// Route::get('stores/create', 'StoreController@create')->name('stores.create')
// ->middleware('permission:stores.create');
// Route::put('stores/{store}', 'StoreController@update')->name('stores.update')
// ->middleware('permission:stores.edit');
// Route::get('stores/{store}', 'StoreController@show')->name('stores.show')
// ->middleware('permission:stores.show');
// Route::delete('stores/{store}', 'StoreController@destroy')->name('stores.destroy')
// ->middleware('permission:stores.destroy');
// Route::get('stores/{store}/edit', 'StoreController@edit')->name('stores.edit')
// ->middleware('permission:stores.edit');

// //solid wastes
// Route::post('solidwastes', 'SolidwasteController@solidwaste')->name('solidwastes.solidwaste')
// ->middleware('permission:solidwastes.create');
// Route::get('solidwastes/store/{id}', 'SolidwasteController@index')->name('solidwastes.index')
// ->middleware('permission:solidwastes.index');
// Route::get('solidwastes/create', 'SolidwasteController@create')->name('solidwastes.create')
// ->middleware('permission:solidwastes.create');
// Route::put('solidwastes/{solidwaste}', 'SolidwasteController@update')->name('solidwastes.update')
// ->middleware('permission:solidwastes.edit');
// Route::get('solidwastes/{solidwaste}', 'SolidwasteController@show')->name('solidwastes.show')
// ->middleware('permission:solidwastes.show');
// Route::delete('solidwastes/{solidwaste}', 'SolidwasteController@destroy')->name('solidwastes.destroy')
// ->middleware('permission:solidwastes.destroy');
// Route::get('solidwastes/{solidwaste}/edit', 'SolidwasteController@edit')->name('solidwastes.edit')
// ->middleware('permission:solidwastes.edit');












Route::post('login', 'LogController@login');
//Route::post('logout', 'LogController@logout');

Route::post('register', 'LogController@register');
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('stores', 'StoreController@index')->name('stores.index')
    ->middleware('permission:stores.index');
    Route::get('details', 'LogController@details');
});




Route::post('solidwastes', 'SolidwasteController@datasolidwastes')->name('solidwastes.solidwaste')
;



    
Route::get('stores/{id}/solidwastes', function ($id){
  
    $store = Store::find($id);
    $solidwastes= $store->solidwaste();


	return datatables()
    ->eloquent($store->solidwaste())  
      		->addColumn('btn', 'solidwastes.actions')
        ->rawColumns(['btn'])
->editColumn('storeid', function ($solidwastes) {
    return $solidwastes->store->id;
    
})

->editColumn('storeid', function ($solidwaste){
    return $solidwastes->store->id;
})
        ->editColumn('created_at', function ($contact){
            return date('d/m/y H:i', strtotime($contact->created_at) );
        })
        ->filterColumn('created_at', function ($query, $keyword) {
            $query->whereRaw("DATE_FORMAT(created_at,'%d/%m/%y %H:%i') like ?", ["%$keyword%"]);
        })
		->toJson();
});
