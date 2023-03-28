<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'aaaaaaaaaaaa';
});

Route::get('/post', 'App\Http\Controllers\PostController@index')->name('post.index');
Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/contacts', 'App\Http\Controllers\ContactController@index')->name('contact.index');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');

Route::get('/post/create', 'App\Http\Controllers\PostController@create')->name('post.create');
Route::post('/post', 'App\Http\Controllers\PostController@store')->name('post.store');
Route::get('/post/{post}', 'App\Http\Controllers\PostController@show')->name('post.show');


Route::get('/post/update', 'App\Http\Controllers\PostController@update');
Route::get('/post/delete', 'App\Http\Controllers\PostController@delete');
Route::get('/post/first_or_create', 'App\Http\Controllers\PostController@firstOrCreate');
Route::get('/post/update_or_create', 'App\Http\Controllers\PostController@updateOrCreate');

