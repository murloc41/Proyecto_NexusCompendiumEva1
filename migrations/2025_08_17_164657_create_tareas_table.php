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
    Schema::create('tareas', function (Blueprint $table) {
        $table->id();
        $table->string('titulo'); // título de la tarea
        $table->text('descripcion')->nullable(); // descripción de la tarea
        $table->date('fecha_entrega'); // fecha límite
        $table->boolean('completada')->default(false); // estado de la tarea
        $table->unsignedBigInteger('usuario_id'); // si se relaciona con usuarios
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
