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
    return view('index');
});
//Register list
Route::get('/register-list','registerlistController@registerlist');
Route::get('/register-list/{id}','registerlistController@registerlistdata');
Route::post('/register-list/update','registerlistController@registerlistupdate');
Route::get('/absensi', function () {
    return view('main_menu.absensi');
});
