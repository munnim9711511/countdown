<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Gate::define('admin_role', function (User $user) {
            $isinrole = $user->roles()->where('name','Admin')->first();
           // dd($isinrole);
            if ($isinrole !== null) {
                return true;
            }
            else{
                return false;
            }

        });
    }
}
