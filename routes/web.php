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
    return view('frontend/index');
});
Route::group(['middleware' => 'auth'], function(){
  Route::get('/admin', function () {
      return view('admin/layouts/dashboard');
  });

  Route::get('/admin/berita', function () {
      return view('admin/layouts/berita');
  });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
