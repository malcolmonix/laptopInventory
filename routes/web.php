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
    return view('auth.login');
});

Auth::routes();

//Route::get('/dashboard', 'DashboardPagesController@index');
//Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

//Route::get('/', 'DashboardPagesController@index');

Route::get('home', 'HomeController@index');

route::resource('dashboard','DashboardPagesController');

Route::resource('users', 'UserController');

Route::resource('employees', 'EmployeeController');

Route::resource('equipment', 'EquipmentController');

Route::resource('equipmentTypes', 'EquipmentTypeController');

Route::resource('projects', 'ProjectController');

Route::resource('situations', 'SituationController');

Route::resource('inventoryHistories', 'InventoryHistoryController');

Route::resource('projects', 'ProjectController');