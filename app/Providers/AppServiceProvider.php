<?php

namespace App\Providers;

use App\Models\FooterLink;
use App\Models\MenuItem;
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
        View::share('menuItems', MenuItem::orderBy('order')->get());
        View::share('footerLinks', FooterLink::orderBy('order')->get());
    }
}
