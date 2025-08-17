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
    Schema::create('notificaciones', function (Blueprint $table) {
        $table->id();
        $table->string('titulo'); // título de la notificación
        $table->text('contenido'); // cuerpo del mensaje
        $table->boolean('leido')->default(false); // estado de lectura
        $table->unsignedBigInteger('usuario_id'); // si se relaciona con usuarios
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificaciones');
    }
};
