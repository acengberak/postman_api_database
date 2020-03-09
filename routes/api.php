<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('buku', 'BukuController@index');
Route::post('buku', 'BukuController@store');
Route::get('buku/{id}', 'BukuController@show');
Route::post('buku/{id}', 'BukuController@update');
Route::delete('buku/{id}', 'BukuController@destroy');


Route::post('karyawan', 'KaryawanController@create');
Route::get('karyawan', 'KaryawanController@show');
Route::get('karyawanupdate/{id}', 'KaryawanController@edit');
Route::put('karyawanupdate/{id}', 'KaryawanController@update');
Route::delete('karyawandelete/{id}', 'KaryawanController@destroy');

Route::post('surabaya', 'LantaiSatuController@create');
Route::get('surabaya', 'LantaiSatuController@show');
Route::put('surabayaupdate/{id}', 'LantaiSatuController@update');
