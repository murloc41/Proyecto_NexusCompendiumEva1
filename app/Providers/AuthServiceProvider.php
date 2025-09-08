<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Políticas de mapeo para la aplicación.
     * @var array<class-string, class-string>  // Modelo => Política
     */
    protected $policies = [
        // 'App\\Models\\Model' => 'App\\Policies\\ModelPolicy',
    ];

    /**
     * Registrar servicios de autenticación/autorización.
     * @return void  // No retorna valor
     */
    public function boot()
    {
        // Aquí puedes registrar políticas o gates personalizados si es necesario.
    }
}