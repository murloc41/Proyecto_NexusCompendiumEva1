<<<<<<< HEAD
<?php

namespace App\Models;

class Project
{
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'status',
        'start_date',
        'end_date',
    ];

    public $id;
    public $title;
    public $description;
    public $user_id;
    public $status;
    public $start_date;
    public $end_date;
    public $created_at;
    public $updated_at;

    public function __construct($attributes = [])
    {
        foreach ($attributes as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
        
        if (!isset($this->created_at)) {
            $this->created_at = date('Y-m-d H:i:s');
        }
        if (!isset($this->updated_at)) {
            $this->updated_at = date('Y-m-d H:i:s');
        }
        if (!isset($this->status)) {
            $this->status = 'active';
        }
    }

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
}
=======
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'proyectos';

    protected $fillable = [
        'user_id',
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
        return $this->belongsTo(\App\Models\User::class, 'user_id');
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
>>>>>>> origin/CAMBIOS_CRUD_PROYECTOS_CESAR_FRANK
