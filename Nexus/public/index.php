<?php

// Punto de entrada principal del sistema Nexus Compendium
// Compatible con Laravel Artisan y servidores web

// DEBUG: Log todas las peticiones
file_put_contents(__DIR__ . '/debug.log', date('Y-m-d H:i:s') . " - REQUEST: " . $_SERVER['REQUEST_METHOD'] . " " . $_SERVER['REQUEST_URI'] . "\n", FILE_APPEND);

// Función para mostrar página de error 404
function show404() {
    http_response_code(404);
    return '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página no encontrada - Nexus Compendium</title>
        <style>
            body { font-family: Arial, sans-serif; text-align: center; padding: 50px; background: #f8f9fa; }
            .error-container { max-width: 600px; margin: 0 auto; background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
            h1 { color: #1A1B41; font-size: 3rem; margin-bottom: 20px; }
            p { color: #666; font-size: 1.2rem; margin-bottom: 30px; }
            a { background: #6290C3; color: white; padding: 12px 24px; text-decoration: none; border-radius: 6px; }
            a:hover { background: #1A1B41; }
        </style>
    </head>
    <body>
        <div class="error-container">
            <h1>404</h1>
            <p>Lo sentimos, la página que buscas no existe.</p>
            <p>URI solicitada: <code>' . htmlspecialchars($_SERVER['REQUEST_URI']) . '</code></p>
            <a href="/">🏠 Volver a Bienvenidos</a>
        </div>
    </body>
    </html>';
}

// Verificar si es una petición del servidor de desarrollo
if (php_sapi_name() === 'cli-server') {
    $uri = $_SERVER['REQUEST_URI'];
    $path = parse_url($uri, PHP_URL_PATH);
    
    // Servir archivos estáticos directamente
    if ($path !== '/' && file_exists(__DIR__ . $path)) {
        return false;
    }
}

require_once __DIR__ . '/../routes/web.php';

// Obtener la página solicitada desde parámetro GET o PATH_INFO
$page = '';

// Verificar si hay parámetro GET
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    // Obtener de PATH_INFO o REQUEST_URI
    $uri = $_SERVER['REQUEST_URI'];
    $scriptName = $_SERVER['SCRIPT_NAME'];
    $basePath = dirname($scriptName);
    
    if ($basePath !== '/' && strpos($uri, $basePath) === 0) {
        $uri = substr($uri, strlen($basePath));
    }
    
    $uri = strtok($uri, '?');
    $uri = trim($uri, '/');
    
    if ($uri === '' || $uri === 'index.php') {
        $page = '';
    } else {
        $page = $uri;
    }
}

// DEBUG: Log de la página solicitada
file_put_contents(__DIR__ . '/debug.log', date('Y-m-d H:i:s') . " - PAGE: '$page' from URI: " . $_SERVER['REQUEST_URI'] . "\n", FILE_APPEND);

// Definir las páginas disponibles según rúbrica
$pages = [
    '' => 'welcome',
    'bienvenidos' => 'welcome',
    'proyectos' => 'proyectos.index',
    'proyectos/crear' => 'proyectos.create',
    'dashboard' => 'dashboard.dashboard',
    'usuarios' => 'usuarios.index',
    'institutos' => 'institutos.index',
    'reportes' => 'reportes.index',
    'login' => 'auth.login',
    'registro' => 'auth.registro',
];

// Manejo de formulario de login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $page === 'login') {
    file_put_contents(__DIR__ . '/debug.log', date('Y-m-d H:i:s') . " - LOGIN ATTEMPT: " . $_POST['email'] . "\n", FILE_APPEND);
    
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Simulación de autenticación (en un proyecto real usarías base de datos)
    if ($email === 'NexusC@ipss.cl' && $password === '123456') {
        // Login exitoso - redirigir al dashboard
        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = 'Administrador';
        
        file_put_contents(__DIR__ . '/debug.log', date('Y-m-d H:i:s') . " - LOGIN SUCCESS: $email\n", FILE_APPEND);
        header('Location: /dashboard');
        exit();
    } else {
        // Login fallido
        file_put_contents(__DIR__ . '/debug.log', date('Y-m-d H:i:s') . " - LOGIN FAILED: $email\n", FILE_APPEND);
        $loginError = 'Credenciales incorrectas. Usa: NexusC@ipss.cl / 123456';
    }
}

// Procesar la página solicitada
try {
    file_put_contents(__DIR__ . '/debug.log', date('Y-m-d H:i:s') . " - PROCESSING: '$page'\n", FILE_APPEND);
    
    if (isset($pages[$page])) {
        $viewName = $pages[$page];
        file_put_contents(__DIR__ . '/debug.log', date('Y-m-d H:i:s') . " - LOADING VIEW: '$viewName'\n", FILE_APPEND);
        
        // Pasar error de login si existe
        if ($page === 'login' && isset($loginError)) {
            echo view($viewName, ['error' => $loginError]);
        } else {
            echo view($viewName);
        }
    } elseif (preg_match('/^proyectos\/(\d+)$/', $page, $matches)) {
        // Ruta dinámica para proyectos/{id}
        $projectId = $matches[1];
        file_put_contents(__DIR__ . '/debug.log', date('Y-m-d H:i:s') . " - LOADING PROJECT VIEW: ID=$projectId\n", FILE_APPEND);
        echo view('proyectos.show', ['id' => $projectId]);
    } else {
        file_put_contents(__DIR__ . '/debug.log', date('Y-m-d H:i:s') . " - PAGE NOT FOUND: '$page'\n", FILE_APPEND);
        echo show404();
    }
} catch (Exception $e) {
    // Manejo de errores
    http_response_code(500);
    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error - Nexus Compendium</title>
        <style>
            body { font-family: Arial, sans-serif; text-align: center; padding: 50px; background: #f8f9fa; }
            .error-container { max-width: 600px; margin: 0 auto; background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
            h1 { color: #dc3545; font-size: 2.5rem; margin-bottom: 20px; }
            p { color: #666; margin-bottom: 20px; }
            .error-details { background: #f8f9fa; padding: 20px; border-radius: 6px; text-align: left; margin: 20px 0; }
            a { background: #6290C3; color: white; padding: 12px 24px; text-decoration: none; border-radius: 6px; }
        </style>
    </head>
    <body>
        <div class="error-container">
            <h1>Error interno del servidor</h1>
            <p>Se produjo un error al procesar la solicitud.</p>
            <div class="error-details">
                <strong>Detalle del error:</strong><br>
                ' . htmlspecialchars($e->getMessage()) . '
            </div>
            <a href="/">🏠 Volver a Bienvenidos</a>
        </div>
    </body>
    </html>';
}
