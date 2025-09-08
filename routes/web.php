<<<<<<< HEAD


<?php

require_once __DIR__ . '/../bootstrap.php';

use Illuminate\Support\Facades\Route;

// Función helper para URLs
if (!function_exists('url')) {
    function url($path = '') {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'];
        
        // Detectar si estamos en una subcarpeta
        $scriptName = $_SERVER['SCRIPT_NAME'];
        $basePath = dirname($scriptName);
        
        if ($basePath === '/' || $basePath === '\\') {
            $basePath = '';
        }
        
        // Limpiar y formatear la ruta
        $path = ltrim($path, '/');
        $fullPath = $basePath . ($path ? '/' . $path : '');
        
        return $protocol . '://' . $host . $fullPath;
    }
}

// Función helper mejorada para request()
if (!function_exists('request')) {
    function request() {
        return new class {
            public function is($pattern) {
                $uri = $_SERVER['REQUEST_URI'];
                
                // Limpiar la URI
                $scriptName = $_SERVER['SCRIPT_NAME'];
                $basePath = dirname($scriptName);
                if ($basePath !== '/' && strpos($uri, $basePath) === 0) {
                    $uri = substr($uri, strlen($basePath));
                }
                
                $uri = strtok($uri, '?');
                $uri = rtrim($uri, '/');
                if ($uri === '') {
                    $uri = '/';
                }
                
                // Comparar con el patrón
                if ($pattern === '/') {
                    return $uri === '/';
                }
                
                if (str_ends_with($pattern, '*')) {
                    $prefix = rtrim($pattern, '*');
                    return str_starts_with($uri, $prefix);
                }
                
                return $uri === $pattern;
            }
        };
    }
}

// Funciones helper de Laravel
if (!function_exists('view')) {
    function view($view, $data = []) {
        $viewPath = __DIR__ . '/../resources/views/' . str_replace('.', '/', $view) . '.blade.php';
        
        if (!file_exists($viewPath)) {
            throw new Exception("Vista no encontrada: {$view}");
        }
=======
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ChatGPTController;

// Ruta principal - Página de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Rutas para proyectos
Route::resource('proyectos', ProjectController::class)->middleware('auth');

// Rutas para actores de interés
Route::get('/actores', function () {
    return view('actores.index');
})->middleware('auth')->name('actores.index');

Route::get('/actores/crear', function () {
    return view('actores.create');
})->middleware('auth');

Route::get('/actores/{id}', function ($id) {
    return view('actores.show', ['id' => $id]);
})->middleware('auth');

Route::get('/actores/{id}/editar', function ($id) {
    return view('actores.edit', ['id' => $id]);
})->middleware('auth');

// POST para procesar formularios de actores
Route::post('/actores', function () {
    return redirect('/actores')->with('success', 'Actor creado exitosamente');
})->middleware('auth');

Route::put('/actores/{id}', function ($id) {
    return redirect('/actores')->with('success', 'Actor actualizado exitosamente');
})->middleware('auth');

// Rutas para reportes
Route::get('/reportes', function () {
    return view('reportes.index');
})->middleware('auth')->name('reportes.index');

Route::get('/reportes/generar', function () {
    return view('reportes.generar');
})->middleware('auth');

// Rutas para usuarios
Route::resource('usuarios', App\Http\Controllers\UsuarioController::class)->middleware('auth');

// Ruta de redirección temporal para menú 
Route::get('/institutos', function () {
    return redirect('/actores');
});

// Vista del asistente
Route::get('/chatgpt', function () {
    return view('components.chatgpt');
})->name('chatgpt.view')->middleware('auth');

// API para la petición a ChatGPT
Route::post('/chatgpt/ask', [ChatGPTController::class, 'askChatGPT'])->name('chatgpt.ask')->middleware('auth');

// Rutas adicionales para proyectos
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index')->middleware('auth');

// Importar rutas de Breeze (login, registro, verificación, etc.)
require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
>>>>>>> origin/Cambios__Sofia
