<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        // Blade::if('admin', function() {
        //     return auth()->user()?->is_admin;
        // });

        // Custom Blade directive for admin
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()?->role === \App\Models\User::ROLE_ADMIN;
        });

        // You can add more directives like @educator similarly if needed.
        Blade::if('educator', function () {
            return auth()->check() && auth()->user()?->role === \App\Models\User::ROLE_EDUCATOR;
        });

        Blade::if('student', function () {
            return auth()->check() && auth()->user()?->role === \App\Models\User::ROLE_STUDENT;
        });
    }
}
