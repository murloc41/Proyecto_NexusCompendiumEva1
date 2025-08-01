@extends('layouts.app')

@section('title', 'Bienvenido - Nexus Compendium')

@section('content')
<div class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Bienvenido a Nexus Compendium</h1>
            <p class="hero-subtitle">Plataforma integral para la gestión de proyectos de Vinculación con el Medio</p>
            <div class="hero-buttons">
                <a href="/proyectos" class="btn btn-primary">Ver Proyectos</a>
                <a href="/dashboard" class="btn btn-secondary">Ir al Dashboard</a>
            </div>
        </div>
    </div>
</div>

<div class="features-section">
    <div class="container">
        <h2>Características Principales</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h3>Gestión de Proyectos</h3>
                <p>Administra todos los proyectos de vinculación con el medio de manera eficiente</p>
            </div>
            <div class="feature-card">
                <h3>Colaboración</h3>
                <p>Facilita la colaboración entre estudiantes, docentes y organizaciones externas</p>
            </div>
            <div class="feature-card">
                <h3>Seguimiento</h3>
                <p>Monitorea el progreso y resultados de cada proyecto en tiempo real</p>
            </div>
        </div>
    </div>
</div>
@endsection
