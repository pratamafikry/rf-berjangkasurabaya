<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
        // Paginator::useBootstrap();
        Gate::define('admin', function(User $user){
            return $user->permission === 'admin';
        });
        Gate::define('driver', function(User $user){
            return $user->permission === 'driver';
        });
        Gate::define('superadmin', function(User $user){
            return $user->permission === 'superadmin';
        });
        Gate::define('user', function(User $user){
            return $user->permission ==='user';
        });
    }
}
