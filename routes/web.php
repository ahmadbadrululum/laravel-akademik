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
Route::resource('/matakuliah', 'MatakuliahController');
Route::get('/dosen/json', 'DosenController@json')->name('dosen/json');
Route::resource('/dosen', 'DosenController');
Route::get('/fakultas/json', 'FakultasController@json')->name('fakultas/json');
Route::resource('/fakultas', 'FakultasController');
Route::resource('/dosen/get', 'DosemController@get');