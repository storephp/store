<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use StorePHP\Bundler\BundlesDirectory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        BundlesDirectory::setDirectoryPath(base_path('modules'));
    }
}
