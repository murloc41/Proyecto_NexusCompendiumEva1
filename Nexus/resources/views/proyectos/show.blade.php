@extends('layouts.app')

@section('title', 'Detalle del Proyecto - Nexus Compendium')

@section('content')
<div class="container">
    <div class="project-header">
        <div class="breadcrumb">
            <a href="/proyectos">Proyectos</a> / <span>Proyecto #{{ $id }}</span>
        </div>
        <h1>Proyecto de Salud Comunitaria</h1>
        <div class="project-status">
            <span class="status status-active">Activo</span>
        </div>
    </div>

    <div class="project-content">
        <div class="main-info">
            <div class="info-card">
                <h2>Descripción del Proyecto</h2>
                <p>Este proyecto tiene como objetivo implementar un programa integral de salud preventiva en comunidades rurales de la región. El enfoque principal es mejorar el acceso a servicios de salud básicos y promover hábitos saludables entre la población.</p>
                
                <h3>Objetivos Principales</h3>
                <ul>
                    <li>Establecer puntos de atención básica en salud</li>
                    <li>Capacitar a promotores de salud comunitarios</li>
                    <li>Implementar programas de educación nutricional</li>
                    <li>Desarrollar campañas de prevención de enfermedades</li>
                </ul>
            </div>

            <div class="info-card">
                <h2>Progreso del Proyecto</h2>
                <div class="progress-container">
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 65%"></div>
                    </div>
                    <span class="progress-text">65% Completado</span>
                </div>

                <div class="milestones">
                    <div class="milestone completed">
                        <span class="milestone-icon">✓</span>
                        <span>Diagnóstico comunitario</span>
                    </div>
                    <div class="milestone completed">
                        <span class="milestone-icon">✓</span>
                        <span>Capacitación de promotores</span>
                    </div>
                    <div class="milestone active">
                        <span class="milestone-icon">◐</span>
                        <span>Implementación de servicios</span>
                    </div>
                    <div class="milestone pending">
                        <span class="milestone-icon">○</span>
                        <span>Evaluación de resultados</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar-info">
            <div class="info-card">
                <h3>Información del Proyecto</h3>
                <div class="project-details">
                    <div class="detail-row">
                        <strong>ID del Proyecto:</strong>
                        <span>{{ $id }}</span>
                    </div>
                    <div class="detail-row">
                        <strong>Fecha de Inicio:</strong>
                        <span>15 de Marzo, 2025</span>
                    </div>
                    <div class="detail-row">
                        <strong>Fecha de Finalización:</strong>
                        <span>15 de Noviembre, 2025</span>
                    </div>
                    <div class="detail-row">
                        <strong>Responsable:</strong>
                        <span>Dr. María González</span>
                    </div>
                    <div class="detail-row">
                        <strong>Organización:</strong>
                        <span>Centro de Salud Rural</span>
                    </div>
                </div>
            </div>

            <div class="info-card">
                <h3>Equipo de Trabajo</h3>
                <div class="team-members">
                    <div class="member">
                        <div class="member-avatar">MG</div>
                        <div class="member-info">
                            <strong>María González</strong>
                            <span>Coordinadora</span>
                        </div>
                    </div>
                    <div class="member">
                        <div class="member-avatar">CL</div>
                        <div class="member-info">
                            <strong>Carlos López</strong>
                            <span>Estudiante VcM</span>
                        </div>
                    </div>
                    <div class="member">
                        <div class="member-avatar">AF</div>
                        <div class="member-info">
                            <strong>Ana Fernández</strong>
                            <span>Estudiante VcM</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="action-buttons">
                <button class="btn btn-primary">Editar Proyecto</button>
                <button class="btn btn-secondary">Generar Reporte</button>
            </div>
        </div>
    </div>
</div>


@endsection
