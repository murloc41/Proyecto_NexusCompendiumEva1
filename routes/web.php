

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
