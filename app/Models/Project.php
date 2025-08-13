<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'proyectos';

    protected $fillable = [
        'nombre',
        'institute_id',
        'area_academica_id',
        'estado_id',
        'fecha_inicio',
        'fecha_fin',
        'responsable',
        'correo_responsable',
        'progreso',
        'descripcion_general',
        'funcionalidades_principales',
        'restricciones',
    ];

    /**
     * Obtener usuario propietario del proyecto
     */
    public function user()
    {
        // Relación con modelo User
        return (object)[
            'id' => $this->user_id,
            'name' => 'Usuario del Proyecto'
        ];
    }

    /**
     * Opciones de estado del proyecto
     */
    public static function getStatusOptions()
    {
        return [
            'active' => 'Activo',
            'completed' => 'Completado',
            'suspended' => 'Suspendido',
            'cancelled' => 'Cancelado',
        ];
    }

    // Relaciones (opcional, si quieres acceder a los datos relacionados)
    public function instituto()
    {
        return $this->belongsTo(\App\Models\Institute::class, 'institute_id');
    }

    public function areaAcademica()
    {
        return $this->belongsTo(\App\Models\AreaAcademica::class, 'area_academica_id');
    }

    public function estado()
    {
        return $this->belongsTo(\App\Models\EstadoProyecto::class, 'estado_id');
    }
}
