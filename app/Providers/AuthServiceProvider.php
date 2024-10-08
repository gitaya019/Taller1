<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Filament\Facades\Filament;
use App\Policies\CategoriaPolicy;
use App\Policies\ProductoPolicy;
use App\Models\Categoria;
use App\Models\Producto;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Producto::class => ProductoPolicy::class,
        Categoria::class => CategoriaPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
