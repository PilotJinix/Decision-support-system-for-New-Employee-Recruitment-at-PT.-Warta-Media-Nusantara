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


Route::get('/', 'Auth\LoginController@index')->name('index');
Route::get('register', 'Auth\LoginController@register')->name('register');
Route::post("auten", 'Auth\LoginController@authenticate')->name('login');
Route::post("create-register", 'Auth\LoginController@registercreate')->name('create-register');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::group(["middleware" => ["auth", "Level:admin"]], function (){
    Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::post('dashboard/create-periode', 'Admin\DashboardController@periode')->name('create-periode');
    Route::post("dashboard/editpenerimaan/{id}", "Admin\DashboardController@editperiode")->name("edit-penerimaan");
    Route::get("dashboard/deleteperiode/{id}", "Admin\DashboardController@deleteperiode")->name("deleteperiode");

    Route::get('calonpenerima', 'Admin\CalonPenerimaController@index' )->name('calonpenerima');
    Route::post('calonpenerima/create-calonpenerima', 'Admin\CalonPenerimaController@calonPenerima')->name('create-calonpenerima');
    Route::post("calonpenerima/editcalonpenerima/{id}", "Admin\CalonPenerimaController@editcalonPenerima")->name("edit-calonPenerima");

    Route::get('kriteria-benefit', 'Admin\BenefitController@index' )->name('benefit');
    Route::post('kriteria-benefit/create-benefit', 'Admin\BenefitController@benefit')->name('create-benefit');
    Route::post('kriteria-benefit/editbenefit/{id}', 'Admin\BenefitController@editbenefit')->name('edit-benefit');
    Route::get("kriteria-benefit/deletebenefit/{id}", "Admin\BenefitController@deletebenefit")->name("deletebenefit");

    Route::get('tabel-normalisasi', 'Admin\SAwController@view_normalisasi' )->name('tabel-normalisasi');

    Route::get('tabel-ranking', 'Admin\RankingController@ranking' )->name('tabel-ranking');

});

Route::group(["middleware" => ["auth", "Level:user"]], function (){
    Route::get('dashboard-mahasiswa', 'Mahasiswa\DashboardController@index' )->name('dashboard-mahasiswa');

    Route::get('ajuan-beasiswa', 'Mahasiswa\AjuanController@index' )->name('ajuan-beasiswaa');
    Route::post('ajuan-beasiswa/create-ajuan-beasiswa', 'Mahasiswa\AjuanController@calonPenerima')->name('create-ajuan-beasiswa');

});
