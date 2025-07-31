<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pizarra de Proyectos | Nexus Compendium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
 
</head>
<body>
    @include('components.header')
   

    <main style="background-color: var(--verde-claro);">
        <section class="content-section">
            <h2 class="mb-3 text-center">Pizarra de Proyectos Activos</h2>
            <p class="mb-4 text-center" style="color: var(--gris-medio);">
                Arrastra los proyectos entre columnas para actualizar su estado.
            </p>
            <!-- Kanban Board -->
            <div class="kanban-board" style="background-color: var(--verde-claro);">
                <!-- Columna Pendiente -->
                <div class="kanban-column"  style="background-color: var(--verde-claro);">
                    <h3>Pendiente</h3>
                    <div id="pendiente" class="kanban-list">
                        <!-- Cards de proyectos pendientes aquí -->
                        <div class="kanban-card" data-id="3">
                            <strong>Red Social Académica</strong>
                            <div><small>Comunicación</small></div>
                            <div><small>Integrantes: Carlos, Sofía</small></div>
                            <div><small>Inicio: 2025-05-20</small></div>
                            <div class="kanban-actions">
                                <a href="{{ url('/proyectos/3') }}" class="btn btn-primary btn-sm">Ver</a>
                                <a href="{{ url('/proyectos/3/editar') }}" class="btn btn-success btn-sm">Actualizar</a>
                            </div>
                        </div>
                        <!-- ...más cards... -->
                    </div>
                </div>
                <!-- Columna En progreso -->
                <div class="kanban-column"  style="background-color: var(--verde-claro);">
                    <h3>En progreso</h3>
                    <div id="progreso" class="kanban-list">
                        <!-- Cards de proyectos en progreso aquí -->
                        <div class="kanban-card" data-id="1"  style="background-color: var(--verde-claro);">
                            <strong>Plataforma de Gestión</strong>
                            <div><small>Ingeniería</small></div>
                            <div><small>Integrantes: Juan, Ana, Luis</small></div>
                            <div><small>Inicio: 2025-07-01</small></div>
                            <div class="kanban-actions">
                                <a href="{{ url('/proyectos/1') }}" class="btn btn-primary btn-sm">Ver</a>
                                <a href="{{ url('/proyectos/1/editar') }}" class="btn btn-success btn-sm">Actualizar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Columna Finalizado -->
                <div class="kanban-column"  style="background-color: var(--verde-claro);">
                    <h3>Finalizado</h3>
                    <div id="finalizado" class="kanban-list">
                        <!-- Cards de proyectos finalizados aquí -->
                        <div class="kanban-card" data-id="2"  style="background-color: var(--verde-claro);">
                            <strong>App de Biblioteca</strong>
                            <div><small>Informática</small></div>
                            <div><small>Integrantes: María, Pedro</small></div>
                            <div><small>Inicio: 2025-06-15</small></div>
                            <div class="kanban-actions">
                                <a href="{{ url('/proyectos/2') }}" class="btn btn-primary btn-sm">Ver</a>
                                <a href="{{ url('/proyectos/2/editar') }}" class="btn btn-success btn-sm">Actualizar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SortableJS para drag & drop -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
    <script>
        // Inicializa SortableJS en cada columna
        new Sortable(document.getElementById('pendiente'), {
            group: 'proyectos',
            animation: 150
        });
        new Sortable(document.getElementById('progreso'), {
            group: 'proyectos',
            animation: 150
        });
        new Sortable(document.getElementById('finalizado'), {
            group: 'proyectos',
            animation: 150
        });
    </script>
</body>
</html>