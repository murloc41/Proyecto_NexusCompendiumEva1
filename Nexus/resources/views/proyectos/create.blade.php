
@extends('layouts.app')

@section('title', 'Crear Proyecto - Nexus Compendium')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Crear Nuevo Proyecto</h1>
        <p class="subtitle">Completa la información para registrar un nuevo proyecto de VcM</p>
    </div>

    <div class="form-container">
        <form class="project-form" action="/proyectos" method="POST">
            <div class="form-section">
                <h2>Información Básica</h2>
                
                <div class="form-group">
                    <label for="titulo" class="form-label">Título del Proyecto *</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" required 
                           placeholder="Ingresa el título del proyecto">
                </div>

                <div class="form-group">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="4"
                              placeholder="Describe los objetivos y alcance del proyecto"></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
                        <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="fecha_fin" class="form-label">Fecha de Finalización</label>
                        <input type="date" id="fecha_fin" name="fecha_fin" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h2>Información de Contacto</h2>
                
                <div class="form-group">
                    <label for="responsable" class="form-label">Responsable del Proyecto</label>
                    <input type="text" id="responsable" name="responsable" class="form-control"
                           placeholder="Nombre del responsable">
                </div>

                <div class="form-group">
                    <label for="organizacion" class="form-label">Organización Externa</label>
                    <input type="text" id="organizacion" name="organizacion" class="form-control"
                           placeholder="Nombre de la organización colaboradora">
                </div>
            </div>

            <div class="form-actions">
                <a href="/proyectos" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Crear Proyecto</button>
            </div>
        </form>
    </div>
</div>


@endsection
