<?php

namespace App\Models;

/**
 * Modelo simple para institutos.
 */
class Institute
{
    protected $fillable = [
        'name',
        'description',
        'address',
        'phone',
        'email',
    ];

    public $id;
    public $name;
    public $description;
    public $address;
    public $phone;
    public $email;
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
     * Devuelve los usuarios del instituto (simulado).
     */
    public function users()
    {
        // Relación simulada con usuarios
        return [];
    }

    /**
     * Devuelve los proyectos del instituto (simulado).
     */

    public function projects()
    {
        // Relación simulada con proyectos
        return [];
    }
}
