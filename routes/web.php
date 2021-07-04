<?php

use Illuminate\Support\Facades\Route;
use App\Http\Conttrollers;
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

Route::get('/','PostController@get_all_post')->name('main');
Route::get('/registration','UserController@get_registration_view')->name('reg');
Route::post('/registration','UserController@registration')->name('reg');
//authorization
Route::get('/authorization','UserController@get_authorization_view')->name('auth');
Route::post('/authorization','UserController@authorization')->name('auth');

Route::get('/post/{id}','PostController@get_post_by_id')->name('post');
Route::post('/post/{id}/comment','PostController@add_comment')->name('post');

Route::get('/weather','PostController@get_weather_category')->name('main');
Route::get('/sport','PostController@get_sport_category')->name('main');
Route::get('/news','PostController@get_news_category')->name('main');
//hot news 
Route::get('/hot_news','PostController@get_hot_posts')->name('main');
//get view post_creating
Route::get('/add_post','PostController@add_post_view')->name('post_creating');
//process of adding post and returning view , cause we use post method.
Route::post('/add_post','PostController@add_post')->name('post_creating');
//search
Route::get('/search','PostController@search')->name('main');
//like
//Route::get('post/{id}/like','PostController@like_view')->name('post');
Route::post('post/{id}/like', 'PostController@post_like')->name('post');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
