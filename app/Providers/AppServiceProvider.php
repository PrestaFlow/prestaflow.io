<?php

namespace App\Providers;

use App\Support\GitHub;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $this->registerSharedViewVariables();
    }

    private function registerSharedViewVariables(): void
    {
        View::share('libraryGitHubVersion', app()->environment('production')
            ? GitHub::library()->latestVersion()
            : 'dev'
        );
        View::share('appGitHubVersion', app()->environment('production')
            ? GitHub::app()->latestVersion()
            : 'dev'
        );
        View::share('githubLink', 'https://github.com/PrestaFlow');
    }
}
