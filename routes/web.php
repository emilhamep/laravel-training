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
