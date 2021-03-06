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

Route::resource('employee', 'EmployeeController');
Route::resource('evento', 'EventoController');
Route::resource('prdvsevento', 'EventosController');
Route::resource('fs92eventos', 'FS_92_EVENTOSController');
Route::resource('fs93eventos', 'FS_93_EVENTOSController');
//Route::resource('pokemons', 'PokemonController');
