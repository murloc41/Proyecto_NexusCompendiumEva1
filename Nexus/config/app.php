<?php

return [
    'app' => [
        'name' => 'Sistema de Gestión de Proyectos IPSS',
        'env' => 'local',
        'debug' => true,
        'url' => 'http://localhost',
        'timezone' => 'America/Santiago',
        'locale' => 'es',
        'fallback_locale' => 'en',
        'faker_locale' => 'es_ES',
        'key' => 'base64:SGVsbG9Xb3JsZEZha2VLZXlGb3JUZXN0aW5n',
        'cipher' => 'AES-256-CBC',
    ],

    'database' => [
        'default' => 'mysql',
        'connections' => [
            'mysql' => [
                'driver' => 'mysql',
                'host' => '127.0.0.1',
                'port' => '3306',
                'database' => 'ipss_projects',
                'username' => 'root',
                'password' => '',
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
                'prefix' => '',
                'strict' => true,
                'engine' => null,
            ],
        ],
    ],

    'roles' => [
        1 => 'Administrador',
        2 => 'Coordinador', 
        3 => 'Docente',
        4 => 'Tutor',
        5 => 'Estudiante',
    ],

    'project_status' => [
        'active' => 'Activo',
        'completed' => 'Completado',
        'suspended' => 'Suspendido',
        'cancelled' => 'Cancelado',
    ],
];
