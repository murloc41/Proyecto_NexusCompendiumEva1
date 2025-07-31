<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión | Nexus Compendium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">
</head>
<?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<body>
    <main class="d-flex align-items-center justify-content-center" style="min-height: 100vh; background-color: var(--verde-claro);">
        <div class="w-100" style="max-width: 400px;">
            <div class="text-center mb-4">
                <h1 class="logo-text" style="color: var(--azul-oscuro); font-size: 2.2rem;">Nexus Compendium</h1>
            </div>
            <div class="card shadow fade-in" style="background-color: var(--verde-claro);">
                <div class="card-header text-center">
                    <h2 class="mb-0">Iniciar Sesión</h2>
                </div>
                <div class="card-body" style="background-color: var(--verde-claro);">
                    <form>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Entrar</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small>¿No tienes cuenta? <a href="#">Regístrate</a></small>
                </div>
            </div>
        </div>
    </main>
</body>
<?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</html><?php /**PATH C:\laragon\www\NexusCompendium\resources\views/login.blade.php ENDPATH**/ ?>