<?php

namespace App\Providers;

use App\Models\Film;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function($view) {
            $view->with(['items' => Film::orderBy('created_at', 'desc')->limit(8)->get()]);
        });
    }
}
