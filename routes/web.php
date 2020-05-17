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
    return view('index');
});

Route::get('/caesar', 'CaesarChiperController@index')->name('caesar.index');
Route::get('/vigenere', 'VigenereChiperController@index')->name('vigenere.index');
// Route::post('/caesar/encrypt', 'CaesarChiperController@encrypt')->name('caesar.encrypt');
