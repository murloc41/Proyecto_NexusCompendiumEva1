<!DOCTYPE html>
<html lang="es">

    <meta charset="UTF-8">
    <title>Pizarra de Proyectos | Nexus Compendium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">
 
  <?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
   

<body class="d-flex flex-column min-vh-100" >
   

    <!-- Nueva sección para mostrar usuarios registrados -->
    <div class="container mt-4" style="background: var(--verde-claro); padding: 2rem; border-radius: 10px; box-shadow: 0 4px 24px rgba(0,0,0,0.08);">
        <h3 style="font-weight:700; color:var(--azul-oscuro); margin-bottom:1.2rem;">👥 Usuarios Registrados</h3>
        <div class="row g-4 flex-column">
            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 d-flex">
                <div class="card fade-in h-100 w-100 shadow-sm" style="background: var(--verde-claro); border-radius: 16px;">
                    <div class="card-header d-flex align-items-center" style="font-weight:700; color:var(--azul-oscuro); font-size:1.2rem;">
                        <span class="badge bg-primary me-2" style="font-size:1rem;">#<?php echo e($usuario['id']); ?></span>
                        <?php echo e($usuario['nombre']); ?>

                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <p class="mb-1"><strong>Email:</strong> <span style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis;max-width:140px;display:inline-block;"><?php echo e($usuario['email']); ?></span></p>
                            <p class="mb-1"><strong>RUT:</strong> <?php echo e($usuario['rut']); ?></p>
                            <p class="mb-1"><strong>Teléfono:</strong> <?php echo e($usuario['telefono']); ?></p>
                            <p class="mb-1"><strong>Rol:</strong> <span class="badge bg-secondary"><?php echo e(ucfirst($usuario['rol'])); ?></span></p>
                            <p class="mb-1"><strong>Instituto:</strong> <span class="badge bg-light text-dark border"><?php echo e(ucfirst($usuario['instituto'])); ?></span></p>
                            <p class="mb-1"><strong>Carrera:</strong> <?php echo e($usuario['carrera']); ?></p>
                            <p class="mb-1"><strong>Año Ingreso:</strong> <?php echo e($usuario['ano_ingreso']); ?></p>
                            <p class="mb-1"><strong>Activo:</strong>
                                <?php if($usuario['activo']): ?>
                                    <span class="badge bg-success">Sí</span>
                                <?php else: ?>
                                    <span class="badge bg-danger">No</span>
                                <?php endif; ?>
                            </p>
                            <p class="mb-1"><strong>Notif.:</strong>
                                <?php if($usuario['notificaciones']): ?>
                                    <span class="badge bg-info text-dark">Sí</span>
                                <?php else: ?>
                                    <span class="badge bg-secondary">No</span>
                                <?php endif; ?>
                            </p>
                            <p class="mb-1"><strong>Especialidades:</strong>
                                <?php $__currentLoopData = $usuario['especialidades']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $esp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="badge bg-primary"><?php echo e(ucfirst(str_replace('_', ' ', $esp))); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </p>
                            <p class="mb-0"><strong>Biografía:</strong>
                                <span style="display:inline-block;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;max-width:170px;" title="<?php echo e($usuario['biografia']); ?>">
                                    <?php echo e($usuario['biografia']); ?>

                                </span>
                            </p>
                        </div>
                        <div class="mt-3 d-flex justify-content-end">
                            <a href="<?php echo e(url('/usuarios/' . $usuario['id'] . '/editar')); ?>" class="btn btn-success btn-sm me-2">Editar</a>
                            <a href="<?php echo e(url('/usuarios/' . $usuario['id'])); ?>" class="btn btn-primary btn-sm">Ver</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="d-flex justify-content-end mb-3">
            <a href="<?php echo e(url('/crear_usuarios')); ?>" class="btn btn-success">
                <span style="font-size:1.2rem;">＋</span> Nuevo Usuario
            </a>
        </div>
    </div>

    <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\NexusCompendium\resources\views/usuarios.blade.php ENDPATH**/ ?>