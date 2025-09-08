<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Espacio de nombres de los controladores para la aplicación.
     * @var string|null  // Namespace de controladores
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Definir rutas para la aplicación.
     * @return void  // No retorna valor
     */
    public function boot()
    {
    // Aquí puedes registrar lógica de rutas personalizada si es necesario.
    }

    public function map()
    {
        // Aquí puedes registrar rutas personalizadas si es necesario.
    }
}