<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Muestra un listado de proyectos con filtros.
     */
    public function index(Request $request)
    {
        $query = Project::query();

        // Búsqueda por nombre
        if ($request->filled('q')) {
            $query->where('nombre', 'like', '%' . $request->q . '%');
        }

        // Filtro por estado
        if ($request->filled('estado')) {
            $query->where('estado_id', $request->estado);
        }

        // Filtro por área académica
        if ($request->filled('area')) {
            $query->where('area_academica_id', $request->area);
        }

        // Filtro por periodo (YYYY-MM)
        if ($request->filled('periodo')) {
            $periodo = $request->periodo;
            $query->where('fecha_inicio', 'like', $periodo . '%');
        }

        $projects = $query->get();

        // Estadísticas
        $total = Project::count();
        $activos = Project::where('estado_id', 1)->count();
        $planificacion = Project::where('estado_id', 3)->count();
        $completados = Project::where('estado_id', 2)->count();

        return view('proyectos.index', compact('projects', 'total', 'activos', 'planificacion', 'completados'));
    }

    /**
     * Guarda un nuevo proyecto.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:200',
            'institute_id' => 'required|integer',
            'area_academica_id' => 'required|integer',
            'estado_id' => 'required|integer',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'responsable' => 'required|string|max:100',
            'correo_responsable' => 'required|email|max:150',
            'progreso' => 'required|integer|min:0|max:100',
            'descripcion_general' => 'required|string',
            'funcionalidades_principales' => 'required|string',
            'restricciones' => 'nullable|string',
        ]);
        $validated['user_id'] = auth()->id();
        Project::create($validated);
        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado correctamente.');
    }

    /**
     * Muestra un proyecto específico.
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('proyectos.show', compact('project'));
    }

    /**
     * Muestra el formulario de edición de un proyecto.
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $institutes = \App\Models\Institute::all();
        $areas = \App\Models\AreaAcademica::all();
        $estados = \App\Models\EstadoProyecto::all();
        return view('proyectos.edit', compact('project', 'institutes', 'areas', 'estados'));
    }

    /**
     * Actualiza un proyecto existente.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:200',
            'institute_id' => 'required|integer',
            'area_academica_id' => 'required|integer',
            'estado_id' => 'required|integer',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'responsable' => 'required|string|max:100',
            'correo_responsable' => 'required|email|max:150',
            'progreso' => 'required|integer|min:0|max:100',
            'descripcion_general' => 'required|string',
            'funcionalidades_principales' => 'required|string',
            'restricciones' => 'nullable|string',
        ]);
        $project = Project::findOrFail($id);
        $project->update($validated);
        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado correctamente.');
    }

    /**
     * Elimina un proyecto.
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado correctamente.');
    }
}
