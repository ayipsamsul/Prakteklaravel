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
    return view('welcome');
});
route::get('dosen','DosenController@index')->name('dosenList');
route::get('/dosen/create','DosenController@create')->name('dosen.create');
route::put('/dosen/store','DosenController@store')->name('dosen.store');
route::get('/dosen/edit/{id}','DosenController@edit')->name('dosen.edit');
route::put('/dosen/update/{id}','DosenController@update')->name('dosen.update');
route::get('/dosen/hapus/{id}','DosenController@destroy')->name('dosen.hapus');