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

Route::get('/book', 'BookController@index')->name('post.index');
Route::get('/book/create', 'BookController@create')->name('post.create');
Route::post('/book', 'BookController@store')->name('post.store');
Route::get('/book/{post}', 'BookController@show')->name('post.show');
Route::get('/book/{post}/edit', 'BookController@edit')->name('post.edit');
Route::patch('/book/{post}', 'BookController@update')->name('post.update');

Route::delete('/book/{post}', 'BookController@destroy')->name('post.delete');
