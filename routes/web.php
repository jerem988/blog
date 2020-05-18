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

/* Back Office */
//Auth::routes(['register' => false]);

/*Route::get('/', 'HomeController@index')->name('home');*/
/*Route::get('home', 'HomeController@index')->name('home')*/;

Auth::routes();

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('home', 'HomeController@index')->name('home');
Route::get('post/create', function () {
    return view('createPost');
})->name('postCreate')->middleware('auth');

Route::post('post/valid', 'postController@store')->middleware('auth');

Route::get('post/list', 'postController@index')->name('postList')->middleware('auth');

Route::get('/', 'postController@accueil')->name('accueil');
