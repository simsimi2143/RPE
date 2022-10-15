<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('menu', function () {
    return view('inicio');
});

Route::get('biblioteca', function () {
    return view('inicio');
});

Route::get('notas', function () {
    return view('inicio');
});

Route::get('cuenta', function () {
    return view('inicio');
});

Route::get('notap', function () {
    return view('inicio');
});

Route::get('asistente', function () {
    return view('inicio');
});

Route::get('certificado', function () {
    return view('inicio');
});

Route::get('recuperar', function () {
    return view('inicio');
});

Route::get('cambiar', function () {
    return view('inicio');
});

Route::get('informacion', function () {
    return view('inicio');
});

Route::get('informacionacademica', function () {
    return view('inicio');
});

Route::get('documentos', function () {
    return view('inicio');
});

Route::get('observacion', function () {
    return view('inicio');
});

Route::get('solicitudes', function () {
    return view('inicio');
});

Route::post('/', 'App\Http\Controllers\LoginController@index')->name('inicio');

Route::post('menu', 'App\Http\Controllers\MenuController@index')->name('menu');