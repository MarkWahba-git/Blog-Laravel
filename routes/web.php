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
});

Route::middleware('auth')->group(function () {
    Route::get('/posts','PostController@index')->name('posts.index') ;


    Route::get('/posts/create','PostController@create')->name('posts.create') ;
    
    Route::post('/posts','PostController@store')->name('posts.store') ;
    
    Route::get('/posts/{post}','PostController@show')->name('posts.show') ;
    
    
    
    Route::get('/posts/{post}/edit','PostController@edit')->name('posts.edit') ;
    
    
    Route::put('/posts/{post}','PostController@update')->name('posts.update') ;
    
    Route::delete('/posts/{post}','PostController@delete')->name('posts.delete') ;
    
    Route::get('/home', 'HomeController@index')->name('home') ;
});


Auth::routes();
