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
  Route::get('/admin', 'AdminController@index');

  //KATEGORI
  Route::get('/admin/category', 'CategoryController@index');
  Route::get('/admin/category/add_category', 'CategoryController@create');
  Route::post('/admin/category/add_category', 'CategoryController@store');
  Route::get('/admin/category/{id}/edit_category', 'CategoryController@edit');
  Route::put('/admin/category/{id}/edit_category', 'CategoryController@update');
  Route::delete('/admin/category/{id}/delete_category', 'CategoryController@delete');
  Route::get('/admin/category/{id}/show_category', 'CategoryController@show');

  //ARTIKEL
  Route::get('/admin/article', 'ArticleController@index');
  Route::get('/admin/article/add_article', 'ArticleController@create');
  Route::post('/admin/article/add_article', 'ArticleController@store');
  Route::get('/admin/article/{id}/edit_article', 'ArticleController@edit');
  Route::put('/admin/article/{id}/edit_article', 'ArticleController@update');
  Route::delete('/admin/article/{id}/delete_article', 'ArticleController@delete');
  Route::get('/admin/article/{id}/show_article', 'ArticleController@show');

  //KOMENTAR
  Route::get('/admin/comment', 'CommentController@index');
  Route::delete('/admin/comment/{id}/delete_comment', 'CommentController@delete');
  Route::get('/admin/comment/{id}/show_comment', 'CommentController@show');

  //IKLAN
  Route::get('/admin/advertisement', 'AdvertisementController@index');
  Route::get('/admin/advertisement/add_advertisement', 'AdvertisementController@create');
  Route::post('/admin/advertisement/add_advertisement', 'AdvertisementController@store');
  Route::get('/admin/advertisement/{id}/edit_advertisement', 'AdvertisementController@edit');
  Route::put('/admin/advertisement/{id}/edit_advertisement', 'AdvertisementController@update');
  Route::delete('/admin/advertisement/{id}/delete_advertisement', 'AdvertisementController@delete');
  Route::get('/admin/advertisement/{id}/show_advertisement', 'AdvertisementController@show');
});

//Autentikasi
Auth::routes();

//Masuk ke menu Login dan Register Default Laravel
Route::get('/home', 'HomeController@index')->name('home');
