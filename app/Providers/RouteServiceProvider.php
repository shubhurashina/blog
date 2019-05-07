<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));


        Route::middleware('web')
             ->namespace($this->namespace.'\Dashboard')
             ->group(base_path('routes/route_dashboard.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\Address')
             ->group(base_path('routes/route_address.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\Contact')
             ->group(base_path('routes/route_contact.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\Service')
             ->group(base_path('routes/route_service.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\AboutUs')
             ->group(base_path('routes/route_about.php'));

        Route::middleware('web')
             ->namespace($this->namespace.'\Menu')
             ->group(base_path('routes/route_menu.php'));

         Route::middleware('web')
             ->namespace($this->namespace.'\Gallery')
             ->group(base_path('routes/route_gallery.php'));


    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
