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

        $this->publishes([
            __DIR__.'/../database/migrations/2023_08_07_090647_group_permission.php.stub.stub' => $this->getMigrationFileName($filesystem),
        ], 'migrations');

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

    /**
     * Returns existing migration file if found, else uses the current timestamp.
     *
     * @param Filesystem $filesystem
     *
     * @return string
     */
    protected function getMigrationFileName(Filesystem $filesystem): string
    {
        $timestamp = date('Y_m_d_His');

        return Collection::make($this->app->databasePath().\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR)
            ->flatMap(function ($path) use ($filesystem) {
                return $filesystem->glob($path.'*_group_permission.php');
            })->push($this->app->databasePath()."/migrations/{$timestamp}_group_permission_table.php")
            ->first();
    }
}
