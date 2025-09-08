<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Listeners de eventos para la aplicación.
     * @var array<class-string, array<int, class-string>>  // Evento => [Listeners]
     */
    protected $listen = [
        // 'App\\Events\\SomeEvent' => [
        //     'App\\Listeners\\SomeListener',
        // ],
    ];

    /**
     * Registrar eventos para la aplicación.
     * @return void  // No retorna valor
     */
    public function boot()
    {
        // Aquí puedes registrar listeners personalizados si es necesario.
    }
}