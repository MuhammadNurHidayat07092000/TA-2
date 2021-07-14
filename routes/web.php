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
    // $articles = App\Article::take()->get();
    $articles = App\Article::all();

    return view('home2', [
        'articles' => $articles
    ]);
});

// Route::get('home2/artikel', 'FrontendController@artikel');
//BACK-END
//Kategori
Route::get('categories/trash', 'CategoryController@trash');
Route::get('categories/restore/{id?}', 'CategoryController@restore');
Route::get('categories/delete/{id?}', 'CategoryController@delete');
Route::resource('categories', 'CategoryController');

//Artikel
Route::resource('articles', 'ArticleController');

//Jenis
Route::get('types/trash', 'TypeController@trash');
Route::get('types/restore/{id?}', 'TypeController@restore');
Route::get('types/delete/{id?}', 'TypeController@delete');
Route::resource('types', 'TypeController');

// Authentifikasi
// Route::get('auths', 'AuthController@formLogin')->name('login');
// Route::post('auths/proses', 'AuthController@login')->name('login');

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('home', function () {
//         return view('home');
//     });
// });
// Route::get('auths/logout', 'AuthController@logout');

//FRONT-END
Route::get('frontends/artikel/{id}', 'FrontEndController@artikel');
Route::get('frontends/dampak', 'FrontEndController@dampak');
Route::get('frontends/penyebab', 'FrontEndController@penyebab');
Route::get('frontends/sejarah', 'FrontEndController@sejarah');
Route::get('frontends/struktur', 'FrontEndController@struktur');
Route::get('frontends/uu', 'FrontEndController@uu');
Route::get('frontends/visimisi', 'FrontEndController@visimisi');
Route::get('frontends/jenisnark', 'FrontEndController@jenisnark');
Route::get('frontends/pencarian', 'FrontEndController@pencarian')->name('cari');
Route::get('frontends/pencarian/{id}/detail', 'FrontEndController@pencarianDetail')->name('cari-detail');
