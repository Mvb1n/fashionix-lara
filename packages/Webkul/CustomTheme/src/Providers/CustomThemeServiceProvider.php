<?php

namespace Webkul\CustomTheme\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CustomThemeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../Resources/views' => resource_path('themes/custom-theme/views'),
        ], 'custom-theme-views');

        // Register custom theme components
        $this->registerComponents();
    }

    /**
     * Register custom components.
     *
     * @return void
     */
    private function registerComponents(): void
    {
        // Register custom theme components with proper namespace
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'custom-theme');
    }
}
