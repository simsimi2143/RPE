<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('biblioteca', function () {
    return view('biblioteca');
});

Route::get('notas', function () {
    return view('notasParciales');
});

Route::get('cuenta', function () {
    return view('cuentaCorriente');
});

Route::get('notap', function () {
    return view('notaP');
});

Route::get('home', function () {
    return view('home');
});

Route::get('asistente', function () {
    return view('horasAsistente');
});

Route::get('certificado', function () {
    return view('certificadoA');
});

Route::get('recuperar', function () {
    return view('recuperarC');
});

Route::get('cambiar', function () {
    return view('cambiarC');
});

Route::get('informacion', function () {
    return view('informacionP');
});

Route::get('informacionacademica', function () {
    return view('informacionA');
});

Route::get('documentos', function () {
    return view('documentos');
});

Route::get('observacion', function () {
    return view('obsFichaAcademica');
});

Route::get('solicitudes', function () {
    return view('solicitudesEstudiantes');
});