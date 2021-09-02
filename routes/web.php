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

Route::get('/anggota', function () {
    return view('kelompok.anggota');
});

Route::get('/komoditas', function () {
    return view('komoditas');
});





Route::get('login','App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login','App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout','App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware'=>['auth']], function(){
    Route::group(['middleware' => ['cek_login:admin']], function(){
        Route::get('admin','App\Http\Controllers\AdminController@index')->name('admin');
    });

    Route::group(['middleware' => ['cek_login:penyuluh']], function(){
          Route::get('developer','App\Http\Controllers\DeveloperController@index')->name('developer');
        
    });
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('monitoringLahans', App\Http\Controllers\monitoring_lahanController::class);

Route::resource('monitorings', App\Http\Controllers\monitoringController::class);

Route::resource('iklims', App\Http\Controllers\iklimController::class);

Route::resource('masalahs', App\Http\Controllers\masalahController::class);

Route::get('monitorings/kelompok/{id}', 'App\Http\Controllers\monitoringController@empKelompok');

Route::get('iklims/poktan/{id}', 'App\Http\Controllers\iklimController@empPoktan');

Route::get('masalahs/masalah/{id}', 'App\Http\Controllers\masalahController@empMasalah');

Route::get('masalahs/solusi/{id}', 'App\Http\Controllers\masalahController@solusi')->name('masalahs.solusi');



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

//Route Fitur User Management
Route::get('/user','App\Http\Controllers\UserMController@index')->name('user');
Route::get('/create-user','App\Http\Controllers\UserMController@create')->name('create-user');
Route::post('/simpan-user','App\Http\Controllers\UserMController@store')->name('simpan-user');
Route::get('/delete-user/{id}','App\Http\Controllers\UserMController@destroy')->name('delete-user');


//Route Fitur Proyek
Route::get('/proyek','App\Http\Controllers\ProyekController@index')->name('proyek');
Route::get('/create-proyek','App\Http\Controllers\ProyekController@create')->name('create-proyek');
Route::post('/simpan-proyek','App\Http\Controllers\ProyekController@store')->name('simpan-proyek');
Route::get('/delete-proyek/{id}','App\Http\Controllers\ProyekController@destroy')->name('delete-proyek');
Route::get('/edit-proyek/{id}','App\Http\Controllers\ProyekController@edit')->name('edit-proyek');
Route::post('/update-proyek/{id}','App\Http\Controllers\ProyekController@update')->name('update-proyek');

//Fitur Detail Proyek
//Route::get('/detailkegiatan/{id}','App\Http\Controllers\ProyekController@show')->name('detailkegiatan');
Route::get('/create-detail','App\Http\Controllers\DetailKegiatanProyekController@create')->name('create-detail');
Route::post('/simpan-detail','App\Http\Controllers\DetailKegiatanProyekController@store')->name('simpan-detail');
Route::get('/delete-detail/{id}','App\Http\Controllers\DetailKegiatanProyekController@destroy')->name('delete-detail');
Route::get('/edit-detail/{id}','App\Http\Controllers\DetailKegiatanProyekController@edit')->name('edit-detail');
Route::post('/update-detail/{id}','App\Http\Controllers\DetailKegiatanProyekController@update')->name('update-detail');
Route::get('/detail-kegiatan','App\Http\Controllers\DetailKegiatanProyekController@index')->name('detail-kegiatan');
Route::get('/detailkegiatan/{id}','App\Http\Controllers\DetailKegiatanProyekController@show')->name('detailkegiatan');

//Fitur Cost Baseline
Route::get('/costbaseline','App\Http\Controllers\CostBaselineController@index')->name('costbaseline');
Route::get('/detailcost/{id}','App\Http\Controllers\CostBaselineController@show')->name('detailcost');
Route::get('/create-cost','App\Http\Controllers\CostBaselineController@create')->name('create-cost');
Route::post('/simpan-cost','App\Http\Controllers\CostBaselineController@store')->name('simpan-cost');
Route::get('/edit-cost/{id}','App\Http\Controllers\CostBaselineController@edit')->name('edit-cost');
Route::post('/update-cost/{id}','App\Http\Controllers\CostBaselineController@update')->name('update-cost');
Route::get('/delete-cost/{id}','App\Http\Controllers\CostBaselineController@destroy')->name('delete-cost');

//Fitur Detail Cost Baseline
Route::get('/detailcost','App\Http\Controllers\DetailCostController@index')->name('detailcost');
Route::get('/create-detailcost','App\Http\Controllers\DetailCostController@create')->name('create-detailcost');
Route::post('/simpan-detailcost','App\Http\Controllers\DetailCostController@store')->name('simpan-detailcost');
Route::get('/delete-detailcost/{id}','App\Http\Controllers\DetailCostController@destroy')->name('delete-detailcost');
Route::get('/edit-detailcost/{id}','App\Http\Controllers\DetailCostController@edit')->name('edit-detailcost');
Route::post('/update-detailcost/{id}','App\Http\Controllers\DetailCostController@update')->name('update-detailcost');

//Fitur progress
Route::get('/progress','App\Http\Controllers\ProgressController@index')->name('progress');
Route::get('/createprogress','App\Http\Controllers\ProgressController@create')->name('createprogress');
Route::post('/simpan-progress','App\Http\Controllers\ProgressController@store')->name('simpan-progress');
Route::get('/delete-progress/{id}','App\Http\Controllers\ProgressController@destroy')->name('delete-progress');
Route::get('/edit-progress/{id}','App\Http\Controllers\ProgressController@edit')->name('edit-progress');
Route::post('/update-progress/{id}','App\Http\Controllers\ProgressController@update')->name('update-progress');

//Fitur Issue
Route::get('/issue','App\Http\Controllers\IssueController@index')->name('issue');
Route::get('/create-issue','App\Http\Controllers\IssueController@create')->name('create-issue');
Route::post('/simpan-issue','App\Http\Controllers\IssueController@store')->name('simpan-issue');
Route::get('/delete-issue/{id}','App\Http\Controllers\IssueController@destroy')->name('delete-issue');
Route::get('/edit-issue/{id}','App\Http\Controllers\IssueController@edit')->name('edit-issue');
Route::post('/update-issue/{id}','App\Http\Controllers\IssueController@update')->name('update-issue');

//Fitur aktual cost
Route::get('/aktualcost','App\Http\Controllers\AktualcostController@index')->name('aktualcost');
Route::get('/create-aktual','App\Http\Controllers\AktualcostController@create')->name('create-aktual');
Route::post('/simpan-aktual','App\Http\Controllers\AktualcostController@store')->name('simpan-aktual');
Route::get('/delete-aktual/{id}','App\Http\Controllers\AktualcostController@destroy')->name('delete-aktual');
Route::get('/edit-aktual/{id}','App\Http\Controllers\AktualcostController@edit')->name('edit-aktual');
Route::post('/update-aktual/{id}','App\Http\Controllers\AktualcostController@update')->name('update-aktual');
Route::get('/detailaktual/{id}','App\Http\Controllers\AktualcostController@show')->name('detailaktual');

//Fitur Detail Aktual Cost
Route::get('/detailaktual','App\Http\Controllers\DetailAktualController@index')->name('detailaktual');
Route::get('/create-detailaktual','App\Http\Controllers\DetailAktualController@create')->name('create-detailaktual');
Route::post('/simpan-detailaktual','App\Http\Controllers\DetailAktualController@store')->name('simpan-detailaktual');
Route::get('/edit-detailaktual/{id}','App\Http\Controllers\DetailAktualController@edit')->name('edit-detailaktual');
Route::post('/update-detailaktual/{id}','App\Http\Controllers\DetailAktualController@update')->name('update-detailaktual');
Route::get('/delete-detailaktual/{id}','App\Http\Controllers\DetailAktualController@destroy')->name('delete-detailaktual');





Route::resource('hasilPanens', App\Http\Controllers\hasil_panenController::class);

Route::resource('riwayatPupuks', App\Http\Controllers\riwayat_pupukController::class);

Route::resource('pendapatans', App\Http\Controllers\pendapatanController::class);

Route::resource('riwayatPenanganans', App\Http\Controllers\riwayat_penangananController::class);