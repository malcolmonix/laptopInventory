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
    if(Auth::User()){
        return redirect('/dashboard');
    } else {
        return view('auth.login');
    }
});

Auth::routes();

//Route::get('/dashboard', 'DashboardPagesController@index');
//Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

//Route::get('/', 'DashboardPagesController@index');

Route::get('home', 'HomeController@index');

Route::get('users/assign', 'UserController@assignIndex');
Route::get('users/assign/create', 'UserController@Assigncreate');
Route::get('users/assign/edit', 'UserController@editRole');
Route::post('users/assign/update', 'UserController@updateRole');
Route::get('download/{id}', 'InventoryHistoryController@download');

Route::get('inventory_histories/edit', 'InventoryHistoryController@edit');
Route::post('inventory/update', 'InventoryHistoryController@update');


Route::get('inventory_histories/action', 'InventoryHistoryController@action')->name('inventory_histories.action');
Route::get('equipment/search', 'EquipmentController@search')->name('equipment.search');
Route::get('inventoryHistories/fetch_data', 'InventoryHistoryController@fetch_data');
Route::get('employees/fetch_data', 'EmployeeController@fetch_data');
Route::get('equipment/fetch_data', 'EquipmentController@fetch_data');

route::resource('dashboard','DashboardPagesController')->middleware('checkofficer');

Route::resource('users', 'UserController')->middleware('checkmanager');

Route::resource('employees', 'EmployeeController')->middleware('checkofficer');

Route::resource('equipment', 'EquipmentController')->middleware('checkofficer');

Route::resource('equipmentTypes', 'EquipmentTypeController')->middleware('checkofficer');

Route::resource('projects', 'ProjectController')->middleware('checkmanager');

Route::resource('situations', 'SituationController')->middleware('checkadmin');

Route::resource('inventoryHistories', 'InventoryHistoryController')->middleware('checkofficer');

Route::resource('roles', 'RoleController')->middleware('checkadmin');

Route::resource('brands', 'BrandController')->middleware('checkadmin');