<?php

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

//Route::get('/', function () {
//    return view('dashboard');
//});

Route::get('/', 'Admin\Auth\LoginController@index')->name('index');
Route::post("auten", 'Admin\Auth\LoginController@authenticate')->name('login');
Route::get('logout', 'Admin\Auth\LoginController@logout')->name('logout');

Route::get('dashboard', 'Admin\DashboardController@index' )->name('dashboard');
Route::post('dashboard/create-periode', 'Admin\DashboardController@periode')->name('create-periode');
Route::post("dashboard/editpenerimaan/{id}", "Admin\DashboardController@editperiode")->name("edit-penerimaan");
Route::get("dashboard/deleteperiode/{id}", "Admin\DashboardController@deleteperiode")->name("deleteperiode");
