<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('currencyrate','App\Http\Controllers\CurrencyRateController@getAll');
Route::get('currencyrate/{idCurrencyRate}','App\Http\Controllers\CurrencyRateController@getById');
Route::get('currencyrate/active/{active?}','App\Http\Controllers\CurrencyRateController@getActive');
Route::post('currencyrate/calculate','App\Http\Controllers\CurrencyRateController@calculateExchange');
