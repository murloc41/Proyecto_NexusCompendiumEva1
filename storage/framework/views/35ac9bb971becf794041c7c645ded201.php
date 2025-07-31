<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Proyecto | Nexus Compendium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">
</head>
<body>
    <?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('components.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main>
        <section class="content-section">
            <h2 class="mb-3 text-center">Crear Nuevo Proyecto</h2>
            <p class="mb-4 text-center" style="color: var(--gris-medio);">
                Completa el siguiente formulario para registrar un nuevo proyecto universitario.
            </p>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card fade-in">
                        <div class="card-header">Datos del Proyecto</div>
                        <div class="card-body">
                            <form method="POST" action="<?php echo e(url('/proyectos')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="nombre" class="form-label">Nombre del Proyecto</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                                <div class="form-group">
                                    <label for="descripcion" class="form-label">Descripción</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="instituto" class="form-label">Instituto</label>
                                    <input type="text" class="form-control" id="instituto" name="instituto" required>
                                </div>
                                <div class="form-group">
                                    <label for="integrantes" class="form-label">Integrantes</label>
                                    <input type="text" class="form-control" id="integrantes" name="integrantes" placeholder="Separados por coma" required>
                                </div>
                                <div class="form-group">
                                    <label for="fecha" class="form-label">Fecha de inicio</label>
                                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                                </div>
                                <button type="submit" class="btn btn-success w-100 mt-3">Registrar Proyecto</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script><?php /**PATH C:\laragon\www\NexusCompendium\resources\views/crear.blade.php ENDPATH**/ ?>