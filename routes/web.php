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

Route::get('/', function () {
    return view('welcome');
});

Route::get('seConnecter', function () {
    return view('welcome')->middleware('auth');
});

Route::get('home', 'HomeController@index')->name('home');


/*Route::get('prospects', function () {
    return view('prospect');
})->name('prospect')->middleware('auth');

Route::get('parrainages', function () {
    return view('parrainage');
})->name('parrainage')->middleware('auth');

Route::get('exportProspect', 'prospectExportController@export')->name('exportProspect');
Route::get('exportParrainage', 'parrainageExportController@export')->name('exportProspect');*/
