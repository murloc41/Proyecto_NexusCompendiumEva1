<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Institute;
use App\Models\AreaAcademica;
use App\Models\EstadoProyecto;

/**
 * Modelo Eloquent para proyectos.
 */
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
        return $this->belongsTo(User::class, 'user_id');
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

    /**
     * Relación con instituto
     */
    public function instituto()
    {
        return $this->belongsTo(Institute::class, 'institute_id');
    }

    /**
     * Relación con área académica
     */
    public function areaAcademica()
    {
        return $this->belongsTo(AreaAcademica::class, 'area_academica_id');
    }

    /**
     * Relación con estado del proyecto
     */
    public function estado()
    {
        return $this->belongsTo(EstadoProyecto::class, 'estado_id');
    }
}
