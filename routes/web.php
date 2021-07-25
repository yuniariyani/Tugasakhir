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

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/kelompok', function () {
    return view('kelompok');
});

Route::get('login','App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login','App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout','App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware'=>['auth']], function(){
    Route::group(['middleware' => ['cek_login:admin']], function(){
        Route::get('admin','App\Http\Controllers\AdminController@index')->name('admin');
    });

    Route::group(['middleware' => ['cek_login:developer']], function(){
          Route::get('developer','App\Http\Controllers\DeveloperController@index')->name('developer');
        
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('monitoringLahans', App\Http\Controllers\monitoring_lahanController::class);

Route::resource('monitorings', App\Http\Controllers\monitoringController::class);

Route::resource('iklims', App\Http\Controllers\iklimController::class);

Route::resource('masalahs', App\Http\Controllers\masalahController::class);

Route::get('monitorings/kelompok/{id}', 'App\Http\Controllers\monitoringController@empKelompok');

Route::get('iklims/poktan/{id}', 'App\Http\Controllers\iklimController@empPoktan');

Route::get('masalahs/masalah/{id}', 'App\Http\Controllers\masalahController@empMasalah');

Route::get('masalahs/solusi/{id}', 'App\Http\Controllers\masalahController@solusi')->name('masalahs.solusi');
