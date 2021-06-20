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
    return view('welcome', ['title' => 'TUGAS AKHIR']);
});

Route::get('home', function () {
    return view('home');
});

Route::get('home2', function () {
    return view('home2');
});

Route::get('categories/trash', 'CategoryController@trash');
Route::get('categories/restore/{id?}', 'CategoryController@restore');
Route::get('categories/delete/{id?}', 'CategoryController@delete');
Route::resource('categories', 'CategoryController');

Route::resource('articles', 'ArticleController');

Route::resource('types', 'TypeController');
