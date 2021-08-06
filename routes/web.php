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


Route::get('/anggota/anggotatani/{id}', 'App\Http\Controllers\AnggotaController@empAnggota');
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

//Route Fitur Bantuan Dana
Route::get('/bantuandana','App\Http\Controllers\BantuanController@index')->name('bantuandana');
Route::get('/create-bantuan','App\Http\Controllers\BantuanController@create')->name('create-bantuan');
Route::post('/simpan-bantuan','App\Http\Controllers\BantuanController@store')->name('simpan-bantuan');
Route::get('/delete-bantuan/{id}','App\Http\Controllers\BantuanController@destroy')->name('delete-bantuan');
Route::get('/edit-bantuan/{id}','App\Http\Controllers\BantuanController@edit')->name('edit-bantuan');
Route::post('/update-bantuan/{id}','App\Http\Controllers\BantuanController@update')->name('update-bantuan');

//Fitur Detail Planning
//Route::get('/detailkegiatan/{id}','App\Http\Controllers\ProyekController@show')->name('detailkegiatan');
Route::post('/create-detail','App\Http\Controllers\DetailKegiatanProyekController@create')->name('create-detail');
Route::post('/simpan-detail','App\Http\Controllers\DetailKegiatanProyekController@store')->name('simpan-detail');
Route::get('/delete-detail/{id}','App\Http\Controllers\DetailKegiatanProyekController@destroy')->name('delete-detail');
Route::get('/edit-detail/{id}','App\Http\Controllers\DetailKegiatanProyekController@edit')->name('edit-detail');
Route::post('/update-detail/{id}','App\Http\Controllers\DetailKegiatanProyekController@update')->name('update-detail');
Route::get('/detail-kegiatan','App\Http\Controllers\DetailKegiatanProyekController@index')->name('detail-kegiatan');
Route::get('/detailkegiatan/{id}','App\Http\Controllers\DetailKegiatanProyekController@show')->name('detailkegiatan');


//Fitur Detail Cost Baseline
Route::get('/detailcost/{id}','App\Http\Controllers\CostBaselineController@show')->name('detailkegiatan');
Route::get('/detailcost','App\Http\Controllers\CostBaselineController@index')->name('detailcost');
Route::get('/create-detailcost','App\Http\Controllers\CostBaselineController@create')->name('create-detailcost');
Route::post('/simpan-detailcost','App\Http\Controllers\CostBaselineController@store')->name('simpan-detailcost');
Route::get('/delete-detailcost/{id}','App\Http\Controllers\CostBaselineController@destroy')->name('delete-detailcost');
Route::get('/edit-detailcost/{id}','App\Http\Controllers\CostBaselineController@edit')->name('edit-detailcost');
Route::post('/update-detailcost/{id}','App\Http\Controllers\CostBaselineController@update')->name('update-detailcost');

//Tabel Cost Actual
Route::get('/create-detailakt','App\Http\Controllers\CostBaselineController@createaktual')->name('create-detailakt');
Route::post('/simpan-detailakt','App\Http\Controllers\CostBaselineController@storeaktual')->name('simpan-detailakt');
Route::get('/delete-detailakt/{id}','App\Http\Controllers\CostBaselineController@destroyaktual')->name('delete-detailakt');
Route::get('/edit-detailakt/{id}','App\Http\Controllers\CostBaselineController@editaktual')->name('edit-detailakt');
Route::post('/update-detailakt/{id}','App\Http\Controllers\CostBaselineController@updateaktual')->name('update-detailakt');

//cetak laporan
Route::get('/cetakcost/{id}','App\Http\Controllers\CostBaselineController@cetakCost')->name('cetakcost');



//Fitur progress

Route::get('/progress/{id}','App\Http\Controllers\ProgressController@empKode');
Route::get('/progress','App\Http\Controllers\ProgressController@index')->name('progress');
Route::get('/createprogress','App\Http\Controllers\ProgressController@create')->name('createprogress');
Route::post('/simpan-progress','App\Http\Controllers\ProgressController@store')->name('simpan-progress');
Route::get('/delete-progress/{id}','App\Http\Controllers\ProgressController@destroy')->name('delete-progress');
Route::get('/edit-progress/{id}','App\Http\Controllers\ProgressController@edit')->name('edit-progress');
Route::post('/update-progress/{id}','App\Http\Controllers\ProgressController@update')->name('update-progress');

//Fitur Issue
Route::get('/issue/{id}','App\Http\Controllers\IssueController@empBantuan');
Route::get('/issue','App\Http\Controllers\IssueController@index')->name('issue');
Route::get('/create-issue','App\Http\Controllers\IssueController@create')->name('create-issue');
Route::post('/simpan-issue','App\Http\Controllers\IssueController@store')->name('simpan-issue');
Route::get('/delete-issue/{id}','App\Http\Controllers\IssueController@destroy')->name('delete-issue');
Route::get('/edit-issue/{id}','App\Http\Controllers\IssueController@edit')->name('edit-issue');
Route::post('/update-issue/{id}','App\Http\Controllers\IssueController@update')->name('update-issue');

