<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
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
        \Schema::defaultStringLength(191);

        Paginator::useBootstrap();

        $this->activeLinks();
    }

    public function  activeLinks() {
        View::composer('layouts.layout', function($view) {
            $view->with('mainLink', request()->is('/') ? 'menu-link__active' : '');
            $view->with('filmsLink', (request()->is('category/filmi') or  request()->is('filmi/*')) ? 'menu-link__active' : '');
            $view->with('serialsLink', (request()->is('category/seriali') or  request()->is('seriali/*')) ? 'menu-link__active' : '');
            $view->with('multsLink', (request()->is('category/multiki') or  request()->is('multiki/*')) ? 'menu-link__active' : '');
            $view->with('multserialsLink', (request()->is('category/multseriali') or  request()->is('multseriali/*')) ? 'menu-link__active' : '');
        });
    }
}
