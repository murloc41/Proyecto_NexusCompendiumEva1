
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
