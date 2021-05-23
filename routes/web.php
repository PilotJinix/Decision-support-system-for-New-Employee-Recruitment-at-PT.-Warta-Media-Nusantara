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

Route::get('/', 'Auth\LoginController@index')->name('index');
Route::post("auten", 'Auth\LoginController@authenticate')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('dashboard', 'DashboardController@index' )->name('dashboard');
Route::post('dashboard/create-periode', 'DashboardController@periode')->name('create-periode');
Route::post("dashboard/editpenerimaan/{id}", "DashboardController@editperiode")->name("edit-penerimaan");
Route::get("dashboard/deleteperiode/{id}", "DashboardController@deleteperiode")->name("deleteperiode");
