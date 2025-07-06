<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use LivewireUI\Modal\LivewireModalServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(LivewireModalServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
