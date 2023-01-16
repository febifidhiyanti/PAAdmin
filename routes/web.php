<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/tester', function () {
    return view('tester');
});

Route::get('/books', 'App\Http\Controllers\BookController@index');
Route::get('/book/create', 'App\Http\Controllers\BookController@create');
Route::post('/book/store', 'App\Http\Controllers\BookController@store');
Route::get('/book/edit/{id}', 'App\Http\Controllers\BookController@edit');
Route::get('/book/show/{id}', 'App\Http\Controllers\BookController@show');
Route::put('/book/update/{id}', 'App\Http\Controllers\BookController@update');
Route::get('/book/hapus/{id}', 'App\Http\Controllers\BookController@destroy');

 
Route::get('/podcast', 'App\Http\Controllers\PodcastController@index');
Route::get('/podcast/create', 'App\Http\Controllers\PodcastController@create');
Route::post('/podcast/store', 'App\Http\Controllers\PodcastController@store');
Route::get('/podcast/edit/{id}', 'App\Http\Controllers\PodcastController@edit');
Route::get('/podcast/show/{id}', 'App\Http\Controllers\PodcastController@show');
Route::put('/podcast/update/{id}', 'App\Http\Controllers\PodcastController@update');
Route::get('/podcast/hapus/{id}', 'App\Http\Controllers\PodcastController@destroy');


Route::get('/kajian', 'App\Http\Controllers\KajianController@index');
Route::get('/kajian/create', 'App\Http\Controllers\KajianController@create');
Route::post('/kajian/store', 'App\Http\Controllers\KajianController@store');
Route::get('/kajian/edit/{id}', 'App\Http\Controllers\KajianController@edit');
Route::get('/kajian/show/{id}', 'App\Http\Controllers\KajianController@show');
Route::put('/kajian/update/{id}', 'App\Http\Controllers\KajianController@update');
Route::get('/kajian/hapus/{id}', 'App\Http\Controllers\KajianController@destroy');


Route::get('/saran', 'App\Http\Controllers\BookController@index');

