<?php

namespace App\Providers;

use App\Models\FooterLink;
use App\Models\MenuItem;
use App\Models\Setting;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Throwable;

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
        View::composer('*', function ($view): void {
            try {
                DB::connection()->getPdo();

                if (Schema::hasTable('menu_items')) {
                    $view->with('menuItems', MenuItem::orderBy('order')->get());
                }

                if (Schema::hasTable('footer_links')) {
                    $view->with('footerLinks', FooterLink::orderBy('order')->get());
                }

                if (Schema::hasTable('settings')) {
                    $view->with('settings', Setting::pluck('value', 'key')->all());
                }
            } catch (Throwable) {
                $view->with('menuItems', collect());
                $view->with('footerLinks', collect());
                $view->with('settings', []);
            }

            if (! file_exists(public_path('storage')) && file_exists(storage_path('app/public'))) {
                (new Filesystem())->link(storage_path('app/public'), public_path('storage'));
            }
        });
    }
}
