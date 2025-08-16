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
     * Muestra un listado de los recursos.
     */
    public function index(Request $request)
    {
        $query = Project::query();

        // Búsqueda por nombre
        if ($request->filled('q')) {
            $query->where('nombre', 'like', '%' . $request->q . '%');
        }

        // Filtrar por estado
        if ($request->filled('estado')) {
            $query->where('estado_id', $request->estado);
        }

        // Filtrar por área académica
        if ($request->filled('area')) {
            $query->where('area_academica_id', $request->area);
        }

        // Filtrar por periodo (ejemplo: año y mes de inicio)
        if ($request->filled('periodo')) {
            $periodo = $request->periodo; // formato YYYY-MM
            $query->where('fecha_inicio', 'like', $periodo . '%');
        }

        $projects = $query->get();

        // Estadísticas
        $total = Project::count();
        $activos = Project::where('estado_id', 1)->count(); // Ajusta el ID según tu base
        $planificacion = Project::where('estado_id', 3)->count(); // Si tienes estado "Planificación"
        $completados = Project::where('estado_id', 2)->count(); // Ajusta el ID según tu base

        return view('proyectos.index', compact('projects', 'total', 'activos', 'planificacion', 'completados')); // <-- Cambia 'projects.index' por 'proyectos.index'
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        $institutes = \App\Models\Institute::all();
        $areas = \App\Models\AreaAcademica::all();
        $estados = \App\Models\EstadoProyecto::all();
        return view('proyectos.create', compact('institutes', 'areas', 'estados'));
    }

    /**
     * Almacena un nuevo recurso Proyecto en la base de datos.
     *
     * Valida los datos del formulario, asocia el proyecto al usuario autenticado
     * y redirige con mensaje de éxito.
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
     * Muestra el recurso especificado.
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('proyectos.show', compact('project'));
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
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
     * Actualiza el recurso especificado en almacenamiento.
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
        if ($project->user_id !== auth()->id()) {
            abort(403, 'No autorizado');
        }
        $project->update($validated);
        return redirect()->route('proyectos.show', $project->id)->with('success', 'Proyecto actualizado correctamente.');
    }

    /**
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        if ($project->user_id !== auth()->id()) {
            abort(403, 'No autorizado');
        }
        $project->delete();
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado correctamente.');
    }
}
