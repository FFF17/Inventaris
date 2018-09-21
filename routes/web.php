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


Route::get('/supplier/index', 'HomeController@index_supplier');
Route::get('/supplier/create', 'HomeController@create_supplier');
Route::post('/supplier/create', 'HomeController@save_supplier');
Route::get('supplier/edit/{id}', 'HomeController@edit_supplier');
Route::post('supplier/edit', 'HomeController@update_supplier');
Route::get('supplier/delete/{id}', 'HomeController@delete_supplier')->name("delete_supplier");

Route::get('supplier/downloadpdf_allsupplier', 'HomeController@downloadpdf_allsupplier')->name('downloadpdf_allsupplier');





Route::get('/barang_masuk/index', 'HomeController@index_barangmasuk');
Route::get('/barang_masuk/create', 'HomeController@create_barangmasuk');
Route::post('barang_masuk/create', 'HomeController@save_barangmasuk');
Route::get('barang_masuk/edit/{id}', 'HomeController@edit_barangmasuk');
Route::post('barang_masuk/edit', 'HomeController@update_barangmasuk');
Route::get('barang_masuk/delete/{id}', 'HomeController@delete_barangmasuk')->name("delete_barangmasuk");
Route::get('barang_masuk/downloadpdf_allbarangmasuk', 'HomeController@downloadpdf_allbarangmasuk')->name('downloadpdf_allbarangmasuk');





Route::get('Peminjaman/index', 'HomeController@index_peminjaman');

Route::post('Peminjaman/create', 'HomeController@save_peminjaman');
Route::get('Peminjaman/create/{id}', 'HomeController@create_peminjaman');

Route::get('Peminjaman/downloadpdf_allpeminjam', 'HomeController@downloadpdf_allpeminjam')->name('downloadpdf_allpeminjam');


Route::post('Pengembalian/create', 'HomeController@save_pengembalian');
Route::get('Pengembalian/create/{id}', 'HomeController@create_pengembalian');

Route::get('mutasi_keluar/index', 'HomeController@index_mutasikeluar');

Route::post('mutasi_keluar/create', 'HomeController@save_mutasikeluar');
Route::get('mutasi_keluar/create/{id}', 'HomeController@create_mutasikeluar');
Route::get('barang_masuk/downloadpdf_allmutasikeluar', 'HomeController@downloadpdf_allmutasikeluar')->name('downloadpdf_allmutasikeluar');
