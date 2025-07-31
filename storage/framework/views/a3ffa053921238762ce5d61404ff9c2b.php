<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Nexus Compendium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">
</head>
<body >
    <!-- Header -->
    <?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
   
    <!-- Contenido principal -->
    <main style="background-color: var(--verde-claro);">
        <section class="content-section">
            <h2 class="mb-3">Bienvenido al Dashboard</h2>
            <p class="mb-4">Aquí puedes gestionar tus proyectos, ver estadísticas y acceder a las principales funciones del sistema.</p>
            
            <!-- Filtros rápidos -->
            <div class="row mb-4">
                <div class="col-md-6 mb-2">
                    <input type="text" class="form-control" placeholder="🔍 Buscar proyectos, usuarios o tareas...">
                </div>
                <div class="col-md-6 mb-2 d-flex justify-content-end">
                    <a href="<?php echo e(url('/usuarios')); ?>" class="btn btn-outline-primary me-2">👥 Usuarios</a>
                    <a href="<?php echo e(url('/dashboard/configuracion')); ?>" class="btn btn-outline-secondary">⚙️ Configuración</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 d-flex">
                    <div class="card fade-in h-100 w-100">
                        <div class="card-header text-center">Proyectos Activos</div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h3 class="mb-2">5</h3>
                            <p>Proyectos en curso actualmente.</p>
                            <a href="<?php echo e(url('/proyectos')); ?>" class="btn btn-primary mt-auto">Ver proyectos</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="card fade-in h-100 w-100">
                        <div class="card-header text-center">Crear Nuevo Proyecto</div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h3 class="mb-2"><i class="bi bi-plus-circle"></i></h3>
                            <p>Inicia un nuevo proyecto universitario.</p>
                            <a href="<?php echo e(url('/proyectos/crear')); ?>" class="btn btn-success mt-auto">Crear</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="card fade-in h-100 w-100">
                        <div class="card-header text-center">Estadísticas</div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h3 class="mb-2">12</h3>
                            <p>Proyectos finalizados este año.</p>
                            <a href="#" class="btn btn-secondary mt-auto">Ver detalles</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resumen de tareas y ayuda -->
            <div class="row mt-4">
                <div class="col-md-6 mb-3 d-flex">
                    <div class="card h-100 w-100">
                        <div class="card-header text-center">Tareas Pendientes</div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">✔️ Revisar avances del proyecto "Red Social Académica"</li>
                                <li class="list-group-item">✔️ Asignar tareas a nuevos integrantes</li>
                                <li class="list-group-item">✔️ Actualizar estado de proyecto "EcoVincula"</li>
                            </ul>
                            <a href="<?php echo e(url('/proyectos')); ?>" class="btn btn-outline-success mt-3">Ver todas las tareas</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3 d-flex">
                    <div class="card h-100 w-100">
                        <div class="card-header text-center">Ayuda y Recursos</div>
                        <div class="card-body">
                            <p>¿Necesitas ayuda? Consulta la guía rápida o contacta soporte.</p>
                            <a href="<?php echo e(url('/ayuda')); ?>" class="btn btn-outline-info">Guía rápida</a>
                            <a href="mailto:soporte@nexuscompendium.com" class="btn btn-link">Contactar soporte</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>
<?php /**PATH C:\laragon\www\NexusCompendium\resources\views/dashboard.blade.php ENDPATH**/ ?>