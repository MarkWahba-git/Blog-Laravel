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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/posts', 'PostController@index')->name('post.index');  /*asl about the name here */
Route::get('/posts/{id}/edit','PostController@edit')->name('post.edit');
Route::get('/posts/{id}/delete','PostController@destroy')->name('post.destroy');
Route::get('/create','PostController@create')->name('post.create');
Route::post('/create','PostController@store')->name('post.store');
Route::post('/employee/update','PostController@update')->name('post.update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
