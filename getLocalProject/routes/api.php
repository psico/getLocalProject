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

//Route::get('localizacao', 'Api\LocalizacaoController@getAllLocalizacao');
//Route::get('localizacao/{id}', 'Api\LocalizacaoController@getLocalizacao');
//Route::post('localizacao', 'Api\LocalizacaoController@postLocalizacao');

Route::get('localizacao', [\App\Http\Controllers\Api\LocalizacaoController::class, 'getAllLocalizacao']);
Route::get('localizacao/{id}', [\App\Http\Controllers\Api\LocalizacaoController::class, 'getLocalizacao']);
Route::get('localizacaoUser/{id}', [\App\Http\Controllers\Api\LocalizacaoController::class, 'getLocalizacaoUserId']);
Route::post('localizacao', [\App\Http\Controllers\Api\LocalizacaoController::class, 'postLocalizacao']);
