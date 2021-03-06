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
    return view('welcome',['pengarang' => 'Jaka']);
});

Route::get('/tes', function () {
    return 'tes routing';
});

Route::get('/tes_controller','CBuku@tes_controller');

Route::get('/tes_parameter/{judul}/{pengarang}','CBuku@tes_parameter');

Route::group(['prefix' => '/tes'],function(){
  Route::get('/routing_group/{judul}','CBuku@group');
  Route::get('/routing_group2',function(){
    return 'Ini dari routing group dua';
  });
});

Route::group(['prefix' => '/buku'],function(){
  Route::get('/','CBuku@index');
  Route::get('/tambah','CBuku@tambah');
  Route::post('/tambah_proses','CBuku@tambah_proses');
  Route::get('/ubah/{id}','CBuku@ubah');
  Route::post('/ubah_proses','CBuku@ubah_proses');
  Route::get('/hapus/{id}','CBuku@hapus');
});
