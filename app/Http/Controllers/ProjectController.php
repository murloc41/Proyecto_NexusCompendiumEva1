<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
<<<<<<< HEAD
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Muestra un listado de los recursos.
=======
    /**
     * Display a listing of the resource.
>>>>>>> origin/Integracion_ia_eduardo
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
<<<<<<< HEAD
     * Muestra el formulario para crear un nuevo recurso.
=======
     * Show the form for creating a new resource.
>>>>>>> origin/Integracion_ia_eduardo
     */
    public function create()
    {
        $institutes = \App\Models\Institute::all();
        $areas = \App\Models\AreaAcademica::all();
        $estados = \App\Models\EstadoProyecto::all();
        return view('proyectos.create', compact('institutes', 'areas', 'estados'));
    }

    /**
<<<<<<< HEAD
     * Almacena un nuevo recurso Proyecto en la base de datos.
     *
     * Valida los datos del formulario, asocia el proyecto al usuario autenticado
     * y redirige con mensaje de éxito.
=======
     * Store a newly created resource in storage.
>>>>>>> origin/Integracion_ia_eduardo
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
<<<<<<< HEAD
    $validated['user_id'] = auth()->id();
    Project::create($validated);
    return redirect()->route('proyectos.index')->with('success', 'Proyecto creado correctamente.');
    }

    /**
     * Muestra el recurso especificado.
=======
        Project::create($validated);
        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado correctamente.');
    }

    /**
     * Display the specified resource.
>>>>>>> origin/Integracion_ia_eduardo
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('proyectos.show', compact('project'));
    }

    /**
<<<<<<< HEAD
     * Muestra el formulario para editar el recurso especificado.
=======
     * Show the form for editing the specified resource.
>>>>>>> origin/Integracion_ia_eduardo
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
<<<<<<< HEAD
     * Actualiza el recurso especificado en almacenamiento.
=======
     * Update the specified resource in storage.
>>>>>>> origin/Integracion_ia_eduardo
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
<<<<<<< HEAD
        if ($project->user_id !== auth()->id()) {
            abort(403, 'No autorizado');
        }
        $project->update($validated);
        return redirect()->route('proyectos.show', $project->id)->with('success', 'Proyecto actualizado correctamente.');
    }

    /**
     * Elimina el recurso especificado del almacenamiento.
=======
        $project->update($validated);
        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
>>>>>>> origin/Integracion_ia_eduardo
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
<<<<<<< HEAD
        if ($project->user_id !== auth()->id()) {
            abort(403, 'No autorizado');
        }
=======
>>>>>>> origin/Integracion_ia_eduardo
        $project->delete();
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado correctamente.');
    }
}
