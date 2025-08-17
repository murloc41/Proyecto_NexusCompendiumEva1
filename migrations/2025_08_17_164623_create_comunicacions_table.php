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
    Schema::create('comunicacions', function (Blueprint $table) {
        $table->id();
        $table->string('asunto'); // título del mensaje
        $table->text('mensaje');  // contenido del mensaje
        $table->unsignedBigInteger('usuario_id'); // si se relaciona con usuarios
        $table->timestamps(); // fecha de creación y actualización
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunicacions');
    }
};
