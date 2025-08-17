<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('reporte_informes', function (Blueprint $table) {
        $table->id();
        $table->string('titulo'); // título del informe
        $table->text('descripcion')->nullable(); // descripción del informe
        $table->date('fecha'); // fecha del informe
        $table->unsignedBigInteger('usuario_id'); // si se relaciona con usuarios
        $table->timestamps(); // fechas de creación y actualización
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reporte_informes');
    }
};
