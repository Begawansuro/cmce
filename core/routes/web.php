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
/*
Route::get('/', function () {
    return view('home');
});
*/

/*
Route::get('/user', 'UserController@index');
Route::get('/user-register', 'UserController@create');
Route::post('/user-register', 'UserController@store');
Route::get('/user-edit/{id}', 'UserController@edit');
*/
/*
Route::resource('anggota', 'AnggotaController');

Route::resource('buku', 'BukuController');
Route::get('/format_buku', 'BukuController@format');
Route::post('/import_buku', 'BukuController@import');

Route::resource('transaksi', 'TransaksiController');
Route::get('/laporan/trs', 'LaporanController@transaksi');
Route::get('/laporan/trs/pdf', 'LaporanController@transaksiPdf');
Route::get('/laporan/trs/excel', 'LaporanController@transaksiExcel');

Route::get('/laporan/buku', 'LaporanController@buku');
Route::get('/laporan/buku/pdf', 'LaporanController@bukuPdf');
Route::get('/laporan/buku/excel', 'LaporanController@bukuExcel');
Route::get('barcode', 'HomeController@barcode');
*/

/**************************
Custome
*/
Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/', 'HomeController@index');
Route::resource('user', 'UserController');

Route::resource('perusahaan', 'PerusahaanController');
Route::get('/format_buku', 'PerusahaanController@format');
Route::post('/import_buku', 'PerusahaanController@import');
Route::resource('karyawan', 'KaryawanController');

Route::get('/karyawan/{id?}/daftar', 'KaryawanController@daftar')->name('karyawan');
Route::get('/karyawan/{id?}/savephoto', 'KaryawanController@savephoto')->name('karyawan');
Route::put('karyawan/{nik}', 'KaryawanController@update');

Route::resource('pegawai', 'PegawaiController');
// Route::put('mc_karyawan/{id}', 'PegawaiController@savephoto')->name('mc_karyawan');
Route::get('gopegawai/{id}', 'PegawaiController@ajaxpegawai');

// Route::put('photopegawai/{id}', 'PegawaiController@update');

/***router OK ***********/
Route::put('/pegawai/{id?}/savephoto', 'PegawaiController@savephoto')->name('pegawai');
Route::resource('mcregister', 'McregisterController');
Route::get('doktercmb', 'McregisterController@dokter');
Route::get('paketcmb', 'McregisterController@paket');
Route::get('/mcregistrasi/{id}', 'McregisterController@mcregisterpdf');
// Route::get('/mcregistrasi/{id}', 'McregisterController@show');

Route::resource('fisik', 'FisikController');
Route::get('jsonfisik/{id}', 'FisikController@showjson');
Route::put('/updatefisik', 'FisikController@update');
Route::get('/pdf_fisik/{id}', 'FisikController@printpdf');

Route::resource('urin', 'UrinController');
Route::put('/updateurin', 'UrinController@update');

