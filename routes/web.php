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

//Masuk ke halaman Frontend
Route::get('/', function () {
    return view('frontend/index');
});

Route::group(['middleware' => 'auth'], function(){
  //Masuk ke halaman dashboard Admin
  Route::get('/admin', function () {
      return view('admin/layouts/dashboard');
  });
  //Masuk ke halaman kategori Admin
  Route::get('/admin/category', function () {
      return view('admin/layouts/category');
  });
  //Masuk ke halaman artikel Admin
  Route::get('/admin/article', function () {
      return view('admin/layouts/article');
  });
  //Masuk ke halaman komentar Admin
  Route::get('/admin/comment', function () {
      return view('admin/layouts/comment');
  });
  //Masuk ke halaman iklan Admin
  Route::get('/admin/advertisement', function () {
      return view('admin/layouts/advertisement');
  });
});

//Autentikasi
Auth::routes();

//Masuk ke menu Login dan Register Default Laravel
Route::get('/home', 'HomeController@index')->name('home');
