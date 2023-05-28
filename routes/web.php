<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Destinos;
use App\Http\Controllers\Playas;
use App\Http\Controllers\Cultura;
use App\Http\Controllers\Gastronomia;
use App\Http\Controllers\Paisaje;

Route::get('/', [HomeController::class, 'index']);
Route::get('/vista2', [Destinos::class, 'index']);
Route::get('/vista3', [Playas::class, 'index']);
Route::get('/vista4', [Cultura::class, 'index']);
Route::get('/vista5', [Gastronomia::class, 'index']);
Route::get('/vista6', [Paisaje::class, 'index']);

Route::get('/', function () {
    return view('vista1');
});
Route::get('/destinos', function () {
    return view('vista2');
});
Route::get('/playas', function () {
    return view('vista3');
});
Route::get('/cultura', function () {
    return view('vista4');
});
Route::get('/gastronomia', function () {
    return view('vista5');
});
Route::get('/paisajes', function () {
    return view('vista6');
});
