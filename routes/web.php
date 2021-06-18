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
    return view('app');
});

Route::get('/pelanggan','PelangganController@index')->name('pelanggan');
Route::post('/pelanggan/store','PelangganController@store')->name('pelanggan.store');
Route::get('/pelanggan/edit/{id}','PelangganController@edit')->name('pelanggan.edit');
Route::post('/pelanggan/update/{id}','PelangganController@update')->name('pelanggan.update');
Route::get('/pelanggan/destroy/{id}','PelangganController@destroy')->name('pelanggan.destroy');


Route::get('/produk','produkController@index')->name('produk');
Route::post('produk/store','produkController@store')->name('produk.store');
Route::get('produk/edit/{id}','produkController@edit')->name('produk.edit');
Route::post('produk/update/{id}','produkController@update')->name('produk.update');
Route::get('produk/destroy/{id}','produkController@destroy')->name('produk.destroy');