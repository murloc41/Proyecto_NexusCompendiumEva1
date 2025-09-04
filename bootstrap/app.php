<?php

/*
|--------------------------------------------------------------------------
| Crear la Aplicación
|--------------------------------------------------------------------------
|
| Lo primero que haremos es crear una nueva instancia de la aplicación Laravel
| que sirve como "pegamento" para todos los componentes de Laravel, y es
| el contenedor IoC del sistema que une todas las partes.
|
*/

// Bootstrap de aplicación para Nexus Compendium
require_once __DIR__ . '/../bootstrap.php';

echo "Nexus Compendium - Laravel Application Bootstrap\n";
echo "Instituto Profesional San Sebastián\n";
echo "Plataforma de Vinculación con el Medio\n";

/*
|--------------------------------------------------------------------------
| Configuración de Interfaces
|--------------------------------------------------------------------------
|
| Aquí configuramos las interfaces importantes del contenedor para que
| puedan ser resueltas cuando se necesiten. Los kernels sirven las
| solicitudes entrantes tanto desde web como CLI.
|
*/

// Configuración de la aplicación Nexus Compendium
$app = [
    'name' => 'Nexus Compendium',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost:8000',
    'timezone' => 'America/Santiago',
    'locale' => 'es',
    'fallback_locale' => 'en',
    'faker_locale' => 'es_ES',
    'key' => 'base64:nexus-compendium-key-for-ipss-development',
    'cipher' => 'AES-256-CBC'
];

/*
|--------------------------------------------------------------------------
| Retornar la Aplicación
|--------------------------------------------------------------------------
|
| Este script retorna la instancia de la aplicación. La instancia se da
| al script que la llama para separar la construcción de las instancias
| de la ejecución real de la aplicación y el envío de respuestas.
|
*/

return $app;
