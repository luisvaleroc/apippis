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
	// Brands
	// Route::post('brands/store', 'BrandController@store')->name('brands.store')
	// 	->middleware('permission:brands.create');
	// Route::get('brands', 'BrandController@index')->name('brands.index')
	// 	->middleware('permission:brands.index');
	// Route::get('brands/create', 'BrandController@create')->name('brands.create')
	// 	->middleware('permission:brands.create');
	// Route::put('brands/{brand}', 'BrandController@update')->name('brands.update')
	// 	->middleware('permission:brands.edit');
	// Route::get('brands/{brand}', 'BrandController@show')->name('brands.show')
	// 	->middleware('permission:brands.show');
	// Route::delete('brands/{brand}', 'BrandController@destroy')->name('brands.destroy')
	// 	->middleware('permission:brands.destroy');
	// Route::get('brands/{brand}/edit', 'BrandController@edit')->name('brands.edit')
	// 	->middleware('permission:brands.edit');
	
	// Contacts
	// Route::post('contacts/store', 'contactController@store')->name('contacts.store')
	// 	->middleware('permission:contacts.create');
	// Route::get('contacts', 'contactController@index')->name('contacts.index')
	// 	->middleware('permission:contacts.index');
	// Route::get('contacts/create', 'contactController@create')->name('contacts.create')
	// 	->middleware('permission:contacts.create');
	// Route::put('contacts/{contact}', 'contactController@update')->name('contacts.update')
	// 	->middleware('permission:contacts.edit');
	// Route::get('contacts/{contact}', 'contactController@show')->name('contacts.show')
	// 	->middleware('permission:contacts.show');
	// Route::delete('contacts/{contact}', 'contactController@destroy')->name('contacts.destroy')
	// 	->middleware('permission:contacts.destroy');
	// Route::get('contacts/{contact}/edit', 'contactController@edit')->name('contacts.edit')
	// 	->middleware('permission:contacts.edit');


	// Answer
	// Route::post('answers/store', 'AnswerController@store')->name('answers.store')
	// 	->middleware('permission:answers.create');
	// Route::get('answers', 'AnswerController@index')->name('answers.index')
	// 	->middleware('permission:answers.index');
	// Route::get('answers/create', 'AnswerController@create')->name('answers.create')
	// 	->middleware('permission:answers.create');
	// Route::put('answers/{answer}', 'AnswerController@update')->name('answers.update')
	// 	->middleware('permission:answers.edit');
	// Route::get('answers/{answer}', 'AnswerController@show')->name('answers.show')
	// 	->middleware('permission:answers.show');
	// Route::delete('answers/{answer}', 'AnswerController@destroy')->name('answers.destroy')
	// 	->middleware('permission:answers.destroy');
	// Route::get('answers/{answer}/edit', 'AnswerController@edit')->name('answers.edit')
	// 	->middleware('permission:answers.edit');
});