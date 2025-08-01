@extends('layouts.app')

@section('title', 'Proyectos - Nexus Compendium')

@section('content')
<div class="container">

  <link rel="stylesheet" href="css/styles.css">
   
    <!-- ...otros metadatos... -->

    <div class="page-header">
        <h1>Gestión de Proyectos</h1>
        <p class="subtitle">Administra todos los proyectos de Vinculación con el Medio</p>
    </div>

    <div class="actions-bar">
        <a href="/proyectos/crear" class="btn btn-primary">+ Crear Nuevo Proyecto</a>
    </div>

    <div class="projects-grid">
        <div class="project-card">
            <h3>Proyecto de Salud Comunitaria</h3>
            <p class="project-description">Implementación de programa de salud preventiva en comunidades rurales</p>
            <div class="project-meta">
                <span class="status status-active">Activo</span>
                <span class="date">Inicio: 15/03/2025</span>
            </div>
            <div class="project-actions">
                <a href="/proyectos/1" class="btn btn-secondary">Ver Detalles</a>
            </div>
        </div>

        <div class="project-card">
            <h3>Capacitación Digital</h3>
            <p class="project-description">Programa de alfabetización digital para adultos mayores</p>
            <div class="project-meta">
                <span class="status status-planning">En Planificación</span>
                <span class="date">Inicio: 01/04/2025</span>
            </div>
            <div class="project-actions">
                <a href="/proyectos/2" class="btn btn-secondary">Ver Detalles</a>
            </div>
        </div>

        <div class="project-card">
            <h3>Apoyo Nutricional Escolar</h3>
            <p class="project-description">Evaluación nutricional y educación alimentaria en escuelas vulnerables</p>
            <div class="project-meta">
                <span class="status status-completed">Completado</span>
                <span class="date">Finalizado: 20/12/2024</span>
            </div>
            <div class="project-actions">
                <a href="/proyectos/3" class="btn btn-secondary">Ver Detalles</a>
            </div>
        </div>
    </div>
</div>


@endsection
