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


    public function boot()
    {
        // SE ESISTE LO SHEMA CATEGORY
        if (Schema::hasTable('categories')) {

            $categories = Category::all();
            View::share('categories', $categories);
        }
    }
}
