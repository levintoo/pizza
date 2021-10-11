<?php

use Illuminate\Support\Facades\Route;


Route::get('/','App\Http\Controllers\PizzaController@index');
Route::get('/create','App\Http\Controllers\PizzaController@create');
Route::get('/save','App\Http\Controllers\PizzaController@store');
Route::get('/pizza/{id}','App\Http\Controllers\PizzaController@show')->name('pizza.view');

Route::get('/json','App\Http\Controllers\PizzaController@json')->name('json');
Route::get('/encode_json','App\Http\Controllers\JsonEncodeDecode@encode')->name('json.encode');
Route::get('/decode_json','App\Http\Controllers\JsonEncodeDecode@decode_json')->name('json.decode');
