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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/ciudades', 'App\Http\Controllers\CiudadeController');
Route::resource('/countries', 'App\Http\Controllers\CountryController');
Route::resource('/clientes', 'App\Http\Controllers\ClientesController');
Route::resource('/productores', 'App\Http\Controllers\ProductoreController');
Route::resource('/locaciones', 'App\Http\Controllers\LocacionesController');
Route::resource('/eventos', 'App\Http\Controllers\EventosController');
Route::resource('/tipo_tickets', 'App\Http\Controllers\TipoTicketsController');
Route::resource('/tickets', 'App\Http\Controllers\TicketsController');

Route::get('/eventos/{$id}/balance/', 'App\Http\Controllers\EventosController@balance');


