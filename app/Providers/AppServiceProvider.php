<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
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
        if (Schema::hasTable('categories')) {
            $categories = DB::table('categories')->get();
            view()->share('categories', $categories);
        }

        Gate::define('admin', function(User $user) {
            return $user->Role == "admin";
        });

        Gate::define('lecturer', function(User $user) {
            return $user->IsLecturer == 1;
        });
    }
}
