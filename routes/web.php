<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/proyectos', function () {
    return view('proyectos');
});

Route::get('/crear', function () {
    return view('crear');
});

Route::get('/institutos', function ($id) {
    return view('institutos');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/crear_usuarios', function () {
    return view('crear_usuarios');
});
Route::get('/usuarios', function () {
    $data = [
        'usuarios' => [
            [
                'id' => 1,
                'nombre' => 'Juan Pérez',
                'email' => 'juan.perez@email.com',
                'rut' => '12.345.678-9',
                'telefono' => '+56 9 1234 5678',
                'rol' => 'estudiante',
                'instituto' => 'ipss',
                'carrera' => 'Trabajo Social',
                'ano_ingreso' => 2023,
                'activo' => true,
                'notificaciones' => true,
                'especialidades' => ['salud', 'educacion'],
                'biografia' => 'Estudiante motivado por el trabajo comunitario.',
            ],
            [
                'id' => 2,
                'nombre' => 'María González',
                'email' => 'maria.gonzalez@email.com',
                'rut' => '98.765.432-1',
                'telefono' => '+56 9 8765 4321',
                'rol' => 'docente',
                'instituto' => 'ipss',
                'carrera' => 'Enfermería',
                'ano_ingreso' => 2021,
                'activo' => true,
                'notificaciones' => false,
                'especialidades' => ['salud', 'medio_ambiente'],
                'biografia' => 'Docente con experiencia en salud comunitaria.',
            ],
            [
                'id' => 3,
                'nombre' => 'Carlos Soto',
                'email' => 'carlos.soto@email.com',
                'rut' => '11.223.344-5',
                'telefono' => '+56 9 1122 3344',
                'rol' => 'coordinador',
                'instituto' => 'municipalidad',
                'carrera' => 'Departamento Social',
                'ano_ingreso' => 2020,
                'activo' => false,
                'notificaciones' => true,
                'especialidades' => ['desarrollo_social', 'emprendimiento'],
                'biografia' => 'Coordinador de proyectos sociales en la municipalidad.',
            ],
            [
                'id' => 4,
                'nombre' => 'Ana Torres',
                'email' => 'ana.torres@email.com',
                'rut' => '15.678.910-2',
                'telefono' => '+56 9 5678 9102',
                'rol' => 'organizacion',
                'instituto' => 'fundacion',
                'carrera' => 'Fundación Social',
                'ano_ingreso' => 2022,
                'activo' => true,
                'notificaciones' => true,
                'especialidades' => ['medio_ambiente', 'educacion'],
                'biografia' => 'Representante de fundación dedicada al medio ambiente.',
            ],
            [
                'id' => 5,
                'nombre' => 'Luis Ramírez',
                'email' => 'luis.ramirez@email.com',
                'rut' => '22.333.444-5',
                'telefono' => '+56 9 2233 3444',
                'rol' => 'admin',
                'instituto' => 'ipss',
                'carrera' => 'Administrador',
                'ano_ingreso' => 2020,
                'activo' => true,
                'notificaciones' => false,
                'especialidades' => ['tecnologia', 'emprendimiento'],
                'biografia' => 'Administrador de la plataforma Nexus Compendium.',
            ],
            [
                'id' => 6,
                'nombre' => 'Sofía Rojas',
                'email' => 'sofia.rojas@email.com',
                'rut' => '33.444.555-6',
                'telefono' => '+56 9 3344 4555',
                'rol' => 'estudiante',
                'instituto' => 'ipss',
                'carrera' => 'Enfermería',
                'ano_ingreso' => 2024,
                'activo' => true,
                'notificaciones' => true,
                'especialidades' => ['salud', 'desarrollo_social'],
                'biografia' => 'Estudiante interesada en salud y desarrollo social.',
            ],
            [
                'id' => 7,
                'nombre' => 'Pedro Castillo',
                'email' => 'pedro.castillo@email.com',
                'rut' => '44.555.666-7',
                'telefono' => '+56 9 4455 5666',
                'rol' => 'docente',
                'instituto' => 'ipss',
                'carrera' => 'Trabajo Social',
                'ano_ingreso' => 2022,
                'activo' => false,
                'notificaciones' => false,
                'especialidades' => ['educacion', 'emprendimiento'],
                'biografia' => 'Docente enfocado en educación y emprendimiento.',
            ],
            [
                'id' => 8,
                'nombre' => 'Gloria Fuentes',
                'email' => 'gloria.fuentes@email.com',
                'rut' => '55.666.777-8',
                'telefono' => '+56 9 5566 6777',
                'rol' => 'organizacion',
                'instituto' => 'empresa',
                'carrera' => 'Empresa Privada',
                'ano_ingreso' => 2023,
                'activo' => true,
                'notificaciones' => true,
                'especialidades' => ['tecnologia', 'medio_ambiente'],
                'biografia' => 'Representante de empresa privada en proyectos tecnológicos.',
            ],
            [
                'id' => 9,
                'nombre' => 'Ricardo Díaz',
                'email' => 'ricardo.diaz@email.com',
                'rut' => '66.777.888-9',
                'telefono' => '+56 9 6677 7888',
                'rol' => 'coordinador',
                'instituto' => 'municipalidad',
                'carrera' => 'Departamento Social',
                'ano_ingreso' => 2021,
                'activo' => true,
                'notificaciones' => false,
                'especialidades' => ['desarrollo_social', 'educacion'],
                'biografia' => 'Coordinador de proyectos educativos municipales.',
            ],
            [
                'id' => 10,
                'nombre' => 'Valentina Herrera',
                'email' => 'valentina.herrera@email.com',
                'rut' => '77.888.999-0',
                'telefono' => '+56 9 7788 8999',
                'rol' => 'estudiante',
                'instituto' => 'ipss',
                'carrera' => 'Trabajo Social',
                'ano_ingreso' => 2025,
                'activo' => true,
                'notificaciones' => true,
                'especialidades' => ['salud', 'tecnologia'],
                'biografia' => 'Estudiante apasionada por la tecnología social.',
            ],
        ]
    ];
    return view('usuarios', $data);
});
