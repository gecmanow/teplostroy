<?php

namespace App\Providers;

use App\Models\App;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
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
        $app = App::all()->first();
        $categories = Category::with('services')->get();

        View::share('app', $app);
        View::share('categories', $categories);
    }
}
