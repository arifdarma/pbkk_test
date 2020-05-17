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
Route::get('pesan/{id}', 'PesanController@index');
Route::post('pesan/{id}', 'PesanController@pesan');
Route::get('check-out', 'PesanController@check_out');
Route::delete('check-out/{id}', 'PesanController@delete');
Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');
Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');
Route::get('history', 'HistoryController@index'); 
Route::get('history/{id}', 'HistoryController@detail');

//route CRUD barang
Route::get('/barang','BarangController@index')->name('daerah');
Route::get('/barang/tambah','BarangController@tambah');
Route::post('/barang/store','BarangController@store');
Route::get('/barang/edit/{id}','BarangController@edit');
Route::post('/barang/update/{id}','BarangController@update');
Route::get('/barang/hapus/{id}','BarangController@hapus');
Route::get('/cariBarang','BarangController@cariPabrik');