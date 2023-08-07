<?php

namespace Developcreativo\Permissions;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;
use Developcreativo\Permissions\Http\Middleware\Authorize;
use Illuminate\Support\Collection;
use Illuminate\Filesystem\Filesystem;
class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Filesystem $filesystem)
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'permissions');

        $this->app->booted(function () {
            $this->routes();
        });

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../database/seeds/2023_08_07_090647_group_permission.php' => database_path('seeds/2023_08_07_090647_group_permission.php'),
            ], 'develop-migrations');

            $this->publishes([
                __DIR__ . '/../database/seeds/RolesAndPermissionsSeeder.php' => database_path('seeds/RolesAndPermissionsSeeder.php'),
            ], 'develop-seeds');

        }

        Nova::serving(function (ServingNova $event) {
            //
        });
    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova', Authorize::class])
                ->prefix('nova-vendor/permissions')
                ->group(__DIR__.'/../routes/api.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
