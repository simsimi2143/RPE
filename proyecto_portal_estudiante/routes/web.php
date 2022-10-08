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

Route::get('Menu', function () {
    return view('Menu');
});
Route::get('prestamo_biblioteca', function () {
    return view('prestamo_biblioteca');
});
Route::get('Notas_Parciales', function () {
    return view('Notas_Parciales');
});
Route::get('Cuenta_Corriente', function () {
    return view('Cuenta_Corriente');
});
Route::get('recuperar', function () {
    return view('recuperar');
});
Route::get('cambiar', function () {
    return view('cambiar');
});