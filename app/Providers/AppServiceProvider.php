<?php

namespace App\Providers;

use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('financeiro', function(User $user){
            if($user->permissions->find(1)){
                return true;
            }

        });

        Gate::define('admin', function(User $user){
            if($user->permissions->find(4)){
                return true;
            }

        });
    }
}
