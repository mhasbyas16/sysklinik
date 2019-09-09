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
//MAIN MENU
//Dashboard
Route::get('/', function () {
    return view('index');
});
//Register list
Route::get('/register-list','mainmenuController@registerlist');
Route::get('/register-list/{id}','mainmenuController@registerlistdata');
Route::post('/register-list/update','mainmenuController@registerlistupdate');
Route::get('/register-list/delete/{id}','mainmenuController@registerlistdelete');
Route::post('/register-list/filter-date','mainmenuController@registerlistfilter');
//Absensi
Route::get('/absensi','mainmenuController@absensi');
Route::post('/absensi/{id}','mainmenuController@absensifilter');
//jadwal terapi
Route::get('/jadwal-terapi','mainmenuController@jadwalterapi');
//jadwal Evaluasi
Route::get('/jadwal-evaluasi','mainmenuController@jadwalevaluasi');
Route::post('/jadwal-evaluasi/filter-date','mainmenuController@jadwalevaluasifilter');

//Data Pasien
Route::get('/data-pasien','datamasterController@datapasien');
//Data Karyawan
Route::get('/karyawan','datamasterController@karyawan');
Route::get('/karyawan/tambah-data/{kt}','datamasterController@karyawantambah');
Route::get('/karyawan/edit-data/{id}','datamasterController@karyawaneditview');
Route::get('/karyawan/hapus-data/{id}','datamasterController@karyawandelete');
Route::post('/pegawai/{save}','datamasterController@pegawaisave');
//Data terapis
Route::get('/data-terapis','datamasterController@dataterapis');
//Data terapi
Route::get('/data-terapi','datamasterController@dataterapi');
