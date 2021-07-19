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

//Route::get('/anggota', function () {
    //return view('kelompok.anggota');
//});

Route::get('/komoditas', function () {
    return view('komoditas');
});

Route::get('/user', function () {
    return view('user');
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


Route::get('/anggota','App\Http\Controllers\AnggotaController@index')->name('anggota');
Route::get('/create-anggota','App\Http\Controllers\AnggotaController@create')->name('create-anggota');
Route::post('/simpan-anggota','App\Http\Controllers\AnggotaController@store')->name('simpan-anggota');
Route::get('/click_edit/{id}','App\Http\Controllers\AnggotaController@edit_function')->name('click_edit');
Route::get('/delete-anggota/{id}','App\Http\Controllers\AnggotaController@destroy')->name('delete-anggota');
Route::post('/update-anggota/{id}','App\Http\Controllers\AnggotaController@update')->name('update-anggota');


//Route Fitur Komoditas
Route::get('/komoditas','App\Http\Controllers\KomoditasController@index')->name('komoditas');
Route::get('/create-komoditas','App\Http\Controllers\KomoditasController@create')->name('create-komoditas');
Route::post('/simpan-komoditas','App\Http\Controllers\KomoditasController@store')->name('simpan-komoditas');
Route::get('/edit-komoditas/{id}','App\Http\Controllers\KomoditasController@edit')->name('edit-komoditas');
Route::post('/update-komoditas/{id}','App\Http\Controllers\KomoditasController@update')->name('update-komoditas');
Route::get('/delete-komoditas/{id}','App\Http\Controllers\KomoditasController@destroy')->name('delete-komoditas');

//Route Fitur Poktan
Route::get('/kelompoktani','App\Http\Controllers\RelationgroupController@index')->name('kelompoktani');
Route::get('/create-kelompoktani','App\Http\Controllers\RelationGroupController@create')->name('create-kelompoktani');
Route::post('/simpan-kelompoktani','App\Http\Controllers\RelationGroupController@store')->name('simpan-kelompoktani');
Route::get('/delete-kelompoktani/{id}','App\Http\Controllers\RelationGroupController@destroy')->name('delete-kelompoktani');
