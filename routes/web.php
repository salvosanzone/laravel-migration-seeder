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

Route::get('/', 'PageController@index')->name('home');

Route::get('/destinazioni', 'PageController@destinazioni')->name('destinazioni');

Route::get('/offerte', 'PageController@offerte')->name('offerte');

Route::get('/servizi', 'PageController@servizi')->name('servizi');

Route::get('/servizi', 'PageController@servizi')->name('servizi');

Route::get('/contatti', 'PageController@contatti')->name('contatti');


