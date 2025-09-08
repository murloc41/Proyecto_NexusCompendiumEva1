<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Poblar roles en la base de datos
     */
    public function run(): void
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'Administrador',
                'description' => 'Usuario administrador del sistema con acceso completo'
            ],
            [
                'id' => 2,
                'name' => 'Coordinador',
                'description' => 'Coordinador académico del instituto'
            ],
            [
                'id' => 3,
                'name' => 'Docente',
                'description' => 'Profesor o docente del instituto'
            ],
            [
                'id' => 4,
                'name' => 'Tutor',
                'description' => 'Tutor académico de estudiantes'
            ],
            [
                'id' => 5,
                'name' => 'Estudiante',
                'description' => 'Estudiante del instituto'
            ]
        ];

        foreach ($roles as $roleData) {
            Role::updateOrCreate(['id' => $roleData['id']], $roleData);
        }
    }
}
