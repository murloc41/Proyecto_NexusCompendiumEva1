@extends('layouts.app')

@section('title', 'Reportes - Nexus Compendium')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>📈 Reportes y Estadísticas</h1>
        <p class="subtitle">Analiza el impacto y progreso de los proyectos de vinculación</p>
    </div>

    <div class="stats-overview">
        <div class="stat-card">
            <div class="stat-number">24</div>
            <div class="stat-label">Proyectos Activos</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">12</div>
            <div class="stat-label">Institutos Aliados</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">156</div>
            <div class="stat-label">Beneficiarios</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">89%</div>
            <div class="stat-label">Tasa de Éxito</div>
        </div>
    </div>

    <div class="reports-section">
        <h2>📊 Reportes Disponibles</h2>
        
        <div class="reports-grid">
            <div class="report-card">
                <h3>Reporte Mensual de Proyectos</h3>
                <p>Estado y progreso de todos los proyectos activos durante el mes.</p>
                <button class="btn btn-secondary">📄 Generar Reporte</button>
            </div>

            <div class="report-card">
                <h3>Análisis de Impacto Social</h3>
                <p>Métricas de impacto y beneficiarios alcanzados por proyecto.</p>
                <button class="btn btn-secondary">📊 Ver Análisis</button>
            </div>

            <div class="report-card">
                <h3>Reporte Financiero</h3>
                <p>Presupuesto ejecutado y recursos utilizados por instituto.</p>
                <button class="btn btn-secondary">💰 Ver Finanzas</button>
            </div>

            <div class="report-card">
                <h3>Evaluación de Alianzas</h3>
                <p>Rendimiento y colaboración de instituciones aliadas.</p>
                <button class="btn btn-secondary">🤝 Ver Evaluación</button>
            </div>
        </div>
    </div>
</div>

<style>
.stats-overview {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-bottom: 3rem;
}

.stat-card {
    background: white;
    border-radius: 8px;
    padding: 1.5rem;
    text-align: center;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    border-top: 4px solid var(--bright-green);
}

.stat-number {
    font-size: 2.5rem;
    font-weight: bold;
    color: var(--dark-blue);
    margin-bottom: 0.5rem;
}

.stat-label {
    color: #666;
    font-weight: 500;
}

.reports-section h2 {
    color: var(--dark-blue);
    margin-bottom: 1.5rem;
}

.reports-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 1.5rem;
}

.report-card {
    background: white;
    border-radius: 8px;
    padding: 1.5rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    border-left: 4px solid var(--bright-green);
}

.report-card h3 {
    margin: 0 0 0.5rem 0;
    color: var(--dark-blue);
}

.report-card p {
    color: #666;
    margin-bottom: 1.5rem;
    line-height: 1.5;
}

.btn.btn-secondary {
    background: var(--gray-light);
    color: var(--dark-blue);
    border: 1px solid #ddd;
}

.btn.btn-secondary:hover {
    background: var(--bright-green);
    border-color: var(--bright-green);
}
</style>
@endsection
