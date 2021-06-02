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


Route::get('/', 'Admin\Auth\LoginController@index')->name('index');
Route::post("auten", 'Admin\Auth\LoginController@authenticate')->name('login');
Route::get('logout', 'Admin\Auth\LoginController@logout')->name('logout');

Route::get('dashboard', 'Admin\DashboardController@index' )->name('dashboard');
Route::post('dashboard/create-periode', 'Admin\DashboardController@periode')->name('create-periode');
Route::post("dashboard/editpenerimaan/{id}", "Admin\DashboardController@editperiode")->name("edit-penerimaan");
Route::get("dashboard/deleteperiode/{id}", "Admin\DashboardController@deleteperiode")->name("deleteperiode");

Route::get('calonpenerima', 'Admin\CalonPenerimaController@index' )->name('calonpenerima');

Route::get('kriteria-benefit', 'Admin\BenefitController@index' )->name('benefit');
Route::post('kriteria-benefit/create-benefit', 'Admin\BenefitController@benefit')->name('create-benefit');
Route::post('kriteria-benefit/editbenefit/{id}', 'Admin\BenefitController@editbenefit')->name('edit-benefit');
Route::get("kriteria-benefit/deletebenefit/{id}", "Admin\BenefitController@deletebenefit")->name("deletebenefit");

Route::get('kriteria-bobot', 'Admin\BobotController@index' )->name('bobot');
Route::post('kriteria-bobot/create-bobot', 'Admin\BobotController@bobot')->name('create-bobot');
Route::post('kriteria-bobot/editbobot/{id}', 'Admin\BobotController@editbobot')->name('edit-bobot');
Route::get("kriteria-bobot/deletebobot/{id}", "Admin\BobotController@deletebobot")->name("deletebobot");
