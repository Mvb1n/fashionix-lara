<?php

namespace Webkul\CustomTheme\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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

        Blade::anonymousComponentPath(
            resource_path('themes/custom-theme/views/components'),
            'shop'
        );

        Blade::anonymousComponentPath(
            __DIR__ . '/../Resources/views/components',
            'custom-theme'
        );
    }
}
