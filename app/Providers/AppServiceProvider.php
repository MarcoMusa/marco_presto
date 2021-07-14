<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
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
    // CONDIVIDERANNO IN TUTTE LE VISTE LE CATEGORIE
    public function boot()
    {
        // SE ESISTE LO SHEMA CATEGORY
        if (Schema::hasTable('users')) {

            $categories = Category::all();
            View::share('categories', $categories);
        }
    }
}
