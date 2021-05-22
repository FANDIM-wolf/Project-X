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
Route::get('/registration','PostController@registration')->name('main');
Route::get('/post/{id}','PostController@get_post_by_id')->name('post');

