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


Route::get('login-view', 'Auth\LoginController@index')->middleware('guest')->name('login-view');
Route::post('logout', 'Auth\LoginController@logout')->middleware('auth')->name('logout');
Route::post('login', 'Auth\LoginController@login')->middleware('guest')->name('login');

Route::get('register-view', 'Auth\RegisterController@index')->middleware(['auth', 'RoleMiddleware'])->name('register-view');
Route::post('register', 'Auth\RegisterController@create')->middleware(['auth', 'RoleMiddleware'])->name('register');


Route::group(['prefix' => 'dashboard', 'namespace' => 'Site', 'middleware' => ['auth']], function(){
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::group(['prefix' => 'employees', 'middleware' => ['auth', 'RoleMiddleware']], function(){
        Route::get('/', 'EmplyeesController@index')->name('employee.index');
        Route::get('/create', 'EmplyeesController@create')->name('employee.create');
        Route::get('{id}/edit', 'EmplyeesController@edit')->name('employee.edit');
        Route::post('/', 'EmplyeesController@store')->name('employee.store');
        Route::post('/update', 'EmplyeesController@update')->name('employee.update');
        Route::post('/{id}', 'EmplyeesController@destroy')->name('employee.delete');
    });

});
