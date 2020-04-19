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

Route::get('login', function () {
    return view('auth.login');
});

Route::get('register', function () {
    return view('auth.register');
});

Route::get('home', function () {
    return view('auth.home');
});

// Route::get('siswa', function () {
// 	$siswa = ['Ari Kurniawan', 'Aisya Salma', 'Gigi Hendro', 'Sukeisa Maulana']
//     return view('siswa.index',compact('siswa'));
// });



// Route::get('/home/{page?}', function ($page=null) {
// 	if ($page == null)
// 		return "hello,Anda sedang mengakses Halaman null";
//     return 'hello,Anda sedang mengakses Halaman'.$page;
// });

// Route::get('/home', function () {
//     return 'ini akan menjadi halaman home';
// })->name('Beranda');


Route::get('/pegawai','PegawaiController@index');
Route::get('/','HomeController@index');

Route::get('/perusahaan','PerusahaanController@index');
Route::get('/project','ProjectController@index');
// Route::get('/project','PegawaiController@test');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/product','ProductController@index');
Route::get('/product/tambah','ProductController@tambah');
Route::post('/product/upload', 'ProductController@upload');
Route::get('/product/hapus/{id}', 'ProductController@hapus');
Route::post('/product/update/', 'ProductController@update');
Route::get('/product/edit/{id}', 'ProductController@edit');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
