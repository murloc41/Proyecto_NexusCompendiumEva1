<<<<<<< HEAD

<?php

require_once __DIR__ . '/../../bootstrap.php';
require_once __DIR__ . '/../../app/Factories/UserFactory.php';
require_once __DIR__ . '/RoleSeeder.php';

use App\Factories\UserFactory;

class DatabaseSeeder
{
    /**
     * Poblar la base de datos con datos iniciales
     */
    public function run(): void
    {
        echo "=== SEEDERS IPSS - POBLANDO BASE DE DATOS ===\n\n";
        
        // 1. Ejecutar RoleSeeder
        echo "1. CREANDO ROLES DEL SISTEMA:\n";
        echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
        $roleSeeder = new RoleSeeder();
        $roleSeeder->run();
        
        echo "\n2. CREANDO USUARIOS DE PRUEBA:\n";
        echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
        
        $userFactory = new UserFactory();
        
        // Crear usuarios administrativos
        $admin = $userFactory->admin()->make();
        echo "👨‍💼 Administrador: {$admin->name} ({$admin->email})\n";
        
        $coordinator = $userFactory->coordinator()->make();
        echo "👥 Coordinador: {$coordinator->name} ({$coordinator->email})\n";
        
        // Crear docentes
        $teachers = $userFactory->teacher()->count(3);
        foreach ($teachers as $index => $teacher) {
            echo "👨‍🏫 Docente " . ($index + 1) . ": {$teacher->name} ({$teacher->email})\n";
        }
        
        // Crear tutores
        $tutors = $userFactory->tutor()->count(2);
        foreach ($tutors as $index => $tutor) {
            echo "🎓 Tutor " . ($index + 1) . ": {$tutor->name} ({$tutor->email})\n";
        }
        
        // Crear estudiantes
        $students = $userFactory->student()->count(10);
        foreach ($students as $index => $student) {
            echo "👨‍🎓 Estudiante " . ($index + 1) . ": {$student->name} ({$student->email})\n";
        }
        
        $totalUsers = 1 + 1 + 3 + 2 + 10; // Total de usuarios creados
        
        echo "\n3. RESUMEN DE POBLACIÓN DE DATOS:\n";
        echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
        echo "✅ Roles creados: 5\n";
        echo "✅ Usuarios creados: {$totalUsers}\n";
        echo "✅ Correos @ipss.cl: 100%\n";
        echo "✅ Sistema poblado exitosamente\n\n";
        
        echo "═══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════\n";
        echo "                                    🎉 BASE DE DATOS IPSS POBLADA EXITOSAMENTE 🎉\n";
        echo "═══════════════════════════════════════════════════════════════════════════════════════════════════════════════════════════\n";
    }

    /**
     * Ejecutar una clase seeder específica
     */
    private function call(string $seederClass): void
    {
        $seeder = new $seederClass();
        $seeder->run();
    }
}
=======
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Usuarios básicos
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@nexuscompendium.cl',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // Tipos de actores
        $tiposActor = [
            ['nombre' => 'Municipalidad', 'icono' => 'bi-building', 'color' => '#0A2342'],
            ['nombre' => 'Empresa', 'icono' => 'bi-briefcase', 'color' => '#DC3545'],
            ['nombre' => 'Organización sin fines de lucro', 'icono' => 'bi-heart', 'color' => '#3E5902'],
            ['nombre' => 'Centro de Salud', 'icono' => 'bi-hospital', 'color' => '#4C86A8'],
            ['nombre' => 'Centro Educativo', 'icono' => 'bi-book', 'color' => '#D9A852'],
            ['nombre' => 'Centro Comunitario', 'icono' => 'bi-people', 'color' => '#3E5902'],
        ];
        
        foreach ($tiposActor as $tipo) {
            DB::table('tipos_actor')->insert([
                'nombre' => $tipo['nombre'],
                'icono' => $tipo['icono'],
                'color' => $tipo['color'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        // Regiones
        $regiones = [
            'Metropolitana', 'Valparaíso', 'Biobío', 'Maule', 'O\'Higgins', 
            'Coquimbo', 'La Araucanía', 'Los Lagos', 'Antofagasta', 'Atacama',
            'Tarapacá', 'Arica y Parinacota', 'Los Ríos', 'Aysén', 'Magallanes'
        ];
        
        foreach ($regiones as $region) {
            DB::table('regiones')->insert([
                'nombre' => $region,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        // Áreas académicas
        $areasAcademicas = [
            'Informática', 'Administración', 'Contabilidad', 'Marketing', 
            'Diseño', 'Turismo', 'Salud', 'Ingeniería', 'Educación'
        ];
        
        foreach ($areasAcademicas as $area) {
            DB::table('areas_academicas')->insert([
                'nombre' => $area,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        // Estados de proyecto
        $estadosProyecto = [
            ['nombre' => 'Activo', 'color' => '#3E5902'],
            ['nombre' => 'En Planificación', 'color' => '#D9A852'],
            ['nombre' => 'Completado', 'color' => '#6B7280'],
            ['nombre' => 'Archivado', 'color' => '#4C86A8'],
        ];
        
        foreach ($estadosProyecto as $estado) {
            DB::table('estados_proyecto')->insert([
                'nombre' => $estado['nombre'],
                'color' => $estado['color'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        // Áreas de interés
        $areasInteres = [
            'Desarrollo Local', 'Gobierno Digital', 'Servicios Comunitarios',
            'Salud Pública', 'Educación', 'Medio Ambiente', 'Tecnología',
            'Innovación Social', 'Cultura', 'Deporte'
        ];
        
        foreach ($areasInteres as $area) {
            DB::table('areas_interes')->insert([
                'nombre' => $area,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        // Roles de equipo
        $rolesEquipo = [
            'Líder de proyecto', 'Desarrollador', 'Analista', 'Diseñador', 
            'Tester', 'Documentador', 'Investigador'
        ];
        
        foreach ($rolesEquipo as $rol) {
            DB::table('roles_equipo')->insert([
                'nombre' => $rol,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        // Tipos de actividad
        $tiposActividad = [
            ['nombre' => 'Creación de proyecto', 'icono' => 'bi-plus-circle', 'color' => '#0A2342'],
            ['nombre' => 'Actualización de proyecto', 'icono' => 'bi-pencil', 'color' => '#4C86A8'],
            ['nombre' => 'Proyecto completado', 'icono' => 'bi-check-circle', 'color' => '#3E5902'],
            ['nombre' => 'Nuevo contacto', 'icono' => 'bi-person-plus', 'color' => '#4C86A8'],
            ['nombre' => 'Comentario', 'icono' => 'bi-chat-dots', 'color' => '#6B7280'],
            ['nombre' => 'Documento añadido', 'icono' => 'bi-file-earmark-plus', 'color' => '#0A2342'],
        ];
        
        foreach ($tiposActividad as $tipo) {
            DB::table('tipo_actividad')->insert([
                'nombre' => $tipo['nombre'],
                'icono' => $tipo['icono'],
                'color' => $tipo['color'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        // Tipos de documento
        $tiposDocumento = [
            ['nombre' => 'Informe', 'icono' => 'bi-file-earmark-text'],
            ['nombre' => 'Presentación', 'icono' => 'bi-file-earmark-slides'],
            ['nombre' => 'Contrato', 'icono' => 'bi-file-earmark-ruled'],
            ['nombre' => 'Imagen', 'icono' => 'bi-file-earmark-image'],
            ['nombre' => 'Video', 'icono' => 'bi-file-earmark-play'],
            ['nombre' => 'Otro', 'icono' => 'bi-file-earmark'],
        ];
        
        foreach ($tiposDocumento as $tipo) {
            DB::table('tipo_documento')->insert([
                'nombre' => $tipo['nombre'],
                'icono' => $tipo['icono'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
>>>>>>> origin/CAMBIOS_CRUD_PROYECTOS_CESAR_FRANK
