<?php

namespace App\Models;

/**
 * Modelo simple para roles de usuario.
 */
class Role
{
    protected $fillable = [
        'name',
        'description',
    ];

    public $id;
    public $name;
    public $description;
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
    }

    /**
     * Devuelve los usuarios con este rol (simulado).
     */
    public function users()
    {
        // Relación simulada con usuarios
        return [];
    }

    /**
     * Devuelve los roles predefinidos del sistema.
     */
    public static function getDefaultRoles()
    {
        return [
            1 => (object)['id' => 1, 'name' => 'Administrador', 'description' => 'Usuario administrador del sistema'],
            2 => (object)['id' => 2, 'name' => 'Coordinador', 'description' => 'Coordinador académico'],
            3 => (object)['id' => 3, 'name' => 'Docente', 'description' => 'Profesor o docente'],
            4 => (object)['id' => 4, 'name' => 'Tutor', 'description' => 'Tutor de estudiantes'],
            5 => (object)['id' => 5, 'name' => 'Estudiante', 'description' => 'Estudiante del instituto'],
        ];
    }
}
