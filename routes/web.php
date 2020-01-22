<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/roles', 'RoleController@index')->name('roles.index');

Route::middleware(['auth'])->group(function () {
	//Roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');
       
        Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');
	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');
	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');
	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');
	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');
	
		//Users

	Route::get('users', 'UserController@index')->name('users.index')
		->middleware('permission:users.index');
	Route::put('users/{user}', 'UserController@update')->name('users.update')
		->middleware('permission:users.edit');
	Route::get('users/{user}', 'UserController@show')->name('users.show')
		->middleware('permission:users.show');
	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');
	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');



	//Brands
	Route::post('brands/store', 'BrandController@store')->name('brands.store')
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


		//stores
	Route::post('stores/store', 'StoreController@store')->name('stores.store')
	->middleware('permission:stores.create');
	
Route::get('stores', 'StoreController@index')->name('stores.index')
	->middleware('permission:stores.index');
Route::get('stores/create', 'StoreController@create')->name('stores.create')
	->middleware('permission:stores.create');
Route::put('stores/{brand}', 'StoreController@update')->name('stores.update')
	->middleware('permission:stores.edit');
Route::get('stores/{brand}', 'StoreController@show')->name('stores.show')
	->middleware('permission:stores.show');
Route::delete('stores/{brand}', 'StoreController@destroy')->name('stores.destroy')
	->middleware('permission:stores.destroy');
Route::get('stores/{brand}/edit', 'StoreController@edit')->name('stores.edit')
	->middleware('permission:brands.edit');


	
		//solidwastes
		Route::post('stores/{store}/solidwastes/store', 'SolidwasteController@store')->name('solidwastes.store')
	->middleware('permission:solidwastes.create');


	Route::get('stores/{store}/solidwastes', 'SolidwasteController@index')->name('solidwastes.index')
		->middleware('permission:solidwastes.index');
	Route::get('stores/{store}/solidwastes/create', 'SolidwasteController@create')->name('solidwastes.create')
		->middleware('permission:solidwastes.create');
	Route::put('solidwastes/{brand}', 'SolidwasteController@update')->name('solidwastes.update')
		->middleware('permission:solidwastes.edit');
	Route::get('solidwastes/{brand}', 'SolidwasteController@show')->name('solidwastes.show')
		->middleware('permission:solidwastes.show');
	Route::delete('solidwastes/{solidwaste}', 'SolidwasteController@destroy')->name('solidwastes.destroy')
		->middleware('permission:solidwastes.destroy');
	Route::get('stores/{store}/solidwastes/{solidwaste}/edit', 'SolidwasteController@edit')->name('solidwastes.edit')
		->middleware('permission:brands.edit');
	



		//Employees
		Route::post('stores/{store}/employees/store', 'EmployeeController@store')->name('employees.store')
	->middleware('permission:employees.create');


	Route::get('stores/{store}/employees', 'EmployeeController@index')->name('employees.index')
		->middleware('permission:employees.index');
	Route::get('stores/{store}/employees/create', 'EmployeeController@create')->name('employees.create')
		->middleware('permission:employees.create');
	Route::put('employees/{employee}', 'EmployeeController@update')->name('employees.update')
		->middleware('permission:employees.edit');
	Route::get('employees/{brand}', 'EmployeeController@show')->name('employees.show')
		->middleware('permission:employees.show');
	Route::delete('employees/{employee}', 'EmployeeController@destroy')->name('employees.destroy')
		->middleware('permission:employees.destroy');
	Route::get('stores/{store}/employees/{employee}/edit', 'EmployeeController@edit')->name('employees.edit')
		->middleware('permission:brands.edit');




	//cleanings
		Route::post('stores/{store}/cleanings/store', 'CleaningController@store')->name('cleanings.store')
	->middleware('permission:cleanings.create');


	Route::get('stores/{store}/cleanings', 'CleaningController@index')->name('cleanings.index')
		->middleware('permission:cleanings.index');
	Route::get('stores/{store}/cleanings/create', 'CleaningController@create')->name('cleanings.create')
		->middleware('permission:cleanings.create');
	Route::put('cleanings/{cleaning}', 'CleaningController@update')->name('cleanings.update')
		->middleware('permission:cleanings.edit');
	Route::get('stores/{store}/cleanings/{cleaning}', 'CleaningController@show')->name('cleanings.show')
		->middleware('permission:cleanings.show');
	Route::delete('cleanings/{employee}', 'CleaningController@destroy')->name('cleanings.destroy')
		->middleware('permission:cleanings.destroy');
	Route::get('stores/{store}/cleanings/{employee}/edit', 'CleaningController@edit')->name('cleanings.edit')
		->middleware('permission:cleanings.edit');

		//rooms
		Route::post('stores/{store}/rooms/store', 'RoomController@store')->name('rooms.store')
	->middleware('permission:rooms.create');
	Route::get('stores/{store}/rooms', 'RoomController@index')->name('rooms.index')
		->middleware('permission:rooms.index');
	Route::get('stores/{store}/rooms/create', 'RoomController@create')->name('rooms.create')
		->middleware('permission:rooms.create');
	Route::put('rooms/{cleaning}', 'RoomController@update')->name('rooms.update')
		->middleware('permission:rooms.edit');
	Route::get('rooms/{cleaning}', 'RoomController@show')->name('rooms.show')
		->middleware('permission:rooms.show');
	Route::delete('rooms/{employee}', 'RoomController@destroy')->name('rooms.destroy')
		->middleware('permission:rooms.destroy');
	Route::get('stores/{store}/rooms/{employee}/edit', 'RoomController@edit')->name('rooms.edit')
		->middleware('permission:rooms.edit');
	


		//plants
		Route::post('stores/{store}/plants/store', 'PlantController@store')->name('plants.store')
	->middleware('permission:plants.create');
	Route::get('stores/{store}/plants', 'PlantController@index')->name('plants.index')
		->middleware('permission:plants.index');
	Route::get('stores/{store}/plants/create', 'PlantController@create')->name('plants.create')
		->middleware('permission:plants.create');
	Route::put('plants/{plant}', 'PlantController@update')->name('plants.update')
		->middleware('permission:plants.edit');
	Route::get('stores/{store}/plants/{plant}', 'PlantController@show')->name('plants.show')
		->middleware('permission:plants.show');
	Route::delete('plants/{plant}', 'PlantController@destroy')->name('plants.destroy')
		->middleware('permission:plants.destroy');
	Route::get('stores/{store}/plants/{plant}/edit', 'PlantController@edit')->name('plants.edit')
		->middleware('permission:plants.edit');
	
		Route::get('brands/{brand}/changed', 'UserController@AdminBrandChanged')->name('changebrand.edit')
		->middleware('permission:brands.index');
//Users brands stores

Route::get('brand/users', 'UserController@BrandUser')->name('brandusers.index')
->middleware('permission:brandusers.index');



Route::put('brand/users/{user}', 'UserController@brandUserUpdate')->name('brandusers.update')
->middleware('permission:brandusers.update');

Route::get('brand/users/{user}/edit', 'UserController@brandUserEdit')->name('brandusers.edit')
->middleware('permission:brandusers.edit');

Route::post('brand/users/store', 'UserController@brandUserStore')->name('brandusers.store')
->middleware('permission:brandusers.store');



Route::get('brand/users/create', 'UserController@brandUserCreate')->name('brandusers.create')
->middleware('permission:brandusers.create');
Route::get('brand/users/{user}', 'UserController@brandUsershow')->name('brandusers.show')
		->middleware('permission:brandusers.show');



// Route::get('store/users/{user}', 'UserController@BrandUser')->name('Storebrand.index')
// ->middleware('permission:StoreBrand.index');

// Route::get('store/users/{user}/store', 'UserController@BrandUserUpdate')->name('brandusers.update')
// ->middleware('permission:brandusers.update');



// Route::get('store/users/{user}', 'UserController@BrandUser')->name('Storebrand.index')
// ->middleware('permission:StoreBrand.index');



	

});


    
