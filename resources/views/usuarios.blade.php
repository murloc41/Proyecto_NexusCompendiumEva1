<!DOCTYPE html>
<html lang="es">

    <meta charset="UTF-8">
    <title>Pizarra de Proyectos | Nexus Compendium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
 
  @include('components.header')
   

<body class="d-flex flex-column min-vh-100" >
   

    <!-- Nueva sección para mostrar usuarios registrados -->
    <div class="container mt-4" style="background: var(--verde-claro); padding: 2rem; border-radius: 10px; box-shadow: 0 4px 24px rgba(0,0,0,0.08);">
        <h3 style="font-weight:700; color:var(--azul-oscuro); margin-bottom:1.2rem;">👥 Usuarios Registrados</h3>
        <div class="row g-4 flex-column">
            @foreach($usuarios as $usuario)
            <div class="col-12 d-flex">
                <div class="card fade-in h-100 w-100 shadow-sm" style="background: var(--verde-claro); border-radius: 16px;">
                    <div class="card-header d-flex align-items-center" style="font-weight:700; color:var(--azul-oscuro); font-size:1.2rem;">
                        <span class="badge bg-primary me-2" style="font-size:1rem;">#{{ $usuario['id'] }}</span>
                        {{ $usuario['nombre'] }}
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <p class="mb-1"><strong>Email:</strong> <span style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis;max-width:140px;display:inline-block;">{{ $usuario['email'] }}</span></p>
                            <p class="mb-1"><strong>RUT:</strong> {{ $usuario['rut'] }}</p>
                            <p class="mb-1"><strong>Teléfono:</strong> {{ $usuario['telefono'] }}</p>
                            <p class="mb-1"><strong>Rol:</strong> <span class="badge bg-secondary">{{ ucfirst($usuario['rol']) }}</span></p>
                            <p class="mb-1"><strong>Instituto:</strong> <span class="badge bg-light text-dark border">{{ ucfirst($usuario['instituto']) }}</span></p>
                            <p class="mb-1"><strong>Carrera:</strong> {{ $usuario['carrera'] }}</p>
                            <p class="mb-1"><strong>Año Ingreso:</strong> {{ $usuario['ano_ingreso'] }}</p>
                            <p class="mb-1"><strong>Activo:</strong>
                                @if($usuario['activo'])
                                    <span class="badge bg-success">Sí</span>
                                @else
                                    <span class="badge bg-danger">No</span>
                                @endif
                            </p>
                            <p class="mb-1"><strong>Notif.:</strong>
                                @if($usuario['notificaciones'])
                                    <span class="badge bg-info text-dark">Sí</span>
                                @else
                                    <span class="badge bg-secondary">No</span>
                                @endif
                            </p>
                            <p class="mb-1"><strong>Especialidades:</strong>
                                @foreach($usuario['especialidades'] as $esp)
                                    <span class="badge bg-primary">{{ ucfirst(str_replace('_', ' ', $esp)) }}</span>
                                @endforeach
                            </p>
                            <p class="mb-0"><strong>Biografía:</strong>
                                <span style="display:inline-block;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;max-width:170px;" title="{{ $usuario['biografia'] }}">
                                    {{ $usuario['biografia'] }}
                                </span>
                            </p>
                        </div>
                        <div class="mt-3 d-flex justify-content-end">
                            <a href="{{ url('/usuarios/' . $usuario['id'] . '/editar') }}" class="btn btn-success btn-sm me-2">Editar</a>
                            <a href="{{ url('/usuarios/' . $usuario['id']) }}" class="btn btn-primary btn-sm">Ver</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ url('/crear_usuarios') }}" class="btn btn-success">
                <span style="font-size:1.2rem;">＋</span> Nuevo Usuario
            </a>
        </div>
    </div>

    @include('components.footer')
</body>
</html>
