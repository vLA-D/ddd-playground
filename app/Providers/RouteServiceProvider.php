<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

/**
 * Class RouteServiceProvider
 * @package App\Providers
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapUsersRoutes();
        $this->mapAuthenticationRoutes();
    }

    /**
     * Define the "api" routes for the users domain.
     *
     * These routes are stateless.
     *
     * @return void
     */
    protected function mapUsersRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->group(base_path('app/Domain/Users/routes/api.php'));
    }

    /**
     * Define the "api" routes for the authentication domain.
     *
     * These routes are stateless.
     *
     * @return void
     */
    protected function mapAuthenticationRoutes()
    {
        Route::prefix('api/auth')
             ->middleware('api')
             ->group(base_path('app/Domain/Authentication/routes/api.php'));
    }
}
