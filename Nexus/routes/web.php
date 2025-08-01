
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
        
        // Compilar y renderizar la vista Blade
        $content = file_get_contents($viewPath);
        
        // Reemplazar variables en el contenido
        foreach ($data as $key => $value) {
            $content = str_replace('{{ $' . $key . ' }}', htmlspecialchars($value), $content);
            $content = str_replace('{!! $' . $key . ' !!}', $value, $content);
        }
        
        // Procesar @extends
        if (preg_match('/@extends\([\'"](.+?)[\'"]\)/', $content, $matches)) {
            $layoutName = $matches[1];
            $layoutPath = __DIR__ . '/../resources/views/' . str_replace('.', '/', $layoutName) . '.blade.php';
            
            if (file_exists($layoutPath)) {
                $layout = file_get_contents($layoutPath);
                
                // Extraer todas las secciones
                $sections = [];
                
                // Extraer section content
                if (preg_match('/@section\([\'"]content[\'"]\)(.*?)@endsection/s', $content, $contentMatches)) {
                    $sections['content'] = trim($contentMatches[1]);
                }
                
                // Extraer section title
                if (preg_match('/@section\([\'"]title[\'"],\s*[\'"](.+?)[\'"]\)/', $content, $titleMatches)) {
                    $sections['title'] = $titleMatches[1];
                }
                
                // Reemplazar yields en el layout
                foreach ($sections as $sectionName => $sectionContent) {
                    if ($sectionName === 'title') {
                        $layout = str_replace("@yield('title', 'Nexus Compendium - IPSS')", $sectionContent, $layout);
                        $layout = str_replace("@yield('title')", $sectionContent, $layout);
                    } else {
                        $layout = str_replace("@yield('$sectionName')", $sectionContent, $layout);
                    }
                }
                
                $content = $layout;
            }
        }
        
        // Reemplazar variables
        foreach ($data as $key => $value) {
            $content = str_replace('{{ $' . $key . ' }}', $value, $content);
        }
        
        // Limpiar directivas Blade restantes
        $content = preg_replace('/@\w+\([^)]*\)/', '', $content);
        $content = preg_replace('/@\w+/', '', $content);
        
        return $content;
    }
}

// Ruta principal - Dashboard
Route::get('/', function () {
    return view('dashboard');
});

// Rutas para proyectos
Route::get('/proyectos', function () {
    return view('proyectos.index');
});

Route::get('/proyectos/crear', function () {
    return view('proyectos.create');
});

Route::get('/proyectos/{id}', function ($id) {
    return view('proyectos.show', ['id' => $id]);
});

// Rutas adicionales para el navbar
Route::get('/usuarios', function () {
    return view('usuarios.index');
});

Route::get('/usuarios/crear', function () {
    return view('usuarios.create');
});

Route::get('/institutos', function () {
    return view('dashboard'); // Por ahora redirige al dashboard
});

Route::get('/reportes', function () {
    return view('dashboard'); // Por ahora redirige al dashboard
});

// Rutas de autenticación
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/auth/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
