@extends('layouts.app')

@section('title', 'Usuarios - Nexus Compendium')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>👥 Gestión de Usuarios</h1>
        <p class="subtitle">Administra los usuarios del sistema Nexus Compendium</p>
    </div>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <div class="actions-bar">
        <a href="/usuarios/crear" class="btn btn-primary">+ Crear Nuevo Usuario</a>
    </div>

    <div class="users-grid">
        <div class="user-card">
            <h3>Dr. María González</h3>
            <p class="user-role">Coordinadora de Vinculación</p>
            <div class="user-meta">
                <span class="badge">Activo</span>
                <span class="badge">Admin</span>
            </div>
        </div>

        <div class="user-card">
            <h3>Ing. Carlos Rodríguez</h3>
            <p class="user-role">Director de Proyectos</p>
            <div class="user-meta">
                <span class="badge">Activo</span>
                <span class="badge">Gestor</span>
            </div>
        </div>

        <div class="user-card">
            <h3>Psic. Ana Morales</h3>
            <p class="user-role">Coordinadora Social</p>
            <div class="user-meta">
                <span class="badge">Activo</span>
                <span class="badge">Colaborador</span>
            </div>
        </div>
    </div>
</div>


@endsection
