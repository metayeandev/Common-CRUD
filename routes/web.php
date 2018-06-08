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

// Home
Route::get('/', 'HomeController@index')->name('home');
Route::get('/{id}', 'HomeController@article')->name('article');

// Article
Route::get('/manage/article', 'ArticleController@index')->name('article.index');
Route::get('/manage/article/create', 'ArticleController@create')->name('article.create');
Route::post('/manage/article', 'ArticleController@store')->name('article.store');
Route::get('/manage/article/{id}', 'ArticleController@show')->name('article.show');
Route::get('/manage/article/{id}/edit', 'ArticleController@edit')->name('article.edit');
Route::patch('/manage/article/{id}', 'ArticleController@update')->name('article.update');
Route::delete('/managearticle/{id}', 'ArticleController@destroy')->name('article.delete');
