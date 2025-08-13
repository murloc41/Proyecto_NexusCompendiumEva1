<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

// Ruta principal - Página de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Rutas para proyectos
Route::resource('proyectos', ProjectController::class);

// Rutas para actores de interés
Route::get('/actores', function () {
    return view('actores.index');
});

Route::get('/actores/crear', function () {
    return view('actores.create');
});

Route::get('/actores/{id}', function ($id) {
    return view('actores.show', ['id' => $id]);
});

Route::get('/actores/{id}/editar', function ($id) {
    return view('actores.edit', ['id' => $id]);
});

// POST para procesar formularios de actores
Route::post('/actores', function () {
    // Aquí iría el código para procesar la creación del actor
    return redirect('/actores')->with('success', 'Actor creado exitosamente');
});

Route::put('/actores/{id}', function ($id) {
    // Aquí iría el código para procesar la actualización del actor
    return redirect('/actores')->with('success', 'Actor actualizado exitosamente');
});

// Rutas para reportes
Route::get('/reportes', function () {
    return view('reportes.index');
});

Route::get('/reportes/generar', function () {
    return view('reportes.generar');
});

// Rutas para usuarios
Route::get('/usuarios', function () {
    return view('usuarios.index');
});

Route::get('/usuarios/crear', function () {
    return view('usuarios.create');
});

Route::get('/usuarios/{id}', function ($id) {
    return view('usuarios.show', ['id' => $id]);
});

// Rutas de autenticación
Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', function () {
    // Código para procesar el login
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Ruta de redirección temporal para menú 
Route::get('/institutos', function () {
    return redirect('/actores');
});



Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');