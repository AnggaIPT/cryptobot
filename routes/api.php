<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/caesar/encrypt', 'CaesarChiperController@encrypt')->name('api.caesar.encrypt');
Route::post('/vigenere/encrypt', 'VigenereChiperController@encrypt')->name('api.vigenere.encrypt');
Route::post('/vernam/encrypt', 'VernamChiperController@encrypt')->name('api.vernam.encrypt');
