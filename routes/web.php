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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/matakuliah/json', 'MatakuliahController@json')->name('matakuliah/json');
Route::get('/dosen/json', 'DosenController@json')->name('dosen/json');
Route::get('/jurusan/json', 'JurusanController@json')->name('jurusan/json');
Route::get('/fakultas/json', 'FakultasController@json')->name('fakultas/json');
Route::get('/ruangan/json', 'RuanganController@json')->name('ruangan/json');
Route::get('/tahunAkademik/json', 'TahunAkademikController@json')->name('tahunAkademik/json');
Route::get('/setting', 'SettingController@index');
Route::put('/setting/{setting}', 'SettingController@update');

Route::resource('/kurikulum', 'KurikulumController');
Route::resource('/tahunAkademik', 'TahunAkademikController');
Route::resource('/ruangan', 'RuanganController');
Route::resource('/matakuliah', 'MatakuliahController');
Route::resource('/dosen', 'DosenController');
Route::resource('/fakultas', 'FakultasController');
Route::resource('/jurusan', 'JurusanController');
Route::resource('/dosen/get', 'DosenController@get');