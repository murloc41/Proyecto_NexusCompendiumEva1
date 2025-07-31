<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nexus Compendium | Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    @include('components.header')

    <main style="background-color: var(--verde-claro); border: 2px solid #222; border-radius: 18px; box-sizing: border-box;">
        <section class="content-section text-center py-4">
            <div class="card fade-in shadow-sm mx-auto mb-4">
                <div class="card-body text-center py-4">
                    <img src="{{ asset('imagenes/logo.png') }}" alt="Nexus Compendium Logo" class="logo-image mb-2" style="width:300px;height:300px;">
                    <h1 class="logo-text" style="color: var(--azul-oscuro); font-size: 2.5rem; font-weight:700;">Nexus Compendium</h1>
                    <p class="mt-2 mb-3" style="font-size: 1.25rem; color: var(--gris-medio); max-width:600px; margin:auto;">
                        <span style="font-weight:600; color:var(--azul-claro);">Nexus Compendium</span> es tu tablero digital para organizar, visualizar y colaborar en proyectos universitarios. 
                        <br>
                        <span style="color:var(--azul-oscuro);">Docentes y alumnos</span> pueden gestionar sus trabajos, compartir avances y conectar con otros equipos en una plataforma moderna y fácil de usar.
                    </p>
                </div>
            </div>

            <!-- Estadísticas rápidas -->
            <div class="row justify-content-center g-4 mb-4">
                <div class="col-12 col-md-4 d-flex">
                    <div class="card fade-in h-100 w-100">
                        <div class="card-body text-center">
                            <img src="{{ asset('imagenes/proyecto.png') }}" alt="Proyectos" class="card-img-large mb-2">
                            <h4 class="mb-0" style="color:var(--azul-claro);font-weight:700;">128</h4>
                            <small class="text-muted">Proyectos activos</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex">
                    <div class="card fade-in h-100 w-100">
                        <div class="card-body text-center">
                            <img src="{{ asset('imagenes/usuarios.png') }}" alt="Usuarios" class="card-img-large mb-2">
                            <h4 class="mb-0" style="color:var(--verde-brillante);font-weight:700;">54</h4>
                            <small class="text-muted">Docentes</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex">
                    <div class="card fade-in h-100 w-100">
                        <div class="card-body text-center">
                            <img src="{{ asset('imagenes/alumnos.png') }}" alt="Alumnos" class="card-img-large mb-2">
                            <h4 class="mb-0" style="color:var(--azul-oscuro);font-weight:700;">320</h4>
                            <small class="text-muted">Alumnos</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Breve descripción visual -->
            <div class="mb-5">
                <div class="card fade-in shadow-sm mx-auto w-100" style="max-width:100%;">
                    <div class="card-body py-4 text-center">
                        <h5 style="color:var(--azul-claro);font-weight:700;">¿Qué es Nexus Compendium?</h5>
                        <p style="color:var(--gris-medio);font-size:1.1rem;">
                            Es una plataforma tipo <span style="color:var(--azul-oscuro);font-weight:600;">board</span> donde puedes ordenar y organizar tus trabajos y proyectos universitarios, 
                            asignar tareas, visualizar el avance y colaborar con tu equipo. 
                            <br>
                            ¡Ideal para docentes y alumnos que buscan eficiencia y claridad en la gestión académica!
                        </p>
                        <img src="{{ asset('imagenes/board_demo.png') }}" alt="Demo Board"
                             class="card-img-large mt-2"
                             style="width:100%;max-width:600px;display:block;margin:auto;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.08);">
                    </div>
                </div>
            </div>

            <!-- Acciones principales -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 mb-3 d-flex">
                    <div class="card fade-in h-100 w-100">
                        <div class="card-header text-center">Explora Proyectos</div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <p>Consulta los proyectos universitarios activos y finalizados.</p>
                            <a href="{{ url('/proyectos') }}" class="btn btn-primary mt-auto">Ver proyectos</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3 d-flex">
                    <div class="card fade-in h-100 w-100">
                        <div class="card-header text-center">Crea tu Proyecto</div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <p>Inicia un nuevo proyecto y colabora con tu equipo.</p>
                            <a href="{{ url('/proyectos/crear') }}" class="btn btn-success mt-auto">Crear proyecto</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
